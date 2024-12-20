<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'POSTING_ID';

    protected $fillable = [
        'SENDER',
        'MESSAGE_TEXT',
        'CREATE_BY',
        'CREATE_DATE',
        'DELETE_MARK',
        'UPDATE_BY',
        'UPDATE_DATE',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'SENDER', 'ID_USER');
    }
}

