<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_1e508089f50f4dff0ae8062360387d1a43d20752138816d6ba4e79fe8fb56b78 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5177e39613de1f1f730d2f56004aaf56b02cd12d9e1f408bf78617f088677841 = $this->env->getExtension("native_profiler");
        $__internal_5177e39613de1f1f730d2f56004aaf56b02cd12d9e1f408bf78617f088677841->enter($__internal_5177e39613de1f1f730d2f56004aaf56b02cd12d9e1f408bf78617f088677841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5177e39613de1f1f730d2f56004aaf56b02cd12d9e1f408bf78617f088677841->leave($__internal_5177e39613de1f1f730d2f56004aaf56b02cd12d9e1f408bf78617f088677841_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_27d82bec876e731e10c01802de921f880879b49993bebd10b0ea24771011d414 = $this->env->getExtension("native_profiler");
        $__internal_27d82bec876e731e10c01802de921f880879b49993bebd10b0ea24771011d414->enter($__internal_27d82bec876e731e10c01802de921f880879b49993bebd10b0ea24771011d414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_27d82bec876e731e10c01802de921f880879b49993bebd10b0ea24771011d414->leave($__internal_27d82bec876e731e10c01802de921f880879b49993bebd10b0ea24771011d414_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
