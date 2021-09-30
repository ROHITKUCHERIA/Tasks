@extends('crud.layout')

@section("title","Edit User")

@section ("body")

<div class="card" style="margin-top: 4%">
    <div class="card-header">
        <h2>Edit User</h2>
        <a href="{{route('device.index')}}" class="btn btn-outline-warning float-right" style="margin-top: -42px">List
            Users</a>
    </div>
    <div class="card-body">


        <form action="{{route('device.update', $device->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" value="{{$device->name}}" class="form-control" id="name" placeholder="Enter Name"
                    name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" value="{{$device->email}}" class="form-control" id="email"
                    placeholder="Enter Your Email" name="email">
            </div>
            <div class="form-group">
                <label for="sel1">Role:</label>
                <select name="role" class="form-control" id="status">
                    <option @if($device->role == 1) selected @endif value="1">User</option>
                    <option @if($device->role == 0) selected @endif value="0">Admin</option>
                </select>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection