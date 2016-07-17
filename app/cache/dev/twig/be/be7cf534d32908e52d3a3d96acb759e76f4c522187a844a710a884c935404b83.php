<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_67504b14b8c3ea0fc3fd38921b5c4edee5f39d9f4fa672e3105bb3e2da3e7372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d057cad46b8c0463428ac5b74730ee48d8fdd9f4f35e73990128dca25875086 = $this->env->getExtension("native_profiler");
        $__internal_4d057cad46b8c0463428ac5b74730ee48d8fdd9f4f35e73990128dca25875086->enter($__internal_4d057cad46b8c0463428ac5b74730ee48d8fdd9f4f35e73990128dca25875086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d057cad46b8c0463428ac5b74730ee48d8fdd9f4f35e73990128dca25875086->leave($__internal_4d057cad46b8c0463428ac5b74730ee48d8fdd9f4f35e73990128dca25875086_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7f5fcdf2bec992c58729c3f278acb90e6e93f91aaaf78620ec5850ace471b2a6 = $this->env->getExtension("native_profiler");
        $__internal_7f5fcdf2bec992c58729c3f278acb90e6e93f91aaaf78620ec5850ace471b2a6->enter($__internal_7f5fcdf2bec992c58729c3f278acb90e6e93f91aaaf78620ec5850ace471b2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_7f5fcdf2bec992c58729c3f278acb90e6e93f91aaaf78620ec5850ace471b2a6->leave($__internal_7f5fcdf2bec992c58729c3f278acb90e6e93f91aaaf78620ec5850ace471b2a6_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_1b9949234edd9981cdd0ff33d91ff9d5571c7be658319da3e765522a481f65d4 = $this->env->getExtension("native_profiler");
        $__internal_1b9949234edd9981cdd0ff33d91ff9d5571c7be658319da3e765522a481f65d4->enter($__internal_1b9949234edd9981cdd0ff33d91ff9d5571c7be658319da3e765522a481f65d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1b9949234edd9981cdd0ff33d91ff9d5571c7be658319da3e765522a481f65d4->leave($__internal_1b9949234edd9981cdd0ff33d91ff9d5571c7be658319da3e765522a481f65d4_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_7ea1ecc9523e1c260350d9d048a069f90366503a2dae60cb49c980bf030c69b9 = $this->env->getExtension("native_profiler");
        $__internal_7ea1ecc9523e1c260350d9d048a069f90366503a2dae60cb49c980bf030c69b9->enter($__internal_7ea1ecc9523e1c260350d9d048a069f90366503a2dae60cb49c980bf030c69b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_7ea1ecc9523e1c260350d9d048a069f90366503a2dae60cb49c980bf030c69b9->leave($__internal_7ea1ecc9523e1c260350d9d048a069f90366503a2dae60cb49c980bf030c69b9_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_9e0ef30ded1b247707fd3aedc0a9746fb9d4e086b45da74c05bff0bc188826ac = $this->env->getExtension("native_profiler");
        $__internal_9e0ef30ded1b247707fd3aedc0a9746fb9d4e086b45da74c05bff0bc188826ac->enter($__internal_9e0ef30ded1b247707fd3aedc0a9746fb9d4e086b45da74c05bff0bc188826ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_9e0ef30ded1b247707fd3aedc0a9746fb9d4e086b45da74c05bff0bc188826ac->leave($__internal_9e0ef30ded1b247707fd3aedc0a9746fb9d4e086b45da74c05bff0bc188826ac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
