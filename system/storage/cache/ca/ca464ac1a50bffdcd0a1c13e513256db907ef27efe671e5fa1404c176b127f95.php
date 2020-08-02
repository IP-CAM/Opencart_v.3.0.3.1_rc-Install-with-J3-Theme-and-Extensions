<?php

/* extension/payment/yandex_money/metrika.twig */
class __TwigTemplate_4ab4aed2171aaeabba0b5645265b0b87998b4e1e5f436b6506d782f859295518 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metrika_status"]) ? $context["metrika_status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 2
            echo $context["me"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div>
            <p>";
        // line 7
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_header_description"), "method");
        echo "</p>
            <p>";
        // line 8
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_version_string"), "method");
        echo " ";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "</p>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 11
        echo (isset($context["active"]) ? $context["active"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <label class=\"radio-inline\">
                    <input type=\"radio\" ";
        // line 14
        echo (((isset($context["yandex_money_metrika_active"]) ? $context["yandex_money_metrika_active"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_metrika_active\" value=\"1\"/> ";
        echo (isset($context["active_on"]) ? $context["active_on"] : null);
        echo "</label>
                <label class=\"radio-inline\">
                    <input type=\"radio\" ";
        // line 16
        echo (( !(isset($context["yandex_money_metrika_active"]) ? $context["yandex_money_metrika_active"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_metrika_active\" value=\"0\"/> ";
        echo (isset($context["active_off"]) ? $context["active_off"] : null);
        echo "</label>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_metrika_number\">";
        // line 20
        echo (isset($context["metrika_number"]) ? $context["metrika_number"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_metrika_number\" value=\"";
        // line 22
        echo (isset($context["yandex_money_metrika_number"]) ? $context["yandex_money_metrika_number"] : null);
        echo "\" id=\"yandex_money_metrika_number\" class=\"form-control\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_metrika_idapp\">";
        // line 26
        echo (isset($context["metrika_idapp"]) ? $context["metrika_idapp"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_metrika_idapp\" value=\"";
        // line 28
        echo (isset($context["yandex_money_metrika_idapp"]) ? $context["yandex_money_metrika_idapp"] : null);
        echo "\" id=\"yandex_money_metrika_idapp\" class=\"form-control\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_metrika_pw\">";
        // line 32
        echo (isset($context["metrika_pw"]) ? $context["metrika_pw"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_metrika_pw\" value=\"";
        // line 34
        echo (isset($context["yandex_money_metrika_pw"]) ? $context["yandex_money_metrika_pw"] : null);
        echo "\" id=\"yandex_money_metrika_pw\" class=\"form-control\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-sm-4\">";
        // line 38
        echo (isset($context["metrika_set"]) ? $context["metrika_set"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <div class=\"checkbox\">
                    <label for=\"yandex_money_metrika_webvizor\"><input type=\"checkbox\" ";
        // line 41
        echo (((isset($context["yandex_money_metrika_webvizor"]) ? $context["yandex_money_metrika_webvizor"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_metrika_webvizor\" id=\"yandex_money_metrika_webvizor\" class=\"\" value=\"1\"/> ";
        echo (isset($context["metrika_set_1"]) ? $context["metrika_set_1"] : null);
        echo "</label>
                </div>
                <div class=\"checkbox\">
                    <label for=\"yandex_money_metrika_clickmap\"><input type=\"checkbox\" ";
        // line 44
        echo (((isset($context["yandex_money_metrika_clickmap"]) ? $context["yandex_money_metrika_clickmap"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_metrika_clickmap\" id=\"yandex_money_metrika_clickmap\" class=\"\" value=\"1\"/> ";
        echo (isset($context["metrika_set_2"]) ? $context["metrika_set_2"] : null);
        echo "</label>
                </div>
                <div class=\"checkbox\">
                    <label for=\"yandex_money_metrika_hash\"><input type=\"checkbox\" ";
        // line 47
        echo (((isset($context["yandex_money_metrika_hash"]) ? $context["yandex_money_metrika_hash"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_metrika_hash\" id=\"yandex_money_metrika_hash\" class=\"\" value=\"1\"/> ";
        echo (isset($context["metrika_set_5"]) ? $context["metrika_set_5"] : null);
        echo "</label>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_metrika_callback\">";
        // line 52
        echo (isset($context["metrika_callback"]) ? $context["metrika_callback"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_metrika_callback\" disabled=\"disabled\" value=\"";
        // line 54
        echo (isset($context["yandex_money_metrika_callback"]) ? $context["yandex_money_metrika_callback"] : null);
        echo "\" id=\"yandex_money_metrika_callback\" class=\"form-control\"/>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money/metrika.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  138 => 52,  128 => 47,  120 => 44,  112 => 41,  106 => 38,  99 => 34,  94 => 32,  87 => 28,  82 => 26,  75 => 22,  70 => 20,  61 => 16,  54 => 14,  48 => 11,  40 => 8,  36 => 7,  31 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for me in metrika_status %}*/
/* {{ me }}*/
/* {% endfor %}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*         <div>*/
/*             <p>{{ language.get('kassa_header_description') }}</p>*/
/*             <p>{{ language.get('kassa_version_string') }} {{ module_version }}</p>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ active }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <label class="radio-inline">*/
/*                     <input type="radio" {{ (yandex_money_metrika_active ? ' checked="checked"' : '') }} name="yandex_money_metrika_active" value="1"/> {{ active_on }}</label>*/
/*                 <label class="radio-inline">*/
/*                     <input type="radio" {{ (not yandex_money_metrika_active ? ' checked="checked"' : '') }} name="yandex_money_metrika_active" value="0"/> {{ active_off }}</label>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_metrika_number">{{ metrika_number }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_metrika_number" value="{{ yandex_money_metrika_number }}" id="yandex_money_metrika_number" class="form-control"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_metrika_idapp">{{ metrika_idapp }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_metrika_idapp" value="{{ yandex_money_metrika_idapp }}" id="yandex_money_metrika_idapp" class="form-control"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_metrika_pw">{{ metrika_pw }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_metrika_pw" value="{{ yandex_money_metrika_pw }}" id="yandex_money_metrika_pw" class="form-control"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-sm-4">{{ metrika_set }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <div class="checkbox">*/
/*                     <label for="yandex_money_metrika_webvizor"><input type="checkbox" {{ (yandex_money_metrika_webvizor ? ' checked="checked"' : '') }} name="yandex_money_metrika_webvizor" id="yandex_money_metrika_webvizor" class="" value="1"/> {{ metrika_set_1 }}</label>*/
/*                 </div>*/
/*                 <div class="checkbox">*/
/*                     <label for="yandex_money_metrika_clickmap"><input type="checkbox" {{ (yandex_money_metrika_clickmap ? ' checked="checked"' : '') }} name="yandex_money_metrika_clickmap" id="yandex_money_metrika_clickmap" class="" value="1"/> {{ metrika_set_2 }}</label>*/
/*                 </div>*/
/*                 <div class="checkbox">*/
/*                     <label for="yandex_money_metrika_hash"><input type="checkbox" {{ (yandex_money_metrika_hash ? ' checked="checked"' : '') }} name="yandex_money_metrika_hash" id="yandex_money_metrika_hash" class="" value="1"/> {{ metrika_set_5 }}</label>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_metrika_callback">{{ metrika_callback }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_metrika_callback" disabled="disabled" value="{{ yandex_money_metrika_callback }}" id="yandex_money_metrika_callback" class="form-control"/>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
