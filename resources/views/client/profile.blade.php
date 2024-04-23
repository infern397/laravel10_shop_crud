@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h4 class="mt-3 mb-3">Профиль</h4>
            <div class="col-lg-12 text-center">
                <img width="100" height="100"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1765bc6c014%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1765bc6c014%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.65%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     class="img-thumbnail">
            </div>
            <form action="">
                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputFirstName">Имя</label>
                            <input class="form-control py-4" id="inputFirstName" type="text" value="{{ $user->firstname }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Фамилия</label>
                            <input class="form-control py-4" id="inputLastName" type="text" value="{{ $user->lastname }}"/>
                        </div>
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-lg-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="userAvatar" size="50">
                            <label class="custom-file-label" for="userAvatar">Выберите изображение</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label class="small mb-1" for="inputUsername">Имя пользователя</label>
                        <input class="form-control py-4" id="inputUsername" type="text"
                               aria-describedby="usernameHelp"
                               value="{{ $user->firstname . ' ' . $user->lastname }}" disabled/>
                    </div>
                    <div class="col-lg-6">
                        <label class="small mb-1" for="inputEmailAddress">Адрес электронной
                            почты</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="email"
                               aria-describedby="emailHelp"
                               value="{{ $user->email }}" disabled/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-12" style="margin-top: 33px;">
                        <input class="btn btn-info btn-block" type="submit" value="Сохранить">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
