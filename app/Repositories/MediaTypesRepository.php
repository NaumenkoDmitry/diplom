<?php

namespace App\Repositories;

use App\Models\MediaTypes;
use App\Repositories\BaseRepository;

/**
 * Class MediaTypesRepository
 * @package App\Repositories
 * @version June 15, 2020, 7:12 pm UTC
*/

class MediaTypesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MediaTypes::class;
    }
}
