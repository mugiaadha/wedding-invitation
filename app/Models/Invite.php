<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quota', 'uniqid', 'presence', 'response'];

    public function getMessage() {
        return $this
            ->hasOne(Wish::class, 'uniqueId', 'uniqid')
            ->orderBy('id', 'desc')
            ->first()
            ->message ?? '';
    }
}
