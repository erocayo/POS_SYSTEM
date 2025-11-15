<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product_model extends Model
{
    public function Get_All_Product_Entries(){
        return DB::select('SELECT * FROM product');
    }

    public function Get_Product_Categories() {
    return DB::select('SELECT PRODUCT_CATEGORY_ID, CATEGORY_NAME FROM product_category');
    }


     public function Get_Specific_Product_Entry($PRODUCT_ID){
        return DB::select('SELECT * FROM product WHERE PRODUCT_ID = ?', [$PRODUCT_ID]);
    }

    public function Set_Update_Product_Entry($PRODUCT_ID, $PRODUCT_CATEGORY_ID, $PRODUCT_NAME, $DESCRIPTION, $PRICE, $STOCK_LEVEL){
    return DB::update(
        'UPDATE product 
        SET PRODUCT_CATEGORY_ID = ?, PRODUCT_NAME = ?, DESCRIPTION = ?, PRICE = ?, STOCK_LEVEL = ?
                WHERE PRODUCT_ID = ?',
        [$PRODUCT_CATEGORY_ID, $PRODUCT_NAME, $DESCRIPTION, $PRICE, $STOCK_LEVEL, $PRODUCT_ID]
    );
}

    public function Set_Destroy_Product_Entry($PRODUCT_ID){
        return DB::delete('DELETE FROM product WHERE PRODUCT_ID =? ', [$PRODUCT_ID]);
    }

    public function Update_Stock($PRODUCT_ID, $QUANTITY)
{
    return DB::update(
        'UPDATE product SET STOCK_LEVEL = STOCK_LEVEL - ? WHERE PRODUCT_ID = ?',
        [$QUANTITY, $PRODUCT_ID]
    );
}
}
