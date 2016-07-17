<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_f04998df86b3740a903554d1d54f95f2b91e14bbfed4de554dcae6da6c09c66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3973fb78d76967cec800913e7b978e4f585846e6e24fef9abba2d23849f6d01d = $this->env->getExtension("native_profiler");
        $__internal_3973fb78d76967cec800913e7b978e4f585846e6e24fef9abba2d23849f6d01d->enter($__internal_3973fb78d76967cec800913e7b978e4f585846e6e24fef9abba2d23849f6d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3973fb78d76967cec800913e7b978e4f585846e6e24fef9abba2d23849f6d01d->leave($__internal_3973fb78d76967cec800913e7b978e4f585846e6e24fef9abba2d23849f6d01d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a833d70ebdf65351850796dca9b7c3067f7ec12203ca7c8a91beff381e22e4df = $this->env->getExtension("native_profiler");
        $__internal_a833d70ebdf65351850796dca9b7c3067f7ec12203ca7c8a91beff381e22e4df->enter($__internal_a833d70ebdf65351850796dca9b7c3067f7ec12203ca7c8a91beff381e22e4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_a833d70ebdf65351850796dca9b7c3067f7ec12203ca7c8a91beff381e22e4df->leave($__internal_a833d70ebdf65351850796dca9b7c3067f7ec12203ca7c8a91beff381e22e4df_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
