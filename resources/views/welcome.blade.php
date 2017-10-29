@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title">
            Nucleons
        </div>
        <div class="subtitle">
            Online Test Series<br>
            <button id="test" class="btn btn-default"> Start </button>
        </div>
        <div id="app">
            <example></example>
        </div>

    </div>
@endsection
