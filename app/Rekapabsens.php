<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapabsens extends Model {

    protected $fillable = ["ijin", "idsiswa", "alfa", "sakit", "siswa_id"];

    protected $dates = [];

    public static $rules = [
        "ijin" => "required",
        "idsiswa" => "numeric",
        "alfa" => "required",
        "sakit" => "required",
    ];

    public function siswa()
    {
        return $this->belongsTo("App\Siswa");
    }


}
