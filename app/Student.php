<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan']; // isi dari fillable adalah field mana saja yang dizinkan untuk diisi datanya
    
    // guarded kebalikan dari fillabe yaitu data arraynya merupakan field yang tidak boleh diisi
    // protected $guarded = ['nama', 'nrp', 'email', 'jurusan'];
}
