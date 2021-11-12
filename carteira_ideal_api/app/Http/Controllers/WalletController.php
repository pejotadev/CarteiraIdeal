<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Carbon\Carbon;
class WalletController extends BaseController
{
    public function summary()
    {
        return response(['status'=>'success', 'data'=> [
            'name' => 'Name String',
            'to_receive' => 0.00,
            'in_debt' => 0.00,
            'total_available' => 0.00,
            'score' => 0
        ]], 200);
    }

    public function statement($id)
    {
        $date = Carbon::now();
        return response(['status'=>'success', 'data'=> [
            [
                'id' => 0, 
                'wallet_id', 
                'owners' => [
                    [
                        'id' => 0,
                        'name' => 'Joe Doe',
                        'in_debt' => 0.00,
                        'amount_paid' => 0.00
                    ],
                    [
                        'id' => 0,
                        'name' => 'Herp Derp',
                        'in_debt' => 0.00,
                        'amount_paid' => 0.00
                    ]
                ], 
                'type' => '', 
                'name' => '', 
                'description' => '', 
                'value' => 0, 
                'date' => $date
            ]
        ]], 200);
        
    }

    public function getBill($id)
    {
        $date = Carbon::now();
        return response(['status'=>'success', 'data'=> [
            'id' => 0, 
            'wallet_id', 
            'owners' => [
                [
                    'id' => 0,
                    'name' => 'Joe Doe',
                    'in_debt' => 0.00,
                    'amount_paid' => 0.00
                ],
                [
                    'id' => 0,
                    'name' => 'Herp Derp',
                    'in_debt' => 0.00,
                    'amount_paid' => 0.00
                ]
            ], 
            'type' => '', 
            'name' => '', 
            'description' => '', 
            'value' => 0, 
            'date' => $date
        ]], 200);
    
    }
}
