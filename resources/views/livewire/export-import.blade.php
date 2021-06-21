<div>

    <button class="btn btn-sm btn-dark" wire:click.prepent="export">
        <i class="fas fa-file-excel    "></i> Export
    </button>

    <button class="btn btn-sm btn-info text-white " wire:click.prepent="showImport"><i
            class="fas fa-file-excel    "></i>
        Import</button>



    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="pt-3">İndirilen excel dosyasını düzenleyerek ekleme yapabilirsiniz</div>

                    <input id="file{{$random}}" type="file" class="form-control-file border" wire:model="file">
                    @error('name') <span class="error">{{ $message }}</span> @enderror

                    <div class="p-4">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" wire:model='override'> Eski olan kayıtları
                            sil
                        </label>
                        @if ($override)
                        <div class="text-danger">
                            İlk indirilen excel dosyasının yedeğini mutlaka alın silinen numaralar geri getirelemez.
                        </div>
                        @endif
                    </div>
                    @foreach ($errors->all() as $error)
                    <div class="bg-danger py-1 px-2 text-white">! {{ $error }}</div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" wire:click="import">İmport</button>
                </div>
            </div>
        </div>
    </div>


</div>

@push('js')
<script>
    window.addEventListener('modalimport', event => {
    $('#modalimport').modal(event.detail.s);
})

</script>

@endpush