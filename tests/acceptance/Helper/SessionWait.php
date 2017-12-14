<?php                                                                                                                                           
namespace PagarMe\Magento\Test\Helper;

trait SessionWait
{
    public function waitForElement ($cssElement, $wait = 10000 )
    {
        $element = $this->session->getPage()->find( 'css', $cssElement);
        for ($i = 0; $i < (int)($wait/1000); $i++)
        {
            try{
                if ($element->isVisible()) {
                    return true;
                }
            } catch(Exception $e){
            
            }
            sleep(1);
        }
        throw new \Exception(printf('Element %s not found.', $cssElement));
    }
}

