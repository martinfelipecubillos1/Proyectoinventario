<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = DB::table('responsables')
            ->select('responsables.*')
            ->get();

        return view('responsables.index', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsables.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        request()->validate([
            'cedula' => 'required|unique:responsables',
            'nombre' => 'required',
            'cargo' => 'required',
            'correo' => 'required|unique:responsables',
            'numero' => 'required',
        ]);
        $request->merge(['activo'=>false]);

      //  dd($request);

        Responsable::create($request->all());

        return redirect()->route('responsables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsable = Responsable::find($id);
        return view('responsables.editar', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            // 'codigoproveedor' => 'required|unique:proveedors',
            'nombre' => 'required',
            'cargo' => 'required',
            'numero' => 'required',
        ]);
        //dd($request->all());

        $responsable = responsable::find($id);
        $responsable->update($request->all());
        return redirect()->route('responsables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('responsables')->where('id', $id)->delete();

        return redirect()->route('responsables.index');
    }
}
