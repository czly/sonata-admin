<?php

/* SonataClassificationBundle:CategoryAdmin:list.html.twig */
class __TwigTemplate_0da7cfa5202f810adfd440f38814d7f3381f2ca9cb88d419fd77e7a6f5cba306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataClassificationBundle:CategoryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abeafb5beaa78de29dc1e62b535190ee853c2ac97b9eb70d02a949f2ca14cac4 = $this->env->getExtension("native_profiler");
        $__internal_abeafb5beaa78de29dc1e62b535190ee853c2ac97b9eb70d02a949f2ca14cac4->enter($__internal_abeafb5beaa78de29dc1e62b535190ee853c2ac97b9eb70d02a949f2ca14cac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataClassificationBundle:CategoryAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abeafb5beaa78de29dc1e62b535190ee853c2ac97b9eb70d02a949f2ca14cac4->leave($__internal_abeafb5beaa78de29dc1e62b535190ee853c2ac97b9eb70d02a949f2ca14cac4_prof);

    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_bbbdf662430babad1cc539231aeea0ce9566e1fba19c25f64c4793261013932e = $this->env->getExtension("native_profiler");
        $__internal_bbbdf662430babad1cc539231aeea0ce9566e1fba19c25f64c4793261013932e->enter($__internal_bbbdf662430babad1cc539231aeea0ce9566e1fba19c25f64c4793261013932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig", "SonataClassificationBundle:CategoryAdmin:list.html.twig", 15)->display(array("mode" => "list", "action" =>         // line 17
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 18
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
        
        $__internal_bbbdf662430babad1cc539231aeea0ce9566e1fba19c25f64c4793261013932e->leave($__internal_bbbdf662430babad1cc539231aeea0ce9566e1fba19c25f64c4793261013932e_prof);

    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  42 => 17,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
/* {% block tab_menu %}*/
/*     {% include 'SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig' with {*/
/*         'mode':   'list',*/
/*         'action': action,*/
/*         'admin':  admin,*/
/*     } only %}*/
/* {% endblock %}*/
