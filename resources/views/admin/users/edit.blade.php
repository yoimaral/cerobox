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