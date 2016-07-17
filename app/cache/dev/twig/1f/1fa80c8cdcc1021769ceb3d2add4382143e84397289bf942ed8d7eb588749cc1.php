<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_2e252ae796d801451c875ec459f07b5d84c5f507de26de83fbfac1200e54f938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_866d5d79931f6c66931923ae20a8c272eeb12b77a8a03e0c4f02363c25a7eb14 = $this->env->getExtension("native_profiler");
        $__internal_866d5d79931f6c66931923ae20a8c272eeb12b77a8a03e0c4f02363c25a7eb14->enter($__internal_866d5d79931f6c66931923ae20a8c272eeb12b77a8a03e0c4f02363c25a7eb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_866d5d79931f6c66931923ae20a8c272eeb12b77a8a03e0c4f02363c25a7eb14->leave($__internal_866d5d79931f6c66931923ae20a8c272eeb12b77a8a03e0c4f02363c25a7eb14_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_960842d4770d51d440d0c9775fd3fd69c0b1cc9104a14b1c3c671fa6c0bd1770 = $this->env->getExtension("native_profiler");
        $__internal_960842d4770d51d440d0c9775fd3fd69c0b1cc9104a14b1c3c671fa6c0bd1770->enter($__internal_960842d4770d51d440d0c9775fd3fd69c0b1cc9104a14b1c3c671fa6c0bd1770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_960842d4770d51d440d0c9775fd3fd69c0b1cc9104a14b1c3c671fa6c0bd1770->leave($__internal_960842d4770d51d440d0c9775fd3fd69c0b1cc9104a14b1c3c671fa6c0bd1770_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
