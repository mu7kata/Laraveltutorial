<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;


class HelloValidator extends Validator
{

  public function ValidateHello($attribute, $value,$parameters)
  {
  return $value % 3 == 0;
  }
}


?>

