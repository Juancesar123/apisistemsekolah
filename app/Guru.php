<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model {

    protected $fillable = ["namaguru", "idsekolah","alamat","nomortelpon","tempatlahir","tanggallahir","foto","jeniskelamin"];

    protected $dates = [];

    public static $rules = [

    ];

    public function sekolah()
    {
        return $this->belongsTo("App\Sekolah");
    }


}
