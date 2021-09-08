<x-app-layout>
    @section('css')
            <link href="{{asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">

        @endsection

    @section('content')

    <div class="page-head">
        <h4 class="mt-2 mb-2">Create a new Service</h4>
    </div>


      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                 {{$error}}

                @endforeach
            </ul>
        </div>


   @endif
    <div class="card-body">
        <h5 class="header-title pb-3">Service Detail</h5>
        <div class="general-label">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="Post" action=" {{route('service.update',$service->id)}} ">
                 @csrf
                 @method('PATCH')
                <div class="form-group row">
                    <label class="col-md-2 control-label">Service Title</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{$service->title}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 control-label">Is active</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="isactive">
                            <option value="1" {{ $service->isactive ? "selected" : "" }}>active</option>
                            <option value="0" {{ $service->isactive ? "" : "selected" }}>inactive</option>

                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 control-label">Image</label>

                    <div class="col-sm-10">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h5 class="header-title">File Upload 1</h5>
                                <label for="input-file-now">Your so fresh input file — Default version</label>
                                <div class="dropify-wrapper">
                                    <div class="dropify-message">
                                        <span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                        <div class="dropify-loader"></div><div class="dropify-errors-container">
                                            <ul></ul></div>
                                            <input type="file" id="input-file-now" class="dropify" name="icon">
                                            <button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Image</label>

                    <div class="col-sm-10">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <img height="500px" width="500px" src="{{asset("$service->icon")}}" alt="">
                                <input type="hidden" name="old_image" value="{{$service->icon}}">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email"> Service Description </label>
                    <div class="col-md-10">
                        <textarea class="ckeditor form-control" name="description">{{$service->description}}</textarea>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email"> </label>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Update Servie</button>

                    </div>
                </div>


            </form>
        </div>
    </div>


    @endsection

    @section('scripts')

    <script src="{{asset('plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

          // Basic
          $('.dropify').dropify();

          // Translated


          // Used events
          var drEvent = $('#input-file-events').dropify();

          drEvent.on('dropify.beforeClear', function(event, element){
              return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
          });

          drEvent.on('dropify.afterClear', function(event, element){
              alert('File deleted');
          });

          drEvent.on('dropify.errors', function(event, element){
              console.log('Has Errors');
          });

          var drDestroy = $('#input-file-to-destroy').dropify();
          drDestroy = drDestroy.data('dropify')
          $('#toggleDropify').on('click', function(e){
              e.preventDefault();
              if (drDestroy.isDropified()) {
                  drDestroy.destroy();
              } else {
                  drDestroy.init();
              }
          });

          $('.ckeditor').ckeditor();

      });

    </script>


    @endsection
    </x-app-layout>
