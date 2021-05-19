<?php

use App\Models\Task;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(Task::class, $faker->numberBetween(25, 50))->create();
    }
}
