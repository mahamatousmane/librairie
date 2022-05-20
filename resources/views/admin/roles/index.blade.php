@extends('admin.layouts.layout')

@section('content')
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Gestion des Roles</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Roles</li>
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
            <div class="col-md-3 col-sm-12">

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
                        <form action="{{ route('roles.store',\App::getLocale()) }}"method="POST">
                            @csrf
                            <label>{{ __('Nom* :') }}</label>
                            <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Entrer nom">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <br>
                            <label for="permission">
                                {{ __('Permission* : ') }}
                            </label>
                            @foreach ($permission as $permissions)
                            <div class="form-group form-check @error('permissions') is-invalid @enderror">
                                <input type="checkbox" class="form-check-input permissions" id="permissions" name="permissions[]" value="{{$permissions->name}}"
                                >
                                <label for="{{$permissions->name}}" class="form-check-label ">{{$permissions->name}}</label>
                            </div>
                            @endforeach
                            @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <i class="fas fa-plus-circle"></i>
                        </button> --}}
                        <br><br>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Permissions</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach ($role as $roles)
                                <tr>
                                    <td>{{$roles->name}}</td>
                                    <td>{{ implode(', ',$roles->getPermissionNames()->toArray()) }}</td>
                                    <td>{{$roles->created_at->diffForHumans()}}</td>
                                    <td>
                                        {{-- <a href="#" data-name="{{ $roles->name }}" data-permissions="{{ $roles->permissions }}"data-id="{{$roles->id}}"
                                           data-toggle="modal" data-target="#exampleModal1" onclick="editData()" ><i class="far fa-edit font-weight-bold"></i></a>                                        <i class="far fa-edit"></i> --}}
                                           <a href={{ route('roles.edit',[\App::getLocale(),Crypt::encrypt($roles->id)]) }}><i class="far fa-edit font-weight-bold"></i></a>
                                        <a href="#"><i class="far fa-trash-alt " data-id="{{$roles->id}}" data-toggle="modal" data-target="#exampleModal2" title="Supprimer"onclick="deletedata()"></i></a>
                                        {{-- <i class="far fa-trash-alt"></i> --}}
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
{{-- Modal mettre à jour le role --}}
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier role</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action=""method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                            <input class="form-control @error('name') is-invalid @enderror"
                            id="id" name="id" type="hidden" autofocus required>
                        <div class="col-md-12 form-group mb-3">
                            <label for="name">Nom* : </label>
                            <input class="form-control @error('name') is-invalid @enderror"
                            id="name" name="name" type="text"  autofocus required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="permission">
                                {{ __('Permission : ') }}
                            </label>
                            @foreach ($permission as $permissions)
                            <div class="form-group form-check @error('permissions') is-invalid @enderror">
                                <input type="checkbox" class="form-check-input permissions" id="permissions" name="permissions[]" value="{{$permissions->name}}"
                                >
                                <label for="{{$permissions->name}}" class="form-check-label ">{{$permissions->name}}</label>
                            </div>
                            @endforeach
                        </div>

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
{{-- Modal suppréssion role --}}

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression d'un role</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="{{ route('deleteRoles',\App::getLocale()) }}"method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input class="form-control @error('name') is-invalid @enderror"
                id="id" name="id" type="hidden" autofocus required>
                <p class="container">Voulez vous supprimé cet élément?</p>
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
             function editData(){
                //  alert('ok');
    $('#exampleModal1').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var permissions = button.data('permissions');
        var id = button.data('id');
        var modal = $(this);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #permissions').val(permissions);
    })
};
        function deletedata(){
    // alert('ok');
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        modal.find('.modal-body #id').val(id);
    })
    };
    </script>
@endsection
 @section('js')

 {{-- <script type="text/javascript">
    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();
            // alert('ok');
            var languages = [];
            $('.permissions').each(function(){
                if($(this.is(":cheched"))){
                    langages.push($(this).val());
                }
            });
            langages = langages.toString();
            alert(langages);

            var _token = $("input[name='_token']").val();
            var name = $("#name").val();
            var permissions = $("#permissions").val();
            $.ajax({
                url: "{{ route('roles.index',\App::getLocale()) }}",
                type:'POST',
                data: {_token:_token, name:name, permissions:permissions},
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
              $('.'+key+'_err').text(value);
            });
        }
    });
</script> --}}
 @endsection

