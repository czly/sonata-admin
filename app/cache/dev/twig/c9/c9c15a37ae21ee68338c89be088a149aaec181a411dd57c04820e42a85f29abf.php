<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f89cf8d3e1ff393bf6643ed2d044efe835c94d9cc293cf5fec795caf8b3f3572 extends Twig_Template
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
        $__internal_f275fce2df0cb08dd9e68eb4f7b919e5965aa38813c4e50158a9da490ed032db = $this->env->getExtension("native_profiler");
        $__internal_f275fce2df0cb08dd9e68eb4f7b919e5965aa38813c4e50158a9da490ed032db->enter($__internal_f275fce2df0cb08dd9e68eb4f7b919e5965aa38813c4e50158a9da490ed032db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f275fce2df0cb08dd9e68eb4f7b919e5965aa38813c4e50158a9da490ed032db->leave($__internal_f275fce2df0cb08dd9e68eb4f7b919e5965aa38813c4e50158a9da490ed032db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
