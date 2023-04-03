@extends('layout.dashboard-layout')
@section('content')
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
          <th style="font-weight: bold" width="27%">ACTIONS</th>
        </tr>
      </thead>
      @foreach($res as $residency)

      <tbody>
        <tr>
          <th scope="row">{{$loop->iteration }}</th>
          <td width="25%" class="show">{{$residency->fullname}}</td>
          <td width="23%" class="show">{{$residency->doctype}}</td>
          <td width="25%" class="show">{{ Carbon\Carbon::parse($residency->created_at)->format('F d, Y (l)') }}</td>
            <td width="27%">
                @if($residency->status == 'pending')
                <a href="{{url('transactioninformation',$residency->id)}}">
                  <span class="badge badge-warning p-2">Pending</span>
                </a>
                {{-- <a href="#editResidentsModal{{$residency->id}}" class="edit" data-toggle="modal"><button class="btn"><i class="fas fa-eye fa-minimize"></i></button></a> --}}
                @elseif($residency->status == 'approved')
                <a href="{{url('certificateOfResidency/barangayResidency',$residency->id)}}">
                  <span class="badge badge-success p-2">Generated Data</span>
                </a>
                  @if ($residency->status2 == 1)
                  <a href="javascript:void(0)" id="status2{{$residency->id}}" title="claimed"  onclick="status2('{{$residency->id}}','{{$residency->status2}}')">
                      <span class="badge badge-success p-2">Claimed</span>
                  </a>
                  @else
                  <a href="javascript:void(0)" id="status2{{$residency->id}}" title="unclaimed" onclick="status2('{{$residency->id}}','{{$residency->status2}}')">
                      <span class="badge badge-danger p-2">Unclaimed</span>
                  </a>
                  @endif

                  <a href="#messageModal{{$residency->id}}" class="edit" data-toggle="modal"><button class="btn"><i class="fa fa-envelope" style="margin: auto;" aria-hidden="true"></i></button></a>

                @elseif($residency->status == 'declined')
                <span class="badge badge-danger p-2">Declined</span>
                @endif
            </td>

        </tr>



        <div id="editResidentsModal{{$residency->id}}" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="barangayResidency">Transaction Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                  <div class="form-group">
                    <label>Payment Method</label>
                    <input type="text" class="form-control" name="date" value="{{$residency->paymentMethod}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Date Issued</label>
                    <input type="text" class="form-control" name="date" value="{{ Carbon\Carbon::parse($residency->created_at)->format('F d, Y (l)') }}" disabled>
                  </div>
                  <div class="form-group">
                    @if (($residency->otherPurpose))
                    <label>Purpose</label>
                    <input type="text" class="form-control" name="date" value="{{$residency->otherPurpose}}" disabled>
                    @else
                    <label>Purpose</label>
                    <input class="form-control" placeholder="Enter Payment Details" name="details" value="{{$residency->purpose}}" disabled>
                    @endif
                    </div>
                  <div class="form-group">
                    @if($residency->referenceNumber)
                    <label>Reference Number</label>
                    <input type="text" class="form-control" name="date" value="{{$residency->referenceNumber}}" disabled>
                    @endif
                </div>
                  <div class="form-group">
                    @if($residency->screenshot)
                    <label>Screenshot of Proof</label>
                    <div id="image-show-area image-fluid">
                      <img src="{{ asset ('screenshot/' .$residency->screenshot)}}" alt="screenshot" style="width: 100%" />
                    </div>
                    @endif
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="name" value="---">
                    <a href="{{url('decline-certificate/'.$residency->id)}}" class="btn btn-danger" class="close">Decline</a>
                    <a href="{{url('certificateOfResidency/barangayResidency',$residency->id)}}" type="submit" class="btn btn-primary">Approve</a>
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
        <div id="messageModal{{$residency->id}}" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="barangayResidency">Sent a Message</h5>
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
                        <input type="tel" class="form-control" name="number" value="+63{{$residency->contact_number}}" >
                    </div>
                      <div class="form-group">
                          <label>Notification Message</label>
                          <textarea name="sms" class="form-control" rows="5" > Hello {{$residency->fullname}}, your request for the Certificate of Residency has been approved. You can get your request at Barangay Hall on DATE AND TIME HERE.
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
                  <div id="messageModalDecline{{$residency->id}}" class="modal fade">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="barangayResidency">Sent a Message</h5>
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
                                  <input type="tel" class="form-control" name="number" value="+63{{$residency->contact_number}}" >
                              </div>
                                <div class="form-group">
                                    <label>Notification Message</label>
                                    <textarea name="sms" class="form-control" rows="5" >Hello there {{$residency->fullname}}, sorry your request for a Certificate of Residency was denied. Kindly check the MISTAKES then you can try again.

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
      </tbody>


    </table>
  </div>
</div>
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
