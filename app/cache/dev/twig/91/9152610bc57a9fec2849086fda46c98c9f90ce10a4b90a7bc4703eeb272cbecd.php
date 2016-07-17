<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_ec881208150bd550afb0e397c6abbf235794dc9cd5a5309ec200b0057b183454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b6994c64f5f54cb35bed1163fe5cdf09a9d3a23d630fe1bd4b4528ba3d7b58 = $this->env->getExtension("native_profiler");
        $__internal_d6b6994c64f5f54cb35bed1163fe5cdf09a9d3a23d630fe1bd4b4528ba3d7b58->enter($__internal_d6b6994c64f5f54cb35bed1163fe5cdf09a9d3a23d630fe1bd4b4528ba3d7b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b6994c64f5f54cb35bed1163fe5cdf09a9d3a23d630fe1bd4b4528ba3d7b58->leave($__internal_d6b6994c64f5f54cb35bed1163fe5cdf09a9d3a23d630fe1bd4b4528ba3d7b58_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_a383b2a2635e60f11c462639f31fa9bb3571ba78c855f27d68b2f9d00caafddb = $this->env->getExtension("native_profiler");
        $__internal_a383b2a2635e60f11c462639f31fa9bb3571ba78c855f27d68b2f9d00caafddb->enter($__internal_a383b2a2635e60f11c462639f31fa9bb3571ba78c855f27d68b2f9d00caafddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_a383b2a2635e60f11c462639f31fa9bb3571ba78c855f27d68b2f9d00caafddb->leave($__internal_a383b2a2635e60f11c462639f31fa9bb3571ba78c855f27d68b2f9d00caafddb_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_34049e356725923714d3b7671f77e39cc6e1bc42a5a419b872a6b8b0605bb668 = $this->env->getExtension("native_profiler");
        $__internal_34049e356725923714d3b7671f77e39cc6e1bc42a5a419b872a6b8b0605bb668->enter($__internal_34049e356725923714d3b7671f77e39cc6e1bc42a5a419b872a6b8b0605bb668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_34049e356725923714d3b7671f77e39cc6e1bc42a5a419b872a6b8b0605bb668->leave($__internal_34049e356725923714d3b7671f77e39cc6e1bc42a5a419b872a6b8b0605bb668_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_76b7ad7846e3d0d7191f13b70d06117223e42718986d3a8b8752e090476637ea = $this->env->getExtension("native_profiler");
        $__internal_76b7ad7846e3d0d7191f13b70d06117223e42718986d3a8b8752e090476637ea->enter($__internal_76b7ad7846e3d0d7191f13b70d06117223e42718986d3a8b8752e090476637ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_76b7ad7846e3d0d7191f13b70d06117223e42718986d3a8b8752e090476637ea->leave($__internal_76b7ad7846e3d0d7191f13b70d06117223e42718986d3a8b8752e090476637ea_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d12d864addfe7bfe0e4470e8d963e7fb03074923e1a036ef44cc5192e3b6861c = $this->env->getExtension("native_profiler");
        $__internal_d12d864addfe7bfe0e4470e8d963e7fb03074923e1a036ef44cc5192e3b6861c->enter($__internal_d12d864addfe7bfe0e4470e8d963e7fb03074923e1a036ef44cc5192e3b6861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_d12d864addfe7bfe0e4470e8d963e7fb03074923e1a036ef44cc5192e3b6861c->leave($__internal_d12d864addfe7bfe0e4470e8d963e7fb03074923e1a036ef44cc5192e3b6861c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa1207755de9290f92e375fbfe782c24453eae1a5e919da6407bfe5aad8e16fa = $this->env->getExtension("native_profiler");
        $__internal_aa1207755de9290f92e375fbfe782c24453eae1a5e919da6407bfe5aad8e16fa->enter($__internal_aa1207755de9290f92e375fbfe782c24453eae1a5e919da6407bfe5aad8e16fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_aa1207755de9290f92e375fbfe782c24453eae1a5e919da6407bfe5aad8e16fa->leave($__internal_aa1207755de9290f92e375fbfe782c24453eae1a5e919da6407bfe5aad8e16fa_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b85d6fbbbcc0e7c8ad4554915f101467ec69739ee90770d734f5d10ebe8ebf26 = $this->env->getExtension("native_profiler");
        $__internal_b85d6fbbbcc0e7c8ad4554915f101467ec69739ee90770d734f5d10ebe8ebf26->enter($__internal_b85d6fbbbcc0e7c8ad4554915f101467ec69739ee90770d734f5d10ebe8ebf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_b85d6fbbbcc0e7c8ad4554915f101467ec69739ee90770d734f5d10ebe8ebf26->leave($__internal_b85d6fbbbcc0e7c8ad4554915f101467ec69739ee90770d734f5d10ebe8ebf26_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5d7507ada7e96dc65014fd1a2fae34dd652091046c0b90d1c4ceececa750eb09 = $this->env->getExtension("native_profiler");
        $__internal_5d7507ada7e96dc65014fd1a2fae34dd652091046c0b90d1c4ceececa750eb09->enter($__internal_5d7507ada7e96dc65014fd1a2fae34dd652091046c0b90d1c4ceececa750eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_5d7507ada7e96dc65014fd1a2fae34dd652091046c0b90d1c4ceececa750eb09->leave($__internal_5d7507ada7e96dc65014fd1a2fae34dd652091046c0b90d1c4ceececa750eb09_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
