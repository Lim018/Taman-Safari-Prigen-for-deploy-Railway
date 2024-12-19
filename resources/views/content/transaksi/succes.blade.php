@extends('content.app')

@section('content')
<div class="container py-5">
    <div class="text-center">
        <h1 class="mb-4">Payment Successful</h1>
        <p>Thank you for your purchase. Your transaction has been completed successfully.</p>
        <p>Transaction ID: {{ $transaksi->id }}</p>
        <a href="{{ route('purchased-tickets.index') }}" class="btn btn-primary mt-3">Lihat Tiket</a>
    </div>
</div>
@endsection