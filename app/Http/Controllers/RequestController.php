<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\ActivityLog;
use App\Models\RequestCertificate;
use App\Models\Blotter;
use App\Models\barangayOfficial;;
use App\Models\AdminResidents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
  public function request(){
    return view('user.request');
  }
  public function request2(){
    return view('user.request2');
  }
  public function request3(){
    return view('user.request3');
  }
  public function residentBlotter(){
    return view('user.residentBlotter');
  }


  public function viewPayment($id)
  {
    $req = RequestCertificate::find($id);
    return view('admin.certificate', ['req' => $req]);
  }


  // public function editResidents(AdminResidents $resident){
  //     return view('Admin.certificate', ['resident' => $resident]);

  // }

  //Request Storing Data
  public function addrequest(Request $request)
  {

    $formFields = $request->validate([
      'first_name' => 'required',
      'middle_name' => 'nullable',
      'last_name' => 'required',
      'docType' => 'required',
      'paymentMethod' => 'required',
      'contact_number' => ['required','numeric','digits:10'],
      'screenshot' => 'nullable|image|mimes:jpeg,png,jpg|max:512000',
      'referenceNumber' => 'sometimes|required_if:paymentMethod,==,GCash',
      'purpose' => 'required',
      'otherPurpose' => 'sometimes|required_if:purpose,==,Others please specify',
    ]);

    // check first name and last name if exist on AdminResidents table
    $check = AdminResidents::where('first_name', $formFields['first_name'])
      ->where('last_name', $formFields['last_name'])
      ->when($formFields['middle_name'], function ($query) use ($formFields) {
        return $query->where('middle_name', $formFields['middle_name']);
      })
      ->first();

    if (!$check) {
      return redirect()->back()->with('message-negative', 'No resident found with the name ' . $formFields['first_name'] . ' ' . $formFields['last_name']);
    }

    if ($request->hasFile('screenshot')) {
      // rename file
      $fileName = $request->screenshot->getClientOriginalName();
      // rename the file
      $fileName = md5(uniqid()) . '_' . $fileName;

      $request->screenshot->move(public_path('screenshot'), $fileName);
      //get path
    }
    $certificate = RequestCertificate::create([
      'fullname'        => $formFields['first_name'] . ' ' . $formFields['middle_name'] . ' ' . $formFields['last_name'],
      'docType'         => $request->docType,
      'paymentMethod'   => $request->paymentMethod,
      'contact_number'  => $request->contact_number,
      'referenceNumber' => $request->referenceNumber,
      'purpose'         => $request->purpose,
      'otherPurpose'    => $request->otherPurpose,
      'screenshot'       => $fileName ?? null,
      'admin_resident_id' => $check->id,
    ]);

    return back()->with('message-positive', 'Request Certificate Successful');
  }

  //Request Storing Data
  public function requestBlotter(Request $request)
  {
    $formFields = $request->validate([
        'complainant'   => 'required',
        'respondent'    => 'nullable',
        'resCA'         => 'nullable',
        'comCA'         => 'nullable',
        'victim'        => 'required',
        'location'      => 'required',
        'date'          => 'required',
        'time'          => 'nullable',
        'details'       => 'required',
        'action'        => 'required',
        'proof'         => 'nullable|image|mimes:jpeg,png,jpg|max:5120000',
        'phone_number1'  => ['required','numeric','digits:10'],
        'phone_number2'  => ['nullable','numeric','digits:10'],
      ]);
    if ($request->hasFile('proof')) {
        $formFields['proof'] = $request->file('proof')->store('images', 'public');
      }
    $blotter = Blotter::create($formFields);

    ActivityLog::log(
      'created blotter with id ' . $blotter->id . ' complainant ' . $blotter->complainant,
      'blotters',
      $blotter->id,
    );

    return back()->with('message-positive', 'Successfully Reported');
  }

  public function transactionInformation($id){
    $clearance = RequestCertificate::findOrFail($id);
    return view('Admin.requestsCertificates.transactioninformation', ['clearance' => $clearance]);
  }

  public function requestStatus(Request $request,$id,$st){
    DB::table('request_certificates')->where('id',$request->id)->update([
        'status2' => $st
    ]);
        $status2 = "";
        $details = RequestCertificate::where('id','=',$id)->get();
        foreach( $details as $data){
            $status2 = $data->status2;
        }

    return response()->json(
        [
            'success' => true,
            'message' => 'Updated !',
            'status2' => $status2,
        ]
        );
  }
  //for Summon
  public function generateSummon($id)
  {
    $blo = Blotter::find($id);
    if ($blo->status == 'pending') {
      $blo->status = 'approved';
      $blo->save();
      ActivityLog::log(
        'approved blotter report of ' . $blo->complainant . 'with the request action to' . $blo->action,
        'blotter',
        $blo->id,
      );
    } else if ($blo->status == 'declined') {
      return redirect()->back()->with('success', 'Report is already recorded!');
    //   return redirect('/blotter')->with('message', 'Residents Profile Created Successfuly');

    }

    // $blott =  $blo->complainant;
    // $resident = AdminResidents::find($id);
    $barangay_head = barangayOfficial::where('position','Barangay Captain')->first();
    $barangay_secretary = barangayOfficial::where('position','Barangay Secretary')->first();
    return view('admin.blotter.blotterLetter', ['blo' => $blo,'barangay_secretary'=>$barangay_secretary,'barangay_head'=>$barangay_head]);
  }

  //for Record only
  public function declineBlotter($id)
  {
    $dec = Blotter::find($id);
    if ($dec->status == 'pending') {
      $dec->status = 'declined';
      $dec->save();

      ActivityLog::log(
        'approved blotter report of ' . $dec->complainant . 'with the request action to' . $dec->action,
        'blotter',
        $dec->id,
      );
    }
    return redirect()->back()->with('message', 'Blotter Report is now recorded!');
}

  public function blotter(Request $request)
  {
    $request->validate([
        'search' => 'nullable|string|max:255',
      ]);
      $request->validate([
        'search' => 'nullable|string|max:255',
        'status' => 'nullable|string|in:pending,approved,declined',
      ]);

      $status = $request->status ?? 'pending';
      // $res = RequestCertificate::paginate(5);
      $blo = Blotter::where('status', $status)
        // ->orderBy('id','DESC')->paginate(10)

        ->when($request->search, function ($query) use ($request) {
          return $query->where('complainant', 'like', '%' . $request->search . '%');
        })->get();
      return view('admin.blotter.blotter', ['blo' => $blo]);
  }

public function updateInfo(Request $request, RequestCertificate $certificate){
  // dd($request->all());
    $formFields = $request->validate([
        'remarks'       => '',
        'orNum'         => '',
        'cnNum'         => '',
        'resident_image'=> '',
      ]);

  $certificate->update($formFields);

      ActivityLog::log(
        'added control number, remarks, picture and control number in certificate requested by  ' .
          $certificate->fullname ,
        'request certificate',
        $certificate->id
      );
      return back()->with('message', 'Information added successfully!');

  }
}
