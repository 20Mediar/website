<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VendoImovelU;
use App\Mail\SendEmailAdmin;
use App\Mail\SendEmailAdminC;
use App\Mail\ComproImovel;
use App\Models\Municipio;

class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'concelho'   =>  'required',
            'distrito'   =>  'required',
            'freguesia'   =>  'required',
            'natureza'     =>  'required',
            'tipologia'    =>  'required',
            'valor'        =>  'required',
            'nome'         =>  'required',
            'email'        =>  'required',
        ]);
        $data = array( 
            'concelho'   =>  $request->concelho,
            'distrito'   =>  $request->distrito,
            'freguesia'   =>  $request->freguesia,
            'natureza'     =>  $request->natureza,
            'tipologia'    =>  $request->tipologia,
            'valor'        =>  $request->valor,
            'descricao'    =>  $request->descricao,
            'nome'         =>  $request->nome,
            'email'        =>  $request->email,
        );
        Mail::to('geral@20mediar.pt')-> send(new SendEmailAdmin($data));
        Mail::to($data['email'])-> send(new VendoImovelU($data));
        return back()->with('success', 'Obrigado! Verifique o seu email.');
    }

    function sendCompra(Request $request){
        $this->validate($request,[
            'concelho'   =>  'required',
            'distrito'   =>  'required',
            'freguesia'   =>  'required',
            'tipologia'    =>  'required',
            'orcamento'    =>  'required',
            'nome'         =>  'required',
            'email'        =>  'required',
        ]);
        $data = array( 
            'concelho'   =>  $request->concelho,
            'distrito'   =>  $request->distrito,
            'freguesia'   =>  $request->freguesia,
            'tipologia'    =>  $request->tipologia,
            'orcamento'    =>  $request->orcamento,
            'nome'         =>  $request->nome,
            'descricao'    =>  $request->descricao,
            'email'        =>  $request->email,
        );
        Mail::to('geral@20mediar.pt')-> send(new SendEmailAdminC($data));
        Mail::to($data['email'])-> send(new ComproImovel($data));
        return back()->with('success', 'Obrigado! Verifique o seu email.');
    }

    function bd(){ 
        $students = json_decode(file_get_contents("https://www.20mediar.pt/img/freguesias.json"), true);
        $arrlength = count($students);
        $muni = Municipio::all();
        for($x = 0; $x < $arrlength; $x++) {
          var_dump($students[$x]['nome']);

          if (strcmp($students[$x]['nome'],$muni->municipios) == 0) {
            $arr= count($students[$x]['freguesias']);
            for ($i=0; $i < $arr; $i++) { 
                $r= new Freguesia;
                $r->freguesia= $students[$x]['freguesias'][$i];
                $r->id_municipio = $students[$x]['nome'];
                $r->save();
              }
          }
          /*$arr= count($students[$x]['municipios']);

          for ($i=0; $i < $arr; $i++) { 
            $r= new Municipio;
            $r->municipios= $students[$x]['municipios'][$i];
            $r->id_distrito = $students[$x]['distrito'];
            $r->save();
          }*/
          
        }
    
        
    }
}