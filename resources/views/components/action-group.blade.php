<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 1b7d3cd (.)
@php
    $actions = $getActions();
@endphp
<div class="grid grid-cols-2 gap-1" style="width: max-content;">
    @foreach ($actions as $action)
        @if (!$action->isHidden())
            {{ $action }}
        @endif
    @endforeach
</div>
