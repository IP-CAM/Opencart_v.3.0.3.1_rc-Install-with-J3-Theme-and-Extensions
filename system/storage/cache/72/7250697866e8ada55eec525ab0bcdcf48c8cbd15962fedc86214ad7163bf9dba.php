<?php

/* extension/payment/yandex_money/wallet.twig */
class __TwigTemplate_d4db0579d3fdd81dc2ce68b77d81baa29372d17e743aff7b15065e60a063c564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 4
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_page_title"), "method");
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div>
            <p>";
        // line 8
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_header_description"), "method");
        echo "</p>
            <p>";
        // line 9
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_version_string"), "method");
        echo " ";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "</p>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label>
                    <input type=\"checkbox\" id=\"wallet-enabled\" name=\"yandex_money_wallet_enabled\" value=\"on\"";
        // line 15
        echo (($this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "isEnabled", array(), "method")) ? (" checked") : (""));
        echo " class=\"enable-button\" />
                    ";
        // line 16
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_enable_label"), "method");
        echo "
                </label>
            </div>
        </div>

        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-account-id\">";
        // line 22
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_account_id_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_wallet_account_id\" value=\"";
        // line 24
        echo $this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getAccountId", array(), "method");
        echo "\" placeholder=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_account_id_label"), "method");
        echo "\" id=\"wallet-account-id\" class=\"form-control\" />
                ";
        // line 25
        if ((array_key_exists("error_wallet_account_id", $context) && (isset($context["error_wallet_account_id"]) ? $context["error_wallet_account_id"] : null))) {
            // line 26
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_wallet_account_id"]) ? $context["error_wallet_account_id"] : null);
            echo "</div>
                ";
        } else {
            // line 28
            echo "                <p class=\"help-block\">";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_account_id_description"), "method");
            echo "</p>
                ";
        }
        // line 30
        echo "            </div>
        </div>
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-password\">";
        // line 33
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_password_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_wallet_password\" value=\"";
        // line 35
        echo $this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getPassword", array(), "method");
        echo "\" placeholder=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_password_label"), "method");
        echo "\" id=\"wallet-password\" class=\"form-control\" />
                ";
        // line 36
        if ((array_key_exists("error_wallet_password", $context) && (isset($context["error_wallet_password"]) ? $context["error_wallet_password"] : null))) {
            // line 37
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_wallet_password"]) ? $context["error_wallet_password"] : null);
            echo "</div>
                ";
        } else {
            // line 39
            echo "                <p class=\"help-block\">";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_password_description"), "method");
            echo "</p>
                ";
        }
        // line 41
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-display-name\">";
        // line 45
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_display_name_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_wallet_display_name\" value=\"";
        // line 47
        echo $this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getDisplayName", array(), "method");
        echo "\" placeholder=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_display_name_label"), "method");
        echo "\" id=\"wallet-display-name\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 48
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_display_name_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-notification-url\">
                ";
        // line 54
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_notification_url_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"wallet-notification-url\" name=\"wallet_notification_url\" value=\"";
        // line 57
        echo (isset($context["callbackUrl"]) ? $context["callbackUrl"] : null);
        echo "\" class=\"form-control\" disabled />
                <p class=\"help-block\">";
        // line 58
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_notification_url_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-2 control-label\"><strong>";
        // line 63
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_before_redirect_label"), "method");
        echo "</strong></div>
            <div class=\"col-sm-10\">
                <label>
                    <input type=\"checkbox\" name=\"yandex_money_wallet_create_order_before_redirect\" id=\"yandex_money_wallet_create_order_before_redirect\"
                           value=\"on\" ";
        // line 67
        if ($this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getCreateOrderBeforeRedirect", array(), "method")) {
            echo "checked";
        }
        echo " />
                    ";
        // line 68
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_create_order_label"), "method");
        echo "
                </label><br />
                <label>
                    <input type=\"checkbox\" name=\"yandex_money_wallet_clear_cart_before_redirect\" id=\"yandex_money_wallet_clear_cart_before_redirect\"
                           value=\"on\" ";
        // line 72
        if ($this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getClearCartBeforeRedirect", array(), "method")) {
            echo "checked";
        }
        echo " />
                    ";
        // line 73
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_clear_cart_label"), "method");
        echo "
                </label>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-success-order-status\">
                ";
        // line 80
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_success_order_status_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"wallet-success-order-status\" name=\"yandex_money_wallet_success_order_status\" class=\"form-control\">
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) ? $context["orderStatuses"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 85
            echo "                    <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getSuccessOrderStatusId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </select>
                <p class=\"help-block\">";
        // line 88
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_success_order_status_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-min-payment-amount\">
                ";
        // line 93
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_minimum_payment_amount_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"wallet-min-payment-amount\" name=\"yandex_money_wallet_minimum_payment_amount\" value=\"";
        // line 96
        echo $this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getMinPaymentAmount", array(), "method");
        echo "\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 97
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_minimum_payment_amount_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-geo-zone\">
                ";
        // line 102
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_geo_zone_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"kassa-geo-zone\" name=\"yandex_money_wallet_geo_zone\" class=\"form-control\">
                    <option value=\"0\"";
        // line 106
        echo ((($this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getGeoZoneId", array(), "method") == 0)) ? (" selected") : (""));
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_any_geo_zone"), "method");
        echo "</option>
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geoZones"]) ? $context["geoZones"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 108
            echo "                    <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["wallet"]) ? $context["wallet"] : null), "getGeoZoneId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                </select>
                <p class=\"help-block\">";
        // line 111
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_geo_zone_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"wallet-sort-order\">
                ";
        // line 116
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_sort_order_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"wallet-sort-order\" name=\"yandex_money_wallet_sort_order\" value=\"";
        // line 119
        echo (isset($context["yandex_money_wallet_sort_order"]) ? $context["yandex_money_wallet_sort_order"] : null);
        echo "\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 120
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_sort_order_description"), "method");
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money/wallet.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 120,  294 => 119,  288 => 116,  280 => 111,  277 => 110,  264 => 108,  260 => 107,  254 => 106,  247 => 102,  239 => 97,  235 => 96,  229 => 93,  221 => 88,  218 => 87,  205 => 85,  201 => 84,  194 => 80,  184 => 73,  178 => 72,  171 => 68,  165 => 67,  158 => 63,  150 => 58,  146 => 57,  140 => 54,  131 => 48,  125 => 47,  120 => 45,  114 => 41,  108 => 39,  102 => 37,  100 => 36,  94 => 35,  89 => 33,  84 => 30,  78 => 28,  72 => 26,  70 => 25,  64 => 24,  59 => 22,  50 => 16,  46 => 15,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ language.get('wallet_page_title') }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div>*/
/*             <p>{{ language.get('wallet_header_description') }}</p>*/
/*             <p>{{ language.get('wallet_version_string') }} {{ module_version }}</p>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label>*/
/*                     <input type="checkbox" id="wallet-enabled" name="yandex_money_wallet_enabled" value="on"{{ wallet.isEnabled() ? ' checked' : '' }} class="enable-button" />*/
/*                     {{ language.get('wallet_enable_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="wallet-account-id">{{ language.get('wallet_account_id_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_wallet_account_id" value="{{ wallet.getAccountId() }}" placeholder="{{ language.get('wallet_account_id_label') }}" id="wallet-account-id" class="form-control" />*/
/*                 {% if error_wallet_account_id is defined and error_wallet_account_id %}*/
/*                 <div class="text-danger">{{ error_wallet_account_id }}</div>*/
/*                 {% else %}*/
/*                 <p class="help-block">{{ language.get('wallet_account_id_description') }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="wallet-password">{{ language.get('wallet_password_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_wallet_password" value="{{ wallet.getPassword() }}" placeholder="{{ language.get('wallet_password_label') }}" id="wallet-password" class="form-control" />*/
/*                 {% if error_wallet_password is defined and error_wallet_password %}*/
/*                 <div class="text-danger">{{ error_wallet_password }}</div>*/
/*                 {% else %}*/
/*                 <p class="help-block">{{ language.get('wallet_password_description') }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="wallet-display-name">{{ language.get('wallet_display_name_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_wallet_display_name" value="{{ wallet.getDisplayName() }}" placeholder="{{ language.get('wallet_display_name_label') }}" id="wallet-display-name" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('wallet_display_name_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="wallet-notification-url">*/
/*                 {{ language.get('wallet_notification_url_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="wallet-notification-url" name="wallet_notification_url" value="{{ callbackUrl }}" class="form-control" disabled />*/
/*                 <p class="help-block">{{ language.get('wallet_notification_url_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-2 control-label"><strong>{{ language.get('wallet_before_redirect_label') }}</strong></div>*/
/*             <div class="col-sm-10">*/
/*                 <label>*/
/*                     <input type="checkbox" name="yandex_money_wallet_create_order_before_redirect" id="yandex_money_wallet_create_order_before_redirect"*/
/*                            value="on" {% if wallet.getCreateOrderBeforeRedirect() %}checked{% endif %} />*/
/*                     {{ language.get('wallet_create_order_label') }}*/
/*                 </label><br />*/
/*                 <label>*/
/*                     <input type="checkbox" name="yandex_money_wallet_clear_cart_before_redirect" id="yandex_money_wallet_clear_cart_before_redirect"*/
/*                            value="on" {% if wallet.getClearCartBeforeRedirect() %}checked{% endif %} />*/
/*                     {{ language.get('wallet_clear_cart_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="wallet-success-order-status">*/
/*                 {{ language.get('wallet_success_order_status_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="wallet-success-order-status" name="yandex_money_wallet_success_order_status" class="form-control">*/
/*                     {% for id, name in orderStatuses %}*/
/*                     <option value="{{ id }}"{{ wallet.getSuccessOrderStatusId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('wallet_success_order_status_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="wallet-min-payment-amount">*/
/*                 {{ language.get('wallet_minimum_payment_amount_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="wallet-min-payment-amount" name="yandex_money_wallet_minimum_payment_amount" value="{{ wallet.getMinPaymentAmount() }}" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('wallet_minimum_payment_amount_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-geo-zone">*/
/*                 {{ language.get('wallet_geo_zone_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="kassa-geo-zone" name="yandex_money_wallet_geo_zone" class="form-control">*/
/*                     <option value="0"{{ wallet.getGeoZoneId() == 0 ? ' selected' : '' }}>{{ language.get('wallet_any_geo_zone') }}</option>*/
/*                     {% for id, name in geoZones %}*/
/*                     <option value="{{ id }}"{{ wallet.getGeoZoneId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('wallet_geo_zone_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="wallet-sort-order">*/
/*                 {{ language.get('wallet_sort_order_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="wallet-sort-order" name="yandex_money_wallet_sort_order" value="{{ yandex_money_wallet_sort_order }}" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('wallet_sort_order_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
