<x-app-layout>
    @section('content')

    <div class="page-head">
        <h4 class="mt-2 mb-2">PersonalInfo</h4>
    </div>


      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                 {{ $error }}

                @endforeach
            </ul>
        </div>


    @endif
    <div class="card-body">
        <h5 class="header-title pb-3">Personal info</h5>
        <div class="general-label">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="Post" action="{{route('personalinfo.update',$personalinfo->id)}}">
                 @csrf
                 @method('PATCH')
                <div class="form-group row">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{$personalinfo->name}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">Short Bio</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="short_bio" value="{{$personalinfo->short_bio}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email">about_me</label>
                    <div class="col-md-10">
                        <textarea class="ckeditor form-control" name="about_me">{{$personalinfo->about_me}}</textarea>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email"> </label>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Update</button>

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
