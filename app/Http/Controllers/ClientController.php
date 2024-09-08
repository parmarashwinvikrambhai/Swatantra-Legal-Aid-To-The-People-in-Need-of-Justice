<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases;
use App\Models\CaseStatus;
use App\Models\DonationReq;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function indexing()
    {
        $postArtical = Cases::all();
        return view('client.index')->with('postArtical', $postArtical);
    }

    public function practice()
    {
        return view('client/practice');
    }

    public function client()
    {
        return view('client/clients');
    }

    public function resources()
    {
        return view('client/resources');
    }

    public function registration()
    {
        return view('registration');
    }

    public function contact()
    {
        return view('client/contact');
    }

    public function case()
    {
        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('client.case')->with('postArtical', $postArtical);
        // return view('client/case');
    }

    public function donation()
    {
        $donationData = DonationReq::join('cases', 'donation_request.case_id', 'cases.case_id')
        ->select('donation_request.amount', 'donation_request.updated_at' , 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
        ->get();
        return view('client/donation')->with('donationData', $donationData);
        // return view('client/donation');
    }

    public function getClients()
    {
        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('clients.Dashboard')->with('postArtical', $postArtical);
        // return view('clients.dashboard' ,['fetch' => $postArtical]);
    }

    public function getCaseStatus()
    {
        $id = session()->get('id');
        $views = CaseStatus::select('id', 'lawyer_name', 'case_name', 'description', 'status', 'next_hearing', 'updated_at')->where("client_id", $id)->get()->toArray();
        return view('clients.case_status')->with('views' , $views);
    }

    public function getArtical()
    {
        return view('clients/post_artical');
    }

    public function getMyPost()
    {
        $id = session()->get('id');
        $getMyPosts = Cases::select('photo', 'client_name', 'created_at', 'case_details', 'case_type', 'case_title')->where("client_id", $id)->get()->toArray();
        return view('clients.my_post')->with('getMyPosts', $getMyPosts);
    }

    public function getPaymentBilling()
    {
        return view('clients/payment');
    }

    public function getMessaging()
    {
        return view('clients/messaging');
    }

    public function getDocument()
    {
        return view('clients/document');
    }

    public function postArtical(Request $request)
    {
        // dd($request->all());
        $postArtical = new Cases();
        $postArtical->client_id = Session::get('id');
        $postArtical->client_name = Session::get('firstname');
        $postArtical->case_title = $request->case_title;
        $postArtical->case_type = $request->case_type;
        $postArtical->case_date = $request->case_date;
        $postArtical->case_details = $request->case_details;
        $postArtical->case_status = $request->case_status;
        // dd($postArtical);
        $path = $request->file('photo')->store('images');
        // dd($path);
        $postArtical->photo = $path;
        // $postArtical->photo = $request->photo;

        $postArtical->signature = $request->signature;
        $postArtical->save();
        return redirect()->back();
        // return redirect('clients.dashboard');
    }

    public function payment(){
        return view('client.payment');
    }
}
