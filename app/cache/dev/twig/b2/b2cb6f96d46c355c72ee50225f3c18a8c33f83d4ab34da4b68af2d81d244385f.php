<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_2d5f20e5cf092848fcf5b457b3085b4357ded5eb7b51361b73f4388c3ed709ac extends Twig_Template
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
        $__internal_5055f5789269abdee2044edcefe680cf7b9755a1b322bdee523fa0c787189c77 = $this->env->getExtension("native_profiler");
        $__internal_5055f5789269abdee2044edcefe680cf7b9755a1b322bdee523fa0c787189c77->enter($__internal_5055f5789269abdee2044edcefe680cf7b9755a1b322bdee523fa0c787189c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_5055f5789269abdee2044edcefe680cf7b9755a1b322bdee523fa0c787189c77->leave($__internal_5055f5789269abdee2044edcefe680cf7b9755a1b322bdee523fa0c787189c77_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
