<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Acarasekolah extends Model {

    protected $fillable = ["namacara", "id_kelas", "id_sekolah", "kela_id", "sekolah_id"];

    protected $dates = ["tanggal_acara"];

    public static $rules = [
        "namacara" => "required",
        "id_kelas" => "numeric",
        "id_sekolah" => "numeric",
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
