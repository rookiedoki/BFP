@extends('layout.dashboard-layout')

@section('content')
<h3 class="h3 mb-1">Residence Registration </h3>
<div class="card shadow">
    <div class="card-body">
      <div class="toolbar">
        <form class="form">
          <div class="form-row">
            <div action="/search_reg" class="form-group input-group col-md-4">
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
          
            <th>Image</th>
            <th>Name</th>
            <th>Nickname</th>
            <th>Birthdate</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Actions</th>
          </tr>
        </thead>

        @foreach($reg as $registration)
        <tbody>
          <tr>
            <td>
              <div class="image-round">
                <img class="imagePreview" src="{{$registration->resident_image ? asset ('storage/' .$registration->resident_image) : asset('/storage/images/-image.png')}}" alt=""  />
              </div>
            </td>
            <td class="show" >{{ ucfirst($registration->first_name)}}, {{ucfirst($registration->last_name)}}  {{ucfirst(substr($registration->last_name, 0,1)) }}.</td>
            <td class="show" >{{$registration->nickname}}</td>
            <td class="show" >{{$registration->birthdate}}</td>
            <td class="show">{{$registration->age}}</td>
            <td class="show">{{$registration->gender}}</td>
            <td>
                
                <a class="btn btn-success" href="{{url('viewRegistration',$registration->id)}}">View</a>
              
            </td>
          </tr>


          @endforeach
        </tbody>

      </table>
      <div class="clearfix">
        {{$reg->links()}}
      </div>

    </div>
  </div>
@endsection