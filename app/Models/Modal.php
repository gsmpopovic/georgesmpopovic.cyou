<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;

    public $fillable = [
        "title",
        "subtitle",
        "thumbnail",
        "description",
        "github_link",
        "external_link"
    ];
}
