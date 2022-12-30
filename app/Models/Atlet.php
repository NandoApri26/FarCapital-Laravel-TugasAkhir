<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Atlet extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'atlets';

    public function level(){
        return $this -> BelongsTo('App\Models\Level');
    }
}
