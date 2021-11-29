@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">

            <h5  class="my-1 float-left">Create New Member</h5>

            <div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('members.member.index') }}" class="btn btn-primary" title="Show All Member">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Member
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('members.member.store') }}" accept-charset="UTF-8" id="create_member_form" name="create_member_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('members.form', [
                                        'member' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


