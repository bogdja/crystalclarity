<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* oct_deals/template/octemplates/module/oct_banner_plus.twig */
class __TwigTemplate_874b4f716d8ea6f11b013d97c6918817b310285b3b4f459a031b1c38c066c79a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["oct_banner_pluss"] ?? null)) {
            // line 2
            echo "\t";
            if ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) <= 4)) {
                // line 3
                echo "\t\t";
                if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                    // line 4
                    echo "\t\t\t<div id=\"banner_plus_column\" class=\"ds-column-banners swiper overflow-hidden position-relative\">
\t\t\t\t";
                    // line 5
                    $context["key"] = 1;
                    // line 6
                    echo "\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_banner_pluss"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                        // line 8
                        echo "\t\t\t\t\t\t";
                        $context["key"] = (($context["key"] ?? null) + 1);
                        // line 9
                        echo "\t\t\t\t\t\t<a id=\"banner_plus_column";
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                        echo "\" class=\"ds-bannerplus-item swiper-slide br-7 position-relative overflow-hidden d-flex flex-column g-4 h-100\">
\t\t\t\t\t\t\t<p class=\"fsz-20\">";
                        // line 10
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                        echo "</p>
\t\t\t\t\t\t\t<img class=\"d-block mx-auto mt-auto\" src=\"";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
                        echo "\" alt=\"\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 11);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 11);
                        echo "\" loading=\"lazy\"/>
\t\t\t\t\t\t\t<span class=\"ds-bannerplus-button p-0 mx-auto\">
\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"25\" viewBox=\"0 0 24 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M19.1053 0.632812H4.89474C1.69263 0.632812 0 2.32544 0 5.52755V19.7381C0 22.9402 1.69263 24.6328 4.89474 24.6328H19.1053C22.3074 24.6328 24 22.9402 24 19.7381V5.52755C24 2.32544 22.3074 0.632812 19.1053 0.632812ZM22.7368 19.7381C22.7368 22.2151 21.5836 23.3697 19.1053 23.3697H4.89474C2.41642 23.3697 1.26316 22.2151 1.26316 19.7381V5.52755C1.26316 3.0505 2.41642 1.89597 4.89474 1.89597H19.1053C21.5836 1.89597 22.7368 3.0505 22.7368 5.52755V19.7381ZM17.6349 12.874C17.6033 12.9523 17.5567 13.0219 17.4986 13.08L13.7091 16.8694C13.5853 16.9932 13.4236 17.0539 13.2619 17.0539C13.1002 17.0539 12.9385 16.992 12.8148 16.8694C12.5684 16.6231 12.5684 16.2227 12.8148 15.9764L15.5255 13.2656H6.94737C6.59874 13.2656 6.31579 12.9827 6.31579 12.634C6.31579 12.2854 6.59874 12.0025 6.94737 12.0025H15.528L12.8172 9.29173C12.5709 9.04542 12.5709 8.64496 12.8172 8.39864C13.0635 8.15233 13.464 8.15233 13.7103 8.39864L17.4998 12.1881C17.5579 12.2462 17.6045 12.3171 17.6361 12.3941C17.6993 12.5457 17.6993 12.7199 17.6349 12.874Z\"
\t\t\t\t\t\t\t\t\t\tfill=\"white\" />
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 21
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " {background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "background_color", [], "any", false, false, false, 21);
                        echo ";}
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 22
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " p {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title_color", [], "any", false, false, false, 22);
                        echo ";}
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 23
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .ds-bannerplus-button path {fill: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_background", [], "any", false, false, false, 23);
                        echo ";}
\t\t\t\t\t\t</style>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script>
\t\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\tvar bannerPlusColumnSwiper = new Swiper('#banner_plus_column', {
\t\t\t\t\t\tslidesPerView: 1,
\t\t\t\t\t\tautoplay: {
\t\t\t\t\t\t\tdelay: 5000,
\t\t\t\t\t\t\tdisableOnInteraction: false
\t\t\t\t\t\t},
\t\t\t\t\t\tloop: true
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t";
                } else {
                    // line 41
                    echo "\t\t\t<div class=\"ds-bannerplus row g-3 pt-3\">
\t\t\t\t";
                    // line 42
                    $context["key"] = 0;
                    // line 43
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_banner_pluss"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                        // line 44
                        echo "\t\t\t\t\t";
                        $context["key"] = (($context["key"] ?? null) + 1);
                        // line 45
                        echo "\t\t\t\t\t<div id=\"banner_plus_";
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo "\" class=\"ds-bannerplus-box";
                        if ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 1)) {
                            echo " ds-banner-plus-100";
                        } elseif ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 2)) {
                            echo " ds-banner-plus-50";
                        } elseif ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 3)) {
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45) == 1)) {
                                echo " ds-banner-plus-50";
                            } else {
                                echo " ds-banner-plus-25";
                            }
                        } elseif ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 4)) {
                            echo " ds-banner-plus-25";
                        }
                        echo "\">
\t\t\t\t\t\t<a href=\"";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 46);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 46);
                        echo "\" class=\"ds-bannerplus-item br-7 position-relative overflow-hidden d-flex flex-column g-4 h-100\">
\t\t\t\t\t\t\t<p class=\"fsz-20\">";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 47);
                        echo "</p>
\t\t\t\t\t\t\t<img class=\"d-block mx-auto mt-auto\" src=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 48);
                        echo "\" alt=\"\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 48);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 48);
                        echo "\" loading=\"lazy\"/>
\t\t\t\t\t\t\t<span class=\"ds-bannerplus-button p-0 mx-auto\">
\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"25\" viewBox=\"0 0 24 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M19.1053 0.632812H4.89474C1.69263 0.632812 0 2.32544 0 5.52755V19.7381C0 22.9402 1.69263 24.6328 4.89474 24.6328H19.1053C22.3074 24.6328 24 22.9402 24 19.7381V5.52755C24 2.32544 22.3074 0.632812 19.1053 0.632812ZM22.7368 19.7381C22.7368 22.2151 21.5836 23.3697 19.1053 23.3697H4.89474C2.41642 23.3697 1.26316 22.2151 1.26316 19.7381V5.52755C1.26316 3.0505 2.41642 1.89597 4.89474 1.89597H19.1053C21.5836 1.89597 22.7368 3.0505 22.7368 5.52755V19.7381ZM17.6349 12.874C17.6033 12.9523 17.5567 13.0219 17.4986 13.08L13.7091 16.8694C13.5853 16.9932 13.4236 17.0539 13.2619 17.0539C13.1002 17.0539 12.9385 16.992 12.8148 16.8694C12.5684 16.6231 12.5684 16.2227 12.8148 15.9764L15.5255 13.2656H6.94737C6.59874 13.2656 6.31579 12.9827 6.31579 12.634C6.31579 12.2854 6.59874 12.0025 6.94737 12.0025H15.528L12.8172 9.29173C12.5709 9.04542 12.5709 8.64496 12.8172 8.39864C13.0635 8.15233 13.464 8.15233 13.7103 8.39864L17.4998 12.1881C17.5579 12.2462 17.6045 12.3171 17.6361 12.3941C17.6993 12.5457 17.6993 12.7199 17.6349 12.874Z\"
\t\t\t\t\t\t\t\t\t\tfill=\"white\" />
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<style>
\t\t\t\t\t\t#banner_plus_";
                        // line 59
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .ds-bannerplus-item {background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "background_color", [], "any", false, false, false, 59);
                        echo ";}
\t\t\t\t\t\t#banner_plus_";
                        // line 60
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .ds-bannerplus-item p {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title_color", [], "any", false, false, false, 60);
                        echo ";}
\t\t\t\t\t\t#banner_plus_";
                        // line 61
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .ds-bannerplus-button path {fill: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_background", [], "any", false, false, false, 61);
                        echo ";}
\t\t\t\t\t</style>
\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t\t</div>
\t\t";
                }
                // line 66
                echo "\t";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_banner_plus.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  254 => 66,  250 => 64,  229 => 61,  221 => 60,  213 => 59,  195 => 48,  191 => 47,  185 => 46,  164 => 45,  161 => 44,  143 => 43,  141 => 42,  138 => 41,  121 => 26,  108 => 23,  100 => 22,  92 => 21,  75 => 11,  71 => 10,  60 => 9,  57 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_banner_plus.twig", "");
    }
}
