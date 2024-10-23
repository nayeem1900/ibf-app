@extends('layout.sidenav-layout')
@section('content')
    @include('components.etender.etender-list')
    @include('components.etender.etender-delete')
    @include('components.etender.etender-create')
    @include('components.etender.etender-update')
@endsection