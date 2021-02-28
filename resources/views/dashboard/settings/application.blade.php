@extends('layouts.dashboard')

@section('title', 'Application Settings')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('settings.app') }}" method="get">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Change the application settings
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">App Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="App Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">App URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="App URL">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Asset URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Asset URL">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Timezone</label>
                        <div class="col-sm-10">
                            <select class="form-control select2">
                                @php
                                    $selected = date_default_timezone_get();
                                @endphp
                                @foreach (timezone_identifiers_list() as $timezone)
                                <option value="{{ $timezone }}" @if ($timezone == $selected) selected="selected" @endif>{{ $timezone }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Locale</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value="en">English</option>
                                <option value="id">Bahasa Indonesia</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer pb-0">
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-flat btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
$(function () {
    $('.select2').select2({
        theme: 'bootstrap4'
    })
});
</script>
@endpush

@push('head')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
