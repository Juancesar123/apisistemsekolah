<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalpelajaran extends Model {

    protected $fillable = ["matapelajaran", "id_kelas", "tanggal", "jammasuk", "jamselesai"];

    protected $dates = [];

    public static $rules = [
        "matapelajaran" => "required",
        "id_kelas" => "numeric",
        "tanggal" => "required",
        "jamselesai" => "required",
    ];

    public function kelas()
    {
        return $this->belongsTo("App\Kela");
    }


}
