<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'location_id',
        'text',
        'due_date',
        'is_complete',
        'date_completed',
        'created_at',
        'updated_at',
                    ];
    protected $attributes = [
                'is_complete' => 0,
        'date_completed' => null,
    ];
            public function user()
            {
        return $this->belongsTo(User::class);
                }
                public function location()
                {
        return $this->belongsTo(Location::class);
                                    }
}
