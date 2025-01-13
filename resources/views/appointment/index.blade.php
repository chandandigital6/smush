@extends('layouts.aap')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h1>Appointments</h1>
                            <a href="{{ route('appointment.create') }}" class="btn btn-light mt-2 mt-md-0">Create</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>number</th>
                                        <th>Massage</th>
                                        <th>Car Images</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($appointmentData as $appointment)
                                        <tr>
                                            <td>{{ $appointment->id }}</td>
                                            <td>{{ $appointment->name }}</td>
                                            <td>{{ $appointment->email }}</td>
                                            <td>{{ $appointment->number }}</td>
                                            <td>{{ $appointment->msg }}</td>
                                            <td>
                                                @if (is_string($appointment->car_image) && !empty($appointment->car_image))
                                                    @php
                                                        $car_imagePaths = explode(',', $appointment->car_image);
                                                    @endphp
                                                    @foreach ($car_imagePaths as $car_imagePath)
                                                        <img src="{{ asset('storage/'.$car_imagePath) }}" alt="Car Image" class="img-fluid mb-2" style="max-width: 100px;">
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $appointment->created_at->format('d-m-Y H:i') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('appointment.delete', $appointment->id) }}" class="btn btn-danger">Delete</a>
                                                    <a href="{{ route('appointment.duplicate', $appointment->id) }}" class="btn btn-warning">show</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No appointments found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        {{$appointmentData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
