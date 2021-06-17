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
            <div class="card">
                <div class="card-body p-0">
                    <livewire:rehber />
                    {{-- <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>İsim</th>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($inputs as $input)
                                <th>
                                    Numara {{$i}}
                    </th>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                    <th style="width: 150px">#</th>
                    </tr>
                    </thead>

                    <tbody>
                        @forelse ($numbers as $n)
                        <form action="{{route('edit')}}" method="POST">
                            <tr>
                                <td scope="row">
                                    <input id="name[{{$n->id}}]" type="text"
                                        class="form-control @error('name.'.$n->id) is-invalid @enderror"
                                        name="name[{{$n->id}}]" value="{{ old('name.'.$n->id , $n->name) }}"
                                        autocomplete="false">

                                    @error('name.'.$n->id)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                                @foreach ($inputs as $input)
                                @php
                                $val=$n->{$input};
                                @endphp
                                <td>
                                    <input id="{{$input}}[{{$n->id}}]" type="text"
                                        class="form-control @error($input.'.'.$n->id) is-invalid @enderror"
                                        name="{{$input}}[{{$n->id}}]" value="{{ old($input.'.'.$n->id , $val) }}"
                                        autocomplete="false">
                                    @error($input.'.'.$n->id)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                                @endforeach
                                <td>
                                    <button class="btn btn-lg  btn-link text-success"><i
                                            class="fas fa-save    "></i></button>
                                    <a href="javascript:" onclick="sil({{$n->id}})"
                                        class="btn btn-lg  btn-link text-danger"> <i class="fas fa-trash    "></i>
                                    </a>
                                    @csrf
                                </td>
                            </tr>
                        </form>
                        @empty

                        @endforelse
                        <form action="{{route('create')}}" method="POST">
                            <tr>
                                <td scope="row">
                                    <input id="name[0]" type="text"
                                        class="form-control @error('name.0') is-invalid @enderror" name="name[0]"
                                        value="{{ old('name.0') }}" autocomplete="false" autofocus>

                                    @error('name.0')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                                @foreach ($inputs as $input)
                                <td>
                                    <input id="{{$input}}[0]" type="text"
                                        class="form-control @error($input.'.0') is-invalid @enderror"
                                        name="{{$input}}[0]" value="{{ old($input.'.0') }}" autocomplete="false">
                                    @error($input.'.0')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                                @endforeach
                                <td>
                                    @csrf
                                    <button class=" btn btn-lg btn-link"> <i
                                            class="fas fa-plus-circle  text-dark  "></i>
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                    </table> --}}


                </div>
            </div>


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