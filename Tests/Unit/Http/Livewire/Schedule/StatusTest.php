<?php

declare(strict_types=1);

namespace Modules\Job\Tests\Unit\Http\Livewire\Schedule;

use Modules\Job\Http\Livewire\Schedule\Status;
use Tests\TestCase;

/**
 * Class StatusTest.
 *
 * @covers \Modules\Job\Http\Livewire\Schedule\Status
 */
final class StatusTest extends TestCase
{
    private Status $status;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->status = new Status();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->status);
    }

    public function testRender(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testArtisan(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetScheduledJobs(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}