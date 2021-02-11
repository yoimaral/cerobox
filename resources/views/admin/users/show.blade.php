@extends('layouts.app')

@section('content')
<div class="container col-md-4">


    <div class="form-group">
        <label for="exampleInputName">Name</label><br>
        <input type="text" disabled value="{{$user->name}}">
    </div>

    <div class="form-group">
        <label for="exampleInpuSelect">Tipe Services</label><br>
        <input value="{{$user->tipe_services}}" disabled type="text">
    </div>

    <div class="form-group">
        <label for="exampleInpuSelect">Date Init</label><br>
        <input value="{{$user->created_at}}" disabled type="text">
    </div>

    <div class="form-group">
        <label for="exampleInpuSelect">Date Fin</label><br>
        <input value="{{$user->updated_at}}" disabled type="text">
    </div>

    <div class="form-group">
        <label for="exampleInpuSelect">Observation</label>
        <textarea class="form-control" disabled aria-label="With textarea"></textarea>
    </div>

    <a href="{{route('users.index')}}" class="btn btn-secondary">Cancel</a>

</div>
@endsection