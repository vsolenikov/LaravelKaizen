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
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 col-sm-12 mb-4 white-text text-center text-md-left">

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
                                        </div>
                                        @endif

                                    <div class="md-form">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="text" name="name" id="task-name" class="form-control" value="">
                                        <label for="task" >ФИО</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <input type="text" name="mail" id="task-mail" class="form-control" value="">
                                        <label for="task" >Почта</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-phone prefix grey-text"></i>
                                        <input type="text" name="phone" id="task-phone" class="form-control" value="">
                                        <label for="task" >Телефон</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-pencil-alt prefix grey-text"></i>
{{--                                        <textarea name="idea" id="task-idea" class="form-control" value=""></textarea>--}}
                                        <textarea type="text" id="form8" name="idea" id="task-idea" class="md-textarea form-control"></textarea>
                                        <label for="task" >Ваша идея</label>
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
                @foreach ($ideas as $idea)
                <div class="col-md-4">
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
                            <h4 class="card-title" ><strong>{{ $idea->name }}</strong></h4>
                            <!-- Subtitle -->
                            <h5 class="blue-text pb-2" style=" overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><strong>{{ $idea->idea }}</strong></h5>
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
                            <form action="{{ url('idea/'.$idea->id.'/details') }}" method="POST">
                                {{csrf_field()}}
{{--                                {{method_field('POST')}}--}}

                                <button type="submit" id="select-idea-{{ $idea->id }}" class="btn btn-danger" style="background:green !important; margin:1% 2% 1% 1%">
                                    <i></i>Перейти
                                </button>
                            </form>

                        </div>

                    </div>
                    <!-- Card Wider -->
                </div>@endforeach


            </div>


            <!--Section: IDEA-->


        </div>


    </main>


    </div>
{{--    <div class="mask rgba-black-light d-flex justify-content-center align-items-center"--}}
{{--         style="background-image: url(/images/phone.jpg);background-repeat: no-repeat; margin-top:2%">--}}

{{--        <div class="panel-body" style="width:90%">--}}
{{--            <div class="panel panel-default" style="width:100% !important;  box-shadow: 0 0 35px red !important; background-color:#2e3436;border-radius:20px">--}}
{{--                <div class="panel-heading" style="border-radius: 19px 19px 0px 0px; background: #2e3436 !important; border-color:#2e3436; color:white;">--}}
{{--                    <h1>Идеи от пользователей</h1>--}}
{{--                </div>--}}
{{--            <table class="table-hover table-striped" style="width:100%; font-size:20px;">--}}
{{--                <thead class="table-dark" style="background:#2e3436 !important;">--}}
{{--                <th style="width:17%; padding:15px">Автор</th>--}}
{{--                <th style="width:20%">Адрес эл. почты</th>--}}
{{--                <th style="width:12%">Телефон</th>--}}
{{--                <th style="width:30%">Идея</th>--}}
{{--                <th style="width:10%">Статус идеи</th>--}}
{{--                <th style="width:20%">Дата отправки</th>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach ($ideas as $idea)--}}
{{--                    <tr style="border-bottom: 1px solid white">--}}
{{--                        <td class="table-text">--}}
{{--                            <div>{{ $idea->name }}</div>--}}
{{--                        </td>--}}
{{--                        <td class="table-text">--}}
{{--                            <div>{{ $idea->mail }}</div>--}}
{{--                        </td>--}}
{{--                        <td class="table-text">--}}
{{--                            <div>{{ $idea->phone }}</div>--}}
{{--                        </td>--}}
{{--                        <td class="table-text">--}}
{{--                            <div><textarea readonly="readonly"--}}
{{--                                           style="width:100%; border:0;background-color:transparent;readonly:true !important">{{ $idea->idea }}</textarea>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td class="table-text">--}}
{{--                            <div>{{ $idea->statuses }}</div>--}}
{{--                        </td>--}}
{{--                        <td class="table-text">--}}
{{--                            <div>{{ $idea->created_at}}</div>--}}
{{--                        </td>--}}
{{--                        <!-- Task Delete Button -->--}}

{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}



@endsection