<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRequest extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title',
        'due_date',
        'detail',
        'comment',
        'status'
    ];
}
