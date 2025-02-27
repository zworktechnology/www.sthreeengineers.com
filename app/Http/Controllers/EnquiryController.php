<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        $admin_number = 7871313987;

        $name = $request->get('name');
        $clinet_phone = $request->get('phonenumber');
        $client_address = $request->get('address');

        $template = 'Hi%20M/s%20Sthree%20Engineers%20-%20Admin%0A%0ANew%20contact%20request%20has%20submitted%20with%20the%20following%20information%0A%0A*Name*%20:%20' . $name . '%0A*Mobile Number*%20:%20' . $clinet_phone . '%0A*Address*%20:%20' . $client_address . '%0A%0AGood luck!';


        $access_token_key = env('WHATSAPP_ACCESS_TOKEN');
        $instance_id_key = env('WHATSAPP_INSTANCE_ID');

        $response = http::post('https://app.wapionline.com/api/send?number=91' . $admin_number . '&type=text&message=' . $template . '&instance_id=' . $instance_id_key . '&access_token=' . $access_token_key . '');
        if ($response->successful()) {
            return redirect()->route('thankyou');
        } else {
            return redirect()->route('index');
        }
    }

    // public function reachout($id)
    // {
    //     $data = Enquiry::findOrFail($id);

    //     $data->reach_out_status = 1;

    //     $data->update();

    //     return redirect()->route('enquiry.index')->with('active', 'Reach out successfully completed !');
    // }
}
