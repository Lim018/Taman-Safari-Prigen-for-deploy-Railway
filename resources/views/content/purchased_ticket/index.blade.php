@extends('content.app')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="section-header mb-4">
        <h1 class="title-heading" style="font-family: 'Mikado', sans-serif; font-weight: 900; color: #274E13;">
            Tiket Saya
        </h1>
    </div>

    <!-- Content Section -->
    @if($purchasedTickets->isEmpty())
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>
            Anda belum membeli tiket apapun.
        </div>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($purchasedTickets as $ticket)
                <div class="col">
                    <div class="card h-100 ticket-card">
                        <!-- Card Header -->
                        <div class="card-header d-flex align-items-center" 
                             style="background-color: #90C659; color: white;">
                            <i class="fas fa-ticket-alt me-2"></i>
                            <h5 class="mb-0">{{ $ticket->content->TITLE }}</h5>
                        </div>
                        
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="ticket-details">
                                <div class="info-group mb-3">
                                    <label class="text-muted mb-1">Tipe Tiket</label>
                                    <p class="mb-0"><strong>{{ ucfirst($ticket->ticket_type) }}</strong></p>
                                </div>

                                <div class="info-group mb-3">
                                    <label class="text-muted mb-1">Tanggal Kunjungan</label>
                                    <p class="mb-0"><strong>{{ $ticket->booking_date->format('d F Y') }}</strong></p>
                                </div>

                                <div class="info-group mb-3">
                                    <label class="text-muted mb-1">Jumlah</label>
                                    <p class="mb-0"><strong>{{ $ticket->quantity }}</strong></p>
                                </div>

                                <div class="info-group mb-3">
                                    <label class="text-muted mb-1">Total Harga</label>
                                    <p class="mb-0"><strong>Rp {{ number_format($ticket->price * $ticket->quantity, 0, ',', '.') }}</strong></p>
                                </div>

                                <div class="info-group mb-4">
                                    <label class="text-muted mb-1">Nomor Tiket</label>
                                    <p class="mb-0"><strong>{{ $ticket->ticket_number }}</strong></p>
                                </div>
                            </div>
                            
                            <!-- Download Button -->
                            <a href="{{ route('purchased-tickets.download', $ticket->id) }}" 
                               class="btn btn-success w-100 d-flex align-items-center justify-content-center">
                                <i class="fas fa-download me-2"></i> 
                                <span>Download Tiket</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
.ticket-card {
    border: none;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}

.ticket-card:hover {
    transform: translateY(-5px);
}

.info-group label {
    font-size: 0.9rem;
    color: #6c757d;
}

.card-header {
    border-bottom: none;
}

.btn-success {
    background-color: #90C659;
    border-color: #90C659;
    padding: 10px;
}

.btn-success:hover {
    background-color: #74a347;
    border-color: #74a347;
}
</style>
@endsection

