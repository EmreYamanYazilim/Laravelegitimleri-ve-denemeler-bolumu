<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bilgilerim extends Model
{
    use HasFactory;




    protected $table = "bilgilerim";
    //protected $fillable = ["metin","yorum"];
    protected $guarded = [];
}
