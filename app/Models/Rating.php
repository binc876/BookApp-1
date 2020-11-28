<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'document_id',
        'value',
        'review',
    ];

    /**
     * Get the user that owns the rating.
     */
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the document that the rating is for.
     */
    public function Document()
    {
        return $this->belongsTo('App\Models\Document');
    }
}
