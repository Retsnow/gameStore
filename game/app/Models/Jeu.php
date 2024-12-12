<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    protected $table = 'jeux';

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genres_id');
    }

    

    protected $fillable = ['nom', 'image', 'image_gameplay1', 'image_gameplay2', 'image_gameplay3', 'video', 'lien', 'nb_download', 'date_sortie', 'genres_id'];
}
