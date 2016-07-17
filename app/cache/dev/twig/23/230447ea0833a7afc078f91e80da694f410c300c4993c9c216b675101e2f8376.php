<?php

/* :default:index.html.twig */
class __TwigTemplate_e6eb4fb5c916ef8350c355f882b4c5090239d2a40d2da818c0aa247787431dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_633cd9b1f57fdadad5cecdace7d9f6e5dbcf33ea2592044476c02651b7ed6fa8 = $this->env->getExtension("native_profiler");
        $__internal_633cd9b1f57fdadad5cecdace7d9f6e5dbcf33ea2592044476c02651b7ed6fa8->enter($__internal_633cd9b1f57fdadad5cecdace7d9f6e5dbcf33ea2592044476c02651b7ed6fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633cd9b1f57fdadad5cecdace7d9f6e5dbcf33ea2592044476c02651b7ed6fa8->leave($__internal_633cd9b1f57fdadad5cecdace7d9f6e5dbcf33ea2592044476c02651b7ed6fa8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd78f8c10c77caf1d59b5a78f91551ff8cf082df317c454ef33c204646e9c3e8 = $this->env->getExtension("native_profiler");
        $__internal_fd78f8c10c77caf1d59b5a78f91551ff8cf082df317c454ef33c204646e9c3e8->enter($__internal_fd78f8c10c77caf1d59b5a78f91551ff8cf082df317c454ef33c204646e9c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row jumbotron\">
    <div class=\"col-md-1 col-xs-1\"></div>
    <div class=\"col-md-10 col-xs-10\"><h1>Welcome Big Data ITors!</h1></div>
    <div class=\"col-md-1 col-xs-1\"></div>
</div>
<div class=\"row\">
    <div class=\"col-sm-1 col-xs-1\"></div>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) ? $context["subjects"] : $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 14
            echo "    <div class=\"col-sm-2 col-xs-12\">
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_list", array("subjectId" => $this->getAttribute($context["subject"], "id", array()))), "html", null, true);
            echo "\" class=\"thumbnail\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "photo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "name", array()), "html", null, true);
            echo "\">

            <div class=\"caption\">
                <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "name", array()), "html", null, true);
            echo "</h3>

                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "introduce", array()), "html", null, true);
            echo "</p>
            </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    <div class=\"col-sm-1 col-xs-1\"></div>
</div>

<br />
<br />


";
        
        $__internal_fd78f8c10c77caf1d59b5a78f91551ff8cf082df317c454ef33c204646e9c3e8->leave($__internal_fd78f8c10c77caf1d59b5a78f91551ff8cf082df317c454ef33c204646e9c3e8_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  75 => 21,  70 => 19,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row jumbotron">*/
/*     <div class="col-md-1 col-xs-1"></div>*/
/*     <div class="col-md-10 col-xs-10"><h1>Welcome Big Data ITors!</h1></div>*/
/*     <div class="col-md-1 col-xs-1"></div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-sm-1 col-xs-1"></div>*/
/* */
/*     {% for subject in subjects %}*/
/*     <div class="col-sm-2 col-xs-12">*/
/*         <a href="{{ path('blog_list', {'subjectId':subject.id}) }}" class="thumbnail">*/
/*             <img src="{{ subject.photo }}" alt="{{ subject.name }}">*/
/* */
/*             <div class="caption">*/
/*                 <h3>{{ subject.name }}</h3>*/
/* */
/*                 <p>{{ subject.introduce }}</p>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="col-sm-1 col-xs-1"></div>*/
/* </div>*/
/* */
/* <br />*/
/* <br />*/
/* */
/* */
/* {% endblock body %}*/
