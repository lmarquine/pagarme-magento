<?php                                                                                                                                           
namespace PagarMe\Magento\Test\Helper;

trait SessionWait
{
    public function hasDisplayNone($cssElement)
    {
        return $this->session->evaluateScript(
            "return document.querySelector('{$cssElement}').style.display != 'none'"
        );
    }

    public function spin($lambda, $wait = 60000)
    {
        for ($i = 0; $i < 60; $i++) {
            try {
                if ($lambda($this)) {
                    return true;
                }
            } catch(\Exception $e) {
            }

            sleep(1);
        }

        throw new \Exception('Element not found.');
    }

    public function waitForElement($cssElement, $wait = 60000)
    {
        $element = $this->session->getPage()->find('css', $cssElement);

        $this->spin(function() use ($element) {
            return $element->isVisible();
        }, $wait);
    }
}

