<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_67373580f7ff49fae2133ed3f553b478a7fc4536c0ed8d6fb665075eedb33357 extends Twig_Template
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
        $__internal_32b2451eb513b637721b5e079f7458b53f05a9ab9f1abfc09ce5ea4f3c605df0 = $this->env->getExtension("native_profiler");
        $__internal_32b2451eb513b637721b5e079f7458b53f05a9ab9f1abfc09ce5ea4f3c605df0->enter($__internal_32b2451eb513b637721b5e079f7458b53f05a9ab9f1abfc09ce5ea4f3c605df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_32b2451eb513b637721b5e079f7458b53f05a9ab9f1abfc09ce5ea4f3c605df0->leave($__internal_32b2451eb513b637721b5e079f7458b53f05a9ab9f1abfc09ce5ea4f3c605df0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
