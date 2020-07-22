@if(session()->has('success'))
    <div class="card-alert card green">
        <div class="card-content white-text">
            <p>{{ session()->get('success') }}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if(session()->has('error'))
    <div class="card-alert card red">
        <div class="card-content white-text">
            <p>{{ session()->get('error') }}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
