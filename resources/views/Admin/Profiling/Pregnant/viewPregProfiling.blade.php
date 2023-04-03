@extends('layout.dashboard-layout')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <h2 style="padding-left: 20px; padding-top: 20px">RESIDENT SENIOR CITIZEN PROFILE</h2>
      </div>
      <div class="card-body">
        <form  method="POST" action="/addListPregnant/{{$pregProfiling->id}}" class="col-lg-8 col-md-8 col-10 mx-auto"  >
            @csrf

            
            {{-- <label class="labelImage">Senior Citizen ID</label> --}}
            {{-- <a href="#showImage" class="show" data-toggle="modal"><img class="previewww" id="preview" src="{{$pregProfiling->senior_id? asset ('storage/' .$senProfiling->senior_id) : asset('/storage/no/-image.png')}}" alt="" /></a> --}}
          <div class="form-row">

                 <div class="form-group col-md-12">
                      <label for="inputPassword4">Name</label>
                      <input readonly  name="name" class="form-control" value="{{$pregProfiling->name}}">
                </div>
          </div>
          <div class="form-row">

              <div class="form-group col-md-6">
                <label for="inputAddress">Birthdate</label>
                <input readonly  name="birthdate" class="form-control" id="inputAddress5" value="{{$pregProfiling->birthdate}}">
              </div>

                  <div class="form-group col-md-6">
                    <label for="inputAddress2">Age</label>
                    <input readonly  name="age" class="form-control" id="inputAddress6" value="{{$pregProfiling->age}}">
                  </div>

        </div>
          <div class="form-row">
                <div class="form-group col-sm-3">
                  <label for="inputCity">Weight</label>
                  <input readonly  name="weight" class="form-control" value="{{$pregProfiling->weight}}">
                </div>


           <div class="form-group col-sm-4">
              <label for="inputZip">Last Menstrual Period(LMP)</label>
              <input readonly name="LMP" class="form-control" value="{{$pregProfiling->LMP}}">
            </div>


                <div class="form-group col-sm-5">
                  <label for="inputZip">Estimated Date of Confinement(EDC)</label>
                  <input readonly  name="EDC" class="form-control" value="{{$pregProfiling->EDC}}">
                </div>
          </div>

          <button type="submit" class="btn btn-primary">Add to List</button>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->


<div id="showImage" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <form>
              <div class="modal-header">						
                  <h4 class="modal-title">View Pregnants</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>


              <div class="modal-body">					
                <div id="image-show-area">
                  <img class="id-birth" src="{{$pregProfiling->senior_id ? asset ('storage/' .$pregProfiling->senior_id) : asset('/storage/images/-image.png')}}" alt=""  />
                </div>
              </div>
              <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              </div>

          </form>
      </div>
  </div>
</div>

@endsection