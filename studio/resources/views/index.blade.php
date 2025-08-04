@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div id="parent-main"></div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('/layout_css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('/layout_css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/layout_css/header.css')}}">
    <link rel="stylesheet" href="{{asset('/sidebar/sidebar-app.css')}}">
    <link rel="stylesheet" href="{{asset('/sidebar/sidebar-agent.css')}}">
    <link rel="stylesheet" href="{{asset('/sidebar/sidebar-home.css')}}">
    <link rel="stylesheet" href="{{asset('/app_studio/overview.css')}}">
@endpush
@push('scripts')
    <script src="js/app_studio.js"></script>
    <script src="js/sidebar.js"></script>
@endpush