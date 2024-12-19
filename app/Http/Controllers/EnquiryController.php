<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $data = Enquiry::orderBy('id', 'desc')->get();

        return view('pages.backend.enquiry.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Enquiry();

        $data->name = $request->get('name');
        $data->phonenumber = $request->get('phonenumber');
        $data->address = $request->get('address');

        $data->save();

        return redirect()->route('thankyou');
    }

    public function reachout($id)
    {
        $data = Enquiry::findOrFail($id);

        $data->reach_out_status = 1;

        $data->update();

        return redirect()->route('enquiry.index')->with('active', 'Reach out successfully completed !');
    }
}
