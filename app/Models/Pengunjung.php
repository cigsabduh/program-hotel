<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'no_kamar',
        'nama_kamar',
        'nama_pengunjung',
        'fasilitas'
    ];

    public function scopeStorePengunjung($query, $request)
    {
        $status = $query->create([
            'no_kamar'          => $request->no_kamar,
            'nama_kamar'        => $request->nama_kamar,
            'nama_pengunjung'   => $request->nama_pengunjung,
            'fasilitas'         => $request->fasilitas,
        ]);

        if(!$status) return false;

        return true;
    }

    public function scopeUpdatePengunjung($query, $request)
    {
        $status = $query->where('id', $request->id)->update([
            'no_kamar'          => $request->no_kamar,
            'nama_kamar'        => $request->nama_kamar,
            'nama_pengunjung'   => $request->nama_pengunjung,
            'fasilitas'         => $request->fasilitas,
        ]);

        if(!$status) return false;

        return true;
    }
}
