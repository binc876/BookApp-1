<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocRented extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'expiry_date',
    ];

    /**
     * Get the user that made the rental.
     */
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the document that was rented.
     */
    public function Document()
    {
        return $this->belongsTo('App\Models\Document');
    }
}
