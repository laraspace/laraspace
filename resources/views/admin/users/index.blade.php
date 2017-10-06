@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/users/users.js"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Users</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            <div class="page-actions">
                <a href="#" class="btn btn-primary"><i class="icon-fa icon-fa-plus"></i> New User</a>
                <button class="btn btn-danger"><i class="icon-fa icon-fa-trash"></i> Delete </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>All Users</h6>

                        <div class="card-actions">

                        </div>
                    </div>
                    <div class="card-body">
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
                                <td><a href="{{route('users.show',$user->id)}}" class="btn btn-default btn-sm"><i class="icon-fa icon-fa-search"></i> View</a>
                                    <a href="{{route('users.destroy',$user->id)}}" class="btn btn-default btn-sm" data-token="{{csrf_token()}}" data-delete data-confirmation="notie"> <i class="icon-fa icon-fa-trash"></i> Delete</a></td>
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
