<?php

namespace App\Models;
use App\Models\Reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $casts = [
        'settings' => 'array'
     ];
    protected $fillable = [
        'id',
        'source',
        'StartUtc'=>"2021-11-14T08:48:50Z",
        'EndUtc'=>"2022-11-14T08:48:50Z",
        'cancelled_at',
        'State',
        'user_id',
        'status' => 'NULL',
        'created_at_in_pms',
        'created_at',
    ];
    

    public function rooms(){
        return $this->hasOne(Reservation::class);
    }
}
