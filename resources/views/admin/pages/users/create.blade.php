@extends('admin.layout.app')
@section('title', 'Add New User')
@section('content')

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="card-body w-50">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter user name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="phone" class="form-control" name="phone" id="exampleInputEmail1"
                    placeholder="Enter your phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Select Major</label>
                <select class="form-select form-control" name="type">
                    <option selected>Type</option>
                    <option value="admin">admin</option>
                    <option value="doctor">doctor</option>
                    <option value="user">User</option>
                </select>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
    </div>

@endsection
