@extends('layouts.error')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('class', 'text-danger')

@section('content')
We will work on fixing that right away.
Please try again later or contact the owner
@endsection
