<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_03b4799f0a3125e2077301a588d05d5bd9096d810cfc06ec6f6bfbe75888b5c4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2998448212d17f8e9911dae8a96c6f100f7a3f620979c67be412b4e7192bd552 = $this->env->getExtension("native_profiler");
        $__internal_2998448212d17f8e9911dae8a96c6f100f7a3f620979c67be412b4e7192bd552->enter($__internal_2998448212d17f8e9911dae8a96c6f100f7a3f620979c67be412b4e7192bd552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2998448212d17f8e9911dae8a96c6f100f7a3f620979c67be412b4e7192bd552->leave($__internal_2998448212d17f8e9911dae8a96c6f100f7a3f620979c67be412b4e7192bd552_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9c82c1a46b292ba72b17d764742f160b0d9b1e6b56b9dbf2fe2bcf691e07ee26 = $this->env->getExtension("native_profiler");
        $__internal_9c82c1a46b292ba72b17d764742f160b0d9b1e6b56b9dbf2fe2bcf691e07ee26->enter($__internal_9c82c1a46b292ba72b17d764742f160b0d9b1e6b56b9dbf2fe2bcf691e07ee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9c82c1a46b292ba72b17d764742f160b0d9b1e6b56b9dbf2fe2bcf691e07ee26->leave($__internal_9c82c1a46b292ba72b17d764742f160b0d9b1e6b56b9dbf2fe2bcf691e07ee26_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
