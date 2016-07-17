<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_54181134b3547bdffcef2205735e53198dcc3b7aba12a856ebf0791462de543a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cc7e2b017b9d800a31edcea50b5b3407f8271a41539173c57e18b04efc08d46 = $this->env->getExtension("native_profiler");
        $__internal_1cc7e2b017b9d800a31edcea50b5b3407f8271a41539173c57e18b04efc08d46->enter($__internal_1cc7e2b017b9d800a31edcea50b5b3407f8271a41539173c57e18b04efc08d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cc7e2b017b9d800a31edcea50b5b3407f8271a41539173c57e18b04efc08d46->leave($__internal_1cc7e2b017b9d800a31edcea50b5b3407f8271a41539173c57e18b04efc08d46_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e695a0e321c0c4b0a666f50ccc5b2c70f7afe83bb7dd4b3aa3c205ad03e00774 = $this->env->getExtension("native_profiler");
        $__internal_e695a0e321c0c4b0a666f50ccc5b2c70f7afe83bb7dd4b3aa3c205ad03e00774->enter($__internal_e695a0e321c0c4b0a666f50ccc5b2c70f7afe83bb7dd4b3aa3c205ad03e00774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_e695a0e321c0c4b0a666f50ccc5b2c70f7afe83bb7dd4b3aa3c205ad03e00774->leave($__internal_e695a0e321c0c4b0a666f50ccc5b2c70f7afe83bb7dd4b3aa3c205ad03e00774_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
