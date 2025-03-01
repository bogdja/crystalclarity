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

/* octemplates/module/oct_sms_notify.twig */
class __TwigTemplate_103715dcdeed07343796912ce685268af80e1afa615c6ca01efc09cb9add355b extends Template
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
          <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
            echo "            <li><a href=\"";
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
        echo "        </ul>
      </div>
    </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <script>
            usNotify('danger', '";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "');
        </script>
    ";
        }
        // line 23
        echo "    ";
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
        echo "      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\">
             <a href=\"#tab-general\" class=\"nav-link active\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_general"] ?? null);
        echo "</a>
            </li>
            <li>
              <a href=\"#tab-settings\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_settings"] ?? null);
        echo "</a>
            </li>
            <li>
              <a href=\"#tab-templates\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_templates"] ?? null);
        echo "</a>
            </li>
            <li>
              <a href=\"#tab-logs\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_logs"] ?? null);
        echo "</a>
            </li>
          </ul>
          <div class=\"tab-content\">
            <!-- General Tab -->
            <div class=\"tab-pane active\" id=\"tab-general\">
              <!-- Module Status -->
              <div class=\"form-group";
        // line 52
        if (($context["error_status"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 53
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"toggle-group\">
                    <input type=\"checkbox\" name=\"oct_sms_settings[status]\" ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "status", [], "any", false, false, false, 56)) {
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
                  ";
        // line 65
        if (($context["error_status"] ?? null)) {
            // line 66
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_status"] ?? null);
            echo "</div>
                  ";
        }
        // line 68
        echo "                </div>
              </div>
              <input type=\"hidden\" name=\"oct_sms_settings[oct_sms_token]\" value=\"";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "oct_sms_token", [], "any", false, false, false, 70);
        echo "\" />
              <div id=\"general_settings\" ";
        // line 71
        if ( !twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "status", [], "any", false, false, false, 71)) {
            echo "style=\"display:none\"";
        }
        echo ">
                <!-- Translit status -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-translit\">";
        // line 74
        echo ($context["entry_translit"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"toggle-group\">
                      <input type=\"checkbox\" name=\"oct_sms_settings[translit]\" ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "translit", [], "any", false, false, false, 77)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"translit\" tabindex=\"1\">
                      <label for=\"translit\"></label>
                      <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                        <div class=\"onoffswitch-label\">
                          <div class=\"onoffswitch-inner\"></div>
                          <div class=\"onoffswitch-switch\"></div>
                        </div>
                      </div>
                    </div>
                    <span class=\"help-block\">";
        // line 86
        echo ($context["help_translit"] ?? null);
        echo "</span>
                  </div>
                </div>
                <!-- logging status -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-logging\">";
        // line 91
        echo ($context["entry_logging"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"toggle-group\">
                      <input type=\"checkbox\" name=\"oct_sms_settings[logging]\" ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "logging", [], "any", false, false, false, 94)) {
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
                    <span class=\"help-block\">";
        // line 103
        echo ($context["help_logging"] ?? null);
        echo "</span>
                  </div>
                </div>
                <div class=\"required form-group";
        // line 106
        if (($context["error_sender_name"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-sender-name\">";
        // line 107
        echo ($context["entry_sender_name"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"oct_sms_settings[sender_name]\" value=\"";
        // line 109
        echo twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "sender_name", [], "any", false, false, false, 109);
        echo "\" placeholder=\"";
        echo ($context["entry_sender_name"] ?? null);
        echo "\" id=\"input-sender-name\" class=\"form-control\" />
                    ";
        // line 110
        if (($context["error_sender_name"] ?? null)) {
            // line 111
            echo "                      <script>
                          usNotify('danger', '";
            // line 112
            echo ($context["error_sender_name"] ?? null);
            echo "');
                      </script>
                      <div class=\"text-danger\">";
            // line 114
            echo ($context["error_sender_name"] ?? null);
            echo "</div>
                    ";
        }
        // line 116
        echo "                    <span class=\"help-block\">";
        echo ($context["help_sender_name"] ?? null);
        echo "</span>
                  </div>
                </div>
                <div class=\"required form-group";
        // line 119
        if (($context["error_admin_phone"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-phone\">";
        // line 120
        echo ($context["entry_admin_phone"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"oct_sms_settings[admin_phone]\" value=\"";
        // line 122
        echo twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "admin_phone", [], "any", false, false, false, 122);
        echo "\" placeholder=\"";
        echo ($context["entry_admin_phone"] ?? null);
        echo "\" id=\"input-admin-phone\" class=\"form-control\" />
                    ";
        // line 123
        if (($context["error_admin_phone"] ?? null)) {
            // line 124
            echo "                      <script>
                          usNotify('danger', '";
            // line 125
            echo ($context["error_admin_phone"] ?? null);
            echo "');
                      </script>
                      <div class=\"text-danger\">";
            // line 127
            echo ($context["error_admin_phone"] ?? null);
            echo "</div>
                    ";
        }
        // line 129
        echo "                    <span class=\"help-block\">";
        echo ($context["help_admin_phone"] ?? null);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Settings Tab -->
            <div class=\"tab-pane\" id=\"tab-settings\">
              <!-- Provider Selection -->
              <div class=\"required form-group";
        // line 137
        if (($context["error_provider"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-provider\">";
        // line 138
        echo ($context["entry_provider"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"oct_sms_settings[provider]\" id=\"input-provider\" class=\"form-control\">
                    <option value=\"\">";
        // line 141
        echo ($context["text_select_provider"] ?? null);
        echo "</option>
                    <option value=\"turbosms\" ";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "provider", [], "any", false, false, false, 142) == "turbosms")) {
            echo "selected";
        }
        echo ">TurboSMS</option>
                    <option value=\"alphasms\" ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "provider", [], "any", false, false, false, 143) == "alphasms")) {
            echo "selected";
        }
        echo ">AlphaSMS</option>
                  </select>
                  ";
        // line 145
        if (($context["error_provider"] ?? null)) {
            // line 146
            echo "                    <script>
                        usNotify('danger', '";
            // line 147
            echo ($context["error_provider"] ?? null);
            echo "');
                    </script>
                    <div class=\"text-danger\">";
            // line 149
            echo ($context["error_provider"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo "                  <span class=\"help-block\">";
        echo ($context["help_provider"] ?? null);
        echo "</span>
                </div>
              </div>
              <!-- TurboSMS Settings -->
              <div id=\"turbosms-settings\" style=\"";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "provider", [], "any", false, false, false, 155) != "turbosms")) {
            echo "display:none;";
        }
        echo "\">
                <h4>";
        // line 156
        echo ($context["text_turbosms_settings"] ?? null);
        echo "</h4>
                <!-- TurboSMS Token -->
                <div class=\"required form-group";
        // line 158
        if (($context["error_turbosms_token"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-turbosms-token\">";
        // line 159
        echo ($context["entry_turbosms_token"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"oct_sms_settings[turbosms][token]\" value=\"";
        // line 161
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "turbosms", [], "any", false, false, false, 161), "token", [], "any", false, false, false, 161);
        echo "\" placeholder=\"";
        echo ($context["entry_turbosms_token"] ?? null);
        echo "\" id=\"input-turbosms-token\" class=\"form-control\" />
                    ";
        // line 162
        if (($context["error_turbosms_token"] ?? null)) {
            // line 163
            echo "                        <script>
                            usNotify('danger', '";
            // line 164
            echo ($context["error_turbosms_token"] ?? null);
            echo "');
                        </script>
                        <div class=\"text-danger\">";
            // line 166
            echo ($context["error_turbosms_token"] ?? null);
            echo "</div>
                    ";
        }
        // line 168
        echo "                    <span class=\"help-block\">";
        echo ($context["help_turbosms_token"] ?? null);
        echo "</span>
                  </div>
                </div>
                <!-- Hybrid Sending Toggle -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 173
        echo ($context["entry_turbosms_hybrid"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"toggle-group\">
                      <input type=\"checkbox\" name=\"oct_sms_settings[turbosms][hybrid_sending]\" ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "turbosms", [], "any", false, false, false, 176), "hybrid_sending", [], "any", false, false, false, 176)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"turbosms_hybrid\" tabindex=\"1\">
                      <label for=\"turbosms_hybrid\"></label>
                      <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                        <div class=\"onoffswitch-label\">
                          <div class=\"onoffswitch-inner\"></div>
                          <div class=\"onoffswitch-switch\"></div>
                        </div>
                      </div>
                    </div>
                    <span class=\"help-block\">";
        // line 185
        echo ($context["help_turbosms_hybrid"] ?? null);
        echo "</span>
                  </div>
                </div>
                <!-- Viber Sender for TurboSMS -->
                <div id=\"turbosms-viber-sender-container\" style=\"display: none;\">
                  <div class=\"required form-group";
        // line 190
        if (($context["error_turbosms_viber_sender"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\" for=\"input-turbosms-viber-sender\">";
        // line 191
        echo ($context["entry_viber_sender"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"oct_sms_settings[turbosms][viber_sender]\" value=\"";
        // line 193
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "turbosms", [], "any", false, false, false, 193), "viber_sender", [], "any", false, false, false, 193);
        echo "\" placeholder=\"";
        echo ($context["entry_viber_sender"] ?? null);
        echo "\" id=\"input-turbosms-viber-sender\" class=\"form-control\" />
                      ";
        // line 194
        if (($context["error_turbosms_viber_sender"] ?? null)) {
            // line 195
            echo "                        <script>
                            usNotify('danger', '";
            // line 196
            echo ($context["error_turbosms_viber_sender"] ?? null);
            echo "');
                        </script>
                        <div class=\"text-danger\">";
            // line 198
            echo ($context["error_turbosms_viber_sender"] ?? null);
            echo "</div>
                      ";
        }
        // line 200
        echo "                      <span class=\"help-block\">";
        echo ($context["help_viber_sender"] ?? null);
        echo "</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- AlphaSMS Settings -->
              <div id=\"alphasms-settings\" style=\"";
        // line 206
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "provider", [], "any", false, false, false, 206) != "alphasms")) {
            echo "display:none;";
        }
        echo "\">
                <h4>";
        // line 207
        echo ($context["text_alphasms_settings"] ?? null);
        echo "</h4>
                <!-- AlphaSMS API Key -->
                <div class=\"required form-group";
        // line 209
        if (($context["error_alphasms_api_key"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-alphasms-api-key\">";
        // line 210
        echo ($context["entry_alphasms_api_key"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"oct_sms_settings[alphasms][api_key]\" value=\"";
        // line 212
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "alphasms", [], "any", false, false, false, 212), "api_key", [], "any", false, false, false, 212);
        echo "\" placeholder=\"";
        echo ($context["entry_alphasms_api_key"] ?? null);
        echo "\" id=\"input-alphasms-api-key\" class=\"form-control\" />
                    ";
        // line 213
        if (($context["error_alphasms_api_key"] ?? null)) {
            // line 214
            echo "                        <script>
                            usNotify('danger', '";
            // line 215
            echo ($context["error_alphasms_api_key"] ?? null);
            echo "');
                        </script>
                        <div class=\"text-danger\">";
            // line 217
            echo ($context["error_alphasms_api_key"] ?? null);
            echo "</div>
                    ";
        }
        // line 219
        echo "                    <span class=\"help-block\">";
        echo ($context["help_alphasm_api_key"] ?? null);
        echo "</span>
                  </div>
                </div>
                <!-- Hybrid Sending Toggle -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 224
        echo ($context["entry_alphasms_hybrid"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"toggle-group\">
                      <input type=\"checkbox\" name=\"oct_sms_settings[alphasms][hybrid_sending]\" ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "alphasms", [], "any", false, false, false, 227), "hybrid_sending", [], "any", false, false, false, 227)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"alphasms_hybrid\" tabindex=\"1\">
                      <label for=\"alphasms_hybrid\"></label>
                      <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                        <div class=\"onoffswitch-label\">
                          <div class=\"onoffswitch-inner\"></div>
                          <div class=\"onoffswitch-switch\"></div>
                        </div>
                      </div>
                    </div>
                    <span class=\"help-block\">";
        // line 236
        echo ($context["help_alphasm_hybrid"] ?? null);
        echo "</span>
                  </div>
                </div>
                <!-- Viber Sender for AlphaSMS -->
                <div id=\"alphasms-viber-sender-container\" style=\"display: none;\">
                  <div class=\"required form-group";
        // line 241
        if (($context["error_alphasms_viber_sender"] ?? null)) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\" for=\"input-alphasms-viber-sender\">";
        // line 242
        echo ($context["entry_viber_sender"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"oct_sms_settings[alphasms][viber_sender]\" value=\"";
        // line 244
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "alphasms", [], "any", false, false, false, 244), "viber_sender", [], "any", false, false, false, 244);
        echo "\" placeholder=\"";
        echo ($context["entry_viber_sender"] ?? null);
        echo "\" id=\"input-alphasms-viber-sender\" class=\"form-control\" />
                      ";
        // line 245
        if (($context["error_alphasms_viber_sender"] ?? null)) {
            // line 246
            echo "                        <script>
                            usNotify('danger', '";
            // line 247
            echo ($context["error_alphasms_viber_sender"] ?? null);
            echo "');
                        </script>
                        <div class=\"text-danger\">";
            // line 249
            echo ($context["error_alphasms_viber_sender"] ?? null);
            echo "</div>
                      ";
        }
        // line 251
        echo "                    <span class=\"help-block\">";
        echo ($context["help_alphasm_viber_sender"] ?? null);
        echo "</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Templates Tab -->
            <div class=\"tab-pane\" id=\"tab-templates\">
              <!-- SMS Templates -->
              

              ";
        // line 262
        $context["templates"] = ($context["templates"] ?? null);
        // line 263
        echo "              <div class=\"col-lg-3\">
                <ul class=\"nav nav-pills nav-stacked mb-3\" id=\"template-tabs\">
                  ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 266
            echo "                    <li";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 266)) {
                echo " class=\"active\"";
            }
            echo ">
                      <a href=\"#template_";
            // line 267
            echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 267);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["template"], "name", [], "any", false, false, false, 267);
            echo "</a>
                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "                </ul>
              </div>
              <div class=\"col-lg-9\">
                <div class=\"tab-content\">
                  ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 275
            echo "                    <div class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 275)) {
                echo " active";
            }
            echo "\" id=\"template_";
            echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 275);
            echo "\">
                      <h2>";
            // line 276
            echo twig_get_attribute($this->env, $this->source, $context["template"], "name", [], "any", false, false, false, 276);
            echo "</h2>
                      <hr />
                      <p>";
            // line 278
            echo twig_get_attribute($this->env, $this->source, $context["template"], "description", [], "any", false, false, false, 278);
            echo "</p>

                      ";
            // line 280
            if (twig_get_attribute($this->env, $this->source, $context["template"], "templates", [], "any", true, true, false, 280)) {
                // line 281
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["template"], "templates", [], "any", false, false, false, 281));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subtemplate"]) {
                    // line 282
                    echo "                          <h3 class=\"text-info\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "name", [], "any", false, false, false, 282);
                    echo "</h3>
                          <p>";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "description", [], "any", false, false, false, 283);
                    echo "</p>

                          <!-- Template Status Toggle -->
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                    // line 287
                    echo ($context["entry_template_status"] ?? null);
                    echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"toggle-group\">
                                <input type=\"checkbox\" name=\"oct_sms_settings[templates][";
                    // line 290
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 290);
                    echo "][status]\" ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "templates", [], "any", false, false, false, 290)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 290)] ?? null) : null), "status", [], "any", false, false, false, 290)) {
                        echo "checked=\"checked\"";
                    }
                    echo " id=\"status_";
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 290);
                    echo "\" tabindex=\"1\">
                                <label for=\"status_";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 291);
                    echo "\"></label>
                                <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                  <div class=\"onoffswitch-label\">
                                    <div class=\"onoffswitch-inner\"></div>
                                    <div class=\"onoffswitch-switch\"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Edit Localization Toggle -->
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                    // line 304
                    echo ($context["entry_edit_localization"] ?? null);
                    echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"toggle-group\">
                                <input type=\"checkbox\" name=\"oct_sms_settings[templates][";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 307);
                    echo "][edit_localization]\" ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "templates", [], "any", false, false, false, 307)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 307)] ?? null) : null), "edit_localization", [], "any", false, false, false, 307)) {
                        echo "checked=\"checked\"";
                    }
                    echo " id=\"edit_localization_";
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 307);
                    echo "\" tabindex=\"1\">
                                <label for=\"edit_localization_";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 308);
                    echo "\"></label>
                                <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                  <div class=\"onoffswitch-label\">
                                    <div class=\"onoffswitch-inner\"></div>
                                    <div class=\"onoffswitch-switch\"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Hidden Template Code -->
                          <input type=\"hidden\" name=\"oct_sms_settings[templates][";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 320);
                    echo "][code]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 320);
                    echo "\" />

                          <!-- Localization Tabs for Subtemplate -->
                          <div id=\"localization_container_";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 323);
                    echo "\">
                            <ul class=\"nav nav-tabs\" id=\"language_";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 324);
                    echo "\">
                              ";
                    // line 325
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
                        // line 326
                        echo "                                <li";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 326)) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                  <a href=\"#language_";
                        // line 327
                        echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 327);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 327);
                        echo "\" data-toggle=\"tab\">
                                    <img src=\"language/";
                        // line 328
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 328);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 328);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 328);
                        echo "\" /> ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 328);
                        echo "
                                  </a>
                                </li>
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
                    // line 332
                    echo "                            </ul>
                            <div class=\"tab-content\">
                              ";
                    // line 334
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
                        // line 335
                        echo "                                <div class=\"tab-pane";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 335)) {
                            echo " active";
                        }
                        echo "\" id=\"language_";
                        echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 335);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 335);
                        echo "\">
                                  <div class=\"form-group\">
                                    <div class=\"col-sm-2 text-right\"><p>";
                        // line 337
                        echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "shortcodes", [], "any", false, false, false, 337);
                        echo "</p></div>
                                    <div class=\"col-sm-10\">
                                      <textarea name=\"oct_sms_settings[templates][";
                        // line 339
                        echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 339);
                        echo "][message][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 339);
                        echo "]\" rows=\"5\" class=\"form-control\">";
                        echo (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "templates", [], "any", false, false, false, 339)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 339)] ?? null) : null), "message", [], "any", false, false, false, 339)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 339)] ?? null) : null);
                        echo "</textarea>
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
                    // line 344
                    echo "                            </div>
                          </div>
                          <hr />
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtemplate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "                      ";
            } else {
                // line 349
                echo "                        <!-- Template Status Toggle -->
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
                // line 351
                echo ($context["entry_template_status"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"toggle-group\">
                              <input type=\"checkbox\" name=\"oct_sms_settings[templates][";
                // line 354
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 354);
                echo "][status]\" ";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "templates", [], "any", false, false, false, 354)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 354)] ?? null) : null), "status", [], "any", false, false, false, 354)) {
                    echo "checked=\"checked\"";
                }
                echo " id=\"status_";
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 354);
                echo "\" tabindex=\"1\">
                              <label for=\"status_";
                // line 355
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 355);
                echo "\"></label>
                              <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                <div class=\"onoffswitch-label\">
                                  <div class=\"onoffswitch-inner\"></div>
                                  <div class=\"onoffswitch-switch\"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Edit Localization Toggle -->
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
                // line 368
                echo ($context["entry_edit_localization"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"toggle-group\">
                              <input type=\"checkbox\" name=\"oct_sms_settings[templates][";
                // line 371
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 371);
                echo "][edit_localization]\" ";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "templates", [], "any", false, false, false, 371)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 371)] ?? null) : null), "edit_localization", [], "any", false, false, false, 371)) {
                    echo "checked=\"checked\"";
                }
                echo " id=\"edit_localization_";
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 371);
                echo "\" tabindex=\"1\">
                              <label for=\"edit_localization_";
                // line 372
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 372);
                echo "\"></label>
                              <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
                                <div class=\"onoffswitch-label\">
                                  <div class=\"onoffswitch-inner\"></div>
                                  <div class=\"onoffswitch-switch\"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Hidden Template Code -->
                        <input type=\"hidden\" name=\"oct_sms_settings[templates][";
                // line 384
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 384);
                echo "][code]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 384);
                echo "\" />

                        <!-- Localization Tabs for Client/Admin -->
                        <div id=\"localization_container_";
                // line 387
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 387);
                echo "\" style=\"display: none;\">
                          <ul class=\"nav nav-tabs\" id=\"language_";
                // line 388
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 388);
                echo "\">
                            ";
                // line 389
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
                    // line 390
                    echo "                              <li";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 390)) {
                        echo " class=\"active\"";
                    }
                    echo ">
                                <a href=\"#language_";
                    // line 391
                    echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 391);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 391);
                    echo "\" data-toggle=\"tab\">
                                  <img src=\"language/";
                    // line 392
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 392);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 392);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 392);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 392);
                    echo "
                                </a>
                              </li>
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
                // line 396
                echo "                          </ul>
                          <div class=\"tab-content\">
                            ";
                // line 398
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
                    // line 399
                    echo "                              <div class=\"tab-pane";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 399)) {
                        echo " active";
                    }
                    echo "\" id=\"language_";
                    echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 399);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 399);
                    echo "\">
                                <div class=\"form-group\">
                                  <div class=\"col-sm-2 text-right\"><p>";
                    // line 401
                    echo twig_get_attribute($this->env, $this->source, $context["template"], "shortcodes", [], "any", false, false, false, 401);
                    echo "</p></div>
                                  <div class=\"col-sm-10\">
                                    <textarea name=\"oct_sms_settings[templates][";
                    // line 403
                    echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 403);
                    echo "][message][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 403);
                    echo "]\" rows=\"5\" class=\"form-control\">";
                    echo (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["oct_sms_settings"] ?? null), "templates", [], "any", false, false, false, 403)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 403)] ?? null) : null), "message", [], "any", false, false, false, 403)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 403)] ?? null) : null);
                    echo "</textarea>
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
                // line 408
                echo "                          </div>
                        </div>
                      ";
            }
            // line 411
            echo "                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                </div>
              </div>
            </div>
            <!-- Logs Tab -->
            <div class=\"tab-pane\" id=\"tab-logs\">
                <div>
                    <button type=\"button\" id=\"button-delete-logs\" data-toggle=\"tooltip\" title=\"";
        // line 419
        echo ($context["button_delete_logs"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i>&nbsp;";
        echo ($context["button_delete_logs"] ?? null);
        echo "</button>
                </div>
                <div class=\"help-block\" id=\"help-del-block\" style=\"margin: 12px 0px;\">
                    <b>";
        // line 422
        echo ($context["help_logs"] ?? null);
        echo "</b>
                </div>
                <br />
              <!-- Logs Table -->
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\" id=\"sms-logs-table\">
                  <thead>
                    <tr>
                      <th>";
        // line 430
        echo ($context["column_phone"] ?? null);
        echo "</th>
                      <th>";
        // line 431
        echo ($context["column_message"] ?? null);
        echo "</th>
                      <th>";
        // line 432
        echo ($context["column_provider"] ?? null);
        echo "</th>
                      <th>";
        // line 433
        echo ($context["column_response"] ?? null);
        echo "</th>
                      <th>";
        // line 434
        echo ($context["column_template_code"] ?? null);
        echo "</th>
                      <th>";
        // line 435
        echo ($context["column_date_added"] ?? null);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody id=\"sms-logs-body\">
                    <!-- Logs will be loaded via AJAX -->
                  </tbody>
                </table>
              </div>
              <!-- Pagination -->
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\" id=\"sms-pagination\"></div>
                <div class=\"col-sm-6 text-right\" id=\"sms-results\"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function() {

  \$('#status').change(function() {
    var \$input = \$(this);
    if (\$input.is(\":checked\")) {
      \$(\"#general_settings\").slideDown('slow');
    } else {
      \$(\"#general_settings\").slideUp('slow');
    }
  });

  \$('#button-delete-logs').on('click', function() {
      if (confirm('";
        // line 468
        echo ($context["text_confirm_delete"] ?? null);
        echo "')) {
          console.log('Запит на видалення логів відправлено: ' + new Date().toISOString());
          \$.ajax({
              url: 'index.php?route=octemplates/module/oct_sms_notify/deleteLogs&user_token=";
        // line 471
        echo ($context["user_token"] ?? null);
        echo "',
              dataType: 'json',
              success: function(json) {
                  console.log('Відповідь отримана: ' + new Date().toISOString());
                  if (json['success']) {
                      usNotify('success', json['success']);
                      \$('#button-delete-logs').hide();
                      \$('#help-del-block').hide();
                  } else if (json['error']) {
                      usNotify('warning', json['error']);
                  }
                  loadSmsLogs(1); // Викликається після успішного завершення AJAX-запиту
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      }
  });

  function updateLocalizationVisibility(templateCode) {
    if (\$('#edit_localization_' + templateCode).is(':checked')) {
      \$('#localization_container_' + templateCode).show();
    } else {
      \$('#localization_container_' + templateCode).hide();
    }
  }

  ";
        // line 499
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 500
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["template"], "templates", [], "any", true, true, false, 500)) {
                // line 501
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["template"], "templates", [], "any", false, false, false, 501));
                foreach ($context['_seq'] as $context["_key"] => $context["subtemplate"]) {
                    // line 502
                    echo "        updateLocalizationVisibility('";
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 502);
                    echo "');
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtemplate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 504
                echo "    ";
            } else {
                // line 505
                echo "      updateLocalizationVisibility('";
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 505);
                echo "');
    ";
            }
            // line 507
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "
  ";
        // line 509
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 510
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["template"], "templates", [], "any", true, true, false, 510)) {
                // line 511
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["template"], "templates", [], "any", false, false, false, 511));
                foreach ($context['_seq'] as $context["_key"] => $context["subtemplate"]) {
                    // line 512
                    echo "        \$('#edit_localization_";
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 512);
                    echo "').on('change', function() {
          updateLocalizationVisibility('";
                    // line 513
                    echo twig_get_attribute($this->env, $this->source, $context["subtemplate"], "code", [], "any", false, false, false, 513);
                    echo "');
        });
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtemplate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 516
                echo "    ";
            } else {
                // line 517
                echo "      \$('#edit_localization_";
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 517);
                echo "').on('change', function() {
        updateLocalizationVisibility('";
                // line 518
                echo twig_get_attribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 518);
                echo "');
      });
    ";
            }
            // line 521
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        echo "
  function updateTurboSmsViberSenderVisibility() {
    var hybridSending = \$('#turbosms_hybrid').is(':checked');
    if (hybridSending) {
      \$('#turbosms-viber-sender-container').show();
    } else {
      \$('#turbosms-viber-sender-container').hide();
    }
  }

  function updateAlphaSmsViberSenderVisibility() {
    var hybridSending = \$('#alphasms_hybrid').is(':checked');
    if (hybridSending) {
      \$('#alphasms-viber-sender-container').show();
    } else {
      \$('#alphasms-viber-sender-container').hide();
    }
  }

  updateTurboSmsViberSenderVisibility();
  updateAlphaSmsViberSenderVisibility();

  \$('#input-provider').on('change', function() {
    if (\$(this).val() == 'turbosms') {
      \$('#turbosms-settings').show();
      \$('#alphasms-settings').hide();
    } else if (\$(this).val() == 'alphasms') {
      \$('#turbosms-settings').hide();
      \$('#alphasms-settings').show();
    } else {
      \$('#turbosms-settings').hide();
      \$('#alphasms-settings').hide();
    }
  });

  \$('#turbosms_hybrid').on('change', function() {
    updateTurboSmsViberSenderVisibility();
  });

  \$('#alphasms_hybrid').on('change', function() {
    updateAlphaSmsViberSenderVisibility();
  });

  loadSmsLogs(1);

  function loadSmsLogs(page) {
    \$.ajax({
      url: 'index.php?route=octemplates/module/oct_sms_notify/getLogs&user_token=";
        // line 569
        echo ($context["user_token"] ?? null);
        echo "&page=' + page,
      dataType: 'json',
      beforeSend: function() {
        \$('#sms-logs-body').html('<tr><td colspan=\"5\" class=\"text-center\"><i class=\"fa fa-spinner fa-spin\"></i> ";
        // line 572
        echo ($context["text_loading"] ?? null);
        echo "</td></tr>');
      },
      success: function(json) {
        if (json['error']) {
          \$('#sms-logs-body').html('<tr><td colspan=\"5\" class=\"text-center text-danger\">' + json['error'] + '</td></tr>');
        } else {
          var html = '';

          if (json['logs'].length) {
            for (var i = 0; i < json['logs'].length; i++) {
              html += '<tr>';
              html += '  <td>' + json['logs'][i]['phone'] + '</td>';
              html += '  <td>' + json['logs'][i]['message'] + '</td>';
              html += '  <td>' + json['logs'][i]['provider'] + '</td>';
              html += '  <td>' + json['logs'][i]['response'] + '</td>';
              html += '  <td>' + json['logs'][i]['template_code'] + '</td>';
              html += '  <td>' + json['logs'][i]['date_added'] + '</td>';
              html += '</tr>';
            }
          } else {
            html += '<tr>';
            html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 593
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
            html += '</tr>';
            \$('#button-delete-logs').hide();
            \$('#help-del-block').hide();
          }

          \$('#sms-logs-body').html(html);
          \$('#sms-pagination').html(json['pagination']);
          \$('#sms-results').html(json['results']);

          \$('#sms-pagination .pagination a').on('click', function(e) {
            e.preventDefault();
            var url = \$(this).attr('href');
            var page = url.split('page=')[1];
            loadSmsLogs(page);
          });
        }
      }
    });
  }
});
</script>
";
        // line 615
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_sms_notify.twig";
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
        return array (  1502 => 615,  1477 => 593,  1453 => 572,  1447 => 569,  1398 => 522,  1392 => 521,  1386 => 518,  1381 => 517,  1378 => 516,  1369 => 513,  1364 => 512,  1359 => 511,  1356 => 510,  1352 => 509,  1349 => 508,  1343 => 507,  1337 => 505,  1334 => 504,  1325 => 502,  1320 => 501,  1317 => 500,  1313 => 499,  1282 => 471,  1276 => 468,  1240 => 435,  1236 => 434,  1232 => 433,  1228 => 432,  1224 => 431,  1220 => 430,  1209 => 422,  1201 => 419,  1193 => 413,  1178 => 411,  1173 => 408,  1150 => 403,  1145 => 401,  1133 => 399,  1116 => 398,  1112 => 396,  1088 => 392,  1082 => 391,  1075 => 390,  1058 => 389,  1054 => 388,  1050 => 387,  1042 => 384,  1027 => 372,  1017 => 371,  1011 => 368,  995 => 355,  985 => 354,  979 => 351,  975 => 349,  972 => 348,  955 => 344,  932 => 339,  927 => 337,  915 => 335,  898 => 334,  894 => 332,  870 => 328,  864 => 327,  857 => 326,  840 => 325,  836 => 324,  832 => 323,  824 => 320,  809 => 308,  799 => 307,  793 => 304,  777 => 291,  767 => 290,  761 => 287,  754 => 283,  749 => 282,  731 => 281,  729 => 280,  724 => 278,  719 => 276,  710 => 275,  693 => 274,  687 => 270,  668 => 267,  661 => 266,  644 => 265,  640 => 263,  638 => 262,  623 => 251,  618 => 249,  613 => 247,  610 => 246,  608 => 245,  602 => 244,  597 => 242,  591 => 241,  583 => 236,  569 => 227,  563 => 224,  554 => 219,  549 => 217,  544 => 215,  541 => 214,  539 => 213,  533 => 212,  528 => 210,  522 => 209,  517 => 207,  511 => 206,  501 => 200,  496 => 198,  491 => 196,  488 => 195,  486 => 194,  480 => 193,  475 => 191,  469 => 190,  461 => 185,  447 => 176,  441 => 173,  432 => 168,  427 => 166,  422 => 164,  419 => 163,  417 => 162,  411 => 161,  406 => 159,  400 => 158,  395 => 156,  389 => 155,  381 => 151,  376 => 149,  371 => 147,  368 => 146,  366 => 145,  359 => 143,  353 => 142,  349 => 141,  343 => 138,  337 => 137,  325 => 129,  320 => 127,  315 => 125,  312 => 124,  310 => 123,  304 => 122,  299 => 120,  293 => 119,  286 => 116,  281 => 114,  276 => 112,  273 => 111,  271 => 110,  265 => 109,  260 => 107,  254 => 106,  248 => 103,  234 => 94,  228 => 91,  220 => 86,  206 => 77,  200 => 74,  192 => 71,  188 => 70,  184 => 68,  178 => 66,  176 => 65,  162 => 56,  156 => 53,  150 => 52,  140 => 45,  134 => 42,  128 => 39,  122 => 36,  116 => 33,  110 => 30,  106 => 28,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_sms_notify.twig", "");
    }
}
