<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function Files()
    {
        return $this->belongsToMany(File::class)
            ->withPivot('order', 'id')
            ->orderBy('order')
            ->withTimestamps();
    }

    
    /**
     * Sessions is pholymorph relationship
     *
     * @return void
     */
    public function Sessions()
    {        
        return $this->morphToMany(Session::class, 'activitable');
    }
}
