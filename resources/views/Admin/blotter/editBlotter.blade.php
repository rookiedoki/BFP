@extends('layout.dashboard-layout')

@section('content')


  <div class="card shadow">
    <div class="card-body">
        <a href="{{url('/blotter/generateSummon',$blorep->id)}}">
            <button class="btn btn-success btn-border btn-round btn-sm">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
            </button>
        </a>
      <h2 class="h4 mb-5 text-center">Edit Blotter Information</h2>
      <div class="toolbar">
      <div>
        <form action="/blotter/{{$blorep->id}}" method="POST" enctype="multipart/form-data" style="margin-right: 20px; margin-left: 20px;">
            @csrf
            @method('PUT')

        <div class="row mb-3">
          <div class="form-group col-12">
            <h6>For:<span style="color: red">*</span></h6>
            <input type="text" name="for_reason" class="form-control" value="{{$blorep->for_reason}}" required autocomplete="for_reason">
            @Error('for_reason')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
           @enderror
          </div>
        </div>

        <div class="row mb-3">
          <div class="form-group col-6">
            <h6>Complainant's Name<span style="color: red">*</span></h6>
            <input type="text" name="complainant" class="form-control" value="{{$blorep->complainant}}" required autocomplete="complainant">
            @Error('complainant')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
           @enderror
          </div>

          <div class="form-group col-6">
            <h6>Complainant's Contact Number<span style="color: red">*</span></h6>
            <input type="text" name="phone_number1" class="form-control" value="{{$blorep->phone_number1}}" required autocomplete="phone_number1">
            @Error('phone_number1')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
           @enderror
          </div>

          <div class="form-group col-12">
            <h6>Complainant's Current Address<span style="color: red">*</span></h6>
            <input type="text" name="comCA" class="form-control" value="{{$blorep->comCA}}" required autocomplete="comCA">
            @Error('comCA')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
           @enderror
          </div>
       </div>

       <div class="row mb-3">
        <div class="form-group col-12">
          <h6>Victims/ Witnesses<span style="color: red">*</span></h6>
          <input type="text" name="victim" class="form-control" value="{{$blorep->victim}}" required autocomplete="victim">
          @Error('victim')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>
     </div>

       <div class="row mb-5">
        <div class="form-group col-6">
          <h6>Respondent's Name<span style="color: red">*</span></h6>
          <input type="text" name="respondent" class="form-control" value="{{$blorep->respondent}}" required autocomplete="respondent">
          @Error('respondent')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>

        <div class="form-group col-6">
          <h6>Respondent's Contact Number<span style="color: red">*</span></h6>
          <input type="text" name="phone_number2" class="form-control" value="{{$blorep->phone_number2}}" required autocomplete="phone_number2">
          @Error('phone_number2')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>

        <div class="form-group col-12">
          <h6>Respondent's Current Address<span style="color: red">*</span></h6>
          <input type="text" name="resCA" class="form-control" value="{{$blorep->resCA}}" required autocomplete="resCA">
          @Error('resCA')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>
     </div>

     <div class="row">
        <div class="form-group col-3">
          <h6>Date of Summon<span style="color: red">*</span></h6>
          <input type="date" name="datesum" class="form-control" value="{{$blorep->datesum}}" required autocomplete="datesum">
          @Error('datesum')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>

        <div class="form-group col-3">
          <h6>Time of Summon<span style="color: red">*</span></h6>
          <input type="time" name="timesum" class="form-control" value="{{$blorep->timesum}}" required autocomplete="timesum">
          @Error('timesum')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>

        <div class="form-group col-3">
          <h6>Date to Deliver Summon<span style="color: red">*</span></h6>
          <input type="date" name="delsum" class="form-control" value="{{$blorep->delsum}}" required autocomplete="delsum">
          @Error('delsum')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
         @enderror
        </div>

        <div class="form-group col-3">
            <h6>Time to Deliver Summon<span style="color: red">*</span></h6>
            <input type="time" name="delsum2" class="form-control" value="{{$blorep->delsum2}}" required autocomplete="delsum2">
            @Error('delsum2')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
           @enderror
        </div>
     </div>

    <div class="container">
    <div class="row">
        <div class="col-auto" style="margin: 3% 40% 3% 40%;">
            <button type="submit" class="btn btn-primary btn-sm" >Update</button></a>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
            <script>
              window.dataLayer = window.dataLayer || [];

              function gtag()
              {
                dataLayer.push(arguments);
              }
              gtag('js', new Date());
              gtag('config', 'UA-56159088-1');
            </script>

            <script type="text/javascript">

            $("document").ready(function()

            {
              setTimeout(function()
                {
                  $("div.alert").remove();
                },3000);
            });
            </script>

@endsection

