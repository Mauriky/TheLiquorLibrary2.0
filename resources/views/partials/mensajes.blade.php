@if(Session::has('alerta'))
    <div class="alert {{ Session::get('alert-class','alert-info') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">X</button>
        {{ Session::get('alerta') }}
    </div>
@endif
