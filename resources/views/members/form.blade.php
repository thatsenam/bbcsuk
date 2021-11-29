<div class="mx-auto" style="width: 70%">


    <div class="form-group">
        <div class="col-md-10">
            <label for="applicant_name">Applicant Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('applicant_name') ? 'is-invalid' : '' }}" name="applicant_name"
                   type="text" id="applicant_name"
                   value="{{ old('applicant_name', optional($member)->applicant_name) }}" minlength="1"
                   data=" required=" true"" placeholder="Enter applicant name here...">

            {!! $errors->first('applicant_name', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="age">Age</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" type="number" id="age"
                   value="{{ old('age', optional($member)->age) }}" data="" placeholder="Enter age here...">

            {!! $errors->first('age', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="address">Address</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" type="text"
                   id="address" value="{{ old('address', optional($member)->address) }}" minlength="1" data=""
                   placeholder="Enter address here...">

            {!! $errors->first('address', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="mobile_number">Mobile Number</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('mobile_number') ? 'is-invalid' : '' }}" name="mobile_number"
                   type="text" id="mobile_number" value="{{ old('mobile_number', optional($member)->mobile_number) }}"
                   data=" required=" true"" placeholder="Enter mobile number here...">

            {!! $errors->first('mobile_number', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="email">Email</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email"
                   id="email" value="{{ old('email', optional($member)->email) }}" data=" required=" true""
            placeholder="Enter email here...">

            {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="spouse_name">Spouse Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('spouse_name') ? 'is-invalid' : '' }}" name="spouse_name"
                   type="text" id="spouse_name" value="{{ old('spouse_name', optional($member)->spouse_name) }}"
                   minlength="1" data="" placeholder="Enter spouse name here...">

            {!! $errors->first('spouse_name', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="spouse_age">Spouse Age</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('spouse_age') ? 'is-invalid' : '' }}" name="spouse_age"
                   type="number" id="spouse_age" value="{{ old('spouse_age', optional($member)->spouse_age) }}" data=""
                   placeholder="Enter spouse age here...">

            {!! $errors->first('spouse_age', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="spouse_email">Spouse Email</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('spouse_email') ? 'is-invalid' : '' }}" name="spouse_email"
                   type="email" id="spouse_email" value="{{ old('spouse_email', optional($member)->spouse_email) }}"
                   data="" placeholder="Enter spouse email here...">

            {!! $errors->first('spouse_email', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_1_name">Children 1 Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_1_name') ? 'is-invalid' : '' }}"
                   name="children_1_name" type="text" id="children_1_name"
                   value="{{ old('children_1_name', optional($member)->children_1_name) }}" minlength="1" data=""
                   placeholder="Enter children 1 name here...">

            {!! $errors->first('children_1_name', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_1_age">Children 1 Age</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_1_age') ? 'is-invalid' : '' }}" name="children_1_age"
                   type="number" id="children_1_age"
                   value="{{ old('children_1_age', optional($member)->children_1_age) }}" data=""
                   placeholder="Enter children 1 age here...">

            {!! $errors->first('children_1_age', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_1_mobile">Children 1 Mobile</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_1_mobile') ? 'is-invalid' : '' }}"
                   name="children_1_mobile" type="text" id="children_1_mobile"
                   value="{{ old('children_1_mobile', optional($member)->children_1_mobile) }}" minlength="1" data=""
                   placeholder="Enter children 1 mobile here...">

            {!! $errors->first('children_1_mobile', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_1_email">Children 1 Email</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_1_email') ? 'is-invalid' : '' }}"
                   name="children_1_email" type="email" id="children_1_email"
                   value="{{ old('children_1_email', optional($member)->children_1_email) }}" data=""
                   placeholder="Enter children 1 email here...">

            {!! $errors->first('children_1_email', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_2_name">Children 2 Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_2_name') ? 'is-invalid' : '' }}"
                   name="children_2_name" type="text" id="children_2_name"
                   value="{{ old('children_2_name', optional($member)->children_2_name) }}" minlength="1" data=""
                   placeholder="Enter children 2 name here...">

            {!! $errors->first('children_2_name', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_2_age">Children 2 Age</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_2_age') ? 'is-invalid' : '' }}" name="children_2_age"
                   type="number" id="children_2_age"
                   value="{{ old('children_2_age', optional($member)->children_2_age) }}" data=""
                   placeholder="Enter children 2 age here...">

            {!! $errors->first('children_2_age', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_2_mobile">Children 2 Mobile</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_2_mobile') ? 'is-invalid' : '' }}"
                   name="children_2_mobile" type="text" id="children_2_mobile"
                   value="{{ old('children_2_mobile', optional($member)->children_2_mobile) }}" minlength="1" data=""
                   placeholder="Enter children 2 mobile here...">

            {!! $errors->first('children_2_mobile', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="children_2_email">Children 2 Email</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('children_2_email') ? 'is-invalid' : '' }}"
                   name="children_2_email" type="email" id="children_2_email"
                   value="{{ old('children_2_email', optional($member)->children_2_email) }}" data=""
                   placeholder="Enter children 2 email here...">

            {!! $errors->first('children_2_email', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10">
            <label for="reference_name">Reference Name (BBCS,UK member recommendation person name)</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
            <input class="form-control  {{ $errors->has('reference_name') ? 'is-invalid' : '' }}" name="reference_name"
                   type="text" id="reference_name"
                   value="{{ old('reference_name', optional($member)->reference_name) }}" minlength="1" data=""
                   placeholder="Enter reference name here...">

            {!! $errors->first('reference_name', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10">
            <label for="reference_name">Status</label>

            <select name="status" id="status" class="form-control">
                <option value="Pending"  @if(old('reference_name', optional($member)->status) == "Pending" ) selected @endif>Pending</option>

                <option value="Approved"
                        @if(old('reference_name', optional($member)->status) == "Approved" ) selected @endif>Approved
                </option>
                <option value="Rejected"  @if(old('reference_name', optional($member)->status) == "Rejected" ) selected @endif>Rejected</option>
            </select>


            {!! $errors->first('reference_name', '<p class="form-text text-danger">:message</p>') !!}

        </div>
    </div>

</div>
