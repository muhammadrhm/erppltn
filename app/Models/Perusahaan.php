<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Perusahaan extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = "perusahaan";
    protected $primaryKey = 'nomor';
    public $timestamps = false;
    protected $guarded=['created_at'];
    protected $dates=['deleted_at'];
}
