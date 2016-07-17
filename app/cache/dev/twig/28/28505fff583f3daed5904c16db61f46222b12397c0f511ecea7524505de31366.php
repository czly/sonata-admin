<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_80b76149bb56a8f13a89d9f6d2be329cd9531cbb1cd5169073e5f7380543deb2 extends Twig_Template
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
        $__internal_5f0357fee082b2e9a9de90388ed4606b3f6df3fff076d647e897f18ddb63c9ac = $this->env->getExtension("native_profiler");
        $__internal_5f0357fee082b2e9a9de90388ed4606b3f6df3fff076d647e897f18ddb63c9ac->enter($__internal_5f0357fee082b2e9a9de90388ed4606b3f6df3fff076d647e897f18ddb63c9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5f0357fee082b2e9a9de90388ed4606b3f6df3fff076d647e897f18ddb63c9ac->leave($__internal_5f0357fee082b2e9a9de90388ed4606b3f6df3fff076d647e897f18ddb63c9ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
