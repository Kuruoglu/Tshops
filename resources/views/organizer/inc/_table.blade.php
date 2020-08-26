<div class="mb-2 " >
    <span class="mr-5">Создать:</span>
    <a href="/organize/create/order" class="btn btn-success mr-2">Заказ</a>
    <a class="btn btn-success mr-2">Закупку</a>
    <a class="btn btn-success">Отправку</a>
</div>
<table class="table" style="border: solid 1px #000">
    <thead>
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Цвет</th>
        <th>Размер</th>
        <th>Количество</th>
        <th>Цена клиента</th>
        <th>Всего</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$order->url}}</td>
        <td>{{$order->color}}</td>
        <td>{{$order->size}}</td>
        <td>{{$order->qty}}</td>
        <td>{{$order->price}}</td>
        <td>Total: {{$order->qty * $order->price}}</td>
        <td>
            <select name="status" id="status">
                <option value="1">Новый</option>
                <option value="2">В процессе</option>
                <option value="3">Завершенный</option>
                <option value="4">На отправку</option>
                <option value="5">Отмененный</option>
            </select>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
