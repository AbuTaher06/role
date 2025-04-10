<!-- resources/views/admin/permissions/edit.blade.php -->

@extends('admin.master')

@section('title', 'Edit Permission')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Permission</h3>
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
                            <div class="card-title">Edit Permission</div>
                        </div>
                        <form action="{{ route('admin.permissions.update', $permission->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Permission Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $permission->name }}" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Permission</button>
                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection