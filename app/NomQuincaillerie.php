<?php

namespace App;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Database\Eloquent\Model;

class NomQuincaillerie extends Model
{
    protected $table = 'nom_quincaillerie';
    protected $fillable = ['nom', 'url'];
}
