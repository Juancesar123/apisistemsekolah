<?php namespace App\Http\Controllers;
use App\Users;

class UsersController extends Controller {

    const MODEL = "App\Users";

    use RESTActions;
    public function statuscriteria($criteria){
        $data = Users::where('status',$criteria)->get();
        return $data;
    }
}
