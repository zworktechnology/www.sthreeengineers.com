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
        $data->email = $request->get('email');
        $data->phone_number = $request->get('phone_number');
        $data->services = $request->get('services');
        $data->message = $request->get('message');

        $data->save();

        return redirect()->back();
    }

    public function reachout($id)
    {
        $data = Enquiry::findOrFail($id);

        $data->reach_out_status = 1;

        $data->update();

        return redirect()->route('enquiry.index')->with('active', 'Reach out successfully completed !');
    }
}
