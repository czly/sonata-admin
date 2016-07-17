<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_dcf9a7bda304d4615115138ed836bfb6eabe04eadea94e2b3cbd637b0e4f3413 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd50100758a8dc6d2f67e1a45713bdabcfc2d817650f0142b4d2ecb92461d6d6 = $this->env->getExtension("native_profiler");
        $__internal_bd50100758a8dc6d2f67e1a45713bdabcfc2d817650f0142b4d2ecb92461d6d6->enter($__internal_bd50100758a8dc6d2f67e1a45713bdabcfc2d817650f0142b4d2ecb92461d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd50100758a8dc6d2f67e1a45713bdabcfc2d817650f0142b4d2ecb92461d6d6->leave($__internal_bd50100758a8dc6d2f67e1a45713bdabcfc2d817650f0142b4d2ecb92461d6d6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_af947cfa3cc2f035f52fb22d03e29d381b3a9b53727516dca9923883b1595660 = $this->env->getExtension("native_profiler");
        $__internal_af947cfa3cc2f035f52fb22d03e29d381b3a9b53727516dca9923883b1595660->enter($__internal_af947cfa3cc2f035f52fb22d03e29d381b3a9b53727516dca9923883b1595660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_af947cfa3cc2f035f52fb22d03e29d381b3a9b53727516dca9923883b1595660->leave($__internal_af947cfa3cc2f035f52fb22d03e29d381b3a9b53727516dca9923883b1595660_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
