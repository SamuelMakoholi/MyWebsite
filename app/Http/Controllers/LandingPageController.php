<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionOne;
use App\Models\SectionTwo;
use App\Models\SectionThree;
use Illuminate\View\View;
use App\Models\Premium;
use App\Models\Starter;
use App\Models\Exclusive;
use App\Models\Service;
use Illuminate\Contracts\View\Factory;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['sectionOne'] = 
        SectionOne::orderBy('id', 'DESC')->first();

        $data['sectionTwo'] = SectionTwo::orderBy('id', 'DESC')->first();

        $data['sectionThree'] = SectionThree::orderBy('id', 'DESC')->first();

        $data['starter'] = Starter::orderBy('id', 'DESC')->first();

        $data['exclusive'] = Exclusive::orderBy('id', 'DESC')->first();

        $data['premium'] = Premium::orderBy('id', 'DESC')->first();

        $data['services'] = Service::all();



        //$data['variabletwo'] = 'The value of variable two.';

        return view('welcome')->with($data);

        //return view('helloworld')->with($data);
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
