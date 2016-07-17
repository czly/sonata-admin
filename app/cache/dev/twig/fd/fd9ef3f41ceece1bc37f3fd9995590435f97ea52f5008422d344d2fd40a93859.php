<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e1338b590443a498c6e1173d25a82818112107564ea9f048abc52bfcf55d807c extends Twig_Template
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
        $__internal_43b89f917f2baa5802e85d24685715944444764dab5c5137b1eec187a4bfd0bc = $this->env->getExtension("native_profiler");
        $__internal_43b89f917f2baa5802e85d24685715944444764dab5c5137b1eec187a4bfd0bc->enter($__internal_43b89f917f2baa5802e85d24685715944444764dab5c5137b1eec187a4bfd0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_43b89f917f2baa5802e85d24685715944444764dab5c5137b1eec187a4bfd0bc->leave($__internal_43b89f917f2baa5802e85d24685715944444764dab5c5137b1eec187a4bfd0bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
