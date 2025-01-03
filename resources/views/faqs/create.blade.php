@extends('layouts.aap')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <h1>{{ isset($faqs) ? 'Edit FAQ' : 'Create FAQ' }}</h1>

                <form action="{{ isset($faqs) ? route('faqs.update', $faqs->id) : route('faqs.store') }}" method="POST">
                    @csrf
                    {{-- @if(isset($faq))
                        @method('PUT')
                    @endif --}}

                    <!-- Question Field -->
                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input
                            type="text"
                            name="question"
                            id="question"
                            class="form-control @error('question') is-invalid @enderror"
                            value="{{ old('question', $faqs->question ?? '') }}">
                        @error('question')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Answer Field -->
                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <textarea
                            name="answer"
                            id="answer"
                            rows="4"
                            class="form-control @error('answer') is-invalid @enderror">{{ old('answer', $faqs->answer ?? '') }}</textarea>
                        @error('answer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Status Field -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="active" {{ old('status', $faqs->status ?? 'active') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $faqs->status ?? 'active') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select
                            name="service_id"
                            id="service_id"
                            class="form-control @error('service_id') is-invalid @enderror">
                            <option value="">Select a service</option>
                            @foreach ($services as $service)
                                <option
                                    value="{{ $service->id }}"
                                    {{ (old('service_id', $faqs->service_id ?? '') == $service->id) ? 'selected' : '' }}>
                                    {{ $service->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">
                        {{ isset($faqs) ? 'Update FAQ' : 'Create FAQ' }}
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
