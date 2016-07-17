<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6c279ab74eaffd84a62262697765bb52dc3f68bc8b4fbf373a948b1700827e36 extends Twig_Template
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
        $__internal_3cefd8077758ecb7b9a8f430c999578755cad22673381281f5e49d4e71972b53 = $this->env->getExtension("native_profiler");
        $__internal_3cefd8077758ecb7b9a8f430c999578755cad22673381281f5e49d4e71972b53->enter($__internal_3cefd8077758ecb7b9a8f430c999578755cad22673381281f5e49d4e71972b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3cefd8077758ecb7b9a8f430c999578755cad22673381281f5e49d4e71972b53->leave($__internal_3cefd8077758ecb7b9a8f430c999578755cad22673381281f5e49d4e71972b53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
