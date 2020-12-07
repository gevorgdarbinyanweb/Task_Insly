<?php
/**
 * Calculator class
 * 
 * @property float $value
 * @property float $base_price
 * @property integer $base_price_percent
 * @property integer $commission
 * @property float $tax_percent
 * @property float $tax
 * @method mixed setBasePrice()
 * @method float getBasePrice()
 * @method mixed setBasePricePercent()
 * @method int getBasePricePercent()
 * @method mixed setCommission()
 * @method int getCommission()
 * @method mixed setTax()
 * @method float getTax()
 */
class Calculator
{
    private $value;
    private $base_price;
    private $base_price_percent;
    private $commission;
    private $tax_percent;
    private $tax;

    public function __construct(float $value, float $taxPercent)
    {
        $this->value = $value;
        $this->tax_percent = $taxPercent;
    }

    /**
     * sets base price value
     *
     * @return Calculator object
     */
    public function setBasePrice() : Calculator
    {
        $this->base_price = $this->value * $this->base_price_percent / 100;
        return $this;
    }

    /**
     * gets base price
     *
     * @return float
     */
    public function getBasePrice() : float
    {
        return $this->base_price;
    }

    /**
     * sets base price percent value
     *
     * @return Calculator object
     */
    public function setBasePricePercent() : Calculator
    {
        $dateTime = new \DateTime(date('Y-m-d H:i:s'));
        $day = $dateTime->format('l');
        $hour = $dateTime->format('H');
        //$day = 'Friday';
        //$hour = '17';
        $this->base_price_percent = ($day === 'Friday' && ($hour >= 15 && $hour <= 20)) ? 13 : 11;
        return $this;
    } 

    /**
     * gets base price percent value
     *
     * @return integer
     */
    public function getBasePricePercent() : int
    {
        return $this->base_price_percent;
    } 

    /**
     * sets commission value
     *
     * @return Calculator object
     */
    public function setCommission() : Calculator
    {
        $this->commission = $this->base_price * 17 / 100;
        return $this;
    }

    /**
     * gets commission value
     *
     * @return integer
     */
    public function getCommission() : int
    {
        return $this->commission;
    }

    /**
     * sets tax value
     *
     * @return Calculator object
     */
    public function setTax() : Calculator
    {
        $this->tax = $this->base_price * $this->tax_percent / 100;
        return $this;
    }

    /**
     * gets tax value
     *
     * @return float
     */
    public function getTax() : float
    {
        return $this->tax;
    }
}
?>