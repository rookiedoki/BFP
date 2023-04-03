@extends('layout.dashboard-layout')
@section('content')

<div class="row">
    <!-- Small table -->
    <div class="col-md-12 my-4">
      <h2 class="h4 mb-1">Manage Residence</h2>
        {{-- <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa print"></i></a> --}}
      <div class="card shadow">
        <div class="card-body">
          <div class="toolbar">

            <form class="form">
              <div class="form-row">
                <div class="form-group col-auto mr-auto">
                    <a href="addResidents" class="btn btn-success"><i class="fas fa-plus" ></i> <span>Add New Residents</span></a>
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
                <th style="width:12%">Image</th>
                <th>Name</th>
                <th>Nick Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th style="width:15%; text-align:center" > Actions  </th>
              </tr>
            </thead>

            @foreach($resident as $residents)

            <tbody>
              <tr>

                <td>
                  <div class="image-round">
                    <img class="imagePreview" src="{{$residents->resident_image ? asset ('storage/' .$residents->resident_image) : asset('/storage/no/-image.png')}}" alt=""  />
                  </div>
                </td>
                <td>{{ucfirst($residents->last_name)}}, {{ucfirst($residents->first_name)}}  {{ucfirst(substr($residents->last_name, 0,1)) }}.</td>
                <td>{{ucfirst($residents->nickname)}}</td>
                <td>{{$residents->gender}}</td>
                <td>{{$residents->age}}</td>
                <td>{{$residents->phone_number}}</td>
                <td>
                    <a href="{{url('editResidents',$residents->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteResidentsModal{{$residents->id}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    <a href="{{url('viewResidents',$residents->id)}}"><i class="fas fa-eye" ></i></a>
                    {{-- <a class="btn btn-danger" href="{{url('viewResidents',$residents->id)}}">View</a> --}}
                </td>
              </tr>

                <!---------------------------------------- Delete Residents Modal HTML -------------------------------------->
                <div id="deleteResidentsModal{{$residents->id}}" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{url('deleteResidents',$residents->id)}}">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Residents</h4>
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
                                    <button type="submit" class="btn btn-primary btn-sm" >Delete</button></a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



              @endforeach
            </tbody>

          </table>
        <div class="clearfix">
            {{$resident->links()}}
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
