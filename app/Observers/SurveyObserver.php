<?php

namespace App\Observers;

use App\Models\Survey;
use App\HelpTrait\BroadcastHttpPush;
use App\Events\SurveyUpdated;
class SurveyObserver
{
    use BroadcastHttpPush;

    /**
     * Handle the Survey "created" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function created(Survey $survey)
    {
        event(new SurveyUpdated($survey));

        // $broadcastChannel = array(
        //     "channel" => "dashboard", // channel name, ` private - 'means private
        //     "name" => "dashboard", // event name
        //     "data" => array(
        //         "status" => 200, 
        //         "message" => "Survey added!"
        //     )
        // );
        // $this->push($broadcastChannel);
    }

    /**
     * Handle the Survey "updated" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function updated(Survey $survey)
    {
        event(new SurveyUpdated($survey));

        // $broadcastChannel = array(
        //     "channel" => "dashboard", // channel name, ` private - 'means private
        //     "name" => "dashboard", // event name
        //     "data" => array(
        //         "status" => 200, 
        //         "message" => "Survey updated!"
        //     )
        // );
        // $this->push($broadcastChannel);
    }

    /**
     * Handle the Survey "deleted" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function deleted(Survey $survey)
    {
        //
    }

    /**
     * Handle the Survey "restored" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function restored(Survey $survey)
    {
        //
    }

    /**
     * Handle the Survey "force deleted" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function forceDeleted(Survey $survey)
    {
        //
    }
}
