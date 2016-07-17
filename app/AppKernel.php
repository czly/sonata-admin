<?php
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;



class AppKernel extends Kernel
{
    
    public function registerBundles()
    {


        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),

            new Knp\Bundle\MenuBundle\KnpMenuBundle(),


            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),


            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),

            new Sonata\FormatterBundle\SonataFormatterBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),


            new Sonata\ClassificationBundle\SonataClassificationBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\IntlBundle\SonataIntlBundle,
            new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            

        );


        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    /**
     * Register current application bundle
     *
     * @param array $bundles
     */


    /**
     * Register bundles used for prestaconcept administration
     *
     * @param array $bundles
     */



    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }


}
