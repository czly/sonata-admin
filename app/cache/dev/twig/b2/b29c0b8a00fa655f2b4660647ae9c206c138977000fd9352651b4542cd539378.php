<?php

/* ::base.html.twig */
class __TwigTemplate_a1e1afcd51ad51521fcf09d6cf575f2bf7e399ab6de552f5faca1d60c03941ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f3195c0379e9257f2df1b9a2940c8b8457deb3681c5a31d40ec2523a8ce6a8c = $this->env->getExtension("native_profiler");
        $__internal_7f3195c0379e9257f2df1b9a2940c8b8457deb3681c5a31d40ec2523a8ce6a8c->enter($__internal_7f3195c0379e9257f2df1b9a2940c8b8457deb3681c5a31d40ec2523a8ce6a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f3195c0379e9257f2df1b9a2940c8b8457deb3681c5a31d40ec2523a8ce6a8c->leave($__internal_7f3195c0379e9257f2df1b9a2940c8b8457deb3681c5a31d40ec2523a8ce6a8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee3ce59bde50c5fb4e3170cbde9591ddc4894a34f5326b69c0a152af6b43c6e6 = $this->env->getExtension("native_profiler");
        $__internal_ee3ce59bde50c5fb4e3170cbde9591ddc4894a34f5326b69c0a152af6b43c6e6->enter($__internal_ee3ce59bde50c5fb4e3170cbde9591ddc4894a34f5326b69c0a152af6b43c6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ee3ce59bde50c5fb4e3170cbde9591ddc4894a34f5326b69c0a152af6b43c6e6->leave($__internal_ee3ce59bde50c5fb4e3170cbde9591ddc4894a34f5326b69c0a152af6b43c6e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5da0f9b43159cd2fa0c6d59ba2ceb64b590b45b5ebae700ad2ebc40c8c64869e = $this->env->getExtension("native_profiler");
        $__internal_5da0f9b43159cd2fa0c6d59ba2ceb64b590b45b5ebae700ad2ebc40c8c64869e->enter($__internal_5da0f9b43159cd2fa0c6d59ba2ceb64b590b45b5ebae700ad2ebc40c8c64869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5da0f9b43159cd2fa0c6d59ba2ceb64b590b45b5ebae700ad2ebc40c8c64869e->leave($__internal_5da0f9b43159cd2fa0c6d59ba2ceb64b590b45b5ebae700ad2ebc40c8c64869e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8c2891a78d76c6aa004df4112460e1f481140ae43fd1515ac08643a2f7b69ff = $this->env->getExtension("native_profiler");
        $__internal_d8c2891a78d76c6aa004df4112460e1f481140ae43fd1515ac08643a2f7b69ff->enter($__internal_d8c2891a78d76c6aa004df4112460e1f481140ae43fd1515ac08643a2f7b69ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8c2891a78d76c6aa004df4112460e1f481140ae43fd1515ac08643a2f7b69ff->leave($__internal_d8c2891a78d76c6aa004df4112460e1f481140ae43fd1515ac08643a2f7b69ff_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd48156ae08ff2b18e9c36158eca63585972fd65530a62f2dbe99df28b629f87 = $this->env->getExtension("native_profiler");
        $__internal_cd48156ae08ff2b18e9c36158eca63585972fd65530a62f2dbe99df28b629f87->enter($__internal_cd48156ae08ff2b18e9c36158eca63585972fd65530a62f2dbe99df28b629f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd48156ae08ff2b18e9c36158eca63585972fd65530a62f2dbe99df28b629f87->leave($__internal_cd48156ae08ff2b18e9c36158eca63585972fd65530a62f2dbe99df28b629f87_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
