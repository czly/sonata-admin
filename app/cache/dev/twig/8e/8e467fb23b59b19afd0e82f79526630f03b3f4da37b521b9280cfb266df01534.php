<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_5a02aa3cf670f763a9a3033fa96f53d026c72df1f21369467c334e9e0e98fa4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8095031ea3e4a2de9710b1506986effc90afbaacd7811e7010cb39aa85a567c = $this->env->getExtension("native_profiler");
        $__internal_e8095031ea3e4a2de9710b1506986effc90afbaacd7811e7010cb39aa85a567c->enter($__internal_e8095031ea3e4a2de9710b1506986effc90afbaacd7811e7010cb39aa85a567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8095031ea3e4a2de9710b1506986effc90afbaacd7811e7010cb39aa85a567c->leave($__internal_e8095031ea3e4a2de9710b1506986effc90afbaacd7811e7010cb39aa85a567c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c7b551f6c426de279b3776b2fe4a2d62b6292d709dfe430b1a2a3edd60894110 = $this->env->getExtension("native_profiler");
        $__internal_c7b551f6c426de279b3776b2fe4a2d62b6292d709dfe430b1a2a3edd60894110->enter($__internal_c7b551f6c426de279b3776b2fe4a2d62b6292d709dfe430b1a2a3edd60894110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c7b551f6c426de279b3776b2fe4a2d62b6292d709dfe430b1a2a3edd60894110->leave($__internal_c7b551f6c426de279b3776b2fe4a2d62b6292d709dfe430b1a2a3edd60894110_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
