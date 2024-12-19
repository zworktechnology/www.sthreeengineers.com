<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id', 'desc')->get();

        return view('pages.backend.contact.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->ValidatedData();

        $data = new Contact();

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->mobile = $request->get('mobile');
        $data->subject = $request->get('subject');
        $data->message = $request->get('message');

        $data->save();

        return redirect()->route('thankyou');
    }

    public function reachout($id)
    {
        $data = Contact::findOrFail($id);

        $data->reach_out_status = 1;

        $data->update();

        return redirect()->route('contact.index')->with('active', 'Reach out successfully completed !');
    }

    protected function validatedData()
    {
        return request()->validate(
            [
                'g-recaptcha-response' => 'required|recaptcha'
            ],
            [
                'g-recaptcha-response.required' => 'Captcha is Required',
            ]
        );
    }
}
