@extends('layouts.app')

@section('content')
    <div class="view full-page-intro" style="background-image: url(&apos;idea.jpg&apos;); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="background-image: url(/images/phone.jpg);background-repeat: no-repeat;">

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
                                        <button type="submit" class="btn btn-default grow vertus">
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
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center"
         style="background-image: url(/images/phone.jpg);background-repeat: no-repeat; margin-top:2%">

        @if (count($ideas) > 0)



                <div class="panel-body">
                    {{--                        <table class="table table-striped task-table" style="background-color: black">--}}
                    <table style="background-color: #2e3436;color:white;border-radius: 19px 19px 0px 0px">
                        <thead style="box-shadow: inset 0 0 10px; width:100%; border-radius: 19px 19px 19px 19px">
                        <th style="width:17%; padding:15px">Автор</th>
                        <th style="width:20%">Адрес эл. почты</th>
                        <th style="width:12%">Телефон</th>
                        <th style="width:27%">Идея</th>
                        <th style="width:15%">Статус идеи</th>
                        <th style="width:20%">Дата отправки</th>

                        </thead>
                        <tbody>
                        @foreach ($ideas as $idea)
                            <tr style="border-bottom:1px solid white">
                                <td class="table-text">
                                    <div>{{ $idea->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $idea->mail }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $idea->phone }}</div>
                                </td>
                                <td class="table-text">
                                    <div><textarea readonly="readonly" style="width:100%; border:0;background-color:transparent;readonly:true !important">{{ $idea->idea }}</textarea>
                                    </div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $idea->statuses }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $idea->created_at}}</div>
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



    </div>

@endsection

