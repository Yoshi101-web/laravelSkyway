
@extends('layouts.app')

@section('title', 'SkyWay - Video chat')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/skyway.css') }}">
@endsection

@section('content')
    @include('common.header')
    <chat></chat>
    <web-speech></web-speech>
@endsection

@section('script')
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.webrtc.ecl.ntt.com/skyway-latest.js"></script>
    <script type="text/javascript" src="{{ asset('js/skyway.js') }}"></script>
@endsection
