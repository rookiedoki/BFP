@extends('layout.dashboard-layout')
@section('content')

<h2 class="h4 mb-1">Pregnants Profiling </h4>
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
            <th>No.</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Age</th>
            <th>Weight</th>
            <th>LMP</th>
            <th>EDC</th>
            <th>Action</th>
          </tr>
        </thead>

        @foreach($preg as $pregnant)
        <tbody>
          <tr>
            <th scope="row">{{$loop->iteration }}</th>
            <td>{{$pregnant->name}}</td>
            <td>{{$pregnant->birthdate}}</td>
            <td>{{$pregnant->age}}</td>
            <td>{{$pregnant->weight}}</td>
            <td>{{$pregnant->LMP}}</td>
            <td>{{$pregnant->EDC}}</td>
            <td>
                <a href="{{url('viewPregnantProfiling',$pregnant->id)}}" > <i class="fas fa-eye" ></i></a> 
                <a href="#deleteSen{{$pregnant->id}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> </td>
            </td>
          </tr>
                     <!---------------------------------------- Delete Senior Modal HTML -------------------------------------->
                     <div id="deleteSen{{$pregnant->id}}" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <form >
                                  <div class="modal-header">
                                      <h4 class="modal-title">Delete Senior Citizen Record</h4>
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
                                      <a class="btn btn-danger" href="{{url('deletePreg',$pregnant->id)}}">Delete</a>
                                  </div>
    
                              </form>
                          </div>
                      </div>
                  </div>
          @endforeach
        </tbody>

      </table>
      <div class="clearfix">
        {{$preg->links()}}
    </div>

    </div>
  </div>

@endsection