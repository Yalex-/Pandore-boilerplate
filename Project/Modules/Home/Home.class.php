<?php

namespace Project\Modules\Home;

use Kernel\Core as Core;

/**
 * @brief The Home module class.
 */
class Home extends Core\Module
{
    /**
     * @brief The default action.
     */
    public function defaultAction()
    {
        $this->layout->description = 'A small PHP Framework for large projects.';
    }
}