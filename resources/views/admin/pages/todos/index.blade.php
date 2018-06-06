@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Todos <small class="text-muted">Built with Vue JS</small></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Todos</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <todos-app :your-todos="{{ json_encode($todos) }}"></todos-app>
            </div>
        </div>
    </div>
@stop

