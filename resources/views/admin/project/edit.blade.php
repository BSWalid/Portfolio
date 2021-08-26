<x-app-layout>
    @section('content')

    <div class="page-head">
        <h4 class="mt-2 mb-2">Update Project</h4>
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
        <h5 class="header-title pb-3">Project Detail</h5>
        <div class="general-label">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="Post" action="{{route('project.update',$project->id)}}">
                 @csrf
                 @method('PATCH')
                <div class="form-group row">
                    <label class="col-md-2 control-label">Project Title</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{$project->title}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 control-label">Is active</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="isactive">
                            <option value="1" {{ $project->isactive ? "selected" : "" }}>active</option>
                            <option value="0" {{ $project->isactive ? "" : "selected" }}>inactive</option>

                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 control-label">Is active</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="service">
                            @foreach ($services as $service )
                                <option value="{{$service->id}}" {{ $project->service->id==$service->id ? "selected": "" }}>{{$service->title}}</option>
                            @endforeach

                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Is active</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="contribution">
                            @foreach (['created', 'participated'] as $contribution )
                                <option value="{{$contribution}}" {{ $project->contribution==$contribution ? "selected": "" }} >{{$contribution}}</option>
                            @endforeach

                        </select>

                    </div>
                </div>




                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email">Project Description </label>
                    <div class="col-md-10">
                        <textarea class="ckeditor form-control" name="description">{{$project->description}}</textarea>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 control-label" for="example-email"> </label>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Update Project</button>

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
