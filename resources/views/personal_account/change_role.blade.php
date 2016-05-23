@extends('templates.base')
@section('head')
    <title>Смена роли</title>
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/materialadmin.css') !!}
    {!! HTML::style('css/full.css') !!}
    {!! HTML::script('js/jquery.js') !!}
    <meta name="csrf_token" content="{{ csrf_token() }}" />
@stop

@section('background')
    full
@stop




@section('content')
    <div class="col-lg-offset-1 col-md-10 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Сменить роль или группу пользователя</h2>
                <div class="form">
                    <div class="form-group col-md-12">
                        <textarea  class="form-control textarea3" rows="1" id="regexp" placeholder="" required></textarea>
                        <label for="textarea3">Фаимилия пользователя</label>
                    </div>
                </div>
                <br>
                <br>
                <form method="" action="" class="form" id="forma">
                    <table class="table table-condensed">
                        <tr class="info">
                            <td>Группа</td>
                            <td>Фамилия</td>
                            <td>Имя</td>
                            <td>email</td>
                            <td>Роль</td>
                            <td>Студент</td>
                            <td>Админ</td>
                            <td>Обычный пользователь</td>
                            <td>Преподаватель</td>

                        </tr>
                        <tbody id="target">
                        @foreach($query as $user)
                            <tr id="{{ $user['id'] }}">
                                <td>
                                    <input type="number" value="{{ $user['group'] }}" name="{{ $user['id'] }}" class="group_change" style="width: 50px;">
                                </td>
                                <td>
                                    {{ $user['last_name'] }}
                                </td>
                                <td>
                                    {{ $user['first_name'] }}
                                </td>
                                <td>
                                    {{ $user['email'] }}
                                </td>
                                <td>
                                    {{ $user['role'] }}
                                </td>
                                <td>
                                    <button type="button" class="student btn btn-primary" name="{{ $user['id'] }}">Студент</button>
                                </td>
                                <td>
                                    <button type="button" class="admin btn btn-danger" name="{{ $user['id'] }}">Админ</button>
                                </td>
                                <td>
                                    <button type="button" class="average btn" name="{{ $user['id'] }}">Обычный пользователь</button>
                                </td>
                                <td>
                                    <button type="button" class="tutor btn btn-accent-bright" name="{{ $user['id'] }}">Преподаватель</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    {!! HTML::script('js/personal_account/add_student.js') !!}
    {!! HTML::script('js/personal_account/change_role_filter.js') !!}

@stop
