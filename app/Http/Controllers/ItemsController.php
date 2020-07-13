<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Repositories\Items\ItemsRepositoryInterface;

class ItemsController extends Controller
{
     protected $itemsRepository;
     
    public function __construct(ItemsRepositoryInterface $itemsRepository)
    {
      $this->itemsRepository = $itemsRepository;
    }

    public function index(){
      $response = $this->itemsRepository->all();
      return response()->json($response['data'],$response['statusCode']);
    }

    public function show(int $id){
        $response = $this->itemsRepository->show($id);
        return response()->json($response['data'],$response['statusCode']);
    }

    public function delete(int $id){
      $response = $this->itemsRepository->delete($id);
      return response()->json($response['data'],$response['statusCode']);
    }

    public function store(ItemRequest $request){
       $response = $this->itemsRepository->store($request);
       return response()->json($response['data'],$response['statusCode']);
    }
    
    public function update(ItemRequest $request,int $id){
      $response = $this->itemsRepository->update($request,$id);
      return response()->json($response['data'],$response['statusCode']);
   }


}
