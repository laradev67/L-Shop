@extends('layouts.shop')

@section('title')
    Пополнить баланс
@endsection

@section('content')
    <div id="block-header" class="z-depth-1">
        <h1><i class="fa fa-credit-card fa-left-big"></i>Пополнить баланс</h1>
    </div>
    <div id="p-login">
        <div class="md-form">
            <i class="fa fa-money prefix"></i>
            <input type="text" id="fub-input" class="form-control">
            <label for="fub-input">Сумма пополнения</label>
        </div>
    </div>
    <div id="content-container" class="flex-first flex">
        <a class="btn btn-warning btn-lg btn-block" id="fub-btn"
           data-minsumm="{{ s_get('payment.fillupbalance.minsumm') }}">Перейти к оплате</a>
    </div>
@endsection
