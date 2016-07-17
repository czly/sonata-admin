<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_4d7fd5485d94afffeeefbb6730f650d2331416aae01e592db391cc8e34506640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_819b2622aac0d0015be8c310d5653f3c0b7db9a3e2af102ed19f48518b4a5ebf = $this->env->getExtension("native_profiler");
        $__internal_819b2622aac0d0015be8c310d5653f3c0b7db9a3e2af102ed19f48518b4a5ebf->enter($__internal_819b2622aac0d0015be8c310d5653f3c0b7db9a3e2af102ed19f48518b4a5ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_819b2622aac0d0015be8c310d5653f3c0b7db9a3e2af102ed19f48518b4a5ebf->leave($__internal_819b2622aac0d0015be8c310d5653f3c0b7db9a3e2af102ed19f48518b4a5ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
