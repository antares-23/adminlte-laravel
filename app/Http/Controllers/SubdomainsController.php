<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubdomainRequest;
use App\Subdomain;
use Illuminate\Http\Request;
use App\User;
//use App\Tours;
use Auth;
use Mail;
//use App\Http\Requests\CreateToursRequest;

class SubdomainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        //
        $user=Auth::user();

        if($user->role){
            $subdomains =  Subdomain::all();
            $subdomains->is_admin=1;
        }
        else
        {
            $subdomains=  Subdomain::where('user_id', '=',$user->id)->get();
            $subdomains->is_admin=0;
        }
        return view('subdomains.subdomains', compact('subdomains'));
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

        //is admin...
        if($user->role){
            ///$users=  User::pluck('name','id');
            $users =  User::leftJoin('subdomains','users.id','=','subdomains.user_id')->whereNull('subdomains.user_id')->pluck('users.name','users.id');
        }
        else
        {
            $users=  User::where('id','=',$user->id)->pluck('name','id');
        }


        return view('subdomains.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubdomainRequest $request)
    {
        //
        Subdomain::create($request->all());
        return redirect('subdomains');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subdomain=Subdomain::findOrFail($id);
        return view('subdomains.show', compact('subdomain'));
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
        $subdomain=Subdomain::findOrFail($id);
        return view('subdomains.edit', compact('tour') );
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
        $subdomain=Subdomain::whereId($id)->delete();
        return redirect('subdomains');
    }


    public function finish($id){

        $subdomain = Subdomain::find($id);
        if($subdomain->status!=0)
            $subdomain->where('id','=',$id)->update(array('status' =>'0'));
        else
            $subdomain->where('id','=',$id)->update(array('status' =>'1'));
       return redirect('subdomains');

    }


}
