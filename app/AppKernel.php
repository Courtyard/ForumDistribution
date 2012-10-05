<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array_merge(
            $this->getSymfonyBundles(),
            $this->getCourtyardBundles(),
            $this->getDevelopmentBundles(),
            $this->getMyBundles()
        );
    }

    protected function getSymfonyBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
        );
    }

    protected function getCourtyardBundles()
    {
        return array(
            new Courtyard\Bundle\ForumBundle\CourtyardForumBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new WhiteOctober\BreadcrumbsBundle\WhiteOctoberBreadcrumbsBundle(),
            // restbundle
            // restbundle
            // themingbundle
            // messagebundle
        );
    }

    protected function getDevelopmentBundles()
    {
        if (!in_array($this->getEnvironment(), array('dev', 'test'))) {
            return array();
        }

        return array(
            new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(),
            new Sensio\Bundle\DistributionBundle\SensioDistributionBundle(),
            new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle(),
        );
    }

    protected function getMyBundles()
    {
        return array(
            new Acme\UserBundle\AcmeUserBundle(),
        );
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}