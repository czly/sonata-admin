<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_14e4868b4b3e51e45d5f5e4f0701dacec8bee892b070713f0c14e76fcc2379da extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de391895279824555333e6764b1c54f3d55c902915743f3e1802670a91bece8d = $this->env->getExtension("native_profiler");
        $__internal_de391895279824555333e6764b1c54f3d55c902915743f3e1802670a91bece8d->enter($__internal_de391895279824555333e6764b1c54f3d55c902915743f3e1802670a91bece8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de391895279824555333e6764b1c54f3d55c902915743f3e1802670a91bece8d->leave($__internal_de391895279824555333e6764b1c54f3d55c902915743f3e1802670a91bece8d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c0193f52bfd08aab25dc4685ac31b808f2894645d437199db24382e2d41e12d8 = $this->env->getExtension("native_profiler");
        $__internal_c0193f52bfd08aab25dc4685ac31b808f2894645d437199db24382e2d41e12d8->enter($__internal_c0193f52bfd08aab25dc4685ac31b808f2894645d437199db24382e2d41e12d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c0193f52bfd08aab25dc4685ac31b808f2894645d437199db24382e2d41e12d8->leave($__internal_c0193f52bfd08aab25dc4685ac31b808f2894645d437199db24382e2d41e12d8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
