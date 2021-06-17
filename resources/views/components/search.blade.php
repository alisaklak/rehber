<div class="d-flex justify-content-between align-items-center my-2">
    <div class="">
        <button class="btn btn-sm btn-dark" wire:click.prepent="export">
            <i class="fas fa-file-excel    "></i> Export
        </button>
    </div>
    <div class="">
        <input type="text" class="form-control form-control-sm" placeholder="Search" wire:model="search">
    </div>
</div>