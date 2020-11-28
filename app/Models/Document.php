<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price_per_day',
        'price_per_week',
        'price_per_month',
        'user_id',
        'doctype_id',
        'genre_id',
    ];

    /**
     * Get the genre that owns the document.
     */
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    /**
     * Get the doctype that owns the document.
     */
    public function doctype()
    {
        return $this->belongsTo('App\Models\DocType');
    }

    /**
     * Get the author that owns the document.
     */
    public function author()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the ratings for the document.
     */
    public function rating()
    {
        return $this->hasMany('App\Models\Rating');
    }

    /**
     * Get the rental instances of the book.
     */
    public function rental()
    {
        return $this->hasMany('App\Models\Docs_Rented');
    }
}
