@extends('layouts.error')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Oops! Page not found.'))
@section('class', 'text-warning')

@section('content')
We could not find the page you were looking for.
Meanwhile, you may <a href="{{ route('dashboard') }}">return to dashboard</a>.
@endsection
