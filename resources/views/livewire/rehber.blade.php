<div class="">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {!! session('status') !!}
    </div>
    @endif
    <x-search />
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-sm table-striped m-0">
                    <thead>
                        <tr class="">
                            <th>
                                <x-sort label="İsim" field="name" sort-by="{{$sortBy}}"
                                    sort-direction="{{$sortDirection}}" />
                            </th>
                            <th>
                                <x-sort label="Numara 1" field="number1" sort-by="{{$sortBy}}"
                                    sort-direction="{{$sortDirection}}" />
                            </th>
                            <th>
                                <x-sort label="Numara 2" field="number2" sort-by="{{$sortBy}}"
                                    sort-direction="{{$sortDirection}}" />
                            </th>
                            <th>
                                <x-sort label="Numara 3" field="number3" sort-by="{{$sortBy}}"
                                    sort-direction="{{$sortDirection}}" />
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($numbers as $n)
                        <livewire:number key="{{$n->id}}" :n="$n" />
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    function sil(id)
{
    if (confirm('Kayıt Silinecek Geri Dönüşü Yok. Emin misin ?!!')) {
        Livewire.emit('deletenumber', id)
    }
}
</script>
@endpush