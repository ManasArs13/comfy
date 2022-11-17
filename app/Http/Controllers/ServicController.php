<?php

namespace App\Http\Controllers;

use App\Models\Servic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $servic = Servic::find(1);
     
       return view ('admin.servic.index', ['servic' => $servic]);
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
        //
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
        $servic = Servic::find($id);
      
       return view ('admin.servic.edit', ['servic' => $servic]);
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
        $validate = $request->validate([

            'adres' => 'required|max:150|min:5',
            'phone' => 'required|max:150|min:5',
            'img1' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            'img2' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            'img3' => 'nullable|mimes:jpeg,jpg,png|max:10000'

        ]);
        
        $servic = Servic::find($id);

        $servic->adres = $request->input('adres');
        $servic->phone = $request->input('phone');

        if ($request->hasFile('img1')) {  
            Storage::delete($servic->img1);        
            $servic->img1 = $request->file('img1')->store('servic');              
        }

        if ($request->hasFile('img2')) {      
            Storage::delete($servic->img2);     
            $servic->img2 = $request->file('img2')->store('servic');              
        }

        if ($request->hasFile('img3')) {  
            Storage::delete($servic->img3);         
            $servic->img3 = $request->file('img3')->store('servic');              
        }

        $servic->save();

        return redirect()->route('servic.index')->with('status', 'Настройки сохранены!')->with('color', 'success');
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
