<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_53cbc318da34a86efcf5cbcd3dbceee00549b85fd701a4ad93bd1a70c3deed7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6a97bce3bacc9ecdbdcc5b016a478ada5331b63afc80f6ee18a9dbe57f75540 = $this->env->getExtension("native_profiler");
        $__internal_a6a97bce3bacc9ecdbdcc5b016a478ada5331b63afc80f6ee18a9dbe57f75540->enter($__internal_a6a97bce3bacc9ecdbdcc5b016a478ada5331b63afc80f6ee18a9dbe57f75540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_a6a97bce3bacc9ecdbdcc5b016a478ada5331b63afc80f6ee18a9dbe57f75540->leave($__internal_a6a97bce3bacc9ecdbdcc5b016a478ada5331b63afc80f6ee18a9dbe57f75540_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce86aa96c7f5a335c068dc3b036bc13f564b30cf437d592c2ac8f6d22011f8f0 = $this->env->getExtension("native_profiler");
        $__internal_ce86aa96c7f5a335c068dc3b036bc13f564b30cf437d592c2ac8f6d22011f8f0->enter($__internal_ce86aa96c7f5a335c068dc3b036bc13f564b30cf437d592c2ac8f6d22011f8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_ce86aa96c7f5a335c068dc3b036bc13f564b30cf437d592c2ac8f6d22011f8f0->leave($__internal_ce86aa96c7f5a335c068dc3b036bc13f564b30cf437d592c2ac8f6d22011f8f0_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_7e94d76e3b425c171e60256b4a7fbc4423b2009fff29c51c7fca07e40d4d7b78 = $this->env->getExtension("native_profiler");
        $__internal_7e94d76e3b425c171e60256b4a7fbc4423b2009fff29c51c7fca07e40d4d7b78->enter($__internal_7e94d76e3b425c171e60256b4a7fbc4423b2009fff29c51c7fca07e40d4d7b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_7e94d76e3b425c171e60256b4a7fbc4423b2009fff29c51c7fca07e40d4d7b78->leave($__internal_7e94d76e3b425c171e60256b4a7fbc4423b2009fff29c51c7fca07e40d4d7b78_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_f8859a9c0940f4f520f75274216084f3404de15251d5431d836e72ae85701308 = $this->env->getExtension("native_profiler");
        $__internal_f8859a9c0940f4f520f75274216084f3404de15251d5431d836e72ae85701308->enter($__internal_f8859a9c0940f4f520f75274216084f3404de15251d5431d836e72ae85701308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_f8859a9c0940f4f520f75274216084f3404de15251d5431d836e72ae85701308->leave($__internal_f8859a9c0940f4f520f75274216084f3404de15251d5431d836e72ae85701308_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
