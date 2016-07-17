<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ff74283545fa0ecc5ead12b4128e2b7a5f66be83041aad54d7911ce199cf78ba extends Twig_Template
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
        $__internal_9cd6af88bae85fb6e5350d02b604a791593773e11d0d235b90bb3b733b4cae15 = $this->env->getExtension("native_profiler");
        $__internal_9cd6af88bae85fb6e5350d02b604a791593773e11d0d235b90bb3b733b4cae15->enter($__internal_9cd6af88bae85fb6e5350d02b604a791593773e11d0d235b90bb3b733b4cae15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9cd6af88bae85fb6e5350d02b604a791593773e11d0d235b90bb3b733b4cae15->leave($__internal_9cd6af88bae85fb6e5350d02b604a791593773e11d0d235b90bb3b733b4cae15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
