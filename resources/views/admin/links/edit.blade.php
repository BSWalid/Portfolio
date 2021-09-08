<x-app-layout>
    @section('css')
        <link rel="stylesheet" href="{{asset('css/plugins/icon-picker/fontawesome-iconpicker.css')}}">
    @endsection
    @section('content')

    <div class="page-head">
        <h4 class="mt-2 mb-2">Create a new Project</h4>
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
        <h5 class="header-title pb-3">Links Detail</h5>
        <div class="general-label">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{route('links.update',$link->id)}}">
                 @csrf
                 @method('PATCH')
                <div class="form-group row">
                    <label class="col-md-2 control-label">Link Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{$link->name}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">Icon</label>
                    <div class="col-md-10">

                            <div class="input-group iconpicker-container">
                                <input data-placement="bottomRight" class="form-control icp icp-auto iconpicker-element iconpicker-input" value="{{$link->icon}}" type="text" name="icon">

                                <span class="input-group-addon"><i class="fas fa-ad"></i></span>

                            </div>

                    </div>


                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">Url</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="url" value="{{$link->url}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email"> </label>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Update Link</button>

                    </div>
                </div>


            </form>
        </div>
    </div>


    @endsection


    @section('scripts')

    <script src="{{asset('js/plugins/icon-picker/fontawesome-iconpicker.js')}}"></script>
    <script type="text/javascript">

            $('.icp-auto').iconpicker({
                placement:'inline',
            });


    </script>

    @endsection
    </x-app-layout>
