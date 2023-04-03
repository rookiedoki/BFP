
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @foreach($setting as $settings)
    <link rel="icon" href="{{$settings->barangay_logo ? asset ('storage/' .$settings->barangay_logo) : asset('/storage/no/-image.png')}}">
    @endforeach
    {{-- <link rel="icon" href="favicon.png" type="image/png"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    {{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
     {{-- <script src="http://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script> --}}
    {{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
    <!-- JavaScript Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @foreach($setting as $settings)
    <title>{{$settings->barangay_name}}</title>
    @endforeach
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{url('assets/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    
    <link rel="stylesheet" href="{{url('assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/user/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-utilities.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/select2.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/uppy.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/quill.snow.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/residents.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/profiling.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{url('assets/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('assets/css/app-light.css')}}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{url('assets/css/app-dark.css')}}" id="darkTheme">
    {{-- <script src="{{url('assets/js/jquery.min.js')}}"></script> --}}
    <script src="{{url('assets/js/masking.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/moment.min.js')}}"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{url('assets/js/simplebar.min.js')}}"></script>
    <script src='{{url('assets/js/daterangepicker.js')}}'></script>
    <script src='{{url('assets/js/jquery.stickOnScroll.js')}}'></script>
    <script src="{{url('assets/js/tinycolor-min.js')}}"></script>
    <script src="{{url('assets/js/config.js')}}"></script>
    <script src="{{url('assets/js/d3.min.js')}}"></script>
    <script src="{{url('assets/js/topojson.min.js')}}"></script>
    <script src="{{url('assets/js/datamaps.all.min.js')}}"></script>
    <script src="{{url('assets/js/datamaps-zoomto.js')}}"></script>
    <script src="{{url('assets/js/datamaps.custom.js')}}"></script>
    <script src="{{url('assets/js/Chart.min.js')}}"></script>

  </head>

  <style>
    .card{
      background-image: url("assets/img4.jpg");
  }

  .registration-form form{
      background-color: #fff;
      max-width: 1200px;
      margin: auto;
      padding: 50px 70px;
      border-radius: 30px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  }
  
  .registration-form .form-icon{
    text-align: center;
      background-color: #5891ff;
      border-radius: 50%;
      font-size: 40px;
      color: white;
      width: 100px;
      height: 100px;
      margin: auto;
      margin-bottom: 50px;
      line-height: 100px;
  }
  
  </style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
        <script>
        $(function() {
            $('#myModal').modal('show');
        });
        </script>
        @endif
        <div class="registration-form">
  <div class="card shadow">

    @if(session()->has('message'))
<div class="alert" id="alert">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}

</div>
@endif

    <div class="card-body">
      {{-- <h2 class="h4 mb-1">Register</h2> --}}
      <div class="toolbar">
      <div class="row align-items-center h-100">

          <form method="POST" enctype="multipart/form-data"  action="/register" id="image-upload-preview" class="col-lg-8 col-md-8 col-10 mx-auto"  id="modal_regitration_form">
            @csrf

            <div class="col-sm-12">
              <div class="form-group">
                  {{-- <label class="labelImage">Image</label> --}}
                  <img class="preview" id="prview" src="{{$settings->barangay_logo ? asset ('storage/' .$settings->barangay_logo) : asset('/storage/no/-image.png')}}"/>

              </div>
            </div><br>

        <div class="form-row">
          <div class="form-group col-sm-4">
            <label>First Name<span style="color: red">*</span></label>
            <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" placeholder="Enter First Name">
            @Error('first_name')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
          </div>

          <div class="form-group col-sm-4">
            <label>Middle Name<span style="color: red">*</span></label>
            <input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}" placeholder="Enter Middle Name">
            @Error('middle_name')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
          </div>

          <div class="form-group col-sm-4">
            <label>Last Name<span style="color: red">*</span></label>
            <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" placeholder="Enter Lasts Name">
            @Error('last_name')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
          </div>

       </div>

       <div class="form-row">
        <div class="form-group col-sm-4">
          <label>Nickname<span style="color: red">*</span></label>
          <input type="text" name="nickname" class="form-control" value="{{old('nickname')}}" placeholder="Enter Nickname">
          @Error('nickname')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
        </div>

        <div class="form-group col-sm-4">
          <label>Place of Birth<span style="color: red">*</span></label>
          <input type="text" name="place_of_birth" class="form-control" value="{{old('place_of_birth')}}" placeholder="Enter Place of Birth">
          @Error('place_of_birth')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
        </div>

        <div class="form-group col-sm-4">
          <label>Birthdate<span style="color: red">*</span></label>
          <input type="text" class="form-control item" name="birthdate" id="nu_datebirth"  value="{{old('birthdate')}}" placeholder="Enter Birthdate">
          @Error('birthdate')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
        </div>

     </div>

     <div class="form-row">
      <div class="form-group col-sm-4">
        <label>Age<span style="color: red">*</span></label>
        <input readonly type="text" class="form-control item" name="age" id="a_ge"  value="{{old('age')}}">
        @Error('age')
            <p class="text-danger text-md mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="form-group col-sm-4">
        <label>Civil Status<span style="color: red">*</span></label>
        <select class="form-control" name="civil_status" value="{{old('civil_status')}}" required autocomplete="voter_status">
          <option value="">-Select Civil Status-</option>
          <option value="Single" @if (old('civil_status') == "Single") {{ 'selected' }} @endif >Single</option>
          <option value="Married" @if (old('civil_status') == "Married") {{ 'selected' }} @endif>Married</option>
          <option value="Widowed" @if (old('civil_status') == "Widowed") {{ 'selected' }} @endif>Widowed</option>
          <option value="Divorced" @if (old('civil_status') == "Divorced") {{ 'selected' }} @endif>Divorced</option>
          <option value="Separated" @if (old('civil_status') == "Separated") {{ 'selected' }} @endif>Separated</option>
          <option value="Annuled" @if (old('civil_status') == "Annuled") {{ 'selected' }} @endif>Annuled</option>
          <option value="Live-In" @if (old('civil_status') == "Live-In") {{ 'selected' }} @endif>Live-In</option>
      </select>
        @Error('civil_status')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
      </div>

      <div class="form-group col-sm-4">
        <label>Gender<span style="color: red">*</span></label>
        <select class="form-control" name="gender" value="{{old('gender')}}" required autocomplete="gender">
          <option value="">-Select Gender-</option>
          <option value="Male"  @if (old('gender') == "Male") {{ 'selected' }} @endif >Male</option>
          <option value="Female"  @if (old('gender') == "Female") {{ 'selected' }} @endif>Female</option>
      </select>
      @Error('gender')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
      </div>

   </div>

   <div class="form-row">
    <div class="form-group col-sm-3">
      <label>Street<span style="color: red">*</span></label>
      <input type="text" name="street" class="form-control" value="{{old('street')}}" placeholder="Enter Street">
      @Error('street')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
    </div>

    <div class="form-group col-sm-3">
      <label>House No.<span style="color: red">*</span></label>
      <input type="text" name="house_no" class="form-control" value="{{old('house_no')}}" placeholder="Enter House Number">
      @Error('house_no')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
    </div>

    <div class="form-group col-sm-3">
      <label>Voter Status<span style="color: red">*</span></label>
      <select class="form-control" name="voter_status" value="{{old('voter_status')}}" required autocomplete="voter_status">
        <option value="">-Select Voter Status-</option>
        <option value="Voter" @if (old('voter_status') == "Voter") {{ 'selected' }} @endif>Voter</option>
        <option value="Non Voter" @if (old('voter_status') == "Non Voter") {{ 'selected' }} @endif>Non Voter</option>
    </select>
    @Error('voter_status')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
    </div>

    <div class="form-group col-sm-3">
      <label>Citizenship<span style="color: red">*</span></label>
      <input type="text" name="citizenship" class="form-control" value="{{old('citizenship')}}" placeholder="Enter Citizenship">
      @Error('citizenship')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
    </div>

   </div>
   <div class="form-row">

    <div class="form-group col-sm-4">
      <label>Contact Number<span style="color: red">*</span></label>
      <input type="text" name="phone_number" class="phone_number form-control" value="{{old('phone_number')}}" placeholder="Enter Phone Number" >
      @Error('contact_number')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
    </div>

    <div class="form-group col-sm-4">
      <label>Occupation<span style="color: red">*</span></label>
      <input type="text" id="occupation"  name="occupation" class="form-control" value="{{old('occupation')}}" placeholder="Enter Occupation">
      @Error('occupation')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror

    </div>
    <div class="form-group col-sm-4">
      <label>Work Status<span style="color: red">*</span></label>
      <select class="form-control" name="work_status" value="{{old('work_status')}}" required autocomplete="work_status" value="{{old('work_status')}}">
        <option value="">-Select Work Status-</option>
        <option value="Employed" @if (old('work_status') == "Employed") {{ 'selected' }} @endif>Employed</option>
        <option value="Unemployed" @if (old('work_status') == "Unemployed") {{ 'selected' }} @endif>Unemployed</option>
        <option value="Self-Employed" @if (old('work_status') == "Self-Employed") {{ 'selected' }} @endif>Self Employed</option>
     </select>
      @Error('occupation')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror

    </div>
   </div>
    <div class="form-row">
      <div class="form-group col-sm-6">
        <label>Email Address</label>
        <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email">
        @Error('email')
              <p class="text-danger text-md mt-1">{{$message}}</p>
             @enderror
      </div>
    <div class="form-group col-sm-6">
      <label>Username<span style="color: red">*</span></label>
      <input type="text" type="text"  name="username" class="form-control" value="{{old('username')}}" placeholder="Enter Username">
      @Error('username')
            <p class="text-danger text-md mt-1">{{$message}}</p>
           @enderror
    </div>

    <input type="hidden"  name="userType" value="1">
    <input type="hidden"  name="status" value="1">

   </div>

   <div class="form-row">
        <div class="form-group col-sm-6">
          <label>Password<span style="color: red">*</span></label>
          <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}" required autocomplete="password" placeholder="Enter Password">
       @Error('password')
       <p class="text-danger text-md mt-1">{{$message}}</p>
    @enderror
        </div>

      <div class="form-group col-sm-6">
        <label>Confirm Password<span style="color: red">*</span></label>
        <input type="password" class="form-control item" name="password_confirmation" id="password" placeholder="Retype Password">
        @Error('password_confirmation')
     <p class="text-danger text-md mt-1">{{$message}}</p>
  @enderror
      </div>

      <input type="hidden"  name="userType" value="1">
      <input type="hidden"  name="status" value="0">

 </div>
 <br>
 {{-- <input type="checkbox" id="terms_and_conditions" value="1" />
 <label for="terms_and_conditions">Privacy Policy<span style="color: red">*</span></label>   --}}
   
  {{-- <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
  </a>
  <ul class="collapse list-unstyled pl-4 w-100" id="profile">
    <li class="nav-item">
      <a class="nav-link pl-3" href="/listVaccinated"><span class="ml-1 item-text">Vaccination</span></a>
    </li>
  </ul> --}}


 <div>
  <input type="checkbox" id="terms_and_conditions" value="1" />
  <label for="terms_and_conditions">Privacy Policy<span style="color: red">*</span></label>     
  <p class="text-justify"> &ensp; &ensp; &ensp;By using any of our services, visiting our website https://capstoneproject2.com or giving us your personal information, you agree to your information being collected, stored, used and disclosed as set out in this Privacy Policy.
    We are committed to protecting your personal information, and ensuring its privacy, accuracy and security. We will handle your personal information in a responsible manner in accordance with the Data Privacy Act of 2012 (RA No. 10173).
  </p>
</div>
<div>
  {{-- <button type="submit" id="submit_button" disabled>Sign Up</button> --}}
  <br>
</div>
        <div class="col-sm-12" style="padding-left:100px; padding-right:100px; " >
            <button type="button" class="btn  btn-primary btn-block"  id="submit_button" disabled data-toggle="modal" data-target="#myModal"> Register</button>
        </div>
          {{-- <button href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#submit">Accept</button> --}}
<p class="mt-2 mb-3 text-center">Already have an account? <a href="/login">Sign Up</p></a>
<a href="/" class="float-right" style="text-decoration:none"><h5><i class="fas fa-arrow-circle-left " ></i>Back</a></h5>
          
              {{----------------------Modal Verificaton---------------------------------------}}
                          <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">To Complete Your Registration Please Upload An Image</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <div class="row mb-4">
                                          <div class="col-md-6">
{{-- 
                                            <div class="form-group">
                                              <label >Profile Image</label><br>
                                              <img id="prviewww"style="width: 150px; height:80px" />
                                              <input type="file" name="resident_image" id="resident_image">
                                              @Error('resident_image')
                                              <p class="text-danger text-md mt-1">{{$message}}</p>
                                             @enderror
                                            </div> --}}

                                            <div class="form-group">
                                              <div class="profile-img">
                                                <img src="/storage/no/-image.png" id="prviewww" class="img-fluid" style="width:180px; height:150px;"/>
                                                  <div class="file btn btn-lg btn-primary">Profile Image
                                                    <input type="file" name="resident_image" id="resident_image" />
                                                  </div>
                                              </div>
                                                  @Error('id_image')
                                                  <p class="text-danger text-md mt-1">{{$message}}</p>
                                                  @enderror
                                            </div>

                                            <div class="form-group">
                                            <div class="profile-img">
                                              <img src="/storage/no/id_img.jpg" id="prvieww" class="img-fluid" style="width:180px; height:150px;"/>
                                                <div class="file btn btn-lg btn-primary">Valid ID Image
                                                  <input type="file" name="id_image" id="id_image" />
                                                </div>
                                            </div>
                                                @Error('id_image')
                                                <p class="text-danger text-md mt-1">{{$message}}</p>
                                                @enderror
                                          </div>

                                          </div>
                                          <div class="col-md-6">
                                            <br>
                                            <p class="mb-1">Reminders!</p>
                                            <p class="medium text-muted mb-2"> To verify that you are in truly a resident of the barangay, you must upload a picture of your profile picture and a valid ID. </p>
                                            <p class="medium text-muted mb-2"> NOTE: </p>
                                            <ul class="medium text-muted pl-4 mb-0">
                                              <li>Your ID's image must be readable and clear to be accepted. </li>
                                              <li>Upon registration, the barangay official will verify your profile to determine whether you are in really a resident of the barangay.</li>
                                              <li>You will receive a text message letting you know that you have been approved and can log in to the system if the barangay official confirms that you are a resident of the barangay.</li>
                                            </ul>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <button type="submit" class="btn btn-primary btn-sm submit">Save</button></a>
                                        </div>
                                  </div>
                                 
                                </div>
                            </div>
                      </div>
        </form>
      </div>
  </div>
  </div>
  </div>
</div>
  {{-- <?php
    $pass  = Auth::user()->getAuthPassword();
    ?>
<script>
  var timer;
  var timeout = 1000;

  $('#verify').keyup(function(){
    if (timer) {
      clearTimeout(timer);
    }
    timer = setTimeout(saveData, timeout)
  });

  function saveData() {

    var verify = $('#verify').val();
    var encrypt = "<?php echo bcrypt(verify)?>";
    var haha1 = "<?php echo $pass;?>";
    alert(encrypt);
  }
</script> --}}
  {{-- <script>
      $(document).ready(function () {
         $(document).on('click', '.submit', function (e) {
           e.preventDefault();
           var data = {
              'verify': $('.verify').val(),
              }

              // console.log(data);
              $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                  type: "POST",
                  url: "/residents",
                  data: data,
                  dataType: "json",
                  success: function (response) {
                  console.log(response);
                  }
                  });
         });
      });
    </script> --}}

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

            <script>
             $(function() {
                $("#nu_datebirth").datepicker({
                onSelect: function(value, ui) {
                    var today = new Date(),
                        age = today.getFullYear() - ui.selectedYear;
                    $('#a_ge').val(age);
                },

                dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                });

            });
              </script>

            <script>
              resident_image.onchange = evt => {
                const [file] = resident_image.files
                if (file) {
                  prviewww.style.visibility = 'visible';

                  prviewww.src = URL.createObjectURL(file)
                }
              }
            </script>

            <script>
              id_image.onchange = evt => {
                const [file] = id_image.files
                if (file) {
                  prvieww.style.visibility = 'visible';

                  prvieww.src = URL.createObjectURL(file)
                }
              }
            </script>

<script>
  $(document).ready(function(){
      $('.phone_number').inputmask('99999999999');
  });
</script>

<script>
//Add a JQuery click event handler onto our checkbox.
$('#terms_and_conditions').click(function(){
    //If the checkbox is checked.
    if($(this).is(':checked')){
        //Enable the submit button.
        $('#submit_button').attr("disabled", false);
    } else{
        //If it is not checked, disable the button.
        $('#submit_button').attr("disabled", true);
    }
});

</script>