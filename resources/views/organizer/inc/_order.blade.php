<div class="nav-button">
    <nav>
        <div class="nav nav-pills mb-3 button-place" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="pill" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="true">Новые</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-process" role="tab" aria-controls="nav-process" aria-selected="false">В обработке</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="pill" href="#nav-complete" role="tab" aria-controls="nav-complete" aria-selected="false">Выполненные</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="pill" href="#nav-tosend" role="tab" aria-controls="nav-tosend" aria-selected="false">На отправку</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="pill" href="#nav-canceled" role="tab" aria-controls="nav-canceled" aria-selected="false">Отмененные</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-new" role="tabpanel" aria-labelledby="nav-home-tab">

           @include('organizer.inc._table')
        </div>
        <div class="tab-pane fade" id="nav-process" role="tabpanel" aria-labelledby="nav-profile-tab">
            @include('organizer.inc._table')
        </div>
        <div class="tab-pane fade" id="nav-complete" role="tabpanel" aria-labelledby="nav-contact-tab">
            @include('organizer.inc._table')
        </div>
        <div class="tab-pane fade" id="nav-tosend" role="tabpanel" aria-labelledby="nav-contact-tab">
            @include('organizer.inc._table')
        </div>
        <div class="tab-pane fade" id="nav-canceled" role="tabpanel" aria-labelledby="nav-contact-tab">
            @include('organizer.inc._table')
        </div>
    </div>
</div>

