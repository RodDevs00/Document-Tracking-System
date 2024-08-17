<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentTrace extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'document_detail_id',
        'status',
        'note',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function documentDetail(){
        return $this->belongsTo(DocumentDetail::class);
    }

    public function documentTracking()
    {
        return $this->belongsTo(DocumentTracking::class, 'document_detail_id', 'document_detail_id');
    }

}
