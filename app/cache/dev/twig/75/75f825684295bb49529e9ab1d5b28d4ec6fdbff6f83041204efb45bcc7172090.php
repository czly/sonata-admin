<?php

/* SonataFormatterBundle:Block:block_formatter.html.twig */
class __TwigTemplate_61bc26d011c3a0491e92e9a68439d5c98579ff8528229e309f919081b6d85f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataFormatterBundle:Block:block_formatter.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd9478d237b4cf819613163403a7dcee60f14e03a6f66482b7287eb601fd9b59 = $this->env->getExtension("native_profiler");
        $__internal_dd9478d237b4cf819613163403a7dcee60f14e03a6f66482b7287eb601fd9b59->enter($__internal_dd9478d237b4cf819613163403a7dcee60f14e03a6f66482b7287eb601fd9b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Block:block_formatter.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9478d237b4cf819613163403a7dcee60f14e03a6f66482b7287eb601fd9b59->leave($__internal_dd9478d237b4cf819613163403a7dcee60f14e03a6f66482b7287eb601fd9b59_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e1c5ca65f9984d1e2cc756571719a13fee7529f930b355f0cec6986b6b7e981e = $this->env->getExtension("native_profiler");
        $__internal_e1c5ca65f9984d1e2cc756571719a13fee7529f930b355f0cec6986b6b7e981e->enter($__internal_e1c5ca65f9984d1e2cc756571719a13fee7529f930b355f0cec6986b6b7e981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_e1c5ca65f9984d1e2cc756571719a13fee7529f930b355f0cec6986b6b7e981e->leave($__internal_e1c5ca65f9984d1e2cc756571719a13fee7529f930b355f0cec6986b6b7e981e_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Block:block_formatter.html.twig";
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
