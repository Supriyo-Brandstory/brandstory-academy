<?php

namespace App\Http\Controllers\admin\form;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    
    // List all enquiries
    public function index()
    {
        $enquiries = Enquiry::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.enquiry.index', compact('enquiries'));
    }

    // Delete a specific enquiry
    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        return redirect()->route('enquiries.index')->with('msg', 'Enquiry deleted successfully.');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

 
}
