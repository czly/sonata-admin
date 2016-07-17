<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_7ae5c3177daeb879f543485b33a47f60fd025d935268c7570db57d8224860492 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f94b85d62992024ff7c609f342e07f3ff89a712cddd99666dd2e8a2e9924007 = $this->env->getExtension("native_profiler");
        $__internal_9f94b85d62992024ff7c609f342e07f3ff89a712cddd99666dd2e8a2e9924007->enter($__internal_9f94b85d62992024ff7c609f342e07f3ff89a712cddd99666dd2e8a2e9924007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f94b85d62992024ff7c609f342e07f3ff89a712cddd99666dd2e8a2e9924007->leave($__internal_9f94b85d62992024ff7c609f342e07f3ff89a712cddd99666dd2e8a2e9924007_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_565841c6b91f5e352eb79f7e630d0208f566976acb518f5fcc3b63ac4bbb6ddc = $this->env->getExtension("native_profiler");
        $__internal_565841c6b91f5e352eb79f7e630d0208f566976acb518f5fcc3b63ac4bbb6ddc->enter($__internal_565841c6b91f5e352eb79f7e630d0208f566976acb518f5fcc3b63ac4bbb6ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_565841c6b91f5e352eb79f7e630d0208f566976acb518f5fcc3b63ac4bbb6ddc->leave($__internal_565841c6b91f5e352eb79f7e630d0208f566976acb518f5fcc3b63ac4bbb6ddc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
