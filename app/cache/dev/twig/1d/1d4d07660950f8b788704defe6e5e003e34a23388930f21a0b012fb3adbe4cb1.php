<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_e0781323f823e6939a98c59515fa3dcbacbfa9c1ef223d95b320f3b2a75cbd5a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a16c167dea1b85f04894006b509b9ef25270d894dc03b0626945ab0d89cb299f = $this->env->getExtension("native_profiler");
        $__internal_a16c167dea1b85f04894006b509b9ef25270d894dc03b0626945ab0d89cb299f->enter($__internal_a16c167dea1b85f04894006b509b9ef25270d894dc03b0626945ab0d89cb299f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16c167dea1b85f04894006b509b9ef25270d894dc03b0626945ab0d89cb299f->leave($__internal_a16c167dea1b85f04894006b509b9ef25270d894dc03b0626945ab0d89cb299f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4906c0057e6d0acce0381a3397141038ab373474e4309924c8e04b5c8c43bd25 = $this->env->getExtension("native_profiler");
        $__internal_4906c0057e6d0acce0381a3397141038ab373474e4309924c8e04b5c8c43bd25->enter($__internal_4906c0057e6d0acce0381a3397141038ab373474e4309924c8e04b5c8c43bd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_4906c0057e6d0acce0381a3397141038ab373474e4309924c8e04b5c8c43bd25->leave($__internal_4906c0057e6d0acce0381a3397141038ab373474e4309924c8e04b5c8c43bd25_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
