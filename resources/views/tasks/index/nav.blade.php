<nav class="d-flex w-100 justify-content-between mb-3">
    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
            <a class="nav-link active" id="tasks-active-tab" data-toogle="pill" href="#tasks-active">
                Aktywne zadania
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tasks-completed-tab" data-toogle="pill" href="#tasks-completed">
                Zakończone zadania
            </a>
        </li>
    </ul>

    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
            <a class="btn btn-success" href="{{route('tasks.add')}}">
                Dodaj nowe zadanie
            </a>
        </li>
    </ul>
</nav>