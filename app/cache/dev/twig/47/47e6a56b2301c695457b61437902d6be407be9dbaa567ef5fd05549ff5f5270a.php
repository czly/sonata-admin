<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_eab2c2a59323ba2f5851335715cebd55e1a888790686110cca99f95f73e6e34a extends Twig_Template
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
        $__internal_b26f7cdf5d5c8fd17e61cd24198690704e46dafeb6150d3290f6827940a57ff1 = $this->env->getExtension("native_profiler");
        $__internal_b26f7cdf5d5c8fd17e61cd24198690704e46dafeb6150d3290f6827940a57ff1->enter($__internal_b26f7cdf5d5c8fd17e61cd24198690704e46dafeb6150d3290f6827940a57ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b26f7cdf5d5c8fd17e61cd24198690704e46dafeb6150d3290f6827940a57ff1->leave($__internal_b26f7cdf5d5c8fd17e61cd24198690704e46dafeb6150d3290f6827940a57ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
