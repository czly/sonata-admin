<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_7c30da979137d9225e6ef01ad31723e4a4a0beedf2c84f8b0f336395dc49b2d5 extends Twig_Template
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
        $__internal_6bad031cfbbc9f20ccf30bd9fd0791952afaab0dada3ca10008f67ebd8d24a77 = $this->env->getExtension("native_profiler");
        $__internal_6bad031cfbbc9f20ccf30bd9fd0791952afaab0dada3ca10008f67ebd8d24a77->enter($__internal_6bad031cfbbc9f20ccf30bd9fd0791952afaab0dada3ca10008f67ebd8d24a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_6bad031cfbbc9f20ccf30bd9fd0791952afaab0dada3ca10008f67ebd8d24a77->leave($__internal_6bad031cfbbc9f20ccf30bd9fd0791952afaab0dada3ca10008f67ebd8d24a77_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'attributes') ?>><?php echo htmlspecialchars($value) ?></textarea>*/
/* */
/* <?php if ($enable && !$async) : ?>*/
/*     <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>*/
/* <?php endif; ?>*/
/* */
