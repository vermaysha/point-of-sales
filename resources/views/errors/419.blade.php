@extends('layouts.error')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('class', 'text-warning')

@section('content')
The page has expired.
Please <a href="{{ url()->current() }}">reload this page</a>
@endsection
