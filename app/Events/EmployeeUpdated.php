<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmployeeUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $name;  
    public $age; 
    public $job; 
    public $salary;
    public $action;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($employee, $action)
    {
        $this->id = $employee->id; 
        $this->name = $employee->name; 
        $this->age  = $employee->age;
        $this->job  = $employee->job;
        $this->salary = $employee->salary;
        $this->action = $action;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('my-channel');
    }
}
