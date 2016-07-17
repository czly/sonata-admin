<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_0feedeca6b9f0da694e4f0e2a5882cec8b47d93b8e3ed1798a39923fcc93b15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c6b8b662333b5c52c6a8013f8d9aea233725bdaccd70fab72569a8db541b50 = $this->env->getExtension("native_profiler");
        $__internal_62c6b8b662333b5c52c6a8013f8d9aea233725bdaccd70fab72569a8db541b50->enter($__internal_62c6b8b662333b5c52c6a8013f8d9aea233725bdaccd70fab72569a8db541b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c6b8b662333b5c52c6a8013f8d9aea233725bdaccd70fab72569a8db541b50->leave($__internal_62c6b8b662333b5c52c6a8013f8d9aea233725bdaccd70fab72569a8db541b50_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
