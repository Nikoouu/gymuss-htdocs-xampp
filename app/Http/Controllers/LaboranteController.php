<?php

namespace gymuss\Http\Controllers;

use Illuminate\Http\Request;
use gymuss\personal_training;
use Illuminate\Support\Facades\Redirect;
use gymuss\Http\Requests\LaboranteFormRequest;
use DB;

class LaboranteController extends Controller
{

    public function __construct()
    {

    }

    public function index(Request $request){

        if ($request){
            $query=trim($request->get('searchText'));
            $personal_training=DB::table('personal_training')->where('PERS_TRAI_NOM','LIKE','%'.$query.'%')
                ->where('PERS_TRAI_EST','=','1')
                ->orderBy('PERS_TRAI_ID','desc')
                ->paginate(7);
            return view('laborante.index',["personal_training"=>$personal_training,"searchText"=>$query]);
        }
    }
    public function create(){
        return view("laborante.create");

    }
    public function store(LaboranteFormRequest $request){

        $personal_training= new personal_training;
        $personal_training->PERS_TRAI_NOM=$request->get('PERS_TRAI_NOM');
        $personal_training->PERS_TRAI_APE_PAT=$request->get('PERS_TRAI_APE_PAT');
        $personal_training->PERS_TRAI_APE_MAT=$request->get('PERS_TRAI_APE_MAT');
        $personal_training->PERS_TRAI_EST='1';
        $personal_training->save();
        return Redirect::to('laborante');
    }
    public function show($id){

        return view('laborante.show',["personal_training"=>personal_training::findOrFail($id)]);

    }
    public function edit($id){

        return view('laborante.edit',["personal_training"=>personal_training::findOrFail($id)]);
    }
    public function update(LaboranteFormRequest $request, $id){

        $personal_training=personal_training::findOrFail($id);
        $personal_training->PERS_TRAI_NOM=$request->get('PERS_TRAI_NOM');
        $personal_training->PERS_TRAI_APE_PAT=$request->get('PERS_TRAI_APE_PAT');
        $personal_training->PERS_TRAI_APE_MAT=$request->get('PERS_TRAI_APE_MAT');
        $personal_training->update();
        return Redirect::to('laborante');
    }
    public function destroy($id){

$personal_training=personal_training::findOrFail($id);
$personal_training->PERS_TRAI_EST='0';
$personal_training->update();
return Redirect::to('laborante');

    }

}
