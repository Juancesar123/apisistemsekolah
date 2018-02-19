<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model {

    protected $fillable = ["namasekolah", "sekolah_id"];

    protected $dates = [];

    public static $rules = [
        "sekolah_id" => "required|numeric",
    ];


}
