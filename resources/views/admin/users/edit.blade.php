@extends('layouts.app')

@section('content')
<div class="container col-md-4">

    <!--FORM-->
    <form action="{{route('users.update', $user)}}" enctype="multipart/form-data" method="POST">

        @method('PATCH')
        @csrf

        <div class="form-group row mt-2">
            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Adjuntar Imagen') }}</label>
            <div class="col-md-6">

                <div class="custom-file">
                    <input name="img" type="file" class="col-md-6 custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Seleccionar Archivo</label>
                </div>

            </div>
        </div>
        @error('img')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                value="{{$user->name}}">
            <input type="text" name="trick" hidden value="trick">
        </div>

        <div class="form-group">
            <label for="exampleInpuSelect">Tipe Services</label><br>
            <select name="select" class="form-select" aria-label="Disabled select example">
                <option selected>Select Tipe Services</option>
                <option value="Basic">Basic</option>
                <option value="Advance">Advance</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInpuSelect">Observation</label>
            <textarea name="observation" class="form-control" aria-label="With textarea"></textarea>
            <input type="text" name="trick" hidden value="trick">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

        <a href="{{route('users.index')}}" class="btn btn-secondary">Cancel</a>
    </form>

</div>
@endsection