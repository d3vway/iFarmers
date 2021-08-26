<?php

namespace App\Observers;

use App\Models\Survey;

class SurveyObserver
{
    /**
     * Handle the Survey "created" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function created(Survey $survey)
    {
        //
    }

    /**
     * Handle the Survey "updated" event.
     *
     * @param  \App\Models\Survey  $survey
     * @return void
     */
    public function updated(Survey $survey)
    {
        //
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
