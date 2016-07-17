<?php

/* :blog:list.html.twig */
class __TwigTemplate_55f944a946ee244863977ac6f88a98dafbfd189d08c9dd7037206cd1d2714a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:list.html.twig", 1);
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
        $__internal_4d2737981decb1bedea7c58230a9d6392b7e2b1629f7b7ab5fdc76669bd220df = $this->env->getExtension("native_profiler");
        $__internal_4d2737981decb1bedea7c58230a9d6392b7e2b1629f7b7ab5fdc76669bd220df->enter($__internal_4d2737981decb1bedea7c58230a9d6392b7e2b1629f7b7ab5fdc76669bd220df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2737981decb1bedea7c58230a9d6392b7e2b1629f7b7ab5fdc76669bd220df->leave($__internal_4d2737981decb1bedea7c58230a9d6392b7e2b1629f7b7ab5fdc76669bd220df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ccb2e7c3ca2ba0cf468dd9064c5d867149a2b9c3f7116e7cb5621499374fc1 = $this->env->getExtension("native_profiler");
        $__internal_54ccb2e7c3ca2ba0cf468dd9064c5d867149a2b9c3f7116e7cb5621499374fc1->enter($__internal_54ccb2e7c3ca2ba0cf468dd9064c5d867149a2b9c3f7116e7cb5621499374fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-sm-3 col-xs-1\"></div>
    <div class=\"col-sm-6 col-xs-10\">

        <br />
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "            <div style=\"background-color: whitesmoke; padding-left: 30px;padding-right: 30px;padding-top: 10px;\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-xs-10\">
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("blogId" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                            <img style=\"width: 100%; height: 100%; margin:10%;\" src=\"/uploads/media/default/0001/01/thumb_";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "id", array()), "html", null, true);
            echo "_default_small.";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "extension", array()), "html", null, true);
            echo "\">
                        </a>
                    </div>
                    <div class=\"col-sm-1 col-xs-2\"></div>
                    <div class=\"col-sm-7 col-xs-12\">
                        <div class=\"row\">
                            <h3><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("blogId" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
                        </div>
                        <div class=\"row\">
                            <a class=\"btn btn-info btn-xs\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_list", array("subjectId" => $this->getAttribute($this->getAttribute($context["article"], "subject", array()), "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "subject", array()), "name", array()), "html", null, true);
            echo "
                            </a>
                            <a class=\"btn btn-success btn-xs\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_list", array("subjectId" => $this->getAttribute($this->getAttribute($context["article"], "subject", array()), "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "category", array()), "name", array()), "html", null, true);
            echo "
                            </a>
                            <small>发表于 ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "createTimeStr", array()), "html", null, true);
            echo "</small>
                        </div>
                        <br />
                        <div class=\"row\">
                            <small>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "abstract", array()), "html", null, true);
            echo "</small>
                        </div>
                    </div>
                    <div class=\"col-sm-1\"></div>
                </div>
                <br />
            </div>
            <br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        <div class=\"navigation\">
            ";
        // line 44
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>

    </div>
    <div class=\"col-sm-3 col-xs-1\"></div>
</div>

";
        
        $__internal_54ccb2e7c3ca2ba0cf468dd9064c5d867149a2b9c3f7116e7cb5621499374fc1->leave($__internal_54ccb2e7c3ca2ba0cf468dd9064c5d867149a2b9c3f7116e7cb5621499374fc1_prof);

    }

    public function getTemplateName()
    {
        return ":blog:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 44,  120 => 43,  105 => 34,  98 => 30,  93 => 28,  89 => 27,  84 => 25,  80 => 24,  72 => 21,  61 => 15,  57 => 14,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row">*/
/*     <div class="col-sm-3 col-xs-1"></div>*/
/*     <div class="col-sm-6 col-xs-10">*/
/* */
/*         <br />*/
/*         {% for article in pagination %}*/
/*             <div style="background-color: whitesmoke; padding-left: 30px;padding-right: 30px;padding-top: 10px;">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 col-xs-10">*/
/*                         <a href="{{ path('blog_show', {'blogId':article.id}) }}">*/
/*                             <img style="width: 100%; height: 100%; margin:10%;" src="/uploads/media/default/0001/01/thumb_{{ article.image.id }}_default_small.{{ article.image.extension }}">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-sm-1 col-xs-2"></div>*/
/*                     <div class="col-sm-7 col-xs-12">*/
/*                         <div class="row">*/
/*                             <h3><a href="{{ path('blog_show', {'blogId':article.id}) }}">{{ article.title }}</a></h3>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <a class="btn btn-info btn-xs" href="{{ path('blog_list', {'subjectId':article.subject.id}) }}">*/
/*                                 {{ article.subject.name }}*/
/*                             </a>*/
/*                             <a class="btn btn-success btn-xs" href="{{ path('blog_list', {'subjectId':article.subject.id}) }}">*/
/*                                 {{ article.category.name }}*/
/*                             </a>*/
/*                             <small>发表于 {{ article.createTimeStr }}</small>*/
/*                         </div>*/
/*                         <br />*/
/*                         <div class="row">*/
/*                             <small>{{ article.abstract }}</small>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-1"></div>*/
/*                 </div>*/
/*                 <br />*/
/*             </div>*/
/*             <br />*/
/*         {% endfor %}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(pagination) }}*/
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="col-sm-3 col-xs-1"></div>*/
/* </div>*/
/* */
/* {% endblock body %}*/
