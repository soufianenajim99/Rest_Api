<?php

namespace App\Filters;

use Illuminate\Http\Request;

class AnnonceFilter extends ApiFilter  {
  protected $safeParms = [
    'titre'=>['eq'],
    'description' =>['eq'],
    'localisation'  =>['eq'],
    'date' =>['eq','gt','lt'],
    'comps'  =>['eq'],
  ];
  protected $oper = [
    'eq'=>'=',
    'lt'=>'<',
    'gt'=>'>'
  ];



}