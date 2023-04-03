@extends('layout.dashboard-layout')
@section('content')
<style>
    .card{
        font-family: Arial;
        color:black;
    }
</style>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="row mt--2">
        <div class="col-md-12">
            <div class="card-tools mb-2">
                <a href="/blotter?search=&status=approved">
                    <button class="btn btn-success btn-border btn-round btn-sm">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
                    </button>
                </a>
                    <a href="{{url('editBlotter',$blo->id)}}" class="edit btn btn-secondary btn-border btn-round btn-sm  float-right" >Edit Info</a>
                    <button class="btn btn-info btn-border btn-round btn-sm mr-2 float-right" onclick="printDiv('printThis')">
                        <i class="fa fa-print"></i> Print Certificate
                    </button>
            </div>
                <div class="card">
                    <div class="card-body cardprint" style="padding: 5%; justify;" id="printThis">
                      <div class="d-flex flex-wrap justify-content-around">
                        <div class="text-center">
                          @foreach($setting as $settings)
                          <img src="{{$settings->barangay_logo ? asset ('storage/' .$settings->barangay_logo) : asset('/storage/no/-image.png')}}" class="img-fluid" width="120" style="padding-bottom: 15%">
                          @endforeach
                        </div>
                        <div class="text-center">
                          <p class="mb-0 fs-5">Republic of the Philippines</p>
                          <p class="mb-0 fs-5">Province of Camarines Sur</p>
                          <p class="mb-0 fs-5">Municipality of Nabua</p>
                          @foreach($setting as $settings)
                          <p class="text-uppercase mb-0 fs-5">BARANGAY {{$settings->barangay_name}}</p>
                          @endforeach
                            <p class="mt-4 fs-5 fw-bolder text-center mb-0">OFFICE OF THE LUPONG TAGAPAMAYAPA</p>
                        </div>
                        <div class="text-center">
                          @foreach($setting as $settings)
                          <img src="{{$settings->barangay_logo2 ? asset ('storage/' .$settings->barangay_logo2) : asset('/storage/no/-image.png')}}" class="img-fluid" width="120" style="padding-bottom: 15%">
                          @endforeach
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="col-md-8 mt-5 fs-5" style="margin-left: 25%;">
                                <p style="border-bottom: 1px solid black; margin-bottom: 2px !important;">{{$blo->complainant}},</p>
                                <p style="border-bottom: 1px solid black">{{$blo->victim}},</p>
                                <p style="text-align:center;">Complainant/s</p>
                            </div>
                            <div class="col-md-8 mt-2 mb-3 fs-5 text-center" style="margin-left: 10%;">
                                ----Against----
                            </div>
                            <div class="col-md-8 fs-5" style="margin-left: 25%;">
                                <p style="border-bottom: 1px solid black; margin-bottom: 2px !important;">{{$blo->respondent}},</p>
                                <p style="text-align:center; margin-bottom: 0px !important;">Respondent/s</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-9 mt-5 fs-5" style="margin-left: 10%;">
                                <p style="margin-bottom: 2px !important;">Barangay Case No: <u>{{$blo->id}}</u></p>
                            </div>
                            <div class="col-md-9 fs-5" style="margin-left: 10%;">
                                <p style="text-align: justify;">For: <u>{{$blo->for_reason}}</u></p>
                            </div>
                        </div>
                    </div>

                          <div class="text-center">
                            <p class="mt-5 fw-bold fs-5 text-center">S U M M O N S</p>
                          </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-8 fs-5" style="margin-left: 25%;">
                                <p style="text-align: justify; margin-bottom: 2px !important;">To: {{$blo->respondent}}</p>
                                <p style="text-align: justify; border-bottom: 1px solid black; margin-bottom: 2px !important;"></p>
                                <p style="text-align: justify; border-bottom: 1px solid black;">{{$blo->respondent}}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8 fs-5" style="margin-left: 10%;">
                                <p style="text-align: justify; margin-bottom: 2px !important;">To: {{$blo->respondent}}</p>
                                <p style="text-align: justify; border-bottom: 1px solid black; margin-bottom: 2px !important;"></p>
                                <p style="text-align: justify; border-bottom: 1px solid black;">{{$blo->respondent}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="mt-5 fw-bold fs-5 text-center">R E S P O N D E N T /S</p>
                    </div>

                          <div class="col-md-12">
                          <p class="mt-2 fs-5" style="margin: 0 60px 0 60px; text-align: justify;">
                            You are hereby summoned to appear me in person, together with your witness, on {{ Carbon\Carbon::parse($blo->datesum)->format('F d, Y (l)')}} at {{$blo->timesum}} o'clock
                             in Barangay Session Hall Building, {{$settings->barangay_name}} then and there to answer to a complaint made before me, copy of which is
                            attached hereto, for mediation/conciliation of your dispute with the complaints.
                          </p>
                          <p class="mt-3 fs-5" style="margin: 0 60px 0 60px; text-align: justify;">
                            You are hereby warned that if you refuse or willfully fail to appear in obedience to this summons, you may be barred from
                            filling any counter claim arising said complaint.
                          </p>
                          <p class="mt-3 fs-5" style="margin: 0 60px 0 60px; text-align: justify;">
                           FAIL NOT or else face punishments as for contempt of court.
                          </p>
                          <p class="fs-5" style="margin: 10px 60px 0 60px; text-align: justify;"> Made this on {{ Carbon\Carbon::parse($blo->created_at)->format('F d, Y (l)')}}</p>

                          </div>

                        <div class="row" style="margin-left: 7%;">
                              <div class="col-md-5" >
                                <div class="pt-5 text-center">
                                    <p class="fw-bold mt-5 mb-0 text-uppercase fs-5" style="text-align: center; border-bottom: 1px solid black;">
                                      {{$barangay_head->name}}<br />
                                      <p style="font-size:11pt;">
                                        PUNONG BARANGAY/LUPON CHAIRMAN
                                      </p>
                                    </p>
                                  </div>
                              </div>
                        </div>
                        <br /><br /><br />
                        <div class="pt-5 text-center">
                            <p class="mt-5 mb-5 fw-bold fs-5 text-center">OFFICER'S RETURN</p>
                        </div>

                        <div class="col-md-12">
                            <p class="fs-5" style="margin: 30px 60px 100px 60px; text-align: justify;">
                                I served this summons upon respondent to {{$blo->respondent}} on {{ Carbon\Carbon::parse($blo->delsum)->format('F d, Y (l)')}} and upon respondent
                                on the {{ Carbon\Carbon::parse($blo->delsum)->format('F d, Y (l)')}}, {{$blo->delsum2}} am/pm.
                            </p>
                            <p class="mt-3 fs-5" style="margin: 0 60px 0 60px; text-align: justify;">
                                By:<br />
                            </p>
                            <p class="mt-3 fs-5" style="margin: 0 60px 0 60px !important; text-align: justify;">{{$blo->respondent}}</p>
                            <p class="mt-3 fs-5" style="margin: 0 60px 0 60px !important; text-align: justify;">(Name/s of Respondent/s before mode by which he/they was/were served)</p>

                            </div>

                            <div class="row" style="margin-top: 100px;">
                                <div class="col-md-6">
                                    <div class="col-md-10 fs-5" style="margin-left: 20%">
                                        <p style="text-align: right; border-bottom: 1px solid black; margin-bottom: 2px !important;  padding-right: none !important;">1.</p><br />
                                        <p style="text-align: right; border-bottom: 1px solid black; margin-bottom: 2px !important;">2.</p><br />
                                        <p style="text-align: right; border-bottom: 1px solid black; margin-bottom: 2px !important;">3.</p><br />
                                        <p style="text-align: right; border-bottom: 1px solid black; margin-bottom: 2px !important;">4.</p><br />
                                        <p style="text-align: right; border-bottom: 1px solid black; margin-bottom: 2px !important;">5.</p><br />
                                        <p style="text-align: right; border-bottom: 1px solid black; margin-bottom: 2px !important;">6.</p><br />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12 fs-5">
                                        <p style="text-align: left; margin-bottom: 2px !important; padding-left: none !important;">handling to him/them said summon in person, or</p>
                                        <p style="text-align: left; margin-bottom: 2px !important;">handling to him/them said summons and they/he refuse to receive it, or</p>
                                        <p style="text-align: left; margin-bottom: 2px !important;">leaving sadi summons at this/their dwelling with</p>
                                        <p style="text-align: left; margin-bottom: 2px !important;">(name) of person of suitable age and discretion residing therein or</p>
                                        <p style="text-align: left; margin-bottom: 2px !important;">leaving said summons at this/their office/place of business with</p>
                                        <p style="text-align: left; padding-bottom: 70px !important;">[name] a competent person in charge thereof.</p>

                                        <div class="pt-5 text-center">
                                            <p class="fw-bold mt-3 mb-0 text-uppercase fs-5" style="text-align: center; border-bottom: 1px solid black;">
                                              {{$barangay_head->name}}<br />
                                              <p style="font-size:11pt;">
                                                PUNONG BARANGAY/LUPON CHAIRMAN
                                              </p>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 100px;">
                                <div class="col-md-6">
                                    <div class="col-md-10 fs-5" style="margin-left: 20%">
                                        <p style="text-align: left; margin-bottom: 20px !important;  padding-right: none !important;">Received by: RESPONDENT/S OR REPRESENTATIVE/S:</p><br />
                                        <p style="text-align: center; border-top: 1px solid black; margin-bottom: 2px !important;">Signature</p><br />
                                        <p style="text-align: center; border-top: 1px solid black; margin-bottom: 2px !important;">Signature</p><br />
                                        <p style="text-align: center; border-top: 1px solid black; margin-bottom: 2px !important;">Signature</p><br />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-10 fs-5">
                                        <p style="text-align: center; border-top: 1px solid black; margin-top: 110px !important; margin-bottom: 2px !important;">Date</p><br />
                                        <p style="text-align: center; border-top: 1px solid black; margin-bottom: 2px !important;">Date</p><br />
                                        <p style="text-align: center; border-top: 1px solid black; margin-bottom: 2px !important;">Date</p><br />

                                    </div>
                                </div>
                            </div>
                      </div>

                      {{-- second page --}}


                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>



<!--End of Modal-->
<script>
  function openModal() {
    $('#barangayClearance').modal('show');
  }

  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
  }
</script>
@endsection
