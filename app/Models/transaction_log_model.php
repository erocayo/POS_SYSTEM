<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaction_log_model extends Model
{
    public function Get_All_Transaction_Log(){
        return DB::select('SELECT * FROM sale_transaction_log');
    }

public function Add_Transaction_Log($SALE_TRANSACTION_ID, $ACTION_TYPE)
{
    return DB::insert(
        'INSERT INTO sale_transaction_log (SALE_TRANSACTION_ID, ACTION_TYPE, created_at) 
         VALUES (?, ?, NOW())',
        [$SALE_TRANSACTION_ID, $ACTION_TYPE] 
    );
}

}
