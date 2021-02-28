@extends('layouts.dashboard')

@section('title', 'Telegram Settings')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('settings.telegram') }}" method="get">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Change the telegram settings
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bot Token</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Bot Token">
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
