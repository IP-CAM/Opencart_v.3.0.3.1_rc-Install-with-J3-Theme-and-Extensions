<?php

/* extension/payment/yandex_money/billing.twig */
class __TwigTemplate_b871477023b6214683a4bd671f01b92fe54e66ba1331e7f89cf67065f2546371 extends Twig_Template
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
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_page_title"), "method");
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div>
            <p>";
        // line 8
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_header_description"), "method");
        echo "</p>
            <p>";
        // line 9
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_version_string"), "method");
        echo " ";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "</p>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label>
                    <input type=\"checkbox\" id=\"billing-enabled\" name=\"yandex_money_billing_enabled\" value=\"on\"";
        // line 15
        echo (($this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "isEnabled", array(), "method")) ? (" checked") : (""));
        echo " class=\"enable-button\" />
                    ";
        // line 16
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_enable_label"), "method");
        echo "
                </label>
            </div>
        </div>

        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"billing-form-id\">";
        // line 22
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_form_id_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_billing_form_id\" value=\"";
        // line 24
        echo $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getFormId", array(), "method");
        echo "\" placeholder=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_form_id_label"), "method");
        echo "\" id=\"billing-form-id\" class=\"form-control\" />
                ";
        // line 25
        if ((array_key_exists("error_billing_form_id", $context) && (isset($context["error_billing_form_id"]) ? $context["error_billing_form_id"] : null))) {
            // line 26
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_billing_form_id"]) ? $context["error_billing_form_id"] : null);
            echo "</div>
                ";
        } else {
            // line 28
            echo "                <p class=\"help-block\">";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_form_id_description"), "method");
            echo "</p>
                ";
        }
        // line 30
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"billing-purpose\">";
        // line 34
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_purpose_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_billing_purpose\" value=\"";
        // line 36
        echo $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getPurpose", array(), "method");
        echo "\" placeholder=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_purpose_label"), "method");
        echo "\" id=\"billing-purpose\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 37
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_purpose_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"billing-display-name\">";
        // line 42
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_display_name_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_billing_display_name\" value=\"";
        // line 44
        echo $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getDisplayName", array(), "method");
        echo "\" placeholder=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_display_name_label"), "method");
        echo "\" id=\"billing-display-name\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 45
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_display_name_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"billing-success-order-status\">
                ";
        // line 51
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_success_order_status_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"billing-success-order-status\" name=\"yandex_money_billing_success_order_status\" class=\"form-control\">
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) ? $context["orderStatuses"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 56
            echo "                    <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getSuccessOrderStatusId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </select>
                <p class=\"help-block\">";
        // line 59
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_success_order_status_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"billing-min-payment-amount\">
                ";
        // line 64
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_minimum_payment_amount_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"billing-min-payment-amount\" name=\"yandex_money_billing_minimum_payment_amount\" value=\"";
        // line 67
        echo $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getMinPaymentAmount", array(), "method");
        echo "\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 68
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_minimum_payment_amount_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-geo-zone\">
                ";
        // line 73
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_geo_zone_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"kassa-geo-zone\" name=\"yandex_money_billing_geo_zone\" class=\"form-control\">
                    <option value=\"0\"";
        // line 77
        echo ((($this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getGeoZoneId", array(), "method") == 0)) ? (" selected") : (""));
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_any_geo_zone"), "method");
        echo "</option>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geoZones"]) ? $context["geoZones"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 79
            echo "                    <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "getGeoZoneId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </select>
                <p class=\"help-block\">";
        // line 82
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_geo_zone_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"billing-sort-order\">
                ";
        // line 87
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_sort_order_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"billing-sort-order\" name=\"yandex_money_billing_sort_order\" value=\"";
        // line 90
        echo (isset($context["yandex_money_billing_sort_order"]) ? $context["yandex_money_billing_sort_order"] : null);
        echo "\" class=\"form-control\" />
                <p class=\"help-block\">";
        // line 91
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_sort_order_description"), "method");
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money/billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 91,  229 => 90,  223 => 87,  215 => 82,  212 => 81,  199 => 79,  195 => 78,  189 => 77,  182 => 73,  174 => 68,  170 => 67,  164 => 64,  156 => 59,  153 => 58,  140 => 56,  136 => 55,  129 => 51,  120 => 45,  114 => 44,  109 => 42,  101 => 37,  95 => 36,  90 => 34,  84 => 30,  78 => 28,  72 => 26,  70 => 25,  64 => 24,  59 => 22,  50 => 16,  46 => 15,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ language.get('billing_page_title') }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div>*/
/*             <p>{{ language.get('billing_header_description') }}</p>*/
/*             <p>{{ language.get('billing_version_string') }} {{ module_version }}</p>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label>*/
/*                     <input type="checkbox" id="billing-enabled" name="yandex_money_billing_enabled" value="on"{{ billing.isEnabled() ? ' checked' : '' }} class="enable-button" />*/
/*                     {{ language.get('billing_enable_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="billing-form-id">{{ language.get('billing_form_id_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_billing_form_id" value="{{ billing.getFormId() }}" placeholder="{{ language.get('billing_form_id_label') }}" id="billing-form-id" class="form-control" />*/
/*                 {% if error_billing_form_id is defined and error_billing_form_id %}*/
/*                 <div class="text-danger">{{ error_billing_form_id }}</div>*/
/*                 {% else %}*/
/*                 <p class="help-block">{{ language.get('billing_form_id_description') }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="billing-purpose">{{ language.get('billing_purpose_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_billing_purpose" value="{{ billing.getPurpose() }}" placeholder="{{ language.get('billing_purpose_label') }}" id="billing-purpose" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('billing_purpose_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="billing-display-name">{{ language.get('billing_display_name_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_billing_display_name" value="{{ billing.getDisplayName() }}" placeholder="{{ language.get('billing_display_name_label') }}" id="billing-display-name" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('billing_display_name_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="billing-success-order-status">*/
/*                 {{ language.get('billing_success_order_status_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="billing-success-order-status" name="yandex_money_billing_success_order_status" class="form-control">*/
/*                     {%  for id, name in orderStatuses %}*/
/*                     <option value="{{ id }}"{{ billing.getSuccessOrderStatusId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('billing_success_order_status_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="billing-min-payment-amount">*/
/*                 {{ language.get('billing_minimum_payment_amount_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="billing-min-payment-amount" name="yandex_money_billing_minimum_payment_amount" value="{{ billing.getMinPaymentAmount() }}" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('billing_minimum_payment_amount_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-geo-zone">*/
/*                 {{ language.get('billing_geo_zone_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="kassa-geo-zone" name="yandex_money_billing_geo_zone" class="form-control">*/
/*                     <option value="0"{{ billing.getGeoZoneId() == 0 ? ' selected' : '' }}>{{ language.get('billing_any_geo_zone') }}</option>*/
/*                     {% for id, name in geoZones %}*/
/*                     <option value="{{ id }}"{{ billing.getGeoZoneId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('billing_geo_zone_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="billing-sort-order">*/
/*                 {{ language.get('billing_sort_order_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="billing-sort-order" name="yandex_money_billing_sort_order" value="{{ yandex_money_billing_sort_order }}" class="form-control" />*/
/*                 <p class="help-block">{{ language.get('billing_sort_order_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
