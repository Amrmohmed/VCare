@extends('admin.layout.app')
@section('title', 'Add New Booking')
@section('content')

    <!-- form start -->
    <form action="{{ route('booking.store') }}" method="post">
        @csrf
        <div class="card-body w-50">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputtext" placeholder="Enter user name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="phone" class="form-control" name="phone" id="exampleInputphone"
                    placeholder="Enter your phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Select Doctors</label>
                <select class="form-select form-control" name="doctor_id">
                    <option selected>Doctors</option>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
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
