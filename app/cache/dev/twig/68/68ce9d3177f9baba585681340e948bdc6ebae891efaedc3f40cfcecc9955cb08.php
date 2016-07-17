<?php

/* SonataClassificationBundle:CategoryAdmin:tree.html.twig */
class __TwigTemplate_3d71b6012571cb49b690aa518bdcc9cd4d8ea6bb1fc082f86e750d5330866437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataClassificationBundle:CategoryAdmin:tree.html.twig", 16);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa18bdd68a4748c64af7a46c41a12d6d3972978ace91bf5c6bd8b6ea445e971c = $this->env->getExtension("native_profiler");
        $__internal_aa18bdd68a4748c64af7a46c41a12d6d3972978ace91bf5c6bd8b6ea445e971c->enter($__internal_aa18bdd68a4748c64af7a46c41a12d6d3972978ace91bf5c6bd8b6ea445e971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataClassificationBundle:CategoryAdmin:tree.html.twig"));

        // line 18
        $context["tree"] = $this;
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa18bdd68a4748c64af7a46c41a12d6d3972978ace91bf5c6bd8b6ea445e971c->leave($__internal_aa18bdd68a4748c64af7a46c41a12d6d3972978ace91bf5c6bd8b6ea445e971c_prof);

    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_44498e4893f5117e71b8699af811adbb8f5a1cebc2b98ebed3f7f1c3f0851f26 = $this->env->getExtension("native_profiler");
        $__internal_44498e4893f5117e71b8699af811adbb8f5a1cebc2b98ebed3f7f1c3f0851f26->enter($__internal_44498e4893f5117e71b8699af811adbb8f5a1cebc2b98ebed3f7f1c3f0851f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 41
        echo "    ";
        $this->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig", "SonataClassificationBundle:CategoryAdmin:tree.html.twig", 41)->display(array("mode" => "tree", "action" =>         // line 43
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 44
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
        
        $__internal_44498e4893f5117e71b8699af811adbb8f5a1cebc2b98ebed3f7f1c3f0851f26->leave($__internal_44498e4893f5117e71b8699af811adbb8f5a1cebc2b98ebed3f7f1c3f0851f26_prof);

    }

    // line 48
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_910cf8e8f495c9879a354a663f12b5efa0a0fedf8195c026513e5def10e689aa = $this->env->getExtension("native_profiler");
        $__internal_910cf8e8f495c9879a354a663f12b5efa0a0fedf8195c026513e5def10e689aa->enter($__internal_910cf8e8f495c9879a354a663f12b5efa0a0fedf8195c026513e5def10e689aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 49
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "tree_catalog_title", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "method"), "html", null, true);
        echo "
                    ";
        // line 54
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "hide_context"), "method")) {
            // line 55
            echo "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                <strong class=\"text-info\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_context"]) ? $context["current_context"] : $this->getContext($context, "current_context")), "name", array()), "html", null, true);
            echo "</strong> <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["root_categories"]) ? $context["root_categories"] : $this->getContext($context, "root_categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 61
                echo "                                    <li>
                                        <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree", 1 => array("context" => $this->getAttribute($this->getAttribute($context["category"], "context", array()), "id", array()))), "method"), "html", null, true);
                echo "\">
                                            ";
                // line 63
                if (((isset($context["current_context"]) ? $context["current_context"] : $this->getContext($context, "current_context")) && ($this->getAttribute($this->getAttribute($context["category"], "context", array()), "id", array()) == $this->getAttribute((isset($context["current_context"]) ? $context["current_context"] : $this->getContext($context, "current_context")), "id", array())))) {
                    // line 64
                    echo "                                                <span class=\"pull-right\">
                                                    <i class=\"fa fa-check\"></i>
                                                </span>
                                            ";
                }
                // line 68
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 75
        echo "                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 78
        echo $context["tree"]->getnavigate_child(array(0 => (isset($context["main_category"]) ? $context["main_category"] : $this->getContext($context, "main_category"))), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true, 0);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_910cf8e8f495c9879a354a663f12b5efa0a0fedf8195c026513e5def10e689aa->leave($__internal_910cf8e8f495c9879a354a663f12b5efa0a0fedf8195c026513e5def10e689aa_prof);

    }

    // line 19
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__depth__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "depth" => $__depth__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_925ebcfe480b3a707b3bb1af840801bdb91831546b456a703789018ed2e73b77 = $this->env->getExtension("native_profiler");
            $__internal_925ebcfe480b3a707b3bb1af840801bdb91831546b456a703789018ed2e73b77->enter($__internal_925ebcfe480b3a707b3bb1af840801bdb91831546b456a703789018ed2e73b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 20
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree sonata-tree--toggleable js-treeview\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li class=\"sonata-ba-list-field\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
                echo "\" >
                <div class=\"sonata-tree__item\"";
                // line 23
                if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 24
                if (($this->getAttribute($context["element"], "parent", array()) || (isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 25
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</a>
                    <i class=\"text-muted\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "description", array()), "html", null, true);
                echo "</i>
                    ";
                // line 28
                echo "                    ";
                if ($this->getAttribute($context["element"], "enabled", array())) {
                    echo "<span class=\"label label-success pull-right\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "active", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "method"), "html", null, true);
                    echo "</span>";
                }
                // line 29
                echo "                    ";
                if ( !$this->getAttribute($context["element"], "enabled", array())) {
                    echo "<span class=\"label label-danger pull-right\"><i class=\"fa fa-times\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "disabled", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "method"), "html", null, true);
                    echo "</span>";
                }
                // line 30
                echo "                </div>

                ";
                // line 32
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 33
                    echo "                    ";
                    echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 2 => false, 3 => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1)), "method");
                    echo "
                ";
                }
                // line 35
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
            
            $__internal_925ebcfe480b3a707b3bb1af840801bdb91831546b456a703789018ed2e73b77->leave($__internal_925ebcfe480b3a707b3bb1af840801bdb91831546b456a703789018ed2e73b77_prof);

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
        return "SonataClassificationBundle:CategoryAdmin:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 37,  215 => 35,  209 => 33,  207 => 32,  203 => 30,  196 => 29,  189 => 28,  185 => 26,  178 => 25,  174 => 24,  168 => 23,  163 => 22,  159 => 21,  152 => 20,  134 => 19,  122 => 78,  117 => 75,  112 => 72,  101 => 68,  95 => 64,  93 => 63,  89 => 62,  86 => 61,  82 => 60,  76 => 57,  72 => 55,  70 => 54,  66 => 53,  60 => 49,  54 => 48,  47 => 44,  46 => 43,  44 => 41,  38 => 40,  31 => 16,  29 => 18,  11 => 16,);
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
/* {#*/
/*     This template is not used at all, it is just a template that you can use to create*/
/*     your own custom tree view.*/
/* #}*/
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
/* {% import _self as tree %}*/
/* {% macro navigate_child(collection, admin, root, depth) %}*/
/*     <ul{% if root %} class="sonata-tree sonata-tree--toggleable js-treeview"{% endif %}>*/
/*         {% for element in collection %}*/
/*             <li class="sonata-ba-list-field" objectId="{{ element.id }}" >*/
/*                 <div class="sonata-tree__item"{% if depth < 2 %} data-treeview-toggled{% endif %}>*/
/*                     {% if element.parent or root %}<i class="fa fa-caret-right" data-treeview-toggler></i>{% endif %}*/
/*                     <a class="sonata-tree__item__edit" href="{{ admin.generateObjectUrl('edit', element) }}">{{ element.name }}</a>*/
/*                     <i class="text-muted">{{ element.description }}</i>*/
/*                     {#<a class="label label-default pull-right" href="{{ admin.generateObjectUrl('edit', element) }}">edit <i class="fa fa-magic"></i></a>#}*/
/*                     {% if element.enabled %}<span class="label label-success pull-right"><i class="fa fa-check"></i> {{ admin.trans('active', {}, admin.translationDomain) }}</span>{% endif %}*/
/*                     {% if not element.enabled %}<span class="label label-danger pull-right"><i class="fa fa-times"></i> {{ admin.trans('disabled', {}, admin.translationDomain) }}</span>{% endif %}*/
/*                 </div>*/
/* */
/*                 {% if element.children|length %}*/
/*                     {{ _self.navigate_child(element.children, admin, false, depth + 1) }}*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endmacro %}*/
/* */
/* {% block tab_menu %}*/
/*     {% include 'SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig' with {*/
/*         'mode':   'tree',*/
/*         'action': action,*/
/*         'admin':  admin,*/
/*     } only %}*/
/* {% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="col-xs-12 col-md-12">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h1 class="box-title">*/
/*                     {{ admin.trans('tree_catalog_title', {}, admin.translationdomain) }}*/
/*                     {% if not app.request.get('hide_context') %}*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                 <strong class="text-info">{{ current_context.name }}</strong> <span class="caret"></span>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 {% for category in root_categories %}*/
/*                                     <li>*/
/*                                         <a href="{{ admin.generateUrl('tree', { 'context': category.context.id }) }}">*/
/*                                             {% if current_context and category.context.id == current_context.id %}*/
/*                                                 <span class="pull-right">*/
/*                                                     <i class="fa fa-check"></i>*/
/*                                                 </span>*/
/*                                             {% endif %}*/
/*                                             {{ category.name }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tree.navigate_child([main_category], admin, true, 0) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
