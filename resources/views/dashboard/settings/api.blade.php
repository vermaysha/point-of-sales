@extends('layouts.dashboard')

@section('title', 'API Settings')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('settings.api') }}" method="get">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Change the API settings
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-10 col-form-label">Enable API</label>
                        <div class="col-sm-2">
                            <input type="checkbox" checked data-bootstrap-switch>
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
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script>
$(function () {
    $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
});
</script>
@endpush
