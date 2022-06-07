<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = '_contact';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'email', 'pesan'];
}
