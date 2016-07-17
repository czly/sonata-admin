<?php

/* SonataClassificationBundle:Block:base_block_collections.html.twig */
class __TwigTemplate_e13f196f0742585979536bf6256d8ad9d482b47cc2d887241ec3863bdc3bbecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'collection_link' => array($this, 'block_collection_link'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataClassificationBundle:Block:base_block_collections.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd9e0569d8fccc22a849758ac035d5d083b98c4643a3fc4b48341ad15787c30f = $this->env->getExtension("native_profiler");
        $__internal_dd9e0569d8fccc22a849758ac035d5d083b98c4643a3fc4b48341ad15787c30f->enter($__internal_dd9e0569d8fccc22a849758ac035d5d083b98c4643a3fc4b48341ad15787c30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataClassificationBundle:Block:base_block_collections.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9e0569d8fccc22a849758ac035d5d083b98c4643a3fc4b48341ad15787c30f->leave($__internal_dd9e0569d8fccc22a849758ac035d5d083b98c4643a3fc4b48341ad15787c30f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c8f4a24f64921baad0984dc9c14dbce8bff22bcab7c0b21f23de0a5086e3abd1 = $this->env->getExtension("native_profiler");
        $__internal_c8f4a24f64921baad0984dc9c14dbce8bff22bcab7c0b21f23de0a5086e3abd1->enter($__internal_c8f4a24f64921baad0984dc9c14dbce8bff22bcab7c0b21f23de0a5086e3abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"panel panel-default panel-collection-list\">
        ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()))) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-inpanel\"></i> ";
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
        if (twig_length_filter($this->env, (isset($context["collections"]) ? $context["collections"] : $this->getContext($context, "collections")))) {
            // line 24
            echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collections"]) ? $context["collections"] : $this->getContext($context, "collections")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 26
                echo "                        <li";
                echo ((((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")) && ($this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "id", array()) == $this->getAttribute($context["col"], "id", array())))) ? (" class=\"active\"") : (""));
                echo ">
                            ";
                // line 27
                $this->displayBlock('collection_link', $context, $blocks);
                // line 30
                echo "                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ul>
            ";
        } else {
            // line 34
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_collections_found", array(), "SonataClassificationBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_c8f4a24f64921baad0984dc9c14dbce8bff22bcab7c0b21f23de0a5086e3abd1->leave($__internal_c8f4a24f64921baad0984dc9c14dbce8bff22bcab7c0b21f23de0a5086e3abd1_prof);

    }

    // line 27
    public function block_collection_link($context, array $blocks = array())
    {
        $__internal_ba6e25eb42de54dc489ef12195039d49df4d1e824e2d5cf779280f78a8829920 = $this->env->getExtension("native_profiler");
        $__internal_ba6e25eb42de54dc489ef12195039d49df4d1e824e2d5cf779280f78a8829920->enter($__internal_ba6e25eb42de54dc489ef12195039d49df4d1e824e2d5cf779280f78a8829920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_link"));

        // line 28
        echo "                                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "name", array()), "html", null, true);
        echo "
                            ";
        
        $__internal_ba6e25eb42de54dc489ef12195039d49df4d1e824e2d5cf779280f78a8829920->leave($__internal_ba6e25eb42de54dc489ef12195039d49df4d1e824e2d5cf779280f78a8829920_prof);

    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:Block:base_block_collections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  121 => 27,  112 => 36,  106 => 34,  102 => 32,  87 => 30,  85 => 27,  80 => 26,  63 => 25,  60 => 24,  58 => 23,  54 => 21,  48 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  19 => 12,);
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
/*     <div class="panel panel-default panel-collection-list">*/
/*         {% if settings.title is not empty %}*/
/*             <div class="panel-heading">*/
/*                 <h4 class="panel-title"><i class="fa fa-inpanel"></i> {{ settings.title }}</h4>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel-body">*/
/*             {% if collections|length %}*/
/*                 <ul class="nav nav-pills nav-stacked">*/
/*                     {% for col in collections %}*/
/*                         <li{{ collection and collection.id == col.id ? ' class="active"' : '' }}>*/
/*                             {% block collection_link %}*/
/*                                 {{ col.name }}*/
/*                             {% endblock %}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% else %}*/
/*                 <p>{{ 'no_collections_found'|trans({}, 'SonataClassificationBundle') }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
