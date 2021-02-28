@extends('layouts.error')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('class', 'text-warning')

@section('content')
You are prohibited from accessing this page.
Meanwhile, you may <a href="{{ route('login') }}">login</a> or <a href="{{ route('dashboard') }}">return to dashboard</a>.
@endsection
