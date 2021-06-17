@extends('layouts.app')

@push('css')
@livewireStyles
@endpush

@push('js')
@livewireScripts
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

            <livewire:rehber />


            <div class="card my-2">

                <div class="card-body p-0">
                    <h5 class="pl-3 pt-3">Ekle</h5>
                    <table class="table table-borderless">
                        <livewire:number key="0" />
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                Powered By <small class="pl-2"> <a target="_blank" href="https://www.heykodi.com/2fa/">Eos
                        HeyKodi</a></small>
            </div>



        </div>
    </div>
</div>
{{-- <div class="d-none">
    <form action="{{route('remove')}}" method="POST" id="formsil">
<input type="text" name="id" id="sil_id">
@csrf
</form>
</div>
<script>
    function sil($id){
        document.getElementById('sil_id').value=$id;
        if (confirm('Silinecek')) {
            document.getElementById('formsil').submit();
        }
    }
</script> --}}
@endsection