<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a9c47b8c7a312f7d761bc839a5469edf84fb028147d05ec18ac5bc61840d0777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1610d1975b97ffef78d6ae72e8a6e3be72563313750f57c02b3b1b6eacdebb79 = $this->env->getExtension("native_profiler");
        $__internal_1610d1975b97ffef78d6ae72e8a6e3be72563313750f57c02b3b1b6eacdebb79->enter($__internal_1610d1975b97ffef78d6ae72e8a6e3be72563313750f57c02b3b1b6eacdebb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1610d1975b97ffef78d6ae72e8a6e3be72563313750f57c02b3b1b6eacdebb79->leave($__internal_1610d1975b97ffef78d6ae72e8a6e3be72563313750f57c02b3b1b6eacdebb79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0360b4631372f5d51b4e0c75af4423b0d9caf4b49cf5322b1f46d0bb0605e5a4 = $this->env->getExtension("native_profiler");
        $__internal_0360b4631372f5d51b4e0c75af4423b0d9caf4b49cf5322b1f46d0bb0605e5a4->enter($__internal_0360b4631372f5d51b4e0c75af4423b0d9caf4b49cf5322b1f46d0bb0605e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0360b4631372f5d51b4e0c75af4423b0d9caf4b49cf5322b1f46d0bb0605e5a4->leave($__internal_0360b4631372f5d51b4e0c75af4423b0d9caf4b49cf5322b1f46d0bb0605e5a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a3f75a5f19c597becd2a843ece424bdc8d52aefa9a0a1e3601de9a7e9a20749 = $this->env->getExtension("native_profiler");
        $__internal_8a3f75a5f19c597becd2a843ece424bdc8d52aefa9a0a1e3601de9a7e9a20749->enter($__internal_8a3f75a5f19c597becd2a843ece424bdc8d52aefa9a0a1e3601de9a7e9a20749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a3f75a5f19c597becd2a843ece424bdc8d52aefa9a0a1e3601de9a7e9a20749->leave($__internal_8a3f75a5f19c597becd2a843ece424bdc8d52aefa9a0a1e3601de9a7e9a20749_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d2a3e36ee0af8163befd8008a553faedf01aed23b994a89cc8c483fb65bbeb9 = $this->env->getExtension("native_profiler");
        $__internal_8d2a3e36ee0af8163befd8008a553faedf01aed23b994a89cc8c483fb65bbeb9->enter($__internal_8d2a3e36ee0af8163befd8008a553faedf01aed23b994a89cc8c483fb65bbeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d2a3e36ee0af8163befd8008a553faedf01aed23b994a89cc8c483fb65bbeb9->leave($__internal_8d2a3e36ee0af8163befd8008a553faedf01aed23b994a89cc8c483fb65bbeb9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
