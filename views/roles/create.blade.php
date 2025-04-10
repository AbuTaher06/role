@extends('admin.master')
@section('title')
    Add Role
@endsection
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Add Role</h3>
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
                            <div class="card-title">Add New Role</div>
                        </div>

                        <form action="{{ route('admin.roles.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Role Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Assign Permissions</label>
                                    @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" name="permissions[]" class="form-check-input" 
                                                value="{{ $permission->id }}">
                                            <label class="form-check-label">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
