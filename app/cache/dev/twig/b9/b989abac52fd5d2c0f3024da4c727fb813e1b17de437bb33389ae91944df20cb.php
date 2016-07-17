<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ad353395b2045db182e6c54d257eeea7c366cf1495af7ab323b37eb2f0cd3257 extends Twig_Template
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
        $__internal_6d547ec583f5cff42ddea3c06f5ce46f1e63115567f1c34821d54d2a73b9f9d4 = $this->env->getExtension("native_profiler");
        $__internal_6d547ec583f5cff42ddea3c06f5ce46f1e63115567f1c34821d54d2a73b9f9d4->enter($__internal_6d547ec583f5cff42ddea3c06f5ce46f1e63115567f1c34821d54d2a73b9f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6d547ec583f5cff42ddea3c06f5ce46f1e63115567f1c34821d54d2a73b9f9d4->leave($__internal_6d547ec583f5cff42ddea3c06f5ce46f1e63115567f1c34821d54d2a73b9f9d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
