@extends('front.layout.master')
@section('title', 'Doctor')
@section('content')

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="">doctors</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Name</li>
            </ol>
        </nav>
        <div class="d-flex flex-column gap-3 details-card doctor-details">
            <div class="details d-flex gap-2 align-items-center">
                <img src="{{ asset('') }}{{ $doctors->image }}" alt="doctor" class="img-fluid rounded-circle"
                    height="150" width="150">
                <div class="details-info d-flex flex-column gap-3 ">
                    <h4 class="card-title fw-bold">{{ $doctors->name }}</h4>
                    <div class="d-flex gap-3 align-bottom">
                        <ul class="rating">
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                        </ul>
                        <a href="#" class="align-baseline">submit rating</a>
                    </div>
                    <h6 class="card-title fw-bold">doctor major and more info about the doctor in summary</h6>
                </div>
            </div>
            <hr />
            <form class="form">
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Confirm Booking</button>
            </form>

        </div>
    </div>
    </div>
@endsection
