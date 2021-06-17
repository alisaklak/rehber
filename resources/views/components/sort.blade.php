<a href="#" class="pl-2 py-1 text-dark d-block text-decoration-none"
    wire:click.prevent="sortBy('{{$field}}')">{{$label}}
    @if($sortBy != $field)
    @elseif ($sortDirection=='asc')
    <i class="fas fa-sort-down"></i>
    @else
    <i class="fas fa-sort-up"></i>
    @endif
</a>