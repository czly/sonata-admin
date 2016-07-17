<?php

/* SonataIntlBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_5fba18d460e4c0200cb4e90ca322e2414323ba85647ef1c2e8282b37a125ba92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_7bf05cba91bd1a7f5f632a74d970d2f15c57c66463bae713ca9d5da222b2e186 = $this->env->getExtension("native_profiler");
        $__internal_7bf05cba91bd1a7f5f632a74d970d2f15c57c66463bae713ca9d5da222b2e186->enter($__internal_7bf05cba91bd1a7f5f632a74d970d2f15c57c66463bae713ca9d5da222b2e186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf05cba91bd1a7f5f632a74d970d2f15c57c66463bae713ca9d5da222b2e186->leave($__internal_7bf05cba91bd1a7f5f632a74d970d2f15c57c66463bae713ca9d5da222b2e186_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7f5d27043dd36d6205ccd295ca340e747a90971cb3752e561ef0faaee6969e43 = $this->env->getExtension("native_profiler");
        $__internal_7f5d27043dd36d6205ccd295ca340e747a90971cb3752e561ef0faaee6969e43->enter($__internal_7f5d27043dd36d6205ccd295ca340e747a90971cb3752e561ef0faaee6969e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if ((null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["currency"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array());
            // line 19
            echo "        ";
            $context["attributes"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["textAttributes"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 21
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 22
            echo "
        ";
            // line 23
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["currency"]) ? $context["currency"] : $this->getContext($context, "currency")), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), (isset($context["textAttributes"]) ? $context["textAttributes"] : $this->getContext($context, "textAttributes")), (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")));
        }
        
        $__internal_7f5d27043dd36d6205ccd295ca340e747a90971cb3752e561ef0faaee6969e43->leave($__internal_7f5d27043dd36d6205ccd295ca340e747a90971cb3752e561ef0faaee6969e43_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  56 => 22,  53 => 21,  50 => 20,  47 => 19,  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is null -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {% set currency = field_description.options.currency %}*/
/*         {% set attributes = field_description.options.attributes|default({}) %}*/
/*         {% set textAttributes = field_description.options.textAttributes|default({}) %}*/
/*         {% set locale = field_description.options.locale|default(null) %}*/
/* */
/*         {{ value | number_format_currency(currency, attributes, textAttributes, locale) }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
