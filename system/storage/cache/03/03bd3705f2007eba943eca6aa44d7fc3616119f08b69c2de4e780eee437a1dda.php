<?php

/* extension/module/sainent_extensions.twig */
class __TwigTemplate_6e359c2a4be610537bc4a4a64a9ce5b95bd378a5a3b5125e0b900a0efbaadd21 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
\t\t<div class=\"pull-right\">
\t\t\t<button type=\"button\" id=\"button-setting\" title=\"Clear Cache\" data-loading-text=\"Loading...\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear Cache</button>
\t\t</div>
\t\t<h1>";
        // line 8
        echo (isset($context["text_title"]) ? $context["text_title"] : null);
        echo "</h1>
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t  
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\"></div>
      <div class=\"panel-body\" style=\"padding:0px;\">
\t\t<h1 class=\"text-center\">";
        // line 21
        echo (isset($context["text_title"]) ? $context["text_title"] : null);
        echo "</h1>
\t\t<h4 class=\"text-center\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&filter_member=sainent\" target=\"_blank\">Checkout More Extensions for Opencart</a></h4>
\t\t<div class=\"extension-list\">
\t\t\t<iframe src=\"https://www.opencart.com/index.php?route=marketplace/extension&filter_member=sainent#input-sort\" style=\"width:100%;height:800px;border:none;border-top:1px solid #eee;\"></iframe>
\t\t</div>
\t  </div>
\t  <div class=\"panel-footer\"></div>
    </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer&user_token=";
        // line 34
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-setting').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-setting').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#modal-developer').remove();
\t\t\t
\t\t\t\$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-developer').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
});\t
//--></script> 
";
        // line 55
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/sainent_extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 55,  76 => 34,  60 => 21,  50 => 13,  39 => 11,  35 => 10,  30 => 8,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/* 		<div class="pull-right">*/
/* 			<button type="button" id="button-setting" title="Clear Cache" data-loading-text="Loading..." class="btn btn-danger"><i class="fa fa-eraser"></i> Clear Cache</button>*/
/* 		</div>*/
/* 		<h1>{{ text_title }}</h1>*/
/* 		<ul class="breadcrumb">*/
/* 			{% for breadcrumb in breadcrumbs %}*/
/* 			<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	  */
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading"></div>*/
/*       <div class="panel-body" style="padding:0px;">*/
/* 		<h1 class="text-center">{{ text_title }}</h1>*/
/* 		<h4 class="text-center"><a href="https://www.opencart.com/index.php?route=marketplace/extension&filter_member=sainent" target="_blank">Checkout More Extensions for Opencart</a></h4>*/
/* 		<div class="extension-list">*/
/* 			<iframe src="https://www.opencart.com/index.php?route=marketplace/extension&filter_member=sainent#input-sort" style="width:100%;height:800px;border:none;border-top:1px solid #eee;"></iframe>*/
/* 		</div>*/
/* 	  </div>*/
/* 	  <div class="panel-footer"></div>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-setting').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=common/developer&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('#button-setting').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-setting').button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#modal-developer').remove();*/
/* 			*/
/* 			$('body').prepend('<div id="modal-developer" class="modal">' + html + '</div>');*/
/* 			*/
/* 			$('#modal-developer').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});	*/
/* });	*/
/* //--></script> */
/* {{ footer }}*/
