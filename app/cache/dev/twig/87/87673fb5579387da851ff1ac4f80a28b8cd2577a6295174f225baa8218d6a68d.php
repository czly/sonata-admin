<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_26de02004469c633bfaa86b1f293b0a08c799af6308cd41065c52a64bd45471b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1e812187b98c910ef54a8e58bca034d875466ba74dcaeaa20700bf6e859d002 = $this->env->getExtension("native_profiler");
        $__internal_c1e812187b98c910ef54a8e58bca034d875466ba74dcaeaa20700bf6e859d002->enter($__internal_c1e812187b98c910ef54a8e58bca034d875466ba74dcaeaa20700bf6e859d002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e812187b98c910ef54a8e58bca034d875466ba74dcaeaa20700bf6e859d002->leave($__internal_c1e812187b98c910ef54a8e58bca034d875466ba74dcaeaa20700bf6e859d002_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
