@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">

        <h5  class="my-1 float-left">{{ isset($gallery->title) ? $gallery->title : 'Gallery' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('galleries.gallery.destroy', $gallery->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('galleries.gallery.index') }}" class="btn btn-primary mr-2" title="Show All Gallery">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Gallery
                    </a>

                    <a href="{{ route('galleries.gallery.create') }}" class="btn btn-success mr-2" title="Create New Gallery">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Gallery
                    </a>

                    <a href="{{ route('galleries.gallery.edit', $gallery->id ) }}" class="btn btn-primary mr-2" title="Edit Gallery">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Gallery
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Gallery" onclick="return confirm(&quot;Click Ok to delete Gallery.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Gallery
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $gallery->title }}</dd>
            <dt>Photo</dt>
            <dd>{{ asset('storage/' . $gallery->photo) }}</dd>

        </dl>

    </div>
</div>

@endsection
