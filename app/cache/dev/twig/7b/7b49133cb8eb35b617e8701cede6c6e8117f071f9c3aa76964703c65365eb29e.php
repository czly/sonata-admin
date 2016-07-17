<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3a45b0a02a9a67c3c47c5b2227d08aa96f3978149b60c50951910b11fddd374d extends Twig_Template
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
        $__internal_d3801a24dfcdbad175209d13c733dbd7757153bdfd6b47a4a960b3793f952d88 = $this->env->getExtension("native_profiler");
        $__internal_d3801a24dfcdbad175209d13c733dbd7757153bdfd6b47a4a960b3793f952d88->enter($__internal_d3801a24dfcdbad175209d13c733dbd7757153bdfd6b47a4a960b3793f952d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d3801a24dfcdbad175209d13c733dbd7757153bdfd6b47a4a960b3793f952d88->leave($__internal_d3801a24dfcdbad175209d13c733dbd7757153bdfd6b47a4a960b3793f952d88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
