<?php

namespace Exceedone\Exment\Services\ViewFilter\Items\UserEqUser;

use Exceedone\Exment\Enums\FilterOption;

class UserNeUser extends UserEqUserBase
{
    public static function getFilterOption()
    {
        return FilterOption::USER_NE_USER;
    }

    protected function getMark(): string
    {
        return '<>';
    }


    protected function isExists(): bool
    {
        return false;
    }
}
