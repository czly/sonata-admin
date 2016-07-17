<?php

/* SonataAdminBundle::my_layout.html.twig */
class __TwigTemplate_7e0f817cb027654d8aa14caaa1cc169ca1e7a10d6acc46e6f8c6e4f87e31b2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::my_layout.html.twig", 1);
        $this->blocks = array(
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64d1f11a7e378ddc03395e2d860a4ae28945336da8883ba9ef7c8a5de8c5ca0d = $this->env->getExtension("native_profiler");
        $__internal_64d1f11a7e378ddc03395e2d860a4ae28945336da8883ba9ef7c8a5de8c5ca0d->enter($__internal_64d1f11a7e378ddc03395e2d860a4ae28945336da8883ba9ef7c8a5de8c5ca0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::my_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d1f11a7e378ddc03395e2d860a4ae28945336da8883ba9ef7c8a5de8c5ca0d->leave($__internal_64d1f11a7e378ddc03395e2d860a4ae28945336da8883ba9ef7c8a5de8c5ca0d_prof);

    }

    // line 3
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_50b0a7f7f660fa46121bcd9210ece82d9880193476a21d651f537fce9e366251 = $this->env->getExtension("native_profiler");
        $__internal_50b0a7f7f660fa46121bcd9210ece82d9880193476a21d651f537fce9e366251->enter($__internal_50b0a7f7f660fa46121bcd9210ece82d9880193476a21d651f537fce9e366251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 4
        echo "    <br/>
    <p class=\"text-center\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">前往首页</a></p>
";
        
        $__internal_50b0a7f7f660fa46121bcd9210ece82d9880193476a21d651f537fce9e366251->leave($__internal_50b0a7f7f660fa46121bcd9210ece82d9880193476a21d651f537fce9e366251_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::my_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block side_bar_after_nav %}*/
/*     <br/>*/
/*     <p class="text-center"><a href="{{ path('homepage') }}">前往首页</a></p>*/
/* {% endblock %}*/
