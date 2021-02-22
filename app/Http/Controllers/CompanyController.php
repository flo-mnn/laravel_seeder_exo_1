<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.company.all', ['companies'=> Company::all()]);
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.company.show', ['company'=> Company::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.company.edit', ['company'=> Company::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Company::find($id);
        $update-> name = $request->name;
        $update-> address = $request->address;
        $update-> phone = $request->phone;
        $update-> email = $request->email;
        $update-> contact_surname = $request->contact_surname;
        $update-> contact_first = $request->email;
        $update-> image = $request->image;
        $update->save();

        return redirect('companies/show/'.$update->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id == 'all') {
            Company::truncate();
        } else {
            $destroy = Company::find($id);
            $destroy->delete();
        }
        return redirect('/companies/all');  
    }
}
