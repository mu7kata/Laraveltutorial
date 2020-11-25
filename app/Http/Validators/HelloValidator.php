<?php
namespace App\Validators;
use Illuminate\Validation\Validator;

class HelloValodator extends Validator
{

  public function ValidateHello($attribute, $value,$parameters)
  {
  return $value % 2 == 0;
  }
}

?>