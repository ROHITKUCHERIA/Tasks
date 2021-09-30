@extends('crud.layout')

@section("title","List of Users")

@section("body")
<h3 class="text-monospace text-primary mt-4"> User Management </h3>
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('device.create') }}" class="btn btn-outline-success">Create New User</a>
        </div>
        <div class="card-body">

            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $id = 0 ?>
                <tbody>
                    @foreach ($all_devices as $devices)
                    <tr>
                        <?php $id = $id + 1 ?>
                        <th>{{ $id}}</th>
                        <td>{{ $devices->name }}</td>
                        <td>{{ $devices->email }}</td>
                        <td>
                            @if ($devices->role==1)
                            <button class="btn btn-success">User</button>
                            @else
                            <button class="btn btn-primary">Admin</button>
                            @endif
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <a href="{{ route('device.edit',$devices->id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="javascript:void(0)"
                                onclick="if(confirm('Are you Sure want to delete ?')) {$('#frm-delete-{{$devices->id}}').submit();}"
                                class="btn btn-outline-danger">Delete</a>
                            <form action="{{ route('device.destroy',$devices->id) }}" method="post"
                                id="frm-delete-{{$devices->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="text-monospace text-primary mt-4"> Role Management </h3>
    <div class="card">
        <div class="card-header">

            <a href="{{ route('role.create') }}" class="btn btn-outline-warning">New
                Role</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Role</th>

                    </tr>
                </thead>
                <?php $id = 0;
                ?>
                <tbody>
                    @foreach ($role_All as $roles)
                    <tr>
                        <?php $id = $id + 1 ?>
                        <th>{{$id}}</th>
                        <td>{{ $roles->role }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <a href="{{ route('device.edit',$devices->id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="javascript:void(0)"
                                onclick="if(confirm('Are you Sure want to delete ?')) {$('#frm-delete-{{$devices->id}}').submit();}"
                                class="btn btn-outline-danger">Delete</a>
                            <form action="{{ route('device.destroy',$devices->id) }}" method="post"
                                id="frm-delete-{{$devices->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection