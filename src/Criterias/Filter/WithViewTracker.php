<?php namespace Edutalk\Base\Criterias\Filter;

use Illuminate\Database\Eloquent\Builder;
use Edutalk\Base\Models\EloquentBase;
use Edutalk\Base\Repositories\Contracts\AbstractRepositoryContract;
use Edutalk\Base\Criterias\AbstractCriteria;

class WithViewTracker extends AbstractCriteria
{
    protected $relatedModel;

    public function __construct(EloquentBase $relatedModel)
    {
        $this->relatedModel = $relatedModel;
    }

    /**
     * @param EloquentBase|Builder $model
     * @param AbstractRepositoryContract $repository
     * @return mixed
     */
    public function apply($model, AbstractRepositoryContract $repository)
    {
        return $model
            ->leftJoin('view_trackers', $this->relatedModel->getTable() . '.' . $this->relatedModel->getPrimaryKey(), '=', 'view_trackers.entity_id')
            ->where('view_trackers.entity', '=', get_class($this->relatedModel));
    }
}
