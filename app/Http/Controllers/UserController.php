<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function incripcionView(){
        return view('inscripcion');
    }

    public function volverHome(){
        return view('index');
    }

    public function inscripcionUser(Request $request){
        $datos=$request->except('_token', 'register-boton');
        DB::table('tbl_participante')->insertGetId(['nom_part'=>$datos['name'],'apellido_part'=>$datos['apellido'],'DNI_part'=>$datos['dni'],'fechaNac_part'=>$datos['nacido'],'sexo_part'=>$datos['sexo']]);

        $cumpleanos = new \DateTime($datos['nacido']);
        $hoy = new \DateTime();
        $annos = $hoy->diff($cumpleanos);
        $edad = $annos->y;

        $idcategoria = DB::select('SELECT id_cat FROM tbl_categoria WHERE edadMin<=? AND edadMax>=? AND sexo = ?', [$edad, $edad, $datos['sexo']]);
        $final = $idcategoria[0]->id_cat;
        $idparticipante = DB::select('SELECT id_part FROM `tbl_participante` WHERE DNI_part = ?', [$datos['dni']]);
        $final0 = $idparticipante[0]->id_part;
        DB::select('INSERT INTO `tbl_inscripcion`(`id_cursa`, `id_part`, `pago`, `id_cat`) VALUES (1, ?, "Si", ?)', [$final0, $final]);


        return view('index');
    }
}
