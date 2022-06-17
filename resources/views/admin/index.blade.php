@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-primary mb-2" href="{{ route('create-user') }}">Add User</a>
                    <table id="example2" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama User</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->role }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('edit-user', $data->id) }}">Edit</a>
                                    <form action="{{ route('delete-user', $data->id)  }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus user ini?')"><i class="fas fa-trash"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            {{-- @foreach ($user as $role => $data)
                                <tr>
                                <td>{{ $role }}</td>
                                <td>{{ $data->count() }}</td>
                                <td>
                                    <a href="{{ route('user.show', Crypt::encrypt($role)) }}" class="btn btn-info btn-sm"><i class="nav-icon fas fa-eye"></i> &nbsp; Details</a>
                                </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
