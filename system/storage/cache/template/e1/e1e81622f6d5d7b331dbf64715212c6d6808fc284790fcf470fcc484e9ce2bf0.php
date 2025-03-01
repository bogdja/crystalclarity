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

/* octemplates/module/oct_review_reminder.twig */
class __TwigTemplate_aa51e26e9cadc4bf84460d80d3dcd6002e7911d2c2dbb544727bf2d5d9a0af47 extends Template
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
        echo "  ";
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
          <button type=\"submit\" form=\"form-oct_review_reminder\" data-toggle=\"tooltip\" title=\"";
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
            echo "            <li><a href=\"";
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
        echo "        </ul>
      </div>
    </div>
    <div class=\"container-fluid\">
      ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "        <script>
          usNotify('danger', '";
            // line 21
            echo ($context["error_warning"] ?? null);
            echo "');
        </script>
      ";
        }
        // line 24
        echo "      ";
        if (($context["error_days_after_order"] ?? null)) {
            // line 25
            echo "        <script>
          usNotify('danger', '";
            // line 26
            echo ($context["error_days_after_order"] ?? null);
            echo "');
        </script>
      ";
        }
        // line 29
        echo "      ";
        if (($context["error_order_status"] ?? null)) {
            // line 30
            echo "        <script>
          usNotify('danger', '";
            // line 31
            echo ($context["error_order_status"] ?? null);
            echo "');
        </script>
      ";
        }
        // line 34
        echo "      ";
        if (($context["error_cron_password"] ?? null)) {
            // line 35
            echo "        <script>
          usNotify('danger', '";
            // line 36
            echo ($context["error_cron_password"] ?? null);
            echo "');
        </script>
      ";
        }
        // line 39
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 40
            echo "        <script>
          usNotify('success', '";
            // line 41
            echo ($context["success"] ?? null);
            echo "');
        </script>
      ";
        }
        // line 44
        echo "    
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 47
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form action=\"";
        // line 50
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-oct_review_reminder\" class=\"form-horizontal\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 52
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-email_templates\" data-toggle=\"tab\">";
        // line 53
        echo ($context["tab_email_templates"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-statistics\" data-toggle=\"tab\">";
        // line 54
        echo ($context["tab_statistics"] ?? null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <!-- Головне Налаштування -->
              <div class=\"tab-pane active\" id=\"tab-general\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"oct_review_reminder_status\">";
        // line 60
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"toggle-group\">
                      <input type=\"checkbox\" name=\"oct_review_reminder_status\" ";
        // line 63
        if (($context["oct_review_reminder_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_review_reminder_status\" tabindex=\"1\">
                      <label for=\"oct_review_reminder_status\"></label>
                      <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                        <div class=\"onoffswitch-label\">
                          <div class=\"onoffswitch-inner\"></div>
                          <div class=\"onoffswitch-switch\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div id=\"general_settings\" ";
        // line 75
        if ( !($context["oct_review_reminder_status"] ?? null)) {
            echo "style=\"display:none\"";
        }
        echo ">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-days-after-order\">";
        // line 77
        echo ($context["entry_days_after_order"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"oct_review_reminder_days_after_order\" value=\"";
        // line 79
        echo ($context["oct_review_reminder_days_after_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_days_after_order"] ?? null);
        echo "\" id=\"input-days-after-order\" class=\"form-control\" />
                        ";
        // line 80
        if (($context["error_days_after_order"] ?? null)) {
            echo "<div class=\"text-danger\"></div>";
        }
        // line 81
        echo "                      <span class=\"help-block\">";
        echo ($context["help_days_after_order"] ?? null);
        echo "</span>
                    </div>
                  </div>

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\">";
        // line 86
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"oct_review_reminder_order_status[]\" class=\"form-control\" style=\"min-height: 240px;\" multiple=\"multiple\">
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 90
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 90);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 90), ($context["oct_review_reminder_order_status"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 90);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                      </select>
                      ";
        // line 93
        if (($context["error_order_status"] ?? null)) {
            echo "<div class=\"text-danger\"></div>";
        }
        // line 94
        echo "                      <span class=\"help-block\">";
        echo ($context["help_order_status"] ?? null);
        echo "</span>
                    </div>
                  </div>

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-days-after-order\">";
        // line 99
        echo ($context["entry_cron_password"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"oct_review_reminder_cron_password\" value=\"";
        // line 101
        echo ($context["oct_review_reminder_cron_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cron_password"] ?? null);
        echo "\" id=\"input-days-after-order\" class=\"form-control\" />
                      ";
        // line 102
        if (($context["error_cron_password"] ?? null)) {
            echo "<div class=\"text-danger\"></div>";
        }
        // line 103
        echo "                      <span class=\"help-block\">";
        echo ($context["help_cron_password"] ?? null);
        echo "</span>
                    </div>
                  </div>
                    ";
        // line 106
        if (($context["cron_url"] ?? null)) {
            // line 107
            echo "                        <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-cron\">";
            // line 108
            echo ($context["entry_cron"] ?? null);
            echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" value=\"/usr/bin/wget -O - -q -t 1 '";
            // line 111
            echo ($context["cron_url"] ?? null);
            echo "'\" id=\"input-cron\" class=\"form-control\" readonly=\"\">
                                        <span class=\"input-group-btn\">
                                            <button id=\"clipboard-button\" class=\"btn btn-info\" type=\"button\" data-toggle=\"tooltip\" title=\"\" onclick=\"copyToClipboard('input-cron');\" data-original-title=\"";
            // line 113
            echo ($context["text_copy"] ?? null);
            echo "\">
                                                <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                     <span class=\"help-block\">";
            // line 118
            echo ($context["help_cron"] ?? null);
            echo "</span>
                                </div>
                        </div>
                    ";
        }
        // line 122
        echo "
                </div>
              </div>
  
              <!-- Шаблони Листів -->
              <div class=\"tab-pane\" id=\"tab-email_templates\">
              <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"oct_review_reminder_etemplates_status\">";
        // line 129
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"toggle-group\">
                      <input type=\"checkbox\" name=\"oct_review_reminder_etemplates_status\" ";
        // line 132
        if (($context["oct_review_reminder_etemplates_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_review_reminder_etemplates_status\" tabindex=\"1\">
                      <label for=\"oct_review_reminder_etemplates_status\"></label>
                      <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                        <div class=\"onoffswitch-label\">
                          <div class=\"onoffswitch-inner\"></div>
                          <div class=\"onoffswitch-switch\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\" id=\"etemplates_status\" ";
        // line 143
        if ( !($context["oct_review_reminder_etemplates_status"] ?? null)) {
            echo "style=\"display:none\"";
        }
        echo ">
                  <div class=\"col-sm-12\">
                    <ul class=\"nav nav-tabs\" id=\"language_tabs\">
                      ";
        // line 146
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
            // line 147
            echo "                        <li ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 147)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 147);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 147);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 147);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 147);
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
        // line 149
        echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
        // line 151
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
            // line 152
            echo "                        <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 152)) {
                echo "active";
            }
            echo "\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
            echo "\">
                          <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-email_template_";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
            echo "\">";
            echo ($context["entry_email_subject"] ?? null);
            echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"oct_review_reminder_email_template[";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 156);
            echo "][subject]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_review_reminder_email_template"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 156), [], "array", false, true, false, 156), "subject", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_review_reminder_email_template"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 156), [], "array", false, true, false, 156), "subject", [], "any", false, false, false, 156), "")) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_email_subject"] ?? null);
            echo "\" id=\"input-email_template_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 156);
            echo "\" class=\"form-control\" />
                            </div>
                          </div>
                          <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-email_template_body_";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 160);
            echo "\">";
            echo ($context["entry_email_body"] ?? null);
            echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"oct_review_reminder_email_template[";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162);
            echo "][body]\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email_body"] ?? null);
            echo "\" id=\"input-email_template_body_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162);
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_review_reminder_email_template"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162), [], "array", false, true, false, 162), "body", [], "any", true, true, false, 162)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_review_reminder_email_template"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162), [], "array", false, true, false, 162), "body", [], "any", false, false, false, 162), "")) : (""));
            echo "</textarea>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
            // line 166
            echo ($context["text_shortcodes"] ?? null);
            echo "</label>
                            <div class=\"col-sm-10\">
                              <ul>
                                  <li><strong>[customer_name]</strong> - ";
            // line 169
            echo ($context["text_shortcode_customer_name"] ?? null);
            echo "</li>
                                  <li><strong>[order_id]</strong> - ";
            // line 170
            echo ($context["text_shortcode_order_id"] ?? null);
            echo "</li>
                                  <li><strong>[products]</strong> - ";
            // line 171
            echo ($context["text_shortcode_products_name"] ?? null);
            echo "</li>
                                  <li><strong>[review_link]</strong> - ";
            // line 172
            echo ($context["text_shortcode_review_link"] ?? null);
            echo "</li>
                                  <li><strong>[store]</strong> - ";
            // line 173
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
        // line 179
        echo "                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Статистика -->
              <div class=\"tab-pane\" id=\"tab-statistics\">
                <div class=\"form-group\">
                  <div class=\"col-sm-12\">
                    <div id=\"log_container\" class=\"table-responsive\">
                      <table class=\"table table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 192
        echo ($context["column_order_id"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 193
        echo ($context["column_email"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 194
        echo ($context["column_telephone"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 195
        echo ($context["column_sent_date"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 196
        echo ($context["column_status"] ?? null);
        echo "</td>
                          </tr>
                        </thead>
                        <tbody id=\"log_table_body\">
                        </tbody>
                      </table>
                      <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination\" id=\"log_pagination\">
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
          </form>
        </div>
      </div>
    </div>
  
    <script>
      \$('#oct_review_reminder_status').change(function() {
        var \$input = \$(this);
        if (\$input.is(\":checked\")) {
          \$(\"#general_settings\").slideDown('slow');
        } else {
          \$(\"#general_settings\").slideUp('slow');
        }
      });

      \$('#oct_review_reminder_etemplates_status').change(function() {
        var \$input = \$(this);
        if (\$input.is(\":checked\")) {
          \$(\"#etemplates_status\").slideDown('slow');
        } else {
          \$(\"#etemplates_status\").slideUp('slow');
        }
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
      \$('#language_tabs a:first').tab('show');
  
      function loadLogs(page) {
          \$.ajax({
              url: 'index.php?route=octemplates/module/oct_review_reminder/getLogs&user_token=";
        // line 260
        echo ($context["user_token"] ?? null);
        echo "&page=' + page,
              type: 'GET',
              dataType: 'json',
              success: function(json) {
                  if (json.logs) {
                      var html = '';
                      for (var i = 0; i < json.logs.length; i++) {
                          html += '<tr>';
                          html += '<td class=\"text-left\"><a href=\"index.php?route=sale/order/info&user_token=";
        // line 268
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + json.logs[i].order_id + '\" target=\"_blank\">' + json.logs[i].order_id + '</a></td>';
                          
                          if (json.logs[i].customer_id > 0) {
                              html += '<td class=\"text-left\">' + json.logs[i].firstname + ' ' + json.logs[i].lastname + '<br /> <a href=\"index.php?route=customer/customer/edit&user_token=";
        // line 271
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + json.logs[i].customer_id + '\" target=\"_blank\">' + json.logs[i].email + '</a></td>';
                          } else {
                              html += '<td class=\"text-left\">' + json.logs[i].email + '</td>';
                          }

                          html += '<td class=\"text-left\">' + json.logs[i].telephone + '</td>';
                          html += '<td class=\"text-left\">' + json.logs[i].date_added + '</td>';

                          if (json.logs[i].is_sent == 1) {
                              html += '<td class=\"text-left\"><span class=\"badge badge-success\" style=\"background-color: green; color: white;\">sended</span></td>';
                          } else {
                              html += '<td class=\"text-left\"><span class=\"badge badge-danger\" style=\"background-color: red; color: white;\">error</span></td>';
                          }

                          html += '</tr>';
                      }
                      \$('#log_table_body').html(html);

                      if (json.pagination) {
                          \$('#log_pagination').html(json.pagination);

                          \$('#log_pagination а').on('click', function (e) {
                              e.preventDefault();
                              var page = \$(this).attr('href').split('page=')[1];
                              loadLogs(page);
                          });
                      }

                      if (json.logs.length == 0) {
                          \$('#log_table_body').html('<tr><td colspan=\"5\" class=\"text-left\"><div class=\"alert alert-danger\">";
        // line 300
        echo ($context["text_no_logs"] ?? null);
        echo "</div></td></tr>');
                      }
                  }
              }
          });
      }

      \$(document).ready(function() {
          \$('a[href=\"#tab-statistics\"]').on('shown.bs.tab', function (e) {
              loadLogs(1);
          });
          
          \$(document).on('click', '#log_pagination a', function (e) {
              e.preventDefault();
              var page = \$(this).attr('href').split('page=')[1];
              loadLogs(page);
          });
      });
    </script>
  </div>
  ";
        // line 320
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_review_reminder.twig";
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
        return array (  697 => 320,  674 => 300,  642 => 271,  636 => 268,  625 => 260,  558 => 196,  554 => 195,  550 => 194,  546 => 193,  542 => 192,  527 => 179,  507 => 173,  503 => 172,  499 => 171,  495 => 170,  491 => 169,  485 => 166,  470 => 162,  463 => 160,  450 => 156,  443 => 154,  433 => 152,  416 => 151,  412 => 149,  383 => 147,  366 => 146,  358 => 143,  342 => 132,  336 => 129,  327 => 122,  320 => 118,  312 => 113,  307 => 111,  301 => 108,  298 => 107,  296 => 106,  289 => 103,  285 => 102,  279 => 101,  274 => 99,  265 => 94,  261 => 93,  258 => 92,  243 => 90,  239 => 89,  233 => 86,  224 => 81,  220 => 80,  214 => 79,  209 => 77,  202 => 75,  185 => 63,  179 => 60,  170 => 54,  166 => 53,  162 => 52,  157 => 50,  151 => 47,  146 => 44,  140 => 41,  137 => 40,  134 => 39,  128 => 36,  125 => 35,  122 => 34,  116 => 31,  113 => 30,  110 => 29,  104 => 26,  101 => 25,  98 => 24,  92 => 21,  89 => 20,  87 => 19,  81 => 15,  70 => 13,  66 => 12,  61 => 10,  54 => 8,  50 => 7,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_review_reminder.twig", "");
    }
}
