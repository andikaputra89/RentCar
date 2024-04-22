<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $fillable = ['mobil_id','fasilitas1','harga','fasilitas2','harga2'];
    public $timestamps = false;

    /**
     * Get the user that owns the Fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Mobil(): BelongsTo
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }
}
