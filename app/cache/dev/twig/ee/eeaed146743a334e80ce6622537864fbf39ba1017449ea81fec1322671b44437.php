<?php

/* SonataMediaBundle:MediaAdmin:select_provider.html.twig */
class __TwigTemplate_1d0a260d4dc0289f831b59e7f4820c945589701d1eb44184acdf0106d2a31b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "SonataMediaBundle:MediaAdmin:select_provider.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a662ff64cbea30a03d4394a04d5b64468b5e0536e11ef6f06a4d3bc8c16d6bf = $this->env->getExtension("native_profiler");
        $__internal_4a662ff64cbea30a03d4394a04d5b64468b5e0536e11ef6f06a4d3bc8c16d6bf->enter($__internal_4a662ff64cbea30a03d4394a04d5b64468b5e0536e11ef6f06a4d3bc8c16d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:select_provider.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a662ff64cbea30a03d4394a04d5b64468b5e0536e11ef6f06a4d3bc8c16d6bf->leave($__internal_4a662ff64cbea30a03d4394a04d5b64468b5e0536e11ef6f06a4d3bc8c16d6bf_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b0af74196cc3d6fc04b7e2a3cca94f1b12bac6745dd10475ba709c33bad8a78 = $this->env->getExtension("native_profiler");
        $__internal_5b0af74196cc3d6fc04b7e2a3cca94f1b12bac6745dd10475ba709c33bad8a78->enter($__internal_5b0af74196cc3d6fc04b7e2a3cca94f1b12bac6745dd10475ba709c33bad8a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_select_provider", array(), "SonataMediaBundle"), "html", null, true);
        
        $__internal_5b0af74196cc3d6fc04b7e2a3cca94f1b12bac6745dd10475ba709c33bad8a78->leave($__internal_5b0af74196cc3d6fc04b7e2a3cca94f1b12bac6745dd10475ba709c33bad8a78_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_37cdd259803a17735971824ee96cd4251442e18b8696b0d260f1db9bb0774d64 = $this->env->getExtension("native_profiler");
        $__internal_37cdd259803a17735971824ee96cd4251442e18b8696b0d260f1db9bb0774d64->enter($__internal_37cdd259803a17735971824ee96cd4251442e18b8696b0d260f1db9bb0774d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 20
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["code"] => $context["provider"]) {
            // line 25
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("provider" => $this->getAttribute($context["provider"], "name", array()))), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                       data-toggle=\"tooltip\"
                       data-placement=\"top\"
                       title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array()), "description", array()), array(), (($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array(), "any", false, true), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array(), "any", false, true), "domain", array()), "SonataMediaBundle")) : ("SonataMediaBundle"))), "html", null, true);
            echo "\"
                            >
                        ";
            // line 32
            if ( !$this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array()), "image", array())) {
                // line 33
                echo "                            <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array()), "option", array(0 => "class"), "method"), "html", null, true);
                echo "\"></i>
                        ";
            } else {
                // line 35
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array()), "image", array())), "html", null, true);
                echo "\" style=\"max-height: 20px; max-width: 100px;\"/>
                            <br />
                        ";
            }
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array()), "title", array()), array(), (($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array(), "any", false, true), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["provider"], "providerMetadata", array(), "any", false, true), "domain", array()), "SonataMediaBundle")) : ("SonataMediaBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_provider_available", array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_37cdd259803a17735971824ee96cd4251442e18b8696b0d260f1db9bb0774d64->leave($__internal_37cdd259803a17735971824ee96cd4251442e18b8696b0d260f1db9bb0774d64_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:select_provider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  110 => 42,  100 => 38,  93 => 35,  87 => 33,  85 => 32,  80 => 30,  73 => 26,  70 => 25,  65 => 24,  58 => 20,  53 => 17,  47 => 16,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:action.html.twig' %}*/
/* */
/* {% block title %}{{ 'title_select_provider'|trans({}, 'SonataMediaBundle') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="box box-success">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title">*/
/*                 {{ block('title') }}*/
/*             </h3>*/
/*         </div>*/
/*         <div class="box-body">*/
/*             {% for code, provider in providers %}*/
/*                 <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">*/
/*                     <a href="{{ admin.generateUrl('create', {'provider': provider.name}) }}"*/
/*                        class="btn btn-app btn-block"*/
/*                        data-toggle="tooltip"*/
/*                        data-placement="top"*/
/*                        title="{{ provider.providerMetadata.description|trans({}, provider.providerMetadata.domain|default('SonataMediaBundle')) }}"*/
/*                             >*/
/*                         {% if not provider.providerMetadata.image %}*/
/*                             <i class="{{ provider.providerMetadata.option('class') }}"></i>*/
/*                         {% else %}*/
/*                             <img src="{{ asset(provider.providerMetadata.image) }}" style="max-height: 20px; max-width: 100px;"/>*/
/*                             <br />*/
/*                         {% endif %}*/
/*                         {{ provider.providerMetadata.title|trans({}, provider.providerMetadata.domain|default('SonataMediaBundle')) }}*/
/*                     </a>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <span class="alert alert-info">{{ 'no_provider_available'|trans({}, 'SonataMediaBundle') }}</span>*/
/*             {% endfor %}*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
