<?php

namespace Exceedone\Exment\Services\ViewFilter\Items\NotNull;

use Exceedone\Exment\Enums\FilterOption;

class NotNull extends NotNullBase
{
    public static function getFilterOption()
    {
        return FilterOption::NOT_NULL;
    }
}
