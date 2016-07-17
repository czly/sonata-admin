<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_25b92e1ebd423b72dcc3bec874d40dc92ff22c31a472a764acc72d42c3e8f380 extends Twig_Template
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
        $__internal_49b88e29bbb842de96700e67877a7af50cbade9c63716831d3dfb6c31d7ef9f1 = $this->env->getExtension("native_profiler");
        $__internal_49b88e29bbb842de96700e67877a7af50cbade9c63716831d3dfb6c31d7ef9f1->enter($__internal_49b88e29bbb842de96700e67877a7af50cbade9c63716831d3dfb6c31d7ef9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_49b88e29bbb842de96700e67877a7af50cbade9c63716831d3dfb6c31d7ef9f1->leave($__internal_49b88e29bbb842de96700e67877a7af50cbade9c63716831d3dfb6c31d7ef9f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
