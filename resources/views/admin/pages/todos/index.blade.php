@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/pages/todos.js"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Todos <small class="text-muted">Built with Vue JS</small></h3>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li><a href="#">Todos</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-block" id="TodosApp">
                <todos your-todos="{{$todos}}"></todos>
            </div>
            {{csrf_field()}}
        </div>

    </div>
@stop

