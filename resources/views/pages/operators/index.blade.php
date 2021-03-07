@extends('layouts.app')

@section('head')
    @include('layouts.components.Header', [
        'header' => 'Operator'
    ])
    @include('layouts.components.breadcrumb', [
        'page' => 'Dashboard',
        'subPages' => [
            'Operator'
        ]
    ])
@endsection

@section('authContent')
    <div class="w-full h-full bg-white rounded-lg"></div>
@endsection