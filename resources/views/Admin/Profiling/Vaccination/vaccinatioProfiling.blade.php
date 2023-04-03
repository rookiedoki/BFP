@extends('layout.dashboard-layout')
@section('content')

<h2 class="h4 mb-1">Vaccination Profiling </h4>
<div class="card shadow">
    <div class="card-body">
      <div class="toolbar">
        <form class="form">
          <div class="form-row">
            <div action="/residents" class="form-group col-auto">
              <label for="search" class="sr-only">Search</label>
              <input type="text" class="form-control" id="search" name="search" value="" placeholder="Search">     
            </div>
          </div>
        </form>
      </div>
      <!-- table -->
      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th >#</th>
            <th >Image</th>
            <th >Name</th>
            <th >Age</th>
            <th >Birthdate</th>
            <th>Name of Vaccine</th>
            <th>Action</th>
          </tr>
        </thead>

        @foreach($vacc as $vaccination)
        <tbody>
          <tr>
            <th scope="row">{{$loop->iteration }}</th>
            <td>
              <div class="image-round">
                <img class="imagePreview" src="{{$vaccination->vaccine_image ? asset ('storage/' .$vaccination->vaccine_image) : asset('/storage/images/-image.png')}}" alt=""  />
              </div>
            </td>
            <td>{{$vaccination->name}}</td>
            <td>{{$vaccination->age}}</td>
            <td>{{$vaccination->birthdate}}</td>
            <td style=" text-align:center">{{$vaccination->vaccine_type}}</td>
            <td>
                {{-- <a class="btn btn-success" href="{{url('viewVaccProfiling',$vaccination->id)}}">View</a> --}}
                <a href="{{url('viewVaccProfiling',$vaccination->id)}}" > <i class="fas fa-eye" ></i></a> 
                <a href="#deleteInquiries{{$vaccination->id}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>            </td>
          </tr>

                    <!---------------------------------------- Delete Vaccination Modal HTML -------------------------------------->
                    <div id="deleteInquiries{{$vaccination->id}}" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <form >
                                  <div class="modal-header">
                                      <h4 class="modal-title">Delete Resident Vaccination Record</h4>
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
                                      <a class="btn btn-danger" href="{{url('deleteVacc',$vaccination->id)}}">Delete</a>
                                  </div>
    
                              </form>
                          </div>
                      </div>
                  </div>
                  @endforeach
                </tbody>
        
              </table>
              <div class="clearfix">
                {{$vacc->links()}}
            </div>
        
            </div>
  </div>

@endsection