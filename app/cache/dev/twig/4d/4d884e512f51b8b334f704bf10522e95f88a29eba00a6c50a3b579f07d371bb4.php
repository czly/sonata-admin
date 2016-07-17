<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8683d7e31e76262ac4e74444759cb764773dce9e80caef0237c3e809bdf667d2 extends Twig_Template
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
        $__internal_d521f89818b61fba94e3507d9077d32747c92e434e273d4bb36aea566af8ee3c = $this->env->getExtension("native_profiler");
        $__internal_d521f89818b61fba94e3507d9077d32747c92e434e273d4bb36aea566af8ee3c->enter($__internal_d521f89818b61fba94e3507d9077d32747c92e434e273d4bb36aea566af8ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d521f89818b61fba94e3507d9077d32747c92e434e273d4bb36aea566af8ee3c->leave($__internal_d521f89818b61fba94e3507d9077d32747c92e434e273d4bb36aea566af8ee3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
