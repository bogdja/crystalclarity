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

/* oct_deals/template/common/header.twig */
class __TwigTemplate_e1a964b538fcb5cf79e167c8467b128ccc4d90a8dd2b217f1a6f02f56e5f82fe extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"no-transition";
        if (($context["body_class"] ?? null)) {
            echo " body-product";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "dark_theme", [], "any", true, true, false, 6)) {
            echo " dark-theme";
        } else {
            echo " light-theme";
        }
        echo "\" data-oct-fonts=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["main_active_font"] ?? null), "data_attr", [], "any", false, false, false, 6);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 11
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "open_graph", [], "any", true, true, false, 12) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "open_graph", [], "any", false, false, false, 12)) &&  !twig_test_empty(($context["octOpenGraphs"] ?? null)))) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["octOpenGraphs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["octOpenGraph"]) {
                // line 14
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "content", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "<meta property=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "property", [], "any", false, false, false, 15);
                    echo "\" content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "content", [], "any", false, false, false, 15);
                    echo "\" />
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octOpenGraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 19
        if ((array_key_exists("oct_theme_color", $context) && ($context["oct_theme_color"] ?? null))) {
            // line 20
            echo "<meta name=\"theme-color\" content=\"";
            echo ($context["oct_theme_color"] ?? null);
            echo "\" data-oct-theme-color=\"";
            echo ($context["oct_theme_color"] ?? null);
            echo "\"/>
";
        }
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "dark_theme", [], "any", true, true, false, 22)) {
            // line 23
            echo "    <script id=\"octDetectTheme\">
        (function() {
            let storedTheme = localStorage.getItem('theme');
            const allowedThemes = ['dark', 'light'];
            if (!allowedThemes.includes(storedTheme)) {
                storedTheme = null;
            }
            const deviceTheme = window.matchMedia(\"(prefers-color-scheme: dark)\").matches ? 'dark' : 'light';
            const currentTheme = storedTheme || deviceTheme;

            document.documentElement.style.display = 'none';
            document.documentElement.className = `\${currentTheme}-theme`;
            document.documentElement.style.display = '';

            const metaThemeColor = document.querySelector('[name=\"theme-color\"]');

            if (metaThemeColor) {
                const darkThemeColor = 'rgb(20, 20, 20)';
                const lightThemeColor = metaThemeColor.getAttribute('data-oct-theme-color');
                metaThemeColor.setAttribute('content', currentTheme === 'dark' ? darkThemeColor : lightThemeColor);
            }
        })();
    </script>
";
        }
        // line 47
        if ((array_key_exists("oct_analytics_google_webmaster_code", $context) &&  !twig_test_empty(($context["oct_analytics_google_webmaster_code"] ?? null)))) {
            // line 48
            echo "<meta name=\"google-site-verification\" content=\"";
            echo ($context["oct_analytics_google_webmaster_code"] ?? null);
            echo "\" />
";
        }
        // line 50
        if ((array_key_exists("oct_analytics_googletm_code", $context) &&  !twig_test_empty(($context["oct_analytics_googletm_code"] ?? null)))) {
            // line 51
            echo "<!-- Google Tag Manager -->
<script id=\"octGtm\">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','";
            // line 56
            echo ($context["oct_analytics_googletm_code"] ?? null);
            echo "');</script>
<!-- End Google Tag Manager -->
";
        }
        // line 59
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 60
        if (($context["robots"] ?? null)) {
            // line 61
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 63
        if (($context["description"] ?? null)) {
            // line 64
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 66
        if (($context["keywords"] ?? null)) {
            // line 67
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 70
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 70);
            echo "\" rel=\"stylesheet\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 70);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        if (($context["oct_preloads"] ?? null)) {
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_preloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_preload"]) {
                // line 74
                echo "<link rel=\"preload\" as=\"image\" href=\"";
                echo $context["oct_preload"];
                echo "\">
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_preload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 78
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 81
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 81);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 81);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 84
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "<script";
        if ((((array_key_exists("oct_footer_scripts", $context) && ($context["oct_footer_scripts"] ?? null)) && array_key_exists("oct_minify", $context)) && ($context["oct_minify"] ?? null))) {
            echo " id=\"dataFonts\"";
        }
        echo ">
    let octFonts = localStorage.getItem('octFonts');
    let fontFamily = document.documentElement.getAttribute('data-oct-fonts');
    if (octFonts !== null) {
        var octHead  = document.getElementsByTagName('head')[0];
        var octLink  = document.createElement('link');
        octLink.rel  = 'stylesheet';
        octLink.type = 'text/css';
        octLink.href = location.protocol + '//' + location.host + `/catalog/view/theme/oct_deals/stylesheet/oct-fonts-\${fontFamily}.css`;
        octLink.media = 'all';
        octHead.appendChild(octLink);
    }
</script>
<style>
    :root {
        --ds-main-font: '";
        // line 101
        echo twig_get_attribute($this->env, $this->source, ($context["main_active_font"] ?? null), "name", [], "any", false, false, false, 101);
        echo "', sans-serif;
    }
</style>
</head>
<body";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "oct_popup_options", [], "any", true, true, false, 105)) {
            echo " data-popup-options=\"true\"";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "width", [], "any", true, true, false, 105)) {
            echo " data-width=\"";
            echo ($context["main_width"] ?? null);
            echo "\"";
        }
        echo ">
<div id=\"ds_livesearch_mobile\"></div>
";
        // line 107
        if (($context["product_views_count"] ?? null)) {
            // line 108
            echo "    <div id=\"ds_sidebar_viewed\" class=\"ds-sidebar\">
        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
            <div class=\"fw-700 dark-text fsz-16\">";
            // line 110
            echo ($context["oct_product_views"] ?? null);
            echo "</div>
            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"close\" aria-label=\"Close\">
                <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                        fill=\"#00A8E8\" />
                </svg>
            </button>
        </div>
        <div class=\"ds-sidebar-content pt-3 px-3\">
        
        </div>
    </div>
";
        }
        // line 123
        if ((array_key_exists("oct_analytics_googletm_code", $context) &&  !twig_test_empty(($context["oct_analytics_googletm_code"] ?? null)))) {
            // line 124
            echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 125
            echo ($context["oct_analytics_googletm_code"] ?? null);
            echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
";
        }
        // line 128
        if (((array_key_exists("oct_information_bar_value", $context) &&  !twig_test_empty(($context["oct_information_bar_value"] ?? null))) && ($context["oct_information_bar_value"] ?? null))) {
            // line 129
            echo "<div id=\"oct-infobar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 d-flex align-items-center justify-content-between flex-column flex-md-row py-3 py-md-4\">
                <div class=\"oct-infobar-text fsz-12\">";
            // line 133
            echo ($context["text_oct_information_bar"] ?? null);
            echo "</div>
                <button type=\"button\" aria-label=\"Information\" id=\"oct-infobar-btn\" class=\"button button-outline button-outline-primary button-small br-4 mt-3 mt-md-0 ms-md-4 py-2 px-3\">";
            // line 134
            echo ($context["oct_info_bar_close"] ?? null);
            echo "</button>
            </div>
        </div>
    </div>
</div>
<script>
\$('#oct-infobar-btn').on('click', function () {
    \$('#oct-infobar').addClass('hidden');
    const date = new Date('";
            // line 142
            echo ($context["oct_information_bar_day_now"] ?? null);
            echo "'.replace(/-/g, \"/\"));
    date.setTime(date.getTime() + (";
            // line 143
            echo ($context["oct_info_max_day"] ?? null);
            echo " * 24 * 60 * 60 * 1000));
    document.cookie = '";
            // line 144
            echo ($context["oct_information_bar_value"] ?? null);
            echo "=1; path=/; expires=' + date.toUTCString();
});
</script>
<style>
#oct-infobar {background:";
            // line 148
            echo ($context["oct_information_bar_background"] ?? null);
            echo ";}
.oct-infobar-text {color:";
            // line 149
            echo ($context["oct_information_bar_color_text"] ?? null);
            echo ";}
.oct-infobar-text a {color:";
            // line 150
            echo ($context["oct_information_bar_color_url"] ?? null);
            echo ";}
</style>
";
        }
        // line 153
        echo "<header class=\"ds-header sticky-top pt-2 pt-xl-3 pb-2 pb-xl-0";
        if (($context["horizontal_menu"] ?? null)) {
            echo " with-categories-menu";
        }
        echo "\">
    <div class=\"container-xl\">
        <div class=\"d-flex flex-row align-items-center justify-content-between mb-xl-3\">
            <div class=\"ds-header-left d-flex align-items-center";
        // line 156
        if (twig_matches("/mobileMenuBox/", ($context["menu"] ?? null))) {
            echo " with-menu-btn";
        }
        echo "\">
                <button type=\"button\" class=\"ds-header-menu-button button button-transparent me-3 d-xl-none\" data-sidebar=\"catalog\" aria-label=\"Menu\" onclick=\"mobileMenu();\">
                    <svg width=\"20\" height=\"14\" viewBox=\"0 0 20 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M13.75 1.75H0.75C0.336 1.75 0 1.414 0 1C0 0.586 0.336 0.25 0.75 0.25H13.75C14.164 0.25 14.5 0.586 14.5 1C14.5 1.414 14.164 1.75 13.75 1.75ZM19.5 7C19.5 6.586 19.164 6.25 18.75 6.25H0.75C0.336 6.25 0 6.586 0 7C0 7.414 0.336 7.75 0.75 7.75H18.75C19.164 7.75 19.5 7.414 19.5 7ZM10.5 13C10.5 12.586 10.164 12.25 9.75 12.25H0.75C0.336 12.25 0 12.586 0 13C0 13.414 0.336 13.75 0.75 13.75H9.75C10.164 13.75 10.5 13.414 10.5 13Z\"
                            fill=\"#00171F\" />
                    </svg>
                </button>
                ";
        // line 164
        if (($context["logo"] ?? null)) {
            // line 165
            echo "                    ";
            if ((array_key_exists("oct_home", $context) && ($context["oct_home"] ?? null))) {
                // line 166
                echo "                        <span><img id=\"logo\" src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\"";
                if ((array_key_exists("logo_width", $context) && ($context["logo_width"] ?? null))) {
                    echo " width=\"";
                    echo ($context["logo_width"] ?? null);
                    echo "\"";
                }
                if ((array_key_exists("logo_height", $context) && ($context["logo_height"] ?? null))) {
                    echo " height=\"";
                    echo ($context["logo_height"] ?? null);
                    echo "\"";
                }
                echo " /></span>
                    ";
            } else {
                // line 168
                echo "                        <a href=\"";
                echo ($context["home"] ?? null);
                echo "\" title=\"Logo\">
                            <img id=\"logo\" src=\"";
                // line 169
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\"";
                if ((array_key_exists("logo_width", $context) && ($context["logo_width"] ?? null))) {
                    echo " width=\"";
                    echo ($context["logo_width"] ?? null);
                    echo "\"";
                }
                if ((array_key_exists("logo_height", $context) && ($context["logo_height"] ?? null))) {
                    echo " height=\"";
                    echo ($context["logo_height"] ?? null);
                    echo "\"";
                }
                echo " />
                        </a>
                    ";
            }
            // line 172
            echo "                ";
        } else {
            // line 173
            echo "                    <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
                ";
        }
        // line 175
        echo "                ";
        if (($context["menu"] ?? null)) {
            // line 176
            echo "                    ";
            echo ($context["menu"] ?? null);
            echo "
                ";
        }
        // line 178
        echo "            </div>
            <div class=\"ds-header-right d-flex align-items-center flex-grow-1 justify-content-end pe-md-3\">
                ";
        // line 180
        echo ($context["search"] ?? null);
        echo "
                <div class=\"ds-header-user-button button-transparent ds-dropdown-box ms-md-3\">
                    <div class=\"ds-dropdown-toggle fw-500 fsz-12 d-flex align-items-center me-3\">
                        <svg width=\"17\" height=\"20\" viewBox=\"0 0 17 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M8.75705 8.75C6.41305 8.75 4.50705 6.843 4.50705 4.5C4.50705 2.157 6.41305 0.25 8.75705 0.25C11.101 0.25 13.007 2.157 13.007 4.5C13.007 6.843 11.101 8.75 8.75705 8.75ZM8.75705 1.75C7.24005 1.75 6.00705 2.983 6.00705 4.5C6.00705 6.017 7.24005 7.25 8.75705 7.25C10.274 7.25 11.507 6.017 11.507 4.5C11.507 2.983 10.273 1.75 8.75705 1.75ZM16.498 19V16.019C16.498 13.358 14.992 10.25 10.748 10.25H6.74802C2.50402 10.25 0.998016 13.357 0.998016 16.019V19C0.998016 19.414 1.33402 19.75 1.74802 19.75C2.16202 19.75 2.49802 19.414 2.49802 19V16.019C2.49802 15.018 2.80502 11.75 6.74802 11.75H10.748C14.691 11.75 14.998 15.017 14.998 16.019V19C14.998 19.414 15.334 19.75 15.748 19.75C16.162 19.75 16.498 19.414 16.498 19Z\"
                                fill=\"#00171F\" />
                        </svg>
                        <span class=\"dark-text fw-500 fsz-12\">";
        // line 187
        echo ($context["oct_client"] ?? null);
        echo "</span>
                        <svg class=\"ds-arrow-down\" width=\"8\" height=\"4\" viewBox=\"0 0 8 4\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path 
                                d=\"M3.99802 4C3.81883 4 3.63961 3.93469 3.50312 3.8047L0.70328 1.13815C0.429595 0.8775 0.429595 0.456145 0.70328 0.195491C0.976964 -0.0651636 1.41938 -0.0651636 1.69307 0.195491L3.99802 2.3907L6.30296 0.195491C6.57665 -0.0651636 7.01907 -0.0651636 7.29275 0.195491C7.56644 0.456145 7.56644 0.8775 7.29275 1.13815L4.49291 3.8047C4.35642 3.93469 4.17721 4 3.99802 4Z\"
                                fill=\"#00171F\" />
                        </svg>
                    </div>
                    <div class=\"ds-dropdown position-absolute\">
                        <div class=\"ds-dropdown-inner p-3\">
                            ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "header_account", [], "any", true, true, false, 196)) {
            // line 197
            echo "                                ";
            if (($context["logged"] ?? null)) {
                // line 198
                echo "                                    <div class=\"ds-header-user-logged br-4 ps-3 mb-3\">
                                        <div class=\"d-flex align-items-center\">
                                            <svg width=\"19\" height=\"22\" viewBox=\"0 0 19 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M18.3384 7.17401L11.5884 0.424011C11.4826 0.318261 11.3397 0.259766 11.1901 0.259766H4.44012C1.86387 0.259766 0.502625 1.62102 0.502625 4.19727V17.6973C0.502625 20.2735 1.86387 21.6348 4.44012 21.6348H14.5651C17.1414 21.6348 18.5026 20.2735 18.5026 17.6973V7.57227C18.5026 7.42264 18.443 7.27976 18.3384 7.17401ZM11.7526 2.18014L16.5822 7.00977H14.5651C12.62 7.00977 11.7526 6.14239 11.7526 4.19727V2.18014ZM14.5651 20.5098H4.44012C2.495 20.5098 1.62762 19.6424 1.62762 17.6973V4.19727C1.62762 2.25214 2.495 1.38477 4.44012 1.38477H10.6276V4.19727C10.6276 6.77352 11.9889 8.13477 14.5651 8.13477H17.3776V17.6973C17.3776 19.6424 16.5103 20.5098 14.5651 20.5098ZM9.50262 13.5348C10.8369 13.5348 11.9213 12.4503 11.9213 11.116C11.9213 9.78176 10.8357 8.69727 9.50262 8.69727C8.1695 8.69727 7.08398 9.78176 7.08398 11.116C7.08398 12.4503 8.16837 13.5348 9.50262 13.5348ZM9.50262 9.82227C10.217 9.82227 10.7963 10.4028 10.7963 11.116C10.7963 11.8293 10.2159 12.4098 9.50262 12.4098C8.78937 12.4098 8.20898 11.8293 8.20898 11.116C8.20898 10.4028 8.78825 9.82227 9.50262 9.82227ZM13.4401 17.9189V18.2598C13.4401 18.5703 13.1881 18.8223 12.8776 18.8223C12.5671 18.8223 12.3151 18.5703 12.3151 18.2598V17.9189C12.3151 16.9998 11.6605 16.0098 10.225 16.0098H8.78137C7.34587 16.0098 6.69122 16.9998 6.69122 17.9189V18.2598C6.69122 18.5703 6.43922 18.8223 6.12872 18.8223C5.81822 18.8223 5.56622 18.5703 5.56622 18.2598V17.9189C5.56622 16.4103 6.66975 14.8848 8.78137 14.8848H10.225C12.3366 14.8848 13.4401 16.4103 13.4401 17.9189Z\" fill=\"#00171F\"></path>
                                            </svg>
                                            <div class=\"ds-header-user-logged-info ms-3\">
                                                <div class=\"ds-header-user-logged-name fw-500 fsz-14 dark-text\">";
                // line 204
                echo ($context["customerName"] ?? null);
                echo " ";
                echo ($context["customerLastName"] ?? null);
                echo "</div>
                                                <div class=\"ds-header-user-logged-email light-text fsz-12 secondary-text\">";
                // line 205
                echo ($context["customerEmail"] ?? null);
                echo "</div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 208
                echo ($context["login"] ?? null);
                echo "\" class=\"button button-primary button-small br-7 w-100 mt-2\">
                                            <span class=\"button-text\">";
                // line 209
                echo ($context["oct_to_account"] ?? null);
                echo "</span>
                                        </a>
                                        <a href=\"";
                // line 211
                echo ($context["logout"] ?? null);
                echo "\" class=\"button button-outline button-outline-primary button-small br-7 w-100 mt-2\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 12 12\" fill=\"none\">
                                                <path d=\"M8.30811 9.07714V9.69255C8.30811 11.1806 7.48838 12.0004 6.0003 12.0004H2.30781C0.819734 12.0004 0 11.1806 0 9.69255V2.30756C0 0.819489 0.819734 -0.000244141 2.30781 -0.000244141H6.0003C7.48838 -0.000244141 8.30811 0.819489 8.30811 2.30756V2.92298C8.30811 3.17776 8.10133 3.38454 7.84655 3.38454C7.59177 3.38454 7.38499 3.17776 7.38499 2.92298V2.30756C7.38499 1.33705 6.97081 0.922879 6.0003 0.922879H2.30781C1.3373 0.922879 0.923124 1.33705 0.923124 2.30756V9.69255C0.923124 10.6631 1.3373 11.0772 2.30781 11.0772H6.0003C6.97081 11.0772 7.38499 10.6631 7.38499 9.69255V9.07714C7.38499 8.82235 7.59177 8.61557 7.84655 8.61557C8.10133 8.61557 8.30811 8.82235 8.30811 9.07714ZM11.9649 6.17667C12.0117 6.06405 12.0117 5.93666 11.9649 5.82404C11.9415 5.76742 11.9077 5.71635 11.8652 5.67389L10.019 3.82764C9.83867 3.64733 9.54632 3.64733 9.36601 3.82764C9.18569 4.00796 9.18569 4.30028 9.36601 4.4806L10.4245 5.53912H3.53864C3.28386 5.53912 3.07708 5.7459 3.07708 6.00068C3.07708 6.25546 3.28386 6.46224 3.53864 6.46224H10.4245L9.36601 7.52076C9.18569 7.70107 9.18569 7.9934 9.36601 8.17371C9.45586 8.26357 9.57404 8.30911 9.6922 8.30911C9.81036 8.30911 9.9285 8.26418 10.0183 8.17371L11.8646 6.32747C11.9077 6.28377 11.9415 6.23268 11.9649 6.17667Z\" fill=\"#00A8E8\"></path>
                                            </svg>
                                            <span class=\"button-text\">";
                // line 215
                echo ($context["text_logout"] ?? null);
                echo "</span>
                                        </a>
                                    </div>
                                ";
            } else {
                // line 219
                echo "                                    <button type=\"button\" class=\"button button-outline button-outline-primary br-7 w-100 mb-3\" onclick=\"octPopupLogin();\">
                                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M19.75 4V16C19.75 18.418 18.418 19.75 16 19.75H10C7.582 19.75 6.25 18.418 6.25 16V15C6.25 14.586 6.586 14.25 7 14.25C7.414 14.25 7.75 14.586 7.75 15V16C7.75 17.577 8.423 18.25 10 18.25H16C17.577 18.25 18.25 17.577 18.25 16V4C18.25 2.423 17.577 1.75 16 1.75H10C8.423 1.75 7.75 2.423 7.75 4V5C7.75 5.414 7.414 5.75 7 5.75C6.586 5.75 6.25 5.414 6.25 5V4C6.25 1.582 7.582 0.25 10 0.25H16C18.418 0.25 19.75 1.582 19.75 4ZM10.47 12.47C10.177 12.763 10.177 13.238 10.47 13.531C10.616 13.677 10.808 13.751 11 13.751C11.192 13.751 11.384 13.678 11.53 13.531L14.53 10.531C14.599 10.462 14.654 10.379 14.692 10.287C14.768 10.104 14.768 9.89699 14.692 9.71399C14.654 9.62199 14.599 9.539 14.53 9.47L11.53 6.47C11.237 6.177 10.762 6.177 10.469 6.47C10.176 6.763 10.176 7.23801 10.469 7.53101L12.189 9.25101H1C0.586 9.25101 0.25 9.58701 0.25 10.001C0.25 10.415 0.586 10.751 1 10.751H12.189L10.47 12.47Z\"
                                                fill=\"#00A8E8\" />
                                        </svg>
                                        <span class=\"button-text\">";
                // line 225
                echo ($context["oct_to_login"] ?? null);
                echo "</span>
                                    </button>
                                ";
            }
            // line 228
            echo "                            ";
        }
        // line 229
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "header_lang", [], "any", true, true, false, 229) || twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "header_cur", [], "any", true, true, false, 229))) {
            // line 230
            echo "                                <div class=\"d-flex align-items-center justify-content-between\">
                                    ";
            // line 231
            if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "header_lang", [], "any", true, true, false, 231)) {
                // line 232
                echo "                                        ";
                echo ($context["language"] ?? null);
                echo "
                                    ";
            }
            // line 234
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "header_cur", [], "any", true, true, false, 234)) {
                // line 235
                echo "                                        ";
                echo ($context["currency"] ?? null);
                echo "
                                    ";
            }
            // line 237
            echo "                                </div>
                            ";
        }
        // line 239
        echo "                            ";
        if ((array_key_exists("header_informations", $context) &&  !twig_test_empty(($context["header_informations"] ?? null)))) {
            // line 240
            echo "                                <ul class=\"ds-dropdown-links list-unstyled\">
                                    ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header_informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
                // line 242
                echo "                                    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["header_link"], "href", [], "any", false, false, false, 242);
                echo "\" class=\"blue-link fsz-12\">";
                echo twig_get_attribute($this->env, $this->source, $context["header_link"], "title", [], "any", false, false, false, 242);
                echo "</a></li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "                                </ul>
                            ";
        }
        // line 246
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "dark_theme", [], "any", true, true, false, 246)) {
            // line 247
            echo "                                <div class=\"dark-text fsz-14 fw-500 mt-3 mb-2\">";
            echo ($context["oct_site_theme"] ?? null);
            echo ":</div>
                                <div class=\"ds-theme-switcher d-inline-flex p-2 br-12\">
                                    <div class=\"ds-theme-switcher-btn br-7 py-1 light active\" data-theme-toggle=\"light\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\">
                                            <path
                                                d=\"M8.50262 5.04983C6.3537 5.04983 4.60519 6.79834 4.60519 8.94727C4.60519 11.0962 6.3537 12.8447 8.50262 12.8447C10.6515 12.8447 12.4001 11.0962 12.4001 8.94727C12.4001 6.79834 10.6515 5.04983 8.50262 5.04983ZM8.50262 11.6139C7.03227 11.6139 5.83596 10.4176 5.83596 8.94727C5.83596 7.47691 7.03227 6.2806 8.50262 6.2806C9.97298 6.2806 11.1693 7.47691 11.1693 8.94727C11.1693 10.4176 9.97298 11.6139 8.50262 11.6139ZM7.88724 3.20368V1.56265C7.88724 1.22296 8.16293 0.947266 8.50262 0.947266C8.84232 0.947266 9.11801 1.22296 9.11801 1.56265V3.20368C9.11801 3.54337 8.84232 3.81906 8.50262 3.81906C8.16293 3.81906 7.88724 3.54337 7.88724 3.20368ZM9.11801 14.6909V16.3319C9.11801 16.6716 8.84232 16.9473 8.50262 16.9473C8.16293 16.9473 7.88724 16.6716 7.88724 16.3319V14.6909C7.88724 14.3512 8.16293 14.0755 8.50262 14.0755C8.84232 14.0755 9.11801 14.3512 9.11801 14.6909ZM2.75903 9.56265H1.11801C0.778317 9.56265 0.502625 9.28696 0.502625 8.94727C0.502625 8.60757 0.778317 8.33188 1.11801 8.33188H2.75903C3.09873 8.33188 3.37442 8.60757 3.37442 8.94727C3.37442 9.28696 3.09873 9.56265 2.75903 9.56265ZM16.5026 8.94727C16.5026 9.28696 16.2269 9.56265 15.8872 9.56265H14.2462C13.9065 9.56265 13.6308 9.28696 13.6308 8.94727C13.6308 8.60757 13.9065 8.33188 14.2462 8.33188H15.8872C16.2269 8.33188 16.5026 8.60757 16.5026 8.94727ZM2.846 4.16038C2.60559 3.91997 2.60559 3.53025 2.846 3.28984C3.08641 3.04943 3.47616 3.04943 3.71657 3.28984L4.87677 4.45005C5.11718 4.69046 5.11718 5.08018 4.87677 5.32059C4.75698 5.44038 4.59944 5.5011 4.4419 5.5011C4.28436 5.5011 4.12683 5.4412 4.00703 5.32059L2.846 4.16038ZM14.1593 13.7341C14.3997 13.9746 14.3997 14.3643 14.1593 14.6047C14.0395 14.7245 13.8819 14.7852 13.7244 14.7852C13.5668 14.7852 13.4093 14.7253 13.2895 14.6047L12.1293 13.4445C11.8889 13.2041 11.8889 12.8144 12.1293 12.5739C12.3697 12.3335 12.7594 12.3335 12.9998 12.5739L14.1593 13.7341ZM4.87677 12.5731C5.11718 12.8135 5.11718 13.2033 4.87677 13.4437L3.71657 14.6039C3.59677 14.7237 3.43923 14.7844 3.2817 14.7844C3.12416 14.7844 2.96662 14.7245 2.84683 14.6039C2.60642 14.3635 2.60642 13.9737 2.84683 13.7333L4.00703 12.5731C4.24662 12.3327 4.63636 12.3327 4.87677 12.5731ZM12.1285 5.32141C11.8881 5.081 11.8881 4.69126 12.1285 4.45085L13.2887 3.29064C13.5291 3.05023 13.9188 3.05023 14.1593 3.29064C14.3997 3.53105 14.3997 3.9208 14.1593 4.16121L12.999 5.32141C12.8792 5.44121 12.7217 5.50193 12.5642 5.50193C12.4066 5.50193 12.2491 5.44121 12.1285 5.32141Z\"
                                                fill=\"#ECCB1E\" />
                                        </svg>
                                    </div>
                                    <div class=\"ds-theme-switcher-btn br-7 py-1 dark ms-2\" data-theme-toggle=\"dark\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\">
                                            <path
                                                d=\"M8.59697 16.9455C8.20314 16.9455 7.80524 16.9176 7.40403 16.8601C3.80302 16.3465 0.98965 13.4921 0.561368 9.91903C0.348048 8.13863 0.718076 6.3935 1.63289 4.87236C3.08839 2.45117 5.76227 0.947266 8.61174 0.947266C8.99818 0.948086 9.32636 1.17618 9.45682 1.52816C9.58891 1.88342 9.488 2.27313 9.20002 2.52091C7.90533 3.6351 7.32609 5.3113 7.65181 7.00392C8.02922 8.97139 9.6488 10.4753 11.6803 10.7469C12.9085 10.9102 14.0908 10.6353 15.0926 9.94775C15.4068 9.73361 15.8105 9.73526 16.1198 9.95268C16.4283 10.1685 16.567 10.5434 16.4742 10.9069C15.5529 14.5087 12.2808 16.9447 8.59697 16.9455ZM7.75189 2.23212C5.66053 2.49549 3.77264 3.69993 2.68717 5.50659C1.91593 6.79061 1.60252 8.26581 1.78302 9.77218C2.14485 12.7931 4.52748 15.2061 7.57715 15.6418C10.8131 16.1029 13.8701 14.3175 15.0187 11.4106C13.9456 11.9324 12.7305 12.1294 11.5154 11.9677C8.95798 11.6264 6.91913 9.72457 6.44162 7.23693C6.09211 5.40975 6.57781 3.59819 7.75189 2.23212ZM2.16043 5.18907H2.16864H2.16043Z\"
                                                fill=\"#003459\" />
                                        </svg>
                                    </div>
                                </div>
                                <script>
                                    window.addEventListener('DOMContentLoaded', () => {
                                        switchTheme(); 
                                    });
                                </script>
                            ";
        }
        // line 270
        echo "                        </div>
                    </div>
                </div>
                <div class=\"ds-header-phone-button button button-transparent me-3 d-flex align-items-center overflow-visible text-start ds-dropdown-box\">
                    <div class=\"ds-dropdown-toggle\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M14.8018 19.7497C14.3428 19.7497 13.8808 19.6877 13.4248 19.5627C7.25983 17.8707 2.37882 12.9927 0.68582 6.83174C0.30082 5.43074 0.511767 3.97074 1.28177 2.72274C2.05477 1.46874 3.32583 0.583733 4.76883 0.295733C5.72883 0.103733 6.67782 0.53174 7.16482 1.35274L8.72781 3.99272C9.48681 5.27472 9.10968 6.92573 7.86868 7.75173L6.73782 8.50374C7.79482 10.6737 9.57267 12.4567 11.7337 13.5127L12.4959 12.3757C13.3269 11.1367 14.9778 10.7657 16.2588 11.5287L18.9019 13.1047C19.7199 13.5927 20.1428 14.5477 19.9568 15.4797C19.6688 16.9227 18.7838 18.1937 17.5308 18.9667C16.6888 19.4847 15.7518 19.7497 14.8018 19.7497ZM5.22781 1.74773C5.17881 1.74773 5.12884 1.75274 5.08084 1.76274C4.02684 1.97374 3.11384 2.60872 2.55984 3.50972C2.01084 4.39972 1.85982 5.43873 2.13382 6.43373C3.68682 12.0867 8.16581 16.5637 13.8218 18.1157C14.8178 18.3887 15.8537 18.2367 16.7427 17.6887C17.6427 17.1337 18.2789 16.2197 18.4859 15.1837C18.5479 14.8727 18.4068 14.5537 18.1328 14.3907L15.4908 12.8147C14.8958 12.4607 14.1277 12.6337 13.7417 13.2087L12.6267 14.8737C12.4267 15.1717 12.0409 15.2857 11.7149 15.1477C8.75187 13.9087 6.34086 11.4927 5.10086 8.51873C4.96286 8.18673 5.07871 7.80473 5.37771 7.60573L7.03885 6.50072C7.61485 6.11772 7.7898 5.35072 7.4368 4.75572L5.87381 2.11672C5.73681 1.88472 5.48881 1.74773 5.22781 1.74773Z\" fill=\"#00171F\" />
                        </svg>
                        <span class=\"dark-text d-none d-md-inline fw-700 fsz-12\">";
        // line 278
        echo ($context["telephone"] ?? null);
        echo "</span>
                        <svg class=\"ds-arrow-down d-none d-md-inline\" width=\"8\" height=\"4\" viewBox=\"0 0 8 4\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M3.99802 4C3.81883 4 3.63961 3.93469 3.50312 3.8047L0.70328 1.13815C0.429595 0.8775 0.429595 0.456145 0.70328 0.195491C0.976964 -0.0651636 1.41938 -0.0651636 1.69307 0.195491L3.99802 2.3907L6.30296 0.195491C6.57665 -0.0651636 7.01907 -0.0651636 7.29275 0.195491C7.56644 0.456145 7.56644 0.8775 7.29275 1.13815L4.49291 3.8047C4.35642 3.93469 4.17721 4 3.99802 4Z\" fill=\"#00171F\" />
                        </svg>
                    </div>
                    <div class=\"ds-dropdown position-absolute\">
                        <div class=\"ds-dropdown-inner p-3 ds-dropdown-contacts\">
                            ";
        // line 285
        if ((array_key_exists("main_address_html", $context) && ($context["main_address_html"] ?? null))) {
            // line 286
            echo "                                <div class=\"ds-dropdown-title dark-text fsz-14 fw-500 mb-2 d-flex align-items-center\">
                                    <svg width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path
                                            d=\"M7.17949 0C3.22051 0 0 3.22051 0 7.17949C0 11.3789 3.85394 13.9241 6.4041 15.6086L6.83815 15.8966C6.94154 15.9656 7.06051 16 7.17949 16C7.29846 16 7.41744 15.9656 7.52082 15.8966L7.95488 15.6086C10.505 13.9241 14.359 11.3789 14.359 7.17949C14.359 3.22051 11.1385 0 7.17949 0ZM7.27713 14.5813L7.17949 14.6462L7.08184 14.5813C4.6121 12.9502 1.23077 10.7167 1.23077 7.17949C1.23077 3.89908 3.89908 1.23077 7.17949 1.23077C10.4599 1.23077 13.1282 3.89908 13.1282 7.17949C13.1282 10.7167 9.74605 12.951 7.27713 14.5813ZM7.17949 4.51282C5.70913 4.51282 4.51282 5.70913 4.51282 7.17949C4.51282 8.64985 5.70913 9.84615 7.17949 9.84615C8.64985 9.84615 9.84615 8.64985 9.84615 7.17949C9.84615 5.70913 8.64985 4.51282 7.17949 4.51282ZM7.17949 8.61539C6.38769 8.61539 5.74359 7.97128 5.74359 7.17949C5.74359 6.38769 6.38769 5.74359 7.17949 5.74359C7.97128 5.74359 8.61538 6.38769 8.61538 7.17949C8.61538 7.97128 7.97128 8.61539 7.17949 8.61539Z\"
                                            fill=\"#00171F\" />
                                    </svg>
                                    <span class=\"ps-2\">";
            // line 292
            echo ($context["oct_our_address"] ?? null);
            echo "</span>
                                </div>
                                <div class=\"secondary-text fw-400 fsz-12 mb-3\">";
            // line 294
            echo ($context["main_address_html"] ?? null);
            echo "</div>
                            ";
        }
        // line 296
        echo "                            ";
        if (((array_key_exists("contact_open", $context) && ($context["contact_open"] ?? null)) || (array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null))))) {
            // line 297
            echo "                                ";
            if ((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null)))) {
                // line 298
                echo "                                    <div class=\"ds-dropdown-title dark-text fsz-14 fw-500 mb-2 d-flex align-items-center\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M11.7349 15.9982C11.3583 15.9982 10.9793 15.9474 10.6052 15.8448C5.54826 14.4567 1.54302 10.4548 0.154075 5.40024C-0.161781 4.25085 0.0112814 3.05305 0.642994 2.02919C1.27717 1.0004 2.31995 0.275156 3.5038 0.0380589C4.28565 -0.118639 5.06995 0.23086 5.46949 0.905234L6.75177 3.07027C7.37446 4.12203 7.06506 5.47734 6.04694 6.15417L5.11917 6.77113C5.98634 8.55223 7.4449 10.0142 9.2178 10.8805L9.84312 9.94775C10.5232 8.93127 11.8793 8.62688 12.9303 9.25285L15.0986 10.5458C15.7697 10.9462 16.1175 11.7288 15.9641 12.4943C15.7278 13.6781 15.0018 14.7208 13.9738 15.355C13.283 15.7808 12.5143 15.9982 11.7349 15.9982ZM3.88035 1.22928C3.84015 1.22928 3.79915 1.2334 3.75978 1.2416C2.89507 1.41471 2.14686 1.93565 1.69154 2.67483C1.24113 3.405 1.11723 4.25741 1.34202 5.07371C2.61611 9.71229 6.2907 13.3844 10.9309 14.6577C11.7472 14.8817 12.5987 14.757 13.3272 14.3074C14.0656 13.8521 14.5875 13.1022 14.7573 12.2523C14.8082 11.9971 14.6925 11.7354 14.4685 11.6025L12.3001 10.3095C11.8095 10.0183 11.1803 10.161 10.8652 10.6328L9.95047 11.9988C9.78639 12.2432 9.46983 12.3368 9.20238 12.2235C6.77151 11.2079 4.79432 9.22496 3.7762 6.78508C3.66298 6.5127 3.75885 6.19931 4.00333 6.03605L5.36614 5.12949C5.83869 4.81528 5.98222 4.18603 5.69262 3.69789L4.41033 1.53283C4.29794 1.34168 4.09448 1.22928 3.88035 1.22928ZM10.3541 10.2899H10.3623H10.3541ZM12.7177 6.35682C12.7177 4.66022 11.337 3.2803 9.64122 3.2803C9.30157 3.2803 9.02592 3.55596 9.02592 3.8956C9.02592 4.23525 9.30157 4.51091 9.64122 4.51091C10.6585 4.51091 11.4871 5.3387 11.4871 6.35682C11.4871 6.69647 11.7628 6.97213 12.1024 6.97213C12.4421 6.97213 12.7177 6.69647 12.7177 6.35682ZM15.179 6.35682C15.179 3.30327 12.6948 0.819082 9.64122 0.819082C9.30157 0.819082 9.02592 1.09474 9.02592 1.43439C9.02592 1.77403 9.30157 2.04969 9.64122 2.04969C12.0163 2.04969 13.9484 3.98175 13.9484 6.35682C13.9484 6.69647 14.224 6.97213 14.5637 6.97213C14.9033 6.97213 15.179 6.69647 15.179 6.35682Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        <span class=\"ps-2\">";
                // line 304
                echo ($context["oct_telephones"] ?? null);
                echo "</span>
                                    </div>
                                    <ul class=\"ds-dropdown-links list-unstyled mb-2\">
                                        ";
                // line 307
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_contact_telephones"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_telephone"]) {
                    // line 308
                    echo "                                            <li>
                                                <a href=\"tel:";
                    // line 309
                    echo twig_replace_filter($context["oct_contact_telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                    echo "\" class=\"blue-link fsz-14\">";
                    echo $context["oct_contact_telephone"];
                    echo "</a>
                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_telephone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "                                    </ul>
                                    ";
                // line 313
                if ((array_key_exists("oct_popup_call_phone_status", $context) && ($context["oct_popup_call_phone_status"] ?? null))) {
                    // line 314
                    echo "                                        <button type=\"button\" class=\"button button-outline button-outline-primary button-small br-4 fw-400 fsz-10 ds-dropdown-contacts-button mb-3\" onclick=\"octPopupCallPhone();\">
                                            <svg class=\"me-0\" width=\"10\" height=\"11\" viewBox=\"0 0 10 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path
                                                    d=\"M9.43649 7.09222L8.08135 6.28399C7.42501 5.89321 6.57744 6.08348 6.15185 6.71837L5.76101 7.30145C4.65293 6.7599 3.74131 5.84552 3.19932 4.73267L3.77919 4.34702C4.41553 3.92394 4.60891 3.07725 4.21972 2.41928L3.41827 1.06539C3.16856 0.644353 2.68246 0.424856 2.18969 0.523321C1.44977 0.67153 0.798018 1.12539 0.401652 1.76797C0.00682322 2.40799 -0.10083 3.15673 0.0960712 3.87521C0.964181 7.03478 3.46699 9.53638 6.62818 10.4041C6.862 10.4682 7.09888 10.5 7.33423 10.5C7.82136 10.5 8.30233 10.3641 8.73357 10.0979C9.37606 9.70152 9.82987 9.04971 9.97755 8.30969C10.0734 7.83224 9.85645 7.343 9.43649 7.09222ZM9.2233 8.15943C9.11716 8.69072 8.79095 9.15894 8.32947 9.44408C7.87413 9.72511 7.34245 9.80306 6.83174 9.66306C3.93154 8.86663 1.63436 6.57118 0.838553 3.67213C0.698055 3.16135 0.775496 2.62902 1.057 2.1726C1.34159 1.71053 1.80974 1.38489 2.34968 1.27669C2.37481 1.27156 2.40043 1.26899 2.42504 1.26899C2.55939 1.26899 2.68655 1.33924 2.75629 1.45822L3.55773 2.81159C3.73874 3.11673 3.64903 3.51007 3.35368 3.70648L2.50191 4.27317C2.34808 4.37522 2.28918 4.57164 2.35995 4.74138C2.99577 6.26655 4.23205 7.50556 5.75138 8.14096C5.91854 8.21122 6.11639 8.15328 6.21895 8.00045L6.79067 7.14658C6.9886 6.8517 7.38242 6.76297 7.68751 6.94451L9.04228 7.75275C9.18278 7.83634 9.2556 7.99994 9.2233 8.15943ZM6.18414 4.10854C6.16466 4.06136 6.15435 4.01162 6.15435 3.96137V2.25209C6.15435 2.03977 6.32664 1.86746 6.53892 1.86746C6.75121 1.86746 6.9235 2.03977 6.9235 2.25209V3.03314L8.83096 1.12539C8.9812 0.975133 9.22478 0.975133 9.37502 1.12539C9.52526 1.27565 9.52526 1.51925 9.37502 1.66951L7.46756 3.57726H8.24797C8.46025 3.57726 8.63254 3.74957 8.63254 3.96188C8.63254 4.1742 8.46025 4.34651 8.24797 4.34651H6.53892C6.48867 4.34651 6.43888 4.33624 6.3917 4.31676C6.29787 4.27727 6.22311 4.20239 6.18414 4.10854Z\"
                                                    fill=\"#59AA45\" />
                                            </svg>
                                            <span class=\"button-text ps-1\">";
                    // line 320
                    echo ($context["oct_our_recall"] ?? null);
                    echo "</span>
                                        </button>
                                    ";
                }
                // line 323
                echo "                                ";
            }
            // line 324
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_open", [], "any", false, true, false, 324), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 324) && (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "contact_open", [], "any", false, false, false, 324)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
                // line 325
                echo "                                    <div class=\"ds-dropdown-title dark-text fsz-14 fw-500 mb-2 d-flex align-items-center\">
                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M7.25581 13.3953H2.7907C1.61712 13.3953 1.11628 12.8945 1.11628 11.7209V5.5814H13.3953V7.25581C13.3953 7.56391 13.6454 7.81395 13.9535 7.81395C14.2616 7.81395 14.5116 7.56391 14.5116 7.25581V3.90698C14.5116 2.10753 13.5204 1.11628 11.7209 1.11628H10.7907V0.55814C10.7907 0.250047 10.5407 0 10.2326 0C9.92447 0 9.67442 0.250047 9.67442 0.55814V1.11628H4.83721V0.55814C4.83721 0.250047 4.58716 0 4.27907 0C3.97098 0 3.72093 0.250047 3.72093 0.55814V1.11628H2.7907C0.991256 1.11628 0 2.10753 0 3.90698V11.7209C0 13.5204 0.991256 14.5116 2.7907 14.5116H7.25581C7.56391 14.5116 7.81395 14.2616 7.81395 13.9535C7.81395 13.6454 7.56391 13.3953 7.25581 13.3953ZM2.7907 2.23256H3.72093V2.7907C3.72093 3.09879 3.97098 3.34884 4.27907 3.34884C4.58716 3.34884 4.83721 3.09879 4.83721 2.7907V2.23256H9.67442V2.7907C9.67442 3.09879 9.92447 3.34884 10.2326 3.34884C10.5407 3.34884 10.7907 3.09879 10.7907 2.7907V2.23256H11.7209C12.8945 2.23256 13.3953 2.7334 13.3953 3.90698V4.46512H1.11628V3.90698C1.11628 2.7334 1.61712 2.23256 2.7907 2.23256ZM5.03815 8C5.03815 8.41079 4.7055 8.74419 4.29397 8.74419C3.88318 8.74419 3.54597 8.41079 3.54597 8C3.54597 7.58921 3.87573 7.25581 4.28652 7.25581H4.29397C4.70476 7.25581 5.03815 7.58921 5.03815 8ZM8.0149 8C8.0149 8.41079 7.68225 8.74419 7.27071 8.74419C6.85992 8.74419 6.52271 8.41079 6.52271 8C6.52271 7.58921 6.85247 7.25581 7.26326 7.25581H7.27071C7.6815 7.25581 8.0149 7.58921 8.0149 8ZM12.4651 8.93023C10.5161 8.93023 8.93023 10.5161 8.93023 12.4651C8.93023 14.4141 10.5161 16 12.4651 16C14.4141 16 16 14.4141 16 12.4651C16 10.5161 14.4141 8.93023 12.4651 8.93023ZM12.4651 14.8837C11.1315 14.8837 10.0465 13.7987 10.0465 12.4651C10.0465 11.1315 11.1315 10.0465 12.4651 10.0465C13.7987 10.0465 14.8837 11.1315 14.8837 12.4651C14.8837 13.7987 13.7987 14.8837 12.4651 14.8837ZM5.03815 10.9767C5.03815 11.3875 4.7055 11.7209 4.29397 11.7209C3.88318 11.7209 3.54597 11.3875 3.54597 10.9767C3.54597 10.566 3.87573 10.2326 4.28652 10.2326H4.29397C4.70476 10.2326 5.03815 10.566 5.03815 10.9767ZM13.6573 12.8677C13.8754 13.085 13.8754 13.4393 13.6573 13.6573C13.5487 13.766 13.4058 13.821 13.2629 13.821C13.12 13.821 12.9771 13.7667 12.8685 13.6573L12.0714 12.8603C11.9665 12.7554 11.9077 12.6139 11.9077 12.4658V11.3496C11.9077 11.0415 12.1578 10.7914 12.4658 10.7914C12.7739 10.7914 13.024 11.0415 13.024 11.3496V12.2344L13.6573 12.8677Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        <span class=\"ps-2\">";
                // line 331
                echo ($context["oct_working_hours"] ?? null);
                echo "</span>
                                    </div>
                                    <ul class=\"list-unstyled fsz-12 light-text fw-400 mb-3\">
                                        ";
                // line 334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_contact_opens"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["contact_open"]) {
                    // line 335
                    echo "                                            <li>";
                    echo $context["contact_open"];
                    echo "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_open'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 337
                echo "                                    </ul>
                                ";
            }
            // line 339
            echo "                            ";
        }
        // line 340
        echo "                            ";
        if ((array_key_exists("main_contact_email", $context) && ($context["main_contact_email"] ?? null))) {
            // line 341
            echo "                            <!-- Email here -->
                            <div class=\"ds-dropdown-title dark-text fsz-14 fw-500 mb-2 d-flex align-items-center\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path
                                        d=\"M8 0C3.58892 0 0 3.58892 0 8C0 12.4111 3.58892 16 8 16C8.33969 16 8.61539 15.7243 8.61539 15.3846C8.61539 15.0449 8.33969 14.7692 8 14.7692C4.26749 14.7692 1.23077 11.7325 1.23077 8C1.23077 4.26749 4.26749 1.23077 8 1.23077C11.7325 1.23077 14.7692 4.26749 14.7692 8C14.7692 9.34564 13.8552 10.6667 12.9231 10.6667C12.0509 10.6667 11.4872 9.94215 11.4872 8.82051V5.12821C11.4872 4.78851 11.2115 4.51282 10.8718 4.51282C10.5321 4.51282 10.2564 4.78851 10.2564 5.12821V5.36368C9.64677 4.84102 8.86482 4.51282 8 4.51282C6.07672 4.51282 4.51282 6.07672 4.51282 8C4.51282 9.92328 6.07672 11.4872 8 11.4872C9.01908 11.4872 9.92895 11.04 10.5673 10.3409C11.0448 11.3945 12.0041 11.8974 12.9231 11.8974C14.7364 11.8974 16 9.84369 16 8C16 3.58892 12.4111 0 8 0ZM8 10.2564C6.75528 10.2564 5.74359 9.2439 5.74359 8C5.74359 6.7561 6.75528 5.74359 8 5.74359C9.24472 5.74359 10.2564 6.7561 10.2564 8C10.2564 9.2439 9.24472 10.2564 8 10.2564Z\"
                                        fill=\"#00171F\" />
                                </svg>
                                <span class=\"ps-2\">E-mail</span>
                            </div>
                            <div class=\"mb-3\">
                                <a href=\"mailto:";
            // line 351
            echo ($context["main_contact_email"] ?? null);
            echo "\" class=\"blue-link fsz-14\">";
            echo ($context["main_contact_email"] ?? null);
            echo "</a>
                            </div>
                            ";
        }
        // line 354
        echo "                            <!-- Socials here -->
                            ";
        // line 355
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "socials", [], "any", true, true, false, 355) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "socials", [], "any", false, false, false, 355)))) {
            // line 356
            echo "                                
                                <div class=\"ds-dropdown-title dark-text fsz-14 fw-500 mb-2 d-flex align-items-center\">
                                    <svg width=\"14\" height=\"16\" viewBox=\"0 0 14 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path
                                            d=\"M13.0062 10.3994L7.20028 5.37356C6.64186 4.88905 5.86992 4.77408 5.19653 5.08614C4.52314 5.3982 4.10431 6.04695 4.10431 6.79425V14.4561C4.10431 15.1049 4.49846 15.6715 5.09794 15.9015C5.2786 15.9672 5.46752 16 5.64818 16C6.08343 16 6.494 15.8193 6.79785 15.4826L8.5963 13.4625C8.79339 13.2407 9.07259 13.1176 9.36001 13.1176H11.9961C12.6449 13.1176 13.2197 12.7234 13.4414 12.1075C13.6714 11.4998 13.4989 10.8264 13.0062 10.3994ZM12.2917 11.6804C12.2671 11.7379 12.1932 11.8857 11.9961 11.8857H9.36001C8.71947 11.8857 8.10357 12.165 7.66833 12.6413L5.86988 14.6614C5.73848 14.8092 5.58247 14.7682 5.52498 14.7436C5.4675 14.7189 5.31968 14.645 5.31968 14.4479V6.78604C5.31968 6.40007 5.60712 6.24404 5.69746 6.20298C5.74673 6.18656 5.84524 6.1455 5.97664 6.1455C6.10803 6.1455 6.24764 6.17834 6.38724 6.30153L12.1932 11.3273C12.341 11.4587 12.3082 11.6147 12.2835 11.6722L12.2917 11.6804ZM7.12635 3.67366C6.98674 3.3616 7.11813 3.00027 7.42197 2.85245L8.90836 2.16263C9.21221 2.02303 9.58175 2.15442 9.72957 2.45827C9.86917 2.77033 9.73779 3.13166 9.43394 3.27948L7.94756 3.96929C7.86544 4.01035 7.7751 4.02678 7.68477 4.02678C7.45483 4.02678 7.23311 3.89538 7.12635 3.67366ZM4.712 2.19548L4.85981 0.561277C4.89265 0.224581 5.20471 -0.0299932 5.52498 0.0028551C5.86168 0.0357034 6.11625 0.331338 6.0834 0.668034L5.93559 2.30224C5.91095 2.62251 5.63995 2.86066 5.31968 2.86066C5.30326 2.86066 5.28683 2.86066 5.26219 2.86066C4.9255 2.82781 4.67093 2.53218 4.70377 2.19548H4.712ZM3.0778 2.95921C3.35701 3.1563 3.4227 3.54226 3.22561 3.81326C3.10243 3.98572 2.91355 4.07605 2.71646 4.07605C2.59328 4.07605 2.47011 4.0432 2.36335 3.96108L1.01656 3.01669C0.737345 2.8196 0.671654 2.43363 0.868744 2.16263C1.06583 1.88342 1.45178 1.81773 1.72278 2.01482L3.06958 2.95921H3.0778ZM2.65897 5.75953C2.79858 6.07159 2.6672 6.43292 2.36335 6.58074L0.876964 7.27055C0.794843 7.31161 0.704504 7.32804 0.614171 7.32804C0.384233 7.32804 0.162513 7.19664 0.0557554 6.97492C-0.08385 6.66286 0.0475313 6.30153 0.351379 6.15371L1.83776 5.46389C2.14161 5.32429 2.51116 5.45568 2.65897 5.75953Z\"
                                            fill=\"#00171F\" />
                                    </svg>
                                    <span class=\"ps-2\">";
            // line 363
            echo ($context["text_socials_contact"] ?? null);
            echo "</span>
                                </div>
                                <div class=\"ds-socials d-flex align-items-center mb-3\">
                                    ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "socials", [], "any", false, false, false, 366));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 367
                echo "                                        <a rel=\"noopener noreferrer\" href=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 367) == "#") || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 367)))) ? ("javascript:;") : (twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 367)));
                echo "\" class=\"button button-light br-7 p-0\" aria-label=\"";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 367);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 367);
                echo "\" target=\"_blank\">
                                            <i class=\"";
                // line 368
                echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 368);
                echo "\"></i>
                                        </a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 371
            echo "                                </div>

                            ";
        }
        // line 374
        echo "                            <a href=\"";
        echo ($context["contact_link"] ?? null);
        echo "\" class=\"button button-outline button-outline-primary br-7 fw-400 w-100\">
                                <span class=\"button-text\">";
        // line 375
        echo ($context["oct_go_contact_text"] ?? null);
        echo "</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button type=\"button\" class=\"ds-header-search-toggle-button button button-transparent me-3 me-md-0 d-md-none\" aria-label=\"Search\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M19.2802 18.47L15.4392 14.629C16.7232 13.106 17.5002 11.143 17.5002 9C17.5002 4.175 13.5752 0.25 8.75021 0.25C3.92521 0.25 0.000213623 4.175 0.000213623 9C0.000213623 13.825 3.92521 17.75 8.75021 17.75C10.8932 17.75 12.8562 16.973 14.3792 15.689L18.2202 19.53C18.3662 19.676 18.5582 19.75 18.7502 19.75C18.9422 19.75 19.1342 19.677 19.2802 19.53C19.5732 19.238 19.5732 18.763 19.2802 18.47ZM1.50021 9C1.50021 5.002 4.75221 1.75 8.75021 1.75C12.7482 1.75 16.0002 5.002 16.0002 9C16.0002 12.998 12.7482 16.25 8.75021 16.25C4.75221 16.25 1.50021 12.998 1.50021 9Z\"
                            fill=\"#00171F\" />
                    </svg>
                </button>
                ";
        // line 387
        if (($context["product_views_count"] ?? null)) {
            // line 388
            echo "                    <button type=\"button\" class=\"ds-header-viewed-button d-none d-lg-block button button-transparent me-3 position-relative overflow-visible\" data-viewed=\"sidebar\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"16\" viewBox=\"0 0 19 16\" fill=\"none\">
                            <path d=\"M18.0244 6.22877C16.8124 4.199 14.0921 0.793945 9.5 0.793945C4.90786 0.793945 2.18755 4.199 0.975598 6.22877C0.341467 7.28842 0.341467 8.60571 0.975598 9.66629C2.18755 11.6961 4.90786 15.1011 9.5 15.1011C14.0921 15.1011 16.8124 11.6961 18.0244 9.66629C18.6585 8.60571 18.6585 7.28934 18.0244 6.22877ZM16.8363 8.95553C15.7748 10.7333 13.4091 13.7165 9.5 13.7165C5.59091 13.7165 3.22515 10.7342 2.16366 8.95553C1.79259 8.3334 1.79259 7.56076 2.16366 6.93863C3.22515 5.16085 5.59091 2.17761 9.5 2.17761C13.4091 2.17761 15.7748 5.15992 16.8363 6.93863C17.2083 7.56168 17.2083 8.3334 16.8363 8.95553ZM9.5 4.0246C7.33639 4.0246 5.57707 5.78484 5.57707 7.94753C5.57707 10.1102 7.33639 11.8705 9.5 11.8705C11.6636 11.8705 13.4229 10.1102 13.4229 7.94753C13.4229 5.78484 11.6636 4.0246 9.5 4.0246ZM9.5 10.4859C8.09974 10.4859 6.96163 9.34778 6.96163 7.94753C6.96163 6.54727 8.09974 5.40916 9.5 5.40916C10.9003 5.40916 12.0384 6.54727 12.0384 7.94753C12.0384 9.34778 10.9003 10.4859 9.5 10.4859Z\" fill=\"#00171F\"/>
                        </svg>
                        <span class=\"badge rounded-pill position-absolute\">";
            // line 392
            echo ($context["viewed_total"] ?? null);
            echo "</span>
                    </button>
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            setupViewedProductsSidebar();
                        });
                    </script>
                ";
        }
        // line 400
        echo "                <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 400)) {
            echo "data-wishlist-ids=\"";
            echo ($context["wishlist_ids"] ?? null);
            echo "\"";
        }
        echo " data-wishlist-text=\"";
        echo ($context["wishlist_text"] ?? null);
        echo "\" data-wishlist-text-in=\"";
        echo ($context["wishlist_text_in"] ?? null);
        echo "\" class=\"ds-header-wishlist-button d-none d-lg-block button button-transparent me-3 position-relative overflow-visible\">
                    <svg width=\"19\" height=\"18\" viewBox=\"0 0 19 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M9.50105 18C9.40318 18 9.30528 17.9786 9.21387 17.9348C8.91196 17.7898 1.80644 14.3171 0.667113 8.1326C0.226709 5.73994 0.668965 3.40564 1.84984 1.88967C2.80543 0.661721 4.17923 0.00880775 5.82359 5.05523e-05C5.8319 5.05523e-05 5.84021 5.05523e-05 5.8476 5.05523e-05C7.7237 5.05523e-05 8.8677 1.12586 9.50014 2.08429C10.1354 1.12197 11.2885 -0.00870664 13.1766 5.05523e-05C14.8219 0.00880775 16.1966 0.661721 17.1532 1.88967C18.3322 3.40467 18.7735 5.73894 18.3322 8.13355C17.1947 14.3181 10.0882 17.7918 9.7863 17.9358C9.69674 17.9786 9.59891 18 9.50105 18ZM5.8467 1.45863C5.84116 1.45863 5.83657 1.45863 5.83103 1.45863C4.59568 1.46447 3.61703 1.9208 2.92088 2.81501C1.99852 3.99917 1.6652 5.88296 2.02712 7.8543C2.90886 12.6455 8.20199 15.7591 9.50105 16.4577C10.8001 15.7591 16.0933 12.6455 16.9741 7.8543C17.3378 5.88199 17.0045 3.9982 16.084 2.81501C15.3879 1.92177 14.4092 1.46639 13.1711 1.45958C13.1655 1.45958 13.16 1.45958 13.1554 1.45958C10.9654 1.45958 10.1889 3.77248 10.1576 3.87076C10.0615 4.16558 9.7974 4.366 9.50195 4.366C9.5001 4.366 9.49915 4.366 9.49823 4.366C9.20186 4.36503 8.93781 4.16557 8.84364 3.8688C8.81317 3.7715 8.03579 1.45863 5.8467 1.45863Z\"
                            fill=\"#00171F\" />
                    </svg>
                    <span class=\"badge rounded-pill position-absolute\">";
        // line 406
        echo ($context["wishlist_total"] ?? null);
        echo "</span>
                </a>
                <a href=\"";
        // line 408
        echo ($context["compare_link"] ?? null);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 408)) {
            echo "data-compare-ids=\"";
            echo ($context["compare_ids"] ?? null);
            echo "\"";
        }
        echo " data-compare-text=\"";
        echo ($context["compare_text"] ?? null);
        echo "\" data-compare-text-in=\"";
        echo ($context["compare_text_in"] ?? null);
        echo "\" class=\"ds-header-compare-button d-none d-lg-block button button-transparent me-3 position-relative overflow-visible\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M20 9.9994V12.9994C20 15.0674 18.317 16.7494 16.25 16.7494H3.06104L4.78101 18.4694C5.07401 18.7624 5.07401 19.2374 4.78101 19.5304C4.63501 19.6764 4.44298 19.7504 4.25098 19.7504C4.05898 19.7504 3.86695 19.6774 3.72095 19.5304L0.720947 16.5304C0.651947 16.4614 0.597082 16.3785 0.559082 16.2865C0.483082 16.1035 0.483082 15.8965 0.559082 15.7135C0.597082 15.6215 0.651947 15.5384 0.720947 15.4694L3.72095 12.4694C4.01395 12.1764 4.48898 12.1764 4.78198 12.4694C5.07498 12.7624 5.07498 13.2374 4.78198 13.5304L3.06201 15.2504H16.25C17.49 15.2504 18.5 14.2414 18.5 13.0004V10.0004C18.5 9.58638 18.836 9.25037 19.25 9.25037C19.664 9.25037 20 9.5854 20 9.9994ZM1.25 10.7494C1.664 10.7494 2 10.4134 2 9.9994V6.9994C2 5.7584 3.01 4.7494 4.25 4.7494H17.439L15.719 6.46937C15.426 6.76237 15.426 7.2374 15.719 7.5304C15.865 7.6764 16.057 7.75037 16.249 7.75037C16.441 7.75037 16.6331 7.6774 16.7791 7.5304L19.7791 4.5304C19.8481 4.4614 19.9029 4.37851 19.9409 4.28651C20.0169 4.10351 20.0169 3.89651 19.9409 3.71351C19.9029 3.62151 19.8481 3.53837 19.7791 3.46937L16.7791 0.469369C16.4861 0.176369 16.011 0.176369 15.718 0.469369C15.425 0.762369 15.425 1.2374 15.718 1.5304L17.438 3.25037H4.25C2.183 3.25037 0.5 4.93237 0.5 7.00037V10.0004C0.5 10.4134 0.836 10.7494 1.25 10.7494Z\"
                            fill=\"#00171F\" />
                    </svg>
                    <span class=\"badge rounded-pill position-absolute\">";
        // line 414
        echo ($context["compare_total"] ?? null);
        echo "</span>
                </a>
                ";
        // line 416
        echo ($context["cart"] ?? null);
        echo "
            </div>
        </div>
    </div>
    ";
        // line 420
        if (($context["horizontal_menu"] ?? null)) {
            // line 421
            echo "        <div class=\"container-xl position-relative\">
            <div class=\"ds-menu-maincategories-desktop-box d-none d-xl-block\">
                ";
            // line 423
            echo ($context["horizontal_menu"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 427
        echo "</header>
<div class=\"ds-mobile-bottom-nav position-fixed d-flex align-items-center justify-content-between light-text py-2 px-3 d-lg-none\">
    <div class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-catalog d-flex flex-column align-items-center justify-content-center br-10\" data-sidebar=\"catalog\">
        <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
                <path
                    d=\"M12.7 6H10.3C9.1728 6 8.5 5.3272 8.5 4.2V1.8C8.5 0.6728 9.1728 0 10.3 0H12.7C13.8272 0 14.5 0.6728 14.5 1.8V4.2C14.5 5.3272 13.8272 6 12.7 6ZM10.3 1.2C9.8288 1.2 9.7 1.3288 9.7 1.8V4.2C9.7 4.6712 9.8288 4.8 10.3 4.8H12.7C13.1712 4.8 13.3 4.6712 13.3 4.2V1.8C13.3 1.3288 13.1712 1.2 12.7 1.2H10.3ZM4.7 6H2.3C1.1728 6 0.5 5.3272 0.5 4.2V1.8C0.5 0.6728 1.1728 0 2.3 0H4.7C5.8272 0 6.5 0.6728 6.5 1.8V4.2C6.5 5.3272 5.8272 6 4.7 6ZM2.3 1.2C1.8288 1.2 1.7 1.3288 1.7 1.8V4.2C1.7 4.6712 1.8288 4.8 2.3 4.8H4.7C5.1712 4.8 5.3 4.6712 5.3 4.2V1.8C5.3 1.3288 5.1712 1.2 4.7 1.2H2.3ZM12.7 14H10.3C9.1728 14 8.5 13.3272 8.5 12.2V9.8C8.5 8.6728 9.1728 8 10.3 8H12.7C13.8272 8 14.5 8.6728 14.5 9.8V12.2C14.5 13.3272 13.8272 14 12.7 14ZM10.3 9.2C9.8288 9.2 9.7 9.3288 9.7 9.8V12.2C9.7 12.6712 9.8288 12.8 10.3 12.8H12.7C13.1712 12.8 13.3 12.6712 13.3 12.2V9.8C13.3 9.3288 13.1712 9.2 12.7 9.2H10.3ZM4.7 14H2.3C1.1728 14 0.5 13.3272 0.5 12.2V9.8C0.5 8.6728 1.1728 8 2.3 8H4.7C5.8272 8 6.5 8.6728 6.5 9.8V12.2C6.5 13.3272 5.8272 14 4.7 14ZM2.3 9.2C1.8288 9.2 1.7 9.3288 1.7 9.8V12.2C1.7 12.6712 1.8288 12.8 2.3 12.8H4.7C5.1712 12.8 5.3 12.6712 5.3 12.2V9.8C5.3 9.3288 5.1712 9.2 4.7 9.2H2.3Z\"
                    fill=\"#00A8E8\" />
            </svg>
        </div>
        <div class=\"ds-mobile-bottom-nav-item-title\">";
        // line 437
        echo ($context["oct_catalog"] ?? null);
        echo "</div>
    </div>
    ";
        // line 439
        if ( !($context["oct_home"] ?? null)) {
            // line 440
            echo "        <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-home d-flex flex-column align-items-center justify-content-center br-10\">
            <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
                    <path
                        d=\"M14.3039 4.90633L8.98225 0.529646C8.12284 -0.175396 6.87724 -0.176114 6.01783 0.529646L0.696278 4.90563C0.467247 5.09445 0.433483 5.43336 0.622308 5.66382C0.811133 5.89429 1.15075 5.9259 1.3805 5.73779L1.93545 5.28118V11.307C1.93545 13.0431 2.89178 13.9994 4.62783 13.9994H10.3716C12.1076 13.9994 13.0639 13.0431 13.0639 11.307V5.28118L13.6189 5.73779C13.7194 5.82036 13.8408 5.86049 13.9614 5.86049C14.1165 5.86049 14.2708 5.79376 14.3771 5.66452C14.5666 5.43406 14.5329 5.09516 14.3039 4.90633ZM8.75613 12.9225H6.24325V10.2301C6.24325 9.53724 6.80685 8.97364 7.49969 8.97364C8.19253 8.97364 8.75613 9.53724 8.75613 10.2301V12.9225ZM11.987 11.307C11.987 12.4393 11.5038 12.9225 10.3716 12.9225H9.83308V10.2301C9.83308 8.94348 8.78629 7.89669 7.49969 7.89669C6.2131 7.89669 5.1663 8.94348 5.1663 10.2301V12.9225H4.62783C3.49559 12.9225 3.0124 12.4393 3.0124 11.307V4.3959L6.70206 1.36251C7.16371 0.982708 7.83646 0.982708 8.29811 1.36251L11.9877 4.3966V11.307H11.987Z\"
                        fill=\"#9CA3AF\" />
                </svg>
            </div>
            <div class=\"ds-mobile-bottom-nav-item-title\">";
            // line 448
            echo ($context["oct_main_page_text"] ?? null);
            echo "</div>
        </a>
    ";
        }
        // line 451
        echo "    ";
        if (($context["product_views_count"] ?? null)) {
            // line 452
            echo "        <div class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-viewed d-flex flex-column align-items-center justify-content-center br-10 position-relative\" data-viewed=\"sidebar\">
            <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"12\" viewBox=\"0 0 15 12\" fill=\"none\">
                    <path
                        d=\"M14.1301 4.68188C13.1875 3.12525 11.0717 0.513916 7.5 0.513916C3.92834 0.513916 1.81254 3.12525 0.869909 4.68188C0.376697 5.49453 0.376697 6.50476 0.869909 7.31812C1.81254 8.87475 3.92834 11.4861 7.5 11.4861C11.0717 11.4861 13.1875 8.87475 14.1301 7.31812C14.6233 6.50476 14.6233 5.49524 14.1301 4.68188ZM13.206 6.77304C12.3804 8.13642 10.5404 10.4243 7.5 10.4243C4.4596 10.4243 2.61956 8.13712 1.79395 6.77304C1.50535 6.29592 1.50535 5.70339 1.79395 5.22627C2.61956 3.86289 4.4596 1.57505 7.5 1.57505C10.5404 1.57505 12.3804 3.86218 13.206 5.22627C13.4954 5.70409 13.4954 6.29592 13.206 6.77304ZM7.5 2.9915C5.81719 2.9915 4.44883 4.34143 4.44883 6C4.44883 7.65857 5.81719 9.0085 7.5 9.0085C9.18281 9.0085 10.5512 7.65857 10.5512 6C10.5512 4.34143 9.18281 2.9915 7.5 2.9915ZM7.5 7.94667C6.41091 7.94667 5.52571 7.07386 5.52571 6C5.52571 4.92614 6.41091 4.05333 7.5 4.05333C8.58909 4.05333 9.47429 4.92614 9.47429 6C9.47429 7.07386 8.58909 7.94667 7.5 7.94667Z\"
                        fill=\"#9CA3AF\" />
                </svg>
            </div>
            <div class=\"ds-mobile-bottom-nav-item-title\">";
            // line 460
            echo ($context["oct_sidebar_views"] ?? null);
            echo "</div>
            <div class=\"ds-mobile-bottom-nav-item-badge d-flex align-items-center justify-content-center position-absolute\">";
            // line 461
            echo ($context["viewed_total"] ?? null);
            echo "</div>
        </div>
    ";
        }
        // line 464
        echo "    <a href=\"";
        echo ($context["wishlist_link"] ?? null);
        echo "\" class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-wishlist d-flex flex-column align-items-center justify-content-center br-10 position-relative\">
        <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
                <path
                    d=\"M7.49997 13C7.4293 13 7.35861 12.9853 7.29261 12.9553C7.07461 12.856 1.94397 10.4767 1.12131 6.23934C0.803307 4.6 1.12264 3.00066 1.97531 1.96199C2.66531 1.12066 3.65728 0.673317 4.84461 0.667317C4.85061 0.667317 4.85662 0.667317 4.86195 0.667317C6.21662 0.667317 7.04265 1.43867 7.49932 2.09534C7.95798 1.436 8.79061 0.661317 10.1539 0.667317C11.3419 0.673317 12.3346 1.12066 13.0253 1.96199C13.8766 2.99999 14.1953 4.59932 13.8766 6.23999C13.0553 10.4773 7.92394 12.8573 7.70594 12.956C7.64128 12.9853 7.57064 13 7.49997 13ZM4.8613 1.66667C4.8573 1.66667 4.85399 1.66667 4.84999 1.66667C3.95799 1.67067 3.25133 1.98332 2.74867 2.59599C2.08267 3.40732 1.84199 4.698 2.10332 6.04866C2.73999 9.33133 6.56197 11.4647 7.49997 11.9433C8.43797 11.4647 12.26 9.33133 12.896 6.04866C13.1586 4.69733 12.918 3.40665 12.2533 2.59599C11.7506 1.98399 11.044 1.67198 10.15 1.66732C10.146 1.66732 10.142 1.66732 10.1386 1.66732C8.55731 1.66732 7.99668 3.252 7.97401 3.31933C7.90468 3.52133 7.71395 3.65865 7.50062 3.65865C7.49929 3.65865 7.4986 3.65865 7.49793 3.65865C7.28393 3.65798 7.09328 3.52133 7.02528 3.31799C7.00328 3.25133 6.44196 1.66667 4.8613 1.66667Z\"
                    fill=\"#9CA3AF\" />
            </svg>
        </div>
        <div class=\"ds-mobile-bottom-nav-item-title\">";
        // line 472
        echo ($context["oct_wishlist"] ?? null);
        echo "</div>
        <div class=\"ds-mobile-bottom-nav-item-badge d-flex align-items-center justify-content-center position-absolute\">";
        // line 473
        echo ($context["wishlist_total"] ?? null);
        echo "</div>
    </a>
    <a href=\"";
        // line 475
        echo ($context["compare_link"] ?? null);
        echo "\" class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-compare d-flex flex-column align-items-center justify-content-center br-10 position-relative\">
        <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
                <path
                    d=\"M14 7.00002V9.00002C14 10.3787 12.878 11.5 11.5 11.5H2.70736L3.854 12.6467C4.04934 12.842 4.04934 13.1587 3.854 13.354C3.75667 13.4514 3.62865 13.5007 3.50065 13.5007C3.37265 13.5007 3.24463 13.452 3.1473 13.354L1.1473 11.354C1.1013 11.308 1.06472 11.2528 1.03939 11.1914C0.988721 11.0694 0.988721 10.9314 1.03939 10.8094C1.06472 10.7481 1.1013 10.6927 1.1473 10.6467L3.1473 8.64667C3.34263 8.45133 3.65932 8.45133 3.85466 8.64667C4.04999 8.842 4.04999 9.15869 3.85466 9.35402L2.70801 10.5007H11.5C12.3267 10.5007 13 9.82801 13 9.00067V7.00067C13 6.72467 13.224 6.50067 13.5 6.50067C13.776 6.50067 14 6.72402 14 7.00002ZM1.5 7.50002C1.776 7.50002 2 7.27602 2 7.00002V5.00002C2 4.17269 2.67333 3.50002 3.5 3.50002H12.2926L11.146 4.64667C10.9507 4.842 10.9507 5.15869 11.146 5.35402C11.2433 5.45136 11.3713 5.50067 11.4993 5.50067C11.6273 5.50067 11.7554 5.45202 11.8527 5.35402L13.8527 3.35402C13.8987 3.30802 13.9353 3.25276 13.9606 3.19143C14.0113 3.06943 14.0113 2.93143 13.9606 2.80943C13.9353 2.7481 13.8987 2.69267 13.8527 2.64667L11.8527 0.646668C11.6574 0.451335 11.3407 0.451335 11.1453 0.646668C10.95 0.842001 10.95 1.15869 11.1453 1.35402L12.292 2.50067H3.5C2.122 2.50067 1 3.622 1 5.00067V7.00067C1 7.27601 1.224 7.50002 1.5 7.50002Z\"
                    fill=\"#9CA3AF\" />
            </svg>
        </div>
        <div class=\"ds-mobile-bottom-nav-item-title\">";
        // line 483
        echo ($context["oct_compare"] ?? null);
        echo "</div>
        <div class=\"ds-mobile-bottom-nav-item-badge d-flex align-items-center justify-content-center position-absolute\">";
        // line 484
        echo ($context["compare_total"] ?? null);
        echo "</div>
    </a>
    ";
        // line 486
        if ((array_key_exists("oct_feedback_data", $context) && ($context["oct_feedback_data"] ?? null))) {
            // line 487
            echo "        <div class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-contacts ds_fixed_contact_button d-flex flex-column align-items-center justify-content-center br-10\">
            <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"12\" viewBox=\"0 0 15 12\" fill=\"none\">
                    <path
                        d=\"M11.8077 11.9231H3.19231C1.45631 11.9231 0.5 10.9668 0.5 9.23077V2.76923C0.5 1.03323 1.45631 0.0769196 3.19231 0.0769196H11.8077C13.5437 0.0769196 14.5 1.03323 14.5 2.76923V9.23077C14.5 10.9668 13.5437 11.9231 11.8077 11.9231ZM3.19231 1.15384C2.0601 1.15384 1.57692 1.63702 1.57692 2.76923V9.23077C1.57692 10.363 2.0601 10.8462 3.19231 10.8462H11.8077C12.9399 10.8462 13.4231 10.363 13.4231 9.23077V2.76923C13.4231 1.63702 12.9399 1.15384 11.8077 1.15384H3.19231ZM8.23881 6.48748L11.7653 3.92297C12.0058 3.74851 12.0589 3.41108 11.8838 3.17056C11.7093 2.93077 11.3734 2.8762 11.1315 3.0521L7.60482 5.61661C7.54164 5.66256 7.45766 5.66256 7.39448 5.61661L3.86784 3.0521C3.62517 2.8762 3.29 2.93149 3.11554 3.17056C2.94036 3.41108 2.99351 3.74779 3.23402 3.92297L6.76049 6.4882C6.98162 6.64902 7.24084 6.72871 7.4993 6.72871C7.75776 6.72871 8.0184 6.6483 8.23881 6.48748Z\"
                        fill=\"#9CA3AF\" />
                </svg>
            </div>
            <div class=\"ds-mobile-bottom-nav-item-title\">";
            // line 495
            echo ($context["oct_menu_contacts"] ?? null);
            echo "</div>
        </div>
    ";
        } else {
            // line 498
            echo "        <a href=\"";
            echo ($context["contact_link"] ?? null);
            echo "\" class=\"ds-mobile-bottom-nav-item ds-mobile-bottom-nav-item-contacts ds_fixed_contact_button d-flex flex-column align-items-center justify-content-center br-10\">
            <div class=\"ds-mobile-bottom-nav-item-icon mb-1\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"12\" viewBox=\"0 0 15 12\" fill=\"none\">
                    <path
                        d=\"M11.8077 11.9231H3.19231C1.45631 11.9231 0.5 10.9668 0.5 9.23077V2.76923C0.5 1.03323 1.45631 0.0769196 3.19231 0.0769196H11.8077C13.5437 0.0769196 14.5 1.03323 14.5 2.76923V9.23077C14.5 10.9668 13.5437 11.9231 11.8077 11.9231ZM3.19231 1.15384C2.0601 1.15384 1.57692 1.63702 1.57692 2.76923V9.23077C1.57692 10.363 2.0601 10.8462 3.19231 10.8462H11.8077C12.9399 10.8462 13.4231 10.363 13.4231 9.23077V2.76923C13.4231 1.63702 12.9399 1.15384 11.8077 1.15384H3.19231ZM8.23881 6.48748L11.7653 3.92297C12.0058 3.74851 12.0589 3.41108 11.8838 3.17056C11.7093 2.93077 11.3734 2.8762 11.1315 3.0521L7.60482 5.61661C7.54164 5.66256 7.45766 5.66256 7.39448 5.61661L3.86784 3.0521C3.62517 2.8762 3.29 2.93149 3.11554 3.17056C2.94036 3.41108 2.99351 3.74779 3.23402 3.92297L6.76049 6.4882C6.98162 6.64902 7.24084 6.72871 7.4993 6.72871C7.75776 6.72871 8.0184 6.6483 8.23881 6.48748Z\"
                        fill=\"#9CA3AF\" />
                </svg>
            </div>
            <div class=\"ds-mobile-bottom-nav-item-title\">";
            // line 506
            echo ($context["oct_menu_contacts"] ?? null);
            echo "</div>
        </a>
    ";
        }
        // line 509
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/common/header.twig";
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
        return array (  1105 => 509,  1099 => 506,  1087 => 498,  1081 => 495,  1071 => 487,  1069 => 486,  1064 => 484,  1060 => 483,  1049 => 475,  1044 => 473,  1040 => 472,  1028 => 464,  1022 => 461,  1018 => 460,  1008 => 452,  1005 => 451,  999 => 448,  987 => 440,  985 => 439,  980 => 437,  968 => 427,  961 => 423,  957 => 421,  955 => 420,  948 => 416,  943 => 414,  924 => 408,  919 => 406,  899 => 400,  888 => 392,  882 => 388,  880 => 387,  865 => 375,  860 => 374,  855 => 371,  846 => 368,  837 => 367,  833 => 366,  827 => 363,  818 => 356,  816 => 355,  813 => 354,  805 => 351,  793 => 341,  790 => 340,  787 => 339,  783 => 337,  774 => 335,  770 => 334,  764 => 331,  756 => 325,  753 => 324,  750 => 323,  744 => 320,  736 => 314,  734 => 313,  731 => 312,  720 => 309,  717 => 308,  713 => 307,  707 => 304,  699 => 298,  696 => 297,  693 => 296,  688 => 294,  683 => 292,  675 => 286,  673 => 285,  663 => 278,  653 => 270,  626 => 247,  623 => 246,  619 => 244,  608 => 242,  604 => 241,  601 => 240,  598 => 239,  594 => 237,  588 => 235,  585 => 234,  579 => 232,  577 => 231,  574 => 230,  571 => 229,  568 => 228,  562 => 225,  554 => 219,  547 => 215,  540 => 211,  535 => 209,  531 => 208,  525 => 205,  519 => 204,  511 => 198,  508 => 197,  506 => 196,  494 => 187,  484 => 180,  480 => 178,  474 => 176,  471 => 175,  463 => 173,  460 => 172,  439 => 169,  434 => 168,  413 => 166,  410 => 165,  408 => 164,  395 => 156,  386 => 153,  380 => 150,  376 => 149,  372 => 148,  365 => 144,  361 => 143,  357 => 142,  346 => 134,  342 => 133,  336 => 129,  334 => 128,  328 => 125,  325 => 124,  323 => 123,  307 => 110,  303 => 108,  301 => 107,  289 => 105,  282 => 101,  261 => 86,  253 => 84,  249 => 83,  238 => 81,  234 => 80,  225 => 78,  221 => 77,  211 => 74,  207 => 73,  205 => 72,  194 => 70,  190 => 69,  184 => 67,  182 => 66,  176 => 64,  174 => 63,  168 => 61,  166 => 60,  161 => 59,  155 => 56,  148 => 51,  146 => 50,  140 => 48,  138 => 47,  112 => 23,  110 => 22,  102 => 20,  100 => 19,  87 => 15,  85 => 14,  81 => 13,  79 => 12,  75 => 11,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/header.twig", "");
    }
}
