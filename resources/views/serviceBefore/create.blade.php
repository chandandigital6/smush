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
                        <form action="{{route('serviceBefore.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="image_before">Image Before:</label>
                                <input type="file" class="form-control" id="image_before" name="image_before">
                                @error('image_before')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image_after">Image After:</label>
                                <input type="file" class="form-control" id="image_after" name="image_after">
                                @error('image_after')
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