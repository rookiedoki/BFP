@extends('layout.dashboard-layout')
@section('content')

{{-- @foreach($req as $blotter) --}}
<div class="card shadow">
    <div class="card-body">

            @if ($blotter->status == 'pending')
            <a href="/blotter" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @elseif ($blotter->status == 'approved')
            <a href="/blotter?search=&status=approved" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @elseif ($blotter->status == 'declined')
            <a href="/blotter?search=&status=declined" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @endif

      <div class="pt-5 pb-3" style="text-align: center;">
        <h3>Blotter Report # {{$blotter->id}}</h3>
      </div>
      <div class="row align-items-center h-auto">

      <div class="col-md-12">
        <div class="form-group row" style="padding-top: 3%;">
            <label for="dateIssued" style="text-align:right" class="col-4 col-form-label">Date Reported</label>
            <div class="col-7">
                <input type="text" readonly class="form-control" id="dateReported" value="{{ Carbon\Carbon::parse($blotter->created_at)->format('F d, Y (l)') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="action" style="text-align:right" class="col-4 col-form-label">Requested Action to be Taken</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="action" value="{{$blotter->action}}">
            </div>
          </div>

          <div class="form-group row">
            <label for="complainant" style="text-align:right" class="col-4 col-form-label">Complainant's Name</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="complainant" value="{{$blotter->complainant}}">
            </div>
          </div>

          @if ($blotter->action == 'Summon')
          <div class="form-group row">
            <label for="comCA" style="text-align:right" class="col-4 col-form-label">Complainant's Current Address</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="comCA" value="{{$blotter->comCA}}">
            </div>
          </div>
          @endif

          <div class="form-group row">
            <label for="phone_number1" style="text-align:right" class="col-4 col-form-label">Complainant's Contact Number</label>
            <div class="col-7 input-group">
              <input type="text" readonly class="form-control" id="phone_number1" value="0{{$blotter->phone_number1}}">
              <a href="#messageModal{{$blotter->id}}" class="edit" data-toggle="modal">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    Notify <i class="fa fa-envelope" aria-hidden="true"></i>
                </button>
              </a>
            </div>
          </div>

          @if ($blotter->respondent != null )
          <div class="form-group row">
            <label for="respondent" style="text-align:right" class="col-4 col-form-label">Respondent's Name</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="respondent" value="{{$blotter->respondent}}">
            </div>
          </div>

          @if ($blotter->action == 'Summon')
          <div class="form-group row">
            <label for="resCA" style="text-align:right" class="col-4 col-form-label">Respondent's Current Address</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="resCA" value="{{$blotter->resCA}}">
            </div>
          </div>
          @endif

          <div class="form-group row">
            <label for="phone_number2" style="text-align:right" class="col-4 col-form-label">Respondent's Contact Number</label>
            <div class="col-7 input-group">
              <input type="text" readonly class="form-control" id="phone_number2" value="0{{$blotter->phone_number2}}">
              <a href="#messageModal2{{$blotter->id}}" class="edit" data-toggle="modal">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    Notify <i class="fa fa-envelope" aria-hidden="true"></i>
                </button>
              </a>
            </div>
          </div>
          @endif

          <div class="form-group row">
            <label for="location" style="text-align:right" class="col-4 col-form-label">Location</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="location" value="{{$blotter->location}}">
            </div>
          </div>

          <div class="form-group row">
            <label for="dateTime" style="text-align:right" class="col-4 col-form-label">Date and Time of the Incident</label>
            <div class="col-7">
              <input type="text" readonly class="form-control" id="dateTime" value="{{$blotter->date}} {{$blotter->time}}">
            </div>
          </div>

          <div class="form-group row">
            <label for="details" style="text-align:right" class="col-4 col-form-label">Accusation/Details</label>
            <div class="col-7">
              <textarea type="text" readonly class="form-control" id="details" disabled>{{$blotter->details}}</textarea>
            </div>
          </div>

          @if ($blotter->proof != null)
          <div class="form-group row">
            <label for="details" style="text-align:right" class="col-4 col-form-label">Proof/ Evidence for the Accusation</label>
            <div id="image-show-area" class="col-7">
                <img class="proof img-fluid" src="{{$blotter->proof ? asset ('storage/' .$blotter->proof) : asset('/storage/images/-image.png')}}" alt="proof" width="100%"/>
            </div>
          </div>
          @endif

          <p style="font-style: italic; padding-top: 10px; color: red; text-align: center;">❗Please notify first the requestor regarding the status of his/ her request before proceeding.</p>
        </div>

            <div class="col-12 pt-5 pb-3">
              {{-- <input type="hidden" name="name" value="---"> --}}
                @if ($blotter->status == 'pending')
                <a href="{{url('decline-blotter/'.$blotter->id)}}" class="btn btn-danger" style="margin-left:40%; width: 150px;">Okay</a>
                <a href="{{url('blotter/generateSummon',$blotter->id)}}" type="submit" style="margin-left:2%; width: 150px;" class="btn btn-success">Generate Summon</a>
                @elseif($blotter->status == 'approved')
                <a href="{{url('blotter/generateSummon',$blotter->id)}}" type="submit" style="margin-left:2%; width: 150px;" class="btn btn-success">Generate Summon</a>
                @endif
            </div>

                    {{-- Message Modal for Approved--}}
        <div id="messageModal{{$blotter->id}}" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="barangayblotter">Sent a Message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div>
                    <form action="{{route('send.sms')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" name="number" value="+63{{$blotter->phone_number1}}" >
                    </div>
                      <div class="form-group">
                        @if ($blotter->action == 'Record Only')
                        @if ($blotter->respondent == null)
                        <label>Notification Message</label>
                        <textarea name="sms" class="form-control" rows="5" >Hello {{$blotter->complainant}}, your blotter report has been noticed and recorded.

From: PONCS Brngy Hall
                        </textarea>
                        @else
                        <label>Notification Message</label>
                        <textarea name="sms" class="form-control" rows="5" >Hello {{$blotter->complainant}}, your blotter report has been noticed and recorded. Also, we have already notified and informed the respondent regarding your report.

From: PONCS Brngy Hall
                        </textarea>
                        @endif
                        @elseif ($blotter->action == 'Summon')
                        <label>Notification Message</label>
                        <textarea name="sms" class="form-control" rows="5" >Your blotter report has been noticed and recorded, {{$blotter->complainant}}. We have already notified and informed the respondent regarding your report, summon letter will be issued and sent in your place on DATE AND TIME.

From: PONCS Brngy Hall
                        </textarea>
                        @endif

                      </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Send Notification</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

                  {{-- Message Modal for Declined --}}
                  <div id="messageModal2{{$blotter->id}}" class="modal fade">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="barangayblotter">Sent a Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div>
                              <form action="{{route('send.sms')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Phone Number</label>
                                  <input type="tel" class="form-control" name="number" value="+63{{$blotter->phone_number2}}" >
                              </div>
                                <div class="form-group">
                                    @if ($blotter->action == 'Record Only')
                        <label>Notification Message</label>
                        <textarea name="sms" class="form-control" rows="5" >{{$blotter->respondent}}, you have been reported by {{$blotter->complainant}} for the accusation of "{{$blotter->details}}". Please be informed that this incident will be recorded in our system and logbook. For clarifications and inquiries you can report here in barangay hall.
From: PONCS Brngy Hall
                        </textarea>

                        @elseif ($blotter->action == 'Summon')
                        <label>Notification Message</label>
                        <textarea name="sms" class="form-control" rows="5" >{{$blotter->respondent}}, you have been reported by {{$blotter->complainant}} for the accusation of "{{$blotter->details}}". Please be informed that this incident will be recorded in our system and logbook. The complainant also request a summon and the letter will be delivered in you place on DATE and TIME.
From: PONCS Brngy Hall
                        </textarea>
                        @endif
                                </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Send Notification</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

      </div>
    </div>
</div>

{{-- @endforeach --}}
@endsection

