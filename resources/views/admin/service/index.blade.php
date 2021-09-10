<x-app-layout>
    @section('content')

        <div class="page-head">
            <h4 class="mt-2 mb-2">Service</h4>
        </div>
        <div class="data-table">
            <div class="row">

                <div class="col-lg-12 col-sm-12">

                    <div class="card m-b-30">
                        <div class="card-body table-responsive">
                            <h5 class="header-title">Current Services </h5>
                            <a href="{{route('service.create')}}">
                                <button type="button" class="btn btn-success">
                                    <i style="margin-right:3px" class="fas fa-plus"></i>
                                    Add new Service
                                </button>
                            </a>


                        </div>
                        <div class="row"><div class="col-sm-12">
                            <table id="datatable" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 243.797px;">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 385px;">Icon</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 385px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 385px;">Actions</th>
                                    </thead>

                                    <tbody>

                                        @foreach ($services as $key=>$service)

                                        <tr role="row" class="{{ $key % 2 == 0 ? 'odd' : 'even' }}">
                                            <td class="sorting_1">{{$service->title}}</td>
                                            <td><img width="70px" height="70px" src="{{asset("$service->icon")}}"><img></td>
                                            <td>{{ $service->isactive }}</td>
                                            <td style="white-space: nowrap; width: 15%;">

                                                <a href="{{route('service.edit',$service->id)}}"><button type="button" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                    </svg>
                                                    Edit
                                                  </button>
                                                </a>

                                                <form style="display:inline;" action="{{route('service.destroy',$service->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')


                                                <button type="submit" class="btn btn-outline-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                                    </svg>
                                                    Delete
                                                </button>


                                                </form>





                                            </td>

                                        </tr>


                                        @endforeach

                                   </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">

                                {!! $services->links() !!}

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

        </div>

    @endsection

    @section('scripts')
    <script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables.responsive.min.js')}}"></script>
        <script>

       $().DataTable();

        </script>

    @endsection

</x-app-layout>
