<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_622232abded6845b73a57aa7952e197678fdf564170465a0217806a50f3d7d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c73b881ea28ce096c39d4d08dafdd9421ff55c55da5382f42cfeaae97190140a = $this->env->getExtension("native_profiler");
        $__internal_c73b881ea28ce096c39d4d08dafdd9421ff55c55da5382f42cfeaae97190140a->enter($__internal_c73b881ea28ce096c39d4d08dafdd9421ff55c55da5382f42cfeaae97190140a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73b881ea28ce096c39d4d08dafdd9421ff55c55da5382f42cfeaae97190140a->leave($__internal_c73b881ea28ce096c39d4d08dafdd9421ff55c55da5382f42cfeaae97190140a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d13ad8152b9940252c380e187250603eb259dc20c0b84c3c020acdf64bc59907 = $this->env->getExtension("native_profiler");
        $__internal_d13ad8152b9940252c380e187250603eb259dc20c0b84c3c020acdf64bc59907->enter($__internal_d13ad8152b9940252c380e187250603eb259dc20c0b84c3c020acdf64bc59907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d13ad8152b9940252c380e187250603eb259dc20c0b84c3c020acdf64bc59907->leave($__internal_d13ad8152b9940252c380e187250603eb259dc20c0b84c3c020acdf64bc59907_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_acca7aaf9ce92aafc033f4423274974a13c6edc76c7813dbe3c531625d0f7718 = $this->env->getExtension("native_profiler");
        $__internal_acca7aaf9ce92aafc033f4423274974a13c6edc76c7813dbe3c531625d0f7718->enter($__internal_acca7aaf9ce92aafc033f4423274974a13c6edc76c7813dbe3c531625d0f7718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_acca7aaf9ce92aafc033f4423274974a13c6edc76c7813dbe3c531625d0f7718->leave($__internal_acca7aaf9ce92aafc033f4423274974a13c6edc76c7813dbe3c531625d0f7718_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
