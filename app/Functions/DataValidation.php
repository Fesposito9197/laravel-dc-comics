<?php
use Illuminate\Validation\Rule;

function getValidation($_request){
   return $_request->validate([
        'title' => 'required|string|max:200',
        'description'=>'required|string|max:1000',
        'price'=>'required|numeric|decimal:2',
        'series'=>'required|string|max:200',
        'sale_date'=>'required|date',
        'type' => [
            'required',
            Rule::in(['comic-book','graphic-novel']),
        ],
    ]);
};

