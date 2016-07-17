<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e16f524b7bef23b39d0cbd3ba4ff1e338317ccaf676af66bed5ef53e0e36444e extends Twig_Template
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
        $__internal_6c18013bd0375ceaaa368e49adff2f86cc17f4d831cdf22307308623a9993543 = $this->env->getExtension("native_profiler");
        $__internal_6c18013bd0375ceaaa368e49adff2f86cc17f4d831cdf22307308623a9993543->enter($__internal_6c18013bd0375ceaaa368e49adff2f86cc17f4d831cdf22307308623a9993543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6c18013bd0375ceaaa368e49adff2f86cc17f4d831cdf22307308623a9993543->leave($__internal_6c18013bd0375ceaaa368e49adff2f86cc17f4d831cdf22307308623a9993543_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
