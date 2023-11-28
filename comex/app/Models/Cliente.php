<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome'];
    protected $primaryKey = 'id';

    public function endereco(){

        return $this->hasOne(Endereco::class, 'endereco', 'id');
    }
}
