@extends('layouts/main')

@section('content')
    <div class="enter-wrap">
        <form class="enter">
            <div class="enter__row">
                <div class="enter__col">
                    <label>Email:</label>
                </div>
                <div class="enter__col">
                    <input type="text"/>
                </div>
            </div>
            <div class="enter__row">
                <div class="enter__col">
                    <label>Пароль:</label>
                </div>
                <div class="enter__col">
                    <input type="text"/>
                </div>
            </div>
            <div class="enter__row enter__row_right">
                <div class="shop-filter-checkbox-box">
                    <input type="checkbox" id="sbori"/>
                    <label for="sbori">Запомнить</label>
                </div>
            </div>
            <div class="enter__row">
                <button data-active="true" class="btn-1 btn-medium btn-orange el-fluid">Войти</button>
            </div>
            <div class="enter__row enter__row_center"><a href="">Регистрация</a><a href="">Забыл пароль?</a></div>
        </form>
    </div>
@endsection