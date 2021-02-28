@extends('layouts.error')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Oops! Something went wrong.'))
@section('class', 'text-danger')

@section('content')
We will work on fixing that right away.
Please try again later or contact the owner
@endsection
