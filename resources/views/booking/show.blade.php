@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <a href="{{ route('bookings.user') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to My Bookings
        </a>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="border-b border-gray-200 bg-gray-50 px-6 py-4">
                <h1 class="text-xl font-semibold">Booking Details</h1>
            </div>
            
            <div class="p-6">
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Booking ID</p>
                        <p class="font-medium">PS-{{ $booking->id }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Status</p>
                        <p>
                            @if($booking->status == 'pending')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            @elseif($booking->status == 'paid')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Paid
                                </span>
                            @elseif($booking->status == 'completed')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Completed
                                </span>
                            @elseif($booking->status == 'cancelled')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Cancelled
                                </span>
                            @endif
                        </p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Service</p>
                        <p class="font-medium">{{ $booking->service->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Date</p>
                        <p class="font-medium">{{ date('F d, Y', strtotime($booking->booking_date)) }}</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Time</p>
                        <p class="font-medium">{{ $booking->session_time }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Booked On</p>
                        <p class="font-medium">{{ date('F d, Y', strtotime($booking->created_at)) }}</p>
                    </div>
                </div>
                
                <div class="border-t border-gray-200 pt-4 mt-4">
                    <h2 class="font-semibold mb-4">Payment Details</h2>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Base Price</span>
                            <span>Rp {{ number_format($booking->base_price, 0, ',', '.') }}</span>
                        </div>
                        
                        @if($booking->weekend_surcharge > 0)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Weekend Surcharge (20%)</span>
                            <span>Rp {{ number_format($booking->weekend_surcharge, 0, ',', '.') }}</span>
                        </div>
                        @endif
                        
                        <div class="flex justify-between font-semibold pt-2 border-t border-gray-200">
                            <span>Total Price</span>
                            <span>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
                
                @if($booking->status == 'pending')
                <div class="mt-6">
                    <a href="{{ $booking->payment_url }}" class="block w-full bg-primary text-white text-center py-2 px-4 rounded-lg font-semibold">
                        Complete Payment
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection