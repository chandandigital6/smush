@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create  </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{route('serviceHeader.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="paragraf">paragraf:</label>
                                <input type="text" class="form-control" id="paragraf" name="paragraf" value="{{ old('paragraf') }}" required>
                                @error('paragraf')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="f">Field f:</label>
                                <input type="text" class="form-control" id="f" name="f" value="{{ old('f') }}">
                                @error('f')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="f_1">Field f_1:</label>
                                <input type="text" class="form-control" id="f_1" name="f_1" value="{{ old('f_1') }}">
                                @error('f_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="f_2">Field f_2:</label>
                                <input type="text" class="form-control" id="f_2" name="f_2" value="{{ old('f_2') }}">
                                @error('f_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="f_3">Field f_3:</label>
                                <input type="text" class="form-control" id="f_3" name="f_3" value="{{ old('f_3') }}">
                                @error('f_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="f_4">Field f_4:</label>
                                <input type="text" class="form-control" id="f_4" name="f_4" value="{{ old('f_4') }}">
                                @error('f_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="service_id">Service:</label>
                                <select class="form-control" id="service_id" name="service_id">
                                    <option value="">Select Service</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
