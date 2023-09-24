@extends('admin.layout.app')
@section('title', 'Add New Doctor')
@section('content')

    <!-- /.card-header -->
    <!-- form start -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('doctor.add') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body w-50">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="exampleInputEmail1"
                    placeholder="Enter user name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control" value="{{ old('city') }}" name="city"
                    id="exampleInputEmail1" placeholder="Enter your City">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                    id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" value="{{ old('image') }}" name="image"
                            id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                    </div>
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
            <label for="exampleInputPassword1">Select</label>
            <select class="custom-select" name="major_id">
                @foreach ($majors as $major)
                    <option @if (old('major_id') == $major->id) selected @endif value="{{ $major->id }}">
                        {{ $major->title }}</option>
                @endforeach
            </select>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

@endsection
