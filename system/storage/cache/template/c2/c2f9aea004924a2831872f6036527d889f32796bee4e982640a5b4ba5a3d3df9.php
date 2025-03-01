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

/* octemplates/module/oct_abandoned_cart.twig */
class __TwigTemplate_2f3b6d3045643a137ae1cd1f2fe8117b04e85776dd48d6097fd348ecd1f633c7 extends Template
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
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-abandoned-cart\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "\t\t\t<script>
\t\t\t\tusNotify('danger', '";
            // line 21
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 24
        echo "        ";
        if (((((((($context["error_reminder_hours_first"] ?? null) || ($context["error_reminder_hours_second"] ?? null)) || ($context["error_coupon_discount"] ?? null)) || ($context["error_coupon_lifetime"] ?? null)) || ($context["error_coupon_type"] ?? null)) || ($context["error_cookie_lifetime"] ?? null)) || ($context["error_converted_lifetime"] ?? null))) {
            // line 25
            echo "\t\t\t<script>
\t\t\t\tusNotify('danger', '";
            // line 26
            echo ($context["error_complete_all_fields"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 29
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 30
            echo "\t\t\t<script>
\t\t\t\tusNotify('success', '";
            // line 31
            echo ($context["success"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 34
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-lost-carts\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_lost_carts"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-email-templates\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_email_templates"] ?? null);
        echo "</a></li>
                </ul>
                <form action=\"";
        // line 45
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-abandoned-cart\" class=\"tab-content\">
                    <!-- Settings Tab -->
                    <div class=\"tab-pane active\" id=\"tab-settings\">
                        <div class=\"form-horizontal\" style=\"margin-top: 15px;\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"status\">";
        // line 50
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"toggle-group\">
                                        <input type=\"checkbox\" name=\"oct_abandoned_cart[status]\" ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "status", [], "any", true, true, false, 53) && twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "status", [], "any", false, false, false, 53))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"status\" tabindex=\"1\">
                                        <label for=\"status\"></label>
                                        <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                            <div class=\"onoffswitch-label\">
                                                <div class=\"onoffswitch-inner\"></div>
                                                <div class=\"onoffswitch-switch\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class=\"help-block\">";
        // line 62
        echo ($context["help_status"] ?? null);
        echo "</span>
                                </div>
                            </div>

                            <div id=\"general_settings\" ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "status", [], "any", false, false, false, 66)) {
            echo "style=\"display:none\"";
        }
        echo ">

                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"can_login_by_token\">";
        // line 69
        echo ($context["entry_can_login_by_token"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"toggle-group\">
                                            <input type=\"checkbox\" name=\"oct_abandoned_cart[can_login_by_token]\" ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "can_login_by_token", [], "any", true, true, false, 72) && twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "can_login_by_token", [], "any", false, false, false, 72))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"can_login_by_token\" tabindex=\"1\">
                                            <label for=\"can_login_by_token\"></label>
                                            <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                                <div class=\"onoffswitch-label\">
                                                    <div class=\"onoffswitch-inner\"></div>
                                                    <div class=\"onoffswitch-switch\"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class=\"help-block\">";
        // line 81
        echo ($context["help_can_login_by_token"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <div class=\"form-group";
        // line 85
        if (($context["error_reminder_hours_first"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"reminder_hours_first\">";
        // line 86
        echo ($context["entry_reminder_hours_first"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_abandoned_cart[reminder_hours_first]\" value=\"";
        // line 88
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "reminder_hours_first", [], "any", false, false, false, 88);
        echo "\" placeholder=\"";
        echo ($context["entry_reminder_hours_first"] ?? null);
        echo "\" id=\"reminder_hours_first\" class=\"form-control\" />
                                        <span class=\"help-block\">";
        // line 89
        echo ($context["help_reminder_hours_first"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <div class=\"form-group";
        // line 93
        if (($context["error_reminder_hours_second"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"reminder_hours_second\">";
        // line 94
        echo ($context["entry_reminder_hours_second"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_abandoned_cart[reminder_hours_second]\" value=\"";
        // line 96
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "reminder_hours_second", [], "any", false, false, false, 96);
        echo "\" placeholder=\"";
        echo ($context["entry_reminder_hours_second"] ?? null);
        echo "\" id=\"reminder_hours_second\" class=\"form-control\" />
                                        <span class=\"help-block\">";
        // line 97
        echo ($context["help_reminder_hours_second"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <div class=\"form-group";
        // line 101
        if (($context["error_converted_lifetime"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"converted_lifetime\">";
        // line 102
        echo ($context["entry_converted_lifetime"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_abandoned_cart[converted_lifetime]\" value=\"";
        // line 104
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "converted_lifetime", [], "any", false, false, false, 104);
        echo "\" placeholder=\"";
        echo ($context["entry_converted_lifetime"] ?? null);
        echo "\" id=\"converted_lifetime\" class=\"form-control\" min=\"1\" />
                                        <span class=\"help-block\">";
        // line 105
        echo ($context["help_converted_lifetime"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <div class=\"form-group";
        // line 109
        if (($context["error_cookie_lifetime"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"cookie_lifetime\">";
        // line 110
        echo ($context["entry_cookie_lifetime"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_abandoned_cart[cookie_lifetime]\" value=\"";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "cookie_lifetime", [], "any", false, false, false, 112);
        echo "\" placeholder=\"";
        echo ($context["entry_cookie_lifetime"] ?? null);
        echo "\" id=\"cookie_lifetime\" class=\"form-control\" min=\"1\" />
                                        <span class=\"help-block\">";
        // line 113
        echo ($context["help_cookie_lifetime"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"cron_password\">";
        // line 118
        echo ($context["entry_cron_password"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"oct_abandoned_cart[cron_password]\" value=\"";
        // line 120
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "cron_password", [], "any", false, false, false, 120);
        echo "\" placeholder=\"";
        echo ($context["entry_cron_password"] ?? null);
        echo "\" id=\"cron_password\" class=\"form-control\" />
                                        <span class=\"help-block\">";
        // line 121
        echo ($context["help_cron_password"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <input type=\"hidden\" name=\"oct_abandoned_cart[api_key]\" value=\"";
        // line 125
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "api_key", [], "any", false, false, false, 125);
        echo "\" placeholder=\"";
        echo ($context["entry_api_key"] ?? null);
        echo "\" id=\"api_key\" class=\"form-control\" readonly />

                                ";
        // line 127
        if (($context["cron_url"] ?? null)) {
            // line 128
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-cron\">";
            // line 129
            echo ($context["entry_cron"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" value=\"/usr/bin/wget -O - -q -t 1 '";
            // line 132
            echo ($context["cron_url"] ?? null);
            echo "'\" id=\"input-cron\" class=\"form-control\" readonly>
                                                <span class=\"input-group-btn\">
                                                    <button id=\"clipboard-button\" class=\"btn btn-info\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 134
            echo ($context["text_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron');\">
                                                        <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <span class=\"help-block\">";
            // line 139
            echo ($context["help_cron"] ?? null);
            echo "</span>
                                        </div>
                                    </div>
                                ";
        }
        // line 143
        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"coupon_status\">";
        // line 145
        echo ($context["entry_coupon_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"toggle-group\">
                                            <input type=\"checkbox\" name=\"oct_abandoned_cart[coupon_status]\" ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_status", [], "any", true, true, false, 148) && twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_status", [], "any", false, false, false, 148))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"coupon_status\" tabindex=\"1\">
                                            <label for=\"coupon_status\"></label>
                                            <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                                <div class=\"onoffswitch-label\">
                                                    <div class=\"onoffswitch-inner\"></div>
                                                    <div class=\"onoffswitch-switch\"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class=\"help-block\">";
        // line 157
        echo ($context["help_coupon_status"] ?? null);
        echo "</span>
                                    </div>
                                </div>

                                <div id=\"coupon_settings\" ";
        // line 161
        if ( !twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_status", [], "any", false, false, false, 161)) {
            echo "style=\"display:none\"";
        }
        echo ">
                                    <div class=\"form-group";
        // line 162
        if (($context["error_coupon_discount"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                                        <label class=\"col-sm-2 control-label\" for=\"coupon_discount\">";
        // line 163
        echo ($context["entry_coupon_discount"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"number\" name=\"oct_abandoned_cart[coupon_discount]\" value=\"";
        // line 165
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_discount", [], "any", false, false, false, 165);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon_discount"] ?? null);
        echo "\" id=\"coupon_discount\" class=\"form-control\" min=\"1\" />
                                            <span class=\"help-block\">";
        // line 166
        echo ($context["help_coupon_discount"] ?? null);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"coupon_type\">";
        // line 171
        echo ($context["entry_coupon_type"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"oct_abandoned_cart[coupon_type]\" id=\"coupon_type\" class=\"form-control\">
                                                <option value=\"percent\" ";
        // line 174
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_type", [], "any", false, false, false, 174) == "percent")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_percent"] ?? null);
        echo "</option>
                                                <option value=\"fixed\" ";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_type", [], "any", false, false, false, 175) == "fixed")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_fixed"] ?? null);
        echo "</option>
                                            </select>
                                            <span class=\"help-block\">";
        // line 177
        echo ($context["help_coupon_type"] ?? null);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"form-group";
        // line 181
        if (($context["error_coupon_lifetime"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                                        <label class=\"col-sm-2 control-label\" for=\"coupon_lifetime\">";
        // line 182
        echo ($context["entry_coupon_lifetime"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"number\" name=\"oct_abandoned_cart[coupon_lifetime]\" value=\"";
        // line 184
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "coupon_lifetime", [], "any", false, false, false, 184);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon_lifetime"] ?? null);
        echo "\" id=\"coupon_lifetime\" class=\"form-control\" min=\"1\" />
                                            <span class=\"help-block\">";
        // line 185
        echo ($context["help_coupon_lifetime"] ?? null);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Lost Carts Tab -->
                    <div class=\"tab-pane\" id=\"tab-lost-carts\">
                    <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 196
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <button type=\"button\" id=\"toggle-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 199
        echo ($context["button_toggle_filter"] ?? null);
        echo "</button>
                            </div>
                            <div id=\"filter-section\" class=\"panel-body\" style=\"display: none;\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 205
        echo ($context["text_filter_firstname"] ?? null);
        echo ":</label>
                                            <input type=\"text\" name=\"filter_firstname\" id=\"filter_firstname\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 209
        echo ($context["text_filter_lastname"] ?? null);
        echo ":</label>
                                            <input type=\"text\" name=\"filter_lastname\" id=\"filter_lastname\" class=\"form-control\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 215
        echo ($context["text_filter_phone"] ?? null);
        echo ":</label>
                                            <input type=\"text\" name=\"filter_phone\" id=\"filter_phone\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 219
        echo ($context["text_filter_email"] ?? null);
        echo ":</label>
                                            <input type=\"text\" name=\"filter_email\" id=\"filter_email\" class=\"form-control\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 225
        echo ($context["text_filter_ip_added"] ?? null);
        echo ":</label>
                                            <input type=\"text\" name=\"filter_ip_added\" id=\"filter_ip_added\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 229
        echo ($context["text_filter_ip_changed"] ?? null);
        echo ":</label>
                                            <input type=\"text\" name=\"filter_ip_changed\" id=\"filter_ip_changed\" class=\"form-control\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 235
        echo ($context["text_filter_date_added_start"] ?? null);
        echo ":</label>
                                            <input type=\"date\" name=\"filter_date_added_start\" id=\"filter_date_added_start\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 239
        echo ($context["text_filter_date_added_end"] ?? null);
        echo ":</label>
                                            <input type=\"date\" name=\"filter_date_added_end\" id=\"filter_date_added_end\" class=\"form-control\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 245
        echo ($context["text_filter_date_modified_start"] ?? null);
        echo ":</label>
                                            <input type=\"date\" name=\"filter_date_modified_start\" id=\"filter_date_modified_start\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 249
        echo ($context["text_filter_date_modified_end"] ?? null);
        echo ":</label>
                                            <input type=\"date\" name=\"filter_date_modified_end\" id=\"filter_date_modified_end\" class=\"form-control\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-6\">
                                            <label>";
        // line 255
        echo ($context["text_filter_status"] ?? null);
        echo ":</label>
                                            <select name=\"filter_status\" id=\"filter_status\" class=\"form-control\">
                                                <option value=\"\">";
        // line 257
        echo ($context["text_status_any"] ?? null);
        echo "</option>
                                                <option value=\"active\">";
        // line 258
        echo ($context["text_active"] ?? null);
        echo "</option>
                                                <option value=\"converted\">";
        // line 259
        echo ($context["text_converted"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-12 text-left\">
                                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i> ";
        // line 265
        echo ($context["button_filter"] ?? null);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"lost-carts-content\" class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover mb-3\">
                                <thead>
                                    <tr>
                                        <th class=\"text-center\">";
        // line 275
        echo ($context["column_cart_id"] ?? null);
        echo "</th>
                                        <th class=\"text-left\">";
        // line 276
        echo ($context["column_customer"] ?? null);
        echo "</th>
                                        <th class=\"text-left\">";
        // line 277
        echo ($context["column_products"] ?? null);
        echo "</th>
                                        <th class=\"text-left\">";
        // line 278
        echo ($context["column_date_modified"] ?? null);
        echo "</th>
                                        <th class=\"text-left\">";
        // line 279
        echo ($context["column_date_added"] ?? null);
        echo "</th>
                                        <th class=\"text-left\">";
        // line 280
        echo ($context["colim_last_reminder"] ?? null);
        echo "</th>
                                        <th class=\"text-left\">";
        // line 281
        echo ($context["column_reminder_count"] ?? null);
        echo "</th>
                                        <th class=\"text-center\">";
        // line 282
        echo ($context["column_status"] ?? null);
        echo "</th>
                                        <th class=\"text-center\">";
        // line 283
        echo ($context["column_action"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody id=\"lost-cart-data\">
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">";
        // line 288
        echo ($context["text_loading"] ?? null);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id=\"pagination-area\" class=\"pull-right\"></div>
                            <div id=\"results-area\" class=\"pull-left\" style=\"margin: 10px 0;\"></div>
                        </div>
                    </div>
                    <!-- Email Templates Tab -->
                    <div class=\"tab-pane\" id=\"tab-email-templates\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"oct_abandoned_cart_email_template_status\">";
        // line 300
        echo ($context["entry_email_template_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"toggle-group\">
                                        <input type=\"checkbox\" name=\"oct_abandoned_cart[email_template_status]\" ";
        // line 303
        if (twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "email_template_status", [], "any", false, false, false, 303)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_abandoned_cart_email_template_status\" tabindex=\"1\">
                                        <label for=\"oct_abandoned_cart_email_template_status\"></label>
                                        <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                            <div class=\"onoffswitch-label\">
                                                <div class=\"onoffswitch-inner\"></div>
                                                <div class=\"onoffswitch-switch\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class=\"help-block\">";
        // line 312
        echo ($context["help_email_template_status"] ?? null);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"etemplates_status\" ";
        // line 315
        if ( !twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "email_template_status", [], "any", false, false, false, 315)) {
            echo "style=\"display:none\"";
        }
        echo ">
                                <div class=\"col-sm-12\">
                                    <ul class=\"nav nav-tabs\" id=\"language_tabs\">
                                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 319
            echo "                                        <li ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 319)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 319);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 319);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 319);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 319);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 319);
            echo "</a></li>
                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                                    </ul>
                                    <div class=\"tab-content\">
                                    ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 324
            echo "                                        <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 324)) {
                echo "active";
            }
            echo "\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 324);
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-email_template_";
            // line 326
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 326);
            echo "\">";
            echo ($context["entry_email_subject"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"oct_abandoned_cart[email_template][";
            // line 328
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 328);
            echo "][subject]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "email_template", [], "any", false, true, false, 328), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 328), [], "array", false, true, false, 328), "subject", [], "any", true, true, false, 328)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "email_template", [], "any", false, true, false, 328), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 328), [], "array", false, true, false, 328), "subject", [], "any", false, false, false, 328), "")) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_email_subject"] ?? null);
            echo "\" id=\"input-email_template_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 328);
            echo "\" class=\"form-control\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-email_template_body_";
            // line 332
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 332);
            echo "\">";
            echo ($context["entry_email_body"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <textarea name=\"oct_abandoned_cart[email_template][";
            // line 334
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 334);
            echo "][body]\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email_body"] ?? null);
            echo "\" id=\"input-email_template_body_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 334);
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "email_template", [], "any", false, true, false, 334), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 334), [], "array", false, true, false, 334), "body", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "email_template", [], "any", false, true, false, 334), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 334), [], "array", false, true, false, 334), "body", [], "any", false, false, false, 334), "")) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\">";
            // line 338
            echo ($context["text_shortcodes"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <ul>
                                                <li><strong>[customer_name]</strong> - ";
            // line 341
            echo ($context["text_shortcode_customer_name"] ?? null);
            echo "</li>
                                                <li><strong>[restore_link]</strong> - ";
            // line 342
            echo ($context["text_shortcode_restore_link"] ?? null);
            echo "</li>
                                                <li><strong>[products]</strong> - ";
            // line 343
            echo ($context["text_shortcode_products"] ?? null);
            echo "</li>
                                                <li><strong>[promo_code]</strong> - ";
            // line 344
            echo ($context["text_shortcode_coupon_code"] ?? null);
            echo "</li>
                                                <li><strong>[store_name]</strong> - ";
            // line 345
            echo ($context["text_shortcode_store"] ?? null);
            echo "</li>
                                            </ul>
                                            </div>
                                        </div>
                                        </div>
                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                                    </div>
                                </div>
                            </div>
                        </div  >
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        \$(document).ready(function() {

            document.getElementById('toggle-filter').addEventListener('click', function() {
                var filterSection = document.getElementById('filter-section');
                if (filterSection.style.display === 'none') {
                    filterSection.style.display = 'block';
                } else {
                    filterSection.style.display = 'none';
                }
            });

            \$('#status').change(function() {
                if (\$(this).is(\":checked\")) {
                    \$(\"#general_settings\").slideDown('slow');
                } else {
                    \$(\"#general_settings\").slideUp('slow');
                }
            });

            \$('#coupon_status').change(function() {
                if (\$(this).is(\":checked\")) {
                    \$(\"#coupon_settings\").slideDown('slow');
                } else {
                    \$(\"#coupon_settings\").slideUp('slow');
                }
            });

            \$('a[href=\"#tab-lost-carts\"]').on('shown.bs.tab', function () {
                loadLostCarts();
            });

            if (\$('a[href=\"#tab-lost-carts\"]').parent().hasClass('active')) {
                loadLostCarts();
            }

            \$('#oct_abandoned_cart_email_template_status').change(function() {
                var \$input = \$(this);
                if (\$input.is(\":checked\")) {
                    \$(\"#etemplates_status\").slideDown('slow');
                } else {
                    \$(\"#etemplates_status\").slideUp('slow');
                }
            });

            function loadLostCarts(page = 1) {
                var filterData = {
                    filter_firstname: \$('#filter_firstname').val(),
                    filter_lastname: \$('#filter_lastname').val(),
                    filter_email: \$('#filter_email').val(),
                    filter_phone: \$('#filter_phone').val(),
                    filter_status: \$('#filter_status').val(),
                    filter_ip_added: \$('#filter_ip_added').val(),
                    filter_ip_changed: \$('#filter_ip_changed').val(),
                    filter_date_added_start: \$('#filter_date_added_start').val(),
                    filter_date_added_end: \$('#filter_date_added_end').val(),
                    filter_date_modified_start: \$('#filter_date_modified_start').val(),
                    filter_date_modified_end: \$('#filter_date_modified_end').val(),
                    page: page
                };

                \$.ajax({
                    url: '";
        // line 423
        echo ($context["ajax_lost_carts"] ?? null);
        echo "',
                    type: 'GET',
                    data: filterData,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#lost-cart-data').html('<tr><td colspan=\"9\" class=\"text-center\">";
        // line 428
        echo ($context["text_loading"] ?? null);
        echo "</td></tr>');
                    },
                    success: function(response) {
                        if (response.success) {
                            \$('#lost-cart-data').html(response.html);
                            \$('#pagination-area').html(response.pagination);
                            \$('#results-area').html(response.results);
                        } else {
                            \$('#lost-cart-data').html('<tr><td colspan=\"9\" class=\"text-center\"><b>";
        // line 436
        echo ($context["text_error_loading_carts"] ?? null);
        echo "</b></td></tr>');
                            \$('#results-area').html('');
                        }
                    },
                    error: function() {
                        \$('#lost-cart-data').html('<tr><td colspan=\"9\" class=\"text-center\"><b>";
        // line 441
        echo ($context["text_error_loading_carts"] ?? null);
        echo "</b></td></tr>');
                        \$('#results-area').html('');
                    }
                });
            }

            \$(document).on('click', '#button-filter', function() {
                loadLostCarts(1);
            });


            \$(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = \$(this).attr('href').split('page=')[1];
                loadLostCarts(page);
            });

            \$(document).on('click', '.btn-copy', function () {
                var cartId = \$(this).data('cart-id');
                
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(cartId)
                        .then(function() {
                            usNotify('success', '";
        // line 464
        echo ($context["text_link_copied"] ?? null);
        echo "');
                        })
                        .catch(function(error) {
                            usNotify('danger', error);
                        });
                } else {
                    var \$tempInput = \$(\"<input>\");
                    \$(\"body\").append(\$tempInput);
                    \$tempInput.val(cartId).select();
                    
                    try {
                        var successful = document.execCommand('copy');
                        if (successful) {
                            usNotify('success', '";
        // line 477
        echo ($context["text_link_copied"] ?? null);
        echo "');
                        } else {
                            usNotify('danger', '";
        // line 479
        echo ($context["text_error"] ?? null);
        echo "');
                        }
                    } catch(err) {
                        usNotify('danger', err);
                    }
                    \$tempInput.remove();
                }
            });

            var urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('filter_status')) {
                \$('a[href=\"#tab-lost-carts\"]').tab('show');
            }

            \$(document).on('click', '.btn-convert', function () {
                var cartId = \$(this).data('cart-id');
                if (confirm('";
        // line 495
        echo ($context["text_confirm_convert"] ?? null);
        echo "')) {
                    \$.ajax({
                        url: '";
        // line 497
        echo ($context["ajax_convert_cart"] ?? null);
        echo "',
                        type: 'POST',
                        data: { cart_id: cartId },
                        dataType: 'json',
                        beforeSend: function() {
                            \$('#cart-row-' + cartId + ' .btn-convert').prop('disabled', true);
                        },
                        success: function (response) {
                            if (response.success) {
                                \$('#cart-row-' + cartId + ' .cart-status').html('<span class=\"label label-success\">";
        // line 506
        echo ($context["text_converted"] ?? null);
        echo "</span>');
                                usNotify('success', '";
        // line 507
        echo ($context["text_convert_success"] ?? null);
        echo "');
                            } else {
                                usNotify('danger', response.error || '";
        // line 509
        echo ($context["text_error"] ?? null);
        echo "');
                            }
                        },
                        error: function () {
                            usNotify('danger', '";
        // line 513
        echo ($context["text_error"] ?? null);
        echo "');
                        },
                        complete: function() {
                            \$('#cart-row-' + cartId + ' .btn-convert').prop('disabled', false);
                        }
                    });
                }
            });

            \$(document).on('click', '.btn-delete', function () {
                var cartId = \$(this).data('cart-id');
                if (confirm('";
        // line 524
        echo ($context["text_confirm_delete"] ?? null);
        echo "')) {
                    \$.ajax({
                        url: '";
        // line 526
        echo ($context["ajax_delete_cart"] ?? null);
        echo "',
                        type: 'POST',
                        data: { cart_id: cartId },
                        dataType: 'json',
                        beforeSend: function() {
                            \$('#cart-row-' + cartId + ' .btn-delete').prop('disabled', true);
                        },
                        success: function (response) {
                            if (response.success) {
                                \$('#cart-row-' + cartId).remove();
                                usNotify('success', '";
        // line 536
        echo ($context["text_delete_success"] ?? null);
        echo "');
                            } else {
                                usNotify('danger', response.error || '";
        // line 538
        echo ($context["text_error"] ?? null);
        echo "');
                            }
                        },
                        error: function () {
                            usNotify('danger', '";
        // line 542
        echo ($context["text_error"] ?? null);
        echo "');
                        },
                        complete: function() {
                            \$('#cart-row-' + cartId + ' .btn-delete').prop('disabled', false);
                        }
                    });
                }
            });

            \$(document).on('click', '.btn-send', function () {
                var cartId = \$(this).data('cart-id');

                \$.ajax({
                    url: '";
        // line 555
        echo ($context["ajax_send_email"] ?? null);
        echo "',
                    type: 'POST',
                    data: { cart_id: cartId, api_key: '";
        // line 557
        echo twig_get_attribute($this->env, $this->source, ($context["oct_abandoned_cart"] ?? null), "api_key", [], "any", false, false, false, 557);
        echo "' },
                    dataType: 'json',
            
                    beforeSend: function() {
                        \$('#cart-row-' + cartId + ' .btn-send').prop('disabled', true);
                    },
                    success: function (response) {
                        if (response.success) {
                            usNotify('success', response.message || '";
        // line 565
        echo ($context["text_email_sent_success"] ?? null);
        echo "');
                            
                            var row = document.getElementById('cart-row-' + response.abandoned_cart_id);
                            if (row) {
                                row.cells[5].innerText = response.last_reminder;
                                row.cells[6].innerText = response.reminder_count;
                            }
                        } else {
                            usNotify('danger', response.message || '";
        // line 573
        echo ($context["text_error"] ?? null);
        echo "');
                        }
                    },
                    error: function () {
                        usNotify('danger', '";
        // line 577
        echo ($context["text_error"] ?? null);
        echo "');
                    },
                    complete: function() {
                        \$('#cart-row-' + cartId + ' .btn-send').prop('disabled', false);
                    }
                });
            });
        });

        function copyToClipboard(inputId) {
            var copyText = document.getElementById(inputId);
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            try {
                var successful = document.execCommand('copy');
                if (successful) {
                    usNotify('success', '";
        // line 594
        echo ($context["text_copy_success"] ?? null);
        echo "');
                } else {
                    usNotify('danger', '";
        // line 596
        echo ($context["text_copy_failed"] ?? null);
        echo "');
                }
            } catch (err) {
                usNotify('danger', '";
        // line 599
        echo ($context["text_copy_failed"] ?? null);
        echo "');
            }
        }
    </script>
</div>
";
        // line 604
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_abandoned_cart.twig";
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
        return array (  1205 => 604,  1197 => 599,  1191 => 596,  1186 => 594,  1166 => 577,  1159 => 573,  1148 => 565,  1137 => 557,  1132 => 555,  1116 => 542,  1109 => 538,  1104 => 536,  1091 => 526,  1086 => 524,  1072 => 513,  1065 => 509,  1060 => 507,  1056 => 506,  1044 => 497,  1039 => 495,  1020 => 479,  1015 => 477,  999 => 464,  973 => 441,  965 => 436,  954 => 428,  946 => 423,  872 => 351,  852 => 345,  848 => 344,  844 => 343,  840 => 342,  836 => 341,  830 => 338,  815 => 334,  808 => 332,  795 => 328,  788 => 326,  778 => 324,  761 => 323,  757 => 321,  728 => 319,  711 => 318,  703 => 315,  697 => 312,  683 => 303,  677 => 300,  662 => 288,  654 => 283,  650 => 282,  646 => 281,  642 => 280,  638 => 279,  634 => 278,  630 => 277,  626 => 276,  622 => 275,  609 => 265,  600 => 259,  596 => 258,  592 => 257,  587 => 255,  578 => 249,  571 => 245,  562 => 239,  555 => 235,  546 => 229,  539 => 225,  530 => 219,  523 => 215,  514 => 209,  507 => 205,  498 => 199,  492 => 196,  478 => 185,  472 => 184,  467 => 182,  461 => 181,  454 => 177,  445 => 175,  437 => 174,  431 => 171,  423 => 166,  417 => 165,  412 => 163,  406 => 162,  400 => 161,  393 => 157,  379 => 148,  373 => 145,  369 => 143,  362 => 139,  354 => 134,  349 => 132,  343 => 129,  340 => 128,  338 => 127,  331 => 125,  324 => 121,  318 => 120,  313 => 118,  305 => 113,  299 => 112,  294 => 110,  288 => 109,  281 => 105,  275 => 104,  270 => 102,  264 => 101,  257 => 97,  251 => 96,  246 => 94,  240 => 93,  233 => 89,  227 => 88,  222 => 86,  216 => 85,  209 => 81,  195 => 72,  189 => 69,  181 => 66,  174 => 62,  160 => 53,  154 => 50,  146 => 45,  141 => 43,  137 => 42,  133 => 41,  126 => 37,  121 => 34,  115 => 31,  112 => 30,  109 => 29,  103 => 26,  100 => 25,  97 => 24,  91 => 21,  88 => 20,  86 => 19,  80 => 15,  69 => 13,  65 => 12,  60 => 10,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_abandoned_cart.twig", "");
    }
}
