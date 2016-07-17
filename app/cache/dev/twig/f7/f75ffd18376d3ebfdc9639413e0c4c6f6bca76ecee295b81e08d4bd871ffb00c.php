<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_456ae870f8aea4116535d4968e8236a63e69fbb255807b8b919997e2a0823f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8d51d41b28d85809ea80275cb3447a9dc63445ce2dfac1bbaeafd336caf02b1 = $this->env->getExtension("native_profiler");
        $__internal_e8d51d41b28d85809ea80275cb3447a9dc63445ce2dfac1bbaeafd336caf02b1->enter($__internal_e8d51d41b28d85809ea80275cb3447a9dc63445ce2dfac1bbaeafd336caf02b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_e8d51d41b28d85809ea80275cb3447a9dc63445ce2dfac1bbaeafd336caf02b1->leave($__internal_e8d51d41b28d85809ea80275cb3447a9dc63445ce2dfac1bbaeafd336caf02b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
