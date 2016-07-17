<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f6d9cfc8c9ad79fea054dde0f802da5bf519ceb3ac5ec76ebf8bc58806e8b710 extends Twig_Template
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
        $__internal_c5c01136dc0e939d54727355e166b10decd0fc92eaf2bc1b4d7e9308ef658b27 = $this->env->getExtension("native_profiler");
        $__internal_c5c01136dc0e939d54727355e166b10decd0fc92eaf2bc1b4d7e9308ef658b27->enter($__internal_c5c01136dc0e939d54727355e166b10decd0fc92eaf2bc1b4d7e9308ef658b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c5c01136dc0e939d54727355e166b10decd0fc92eaf2bc1b4d7e9308ef658b27->leave($__internal_c5c01136dc0e939d54727355e166b10decd0fc92eaf2bc1b4d7e9308ef658b27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
