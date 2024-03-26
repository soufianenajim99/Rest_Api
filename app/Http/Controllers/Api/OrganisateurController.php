<?php

namespace App\Http\Controllers\Api;

use App\Filters\OrganisateurFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrganisateurCollection;
use App\Http\Resources\OrganisateurResource;
use App\Models\Organisateur;
use Illuminate\Http\Request;

class OrganisateurController extends Controller
{

    
    public function index(Request $request){
        $filter = new OrganisateurFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) == 0){
          
            return new OrganisateurCollection(Organisateur::paginate(10));
        }else{
            return new OrganisateurCollection(Organisateur::where($queryItems)->paginate(5));
        }
    }
    public function show($id){
        $orga= Organisateur::findOrFail($id);
        return new OrganisateurResource($orga);
    }

}