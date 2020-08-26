@extends('layouts.app')

@section('content')
    <div class="container">
{{--        {{$user}}--}}
{{--        {{$orders}}--}}
        <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#nav-order" role="tab" aria-controls="nav-home" aria-selected="true">Заказы</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-purchase" role="tab" aria-controls="nav-profile" aria-selected="false">Закупка</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-parcels" role="tab" aria-controls="nav-contact" aria-selected="false">Посылки</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-shop" role="tab" aria-controls="nav-contact" aria-selected="false">Магазин</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-announcement" role="tab" aria-controls="nav-contact" aria-selected="false">Анонсы</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-client" role="tab" aria-controls="nav-contact" aria-selected="false">Клиенты</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-order" role="tabpanel" aria-labelledby="nav-home-tab">

                   @include('organizer.inc._order')

            </div>

            <div class="tab-pane fade" id="nav-purchase" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
            <div class="tab-pane fade" id="nav-parcels" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            <div class="tab-pane fade" id="nav-shop" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            <div class="tab-pane fade" id="nav-announcement" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            <div class="tab-pane fade" id="nav-client" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
    </div>
@endsection
