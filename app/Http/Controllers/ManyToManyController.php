<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\Customers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ManyToManyController extends Controller
{

    public function get()
    {
        $Customers = Customers::find(7);

    foreach ($Customers->Products as $Customers_product) {

        echo "<h1>Customer name is {$Customers->customer_name}</h1>" ;
        echo "<h1>product id is {$Customers_product->id}</h1>" ;
        echo "<h1>product name is {$Customers_product->product_name}</h1>" ;

        }
        // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
        $Customers = Product::find(4);


    foreach ($Customers->Customers as $Customers_product) {

        echo "<h1>Product name is {$Customers->product_name}</h1>" ;
        echo "<h1>Customer id is {$Customers_product->id}</h1>" ;
        echo "<h1>Customer name is {$Customers_product->customer_name}</h1>" ;

        }

    }


// user pay order 
    public function addProducts()
    {
        $Customers = Customers::find(7);

        $count_sales = DB::table('order')->where('customers_id','=',7)->max('sales_count');

        $newCount = $count_sales + 1 ;

        $Customers->Products()->attach([2,7],['sales_count'=>$newCount]);

        $this->get();
    }
// user remove order

    public function removeProducts()
    {
        $Customers = Customers::find(7);
        $Customers->Products()->detach([5,6,8]);

        $this->get();
    }

    // toggle status of products
    public function toggleProducts()
    {
        $Customers = Customers::find(7);
        $Customers->Products()->toggle([5,6,8]);

        $this->get();
    }
}
