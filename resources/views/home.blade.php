@extends('layouts.app')

@section('content')
    <div class="container" style="margin: 50px;">
        <div class="title">
            Nucleons
        </div>
        <div class="subtitle">
            Online Test Series<br>
            <a href="{{ route('gate_instruction') }}"> <button id="test" class="btn btn-primary">Start </button></a>
        </div>

    </div>
@endsection
