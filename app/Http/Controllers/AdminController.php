<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\CaseStatus;
use App\Models\DonationReq;
use App\Models\HireStatus;
use App\Models\LawyerDocuments;
use App\Models\lawyerStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function getCaseManagement()
    {
        // $caseDetails = Cases::all();
        $caseDetails = Cases::orderBy('updated_at', 'desc')->get();
        return view('admin.case_management')->with('caseDetails', $caseDetails);
    }

    public function caseDestroy($case_id)
    {
        DB::beginTransaction();
        try {
            $case = Cases::findOrFail($case_id);
            $case->delete();
            DB::commit();
            return redirect()->route('getCaseManagement')->with('success', 'Case deleted successfully');
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->route('getCaseManagement')->with('error', 'Failed to delete case. Please try again.');
        }
    }

    public function lawyerManagement()
    {
        return view('admin.');
    }

    public function getLawyerDocumentData()
    {
        $lawyerData = LawyerStatus::join('lawyers_documents', 'lawyer_status.lawyer_id', 'lawyers_documents.lawyer_id')
            ->select('lawyer_status.case_id', 'lawyers_documents.lawyer_id', 'lawyers_documents.lawyer_name', 'lawyers_documents.email', 'lawyers_documents.mobile', 'lawyers_documents.photo', 'lawyers_documents.signature', 'lawyers_documents.degree', 'lawyers_documents.case_pdf')
            ->get();

        return view('admin.document', compact('lawyerData'));
    }

    public function hireLawyer(Request $request, $lawyer_id)
    {
        // $hiredLawyers = HireStatus::with('lawyer', 'case')->get();
        // return view('hired-lawyers', compact('hiredLawyers'));

        $case_id = $request->case_id;

        $isHired = HireStatus::where('lawyer_id', $lawyer_id)
            ->where('case_id', $case_id)
            ->exists();

        if ($isHired) {
            return redirect()->back()->with('error', 'Already hired this lawyer for this case.');
        }
        // dd($lawyer_id);
        $hiredLawyer = new HireStatus();
        $hiredLawyer->lawyer_id = $lawyer_id;
        $hiredLawyer->case_id = $request->case_id;
        $hiredLawyer->save();
        return redirect()->back()->with('success', 'Lawyer hired successfully!');
    }

    public function getLegalStatus()
    {
        $legalStatus = CaseStatus::all();
        return view('admin.legal_status')->with('legalStatus', $legalStatus);
    }

    public function remove(Request $request)
    {
        $removeQuery = CaseStatus::where('client_id', $request->input('id'))->delete();
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }

    public function getHireLawyer()
    {
        $hiredData = HireStatus::join('cases', 'hire_status.case_id', 'cases.case_id')
        ->select('hire_status.lawyer_id', 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
        ->get();
        return view('admin.hire-lawyer')->with('hiredData', $hiredData);
    }

    public function getDonationReq(Request $request)
    {
        $case_id = $request->input('case_id');
        return view('admin.donation-form', ['case_id' => $case_id]);
    }

    public function donationReq(Request $request)
    {
        //  dd($request->all());
        $donationRequest = new DonationReq();
        $donationRequest->case_id = $request->case_id;
        $donationRequest->amount = $request->amount;
        $donationRequest->save();
        return redirect()->back();
        // return view('admin.donate_report');
        // {{ route('donationReq') }}
    }

    public function getDonateReporting()
    {
        $donateData = DonationReq::orderBy('updated_at', 'desc')->get();
        return view('admin.donate_report')->with('donateData', $donateData);
    }
}
