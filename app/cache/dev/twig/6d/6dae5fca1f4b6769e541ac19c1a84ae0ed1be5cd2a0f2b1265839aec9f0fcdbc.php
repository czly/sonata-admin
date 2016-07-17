<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_86908c948d4321ab7d07d5727aec51358562476575939408f3840ffdb291f250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83b79c1c53468f574fd21462339c78b1325ff92f9ff23f824633fdc84c1069fb = $this->env->getExtension("native_profiler");
        $__internal_83b79c1c53468f574fd21462339c78b1325ff92f9ff23f824633fdc84c1069fb->enter($__internal_83b79c1c53468f574fd21462339c78b1325ff92f9ff23f824633fdc84c1069fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83b79c1c53468f574fd21462339c78b1325ff92f9ff23f824633fdc84c1069fb->leave($__internal_83b79c1c53468f574fd21462339c78b1325ff92f9ff23f824633fdc84c1069fb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee3e361c3c10fdb16ace7d5c0b7d2ec1131b41032a9aa1b9b74ee8855dad42d3 = $this->env->getExtension("native_profiler");
        $__internal_ee3e361c3c10fdb16ace7d5c0b7d2ec1131b41032a9aa1b9b74ee8855dad42d3->enter($__internal_ee3e361c3c10fdb16ace7d5c0b7d2ec1131b41032a9aa1b9b74ee8855dad42d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_ee3e361c3c10fdb16ace7d5c0b7d2ec1131b41032a9aa1b9b74ee8855dad42d3->leave($__internal_ee3e361c3c10fdb16ace7d5c0b7d2ec1131b41032a9aa1b9b74ee8855dad42d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
