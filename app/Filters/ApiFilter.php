<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter  {
  protected $safeParms = [];
  protected $oper = [];

  public function transform(Request $request){
    $eloque =[];
    foreach ($this->safeParms as $prm => $op) {
        $query = $request->query($prm);
        if(!isset($query)){
            continue;
        }
    foreach ($op as $opr) {
       if(isset($query[$opr])){
        $eloque[]= [$prm,$this->oper[$opr],$query[$opr]];
       }
    }
    }

    return $eloque;
  }


}