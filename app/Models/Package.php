<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Package extends Model
{
    use HasFactory;

    protected $table = 'package';

    protected $fillable = [
        'name',
        'price',
        'personCount',
        'dayPart',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;

    public function getPackages()
    {
        return $this->select(
            'id',
            'name',
            'price',
            'personCount',
            'dayPart',
        )
            ->from('package')
            ->get();
    }
}
