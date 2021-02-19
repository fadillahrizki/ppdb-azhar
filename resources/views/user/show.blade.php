@extends('layouts.app')

@section('title')
    {{ $user->name ?? 'Tampil Pengguna' }}
@endsection

@section('content_header')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">@yield('title')</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('users.index')}}">Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </div>
</div>
<!-- End Breadcrumb-->
@endsection

@section('content')
    @if ($message = Session::get('success'))
    <div class="row">
        <div class="col">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div class="alert-icon">
                    <i class="icon-check"></i>
                </div>
                <div class="alert-message">
                    <span><strong>Success!</strong> {{$message}}</span>
                </div>
            </div>
        </div>
    </div>
    @endif
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Permission</span>
                        </div>
                    </div>

                    <div class="card-body container">
                        <form action="{{route('users.update-permission',$user->id)}}" method="POST">
                            <div class="row">
                                @csrf
                                @foreach($permissions as $permission)
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="permission{{$permission->id}}">
                                            <input type="checkbox" name="permissions[]" id="permission{{$permission->id}}" value="{{$permission->name}}" {{$user->can($permission->name)?'checked=""':''}}>
                                            {{$permission->name}}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-12">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
