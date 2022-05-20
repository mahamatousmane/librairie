@extends('admin.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
@section('content')
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Gestion des Utilisateurs</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Modifier un utilisateur</li>
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
                        <form action="{{ route('users.update',[\App::getLocale(),$user->id]) }}"method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <label>{{ __('Nom* :') }}</label>
                            <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Entrer nom">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Email* :') }}</label>
                            <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrer email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Telephone* :') }}</label>
                            <input type="number" id="telephone" name="telephone" value="{{$user->telephone}}" class="form-control @error('telephone') is-invalid @enderror" placeholder="Entrer telephone">
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Modifier Profile* :') }}</label>
                            <input type="file" accept="image/png, image/jpeg" id="photo" name="photo" value="{{old('photo')}}" class="form-control @error('photo') is-invalid @enderror" placeholder="Entrer photo">
                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label for="Roles">
                                {{ __('Roles* : ') }}
                            </label>
                            @foreach ($role as $roles)
                            <div class="form-group form-check @error('roles') is-invalid @enderror">
                                <input type="checkbox" class="form-check-input roles" id="roles" name="roles[]" value="{{$roles->name}}"
                                @if ($user->roles->pluck('id')->contains($roles->id))
                                checked
                                @endif >
                                <label for="{{$roles->name}}" class="form-check-label ">{{$roles->name}}</label>
                            </div>
                            @endforeach
                            @error('roles')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <a href="{{ route('users.index',App::getLocale()) }}" type="button" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                    </form>
                </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>

@endsection


