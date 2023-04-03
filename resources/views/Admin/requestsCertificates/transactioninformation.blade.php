@extends('layout.dashboard-layout')
@section('content')

{{-- @foreach($req as $clearance) --}}
<div class="card shadow">
    <div class="card-body">
        @if ($clearance->doctype == 'Barangay Clearance')
            @if ($clearance->status == 'pending')
            <a href="/certificateOfClearance" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @elseif ($clearance->status == 'declined')
            <a href="/certificateOfClearance?search=&status=declined" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @endif
        @endif
        @if ($clearance->doctype == 'Certificate of Residency')
            @if ($clearance->status == 'pending')
            <a href="/certificateOfResidency" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @elseif ($clearance->status == 'declined')
            <a href="/certificateOfResidency?search=&status=declined" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @endif
        @endif
        @if ($clearance->doctype == 'Certificate of Indigency')
            @if ($clearance->status == 'pending')
            <a href="/certificateOfIndigency" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @elseif ($clearance->status == 'declined')
            <a href="/certificateOfIndigency?search=&status=declined" style="float: left;">
            <button class="btn btn-success btn-border btn-round btn-sm float-right">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
            </a>
            @endif
        @endif

      <div class="pt-5 pb-3" style="text-align: center;">
        <h3>REQUEST INFORMATION # {{$clearance->id}}</h3>
      </div>
      <div class="row align-items-center h-auto">
        @if($clearance->paymentMethod == "Gcash")
        <div class="col-md-7">
          <div class="form-group row" style="padding-top: 5%;">
            <label for="docType" style="text-align:right" class="col-3 col-form-label">Type of Document</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="docType" value="{{$clearance->doctype}}">
            </div>
          </div>

          <div class="form-group row">
            <label for="fullname" style="text-align:right" class="col-3 col-form-label">Requestor</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="fullname" value="{{$clearance->fullname}}">
            </div>
          </div>

          <div class="form-group row">
            <label for="contact_number" style="text-align:right" class="col-3 col-form-label">Contact Number</label>
            <div class="col-9 input-group">
              <input type="text" readonly class="form-control" id="contact_number" value="+63{{$clearance->contact_number}}">
              {{-- <a href="#messageModal{{$clearance->id}}" class="edit" data-toggle="modal">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    Notify <i class="fa fa-envelope" aria-hidden="true"></i>
                </button>
              </a> --}}
            </div>
          </div>

          <div class="form-group row">
            <label for="dateIssued" style="text-align:right" class="col-3 col-form-label">Date Requested</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="dateIssued" value="{{ Carbon\Carbon::parse($clearance->created_at)->format('F d, Y (l)') }}">
            </div>
          </div>

          <div class="form-group row">
            @if (($clearance->otherPurpose))
            <label for="purpose" style="text-align:right" class="col-3 col-form-label">Purpose</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" rows="2" id="purpose" value="{{$clearance->otherPurpose}}">
            </div>
            @else
            <label for="purpose" style="text-align:right" class="col-3 col-form-label">Purpose</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="purpose" value="{{$clearance->purpose}}">
            </div>
            @endif
          </div>

          <div class="form-group row">
            <label for="paymentMethod" style="text-align:right" class="col-3 col-form-label">Payment Method</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="paymentMethod" value="{{$clearance->paymentMethod}}">
            </div>
          </div>

          <div class="form-group row">
            @if($clearance->referenceNumber)
            <label for="refNum" style="text-align:right" class="col-3 col-form-label">Reference Num.</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="refNum" value="{{$clearance->referenceNumber}}">
            </div>
            @endif
          </div>

          <div class="form-group row">
            <label for="paymentMethod" style="text-align:right" class="col-3 col-form-label">Certificate Cost</label>
            <div class="col-9">
              <input type="text" readonly class="form-control" id="paymentMethod" value="&#8369; 50.00">
            </div>
          </div>

          <p style="font-style: italic; padding-top: 10px; color: red;">❗Please notify first the requestor regarding the status of his/ her request before proceeding.</p>

        </div>

        <div class="col-md-5 pl-2 pr-4 pt-3">
            <div class="form-group">
                @if($clearance->screenshot)
            <div class="row">
                <div id="image-show-area">
                    <img src="{{ asset ('screenshot/' .$clearance->screenshot)}}" alt="screenshot" height="530" width="380" style="padding-left: 20%"/>
                </div>
            </div>
            @endif
            </div>
        </div>

        @endif

         @if($clearance->paymentMethod == "Cash on Pick-up")
         <div class="col-12">
            <div class="form-group row">
              <label for="docType" style="text-align:right" class="col-3 col-form-label">Type of Document</label>
              <div class="col-7">
                <input type="text" readonly class="form-control" id="docType" value="{{$clearance->doctype}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="fullname" style="text-align:right" class="col-3 col-form-label">Requestor</label>
              <div class="col-7">
                <input type="text" readonly class="form-control" id="fullname" value="{{$clearance->fullname}}">
              </div>
            </div>

            <div class="form-group row">
                <label for="contact_number" style="text-align:right" class="col-3 col-form-label">Contact Number</label>
                <div class="col-7 input-group">
                  <input type="text" readonly class="form-control" id="contact_number" value="+63{{$clearance->contact_number}}">
                  {{-- <a href="#messageModal{{$clearance->id}}" class="edit" data-toggle="modal">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        Notify <i class="fa fa-envelope" aria-hidden="true"></i>
                    </button>
                  </a> --}}
                </div>
              </div>

            <div class="form-group row">
              <label for="paymentMethod" style="text-align:right" class="col-3 col-form-label">Payment Method</label>
              <div class="col-7">
                <input type="text" readonly class="form-control" id="paymentMethod" value="{{$clearance->paymentMethod}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="dateIssued" style="text-align:right" class="col-3 col-form-label">Date Issued</label>
              <div class="col-7">
                <input type="text" readonly class="form-control" id="dateIssued" value="{{ Carbon\Carbon::parse($clearance->created_at)->format('F d, Y (l)') }}">
              </div>
            </div>

            <div class="form-group row">
              @if (($clearance->otherPurpose))
              <label for="purpose" style="text-align:right" class="col-3 col-form-label">Purpose</label>
              <div class="col-7">
                <input type="text" readonly class="form-control" id="purpose" value="{{$clearance->otherPurpose}}">
              </div>
              @else
              <label for="purpose" style="text-align:right" class="col-3 col-form-label">Purpose</label>
              <div class="col-7">
                <input type="text" readonly class="form-control" id="purpose" value="{{$clearance->purpose}}">
              </div>
              @endif
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <p style="font-style: italic; padding-top: 10px; color: red; text-align: center;">❗Please notify first the requestor regarding the status of his/ her request before proceeding.</p>
                </div>
              </div>

         @endif

            <div class="col-12 pt-5 pb-3">
              <input type="hidden" name="name" value="---">
              {{-- <a href="{{url('decline-certificate/'.$clearance->id)}}" class="btn btn-danger" style="margin-left:40%; width: 100px;">Declined</a> --}}
                @if ($clearance->doctype == 'Barangay Clearance')
                <a href="{{url('certificateOfClearance/barangayClearance',$clearance->id)}}" type="submit" style="margin-left:50%; width: 100px;" class="btn btn-success">Release</a>
                @elseif ($clearance->doctype == 'Certificate of Indigency')
                <a href="{{url('certificateOfIndigency/barangayIndigency/'.$clearance->id)}}" type="submit" style="margin-left:50%; width: 100px;" class="btn btn-success">Release</a>
                @elseif ($clearance->doctype == 'Certificate of Residency')
                <a href="{{url('certificateOfResidency/barangayResidency',$clearance->id)}}" type="submit" style="margin-left:50%; width: 100px;" class="btn btn-success">Release</a>
                @endif
            </div>

                    {{-- Message Modal for Approved--}}
        <div id="messageModal{{$clearance->id}}" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="barangayClearance">Sent a Message</h5>
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
                        <input type="tel" class="form-control" name="number" value="+63{{$clearance->contact_number}}" >
                    </div>
                      <div class="form-group">
                          <label>Notification Message</label>
                          <textarea name="sms" class="form-control" rows="5" >For Approved: Hello {{$clearance->fullname}}, your request for the Certificate of Clearance has been approved. You can get your request at Barangay Hall on {DATE AND TIME HERE}.

For Denied: Hello there {{$clearance->fullname}}, sorry your request for a Certificate of Clearance was denied. Kindly check the {STATE MISTAKES/REASONS HERE} then you can try again.
From: PONCS Brngy Hall
                          </textarea>
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

