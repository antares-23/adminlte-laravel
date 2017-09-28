<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::all();
        return view('photos.photos', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        //return $id;

        return view('photos.createphoto', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo_id= $request->photo_id;
        //Photos::create($request->all());
         //$photo = $request->all();
       // print_r($request->all());


        if($request->hasFile('files'))
        {
            foreach($request->file('files') as $file)
            {
                if(!empty($file))
                {
                    $destinationPath = 'images';
                    $filename = $file->getClientOriginalName();
                    $file->move($destinationPath, $filename);
                    //$photo = new Photos;

                    $photo['filename']=$filename;
                    $photo['tour_id']=$photo_id;
                    Photos::create($photo);
                   // print_r($photo);
                }
            }

        }

        //return view('ToursController@index');
        return redirect()->action('ToursController@index');

        //Photos::create($photo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $photos['photos'] = Photos::where('tour_id',$id)->orderBy('id','desc')->get();
       $photos['id']=$id;

       //return $photos;
        return view('photos.photos', compact('photos'));
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
