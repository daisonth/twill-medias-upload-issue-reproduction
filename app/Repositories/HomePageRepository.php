<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\HomePage;

class HomePageRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(HomePage $model)
    {
        $this->model = $model;
    }
}
