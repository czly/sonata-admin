<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dc6a0f31edcc958ff744b0d99fa98db6e3147597c162538753b7fd098d070dba extends Twig_Template
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
        $__internal_b97334419898d817bf9f383cee0941a166c0150c2455a6198c8de269e5aaf3eb = $this->env->getExtension("native_profiler");
        $__internal_b97334419898d817bf9f383cee0941a166c0150c2455a6198c8de269e5aaf3eb->enter($__internal_b97334419898d817bf9f383cee0941a166c0150c2455a6198c8de269e5aaf3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b97334419898d817bf9f383cee0941a166c0150c2455a6198c8de269e5aaf3eb->leave($__internal_b97334419898d817bf9f383cee0941a166c0150c2455a6198c8de269e5aaf3eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
