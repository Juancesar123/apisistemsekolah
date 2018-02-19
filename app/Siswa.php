<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Siswa extends Model {
    use SoftDeletes;
    protected $fillable = ["alamat","nama", "id_sekolah","nama","email","kelas","foto","tempatlahir","tanggallahir","jeniskelamin"];

    protected $dates = ["due"];

    public static $rules = [
        "nama" => "required",
    ];

}
