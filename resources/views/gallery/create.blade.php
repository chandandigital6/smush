@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>ServiceGallery</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <input type="text" class="form-control" id="msg" name="msg" value="{{ old('msg') }}">
            </div>
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control file" id="image" name="image[]" multiple>
            </div>
            <div class="form-group">
                <label for="service_id">Service</label>
                <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->title }}</option>
                    @endforeach
                </select>
                @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
