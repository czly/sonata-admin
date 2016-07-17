<?php

/* SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_4bc4f302140988329bfeb1f6994401cf23745dd189d4628b0f60ea318ad752c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", 12);
        $this->blocks = array(
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7733eb403ca12c80b03ac2b65545cd380065c8880cbe94e33ab9ef42d1bafafc = $this->env->getExtension("native_profiler");
        $__internal_7733eb403ca12c80b03ac2b65545cd380065c8880cbe94e33ab9ef42d1bafafc->enter($__internal_7733eb403ca12c80b03ac2b65545cd380065c8880cbe94e33ab9ef42d1bafafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7733eb403ca12c80b03ac2b65545cd380065c8880cbe94e33ab9ef42d1bafafc->leave($__internal_7733eb403ca12c80b03ac2b65545cd380065c8880cbe94e33ab9ef42d1bafafc_prof);

    }

    // line 14
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_d7aa22807e2ca8283f055dee7d41920846d0ebb2f893aad853547c274e35e4eb = $this->env->getExtension("native_profiler");
        $__internal_d7aa22807e2ca8283f055dee7d41920846d0ebb2f893aad853547c274e35e4eb->enter($__internal_d7aa22807e2ca8283f055dee7d41920846d0ebb2f893aad853547c274e35e4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 15
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_d7aa22807e2ca8283f055dee7d41920846d0ebb2f893aad853547c274e35e4eb->leave($__internal_d7aa22807e2ca8283f055dee7d41920846d0ebb2f893aad853547c274e35e4eb_prof);

    }

    // line 18
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_8e305ab11f50ac4f72e11f22dade4e4938c1f2c83f2b78ea4ea470609d5a5473 = $this->env->getExtension("native_profiler");
        $__internal_8e305ab11f50ac4f72e11f22dade4e4938c1f2c83f2b78ea4ea470609d5a5473->enter($__internal_8e305ab11f50ac4f72e11f22dade4e4938c1f2c83f2b78ea4ea470609d5a5473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 19
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>

    ";
        // line 21
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width", array()), "html", null, true);
            if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height", array())) {
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height", array()), "html", null, true);
            }
            echo "px";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "length", array()) > 0)) {
            // line 23
            echo "        (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "length", array()), "html", null, true);
            echo ")
    ";
        }
        // line 25
        echo "
    <br />

    ";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname", array()))) {
            // line 29
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname", array()), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright", array())) &&  !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname", array())))) {
            // line 33
            echo "        ~
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright", array()))) {
            // line 37
            echo "        &copy; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright", array()), "html", null, true);
            echo "
    ";
        }
        // line 39
        echo "
";
        
        $__internal_8e305ab11f50ac4f72e11f22dade4e4938c1f2c83f2b78ea4ea470609d5a5473->leave($__internal_8e305ab11f50ac4f72e11f22dade4e4938c1f2c83f2b78ea4ea470609d5a5473_prof);

    }

    // line 42
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_aa011f23a46e9e2ac8e43c2c80a6600aca44e1587820c39552b6bce85ce31e6f = $this->env->getExtension("native_profiler");
        $__internal_aa011f23a46e9e2ac8e43c2c80a6600aca44e1587820c39552b6bce85ce31e6f->enter($__internal_aa011f23a46e9e2ac8e43c2c80a6600aca44e1587820c39552b6bce85ce31e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 43
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 44
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } elseif (($this->getAttribute(        // line 45
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "SHOW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 46
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
    ";
        }
        
        $__internal_aa011f23a46e9e2ac8e43c2c80a6600aca44e1587820c39552b6bce85ce31e6f->leave($__internal_aa011f23a46e9e2ac8e43c2c80a6600aca44e1587820c39552b6bce85ce31e6f_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  142 => 46,  140 => 45,  133 => 44,  130 => 43,  124 => 42,  116 => 39,  110 => 37,  108 => 36,  105 => 35,  101 => 33,  99 => 32,  96 => 31,  90 => 29,  88 => 28,  83 => 25,  77 => 23,  74 => 22,  64 => 21,  58 => 19,  52 => 18,  42 => 15,  36 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig' %}*/
/* */
/* {% block sonata_mosaic_default_view %}*/
/*     <span class="mosaic-box-label label label-primary pull-right">{{ object.providerName|trans({}, 'SonataMediaBundle') }}</span>*/
/* {% endblock %}*/
/* */
/* {% block sonata_mosaic_hover_view %}*/
/*     <span class="mosaic-box-label label label-primary pull-right">{{ object.providerName|trans({}, 'SonataMediaBundle') }}</span>*/
/* */
/*     {% if object.width %} {{ object.width }}{% if object.height %}x{{ object.height }}{% endif %}px{% endif %}*/
/*     {% if object.length > 0 %}*/
/*         ({{ object.length }})*/
/*     {% endif %}*/
/* */
/*     <br />*/
/* */
/*     {% if object.authorname is not empty %}*/
/*        {{ object.authorname }}*/
/*     {% endif %}*/
/* */
/*     {% if object.copyright is not empty and object.authorname is not empty %}*/
/*         ~*/
/*     {% endif %}*/
/* */
/*     {% if object.copyright is not empty %}*/
/*         &copy; {{ object.copyright }}*/
/*     {% endif  %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_mosaic_description %}*/
/*     {% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}*/
/*         <a class="mosaic-inner-link" href="{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}">{{ meta.title|truncate(40) }}</a>*/
/*     {% elseif admin.isGranted('SHOW', object) and admin.hasRoute('show') %}*/
/*         <a class="mosaic-inner-link" href="{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid }) }}">{{ meta.title|truncate(40) }}</a>*/
/*     {% else %}*/
/*         {{ meta.title|truncate(40) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
