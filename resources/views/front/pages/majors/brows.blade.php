@extends('front.layout.master')
@section('title', 'Doctors')
@section('content')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="../index.html" index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">doctors</li>
            </ol>
        </nav>




        <div class="container">
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                @foreach ($major->doctors as $doctor)
                    <div class="card p-2" style="width: 15rem;">
                        <img src="{{ asset('') }}{{ $doctor->image }}" class="" alt="major">
                        <div class="card-body d-flex flex-column gap-1 justify-content-center">
                            <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                            <h6 class="card-title fw-bold text-center">{{ $doctor->major->title }}</h6>
                            <a href="{{ route('add.index', $doctor->id) }}" class="btn btn-outline-primary card-button">Book
                                an
                                appointment</a>
                        </div>
                    </div>
                @endforeach

                <nav class="mt-5" aria-label="navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link page-prev" href="#" aria-label="Previous">
                                <span aria-hidden="true">
                                    < </span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link page-next" href="#" aria-label="Next">
                                <span aria-hidden="true"> > </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    @endsection
