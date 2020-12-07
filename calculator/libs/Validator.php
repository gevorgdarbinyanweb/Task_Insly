<?php
/**
 * Validator class
 * @property float $value
 * @property int $tax
 * @property int $instalments
 * @method bool validate()
 * @method bool valueValidate()
 * @method bool taxValidate()
 * @method bool instalmentsValidate()
 */
class Validator
{
    private $value;
    private $tax;
    private $instalments;

    public function __construct(float $v, int $t, int $inst)
    {
        $this->value = $v;
        $this->tax = $t;
        $this->instalments = $inst;
    }

    /**
     * validates value for each property
     *
     * @return boolean
     */
    public function validate() : bool
    {
        $properties = get_object_vars($this);
        foreach($properties as $key => $value){
            $method = $key.'Validate';
            if(method_exists($this,$method)){
                if($this->$method($value) === false){
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * validates value
     *
     * @param float $value
     * @return boolean
     */
    private function valueValidate(float $value) : bool
    {
        return ($value >= 100 && $value <= 100000);
    }

    /**
     * validates tax
     *
     * @param integer $value
     * @return boolean
     */
    private function taxValidate(int $value) : bool
    {
        return ($value >= 0 && $value <= 100);
    }

    /**
     * validates instalments
     *
     * @param integer $value
     * @return boolean
     */
    private function instalmentsValidate(int $value) : bool
    {
        return ($value >= 1 && $value <= 12);
    }

}