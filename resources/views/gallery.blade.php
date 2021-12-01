@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">Photo Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fetaure-page mt-4">
        <div class="container">
            <div class="grid row">
                @foreach($photos as $photo)
                    <div class="grid-item col-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <img src="{{ $photo }}" alt="" class="img-fluid w-100 shadow-1-strong rounded mb-4">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

