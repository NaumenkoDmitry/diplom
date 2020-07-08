<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\BaseRepository;

/**
 * Class CategoriesRepository
 * @package App\Repositories
 * @version June 15, 2020, 7:05 pm UTC
*/

class CategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'visible'
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
        return Categories::class;
    }
}
