<?php namespace Edutalk\Base\Repositories;

use Edutalk\Base\Caching\Services\Traits\Cacheable;
use Edutalk\Base\Models\Contracts\ViewTrackerModelContract;
use Edutalk\Base\Caching\Services\Contracts\CacheableContract;
use Edutalk\Base\Models\ViewTracker;
use Edutalk\Base\Repositories\Contracts\ViewTrackerRepositoryContract;
use Edutalk\Base\Repositories\Eloquent\EloquentBaseRepository;

class ViewTrackerRepository extends EloquentBaseRepository implements ViewTrackerRepositoryContract, CacheableContract
{
    use Cacheable;

    /**
     * @param ViewTracker $viewTracker
     * @return int
     */
    public function increase(ViewTrackerModelContract $viewTracker)
    {
        return $this->update($viewTracker, [
            'count' => $viewTracker->count + 1
        ]);
    }
}
