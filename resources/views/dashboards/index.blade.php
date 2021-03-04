@extends('layouts.app')

@section('head')
    @include('layouts.components.Header', [
        'header' => 'Dashboard'
    ])
    @include('layouts.components.breadcrumb', [
        'page' => 'Dashboard'
    ])
@endsection

@section('authContent')
    <div class="flex w-full gap-2">
        @include('dashboards.components.infoboxRow')
    </div>
    <div class="flex items-center justify-center h-full">
        @include('dashboards.components.createCampaignButton')
    </div>
@endsection