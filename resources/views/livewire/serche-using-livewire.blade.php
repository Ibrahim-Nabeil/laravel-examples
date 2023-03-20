<div>
    <input type="search" wire:keydown="search" wire:model="inputeValue" name="" id="">
    <table id="result">
        @if (empty($returnValue))
            <h6>................</h6>
        @else
            @if (count($returnValue) == 0)
                <h6 class="">No Result found</h6>
            @endif

            @foreach ($returnValue as $item)
                <tr>
                    <td style="color:rgb(153, 51, 68)">
                        {{ $item->title }}
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
</div>
