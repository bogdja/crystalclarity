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

/* oct_deals/template/product/review.twig */
class __TwigTemplate_4e2ff22532fae37409d2e05319f586c07c2be31f9ebdcdf27ede182819b80e89 extends Template
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
        echo "<div id=\"reviews-container\">
  ";
        // line 2
        if (($context["reviews"] ?? null)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "      <div class=\"ds-product-reviews-item-box\">
        <div class=\"ds-product-reviews-item br-4 p-3\">
          <div class=\"ds-product-reviews-item-header d-flex justify-content-between align-items-center pb-3\">
            <div class=\"ds-store-reviews-item-author d-flex align-items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"29\" viewBox=\"0 0 28 29\" fill=\"none\">
              <path
                d=\"M22.2895 0.346191H5.71053C1.97474 0.346191 0 2.32093 0 6.05672V22.6357C0 26.1106 1.72863 28.0396 4.97368 28.2946C5.03411 28.3108 5.09305 28.3314 5.15789 28.3314C5.18884 28.3314 5.21689 28.3168 5.24784 28.3138C5.40553 28.3212 5.54695 28.3462 5.71053 28.3462H22.2895C22.4531 28.3462 22.5959 28.3212 22.7522 28.3138C22.7831 28.3182 22.8097 28.3314 22.8421 28.3314C22.9069 28.3314 22.9659 28.3108 23.0263 28.2946C26.2714 28.0381 28 26.1106 28 22.6357V6.05672C28 2.32093 26.0253 0.346191 22.2895 0.346191ZM22.1053 26.8725H5.89474V25.9441C5.89474 24.6296 6.29711 20.344 11.4801 20.344H16.5199C21.7029 20.344 22.1053 24.631 22.1053 25.9441V26.8725ZM26.5263 22.6357C26.5263 25.0496 25.5728 26.373 23.5789 26.7473V25.9441C23.5789 22.6813 21.7294 18.8703 16.5199 18.8703H11.4801C6.27058 18.8703 4.42105 22.6813 4.42105 25.9441V26.7473C2.42716 26.3715 1.47368 25.0496 1.47368 22.6357V6.05672C1.47368 3.16682 2.81916 1.81988 5.71053 1.81988H22.2895C25.1808 1.81988 26.5263 3.16682 26.5263 6.05672V22.6357ZM14.0119 6.24093C11.1677 6.24093 8.85398 8.55461 8.85398 11.3988C8.85398 14.243 11.1677 16.5567 14.0119 16.5567C16.8561 16.5567 19.1698 14.243 19.1698 11.3988C19.1698 8.55461 16.8561 6.24093 14.0119 6.24093ZM14.0119 15.083C11.9797 15.083 10.3277 13.4296 10.3277 11.3988C10.3277 9.36809 11.9797 7.71461 14.0119 7.71461C16.0441 7.71461 17.6961 9.36809 17.6961 11.3988C17.6961 13.4296 16.0441 15.083 14.0119 15.083Z\"
                fill=\"#9CA3AF\" />
            </svg>
            <div class=\"ds-store-reviews-item-info ms-2 d-flex flex-column align-items-start\">
              <div class=\"dark-text fw-500 fsz-14\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 14);
                echo "</div>
              <div class=\"ds-module-rating-stars d-flex align-items-center justify-content-center mt-1\">
                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 17) < $context["i"])) {
                        // line 18
                        echo "                    <span class=\"ds-module-rating-star\"></span>
                  ";
                    } else {
                        // line 20
                        echo "                    <span class=\"ds-module-rating-star ds-module-rating-star-is\"></span>
                  ";
                    }
                    // line 22
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "              </div>
            </div>
            </div>
            <span class=\"d-inline-flex align-items-center fsz-12 light-text\">
              <svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path
                  d=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
                  fill=\"#9CA3AF\"></path>
              </svg>
              ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 32);
                echo "
            </span>
          </div>
          <div class=\"ds-product-reviews-item-content py-3 fsz-14 fw-300\">
            ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 36);
                echo "
            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["review"], "positive_text", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "              <div class=\"ds-product-reviews-item-additional d-flex align-items-start pt-3\">
                <span class=\"me-2 fsz-20 green-text\">+</span>
                <div class=\"ds-product-reviews-item-advantages\">
                  <div class=\"ds-product-reviews-item-advantages-title fsz-14 fw-500\">";
                    // line 41
                    echo ($context["text_review_positive_text"] ?? null);
                    echo "</div>
                  <p>";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "positive_text", [], "any", false, false, false, 42);
                    echo "</p>
                </div>
              </div>
            ";
                }
                // line 46
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["review"], "negative_text", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "              <div class=\"d-flex align-items-start pt-3\">
                <span class=\"me-2 fsz-20 red-text\">–</span>
                <div class=\"ds-product-reviews-item-advantages\">
                  <div class=\"ds-product-reviews-item-advantages-title fsz-14 fw-500\">";
                    // line 50
                    echo ($context["text_review_negative_text"] ?? null);
                    echo "</div>
                  <p>";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "negative_text", [], "any", false, false, false, 51);
                    echo "</p>
                </div>
              </div>
            ";
                }
                // line 55
                echo "          </div>
          <div class=\"ds-product-reviews-item-like d-inline-flex align-items-start light-text pt-3 fsz-12\" onclick=\"addReviewReputation(";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 56);
                echo ");\">
            <span class=\"me-2 fw-400 text-decoration-underline\">";
                // line 57
                echo ($context["text_is_good_review"] ?? null);
                echo "</span>
            <button type=\"button\" class=\"no-btn\" aria-label=\"Like\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                <path
                  d=\"M15.5283 6.038C15.1624 5.52928 14.3985 4.92376 12.8436 4.92376H10.2541V2.88314C10.2541 1.85257 9.74199 0.89585 8.88455 0.32313C8.39471 -0.00343576 7.7925 -0.0871525 7.2329 0.0933611C6.67167 0.273875 6.23181 0.693164 6.01765 1.26835L4.27165 6.56479H1.84616C0.828722 6.56479 0 7.39269 0 8.41096V14.1546C0 15.1728 0.828722 16.0007 1.84616 16.0007H11.2034C13.2514 16.0007 13.7527 15.0054 14.1228 13.8969L15.763 8.97381C16.1462 7.8218 16.0625 6.77892 15.5283 6.038ZM1.22997 14.1546V8.41096C1.22997 8.07126 1.50649 7.79557 1.84536 7.79557H3.48639V14.77H1.84536C1.50649 14.77 1.22997 14.4943 1.22997 14.1546ZM14.5937 8.58408L12.9535 13.5072C12.6622 14.3827 12.4793 14.77 11.2026 14.77H4.71717V7.79557C4.98302 7.79557 5.21773 7.62489 5.3006 7.37299L7.17711 1.6778C7.25178 1.48006 7.40848 1.32991 7.60951 1.26509C7.81053 1.19945 8.02547 1.23061 8.20106 1.34712C8.71552 1.6901 9.02237 2.26447 9.02237 2.88314V5.53915C9.02237 5.87884 9.29807 6.15453 9.63776 6.15453H12.8427C13.4138 6.15453 14.1703 6.25873 14.5297 6.7576C14.8218 7.16294 14.8464 7.82921 14.5937 8.58408Z\"
                  fill=\"#59AA45\" />
              </svg>
            </button>
            <span class=\"ms-2 dark-text\" id=\"review-";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 65);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "positive_votes", [], "any", false, false, false, 65);
                echo "</span>
          </div>
        </div>
        ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["review"], "admin_answer", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "          <div class=\"ds-product-reviews-item ds-product-reviews-item-answer p-3 mt-3 mt-lg-4 br-4 position-relative\">
            <div class=\"ds-product-reviews-item-header d-flex justify-content-between align-items-center pb-3\">
              <div class=\"ds-product-reviews-item-answer-title dark-text fw-500 fsz-14\">";
                    // line 71
                    echo ($context["text_faq_answer"] ?? null);
                    echo "</div>
            </div>
            <div class=\"ds-product-reviews-item-content pt-3 fsz-14 fw-300 dark-text\">";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "admin_answer", [], "any", false, false, false, 73);
                    echo "</div>
          </div>
        ";
                }
                // line 76
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "  ";
        } else {
            // line 79
            echo "    <div class=\"d-flex flex-column justify-content-center ds-empty-reviews mb-3 mb-md-0 text-center p-4 br-4\">
      <p class=\"fw-500 fsz-16 mb-5\">";
            // line 80
            echo ($context["oct_text_no_reviews"] ?? null);
            echo "</p>
      <svg class=\"mx-auto\" xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"77\" viewBox=\"0 0 80 77\" fill=\"none\">
        <path d=\"M39.9979 0.598633C16.4455 0.598633 0 15.3178 0 36.3904C0 45.0805 2.77917 52.861 8.05468 58.9576C7.47787 61.509 5.88148 65.5342 1.46066 69.1046C0.14704 70.2161 -0.323947 71.9928 0.252865 73.6222C0.829678 75.239 2.2951 76.3124 3.97081 76.3503C4.5392 76.3713 5.11926 76.3801 5.72133 76.3801C12.0326 76.3801 19.9185 75.1503 25.4551 70.0348C30.0149 71.4579 34.8992 72.1821 40.0021 72.1821C63.5545 72.1821 80 57.463 80 36.3904C80 15.3178 63.5504 0.598633 39.9979 0.598633ZM39.9979 67.9764C34.895 67.9764 30.0406 67.1929 25.5692 65.6477C24.7777 65.374 23.91 65.5934 23.3458 66.1997C18.4029 71.4752 10.2223 72.3507 4.22264 72.3507C4.19738 72.3507 4.16773 72.3507 4.14247 72.3507C8.6475 68.7088 11.5829 63.8461 12.3955 58.659C12.4924 58.0232 12.2979 57.3791 11.86 56.9033C6.85815 51.4846 4.21031 44.39 4.21031 36.3904C4.21031 17.7934 18.9253 4.80894 39.9979 4.80894C61.0705 4.80894 75.7856 17.7934 75.7856 36.3904C75.7856 54.9873 61.0705 67.9764 39.9979 67.9764ZM56.4856 28.77L47.6528 27.5488L43.7909 19.785C42.351 16.8883 37.6313 16.8883 36.1998 19.785L32.4233 27.4815L23.5103 28.77C21.9483 28.9931 20.6815 30.0666 20.1974 31.5613C19.7174 33.0517 20.1164 34.6559 21.2448 35.7464L27.6487 41.864L26.1798 50.3812C25.9019 51.9727 26.5419 53.5515 27.847 54.5072C29.1607 55.4714 30.8743 55.598 32.3184 54.8444L39.9476 50.815L47.6774 54.8485C48.3006 55.1727 48.9786 55.3327 49.6438 55.3327C50.5238 55.3327 51.3995 55.055 52.1447 54.5119C53.4541 53.5603 54.094 51.981 53.8161 50.3853L52.3092 41.9735L58.7511 35.7423C59.8795 34.6518 60.2785 33.0476 59.7985 31.5572C59.3143 30.0667 58.0476 28.9973 56.4856 28.77ZM49.3827 38.9463C48.4144 39.8852 47.9681 41.2406 48.1996 42.5753L49.6315 51.1095L41.9047 47.0806C41.3068 46.7691 40.6547 46.6129 40.0021 46.6129C40.0021 46.6129 40.0021 46.6129 40.0021 46.6129C39.3495 46.6129 38.693 46.7691 38.1035 47.0806L30.3356 51.0972L31.8086 42.5753C32.036 41.2448 31.5897 39.8851 30.6214 38.9504L24.1168 32.9381L33.0256 31.6538C34.3561 31.4643 35.5136 30.631 36.1114 29.4268L40.0185 21.6461C40.0185 21.6461 40.0235 21.65 40.0278 21.6584C40.0278 21.6584 40.0277 21.6584 40.0319 21.6584L43.8927 29.4268C44.4948 30.631 45.6481 31.4602 46.9744 31.6497L55.8288 32.7151L49.3827 38.9463Z\" fill=\"#F2F2F2\"/>
        </svg>
      </div>
  ";
        }
        // line 86
        echo "</div>

";
        // line 88
        if (($context["reviews"] ?? null)) {
            // line 89
            echo "\t<div id=\"review-pagination\" class=\"d-none\" data-has-more=\"";
            echo ((($context["has_more"] ?? null)) ? ("true") : ("false"));
            echo "\" data-next-page=\"";
            echo ($context["next_page"] ?? null);
            echo "\"></div>
\t";
            // line 90
            if (($context["has_more"] ?? null)) {
                // line 91
                echo "\t\t<button id=\"load-more-reviews\" class=\"ds-footer-contacts-button button button-primary br-7 mt-4\">";
                echo ($context["oct_show_more"] ?? null);
                echo "</button>
\t";
            }
            // line 93
            echo "
\t";
            // line 94
            if ( !($context["ajax"] ?? null)) {
                // line 95
                echo "\t<script>
\t\tfunction addReviewReputation(review_id) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=octemplates/events/helper/octReviewReputation&review_id=' + review_id,
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\tscNotify('danger', json['error']);
\t\t\t\t\t}
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\tvar reviewElement = \$('#review-' + review_id);
\t\t\t\t\t\tvar currentVotes = parseInt(reviewElement.text());
\t\t\t\t\t\treviewElement.text(currentVotes + 1);
\t\t\t\t\t\tscNotify('success', json['success']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction loadMoreReviews() {
\t\t\tif (window.loadingMoreReviews) return;
\t\t\twindow.loadingMoreReviews = true;
\t\t\t
\t\t\tvar \$pagination = \$('#review-pagination');
\t\t\tvar hasMore = \$pagination.attr('data-has-more');
\t\t\tvar nextPage = \$pagination.attr('data-next-page');
\t\t\t
\t\t\tif (hasMore === \"false\" || !nextPage) {
\t\t\t\t\$('#load-more-reviews').remove();
\t\t\t\twindow.loadingMoreReviews = false;
\t\t\t\treturn;
\t\t\t}
\t\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=octemplates/events/helper/octProductReviews&oct_product_id=";
                // line 129
                echo ($context["product_id"] ?? null);
                echo "&page=' + nextPage,
\t\t\t\ttype: 'GET',
\t\t\t\tdataType: 'html',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#load-more-reviews').prop('disabled', true);
\t\t\t\t\tmasked('body', true);

\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#load-more-reviews').prop('disabled', false);
\t\t\t\t\tmasked('body', false);
\t\t\t\t},
\t\t\t\tsuccess: function(html) {
\t\t\t\t\tvar \$temp = \$('<div>').html(html);
\t\t\t\t\tvar \$newReviewsContainer = \$temp.find('#reviews-container');
\t\t\t\t\tvar newReviewsContent = \$newReviewsContainer.length ? \$newReviewsContainer.html() : \$temp.html();
\t\t\t\t\t\$('#reviews-container').append(newReviewsContent);
\t\t\t\t\t
\t\t\t\t\tvar \$newPagination = \$temp.find('#review-pagination');
\t\t\t\t\tif (\$newPagination.length) {
\t\t\t\t\t\t\$('#review-pagination').attr('data-has-more', \$newPagination.attr('data-has-more'));
\t\t\t\t\t\t\$('#review-pagination').attr('data-next-page', \$newPagination.attr('data-next-page'));
\t\t\t\t\t\tif (\$newPagination.attr('data-has-more') === \"false\") {
\t\t\t\t\t\t\t\$('#load-more-reviews').remove();
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#load-more-reviews').remove();
\t\t\t\t\t}
\t\t\t\t\twindow.loadingMoreReviews = false;
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\twindow.loadingMoreReviews = false;
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$(document).ready(function(){
\t\t\t\$(document).on('click', '#load-more-reviews', function(e){
\t\t\t\te.preventDefault();
\t\t\t\tloadMoreReviews();
\t\t\t});
\t\t});
\t</script>
\t";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/product/review.twig";
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
        return array (  271 => 129,  235 => 95,  233 => 94,  230 => 93,  224 => 91,  222 => 90,  215 => 89,  213 => 88,  209 => 86,  200 => 80,  197 => 79,  194 => 78,  187 => 76,  181 => 73,  176 => 71,  172 => 69,  170 => 68,  162 => 65,  151 => 57,  147 => 56,  144 => 55,  137 => 51,  133 => 50,  128 => 47,  125 => 46,  118 => 42,  114 => 41,  109 => 38,  107 => 37,  103 => 36,  96 => 32,  85 => 23,  79 => 22,  75 => 20,  71 => 18,  68 => 17,  64 => 16,  59 => 14,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/product/review.twig", "");
    }
}
