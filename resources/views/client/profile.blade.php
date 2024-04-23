@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h4 class="mt-3 mb-3">Профиль</h4>
            <form action="{{ route('client.profile.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputFirstName">Имя</label>
                            <input class="form-control py-4" id="inputFirstName" type="text" name="firstname"
                                   value="{{ $user->firstname }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Фамилия</label>
                            <input class="form-control py-4" id="inputLastName" type="text" name="lastname"
                                   value="{{ $user->lastname }}"/>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="small mb-1" for="inputUsername">Адрес</label>
                            <input class="form-control py-4" id="inputUsername" type="text"
                                   aria-describedby="usernameHelp" name="address"
                                   value="{{ $user->address }}"/>
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
                               aria-describedby="emailHelp" name="email"
                               value="{{ $user->email }}"/>
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
