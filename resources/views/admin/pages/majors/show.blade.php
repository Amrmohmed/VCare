@extends('admin.layout.app')
@section('title', 'Doctors of Major')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12 p-3">
                <table class="table table-image ">
                    <thead>
                        <tr style="background-color:royalblue ">
                            <th scope="col">Num</th>
                            <th scope="col">title</th>
                            <th scope="col">image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $major->id }}</td>
                            <td>{{ $major->title }}</td>
                            <td><img src="{{ asset('') }}{{ $major->image }}" width="50">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-image ">
                    <thead>
                        <tr style="background-color:rgb(153, 173, 233) ">
                            <th scope="col">Num</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">city</th>
                            <th scope="col">image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($major->doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->city }}</td>
                                <td><img src="{{ asset('') }}{{ $doctor->image }}" width="50">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
