<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;

  class ContactController extends Controller
  {
    public function index(Request $request)
    {
      $keyword = $request->keyword;
      if (isset($keyword)){
        $contacts = Contact::contactSearch($keyword);
      } else {
        $contacts = Contact::all();
      }
 return view('contacts.index', compact('contacts'));
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::pluck('name', 'id');
        return view('contacts.create', compact('companies'));
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
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required',
        'company_id'=>'required'
      ]);
      Contact::create($request->all());
      return redirect()->route('contacts.index')
      ->with('success', 'Contact is bewaard!');
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
     public function edit(Contact $contact)
    {
      $companies = Company::pluck('name', 'id');
      return view('contacts.edit', compact('contact', 'companies'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Contact $contact)
    {
      $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required',
        'company_id'=>'required'
      ]);
      $contact->update($request->all());

      return redirect('/contacts')->with('success', 'Contact
      updated!');
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
