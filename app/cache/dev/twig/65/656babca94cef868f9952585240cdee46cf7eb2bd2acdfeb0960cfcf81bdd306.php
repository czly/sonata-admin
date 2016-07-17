<?php

/* SonataFormatterBundle:Ckeditor:upload.html.twig */
class __TwigTemplate_20c46d508cef59110059444fd0e819fd63c33dbbaf1129ce4db660cb06e9fbbe extends Twig_Template
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
        $__internal_97b9bafacb1af2465cf6cd1ffd8acaa53ecadf237485f7659ef340c8477dec06 = $this->env->getExtension("native_profiler");
        $__internal_97b9bafacb1af2465cf6cd1ffd8acaa53ecadf237485f7659ef340c8477dec06->enter($__internal_97b9bafacb1af2465cf6cd1ffd8acaa53ecadf237485f7659ef340c8477dec06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Ckeditor:upload.html.twig"));

        // line 1
        echo "<script>window.parent.CKEDITOR.tools.callFunction(";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \"";
        echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), twig_escape_filter($this->env, "reference", "js"));
        echo "\");</script>
";
        
        $__internal_97b9bafacb1af2465cf6cd1ffd8acaa53ecadf237485f7659ef340c8477dec06->leave($__internal_97b9bafacb1af2465cf6cd1ffd8acaa53ecadf237485f7659ef340c8477dec06_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script>window.parent.CKEDITOR.tools.callFunction({{ app.request.get('CKEditorFuncNum')|escape('js') }}, "{% path object, 'reference'|escape('js') %}");</script>*/
/* */
