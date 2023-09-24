@extends('admin.layout.app')
@section('title', 'All Users')
@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-info" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">num</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">phone</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->type }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('user.edit', $user->id) }}" type="button" class="btn btn-success"><i
                                            class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <form action="{{ route('user.delete', $user->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
