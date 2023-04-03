@extends('layout.dashboard-layout')
@section('content')

<div id="notifDiv"></div>
<h2 class="h2 mb-1">Request Certificate </h2>
<div class="card shadow">
  <div class="card-body">
    <div class="toolbar">
      <form class="form">
        <div class="form-row">
          <div action="/residents" class="form-group input-group col-md-5">
            <label for="search" class="sr-only">Search</label>
            <input type="text" class="form-control" id="search" name="search" value="{{\Request::get('search')}}" placeholder="Search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary mb-1"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <div class="form-group col-auto">
            <label for="category" class="sr-only">Status</label>
            <select class="form-control" id="status" name="status">
              <option disabled>Select Status</option>
              <option value="pending" {{\Request::get('status') === 'pending' ? 'selected' : ''}}>Pending</option>
              <option value="approved" {{\Request::get('status') === 'approved' ? 'selected' : ''}}>Released</option>
              {{-- <option value="declined" {{\Request::get('status') === 'declined' ? 'selected' : ''}}>Declined</option> --}}
            </select>
          </div>
          <script>
            $(document).ready(function() {
              $('#status').change(function() {
                this.form.submit();
              });
            });
          </script>
        </div>

      </form>

    </div>
    <!-- table -->
    <table class="table table-border table-responsive table-hover">
      <thead style="background-color: #8d8d8d88; color:#eee !important;">
        <tr>
          <th style="font-weight: bold">NO.</th>
          <th style="font-weight: bold" width="25%">FULLNAME</th>
          <th style="font-weight: bold" width="23%">TYPE OF DOCUMENT</th>
          <th style="font-weight: bold" width="25%">DATE</th>
          <th style="font-weight: bold" width="27%">STATUS</th>
        </tr>
      </thead>
      @foreach($clear as $clearance)
      <tbody>
        <tr>
          {{-- <td>
            <div class="image-round">
              <img class="imagePreview" src="{{$clearance->resident_image ? asset ('storage/' .$clearance->resident_image) :  asset('/storage/images/-image.png')}}" alt=""  />
            </div>
          </td> --}}
          <th scope="row">{{$loop->iteration }}</th>
          <td width="25%" class="show">{{$clearance->fullname}}</td>
          <td width="23%" class="show">{{$clearance->doctype}}</td>
          <td width="25%" class="show">{{ Carbon\Carbon::parse($clearance->created_at)->format('F d, Y (l)') }}</td>
          <td width="27%">
            @if($clearance->status == 'pending')
            <a href="{{url('transactioninformation',$clearance->id)}}">
                <span class="badge badge-warning p-2">Pending</span>
            </a>
            @elseif($clearance->status == 'approved')
            <a href="{{url('certificateOfClearance/barangayClearance',$clearance->id)}}">
              <span class="badge badge-success p-2">Generated Data</span>
            </a>
                @if ($clearance->notified == 'pending')
                <a href="#messageModal{{$clearance->id}}" class="edit" data-toggle="modal"><img src="assets/images/message.png" style="width: 33px;" alt="Message Unsent"></a>
                @elseif ($clearance->notified == 'yes')
                <span><img src="assets/images/send.png" alt="Message Sent" width="18%" class="img-fluid" style="width: 35px;"></span>
                @elseif ($clearance->notified == 'no')
                <a href="#messageModal{{$clearance->id}}" class="edit"  data-toggle="modal"><img src="assets/images/unsent.png" style="width: 35px;" alt="Message Unsent"></a>
                @endif
                @if ($clearance->status2 == 1)
                <a href="javascript:void(0)" id="status2{{$clearance->id}}" title="claimed" onclick="status2('{{$clearance->id}}','{{$clearance->status2}}')">
                    <span class="badge badge-success p-2">Claimed</span>
                </a>
                @else
                <a href="javascript:void(0)" id="status2{{$clearance->id}}" title="unclaimed" onclick="status2('{{$clearance->id}}','{{$clearance->status2}}')">
                    <span class="badge badge-danger p-2">Unclaimed</span>
                </a>
                @endif

                <a href="#messageModal{{$clearance->id}}" class="edit" data-toggle="modal"><button class="btn"><i class="fa fa-envelope" aria-hidden="true" style="margin: auto;"></i></button></a>

            {{-- <input data-id="{{$clearance->id}}" type="checkbox" class="toggle-class" data-toggle="toggle" data-style="slow" data-on="Claimed" data-off="Unclaimed" data-size="small" data-width="100" data-onstyle="success" data-offstyle="danger" {{ $clearance->status2 == true ? 'checked' : ''}}> --}}
            @elseif($clearance->status == 'declined')
            <span class="badge badge-danger p-2">Declined</span>
            {{-- <a href="#messageModalDecline{{$clearance->id}}" class="edit" data-toggle="modal"><button class="btn"><i class="fa fa-envelope" aria-hidden="true"></i></button></a> --}}
                @if ($clearance->notified == 'pending')
                <a href="#messageModalDecline{{$clearance->id}}" class="edit" data-toggle="modal"><button class="btn"><i class="fa fa-envelope" aria-hidden="true"></i></button></a>
                @elseif ($clearance->notified == 'yes')
                <span><img src="assets/images/send.png" class="img-fluid" width="18%" alt="Message Sent"></span>
                @elseif ($clearance->notified == 'no')
                <a href="#messageModalDecline{{$clearance->id}}" class="edit" data-toggle="modal"><button class="btn"><img src="assets/images/unsent.png" class="img-fluid" width="18%" alt="Message Unsent"></button></a>
                @endif
            @endif
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- <div class="clearfix">
    {{$clear->links()}}
</div> --}}
@foreach($clear as $clearance)
        <div id="editResidentsModal{{$clearance->id}}" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="barangayClearance">Transaction Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                  <div class="form-group">
                    <label>Payment Method</label>
                    <input type="text" class="form-control" name="date" value="{{$clearance->paymentMethod}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Date Issued</label>
                    <input type="text" class="form-control" name="date" value="{{ Carbon\Carbon::parse($clearance->created_at)->format('F d, Y (l)') }}" disabled>
                  </div>
                  <div class="form-group">
                    @if (($clearance->otherPurpose))
                    <label>Purpose</label>
                    <input type="text" class="form-control" name="date" value="{{$clearance->otherPurpose}}" disabled>
                    @else
                    <label>Purpose</label>
                    <input class="form-control" placeholder="Enter Payment Details" name="details" value="{{$clearance->purpose}}" disabled>
                    @endif
                </div>
                  <div class="form-group">
                    @if($clearance->referenceNumber)
                    <label>Reference Number</label>
                    <input type="text" class="form-control" name="date" value="{{$clearance->referenceNumber}}" disabled>
                    @endif
                  </div>

                  <div class="form-group">
                    @if($clearance->screenshot)
                    <label>Screenshot of Proof</label>
                    <div id="image-show-area image-fluid">
                      <img src="{{ asset ('screenshot/' .$clearance->screenshot)}}" alt="screenshot" style="width: 100%" />
                    </div>
                    @endif
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="name" value="---">
                    <a href="{{url('decline-certificate/'.$clearance->id)}}" class="btn btn-danger" class="close">Decline</a>
                    <a href="{{url('certificateOfClearance/barangayClearance',$clearance->id)}}" type="submit" class="btn btn-success">Approve</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <script>
            setTimeout(function(){ openModal(); }, 1000);
        </script> --}}
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
                        <textarea name="sms" class="form-control" rows="5" >Hello {{$clearance->fullname}}, your request for the Certificate of Clearance has been approved. You can get your request at Barangay Hall on DATE AND TIME HERE.

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

                {{-- Message Modal for Declined --}}
                <div id="messageModalDecline{{$clearance->id}}" class="modal fade">
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
                                  <textarea name="sms" class="form-control" rows="5" > Hello there {{$clearance->fullname}}, sorry your request for a Certificate of Clearance was denied. Kindly check the MISTAKES then you can try again.
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
        @endforeach

  </div>
</div>
{{-- <div class="clearfix">
    {{$clear->links()}}
</div> --}}

<script>
function status2(id,status2){
    var stp = document.getElementById('status2' + id).title;
    // alert(stp);
    if(stp == "unclaimed"){
        stf = 1;
    }
    if(stp == "claimed"){
        stf = 0;
    }
    $.ajax({
        url: "/statusofrequest/" + id + "/" + stf,
        success: function(response){
            if(response.status2 == "0"){
                // alert(response.status2);
                document.getElementById('status2' + id).innerHTML = '<span class="badge badge-danger p-2">Unclaimed</span>';
                document.getElementById('status2' + id).title = "unclaimed";
            }
            if(response.status2 == "1"){
                // alert(response.status2);
                document.getElementById('status2' + id).innerHTML = '<span class="badge badge-success p-2">Claimed</span>';
                document.getElementById('status2' + id).title = "claimed";
            }
        }

    })
}
</script>
@endsection

