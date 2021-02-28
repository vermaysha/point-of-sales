@extends('layouts.dashboard')

@section('title', 'Edit John Doe Profile')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @yield('title')
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience"
                                placeholder="Experience"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right pb-2">
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
