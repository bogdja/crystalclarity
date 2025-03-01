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

/* octemplates/module/oct_otp_login.twig */
class __TwigTemplate_493b2de250c23d0dd0a2852174a0767b378dfd3be62f2f161174ec998314af39 extends Template
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
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <script>
            usNotify('warning', '";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "');
        </script>
        ";
        }
        // line 23
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <script>
            usNotify('success', '";
            // line 25
            echo ($context["success"] ?? null);
            echo "');
        </script>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <ul class=\"nav nav-tabs\" id=\"moduleTabs\">
                    <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_logs"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-ip-logs\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_ip_logs"] ?? null);
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-settings\">
                        ";
        // line 40
        if ( !($context["sms_template_status"] ?? null)) {
            // line 41
            echo "                            <div class=\"text-danger\"><b>";
            echo ($context["warning_sms_template"] ?? null);
            echo "</b></div>
                        ";
        }
        // line 43
        echo "                        <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"status\">";
        // line 45
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"toggle-group\">
                                        <input type=\"checkbox\" name=\"oct_otp_login_settings[status]\" value=\"1\" ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "status", [], "any", false, false, false, 48)) {
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
                                </div>
                            </div>
                            <div id=\"all_settings\" ";
        // line 59
        if ( !twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "status", [], "any", false, false, false, 59)) {
            echo "style=\"display:none\"";
        }
        echo ">
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-otp-length\">";
        // line 61
        echo ($context["entry_otp_length"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_otp_login_settings[otp_length]\" value=\"";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "otp_length", [], "any", false, false, false, 63);
        echo "\" placeholder=\"";
        echo ($context["entry_otp_length"] ?? null);
        echo "\" id=\"input-otp-length\" class=\"form-control\" />
                                        ";
        // line 64
        if (($context["help_otp_length"] ?? null)) {
            // line 65
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_otp_length"] ?? null);
            echo "</div>
                                        ";
        }
        // line 67
        echo "                                        ";
        if (($context["error_otp_length"] ?? null)) {
            // line 68
            echo "                                        <script>
                                            usNotify('danger', '";
            // line 69
            echo ($context["error_otp_length"] ?? null);
            echo "');
                                        </script>
                                        <div class=\"text-danger\"></div>
                                        ";
        }
        // line 73
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-otp-expiry\">";
        // line 76
        echo ($context["entry_otp_expiry"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_otp_login_settings[otp_expiry]\" value=\"";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "otp_expiry", [], "any", false, false, false, 78);
        echo "\" placeholder=\"";
        echo ($context["entry_otp_expiry"] ?? null);
        echo "\" id=\"input-otp-expiry\" class=\"form-control\" />
                                        ";
        // line 79
        if (($context["help_otp_expiry"] ?? null)) {
            // line 80
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_otp_expiry"] ?? null);
            echo "</div>
                                        ";
        }
        // line 82
        echo "                                        ";
        if (($context["error_otp_expiry"] ?? null)) {
            // line 83
            echo "                                        <script>
                                            usNotify('danger', '";
            // line 84
            echo ($context["error_otp_expiry"] ?? null);
            echo "');
                                        </script>
                                        <div class=\"text-danger\"></div>
                                        ";
        }
        // line 88
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-max-attempts\">";
        // line 91
        echo ($context["entry_max_attempts"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_otp_login_settings[max_attempts]\" value=\"";
        // line 93
        echo twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "max_attempts", [], "any", false, false, false, 93);
        echo "\" placeholder=\"";
        echo ($context["entry_max_attempts"] ?? null);
        echo "\" id=\"input-max-attempts\" class=\"form-control\" />
                                        ";
        // line 94
        if (($context["help_max_attempts"] ?? null)) {
            // line 95
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_max_attempts"] ?? null);
            echo "</div>
                                        ";
        }
        // line 97
        echo "                                        ";
        if (($context["error_max_attempts"] ?? null)) {
            // line 98
            echo "                                        <script>
                                            usNotify('danger', '";
            // line 99
            echo ($context["error_max_attempts"] ?? null);
            echo "');
                                        </script>
                                        <div class=\"text-danger\"></div>
                                        ";
        }
        // line 103
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-lockout-time\">";
        // line 106
        echo ($context["entry_lockout_time"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_otp_login_settings[lockout_time]\" value=\"";
        // line 108
        echo twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "lockout_time", [], "any", false, false, false, 108);
        echo "\" placeholder=\"";
        echo ($context["entry_lockout_time"] ?? null);
        echo "\" id=\"input-lockout-time\" class=\"form-control\" />
                                        ";
        // line 109
        if (($context["help_lockout_time"] ?? null)) {
            // line 110
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_lockout_time"] ?? null);
            echo "</div>
                                        ";
        }
        // line 112
        echo "                                        ";
        if (($context["error_lockout_time"] ?? null)) {
            // line 113
            echo "                                        <script>
                                            usNotify('danger', '";
            // line 114
            echo ($context["error_lockout_time"] ?? null);
            echo "');
                                        </script>
                                        <div class=\"text-danger\"></div>
                                        ";
        }
        // line 118
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-throttle-time\">";
        // line 121
        echo ($context["entry_throttle_time"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"number\" name=\"oct_otp_login_settings[throttle_time]\" value=\"";
        // line 123
        echo twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "throttle_time", [], "any", false, false, false, 123);
        echo "\" placeholder=\"";
        echo ($context["entry_throttle_time"] ?? null);
        echo "\" id=\"input-throttle-time\" class=\"form-control\" />
                                        ";
        // line 124
        if (($context["help_throttle_time"] ?? null)) {
            // line 125
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_throttle_time"] ?? null);
            echo "</div>
                                        ";
        }
        // line 127
        echo "                                        ";
        if (($context["error_throttle_time"] ?? null)) {
            // line 128
            echo "                                        <script>danger
                                            usNotify('danger', '";
            // line 129
            echo ($context["error_throttle_time"] ?? null);
            echo "');
                                        </script>
                                        <div class=\"text-danger\"></div>
                                        ";
        }
        // line 133
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-phone-mask\">";
        // line 136
        echo ($context["entry_phone_mask"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"oct_otp_login_settings[phone_mask]\" value=\"";
        // line 138
        echo twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "phone_mask", [], "any", false, false, false, 138);
        echo "\" placeholder=\"";
        echo ($context["entry_phone_mask"] ?? null);
        echo "\" id=\"input-phone-mask\" class=\"form-control\" />
                                        ";
        // line 139
        if (($context["help_phone_mask"] ?? null)) {
            // line 140
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_phone_mask"] ?? null);
            echo "</div>
                                        ";
        }
        // line 142
        echo "                                        ";
        if (($context["error_phone_mask"] ?? null)) {
            // line 143
            echo "                                        <script>
                                            usNotify('danger', '";
            // line 144
            echo ($context["error_phone_mask"] ?? null);
            echo "');
                                        </script>
                                        <div class=\"text-danger\"></div>
                                        ";
        }
        // line 148
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"logging\">";
        // line 151
        echo ($context["entry_logging"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"toggle-group\">
                                            <input type=\"checkbox\" name=\"oct_otp_login_settings[logging]\" value=\"1\" ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["oct_otp_login_settings"] ?? null), "logging", [], "any", false, false, false, 154)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"logging\" tabindex=\"1\">
                                            <label for=\"logging\"></label>
                                            <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                                <div class=\"onoffswitch-label\">
                                                    <div class=\"onoffswitch-inner\"></div>
                                                    <div class=\"onoffswitch-switch\"></div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 163
        if (($context["help_logging"] ?? null)) {
            // line 164
            echo "                                        <div class=\"help-block\">";
            echo ($context["help_logging"] ?? null);
            echo "</div>
                                        ";
        }
        // line 166
        echo "                                    </div>
                                </div>
                            </div> <!-- #all_settings -->
                        </form>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-logs\">
                        <div>
                            <button type=\"button\" id=\"button-delete-logs\" data-toggle=\"tooltip\" title=\"";
        // line 173
        echo ($context["button_delete_logs"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i>&nbsp;";
        echo ($context["button_delete_logs"] ?? null);
        echo "</button>
                        </div>
                        <div class=\"help-block\" id=\"help-del-block\" style=\"margin: 12px 0px;\">
                            <b>";
        // line 176
        echo ($context["help_logs"] ?? null);
        echo "</b>
                        </div>
                        <br />
                        <div class=\"table-responsive\">
                            <table id=\"table-logs\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 183
        echo ($context["column_customer_id"] ?? null);
        echo "</th>
                                        <th>";
        // line 184
        echo ($context["column_telephone"] ?? null);
        echo "</th>
                                        <th>";
        // line 185
        echo ($context["column_status"] ?? null);
        echo "</th>
                                        <th>";
        // line 186
        echo ($context["column_date_added"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Дані будуть завантажені через Ajax -->
                                </tbody>
                            </table>
                        </div>
                        <div id=\"logs-pagination\" class=\"text-right\"></div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-ip-logs\">
                        <div>
                            <button type=\"button\" id=\"button-delete-ip-logs\" data-toggle=\"tooltip\" title=\"";
        // line 198
        echo ($context["button_delete_logs"] ?? null);
        echo "\" class=\"btn btn-danger\">
                                <i class=\"fa fa-trash\"></i>&nbsp;";
        // line 199
        echo ($context["button_delete_logs"] ?? null);
        echo "</button>
                        </div>
                        <div class=\"help-block\" id=\"help-del-ip-block\" style=\"margin: 12px 0px;\">
                            <b>";
        // line 202
        echo ($context["help_ip_logs"] ?? null);
        echo "</b>
                        </div>
                        <br/>
                        <div class=\"table-responsive\">
                            <table id=\"table-ip-logs\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 209
        echo ($context["column_ip_address"] ?? null);
        echo "</th>
                                        <th>";
        // line 210
        echo ($context["column_attempt_count"] ?? null);
        echo "</th>
                                        <th>";
        // line 211
        echo ($context["column_last_attempt"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be loaded via Ajax -->
                                </tbody>
                            </table>
                        </div>
                        <div id=\"ip-logs-pagination\" class=\"text-right\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    \$('#status').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#all_settings\").slideDown('slow');
        } else {
            \$(\"#all_settings\").slideUp('slow');
        }
    });

    \$('a[href=\"#tab-logs\"]').on('shown.bs.tab', function (e) {
        loadLogs(1);
    });

    function getStatusBadge(status) {
        let badgeClass = '';
        let badgeText = '';

        if (status === 'success') {
            badgeClass = 'badge badge-success';
            badgeText = 'Success';
            badgeStyle = 'background-color: green; color: white;';
        } else if (status === 'failure') {
            badgeClass = 'badge badge-danger';
            badgeText = 'Failure';
            badgeStyle = 'background-color: red; color: white;';
        }
        
        return '<span class=\"' + badgeClass + '\" style=\"' + badgeStyle + '\">' + badgeText + '</span>';
    }

    function loadLogs(page) {
        \$.ajax({
            url: 'index.php?route=octemplates/module/oct_otp_login/logs&user_token=";
        // line 261
        echo ($context["user_token"] ?? null);
        echo "&page=' + page,
            dataType: 'json',
            beforeSend: function() {
                \$('#table-logs tbody').html('<tr><td colspan=\"5\" class=\"text-center\">";
        // line 264
        echo ($context["text_loading"] ?? null);
        echo "</td></tr>');
            },
            success: function(json) {
                if (json['logs'].length > 0) {
                    var html = '';

                    \$.each(json['logs'], function(index, log) {
                        html += '<tr>';
                        html += '<td>' + log['customer_firstname'] + ' ' + log['customer_lastname'] + ' <br />' + log['profile_link'] + '</td>';
                        html += '<td>' + log['telephone'] + '</td>';
                        html += '<td>' + getStatusBadge(log['status']) + '</td>';
                        html += '<td>' + log['date_added'] + '</td>';
                        html += '</tr>';
                    });

                    \$('#table-logs tbody').html(html);

                    // Пагінація
                    if (json['pagination']) {
                        \$('#logs-pagination').html(json['pagination']);
                    } else {
                        \$('#logs-pagination').html('');
                    }
                } else {
                    \$('#table-logs tbody').html('<tr><td colspan=\"4\" class=\"text-center\">";
        // line 288
        echo ($context["text_no_results"] ?? null);
        echo "</td></tr>');
                    \$('#logs-pagination').html('');
                    \$('#button-delete-logs').hide();
                    \$('#help-del-block').hide();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    \$('#logs-pagination').on('click', 'a', function(e) {
        e.preventDefault();
    
        var url = \$(this).attr('href');
        var page = url.split('page=')[1];
        loadLogs(page);
    });

    \$('#button-delete-logs').on('click', function() {
        if (confirm('";
        // line 309
        echo ($context["text_confirm_delete"] ?? null);
        echo "')) {
            \$.ajax({
                url: 'index.php?route=octemplates/module/oct_otp_login/deleteLogs&user_token=";
        // line 311
        echo ($context["user_token"] ?? null);
        echo "',
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        usNotify('success', json['success']);
                        loadLogs(1);
                        \$('#button-delete-logs').hide();
                        \$('#help-del-block').hide();
                    } else if (json['error']) {
                        usNotify('warning', json['error']);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    });

    \$('a[href=\"#tab-ip-logs\"]').on('shown.bs.tab', function (e) {
    loadIpLogs(1);
});

    function loadIpLogs(page) {
        \$.ajax({
            url: 'index.php?route=octemplates/module/oct_otp_login/ipLogs&user_token=";
        // line 336
        echo ($context["user_token"] ?? null);
        echo "&page=' + page,
            dataType: 'json',
            beforeSend: function() {
                \$('#table-ip-logs tbody').html('<tr><td colspan=\"4\" class=\"text-center\">";
        // line 339
        echo ($context["text_loading"] ?? null);
        echo "</td></tr>');
            },
            success: function(json) {
                if (json['logs'].length > 0) {
                    var html = '';

                    \$.each(json['logs'], function(index, log) {
                        html += '<tr>';
                        html += '<td>' + log['ip_address'] + '</td>';
                        html += '<td>' + log['attempt_count'] + '</td>';
                        html += '<td>' + log['last_attempt'] + '</td>';
                        html += '</tr>';
                    });

                    \$('#table-ip-logs tbody').html(html);

                    // Pagination
                    if (json['pagination']) {
                        \$('#ip-logs-pagination').html(json['pagination']);
                    } else {
                        \$('#ip-logs-pagination').html('');
                    }
                } else {
                    \$('#table-ip-logs tbody').html('<tr><td colspan=\"3\" class=\"text-center\">";
        // line 362
        echo ($context["text_no_results"] ?? null);
        echo "</td></tr>');
                    \$('#ip-logs-pagination').html('');
                    \$('#button-delete-ip-logs').hide();
                    \$('#help-del-ip-block').hide();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    \$('#ip-logs-pagination').on('click', 'a', function(e) {
        e.preventDefault();

        var url = \$(this).attr('href');
        var page = url.split('page=')[1];
        loadIpLogs(page);
    });

    \$('#button-delete-ip-logs').on('click', function() {
        if (confirm('";
        // line 383
        echo ($context["text_confirm_delete"] ?? null);
        echo "')) {
            \$.ajax({
                url: 'index.php?route=octemplates/module/oct_otp_login/deleteIpLogs&user_token=";
        // line 385
        echo ($context["user_token"] ?? null);
        echo "',
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        usNotify('success', json['success']);
                        loadIpLogs(1);
                        \$('#button-delete-ip-logs').hide();
                        \$('#help-del-ip-block').hide();
                    } else if (json['error']) {
                        usNotify('warning', json['error']);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    });
    </script>
";
        // line 404
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_otp_login.twig";
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
        return array (  733 => 404,  711 => 385,  706 => 383,  682 => 362,  656 => 339,  650 => 336,  622 => 311,  617 => 309,  593 => 288,  566 => 264,  560 => 261,  507 => 211,  503 => 210,  499 => 209,  489 => 202,  483 => 199,  479 => 198,  464 => 186,  460 => 185,  456 => 184,  452 => 183,  442 => 176,  434 => 173,  425 => 166,  419 => 164,  417 => 163,  403 => 154,  397 => 151,  392 => 148,  385 => 144,  382 => 143,  379 => 142,  373 => 140,  371 => 139,  365 => 138,  360 => 136,  355 => 133,  348 => 129,  345 => 128,  342 => 127,  336 => 125,  334 => 124,  328 => 123,  323 => 121,  318 => 118,  311 => 114,  308 => 113,  305 => 112,  299 => 110,  297 => 109,  291 => 108,  286 => 106,  281 => 103,  274 => 99,  271 => 98,  268 => 97,  262 => 95,  260 => 94,  254 => 93,  249 => 91,  244 => 88,  237 => 84,  234 => 83,  231 => 82,  225 => 80,  223 => 79,  217 => 78,  212 => 76,  207 => 73,  200 => 69,  197 => 68,  194 => 67,  188 => 65,  186 => 64,  180 => 63,  175 => 61,  168 => 59,  152 => 48,  146 => 45,  140 => 43,  134 => 41,  132 => 40,  125 => 36,  121 => 35,  117 => 34,  110 => 30,  106 => 28,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_otp_login.twig", "");
    }
}
