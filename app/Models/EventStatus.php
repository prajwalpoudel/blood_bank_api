<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    use HasFactory;
    protected $table = 'event_statuses';
    protected $primaryKey = 'id';

    protected $fillable = ['evId', 'eventId', 'doId', 'like', 'attend'];
}
