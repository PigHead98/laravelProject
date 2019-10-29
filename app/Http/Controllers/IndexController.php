<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class IndexController extends Controller
{
    protected $secret = "6Ldpd78UAAAAACvd2cieSwhc8EieD2m-3qJXNFmA";

    public function index()
    {
        return view('index.index');
    }

    public function showMenu(Request $request)
    {
        return view('index/menu.han-thuyen');
    }

    public function showMenuSG(Request $request)
    {
        return view('index/menu.saigon-centre');
    }

    public function showFranchise(Request $request)
    {
        return view('index/franchise');
    }

    public function showReservations(Request $request)
    {
        return view('index/reservations');
    }

    public function showContact(Request $request)
    {
        return view('index/contact-us');
    }

    public function infoFranchise(Request $request)
    {
        $datasave = $request->all();
        //dd($data['name']);
        $check = Validator::make($datasave, [
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($check->fails()) {
            return redirect()->back()->withErrors($check)
                ->withInput();
        } else {
            $secret  = $this->secret;
            $response = $request->google_recaptcha_token;

            if ($this->responRecapt($secret,$response)) {
                Mail::to('reystay.rz@gmail.com')->send(new SendMail($datasave,'form-mail.franchise'));
                    return redirect()->back()->with('status-contact', 'Profile sent!');
            }
             else
                return redirect()->back()->with('status-contact', 'Can not sent, it is spam!');
        }

    }

    public function infoReservations(Request $request)
    {
        $datasave = $request->all();
        //dd($data['name']);
        $check = Validator::make($datasave, [
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/(0)[0-9]{9}/|max:10',
            'date'  => 'required|date',
            'time'  => 'required|date_format:H:i',
            'pax'   => 'required',
        ]);

        if ($check->fails()) {
            return redirect()->back()->withErrors($check)
                ->withInput();
        } else {
            $secret  = $this->secret;
            $response = $request->google_recaptcha_token;

            if ($this->responRecapt($secret,$response)) {
                Mail::to('reystay.rz@gmail.com')->send(new SendMail($datasave,'form-mail.reservations'));
                return redirect()->back()->with('status', 'Profile sent!');
            } else
                return redirect()->back()->with('status', 'Can not send, it is spam!');
            ////        dd($responseKeys);
        }

    }

    public function responRecapt($secret,$response)
    {
        $url  = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => $secret,
            'response' => $response,
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context      = stream_context_create($options);
        $response     = file_get_contents($url, false, $context);
        $responseKeys = json_decode($response, true);

        if ($responseKeys['success'])
            return true;
        return false;
    }
//    public function saveInfoFra($data)
//    {
//        return DB::table('propa_franchise')->insertGetId([
//                'fra_name'    => $data['name'],
//                'fra_email'   => $data['email'],
//                'fra_subject' => $data['subject'],
//                'fra_message' => $data['message'],
//            ]
//        );
//    }

//    public function saveInfoRes($data)
//    {
//        return DB::table('propa_reservations')->insertGetId([
//                'res_name'     => $data['name'],
//                'res_email'    => $data['email'],
//                'res_phone'    => $data['phone'],
//                'res_location' => $data['location'],
//                'res_date'     => $data['date'],
//                'res_time'     => $data['time'],
//                'res_event'    => $data['event'],
//                'res_pax'      => $data['pax'],
//                'res_request'  => $data['specialrequest'],
//            ]
//        );
//    }
}
