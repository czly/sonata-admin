<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_e8fc9c6fa3c2627d923a226310928a404931240d805ef992edb031cc34db016d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b211de33eeeaaa6205f943054cc4f6b1e731be2090300a05bedb0f73879f8f6 = $this->env->getExtension("native_profiler");
        $__internal_8b211de33eeeaaa6205f943054cc4f6b1e731be2090300a05bedb0f73879f8f6->enter($__internal_8b211de33eeeaaa6205f943054cc4f6b1e731be2090300a05bedb0f73879f8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b211de33eeeaaa6205f943054cc4f6b1e731be2090300a05bedb0f73879f8f6->leave($__internal_8b211de33eeeaaa6205f943054cc4f6b1e731be2090300a05bedb0f73879f8f6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3366b3ef8931c426141c8f9eb9c91eec81aba44b75740c79fa4a281beb170504 = $this->env->getExtension("native_profiler");
        $__internal_3366b3ef8931c426141c8f9eb9c91eec81aba44b75740c79fa4a281beb170504->enter($__internal_3366b3ef8931c426141c8f9eb9c91eec81aba44b75740c79fa4a281beb170504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_3366b3ef8931c426141c8f9eb9c91eec81aba44b75740c79fa4a281beb170504->leave($__internal_3366b3ef8931c426141c8f9eb9c91eec81aba44b75740c79fa4a281beb170504_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
