@extends('admin.master')
@section('title')
    Roles
@endsection
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Roles</h3>
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
                            <div class="card-title">All Roles</div>
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary float-end">Add New Role</a>
                        </div>

                        <div class="card-body">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Permissions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ implode(', ', $role->permissions->pluck('name')->toArray()) }}</td>
                                    <td>
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this role?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                                </tbody>
                            </table>
                        </div>

                        {{-- <div class="card-footer">
                            {{ $roles->links('pagination::bootstrap-4') }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

