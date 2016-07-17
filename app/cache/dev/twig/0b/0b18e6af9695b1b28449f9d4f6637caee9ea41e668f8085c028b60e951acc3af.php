<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_fee7a398fb47c2d50b3ab99936549cfab159e357cc3498816893930e51733cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_aea052ed019b33651b81c7efbd6c34d1d6c93e993e4376c75c9c44c26ba2408a = $this->env->getExtension("native_profiler");
        $__internal_aea052ed019b33651b81c7efbd6c34d1d6c93e993e4376c75c9c44c26ba2408a->enter($__internal_aea052ed019b33651b81c7efbd6c34d1d6c93e993e4376c75c9c44c26ba2408a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea052ed019b33651b81c7efbd6c34d1d6c93e993e4376c75c9c44c26ba2408a->leave($__internal_aea052ed019b33651b81c7efbd6c34d1d6c93e993e4376c75c9c44c26ba2408a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a7c8d9bcafa0d169e95d388ca2782ce90cda9a925a46372587458c25a945d3c = $this->env->getExtension("native_profiler");
        $__internal_6a7c8d9bcafa0d169e95d388ca2782ce90cda9a925a46372587458c25a945d3c->enter($__internal_6a7c8d9bcafa0d169e95d388ca2782ce90cda9a925a46372587458c25a945d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_6a7c8d9bcafa0d169e95d388ca2782ce90cda9a925a46372587458c25a945d3c->leave($__internal_6a7c8d9bcafa0d169e95d388ca2782ce90cda9a925a46372587458c25a945d3c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
