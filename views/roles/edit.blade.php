@extends('admin.master')

@section('title', 'Edit Role')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Role</h3>
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
                            <div class="card-title">Update Role</div>
                        </div>

                        <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <!-- Role Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Role Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required value="{{ $role->name }}">
                                </div>

                                <!-- Permissions -->
                                <div class="mb-3">
                                    <label for="permissions" class="form-label">Assign Permissions</label>
                                    <div class="row">
                                        @foreach ($permissions as $permission)
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                                    value="{{ $permission->id }}" id="perm{{ $permission->id }}"
                                                    {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perm{{ $permission->id }}">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach




                                        {{-- @foreach ($permissions as $permission)
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                                    value="{{ $permission->id }}" id="perm{{ $permission->id }}"
                                                    {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="perm{{ $permission->id }}">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
