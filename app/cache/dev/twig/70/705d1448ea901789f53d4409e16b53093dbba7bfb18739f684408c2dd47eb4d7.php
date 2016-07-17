<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d11fd7914a9c00a6e5b82372aabfaffd57727c3e4be307249435ec16d185dbbb extends Twig_Template
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
        $__internal_6ceffe741e2f3d309fffb7f221a9d1a823c01d21ea71f7ae4ae9b9841ff8f47e = $this->env->getExtension("native_profiler");
        $__internal_6ceffe741e2f3d309fffb7f221a9d1a823c01d21ea71f7ae4ae9b9841ff8f47e->enter($__internal_6ceffe741e2f3d309fffb7f221a9d1a823c01d21ea71f7ae4ae9b9841ff8f47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6ceffe741e2f3d309fffb7f221a9d1a823c01d21ea71f7ae4ae9b9841ff8f47e->leave($__internal_6ceffe741e2f3d309fffb7f221a9d1a823c01d21ea71f7ae4ae9b9841ff8f47e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
