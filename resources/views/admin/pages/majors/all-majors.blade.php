@extends('admin.layout.app')
@section('title', 'All Majors')
@section('content')

    <div class="container  ">
        @if (session()->has('success'))
            <div class="alert alert-info" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-12 p-3">
                <div class="ms-auto"><a href="{{ route('major.create') }}" class="btn btn-success ">Add New Major</a></div>
                <table class="table table-image ">
                    <thead>
                        <tr>
                            <th scope="col">Num</th>
                            <th scope="col">Image</th>
                            <th scope="col">Major</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($majors as $major)
                            <tr>
                                <td scope="row">{{ $major->id }}</td>
                                <td class="w-25" style="widows: 20px; height: 20px;">
                                    <img src="{{ $major->image }}" class="img-fluid" alt="Responsive image"
                                        style="widows: 120px; height: 100px;">
                                </td>
                                <td class="w-25 bold p-3">{{ $major->title }}</td>
                                <td class="d-flex">
                                    <form action="{{ route('major.delete', $major->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger "><i class="far fa-trash-alt"></i></button>
                                    </form>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('major.edit', $major->id) }}" class="btn btn-primary "><i
                                            class="fas fa-edit"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('majors.show.all', $major->id) }}" class="btn btn-success "><i
                                            class="fas fa-eye"></i></a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
