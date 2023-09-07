<?php

Interface PaymentMethod{
    public function acceptPayment();
}
/* Declare checkout class  */
class CheckOut {
    public function begin(PaymentMethod $payment){
        return $payment->acceptPayment();
    }
}


/*Create Cash payment class*/

class CashPayment implements PaymentMethod{
    public function acceptPayment()
    {
       return 'Payment method is cash';
    }
}

/* 
->After 2 years letter we though we include Bkash Payment method 
-> BUT no change in avobe class*/
class BkashPayment implements PaymentMethod{
    public function acceptPayment(){
        return 'Payment method is Bkash'; 
    }
}

/* I will do cash Payment*/
echo (new Checkout)->begin(new BkashPayment());
echo '<br>';
echo '<br>';
echo (new Checkout)->begin(new CashPayment());