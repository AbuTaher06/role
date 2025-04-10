@extends('admin.master')

@section('title', 'Users')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Users</h3>
                </div>
        
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card-title">Users</div>
                                <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">Add User</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($users->isEmpty())
                                <p>No users found.</p>
                            @else
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" 
                                                            onclick="return confirm('Are you sure you want to delete this user?')"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
