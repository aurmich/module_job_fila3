<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 1b7d3cd (.)
<div>

    @php
    /*
    dd([
        'getstate'=>$getState(),
        '$getRecord()'=>$getRecord(),
        'get_defined_vars()'=>get_defined_vars(),
    ]);
    */
    @endphp
    <ul>
    @foreach ($getState() as $key=>$value)
        @include('job::filament.tables.columns.array.item',['key'=>$key,'value'=>$value])
    @endforeach
    </ul>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 1b7d3cd (.)
