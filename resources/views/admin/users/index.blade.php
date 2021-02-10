@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    <a class="btn btn-outline-success" href="{{route ('users.create')}}">New User</a>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Observation</th>
                                <th>Tipe Services</th>
                                <th>Type User</th>
                                <th>Details</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($users as $user)
                                <td>{{$user->id}}</td>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->observation}}</td>
                                <td>@if ($user->tipe_services)
                                    Advance
                                    @else
                                    Basic
                                    @endif</td>
                                <td>
                                    @if ($user->is_admin)
                                    Admin
                                    @else
                                    User
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-outline-secondary"
                                        href="{{route ('users.edit', $user)}}">Details</a>
                                </td>

                                <td>
                                    <a class="btn btn-outline-secondary" href="{{route ('users.edit', $user)}}">Edit</a>
                                </td>

                                <td>
                                    <form action="{{route ('users.destroy', $user)}}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger mt-2">Eliminar</button>

                                    </form>

                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection