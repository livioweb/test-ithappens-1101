<?php
/**
 * Created by PhpStorm.
 * User: anakin
 * Date: 04/06/19
 * Time: 13:30
 */

namespace App\Http\Repositories;



class DashboardRepositories
{

    public  $dataAtual;

    public function  __construct()
    {
        $this->dataAtual = date("Y-d-m");
    }




}
