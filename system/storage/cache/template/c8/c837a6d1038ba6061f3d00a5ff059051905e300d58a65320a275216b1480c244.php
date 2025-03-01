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

/* octemplates/module/oct_stock_notifier.twig */
class __TwigTemplate_bcf8558c2f7b5fd49226542af38362f26f23d9e476abb807c824cd23fed1c4df extends Template
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
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t";
            // line 27
            echo ($context["error_warning_info"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 32
            echo "\t\t\t<script>
\t\t\t\tusNotify('success', '";
            // line 33
            echo ($context["success"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 36
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t";
        // line 40
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_settings"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-email-templates\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_email_templates"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-subscribers\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_subscribers"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t<form
\t\t\t\t\t\t\taction=\"";
        // line 57
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<!-- Settings Form Here -->
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"oct_stock_notifier_status\">";
        // line 61
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stock_notifier_status\" ";
        // line 64
        if (($context["oct_stock_notifier_status"] ?? null)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_stock_notifier_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_stock_notifier_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"all_settings\" ";
        // line 76
        if (( !array_key_exists("oct_stock_notifier_status", $context) || (array_key_exists("oct_stock_notifier_status", $context) &&  !($context["oct_stock_notifier_status"] ?? null)))) {
            echo " style=\"display:none\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"notify_on_edit\">";
        // line 79
        echo ($context["entry_notify_on_edit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stock_notifier_data[notify_on_edit]\" ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "notify_on_edit", [], "any", false, false, false, 82)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"notify_on_edit\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"notify_on_edit\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"admin_alert\">";
        // line 96
        echo ($context["entry_admin_alert"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stock_notifier_data[admin_alert]\" ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "admin_alert", [], "any", false, false, false, 99)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"admin_alert\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"admin_alert\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"email\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_email"] ?? null);
        echo "\">";
        echo ($context["entry_email"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "email", [], "any", false, false, false, 116)) {
            echo "  has-error";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stock_notifier_data[email]\" value=\"";
        // line 117
        echo twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "email", [], "any", false, false, false, 117);
        echo "\" id=\"email\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "email", [], "any", false, false, false, 118)) {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "email", [], "any", false, false, false, 119);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 126
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_stock_notifier_data[name]\" id=\"input-name\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "name", [], "any", false, false, false, 129) == 1)) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 131
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 132
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 133
($context["oct_stock_notifier_data"] ?? null), "name", [], "any", false, false, false, 133) == 2)) {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 135
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 136
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 139
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 140
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-phone\">";
        // line 148
        echo ($context["entry_phone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_stock_notifier_data[phone]\" id=\"input-phone\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "phone", [], "any", false, false, false, 151) == 1)) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 153
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 154
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 155
($context["oct_stock_notifier_data"] ?? null), "phone", [], "any", false, false, false, 155) == 2)) {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 157
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 158
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 161
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 162
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-mask\">";
        // line 170
        echo ($context["entry_mask"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stock_notifier_data[mask]\" value=\"";
        // line 172
        echo (($__internal_compile_0 = ($context["oct_stock_notifier_data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["mask"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_mask_info"] ?? null);
        echo "\" id=\"input-mask\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"cron_secret\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 179
        echo ($context["entry_cron_secret"] ?? null);
        echo "\">";
        echo ($context["entry_cron_secret"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stock_notifier_data[cron_secret]\" value=\"";
        // line 182
        echo twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "cron_secret", [], "any", false, false, false, 182);
        echo "\" id=\"cron_secret\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 186
        if (($context["cron_url"] ?? null)) {
            // line 187
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cron\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 190
            echo ($context["entry_cron_input"] ?? null);
            echo "\">";
            echo ($context["entry_cron"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"/usr/bin/wget -O - -q -t 1 '";
            // line 194
            echo ($context["cron_url"] ?? null);
            echo "'\" id=\"input-cron\" class=\"form-control\" readonly=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"clipboard-button\" class=\"btn btn-info\" type=\"button\" data-toggle=\"tooltip\" title=\"\" onclick=\"copyToClipboard('input-cron');\" data-original-title=\"";
            // line 196
            echo ($context["text_copy"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-files-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 205
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-email-templates\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"custom_message\">";
        // line 210
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stock_notifier_data[custom_message]\" ";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "custom_message", [], "any", false, false, false, 213)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"custom_message\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"custom_message\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 227
        echo ($context["text_email_heading"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t";
        // line 229
        echo ($context["entry_email_codes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"oct_stock_notifier_email_template\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#oct_stock_notifier_email_template";
            // line 236
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 236);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 236);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 236);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 236);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 237
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 237);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 244
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"oct_stock_notifier_email_template";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 244);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group";
            // line 246
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "subject", [], "any", false, true, false, 246), (($__internal_compile_1 = $context["language"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["language_id"] ?? null) : null), [], "array", true, true, false, 246)) {
                echo " has-error";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 247
            echo ($context["text_notify_subject"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stock_notifier_data[subject][";
            // line 248
            echo (($__internal_compile_2 = $context["language"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["language_id"] ?? null) : null);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "subject", [], "any", false, true, false, 248), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 248), [], "array", true, true, false, 248)) ? ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "subject", [], "any", false, false, false, 248)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 248)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_notify_subject"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 250
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "subject", [], "any", false, true, false, 250), (($__internal_compile_4 = $context["language"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["language_id"] ?? null) : null), [], "array", true, true, false, 250)) {
                // line 251
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "subject", [], "any", false, false, false, 251)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[(($__internal_compile_6 = $context["language"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["language_id"] ?? null) : null)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"oct_stock_notifier_data_message_";
            // line 255
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 255);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"oct_stock_notifier_data[message][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 255);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "message", [], "any", false, true, false, 255), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 255), [], "array", true, true, false, 255)) ? ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["oct_stock_notifier_data"] ?? null), "message", [], "any", false, false, false, 255)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 255)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 256
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "message", [], "any", false, true, false, 256), (($__internal_compile_8 = $context["language"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["language_id"] ?? null) : null), [], "array", true, true, false, 256)) {
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["error_message"] ?? null), "message", [], "any", false, false, false, 257)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[(($__internal_compile_10 = $context["language"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["language_id"] ?? null) : null)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-subscribers\">
\t\t\t\t\t\t<!-- Виводимо список підписників -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<form action=\"";
        // line 271
        echo ($context["action"] ?? null);
        echo "\" method=\"GET\" id=\"filter-stock-form\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4\" for=\"filter_email\">";
        // line 274
        echo ($context["text_filter_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_email\" value=\"";
        // line 276
        echo ($context["filter_email"] ?? null);
        echo "\" id=\"filter_email\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4\" for=\"filter_product\">";
        // line 281
        echo ($context["text_filter_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_product\" value=\"";
        // line 283
        echo ($context["filter_product"] ?? null);
        echo "\" id=\"filter_product\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4\" for=\"filter_phone\">";
        // line 288
        echo ($context["text_filter_phone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_phone\" value=\"";
        // line 290
        echo ($context["filter_phone"] ?? null);
        echo "\" id=\"filter_phone\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4\" for=\"filter_status\">";
        // line 295
        echo ($context["text_filter_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_status\" id=\"filter_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 298
        echo ($context["text_all"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 299
        echo (((($context["filter_status"] ?? null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_status_pending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 300
        echo (((($context["filter_status"] ?? null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_status_processed"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_token\" value=\"";
        // line 305
        echo ($context["user_token"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 307
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 312
        if (($context["subscribers"] ?? null)) {
            // line 313
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" disabled id=\"deleteButton\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 317
            echo ($context["button_delete_selected"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"deleteAllSelected();\">";
            // line 322
            echo ($context["button_delete_selected"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t<div class=\"table-responsive\" id=\"subscribers\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);checkCheckBoxes();\"/></th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 332
            echo ($context["text_email"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 333
            echo ($context["text_phone"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 334
            echo ($context["text_product_name"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 335
            echo ($context["text_subscribed_date"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 336
            echo ($context["text_notified_date"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 337
            echo ($context["text_status"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscribers"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["subscriber"]) {
                // line 343
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr ";
                if (twig_get_attribute($this->env, $this->source, $context["subscriber"], "status", [], "any", false, false, false, 343)) {
                    echo " style=\"background-color: #D5F4C7;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 344
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "subscription_id", [], "any", false, false, false, 344);
                echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 346
                if (twig_get_attribute($this->env, $this->source, $context["subscriber"], "user_link", [], "any", false, false, false, 346)) {
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "user_link", [], "any", false, false, false, 347);
                    echo "\" target=\"_blank\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "customer_name", [], "any", false, false, false, 347);
                    echo "</a><br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "customer_name", [], "any", false, false, false, 349);
                    echo "<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 351
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "email", [], "any", false, false, false, 351);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small\">";
                // line 354
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "phone", [], "any", false, false, false, 354);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 357
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "product_link", [], "any", false, false, false, 357);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "product_name", [], "any", false, false, false, 357);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 359
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "subscribed_date", [], "any", false, false, false, 359);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "notified_date", [], "any", false, false, false, 360);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 361
                echo ((twig_get_attribute($this->env, $this->source, $context["subscriber"], "status", [], "any", false, false, false, 361)) ? (($context["text_status_processed"] ?? null)) : (($context["text_status_pending"] ?? null)));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"deleteSelected(";
                // line 363
                echo twig_get_attribute($this->env, $this->source, $context["subscriber"], "subscription_id", [], "any", false, false, false, 363);
                echo ");\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-warning\" data-original-title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 369
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">";
                // line 370
                echo ($context["text_no_subscribers"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscriber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 377
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t\t\t";
            // line 379
            echo ($context["text_no_results"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 381
        echo "
\t\t\t\t\t\t";
        // line 382
        if (($context["pagination"] ?? null)) {
            // line 383
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t<div class=\"links\">";
            // line 386
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"results\">";
            // line 390
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 394
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\$(document).ready(function() {
    let urlParams = new URLSearchParams(window.location.search);
    
    if(urlParams.get('tab') === 'subscribers' || urlParams.has('page')) {
        \$('.nav-tabs li:eq(2) a').tab('show'); 
    }
});
\$('#oct_stock_notifier_status').change(function() {
\tlet \$input = \$(this);

\tif (\$input.is(\":checked\")) {
\t\t\$(\"#all_settings\").slideDown('slow');
\t} else {
\t\t\$(\"#all_settings\").slideUp('slow');
\t}
});

\$('#language a:first').tab('show');

document.getElementById('filter-stock-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let action = 'index.php?route=octemplates/module/oct_stock_notifier&tab=subscribers&user_token=";
        // line 424
        echo ($context["user_token"] ?? null);
        echo "';
    
    let email = encodeURIComponent(document.getElementById('filter_email').value);
    let product = encodeURIComponent(document.getElementById('filter_product').value);
    let phone = encodeURIComponent(document.getElementById('filter_phone').value);
    let status = encodeURIComponent(document.getElementById('filter_status').value);
    
    window.location.href = action + '&filter_email=' + email + '&filter_product=' + product + '&filter_phone=' + phone + '&filter_status=' + status;
});

const baseUrl = 'index.php?route=octemplates/module/oct_stock_notifier/';
const userToken = '";
        // line 435
        echo ($context["user_token"] ?? null);
        echo "';

function sendRequest(type, action, data = {}) {
    \$.ajax({
        type: type,
        url: `\${baseUrl}\${action}&user_token=\${userToken}`,
        data: data,
        dataType: 'json',
        cache: false,
        success: function(json) {
           window.location.href = `index.php?route=octemplates/module/oct_stock_notifier&tab=subscribers&user_token=\${userToken}`;
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
}

function deleteSelected(subscription_id) {
\tif (confirm('";
        // line 454
        echo ($context["text_confirm"] ?? null);
        echo "')) {
    \tsendRequest('post', `deleteSelected&delete=\${subscription_id}`);
\t}
}

function deleteAllSelected() {
\tif (confirm('";
        // line 460
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tconst checkedInputs = \$('#subscribers input[type=\\'checkbox\\']:checked');
\t\tsendRequest('post', 'deleteAllSelected', checkedInputs);
\t}
}

function checkCheckBoxes() {
    if (\$('input[name=\"selected[]\"]:checked').length > 0) {
        \$('#deleteButton').removeAttr('disabled');
    } else {
        \$('#deleteButton').attr('disabled', 'disabled');
    }
}

\$('input[name=\"selected[]\"]').change(function() {
    checkCheckBoxes();
});

function copyToClipboard(inputId) {
    let input = document.getElementById(inputId);
    input.select();
    document.execCommand('copy');

    let button = document.getElementById('clipboard-button');
    let icon = button.querySelector('i');

    changeButtonState(button, icon, '#5cb85c', 'fa-check', 'fa-files-o');

    setTimeout(() => {
        changeButtonState(button, icon, '', 'fa-files-o', 'fa-check');
    }, 5000);
}

function changeButtonState(button, icon, bgColor, addIconClass, removeIconClass) {
    button.style.backgroundColor = bgColor;
    icon.classList.remove(removeIconClass);
    icon.classList.add(addIconClass);
}
\$('#oct_stock_notifier_email_template a:first').tab('show');
</script>
";
        // line 500
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_stock_notifier.twig";
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
        return array (  1001 => 500,  958 => 460,  949 => 454,  927 => 435,  913 => 424,  881 => 394,  874 => 390,  867 => 386,  862 => 383,  860 => 382,  857 => 381,  852 => 379,  848 => 377,  842 => 373,  833 => 370,  830 => 369,  817 => 363,  812 => 361,  808 => 360,  804 => 359,  797 => 357,  791 => 354,  784 => 351,  778 => 349,  770 => 347,  768 => 346,  763 => 344,  756 => 343,  751 => 342,  743 => 337,  739 => 336,  735 => 335,  731 => 334,  727 => 333,  723 => 332,  710 => 322,  702 => 317,  696 => 313,  694 => 312,  686 => 307,  681 => 305,  671 => 300,  665 => 299,  661 => 298,  655 => 295,  647 => 290,  642 => 288,  634 => 283,  629 => 281,  621 => 276,  616 => 274,  610 => 271,  599 => 262,  591 => 259,  585 => 257,  583 => 256,  571 => 255,  567 => 253,  561 => 251,  559 => 250,  550 => 248,  546 => 247,  540 => 246,  534 => 244,  530 => 243,  525 => 240,  516 => 237,  506 => 236,  503 => 235,  499 => 234,  491 => 229,  486 => 227,  467 => 213,  461 => 210,  454 => 205,  442 => 196,  437 => 194,  428 => 190,  423 => 187,  421 => 186,  414 => 182,  406 => 179,  394 => 172,  389 => 170,  381 => 164,  376 => 162,  372 => 161,  367 => 160,  362 => 158,  358 => 157,  353 => 156,  351 => 155,  347 => 154,  343 => 153,  338 => 152,  336 => 151,  330 => 148,  322 => 142,  317 => 140,  313 => 139,  308 => 138,  303 => 136,  299 => 135,  294 => 134,  292 => 133,  288 => 132,  284 => 131,  279 => 130,  277 => 129,  271 => 126,  264 => 121,  258 => 119,  256 => 118,  252 => 117,  246 => 116,  239 => 114,  219 => 99,  213 => 96,  194 => 82,  188 => 79,  180 => 76,  163 => 64,  157 => 61,  150 => 57,  141 => 51,  135 => 48,  129 => 45,  121 => 40,  115 => 36,  109 => 33,  106 => 32,  103 => 31,  96 => 27,  92 => 25,  90 => 24,  84 => 20,  73 => 17,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_stock_notifier.twig", "");
    }
}
