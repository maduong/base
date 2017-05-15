<?php namespace Edutalk\Base\Criterias\Contracts;

use Edutalk\Base\Models\Contracts\BaseModelContract;
use Edutalk\Base\Repositories\AbstractBaseRepository;
use Edutalk\Base\Repositories\Contracts\AbstractRepositoryContract;

interface CriteriaContract
{
    /**
     * @param BaseModelContract $model
     * @param AbstractBaseRepository $repository
     * @return mixed
     */
    public function apply($model, AbstractRepositoryContract $repository);
}
