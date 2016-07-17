<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_53c142183f1a88c89017a635553a36f89abd151b0bea37f2fd5dbac624b57687 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05321889ec8ffb571b2cbe554efe91356cd991fa3aa83dc3ff5dae32efdff571 = $this->env->getExtension("native_profiler");
        $__internal_05321889ec8ffb571b2cbe554efe91356cd991fa3aa83dc3ff5dae32efdff571->enter($__internal_05321889ec8ffb571b2cbe554efe91356cd991fa3aa83dc3ff5dae32efdff571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05321889ec8ffb571b2cbe554efe91356cd991fa3aa83dc3ff5dae32efdff571->leave($__internal_05321889ec8ffb571b2cbe554efe91356cd991fa3aa83dc3ff5dae32efdff571_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
