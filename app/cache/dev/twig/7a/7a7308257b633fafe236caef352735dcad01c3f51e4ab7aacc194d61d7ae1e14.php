<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_9f31e3af593eaded906ecdeef86a14c35042e75da96731be9f659722db5a97c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85e35cd686d45e862ea094e386020316db6dccb9e406eb890c45d8180d7c308e = $this->env->getExtension("native_profiler");
        $__internal_85e35cd686d45e862ea094e386020316db6dccb9e406eb890c45d8180d7c308e->enter($__internal_85e35cd686d45e862ea094e386020316db6dccb9e406eb890c45d8180d7c308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e35cd686d45e862ea094e386020316db6dccb9e406eb890c45d8180d7c308e->leave($__internal_85e35cd686d45e862ea094e386020316db6dccb9e406eb890c45d8180d7c308e_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5a362f1de4c8a2083299cc147f9f16410b28cb61e5dab02c22321413be0623da = $this->env->getExtension("native_profiler");
        $__internal_5a362f1de4c8a2083299cc147f9f16410b28cb61e5dab02c22321413be0623da->enter($__internal_5a362f1de4c8a2083299cc147f9f16410b28cb61e5dab02c22321413be0623da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_5a362f1de4c8a2083299cc147f9f16410b28cb61e5dab02c22321413be0623da->leave($__internal_5a362f1de4c8a2083299cc147f9f16410b28cb61e5dab02c22321413be0623da_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_468a781f0d944aae28d613d7ca3a7d24899c086731fbc87c69c4cb7a518f7474 = $this->env->getExtension("native_profiler");
        $__internal_468a781f0d944aae28d613d7ca3a7d24899c086731fbc87c69c4cb7a518f7474->enter($__internal_468a781f0d944aae28d613d7ca3a7d24899c086731fbc87c69c4cb7a518f7474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_468a781f0d944aae28d613d7ca3a7d24899c086731fbc87c69c4cb7a518f7474->leave($__internal_468a781f0d944aae28d613d7ca3a7d24899c086731fbc87c69c4cb7a518f7474_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd51b68856a1d6b08a7906fee7bf08835bb9678fb1ffa6db41b23c1fd2da0971 = $this->env->getExtension("native_profiler");
        $__internal_dd51b68856a1d6b08a7906fee7bf08835bb9678fb1ffa6db41b23c1fd2da0971->enter($__internal_dd51b68856a1d6b08a7906fee7bf08835bb9678fb1ffa6db41b23c1fd2da0971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_dd51b68856a1d6b08a7906fee7bf08835bb9678fb1ffa6db41b23c1fd2da0971->leave($__internal_dd51b68856a1d6b08a7906fee7bf08835bb9678fb1ffa6db41b23c1fd2da0971_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
