<?php
// app/Models/Button.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $fillable = [
        'preview_id',
        'type',
        'text',
        'url',
    ];

    public function preview()
    {
        return $this->belongsTo(Preview::class);
    }
}

