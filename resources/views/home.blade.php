@extends('layouts.app')

@push('css')
@livewireStyles
<link href="{{ asset('plugins/toastr/toastr.min.css') }}" rel="stylesheet">

@endpush

@push('js')
@livewireScripts
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    window.addEventListener('toast', event => {
        toastr["success"](event.detail.m)
})
        
</script>
@endpush





@section('content')
<div class="container">
    @foreach ($errors->all() as $error)
    {{ $error }}<br />
    @endforeach
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <livewire:export-import />
            <livewire:rehber />

            <div class="d-flex justify-content-end align-items-center">
                Powered By <small class="pl-2"> <a target="_blank" href="https://www.heykodi.com/2fa/">Eos
                        HeyKodi</a></small>
            </div>



        </div>
    </div>
</div>

@endsection