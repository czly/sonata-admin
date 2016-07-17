<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cef79dc1af07285f76949b2f713c60a9bdb8aa1bda340632c2b975b574dc5399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e106614220485727f0cf0c83441beaf0c3aa4f4098a2775d14d6a473798bdb84 = $this->env->getExtension("native_profiler");
        $__internal_e106614220485727f0cf0c83441beaf0c3aa4f4098a2775d14d6a473798bdb84->enter($__internal_e106614220485727f0cf0c83441beaf0c3aa4f4098a2775d14d6a473798bdb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e106614220485727f0cf0c83441beaf0c3aa4f4098a2775d14d6a473798bdb84->leave($__internal_e106614220485727f0cf0c83441beaf0c3aa4f4098a2775d14d6a473798bdb84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23c385868eeabb5c228569df1c2595bec69e0ffb400d962946be4968d8816bb0 = $this->env->getExtension("native_profiler");
        $__internal_23c385868eeabb5c228569df1c2595bec69e0ffb400d962946be4968d8816bb0->enter($__internal_23c385868eeabb5c228569df1c2595bec69e0ffb400d962946be4968d8816bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_23c385868eeabb5c228569df1c2595bec69e0ffb400d962946be4968d8816bb0->leave($__internal_23c385868eeabb5c228569df1c2595bec69e0ffb400d962946be4968d8816bb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_564b6a730d0e769154dee58da520368a0e03b63586cce2a0cb6b3deba4869930 = $this->env->getExtension("native_profiler");
        $__internal_564b6a730d0e769154dee58da520368a0e03b63586cce2a0cb6b3deba4869930->enter($__internal_564b6a730d0e769154dee58da520368a0e03b63586cce2a0cb6b3deba4869930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_564b6a730d0e769154dee58da520368a0e03b63586cce2a0cb6b3deba4869930->leave($__internal_564b6a730d0e769154dee58da520368a0e03b63586cce2a0cb6b3deba4869930_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_057a0e56d011521a3b185658930289de7a5fd0e5238046c8b6ea4fafb14c504e = $this->env->getExtension("native_profiler");
        $__internal_057a0e56d011521a3b185658930289de7a5fd0e5238046c8b6ea4fafb14c504e->enter($__internal_057a0e56d011521a3b185658930289de7a5fd0e5238046c8b6ea4fafb14c504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_057a0e56d011521a3b185658930289de7a5fd0e5238046c8b6ea4fafb14c504e->leave($__internal_057a0e56d011521a3b185658930289de7a5fd0e5238046c8b6ea4fafb14c504e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
