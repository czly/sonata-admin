<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_b26139504cd10eb6eccebf79251d7ad9df56fdf4fe82d3e09feb038a9819cfb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
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
        $__internal_0993154eaacde42c292aebcb26883f48422c1a1573d1a61507ac39546dce5ab9 = $this->env->getExtension("native_profiler");
        $__internal_0993154eaacde42c292aebcb26883f48422c1a1573d1a61507ac39546dce5ab9->enter($__internal_0993154eaacde42c292aebcb26883f48422c1a1573d1a61507ac39546dce5ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0993154eaacde42c292aebcb26883f48422c1a1573d1a61507ac39546dce5ab9->leave($__internal_0993154eaacde42c292aebcb26883f48422c1a1573d1a61507ac39546dce5ab9_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_f1996dfe62480523ec29fe57b8cc7476e680be4b39ea8926511686c39687337a = $this->env->getExtension("native_profiler");
        $__internal_f1996dfe62480523ec29fe57b8cc7476e680be4b39ea8926511686c39687337a->enter($__internal_f1996dfe62480523ec29fe57b8cc7476e680be4b39ea8926511686c39687337a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_f1996dfe62480523ec29fe57b8cc7476e680be4b39ea8926511686c39687337a->leave($__internal_f1996dfe62480523ec29fe57b8cc7476e680be4b39ea8926511686c39687337a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  68 => 17,  65 => 15,  63 => 14,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {% else %}*/
/*         {%- if field_description.options.truncate is defined -%}*/
/*             {% set truncate = field_description.options.truncate %}*/
/*             {% set length = truncate.length|default(30) %}*/
/*             {% set preserve = truncate.preserve|default(false) %}*/
/*             {% set separator = truncate.separator|default('...') %}*/
/*             {{ value|striptags|truncate(length, preserve, separator)|raw }}*/
/*         {%- else -%}*/
/*             {%- if field_description.options.strip is defined -%}*/
/*                 {% set value = value|striptags %}*/
/*             {%- endif -%}*/
/*             {{ value|raw }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
