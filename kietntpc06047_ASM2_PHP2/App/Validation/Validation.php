<?php
namespace App\Validation;

use Error;

trait Validation
{
    public $errors = array();
    public function emtyValidation($data)
    {
        return !empty($data) ? true : false;
    }
    public function lengthValidation(int $min, int $max, $data)
    {
        $length = 0;
        if ($this->emtyValidation($data)) {
            $length = strlen($data);
        }
        return ($length >= $min && $length <= $max) ? true : false;
    }
    public function resetErrors()
    {
        $this->errors[] = "";
    }
}


?>