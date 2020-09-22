
@extends('layouts.app')

@section('title', 'Skyway')

@section('content')
    @include('common.header')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 p-4 text-center">
                <h1 class="m-5">チャットを始める</h1>
                <a href="/chat" class="btn btn-default bg-primary text-white">スタート</a>
            </div>
        </div>
    </div>
@endsection