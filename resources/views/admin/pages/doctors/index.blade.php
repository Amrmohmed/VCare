@extends('admin.layout.app')
@section('title', 'All Doctors')
@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-info" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <a href="{{ route('doctor.create') }}" class="btn btn-success ">Add New Doctor</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">num</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                        <tr>
                            <th>{{ $doctor->id }}</th>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->city }}</td>
                            <td>{{ $doctor->email }}</td>
                            {{-- <td>{{$doctor->image}}</td> --}}
                            <td>
                                <img src="{{ $doctor->image }}" width="60" height="60" class="img-fluid"
                                    alt="Responsive image">
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('doctor.edit', $doctor->id) }}" type="button" class="btn btn-success"><i
                                        class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <form action="{{ route('doctors.delete', $doctor->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </form>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('doctor.show', $doctor->id) }}" type="button" class="btn btn-primary"><i
                                        class="far fa-eye"></i></a>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
            {{ $doctors->links() }}
        </div>
    </div>
    </div>
@endsection
