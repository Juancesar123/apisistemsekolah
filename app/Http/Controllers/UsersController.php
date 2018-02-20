<?php namespace App\Http\Controllers;
use App\Users;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class UsersController extends Controller {

    const MODEL = "App\Users";

    use RESTActions;
    public function statuscriteria($criteria){
        $data = Users::where('status',$criteria)->get();
        return $data;
    }
    public function auth(Request $request){
        $data = Users::where(['email' => $request->email,'password' => $request->password])->first();
        return $data;
    }
}
