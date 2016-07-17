<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_c34b027f556274a01c7d98eb653f5048962b2f71f420f0f6c12f79ff30520965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b72b9fcb5c0b01db680fcfc5dfec1348235c74939efa5fdcfd138bb8abdf0e6c = $this->env->getExtension("native_profiler");
        $__internal_b72b9fcb5c0b01db680fcfc5dfec1348235c74939efa5fdcfd138bb8abdf0e6c->enter($__internal_b72b9fcb5c0b01db680fcfc5dfec1348235c74939efa5fdcfd138bb8abdf0e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72b9fcb5c0b01db680fcfc5dfec1348235c74939efa5fdcfd138bb8abdf0e6c->leave($__internal_b72b9fcb5c0b01db680fcfc5dfec1348235c74939efa5fdcfd138bb8abdf0e6c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
