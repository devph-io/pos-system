<?php

namespace App\Http\Controllers;

use App\Transactions;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Repositories\Transaction\TransactionRepositoryInterface;

class TransactionsController extends Controller
{

    protected $TransactionRepository;

    public function __construct(TransactionRepositoryInterface $TransactionRepository)
    {
      $this->TransactionRepository = $TransactionRepository;    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->TransactionRepository->all();
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        $response = $this->TransactionRepository->create($request);
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(Transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request,int $id)
    {
        $response = $this->TransactionRepository->update($request,$id);
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $response = $this->TransactionRepository->delete($id);
        return response()->json($response['data'],$response['statusCode']);
    }
}
