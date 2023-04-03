@extends('layout.dashboard-layout')

@section('content')


<div class="row">
    <!-- Small table -->
    <div class="col-md-12 my-4">

      </h2>
        {{-- <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa print"></i></a> --}}
      <div class="card shadow">
        <div class="card-body">
          <div class="toolbar">

            <form class="form">
              <div class="form-row">
                <div class="form-group col-auto mr-auto">
                    <h2 class="h4 mb-1">Manage Inquiries
                  {{-- <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addResidentsModal"><i class="fas fa-plus" ></i> <span>Add New Residents</span></a> --}}
                </div>
                <div action="/residents" class="form-group input-group col-md-4">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" id="search" name="search" value="{{\Request::get('search')}}" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary mb-1"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
              </div>
            </form>

          </div>
          <!-- table -->
          <table class="table table-borderless table-hover">
            <thead>
              <tr>
                
                <th style="width:10%; ">NO.</th>
                <th style="width:15%; ">Name</th>
                <th style="width:15%; ">Number</th>
                <th style="width:15%; ">Subject</th>
                <th style="width:15%; " > Actions  </th>
              </tr>
            </thead>

            @foreach($inqui as $inquiries)

            <tbody>
              <tr>

                <th scope="row">{{$loop->iteration }}</th>
                <td>{{$inquiries->name}}.</td>
                <td>{{$inquiries->phone_number}}</td>
                <td>{{$inquiries->subject}}</td>
                <td>
                    <a href="#view{{$inquiries->id}}" data-toggle="modal" > <i class="fas fa-eye" data-toggle="tooltip" ></i></a> 
                    <a href="#message{{$inquiries->id}}" data-toggle="modal" > <i class="fa fa-envelope" data-toggle="tooltip" ></i></a> 
                    <a href="#deleteInquiries{{$inquiries->id}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    {{-- <a href="{{url('viewResidents',$inquiries->id)}}"><i class="fas fa-eye" ></i></a>  --}}
                    {{-- <a class="btn btn-danger" href="{{url('viewResidents',$residents->id)}}">View</a> --}}
                </td>
              </tr>

                                            {{-- -------------------SMS Send Message------------------------------------ --}}
  <div id="message{{$inquiries->id}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

          <form  method="POST" action="/inquiriesSend/{{$inquiries->id}}" class="col-lg-8 col-md-8 col-10 mx-auto"  >
            @csrf 

                <div class="modal-header">						
                    <h4 class="modal-title">Send Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="row register-form">
                    <div class="col-sm-12">
                        <div class="modal-body">					
                            <div class="form-group">
                                <label >Number</label>
                                <input readonly type="text" class="form-control" name="regNumber" value="+63 951 928 7056" required autocomplete="password">
                            
                                @Error('regNumber')
                                    <p class="text-danger text-md mt-1">{{$message}}</p>
                                @enderror
                            
                            </div>
                        </div>
                    </div>
                </div>   
                
                <div class="row register-form">
                  <div class="col-sm-12">
                      <div class="modal-body">					
                          <div class="form-group">
                              <label >Message</label>
                              <textarea type="text" class="form-control" name="message" value="{{old('message')}}" required autocomplete="password"></textarea>
                          
                              @Error('message')
                                  <p class="text-danger text-md mt-1">{{$message}}</p>
                              @enderror
                          
                          </div>
                      </div>
                  </div>
              </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-primary btn-sm" >Send</button></a>
                </div>

        </div>
    </div>
</div>
{{-- {{$inqui->links('pagination::boostrap-4a')}} --}}

                <!---------------------------------------- Inquiries Send Message -------------------------------------->
                <div id="view{{$inquiries->id}}" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{url('deleteResidents',$inquiries->id)}}">
                                @csrf
                                <div class="modal-header">						
                                  <h4 class="modal-title">Inquiries</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>
              
                              <div class="row register-form">
                                  <div class="col-sm-6">
                                      <div class="modal-body">					
                                          <div class="form-group">
                                              <label >Name</label>
                                              <input readonly type="text" class="form-control" name="name" value="{{$inquiries->name}}" required autocomplete="password">
                                          
                                              @Error('regNumber')
                                                  <p class="text-danger text-md mt-1">{{$message}}</p>
                                              @enderror
                                          
                                          </div>
                                      </div>
                                  </div>
                                <div class="col-sm-6">
                                    <div class="modal-body">					
                                        <div class="form-group">
                                            <label >Number</label>
                                            <input readonly type="text" class="form-control" name="regNumber" value="{{$inquiries->phone_number}}" required autocomplete="password">
                                        </div>
                                    </div>
                                </div>
                            </div>   

                            <div class="row register-form">
                              <div class="col-sm-12">
                                  <div class="modal-body">					
                                      <div class="form-group">
                                          <label >Subject</label>
                                          <input readonly type="text" class="form-control" name="regMessage" value="{{$inquiries->subject}}" required autocomplete="password"></textarea>
                                      
                                          @Error('regMessage')
                                              <p class="text-danger text-md mt-1">{{$message}}</p>
                                          @enderror
                                      
                                      </div>
                                  </div>
                              </div>
                          </div>
                              
                              <div class="row register-form">
                                <div class="col-sm-12">
                                    <div class="modal-body">					
                                        <div class="form-group">
                                            <label >Message</label>
                                            <textarea readonly type="text" class="form-control" name="regMessage" value="{{$inquiries->message}}" required autocomplete="password">{{$inquiries->message}}</textarea>
                                        
                                            @Error('regMessage')
                                                <p class="text-danger text-md mt-1">{{$message}}</p>
                                            @enderror
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <div class="modal-footer">
                                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Back">
                              </div>
                            </form>
                        </div>
                    </div>
                </div>

                
                <!---------------------------------------- Delete Residents Modal HTML -------------------------------------->
                <div id="deleteInquiries{{$inquiries->id}}" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <form >
                              <div class="modal-header">
                                  <h4 class="modal-title">Delete Residents Inquries Record</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>


                              <div class="modal-body">
                                  <p>Are you sure you want to delete these Records?</p>
                                  <p class="text-warning"><small>This action cannot be undone.</small></p>
                              </div>
                              <div class="modal-footer">
                                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                  {{-- <input type="submit" href="{{url('deleteResidents', $residents->id)}}" class="btn btn-danger" value="Delete"> --}}
                                  {{-- <a class="btn btn-danger" href="{{url('deleteResidents',$residents->id)}}">Delete</a> --}}
                                  <a class="btn btn-danger" href="{{url('deleteInquiries',$inquiries->id)}}">Delete</a>
                              </div>

                          </form>
                      </div>
                  </div>
              </div>




              @endforeach
            </tbody>

          </table>
          <div class="clearfix">
            {{$inqui->links()}}
          </div>
        </div>
      </div>


      <script>
       var loadFile = function(event){
        var resident_image2 = document.getElementByID("resident_image2");
        resident_image2.src = URL.createObjectURL(event.target.files[0]);
       }
    </script>


        </div>
    </div>
  </div>
  <script>
    resident_image.onchange = evt => {
      const [file] = resident_image.files
      if (file) {
        prview.style.visibility = 'visible';

        prview.src = URL.createObjectURL(file)
      }
    }
</script>

<script>
    $(function() {
       $("#datebirth").datepicker({
       onSelect: function(value, ui) {
           var today = new Date(),
               age = today.getFullYear() - ui.selectedYear;
           $('#age').val(age);
       },

       dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
       });

   });
     </script>


@endsection