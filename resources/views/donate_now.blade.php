@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Book your Seat</span>
                        <h1 class="text-capitalize mb-5 text-lg">Register Now & Donate</h1>
                        @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
                                {!! session('success_message') !!}

                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appoinment section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-support text-lg"></i>
                        </div>
                        <span class="h3">Call for an Emergency Service!</span>
                        <h3 class="text-color mt-3">+44 7780 262130</h3>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                        <h2 class="mb-2 title-color">Fill the application form</h2>

                        <form id="#" class="appoinment-form" method="post" action="{{ route('members.member.store') }}">
                            <div class="">
                                <input type="hidden" value="1" name="front_end" >
                                @csrf
                                <div class="row">
                                    @php($member=null)

                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="applicant_name">Applicant Name</label>
                                            <span class="text-danger font-bolder">*</span>
                                            <input class="form-control" name="applicant_name" type="text"
                                                   id="applicant_name" required>

                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <span class="text-danger font-bolder">*</span>
                                            <input class="form-control " name="age" type="number" id="age" required>


                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <span class="text-danger font-bolder">*</span>
                                            <input class="form-control" name="address" type="text" id="address"
                                                   required>


                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mobile_number">Mobile Number</label>
                                            <span class="text-danger font-bolder">*</span>
                                            <input class="form-control" name="mobile_number" type="text" required
                                                   id="mobile_number">


                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <span class="text-danger font-bolder">*</span>
                                            <input class="form-control" name="email" type="email" id="email" required>
                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="spouse_name">Spouse Name</label>
                                            <input class="form-control" name="spouse_name" type="text" id="spouse_name">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="spouse_age">Spouse Age</label>
                                            <input class="form-control " name="spouse_age" type="number"
                                                   id="spouse_age">

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="spouse_email">Spouse Email</label>
                                            <input class="form-control " name="spouse_email" type="email"
                                                   id="spouse_email">
                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="children_1_name">Children 1 Name</label>
                                            <input class="form-control" name="children_1_name" type="text"
                                                   id="children_1_name">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="children_1_age">Children 1 Age</label>
                                            <input class="form-control  " name="children_1_age" type="number"
                                                   id="children_1_age">

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="children_1_mobile">Children 1 Mobile</label>
                                            <input
                                                class="form-control " name="children_1_mobile" type="text"
                                                id="children_1_mobile">


                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="children_1_email">Children 1 Email</label>
                                            <input class="form-control"
                                                   name="children_1_email" type="email" id="children_1_email">

                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="children_2_name">Children 2 Name</label>
                                            <input class="form-control" name="children_2_name" type="text"
                                                   id="children_2_name">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="children_2_age">Children 2 Age</label>
                                            <input class="form-control" name="children_2_age" type="number"
                                                   id="children_2_age">

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="children_2_mobile">Children 2 Mobile</label>

                                            <input class="form-control" name="children_2_mobile" type="text"
                                                   id="children_2_mobile">


                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="children_2_email">Children 2 Email</label>

                                            <input class="form-control " name="children_2_email" type="email"
                                                   id="children_2_email">

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="reference_name">Reference Name (BBCS,UK member recommendation
                                                person name)</label>
                                            <input class="form-control" name="reference_name" type="text"
                                                   id="reference_name">


                                        </div>
                                    </div>
                                    <div class="col-12 d-none">
                                        <div class="form-group">
                                            <label for="reference_name">Status</label>

                                            <select name="status" id="status" class="form-control">
                                                <option value="Pending">Pending</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Rejected">Rejected</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <pre class="font-weight-bolder">
Membership fee: £50.00
Accounts name: BBCS
Bank: Royal Bank of Scotland
Sort Code: 83-04-25
Account No: 19257014
                                        </pre>
                                    </div>

                                </div>

                            </div>


                            <button class="btn btn-main btn-round-full" type="submit">Confirm Registration <i
                                    class="icofont-simple-right ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
