@extends('layouts.aap')

@section('content')


    <div class="container mt-5">

        <form action="{{ isset($serviceBenefit) ? route('serviceBenefit.update', $serviceBenefit->id) : route('serviceBenefit.store') }}" method="POST">
            @csrf
            {{-- @if(isset($serviceBenefit))
                @method('PUT')
            @endif --}}

            <div class="mb-4">
                <label for="heading" class="block font-medium text-gray-700">Heading</label>
                <input type="text" name="heading" id="heading" value="{{ old('heading', $serviceBenefit->heading ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @error('heading')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="msg" class="block font-medium text-gray-700">Message</label>
                <textarea name="msg" id="msg" rows="4" class="textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('msg', $serviceBenefit->msg ?? '') }}</textarea>
                @error('msg')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="block font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="active" {{ old('status', $serviceBenefit->status ?? 'active') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status', $serviceBenefit->status ?? 'active') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="service_id" class="block font-medium text-gray-700">Service</label>
                <select name="service_id" id="service_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="">Select a service</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ old('service_id', $serviceBenefit->service_id ?? '') == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                    @endforeach
                </select>
                @error('service_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                    {{ isset($serviceBenefit) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>

      </div>

@endsection
