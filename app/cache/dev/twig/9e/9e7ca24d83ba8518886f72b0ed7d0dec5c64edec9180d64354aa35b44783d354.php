<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9f44a41f61324f12b41ff3653718138671a51715d5b8757120c0dd135f0d9ef4 extends Twig_Template
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
        $__internal_aeba06b4149c71a5981e537e783fa85a69f6ba49b4e5f419b7b1601c4404429b = $this->env->getExtension("native_profiler");
        $__internal_aeba06b4149c71a5981e537e783fa85a69f6ba49b4e5f419b7b1601c4404429b->enter($__internal_aeba06b4149c71a5981e537e783fa85a69f6ba49b4e5f419b7b1601c4404429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aeba06b4149c71a5981e537e783fa85a69f6ba49b4e5f419b7b1601c4404429b->leave($__internal_aeba06b4149c71a5981e537e783fa85a69f6ba49b4e5f419b7b1601c4404429b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
