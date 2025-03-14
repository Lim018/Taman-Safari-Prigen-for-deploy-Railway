<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';
    protected $primaryKey = 'ID_KONTEN';
    
    protected $fillable = [
        'TITLE',
        'TITLE2',
        'DESCRIPSION',
        'event_id',
        'HARGA_ADULT',
        'HARGA_CHILD',
        'IMAGE'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'content_id', 'ID_KONTEN');
    }
    public function PurchasedTicket()
    {
        return $this->hasMany(PurchasedTicket::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

}
