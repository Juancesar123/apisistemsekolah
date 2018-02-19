<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $fillable = ["username", "idtoaccount", "siswa_id"];

    protected $dates = ["due"];

    public static $rules = [
        "username" => "required",
        "idtoaccount" => "numeric",
        "siswa_id" => "required|numeric",
    ];

    public function siswa()
    {
        return $this->belongsTo("App\Siswa");
    }


}
