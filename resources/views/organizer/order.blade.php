@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/organize/create/store" method="post">
            @csrf

            <div class="row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Имя">
                </div>
                <div class="col">
                    <input type="text"  name="last_name" class="form-control" placeholder="Фамилия">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="country" class="form-control" placeholder="Страна">
                </div>
                <div class="col">
                    <input type="text" name="city" class="form-control" placeholder="Город">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="Телефон">
                </div>
                <div class="col">
                    <input type="text" name="post_office" class="form-control" placeholder="Почтовый оператор">
                </div>
                <div class="col">
                    <input type="text" name="post_office_number" class="form-control" placeholder="Отделение">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="inputUrl" class="col-sm-2 col-form-label">Ссылка</label>
                <div class="col-md-10">
                    <input type="url" class="form-control" id="inputUrl" name="url">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Количество" name="qty">
                </div>
                <div class="col d-flex">
                    <label for="" class="mr-1">Цвет </label>
                    <input type="color" class="form-control" name="color">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Размер" name="size">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <select name="currency" id="">
                        <option value="usd">$</option>
                        <option value="eur">€</option>
                        <option value="gbp">£</option>
                    </select>
                    <input type="text" name="price" placeholder="Цена">
                </div>


            </div>


            <div class="col">
                <label for="comment">Комментарий</label>
                <textarea name="comment" id="comment"  class="form-control" ></textarea>
            </div>
            <input type="hidden" name="status_id" value="1">
            <input type="submit" class="btn bg-primary">
        </form>
    </div>
@stop
