<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c4baf252ab673cd3d92ead8a16f0457b343f1fa74e81f78bf7212ca739a2e458 extends Twig_Template
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
        $__internal_464a7a1087606c1272f622f47a0b53a6afa36ecd8bf366bfb28c9d45d0c156a3 = $this->env->getExtension("native_profiler");
        $__internal_464a7a1087606c1272f622f47a0b53a6afa36ecd8bf366bfb28c9d45d0c156a3->enter($__internal_464a7a1087606c1272f622f47a0b53a6afa36ecd8bf366bfb28c9d45d0c156a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_464a7a1087606c1272f622f47a0b53a6afa36ecd8bf366bfb28c9d45d0c156a3->leave($__internal_464a7a1087606c1272f622f47a0b53a6afa36ecd8bf366bfb28c9d45d0c156a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
