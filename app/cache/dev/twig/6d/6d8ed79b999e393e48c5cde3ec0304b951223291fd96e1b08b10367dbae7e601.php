<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_f74edb5155a91dd5a89966db7fab4026b70447f5250804e98c0d4043eef6eed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00647d1c056ede4e429cac22f8f145254e329cfe41ab766a29e3221cec24f993 = $this->env->getExtension("native_profiler");
        $__internal_00647d1c056ede4e429cac22f8f145254e329cfe41ab766a29e3221cec24f993->enter($__internal_00647d1c056ede4e429cac22f8f145254e329cfe41ab766a29e3221cec24f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00647d1c056ede4e429cac22f8f145254e329cfe41ab766a29e3221cec24f993->leave($__internal_00647d1c056ede4e429cac22f8f145254e329cfe41ab766a29e3221cec24f993_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_b299fc8756e06b030ce38e0b51c338a5f7549dc7bc4cb6a19026dbfd562bf847 = $this->env->getExtension("native_profiler");
        $__internal_b299fc8756e06b030ce38e0b51c338a5f7549dc7bc4cb6a19026dbfd562bf847->enter($__internal_b299fc8756e06b030ce38e0b51c338a5f7549dc7bc4cb6a19026dbfd562bf847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_b299fc8756e06b030ce38e0b51c338a5f7549dc7bc4cb6a19026dbfd562bf847->leave($__internal_b299fc8756e06b030ce38e0b51c338a5f7549dc7bc4cb6a19026dbfd562bf847_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
