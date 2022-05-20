@extends('admin.layout.layout')
@section('css')
@endsection
@section('content')
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Gestion des Utilisateurs</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Utilisateurs</li>
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
            <div class="col-md-4 col-sm-12">

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
                        <form action="{{ route('users.store',\App::getLocale()) }}"method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>{{ __('Nom* :') }}</label>
                            <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Entrer nom">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Email* :') }}</label>
                            <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrer email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Matricule* :') }}</label>
                            <input type="text" id="telephone" name="telephone" value="{{old('telephone')}}" class="form-control @error('telephone') is-invalid @enderror" placeholder="Entrer Matricule">
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Profile* :') }}</label>
                            <input type="file" accept="image/png, image/jpeg" id="photo" name="photo" value="{{old('photo')}}" class="form-control @error('photo') is-invalid @enderror" placeholder="Entrer photo">
                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Password* :') }}</label>
                            <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Entrer Mot de passe">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label>{{ __('Confirmation* :') }}</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" value="{{old('telephone')}}" class="form-control @error('telephone') is-invalid @enderror" placeholder="Confirme mot de passe">
                            <br>
                            <label for="Roles">
                                {{ __('Roles* : ') }}
                            </label>
                            @foreach ($role as $roles)
                            <div class="form-group form-check @error('roles') is-invalid @enderror">
                                <input type="checkbox" class="form-check-input roles" id="roles" name="roles[]" value="{{$roles->name}}"
                                >
                                <label for="{{$roles->name}}" class="form-check-label ">{{$roles->name}}</label>
                            </div>
                            @endforeach
                            @error('roles')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br><br>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>roles</th>
                                <th>téléphone</th>
                                <th>profile</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach ($user as $users)
                                <tr>
                                    <td>{{$users->name}}</td>
                                    <td>{{ implode(', ',$users->getRoleNames()->toArray()) }}</td>
                                    <td>{{$users->telephone}}</td>
                                    <td><img src="{{ asset($users->profile) }}" alt="img" class="img-circle"  style="height: 50px;width:50px;"></td>
                                    <td>
                                        <a href={{ route('users.edit',[\App::getLocale(),Crypt::encrypt($users->id)]) }}><i class="far fa-edit font-weight-bold"></i></a>
                                        <a href="#"><i class="far fa-trash-alt " data-id="{{$users->id}}" data-toggle="modal" data-target="#exampleModal2" title="Supprimer"onclick="deletedata()"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression d'un Utilisateur</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="{{ route('deleteUsers',\App::getLocale()) }}"method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control @error('name') is-invalid @enderror"
                id="id" name="id" type="hidden" autofocus required>
                <p class="container">Voulez vous supprimé cet Utilisateur?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                <button class="btn btn-primary ml-2" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
            </div>
        </form>
        </div>
    </div>
</div>
    <script>
        function deletedata(){
        $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        modal.find('.modal-body #id').val(id);
    })
    };
    </script>
@endsection
