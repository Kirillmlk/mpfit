@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
        <h1>Подтвердите заказ:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Общая стоимость заказа: <b>{{ $order->getFullPrice() }} руб.</b></p>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div>
                        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер
                                    телефона: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Комментарий к
                                    заказу: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="comment" id="comment" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="hidden" name="_token" value="qhk4riitc1MAjlRcro8dvWchDTGkFDQ9Iacyyrkj">
                        <br>
                        @csrf
                        <input type="submit" class="btn btn-success"
                               href="#" value="Подтвердить заказ">
                    </div>
                </form>
            </div>
        </div>
@endsection
