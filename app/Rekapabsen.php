<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapabsen extends Model {

    protected $fillable = ["ijin", "id", "project_id"];

    protected $dates = ["due"];

    public static $rules = [
        "ijin" => "required",
        "id" => "numeric",
        "project_id" => "required|numeric",
    ];

    public function project()
    {
        return $this->belongsTo("App\Project");
    }


}
