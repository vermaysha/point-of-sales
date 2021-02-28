@extends('layouts.dashboard')

@section('title', 'Users Management')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="usersTable" class="table table-bordered table-striped">
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection

@section('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$(document).ready( function () {
    $('#usersTable').DataTable({
        serverSide: true,
        ajax: '{{ asset('users.json') }}',
        columns: [
            { data: 'id', title: 'ID' },
            { data: 'name', title: 'Name' },
            { data: 'username', title: 'Username' },
            { data: 'email', title: 'Email' },
            {
                data: null,
                title: 'Action',
                orderable: false,
                defaultContent: "",
            }
        ],
        columnDefs: [
            {
                targets: 4,
                render: function (data, type, row, meta) {
                    return `<div class="text-right">
                                <div class="btn-group">
                                    <a href="{{ route('user.detail') }}/${row.username}" class="btn btn-sm btn-primary" title="Detail"><i class="fas fa-search"></i></a>
                                    <a href="{{ route('user.edit') }}/${row.username}" class="btn btn-sm btn-success" title="Edit"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>`;
                }
            }
        ]
    });
});
</script>
@endsection

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection
