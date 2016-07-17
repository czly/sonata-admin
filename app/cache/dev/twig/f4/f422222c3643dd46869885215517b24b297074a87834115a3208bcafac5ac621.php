<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_81b226fa234b090a6c8614b19c8f12439fd50e537d124ba0f8843473c125c385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8ec115963b4c3196406918756e0433a4ce0e29bdc8021bc273623366d61a4d = $this->env->getExtension("native_profiler");
        $__internal_2b8ec115963b4c3196406918756e0433a4ce0e29bdc8021bc273623366d61a4d->enter($__internal_2b8ec115963b4c3196406918756e0433a4ce0e29bdc8021bc273623366d61a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8ec115963b4c3196406918756e0433a4ce0e29bdc8021bc273623366d61a4d->leave($__internal_2b8ec115963b4c3196406918756e0433a4ce0e29bdc8021bc273623366d61a4d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_88f0e2f7158a22d50c55dfb2178b016a930512a070f1d89f1c68f7684a12dab8 = $this->env->getExtension("native_profiler");
        $__internal_88f0e2f7158a22d50c55dfb2178b016a930512a070f1d89f1c68f7684a12dab8->enter($__internal_88f0e2f7158a22d50c55dfb2178b016a930512a070f1d89f1c68f7684a12dab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88f0e2f7158a22d50c55dfb2178b016a930512a070f1d89f1c68f7684a12dab8->leave($__internal_88f0e2f7158a22d50c55dfb2178b016a930512a070f1d89f1c68f7684a12dab8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
