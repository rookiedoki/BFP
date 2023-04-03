<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Twilio\Rest\Client;
use App\Models\Inquiries;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
          //Inquiries
          public function inquiries(){

         $inqui = inquiries::paginate(10);

            return view('Admin.Inquiries.inquiries',['inqui'=>$inqui]);
        }

     //Search Inquiries
    public function search_inquiries(Request $request){
      return view('Admin.Inquiries.inquiries', [
          'inqui' => inquiries::latest()->filter(request(['search']))->paginate(10)
      ]);
  }

          //Update Residents Admin Form
    public function addInquiries(Request $request){
      // dd($request->all());
      $formFields = $request->validate([
          'name' =>'required',
          'phone_number' => ['required','numeric','digits:11'],
          'subject' =>'required',
          'message' =>'required',
      ]);

      $inquiries = Inquiries::create($formFields);

      return back()->with('message', 'Message Sent');
      
  }

  //Inquiories send message
  public function inquiriesSend(Request $request, $id){


    $receiver_number=$request->regNumber;
    $message = $request->message;

    try {

        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_TOKEN");
        $twilio_number = getenv("TWILIO_FROM");

          $client = new Client($account_sid, $auth_token);
           $client->messages->create($receiver_number, [
          'from' => $twilio_number,
          'body' => $message]);

       } catch (Exception $e) {
         return $e->getMessage();
    }

    return back()->with('message', 'Message have been sent!');
}


    //Delete Inquiries
    public function deleteInquiries($id)
    {

        $inquiries=Inquiries::find($id);
        $inquiries->delete();
        return back()->with('message', 'Inquiries Succesfully Deleted');
    }
}
