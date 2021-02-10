@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">

                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type User</th>
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
                                <td>
                                    @if ($user->is_admin)
                                    Admin
                                    @else
                                    User
                                    @endif
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