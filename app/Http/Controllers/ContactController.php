<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return Contact::all();
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ]);

    return Contact::create($request->all());
  }

  /**
   * Display the specified resource.
   */
  public function show(Contact $contact)
  {
    return $contact;
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Contact $contact)
  {
    $contact->delete();
    return response()->noContent();
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Contact $contact)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Contact $contact)
  {
    //
  }
}
