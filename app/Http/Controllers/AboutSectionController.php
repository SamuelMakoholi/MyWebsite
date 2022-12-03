<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionTwo;
//use App\Models\SectionOne;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$section=SectionTwo::all()->first;

         return view('home.about-section');
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

        $requestData = $request->all();
        $fileName = time().$request->file('abt_image')->getClientOriginalName();
        $path = $request->file('abt_image')->storeAs('images', $fileName, 'public');
        $requestData["abt_image"] = '/storage/'.$path;
        SectionTwo::create($requestData);  


       /* $this->validate($request, [
            'abt_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        //$img_url = $request->file('image')->store('image', 'public');
        $img_url = $request->file('abt_image')->store('public/images');

        $data = SectionTwo::create([
            'text_title' => $request->text_title,
            'about_section' => $request->about_section,
            'abt_image' => $img_url,
        ]);
        */

        //return back()->with('created', 'Section content addes successfully');
        return redirect()->route('home');
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
