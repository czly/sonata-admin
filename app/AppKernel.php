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
            

        );
        $this->registerAdminBundles($bundles);
        $this->registerApplicationBundles($bundles);

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
    protected function registerApplicationBundles(array &$bundles)
    {
        // add your bundle here
    }

    /**
     * Register bundles used for prestaconcept administration
     *
     * @param array $bundles
     */

    protected function registerAdminBundles(array &$bundles)
    {

        // Sonata
        $bundles[] = new Sonata\CoreBundle\SonataCoreBundle();
        $bundles[] = new Sonata\BlockBundle\SonataBlockBundle();
        $bundles[] = new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle();
        $bundles[] = new Sonata\AdminBundle\SonataAdminBundle();
/*        $bundles[] = new CoopTilleuls\Bundle\CKEditorSonataMediaBundle\CoopTilleulsCKEditorSonataMediaBundle();
        $bundles[] = new Sonata\FormatterBundle\SonataFormatterBundle();
        $bundles[] = new Sonata\MediaBundle\SonataMediaBundle();
        $bundles[] = new Sonata\IntlBundle\SonataIntlBundle();
        $bundles[] = new Sonata\ClassificationBundle\SonataClassificationBundle();
        $bundles[] = new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle();*/



    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
