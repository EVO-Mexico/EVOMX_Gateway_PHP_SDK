<?php
use PHPUnit\Framework\TestCase;
use Payments\Payments;

class IpgBaseTest extends TestCase
{
    private $enableLog = false;
    

    protected $payments = null;
    
    protected static $MERCHANT_ID = "167885";
    protected static $PASSWORD = "56789";
    protected static $BRAND_ID = "1678850000";
	protected static $AMOUNT = "12.00";
	protected static $COUNTRY = "PL";
	protected static $CURRENCY = "PLN";
	protected static $CVV = "888";
	protected static $PAYMENT_SOLUTION_ID = "500";
	protected static $FAKE_HOST = "http://www.fake.com";
	protected static $YEAR = "2028";
	
	protected static $CARD_NUMBER="5413330300002004";

//     protected const MERCHANT_ID = "5000";
//     protected const PASSWORD = "5678";
//     protected const BRAND_ID = "";

    public function setUp(){
       $this->payments = (new Payments())->testEnvironment(array(
           "merchantId" => self::$MERCHANT_ID,
           "password" => self::$PASSWORD,
        ));
    }
    
    protected function logResult($result){
        
        if(! $this->enableLog)
            return;
        
        echo "\n",  PHP_EOL;
        echo "*********************************************************************************" ,  PHP_EOL;       
        var_dump($result);
    }
    
    protected  function getCardTokenHelper()
    {
        
        $tokenize = $this->payments->tokenize();
        $tokenize->allowOriginUrl(self::$FAKE_HOST)->
        brandId(self::$BRAND_ID)->
        number(self::$CARD_NUMBER)->
        nameOnCard("John Doe")->
        expiryMonth("12")->
        expiryYear(self::$YEAR);
        $result = $tokenize->execute();
        $this->logResult($result);
        
        return $result;
    }
    
    /**
     * @return boolean
     */
    public function getEnableLog()
    {
        return $this->enableLog;
    }
    
    /**
     * @param boolean $enableLog
     */
    public function setEnableLog($enableLog)
    {
        $this->enableLog = $enableLog;
    }

}
?>