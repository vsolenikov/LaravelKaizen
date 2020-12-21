@extends('layouts.app')

@section('content')
    <!--Main layout-->
    <div class="view full-page-intro"
         style="">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center"
             style="background-image: url(/images/phone.jpg);background-repeat: no-repeat;">

            <!-- Content -->
            <div class="container" style="margin:auto;">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 col-sm-12 mb-4 white-text text-center text-md-left" style="margin-top:5%;">

                        <h1 class="display-4 font-weight-bold">Идеи развития города</h1>

                        <hr class="hr-light">


                        <p class="mb-4 d-none d-md-block">
                            <strong>В данной форме анонимно собираются идеи. После предварительной модерации они
                                публикуются на данном портале с целью их оценки и применения в жизни Тутаева.</strong>
                        </p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-sm-12 col-xl-5 mb-4">

                        <!--Card-->
                        <div class="card formes">

                            <!--Card content-->

                            <!-- Form -->
                            <form action="{{ url('idea') }}" method="POST">
                            {{ csrf_field() }}

                            <!-- Task Name -->
                                <div class="form-group">
                                    <div style="margin: 1% 60% -10% 40%"><img src="/images/kaizen.jpg"></div>
                                    <br><br><br>
                                    <h3 class="dark-grey-text text-center">
                                        <strong>Отправить идею:</strong>
                                    </h3>
                                    <hr>
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}
                                                @endforeach
                                            </ul>
                                        </div>@endif


                                    <div class="md-form">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="text" name="name" id="task-name" class="form-control" value="">
                                        <label for="task">ФИО</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <input type="text" name="mail" id="task-mail" class="form-control"   value="">
                                        <label for="task">Почта</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-phone prefix grey-text"></i>
                                        <input type="text" name="phone" id="task-phone" class="form-control" placeholder="+7 (___) ___-__-__" value="+7">
                                        <label for="task">Телефон</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                                        {{--                                        <textarea name="idea" id="task-idea" class="form-control" value=""></textarea>--}}
                                        <textarea type="text" id="form8" name="idea" id="task-idea"
                                                  class="md-textarea form-control"></textarea>
                                        <label for="task">Ваша идея</label>
                                    </div>

                                </div>

                                <!-- Add Task Button -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">

                                        <button type="submit" class="btn btn-default grow vertus" style="width:100%">

                                            <i class="fa fa-btn fa-plus"></i>Отправить
                                        </button>
                                    </div>
                                </div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

    </div>
    <main>
        <div class="container">

            <h2 class="mt-4 text-center">Список идей</h2>
            <!--Section: IDEA-->
            <div class="row mt-4">
                @foreach ($ideas as $idea)<a href="{{ url('idea/'.$idea->id.'/details') }}">
                    <div class="col-md-4">
                        <!-- Card Wider -->
                        <div class="card card-cascade wider" style="margin-bottom: 5%;">

                            <!-- Card image -->


                            <div class="view view-cascade overlay" style="height:fit-content">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg"
                                     alt="Card image cap">
                                <a href="#!">
                                    {{--                                <div class="mask rgba-white-slight"></div>--}}
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center pb-0">
                                <a  href="{{ url('idea/'.$idea->id.'/details') }}">
                                <!-- Title -->
                                <h4 class="card-title"><strong>{{ $idea->name }}</strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"
                                    style=" overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                    <strong>{{ $idea->idea }}</strong></h5>
                                <!-- Text -->
                                <p class="card-text">{{ $idea->phone }}<br>{{ $idea->mail }}</p>
                            </a>
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
                                {{--                            <form action="{{ url('idea/'.$idea->id.'/details') }}" method="POST">--}}
                                {{--                                {{csrf_field()}}--}}
                                {{--                                {{method_field('POST')}}--}}

                                {{--                                <button type="submit" id="select-idea-{{ $idea->id }}" class="btn btn-danger" style="background:green !important; margin:1% 2% 1% 1%">--}}
                                {{--                                    <i></i>Перейти--}}
                                {{--                                </button>--}}
                                {{--                            </form>--}}

                            </div>

                        </div>
                        <!-- Card Wider -->
                    </div>
                </a>@endforeach
            </div>
            <!--Section: IDEA-->
        </div>
    </main>


@endsection