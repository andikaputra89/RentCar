<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Varian extends Model
{
    use HasFactory;

    protected $table = 'varian';
    protected $fillable = ['mobil_id','harga_driver','harga_hanya_mobil'];

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
