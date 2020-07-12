<?php

namespace App\Repositories;

use App\Models\Feedback;
use App\Repositories\BaseRepository;

/**
 * Class FeedbackRepository
 * @package App\Repositories
 * @version July 10, 2020, 7:38 pm UTC
*/

class FeedbackRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'message',
        'name',
        'email',
        'text',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }
    public function feedbackk()
    {
//       return $this->allQuery();
    }
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Feedback::class;
    }

    public function getUnProcessed(){
        return  Feedback::where("status","=", 0)->get();
    }
}
