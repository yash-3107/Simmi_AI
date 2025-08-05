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
<link rel="stylesheet" href="{{asset('/app_studio_css/overview.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/agent_studio.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/projects.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/flow-deployment.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/components.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/component-deployment.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/observability.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/manage-users.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/file-manager.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/audit-trail.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/key-vault.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/support.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/subscription-plans.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/billing.css')}}">
<link rel="stylesheet" href="{{asset('/agent_studio_css/faqs.css')}}">
@endpush
@push('scripts')
<script src="js/sidebar.js"></script>

@endpush