<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a6375ca6232f853ebf96409b2e6d71ea26011daf1efdc2409274381d43cb7b3b extends Twig_Template
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
        $__internal_62922464d625291bc0b604e3c3b7a753494163f27b1a6638df78e71e108c842d = $this->env->getExtension("native_profiler");
        $__internal_62922464d625291bc0b604e3c3b7a753494163f27b1a6638df78e71e108c842d->enter($__internal_62922464d625291bc0b604e3c3b7a753494163f27b1a6638df78e71e108c842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_62922464d625291bc0b604e3c3b7a753494163f27b1a6638df78e71e108c842d->leave($__internal_62922464d625291bc0b604e3c3b7a753494163f27b1a6638df78e71e108c842d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
