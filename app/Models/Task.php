<?php

namespace App\Models;

use Illuminate\Support\Str;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected const AVAILABLE_STATUSES = [
        'Active' => 'active',
        'Completed' => 'completed'

    ];

    protected $fillable = [
        'title', 'slug', 'content', 'status'
    ];


    protected $attributes = [
        'content' => ' ',
        'status' => self::AVAILABLE_STATUSES['Active']
    ];

    public static function getStatus(string $key)
    {

        if (!array_key_exists($key, self::AVAILABLE_STATUSES)) {
            throw new InvalidArgumentException(
                sprintf('Status for key [%s] does not exist', $key)
            );
        }

        return self::AVAILABLE_STATUSES[$key];
    }

    public static function getAvailableStatuses(bool $keys = false)
    {

        return ($keys) ? array_keys(self::AVAILABLE_STATUSES) : array_values(self::AVAILABLE_STATUSES);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Task $task) {
            $task->slug = $task->title;
        });

        static::updating(function (Task $task) {
            $task->slug = $task->title;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute(string $slug)
    {
        $taskSlug = str::slug($slug);
        $similarSlugs = Task::select('slug')
            ->where('slug', 'LIKE', "$taskSlug%")
            ->get();
        if ($similarSlugs->isNotEmpty()) {
            $similarCount = $similarSlugs->count();
            $taskSlug = str::slug("{$taskSlug}-{$similarCount}");
        }
        $this->attributes['slug'] = str::slug($slug);
    }
}
