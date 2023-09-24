@extends('admin.layout.app')
@section('title', 'Show Doctor')
@section('content')

    <div class="conteiner">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <div class="container">
            <div class="team-single">
                <div class="row">
                    <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                        <div class="team-single-img">
                            <img src="{{ asset('') }}{{ $doctors->image }}" class="img-fluid" alt="Responsive image">
                        </div>

                    </div>

                    <div class="col-lg-8 col-md-7">
                        <div class="team-single-text padding-50px-left sm-no-padding-left">
                            <h4 class="font-size38 sm-font-size32 xs-font-size30">Doctor : {{ $doctors->name }}</h4>
                            <p class="no-margin-bottom">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. aut odit aut
                                fugit,
                                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum voluptatem.</p>
                            <div class="contact-info-section margin-40px-tb">
                                <ul class="list-style9 no-margin">
                                    <li>

                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong class="margin-10px-left text-orange">Name :</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{ $doctors->name }}</p>
                                            </div>
                                        </div>

                                    </li>
                                    <li>

                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="far fa-gem text-yellow"></i>
                                                <strong class="margin-10px-left text-yellow">city :</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{ $doctors->city }}</p>
                                            </div>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-envelope text-pink"></i>
                                                <strong class="margin-10px-left xs-margin-four-left text-pink">Email
                                                    :</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p><a href="javascript:void(0)">{{ $doctors->email }}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-user-md text-green"></i>
                                                <strong class="margin-10px-left xs-margin-four-left text-green">Major
                                                    :</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{ $doctors->major->title }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <h1> ALL Booking :</h1>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">num</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone</th>
                        <th scope="col">For Doctor</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors->bookings as $booking)
                        <tr>
                            <th>{{ $booking->id }}</th>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->doctor->name }}</td>
                            <td>
                                <form action="{{ route('booking.destroy', $booking->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
