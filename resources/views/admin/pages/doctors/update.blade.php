@extends('admin.layout.app')
@section('title', 'Edit Doctor')
@section('content')

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('doctor.update', $doctor->id) }}" method="post">
        @method('put')
        @csrf
        <div class="card-body w-50">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" name="city" class="form-control" value="{{ $doctor->city }}"
                    id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="{{ $doctor->email }}"
                    id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" value="{{ $doctor->password }}"
                    id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <form class="d-flex">
                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile"
                                value="{{ $doctor->image }}">
                            <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                    </div>
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
    </form>
    <label for="exampleInputPassword1">Select</label>
    <select class="form-select form-control">
        <option selected>Major</option>
        @foreach ($majors as $major)
            <option value="{{ $major->id }}">{{ $major->title }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Save</button>
    </div>

    </form>
    </div>

@endsection
