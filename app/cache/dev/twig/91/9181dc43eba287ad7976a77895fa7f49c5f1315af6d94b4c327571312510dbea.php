<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_a73240dddab704a69af8da67f49d79085895230c43113452fb8cf22974a54d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 12);
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
        $__internal_c1558843f25a150f55cb1374e912fab8853b815ca90a57ed1048dba9be049700 = $this->env->getExtension("native_profiler");
        $__internal_c1558843f25a150f55cb1374e912fab8853b815ca90a57ed1048dba9be049700->enter($__internal_c1558843f25a150f55cb1374e912fab8853b815ca90a57ed1048dba9be049700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1558843f25a150f55cb1374e912fab8853b815ca90a57ed1048dba9be049700->leave($__internal_c1558843f25a150f55cb1374e912fab8853b815ca90a57ed1048dba9be049700_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fccbae42b0c72dd7d573dfc982d22e06f694675ce26fdbd5d1dff0f76dad76f6 = $this->env->getExtension("native_profiler");
        $__internal_fccbae42b0c72dd7d573dfc982d22e06f694675ce26fdbd5d1dff0f76dad76f6->enter($__internal_fccbae42b0c72dd7d573dfc982d22e06f694675ce26fdbd5d1dff0f76dad76f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 23
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || (false == $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())))) {
                    echo "<br>";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fccbae42b0c72dd7d573dfc982d22e06f694675ce26fdbd5d1dff0f76dad76f6->leave($__internal_fccbae42b0c72dd7d573dfc982d22e06f694675ce26fdbd5d1dff0f76dad76f6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  87 => 24,  82 => 23,  80 => 22,  77 => 21,  69 => 19,  61 => 17,  58 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% for key, val in value %}*/
/*         {% if field_description.options.safe %}*/
/*             [{{ key }} => {{ val|raw }}]*/
/*         {% else %}*/
/*             [{{ key }} => {{ val }}]*/
/*         {% endif %}*/
/* */
/*         {% if not loop.last %}*/
/*             {% if field_description.options.inline is not defined or false == field_description.options.inline %}<br>{% endif %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
