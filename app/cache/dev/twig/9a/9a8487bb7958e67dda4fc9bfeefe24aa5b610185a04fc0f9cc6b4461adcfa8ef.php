<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_bbea9be994836df3e736b1c677ab0184e57b3e179fefcd485b246cc5843d046c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_801a6402c632ccfa1cc11e897df43d34dc8c39acd760c9482381e979acde43e9 = $this->env->getExtension("native_profiler");
        $__internal_801a6402c632ccfa1cc11e897df43d34dc8c39acd760c9482381e979acde43e9->enter($__internal_801a6402c632ccfa1cc11e897df43d34dc8c39acd760c9482381e979acde43e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_801a6402c632ccfa1cc11e897df43d34dc8c39acd760c9482381e979acde43e9->leave($__internal_801a6402c632ccfa1cc11e897df43d34dc8c39acd760c9482381e979acde43e9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_86a4403ca9e0a27cd5f59076bae46c87d4e8cc9737cfd7451d7a99a05c1b789f = $this->env->getExtension("native_profiler");
        $__internal_86a4403ca9e0a27cd5f59076bae46c87d4e8cc9737cfd7451d7a99a05c1b789f->enter($__internal_86a4403ca9e0a27cd5f59076bae46c87d4e8cc9737cfd7451d7a99a05c1b789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_86a4403ca9e0a27cd5f59076bae46c87d4e8cc9737cfd7451d7a99a05c1b789f->leave($__internal_86a4403ca9e0a27cd5f59076bae46c87d4e8cc9737cfd7451d7a99a05c1b789f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
