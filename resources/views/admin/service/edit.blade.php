<x-app-layout>
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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
           $('.ckeditor').ckeditor();
        });
    </script>
    @endsection
    </x-app-layout>
