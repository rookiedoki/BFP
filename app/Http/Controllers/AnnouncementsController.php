<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Announcements;
use App\Http\Controllers\AnnouncementsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivityLogs;
use App\Http\Controllers\Helper\ActivityLog;

class AnnouncementsController extends Controller
{
    public function announcements(){
        $ann= Announcements::all();
        return view('admin.announcements',['ann'=>$ann]);
}

    //Announcement Storing Data
    public function announcementStore(Request $request){

        $formFields = $request->validate([
            'title' =>'required',
            'description' =>'',
            'content' =>'required',
        ]);

        $announcement = Announcements::create($formFields);

        return back()->with('message', 'Announcement Created Successfuly');
        ActivityLog::log(
            ' posted an announcement about' . $announcement->title,
            'announcements_table',
            $announcement->id,
          );
}


    //Announcement Update Data
    public function updateAnnouncements(Request $request, Announcements $announcement){
        // dd($request->all());
        $formFields = $request->validate([
            'title' =>'required',
            'description' =>'',
            'content' =>'required',
        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $announcement->update($formFields);
        ActivityLog::log(
            ' posted an announcement about ' . $announcement->title,
            'announcements_table',
            $announcement->id,
          );
        return back()->with('message', 'Announcement Updated Successfuly');

}

public function deleteAnnouncements($id)
{
    $annou=Announcements::find($id);

    $annou->delete();
    ActivityLog::log(
        ' deleted an announcement about' . $announcement->title,
        'announcements_table',
        $announcement->id,
      );

    return back()->with('message', 'Announcement Deleted Succesfull');

}

}
