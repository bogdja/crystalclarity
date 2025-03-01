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

/* extension/module/ocfilter/setting_form.twig */
class __TwigTemplate_2d4812b8b176eb02be1a4b0fef26a2706e3270ee7701e841ef565e243b2075b8 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\" class=\"ocf-page\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" onclick=\"\$('#form-ocfilter').attr('action', '";
        // line 6
        echo ($context["save"] ?? null);
        echo "').submit();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <button type=\"button\" onclick=\"\$('#form-ocfilter').attr('action', '";
        // line 7
        echo ($context["apply"] ?? null);
        echo "').submit();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title_setting"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <ul class=\"list-inline pull-right\">
          <li><a href=\"";
        // line 33
        echo ($context["filter_list"] ?? null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-code-fork\"></i> ";
        echo ($context["text_filter_list"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo ($context["filter_page_list"] ?? null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        echo ($context["text_filter_page_list"] ?? null);
        echo "</a></li>
          <li><a href=\"https://ocfilter.com/documentation/4.8/#nav-setting-general\" target=\"_blank\"><i class=\"fa fa-fw fa-info-circle\"></i> ";
        // line 35
        echo ($context["text_documentation"] ?? null);
        echo "</a></li>
          <li><a href=\"https://ocfilter.com/faq/4.8/\" target=\"_blank\"><i class=\"fa fa-fw fa-question-circle\"></i> ";
        // line 36
        echo ($context["text_faq"] ?? null);
        echo "</a></li>
        </ul>
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 38
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocfilter\" class=\"form-horizontal\">
          <div role=\"tabs\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-asterisk\"></i> ";
        // line 44
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li new-feature><a href=\"#tab-special-filter\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-sliders\"></i> ";
        // line 45
        echo ($context["tab_special_filter"] ?? null);
        echo "</a></li>
              <li new-feature><a href=\"#tab-seo\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-globe\"></i> ";
        // line 46
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-appearance\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-tv\"></i> ";
        // line 47
        echo ($context["tab_appearance"] ?? null);
        echo "</a></li>
              <li new-feature><a href=\"#tab-placement\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-arrows-alt\"></i> ";
        // line 48
        echo ($context["tab_placement"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-copy\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-files-o\"></i> ";
        // line 49
        echo ($context["tab_copy"] ?? null);
        echo "</a></li>
            </ul>

            <div class=\"tab-content\">
              <div id=\"tab-general\" class=\"tab-pane active\">
                ";
        // line 54
        $this->loadTemplate("extension/module/ocfilter/setting_form/tab_general.twig", "extension/module/ocfilter/setting_form.twig", 54)->display($context);
        // line 55
        echo "              </div>

              <div id=\"tab-special-filter\" class=\"tab-pane\">
                ";
        // line 58
        $this->loadTemplate("extension/module/ocfilter/setting_form/tab_special_filter.twig", "extension/module/ocfilter/setting_form.twig", 58)->display($context);
        // line 59
        echo "              </div>

              <div id=\"tab-seo\" class=\"tab-pane\">
                ";
        // line 62
        $this->loadTemplate("extension/module/ocfilter/setting_form/tab_seo.twig", "extension/module/ocfilter/setting_form.twig", 62)->display($context);
        // line 63
        echo "              </div>

              <div id=\"tab-appearance\" class=\"tab-pane\">
                ";
        // line 66
        $this->loadTemplate("extension/module/ocfilter/setting_form/tab_appearance.twig", "extension/module/ocfilter/setting_form.twig", 66)->display($context);
        // line 67
        echo "              </div>

              <div id=\"tab-placement\" class=\"tab-pane\">
                ";
        // line 70
        $this->loadTemplate("extension/module/ocfilter/setting_form/tab_placement.twig", "extension/module/ocfilter/setting_form.twig", 70)->display($context);
        // line 71
        echo "              </div>

              <div id=\"tab-copy\" class=\"tab-pane\">
                ";
        // line 74
        $this->loadTemplate("extension/module/ocfilter/setting_form/tab_copy.twig", "extension/module/ocfilter/setting_form.twig", 74)->display($context);
        // line 75
        echo "              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 
</div>
";
        // line 83
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/setting_form.twig";
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
        return array (  223 => 83,  213 => 75,  211 => 74,  206 => 71,  204 => 70,  199 => 67,  197 => 66,  192 => 63,  190 => 62,  185 => 59,  183 => 58,  178 => 55,  176 => 54,  168 => 49,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  139 => 38,  134 => 36,  130 => 35,  124 => 34,  118 => 33,  113 => 30,  105 => 26,  102 => 25,  94 => 21,  92 => 20,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/setting_form.twig", "");
    }
}
