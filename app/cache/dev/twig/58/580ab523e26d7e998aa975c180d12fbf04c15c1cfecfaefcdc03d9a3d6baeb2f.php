<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_474469a7eb52bd4ac0d06bacbd588573fd57c6d11b728ee6232f9dbb342cbfda extends Twig_Template
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
        $__internal_308426be3b11f60a36a0ca19323e836dc156eebcb04c6adc61dcd01ac0ce62f3 = $this->env->getExtension("native_profiler");
        $__internal_308426be3b11f60a36a0ca19323e836dc156eebcb04c6adc61dcd01ac0ce62f3->enter($__internal_308426be3b11f60a36a0ca19323e836dc156eebcb04c6adc61dcd01ac0ce62f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_308426be3b11f60a36a0ca19323e836dc156eebcb04c6adc61dcd01ac0ce62f3->leave($__internal_308426be3b11f60a36a0ca19323e836dc156eebcb04c6adc61dcd01ac0ce62f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
