<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Lead;
use Illuminate\Support\Facades\Log; 

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.tableView')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lead_id = $request->get('lead_id');
        $lead = Lead::withTrashed()->find($lead_id);
        if (!!$lead && $lead->converted_at == NULL){
            $contact = new Contact;
            $contact->lead_id = $request->get('lead_id');
            $contact->contact_name = $request->get('contact_name');
            $contact->converted_status = $request->get('converted_status');
            $contact->stage = $request->get('stage');
            $contact->save();
            return redirect('contacts')->with('success', 'Contact created successfully.');
        } else {
            return redirect()->back()->with('error', 'This lead has already been converted.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info("contact update",$request->all());
        $contact = Contact::findOrFail($id);
        $contact->update([
            'contact_name' => $request->contact_name,
            'converted_status' => $request->converted_status,
            'stage' => $request->stage,
        ]);
        return redirect('/contacts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        Log::info("deleted destroyed",$contact->toArray());
        $contact->delete();
        $contact->lead->converted_at = NULL;
        return redirect('contacts');
    }
}
