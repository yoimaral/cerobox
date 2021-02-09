@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">

                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Document</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Observations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <td>{{$user->id}}</td>
                            <td>{{$user->Photo}}</td>
                            <td>{{$user->Name}}</td>
                            <td>{{$user->Document}}</td>
                            <td>{{$user->Email}}</td>
                            <td>{{$user->Phone_Number}}</td>
                            <td>{{$user->Observations}}</td>
                            @empty
                            @endforelse
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection