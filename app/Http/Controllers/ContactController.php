<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id', 'desc')->get();

        return view('pages.backend.contact.index', compact('data'));
    }

    public function store(Request $request)
    {
        // $this->ValidatedData();

        $data = new Contact();

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->mobile = $request->get('mobile');
        $data->subject = $request->get('subject');
        $data->message = $request->get('message');

        $data->save();

        $admin_number = 8838746579;

        $name = $request->get('name');
        $clinet_phone = $request->get('mobile');
        $client_email = $request->get('email');
        $client_subject = $request->get('subject');
        $client_message = $request->get('message');

        $template = 'Hi%20M/s%20Sthree%20Engineers%20-%20Admin%0A%0ANew%20contact%20request%20has%20submitted%20with%20the%20following%20information%0A%0A*Name*%20:%20' . $name . '%20(%20' . $client_email . '%20)%20%0A*Mobile Number*%20:%20' . $clinet_phone . '%0A*Suject*%20:%20' . $client_subject . '%0A*Message*%20:%20' . $client_message . '%0A%0AGood luck!';


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
    //     $data = Contact::findOrFail($id);

    //     $data->reach_out_status = 1;

    //     $data->update();

    //     return redirect()->route('contact.index')->with('active', 'Reach out successfully completed !');
    // }

    // protected function validatedData()
    // {
    //     return request()->validate(
    //         [
    //             'g-recaptcha-response' => 'required|recaptcha'
    //         ],
    //         [
    //             'g-recaptcha-response.required' => 'Captcha is Required',
    //         ]
    //     );
    // }
}
