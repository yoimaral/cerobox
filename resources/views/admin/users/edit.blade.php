@extends('layouts.app')

@section('content')
<div class="container col-md-4">

    <!--FORM-->
    <form action="{{route('users.update', $user)}}" method="POST">

        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                value="{{$user->name}}">
            <input type="text" name="trick" hidden value="trick">
        </div>

        <div class="form-group">
            <label for="exampleInpuSelect">Tipe Services</label>
            <select name="select" class="form-select" aria-label="Disabled select example">
                <option selected>Select Tipe Services</option>
                <option value="0">Basic</option>
                <option value="1">Advance</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

        <a href="{{route('users.index')}}" class="btn btn-secondary">Cancel</a>
    </form>

</div>
@endsection