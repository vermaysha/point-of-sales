@extends('layouts.dashboard')

@section('title', 'Email Settings')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('settings.email') }}" method="get">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Change the email smtp settings
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Host</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Host">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Port</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Port">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Encryption</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                                <option value="none">None</option>
                                <option value="ssl">SSL</option>
                                <option value="tls">TLS</option>
                                <option value="starttls">STARTTLS</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">From Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="From Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">From Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="From Name">
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
