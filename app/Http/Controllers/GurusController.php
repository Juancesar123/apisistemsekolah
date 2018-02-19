<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Guru;
class GurusController extends Controller {

    const MODEL = "App\Guru";

    /**
 * @SWG\Swagger(
 *     basePath="/",
 *     schemes={"http", "https"},
 *     host="http://localhost",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="L5 Swagger API",
 *         description="L5 Swagger API description",
 *         @SWG\Contact(
 *             email="darius@matulionis.lt"
 *         ),
 *     )
 * )
 */
/**
 * @SWG\Get(
 *      path="/siswa/",
 *      operationId="getProjectsList",
 *      tags={"Projects"},
 *      summary="Get list of projects",
 *      description="Returns list of projects",
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @SWG\Response(response=400, description="Bad request"),
 *       security={
 *           {"api_key_security_example": {}}
 *       }
 *     )
 *
 * Returns list of projects
 */
/**
 * @SWG\Get(
 *      path="/siswa/{id}",
 *      operationId="getProjectById",
 *      tags={"Projects"},
 *      summary="Get project information",
 *      description="Returns project data",
 *      @SWG\Parameter(
 *          name="id",
 *          description="Project id",
 *          required=true,
 *          type="integer",
 *          in="path"
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *      @SWG\Response(response=400, description="Bad request"),
 *      @SWG\Response(response=404, description="Resource Not Found"),
 *      security={
 *         {
 *             "oauth2_security_example": {"write:projects", "read:projects"}
 *         }
 *     },
 * )
 *
 */
   //const MODEL = "App\Siswa";
   public function add(Request $request)
   {
       $m = new Guru;
       $request->file('foto')->move('./img', $request->file('foto')->getClientOriginalName());
      // $this->validate($request, $m::$rules);
       // $array = array([
       //     "nama"=>$request->nama
       // ]);
       $m->namaguru = $request->namaguru;
       $m->nomortelpon = $request->nomortelpon;
       $m->jeniskelamin = $request->jeniskelamin;
       $m->idsekolah = '1';
      // $m->alamat = $request->alamat;
       $m->tempatlahir = $request->tempatlahir;
       $m->tanggallahir = $request->tanggallahir;
       $m->foto = 'img/'.$request->file('foto')->getClientOriginalName();
       $m->alamat = $request->alamat;
       $m->save();
   }
   public function all()
   {
       $data = Guru::all();
       return $data;
   }

   public function get($id)
   {
       
       $model = Guru::find($id);
       if(is_null($model)){
           return false;
       }
       return $model;
   }
   public function remove($id)
   {
      // $m = new Siswa;
       // if(is_null($m::find($id))){
       //     return false;
       // }
       //echo"kampret";
       //echo $id;
       Guru::where('id',$id)->delete();

   }

}
