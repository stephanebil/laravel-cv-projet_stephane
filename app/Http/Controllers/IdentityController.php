<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $identities = Identity::all();
        // return view('pages.home', compact('identities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.create-identity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request->all());
        // validation du formulaire
        $request->validate([
            'firstName'=> 'required|max:10',
            'lastName'=> 'required|max:10',
            'address'=> 'required|max:30',
            'zip_code'=> 'required|max:5',
            'city'=> 'required|max:20',
            'tel'=> 'required|max:10',
            'email'=> 'required|max:50',
            'about'=>'required|max:2000',
            
        ]);

        

        // save to db
        Identity::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'tel' => $request->tel,
            'email' => $request->email,
            'about' => $request->about,
            'created_at' =>now()
        ]);

        // redirect
        return redirect()->route('home')->with('status', 'Identity enregistré');
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
