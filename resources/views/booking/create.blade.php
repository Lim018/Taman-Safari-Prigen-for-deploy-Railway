@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('booking.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Services
            </a>
            <h1 class="text-3xl font-bold">Book Your PlayStation Session</h1>
            <p class="text-gray-600 mt-2">Follow the steps below to complete your booking</p>
        </div>

        <form action="{{ route('booking.store') }}" method="POST" class="space-y-8">
            @csrf
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">1. Select Service</h2>
                <div class="space-y-4">
                    @foreach($services as $service)
                    <div class="flex items-center space-x-3">
                        <input type="radio" name="service_id" id="service_{{ $service->id }}" value="{{ $service->id }}" 
                            {{ (old('service_id') == $service->id || ($selectedService && $selectedService->id == $service->id)) ? 'checked' : '' }}
                            class="h-5 w-5 text-primary">
                        <label for="service_{{ $service->id }}" class="flex flex-1 items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                </svg>
                                <span>{{ $service->name }}</span>
                            </div>
                            <span>Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
                @error('service_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">2. Select Date & Time</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="booking_date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" name="booking_date" id="booking_date" 
                            min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                            value="{{ old('booking_date') }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        @error('booking_date')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="session_time" class="block text-sm font-medium text-gray-700 mb-1">Time Slot</label>
                        <select name="session_time" id="session_time" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">Select a time slot</option>
                            <option value="10:00 - 12:00" {{ old('session_time') == '10:00 - 12:00' ? 'selected' : '' }}>10:00 - 12:00</option>
                            <option value="12:00 - 14:00" {{ old('session_time') == '12:00 - 14:00' ? 'selected' : '' }}>12:00 - 14:00</option>
                            <option value="14:00 - 16:00" {{ old('session_time') == '14:00 - 16:00' ? 'selected' : '' }}>14:00 - 16:00</option>
                            <option value="16:00 - 18:00" {{ old('session_time') == '16:00 - 18:00' ? 'selected' : '' }}>16:00 - 18:00</option>
                            <option value="18:00 - 20:00" {{ old('session_time') == '18:00 - 20:00' ? 'selected' : '' }}>18:00 - 20:00</option>
                            <option value="20:00 - 22:00" {{ old('session_time') == '20:00 - 22:00' ? 'selected' : '' }}>20:00 - 22:00</option>
                        </select>
                        @error('session_time')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">3. Your Information</h2>
                <div class="grid gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" name="name" id="name" 
                            value="{{ old('name', auth()->user()->name ?? '') }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" 
                            value="{{ old('email', auth()->user()->email ?? '') }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="text" name="phone" id="phone" 
                            value="{{ old('phone') }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-primary text-white py-2 px-6 rounded-lg font-semibold">
                    Proceed to Payment
                </button>
            </div>
        </form>
    </div>
</div>
@endsection