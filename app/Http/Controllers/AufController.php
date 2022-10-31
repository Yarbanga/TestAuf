<?php

namespace App\Http\Controllers;

use App\Models\Auf;
use App\Models\User;
use Illuminate\Http\Request;

class AufController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Auf::all();
        return view('utilisateur.user',compact('users'));
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
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'localization' => 'required|string|',
            'profile' => '|image|',
        ]);
        $input = $request->all();
        if ($image = $request->file('profile')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['profile'] = "$picture";
        }

        Auf::create($input);

        return back()->with('success', "Vous avez ajouter un utilisateur");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auf  $auf
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Auf::find($id);
        return view('utilisateur.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auf  $auf
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Auf::find($id);

        return view('utilisateur.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auf  $auf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'localization' => 'required|string|',
            'profile' => '|image|',
        ]);

        $input = [];
        $input['firstname'] = $request->input('firstname');
        $input['lastname'] = $request->input('lastname');
        $input['email'] = $request->input('email');
        $input['phone'] = $request->input('phone');
        $input['localization'] = $request->input('localization');


        if ($image = $request->file('profile')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['profile'] = $iconeImage;
        } else {
            unset($input['profile']);
        }


        Auf::find($id)->update($input);


        return redirect()->intended('user')->with('success', 'La modification a été effectué avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auf  $auf
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Auf::find($id);
        $users->delete();
        return back()->with('success', 'Suppression reussi!');
    }
}
