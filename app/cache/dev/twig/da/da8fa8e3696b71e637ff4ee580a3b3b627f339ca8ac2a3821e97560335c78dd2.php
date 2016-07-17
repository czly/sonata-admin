<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_70bc015da2360948197e241f00ea95ce1da52f40646b44fa936b41cdf2bfdf7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b41eaff8b801c9ba209eee6e62ffe5fed8b29296ab98d5a32ab97f28f3a9b4a6 = $this->env->getExtension("native_profiler");
        $__internal_b41eaff8b801c9ba209eee6e62ffe5fed8b29296ab98d5a32ab97f28f3a9b4a6->enter($__internal_b41eaff8b801c9ba209eee6e62ffe5fed8b29296ab98d5a32ab97f28f3a9b4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b41eaff8b801c9ba209eee6e62ffe5fed8b29296ab98d5a32ab97f28f3a9b4a6->leave($__internal_b41eaff8b801c9ba209eee6e62ffe5fed8b29296ab98d5a32ab97f28f3a9b4a6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
