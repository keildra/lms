<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Lead;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $converted = $request->get('converted', false);
        if ($converted) {
            $leads = Lead::whereNotNull('converted_at')->get();
        } else {
            $leads = Lead::all();
        }
        return view('lead.tableView')->with('leads', $leads);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lead.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lead = new Lead;
        $lead->lead_name = $request->get('lead_name');
        $lead->status = $request->get('status');
        $lead->mobile = $request->get('mobile');
        $lead->email = $request->get('email');
        $lead->converted_at = $request->get('converted_at');
        $lead->save();
        return Redirect::to('leads');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        return $lead;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        return view('lead.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        Log::info("message",$request->all());
        $lead->update([
            'lead_name' => $request->lead_name,
            'status' => $request->status,
            'mobile' => $request->mobile,
            'email' => $request->email,
        ]);
        return redirect('/leads');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        Log::info("deleted destroyed",$lead->toArray());
        $lead->delete();
        return redirect('leads');
    }
    /**
     * Convert the lead into a contact.
     */
    public function convert(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);
        if ($lead->converted_at == NULL) {
            $contact = new Contact();
            $contact->contact_name = $lead->lead_name;
            $contact->lead_id = $lead->id;
            $contact->converted_status = $lead->status;
            $contact->save();
            $lead->converted_at = now();
            $lead->save();
        }
        return redirect()->route('leads.index')->with('success', 'Lead converted to contact successfully.');
    }
}
