<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_4b8358b3fcab5c9c76afe335722d74b82dbb4f650f34d6d82f4b2b1a801c02a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_354bc6c697fc3f3417733856a1139a763b69173e4418bbe14590853cca2927b6 = $this->env->getExtension("native_profiler");
        $__internal_354bc6c697fc3f3417733856a1139a763b69173e4418bbe14590853cca2927b6->enter($__internal_354bc6c697fc3f3417733856a1139a763b69173e4418bbe14590853cca2927b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:view_image.html.twig"));

        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
        
        $__internal_354bc6c697fc3f3417733856a1139a763b69173e4418bbe14590853cca2927b6->leave($__internal_354bc6c697fc3f3417733856a1139a763b69173e4418bbe14590853cca2927b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* <img {% for name, value in options %}{{ name }}="{{ value }}" {% endfor %} />*/
/* */
