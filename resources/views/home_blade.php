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
                 <input id="name[{{$n->id}}]" type="text" class="form-control @error('name.'.$n->id) is-invalid @enderror" name="name[{{$n->id}}]" value="{{ old('name.'.$n->id , $n->name) }}" autocomplete="false">

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
                 <input id="{{$input}}[{{$n->id}}]" type="text" class="form-control @error($input.'.'.$n->id) is-invalid @enderror" name="{{$input}}[{{$n->id}}]" value="{{ old($input.'.'.$n->id , $val) }}" autocomplete="false">
                 @error($input.'.'.$n->id)
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror
             </td>
             @endforeach
             <td>
                 <button class="btn btn-lg  btn-link text-success"><i class="fas fa-save    "></i></button>
                 <a href="javascript:" onclick="sil({{$n->id}})" class="btn btn-lg  btn-link text-danger"> <i class="fas fa-trash    "></i>
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
                 <input id="name[0]" type="text" class="form-control @error('name.0') is-invalid @enderror" name="name[0]" value="{{ old('name.0') }}" autocomplete="false" autofocus>

                 @error('name.0')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror
             </td>
             @foreach ($inputs as $input)
             <td>
                 <input id="{{$input}}[0]" type="text" class="form-control @error($input.'.0') is-invalid @enderror" name="{{$input}}[0]" value="{{ old($input.'.0') }}" autocomplete="false">
                 @error($input.'.0')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror
             </td>
             @endforeach
             <td>
                 @csrf
                 <button class=" btn btn-lg btn-link"> <i class="fas fa-plus-circle  text-dark  "></i>
                 </button>
             </td>
         </tr>
     </form>
 </tbody>
 </table> --}}