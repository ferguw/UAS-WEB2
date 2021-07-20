<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $table = 'makul';
    protected $fillable = ['kd_makul','nama_makul', 'sks'];
    public $timestamps = false;

    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'makul_id', 'kd_makul');
    }
}
