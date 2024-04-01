<?php
namespace UniversignRest\ClientBundle;

use UniversignRest\ClientBundle\DependencyInjection\UniversignRestClientExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UniversignRestClientBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new UniversignRestClientExtension();
        }
        return $this->extension;
    }
}
