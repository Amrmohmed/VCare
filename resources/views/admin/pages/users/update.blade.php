@extends('admin.layout.app')
@section('title', 'Edit User')
@section('content')

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('user.edit', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body w-50">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                    id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}"
                    id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}"
                    id="exampleInputPassword1">
            </div>

            <label for="exampleInputPassword1">Type</label>
            <select class="form-select form-control" name="type">
                <option selected>Major</option>
                <option value="admin">Admin</option>
                <option value="doctor">doctor</option>
                <option value="user">user</option>
            </select>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

@endsection
