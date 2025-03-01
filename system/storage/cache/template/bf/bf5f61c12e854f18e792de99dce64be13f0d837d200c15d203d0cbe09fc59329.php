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

/* oct_deals/template/octemplates/module/oct_blogarticle.twig */
class __TwigTemplate_f92c8414f3f066e613024a85a742b883748bd073d3aa8da4f4b4e134dfddeaff extends Template
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
        if (($context["articles"] ?? null)) {
            // line 2
            echo "\t";
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "\t\t<div class=\"content-block overflow-hidden position-relative\">
\t\t\t<div class=\"ds-column-title pb-3 mb-3 fw-500 dark-text\">";
                // line 4
                echo ($context["heading_title"] ?? null);
                echo "</div>
\t\t\t<div id=\"ds_blog_column_article-";
                // line 5
                echo ($context["module"] ?? null);
                echo "\" class=\"ds-column-blog-articles swiper\">
\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 8
                    echo "\t\t\t\t\t\t<div class=\"ds-column-blog-articles-item swiper-slide w-100\">
\t\t\t\t\t\t\t<div class=\"h-100 d-flex flex-column p-0 pb-3 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 10);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 10);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 11);
                    echo "\" class=\"img-fluid w-md-100\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 11);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 11);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 11);
                    echo "\" loading=\"lazy\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-info mt-sm-3 w-100 h-100 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 14);
                    echo "\" class=\"ds-last-news-item-title d-inline-block dark-text fsz-14 fw-500 mb-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 14);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between light-text fsz-10 mt-auto\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-category d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M11.3077 12.3535H2.69231C0.956308 12.3535 0 11.4401 0 9.78209V2.92494C0 1.26689 0.956308 0.353516 2.69231 0.353516H5.5641C5.70697 0.353516 5.84412 0.407688 5.94464 0.504374L7.94056 2.41066H11.3077C13.0437 2.41066 14 3.32403 14 4.98209V9.78209C14 11.4401 13.0437 12.3535 11.3077 12.3535ZM2.69231 1.38209C1.5601 1.38209 1.07692 1.84357 1.07692 2.92494V9.78209C1.07692 10.8635 1.5601 11.3249 2.69231 11.3249H11.3077C12.4399 11.3249 12.9231 10.8635 12.9231 9.78209V4.98209C12.9231 3.90072 12.4399 3.43923 11.3077 3.43923H7.71795C7.57508 3.43923 7.43793 3.38506 7.33742 3.28837L5.3415 1.38209H2.69231Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 22
                    $context["key"] = 0;
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["key"] = (($context["key"] ?? null) + 1);
                        // line 25
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $context["blog_category_name"];
                        if ((($context["key"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 25)))) {
                            echo ",";
                        }
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-date d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 34);
                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                // line 42
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M0.263207 2.99938C0.263207 2.87814 0.309287 2.75688 0.402114 2.66468L2.92803 0.138767C3.11305 -0.0462558 3.41303 -0.0462558 3.59805 0.138767C3.78307 0.323791 3.78307 0.623765 3.59805 0.808788L1.40684 3L3.59805 5.19121C3.78307 5.37624 3.78307 5.67621 3.59805 5.86123C3.41303 6.04626 3.11305 6.04626 2.92803 5.86123L0.402114 3.33532C0.309287 3.24186 0.263207 3.12063 0.263207 2.99938Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 47
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M3.73679 3.00062C3.73679 3.12186 3.69071 3.24312 3.59789 3.33532L1.07197 5.86123C0.886949 6.04626 0.586974 6.04626 0.401951 5.86123C0.216928 5.67621 0.216928 5.37623 0.401951 5.19121L2.59316 3L0.401951 0.808788C0.216928 0.623765 0.216928 0.32379 0.401951 0.138767C0.586974 -0.0462565 0.886949 -0.0462565 1.07197 0.138767L3.59789 2.66468C3.69071 2.75814 3.73679 2.87937 3.73679 3.00062Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script>
\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\tvar blogColumnSwiper = new Swiper('#ds_blog_column_article-";
                // line 55
                echo ($context["module"] ?? null);
                echo "', {
\t\t\t\t\t\tslidesPerView: 1,
\t\t\t\t\t\tspaceBetween: 0,
\t\t\t\t\t\tloop: true,
\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\tnextEl: '.swiper-button-next-";
                // line 60
                echo ($context["module"] ?? null);
                echo "',
\t\t\t\t\t\t\tprevEl: '.swiper-button-prev-";
                // line 61
                echo ($context["module"] ?? null);
                echo "',
\t\t\t\t\t\t},
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 68
                echo "\t\t<div class=\"py-3 fw-500 dark-text fsz-20\">
\t\t\t";
                // line 69
                echo ($context["heading_title"] ?? null);
                echo "
\t\t</div>
\t\t<div class=\"row g-2 g-md-3 ds-last-news\">
\t\t\t";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 73
                    echo "\t\t\t\t<div class=\"ds-last-news-item\">
\t\t\t\t\t<div class=\"content-block d-flex flex-sm-column p-2 p-md-3 h-100\">
\t\t\t\t\t\t<a href=\"";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 75);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 75);
                    echo "\" class=\"d-block me-2 me-sm-0 text-center\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 76);
                    echo "\" class=\"img-fluid w-md-100\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 76);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 76);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 76);
                    echo "\" loading=\"lazy\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"ds-last-news-item-info mt-sm-3 w-100 h-100 d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 79);
                    echo "\" class=\"ds-last-news-item-title d-inline-block dark-text fsz-14 fw-500 mb-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 79);
                    echo "</a>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between light-text fsz-10 mt-auto\">
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-category d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M11.3077 12.3535H2.69231C0.956308 12.3535 0 11.4401 0 9.78209V2.92494C0 1.26689 0.956308 0.353516 2.69231 0.353516H5.5641C5.70697 0.353516 5.84412 0.407688 5.94464 0.504374L7.94056 2.41066H11.3077C13.0437 2.41066 14 3.32403 14 4.98209V9.78209C14 11.4401 13.0437 12.3535 11.3077 12.3535ZM2.69231 1.38209C1.5601 1.38209 1.07692 1.84357 1.07692 2.92494V9.78209C1.07692 10.8635 1.5601 11.3249 2.69231 11.3249H11.3077C12.4399 11.3249 12.9231 10.8635 12.9231 9.78209V4.98209C12.9231 3.90072 12.4399 3.43923 11.3077 3.43923H7.71795C7.57508 3.43923 7.43793 3.38506 7.33742 3.28837L5.3415 1.38209H2.69231Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                    // line 87
                    $context["key"] = 0;
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 88));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["key"] = (($context["key"] ?? null) + 1);
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $context["blog_category_name"];
                        if ((($context["key"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 90)))) {
                            echo ",";
                        }
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-date d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 99);
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "\t\t</div>
\t";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_blogarticle.twig";
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
        return array (  273 => 106,  260 => 99,  251 => 92,  245 => 91,  239 => 90,  236 => 89,  231 => 88,  229 => 87,  216 => 79,  204 => 76,  198 => 75,  194 => 73,  190 => 72,  184 => 69,  181 => 68,  171 => 61,  167 => 60,  159 => 55,  148 => 47,  140 => 42,  137 => 41,  124 => 34,  115 => 27,  109 => 26,  103 => 25,  100 => 24,  95 => 23,  93 => 22,  80 => 14,  68 => 11,  62 => 10,  58 => 8,  54 => 7,  49 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_blogarticle.twig", "");
    }
}
