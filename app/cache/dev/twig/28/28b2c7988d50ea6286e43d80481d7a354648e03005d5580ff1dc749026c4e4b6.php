<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_003bfa206240e88ba223cd346ffe4e12b252012bc856775a544208dc30c725b2 extends Twig_Template
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
        $__internal_575f96f6e446399d83762ff3d9552a6d841f884568f3cee59fcd6f5133f6f405 = $this->env->getExtension("native_profiler");
        $__internal_575f96f6e446399d83762ff3d9552a6d841f884568f3cee59fcd6f5133f6f405->enter($__internal_575f96f6e446399d83762ff3d9552a6d841f884568f3cee59fcd6f5133f6f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_575f96f6e446399d83762ff3d9552a6d841f884568f3cee59fcd6f5133f6f405->leave($__internal_575f96f6e446399d83762ff3d9552a6d841f884568f3cee59fcd6f5133f6f405_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
