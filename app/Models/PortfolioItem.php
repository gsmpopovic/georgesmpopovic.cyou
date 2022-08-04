<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;

    public $fillable = [
        "title",
        "subtitle",
        "thumbnail",
        "description",
        "github_link",
        "external_link",
        "start_date",
        "end_date",
        "category"
    ];

    public function getThumbnailAbsolutePathAttribute(){
        return config("app.url") . "/storage/" . $this->thumbnail;
    }
}
