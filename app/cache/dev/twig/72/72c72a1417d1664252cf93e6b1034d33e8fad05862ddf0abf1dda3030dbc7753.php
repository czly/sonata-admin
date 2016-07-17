<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_99e286f4b1d381b485849314e529a52677e89fef7c467ee0c68730cd77b7b8a9 extends Twig_Template
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
        $__internal_cd4b4a716bb07847b5d4cca36c73cbc3c7d5b77b219cebb620843421d79af854 = $this->env->getExtension("native_profiler");
        $__internal_cd4b4a716bb07847b5d4cca36c73cbc3c7d5b77b219cebb620843421d79af854->enter($__internal_cd4b4a716bb07847b5d4cca36c73cbc3c7d5b77b219cebb620843421d79af854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cd4b4a716bb07847b5d4cca36c73cbc3c7d5b77b219cebb620843421d79af854->leave($__internal_cd4b4a716bb07847b5d4cca36c73cbc3c7d5b77b219cebb620843421d79af854_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
