<?php

/* SonataClassificationBundle:Block:base_block_categories.html.twig */
class __TwigTemplate_c62c8a655bf58f45524d53a861b6ff8aff6828e7280a2b1d6fbe36fadbb5c543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'link_category' => array($this, 'block_link_category'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataClassificationBundle:Block:base_block_categories.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53ed16ecbbe816d6f11333cc451cdaa6c16078b13e66020e35e13ad9b3a3e2e6 = $this->env->getExtension("native_profiler");
        $__internal_53ed16ecbbe816d6f11333cc451cdaa6c16078b13e66020e35e13ad9b3a3e2e6->enter($__internal_53ed16ecbbe816d6f11333cc451cdaa6c16078b13e66020e35e13ad9b3a3e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataClassificationBundle:Block:base_block_categories.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ed16ecbbe816d6f11333cc451cdaa6c16078b13e66020e35e13ad9b3a3e2e6->leave($__internal_53ed16ecbbe816d6f11333cc451cdaa6c16078b13e66020e35e13ad9b3a3e2e6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0165333ad7b0ffd60061d5a86ab852d463a6940707a1a5bb3b5ac82a025d4711 = $this->env->getExtension("native_profiler");
        $__internal_0165333ad7b0ffd60061d5a86ab852d463a6940707a1a5bb3b5ac82a025d4711->enter($__internal_0165333ad7b0ffd60061d5a86ab852d463a6940707a1a5bb3b5ac82a025d4711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"panel panel-default panel-category-list\">
        ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()))) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-folder-open-o\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h4>
            </div>
        ";
        }
        // line 21
        echo "
        <div class=\"panel-body\">
            ";
        // line 23
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")), "children", array()))) {
            // line 24
            echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
            // line 25
            $context["item"] = (isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"));
            // line 26
            echo "                    ";
            $context["active"] = (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"));
            // line 27
            echo "                    ";
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
            ";
        } else {
            // line 30
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_categories_found", array(), "SonataClassificationBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 32
        echo "        </div>
    </div>
";
        
        $__internal_0165333ad7b0ffd60061d5a86ab852d463a6940707a1a5bb3b5ac82a025d4711->leave($__internal_0165333ad7b0ffd60061d5a86ab852d463a6940707a1a5bb3b5ac82a025d4711_prof);

    }

    // line 44
    public function block_list($context, array $blocks = array())
    {
        $__internal_61713dd077f7d79932076f330628be50c1bf13b08ee06059c5ad3b0ef22dda42 = $this->env->getExtension("native_profiler");
        $__internal_61713dd077f7d79932076f330628be50c1bf13b08ee06059c5ad3b0ef22dda42->enter($__internal_61713dd077f7d79932076f330628be50c1bf13b08ee06059c5ad3b0ef22dda42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 45
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()))) {
            // line 46
            echo "        <ul>
            ";
            // line 47
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_61713dd077f7d79932076f330628be50c1bf13b08ee06059c5ad3b0ef22dda42->leave($__internal_61713dd077f7d79932076f330628be50c1bf13b08ee06059c5ad3b0ef22dda42_prof);

    }

    // line 52
    public function block_children($context, array $blocks = array())
    {
        $__internal_00ce618918da0f6633f2a9d36585acb369771c6ec47b74f0b7a1ad3306386099 = $this->env->getExtension("native_profiler");
        $__internal_00ce618918da0f6633f2a9d36585acb369771c6ec47b74f0b7a1ad3306386099->enter($__internal_00ce618918da0f6633f2a9d36585acb369771c6ec47b74f0b7a1ad3306386099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 53
        echo "    ";
        // line 54
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        
        $__internal_00ce618918da0f6633f2a9d36585acb369771c6ec47b74f0b7a1ad3306386099->leave($__internal_00ce618918da0f6633f2a9d36585acb369771c6ec47b74f0b7a1ad3306386099_prof);

    }

    // line 62
    public function block_item($context, array $blocks = array())
    {
        $__internal_8cc072a89a4caed7d1506a8d3ee157190abbf40239ccfdfc1c09ab454dead822 = $this->env->getExtension("native_profiler");
        $__internal_8cc072a89a4caed7d1506a8d3ee157190abbf40239ccfdfc1c09ab454dead822->enter($__internal_8cc072a89a4caed7d1506a8d3ee157190abbf40239ccfdfc1c09ab454dead822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 63
        echo "    ";
        // line 64
        $context["classes"] = array();
        // line 65
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) && ($this->getAttribute((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")), "id", array()) == $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array())))) {
            // line 66
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "active"));
        }
        // line 68
        if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first", array())) {
            // line 69
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "first"));
        }
        // line 71
        if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last", array())) {
            // line 72
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "last"));
        }
        // line 75
        $context["attributes"] = array();
        // line 76
        if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
            // line 77
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        }
        // line 79
        echo "    <li";
        echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 80
        $this->displayBlock("link_category", $context, $blocks);
        echo "
        ";
        // line 82
        echo "        ";
        $this->displayBlock("list", $context, $blocks);
        echo "
    </li>
";
        
        $__internal_8cc072a89a4caed7d1506a8d3ee157190abbf40239ccfdfc1c09ab454dead822->leave($__internal_8cc072a89a4caed7d1506a8d3ee157190abbf40239ccfdfc1c09ab454dead822_prof);

    }

    // line 86
    public function block_link_category($context, array $blocks = array())
    {
        $__internal_a10758e8d6ad2e2d14ff171b40bded8b8571315659d1bc8d795d103998b2dd0e = $this->env->getExtension("native_profiler");
        $__internal_a10758e8d6ad2e2d14ff171b40bded8b8571315659d1bc8d795d103998b2dd0e->enter($__internal_a10758e8d6ad2e2d14ff171b40bded8b8571315659d1bc8d795d103998b2dd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link_category"));

        $this->displayBlock("label", $context, $blocks);
        
        $__internal_a10758e8d6ad2e2d14ff171b40bded8b8571315659d1bc8d795d103998b2dd0e->leave($__internal_a10758e8d6ad2e2d14ff171b40bded8b8571315659d1bc8d795d103998b2dd0e_prof);

    }

    // line 88
    public function block_label($context, array $blocks = array())
    {
        $__internal_df209831a3f128559ba934672c7e68127a805a0c7f3f4d99b0bf301c0afdd988 = $this->env->getExtension("native_profiler");
        $__internal_df209831a3f128559ba934672c7e68127a805a0c7f3f4d99b0bf301c0afdd988->enter($__internal_df209831a3f128559ba934672c7e68127a805a0c7f3f4d99b0bf301c0afdd988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        
        $__internal_df209831a3f128559ba934672c7e68127a805a0c7f3f4d99b0bf301c0afdd988->leave($__internal_df209831a3f128559ba934672c7e68127a805a0c7f3f4d99b0bf301c0afdd988_prof);

    }

    // line 36
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c8234a405930c5678b37cb6bff733107e89368323defb77e50df9fc5d9cc4a45 = $this->env->getExtension("native_profiler");
            $__internal_c8234a405930c5678b37cb6bff733107e89368323defb77e50df9fc5d9cc4a45->enter($__internal_c8234a405930c5678b37cb6bff733107e89368323defb77e50df9fc5d9cc4a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 37
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 38
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 39
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_c8234a405930c5678b37cb6bff733107e89368323defb77e50df9fc5d9cc4a45->leave($__internal_c8234a405930c5678b37cb6bff733107e89368323defb77e50df9fc5d9cc4a45_prof);

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
        return "SonataClassificationBundle:Block:base_block_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 39,  269 => 38,  264 => 37,  249 => 36,  237 => 88,  225 => 86,  214 => 82,  210 => 80,  205 => 79,  202 => 77,  200 => 76,  198 => 75,  195 => 72,  193 => 71,  190 => 69,  188 => 68,  185 => 66,  183 => 65,  181 => 64,  179 => 63,  173 => 62,  165 => 59,  163 => 58,  146 => 56,  128 => 55,  125 => 54,  123 => 53,  117 => 52,  106 => 47,  103 => 46,  100 => 45,  94 => 44,  85 => 32,  79 => 30,  72 => 27,  69 => 26,  67 => 25,  64 => 24,  62 => 23,  58 => 21,  52 => 18,  49 => 17,  47 => 16,  44 => 15,  38 => 14,  23 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="panel panel-default panel-category-list">*/
/*         {% if settings.title is not empty %}*/
/*             <div class="panel-heading">*/
/*                 <h4 class="panel-title"><i class="fa fa-folder-open-o"></i> {{ settings.title }}</h4>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel-body">*/
/*             {% if root.children|length %}*/
/*                 <ul class="nav nav-pills nav-stacked">*/
/*                     {% set item = root %}*/
/*                     {% set active = category %}*/
/*                     {{ block('children') }}*/
/*                 </ul>*/
/*             {% else %}*/
/*                 <p>{{ 'no_categories_found'|trans({}, 'SonataClassificationBundle') }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% macro attributes(attributes) %}*/
/*     {% for name, value in attributes %}*/
/*         {%- if value is not none and value is not sameas(false) -%}*/
/*             {{- ' %s="%s"'|format(name, value is sameas(true) ? name|e : value|e)|raw -}}*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% block list %}*/
/*     {% if item.children|length %}*/
/*         <ul>*/
/*             {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block children %}*/
/*     {# save current variables #}*/
/*     {% set currentItem = item %}*/
/*     {% for item in currentItem.children %}*/
/*         {{ block('item') }}*/
/*     {% endfor %}*/
/*     {# restore current variables #}*/
/*     {% set item = currentItem %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {# building the class of the item #}*/
/*     {%- set classes = [] %}*/
/*     {%- if active and active.id == item.id %}*/
/*         {%- set classes = classes|merge(['active']) %}*/
/*     {%- endif %}*/
/*     {%- if loop.first %}*/
/*         {%- set classes = classes|merge(['first']) %}*/
/*     {%- endif %}*/
/*     {%- if loop.last %}*/
/*         {%- set classes = classes|merge(['last']) %}*/
/*     {%- endif %}*/
/* */
/*     {%- set attributes = [] %}*/
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/*     <li{{ _self.attributes(attributes) }}>*/
/*         {{ block('link_category') }}*/
/*         {# render the list of children#}*/
/*         {{ block('list') }}*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block link_category %}{{ block('label') }}{% endblock %}*/
/* */
/* {% block label %}{{ category.name }}{% endblock %}*/
/* */
