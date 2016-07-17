<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_42c2b77e88da0435a5819ec412d9d91f984c72f15a61ebc802111b67eec79488 extends Twig_Template
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
        $__internal_b2985913aa6a19d43c75e82c450339dd57c1933863bf46a3b59c1ef5d519c1be = $this->env->getExtension("native_profiler");
        $__internal_b2985913aa6a19d43c75e82c450339dd57c1933863bf46a3b59c1ef5d519c1be->enter($__internal_b2985913aa6a19d43c75e82c450339dd57c1933863bf46a3b59c1ef5d519c1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b2985913aa6a19d43c75e82c450339dd57c1933863bf46a3b59c1ef5d519c1be->leave($__internal_b2985913aa6a19d43c75e82c450339dd57c1933863bf46a3b59c1ef5d519c1be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
