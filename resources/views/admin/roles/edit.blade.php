@extends('admin.layout.layout')
{{-- @section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection --}}
@section('content')
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Gestion des Roles</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Modifier un role</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Succès!</strong> {!! session('flash_message_success') !!}.
                        </div>
                    @endif
                        <form action="{{ route('roles.update',[\App::getLocale(),$role->id]) }}"method="POST">
                            @method('PUT')
                            @csrf
                            <label>{{ __('Nom* :') }}</label>
                            <input type="text" id="name" name="name" value="{{ $role->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Entrer nom">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label for="permission">
                                {{ __('Permission : ') }}
                            </label>
                            @foreach ($permission as $permissions)
                            <div class="form-group form-check @error('permissions') is-invalid @enderror">
                                <input type="checkbox" class="form-check-input permissions" id="permissions" name="permissions[]" value="{{$permissions->name}}"
                                @if ($role->permissions->pluck('id')->contains($permissions->id))
                                checked
                                @endif
                                >
                                <label for="{{$permissions->name}}" class="form-check-label ">{{$permissions->name}}</label>
                            </div>
                            @endforeach
                            @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <a href="{{ route('roles.index',App::getLocale()) }}" type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                    </form>
                </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>

@endsection


