<?php

/* extension/payment/yandex_money/updater.twig */
class __TwigTemplate_e4ba91c5f8d2851c4846dc141f9143dd91b0de12d585a0f3181d48212ff498b1 extends Twig_Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane\" id=\"updater\">
    <div class='row'>
        <div class='col-md-12'>
            ";
        // line 4
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_header_text"), "method");
        echo "
        </div>
    </div>
    <br>
    <div class='row'>
        <div class='col-md-12'>
            <h4>";
        // line 10
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_about_title"), "method");
        echo ":</h4>
            <ul>
                <li>";
        // line 12
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_current_version"), "method");
        echo ": ";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "</li>
                <li>";
        // line 13
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_last_version"), "method");
        echo ": ";
        echo (isset($context["new_version"]) ? $context["new_version"] : null);
        echo "</li>
                <li>
                    ";
        // line 15
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_last_check_date"), "method");
        echo ": ";
        echo $this->getAttribute((isset($context["new_version_info"]) ? $context["new_version_info"] : null), "date", array(), "array");
        echo "
                    ";
        // line 16
        if ((isset($context["access_check_updates"]) ? $context["access_check_updates"] : null)) {
            // line 17
            echo "                        <button type=\"button\" class=\"btn btn-success btn-xs\" id=\"force-check\">
                            ";
            // line 18
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_check_updates"), "method");
            echo "
                        </button>
                    ";
        }
        // line 21
        echo "                </li>
            </ul>
            <br>
            ";
        // line 24
        if ((isset($context["new_version_available"]) ? $context["new_version_available"] : null)) {
            // line 25
            echo "
                <h4>";
            // line 26
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_history_title"), "method");
            echo "</h4>
                <p>";
            // line 27
            echo (isset($context["changelog"]) ? $context["changelog"] : null);
            echo "</p>

                <form method=\"post\" id=\"update-form\" action=\"";
            // line 29
            echo (isset($context["update_action"]) ? $context["update_action"] : null);
            echo "&type=update\">
                    <input name=\"update\" value=\"1\" type=\"hidden\"/>
                    <input name=\"version\" value=\"";
            // line 31
            echo (isset($context["new_version"]) ? $context["new_version"] : null);
            echo "\" type=\"hidden\"/>
                </form>

                <button type=\"button\" id=\"update-module\" class=\"btn btn-primary\">
                    ";
            // line 35
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_update"), "method");
            echo "
                </button>

                <form method=\"post\" id=\"update-form\" action=\"";
            // line 38
            echo (isset($context["update_action"]) ? $context["update_action"] : null);
            echo "&type=update\">
                    <input name=\"update\" value=\"1\" type=\"hidden\"/>
                    <input name=\"version\" value=\"";
            // line 40
            echo (isset($context["new_version"]) ? $context["new_version"] : null);
            echo "\" type=\"hidden\"/>
                </form>

            ";
        } else {
            // line 44
            echo "                <p>";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_last_version_installed"), "method");
            echo "</p>
            ";
        }
        // line 46
        echo "
            <form method=\"post\" id=\"check-version\" action=\"";
        // line 47
        echo (isset($context["update_action"]) ? $context["update_action"] : null);
        echo "&type=check\">
                <input name=\"force\" value=\"1\" type=\"hidden\"/>
            </form>

        </div>
    </div>
    <br>
    ";
        // line 54
        if ((isset($context["backups"]) ? $context["backups"] : null)) {
            // line 55
            echo "        <div class=\"row\">
            <h4>";
            // line 56
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_backups_title"), "method");
            echo "</h4>
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th>";
            // line 60
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_module_version"), "method");
            echo "</th>
                    <th>";
            // line 61
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_date_create"), "method");
            echo "</th>
                    <th>";
            // line 62
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_file_name"), "method");
            echo "</th>
                    <th>";
            // line 63
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_file_size"), "method");
            echo "</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["backups"]) ? $context["backups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["backup"]) {
                // line 69
                echo "                    <tr>
                        <td>";
                // line 70
                echo $this->getAttribute($context["backup"], "version", array(), "array");
                echo "</td>
                        <td>";
                // line 71
                echo $this->getAttribute($context["backup"], "date", array(), "array");
                echo "</td>
                        <td>";
                // line 72
                echo $this->getAttribute($context["backup"], "name", array(), "array");
                echo "</td>
                        <td>";
                // line 73
                echo $this->getAttribute($context["backup"], "size", array(), "array");
                echo "</td>
                        <td class=\"text-right\">
                            <button type=\"button\" class=\"btn btn-success btn-xs restore-backup\"
                                    data-id=\"";
                // line 76
                echo $this->getAttribute($context["backup"], "name", array(), "array");
                echo "\"
                                    data-version=\"";
                // line 77
                echo $this->getAttribute($context["backup"], "version", array(), "array");
                echo "\"
                                    data-date=\"";
                // line 78
                echo $this->getAttribute($context["backup"], "date", array(), "array");
                echo " \">";
                echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_restore"), "method");
                echo "
                            </button>
                            <button type=\"button\" class=\"btn btn-danger btn-xs remove-backup\"
                                    data-id=\"";
                // line 81
                echo $this->getAttribute($context["backup"], "name", array(), "array");
                echo "\"
                                    data-version=\"";
                // line 82
                echo $this->getAttribute($context["backup"], "version", array(), "array");
                echo "\"
                                    data-date=\"";
                // line 83
                echo $this->getAttribute($context["backup"], "date", array(), "array");
                echo "\">";
                echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "Удалить"), "method");
                echo "
                            </button>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                </tbody>
            </table>

            <form id=\"action-form\" method=\"post\" action=\"";
            // line 91
            echo (isset($context["backup_action"]) ? $context["backup_action"] : null);
            echo "\">
                <input type=\"hidden\" name=\"action\" id=\"action-form-action\" value=\"none\"/>
                <input type=\"hidden\" name=\"file_name\" id=\"action-form-file-name\" value=\"\"/>
                <input type=\"hidden\" name=\"version\" id=\"action-form-version\" value=\"\"/>
            </form>

        </div>
    ";
        }
        // line 99
        echo "
</div>

<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        jQuery('button.restore-backup').click(function () {
            var message = '";
        // line 105
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_restore_message"), "method");
        echo "' + this.dataset.version
                + ' от ' + this.dataset.date + '?';
            if (confirm(message)) {
                jQuery('#action-form-action').val('restore');
                jQuery('#action-form-file-name').val(this.dataset.id);
                jQuery('#action-form-version').val(this.dataset.version);
                jQuery('#action-form').submit();
            }
        });
        jQuery('button.remove-backup').click(function () {
            var message = '";
        // line 115
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_delete_message"), "method");
        echo "' + this.dataset.version
                + ' от ' + this.dataset.date + '?';
            if (confirm(message)) {
                jQuery('#action-form-action').val('remove');
                jQuery('#action-form-file-name').val(this.dataset.id);
                jQuery('#action-form-version').val(this.dataset.version);
                jQuery('#action-form').submit();
            }
        });
        jQuery('#force-check').click(function () {
            jQuery('#check-version')[0].submit();
        });
        ";
        // line 127
        if ((isset($context["new_version_available"]) ? $context["new_version_available"] : null)) {
            // line 128
            echo "        jQuery('#update-module').click(function () {
            jQuery('#update-form')[0].submit();
        });
        ";
        }
        // line 132
        echo "    });
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money/updater.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 132,  284 => 128,  282 => 127,  267 => 115,  254 => 105,  246 => 99,  235 => 91,  230 => 88,  217 => 83,  213 => 82,  209 => 81,  201 => 78,  197 => 77,  193 => 76,  187 => 73,  183 => 72,  179 => 71,  175 => 70,  172 => 69,  168 => 68,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  141 => 56,  138 => 55,  136 => 54,  126 => 47,  123 => 46,  117 => 44,  110 => 40,  105 => 38,  99 => 35,  92 => 31,  87 => 29,  82 => 27,  78 => 26,  75 => 25,  73 => 24,  68 => 21,  62 => 18,  59 => 17,  57 => 16,  51 => 15,  44 => 13,  38 => 12,  33 => 10,  24 => 4,  19 => 1,);
    }
}
/* <div role="tabpanel" class="tab-pane" id="updater">*/
/*     <div class='row'>*/
/*         <div class='col-md-12'>*/
/*             {{ language.get('updater_header_text') }}*/
/*         </div>*/
/*     </div>*/
/*     <br>*/
/*     <div class='row'>*/
/*         <div class='col-md-12'>*/
/*             <h4>{{ language.get('updater_about_title') }}:</h4>*/
/*             <ul>*/
/*                 <li>{{ language.get('updater_current_version') }}: {{ module_version }}</li>*/
/*                 <li>{{ language.get('updater_last_version') }}: {{ new_version }}</li>*/
/*                 <li>*/
/*                     {{ language.get('updater_last_check_date') }}: {{ new_version_info['date'] }}*/
/*                     {% if access_check_updates %}*/
/*                         <button type="button" class="btn btn-success btn-xs" id="force-check">*/
/*                             {{ language.get('updater_check_updates') }}*/
/*                         </button>*/
/*                     {% endif %}*/
/*                 </li>*/
/*             </ul>*/
/*             <br>*/
/*             {% if new_version_available %}*/
/* */
/*                 <h4>{{ language.get('updater_history_title') }}</h4>*/
/*                 <p>{{ changelog }}</p>*/
/* */
/*                 <form method="post" id="update-form" action="{{ update_action }}&type=update">*/
/*                     <input name="update" value="1" type="hidden"/>*/
/*                     <input name="version" value="{{ new_version }}" type="hidden"/>*/
/*                 </form>*/
/* */
/*                 <button type="button" id="update-module" class="btn btn-primary">*/
/*                     {{ language.get('updater_update') }}*/
/*                 </button>*/
/* */
/*                 <form method="post" id="update-form" action="{{ update_action }}&type=update">*/
/*                     <input name="update" value="1" type="hidden"/>*/
/*                     <input name="version" value="{{ new_version }}" type="hidden"/>*/
/*                 </form>*/
/* */
/*             {% else %}*/
/*                 <p>{{ language.get('updater_last_version_installed') }}</p>*/
/*             {% endif %}*/
/* */
/*             <form method="post" id="check-version" action="{{ update_action }}&type=check">*/
/*                 <input name="force" value="1" type="hidden"/>*/
/*             </form>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <br>*/
/*     {% if backups %}*/
/*         <div class="row">*/
/*             <h4>{{ language.get('updater_backups_title') }}</h4>*/
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>{{ language.get('updater_module_version') }}</th>*/
/*                     <th>{{ language.get('updater_date_create') }}</th>*/
/*                     <th>{{ language.get('updater_file_name') }}</th>*/
/*                     <th>{{ language.get('updater_file_size') }}</th>*/
/*                     <th>&nbsp;</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for backup in backups %}*/
/*                     <tr>*/
/*                         <td>{{ backup['version'] }}</td>*/
/*                         <td>{{ backup['date'] }}</td>*/
/*                         <td>{{ backup['name'] }}</td>*/
/*                         <td>{{ backup['size'] }}</td>*/
/*                         <td class="text-right">*/
/*                             <button type="button" class="btn btn-success btn-xs restore-backup"*/
/*                                     data-id="{{ backup['name'] }}"*/
/*                                     data-version="{{ backup['version'] }}"*/
/*                                     data-date="{{ backup['date'] }} ">{{ language.get('updater_restore') }}*/
/*                             </button>*/
/*                             <button type="button" class="btn btn-danger btn-xs remove-backup"*/
/*                                     data-id="{{ backup['name'] }}"*/
/*                                     data-version="{{ backup['version'] }}"*/
/*                                     data-date="{{ backup['date'] }}">{{ language.get('Удалить') }}*/
/*                             </button>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*             <form id="action-form" method="post" action="{{ backup_action }}">*/
/*                 <input type="hidden" name="action" id="action-form-action" value="none"/>*/
/*                 <input type="hidden" name="file_name" id="action-form-file-name" value=""/>*/
/*                 <input type="hidden" name="version" id="action-form-version" value=""/>*/
/*             </form>*/
/* */
/*         </div>*/
/*     {% endif %}*/
/* */
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function () {*/
/*         jQuery('button.restore-backup').click(function () {*/
/*             var message = '{{ language.get("updater_restore_message") }}' + this.dataset.version*/
/*                 + ' от ' + this.dataset.date + '?';*/
/*             if (confirm(message)) {*/
/*                 jQuery('#action-form-action').val('restore');*/
/*                 jQuery('#action-form-file-name').val(this.dataset.id);*/
/*                 jQuery('#action-form-version').val(this.dataset.version);*/
/*                 jQuery('#action-form').submit();*/
/*             }*/
/*         });*/
/*         jQuery('button.remove-backup').click(function () {*/
/*             var message = '{{ language.get("updater_delete_message") }}' + this.dataset.version*/
/*                 + ' от ' + this.dataset.date + '?';*/
/*             if (confirm(message)) {*/
/*                 jQuery('#action-form-action').val('remove');*/
/*                 jQuery('#action-form-file-name').val(this.dataset.id);*/
/*                 jQuery('#action-form-version').val(this.dataset.version);*/
/*                 jQuery('#action-form').submit();*/
/*             }*/
/*         });*/
/*         jQuery('#force-check').click(function () {*/
/*             jQuery('#check-version')[0].submit();*/
/*         });*/
/*         {% if new_version_available %}*/
/*         jQuery('#update-module').click(function () {*/
/*             jQuery('#update-form')[0].submit();*/
/*         });*/
/*         {% endif %}*/
/*     });*/
/* </script>*/
/* */
