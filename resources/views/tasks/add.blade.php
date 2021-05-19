@extends('layouts.app')

@section('title', "To do list")

@section('content')

<div class="container">

    <div class="row py-5">
        <a href="{{route('tasks.index')}}"> &larr; Wróc do listy zadań</a>
        <div class="col-sm-12">
            <form method="post" action="{{route('tasks.store')}}">
                <div class="form-group">
                    <label for="title">Tytuł zadania</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Podlać kwiatki" value="{{old('title')}}">
                    @error('title')
                    <div class="invalid-feedback">
                        Wpisz tytuł zadania
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Treść zadania </label>
                    <textarea class="form-control" id="content" name="content" value="{{old('content')}}"></textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        Wpisz treść zadania
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Dodaj zadanie</button>
                <input type="hidden" name="status" value="{{$defaultStatus}}">
                @csrf
                @method('POST')
            </form>
        </div>

    </div>

</div>
@endsection