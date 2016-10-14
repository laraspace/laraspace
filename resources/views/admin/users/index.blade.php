@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/users/users.js"></script>
@stop

@section('content')
    <div class="main-content">

        <div class="page-header">
            <h3 class="page-title">Users</h3>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li><a href="{{route('users.index')}}">Users</a></li>
                <li class="active">Users</li>
            </ol>
            <div class="page-actions">
                <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> New User</a>
                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All Users</h3>
                    </div>
                    <div class="card-block">
                        <table id="users-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Registered On</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->created_at}}</td>
                                <td><a href="{{route('users.show',$user->id)}}" class="btn btn-default btn-sm"><i class="fa fa-search"></i> View</a>
                                    <a href="{{route('users.destroy',$user->id)}}" class="btn btn-default btn-sm" data-token="{{csrf_token()}}" data-delete data-confirmation="notie"> <i class="fa fa-trash"></i> Delete</a></td>
                            </tr>
                            @endforeach
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
