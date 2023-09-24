@extends('admin.layout.app')
@section('title' , 'Edit Major')
@section('content')

<div class="contenar">
    <form action="{{route('major.update' , $major->id)}}" method="post" class="my-2 p-5 ">
        @method('put')
        @csrf
        <input type="text" class="form-control w-25" value="{{$major->title}}" name="title"><br>
        <button class="btn btn-primary">Save</button>
</div>
</form>

@endsection