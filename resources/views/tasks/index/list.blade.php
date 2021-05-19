<div class="tab-content">
    <div class="tab-pane fade show active" id="tasks-active">
        <div class="row">

            @forelse($activeTasks as $activeTask)
            <div class="col-sm-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$activeTask->title}}</h5>
                        <p class="card-text">{{$activeTask->content}}
                    </div>
                </div>
            </div>
            @empty
            <div class="col-sm-12">
                Wszystkie zadania ukończone</div>
            @endforelse
        </div>
    </div>

    <div class="tab-pane fade" id="tasks-completed">
        <div class="row">

            @forelse($completedTasks as $completedTask)
            <div class="col-sm-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$completedTask->title}}</h5>
                        <p class="card-text">{{$completedTask->content}}
                    </div>
                </div>
            </div>
            @empty
            <div class="col-sm-12">
                Tu będą Twoje zakończone zadania</div>
            @endforelse
        </div>
    </div>
</div>