<x-app-layout>
@section('content')

<div class="page-head">
    <h4 class="mt-2 mb-2">Create a new Link</h4>
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
        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{route('links.store')}}">
             @csrf
            <div class="form-group row">
                <label class="col-md-2 control-label">Link Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 control-label">Icon</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="icon" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 control-label">Url</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="url" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 control-label" for="example-email"> </label>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">Create Link</button>

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