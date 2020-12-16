@extends('layouts.app')

@section('content')
    <!--Main layout-->
    <div class="view full-page-intro"
         style="background-image: url(&apos;idea.jpg&apos;); background-repeat: no-repeat; background-size: cover; margin-top:-1%;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center"
             style="background-image: url(/images/phone.jpg);background-repeat: no-repeat;">

            <!-- Content -->
            <div class="container">

                <!--Grid row-->
                <main>
                    <div class="container">

                        <h2 class="mt-4 text-center" style="color:white !important;">Идея</h2>
                        <!--Section: IDEA-->
                        <div class="row mt-4">
                            @foreach ($ideas as $idea)
                                <div class="col-md-4" style="margin:auto;">
                                    <!-- Card Wider -->
                                    <div class="card card-cascade wider">

                                        <!-- Card image -->


                                        <div class="view view-cascade overlay" style="height:fit-content">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                                            <a href="#!">
                                                {{--                                <div class="mask rgba-white-slight"></div>--}}
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center pb-0">

                                            <!-- Title -->
                                            <h4 class="card-title"><strong>{{ $idea->name }}</strong></h4>
                                            <!-- Subtitle -->
                                            <h5 class="blue-text pb-2"><strong>{{ $idea->idea }}</strong></h5>
                                            <!-- Text -->
                                            <p class="card-text">{{ $idea->phone }}<br>{{ $idea->mail }}</p>
                                            <!-- Linkedin -->
                                            <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                                            <!-- Twitter -->
                                            <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                                            <!-- Dribbble -->
                                            <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

                                            <!-- Card footer -->
                                            <div class="card-footer text-muted text-center mt-4">
                                                {{ $idea->created_at }}
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Card Wider -->
                                </div>@endforeach
                        </div>
                        <!--Section: IDEA-->
                    </div>
                </main>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

    </div>

    </div>

@endsection