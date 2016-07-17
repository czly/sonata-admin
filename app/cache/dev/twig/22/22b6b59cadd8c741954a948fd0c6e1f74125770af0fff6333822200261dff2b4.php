<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_02b083a8e2a2e42b7c86b7c36486abfc8cb0936500237fb32ae6a261478b1b11 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d022508a06c4a4c03700704ab8adf1bebb5d231891999cf462b1568cac24830b = $this->env->getExtension("native_profiler");
        $__internal_d022508a06c4a4c03700704ab8adf1bebb5d231891999cf462b1568cac24830b->enter($__internal_d022508a06c4a4c03700704ab8adf1bebb5d231891999cf462b1568cac24830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d022508a06c4a4c03700704ab8adf1bebb5d231891999cf462b1568cac24830b->leave($__internal_d022508a06c4a4c03700704ab8adf1bebb5d231891999cf462b1568cac24830b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa74672bda66f684c80d47c05e32d122213fce577cd57da81307060aa6da1643 = $this->env->getExtension("native_profiler");
        $__internal_fa74672bda66f684c80d47c05e32d122213fce577cd57da81307060aa6da1643->enter($__internal_fa74672bda66f684c80d47c05e32d122213fce577cd57da81307060aa6da1643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fa74672bda66f684c80d47c05e32d122213fce577cd57da81307060aa6da1643->leave($__internal_fa74672bda66f684c80d47c05e32d122213fce577cd57da81307060aa6da1643_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
