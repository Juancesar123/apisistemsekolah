<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rangkumannilai extends Model {

    protected $fillable = ["idsiswa", "nilaiharian", "uts", "ukk"];

    protected $dates = [];

    public static $rules = [
        "idsiswa" => "numeric",
        "nilaiharian" => "required|numeric",
        "uts" => "required|numeric",
        "ukk" => "required|numeric",
    ];

    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo("App\Siswa");
    }


}
