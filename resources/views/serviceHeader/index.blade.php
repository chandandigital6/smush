@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Service Hero Section</h1>
                            <a href="{{ route('serviceHeader.create') }}" class="btn btn-light">Create </a>
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
                                    <th>Title</th>
                                    <th>paragraph</th>
                                    <th>feature1</th>
                                    <th>feature2</th>
                                    <th>feature3</th>
                                    <th>feature4</th>
                                    <th>feature5</th>
                                    <th>serviceName</th>
                                    {{--                                    <th>Image</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($serviceHeaderData as $serviceHeader)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $serviceHeader->title }}</td>
                                        <td>{{ $serviceHeader->paragraf }}</td>
                                        <td>{{$serviceHeader->f}}</td>
                                        <td>{{$serviceHeader->f_1}}</td>
                                        <td>{{ $serviceHeader->f_2 }}</td>
                                        <td>{{ $serviceHeader->f_3 }}</td>
                                        <td>{{ $serviceHeader->f_4 }}</td>

                                        <td>{{$serviceHeader->service->title}}</td>
{{--                                                                                <td><img src="{{ asset('storage/'.$serviceHeader->image) }}" alt="{{ $serviceHeader->title }}" style="max-width: 100px;"></td>--}}
                                        <td>
                                            <a href="{{ route('serviceHeader.edit', $serviceHeader->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('serviceHeader.delete', $serviceHeader->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('serviceHeader.duplicate', $serviceHeader->id) }}" class="btn btn-warning">Duplicate</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No posts found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                        {{$serviceHeaderData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
