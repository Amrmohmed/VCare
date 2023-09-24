@extends('admin.layout.app')
@section('title', 'Add New Major')
@section('content')

    <div class="contenar">
        <form action="{{ route('major.store') }}" method="POST" class="my-2 p-5 " enctype="multipart/form-data">
            @csrf
            <label for="">Title</label>
            <input type="text" class="form-control w-25" name="title"><br>
            <label for="">image</label>
            <div class="input-group w-50">
                <div class="custom-file">
                    <input type="file" class="custom-file-input w-25" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                </div>
            </div><br>
            <button class="btn btn-primary">Save</button>
    </div>
    </form>

@endsection
