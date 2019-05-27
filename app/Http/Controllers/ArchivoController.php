<?php
namespace App\Http\Controllers;
use App\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->archivos as $archivo) {
            if ($archivo->isValid()) {
                $hashedName = $archivo->store('');
                $regArchivo = Archivo::create([
                    'modelo_id' => $request->modelo_id,
                    'modelo_type' => 'App\\' . $request->modelo_type,
                    'nombre' => $archivo->getClientOriginalName(),
                    'hashed' => $hashedName,
                    'mime' => $archivo->getClientMimeType(),
                    'size' => $archivo->getClientSize(),
                ]);
                $regArchivo->save();
            }
        }
        return redirect()->back();
    }
    /**
     * Descarga el archivo.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        $headers = ['Content-Type: ' . $archivo->mime];
        return Storage::download($archivo->hashed, $archivo->nombre, $headers);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        Storage::delete($archivo->hashed);
        $archivo->delete();
        return redirect()->back();
    }
}