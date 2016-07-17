<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_c850cab765fe7d3ae83a2e3451d8bdd19c31a5f67231ee2390467dc78dfd1177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
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
        $__internal_1fd4766c538aef150e274946d22625ac6557e51599d71fa40902d00bbbcae31e = $this->env->getExtension("native_profiler");
        $__internal_1fd4766c538aef150e274946d22625ac6557e51599d71fa40902d00bbbcae31e->enter($__internal_1fd4766c538aef150e274946d22625ac6557e51599d71fa40902d00bbbcae31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd4766c538aef150e274946d22625ac6557e51599d71fa40902d00bbbcae31e->leave($__internal_1fd4766c538aef150e274946d22625ac6557e51599d71fa40902d00bbbcae31e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8c3410006a3f3553a5641f3b28532fca31c6ad11db9c3d5591e6ac011b81a7ba = $this->env->getExtension("native_profiler");
        $__internal_8c3410006a3f3553a5641f3b28532fca31c6ad11db9c3d5591e6ac011b81a7ba->enter($__internal_8c3410006a3f3553a5641f3b28532fca31c6ad11db9c3d5591e6ac011b81a7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 18
        echo "    ";
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role"))), "method"))) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 20
                echo "            <li>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 28
                echo "            <li>
                ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "    </ul>
";
        
        $__internal_8c3410006a3f3553a5641f3b28532fca31c6ad11db9c3d5591e6ac011b81a7ba->leave($__internal_8c3410006a3f3553a5641f3b28532fca31c6ad11db9c3d5591e6ac011b81a7ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  93 => 32,  84 => 29,  81 => 28,  76 => 27,  73 => 26,  63 => 22,  59 => 21,  56 => 20,  51 => 19,  48 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field%}*/
/*     <ul class="sonata-ba-show-many-to-many">*/
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.isGranted(route_role)%}*/
/*         {% for element in value %}*/
/*             <li>*/
/*                 <a href="{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}">*/
/*                     {{ element|render_relation_element(field_description) }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for element in value %}*/
/*             <li>*/
/*                 {{ element|render_relation_element(field_description) }}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
