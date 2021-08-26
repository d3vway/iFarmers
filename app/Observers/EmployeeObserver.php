<?php

namespace App\Observers;

use App\Models\Employee;
use App\HelpTrait\BroadcastHttpPush;
class EmployeeObserver
{
    use BroadcastHttpPush;

    /**
     * Handle the Employee "created" event.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function created(Employee $employee)
    {
        $broadcastChannel = array(
            "channel" => "dashboard", // channel name, ` private - 'means private
            "name" => "dashboard", // event name
            "data" => array(
                "status" => 200, 
                "message" => "Employee created!"
            )
        );
        $this->push($broadcastChannel);
    }

    /**
     * Handle the Employee "updated" event.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function updated(Employee $employee)
    {
        $broadcastChannel = array(
            "channel" => "dashboard", // channel name, ` private - 'means private
            "name" => "dashboard", // event name
            "data" => array(
                "status" => 200, 
                "message" => "Survey updated!"
            )
        );
        $this->push($broadcastChannel);
    }

    /**
     * Handle the Employee "deleted" event.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function deleted(Employee $employee)
    {
        // die("deleted");
    }

    /**
     * Handle the Employee "restored" event.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function restored(Employee $employee)
    {
        //
    }

    /**
     * Handle the Employee "force deleted" event.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function forceDeleted(Employee $employee)
    {
        //
    }
}
