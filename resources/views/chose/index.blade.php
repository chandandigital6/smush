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
                            <h1>About Choose Us</h1>
                            <a href="{{ route('chose.create') }}" class="btn btn-light">Create</a>
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
                                    {{--                                    <th>price</th>--}}
                                    <th>heading</th>
                                    {{--                                    <th> Feature 2</th>--}}
                                    {{--                                    <th>Feature 3</th>--}}
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($choseData as $chose)
                                    <tr>
                                        <td>{{ $chose->id }}</td>
                                        <td>{{ $chose->title }}</td>
{{--                                                                                <td>{{$chose->price}}</td>--}}
                                        <td>{!! $chose->heading !!}</td>
{{--                                                                                <td>{{$chose->fe_2}}</td>--}}
{{--                                                                                <td>{{$chose->fe_3}}</td>--}}
                                        <td><img src="{{ asset('storage/'.$chose->image) }}" alt="{{ $chose->title }}" style="max-width: 100px;"></td>
                                        <td>
                                            <a href="{{ route('chose.edit', $chose->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('chose.delete', $chose->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('chose.duplicate', $chose->id) }}" class="btn btn-warning">Duplicate</a>

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
                        {{$choseData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
