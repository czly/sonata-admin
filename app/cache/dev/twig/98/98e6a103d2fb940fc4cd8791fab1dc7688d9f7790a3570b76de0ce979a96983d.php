<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_72d07237b2263937205a5e13614418bce0a8ac873b4fe9018a7f93ece1b8904f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d930eed66fa09d2e62fc77028ce34e11cadfb4ceafc271abd8c00c08e0dade = $this->env->getExtension("native_profiler");
        $__internal_44d930eed66fa09d2e62fc77028ce34e11cadfb4ceafc271abd8c00c08e0dade->enter($__internal_44d930eed66fa09d2e62fc77028ce34e11cadfb4ceafc271abd8c00c08e0dade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d930eed66fa09d2e62fc77028ce34e11cadfb4ceafc271abd8c00c08e0dade->leave($__internal_44d930eed66fa09d2e62fc77028ce34e11cadfb4ceafc271abd8c00c08e0dade_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_17858f32df2fa93c6c666e35b9c7f69cd18eb36f835debc602171a16cf4de4c1 = $this->env->getExtension("native_profiler");
        $__internal_17858f32df2fa93c6c666e35b9c7f69cd18eb36f835debc602171a16cf4de4c1->enter($__internal_17858f32df2fa93c6c666e35b9c7f69cd18eb36f835debc602171a16cf4de4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_17858f32df2fa93c6c666e35b9c7f69cd18eb36f835debc602171a16cf4de4c1->leave($__internal_17858f32df2fa93c6c666e35b9c7f69cd18eb36f835debc602171a16cf4de4c1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
