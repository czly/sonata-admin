<?php

/* SonataMediaBundle:Gallery:view.html.twig */
class __TwigTemplate_50d0a7712a7d629f215c16ddc04eb3131cc2c48a4c9d9d13d0e40c40f46798e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea53bae50e7e68bb3336a4b97e73bd4461aac8c3b3dc17b541dd7139f61e13f0 = $this->env->getExtension("native_profiler");
        $__internal_ea53bae50e7e68bb3336a4b97e73bd4461aac8c3b3dc17b541dd7139f61e13f0->enter($__internal_ea53bae50e7e68bb3336a4b97e73bd4461aac8c3b3dc17b541dd7139f61e13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Gallery:view.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the gallery view template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
";
        // line 14
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 19
        echo "
<h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "name", array()), "html", null, true);
        echo "</h1>

<div class=\"sonata-media-gallery-media-list\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "GalleryHasMedias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
            // line 24
            echo "        <div class=\"media sonata-media-gallery-media-item\">
            <a class=\"pull-left sonata-media-gallery-media-item-link\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier($this->getAttribute($context["galleryHasMedia"], "media", array())))), "html", null, true);
            echo "\">
                ";
            // line 26
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["galleryHasMedia"], "media", array()), $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "defaultFormat", array()), array("class" => "media-object"));
            // line 27
            echo "            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["galleryHasMedia"], "media", array()), "name", array()), "html", null, true);
            echo "</h4>
                <p>";
            // line 30
            echo $this->getAttribute($this->getAttribute($context["galleryHasMedia"], "media", array()), "description", array());
            echo "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
        
        $__internal_ea53bae50e7e68bb3336a4b97e73bd4461aac8c3b3dc17b541dd7139f61e13f0->leave($__internal_ea53bae50e7e68bb3336a4b97e73bd4461aac8c3b3dc17b541dd7139f61e13f0_prof);

    }

    // line 14
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_ff0f4907453659ace51f535f8cd581a8c54bfa0229b5322adc0109a1aba3442c = $this->env->getExtension("native_profiler");
        $__internal_ff0f4907453659ace51f535f8cd581a8c54bfa0229b5322adc0109a1aba3442c->enter($__internal_ff0f4907453659ace51f535f8cd581a8c54bfa0229b5322adc0109a1aba3442c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 15
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "gallery_view", "gallery" => (isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_ff0f4907453659ace51f535f8cd581a8c54bfa0229b5322adc0109a1aba3442c->leave($__internal_ff0f4907453659ace51f535f8cd581a8c54bfa0229b5322adc0109a1aba3442c_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 16,  89 => 15,  83 => 14,  75 => 34,  65 => 30,  61 => 29,  57 => 27,  55 => 26,  51 => 25,  48 => 24,  44 => 23,  38 => 20,  35 => 19,  33 => 14,  30 => 13,  26 => 12,  23 => 11,);
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
/* {% sonata_template_box 'This is the gallery view template. Feel free to override it.' %}*/
/* */
/* {% block sonata_page_breadcrumb %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': 'gallery_view', 'gallery': gallery, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h1>{{ gallery.name }}</h1>*/
/* */
/* <div class="sonata-media-gallery-media-list">*/
/*     {% for galleryHasMedia in gallery.GalleryHasMedias %}*/
/*         <div class="media sonata-media-gallery-media-item">*/
/*             <a class="pull-left sonata-media-gallery-media-item-link" href="{{ url('sonata_media_view', {'id': galleryHasMedia.media|sonata_urlsafeid }) }}">*/
/*                 {% thumbnail galleryHasMedia.media, gallery.defaultFormat with {'class': 'media-object'} %}*/
/*             </a>*/
/*             <div class="media-body">*/
/*                 <h4 class="media-heading">{{ galleryHasMedia.media.name }}</h4>*/
/*                 <p>{{ galleryHasMedia.media.description|raw }}</p>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
