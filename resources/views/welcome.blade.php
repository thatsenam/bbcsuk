@extends('layouts.app')

@section('content')
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Charity organisation</span>
                        <h1 class="mb-3 mt-3">We help people who need most</h1>

                        <p class="mb-4 pr-5">
                            Tireless working for saving life. Helping them who are saving life. </p>
                        <div class="btn-container ">
                            <a href="{{ route('app.donate_now') }}" class="btn btn-main-2 btn-icon btn-round-full">Donate Now <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

