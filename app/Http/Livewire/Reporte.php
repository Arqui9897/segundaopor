<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\especialidad;
use App\Models\persona;
use App\Models\sintomas;
use App\Models\tipopersona;
use Illuminate\Support\Facades\DB;
use PDF;


class Reporte extends Component
{
    public $buscartipo;
    public $buscarnombre;


    public function listapersona()
    {
       
        $lp=DB::table('persona')
        ->select('persona.*','persona.id_tipopersona as tipoper','persona.id_sintomas as idsin','persona.id_especialidad as idespe')
        ->get();
         return PDF::loadView('livewire.listapersonas', compact('lp'))
        ->stream('archivo.pdf');
    } 


    public function tipopersona($buscartipo)
    
    {
        $btp=DB::table('persona')
        ->join('tipopersona','persona.id_tipopersona','=','tipopersona.id')
        ->select('persona.npersona','persona.apersona','persona.cpersona','persona.epersona','tipopersona.tpersona as tper')
        ->where( 'tipopersona.tpersona', $buscartipo )->get();
        return PDF::loadView('livewire.medopac', compact('btp'))
        ->stream('tipoper.pdf');
    }

    public function pornombre($buscarnombre)
    {
        $ts=DB::table('persona')
        ->select('persona.*','persona.id_tipopersona as tipoper')
        -> where( 'persona.npersona',$buscarnombre)->get();
        return PDF::loadView('livewire.tiposintomas', compact('ts'))
        ->stream('archivo.pdf');
    }

    public function render()
    {
        return view('livewire.reporte');
    }


}
