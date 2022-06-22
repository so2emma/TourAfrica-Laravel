<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\Destination;
use File;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $destinations=Destination::all();
        return view('admin.index')->with('destinations',$destinations);
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
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $destination = new Destination([
                'destination' => $request->destination,
                "location" => $request->location,
                "description" => $request -> description,
                "cover" => $imageName,
            ]);
            $destination->save();
        }
        if($request->hasFile("images")){
            $files = $request->file("images");
            foreach($files as $file){
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['destination_id']=$destination->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                Image::create($request->all());
            }
        }
        return redirect("/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination,$id)
    {
        $destinations=Destination::findOrFail($id);
        return view('admin.edit')->with('destinations', $destinations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination,$id)
    {
        $destination=Destination::findOrFail($id);
        if($request->hasFile("cover")){
         if (File::exists("cover/".$destination->cover)) {
             File::delete("cover/".$destination->cover);
         }
         $file=$request->file("cover");
         $destination->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$destination->cover);
         $request['cover']=$destination->cover;
     }

        $destination->update([
            "destination" =>$request->destination,
            "location"=>$request->location,
            "bodydescription"=>$request->bodydescription,
            "cover"=>$destination->cover,
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["destination_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                Image::create($request->all());

            }
        }
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination,$id)
    {
        $destinations = Destination::findOrFail($id);

        if(File::exists("cover/".$destinations->cover)){
            File::delete("cover/".$destinations->cover);
        }
        $images=image::where("destination_id",$destinations->id)->get();
        foreach($images as $image){
            if(File::exists("images/".$image->image)){
                File::delete("images/".$image->image);
            }
        }
        $destinations->delete();
        return back();
    }
    public function deleteimage($id){
        $images=Image::findorFail($id);
        if(File::exists("cover/".$images->image)){
            File::delete("cover/".$images->image);
        }
        Image::find($id)->delete();
        return back();
    }
    public function deletecover($id){
        $cover=Destination::findorFail($id)->cover;
        if(File::exists("cover/".$cover)){
            File::delete("cover/".$cover);
        }
        return back();
    }
}
