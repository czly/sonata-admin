<?php

/* SonataMediaBundle:Gallery:index.html.twig */
class __TwigTemplate_45310d08c9d06b68386f3581bc3e409b16af35a621160601b84d864bf9890a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c278279d814534823408824757145313e9e0133d0a786e1d894d7dca67845e86 = $this->env->getExtension("native_profiler");
        $__internal_c278279d814534823408824757145313e9e0133d0a786e1d894d7dca67845e86->enter($__internal_c278279d814534823408824757145313e9e0133d0a786e1d894d7dca67845e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Gallery:index.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the gallery index template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
<ul>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_gallery_view", array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier($context["gallery"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
";
        
        $__internal_c278279d814534823408824757145313e9e0133d0a786e1d894d7dca67845e86->leave($__internal_c278279d814534823408824757145313e9e0133d0a786e1d894d7dca67845e86_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  37 => 16,  33 => 15,  29 => 13,  25 => 12,  22 => 11,);
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
/* {% sonata_template_box 'This is the gallery index template. Feel free to override it.' %}*/
/* */
/* <ul>*/
/*     {% for gallery in galleries %}*/
/*         <li><a href="{{ url('sonata_media_gallery_view', {'id' : gallery|sonata_urlsafeid }) }}">{{ gallery.name }}</a></li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
