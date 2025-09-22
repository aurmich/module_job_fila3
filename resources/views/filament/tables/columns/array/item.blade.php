<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 1b7d3cd (.)
@php
    /*
    try{
        $val=@unserialize($value);
    }catch(\TypeError $e){
        $val=$value;
    }
    $value=$val;
    */
@endphp

<li><b>{{ $key }}</b>:
    @if (is_iterable($value))
        <ul>
            @foreach ($value as $k=>$v)
                @include('job::filament.tables.columns.array.item',['key'=>$k,'value'=>$v])
            @endforeach
        </ul>
    @else
        {{ $value }}
    @endif
<<<<<<< HEAD
</li>
=======
</li>
>>>>>>> 1b7d3cd (.)
