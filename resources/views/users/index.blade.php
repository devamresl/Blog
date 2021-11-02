@extends('layouts.app')

@section('content')
    {{-- <div class="clearfix">
        <a href="{{ route('users.create') }}" class="btn btn-success float-right mb-10" style="margin-bottom: 10px">Add User</a>
    </div> --}}
    <div class="card card-default">
        <div class="card-header">All Users</div>
            @if ($users->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Username</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        {{-- <img src="{{ asset('storage/' . $user->image) }}" alt="" width="100px" height="100px"> --}}
                                        <img src="{{ $user->hasPicture() ? asset('storage/' . $user->getPicture()) : $user->getGravatar() }}" style="border-radius: 50%" width="60px" height="60px" alt="">                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        @if (!$user->isAdmin())
                                            <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Make Admin</button>
                                            </form>
                                        @else
                                            {{ $user->role }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            @else
                <div class="card-body">
                    <h1 class="text-center">
                        No Users Yet.
                    </h1>
                </div>
            @endif
        </div>
    </div>
@endsection

