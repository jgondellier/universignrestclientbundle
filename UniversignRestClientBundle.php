<?php

use Universign\Rest\ClientBundle\DependencyInjection\UniversignClientExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UniversignRestClientBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new UniversignClientExtension();
        }
        return $this->extension;
    }
}