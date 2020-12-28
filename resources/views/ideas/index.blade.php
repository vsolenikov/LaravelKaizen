@extends('layouts.app')

@section('content')
    <div class="view full-page-intro" style="background-image: url(&apos;idea.jpg&apos;); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="background-image: url(/images/sistemka/Tutaev.jpg);background-repeat: no-repeat;">

            <!-- Content -->
            <div class="container">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 col-sm-12 mb-4 white-text text-center text-md-left">

                        <h1 class="display-4 font-weight-bold">Идеи развития города</h1>

                        <hr class="hr-light">


                        <p class="mb-4 d-none d-md-block">
                            <strong>В данной форме анонимно собираются идеи. После предварительной модерации они публикуются на данном портале с целью их оценки и применения в жизни Тутаева.</strong>
                        </p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-sm-12 col-xl-5 mb-4">

                        <!--Card-->
                        <div class="card formes" >

                            <!--Card content-->

                            <!-- Form -->
                            <form action="{{ url('idea') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <!-- Task Name -->
                                <div class="form-group">
                                    <div style="margin: 1% 60% -10% 40%"><img src="/images/sistemka/kaizen.jpg"></div>
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

                                    <div class="md-form" hidden="true">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="text" name="name" id="task-name" class="form-control" value=" {{ Auth::user()->name }}">
                                        <label for="task" >ФИО</label>
                                    </div>
                                    <div class="md-form" hidden="true">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <input type="text" name="mail" id="task-mail" class="form-control" value="{{ Auth::user()->email }}">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" name="image" id="image" class="form-control" style="border:hidden"><br>
                                        </div>

                                    </div>

                                </div>

                                <!-- Add Task Button -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-default grow vertus">
                                            <i class="fa fa-btn fa-plus"></i>Отправить
                                        </button>
                                    </div>
                                </div>
{{--                                @if(session()->has('message'))--}}
{{--                                    <div class="alert alert-success">--}}
{{--                                        {{ session()->get('message') }}--}}
{{--                                    </div>--}}
{{--                                @endif--}}
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
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="background-image: url(/images/sistemka/Tutaev.jpg);background-repeat: no-repeat;background-attachment: fixed;">
    <main style="width:-webkit-fill-available">
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center big-table">

        @if (count($ideas) > 0)



                <div class="panel-body" style="width:90%">@if ($user_id=='1')<div class="container" ><h2 class="mt-4 text-center" style="color:white !important;">Список идей пользователей</div>@else <h2 class="mt-4 text-center" style="color:white !important;">Список ваших идей</h2>@endif
                    {{--                        <table class="table table-striped task-table" style="background-color: black">--}}
                    <table class="table-responsive">
                        <thead >
                        <th style="width:17%; padding:15px">Автор</th>
                        <th style="width:20%">Адрес эл. почты</th>
                        <th style="width:12%">Телефон</th>
                        <th style="width:55% !important; ">Идея</th>
                        @if($user_id!='1')<th style="width:15%">Статус идеи</th>@endif
                        <th style="width:18%">Дата отправки</th>
                        <th style="width:18%">Изображение</th>
                        @if($user_id=='1')   <th style="width:20%">Статус заявки</th>@endif

                        </thead>
                        <tbody style="background:white">
                        @foreach ($ideas as $idea)
                            <tr style="border-bottom:1px solid white;">
                                <td >
                                    <div>{{ $idea->name }}</div>
                                </td>
                                <td >
                                    <div>{{ $idea->mail }}</div>
                                </td>
                                <td >
                                    <div>{{ $idea->phone }}</div>
                                </td>
                                <td >
                                    <div><textarea readonly="readonly" style="overflow: scroll; border:0;background-color:transparent;readonly:true !important">{{ $idea->idea }}</textarea>
                                    </div>
                                </td>
                               @if($user_id!='1') <td>
                                    <div>{{ $idea->statuses }}</div>
                                </td>@endif

                                <td >
                                    <div>{{ $idea->created_at}}</div>
                                </td>
                                <td >
                                    <img src="{{ '/images/'.$idea->image }}" style="width:100%">
                                </td>
                                <!-- Idea Delete-Update Button -->
                                @if($user_id=='1')
                                    <td>
                                        <form action="{{ url('idea/'.$idea->id.'/update_status') }}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('POST')}}
                                            <select name="statuses" id="update-statuses" class="select-css">
                                                <option name="this-status">{{ $idea->statuses }}</option>
                                                <option name="good">Одобрена</option>
                                                <option name="bad">Отклонена</option>
                                                <option name="comleted">Выполняется</option>
                                            </select>
                                            <button type="submit" id="update-idea-{{ $idea->id }}" class="btn btn-danger" style="background:green !important; margin:1% 2% 1% 1%">
                                                <i></i>Изменить
                                            </button>
                                        </form>
                                    </td>

{{--                                    <td>--}}

{{--                                        <form action="{{ url('idea/'.$idea->id) }}" method="POST">--}}
{{--                                            {{ csrf_field() }}--}}
{{--                                            {{ method_field('DELETE') }}--}}
{{--                                            <button type="submit" id="delete-idea-{{ $idea->id }}"--}}
{{--                                                    class="btn btn-danger" style="margin-left: 10% !important;">--}}
{{--                                                <i class="fa fa-btn fa-trash"></i>Отклонить--}}
{{--                                            </button>--}}

{{--                                        </form>--}}
{{--                                    </td>--}}
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </main>

    </div>

    </div>

@endsection

