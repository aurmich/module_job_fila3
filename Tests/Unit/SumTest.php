<?php

declare(strict_types=1);
test('sum', function () {
    $result = sum(1, 2);

    expect($result)->toBe(3);
});
