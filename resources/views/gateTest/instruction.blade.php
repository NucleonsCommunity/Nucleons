@extends('layouts.gateTest')

@section('title', 'gate instruction')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <instruction></instruction>
            </div>
            <div class="col-lg-3">
                @component('gateTest.user_profile')

                @endcomponent
            </div>
        </div>
    </div>
@endsection