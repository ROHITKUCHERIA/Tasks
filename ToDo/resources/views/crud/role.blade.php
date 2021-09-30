@extends('crud.layout')

@section("title","Create New User")

@section ("body")

<div class="card" style="margin-top: 4%">
    <div class="card-header">
        <h2>Create New Role</h2>
        <a href="{{route('device.index')}}" class="btn btn-outline-warning float-right" style="margin-top: -42px">List
            User</a>
    </div>
    <div class="card-body">
        <form action="{{route('role.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="role">Role:</label>
                <input type="text" class="form-control" id="role" placeholder="Enter Role" name="role">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection