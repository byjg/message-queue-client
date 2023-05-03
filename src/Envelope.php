<?php

namespace ByJG\MessageQueueClient;

use ByJG\MessageQueueClient\Connector\Pipe;

class Envelope
{
    /** @var Message */
    protected $message;

    /** @var Pipe */
    protected $pipe;

    public function __construct(Pipe $pipe, Message $message)
    {
        $this->message = $message;
        $this->pipe = $pipe;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getPipe(): Pipe
    {
        return $this->pipe;
    }
}
