<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_f3da6486611185fea42cb6dfffeaf80133e22644ff9efcafae1b96a0ecc8426a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f712cc3ce6623b0bcbeedbd32d8bf6bf3cb24e56afc9fc1e489b2d91865013a = $this->env->getExtension("native_profiler");
        $__internal_1f712cc3ce6623b0bcbeedbd32d8bf6bf3cb24e56afc9fc1e489b2d91865013a->enter($__internal_1f712cc3ce6623b0bcbeedbd32d8bf6bf3cb24e56afc9fc1e489b2d91865013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f712cc3ce6623b0bcbeedbd32d8bf6bf3cb24e56afc9fc1e489b2d91865013a->leave($__internal_1f712cc3ce6623b0bcbeedbd32d8bf6bf3cb24e56afc9fc1e489b2d91865013a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5e1a8c928e18bcd1533a8fb73d5c9793d1f9e5cfa76fdbe68cbfe39108038c2 = $this->env->getExtension("native_profiler");
        $__internal_b5e1a8c928e18bcd1533a8fb73d5c9793d1f9e5cfa76fdbe68cbfe39108038c2->enter($__internal_b5e1a8c928e18bcd1533a8fb73d5c9793d1f9e5cfa76fdbe68cbfe39108038c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b5e1a8c928e18bcd1533a8fb73d5c9793d1f9e5cfa76fdbe68cbfe39108038c2->leave($__internal_b5e1a8c928e18bcd1533a8fb73d5c9793d1f9e5cfa76fdbe68cbfe39108038c2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
