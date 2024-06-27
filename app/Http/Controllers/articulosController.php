<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Articulo;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticuloRequest;
use Illuminate\Validation\ValidationException;
class articulosController extends Controller
{

    /**
     * Display a listing of the resource.
     */


    public function index()
    {

        //para la eliminacion y edicion de articulos propios se pudiera haber validado con poner where con el parametro id del usuario logueado
        $data=Articulo::query()->select('articulos.id','nombre','descripcion','cantidad', 'precio', 'user_id', 'users.name')
        ->join('users','users.id','=','user_id')
        ->get();
        return view('home', ['dato' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ArticuloRequest $request)
    {



        $articulo = new Articulo;

        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->precio = $request->precio;
        $articulo->user_id = Auth::user()->id;
        $articulo->save();
        return redirect()->route('crearArticulo')->with('message', 'Producto guardado correctamente');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('nuevoarticulo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data=Articulo::query()->select('articulos.id','nombre','descripcion','cantidad', 'precio', 'user_id', 'users.name')
        ->join('users','users.id','=','user_id')
        ->where('articulos.id','=', $request->id)
        ->get();



        return view('articulo', ['dato' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticuloRequest $request, $id)
    {

        $articulo = Articulo::find($id);
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->precio = $request->precio;

        if($articulo->user_id == Auth::user()->id)
        {
            $articulo->user_id =  Auth::user()->id;
            $articulo->save();
            return redirect()->route('editArticulo',['id' => $id])->with('message', 'Editado correctamente');
        }
        else{
            return redirect()->route('editArticulo',['id' => $id])->with('messageerror', 'No esta autorizado');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $articulo = Articulo::find($id);

        $data=Articulo::query()->select('articulos.id','nombre','descripcion','cantidad', 'precio', 'user_id', 'users.name')
        ->join('users','users.id','=','user_id')
        ->get();

        if($articulo->user_id == Auth::user()->id)
        {
            $articulo->delete();

            return response()->json(['message' => 'Eliminado correctamente']);


        }
        else{
            return response()->json(['message' => 'No esta autorizado']);
        }



    }
}
