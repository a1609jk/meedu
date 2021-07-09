<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) 杭州白书科技有限公司
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class UserInviteBalanceWithdrawHandledEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $ids;
    public $status;

    /**
     * UserInviteBalanceWithdrawHandledEvent constructor.
     * @param array $ids
     */
    public function __construct(array $ids, $status)
    {
        $this->ids = $ids;
        $this->status = $status;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     *
     * @codeCoverageIgnore
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
