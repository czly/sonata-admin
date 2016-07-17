<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_179889ea1bd5d92ab154d22f1df951adfcdbc7d008cd87d9ebc1742dac0a2205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_ed4cc8009a88d2d40a83ff390266357c2019a599a86e43de78021c2be14bff65 = $this->env->getExtension("native_profiler");
        $__internal_ed4cc8009a88d2d40a83ff390266357c2019a599a86e43de78021c2be14bff65->enter($__internal_ed4cc8009a88d2d40a83ff390266357c2019a599a86e43de78021c2be14bff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed4cc8009a88d2d40a83ff390266357c2019a599a86e43de78021c2be14bff65->leave($__internal_ed4cc8009a88d2d40a83ff390266357c2019a599a86e43de78021c2be14bff65_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce0fe52c9e8337f95ed48950fe68c14a0f93f5dfe13ff2065825d2fca74772ca = $this->env->getExtension("native_profiler");
        $__internal_ce0fe52c9e8337f95ed48950fe68c14a0f93f5dfe13ff2065825d2fca74772ca->enter($__internal_ce0fe52c9e8337f95ed48950fe68c14a0f93f5dfe13ff2065825d2fca74772ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ce0fe52c9e8337f95ed48950fe68c14a0f93f5dfe13ff2065825d2fca74772ca->leave($__internal_ce0fe52c9e8337f95ed48950fe68c14a0f93f5dfe13ff2065825d2fca74772ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
