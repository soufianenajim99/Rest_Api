<?php

namespace App\Filters;

use Illuminate\Http\Request;

class OrganisateurFilter extends ApiFilter  {
  protected $safeParms = [
    'username'=>['eq'],
    'email' =>['eq'],
  ];
  protected $oper = [
    'eq'=>'=',
    'lt'=>'<',
    'gt'=>'>'
  ];

  


}