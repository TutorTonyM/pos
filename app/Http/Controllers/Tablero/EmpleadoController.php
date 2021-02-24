<?php

namespace App\Http\Controllers\Tablero;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarEmpleado;
use App\Models\Identificacion;
use App\Models\Model;
use Exception;
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

    public function buscarEmpleados(Request $request)
    {
        $validator = $request->validate([
            'consulta' => ['required']
        ],[
            'required' => 'Por favor ingrese una busqueda.'
        ]);

        $empleados = null;
        $consulta = $request->input('consulta');

        try{
            $empleados = Empleado::where('primer_apellido','LIKE', '%'.$consulta.'%')->paginate();            
            return view('tablero.empleados.index', compact('empleados'));
        }
        catch(Exception $e){
            $errorMessage = 'Algo salio mal y la busqueda no puso der ejecutada.';
            return view('tablero.empleados.index', compact('errorMessage', 'empleados'));
        }

        
    }
}
