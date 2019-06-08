<?php
/**
 * Created by PhpStorm.
 * User: anakin
 * Date: 04/06/19
 * Time: 13:30
 */

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;


class ProductsRepositories
{

    public  $dataAtual;

    public function  __construct()
    {
        $this->dataAtual = date("Y-d-m");
    }

    public static function productsAll(){
        return DB::select('select * from products');

    }

    public static function productOne($id){
        return DB::select('select * from products where id = ?', $id);

    }

    public static function productAmout($amout = 100){
        return DB::select('SELECT * FROM stocks as S inner join products as P ON S.product_id = P.id where S.amount >=  ?', $amout);

    }

    public static function productAmoutStore($store = 60){
        return DB::select('SELECT 
                                        *
                                    FROM
                                        stocks AS S
                                            INNER JOIN
                                        products AS P ON P.id = S.product_id
                                        Inner join
                                        stores as ST on ST.id = S.store_id
                                    WHERE
                                        ST.id = ? and S.amount >= 1', $store);
    }

    public static function productStoreProduct($product = 7993){
        return DB::select('SELECT 
                                        *
                                    FROM
                                        orders AS O
                                            INNER JOIN
                                        order_items AS OT ON OT.order_id = O.id
                                            INNER JOIN 
                                        products as P ON P.id = OT.product_id
                                        where P.id = ?
                                        ', $product);
    }

    public static function productPayments(){
        return DB::select('SELECT 
                                        *
                                    FROM
                                        orders AS O
                                            inner join
                                            payment_methods as PM ON PM.id = O.payment_methods_id
                                        ');
    }
    public static function compareCapa(){
        return DB::select('SELECT 
                                        O.id,O.amount_total, OI.amout_item
                                    FROM
                                        orders as O
                                        (select id, sum(amout_item) total_sum from order_items group by id) OI ,
                                    where
                                    O.id = OI.order_id
                                    and total_sum > O.amount_total');
    }





}
