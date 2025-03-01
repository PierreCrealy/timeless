<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookServiceRequest;
use App\Http\Requests\UpdateBookServiceRequest;
use App\Models\BookService;

class BookServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookService $bookService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookService $bookService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookServiceRequest $request, BookService $bookService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookService $bookService)
    {
        //
    }
}
