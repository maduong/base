<?php

use Edutalk\Base\CustomFields\Repositories\Contracts\CustomFieldRepositoryContract;

/**
 * @var \Edutalk\Base\CustomFields\Repositories\CustomFieldRepository $customFieldRepo
 */
$customFieldRepo = app(CustomFieldRepositoryContract::class);

$pages = $customFieldRepo->getWhere([
    'use_for' => \Edutalk\Base\Pages\Models\Page::class,
], ['id'])->pluck('id')->toArray();

$customFieldRepo->updateMultiple($pages, [
    'use_for' => Edutalk_PAGES
]);