<tr>
    <td>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="off"
            wire:model.defer='name' wire:keydown.enter="save">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td>
        <input id="number1" type="text" class="form-control @error('number1') is-invalid @enderror"
            wire:model.defer='number1' autocomplete="off" wire:keydown.enter="save">
        @error('number1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td>
        <input id="number2" type="text" class="form-control @error('number2') is-invalid @enderror"
            wire:model.defer='number2' autocomplete="off" wire:keydown.enter="save">
        @error('number2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td>
        <input id="number3" type="text" class="form-control @error('number3') is-invalid @enderror"
            wire:model.defer='number3' autocomplete="off" wire:keydown.enter="save">
        @error('number3')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </td>
    <td style="width:150px">

        <button class="btn btn-lg btn-link text-success" wire:loading>
            <i class="fas fa-circle-notch fa-spin"></i>
        </button>

        <button class="btn btn-lg btn-link text-success" wire:loading.class="d-none" wire:click="save">
            <i class="fas fa-save    "></i>
        </button>

        @if ($nid)
        <a href="javascript:" onclick="sil({{ $n->id }})" class="btn btn-lg  btn-link text-danger"> <i
                class="fas fa-trash    "></i>
        </a>
        @endif
    </td>
</tr>