<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1a17539e63d26736cdce67b9236138d30a1c6a3ba401e3c9bb41bb99174852fa extends Twig_Template
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
        $__internal_2ebfe29361af5312f2e3f815ae535bb04dba03c60a5f45d83322a37885ca46eb = $this->env->getExtension("native_profiler");
        $__internal_2ebfe29361af5312f2e3f815ae535bb04dba03c60a5f45d83322a37885ca46eb->enter($__internal_2ebfe29361af5312f2e3f815ae535bb04dba03c60a5f45d83322a37885ca46eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2ebfe29361af5312f2e3f815ae535bb04dba03c60a5f45d83322a37885ca46eb->leave($__internal_2ebfe29361af5312f2e3f815ae535bb04dba03c60a5f45d83322a37885ca46eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
