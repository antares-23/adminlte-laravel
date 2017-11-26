<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Tours;
use Auth;
use Mail;
use App\Http\Requests\CreateToursRequest;
//use Illuminate\Support\Facades\DB;
use App\Subdomain;

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
            $tours->subdomain_id=0;
            $tours->is_admin=1;

        }

        else{

            $subdomain =  Subdomain::select('id')->where('user_id', '=',$user->id)->get();

            if($subdomain->count())
            {
                $tours =  Tours::where('subdomain_id','=',$subdomain[0]->id)->get();
                $tours->subdomain_id=$subdomain[0]->id;
                $tours->is_admin=0;
            }

            else
            {
                $tours =  null;

            }

        }



       return view('tours.tours', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //

        return view('tours.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateToursRequest $request)
    {

       // $request->date_start=Carbon::createFromFormat('Y-m-d', $request->date_start);

      //  dd($request->all());
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

       $tour = Tours::findorFail($id);
       $tour->update($request->all());

       //return "ok!";
       return redirect('tours');


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
        return redirect('tours');
       // return redirect('tours.send');


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
