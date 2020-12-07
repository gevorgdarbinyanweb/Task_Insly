<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    spl_autoload_register(function ($class) {
        include 'libs/' . $class . '.php';
    });
    
    $data = $_POST;
    extract($data);

    $validator = new Validator($value, $taxPercent,$instalments);

    if($validator->validate()){
        $calculator = new Calculator($value, $taxPercent);
        $basePrice = $calculator->setBasePricePercent()->setBasePrice()->getBasePrice();
        $basePricePercent = $calculator->setBasePricePercent()->getBasePricePercent();
        $commission = $calculator->setBasePricePercent()->setBasePrice()->setCommission()->getCommission();
        $tax = $calculator->setBasePricePercent()->setBasePrice()->setTax()->getTax();
        $total = $basePrice + $commission + $tax;
        
        require_once 'public/templates/_price-matrix.php';
    }
}
