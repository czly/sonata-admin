<?php

/* SonataIntlBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_09966721c4a74e9d0a939b35c91ef253c08ca5f44c8b9c46ada402aae816863a extends Twig_Template
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
        $__internal_c4ab01ca5ae4530ff449bf291bf11ade61d23e302a49f6bd90b61046cf17a6c6 = $this->env->getExtension("native_profiler");
        $__internal_c4ab01ca5ae4530ff449bf291bf11ade61d23e302a49f6bd90b61046cf17a6c6->enter($__internal_c4ab01ca5ae4530ff449bf291bf11ade61d23e302a49f6bd90b61046cf17a6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array()));
        echo "
";
        
        $__internal_c4ab01ca5ae4530ff449bf291bf11ade61d23e302a49f6bd90b61046cf17a6c6->leave($__internal_c4ab01ca5ae4530ff449bf291bf11ade61d23e302a49f6bd90b61046cf17a6c6_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig";
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
/* {{ revision.timestamp | format_datetime }}*/
/* */
