<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale_Transaction_Model extends Model
{
    public function Update_Total_Price($SALE_TRANSACTION_ID)
{
    // Calculate new total from all related details
    $total = DB::table('sale_transaction_details')
        ->where('SALE_TRANSACTION_ID', $SALE_TRANSACTION_ID)
        ->sum('TOTAL');

    // Update the total in the main sale_transaction table
    DB::update(
        'UPDATE sale_transaction SET TOTAL_PRICE = ? WHERE SALE_TRANSACTION_ID = ?',
        [$total, $SALE_TRANSACTION_ID]
    );
}

    public function Get_All_Sale_Transaction()
    {
        return DB::select('SELECT * FROM sale_transaction');
    }

public function Get_Cashiers(){
    return DB::select('SELECT USER_ID, USERNAME FROM user WHERE ROLE_ID = ?', [2]);
}

public function Set_New_Sale_Transaction($USER_ID, $TOTAL_PRICE, $STATUS)
{
    DB::insert(
        'INSERT INTO sale_transaction (USER_ID, TOTAL_PRICE, STATUS) VALUES (?, ?, ?)',
        [$USER_ID, $TOTAL_PRICE, $STATUS]
    );

    return DB::getPdo()->lastInsertId();
}

public function Get_Specific_Sale_Transaction($SALE_TRANSACTION_ID)
{
    return DB::select('SELECT * FROM sale_transaction WHERE SALE_TRANSACTION_ID = ?', [$SALE_TRANSACTION_ID]);
}

public function Update_Transaction_Status($SALE_TRANSACTION_ID, $STATUS)
{
    return DB::update(
        'UPDATE sale_transaction SET STATUS = ? WHERE SALE_TRANSACTION_ID = ?',
        [$STATUS, $SALE_TRANSACTION_ID]
    );
}
}
