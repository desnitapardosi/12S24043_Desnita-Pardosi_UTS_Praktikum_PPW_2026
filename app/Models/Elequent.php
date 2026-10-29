<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Eloquent extends Model
{
    use HasFactory;

    protected $fillable = [
        'Category', 'Equipment', 'LoanRequest',];

    public function kategori(): hasMany
    {
        return $this->belongsTo(Kategori::class);
    }
}