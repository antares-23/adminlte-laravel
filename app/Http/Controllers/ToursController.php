<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Tours;
use Auth;
use Mail;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=Auth::user();

        if($user->role){
            $tours =  Tours::all();
            $tours->is_admin=1;
        }

        else
        {
            $tours=  Tours::where('user_id', '=',$user->id)->get();
            $tours->is_admin=0;
        }

//        $tours = User::findOrFail(1);//with('tours')->get();
       // $tours =  Tours::all();

       // dd($tours) ;

        return view('tours.tours', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user=Auth::user();
        if($user->role)
            $users = User::all();
        else $users= User::findOrFail($user->id);

        return view('tours.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // $request->date_start=Carbon::createFromFormat('Y-m-d', $request->date_start);
        Tours::create($request->all());
        return redirect('tours');
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
        $tour=Tours::findOrFail($id);
        return view('tours.show', compact('tour'));
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
        $tour=Tours::findOrFail($id);
        return view('tours.edit', compact('tour') );
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
        return "Hello!";
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

        $tours= Tours::whereId($id)->delete();
        return redirect('tours');

    }
    public function finish($id){

        $tour = Tours::find($id);
        if($tour->status!=0)
            $tour->where('id','=',$id)->update(array('status' =>'0'));
        else
            $tour->where('id','=',$id)->update(array('status' =>'1'));
        return redirect('tours.send');

    }

    public function send(){

        //return "hello";
        $title = "Titulo del Correo";
        $content ="Esta es una prueba del correo, no borrar!";

        Mail::send('email.mymail',['title'=>$title,'content'=>$content],function ($message)
        {
            $message->from('origin@mail.com','Test Server');
            $message->to('destiny@mail.com', 'Mail Destinatary');
        });
    }
}
