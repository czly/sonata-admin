<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e81d82be6809f361d63ede0c48e72b04e2c23c9f76bf1cf37b803a9861e2d345 extends Twig_Template
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
        $__internal_76c18b915a3d4467037cbaf7d7340b7f942829c9ba7113b20c192a8afa7583b0 = $this->env->getExtension("native_profiler");
        $__internal_76c18b915a3d4467037cbaf7d7340b7f942829c9ba7113b20c192a8afa7583b0->enter($__internal_76c18b915a3d4467037cbaf7d7340b7f942829c9ba7113b20c192a8afa7583b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_76c18b915a3d4467037cbaf7d7340b7f942829c9ba7113b20c192a8afa7583b0->leave($__internal_76c18b915a3d4467037cbaf7d7340b7f942829c9ba7113b20c192a8afa7583b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
