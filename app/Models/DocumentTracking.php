<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'document_detail_id',
        'office_division',
        'status',
        'note',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function documentDetail(){
        return $this->belongsTo(DocumentDetail::class);
    }
}
