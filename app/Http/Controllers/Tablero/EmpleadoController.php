<?php

namespace App\Http\Controllers\Tablero;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarEmpleado;
use App\Models\Identificacion;
use App\Models\Model;
use Exception;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Console\Input\Input;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate(10);
        return view('tablero.empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tablero.empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarEmpleado $request)
    {
        $datos = $request->validated() + Identificacion::numeroDeEmpleado() + Model::creadoPor();
        try{
            Empleado::create($datos);
            session()->flash('exito', 'El empleado fue agregado exitosamente');
            return redirect(route('empleados.index'));
        }
        catch(Exception $e){
            session()->flash('falla', 'Algo salio mal y el empleado no pudo ser agregado. Error: ' . $e->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('tablero.empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('tablero.empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarEmpleado $request, Empleado $empleado)
    {
        $datos = $request->validated();
        try{
            $empleado->update($datos);
            session()->flash('exito', 'El empleado fue actualizado exitosamente');
            return redirect(route('empleados.index'));
        }
        catch(Exception $e){
            session()->flash('falla', 'Algo salio mal y el empleado no pudo ser actualizado. Error: ' . $e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        try{
            $empleado->delete();
            session()->flash('exito', 'El empleado fue eliminado exitosamente');
            return redirect(route('empleados.index'));
        }
        catch(Exception $e){
            session()->flash('falla', 'Algo salio mal y el empleado no pudo ser eliminado. Error: ' . $e->getMessage());
            return back();
        }
    }

    public function buscarEmpleados()
    {
        if (is_null(request('consulta'))) {  
            $errors = new MessageBag();
            $errors->add('consulta', 'Un criterio de busqueda es requerido.');
            return back()->withErrors($errors);
        }

        if (request('nombre')) request()->merge(['primer_nombre' => 1, 'segundo_nombre' => 1]);
        if (request('apellido')) request()->merge(['primer_apellido' => 1, 'segundo_apellido' => 1]);
        if (request('telefono')) request()->merge(['telefono2' => 1]); 
        $empleados = Empleado::query();
        $cadenaDeConsulta = [];
        $consulta = request('consulta');
        $cadenaDeConsulta['consulta'] = $consulta;
        $criterios = [
            'numero', 
            'contratdo_el', 
            'direccion', 
            'ciudad', 
            'estado', 
            'codigo_postal', 
            'primer_nombre', 
            'segundo_nombre', 
            'primer_apellido', 
            'segundo_apellido', 
            'telefono', 
            'telefono2'
        ];

        foreach($criterios as $criterio){
            $valor = request($criterio);
            if ($valor) {
                $empleados = $empleados->where($criterio, 'LIKE', '%'.$consulta.'%');
                $cadenaDeConsulta[$criterio] = $valor;
                request()->merge([$criterio => 0]);
                break;
            }
        };

        foreach($criterios as $criterio){
            $valor = request($criterio);
            if ($valor) {
                $empleados = $empleados->orWhere($criterio, 'LIKE', '%'.$consulta.'%');
                $cadenaDeConsulta[$criterio] = $valor;
            }
        };

        $empleados = $empleados->paginate(10)->appends($cadenaDeConsulta);
        return view('tablero.empleados.index', compact('empleados'));

        // $validator = $request->validate([
        //     'consulta' => ['required']
        // ],[
        //     'required' => 'Por favor ingrese una busqueda.'
        // ]);
        
        // $empleados = null;
        // $consulta = $request->input('consulta');
        // $numero = $request->input('numero');
        // $nombre = $request->input('nombre');
        // $apellido = $request->input('apellido');
        // $contratado_el = $request->input('contratado_el');
        // $direccion = $request->input('direccion');
        // $ciudad = $request->input('ciudad');
        // $estado = $request->input('estado');
        // $codigo_postal = $request->input('codigo_postal');
        // $telefono = $request->input('telefono');
        
        // try{
        //     if (!is_null($consulta)){

        //         $empleados = Empleado::query();
                
        //         if ($numero) {
        //             $empleados = $empleados->where('numero','LIKE', '%'.$consulta.'%');
        //             $numero = false;
        //         }
        //         elseif ($nombre){
        //             $empleados = $empleados->where('primer_nombre','LIKE', '%'.$consulta.'%')->orWhere('segundo_nombre', 'LIKE', '%'.$consulta.'%');
        //             $nombre = false;
        //         }
        //         elseif ($apellido){
        //             $empleados = $empleados->where('primer_apellido','LIKE', '%'.$consulta.'%')->orWhere('segundo_apellido', 'LIKE', '%'.$consulta.'%');
        //             $apellido = false;
        //         }
        //         elseif ($contratado_el) {
        //             $empleados = $empleados->where('contratado_el','LIKE', '%'.$consulta.'%');
        //             $contratado_el = false;
        //         }
        //         elseif ($direccion) {
        //             $empleados = $empleados->where('direccion','LIKE', '%'.$consulta.'%');
        //             $direccion = false;
        //         }
        //         elseif ($ciudad) {
        //             $empleados = $empleados->where('ciudad','LIKE', '%'.$consulta.'%');
        //             $ciudad = false;
        //         }
        //         elseif ($estado) {
        //             $empleados = $empleados->where('estado','LIKE', '%'.$consulta.'%');
        //             $estado = false;
        //         }
        //         elseif ($codigo_postal) {
        //             $empleados = $empleados->where('codigo_postal','LIKE', '%'.$consulta.'%');
        //             $codigo_postal = false;
        //         }
        //         elseif ($telefono){
        //             $empleados = $empleados->where([['telefono','LIKE', '%'.$consulta.'%'], ['telefono2', 'LIKE', '%'.$consulta.'%']]);
        //             $telefono = false;
        //         }

        //         if ($numero)  $empleados = $empleados->orWhere('numero','LIKE', '%'.$consulta.'%');
        //         if ($nombre) $empleados = $empleados->orWhere('primer_nombre','LIKE', '%'.$consulta.'%')->orWhere('segundo_nombre', 'LIKE', '%'.$consulta.'%');
        //         if ($apellido) $empleados = $empleados->orWhere('primer_apellido','LIKE', '%'.$consulta.'%')->orWhere('segundo_apellido', 'LIKE', '%'.$consulta.'%');
        //         if ($contratado_el)  $empleados = $empleados->orWhere('contratado_el','LIKE', '%'.$consulta.'%');
        //         if ($direccion)  $empleados = $empleados->orWhere('direccion','LIKE', '%'.$consulta.'%');
        //         if ($ciudad)  $empleados = $empleados->orWhere('ciudad','LIKE', '%'.$consulta.'%');
        //         if ($estado)  $empleados = $empleados->orWhere('estado','LIKE', '%'.$consulta.'%');
        //         if ($codigo_postal)  $empleados = $empleados->orWhere('codigo_postal','LIKE', '%'.$consulta.'%');
        //         if ($telefono) $empleados = $empleados->orWhere([['telefono','LIKE', '%'.$consulta.'%'], ['telefono2', 'LIKE', '%'.$consulta.'%']]);

        //         $empleados = $empleados->paginate(10);

        //         $empleados->appends(['query' => $consulta]);

        //         return view('tablero.empleados.index', compact('empleados', 'consulta'));

        //     }

        //     $errors = new MessageBag();
        //     $errors->add('consulta', 'Un criterio de busqueda es requerido.');
        //     return view('tablero.empleados.index', compact('empleados'))->withErrors($errors);
        // }
        // catch(Exception $e){
        //     $errorMessage = 'Algo salio mal y la busqueda no puso der ejecutada.';
        //     return view('tablero.empleados.index', compact('errorMessage', 'empleados', 'consulta'));
        // }        
    }
}
