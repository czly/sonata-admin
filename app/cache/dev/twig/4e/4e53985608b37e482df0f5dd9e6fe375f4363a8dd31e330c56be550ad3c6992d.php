<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_af7bfac886dd4691d35442b754bff7fa42eb339fb7bad9fa0bf40f4773aa76e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2a481495e4818879b9442f957e290028ac4034934fccb5fe3aff01d7f2b6b00 = $this->env->getExtension("native_profiler");
        $__internal_c2a481495e4818879b9442f957e290028ac4034934fccb5fe3aff01d7f2b6b00->enter($__internal_c2a481495e4818879b9442f957e290028ac4034934fccb5fe3aff01d7f2b6b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2a481495e4818879b9442f957e290028ac4034934fccb5fe3aff01d7f2b6b00->leave($__internal_c2a481495e4818879b9442f957e290028ac4034934fccb5fe3aff01d7f2b6b00_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_116464806a4093c0e664fe32f0bd6ae3679314b571cf188d9c32e9a1280022cb = $this->env->getExtension("native_profiler");
        $__internal_116464806a4093c0e664fe32f0bd6ae3679314b571cf188d9c32e9a1280022cb->enter($__internal_116464806a4093c0e664fe32f0bd6ae3679314b571cf188d9c32e9a1280022cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_116464806a4093c0e664fe32f0bd6ae3679314b571cf188d9c32e9a1280022cb->leave($__internal_116464806a4093c0e664fe32f0bd6ae3679314b571cf188d9c32e9a1280022cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
