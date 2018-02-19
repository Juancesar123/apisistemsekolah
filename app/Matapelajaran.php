<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model {

    protected $fillable = ["matapelajaran", "idkelas", "idsekolah", "kela_id", "sekolah_id"];

    protected $dates = ["tanggal"];

    public static $rules = [
        "matapelajaran" => "required",
        "idkelas" => "numeric",
        "idsekolah" => "numeric",
        "kela_id" => "required|numeric",
        "sekolah_id" => "required|numeric",
    ];

    public function kelas()
    {
        return $this->belongsTo("App\Kelas");
    }

    public function sekolah()
    {
        return $this->belongsTo("App\Sekolah");
    }


}
