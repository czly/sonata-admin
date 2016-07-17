<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_61e4a12bec333a831e7cc26353b7aea0f9ff06f79cd91cd478c569937b2a5703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7070543d58455142c691ff521e7bcf1682626cf7219238c5be00b7174ea0a12 = $this->env->getExtension("native_profiler");
        $__internal_f7070543d58455142c691ff521e7bcf1682626cf7219238c5be00b7174ea0a12->enter($__internal_f7070543d58455142c691ff521e7bcf1682626cf7219238c5be00b7174ea0a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7070543d58455142c691ff521e7bcf1682626cf7219238c5be00b7174ea0a12->leave($__internal_f7070543d58455142c691ff521e7bcf1682626cf7219238c5be00b7174ea0a12_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
