<!-- resources/views/admin/permissions/create.blade.php -->

@extends('admin.master')

@section('title', 'Create Permission')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Create Permission</h3>
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
                            <div class="card-title">Create Permission</div>
                        </div>
                        <form action="{{ route('admin.permissions.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Permission Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Permission</button>
                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection