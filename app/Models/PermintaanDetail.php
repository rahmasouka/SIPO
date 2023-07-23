<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanDetail extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $primaryKey = 'permintaan_detail_id';
    protected $table = 'permintaan_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['permintaan_detail_id'];
}
