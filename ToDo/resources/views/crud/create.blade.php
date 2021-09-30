@extends('crud.layout')

@section("title","Create New User")

@section ("body")

<div class="card" style="margin-top: 4%">
    <div class="card-header">
        <h2>Create New User</h2>
        <a href="{{route('device.index')}}" class="btn btn-outline-warning float-right" style="margin-top: -42px">List
            Users</a>
    </div>
    <div class="card-body">


        <form action="{{route('device.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Your Email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
                <label for="sel1">Role:</label>
                <select name="role" class="form-control" id="status">
                    @foreach ($role_All as $roles)
                    <option value="0">{{ $roles->role }}</option>
                    <!-- <option value="0">Admin</option>
                    <option value="2">rohit</option> -->
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection