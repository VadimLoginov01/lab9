<?php

namespace Loginov;

Class Equation
{
    public function li_solve($a, $b)
    {

        if ($a == 0) {
            throw new LoginovException("Ошибка: уравнения не существует.");
        }
        MyLog::log("Определено, что это линейное уравнение");
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>