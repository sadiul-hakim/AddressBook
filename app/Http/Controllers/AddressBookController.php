<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddressBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = AddressBook::paginate(10);
        return view('dashboard', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'email' => 'required|email|unique:address_books',
            'phone' => 'required'
        ]);
        $created = AddressBook::create($validated);
        return redirect("/address")->with('success', "Successfully saved {$created->last_name}'s address."); // ->with creates flash session
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = AddressBook::find($id);
        return view('edit-contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'email' => 'required|email|unique:address_books',
            'phone' => 'required'
        ]);

        $address = AddressBook::find($id);
        $address->update($validated);
        return redirect("/address")->with('success', "Successfully Updated {$address->last_name}'s address."); // ->with creates flash session
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TODO: Authorize
        AddressBook::destroy($id);
        return redirect("/address")->with('success', "Successfully deleted address " . $id); // ->with creates flash session
    }
}
