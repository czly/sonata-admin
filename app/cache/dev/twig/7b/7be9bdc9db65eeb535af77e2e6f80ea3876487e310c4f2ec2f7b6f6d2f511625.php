<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_804edb27bd71144d78ca9ee8d0c1d1b6974d8df3d6107845f22ead1898c0877b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca2aa020f951a167124b3e7af893debbd49e5b88775a83a60518535ac21624cc = $this->env->getExtension("native_profiler");
        $__internal_ca2aa020f951a167124b3e7af893debbd49e5b88775a83a60518535ac21624cc->enter($__internal_ca2aa020f951a167124b3e7af893debbd49e5b88775a83a60518535ac21624cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list.html.twig"));

        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2aa020f951a167124b3e7af893debbd49e5b88775a83a60518535ac21624cc->leave($__internal_ca2aa020f951a167124b3e7af893debbd49e5b88775a83a60518535ac21624cc_prof);

    }

    // line 37
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_8045606d8a22a3f8c0642a9509a6dc8dd6478f4f871a066d184c154e644c2cf7 = $this->env->getExtension("native_profiler");
        $__internal_8045606d8a22a3f8c0642a9509a6dc8dd6478f4f871a066d184c154e644c2cf7->enter($__internal_8045606d8a22a3f8c0642a9509a6dc8dd6478f4f871a066d184c154e644c2cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 38
        echo "    <div class=\"col-xs-6 col-md-3\">
        ";
        // line 39
        echo $context["tree"]->getnavigate_child(array(0 => (isset($context["root_category"]) ? $context["root_category"] : $this->getContext($context, "root_category"))), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), "values", array()), "category", array(), "array"), "value", array(), "array"), 1);
        echo "
    </div>
    <div class=\"col-xs-12 col-md-9\">
        ";
        // line 42
        $this->displayParentBlock("list_table", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_8045606d8a22a3f8c0642a9509a6dc8dd6478f4f871a066d184c154e644c2cf7->leave($__internal_8045606d8a22a3f8c0642a9509a6dc8dd6478f4f871a066d184c154e644c2cf7_prof);

    }

    // line 15
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category__ = null, $__depth__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category" => $__current_category__,
            "depth" => $__depth__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1761ee552dcc751485cdb222577809faf8881fb35a40494defbca82f4291a72d = $this->env->getExtension("native_profiler");
            $__internal_1761ee552dcc751485cdb222577809faf8881fb35a40494defbca82f4291a72d->enter($__internal_1761ee552dcc751485cdb222577809faf8881fb35a40494defbca82f4291a72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 16
            echo "    ";
            if (((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection"))) == 0))) {
                // line 17
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "warning_no_category", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "method"), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 21
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 23
                echo "            <li>
                <div class=\"sonata-tree__item";
                // line 24
                if (($this->getAttribute($context["element"], "id", array()) == $this->getAttribute((isset($context["current_category"]) ? $context["current_category"] : $this->getContext($context, "current_category")), "id", array()))) {
                    echo " is-active";
                }
                echo "\"";
                if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 25
                if (($this->getAttribute($context["element"], "parent", array()) || (isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 26
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("category" => $this->getAttribute($context["element"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</a>
                </div>

                ";
                // line 29
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 30
                    echo "                    ";
                    echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 2 => false, 3 => (isset($context["current_category"]) ? $context["current_category"] : $this->getContext($context, "current_category")), 4 => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1)), "method");
                    echo "
                ";
                }
                // line 32
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ul>
";
            
            $__internal_1761ee552dcc751485cdb222577809faf8881fb35a40494defbca82f4291a72d->leave($__internal_1761ee552dcc751485cdb222577809faf8881fb35a40494defbca82f4291a72d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  138 => 32,  132 => 30,  130 => 29,  121 => 26,  117 => 25,  107 => 24,  104 => 23,  100 => 22,  93 => 21,  87 => 18,  84 => 17,  81 => 16,  62 => 15,  52 => 42,  46 => 39,  43 => 38,  37 => 37,  30 => 12,  28 => 14,  11 => 12,);
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
/* {% import _self as tree %}*/
/* {% macro navigate_child(collection, admin, root, current_category, depth) %}*/
/*     {% if root and collection|length == 0 %}*/
/*         <div>*/
/*             <p class="bg-warning">{{ admin.trans('warning_no_category', {}, admin.translationdomain) }}</p>*/
/*         </div>*/
/*     {% endif %}*/
/*     <ul{% if root %} class="sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable"{% endif %}>*/
/*         {% for element in collection %}*/
/*             <li>*/
/*                 <div class="sonata-tree__item{% if element.id == current_category.id %} is-active{% endif %}"{% if depth < 2 %} data-treeview-toggled{% endif %}>*/
/*                     {% if element.parent or root %}<i class="fa fa-caret-right" data-treeview-toggler></i>{% endif %}*/
/*                     <a class="sonata-tree__item__edit" href="{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({category: element.id})) }}">{{ element.name }}</a>*/
/*                 </div>*/
/* */
/*                 {% if element.children|length %}*/
/*                     {{ _self.navigate_child(element.children, admin, false, current_category, depth + 1) }}*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endmacro %}*/
/* */
/* {% block list_table %}*/
/*     <div class="col-xs-6 col-md-3">*/
/*         {{ tree.navigate_child([root_category], admin, true, datagrid.values['category']['value'], 1) }}*/
/*     </div>*/
/*     <div class="col-xs-12 col-md-9">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
