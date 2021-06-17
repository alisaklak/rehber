<div>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {!! session('status') !!}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>İsim</th>
                    <th>Numara 1</th>
                    <th>Numara 2</th>
                    <th>Numara 3</th>
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