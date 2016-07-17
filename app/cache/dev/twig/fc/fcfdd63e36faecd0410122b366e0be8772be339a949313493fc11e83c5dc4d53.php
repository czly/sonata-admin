<?php

/* SonataMediaBundle:GalleryAdmin:list.html.twig */
class __TwigTemplate_704956c8329bc4ee31b7b69db69e676b8283a372e123ce8fbc9918049d06eb62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:GalleryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_830b583bebff1728ffe4b63c6ddc2c884f4cd6c3d6b8a453fde9ff29a27fb297 = $this->env->getExtension("native_profiler");
        $__internal_830b583bebff1728ffe4b63c6ddc2c884f4cd6c3d6b8a453fde9ff29a27fb297->enter($__internal_830b583bebff1728ffe4b63c6ddc2c884f4cd6c3d6b8a453fde9ff29a27fb297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:GalleryAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830b583bebff1728ffe4b63c6ddc2c884f4cd6c3d6b8a453fde9ff29a27fb297->leave($__internal_830b583bebff1728ffe4b63c6ddc2c884f4cd6c3d6b8a453fde9ff29a27fb297_prof);

    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        $__internal_03e5040b95b8ac3d9befddf772c8caf7affce4d024a09270bb4cdafb98399efc = $this->env->getExtension("native_profiler");
        $__internal_03e5040b95b8ac3d9befddf772c8caf7affce4d024a09270bb4cdafb98399efc->enter($__internal_03e5040b95b8ac3d9befddf772c8caf7affce4d024a09270bb4cdafb98399efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 15
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts", array()));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 25
            echo "                            <li>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $context["name"])), "method"), "html", null, true);
            echo "\">
                                    ";
            // line 27
            if (($context["name"] == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()))) {
                // line 28
                echo "                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    ";
            }
            // line 32
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </h1>
        </div>
    </div>
";
        
        $__internal_03e5040b95b8ac3d9befddf772c8caf7affce4d024a09270bb4cdafb98399efc->leave($__internal_03e5040b95b8ac3d9befddf772c8caf7affce4d024a09270bb4cdafb98399efc_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:GalleryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  76 => 32,  70 => 28,  68 => 27,  64 => 26,  61 => 25,  57 => 24,  51 => 21,  45 => 18,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
/* {% block preview %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*             <h1 class="box-title">*/
/*                 {{ "label.select_context"|trans({}, 'SonataMediaBundle') }}*/
/*                 <div class="btn-group">*/
/*                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                         <strong class="text-info">{{ persistent_parameters.context }}</strong> <span class="caret"></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                         {% for name, context in media_pool.contexts %}*/
/*                             <li>*/
/*                                 <a href="{{ admin.generateUrl('list', {'context' : name }) }}">*/
/*                                     {% if name == persistent_parameters.context %}*/
/*                                         <span class="pull-right">*/
/*                                             <i class="fa fa-check"></i>*/
/*                                         </span>*/
/*                                     {% endif %}*/
/*                                     {{ name|trans({}, 'SonataMediaBundle') }}*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </h1>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
