<?php
// app/Models/Preview.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    use HasFactory;

    protected $fillable = [
        'display_preview_class',
        'banner_preview',
        'profile_preview',
        'title_preview',
        'about_preview',
    ];
}
