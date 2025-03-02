<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket - {{ $purchasedTicket->ticket_number }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            background: #f5f5f5;
        }
        .ticket {
            border: 2px solid #90C659;
            border-radius: 12px;
            overflow: hidden;
            margin: 20px auto;
            max-width: 800px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .ticket-header {
            background: linear-gradient(135deg, #90C659 0%, #78a84b 100%);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .ticket-header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }
        .ticket-body {
            padding: 40px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            background: linear-gradient(to bottom, #ffffff 0%, #f9f9f9 100%);
        }
        .ticket-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
        .ticket-qr {
            text-align: center;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            border: 1px dashed #90C659;
        }
        .info-group {
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #90C659;
        }
        .info-group h2 {
            margin: 0 0 8px 0;
            font-size: 13px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .info-group p {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }
        .ticket-qr img {
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .ticket-qr p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }
        .ticket-footer {
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #666;
            border-top: 1px solid #eee;
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="ticket-header">
            <h1>{{ $purchasedTicket->content->TITLE }}</h1>
            <div style="font-size: 18px; font-weight: 500;">E-Ticket</div>
        </div>
        
        <div class="ticket-body">
            <div class="ticket-info">
                <div class="info-group">
                    <h2>Tanggal Kunjungan</h2>
                    <p>{{ $purchasedTicket->booking_date->format('d F Y') }}</p>
                </div>

                <div class="info-group">
                    <h2>Ticket Number</h2>
                    <p>{{ $purchasedTicket->ticket_number }}</p>
                </div>

                <div class="info-group">
                    <h2>Ticket Type</h2>
                    <p>{{ ucfirst($purchasedTicket->ticket_type) }}</p>
                </div>

                <div class="info-group">
                    <h2>Quantity</h2>
                    <p>{{ $purchasedTicket->quantity }}</p>
                </div>
            </div>
            
            <div class="ticket-qr">
                <img src="data:image/png;base64,{{ $qrCode }}" width="180">
                <p>Scan QR Code untuk konfirmasi tiket</p>
            </div>
        </div>
        
        <div class="ticket-footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>

