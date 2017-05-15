<?php namespace Edutalk\Base\Repositories;

use Edutalk\Base\Repositories\Eloquent\EloquentBaseRepositoryCacheDecorator;

use Edutalk\Base\Models\Contracts\ViewTrackerModelContract;
use Edutalk\Base\Repositories\Contracts\ViewTrackerRepositoryContract;

class ViewTrackerRepositoryCacheDecorator extends EloquentBaseRepositoryCacheDecorator  implements ViewTrackerRepositoryContract
{
    /**
     * @param ViewTrackerModelContract $viewTracker
     * @return array
     */
    public function increase(ViewTrackerModelContract $viewTracker)
    {
        return $this->afterUpdate(__FUNCTION__, func_get_args());
    }
}
