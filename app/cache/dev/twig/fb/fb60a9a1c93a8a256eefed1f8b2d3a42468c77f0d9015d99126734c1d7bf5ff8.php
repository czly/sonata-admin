<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_135246d86f664b56707471ea4d421cac7bee85f1c8d7f43c7b0fbc2c30aca854 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de0d3039cd66a19d34d25fb978bffc1bb30888d6e1ba9e5b9ad7edc0bc00d887 = $this->env->getExtension("native_profiler");
        $__internal_de0d3039cd66a19d34d25fb978bffc1bb30888d6e1ba9e5b9ad7edc0bc00d887->enter($__internal_de0d3039cd66a19d34d25fb978bffc1bb30888d6e1ba9e5b9ad7edc0bc00d887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0d3039cd66a19d34d25fb978bffc1bb30888d6e1ba9e5b9ad7edc0bc00d887->leave($__internal_de0d3039cd66a19d34d25fb978bffc1bb30888d6e1ba9e5b9ad7edc0bc00d887_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e3530d1669174c02238ebde09992c6c0a0c682e73f2510016de81eaa946fa75f = $this->env->getExtension("native_profiler");
        $__internal_e3530d1669174c02238ebde09992c6c0a0c682e73f2510016de81eaa946fa75f->enter($__internal_e3530d1669174c02238ebde09992c6c0a0c682e73f2510016de81eaa946fa75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_e3530d1669174c02238ebde09992c6c0a0c682e73f2510016de81eaa946fa75f->leave($__internal_e3530d1669174c02238ebde09992c6c0a0c682e73f2510016de81eaa946fa75f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
