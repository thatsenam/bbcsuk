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

            <h5 class="my-1 float-left">Members</h5>

            <div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('members.member.create') }}" class="btn btn-success" title="Create New Member">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Member
                </a>
            </div>

        </div>

        @if(count($members) == 0)
            <div class="card-body text-center">
                <h4>No Members Available.</h4>
            </div>
        @else
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Applicant Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                            <th>Email</th>

                            <th>Status</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{ $member->applicant_name }}</td>
                                <td>{{ $member->age }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->mobile_number }}</td>
                                <td>{{ $member->email }}</td>

                                <td>

                                    @if($member->status=='Approved')
                                        <span class="badge badge-primary">{{ $member->status }}</span>
                                    @elseif($member->status == 'Rejected')
                                        <span class="badge badge-danger">{{ $member->status }}</span>
                                    @else
                                        <span class="badge badge-secondary">{{ $member->status }}</span>
                                    @endif


                                </td>

                                <td>

                                    <form method="POST" action="{!! route('members.member.destroy', $member->id) !!}"
                                          accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-sm float-right " role="group">
                                            <a href="{{ route('members.member.show', $member->id ) }}"
                                               title="Show Member">
                                                <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('members.member.edit', $member->id ) }}" class="mx-4"
                                               title="Edit Member">
                                                <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                            </a>

                                            <button type="submit" style="border: none;background: transparent"
                                                    title="Delete Member"
                                                    onclick="return confirm(&quot;Click Ok to delete Member.&quot;)">
                                                <i class=" fas  fa-trash text-danger" aria-hidden="true"></i>
                                            </button>
                                        </div>

                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="card-footer">
                {!! $members->render() !!}
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


