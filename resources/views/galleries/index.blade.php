@extends('layouts.admin')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="card">

        <div class="card-header">

            <h5 class="my-1 float-left">Galleries</h5>

            <div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('galleries.gallery.create') }}" class="btn btn-success" title="Create New Gallery">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Gallery
                </a>
            </div>

        </div>

        @if(count($galleries) == 0)
            <div class="card-body text-center">
                <h4>No Galleries Available.</h4>
            </div>
        @else
            <div class="card-body">

                <div class="row">

                    @foreach($galleries as $gallery)

                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('storage/'.$gallery->photo) }}" alt="" width="100" class="m-2 p-2">
                                <form method="POST" action="{!! route('galleries.gallery.destroy', $gallery->id) !!}"
                                      accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm  " role="group">
                                        <a href="{{ route('galleries.gallery.show', $gallery->id ) }}" title="Show Gallery">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('galleries.gallery.edit', $gallery->id ) }}" class="mx-4"
                                           title="Edit Gallery">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"
                                                title="Delete Gallery"
                                                onclick="return confirm(&quot;Click Ok to delete Gallery.&quot;)">
                                            <i class=" fas  fa-trash text-danger" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    @endforeach


                </div>
            </div>

            <div class="card-footer">
                {!! $galleries->render() !!}
            </div>

        @endif

    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('table').DataTable({
                responsive: true,
                "order": [],
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]

            });
        });
    </script>

    <style>
        .dataTables_filter {
            float: right;
        }

        i:hover {
            color: #0248fa !important;
        }

    </style>


@endsection


