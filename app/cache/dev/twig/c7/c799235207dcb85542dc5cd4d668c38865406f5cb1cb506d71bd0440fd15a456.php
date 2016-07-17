<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e28c7c4cf6dfa89b3d8f0b32c29e79f1e0d70aa2877c109a65c0a8933e4e2fe3 extends Twig_Template
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
        $__internal_bb4c20b3742972e8e9b9b3e44b84f61311f3bb39e624feb2a17c754c9075281e = $this->env->getExtension("native_profiler");
        $__internal_bb4c20b3742972e8e9b9b3e44b84f61311f3bb39e624feb2a17c754c9075281e->enter($__internal_bb4c20b3742972e8e9b9b3e44b84f61311f3bb39e624feb2a17c754c9075281e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bb4c20b3742972e8e9b9b3e44b84f61311f3bb39e624feb2a17c754c9075281e->leave($__internal_bb4c20b3742972e8e9b9b3e44b84f61311f3bb39e624feb2a17c754c9075281e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
