@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">

        <h5  class="my-1 float-left">{{ isset($title) ? $title : 'Member' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('members.member.destroy', $member->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('members.member.index') }}" class="btn btn-primary mr-2" title="Show All Member">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Member
                    </a>

                    <a href="{{ route('members.member.create') }}" class="btn btn-success mr-2" title="Create New Member">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Member
                    </a>

                    <a href="{{ route('members.member.edit', $member->id ) }}" class="btn btn-primary mr-2" title="Edit Member">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Member
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Member" onclick="return confirm(&quot;Click Ok to delete Member.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Member
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Applicant Name</dt>
            <dd>{{ $member->applicant_name }}</dd>
            <dt>Age</dt>
            <dd>{{ $member->age }}</dd>
            <dt>Address</dt>
            <dd>{{ $member->address }}</dd>
            <dt>Mobile Number</dt>
            <dd>{{ $member->mobile_number }}</dd>
            <dt>Email</dt>
            <dd>{{ $member->email }}</dd>
            <dt>Spouse Name</dt>
            <dd>{{ $member->spouse_name }}</dd>
            <dt>Spouse Age</dt>
            <dd>{{ $member->spouse_age }}</dd>
            <dt>Spouse Email</dt>
            <dd>{{ $member->spouse_email }}</dd>
            <dt>Children 1 Name</dt>
            <dd>{{ $member->children_1_name }}</dd>
            <dt>Children 1 Age</dt>
            <dd>{{ $member->children_1_age }}</dd>
            <dt>Children 1 Mobile</dt>
            <dd>{{ $member->children_1_mobile }}</dd>
            <dt>Children 1 Email</dt>
            <dd>{{ $member->children_1_email }}</dd>
            <dt>Children 2 Name</dt>
            <dd>{{ $member->children_2_name }}</dd>
            <dt>Children 2 Age</dt>
            <dd>{{ $member->children_2_age }}</dd>
            <dt>Children 2 Mobile</dt>
            <dd>{{ $member->children_2_mobile }}</dd>
            <dt>Children 2 Email</dt>
            <dd>{{ $member->children_2_email }}</dd>
            <dt>Reference Name</dt>
            <dd>{{ $member->reference_name }}</dd>

        </dl>

    </div>
</div>

@endsection
