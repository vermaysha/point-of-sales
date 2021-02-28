@extends('layouts.error')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('class', 'text-warning')

@section('content')
Too many requests. Please try again later
@endsection
