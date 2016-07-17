<?php

/* SonataMediaBundle:Block:block_media.html.twig */
class __TwigTemplate_3c5c23e6faa0ece95cfeabde294856c3724caf034d9dc1be9337c4b4ce282615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda3723df9125016f535302f0616449298619780b345a76752f12d1bcfe68487 = $this->env->getExtension("native_profiler");
        $__internal_fda3723df9125016f535302f0616449298619780b345a76752f12d1bcfe68487->enter($__internal_fda3723df9125016f535302f0616449298619780b345a76752f12d1bcfe68487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda3723df9125016f535302f0616449298619780b345a76752f12d1bcfe68487->leave($__internal_fda3723df9125016f535302f0616449298619780b345a76752f12d1bcfe68487_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_9b5adb7018ad72d0614fb8236aa9601cec33e86a40f0f6be2b825cc57b562c28 = $this->env->getExtension("native_profiler");
        $__internal_9b5adb7018ad72d0614fb8236aa9601cec33e86a40f0f6be2b825cc57b562c28->enter($__internal_9b5adb7018ad72d0614fb8236aa9601cec33e86a40f0f6be2b825cc57b562c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-media-container\">
        ";
        // line 19
        if (((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()))) {
            // line 20
            echo "            ";
            echo $this->env->getExtension('sonata_media')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()), array());
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
        
        $__internal_9b5adb7018ad72d0614fb8236aa9601cec33e86a40f0f6be2b825cc57b562c28->leave($__internal_9b5adb7018ad72d0614fb8236aa9601cec33e86a40f0f6be2b825cc57b562c28_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  62 => 23,  60 => 22,  57 => 21,  54 => 20,  52 => 19,  48 => 17,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {% if settings.title %}*/
/*         <h3 class="sonata-media-block-media-title">{{ settings.title }}</h3>*/
/*     {% endif %}*/
/* */
/*     <div class="sonata-media-block-media-container">*/
/*         {% if media and settings.format%}*/
/*             {% media media, settings.format %}*/
/*         {% else %}*/
/*             {# no media selected or format defined... #}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
