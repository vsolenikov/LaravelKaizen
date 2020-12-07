@extends('layouts.app')

@section('content')
    <div style="margin-top:-1%;"><img src="/images/kaizen1.jpg" style="opacity: 0.5; background-size: cover; width:100%">
        <div class="centered-naz"><b>KAIZEN-идеи</b></div>
        <div class="centered-text">Lorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="margin-left:-35%"><img src="/images/logos.png"></div>
                <div style="margin-top: -20%;margin-bottom: 10%;"><strong><h1
                                style="font-size: 30px; font-family: Tahoma; margin-left:3%; margin-top:-30%">Здесь
                            представлен список идей
                            <br>Каждая идея может оказаться полезной
                        </h1></strong></div>
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="border-radius: 19px 19px 0px 0px">Отправьте нам свои идеи
                        </div>

                        <div class="panel-body">
                            <!-- Display Validation Errors -->

                            <!-- New Task Form -->

                            <form action="{{ url('idea') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Task Name -->
                                <div class="form-group">
                                    <label for="task" class="col-sm-3 control-label">Ваше ФИО</label>

                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="task-name" class="form-control" value="">
                                    </div>
                                    <br><br>
                                    <label for="task" class="col-sm-3 control-label">Адрес эл. почты</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="mail" id="task-mail" class="form-control" value="">
                                    </div>
                                    <br><br>
                                    <label for="task" class="col-sm-3 control-label">Номер телефона</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" id="task-phone" class="form-control" value="">
                                    </div>
                                    <br><br>
                                    <label for="task" class="col-sm-3 control-label">Ваша идея</label>
                                    <div class="col-sm-6">
                                        <textarea name="idea" id="task-idea" class="form-control" value=""></textarea>
                                    </div>
                                </div>

                                <!-- Add Task Button -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-btn fa-plus"></i>Отправить
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                {{--///--}}

                {{--                ///--}}
                <!-- Current Tasks -->
                </div>
            </div>
        </div>
    </div>
                    <div class="panel panel-default" style="margin:3% 5% 5% 5%">

                        <div class="panel-heading" style="border-radius: 19px 19px 0px 0px">
                            Одобренные идеи
                        </div>
                        <div class="panel-body">

                            <table>
                                <thead>
                                <th style="width:17%; padding:15px">Автор</th>
                                <th style="width:20%">Адрес эл. почты</th>
                                <th style="width:12%">Телефон</th>
                                <th style="width:30%">Идея</th>
                                <th style="width:15%">Статус идеи</th>
                                <th style="width:20%">Дата отправки</th>
                                </thead>
                                <tbody>
                                @foreach ($ideas as $idea)
                                    <tr style="border-bottom: 1px solid white">
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
                                            <div><textarea readonly="readonly"
                                                           style="width:100%; border:0;background-color:transparent;readonly:true !important">{{ $idea->idea }}</textarea>
                                            </div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $idea->statuses }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $idea->created_at}}</div>
                                        </td>
                                        <!-- Task Delete Button -->

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
