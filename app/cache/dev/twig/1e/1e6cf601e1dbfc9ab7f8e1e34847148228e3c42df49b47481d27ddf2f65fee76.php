<?php

/* :blog:show.html.twig */
class __TwigTemplate_b4608ca93f70f4970171b666c3f4700cab43debc118220c6553fa1ed3cc9dfbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:show.html.twig", 1);
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
        $__internal_7da5b0357817b4a7024dfdee5c1c96e9bfd3c252e1ee8bc8aa43271337bf6c85 = $this->env->getExtension("native_profiler");
        $__internal_7da5b0357817b4a7024dfdee5c1c96e9bfd3c252e1ee8bc8aa43271337bf6c85->enter($__internal_7da5b0357817b4a7024dfdee5c1c96e9bfd3c252e1ee8bc8aa43271337bf6c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da5b0357817b4a7024dfdee5c1c96e9bfd3c252e1ee8bc8aa43271337bf6c85->leave($__internal_7da5b0357817b4a7024dfdee5c1c96e9bfd3c252e1ee8bc8aa43271337bf6c85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22fd62b419e57ba367bcf7baf2d66a61fc2a2d35b015491dc8843d33e3dca166 = $this->env->getExtension("native_profiler");
        $__internal_22fd62b419e57ba367bcf7baf2d66a61fc2a2d35b015491dc8843d33e3dca166->enter($__internal_22fd62b419e57ba367bcf7baf2d66a61fc2a2d35b015491dc8843d33e3dca166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-3 col-xs-1\"></div>
        <div class=\"col-sm-6 col-xs-10\">
            <div class=\"row\">
                <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "title", array()), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"row\">
                <a class=\"btn btn-info btn-xs\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_list", array("subjectId" => $this->getAttribute($this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "subject", array()), "id", array()))), "html", null, true);
        echo "\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "subject", array()), "name", array()), "html", null, true);
        echo "
                </a>
                <a class=\"btn btn-success btn-xs\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_list", array("subjectId" => $this->getAttribute($this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "subject", array()), "id", array()))), "html", null, true);
        echo "\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "category", array()), "name", array()), "html", null, true);
        echo "
                </a>
                <small>发表于 ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "createTimeStr", array()), "html", null, true);
        echo "</small>
            </div>

            <div class=\"row\">
                <hr/>
            </div>
            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <img style=\"width: 100%; height: 100%;\" src=\"/uploads/media/default/0001/01/thumb_";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "image", array()), "id", array()), "html", null, true);
        echo "_default_big.";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "image", array()), "extension", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <br/>
                ";
        // line 32
        echo $this->getAttribute((isset($context["blogpost"]) ? $context["blogpost"] : $this->getContext($context, "blogpost")), "body", array());
        echo "
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-1\"></div>
    </div>
</div>

";
        
        $__internal_22fd62b419e57ba367bcf7baf2d66a61fc2a2d35b015491dc8843d33e3dca166->leave($__internal_22fd62b419e57ba367bcf7baf2d66a61fc2a2d35b015491dc8843d33e3dca166_prof);

    }

    public function getTemplateName()
    {
        return ":blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  84 => 28,  72 => 19,  67 => 17,  63 => 16,  58 => 14,  54 => 13,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-sm-3 col-xs-1"></div>*/
/*         <div class="col-sm-6 col-xs-10">*/
/*             <div class="row">*/
/*                 <h1>{{ blogpost.title }}</h1>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <a class="btn btn-info btn-xs" href="{{ path('blog_list', {'subjectId':blogpost.subject.id}) }}">*/
/*                     {{ blogpost.subject.name }}*/
/*                 </a>*/
/*                 <a class="btn btn-success btn-xs" href="{{ path('blog_list', {'subjectId':blogpost.subject.id}) }}">*/
/*                     {{ blogpost.category.name }}*/
/*                 </a>*/
/*                 <small>发表于 {{ blogpost.createTimeStr }}</small>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <hr/>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12 col-xs-12">*/
/*                         <img style="width: 100%; height: 100%;" src="/uploads/media/default/0001/01/thumb_{{ blogpost.image.id }}_default_big.{{ blogpost.image.extension }}">*/
/*                     </div>*/
/*                 </div>*/
/*                 <br/>*/
/*                 {{ blogpost.body|raw }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-xs-1"></div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
