<?php

/* SonataMediaBundle:MediaAdmin:list_image.html.twig */
class __TwigTemplate_10ed20e83a985ddb2ee3953689ffc57eb953261535b34b41674444ae950ee321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataMediaBundle:MediaAdmin:list_image.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db70c9d4c93978289f7e7b8b294f6e30eb8f8cc7096a41aab52d8fd0013b67b0 = $this->env->getExtension("native_profiler");
        $__internal_db70c9d4c93978289f7e7b8b294f6e30eb8f8cc7096a41aab52d8fd0013b67b0->enter($__internal_db70c9d4c93978289f7e7b8b294f6e30eb8f8cc7096a41aab52d8fd0013b67b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db70c9d4c93978289f7e7b8b294f6e30eb8f8cc7096a41aab52d8fd0013b67b0->leave($__internal_db70c9d4c93978289f7e7b8b294f6e30eb8f8cc7096a41aab52d8fd0013b67b0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c0870c953a37e9a577e51a6ca94d4c08e41c73b76c6ae2c9ced29f0aa571f1fa = $this->env->getExtension("native_profiler");
        $__internal_c0870c953a37e9a577e51a6ca94d4c08e41c73b76c6ae2c9ced29f0aa571f1fa->enter($__internal_c0870c953a37e9a577e51a6ca94d4c08e41c73b76c6ae2c9ced29f0aa571f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array())), "admin", array("width" => 75, "height" => 60));
        echo "</a>
";
        
        $__internal_c0870c953a37e9a577e51a6ca94d4c08e41c73b76c6ae2c9ced29f0aa571f1fa->leave($__internal_c0870c953a37e9a577e51a6ca94d4c08e41c73b76c6ae2c9ced29f0aa571f1fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     <a href="{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}">{% thumbnail attribute(object, field_description.name ), 'admin' with {'width': 75, 'height': 60} %}</a>*/
/* {% endblock %}*/
/* */
