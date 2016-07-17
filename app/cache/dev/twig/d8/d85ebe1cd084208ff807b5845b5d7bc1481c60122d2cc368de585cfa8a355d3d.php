<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_578390fb57b9556f60f0dc43607e8662078860a4fdf55806f773e57ce60322f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bbf0e4acef60b0ed98e926517473ce73c0cf2eba5e6a40d69a7795208dfe811 = $this->env->getExtension("native_profiler");
        $__internal_2bbf0e4acef60b0ed98e926517473ce73c0cf2eba5e6a40d69a7795208dfe811->enter($__internal_2bbf0e4acef60b0ed98e926517473ce73c0cf2eba5e6a40d69a7795208dfe811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bbf0e4acef60b0ed98e926517473ce73c0cf2eba5e6a40d69a7795208dfe811->leave($__internal_2bbf0e4acef60b0ed98e926517473ce73c0cf2eba5e6a40d69a7795208dfe811_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
