<tr>
    <td>
        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" autocomplete="off"
            wire:model.defer='name' wire:keydown.enter="save">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td>
        <input type="text" class="form-control form-control-sm @error('number1') is-invalid @enderror"
            wire:model.defer='number1' autocomplete="off" wire:keydown.enter="save">
        @error('number1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td>
        <input type="text" class="form-control form-control-sm @error('number2') is-invalid @enderror"
            wire:model.defer='number2' autocomplete="off" wire:keydown.enter="save">
        @error('number2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td>
        <input type="text" class="form-control form-control-sm @error('number3') is-invalid @enderror"
            wire:model.defer='number3' autocomplete="off" wire:keydown.enter="save">
        @error('number3')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td style="width:120px">

        <button class="btn btn-link text-success" wire:loading>
            <i class="fas fa-circle-notch fa-spin"></i>
        </button>

        <button class="btn btn-link text-success" wire:loading.class="d-none" wire:click="save">
            <i class="fas fa-save    "></i>
        </button>

        @if ($nid)
        <a href="javascript:" onclick="sil({{ $n->id }})" class="btn  btn-link text-danger"> <i
                class="fas fa-trash    "></i>
        </a>
        @endif
    </td>
</tr>