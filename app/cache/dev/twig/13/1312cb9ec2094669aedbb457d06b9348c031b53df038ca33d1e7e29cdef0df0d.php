<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_10c5d1783a2fd4bd3c768c7fe91a479c0cec3e24b171be0d148d2a5cb3df5f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fce86fa01f2614f7e2cc845bea492d4cc49e9e439ee3dafa663a54048ad870ec = $this->env->getExtension("native_profiler");
        $__internal_fce86fa01f2614f7e2cc845bea492d4cc49e9e439ee3dafa663a54048ad870ec->enter($__internal_fce86fa01f2614f7e2cc845bea492d4cc49e9e439ee3dafa663a54048ad870ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce86fa01f2614f7e2cc845bea492d4cc49e9e439ee3dafa663a54048ad870ec->leave($__internal_fce86fa01f2614f7e2cc845bea492d4cc49e9e439ee3dafa663a54048ad870ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
