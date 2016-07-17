<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ef1b443602948aa38363fcf4bebc1bc04e8181188b67669773036368d44ff58e extends Twig_Template
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
        $__internal_4daf0e6545040a51ebd0371cd36e9cbfab08039e105c47138cffb1ff0dbbe081 = $this->env->getExtension("native_profiler");
        $__internal_4daf0e6545040a51ebd0371cd36e9cbfab08039e105c47138cffb1ff0dbbe081->enter($__internal_4daf0e6545040a51ebd0371cd36e9cbfab08039e105c47138cffb1ff0dbbe081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4daf0e6545040a51ebd0371cd36e9cbfab08039e105c47138cffb1ff0dbbe081->leave($__internal_4daf0e6545040a51ebd0371cd36e9cbfab08039e105c47138cffb1ff0dbbe081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
