<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0b33d39dc4635cc97128c0b776eda1471369352bb1ac1138ab4711a3a1f85905 extends Twig_Template
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
        $__internal_ebc019f09ef1d0f2d5966cfc86f0f6e0a51b6af6ce622b898b50ad83b0c2b967 = $this->env->getExtension("native_profiler");
        $__internal_ebc019f09ef1d0f2d5966cfc86f0f6e0a51b6af6ce622b898b50ad83b0c2b967->enter($__internal_ebc019f09ef1d0f2d5966cfc86f0f6e0a51b6af6ce622b898b50ad83b0c2b967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ebc019f09ef1d0f2d5966cfc86f0f6e0a51b6af6ce622b898b50ad83b0c2b967->leave($__internal_ebc019f09ef1d0f2d5966cfc86f0f6e0a51b6af6ce622b898b50ad83b0c2b967_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
