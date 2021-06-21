<div class="d-flex justify-content-between align-items-center my-2">
    <div class="">

        <select class="form-control form-control-sm" wire:model="perPage">
            @foreach ($perPages as $p)
            <option>{{ $p }}</option>
            @endforeach
        </select>

    </div>
    <div class="">
        <input type="text" class="form-control form-control-sm" placeholder="Search" wire:model="search">
    </div>
</div>