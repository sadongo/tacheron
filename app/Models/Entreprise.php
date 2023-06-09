<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'domaine',
        'telephone',
        'telephone2',
        'responsable',
        'ville_id',
        'user_id',
        'quartier_id',
        'whatsapp',
        'email',
        'adresse'
    ];

    function user () {
        return $this.belongsTo(User::class);
    }

    function domaine () {
        return $this.belongsTo(Domaine::class);
    }
}
