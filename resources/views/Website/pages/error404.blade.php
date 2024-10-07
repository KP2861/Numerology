@extends('Website.layouts.app')

@section('content')
    <section class="page-not-found-header d-flex justify-content-center align-items-center">
        <div class="container">

            <div class=" h-100 d-flex flex-column justify-content-center align-items-center ">
                <h1 class="mainheading text-start text-sm-center">
                    404
                </h1>
                <h2 class="subheading text-start text-sm-center mt-4">
                    Page not Found
                </h2>
                <p class="pt-4 text-start text-sm-center mt-4">
                    You may have Mistyped the address or the page may have moved
                </p>

                <div class="home-link mt-4">
                    <a href="{{ url('/') }}" class="home-link">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
