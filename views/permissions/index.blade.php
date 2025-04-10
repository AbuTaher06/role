@extends('admin.master')

@section('title')
    Permissions
@endsection

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Permissions</h3>
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
                            <div class="card-title">All Permissions</div>
                            <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary float-end">Add New
                                Permission</a>
                        </div>

                        <div class="card-body">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $key => $permission)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                <!-- Edit Button -->
                                                <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete Button -->
                                                <form action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                                    method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this permission?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Pagination (Uncomment if needed) --}}
                        {{-- <div class="card-footer">
                            {{ $permissions->links('pagination::bootstrap-4') }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection