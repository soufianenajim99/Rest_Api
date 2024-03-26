<?php

namespace App\Http\Controllers\Api;

use App\Filters\AnnonceFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnnoceCollection;
use App\Http\Resources\AnnoceResource;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(Request $request){
        $filter = new AnnonceFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) == 0){
            return new AnnoceCollection(Annonce::paginate(5));
        }else{
            // dd($queryItems);
            $anns = Annonce::where($queryItems)->paginate(5);
            return new AnnoceCollection($anns->appends($request->query()));
        }
    }
    public function show($id){
        return new AnnoceResource(Annonce::findOrFail($id));
    }
}