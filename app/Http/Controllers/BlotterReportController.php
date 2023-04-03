<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\ActivityLog;
use Illuminate\Http\Request;
use App\Models\Blotter;
use App\Models\barangayOfficial;
use App\Models\ActivityLogs;

class BlotterReportController extends Controller
{

  public function deleteBlotter($id)
  {
    $blotter = Blotter::find($id);

    $blotter->delete();

    ActivityLog::log(
      ' deleted the blotter of the complainant ' . $blotter->complainant,
      'blotter',
      $blotter->id,
    );

    return back()->with('message', 'Blotter Case Deleted');
  }


  public function search_blotter(Request $request){
    return view('Admin.blotter.blotter', [
      'blo' => Blotter::latest()->filter(request(['search']))->paginate(5)
    ]);
  }


  public function blotterReport($id){
    $blotter = Blotter::findOrFail($id);
    return view('Admin.blotter.blotterReport', ['blotter' => $blotter]);
  }

  public function editBlotter($id){
    $blorep = Blotter::find($id);
    ActivityLog::log(
        ' edited the blotter report of  ' .
          $blorep->complainant ,
        'blotter',
        $blorep->id
      );
    return view('Admin.blotter.editBlotter', ['blorep'=>$blorep]);
}

public function updateBlotter(Request $request, Blotter $blorep){
    $formFields = $request->validate([
        'complainant'   => 'required',
        'respondent'    => 'required',
        'resCA'         => 'required',
        'comCA'         => 'required',
        'victim'        => 'required',
        'for_reason'    => 'required',
        'datesum'       => 'required',
        'timesum'       => 'required',
        'delsum'        => 'required',
        'delsum2'       => 'required',
        'phone_number1'  => ['required','numeric','digits:10'],
        'phone_number2'  => ['required','numeric','digits:10'],
      ]);

  $blorep->update($formFields);

      ActivityLog::log(
        ' updated blotter information of  ' .
          $blorep->complainant ,
        'blotter',
        $blorep->id
      );
      return back()->with('message', 'Blotter Info Update Successful');

  }

}
