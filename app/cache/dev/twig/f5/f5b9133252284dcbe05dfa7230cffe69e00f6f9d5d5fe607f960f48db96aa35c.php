<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6abb8a509c70d70e2d88eebad06653c352756990ae277570ae669ed91c04d0ab extends Twig_Template
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
        $__internal_deae9c2c3be3884ef89c1e2e4d5cda05e2b0645c2b1d88e5db36bc178d85777a = $this->env->getExtension("native_profiler");
        $__internal_deae9c2c3be3884ef89c1e2e4d5cda05e2b0645c2b1d88e5db36bc178d85777a->enter($__internal_deae9c2c3be3884ef89c1e2e4d5cda05e2b0645c2b1d88e5db36bc178d85777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_deae9c2c3be3884ef89c1e2e4d5cda05e2b0645c2b1d88e5db36bc178d85777a->leave($__internal_deae9c2c3be3884ef89c1e2e4d5cda05e2b0645c2b1d88e5db36bc178d85777a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
