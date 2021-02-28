@extends('layouts.error')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('class', 'text-warning')

@section('content')
You are not authorized to access this page.
Meanwhile, you may <a href="{{ route('dashboard') }}">return to dashboard</a>.
@endsection
