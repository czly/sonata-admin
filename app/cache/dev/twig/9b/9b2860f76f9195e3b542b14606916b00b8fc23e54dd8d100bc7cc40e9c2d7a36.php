<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_5b04ba559a7ce9fbf146108a7657190f8631559a44752e736675e9673c43486f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c1abb293f4f56df0dde6fdbfd1c83e5e5a73f2b4925706c610b948d2911002b = $this->env->getExtension("native_profiler");
        $__internal_6c1abb293f4f56df0dde6fdbfd1c83e5e5a73f2b4925706c610b948d2911002b->enter($__internal_6c1abb293f4f56df0dde6fdbfd1c83e5e5a73f2b4925706c610b948d2911002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1abb293f4f56df0dde6fdbfd1c83e5e5a73f2b4925706c610b948d2911002b->leave($__internal_6c1abb293f4f56df0dde6fdbfd1c83e5e5a73f2b4925706c610b948d2911002b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
