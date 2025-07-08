<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    protected $table = 'detailUser';

    protected $fillable = [
        'phone',
        'birth',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
