<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d9e175144687f8cb7b9a589f8e5c2bcd993c3da7faeecb325373f80681b9630b extends Twig_Template
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
        $__internal_2f69c98f69d48d75797c67ca74a9f073167f1d21e0d5e38118bbcc8a61f201ab = $this->env->getExtension("native_profiler");
        $__internal_2f69c98f69d48d75797c67ca74a9f073167f1d21e0d5e38118bbcc8a61f201ab->enter($__internal_2f69c98f69d48d75797c67ca74a9f073167f1d21e0d5e38118bbcc8a61f201ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2f69c98f69d48d75797c67ca74a9f073167f1d21e0d5e38118bbcc8a61f201ab->leave($__internal_2f69c98f69d48d75797c67ca74a9f073167f1d21e0d5e38118bbcc8a61f201ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
