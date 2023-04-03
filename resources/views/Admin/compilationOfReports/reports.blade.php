@extends('layout.dashboard-layout')
@section('content')
<style>
  .drop-container {
    position: relative;
    display: flex;
    gap: 10px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 200px;
    padding: 20px;
    border-radius: 10px;
    border: 2px dashed #555;
    color: #444;
    cursor: pointer;
    transition: background .2s ease-in-out, border .2s ease-in-out;
  }

  .drop-container:hover {
    background: #eee;
    border-color: #111;
  }

  .drop-container:hover .drop-title {
    color: #222;
  }

  .drop-title {
    color: #444;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    transition: color .2s ease-in-out;
  }

  input[type=file]::file-selector-button {
    margin-right: 20px;
    border: none;
    background: #084cdf;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease-in-out;
  }

  input[type=file]::file-selector-button:hover {
    background: #03399e;
  }
.btn-green{
    background-color: #07f326;
}
  .btns {
    border: none;
    color: rgb(255, 255, 255);
    padding: 4px;
    cursor: pointer;
    width: 38px;
    border-radius: 7px;
  }
  /* Darker background on mouse-over */
  .btn:hover {
    background-color: RoyalBlue;
  }
</style>
{{-- @include('layouts.partials.messages') --}}

<div class="row">
  <!-- Small table -->
  <div class="col-md-12 my-4">
    <div class="btn-group form-group">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-folder"></i> Records
        </button>
            <div class="dropdown-menu">
                <a class="nav-link pl-3" href="../reports/accomplishment"><span class="ml-1 item-text">Accomplishment</span></a>
                <a class="nav-link pl-3" href="../reports/financial"><span class="ml-1 item-text">Financial</span></a>
                <a class="nav-link pl-3" href="../reports/blotter"><span class="ml-1 item-text">Blotter</span></a>
            </div>
    </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="#createDocument" data-toggle="modal">
             <i class="far fa-plus"></i> New Document
            </a>
        </div>
    {{-- <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa print"></i></a> --}}
    <div class="card shadow">
      <div class="card-body">
        <div class="row-auto pb-4">
            <h2 class="h4 mt-2 ml-2 pb-2 pt-2" style="text-align: center;border-top:3px solid #616161; border-bottom: 3px solid #616161;">{{ strtoupper($category) }} RECORDS</h2>
         </div>
        <div class="row">
            <div class="col-auto">
                <form action="{{url('/reports/store/'. $category)}}" method="post" class="form-inline" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="mb-2" accept=".doc,.docx,.csv,.xlsx,.xls,.txt,.pdf" style="width:480px;" required>&nbsp;
                    <button class="btn btn-primary mb-2" type="submit">Upload</button>
                  </form>
            </div>
            <div class="col-auto" style="padding: 10px 0 10px 0;">
                <div class="col">
                <form class="form">
                    <div class="form-group">
                      <label for="show" class="sr-only">Show</label>
                      <select class="form-control" id="show" name="show">
                        <option value="no" {{ Request::get('show') == 'no' ? 'selected' : '' }}>Show Active</option>
                        <option value="yes" {{ Request::get('show') == 'yes' ? 'selected' : '' }}>Archive</option>
                      </select>
                    </div>
                </div>
                  </form>
                  <script>
                    $(document).ready(function() {
                      $('#show').change(function() {
                        var show = $(this).val();
                        window.location.href = "{{url('/reports/'. $category)}}?show=" + show;
                      });
                    });
                  </script>
            </div>
            <div class="col-auto" style="padding: 10px 0 10px 0; border-radius:none !important;">
            <form class="form">
                <div class="input-group">
                  <div class="form-outline">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" value="{{\Request::get('search')}}" class="form-control mb-1" id="search" name="search" value="" placeholder="Search for Filename">
                  </div>
                  <div class="input-group-append">
                  <button type="submit" class="btn btn-primary mb-1"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            </form>
        </div>
        </div>
        <br />

        <table class="table table-border table-hover">
          <thead style="background-color: #8d8d8d88; color:#eee !important;">
            <tr>
              {{-- <th scope="col">#</th> --}}
              <th scope="col" style="font-weight: bold">NO.</th>
              <th scope="col" style="font-weight: bold">FILENAME</th>
              <th scope="col" style="font-weight: bold">DATE UPLOADED</th>
              {{-- <th scope="col">Type</th> --}}
              <th scope="col" style="font-weight: bold">ACTION</th>
            </tr>
          </thead>
          <tbody>
          @foreach($files as $file)
            <tr>
              <th scope="row">{{$loop->iteration }}</th>
              <td width="40%">{{ $file->name }}</td>
              <td width="30%">{{ Carbon\Carbon::parse($file->created_at)->format('F d, Y (l)') }}</td>
              <td width="30%">
                @if($file->size)
                <a href="{{url('file/'.$file->name)}}">
                  <button class="btns btn-info" data-toggle="tooltip" data-placement="left" title="View">
                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                  </button>
                </a>
                @endif
                @if(!$file->size)
                <a href="{{route('print-document')}}?id={{$file->id}}" target="_blank">
                  <button class="btns btn-info" data-toggle="tooltip" data-placement="left" title="View">
                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                  </button>
                </a>
                @endif
                @if(!$file->deleted_at)
                <a href="#deleteFile{{$file->id}}" data-toggle="modal">
									<button class="btns btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hide">
										<i class="fa fa-eye-slash" style="font-size: 20px;"></i>
									</button>
								</a>
                @endif
                @if(isset($file->size))
                <a href="{{url('file/'.$file->name)}}" download>
									<button class="btns btn-green" data-toggle="tooltip" data-placement="bottom" title="download">
										<i class="fa fa-download" style="font-size: 20px;"></i>
									</button>
								</a>
                @else
                <a href="{{route('print-document')}}?id={{$file->id}}" target="_blank">
									<button class="btns btn-green" data-toggle="tooltip" data-placement="bottom" title="download">
										<i class="fa fa-download" style="font-size: 20px;"></i>
                  </button>
								</a>
                @endif
                {{-- @if(Request::get('show') == 'yes' ? 'selected' : '' )
                <a class="print" href="" target="_blank"><button class="btns btn-warning" data-toggle="tooltip" data-placement="right" title="Restore"><i class="fa fa-upload" style="font-size: 20px;"></i></button></a>
                @endif --}}
            </td>
            </tr>

            <!---------------------------------------- Delete Residents Modal HTML -------------------------------------->
            <div id="deleteFile{{$file->id}}" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form>
                    <div class="modal-header">
                      <h4 class="modal-title">Hide File</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to hide this file?</p>
                      <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="footer" style="text-align: right;">

                      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                      {{-- <input type="submit" href="{{url('deleteResidents', $residents->id)}}" class="btn btn-danger" value="Delete"> --}}
                      <a class="btn btn-danger" href="{{url('deleteFile',$file->id)}}">Hide</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>

@endforeach
{{-- --------------------------------------------Add Document----------------------------------------- --}}


          </tbody>
        </table>
        {{-- <div class="clearfix">
            {{$file->links()}}
        </div> --}}
        {{-- --}}
      </div>
    </div>
  </div>
</div>

<div id="createDocument" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

              <form action="{{route('all-functions',['id'=>'add-document'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <div class="modal-header">
                        <h4 class="modal-title">Add Document</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                      <input name="category" value="{{$category}}" type="hidden"/>
                <div class="row register-form">
                    <div class="col-sm-12">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="" required autocomplete="title">

                                @Error('title')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror

                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row register-form">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="modal-body">
                                    <p><label for="content">Content</label></p>
                                    <textarea  id="dis_summernote"  class="form-control" name="content" rows="5" cols="50"> </textarea>
                            </div>

                            @Error('content')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>

                </form>
            </div>
    </div>
</div>
 {{-- --------------------------------------------------Edit Document--------------------------------------------------- --}}
 <div id="createDocument2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

          <form action="{{route('all-functions',['id'=>'add-document'])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="modal-header">
                    <h4 class="modal-title">Edit Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                  <input name="category" value="{{$category}}" type="hidden"/>
            <div class="row register-form">
                <div class="col-sm-12">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="" required autocomplete="title">

                            @Error('title')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>
                    </div>
                </div>
            </div>

                <div class="row register-form">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="modal-body">
                                <p><label for="content">Content</label></p>
                                <textarea  id="dis_summernote"  class="form-control" name="content" rows="5" cols="50"></textarea>
                        </div>

                        @Error('content')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>

            </form>
        </div>
</div>
</div>


@endsection
@section('script')
<script>
  $(document).ready(function(index){
    // $('#dis_summernote').summernote();
    $('#dis_summernote').summernote({
      height: 400,   //set editable area's height
    });
  });
</script>
@endsection
