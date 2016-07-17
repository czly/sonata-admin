<?php

/* SonataFormatterBundle:Ckeditor:browser.html.twig */
class __TwigTemplate_5efe071112beaf6022ab89588a6a089a903a5d412ec8db34c1f0eb957198da91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::empty_layout.html.twig", "SonataFormatterBundle:Ckeditor:browser.html.twig", 12);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'preview' => array($this, 'block_preview'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8701bc0ed828f3379062580e90e7cf7d20deb0e22498e5c5ff2e60e16807eb9c = $this->env->getExtension("native_profiler");
        $__internal_8701bc0ed828f3379062580e90e7cf7d20deb0e22498e5c5ff2e60e16807eb9c->enter($__internal_8701bc0ed828f3379062580e90e7cf7d20deb0e22498e5c5ff2e60e16807eb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Ckeditor:browser.html.twig"));

        // line 14
        $context["ckParameters"] = array("CKEditor" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"));
        // line 47
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8701bc0ed828f3379062580e90e7cf7d20deb0e22498e5c5ff2e60e16807eb9c->leave($__internal_8701bc0ed828f3379062580e90e7cf7d20deb0e22498e5c5ff2e60e16807eb9c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b646a55b6ba43a84390d2bde0bc862f3fe93510f9d1668f61f26c50cdeaf393 = $this->env->getExtension("native_profiler");
        $__internal_6b646a55b6ba43a84390d2bde0bc862f3fe93510f9d1668f61f26c50cdeaf393->enter($__internal_6b646a55b6ba43a84390d2bde0bc862f3fe93510f9d1668f61f26c50cdeaf393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            padding: 20px 15px;
        }
        .wrapper {
            background: #ecf0f5 !important;
        }
    </style>

";
        
        $__internal_6b646a55b6ba43a84390d2bde0bc862f3fe93510f9d1668f61f26c50cdeaf393->leave($__internal_6b646a55b6ba43a84390d2bde0bc862f3fe93510f9d1668f61f26c50cdeaf393_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15e096502722fe3604fb774ca59db6bb0253a5bd3d49111e2ca77032dd97fe7b = $this->env->getExtension("native_profiler");
        $__internal_15e096502722fe3604fb774ca59db6bb0253a5bd3d49111e2ca77032dd97fe7b->enter($__internal_15e096502722fe3604fb774ca59db6bb0253a5bd3d49111e2ca77032dd97fe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(function () {
            \$(\".select\").click(function (e) {
                e.preventDefault();
                window.opener.CKEDITOR.tools.callFunction(";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \$(this).attr(\"href\"));
                window.close();
            });
        });
    </script>
";
        
        $__internal_15e096502722fe3604fb774ca59db6bb0253a5bd3d49111e2ca77032dd97fe7b->leave($__internal_15e096502722fe3604fb774ca59db6bb0253a5bd3d49111e2ca77032dd97fe7b_prof);

    }

    // line 45
    public function block_preview($context, array $blocks = array())
    {
        $__internal_f8948918332530e02f3858d4abfd690b2f021c3fa7a778adcbe787d65089b38c = $this->env->getExtension("native_profiler");
        $__internal_f8948918332530e02f3858d4abfd690b2f021c3fa7a778adcbe787d65089b38c->enter($__internal_f8948918332530e02f3858d4abfd690b2f021c3fa7a778adcbe787d65089b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_f8948918332530e02f3858d4abfd690b2f021c3fa7a778adcbe787d65089b38c->leave($__internal_f8948918332530e02f3858d4abfd690b2f021c3fa7a778adcbe787d65089b38c_prof);

    }

    // line 70
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_758eb167fe7747941652a9c9c45d15914dfb72a72e29e96b7803498207d85b79 = $this->env->getExtension("native_profiler");
        $__internal_758eb167fe7747941652a9c9c45d15914dfb72a72e29e96b7803498207d85b79->enter($__internal_758eb167fe7747941652a9c9c45d15914dfb72a72e29e96b7803498207d85b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 71
        echo "    <div class=\"col-xs-6 col-md-3\">
        ";
        // line 72
        if ( !(null === (isset($context["root_category"]) ? $context["root_category"] : $this->getContext($context, "root_category")))) {
            // line 73
            echo "            ";
            echo $context["tree"]->getnavigate_child(array(0 => (isset($context["root_category"]) ? $context["root_category"] : $this->getContext($context, "root_category"))), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), "values", array()), "category", array(), "array"), "value", array(), "array"), 1);
            echo "
        ";
        }
        // line 75
        echo "    </div>

    <div class=\"col-xs-12 col-md-9\">
        <div class=\"box box-primary\">
            <div class=\"box-body ";
        // line 79
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 82
        $this->displayBlock('list_header', $context, $blocks);
        // line 83
        echo "
                ";
        // line 84
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 85
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 86
            $this->displayBlock('table_header', $context, $blocks);
            // line 114
            echo "
                        ";
            // line 115
            $this->displayBlock('table_body', $context, $blocks);
            // line 139
            echo "
                        ";
            // line 140
            $this->displayBlock('table_footer', $context, $blocks);
            // line 142
            echo "                    </table>
                ";
        } else {
            // line 144
            echo "                    <div class=\"callout callout-info\">
                        ";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 148
        echo "
                ";
        // line 149
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 151
        $this->displayBlock('list_footer', $context, $blocks);
        // line 220
        echo "        </div>
    </div>
";
        
        $__internal_758eb167fe7747941652a9c9c45d15914dfb72a72e29e96b7803498207d85b79->leave($__internal_758eb167fe7747941652a9c9c45d15914dfb72a72e29e96b7803498207d85b79_prof);

    }

    // line 82
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_a6c481e54075e131f868b7b57532d119700036bfdde28c8a91e82437b0880390 = $this->env->getExtension("native_profiler");
        $__internal_a6c481e54075e131f868b7b57532d119700036bfdde28c8a91e82437b0880390->enter($__internal_a6c481e54075e131f868b7b57532d119700036bfdde28c8a91e82437b0880390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_a6c481e54075e131f868b7b57532d119700036bfdde28c8a91e82437b0880390->leave($__internal_a6c481e54075e131f868b7b57532d119700036bfdde28c8a91e82437b0880390_prof);

    }

    // line 86
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_c2b563b8274817f479959cc242922c59749f26d1dfbbea5a62a208543757c1e2 = $this->env->getExtension("native_profiler");
        $__internal_c2b563b8274817f479959cc242922c59749f26d1dfbbea5a62a208543757c1e2->enter($__internal_c2b563b8274817f479959cc242922c59749f26d1dfbbea5a62a208543757c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 87
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 90
            echo "                                        ";
            if ((($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch") || ($this->getAttribute($context["field_description"], "name", array()) == "_action"))) {
                // line 91
                echo "                                            ";
                // line 92
                echo "                                        ";
            } else {
                // line 93
                echo "                                            ";
                $context["sortable"] = false;
                // line 94
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 95
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 96
                    echo "                                                ";
                    $context["sort_parameters"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")));
                    // line 97
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 98
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 99
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 100
                    echo "                                            ";
                }
                // line 101
                echo "
                                            ";
                // line 102
                ob_start();
                // line 103
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 104
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 105
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array())), "method"), "html", null, true);
                echo "
                                                        ";
                // line 106
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 107
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 109
                echo "                                        ";
            }
            // line 110
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_c2b563b8274817f479959cc242922c59749f26d1dfbbea5a62a208543757c1e2->leave($__internal_c2b563b8274817f479959cc242922c59749f26d1dfbbea5a62a208543757c1e2_prof);

    }

    // line 115
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_8ba07c98aa2fb1ef71fe0ca099a3d5860a8b735d05d9953b857d498368709b62 = $this->env->getExtension("native_profiler");
        $__internal_8ba07c98aa2fb1ef71fe0ca099a3d5860a8b735d05d9953b857d498368709b62->enter($__internal_8ba07c98aa2fb1ef71fe0ca099a3d5860a8b735d05d9953b857d498368709b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 116
        echo "                            <tbody>
                                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 118
            echo "                                    <tr>
                                        <td colspan=\"";
            // line 119
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - 1), "html", null, true);
            echo "\">
                                            <div>
                                                <a href=\"";
            // line 121
            echo $this->env->getExtension('sonata_media')->path($context["object"], "reference");
            echo "\" class=\"select\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('sonata_media')->thumbnail($context["object"], "admin", array("width" => 75, "height" => 60));
            echo "</a>

                                                <strong><a href=\"";
            // line 123
            echo $this->env->getExtension('sonata_media')->path($context["object"], "reference");
            echo "\" class=\"select\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
            echo "</a></strong> <br />
                                                ";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["object"], "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            if ($this->getAttribute($context["object"], "width", array())) {
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "width", array()), "html", null, true);
                if ($this->getAttribute($context["object"], "height", array())) {
                    echo "x";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "height", array()), "html", null, true);
                }
                echo "px";
            }
            // line 125
            echo "
                                                ";
            // line 126
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), $this->getAttribute($context["object"], "id", array()), array(), "array")) > 0)) {
                // line 127
                echo "                                                    - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
                echo ":
                                                    ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), $this->getAttribute($context["object"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["name"] => $context["format"]) {
                    // line 129
                    echo "                                                        <a href=\"";
                    echo $this->env->getExtension('sonata_media')->path($context["object"], $context["name"]);
                    echo "\" class=\"select\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a> ";
                    if ($this->getAttribute($context["format"], "width", array())) {
                        echo "(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "width", array()), "html", null, true);
                        if ($this->getAttribute($context["format"], "height", array())) {
                            echo "x";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "height", array()), "html", null, true);
                        }
                        echo "px)";
                    }
                    // line 130
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                                ";
            }
            // line 132
            echo "                                                <br />
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                            </tbody>
                        ";
        
        $__internal_8ba07c98aa2fb1ef71fe0ca099a3d5860a8b735d05d9953b857d498368709b62->leave($__internal_8ba07c98aa2fb1ef71fe0ca099a3d5860a8b735d05d9953b857d498368709b62_prof);

    }

    // line 140
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_11fe709287753f7e12992d7b80341be28f72b4da4bd8c6fbd184ae1289b900ca = $this->env->getExtension("native_profiler");
        $__internal_11fe709287753f7e12992d7b80341be28f72b4da4bd8c6fbd184ae1289b900ca->enter($__internal_11fe709287753f7e12992d7b80341be28f72b4da4bd8c6fbd184ae1289b900ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 141
        echo "                        ";
        
        $__internal_11fe709287753f7e12992d7b80341be28f72b4da4bd8c6fbd184ae1289b900ca->leave($__internal_11fe709287753f7e12992d7b80341be28f72b4da4bd8c6fbd184ae1289b900ca_prof);

    }

    // line 151
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_d82eac1b4a38c75f94f9e539dd5429d6ee9e4b155810d4578c20822900a0b7d9 = $this->env->getExtension("native_profiler");
        $__internal_d82eac1b4a38c75f94f9e539dd5429d6ee9e4b155810d4578c20822900a0b7d9->enter($__internal_d82eac1b4a38c75f94f9e539dd5429d6ee9e4b155810d4578c20822900a0b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 152
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 153
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 155
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 156
                echo "                                <div class=\"pull-right\">
                                    ";
                // line 157
                $this->displayBlock('pager_results', $context, $blocks);
                // line 179
                echo "                                </div>

                                ";
                // line 181
                $this->displayBlock('pager_links', $context, $blocks);
                // line 215
                echo "                            ";
            }
            // line 216
            echo "                        </div>
                    </div>
                ";
        }
        // line 219
        echo "            ";
        
        $__internal_d82eac1b4a38c75f94f9e539dd5429d6ee9e4b155810d4578c20822900a0b7d9->leave($__internal_d82eac1b4a38c75f94f9e539dd5429d6ee9e4b155810d4578c20822900a0b7d9_prof);

    }

    // line 157
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_f499d7fe5e640bc8597be052f5ab3828de05e186426e3a1b131cfabac477d5ff = $this->env->getExtension("native_profiler");
        $__internal_f499d7fe5e640bc8597be052f5ab3828de05e186426e3a1b131cfabac477d5ff->enter($__internal_f499d7fe5e640bc8597be052f5ab3828de05e186426e3a1b131cfabac477d5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 158
        echo "                                        ";
        $this->displayBlock('num_pages', $context, $blocks);
        // line 162
        echo "
                                        ";
        // line 163
        $this->displayBlock('num_results', $context, $blocks);
        // line 167
        echo "
                                        ";
        // line 168
        $this->displayBlock('max_per_page', $context, $blocks);
        // line 178
        echo "                                    ";
        
        $__internal_f499d7fe5e640bc8597be052f5ab3828de05e186426e3a1b131cfabac477d5ff->leave($__internal_f499d7fe5e640bc8597be052f5ab3828de05e186426e3a1b131cfabac477d5ff_prof);

    }

    // line 158
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_47700b74ea7b89f10d828e77d9de0e15f015c02c8f693ece01b827ee17bd1ed9 = $this->env->getExtension("native_profiler");
        $__internal_47700b74ea7b89f10d828e77d9de0e15f015c02c8f693ece01b827ee17bd1ed9->enter($__internal_47700b74ea7b89f10d828e77d9de0e15f015c02c8f693ece01b827ee17bd1ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 159
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
                                            &nbsp;-&nbsp;
                                        ";
        
        $__internal_47700b74ea7b89f10d828e77d9de0e15f015c02c8f693ece01b827ee17bd1ed9->leave($__internal_47700b74ea7b89f10d828e77d9de0e15f015c02c8f693ece01b827ee17bd1ed9_prof);

    }

    // line 163
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_43862d02c71e923556532d6a6017e71f4e7ef6b4ff1f909de1a138ed1139f6e5 = $this->env->getExtension("native_profiler");
        $__internal_43862d02c71e923556532d6a6017e71f4e7ef6b4ff1f909de1a138ed1139f6e5->enter($__internal_43862d02c71e923556532d6a6017e71f4e7ef6b4ff1f909de1a138ed1139f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 164
        echo "                                            ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 165
        echo "                                            &nbsp;-&nbsp;
                                        ";
        
        $__internal_43862d02c71e923556532d6a6017e71f4e7ef6b4ff1f909de1a138ed1139f6e5->leave($__internal_43862d02c71e923556532d6a6017e71f4e7ef6b4ff1f909de1a138ed1139f6e5_prof);

    }

    // line 168
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_42b9d0dba57f0d2967e95b10c2f33c43bed1f717fa0de19fce5b7651af0ace3e = $this->env->getExtension("native_profiler");
        $__internal_42b9d0dba57f0d2967e95b10c2f33c43bed1f717fa0de19fce5b7651af0ace3e->enter($__internal_42b9d0dba57f0d2967e95b10c2f33c43bed1f717fa0de19fce5b7651af0ace3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 169
        echo "                                            <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
                                            <select class=\"per-page small\" id=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
                                                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 172
            echo "                                                    <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_per_page" => $context["per_page"]))), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
            echo "\">
                                                        ";
            // line 173
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                            </select>
                                        ";
        
        $__internal_42b9d0dba57f0d2967e95b10c2f33c43bed1f717fa0de19fce5b7651af0ace3e->leave($__internal_42b9d0dba57f0d2967e95b10c2f33c43bed1f717fa0de19fce5b7651af0ace3e_prof);

    }

    // line 181
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_3b933288d1c38b8a246cd8e0e6bdf9846b7cbdc009f5dfff259b9de253cb819a = $this->env->getExtension("native_profiler");
        $__internal_3b933288d1c38b8a246cd8e0e6bdf9846b7cbdc009f5dfff259b9de253cb819a->enter($__internal_3b933288d1c38b8a246cd8e0e6bdf9846b7cbdc009f5dfff259b9de253cb819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 182
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 183
            echo "                                        <hr/>
                                        <div class=\"text-center\">
                                            <ul class=\"pagination\">
                                                ";
            // line 186
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
                // line 187
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 1), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                                ";
            }
            // line 189
            echo "
                                                ";
            // line 190
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array()))) {
                // line 191
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                                ";
            }
            // line 193
            echo "
                                                ";
            // line 195
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "pager_links"), "method")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 196
                echo "                                                    ";
                if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
                    // line 197
                    echo "                                                        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                                    ";
                } else {
                    // line 199
                    echo "                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                                    ";
                }
                // line 201
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "
                                                ";
            // line 203
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array()))) {
                // line 204
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                                ";
            }
            // line 206
            echo "
                                                ";
            // line 207
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())))) {
                // line 208
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                                ";
            }
            // line 210
            echo "                                            </ul>
                                        </div>

                                    ";
        }
        // line 214
        echo "                                ";
        
        $__internal_3b933288d1c38b8a246cd8e0e6bdf9846b7cbdc009f5dfff259b9de253cb819a->leave($__internal_3b933288d1c38b8a246cd8e0e6bdf9846b7cbdc009f5dfff259b9de253cb819a_prof);

    }

    // line 224
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_baa318869c641ea66d41a10f502e7fe4de64fd9b5b1c204b1f0f5ee2c2c8db22 = $this->env->getExtension("native_profiler");
        $__internal_baa318869c641ea66d41a10f502e7fe4de64fd9b5b1c204b1f0f5ee2c2c8db22->enter($__internal_baa318869c641ea66d41a10f502e7fe4de64fd9b5b1c204b1f0f5ee2c2c8db22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 225
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 226
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                    <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-filter\"></i>
                        ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                    </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 236
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                    <i class=\"fa ";
                    // line 238
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_baa318869c641ea66d41a10f502e7fe4de64fd9b5b1c204b1f0f5ee2c2c8db22->leave($__internal_baa318869c641ea66d41a10f502e7fe4de64fd9b5b1c204b1f0f5ee2c2c8db22_prof);

    }

    // line 248
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_252565d7400043afe04fc0df563be5cda98708a1303d14d2a39085891de5a2c5 = $this->env->getExtension("native_profiler");
        $__internal_252565d7400043afe04fc0df563be5cda98708a1303d14d2a39085891de5a2c5->enter($__internal_252565d7400043afe04fc0df563be5cda98708a1303d14d2a39085891de5a2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 249
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 250
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 251
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 252
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 255
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 256
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 261
                echo "                                    <div class=\"form-group\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 262
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 263
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 265
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 266
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 268
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 272
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 288
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 289
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\"></i> ";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn\" href=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filters" => "reset"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 297
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                <div class=\"form-group\">
                                    <a href=\"#\" data-toggle=\"advanced-filter\">
                                        <i class=\"fa fa-cogs\"></i>
                                        ";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>
                            </div>
                        </div>

                        ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters"))));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 311
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_252565d7400043afe04fc0df563be5cda98708a1303d14d2a39085891de5a2c5->leave($__internal_252565d7400043afe04fc0df563be5cda98708a1303d14d2a39085891de5a2c5_prof);

    }

    // line 48
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
            $__internal_334f4383c68377127228ae4739e6ec94a0195af8ede67dba0e2e52b5a59f9bf5 = $this->env->getExtension("native_profiler");
            $__internal_334f4383c68377127228ae4739e6ec94a0195af8ede67dba0e2e52b5a59f9bf5->enter($__internal_334f4383c68377127228ae4739e6ec94a0195af8ede67dba0e2e52b5a59f9bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 49
            echo "    ";
            if (((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection"))) == 0))) {
                // line 50
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "warning_no_category", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "method"), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 54
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 56
                echo "            <li>
                <div class=\"sonata-tree__item";
                // line 57
                if (($this->getAttribute($context["element"], "id", array()) == (isset($context["current_category"]) ? $context["current_category"] : $this->getContext($context, "current_category")))) {
                    echo " is-active";
                }
                echo "\"";
                if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 58
                if (($this->getAttribute($context["element"], "parent", array()) || (isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 59
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("category" => $this->getAttribute($context["element"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</a>
                </div>

                ";
                // line 62
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 63
                    echo "                    ";
                    echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 2 => false, 3 => (isset($context["current_category"]) ? $context["current_category"] : $this->getContext($context, "current_category")), 4 => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1)), "method");
                    echo "
                ";
                }
                // line 65
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "    </ul>
";
            
            $__internal_334f4383c68377127228ae4739e6ec94a0195af8ede67dba0e2e52b5a59f9bf5->leave($__internal_334f4383c68377127228ae4739e6ec94a0195af8ede67dba0e2e52b5a59f9bf5_prof);

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
        return "SonataFormatterBundle:Ckeditor:browser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1013 => 67,  1006 => 65,  1000 => 63,  998 => 62,  989 => 59,  985 => 58,  975 => 57,  972 => 56,  968 => 55,  961 => 54,  955 => 51,  952 => 50,  949 => 49,  930 => 48,  918 => 313,  907 => 311,  903 => 310,  894 => 304,  884 => 297,  880 => 296,  874 => 293,  866 => 289,  864 => 288,  858 => 284,  841 => 277,  833 => 272,  826 => 268,  822 => 266,  819 => 265,  811 => 263,  809 => 262,  794 => 261,  790 => 260,  783 => 256,  777 => 255,  769 => 252,  766 => 251,  763 => 250,  760 => 249,  754 => 248,  743 => 242,  730 => 238,  722 => 237,  719 => 236,  714 => 235,  707 => 231,  700 => 226,  698 => 225,  692 => 224,  685 => 214,  679 => 210,  671 => 208,  669 => 207,  666 => 206,  658 => 204,  656 => 203,  653 => 202,  647 => 201,  639 => 199,  631 => 197,  628 => 196,  623 => 195,  620 => 193,  612 => 191,  610 => 190,  607 => 189,  599 => 187,  597 => 186,  592 => 183,  589 => 182,  583 => 181,  575 => 176,  566 => 173,  557 => 172,  553 => 171,  549 => 170,  542 => 169,  536 => 168,  528 => 165,  525 => 164,  519 => 163,  506 => 159,  500 => 158,  493 => 178,  491 => 168,  488 => 167,  486 => 163,  483 => 162,  480 => 158,  474 => 157,  467 => 219,  462 => 216,  459 => 215,  457 => 181,  453 => 179,  451 => 157,  448 => 156,  446 => 155,  442 => 153,  439 => 152,  433 => 151,  426 => 141,  420 => 140,  412 => 137,  402 => 132,  399 => 131,  393 => 130,  378 => 129,  374 => 128,  369 => 127,  367 => 126,  364 => 125,  353 => 124,  347 => 123,  340 => 121,  335 => 119,  332 => 118,  328 => 117,  325 => 116,  319 => 115,  310 => 111,  304 => 110,  301 => 109,  297 => 107,  293 => 106,  288 => 105,  282 => 104,  270 => 103,  268 => 102,  265 => 101,  262 => 100,  259 => 99,  256 => 98,  253 => 97,  250 => 96,  247 => 95,  244 => 94,  241 => 93,  238 => 92,  236 => 91,  233 => 90,  229 => 89,  225 => 87,  219 => 86,  208 => 82,  199 => 220,  197 => 151,  192 => 149,  189 => 148,  183 => 145,  180 => 144,  176 => 142,  174 => 140,  171 => 139,  169 => 115,  166 => 114,  164 => 86,  161 => 85,  159 => 84,  156 => 83,  154 => 82,  149 => 80,  143 => 79,  137 => 75,  131 => 73,  129 => 72,  126 => 71,  120 => 70,  109 => 45,  96 => 37,  86 => 31,  80 => 30,  60 => 17,  54 => 16,  47 => 12,  45 => 47,  43 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle::empty_layout.html.twig' %}*/
/* */
/* {% set ckParameters = {'CKEditor': app.request.get('CKEditor'), 'CKEditorFuncNum': app.request.get('CKEditorFuncNum')} %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             padding: 20px 15px;*/
/*         }*/
/*         .wrapper {*/
/*             background: #ecf0f5 !important;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $(function () {*/
/*             $(".select").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 window.opener.CKEDITOR.tools.callFunction({{ app.request.get('CKEditorFuncNum')|escape('js') }}, $(this).attr("href"));*/
/*                 window.close();*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block preview %}{% endblock %}*/
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
/*                 <div class="sonata-tree__item{% if element.id == current_category %} is-active{% endif %}"{% if depth < 2 %} data-treeview-toggled{% endif %}>*/
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
/*         {% if root_category is not null %}*/
/*             {{ tree.navigate_child([root_category], admin, true, datagrid.values['category']['value'], 1) }}*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-md-9">*/
/*         <div class="box box-primary">*/
/*             <div class="box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}">*/
/*                 {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*                 {% block list_header %}{% endblock %}*/
/* */
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <table class="table table-bordered table-striped">*/
/*                         {% block table_header %}*/
/*                             <thead>*/
/*                                 <tr class="sonata-ba-list-field-header">*/
/*                                     {% for field_description in admin.list.elements %}*/
/*                                         {% if field_description.getOption('code') == '_batch' or field_description.name == '_action' %}*/
/*                                             {# Disable batch and actions #}*/
/*                                         {% else %}*/
/*                                             {% set sortable = false %}*/
/*                                             {% if field_description.options.sortable is defined and field_description.options.sortable%}*/
/*                                                 {% set sortable             = true %}*/
/*                                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid)|merge(ckParameters) %}*/
/*                                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% spaceless %}*/
/*                                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}">*/
/*                                                     {% if sortable %}<a href="{{ admin.generateUrl('ckeditor_browser', sort_parameters) }}">{% endif %}*/
/*                                                         {{ admin.trans(field_description.label) }}*/
/*                                                         {% if sortable %}</a>{% endif %}*/
/*                                                 </th>*/
/*                                             {% endspaceless %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_body %}*/
/*                             <tbody>*/
/*                                 {% for object in admin.datagrid.results %}*/
/*                                     <tr>*/
/*                                         <td colspan="{{ (admin.list.elements|length) - 1}}">*/
/*                                             <div>*/
/*                                                 <a href="{% path object, 'reference' %}" class="select" style="float: left; margin-right: 6px;">{% thumbnail object, 'admin' with {'width': 75, 'height': 60} %}</a>*/
/* */
/*                                                 <strong><a href="{% path object, 'reference' %}" class="select">{{ object.name }}</a></strong> <br />*/
/*                                                 {{ object.providerName|trans({}, 'SonataMediaBundle') }}{% if object.width %}: {{ object.width }}{% if object.height %}x{{ object.height }}{% endif %}px{% endif %}*/
/* */
/*                                                 {% if formats[object.id]|length > 0 %}*/
/*                                                     - {{ 'title.formats'|trans({}, 'SonataMediaBundle') }}:*/
/*                                                     {% for name, format in formats[object.id] %}*/
/*                                                         <a href="{% path object, name %}" class="select">{{ name }}</a> {% if format.width %}({{ format.width }}{% if format.height %}x{{ format.height }}{% endif %}px){% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                                 <br />*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_footer %}*/
/*                         {% endblock %}*/
/*                     </table>*/
/*                 {% else %}*/
/*                     <div class="callout callout-info">*/
/*                         {{ 'no_result'|trans({}, 'SonataAdminBundle') }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}*/
/*             </div>*/
/*             {% block list_footer %}*/
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <div class="box-footer">*/
/*                         <div class="form-inline clearfix">*/
/*                             {% if not app.request.isXmlHttpRequest %}*/
/*                                 <div class="pull-right">*/
/*                                     {% block pager_results %}*/
/*                                         {% block num_pages %}*/
/*                                             {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}*/
/*                                             &nbsp;-&nbsp;*/
/*                                         {% endblock %}*/
/* */
/*                                         {% block num_results %}*/
/*                                             {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*                                             &nbsp;-&nbsp;*/
/*                                         {% endblock %}*/
/* */
/*                                         {% block max_per_page %}*/
/*                                             <label class="control-label" for="{{ admin.uniqid }}_per_page">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>*/
/*                                             <select class="per-page small" id="{{ admin.uniqid }}_per_page" style="width: auto; height: auto">*/
/*                                                 {% for per_page in admin.getperpageoptions %}*/
/*                                                     <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('ckeditor_browser', {'filter': admin.datagrid.values|merge({'_per_page': per_page})}|merge(ckParameters)) }}">*/
/*                                                         {{ per_page }}*/
/*                                                     </option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         {% endblock %}*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/* */
/*                                 {% block pager_links %}*/
/*                                     {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                         <hr/>*/
/*                                         <div class="text-center">*/
/*                                             <ul class="pagination">*/
/*                                                 {% if admin.datagrid.pager.page > 2  %}*/
/*                                                     <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, 1)|merge(ckParameters)) }}" title="{{ 'link_first_pager'|trans({}, 'SonataAdminBundle') }}">&laquo;</a></li>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if admin.datagrid.pager.page != admin.datagrid.pager.previouspage %}*/
/*                                                     <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.previouspage)|merge(ckParameters)) }}" title="{{ 'link_previous_pager'|trans({}, 'SonataAdminBundle') }}">&lsaquo;</a></li>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {# Set the number of pages to display in the pager #}*/
/*                                                 {% for page in admin.datagrid.pager.getLinks(admin_pool.getOption('pager_links')) %}*/
/*                                                     {% if page == admin.datagrid.pager.page %}*/
/*                                                         <li class="active"><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, page)|merge(ckParameters)) }}">{{ page }}</a></li>*/
/*                                                     {% else %}*/
/*                                                         <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, page)|merge(ckParameters)) }}">{{ page }}</a></li>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/* */
/*                                                 {% if admin.datagrid.pager.page != admin.datagrid.pager.nextpage %}*/
/*                                                     <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.nextpage)|merge(ckParameters)) }}" title="{{ 'link_next_pager'|trans({}, 'SonataAdminBundle') }}">&rsaquo;</a></li>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if admin.datagrid.pager.page != admin.datagrid.pager.lastpage and admin.datagrid.pager.lastpage != admin.datagrid.pager.nextpage %}*/
/*                                                     <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.lastpage)|merge(ckParameters)) }}" title="{{ 'link_last_pager'|trans({}, 'SonataAdminBundle') }}">&raquo;</a></li>*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block list_filters_actions %}*/
/*     {%- if admin.datagrid.filters|length %}*/
/*         <ul class="nav navbar-nav navbar-right">*/
/* */
/*             <li class="dropdown sonata-actions">*/
/*                     <a href="#" class="dropdown-toggle sonata-ba-action" data-toggle="dropdown">*/
/*                         <i class="fa fa-filter"></i>*/
/*                         {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b>*/
/*                     </a>*/
/* */
/*                 <ul class="dropdown-menu" role="menu">*/
/*                         {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is sameas(true) or filter.options['show_filter'] is null) %}*/
/*                         <li>*/
/*                             <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                     <i class="fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}"></i>{{ admin.trans(filter.label, {}, filter.translationDomain) }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif -%}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form admin.getTemplate('filter') %}*/
/* */
/*         <div class="col-xs-12 col-md-12 sonata-filters-box" style="display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}" id="filter-container-{{ admin.uniqid() }}">*/
/*             <div class="box box-primary" >*/
/*                 <div class="box-body">*/
/*                     <form class="sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('ckeditor_browser') }}" method="GET" role="form">*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-9">*/
/*                                 {% for filter in admin.datagrid.filters %}*/
/*                                     <div class="form-group" id="filter-{{ admin.uniqid }}-{{ filter.name }}" sonata-filter="{{ (filter.options['show_filter'] is sameas(true) or filter.options['show_filter'] is null) ? 'true' : 'false' }}" style="display: {% if (filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is sameas(true)) %}block{% else %}none{% endif %}">*/
/*                                         {% if filter.label is not sameas(false) %}*/
/*                                             <label for="{{ form.children[filter.formName].children['value'].vars.id }}" class="col-sm-3 control-label">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                         {% endif %}*/
/*                                         {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/* */
/*                                         <div class="col-sm-4 advanced-filter">*/
/*                                             {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-4">*/
/*                                             {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-1">*/
/*                                             <label class="control-label">*/
/*                                                 <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                                     <i class="fa fa-minus-circle"></i>*/
/*                                                 </a>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <div class="col-sm-3 text-center">*/
/*                                 <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                                 {% set foo = form.children['_page'].setRendered() %}*/
/*                                 {{ form_rest(form) }}*/
/* */
/*                                 <div class="form-group">*/
/*                                     <button type="submit" class="btn btn-primary">*/
/*                                         <i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </button>*/
/* */
/*                                     <a class="btn" href="{{ admin.generateUrl('ckeditor_browser', {filters: 'reset'}|merge(ckParameters)) }}">*/
/*                                         {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <a href="#" data-toggle="advanced-filter">*/
/*                                         <i class="fa fa-cogs"></i>*/
/*                                         {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% for paramKey, paramValue in admin.persistentParameters|merge(ckParameters) %}*/
/*                             <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                         {% endfor %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
