<?php


// class Payment{
    
//     public  function paywithCard(){
//         echo "Pay with card<br>";
//     }
//     public  function paywithCash(){
//         echo "Pay with Cash<br>";
//     }

// }

// class Pay{
//     public $type="card";
//     public function __construct(){
//         $payment=New Payment();

//         /* Check payment method type  */
//         if ($type=="card") {
//             $payment->paywithCard();
//         }else{
//             $payment->paywithCash();
//         }
//     }
// }


// $pay=new Pay();
class Payment {
   
}

class Pay {
    public $type = "cash";

    public function __construct() {
    
        if ($this->type == "card") {
            $this->payWithCard();
        } else {
            $this->payWithCash();
        }
    }


    public function payWithCard() {
        echo "Pay with Card<br>";
    }

    public function payWithCash() {
        echo "Pay with Cash<br>";
    }
}

$pay = new Pay();
