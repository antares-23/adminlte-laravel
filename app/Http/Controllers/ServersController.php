<?php

namespace App\Http\Controllers;

use App\Tours;
use Illuminate\Http\Request;
use App\Server;
use Auth;
use App\Subdomain;
class ServersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        if($user->role)
            //$servers= Tours::all();
            $subdomains = Subdomain::all();
        else
            //$servers=  Tours::where('user_id', '=',$user->id)->get();
            $subdomains = Subdomain::where('user_id', '=',$user->id)->get();

        foreach ($subdomains as $subdomain){
            $subdomain->occupied_size = Server::folderSize($subdomain->url)/1048576;
        }



       // $data->occupied_size =Server::folderSize('c:\AMD')/1048576;

        return view('servers', compact('subdomains'));
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
    //   $file =  $request->file('file');
      // echo $file->getClientOriginalName();

        if($request->file('files'))
        {
            foreach($request->file('files') as $media)
            {
                if(!empty($media))
                {
                    //$destinationPath = 'uploads/companies/award';
                    echo $filename = $media->getClientOriginalName();
                    //$media->move($destinationPath, $filename);

                    //$projectcommunication->media = $filename;
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
