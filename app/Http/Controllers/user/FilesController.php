<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\models\file;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;



class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    #files index
    $files =File::latest();
    return view('user.files.index' ,compact('files'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $max_size=(int)ini_get('upload_max_filesize')*10240;
        $files=$request->file('files');
        $user_id=Auth::id();

        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                if (Storage::putFileAs('/public'.$user_id.'/', $file, $file->getClientOriginalName())) {
                    File::create([
                        'name' => $file->getClientOriginalName(),
                        'user_id'=>$user_id
                    ]);

                    Alert::success('Exito', 'El archivo se a cargado correctamente');
                    return back();
                } else {
                    Alert::warning('Error', 'Debe seleccionar uno o más archivos');
                    return back();
                }
            }
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
