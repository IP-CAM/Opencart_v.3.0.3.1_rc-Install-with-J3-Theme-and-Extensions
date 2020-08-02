<?php

/* extension/module/quickcheckout.twig */
class __TwigTemplate_9b035ff7a25b057b6a721e2871b067664ceaa3bd94b9009132a4d00ef4b84e63 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a onclick=\"\$('#form').attr('action', '";
        // line 7
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "');\$('#form').submit();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></a>
        <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 12
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>";
            // line 19
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo " 
\t";
        // line 23
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            // line 24
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 30
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo " </h3>
        <select onchange=\"store();\" name=\"store_id\">
\t\t<option value=\"0\"";
        // line 32
        echo ((((isset($context["store_id"]) ? $context["store_id"] : null) == "0")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_default_store"]) ? $context["text_default_store"] : null);
        echo "</option>
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo " 
\t\t<option value=\"";
            // line 34
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            echo ((((isset($context["store_id"]) ? $context["store_id"] : null) == $this->getAttribute($context["store"], "store_id", array()))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
\t  </select>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 39
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t  <ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "\" class=\"fa fa-gear\"></i> ";
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-design\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 42
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "\" class=\"fa fa-television\"></i> ";
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-field\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 43
        echo (isset($context["tab_field"]) ? $context["tab_field"] : null);
        echo "\" class=\"fa fa-bars\"></i> ";
        echo (isset($context["tab_field"]) ? $context["tab_field"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-module\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 44
        echo (isset($context["tab_module"]) ? $context["tab_module"] : null);
        echo "\" class=\"fa fa-puzzle-piece\"></i> ";
        echo (isset($context["tab_module"]) ? $context["tab_module"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-payment\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 45
        echo (isset($context["tab_payment"]) ? $context["tab_payment"] : null);
        echo "\" class=\"fa fa-credit-card\"></i> ";
        echo (isset($context["tab_payment"]) ? $context["tab_payment"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-shipping\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 46
        echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
        echo "\" class=\"fa fa-ship\"></i> ";
        echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-delivery\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["tab_delivery"]) ? $context["tab_delivery"] : null);
        echo "\" class=\"fa fa-truck\"></i> ";
        echo (isset($context["tab_delivery"]) ? $context["tab_delivery"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-survey\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 48
        echo (isset($context["tab_survey"]) ? $context["tab_survey"] : null);
        echo "\" class=\"fa fa-edit\"></i> ";
        echo (isset($context["tab_survey"]) ? $context["tab_survey"] : null);
        echo "</a></li>
\t\t\t";
        // line 49
        echo (isset($context["about"]) ? $context["about"] : null);
        echo "
\t\t  </ul>
\t\t  <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-status\"><span title=\"";
        // line 55
        echo (isset($context["help_status"]) ? $context["help_status"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 58
        echo (((isset($context["quickcheckout_status"]) ? $context["quickcheckout_status"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 59
        echo (((isset($context["quickcheckout_status"]) ? $context["quickcheckout_status"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-minimum-order\"><span title=\"";
        // line 64
        echo (isset($context["help_minimum_order"]) ? $context["help_minimum_order"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_minimum_order"]) ? $context["entry_minimum_order"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_minimum_order\" value=\"";
        // line 66
        echo (isset($context["quickcheckout_minimum_order"]) ? $context["quickcheckout_minimum_order"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-debug\"><span title=\"";
        // line 72
        echo (isset($context["help_debug"]) ? $context["help_debug"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_debug\" id=\"input-debug\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 75
        echo (((isset($context["quickcheckout_debug"]) ? $context["quickcheckout_debug"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 76
        echo (((isset($context["quickcheckout_debug"]) ? $context["quickcheckout_debug"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-confirmation-page\"><span title=\"";
        // line 81
        echo (isset($context["help_confirmation_page"]) ? $context["help_confirmation_page"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_confirmation_page"]) ? $context["entry_confirmation_page"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_confirmation_page\" id=\"input-confirmation-page\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 84
        echo (((isset($context["quickcheckout_confirmation_page"]) ? $context["quickcheckout_confirmation_page"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 85
        echo (((isset($context["quickcheckout_confirmation_page"]) ? $context["quickcheckout_confirmation_page"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-save-data\"><span title=\"";
        // line 92
        echo (isset($context["help_save_data"]) ? $context["help_save_data"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_save_data"]) ? $context["entry_save_data"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_save_data\" id=\"input-save-data\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 95
        echo (((isset($context["quickcheckout_save_data"]) ? $context["quickcheckout_save_data"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 96
        echo (((isset($context["quickcheckout_save_data"]) ? $context["quickcheckout_save_data"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-edit-cart\"><span title=\"";
        // line 101
        echo (isset($context["help_edit_cart"]) ? $context["help_edit_cart"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_edit_cart"]) ? $context["entry_edit_cart"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_edit_cart\" id=\"input-edit-cart\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 104
        echo (((isset($context["quickcheckout_edit_cart"]) ? $context["quickcheckout_edit_cart"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 105
        echo (((isset($context["quickcheckout_edit_cart"]) ? $context["quickcheckout_edit_cart"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-highlight-error\"><span title=\"";
        // line 112
        echo (isset($context["help_highlight_error"]) ? $context["help_highlight_error"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_highlight_error"]) ? $context["entry_highlight_error"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_highlight_error\" id=\"input-highlight-error\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 115
        echo (((isset($context["quickcheckout_highlight_error"]) ? $context["quickcheckout_highlight_error"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 116
        echo (((isset($context["quickcheckout_highlight_error"]) ? $context["quickcheckout_highlight_error"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-text-error\"><span title=\"";
        // line 121
        echo (isset($context["help_text_error"]) ? $context["help_text_error"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_text_error"]) ? $context["entry_text_error"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_text_error\" id=\"input-text-error\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 124
        echo (((isset($context["quickcheckout_text_error"]) ? $context["quickcheckout_text_error"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 125
        echo (((isset($context["quickcheckout_text_error"]) ? $context["quickcheckout_text_error"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-auto-submit\"><span title=\"";
        // line 132
        echo (isset($context["help_auto_submit"]) ? $context["help_auto_submit"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_auto_submit"]) ? $context["entry_auto_submit"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_auto_submit\" id=\"input-auto-submit\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 135
        echo (((isset($context["quickcheckout_auto_submit"]) ? $context["quickcheckout_auto_submit"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 136
        echo (((isset($context["quickcheckout_auto_submit"]) ? $context["quickcheckout_auto_submit"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-target\"><span title=\"";
        // line 141
        echo (isset($context["help_payment_target"]) ? $context["help_payment_target"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_payment_target"]) ? $context["entry_payment_target"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t    <input type=\"text\" name=\"quickcheckout_payment_target\" id=\"input-payment-target\" class=\"form-control\" value=\"";
        // line 143
        echo (isset($context["quickcheckout_payment_target"]) ? $context["quickcheckout_payment_target"] : null);
        echo "\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-skip-cart\"><span title=\"";
        // line 149
        echo (isset($context["help_skip_cart"]) ? $context["help_skip_cart"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_skip_cart"]) ? $context["entry_skip_cart"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_skip_cart\" id=\"input-skip-cart\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 152
        echo (((isset($context["quickcheckout_skip_cart"]) ? $context["quickcheckout_skip_cart"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 153
        echo (((isset($context["quickcheckout_skip_cart"]) ? $context["quickcheckout_skip_cart"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-force-bootstrap\"><span title=\"";
        // line 158
        echo (isset($context["help_force_bootstrap"]) ? $context["help_force_bootstrap"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_force_bootstrap"]) ? $context["entry_force_bootstrap"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_force_bootstrap\" id=\"input-force-bootstrap\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 161
        echo (((isset($context["quickcheckout_force_bootstrap"]) ? $context["quickcheckout_force_bootstrap"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 162
        echo (((isset($context["quickcheckout_force_bootstrap"]) ? $context["quickcheckout_force_bootstrap"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-proceed-button-text\"><span title=\"";
        // line 169
        echo (isset($context["help_proceed_button_text"]) ? $context["help_proceed_button_text"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_proceed_button_text"]) ? $context["entry_proceed_button_text"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 173
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_proceed_button_text[";
            // line 174
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["quickcheckout_proceed_button_text"]) ? $context["quickcheckout_proceed_button_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
            echo "\"  id=\"input-proceed-button-text\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-keyword\"><span title=\"";
        // line 180
        echo (isset($context["help_keyword"]) ? $context["help_keyword"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 184
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_keyword[";
            // line 185
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["quickcheckout_keyword"]) ? $context["quickcheckout_keyword"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
            echo "\" id=\"input-keyword\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-layout\"><span title=\"";
        // line 195
        echo (isset($context["help_layout"]) ? $context["help_layout"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_layout\" id=\"input-layout\" class=\"form-control\" onchange=\"show_grid(this);\">
\t\t\t\t\t  <option value=\"1\"";
        // line 198
        echo ((((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "1")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_one_column"]) ? $context["text_one_column"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"2\"";
        // line 199
        echo ((((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "2")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_two_column"]) ? $context["text_two_column"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"3\"";
        // line 200
        echo ((((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "3")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_three_column"]) ? $context["text_three_column"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"4\"";
        // line 201
        echo ((((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "4")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_custom_column"]) ? $context["text_custom_column"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-responsive\"><span title=\"";
        // line 206
        echo (isset($context["help_responsive"]) ? $context["help_responsive"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_responsive"]) ? $context["entry_responsive"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_responsive\" id=\"input-responsive\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 209
        echo (((isset($context["quickcheckout_responsive"]) ? $context["quickcheckout_responsive"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 210
        echo (((isset($context["quickcheckout_responsive"]) ? $context["quickcheckout_responsive"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\" id=\"custom_grid\" style=\"";
        // line 215
        echo ((((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "4")) ? (" display:block;") : (" display:none;"));
        echo "\">
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<div class=\"alert alert-info\" style=\"margin-top: 68px;\">
\t\t\t\t\t\t";
        // line 218
        echo (isset($context["text_help_grid"]) ? $context["text_help_grid"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-10\">              
                    <div id=\"column_design\">
                        <div class=\"column-width-group\">
                            <input id=\"column_width_1\" type=\"text\" class=\"column-width\" name=\"quickcheckout_column[1]\" value=\"";
        // line 224
        echo $this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 1, array(), "array");
        echo "\" /><input id=\"column_width_2\" type=\"text\" class=\"column-width\" name=\"quickcheckout_column[2]\" value=\"";
        echo $this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 2, array(), "array");
        echo "\" /><input id=\"column_width_3\" type=\"text\" class=\"column-width\" name=\"quickcheckout_column[3]\" value=\"";
        echo $this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 3, array(), "array");
        echo "\" />
                            <input id=\"column_width_4\" type=\"hidden\" class=\"column-width\" name=\"quickcheckout_column[4]\" value=\"";
        // line 225
        echo $this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 4, array(), "array");
        echo "\" />
                        </div >
                        <input id=\"column_slider\" type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"12\" data-slider-step=\"1\" tooltip=\"hide\" data-slider-value=\"[";
        // line 227
        echo $this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 1, array(), "array");
        echo ",";
        echo (twig_round($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 1, array(), "array"), 0, "floor") + twig_round($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), 2, array(), "array"), 0, "floor"));
        echo "]\"/>
                        <div id=\"column_groups\">
                            <ul class=\"column column-group column-group-1 qc-col-1\" id=\"column_1\">
                                ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["steps"]) ? $context["steps"] : null));
        foreach ($context['_seq'] as $context["step"] => $context["value"]) {
            // line 231
            echo "                                <li class=\"portlet qc-step\" id=\"step_";
            echo $context["step"];
            echo "\" data-col=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["quickcheckout_step"]) ? $context["quickcheckout_step"] : null), $context["step"], array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["quickcheckout_step"]) ? $context["quickcheckout_step"] : null), $context["step"], array(), "array"), "row", array(), "array");
            echo "\" data-id=\"";
            echo $context["step"];
            echo "\">
                                    <div class=\"portlet-wrap\">
                                        <div class=\"portlet-header\"><span class=\"fa fa-";
            // line 233
            echo $this->getAttribute($this->getAttribute((isset($context["quickcheckout_step"]) ? $context["quickcheckout_step"] : null), $context["step"], array(), "array"), "icon", array(), "array");
            echo " fa-fw\"></span>";
            echo $this->getAttribute($context, ("text_" . $context["step"]));
            echo "</div>
                                        <div class=\"portlet-content\">
                                            <div class=\"text\">";
            // line 235
            echo $this->getAttribute($context, ("help_" . $context["step"]));
            echo "</div>
                                            <div class=\"text\"><i class=\"fa fa-drag\"></i></div>
                                            <input type=\"hidden\" class=\"sort data-column\" name=\"quickcheckout_step[";
            // line 237
            echo $context["step"];
            echo "][column]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["quickcheckout_step"]) ? $context["quickcheckout_step"] : null), $context["step"], array(), "array"), "column", array(), "array");
            echo "\" />
                                            <input type=\"hidden\" class=\"sort data-row\" name=\"quickcheckout_step[";
            // line 238
            echo $context["step"];
            echo "][row]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["quickcheckout_step"]) ? $context["quickcheckout_step"] : null), $context["step"], array(), "array"), "row", array(), "array");
            echo "\" />
                                        </div>
                                    </div>
                                </li>
                               \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['step'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                            </ul>
                            <div class=\"column-group column-group-2\">
                                <ul class=\"column qc-col-2\" id=\"column_2\">
                                </ul>
                                <ul class=\"column qc-col-3\" id=\"column_3\">
                                </ul>
                                <ul class=\"column qc-col-4\" id=\"column_4\">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                                             
\t\t\t\t";
        // line 256
        $context["column_1"] = (($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), "1", array(), "array") / 12) * 100);
        // line 257
        echo "\t\t\t\t";
        $context["column_2"] = (($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), "2", array(), "array") / 12) * 100);
        // line 258
        echo "\t\t\t\t";
        $context["column_3"] = (($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), "3", array(), "array") / 12) * 100);
        // line 259
        echo "\t\t\t\t";
        $context["column_4"] = (((twig_round($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), "2", array(), "array"), 0, "floor") + twig_round($this->getAttribute((isset($context["quickcheckout_column"]) ? $context["quickcheckout_column"] : null), "3", array(), "array"), 0, "floor")) / 12) * 100);
        // line 260
        echo "\t\t\t\t    
\t\t\t\t<style>
\t\t\t\t    #column_width_1,
\t\t\t\t    #column_1{
\t\t\t\t        width: ";
        // line 264
        echo (isset($context["column_1"]) ? $context["column_1"] : null);
        echo "%;
\t\t\t\t    }
\t\t\t\t    #column_width_2,
\t\t\t\t    #column_2{
\t\t\t\t        width: ";
        // line 268
        echo (isset($context["column_2"]) ? $context["column_2"] : null);
        echo "%;
\t\t\t\t    }
\t\t\t\t    #column_width_3,
\t\t\t\t    #column_3{
\t\t\t\t        width: ";
        // line 272
        echo (isset($context["column_3"]) ? $context["column_3"] : null);
        echo "%;
\t\t\t\t    }
\t\t\t\t    #column_4{
\t\t\t\t        width: ";
        // line 275
        echo (isset($context["column_4"]) ? $context["column_4"] : null);
        echo "%
\t\t\t\t    }
\t\t\t\t</style>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t    \$('#column_slider').slider({
\t\t\t\t        'tooltip': 'hide'
\t\t\t\t    }).on('slide', function(ev){
\t\t\t\t        var val1 = Number(ev.value[0]);
\t\t\t\t        var pos1 = (val1 / 12) * 100;
\t\t\t\t        var val2 = Number(ev.value[1]);
\t\t\t\t        var pos2 = (val2 / 12) * 100;
\t\t\t\t        \$(\"#column_1, #column_width_1\").css({'width' : pos1+'%'})
\t\t\t\t        \$(\"#column_width_1\").val(val1)
\t\t\t\t        \$(\"#column_2, #column_width_2\").css({'width' : pos2-pos1 +'%'})
\t\t\t\t        \$(\"#column_width_2\").val(val2 - val1)
\t\t\t\t        \$(\"#column_3, #column_width_3\").css({'width' : Number(100-pos2) +'%'})
\t\t\t\t        \$(\"#column_width_3\").val(Number(12 - val2))
\t\t\t\t        \$(\"#column_4\").css({'width' : Number(100-pos1) +'%'})
\t\t\t\t        \$(\"#column_width_4\").val(Number(12 - val1))
\t\t\t\t    })
\t\t\t\t    var adjustment;
\t\t\t\t    var group = \$(\"#column_groups ul.column\").sortable({
\t\t\t\t        group: 'column',
\t\t\t\t        pullPlaceholder: false,
\t\t\t\t        // animation on drop
\t\t\t\t        onDrop: function  (item, targetContainer, _super) {
\t\t\t\t            var clonedItem = \$('<li/>').css({height: 0})
\t\t\t\t            item.before(clonedItem)
\t\t\t\t            clonedItem.animate({'height': item.height()})
\t\t\t\t            item.animate(clonedItem.position(), function  () {
\t\t\t\t                clonedItem.detach()
\t\t\t\t                _super(item)
\t\t\t\t            })

\t\t\t\t            var data = group.sortable(\"serialize\").get();
\t\t\t\t            var jsonString = JSON.stringify(data, null, ' ');
\t\t\t\t            \$.each(data, function(column, column_value) {
\t\t\t\t                \$.each(column_value, function(row, row_value) {
\t\t\t\t                    \$('#step_' + row_value['id'] + ' .data-column').val(column + 1)
\t\t\t\t                    \$('#step_' + row_value['id'] + ' .data-row').val(row)
\t\t\t\t                });
\t\t\t\t            });
\t\t\t\t        },
\t\t\t\t        onDragStart: function (\$item, container, _super) {
\t\t\t\t            var offset = \$item.offset(),
\t\t\t\t                    pointer = container.rootGroup.pointer

\t\t\t\t            adjustment = {
\t\t\t\t                left: pointer.left - offset.left,
\t\t\t\t                top: pointer.top - offset.top
\t\t\t\t            }

\t\t\t\t            _super(\$item, container)
\t\t\t\t        },
\t\t\t\t        onDrag: function (\$item, position) {
\t\t\t\t            \$item.css({
\t\t\t\t                left: position.left - adjustment.left,
\t\t\t\t                top: position.top - adjustment.top
\t\t\t\t            })
\t\t\t\t        }
\t\t\t\t    });
\t\t\t\t    function show_grid(e) {
\t\t\t\t    \tif (e.value == 4) {
\t\t\t\t    \t\t\$('#custom_grid').slideDown();
\t\t\t\t    \t} else {
\t\t\t\t    \t\t\$('#custom_grid').slideUp();
\t\t\t\t    \t}
\t\t\t\t    }
\t\t\t\t    \$(function () {
\t\t\t\t        \$('.qc-step').each(function(){
\t\t\t\t            \$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));
\t\t\t\t            })
\t\t\t\t        \$('.qc-step').tsort({attr:'data-row'});        
\t\t\t\t    });
\t\t\t\t</script>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-login-module\"><span title=\"";
        // line 354
        echo (isset($context["help_login_module"]) ? $context["help_login_module"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_login_module"]) ? $context["entry_login_module"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_login_module\" id=\"input-login-module\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 357
        echo (((isset($context["quickcheckout_login_module"]) ? $context["quickcheckout_login_module"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 358
        echo (((isset($context["quickcheckout_login_module"]) ? $context["quickcheckout_login_module"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-cart\"><span title=\"";
        // line 363
        echo (isset($context["help_cart"]) ? $context["help_cart"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_cart"]) ? $context["entry_cart"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_cart\" id=\"input-cart\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 366
        echo (((isset($context["quickcheckout_cart"]) ? $context["quickcheckout_cart"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 367
        echo (((isset($context["quickcheckout_cart"]) ? $context["quickcheckout_cart"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-show-shipping-address\"><span title=\"";
        // line 374
        echo (isset($context["help_show_shipping_address"]) ? $context["help_show_shipping_address"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_show_shipping_address"]) ? $context["entry_show_shipping_address"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_show_shipping_address\" id=\"input-show-shipping-address\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 377
        echo (((isset($context["quickcheckout_show_shipping_address"]) ? $context["quickcheckout_show_shipping_address"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 378
        echo (((isset($context["quickcheckout_show_shipping_address"]) ? $context["quickcheckout_show_shipping_address"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-slide-effect\"><span title=\"";
        // line 383
        echo (isset($context["help_slide_effect"]) ? $context["help_slide_effect"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_slide_effect"]) ? $context["entry_slide_effect"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_slide_effect\" id=\"input-slide-effect\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 386
        echo (((isset($context["quickcheckout_slide_effect"]) ? $context["quickcheckout_slide_effect"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 387
        echo (((isset($context["quickcheckout_slide_effect"]) ? $context["quickcheckout_slide_effect"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-load-screen\"><span title=\"";
        // line 394
        echo (isset($context["help_load_screen"]) ? $context["help_load_screen"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_load_screen"]) ? $context["entry_load_screen"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_load_screen\" id=\"input-load-screen\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 397
        echo (((isset($context["quickcheckout_load_screen"]) ? $context["quickcheckout_load_screen"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 398
        echo (((isset($context["quickcheckout_load_screen"]) ? $context["quickcheckout_load_screen"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-loading-display\"><span title=\"";
        // line 403
        echo (isset($context["help_loading_display"]) ? $context["help_loading_display"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_loading_display"]) ? $context["entry_loading_display"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_loading_display\" id=\"input-loading-display\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 406
        echo (((isset($context["quickcheckout_loading_display"]) ? $context["quickcheckout_loading_display"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_spinner"]) ? $context["text_spinner"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 407
        echo (((isset($context["quickcheckout_loading_display"]) ? $context["quickcheckout_loading_display"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_overlay"]) ? $context["text_overlay"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-custom-css\">";
        // line 414
        echo (isset($context["entry_custom_css"]) ? $context["entry_custom_css"] : null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t    <textarea name=\"quickcheckout_custom_css\" id=\"input-custom-css\" class=\"form-control\" rows=\"5\">";
        // line 416
        echo (isset($context["quickcheckout_custom_css"]) ? $context["quickcheckout_custom_css"] : null);
        echo "</textarea>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane table-responsive\" id=\"tab-field\">
\t\t\t  <table class=\"table table-bordered table-hover table-striped\">
\t\t\t\t<tr>
\t\t\t\t  <td></td>
\t\t\t\t  <td class=\"text-center\">";
        // line 425
        echo (isset($context["text_display"]) ? $context["text_display"] : null);
        echo "</td>
\t\t\t\t  <td class=\"text-center\">";
        // line 426
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</td>
\t\t\t\t  <td>";
        // line 427
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</td>
\t\t\t\t  <td>";
        // line 428
        echo (isset($context["text_placeholder"]) ? $context["text_placeholder"] : null);
        echo "</td>
\t\t\t\t  <td>";
        // line 429
        echo (isset($context["text_sort_order"]) ? $context["text_sort_order"] : null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
\t\t\t\t  ";
            // line 432
            if (($context["field"] == "country")) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 434
                echo $this->getAttribute($context, ("entry_field_" . $context["field"]));
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 435
                echo $context["field"];
                echo "[display]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "display", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 436
                echo $context["field"];
                echo "[required]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "required", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td><select name=\"quickcheckout_field_";
                // line 437
                echo $context["field"];
                echo "[default]\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
                // line 438
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    echo " 
\t\t\t\t\t\t  ";
                    // line 440
                    if (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "default", array()) && ($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "default", array()) == $this->getAttribute($context["country"], "country_id", array())))) {
                        // line 441
                        echo "\t\t\t\t\t\t  <option value=\"";
                        echo $this->getAttribute($context["country"], "country_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["country"], "name", array());
                        echo "</option>
\t\t\t\t\t\t  ";
                    } else {
                        // line 442
                        echo "   
\t\t\t\t\t\t  <option value=\"";
                        // line 443
                        echo $this->getAttribute($context["country"], "country_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["country"], "name", array());
                        echo "</option>
\t\t\t\t\t\t  ";
                    }
                    // line 445
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 446
                echo "\t\t\t\t\t  </select></td>
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 448
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo $this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "sort_order", array());
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t  ";
            } elseif ((            // line 450
$context["field"] == "zone")) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 452
                echo $this->getAttribute($context, ("entry_field_" . $context["field"]));
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 453
                echo $context["field"];
                echo "[display]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "display", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 454
                echo $context["field"];
                echo "[required]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "required", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td><select name=\"quickcheckout_field_";
                // line 455
                echo $context["field"];
                echo "[default]\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
                // line 456
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t";
                // line 457
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
                    echo " 
\t\t\t\t\t\t  ";
                    // line 458
                    if (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "default", array()) && ($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "default", array()) == $this->getAttribute($context["zone"], "zone_id", array())))) {
                        // line 459
                        echo "\t\t\t\t\t\t  <option value=\"";
                        echo $this->getAttribute($context["zone"], "zone_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["zone"], "name", array());
                        echo "</option>
\t\t\t\t\t\t  ";
                    } else {
                        // line 460
                        echo "   
\t\t\t\t\t\t  <option value=\"";
                        // line 461
                        echo $this->getAttribute($context["zone"], "zone_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["zone"], "name", array());
                        echo "</option>
\t\t\t\t\t\t  ";
                    }
                    // line 463
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "\t\t\t\t\t</select></td>
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 466
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo $this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "sort_order", array());
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t  ";
            } elseif ((            // line 468
$context["field"] == "customer_group")) {
                // line 469
                echo "\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 470
                echo $this->getAttribute($context, ("entry_field_" . $context["field"]));
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 471
                echo $context["field"];
                echo "[display]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "display", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 475
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo $this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "sort_order", array());
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t   ";
            } elseif (((((            // line 477
$context["field"] == "register") || ($context["field"] == "newsletter")) || ($context["field"] == "shipping")) || ($context["field"] == "rules"))) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 479
                echo $this->getAttribute($context, ("entry_field_" . $context["field"]));
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 480
                echo $context["field"];
                echo "[display]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "display", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 481
                echo $context["field"];
                echo "[required]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "required", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 482
                echo $context["field"];
                echo "[default]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "default", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 484
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo $this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "sort_order", array());
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t  ";
            } else {
                // line 486
                echo "   
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 488
                echo $this->getAttribute($context, ("entry_field_" . $context["field"]));
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 489
                echo $context["field"];
                echo "[display]\"";
                echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "display", array())) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t";
                // line 490
                if (($context["field"] == "postcode")) {
                    echo " 
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t";
                } else {
                    // line 492
                    echo "   
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                    // line 493
                    echo $context["field"];
                    echo "[required]\"";
                    echo (($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "required", array())) ? (" checked") : (""));
                    echo " /></td>
\t\t\t\t\t";
                }
                // line 495
                echo "\t\t\t\t\t<td>
\t\t\t\t\t  ";
                // line 496
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t    <span class=\"input-group-addon\"><img src=\"language/";
                    // line 498
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" /></span>
\t\t\t\t\t    <input type=\"text\" name=\"quickcheckout_field_";
                    // line 499
                    echo $context["field"];
                    echo "[default][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "default", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 502
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t  ";
                // line 504
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t    <span class=\"input-group-addon\"><img src=\"language/";
                    // line 506
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" /></span>
\t\t\t\t\t    <input type=\"text\" name=\"quickcheckout_field_";
                    // line 507
                    echo $context["field"];
                    echo "[placeholder][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "placeholder", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 510
                echo "\t\t\t\t\t</td>
\t\t\t\t\t";
                // line 511
                if (($context["field"] == "comment")) {
                    echo " 
\t\t\t\t\t<td class=\"text-center\"><i class=\"fa fa-minus\"></i></td>
\t\t\t\t\t";
                } else {
                    // line 513
                    echo "   
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                    // line 514
                    echo $context["field"];
                    echo "[sort_order]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("quickcheckout_field_" . $context["field"])), "sort_order", array());
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t    ";
                }
                // line 516
                echo "\t\t\t\t  </tr>
\t\t\t\t  ";
            }
            // line 518
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 519
        echo "\t\t\t  </table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-module\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-coupon\"><span title=\"";
        // line 524
        echo (isset($context["help_coupon"]) ? $context["help_coupon"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_coupon\" id=\"input-coupon\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 527
        echo (((isset($context["quickcheckout_coupon"]) ? $context["quickcheckout_coupon"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 528
        echo (((isset($context["quickcheckout_coupon"]) ? $context["quickcheckout_coupon"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-voucher\"><span title=\"";
        // line 533
        echo (isset($context["help_voucher"]) ? $context["help_voucher"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_voucher\" id=\"input-voucher\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 536
        echo (((isset($context["quickcheckout_voucher"]) ? $context["quickcheckout_voucher"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 537
        echo (((isset($context["quickcheckout_voucher"]) ? $context["quickcheckout_voucher"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-reward\"><span title=\"";
        // line 544
        echo (isset($context["help_reward"]) ? $context["help_reward"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_reward\" id=\"input-reward\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 547
        echo (((isset($context["quickcheckout_reward"]) ? $context["quickcheckout_reward"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 548
        echo (((isset($context["quickcheckout_reward"]) ? $context["quickcheckout_reward"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-html-header\"><span title=\"";
        // line 555
        echo (isset($context["help_html_header"]) ? $context["help_html_header"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_html_header"]) ? $context["entry_html_header"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 557
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 559
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<textarea name=\"quickcheckout_html_header[";
            // line 560
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" rows=\"7\" cols=\"30\" class=\"form-control\">";
            echo $this->getAttribute((isset($context["quickcheckout_html_header"]) ? $context["quickcheckout_html_header"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
            echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-html-footer\"><span title=\"";
        // line 566
        echo (isset($context["help_html_footer"]) ? $context["help_html_footer"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_html_footer"]) ? $context["entry_html_footer"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 568
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 570
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<textarea name=\"quickcheckout_html_footer[";
            // line 571
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" rows=\"7\" cols=\"30\" class=\"form-control\">";
            echo $this->getAttribute((isset($context["quickcheckout_html_footer"]) ? $context["quickcheckout_html_footer"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
            echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-payment\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-module\"><span title=\"";
        // line 581
        echo (isset($context["help_payment_module"]) ? $context["help_payment_module"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_payment_module"]) ? $context["entry_payment_module"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment_module\" id=\"input-payment-module\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 584
        echo (((isset($context["quickcheckout_payment_module"]) ? $context["quickcheckout_payment_module"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 585
        echo (((isset($context["quickcheckout_payment_module"]) ? $context["quickcheckout_payment_module"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-reload\"><span title=\"";
        // line 590
        echo (isset($context["help_payment_reload"]) ? $context["help_payment_reload"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_payment_reload"]) ? $context["entry_payment_reload"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment_reload\" id=\"input-payment-reload\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 593
        echo (((isset($context["quickcheckout_payment_reload"]) ? $context["quickcheckout_payment_reload"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 594
        echo (((isset($context["quickcheckout_payment_reload"]) ? $context["quickcheckout_payment_reload"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment\"><span title=\"";
        // line 601
        echo (isset($context["help_payment"]) ? $context["help_payment"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment\" id=\"input-payment\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 604
        echo (((isset($context["quickcheckout_payment"]) ? $context["quickcheckout_payment"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_radio_type"]) ? $context["text_radio_type"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 605
        echo (((isset($context["quickcheckout_payment"]) ? $context["quickcheckout_payment"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_select_type"]) ? $context["text_select_type"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-default\"><span title=\"";
        // line 610
        echo (isset($context["help_payment_default"]) ? $context["help_payment_default"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_payment_default"]) ? $context["entry_payment_default"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment_default\" id=\"input-payment-default\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment_modules"]) ? $context["payment_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_module"]) {
            echo " 
\t\t\t\t\t  <option value=\"";
            // line 614
            echo $this->getAttribute($context["payment_module"], "code", array());
            echo "\"";
            echo ((((isset($context["quickcheckout_payment_default"]) ? $context["quickcheckout_payment_default"] : null) == $this->getAttribute($context["payment_module"], "code", array()))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute($context["payment_module"], "name", array());
            echo "</option>
\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 615
        echo " 
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-reload\"><span title=\"";
        // line 622
        echo (isset($context["help_shipping_reload"]) ? $context["help_shipping_reload"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_shipping_reload"]) ? $context["entry_shipping_reload"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_reload\" id=\"input-shipping-reload\" class=\"form-control\" onchange=\"show_depends(this);\">
\t\t\t\t\t  <option value=\"1\"";
        // line 625
        echo (((isset($context["quickcheckout_shipping_reload"]) ? $context["quickcheckout_shipping_reload"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 626
        echo (((isset($context["quickcheckout_shipping_reload"]) ? $context["quickcheckout_shipping_reload"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div id=\"depends\" style=\"";
        // line 631
        echo ((((isset($context["quickcheckout_shipping_reload"]) ? $context["quickcheckout_shipping_reload"] : null) == "1")) ? (" display:block;") : (" display:none;"));
        echo "\">
\t\t\t  \t<h3 class=\"text-center\">";
        // line 632
        echo (isset($context["text_depends_payment"]) ? $context["text_depends_payment"] : null);
        echo "</h3>
                <table id=\"shippings\" class=\"table table-bordered table-striped table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\" colspan=\"2\">";
        // line 636
        echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
        echo "</td>
                      <td class=\"text-left\" colspan=\"2\">";
        // line 637
        echo (isset($context["tab_payment"]) ? $context["tab_payment"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 642
        $context["shipping_row"] = 0;
        // line 643
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment2shippings"]) ? $context["payment2shippings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mshipping"]) {
            // line 644
            echo "                    <tr id=\"shipping-row";
            echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
            echo "\">
                      <td class=\"text-left\"><select value=\"\" class=\"form-control\" data-target=\"quickcheckout_payment2shipping_shippings[";
            // line 645
            echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
            echo "][shipping]\">
                        <option value=\"\">";
            // line 646
            echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
            echo "</option>
                        ";
            // line 647
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment2shippings_shippings"]) ? $context["payment2shippings_shippings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 648
                echo "                        ";
                if ($this->getAttribute($context["shipping"], "installed", array())) {
                    // line 649
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["shipping"], "extension", array());
                    echo "\" ";
                    if (($this->getAttribute($context["shipping"], "extension", array()) == $this->getAttribute($context["mshipping"], "shipping", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo $this->getAttribute($context["shipping"], "name", array());
                    echo "</option>
                        ";
                }
                // line 651
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 652
            echo "                      </select></td>
                      <td class=\"text-left\"><input type=\"text\" name=\"quickcheckout_payment2shipping_shippings[";
            // line 653
            echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
            echo "][shipping]\" value=\"";
            echo $this->getAttribute($context["mshipping"], "shipping", array());
            echo "\" placeholder=\"flat.flat\" class=\"form-control\" /></td>
                      <td class=\"text-left\"><select value=\"\" class=\"form-control\" data-target=\"quickcheckout_payment2shipping_shippings[";
            // line 654
            echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
            echo "][payment]\">
                        <option value=\"\">";
            // line 655
            echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
            echo "</option>
                        ";
            // line 656
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment2shippings_payments"]) ? $context["payment2shippings_payments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 657
                echo "                        ";
                if ($this->getAttribute($context["payment"], "installed", array())) {
                    // line 658
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["payment"], "extension", array());
                    echo "\" ";
                    if (($this->getAttribute($context["payment"], "extension", array()) == $this->getAttribute($context["mshipping"], "payment", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo $this->getAttribute($context["payment"], "name", array());
                    echo "</option>
                        ";
                }
                // line 660
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 661
            echo "                      </select></td>
                      <td class=\"text-left\"><input type=\"text\" name=\"quickcheckout_payment2shipping_shippings[";
            // line 662
            echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
            echo "][payment]\" value=\"";
            echo $this->getAttribute($context["mshipping"], "payment", array());
            echo "\" placeholder=\"bank_transfer\" class=\"form-control\" /></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#shipping-row";
            // line 663
            echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                  ";
            // line 665
            $context["shipping_row"] = ((isset($context["shipping_row"]) ? $context["shipping_row"] : null) + 1);
            // line 666
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mshipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        echo "                    </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addShipping();\" data-toggle=\"tooltip\" title=\"";
        // line 671
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
\t\t\t  <h3 class=\"text-center\">";
        // line 676
        echo (isset($context["text_method_images"]) ? $context["text_method_images"] : null);
        echo "</h3>
\t\t\t  <table class=\"table table-bordered table-striped table-hover\">
\t\t\t    <tr>
\t\t\t\t  <th></th>
\t\t\t\t  <th><span title=\"";
        // line 680
        echo (isset($context["help_payment_logo"]) ? $context["help_payment_logo"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_payment_logo"]) ? $context["entry_payment_logo"] : null);
        echo " <i class=\"fa fa-question-circle\"></i></span></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment_modules"]) ? $context["payment_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_module"]) {
            // line 683
            echo "\t\t\t\t<tr>
\t\t\t\t  <td>";
            // line 684
            echo $this->getAttribute($context["payment_module"], "name", array());
            echo "</td>
\t\t\t\t  <td><input type=\"text\" name=\"quickcheckout_payment_logo[";
            // line 685
            echo $this->getAttribute($context["payment_module"], "code", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["quickcheckout_payment_logo"]) ? $context["quickcheckout_payment_logo"] : null), $this->getAttribute($context["payment_module"], "code", array()), array(), "array");
            echo "\" class=\"form-control\" /></td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
        echo " 
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"text-center\">";
        // line 689
        echo (isset($context["help_display_more"]) ? $context["help_display_more"] : null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t  </table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-shipping\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-module\"><span title=\"";
        // line 696
        echo (isset($context["help_shipping_module"]) ? $context["help_shipping_module"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_shipping_module"]) ? $context["entry_shipping_module"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_module\" id=\"input-shipping-module\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 699
        echo (((isset($context["quickcheckout_shipping_module"]) ? $context["quickcheckout_shipping_module"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 700
        echo (((isset($context["quickcheckout_shipping_module"]) ? $context["quickcheckout_shipping_module"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-title-display\">";
        // line 705
        echo (isset($context["entry_shipping_title_display"]) ? $context["entry_shipping_title_display"] : null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_title_display\" id=\"input-shipping-title-display\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 708
        echo (((isset($context["quickcheckout_shipping_title_display"]) ? $context["quickcheckout_shipping_title_display"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 709
        echo (((isset($context["quickcheckout_shipping_title_display"]) ? $context["quickcheckout_shipping_title_display"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping\"><span title=\"";
        // line 716
        echo (isset($context["help_shipping"]) ? $context["help_shipping"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping\" id=\"input-shipping\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 719
        echo (((isset($context["quickcheckout_shipping"]) ? $context["quickcheckout_shipping"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_radio_type"]) ? $context["text_radio_type"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 720
        echo (((isset($context["quickcheckout_shipping"]) ? $context["quickcheckout_shipping"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_select_type"]) ? $context["text_select_type"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-default\"><span title=\"";
        // line 725
        echo (isset($context["help_shipping_default"]) ? $context["help_shipping_default"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_shipping_default"]) ? $context["entry_shipping_default"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_default\" id=\"input-shipping-default\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 728
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shipping_modules"]) ? $context["shipping_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_module"]) {
            echo " 
\t\t\t\t\t  <option value=\"";
            // line 729
            echo $this->getAttribute($context["shipping_module"], "code", array());
            echo "\"";
            echo ((((isset($context["quickcheckout_shipping_default"]) ? $context["quickcheckout_shipping_default"] : null) == $this->getAttribute($context["shipping_module"], "code", array()))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute($context["shipping_module"], "name", array());
            echo "</option>
\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo " 
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <h3 class=\"text-center\">";
        // line 735
        echo (isset($context["text_method_images"]) ? $context["text_method_images"] : null);
        echo "</h3>
\t\t\t  <table class=\"table table-bordered table-striped table-hover\">
\t\t\t    <tr>
\t\t\t\t  <th></th>
\t\t\t\t  <th><span title=\"";
        // line 739
        echo (isset($context["help_shipping_logo"]) ? $context["help_shipping_logo"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_shipping_logo"]) ? $context["entry_shipping_logo"] : null);
        echo " <i class=\"fa fa-question-circle\"></i></span></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shipping_modules"]) ? $context["shipping_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_module"]) {
            echo " 
\t\t\t\t<tr>
\t\t\t\t  <td>";
            // line 743
            echo $this->getAttribute($context["shipping_module"], "name", array());
            echo "</td>
\t\t\t\t  <td><input type=\"text\" name=\"quickcheckout_shipping_logo[";
            // line 744
            echo $this->getAttribute($context["shipping_module"], "code", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["quickcheckout_shipping_logo"]) ? $context["quickcheckout_shipping_logo"] : null), $this->getAttribute($context["shipping_module"], "code", array()), array(), "array");
            echo "\" class=\"form-control\" /></td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 746
        echo " 
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"text-center\">";
        // line 748
        echo (isset($context["help_display_more"]) ? $context["help_display_more"] : null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t  </table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-survey\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey\">";
        // line 755
        echo (isset($context["entry_survey"]) ? $context["entry_survey"] : null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_survey\" id=\"input-survey\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 758
        echo (((isset($context["quickcheckout_survey"]) ? $context["quickcheckout_survey"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 759
        echo (((isset($context["quickcheckout_survey"]) ? $context["quickcheckout_survey"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey-required\"><span title=\"";
        // line 764
        echo (isset($context["help_survey_required"]) ? $context["help_survey_required"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_survey_required"]) ? $context["entry_survey_required"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_survey_required\" id=\"input-survey-required\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 767
        echo (((isset($context["quickcheckout_survey_required"]) ? $context["quickcheckout_survey_required"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 768
        echo (((isset($context["quickcheckout_survey_required"]) ? $context["quickcheckout_survey_required"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey-text\"><span title=\"";
        // line 775
        echo (isset($context["help_survey_text"]) ? $context["help_survey_text"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_survey_text"]) ? $context["entry_survey_text"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 777
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 779
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_survey_text[";
            // line 780
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["quickcheckout_survey_text"]) ? $context["quickcheckout_survey_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
            echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 782
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey-type\"><span title=\"";
        // line 786
        echo (isset($context["help_survey_type"]) ? $context["help_survey_type"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_survey_type"]) ? $context["entry_survey_type"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_survey_type\" id=\"input-survey-type\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 789
        echo (((isset($context["quickcheckout_survey_type"]) ? $context["quickcheckout_survey_type"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_select_type"]) ? $context["text_select_type"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 790
        echo (((isset($context["quickcheckout_survey_type"]) ? $context["quickcheckout_survey_type"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_text_type"]) ? $context["text_text_type"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"table-responsive\">
\t\t\t\t<table id=\"survey-answer\" class=\"table table-hover table-bordered\">
\t\t\t\t  <thead>
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-left\" colspan=\"2\">";
        // line 799
        echo (isset($context["entry_survey_answer"]) ? $context["entry_survey_answer"] : null);
        echo "</td>
\t\t\t\t  </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  ";
        // line 803
        $context["survey_answer_row"] = 0;
        // line 804
        echo "\t\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quickcheckout_survey_answers"]) ? $context["quickcheckout_survey_answers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["survey_answer"]) {
            echo " 
\t\t\t\t  <tr id=\"survey-answer-";
            // line 805
            echo (isset($context["survey_answer_row"]) ? $context["survey_answer_row"] : null);
            echo "\">
\t\t\t\t\t<td class=\"text-left\">";
            // line 806
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 807
                echo "\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 808
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
\t\t\t\t\t\t<input type=\"text-text\" name=\"quickcheckout_survey_answers[";
                // line 809
                echo (isset($context["survey_answer_row"]) ? $context["survey_answer_row"] : null);
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["survey_answer"], $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 811
            echo "</td>
\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$('#survey-answer-";
            // line 812
            echo (isset($context["survey_answer_row"]) ? $context["survey_answer_row"] : null);
            echo "').remove();\">";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "</a></td>
\t\t\t\t\t";
            // line 813
            $context["survey_answer_row"] = ((isset($context["survey_answer_row"]) ? $context["survey_answer_row"] : null) + 1);
            echo " 
\t\t\t\t  </tr>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey_answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo " 
\t\t\t\t  </tbody>
\t\t\t\t  <tfoot>
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-right\" colspan=\"2\"><a class=\"btn btn-success\" onClick=\"addAnswer();\">";
        // line 819
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "</a></td>
\t\t\t\t  </tr>
\t\t\t\t  </tfoot>
\t\t\t\t</table>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery\"><span title=\"";
        // line 828
        echo (isset($context["help_delivery"]) ? $context["help_delivery"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery"]) ? $context["entry_delivery"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_delivery\" id=\"input-delivery\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 831
        echo (((isset($context["quickcheckout_delivery"]) ? $context["quickcheckout_delivery"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 832
        echo (((isset($context["quickcheckout_delivery"]) ? $context["quickcheckout_delivery"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-time\"><span title=\"";
        // line 837
        echo (isset($context["help_delivery_time"]) ? $context["help_delivery_time"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_time"]) ? $context["entry_delivery_time"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_delivery_time\" id=\"input-delivery-time\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 840
        echo ((((isset($context["quickcheckout_delivery_time"]) ? $context["quickcheckout_delivery_time"] : null) == 1)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"2\"";
        // line 841
        echo ((((isset($context["quickcheckout_delivery_time"]) ? $context["quickcheckout_delivery_time"] : null) == 2)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_estimate"]) ? $context["text_estimate"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"3\"";
        // line 842
        echo ((((isset($context["quickcheckout_delivery_time"]) ? $context["quickcheckout_delivery_time"] : null) == 3)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_select_type"]) ? $context["text_select_type"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 843
        echo ((((isset($context["quickcheckout_delivery_time"]) ? $context["quickcheckout_delivery_time"] : null) == 0)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-required\"><span title=\"";
        // line 850
        echo (isset($context["help_delivery_required"]) ? $context["help_delivery_required"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_required"]) ? $context["entry_delivery_required"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_delivery_required\" id=\"input-delivery-required\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 853
        echo (((isset($context["quickcheckout_delivery_required"]) ? $context["quickcheckout_delivery_required"] : null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 854
        echo (((isset($context["quickcheckout_delivery_required"]) ? $context["quickcheckout_delivery_required"] : null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-unavailable\"><span title=\"";
        // line 859
        echo (isset($context["help_delivery_unavailable"]) ? $context["help_delivery_unavailable"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_unavailable"]) ? $context["entry_delivery_unavailable"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<textarea name=\"quickcheckout_delivery_unavailable\" rows=\"5\" class=\"form-control\">";
        // line 861
        echo (isset($context["quickcheckout_delivery_unavailable"]) ? $context["quickcheckout_delivery_unavailable"] : null);
        echo "</textarea>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-min\"><span title=\"";
        // line 867
        echo (isset($context["help_delivery_min"]) ? $context["help_delivery_min"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_min"]) ? $context["entry_delivery_min"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_min\" value=\"";
        // line 869
        echo (isset($context["quickcheckout_delivery_min"]) ? $context["quickcheckout_delivery_min"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-max\"><span title=\"";
        // line 873
        echo (isset($context["help_delivery_max"]) ? $context["help_delivery_max"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_max"]) ? $context["entry_delivery_max"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_max\" value=\"";
        // line 875
        echo (isset($context["quickcheckout_delivery_max"]) ? $context["quickcheckout_delivery_max"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-min-hour\"><span title=\"";
        // line 881
        echo (isset($context["help_delivery_min_hour"]) ? $context["help_delivery_min_hour"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_min_hour"]) ? $context["entry_delivery_min_hour"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_min_hour\" value=\"";
        // line 883
        echo (isset($context["quickcheckout_delivery_min_hour"]) ? $context["quickcheckout_delivery_min_hour"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-max-hour\"><span title=\"";
        // line 887
        echo (isset($context["help_delivery_max_hour"]) ? $context["help_delivery_max_hour"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_max_hour"]) ? $context["entry_delivery_max_hour"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_max_hour\" value=\"";
        // line 889
        echo (isset($context["quickcheckout_delivery_max_hour"]) ? $context["quickcheckout_delivery_max_hour"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-days-of-week\"><span title=\"";
        // line 895
        echo (isset($context["help_delivery_days_of_week"]) ? $context["help_delivery_days_of_week"] : null);
        echo "\" data-toggle=\"tooltip\">";
        echo (isset($context["entry_delivery_days_of_week"]) ? $context["entry_delivery_days_of_week"] : null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_days_of_week\" value=\"";
        // line 897
        echo (isset($context["quickcheckout_delivery_days_of_week"]) ? $context["quickcheckout_delivery_days_of_week"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"table-responsive\">
\t\t\t\t<table id=\"delivery-time\" class=\"table table-bordered table-hover\">
\t\t\t\t  <thead>
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-left\" colspan=\"2\">";
        // line 905
        echo (isset($context["entry_delivery_times"]) ? $context["entry_delivery_times"] : null);
        echo "</td>
\t\t\t\t  </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  ";
        // line 909
        $context["delivery_time_row"] = 0;
        // line 910
        echo "\t\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quickcheckout_delivery_times"]) ? $context["quickcheckout_delivery_times"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["delivery_time"]) {
            echo " 
\t\t\t\t  <tr id=\"delivery-time-";
            // line 911
            echo (isset($context["delivery_time_row"]) ? $context["delivery_time_row"] : null);
            echo "\">
\t\t\t\t    <td class=\"text-left\">";
            // line 912
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 914
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_times[";
                // line 915
                echo (isset($context["delivery_time_row"]) ? $context["delivery_time_row"] : null);
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["delivery_time"], $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 917
            echo "</td>
\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$('#delivery-time-";
            // line 918
            echo (isset($context["delivery_time_row"]) ? $context["delivery_time_row"] : null);
            echo "').remove();\">";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "</a></td>
\t\t\t\t\t";
            // line 919
            $context["delivery_time_row"] = ((isset($context["delivery_time_row"]) ? $context["delivery_time_row"] : null) + 1);
            echo " 
\t\t\t\t  </tr>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 921
        echo " 
\t\t\t\t  </tbody>
\t\t\t\t  <tfoot>
\t\t\t\t  <tr>
\t\t\t\t    <td class=\"text-right\" colspan=\"2\"><a class=\"btn btn-success\" onClick=\"addTime();\">";
        // line 925
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "</a></td>
\t\t\t\t  </tr>
\t\t\t\t  </tfoot>
\t\t\t\t</table>
\t\t\t  </div>
\t\t\t</div>
\t\t\t";
        // line 931
        echo (isset($context["tab"]) ? $context["tab"] : null);
        echo "
\t\t  </div>
\t\t</form>
      </div>
    </div>
  </div>
  <div style=\"background:#aaccdf;padding:15px;text-align:center;\"><strong style=\"color:#233746;font-size:15px;\">Другие модули для Opencart 3.x на нашем сайте <a href=\"https://opencart3x.ru\" target=\"_blank\">opencart3x.ru</a></strong></div>
</div>

<style type=\"text/css\">
.form-group + .form-group {
\tborder: none;
}
</style>
<script type=\"text/javascript\"><!--
function show(element) {
\t\$(element).tab('show');
\t
\t\$('a[href=\\'' + element + '\\']').parent('li').siblings().removeClass('active');
\t
\t\$('a[href=\\'' + element + '\\']').parent('li').addClass('active');
\t
\treturn false;
}

\$(document).ready(function() {
\t\$('.date').datetimepicker();
});

\$('select[name=\\'quickcheckout_field_country[default]\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/quickcheckout/country&country_id=' + this.value + '&user_token=";
        // line 962
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\tdataType: 'json',\t\t
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 965
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
\t\t\t
\t\t\tif (json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t    \t\t\t
\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 971
        echo $this->getAttribute((isset($context["quickcheckout_field_zone"]) ? $context["quickcheckout_field_zone"] : null), "default", array());
        echo "') {
\t      \t\t\t\thtml += ' selected=\"selected\"';
\t    \t\t\t}
\t
\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 978
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}
\t\t\t
\t\t\t\$('select[name=\\'quickcheckout_field_zone[default]\\']').html(html);
\t\t}
\t});
});

\$('select[name=\\'quickcheckout_field_country[default]\\']').trigger('change');

\$('select[name=\\'quickcheckout_survey_type\\']').change(function() {
\tif (\$('select[name=\\'quickcheckout_survey_type\\']').val() == '1') {
\t\t\$('#survey-answer').fadeIn();
\t} else {
\t\t\$('#survey-answer').fadeOut();
\t}
});

\$('select[name=\\'quickcheckout_survey_type\\']').trigger('change');

var survey_answer_row = ";
        // line 998
        echo (isset($context["survey_answer_row"]) ? $context["survey_answer_row"] : null);
        echo " ;

function addAnswer() {
\thtml  = '<tr id=\"survey-answer-' + survey_answer_row + '\">';
\thtml += '  <td class=\"left\">';
\t";
        // line 1003
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 1004
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>';
\thtml += '<input type=\"text-text\" name=\"quickcheckout_survey_answers[' + survey_answer_row + '][";
            // line 1005
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" value=\"\" class=\"form-control\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1007
        echo " 
\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$(\\'#survey-answer-' + survey_answer_row + '\\').remove();\">";
        // line 1009
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "</a></td>';
\thtml += '</tr>';
\t
\t\$('#survey-answer tbody').append(html);
\t
\tsurvey_answer_row++;
}

\$('select[name=\\'quickcheckout_delivery_time\\']').change(function() {
\tif (\$('select[name=\\'quickcheckout_delivery_time\\']').val() == '3') {
\t\t\$('#delivery-time').fadeIn();
\t} else {
\t\t\$('#delivery-time').fadeOut();
\t}
});

\$('select[name=\\'quickcheckout_delivery_time\\']').trigger('change');

var delivery_time_row = ";
        // line 1027
        echo (isset($context["delivery_time_row"]) ? $context["delivery_time_row"] : null);
        echo " ;

function addTime() {
\thtml  = '<tr id=\"delivery-time-' + delivery_time_row + '\">';
\thtml += '  <td class=\"left\">';
\t";
        // line 1032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 1033
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>';
\thtml += '<input type=\"text\" name=\"quickcheckout_delivery_times[' + delivery_time_row + '][";
            // line 1034
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" value=\"\" class=\"form-control\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1036
        echo " 
\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$(\\'#delivery-time-' + delivery_time_row + '\\').remove();\">";
        // line 1038
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "</a></td>';
\thtml += '</tr>';
\t
\t\$('#delivery-time tbody').append(html);
\t
\tdelivery_time_row++;
}

function store() {
\tlocation = 'index.php?route=extension/module/quickcheckout&store_id=' + \$('select[name=\\'store_id\\']').val();
}

function show_depends(e) {
\tif (e.value == 1) {
\t\t\$('#depends').slideDown();
\t} else {
\t\t\$('#depends').slideUp();
\t}
}
//--></script>

<script type=\"text/javascript\">
var shipping_row = ";
        // line 1060
        echo (isset($context["shipping_row"]) ? $context["shipping_row"] : null);
        echo ";
function addShipping() {
    html_shippings = '<option value=\"\">";
        // line 1062
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "</option>';
    ";
        // line 1063
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment2shippings_shippings"]) ? $context["payment2shippings_shippings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 1064
            echo "    ";
            if ($this->getAttribute($context["shipping"], "installed", array())) {
                // line 1065
                echo "    html_shippings += '<option value=\"";
                echo $this->getAttribute($context["shipping"], "extension", array());
                echo "\">";
                echo $this->getAttribute($context["shipping"], "name", array());
                echo "</option>';
    ";
            }
            // line 1067
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1068
        echo "    
    html_payments = '<option value=\"\">";
        // line 1069
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "</option>';
    ";
        // line 1070
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment2shippings_payments"]) ? $context["payment2shippings_payments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 1071
            echo "    ";
            if ($this->getAttribute($context["payment"], "installed", array())) {
                // line 1072
                echo "    html_payments += '<option value=\"";
                echo $this->getAttribute($context["payment"], "extension", array());
                echo "\">";
                echo $this->getAttribute($context["payment"], "name", array());
                echo "</option>';
    ";
            }
            // line 1074
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1075
        echo "    
    html  = '<tr id=\"shipping-row' + shipping_row + '\">';
    html += '  <td class=\"text-left\"><select value=\"\" class=\"form-control\" data-target=\"quickcheckout_payment2shipping_shippings[' + shipping_row + '][shipping]\">' + html_shippings + '</select></td>';
    html += '  <td class=\"text-left\"><input type=\"text\" name=\"quickcheckout_payment2shipping_shippings[' + shipping_row + '][shipping]\" value=\"\" placeholder=\"flat.flat\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\"><select value=\"\" class=\"form-control\" data-target=\"quickcheckout_payment2shipping_shippings[' + shipping_row + '][payment]\">' + html_payments + '</select></td>';
    html += '  <td class=\"text-left\"><input type=\"text\" name=\"quickcheckout_payment2shipping_shippings[' + shipping_row + '][payment]\" value=\"\" placeholder=\"bank_transfer\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#shipping-row' + shipping_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1081
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#shippings tbody').append(html);

    shipping_row++;
}

\$(document).on(\"change\", \"select[data-target]\", function() {
    \$('input[name=\"' + \$(this).attr('data-target') + '\"]').val(\$(this).val());
});
</script> 
";
        // line 1093
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2750 => 1093,  2735 => 1081,  2727 => 1075,  2721 => 1074,  2713 => 1072,  2710 => 1071,  2706 => 1070,  2702 => 1069,  2699 => 1068,  2693 => 1067,  2685 => 1065,  2682 => 1064,  2678 => 1063,  2674 => 1062,  2669 => 1060,  2644 => 1038,  2640 => 1036,  2631 => 1034,  2623 => 1033,  2617 => 1032,  2609 => 1027,  2588 => 1009,  2584 => 1007,  2575 => 1005,  2567 => 1004,  2561 => 1003,  2553 => 998,  2530 => 978,  2520 => 971,  2511 => 965,  2505 => 962,  2471 => 931,  2462 => 925,  2456 => 921,  2447 => 919,  2441 => 918,  2438 => 917,  2425 => 915,  2417 => 914,  2410 => 912,  2406 => 911,  2399 => 910,  2397 => 909,  2390 => 905,  2379 => 897,  2372 => 895,  2363 => 889,  2356 => 887,  2349 => 883,  2342 => 881,  2333 => 875,  2326 => 873,  2319 => 869,  2312 => 867,  2303 => 861,  2296 => 859,  2286 => 854,  2280 => 853,  2272 => 850,  2260 => 843,  2254 => 842,  2248 => 841,  2242 => 840,  2234 => 837,  2224 => 832,  2218 => 831,  2210 => 828,  2198 => 819,  2192 => 815,  2183 => 813,  2177 => 812,  2174 => 811,  2161 => 809,  2153 => 808,  2150 => 807,  2146 => 806,  2142 => 805,  2135 => 804,  2133 => 803,  2126 => 799,  2112 => 790,  2106 => 789,  2098 => 786,  2092 => 782,  2081 => 780,  2073 => 779,  2066 => 777,  2059 => 775,  2047 => 768,  2041 => 767,  2033 => 764,  2023 => 759,  2017 => 758,  2011 => 755,  2001 => 748,  1997 => 746,  1986 => 744,  1982 => 743,  1975 => 741,  1968 => 739,  1961 => 735,  1954 => 730,  1942 => 729,  1936 => 728,  1928 => 725,  1918 => 720,  1912 => 719,  1904 => 716,  1892 => 709,  1886 => 708,  1880 => 705,  1870 => 700,  1864 => 699,  1856 => 696,  1846 => 689,  1842 => 687,  1831 => 685,  1827 => 684,  1824 => 683,  1820 => 682,  1813 => 680,  1806 => 676,  1798 => 671,  1792 => 667,  1786 => 666,  1784 => 665,  1777 => 663,  1771 => 662,  1768 => 661,  1762 => 660,  1750 => 658,  1747 => 657,  1743 => 656,  1739 => 655,  1735 => 654,  1729 => 653,  1726 => 652,  1720 => 651,  1708 => 649,  1705 => 648,  1701 => 647,  1697 => 646,  1693 => 645,  1688 => 644,  1683 => 643,  1681 => 642,  1673 => 637,  1669 => 636,  1662 => 632,  1658 => 631,  1648 => 626,  1642 => 625,  1634 => 622,  1625 => 615,  1613 => 614,  1607 => 613,  1599 => 610,  1589 => 605,  1583 => 604,  1575 => 601,  1563 => 594,  1557 => 593,  1549 => 590,  1539 => 585,  1533 => 584,  1525 => 581,  1515 => 573,  1504 => 571,  1496 => 570,  1489 => 568,  1482 => 566,  1476 => 562,  1465 => 560,  1457 => 559,  1450 => 557,  1443 => 555,  1431 => 548,  1425 => 547,  1417 => 544,  1405 => 537,  1399 => 536,  1391 => 533,  1381 => 528,  1375 => 527,  1367 => 524,  1360 => 519,  1354 => 518,  1350 => 516,  1343 => 514,  1340 => 513,  1334 => 511,  1331 => 510,  1318 => 507,  1310 => 506,  1303 => 504,  1299 => 502,  1286 => 499,  1278 => 498,  1271 => 496,  1268 => 495,  1261 => 493,  1258 => 492,  1252 => 490,  1246 => 489,  1242 => 488,  1238 => 486,  1230 => 484,  1223 => 482,  1217 => 481,  1211 => 480,  1207 => 479,  1202 => 477,  1195 => 475,  1186 => 471,  1182 => 470,  1179 => 469,  1177 => 468,  1170 => 466,  1166 => 464,  1160 => 463,  1153 => 461,  1150 => 460,  1142 => 459,  1140 => 458,  1134 => 457,  1130 => 456,  1126 => 455,  1120 => 454,  1114 => 453,  1110 => 452,  1105 => 450,  1098 => 448,  1094 => 446,  1088 => 445,  1081 => 443,  1078 => 442,  1070 => 441,  1068 => 440,  1062 => 439,  1058 => 438,  1054 => 437,  1048 => 436,  1042 => 435,  1038 => 434,  1033 => 432,  1027 => 431,  1022 => 429,  1018 => 428,  1014 => 427,  1010 => 426,  1006 => 425,  994 => 416,  989 => 414,  977 => 407,  971 => 406,  963 => 403,  953 => 398,  947 => 397,  939 => 394,  927 => 387,  921 => 386,  913 => 383,  903 => 378,  897 => 377,  889 => 374,  877 => 367,  871 => 366,  863 => 363,  853 => 358,  847 => 357,  839 => 354,  757 => 275,  751 => 272,  744 => 268,  737 => 264,  731 => 260,  728 => 259,  725 => 258,  722 => 257,  720 => 256,  705 => 243,  692 => 238,  686 => 237,  681 => 235,  674 => 233,  662 => 231,  658 => 230,  650 => 227,  645 => 225,  637 => 224,  628 => 218,  622 => 215,  612 => 210,  606 => 209,  598 => 206,  588 => 201,  582 => 200,  576 => 199,  570 => 198,  562 => 195,  552 => 187,  541 => 185,  533 => 184,  526 => 182,  519 => 180,  513 => 176,  502 => 174,  494 => 173,  487 => 171,  480 => 169,  468 => 162,  462 => 161,  454 => 158,  444 => 153,  438 => 152,  430 => 149,  421 => 143,  414 => 141,  404 => 136,  398 => 135,  390 => 132,  378 => 125,  372 => 124,  364 => 121,  354 => 116,  348 => 115,  340 => 112,  328 => 105,  322 => 104,  314 => 101,  304 => 96,  298 => 95,  290 => 92,  278 => 85,  272 => 84,  264 => 81,  254 => 76,  248 => 75,  240 => 72,  231 => 66,  224 => 64,  214 => 59,  208 => 58,  200 => 55,  191 => 49,  185 => 48,  179 => 47,  173 => 46,  167 => 45,  161 => 44,  155 => 43,  149 => 42,  143 => 41,  138 => 39,  132 => 35,  120 => 34,  114 => 33,  108 => 32,  103 => 30,  98 => 27,  91 => 24,  87 => 23,  84 => 22,  77 => 19,  73 => 18,  66 => 13,  56 => 12,  50 => 11,  45 => 9,  39 => 8,  33 => 7,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a onclick="$('#form').attr('action', '{{ continue }}');$('#form').submit();" data-toggle="tooltip" title="{{ button_continue }}" class="btn btn-success"><i class="fa fa-check"></i></a>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %} */
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %} */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if success %} */
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i>{{ success }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/* 	{% if error_warning %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>{{ error_warning }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i>{{ entry_store }} </h3>*/
/*         <select onchange="store();" name="store_id">*/
/* 		<option value="0"{{ store_id  == '0' ? ' selected="selected"' }}>{{ text_default_store }}</option>*/
/* 		{% for store in stores %} */
/* 		<option value="{{ store.store_id }}"{{ store_id == store.store_id ? ' selected="selected"' }}>{{ store.name }}</option>*/
/* 		{% endfor %} */
/* 	  </select>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/* 		  <ul class="nav nav-tabs">*/
/* 			<li class="active"><a href="#tab-general" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_general }}" class="fa fa-gear"></i> {{ tab_general }}</a></li>*/
/* 			<li><a href="#tab-design" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_design }}" class="fa fa-television"></i> {{ tab_design }}</a></li>*/
/* 			<li><a href="#tab-field" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_field }}" class="fa fa-bars"></i> {{ tab_field }}</a></li>*/
/* 			<li><a href="#tab-module" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_module }}" class="fa fa-puzzle-piece"></i> {{ tab_module }}</a></li>*/
/* 			<li><a href="#tab-payment" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_payment }}" class="fa fa-credit-card"></i> {{ tab_payment }}</a></li>*/
/* 			<li><a href="#tab-shipping" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_shipping }}" class="fa fa-ship"></i> {{ tab_shipping }}</a></li>*/
/* 			<li><a href="#tab-delivery" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_delivery }}" class="fa fa-truck"></i> {{ tab_delivery }}</a></li>*/
/* 			<li><a href="#tab-survey" data-toggle="tab"><i data-toggle="tooltip" title="{{ tab_survey }}" class="fa fa-edit"></i> {{ tab_survey }}</a></li>*/
/* 			{{ about }}*/
/* 		  </ul>*/
/* 		  <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/* 			  <div class="row">*/
/* 			    <div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-status"><span title="{{ help_status }}" data-toggle="tooltip">{{ entry_status }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_status" id="input-status" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_status ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_status ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-minimum-order"><span title="{{ help_minimum_order }}" data-toggle="tooltip">{{ entry_minimum_order }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<input type="text" name="quickcheckout_minimum_order" value="{{ quickcheckout_minimum_order }}" class="form-control" />*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-debug"><span title="{{ help_debug }}" data-toggle="tooltip">{{ entry_debug }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_debug" id="input-debug" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_debug ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_debug ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-confirmation-page"><span title="{{ help_confirmation_page }}" data-toggle="tooltip">{{ entry_confirmation_page }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_confirmation_page" id="input-confirmation-page" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_confirmation_page ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_confirmation_page ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-save-data"><span title="{{ help_save_data }}" data-toggle="tooltip">{{ entry_save_data }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_save_data" id="input-save-data" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_save_data ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_save_data ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-edit-cart"><span title="{{ help_edit_cart }}" data-toggle="tooltip">{{ entry_edit_cart }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_edit_cart" id="input-edit-cart" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_edit_cart ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_edit_cart ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-highlight-error"><span title="{{ help_highlight_error }}" data-toggle="tooltip">{{ entry_highlight_error }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_highlight_error" id="input-highlight-error" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_highlight_error ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_highlight_error ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-text-error"><span title="{{ help_text_error }}" data-toggle="tooltip">{{ entry_text_error }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_text_error" id="input-text-error" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_text_error ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_text_error ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-auto-submit"><span title="{{ help_auto_submit }}" data-toggle="tooltip">{{ entry_auto_submit }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_auto_submit" id="input-auto-submit" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_auto_submit ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_auto_submit ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-payment-target"><span title="{{ help_payment_target }}" data-toggle="tooltip">{{ entry_payment_target }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 				    <input type="text" name="quickcheckout_payment_target" id="input-payment-target" class="form-control" value="{{ quickcheckout_payment_target }}" />*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-skip-cart"><span title="{{ help_skip_cart }}" data-toggle="tooltip">{{ entry_skip_cart }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_skip_cart" id="input-skip-cart" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_skip_cart ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_skip_cart ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-force-bootstrap"><span title="{{ help_force_bootstrap }}" data-toggle="tooltip">{{ entry_force_bootstrap }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_force_bootstrap" id="input-force-bootstrap" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_force_bootstrap ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_force_bootstrap ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 			    <div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-proceed-button-text"><span title="{{ help_proceed_button_text }}" data-toggle="tooltip">{{ entry_proceed_button_text }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					{% for language in languages %} */
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<input type="text" name="quickcheckout_proceed_button_text[{{ language.language_id }}]" value="{{ quickcheckout_proceed_button_text[language.language_id] }}"  id="input-proceed-button-text" class="form-control" />*/
/* 					  </div>*/
/* 					{% endfor %} */
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-keyword"><span title="{{ help_keyword }}" data-toggle="tooltip">{{ entry_keyword }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					{% for language in languages %} */
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<input type="text" name="quickcheckout_keyword[{{ language.language_id }}]" value="{{ quickcheckout_keyword[language.language_id] }}" id="input-keyword" class="form-control" />*/
/* 					  </div>*/
/* 					{% endfor %} */
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-design">*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-layout"><span title="{{ help_layout }}" data-toggle="tooltip">{{ entry_layout }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_layout" id="input-layout" class="form-control" onchange="show_grid(this);">*/
/* 					  <option value="1"{{ quickcheckout_layout == '1' ? ' selected="selected"' : '' }}>{{ text_one_column }}</option>*/
/* 					  <option value="2"{{ quickcheckout_layout == '2' ? ' selected="selected"' : '' }}>{{ text_two_column }}</option>*/
/* 					  <option value="3"{{ quickcheckout_layout == '3' ? ' selected="selected"' : '' }}>{{ text_three_column }}</option>*/
/* 					  <option value="4"{{ quickcheckout_layout == '4' ? ' selected="selected"' : '' }}>{{ text_custom_column }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-responsive"><span title="{{ help_responsive }}" data-toggle="tooltip">{{ entry_responsive }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_responsive" id="input-responsive" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_responsive ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_responsive ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row" id="custom_grid" style="{{ quickcheckout_layout == '4' ? ' display:block;' : ' display:none;' }}">*/
/* 				<div class="col-sm-2">*/
/* 					<div class="alert alert-info" style="margin-top: 68px;">*/
/* 						{{ text_help_grid }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-10">              */
/*                     <div id="column_design">*/
/*                         <div class="column-width-group">*/
/*                             <input id="column_width_1" type="text" class="column-width" name="quickcheckout_column[1]" value="{{ quickcheckout_column[1] }}" /><input id="column_width_2" type="text" class="column-width" name="quickcheckout_column[2]" value="{{ quickcheckout_column[2] }}" /><input id="column_width_3" type="text" class="column-width" name="quickcheckout_column[3]" value="{{ quickcheckout_column[3] }}" />*/
/*                             <input id="column_width_4" type="hidden" class="column-width" name="quickcheckout_column[4]" value="{{ quickcheckout_column[4] }}" />*/
/*                         </div >*/
/*                         <input id="column_slider" type="text" class="span2" value="" data-slider-min="0" data-slider-max="12" data-slider-step="1" tooltip="hide" data-slider-value="[{{ quickcheckout_column[1] }},{{ (quickcheckout_column[1]|round(0, 'floor'))+(quickcheckout_column[2]|round(0, 'floor')) }}]"/>*/
/*                         <div id="column_groups">*/
/*                             <ul class="column column-group column-group-1 qc-col-1" id="column_1">*/
/*                                 {% for step, value in steps %}*/
/*                                 <li class="portlet qc-step" id="step_{{ step }}" data-col="{{ quickcheckout_step[step]["column"] }}" data-row="{{ quickcheckout_step[step]['row'] }}" data-id="{{ step }}">*/
/*                                     <div class="portlet-wrap">*/
/*                                         <div class="portlet-header"><span class="fa fa-{{ quickcheckout_step[step]['icon'] }} fa-fw"></span>{{ attribute(_context, 'text_'~step) }}</div>*/
/*                                         <div class="portlet-content">*/
/*                                             <div class="text">{{ attribute(_context, 'help_'~step) }}</div>*/
/*                                             <div class="text"><i class="fa fa-drag"></i></div>*/
/*                                             <input type="hidden" class="sort data-column" name="quickcheckout_step[{{ step }}][column]" value="{{ quickcheckout_step[step]['column'] }}" />*/
/*                                             <input type="hidden" class="sort data-row" name="quickcheckout_step[{{ step }}][row]" value="{{ quickcheckout_step[step]['row'] }}" />*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                	{% endfor %}*/
/*                             </ul>*/
/*                             <div class="column-group column-group-2">*/
/*                                 <ul class="column qc-col-2" id="column_2">*/
/*                                 </ul>*/
/*                                 <ul class="column qc-col-3" id="column_3">*/
/*                                 </ul>*/
/*                                 <ul class="column qc-col-4" id="column_4">*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                                              */
/* 				{% set column_1 = (quickcheckout_column['1']/12)*100 %}*/
/* 				{% set column_2 = (quickcheckout_column['2']/12)*100 %}*/
/* 				{% set column_3 = (quickcheckout_column['3']/12)*100 %}*/
/* 				{% set column_4 = (((quickcheckout_column['2']|round(0, 'floor')) + (quickcheckout_column['3']|round(0, 'floor')))/12)*100 %}*/
/* 				    */
/* 				<style>*/
/* 				    #column_width_1,*/
/* 				    #column_1{*/
/* 				        width: {{ column_1 }}%;*/
/* 				    }*/
/* 				    #column_width_2,*/
/* 				    #column_2{*/
/* 				        width: {{ column_2 }}%;*/
/* 				    }*/
/* 				    #column_width_3,*/
/* 				    #column_3{*/
/* 				        width: {{ column_3 }}%;*/
/* 				    }*/
/* 				    #column_4{*/
/* 				        width: {{ column_4 }}%*/
/* 				    }*/
/* 				</style>*/
/* */
/* 				<script type="text/javascript"><!--*/
/* 				    $('#column_slider').slider({*/
/* 				        'tooltip': 'hide'*/
/* 				    }).on('slide', function(ev){*/
/* 				        var val1 = Number(ev.value[0]);*/
/* 				        var pos1 = (val1 / 12) * 100;*/
/* 				        var val2 = Number(ev.value[1]);*/
/* 				        var pos2 = (val2 / 12) * 100;*/
/* 				        $("#column_1, #column_width_1").css({'width' : pos1+'%'})*/
/* 				        $("#column_width_1").val(val1)*/
/* 				        $("#column_2, #column_width_2").css({'width' : pos2-pos1 +'%'})*/
/* 				        $("#column_width_2").val(val2 - val1)*/
/* 				        $("#column_3, #column_width_3").css({'width' : Number(100-pos2) +'%'})*/
/* 				        $("#column_width_3").val(Number(12 - val2))*/
/* 				        $("#column_4").css({'width' : Number(100-pos1) +'%'})*/
/* 				        $("#column_width_4").val(Number(12 - val1))*/
/* 				    })*/
/* 				    var adjustment;*/
/* 				    var group = $("#column_groups ul.column").sortable({*/
/* 				        group: 'column',*/
/* 				        pullPlaceholder: false,*/
/* 				        // animation on drop*/
/* 				        onDrop: function  (item, targetContainer, _super) {*/
/* 				            var clonedItem = $('<li/>').css({height: 0})*/
/* 				            item.before(clonedItem)*/
/* 				            clonedItem.animate({'height': item.height()})*/
/* 				            item.animate(clonedItem.position(), function  () {*/
/* 				                clonedItem.detach()*/
/* 				                _super(item)*/
/* 				            })*/
/* */
/* 				            var data = group.sortable("serialize").get();*/
/* 				            var jsonString = JSON.stringify(data, null, ' ');*/
/* 				            $.each(data, function(column, column_value) {*/
/* 				                $.each(column_value, function(row, row_value) {*/
/* 				                    $('#step_' + row_value['id'] + ' .data-column').val(column + 1)*/
/* 				                    $('#step_' + row_value['id'] + ' .data-row').val(row)*/
/* 				                });*/
/* 				            });*/
/* 				        },*/
/* 				        onDragStart: function ($item, container, _super) {*/
/* 				            var offset = $item.offset(),*/
/* 				                    pointer = container.rootGroup.pointer*/
/* */
/* 				            adjustment = {*/
/* 				                left: pointer.left - offset.left,*/
/* 				                top: pointer.top - offset.top*/
/* 				            }*/
/* */
/* 				            _super($item, container)*/
/* 				        },*/
/* 				        onDrag: function ($item, position) {*/
/* 				            $item.css({*/
/* 				                left: position.left - adjustment.left,*/
/* 				                top: position.top - adjustment.top*/
/* 				            })*/
/* 				        }*/
/* 				    });*/
/* 				    function show_grid(e) {*/
/* 				    	if (e.value == 4) {*/
/* 				    		$('#custom_grid').slideDown();*/
/* 				    	} else {*/
/* 				    		$('#custom_grid').slideUp();*/
/* 				    	}*/
/* 				    }*/
/* 				    $(function () {*/
/* 				        $('.qc-step').each(function(){*/
/* 				            $(this).appendTo('.qc-col-' + $(this).attr('data-col'));*/
/* 				            })*/
/* 				        $('.qc-step').tsort({attr:'data-row'});        */
/* 				    });*/
/* 				</script>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-login-module"><span title="{{ help_login_module }}" data-toggle="tooltip">{{ entry_login_module }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_login_module" id="input-login-module" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_login_module ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_login_module ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-cart"><span title="{{ help_cart }}" data-toggle="tooltip">{{ entry_cart }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_cart" id="input-cart" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_cart ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_cart ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-show-shipping-address"><span title="{{ help_show_shipping_address }}" data-toggle="tooltip">{{ entry_show_shipping_address }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_show_shipping_address" id="input-show-shipping-address" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_show_shipping_address ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_show_shipping_address ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-slide-effect"><span title="{{ help_slide_effect }}" data-toggle="tooltip">{{ entry_slide_effect }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_slide_effect" id="input-slide-effect" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_slide_effect ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_slide_effect ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 			    <div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-load-screen"><span title="{{ help_load_screen }}" data-toggle="tooltip">{{ entry_load_screen }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_load_screen" id="input-load-screen" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_load_screen ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_load_screen ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-loading-display"><span title="{{ help_loading_display }}" data-toggle="tooltip">{{ entry_loading_display }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_loading_display" id="input-loading-display" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_loading_display ? ' selected="selected"' : '' }}>{{ text_spinner }}</option>*/
/* 					  <option value="0"{{ quickcheckout_loading_display ? '' : ' selected="selected"' }}>{{ text_overlay }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-custom-css">{{ entry_custom_css }}</label>*/
/* 				  <div class="col-sm-8">*/
/* 				    <textarea name="quickcheckout_custom_css" id="input-custom-css" class="form-control" rows="5">{{ quickcheckout_custom_css }}</textarea>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane table-responsive" id="tab-field">*/
/* 			  <table class="table table-bordered table-hover table-striped">*/
/* 				<tr>*/
/* 				  <td></td>*/
/* 				  <td class="text-center">{{ text_display }}</td>*/
/* 				  <td class="text-center">{{ text_required }}</td>*/
/* 				  <td>{{ text_default }}</td>*/
/* 				  <td>{{ text_placeholder }}</td>*/
/* 				  <td>{{ text_sort_order }}</td>*/
/* 				</tr>*/
/* 				{% for field in fields %} */
/* 				  {% if field == 'country' %} */
/* 				  <tr>*/
/* 					<td>{{ attribute(_context, 'entry_field_' ~ field) }}</td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[display]"{{ attribute(_context, 'quickcheckout_field_' ~ field).display ? ' checked' }} /></td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[required]"{{ attribute(_context, 'quickcheckout_field_' ~ field).required ? ' checked' }} /></td>*/
/* 					<td><select name="quickcheckout_field_{{ field }}[default]" class="form-control">*/
/* 						<option value="">{{ text_select }}</option>*/
/* 						{% for country in countries %} */
/* 						  {% if attribute(_context, 'quickcheckout_field_' ~ field).default and attribute(_context, 'quickcheckout_field_' ~ field).default == country.country_id %}*/
/* 						  <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* 						  {% else %}   */
/* 						  <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 						  {% endif %}*/
/* 						{% endfor %}*/
/* 					  </select></td>*/
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					<td><input type="text" name="quickcheckout_field_{{ field }}[sort_order]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).sort_order }}" class="form-control" /></td>*/
/* 				  </tr>*/
/* 				  {% elseif field  == 'zone' %} */
/* 				  <tr>*/
/* 					<td>{{ attribute(_context, 'entry_field_' ~ field) }}</td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[display]"{{ attribute(_context, 'quickcheckout_field_' ~ field).display ? ' checked' }} /></td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[required]"{{ attribute(_context, 'quickcheckout_field_' ~ field).required ? ' checked' }} /></td>*/
/* 					<td><select name="quickcheckout_field_{{ field }}[default]" class="form-control">*/
/* 						<option value="">{{ text_select }}</option>*/
/* 						{% for zone in zones %} */
/* 						  {% if attribute(_context, 'quickcheckout_field_' ~ field).default and attribute(_context, 'quickcheckout_field_' ~ field).default == zone.zone_id %}*/
/* 						  <option value="{{ zone.zone_id }}" selected="selected">{{ zone.name }}</option>*/
/* 						  {% else %}   */
/* 						  <option value="{{ zone.zone_id }}">{{ zone.name }}</option>*/
/* 						  {% endif %}*/
/* 						{% endfor %}*/
/* 					</select></td>*/
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					<td><input type="text" name="quickcheckout_field_{{ field }}[sort_order]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).sort_order }}" class="form-control" /></td>*/
/* 				  </tr>*/
/* 				  {% elseif field == 'customer_group' %}*/
/* 				  <tr>*/
/* 					<td>{{ attribute(_context, 'entry_field_' ~ field) }}</td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[display]"{{ attribute(_context, 'quickcheckout_field_' ~ field).display ? ' checked' }} /></td>*/
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					<td><input type="text" name="quickcheckout_field_{{ field }}[sort_order]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).sort_order }}" class="form-control" /></td>*/
/* 				  </tr>*/
/* 				   {% elseif  field == 'register' or field == 'newsletter' or field == 'shipping' or field == 'rules' %} */
/* 				  <tr>*/
/* 					<td>{{ attribute(_context, 'entry_field_' ~ field) }}</td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[display]"{{ attribute(_context, 'quickcheckout_field_' ~ field).display ? ' checked' }} /></td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[required]"{{ attribute(_context, 'quickcheckout_field_' ~ field).required ? ' checked' }} /></td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[default]"{{ attribute(_context, 'quickcheckout_field_' ~ field).default ? ' checked' }} /></td>*/
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					<td><input type="text" name="quickcheckout_field_{{ field }}[sort_order]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).sort_order }}" class="form-control" /></td>*/
/* 				  </tr>*/
/* 				  {% else %}   */
/* 				  <tr>*/
/* 					<td>{{ attribute(_context, 'entry_field_' ~ field) }}</td>*/
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[display]"{{ attribute(_context, 'quickcheckout_field_' ~ field).display ? ' checked' }} /></td>*/
/* 					{% if field == 'postcode' %} */
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					{% else %}   */
/* 					<td class="text-center"><input type="checkbox" name="quickcheckout_field_{{ field }}[required]"{{ attribute(_context, 'quickcheckout_field_' ~ field).required ? ' checked' }} /></td>*/
/* 					{% endif %}*/
/* 					<td>*/
/* 					  {% for language in languages %} */
/* 					  <div class="input-group">*/
/* 					    <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 					    <input type="text" name="quickcheckout_field_{{ field }}[default][{{ language.language_id }}]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).default[language.language_id] }}" class="form-control" />*/
/* 					  </div>*/
/* 					  {% endfor %}*/
/* 					</td>*/
/* 					<td>*/
/* 					  {% for language in languages %} */
/* 					  <div class="input-group">*/
/* 					    <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 					    <input type="text" name="quickcheckout_field_{{ field }}[placeholder][{{ language.language_id }}]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).placeholder[language.language_id] }}" class="form-control" />*/
/* 					  </div>*/
/* 					  {% endfor %}*/
/* 					</td>*/
/* 					{% if field == 'comment' %} */
/* 					<td class="text-center"><i class="fa fa-minus"></i></td>*/
/* 					{% else %}   */
/* 					<td><input type="text" name="quickcheckout_field_{{ field }}[sort_order]" value="{{ attribute(_context, 'quickcheckout_field_' ~ field).sort_order }}" class="form-control" /></td>*/
/* 				    {% endif %}*/
/* 				  </tr>*/
/* 				  {% endif %}*/
/* 				{% endfor %}*/
/* 			  </table>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-module">*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-coupon"><span title="{{ help_coupon }}" data-toggle="tooltip">{{ entry_coupon }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_coupon" id="input-coupon" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_coupon ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_coupon ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-voucher"><span title="{{ help_voucher }}" data-toggle="tooltip">{{ entry_voucher }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_voucher" id="input-voucher" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_voucher ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_voucher ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-reward"><span title="{{ help_reward }}" data-toggle="tooltip">{{ entry_reward }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_reward" id="input-reward" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_reward ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_reward ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-html-header"><span title="{{ help_html_header }}" data-toggle="tooltip">{{ entry_html_header }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					{% for language in languages %} */
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<textarea name="quickcheckout_html_header[{{ language.language_id }}]" rows="7" cols="30" class="form-control">{{ quickcheckout_html_header[language.language_id] }}</textarea>*/
/* 					  </div>*/
/* 					{% endfor %} */
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-html-footer"><span title="{{ help_html_footer }}" data-toggle="tooltip">{{ entry_html_footer }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					{% for language in languages %} */
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<textarea name="quickcheckout_html_footer[{{ language.language_id }}]" rows="7" cols="30" class="form-control">{{ quickcheckout_html_footer[language.language_id] }}</textarea>*/
/* 					  </div>*/
/* 					{% endfor %} */
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-payment">*/
/* 			  <div class="row">*/
/* 			    <div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-payment-module"><span title="{{ help_payment_module }}" data-toggle="tooltip">{{ entry_payment_module }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_payment_module" id="input-payment-module" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_payment_module ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_payment_module ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-payment-reload"><span title="{{ help_payment_reload }}" data-toggle="tooltip">{{ entry_payment_reload }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_payment_reload" id="input-payment-reload" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_payment_reload ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_payment_reload ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-payment"><span title="{{ help_payment }}" data-toggle="tooltip">{{ entry_payment }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_payment" id="input-payment" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_payment ? ' selected="selected"' : '' }}>{{ text_radio_type }}</option>*/
/* 					  <option value="0"{{ quickcheckout_payment ? '' : ' selected="selected"' }}>{{ text_select_type }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-payment-default"><span title="{{ help_payment_default }}" data-toggle="tooltip">{{ entry_payment_default }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_payment_default" id="input-payment-default" class="form-control">*/
/* 					  {% for payment_module in payment_modules %} */
/* 					  <option value="{{ payment_module.code }}"{{ quickcheckout_payment_default == payment_module.code ? ' selected="selected"' : '' }}>{{ payment_module.name }}</option>*/
/* 					  {% endfor %} */
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-shipping-reload"><span title="{{ help_shipping_reload }}" data-toggle="tooltip">{{ entry_shipping_reload }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_shipping_reload" id="input-shipping-reload" class="form-control" onchange="show_depends(this);">*/
/* 					  <option value="1"{{ quickcheckout_shipping_reload ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_shipping_reload ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div id="depends" style="{{ quickcheckout_shipping_reload == '1' ? ' display:block;' : ' display:none;' }}">*/
/* 			  	<h3 class="text-center">{{ text_depends_payment }}</h3>*/
/*                 <table id="shippings" class="table table-bordered table-striped table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left" colspan="2">{{ tab_shipping }}</td>*/
/*                       <td class="text-left" colspan="2">{{ tab_payment }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% set shipping_row = 0 %}*/
/*                   {% for mshipping in payment2shippings %}*/
/*                     <tr id="shipping-row{{ shipping_row }}">*/
/*                       <td class="text-left"><select value="" class="form-control" data-target="quickcheckout_payment2shipping_shippings[{{ shipping_row }}][shipping]">*/
/*                         <option value="">{{ text_choose }}</option>*/
/*                         {% for shipping in payment2shippings_shippings %}*/
/*                         {% if shipping.installed %}*/
/*                         <option value="{{shipping.extension}}" {% if shipping.extension == mshipping.shipping %}{{ 'selected' }}{% endif %}>{{shipping.name}}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                       <td class="text-left"><input type="text" name="quickcheckout_payment2shipping_shippings[{{ shipping_row }}][shipping]" value="{{ mshipping.shipping }}" placeholder="flat.flat" class="form-control" /></td>*/
/*                       <td class="text-left"><select value="" class="form-control" data-target="quickcheckout_payment2shipping_shippings[{{ shipping_row }}][payment]">*/
/*                         <option value="">{{ text_choose }}</option>*/
/*                         {% for payment in payment2shippings_payments %}*/
/*                         {% if payment.installed %}*/
/*                         <option value="{{payment.extension}}" {% if payment.extension == mshipping.payment %}{{ 'selected' }}{% endif %}>{{payment.name}}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                       <td class="text-left"><input type="text" name="quickcheckout_payment2shipping_shippings[{{ shipping_row }}][payment]" value="{{ mshipping.payment }}" placeholder="bank_transfer" class="form-control" /></td>*/
/*                       <td class="text-left"><button type="button" onclick="$('#shipping-row{{ shipping_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   {% set shipping_row = shipping_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="4"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addShipping();" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/* 			  <h3 class="text-center">{{ text_method_images }}</h3>*/
/* 			  <table class="table table-bordered table-striped table-hover">*/
/* 			    <tr>*/
/* 				  <th></th>*/
/* 				  <th><span title="{{ help_payment_logo }}" data-toggle="tooltip">{{ entry_payment_logo }} <i class="fa fa-question-circle"></i></span></th>*/
/* 				</tr>*/
/* 				{% for payment_module in payment_modules %}*/
/* 				<tr>*/
/* 				  <td>{{ payment_module.name }}</td>*/
/* 				  <td><input type="text" name="quickcheckout_payment_logo[{{ payment_module.code }}]" value="{{ quickcheckout_payment_logo[payment_module.code] }}" class="form-control" /></td>*/
/* 				</tr>*/
/* 				{% endfor %} */
/* 				<tr>*/
/* 				  <td colspan="2" class="text-center">{{ help_display_more }}</td>*/
/* 				</tr>*/
/* 			  </table>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-shipping">*/
/* 			  <div class="row">*/
/* 			    <div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-shipping-module"><span title="{{ help_shipping_module }}" data-toggle="tooltip">{{ entry_shipping_module }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_shipping_module" id="input-shipping-module" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_shipping_module ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_shipping_module ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-shipping-title-display">{{ entry_shipping_title_display }}</label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_shipping_title_display" id="input-shipping-title-display" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_shipping_title_display ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_shipping_title_display ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-shipping"><span title="{{ help_shipping }}" data-toggle="tooltip">{{ entry_shipping }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_shipping" id="input-shipping" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_shipping ? ' selected="selected"' : '' }}>{{ text_radio_type }}</option>*/
/* 					  <option value="0"{{ quickcheckout_shipping ? '' : ' selected="selected"' }}>{{ text_select_type }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-shipping-default"><span title="{{ help_shipping_default }}" data-toggle="tooltip">{{ entry_shipping_default }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_shipping_default" id="input-shipping-default" class="form-control">*/
/* 					  {% for shipping_module in shipping_modules %} */
/* 					  <option value="{{ shipping_module.code }}"{{ quickcheckout_shipping_default == shipping_module.code ? ' selected="selected"' : '' }}>{{ shipping_module.name }}</option>*/
/* 					  {% endfor %} */
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <h3 class="text-center">{{ text_method_images }}</h3>*/
/* 			  <table class="table table-bordered table-striped table-hover">*/
/* 			    <tr>*/
/* 				  <th></th>*/
/* 				  <th><span title="{{ help_shipping_logo }}" data-toggle="tooltip">{{ entry_shipping_logo }} <i class="fa fa-question-circle"></i></span></th>*/
/* 				</tr>*/
/* 				{% for shipping_module in shipping_modules %} */
/* 				<tr>*/
/* 				  <td>{{ shipping_module.name }}</td>*/
/* 				  <td><input type="text" name="quickcheckout_shipping_logo[{{ shipping_module.code }}]" value="{{ quickcheckout_shipping_logo[shipping_module.code] }}" class="form-control" /></td>*/
/* 				</tr>*/
/* 				{% endfor %} */
/* 				<tr>*/
/* 				  <td colspan="2" class="text-center">{{ help_display_more }}</td>*/
/* 				</tr>*/
/* 			  </table>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-survey">*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-survey">{{ entry_survey }}</label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_survey" id="input-survey" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_survey ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_survey ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-survey-required"><span title="{{ help_survey_required }}" data-toggle="tooltip">{{ entry_survey_required }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_survey_required" id="input-survey-required" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_survey_required ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_survey_required ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-survey-text"><span title="{{ help_survey_text }}" data-toggle="tooltip">{{ entry_survey_text }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					{% for language in languages %} */
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<input type="text" name="quickcheckout_survey_text[{{ language.language_id }}]" value="{{ quickcheckout_survey_text[language.language_id] }}" class="form-control" />*/
/* 					  </div>*/
/* 					{% endfor %} */
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-survey-type"><span title="{{ help_survey_type }}" data-toggle="tooltip">{{ entry_survey_type }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_survey_type" id="input-survey-type" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_survey_type ? ' selected="selected"' : '' }}>{{ text_select_type }}</option>*/
/* 					  <option value="0"{{ quickcheckout_survey_type ? '' : ' selected="selected"' }}>{{ text_text_type }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="table-responsive">*/
/* 				<table id="survey-answer" class="table table-hover table-bordered">*/
/* 				  <thead>*/
/* 				  <tr>*/
/* 					<td class="text-left" colspan="2">{{ entry_survey_answer }}</td>*/
/* 				  </tr>*/
/* 				  </thead>*/
/* 				  <tbody>*/
/* 				  {% set survey_answer_row = 0 %}*/
/* 				  {% for survey_answer in quickcheckout_survey_answers %} */
/* 				  <tr id="survey-answer-{{ survey_answer_row }}">*/
/* 					<td class="text-left">{% for language in languages %}*/
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<input type="text-text" name="quickcheckout_survey_answers[{{ survey_answer_row }}][{{ language.language_id }}]" value="{{ survey_answer[language.language_id] }}" class="form-control" />*/
/* 					  </div>*/
/* 					{% endfor %}</td>*/
/* 					<td class="text-right"><a class="btn btn-danger" onClick="$('#survey-answer-{{ survey_answer_row }}').remove();">{{ button_remove }}</a></td>*/
/* 					{% set survey_answer_row = survey_answer_row + 1 %} */
/* 				  </tr>*/
/* 				  {% endfor %} */
/* 				  </tbody>*/
/* 				  <tfoot>*/
/* 				  <tr>*/
/* 					<td class="text-right" colspan="2"><a class="btn btn-success" onClick="addAnswer();">{{ button_add }}</a></td>*/
/* 				  </tr>*/
/* 				  </tfoot>*/
/* 				</table>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-delivery">*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery"><span title="{{ help_delivery }}" data-toggle="tooltip">{{ entry_delivery }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_delivery" id="input-delivery" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_delivery ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_delivery ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-time"><span title="{{ help_delivery_time }}" data-toggle="tooltip">{{ entry_delivery_time }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_delivery_time" id="input-delivery-time" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_delivery_time == 1 ? ' selected="selected"' : '' }}>{{ text_choose }}</option>*/
/* 					  <option value="2"{{ quickcheckout_delivery_time == 2 ? ' selected="selected"' : '' }}>{{ text_estimate }}</option>*/
/* 					  <option value="3"{{ quickcheckout_delivery_time == 3 ? ' selected="selected"' : '' }}>{{ text_select_type }}</option>*/
/* 					  <option value="0"{{ quickcheckout_delivery_time == 0 ? ' selected="selected"' : '' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-required"><span title="{{ help_delivery_required }}" data-toggle="tooltip">{{ entry_delivery_required }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<select name="quickcheckout_delivery_required" id="input-delivery-required" class="form-control">*/
/* 					  <option value="1"{{ quickcheckout_delivery_required ? ' selected="selected"' : '' }}>{{ text_enabled }}</option>*/
/* 					  <option value="0"{{ quickcheckout_delivery_required ? '' : ' selected="selected"' }}>{{ text_disabled }}</option>*/
/* 					</select>*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-unavailable"><span title="{{ help_delivery_unavailable }}" data-toggle="tooltip">{{ entry_delivery_unavailable }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<textarea name="quickcheckout_delivery_unavailable" rows="5" class="form-control">{{ quickcheckout_delivery_unavailable }}</textarea>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-min"><span title="{{ help_delivery_min }}" data-toggle="tooltip">{{ entry_delivery_min }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<input type="text" name="quickcheckout_delivery_min" value="{{ quickcheckout_delivery_min }}" class="form-control" />*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-max"><span title="{{ help_delivery_max }}" data-toggle="tooltip">{{ entry_delivery_max }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<input type="text" name="quickcheckout_delivery_max" value="{{ quickcheckout_delivery_max }}" class="form-control" />*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-min-hour"><span title="{{ help_delivery_min_hour }}" data-toggle="tooltip">{{ entry_delivery_min_hour }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<input type="text" name="quickcheckout_delivery_min_hour" value="{{ quickcheckout_delivery_min_hour }}" class="form-control" />*/
/* 				  </div>*/
/* 				</div>*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-max-hour"><span title="{{ help_delivery_max_hour }}" data-toggle="tooltip">{{ entry_delivery_max_hour }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<input type="text" name="quickcheckout_delivery_max_hour" value="{{ quickcheckout_delivery_max_hour }}" class="form-control" />*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="row">*/
/* 				<div class="form-group col-sm-6">*/
/* 				  <label class="col-sm-4 control-label" for="input-delivery-days-of-week"><span title="{{ help_delivery_days_of_week }}" data-toggle="tooltip">{{ entry_delivery_days_of_week }}</span></label>*/
/* 				  <div class="col-sm-8">*/
/* 					<input type="text" name="quickcheckout_delivery_days_of_week" value="{{ quickcheckout_delivery_days_of_week }}" class="form-control" />*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="table-responsive">*/
/* 				<table id="delivery-time" class="table table-bordered table-hover">*/
/* 				  <thead>*/
/* 				  <tr>*/
/* 					<td class="text-left" colspan="2">{{ entry_delivery_times }}</td>*/
/* 				  </tr>*/
/* 				  </thead>*/
/* 				  <tbody>*/
/* 				  {% set delivery_time_row = 0 %}*/
/* 				  {% for delivery_time in quickcheckout_delivery_times %} */
/* 				  <tr id="delivery-time-{{ delivery_time_row }}">*/
/* 				    <td class="text-left">{% for language in languages %} */
/* 					  <div class="input-group">*/
/* 						<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<input type="text" name="quickcheckout_delivery_times[{{ delivery_time_row }}][{{ language.language_id }}]" value="{{ delivery_time[language.language_id] }}" class="form-control" />*/
/* 					  </div>*/
/* 					{% endfor %}</td>*/
/* 					<td class="text-right"><a class="btn btn-danger" onClick="$('#delivery-time-{{ delivery_time_row }}').remove();">{{ button_remove }}</a></td>*/
/* 					{% set delivery_time_row = delivery_time_row + 1 %} */
/* 				  </tr>*/
/* 				  {% endfor %} */
/* 				  </tbody>*/
/* 				  <tfoot>*/
/* 				  <tr>*/
/* 				    <td class="text-right" colspan="2"><a class="btn btn-success" onClick="addTime();">{{ button_add }}</a></td>*/
/* 				  </tr>*/
/* 				  </tfoot>*/
/* 				</table>*/
/* 			  </div>*/
/* 			</div>*/
/* 			{{ tab }}*/
/* 		  </div>*/
/* 		</form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div style="background:#aaccdf;padding:15px;text-align:center;"><strong style="color:#233746;font-size:15px;">Другие модули для Opencart 3.x на нашем сайте <a href="https://opencart3x.ru" target="_blank">opencart3x.ru</a></strong></div>*/
/* </div>*/
/* */
/* <style type="text/css">*/
/* .form-group + .form-group {*/
/* 	border: none;*/
/* }*/
/* </style>*/
/* <script type="text/javascript"><!--*/
/* function show(element) {*/
/* 	$(element).tab('show');*/
/* 	*/
/* 	$('a[href=\'' + element + '\']').parent('li').siblings().removeClass('active');*/
/* 	*/
/* 	$('a[href=\'' + element + '\']').parent('li').addClass('active');*/
/* 	*/
/* 	return false;*/
/* }*/
/* */
/* $(document).ready(function() {*/
/* 	$('.date').datetimepicker();*/
/* });*/
/* */
/* $('select[name=\'quickcheckout_field_country[default]\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/module/quickcheckout/country&country_id=' + this.value + '&user_token={{ user_token }}',*/
/* 		dataType: 'json',		*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* 			*/
/* 			if (json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*         			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* 	    			*/
/* 					if (json['zone'][i]['zone_id'] == '{{ quickcheckout_field_zone.default }}') {*/
/* 	      				html += ' selected="selected"';*/
/* 	    			}*/
/* 	*/
/* 	    			html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* 			*/
/* 			$('select[name=\'quickcheckout_field_zone[default]\']').html(html);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'quickcheckout_field_country[default]\']').trigger('change');*/
/* */
/* $('select[name=\'quickcheckout_survey_type\']').change(function() {*/
/* 	if ($('select[name=\'quickcheckout_survey_type\']').val() == '1') {*/
/* 		$('#survey-answer').fadeIn();*/
/* 	} else {*/
/* 		$('#survey-answer').fadeOut();*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'quickcheckout_survey_type\']').trigger('change');*/
/* */
/* var survey_answer_row = {{ survey_answer_row }} ;*/
/* */
/* function addAnswer() {*/
/* 	html  = '<tr id="survey-answer-' + survey_answer_row + '">';*/
/* 	html += '  <td class="left">';*/
/* 	{% for language in languages %} */
/* 	html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>';*/
/* 	html += '<input type="text-text" name="quickcheckout_survey_answers[' + survey_answer_row + '][{{ language.language_id }}]" value="" class="form-control" />';*/
/* 	html += '</div>';*/
/* 	{% endfor %} */
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-right"><a class="btn btn-danger" onClick="$(\'#survey-answer-' + survey_answer_row + '\').remove();">{{ button_remove }}</a></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#survey-answer tbody').append(html);*/
/* 	*/
/* 	survey_answer_row++;*/
/* }*/
/* */
/* $('select[name=\'quickcheckout_delivery_time\']').change(function() {*/
/* 	if ($('select[name=\'quickcheckout_delivery_time\']').val() == '3') {*/
/* 		$('#delivery-time').fadeIn();*/
/* 	} else {*/
/* 		$('#delivery-time').fadeOut();*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'quickcheckout_delivery_time\']').trigger('change');*/
/* */
/* var delivery_time_row = {{ delivery_time_row }} ;*/
/* */
/* function addTime() {*/
/* 	html  = '<tr id="delivery-time-' + delivery_time_row + '">';*/
/* 	html += '  <td class="left">';*/
/* 	{% for language in languages %} */
/* 	html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>';*/
/* 	html += '<input type="text" name="quickcheckout_delivery_times[' + delivery_time_row + '][{{ language.language_id }}]" value="" class="form-control" />';*/
/* 	html += '</div>';*/
/* 	{% endfor %} */
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-right"><a class="btn btn-danger" onClick="$(\'#delivery-time-' + delivery_time_row + '\').remove();">{{ button_remove }}</a></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#delivery-time tbody').append(html);*/
/* 	*/
/* 	delivery_time_row++;*/
/* }*/
/* */
/* function store() {*/
/* 	location = 'index.php?route=extension/module/quickcheckout&store_id=' + $('select[name=\'store_id\']').val();*/
/* }*/
/* */
/* function show_depends(e) {*/
/* 	if (e.value == 1) {*/
/* 		$('#depends').slideDown();*/
/* 	} else {*/
/* 		$('#depends').slideUp();*/
/* 	}*/
/* }*/
/* //--></script>*/
/* */
/* <script type="text/javascript">*/
/* var shipping_row = {{ shipping_row }};*/
/* function addShipping() {*/
/*     html_shippings = '<option value="">{{ text_choose }}</option>';*/
/*     {% for shipping in payment2shippings_shippings %}*/
/*     {% if shipping.installed %}*/
/*     html_shippings += '<option value="{{shipping.extension}}">{{shipping.name}}</option>';*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     */
/*     html_payments = '<option value="">{{ text_choose }}</option>';*/
/*     {% for payment in payment2shippings_payments %}*/
/*     {% if payment.installed %}*/
/*     html_payments += '<option value="{{payment.extension}}">{{payment.name}}</option>';*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     */
/*     html  = '<tr id="shipping-row' + shipping_row + '">';*/
/*     html += '  <td class="text-left"><select value="" class="form-control" data-target="quickcheckout_payment2shipping_shippings[' + shipping_row + '][shipping]">' + html_shippings + '</select></td>';*/
/*     html += '  <td class="text-left"><input type="text" name="quickcheckout_payment2shipping_shippings[' + shipping_row + '][shipping]" value="" placeholder="flat.flat" class="form-control" /></td>';*/
/*     html += '  <td class="text-left"><select value="" class="form-control" data-target="quickcheckout_payment2shipping_shippings[' + shipping_row + '][payment]">' + html_payments + '</select></td>';*/
/*     html += '  <td class="text-left"><input type="text" name="quickcheckout_payment2shipping_shippings[' + shipping_row + '][payment]" value="" placeholder="bank_transfer" class="form-control" /></td>';*/
/*     html += '  <td class="text-left"><button type="button" onclick="$(\'#shipping-row' + shipping_row  + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*     html += '</tr>';*/
/* */
/*     $('#shippings tbody').append(html);*/
/* */
/*     shipping_row++;*/
/* }*/
/* */
/* $(document).on("change", "select[data-target]", function() {*/
/*     $('input[name="' + $(this).attr('data-target') + '"]').val($(this).val());*/
/* });*/
/* </script> */
/* {{ footer }}*/
