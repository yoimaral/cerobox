@extends('layouts.app')

@section('content')
<div class="container col-md-4">

    <!--FORM-->
    <form action="{{route('users.update', $user)}}" method="POST">

        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="Name">Name</label>
            <input name="name" type="text" class="form-control" id="Name" value="{{$user->name}}">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>

        <a href="{{route('users.index')}}" class="btn btn-secondary">Cancel</a>
    </form>

</div>
@endsection