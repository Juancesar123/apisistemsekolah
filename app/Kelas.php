<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {

    protected $fillable = ["kelas", "idsekolah"];

    protected $dates = [];

    public static $rules = [
        "idsekolah" => "numeric",
    ];

    public function sekolah()
    {
        return $this->belongsTo("App\Sekolah");
    }


}
