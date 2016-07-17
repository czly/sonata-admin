<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0a7bd40fd5efb8886be6a19484b6b9f43ce9ea96a4aff485d7436141494be09a extends Twig_Template
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
        $__internal_0756437b208b245f33b7fdbb0a1c06d3603b0354c2e6c3f454f2b67c9bbbe56e = $this->env->getExtension("native_profiler");
        $__internal_0756437b208b245f33b7fdbb0a1c06d3603b0354c2e6c3f454f2b67c9bbbe56e->enter($__internal_0756437b208b245f33b7fdbb0a1c06d3603b0354c2e6c3f454f2b67c9bbbe56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0756437b208b245f33b7fdbb0a1c06d3603b0354c2e6c3f454f2b67c9bbbe56e->leave($__internal_0756437b208b245f33b7fdbb0a1c06d3603b0354c2e6c3f454f2b67c9bbbe56e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
