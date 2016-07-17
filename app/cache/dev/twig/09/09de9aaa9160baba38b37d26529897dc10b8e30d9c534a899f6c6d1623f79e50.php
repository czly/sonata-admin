<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4fc72e59a8bddd6a8576d5c9da0aa04720a3028badd5ef6b91d7f58d311c7488 extends Twig_Template
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
        $__internal_2f9f5666cdc1c7edf2df03305ffaf3c1d07e6de678cb7bacbfcad3182bd4bd6c = $this->env->getExtension("native_profiler");
        $__internal_2f9f5666cdc1c7edf2df03305ffaf3c1d07e6de678cb7bacbfcad3182bd4bd6c->enter($__internal_2f9f5666cdc1c7edf2df03305ffaf3c1d07e6de678cb7bacbfcad3182bd4bd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2f9f5666cdc1c7edf2df03305ffaf3c1d07e6de678cb7bacbfcad3182bd4bd6c->leave($__internal_2f9f5666cdc1c7edf2df03305ffaf3c1d07e6de678cb7bacbfcad3182bd4bd6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
