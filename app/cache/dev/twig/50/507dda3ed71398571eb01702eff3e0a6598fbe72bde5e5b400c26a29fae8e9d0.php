<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_c0522afe2d014c4896574413e7879856f2dbf6a7ec6dcc36346d8e4ca8a3b15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49fae477d325e3ae8c1d3808492d6c9182df63718cce80aa15961b527c3bca39 = $this->env->getExtension("native_profiler");
        $__internal_49fae477d325e3ae8c1d3808492d6c9182df63718cce80aa15961b527c3bca39->enter($__internal_49fae477d325e3ae8c1d3808492d6c9182df63718cce80aa15961b527c3bca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:dashboard.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49fae477d325e3ae8c1d3808492d6c9182df63718cce80aa15961b527c3bca39->leave($__internal_49fae477d325e3ae8c1d3808492d6c9182df63718cce80aa15961b527c3bca39_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_32d3109b91e1c350b36f1bd5e702766d5b958633b3a8a34ff4e530c10ed692e4 = $this->env->getExtension("native_profiler");
        $__internal_32d3109b91e1c350b36f1bd5e702766d5b958633b3a8a34ff4e530c10ed692e4->enter($__internal_32d3109b91e1c350b36f1bd5e702766d5b958633b3a8a34ff4e530c10ed692e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_32d3109b91e1c350b36f1bd5e702766d5b958633b3a8a34ff4e530c10ed692e4->leave($__internal_32d3109b91e1c350b36f1bd5e702766d5b958633b3a8a34ff4e530c10ed692e4_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_394d41b9f4dd3cf33635d3814346fb42529cd3b96f405efb0f451864c182f40c = $this->env->getExtension("native_profiler");
        $__internal_394d41b9f4dd3cf33635d3814346fb42529cd3b96f405efb0f451864c182f40c->enter($__internal_394d41b9f4dd3cf33635d3814346fb42529cd3b96f405efb0f451864c182f40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_394d41b9f4dd3cf33635d3814346fb42529cd3b96f405efb0f451864c182f40c->leave($__internal_394d41b9f4dd3cf33635d3814346fb42529cd3b96f405efb0f451864c182f40c_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_169ff70429ebf2074a318d195f0ace17144462a0bf50290ffa6285f1bd378153 = $this->env->getExtension("native_profiler");
        $__internal_169ff70429ebf2074a318d195f0ace17144462a0bf50290ffa6285f1bd378153->enter($__internal_169ff70429ebf2074a318d195f0ace17144462a0bf50290ffa6285f1bd378153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()))));
        echo "

    ";
        // line 55
        if ((isset($context["has_top"]) ? $context["has_top"] : $this->getContext($context, "has_top"))) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        echo "        ";
        $context["width_right"] = 4;
        // line 70
        echo "        ";
        $context["width_center"] = 4;
        // line 71
        echo "
        ";
        // line 73
        echo "        ";
        if ( !(isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 74
            echo "            ";
            $context["width_left"] = 6;
            // line 75
            echo "            ";
            $context["width_right"] = 6;
            // line 76
            echo "        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if (( !(isset($context["has_left"]) ? $context["has_left"] : $this->getContext($context, "has_left")) &&  !(isset($context["has_right"]) ? $context["has_right"] : $this->getContext($context, "has_right")))) {
            // line 80
            echo "            ";
            $context["width_center"] = 12;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if (((isset($context["has_left"]) ? $context["has_left"] : $this->getContext($context, "has_left")) || (isset($context["has_right"]) ? $context["has_right"] : $this->getContext($context, "has_right")))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_left"]) ? $context["width_left"] : $this->getContext($context, "width_left")), "html", null, true);
            echo "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 88
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_center"]) ? $context["width_center"] : $this->getContext($context, "width_center")), "html", null, true);
            echo "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                echo "                    ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 98
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 105
        echo "        ";
        if (((isset($context["has_left"]) ? $context["has_left"] : $this->getContext($context, "has_left")) || (isset($context["has_right"]) ? $context["has_right"] : $this->getContext($context, "has_right")))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_right"]) ? $context["width_right"] : $this->getContext($context, "width_right")), "html", null, true);
            echo "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 109
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if ((isset($context["has_bottom"]) ? $context["has_bottom"] : $this->getContext($context, "has_bottom"))) {
            // line 117
            echo "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 121
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()))));
        echo "

";
        
        $__internal_169ff70429ebf2074a318d195f0ace17144462a0bf50290ffa6285f1bd378153->leave($__internal_169ff70429ebf2074a318d195f0ace17144462a0bf50290ffa6285f1bd378153_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 128,  407 => 127,  403 => 125,  397 => 124,  391 => 121,  386 => 120,  383 => 119,  379 => 118,  376 => 117,  374 => 116,  370 => 114,  366 => 112,  360 => 111,  354 => 109,  351 => 108,  347 => 107,  342 => 106,  339 => 105,  336 => 103,  332 => 101,  326 => 100,  320 => 98,  317 => 97,  313 => 96,  308 => 95,  306 => 94,  303 => 93,  299 => 91,  293 => 90,  287 => 88,  284 => 87,  280 => 86,  275 => 85,  272 => 84,  269 => 82,  266 => 81,  263 => 80,  260 => 79,  257 => 77,  254 => 76,  251 => 75,  248 => 74,  245 => 73,  242 => 71,  239 => 70,  236 => 69,  234 => 68,  230 => 66,  226 => 64,  220 => 63,  214 => 60,  209 => 59,  206 => 58,  202 => 57,  199 => 56,  197 => 55,  192 => 53,  189 => 52,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  169 => 47,  167 => 46,  164 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  144 => 40,  142 => 39,  139 => 38,  133 => 37,  130 => 36,  127 => 35,  124 => 34,  119 => 33,  117 => 32,  114 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  94 => 26,  92 => 25,  89 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  69 => 19,  67 => 18,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock%}*/
/* {% block breadcrumb %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     {% set has_left = false %}*/
/*     {% for block in blocks.left %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_left = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_center = false %}*/
/*     {% for block in blocks.center %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_center = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_right = false %}*/
/*     {% for block in blocks.right %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_right = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_top = false %}*/
/*     {% for block in blocks.top %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_top = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_bottom = false %}*/
/*     {% for block in blocks.bottom %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_bottom = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.top', { 'admin_pool': sonata_admin.adminPool }) }}*/
/* */
/*     {% if has_top %}*/
/*         <div class="row">*/
/*             {% for block in blocks.top %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     <div class="{{ block.class }}">*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         {% set width_left = 4 %}*/
/*         {% set width_right = 4 %}*/
/*         {% set width_center = 4 %}*/
/* */
/*         {# if center block is not present we make left and right ones wider #}*/
/*         {% if not has_center %}*/
/*             {% set width_left = 6 %}*/
/*             {% set width_right = 6 %}*/
/*         {% endif %}*/
/* */
/*         {# if there is no right and left block present we make center one full width #}*/
/*         {% if not has_left and not has_right %}*/
/*             {% set width_center = 12 %}*/
/*         {% endif %}*/
/* */
/*         {# don't show left column if only center one is present #}*/
/*         {% if has_left or has_right %}*/
/*         <div class="col-md-{{ width_left }}">*/
/*             {% for block in blocks.left %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if has_center %}*/
/*             <div class="col-md-{{ width_center }}">*/
/*                 {% for block in blocks.center %}*/
/*                     {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {# don't show right column if only center one is present #}*/
/*         {% if has_left or has_right %}*/
/*          <div class="col-md-{{ width_right }}">*/
/*             {% for block in blocks.right %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% if has_bottom %}*/
/*         <div class="row">*/
/*             {% for block in blocks.bottom %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     <div class="{{ block.class }}">*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.bottom', { 'admin_pool': sonata_admin.adminPool }) }}*/
/* */
/* {% endblock %}*/
/* */
