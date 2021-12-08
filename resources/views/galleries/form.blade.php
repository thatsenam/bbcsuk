
<div class="form-group">
    <div class="col-md-10">
        <label for="title">Title</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" type="text" id="title" value="{{ old('title', optional($gallery)->title) }}" minlength="1" maxlength="255" data=""  placeholder="Enter title here...">

            {!! $errors->first('title', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="photo">Photo</label>


            <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
                <span class="btn btn-default">
                     <input type="file" name="photo" id="photo" class="form-control-file">
                </span>
            </label>
            <input type="text" class="form-control uploaded-file-name" hidden>
        </div>

        @if (isset($gallery->photo) && !empty($gallery->photo))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_photo" class="custom-delete-file" value="1" {{ old('custom_delete_photo', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                   <img class="card" src="{{ asset('storage/'.$gallery->photo) }}" width="200">

                </span>
            </div>
        @endif

            {!! $errors->first('photo', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

