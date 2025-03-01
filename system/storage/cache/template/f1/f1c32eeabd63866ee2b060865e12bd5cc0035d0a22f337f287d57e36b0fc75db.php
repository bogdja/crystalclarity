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

/* oct_deals/template/octemplates/module/oct_shop_review.twig */
class __TwigTemplate_9be330dd35095cbe76ebefdd54954dc5d983136ff920c1d8064273ecec254750 extends Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "\t";
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "\t\t<div class=\"content-block p-0 overflow-hidden  position-relative\">
\t\t\t<div class=\"ds-column-title p-3 fw-500 dark-text d-flex align-items-center justify-content-between\">
\t\t\t\t";
                // line 5
                echo ($context["text_review_total"] ?? null);
                echo "
\t\t\t\t<a href=\"";
                // line 6
                echo ($context["href_all_reviews"] ?? null);
                echo "\" class=\"blue-link fsz-14\">";
                echo ($context["see_all_text"] ?? null);
                echo "</a>
\t\t\t</div>
\t\t\t<div id=\"ds-column-shop-reviews-";
                // line 8
                echo ($context["module"] ?? null);
                echo "\" class=\"ds-column-shop-reviews swiper\">
\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 11
                    echo "\t\t\t\t\t\t<div class=\"ds-column-item swiper-slide\">
\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item br-4 p-3\">
\t\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center pb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-store-reviews-item-author d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"29\" viewBox=\"0 0 28 29\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\td=\"M22.2895 0.346191H5.71053C1.97474 0.346191 0 2.32093 0 6.05672V22.6357C0 26.1106 1.72863 28.0396 4.97368 28.2946C5.03411 28.3108 5.09305 28.3314 5.15789 28.3314C5.18884 28.3314 5.21689 28.3168 5.24784 28.3138C5.40553 28.3212 5.54695 28.3462 5.71053 28.3462H22.2895C22.4531 28.3462 22.5959 28.3212 22.7522 28.3138C22.7831 28.3182 22.8097 28.3314 22.8421 28.3314C22.9069 28.3314 22.9659 28.3108 23.0263 28.2946C26.2714 28.0381 28 26.1106 28 22.6357V6.05672C28 2.32093 26.0253 0.346191 22.2895 0.346191ZM22.1053 26.8725H5.89474V25.9441C5.89474 24.6296 6.29711 20.344 11.4801 20.344H16.5199C21.7029 20.344 22.1053 24.631 22.1053 25.9441V26.8725ZM26.5263 22.6357C26.5263 25.0496 25.5728 26.373 23.5789 26.7473V25.9441C23.5789 22.6813 21.7294 18.8703 16.5199 18.8703H11.4801C6.27058 18.8703 4.42105 22.6813 4.42105 25.9441V26.7473C2.42716 26.3715 1.47368 25.0496 1.47368 22.6357V6.05672C1.47368 3.16682 2.81916 1.81988 5.71053 1.81988H22.2895C25.1808 1.81988 26.5263 3.16682 26.5263 6.05672V22.6357ZM14.0119 6.24093C11.1677 6.24093 8.85398 8.55461 8.85398 11.3988C8.85398 14.243 11.1677 16.5567 14.0119 16.5567C16.8561 16.5567 19.1698 14.243 19.1698 11.3988C19.1698 8.55461 16.8561 6.24093 14.0119 6.24093ZM14.0119 15.083C11.9797 15.083 10.3277 13.4296 10.3277 11.3988C10.3277 9.36809 11.9797 7.71461 14.0119 7.71461C16.0441 7.71461 17.6961 9.36809 17.6961 11.3988C17.6961 13.4296 16.0441 15.083 14.0119 15.083Z\"
\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<div class=\"ds-store-reviews-item-info ms-2 d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dark-text fw-500 fsz-12\">";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 21);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-module-rating-stars d-flex align-items-center justify-content-center mt-1\" data-rating=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "avg_rating_stars", [], "any", false, false, false, 22);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"d-inline-flex align-items-center fsz-10 light-text mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"10\" height=\"10\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\" fill=\"#9CA3AF\"></path>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 33);
                    echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item-content pt-3 fsz-14 fw-300 border-bottom-0\">
\t\t\t\t\t\t\t\t\t";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 37);
                    echo "
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "review_subject_array", [], "any", false, false, false, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dark-text fw-400\"><span class=\"light-text fw-500\">";
                        echo twig_get_attribute($this->env, $this->source, $context["rev"], "name", [], "any", false, false, false, 40);
                        echo ":</span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 40);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                // line 48
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M0.263207 2.99938C0.263207 2.87814 0.309287 2.75688 0.402114 2.66468L2.92803 0.138767C3.11305 -0.0462558 3.41303 -0.0462558 3.59805 0.138767C3.78307 0.323791 3.78307 0.623765 3.59805 0.808788L1.40684 3L3.59805 5.19121C3.78307 5.37624 3.78307 5.67621 3.59805 5.86123C3.41303 6.04626 3.11305 6.04626 2.92803 5.86123L0.402114 3.33532C0.309287 3.24186 0.263207 3.12063 0.263207 2.99938Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 53
                echo ($context["module"] ?? null);
                echo " button button-secondary button-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center py-3 px-1\">
\t\t\t\t\t<svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"4\" height=\"6\" viewBox=\"0 0 4 6\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M3.73679 3.00062C3.73679 3.12186 3.69071 3.24312 3.59789 3.33532L1.07197 5.86123C0.886949 6.04626 0.586974 6.04626 0.401951 5.86123C0.216928 5.67621 0.216928 5.37623 0.401951 5.19121L2.59316 3L0.401951 0.808788C0.216928 0.623765 0.216928 0.32379 0.401951 0.138767C0.586974 -0.0462565 0.886949 -0.0462565 1.07197 0.138767L3.59789 2.66468C3.69071 2.75814 3.73679 2.87937 3.73679 3.00062Z\" fill=\"#003459\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script>
\t\t\t\tvar shopReviewsColumnSwiper = new Swiper('#ds-column-shop-reviews-";
                // line 60
                echo ($context["module"] ?? null);
                echo "', {
\t\t\t\t\tslidesPerView: 1,
\t\t\t\t\tspaceBetween: 0,
\t\t\t\t\tloop: true,
\t\t\t\t\tnavigation: {
\t\t\t\t\t\tnextEl: '.swiper-button-next-";
                // line 65
                echo ($context["module"] ?? null);
                echo "',
\t\t\t\t\t\tprevEl: '.swiper-button-prev-";
                // line 66
                echo ($context["module"] ?? null);
                echo "',
\t\t\t\t\t},
\t\t\t\t});
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 72
                echo "\t\t<div class=\"ds-store-reviews ds-store-reviews-container container-fluid py-3 mt-3 content-block\">
\t\t\t<div class=\"ds-store-reviews-header d-flex align-items-center pb-3\">
\t\t\t\t<div class=\"fw-500 dark-text fsz-20 me-3\">";
                // line 74
                echo ($context["text_review_total"] ?? null);
                echo "</div>
\t\t\t\t<a href=\"";
                // line 75
                echo ($context["href_all_reviews"] ?? null);
                echo "\" class=\"blue-link fsz-14\">";
                echo ($context["see_all_text"] ?? null);
                echo "</a>
\t\t\t</div>
\t\t\t<div class=\"ds-store-reviews-rating d-flex flex-column flex-md-row align-items-center justify-content-between my-3 pb-md-3 position-relative\">
\t\t\t\t<div>
\t\t\t\t\t<div class=\"ds-store-reviews-rating-main text-center mb-3 mb-md-0\">
\t\t\t\t\t\t<div class=\"dark-text fsz-14 fw-500\">";
                // line 80
                echo ($context["text_store_rating"] ?? null);
                echo ":</div>
\t\t\t\t\t\t<span class=\"ds-store-reviews-rating-main-value p-3 green-bg br-7 d-inline-block my-2 white-text\">";
                // line 81
                echo ($context["store_rating"] ?? null);
                echo "</span>
\t\t\t\t\t\t<div class=\"light-text fsz-14\">";
                // line 82
                echo ($context["text_review_qty"] ?? null);
                echo ": ";
                echo ($context["review_total"] ?? null);
                echo "</div>
\t\t\t\t\t\t";
                // line 83
                if (($context["store_rating"] ?? null)) {
                    // line 84
                    echo "\t\t\t\t\t\t\t<div class=\"ds-module-rating-stars d-flex align-items-center justify-content-center mt-2\" data-rating=\"";
                    echo ($context["store_rating"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<button id=\"storeReviewAdd\" type=\"button\" class=\"button button-primary br-7 fw-400 fsz-14 mt-3 w-100 d-xl-none\">
\t\t\t\t\t\t<span class=\"button-text\">";
                // line 92
                echo ($context["button_write_review"] ?? null);
                echo "</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"ds-store-reviews-rating-details d-grid\">
\t\t\t\t\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["store_rating_with_subjects"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store_rating_with_subject"]) {
                    // line 97
                    echo "\t\t\t\t\t\t<div class=\"ds-store-reviews-rating-details-item text-center dark-shadow d-flex flex-column\">
\t\t\t\t\t\t\t<div class=\"ds-store-reviews-rating-details-item-header pb-3 mb-3 dark-text\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["store_rating_with_subject"], "name", [], "any", false, false, false, 98);
                    echo "</div>
\t\t\t\t\t\t\t<div class=\"ds-module-rating-stars d-flex align-items-center justify-content-center mb-2\" data-rating=\"";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["store_rating_with_subject"], "value", [], "any", false, false, false, 99);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ds-store-reviews-rating-details-item-value dark-text\">";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["store_rating_with_subject"], "value", [], "any", false, false, false, 104);
                    echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store_rating_with_subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"ds-shop-reviews_";
                // line 109
                echo ($context["module"] ?? null);
                echo "\" class=\"row g-3\">
\t\t\t\t<div class=\"col-xl-8 order-1 order-xl-0\">
\t\t\t\t\t<div class=\"ds-product-reviews-content\">
\t\t\t\t\t\t";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 113
                    echo "\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item-box\">
\t\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item br-4 p-3\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center pb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ds-store-reviews-item-author d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"29\" viewBox=\"0 0 28 29\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M22.2895 0.346191H5.71053C1.97474 0.346191 0 2.32093 0 6.05672V22.6357C0 26.1106 1.72863 28.0396 4.97368 28.2946C5.03411 28.3108 5.09305 28.3314 5.15789 28.3314C5.18884 28.3314 5.21689 28.3168 5.24784 28.3138C5.40553 28.3212 5.54695 28.3462 5.71053 28.3462H22.2895C22.4531 28.3462 22.5959 28.3212 22.7522 28.3138C22.7831 28.3182 22.8097 28.3314 22.8421 28.3314C22.9069 28.3314 22.9659 28.3108 23.0263 28.2946C26.2714 28.0381 28 26.1106 28 22.6357V6.05672C28 2.32093 26.0253 0.346191 22.2895 0.346191ZM22.1053 26.8725H5.89474V25.9441C5.89474 24.6296 6.29711 20.344 11.4801 20.344H16.5199C21.7029 20.344 22.1053 24.631 22.1053 25.9441V26.8725ZM26.5263 22.6357C26.5263 25.0496 25.5728 26.373 23.5789 26.7473V25.9441C23.5789 22.6813 21.7294 18.8703 16.5199 18.8703H11.4801C6.27058 18.8703 4.42105 22.6813 4.42105 25.9441V26.7473C2.42716 26.3715 1.47368 25.0496 1.47368 22.6357V6.05672C1.47368 3.16682 2.81916 1.81988 5.71053 1.81988H22.2895C25.1808 1.81988 26.5263 3.16682 26.5263 6.05672V22.6357ZM14.0119 6.24093C11.1677 6.24093 8.85398 8.55461 8.85398 11.3988C8.85398 14.243 11.1677 16.5567 14.0119 16.5567C16.8561 16.5567 19.1698 14.243 19.1698 11.3988C19.1698 8.55461 16.8561 6.24093 14.0119 6.24093ZM14.0119 15.083C11.9797 15.083 10.3277 13.4296 10.3277 11.3988C10.3277 9.36809 11.9797 7.71461 14.0119 7.71461C16.0441 7.71461 17.6961 9.36809 17.6961 11.3988C17.6961 13.4296 16.0441 15.083 14.0119 15.083Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-store-reviews-item-info ms-2 d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dark-text fw-500 fsz-14\">";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 123);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-module-rating-stars d-flex align-items-center justify-content-center mt-1\" data-rating=\"";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "avg_rating_stars", [], "any", false, false, false, 124);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-flex align-items-center fsz-12 light-text mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\" fill=\"#9CA3AF\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 135);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ds-product-reviews-item-content pt-3 fsz-14 fw-300 border-bottom-0\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 139);
                    echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 141
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "review_subject_array", [], "any", false, false, false, 141));
                    foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dark-text fw-400\"><span class=\"light-text fw-500\">";
                        echo twig_get_attribute($this->env, $this->source, $context["rev"], "name", [], "any", false, false, false, 142);
                        echo ":</span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 142);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ds-store-reviews-add-column col-xl-4 d-none d-xl-block order-0 order-xl-1 mb-3\">
\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"add-review-form\" class=\"ds-sticky-column ds-store-reviews-add content-block sticky-top\">
\t\t\t\t\t\t<div class=\"ds-store-reviews-add-title fsz-18 fw-500 dark-text pb-3 mb-3\">";
                // line 153
                echo ($context["text_review_write"] ?? null);
                echo "</div>
\t\t\t\t\t\t";
                // line 154
                if (($context["subjects"] ?? null)) {
                    // line 155
                    echo "\t\t\t\t\t\t\t<div class=\"fsz-14 mb-3\">";
                    echo ($context["text_review_criteria"] ?? null);
                    echo ":</div>
\t\t\t\t\t\t\t";
                    // line 156
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t<div class=\"ds-store-reviews-add-criteria d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"ds-store-reviews-add-criteria-title me-3 secondary-text fsz-14\">";
                        // line 158
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 158);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"ds-module-rating-stars d-flex align-items-center justify-content-center\" id=\"block-rev-";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "oct_sreview_subject_id", [], "any", false, false, false, 159);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating[";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "oct_sreview_subject_id", [], "any", false, false, false, 160);
                        echo "]\" value=\"1\" checked/></label>
\t\t\t\t\t\t\t\t\t\t<label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating[";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "oct_sreview_subject_id", [], "any", false, false, false, 161);
                        echo "]\" value=\"2\" checked/></label>
\t\t\t\t\t\t\t\t\t\t<label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating[";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "oct_sreview_subject_id", [], "any", false, false, false, 162);
                        echo "]\" value=\"3\" checked/></label>
\t\t\t\t\t\t\t\t\t\t<label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating[";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "oct_sreview_subject_id", [], "any", false, false, false, 163);
                        echo "]\" value=\"4\" checked/></label>
\t\t\t\t\t\t\t\t\t\t<label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating[";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["subject"], "oct_sreview_subject_id", [], "any", false, false, false, 164);
                        echo "]\" value=\"5\" checked/></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "\t\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t<label for=\"inputStoreReviewName\" class=\"form-label\"><span class=\"required\">* </span>";
                // line 170
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"author\" value=\"";
                // line 171
                echo ($context["author"] ?? null);
                echo "\" class=\"form-control\" id=\"inputStoreReviewName\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" inputmode=\"text\" autocomplete=\"name\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t<label for=\"inputStoreReviewComment\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
                // line 174
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" class=\"form-control\" id=\"inputStoreReviewComment\" placeholder=\"";
                // line 175
                echo ($context["entry_review"] ?? null);
                echo "\" rows=\"6\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fsz-12 light-text\">";
                // line 177
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t";
                // line 179
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"button button-primary br-7 fsz-14 fw-400\"><span class=\"button-text\">";
                // line 181
                echo ($context["button_send_review"] ?? null);
                echo "</span></button>
\t\t\t\t\t</form>
\t\t\t\t\t<script>
\t\t\t\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\t\t\tstickyColumn();
\t\t\t\t\t\t\treviewsRating('.ds-store-reviews-add');
\t\t\t\t\t\t\treviewsAdd();
\t\t\t\t\t\t});

\t\t\t\t\t\t\$(\"#inputStoreReviewName, #inputStoreReviewComment\").on(\"change paste keyup\", function() {
\t\t\t\t\t\t\t\$(this).removeClass('error_style');
\t\t\t\t\t\t});

\t\t\t\t\t\t\$('#add-review-form').on('submit', function(event) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\turl: 'index.php?route=octemplates/module/oct_sreview_reviews/write',
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tdata: \$('#add-review-form').serialize(),
\t\t\t\t\t\t\t\tcache: false,
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\t\$('#add-review-form .text-danger').remove();
\t\t\t\t\t\t\t\t\t\tlet errorOption = '';

\t\t\t\t\t\t\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\t\t\t\t\t\t\t\$('#add-review-form [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\t\t\t\t\t\t\terrorOption += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\tscNotify('danger', errorOption);
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\tscNotify('success', json['success']);
\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'author\\']').val('');
\t\t\t\t\t\t\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t\t\t\t\t\t\t\t\$('#add-review-form .ds-module-rating-star-is').removeClass('ds-module-rating-star-is');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_shop_review.twig";
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
        return array (  474 => 181,  469 => 179,  464 => 177,  459 => 175,  455 => 174,  447 => 171,  443 => 170,  440 => 169,  437 => 168,  427 => 164,  423 => 163,  419 => 162,  415 => 161,  411 => 160,  407 => 159,  403 => 158,  400 => 157,  396 => 156,  391 => 155,  389 => 154,  385 => 153,  379 => 149,  369 => 144,  358 => 142,  354 => 141,  349 => 139,  342 => 135,  333 => 128,  326 => 126,  322 => 125,  318 => 124,  314 => 123,  302 => 113,  298 => 112,  292 => 109,  288 => 107,  279 => 104,  276 => 103,  269 => 101,  265 => 100,  261 => 99,  257 => 98,  254 => 97,  250 => 96,  243 => 92,  239 => 90,  235 => 88,  228 => 86,  224 => 85,  219 => 84,  217 => 83,  211 => 82,  207 => 81,  203 => 80,  193 => 75,  189 => 74,  185 => 72,  176 => 66,  172 => 65,  164 => 60,  154 => 53,  146 => 48,  143 => 47,  133 => 42,  122 => 40,  118 => 39,  113 => 37,  106 => 33,  97 => 26,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  66 => 11,  62 => 10,  57 => 8,  50 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_shop_review.twig", "");
    }
}
