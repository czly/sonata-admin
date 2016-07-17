<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_981b5659c9890035e1e3bac78e44205a309fdddf0119716967412a0302d8c02a extends Twig_Template
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
        $__internal_166566ac9f79a8400a66f845d3e916b6f54a3534f0ca5b637411e3d1652f3178 = $this->env->getExtension("native_profiler");
        $__internal_166566ac9f79a8400a66f845d3e916b6f54a3534f0ca5b637411e3d1652f3178->enter($__internal_166566ac9f79a8400a66f845d3e916b6f54a3534f0ca5b637411e3d1652f3178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_166566ac9f79a8400a66f845d3e916b6f54a3534f0ca5b637411e3d1652f3178->leave($__internal_166566ac9f79a8400a66f845d3e916b6f54a3534f0ca5b637411e3d1652f3178_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
