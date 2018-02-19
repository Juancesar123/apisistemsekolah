<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {

    protected $fillable = ["kelas", "sekolah_id"];

    protected $dates = [];

    public static $rules = [
        "idsekolah" => "numeric",
        "sekolah_id" => "required|numeric",
    ];

    public function sekolah()
    {
        return $this->belongsTo("App\Sekolah");
    }


}
