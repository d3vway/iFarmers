<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SurveyUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $employee_id; 
    public $farm_name;
    public $number_of_farmer; 
    public $email; 
    public $phone;
    public $adddress; 
    public $product; 
    public $weight; 
    public $price;
    public $action;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($survey, $action)
    {
        $this->id  = $survey->id; 
        $this->employee_id  = $survey->employee_id; 
        $this->farm_name    = $survey->farm_name;
        $this->number_of_farmer = $survey->number_of_farmer;
        $this->email = $survey->email;
        $this->phone = $survey->phone;
        $this->adddress = $survey->adddress; 
        $this->product  = $survey->product; 
        $this->weight   = $survey->weight; 
        $this->price    = $survey->price;
        $this->action   = $action;
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
