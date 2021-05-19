@extends('layouts.app')

@section('title', "To do list")

@section('content')

<div class="container">

    <div class="row py-5">
        <div class="col-sm-12">
            @include('tasks.index.nav')
            @include('tasks.index.list')
        </div>

    </div>

</div>
@endsection