<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_e68776e565780535735f44d8d8cbc22e0bce43a8c413c5d7635a21613f1b85e5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f281281bb83a51b660b8e256416781033944e2d3305c6d462d0afa35c5fa981 = $this->env->getExtension("native_profiler");
        $__internal_8f281281bb83a51b660b8e256416781033944e2d3305c6d462d0afa35c5fa981->enter($__internal_8f281281bb83a51b660b8e256416781033944e2d3305c6d462d0afa35c5fa981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f281281bb83a51b660b8e256416781033944e2d3305c6d462d0afa35c5fa981->leave($__internal_8f281281bb83a51b660b8e256416781033944e2d3305c6d462d0afa35c5fa981_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_713345590b928763c851b046b61b5a59990235d55ebceb2f78a959cf9cd40d32 = $this->env->getExtension("native_profiler");
        $__internal_713345590b928763c851b046b61b5a59990235d55ebceb2f78a959cf9cd40d32->enter($__internal_713345590b928763c851b046b61b5a59990235d55ebceb2f78a959cf9cd40d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_713345590b928763c851b046b61b5a59990235d55ebceb2f78a959cf9cd40d32->leave($__internal_713345590b928763c851b046b61b5a59990235d55ebceb2f78a959cf9cd40d32_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
