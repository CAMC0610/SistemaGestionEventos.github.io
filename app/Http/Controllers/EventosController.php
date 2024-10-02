<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Pest\Mutate\Plugins\Mutate;
use PhpParser\Node\Expr\Cast;
use PhpParser\Node\Stmt\Switch_;
use Ramsey\Uuid\Converter\TimeConverterInterface;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::orderBy('id_evento','ASC')->get();
        return view('homeUser',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $eventoNew = new Evento();
        $eventoNew->nombre_evento = request('nombre_evento');
        $eventoNew->fecha_de_evento = request('fecha_de_evento');
        $eventoNew->hora_inicio_evento = request('hora_inicio_evento');
        $eventoNew->hora_finalizacion_evento = request('hora_finalizacion_evento');
        $eventoNew->ubicaion_evento = request('ubicaion_evento');
        switch(request('tipo_evento')){
            case 'Acádemico':
                $eventoNew->tipo_evento = 'academico';
                break;
            case 'Recreativo':
                $eventoNew->tipo_evento = 'recreativo';
                break;
            case 'Deportivo':
                $eventoNew->tipo_evento = 'deportivo';
                break;
            case 'Otro':
                $eventoNew->tipo_evento = 'otro';
                break;
            default:
                $eventoNew->tipo_evento = 'otro';
                break;
        }
        $eventoNew->save();
        return redirect()->action([EventosController::class,'index']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function delete(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, Evento $evento)
    {
        $evento->nombre_evento = $request->nombre_evento;
        $evento->fecha_de_evento = $request->fecha_de_evento;
        $evento->hora_inicio_evento = $request->hora_inicio_evento;
        $evento->hora_finalizacion_evento = $request->hora_finalizacion_evento;
        $evento->ubicaion_evento = $request->ubicaion_evento;
        switch($request->tipo_evento){
            case 'Acádemico':
                $evento->tipo_evento = 'academico';
                break;
            case 'Recreativo':
                $evento->tipo_evento = 'recreativo';
                break;
            case 'Deportivo':
                $evento->tipo_evento = 'deportivo';
                break;
            case 'Otro':
                $evento->tipo_evento = 'otro';
                break;
            default:
                $evento->tipo_evento = 'otro';
                break;
        }

        $evento->save();
        
        return redirect()->action([EventosController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Evento $evento, Request $request)
    {
        return view('editarEvento', compact('evento'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $evento = DB::table('eventos')->where('nombre_evento', request('eventoBorrate'));
        $evento->delete();
        return redirect()->action([EventosController::class, 'index']);
    }
}
