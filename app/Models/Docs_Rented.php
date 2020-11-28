<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs_Rented extends Model
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
        'price',
        'expiry_date',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'docs_rented';

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
