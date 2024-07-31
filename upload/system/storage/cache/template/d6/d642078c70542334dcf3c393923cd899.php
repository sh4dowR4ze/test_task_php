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

/* extension/module/retailcrm.twig */
class __TwigTemplate_46076e5958c635927b6d124250299675 extends Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                ";
        // line 6
        if (($context["export_file"] ?? null)) {
            // line 7
            echo "                    <button type=\"button\" id=\"export\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_button_export"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                ";
        }
        // line 9
        echo "                <button type=\"button\" id=\"icml\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_button_catalog"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-file-text-o\"></i></button>
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["module_version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 27)) {
            // line 28
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 30
            echo ($context["text_notice"] ?? null);
            echo "
                <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main\">";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main</a>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 38
        echo ($context["general_tab_text"] ?? null);
        echo "</a></li>
                        ";
        // line 39
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 39) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 39))) {
            // line 40
            echo "                            <li><a href=\"#tab-references\" data-toggle=\"tab\">";
            echo ($context["references_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-collector\" data-toggle=\"tab\">";
            // line 41
            echo ($context["collector_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-consultant\" data-toggle=\"tab\">";
            // line 42
            echo ($context["consultant_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-custom_fields\" data-toggle=\"tab\"> ";
            // line 43
            echo ($context["custom_fields_tab_text"] ?? null);
            echo " </a></li>
                            <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
            // line 44
            echo ($context["logs_tab_text"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 46
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <input type=\"hidden\" name=\"module_retailcrm_status\" value=\"1\">
                            <fieldset>
                                <legend>";
        // line 51
        echo ($context["retailcrm_base_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_url\">";
        // line 53
        echo ($context["retailcrm_url"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_url\" type=\"text\" name=\"module_retailcrm_url\" value=\"";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 55)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 55);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_apikey\">";
        // line 59
        echo ($context["retailcrm_apikey"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_apikey\" type=\"text\" name=\"module_retailcrm_apikey\" value=\"";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 61)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 61);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_corporate_enabled\">";
        // line 65
        echo ($context["corporate_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"1\"
                                                    ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 69) == 1))) {
            // line 70
            echo "                                                        checked
                                                    ";
        }
        // line 71
        echo " />
                                            ";
        // line 72
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"0\"
                                                    ";
        // line 76
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 76) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 76) == 0))) {
            // line 77
            echo "                                                        checked
                                                    ";
        }
        // line 78
        echo " />
                                            ";
        // line 79
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 85
        echo ($context["retailcrm_countries_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\"></label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 91
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"module_retailcrm_country[]\" value=\"";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", true, true, false, 93) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", false, false, false, 93)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "\">
                                                        ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 94);
            echo "
                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 103
        echo ($context["icml_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label question-mark\" for=\"module_retailcrm_icml_service_enabled\" title=\"";
        // line 105
        echo ($context["icml_service_description"] ?? null);
        echo "\">";
        echo ($context["icml_service_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_icml_service_enabled\" value=\"1\"
                                                    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", true, true, false, 109) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", false, false, false, 109) == 1))) {
            // line 110
            echo "                                                        checked
                                                    ";
        }
        // line 111
        echo " />
                                            ";
        // line 112
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_icml_service_enabled\" value=\"0\"
                                                    ";
        // line 116
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", true, true, false, 116) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", false, false, false, 116) == 0))) {
            // line 117
            echo "                                                        checked
                                                    ";
        }
        // line 118
        echo " />
                                            ";
        // line 119
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 124
        echo ($context["text_currency_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_currency\" name=\"module_retailcrm_currency\" class=\"form-control\">
                                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 128
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 128) == 1)) {
                // line 129
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 129);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", true, true, false, 129) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", false, false, false, 129) == twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 129)))) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                        ";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 130);
                echo "
                                                    </option>
                                                ";
            }
            // line 133
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 138
        echo ($context["text_lenght_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_lenght\" name=\"module_retailcrm_lenght\" class=\"form-control\">
                                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lenghts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lenght"]) {
            // line 142
            echo "                                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 142);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", true, true, false, 142) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", false, false, false, 142) == twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 142)))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                                                    ";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "title", [], "any", false, false, false, 143);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lenght'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 151
        echo ($context["status_changes"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_status_changes\">";
        // line 153
        echo ($context["text_status_changes"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"1\"
                                            ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 157) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 157) == 1))) {
            // line 158
            echo "                                                checked
                                            ";
        }
        // line 159
        echo " />
                                        ";
        // line 160
        echo ($context["text_yes"] ?? null);
        echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"0\"
                                        ";
        // line 164
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 164) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 164) == 0))) {
            // line 165
            echo "                                            checked
                                        ";
        }
        // line 166
        echo " />
                                        ";
        // line 167
        echo ($context["text_no"] ?? null);
        echo "
                                    </label>
                                  </div>
                                </div>
                            </fieldset>
                            ";
        // line 172
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 172) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 172)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 172)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 172))) {
            // line 173
            echo "                            ";
            if (twig_length_filter($this->env, ($context["retailcrm_errors"] ?? null))) {
                // line 174
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["retailcrm_errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["retailcrm_error"]) {
                    // line 175
                    echo "                                <div class=\"warning\">";
                    echo $context["retailcrm_error"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retailcrm_error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                            ";
            } else {
                // line 178
                echo "                            <fieldset>
                                <legend>";
                // line 179
                echo ($context["retailcrm_upload_order"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 181
                echo ($context["text_button_export_order"] ?? null);
                echo " № </label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                                <input type=\"text\" name=\"order_id\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                                <button type=\"button\" id=\"export_order\" data-toggle=\"tooltip\" title=\"";
                // line 188
                echo ($context["text_button_export_order"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 195
                echo ($context["special_price_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customerGroups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customerGroup"]) {
                    // line 198
                    echo "                                        ";
                    $context["cud"] = twig_get_attribute($this->env, $this->source, $context["customerGroup"], "customer_group_id", [], "any", false, false, false, 198);
                    // line 199
                    echo "                                        <div class=\"row retailcrm_unit\">
                                            <label class=\"col-sm-2 control-label\" for=\"opencart_customer_group_";
                    // line 200
                    echo ($context["cud"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customerGroup"], "name", [], "any", false, false, false, 200);
                    echo "</label>
                                            <div class=\"col-md-4 col-sm-10\">
                                                <select id=\"module_retailcrm_special_";
                    // line 202
                    echo ($context["cud"] ?? null);
                    echo "\" name=\"module_retailcrm_special_";
                    echo ($context["cud"] ?? null);
                    echo "\" class=\"form-control\">
                                                    <option value=\"\" ";
                    // line 203
                    if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 203) || twig_test_empty((($__internal_compile_0 = ($context["saved_settings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                        echo "selected";
                    }
                    echo ">---</option>
                                                    ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["priceTypes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["priceType"]) {
                        // line 205
                        echo "                                                        ";
                        if (((twig_get_attribute($this->env, $this->source, $context["priceType"], "active", [], "any", false, false, false, 205) == true) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "default", [], "any", false, false, false, 205) == false))) {
                            // line 206
                            echo "                                                            <option value =\"";
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 206);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 206) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 206) == (($__internal_compile_1 = ($context["saved_settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                ";
                            // line 207
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "name", [], "any", false, false, false, 207);
                            echo "
                                                            </option>
                                                        ";
                        }
                        // line 210
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "                                                </select>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customerGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 218
                echo ($context["order_number"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_order_number\">";
                // line 220
                echo ($context["text_order_number"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"1\"
                                                ";
                // line 224
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 224) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 224) == 1))) {
                    // line 225
                    echo "                                                    checked
                                                ";
                }
                // line 226
                echo " />
                                            ";
                // line 227
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"0\"
                                                ";
                // line 231
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 231) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 231) == 0))) {
                    // line 232
                    echo "                                                    checked
                                                ";
                }
                // line 233
                echo " />
                                            ";
                // line 234
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 240
                echo ($context["text_retailcrm_discount"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"label_discount\">";
                // line 242
                echo ($context["text_retailcrm_label_discount"] ?? null);
                echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input name=\"module_retailcrm_label_discount\" id=\"label_discount\" class=\"form-control\" value=\"";
                // line 244
                if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", true, true, false, 244)) {
                    echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", false, false, false, 244);
                } else {
                    echo ($context["default_retailcrm_label_discount"] ?? null);
                }
                echo "\">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 249
                echo ($context["sum_payment"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_sum_payment\">";
                // line 251
                echo ($context["text_sum_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"1\"
                                                    ";
                // line 255
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 255) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 255) == 1))) {
                    // line 256
                    echo "                                                        checked
                                                    ";
                }
                // line 257
                echo " >
                                            ";
                // line 258
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"0\"
                                                    ";
                // line 262
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 262) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 262) == 0))) {
                    // line 263
                    echo "                                                        checked
                                                    ";
                }
                // line 264
                echo " >
                                            ";
                // line 265
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-references\">
                            <fieldset>
                                <legend>";
                // line 273
                echo ($context["retailcrm_dict_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"> ";
                // line 275
                echo ($context["retailcrm_dict_delivery"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            ";
                // line 278
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 278))) {
                    // line 279
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 279));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 280
                        echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:10px;\">
                                                        <div class=\"pm\">";
                        // line 281
                        echo (twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 281) . ":");
                        echo "</div>
                                                        ";
                        // line 282
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                            // line 283
                            echo "                                                            ";
                            if (($context["key"] != "title")) {
                                // line 284
                                echo "                                                                <div class=\"form-group retailcrm_unit\">
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <select id=\"retailcrm_delivery_";
                                // line 286
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 286);
                                echo "\" name=\"module_retailcrm_delivery[";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 286);
                                echo "]\" class=\"form-control\">
                                                                            ";
                                // line 287
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "retailcrm", [], "any", false, false, false, 287));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 288
                                    echo "                                                                                <option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 288);
                                    echo "\" ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, true, false, 288), $context["key"], [], "array", true, true, false, 288) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 288) == (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, false, false, 288)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)))) {
                                        echo " selected=\"selected\" ";
                                    }
                                    echo ">
                                                                                    ";
                                    // line 289
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 289);
                                    echo "
                                                                                </option>
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 292
                                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <label class=\"control-label\" for=\"retailcrm_pm_";
                                // line 295
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 295);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 295);
                                echo "</label>
                                                                    </div>
                                                                </div>
                                                            ";
                            }
                            // line 299
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 300
                        echo "                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    echo "                                            ";
                } else {
                    // line 303
                    echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                    ";
                    // line 305
                    echo ($context["text_error_delivery"] ?? null);
                    echo "
                                                </div>
                                            ";
                }
                // line 308
                echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 312
                echo ($context["retailcrm_dict_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 314
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "opencart", [], "any", false, false, false, 314));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 315
                    echo "                                            ";
                    $context["uid"] = twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 315);
                    // line 316
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_status_";
                    // line 318
                    echo ($context["uid"] ?? null);
                    echo "\" name=\"module_retailcrm_status[";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 318);
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 319
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 319));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 320
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 320);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, true, false, 320), ($context["uid"] ?? null), [], "array", true, true, false, 320) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 320) == (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, false, false, 320)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["uid"] ?? null)] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 321
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 321);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 324
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_status_";
                    // line 327
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 327);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 327);
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 331
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 334
                echo ($context["retailcrm_dict_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 336));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 337
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_payment_";
                    // line 339
                    echo $context["key"];
                    echo "\" name=\"module_retailcrm_payment[";
                    echo $context["key"];
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 340
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "retailcrm", [], "any", false, false, false, 340));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 341
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 341);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, true, false, 341), $context["key"], [], "array", true, true, false, 341) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 341) == (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, false, false, 341)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 342);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 345
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_payment_";
                    // line 348
                    echo $context["key"];
                    echo "\">";
                    echo $context["value"];
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 352
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 355
                echo ($context["retailcrm_dict_default"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_payment\" name=\"module_retailcrm_default_payment\" class=\"form-control\">
                                                            ";
                // line 362
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 362));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 363
                    echo "                                                                <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", true, true, false, 363) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", false, false, false, 363)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                    ";
                    // line 364
                    echo $context["v"];
                    echo "
                                                                </option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_payment\">";
                // line 370
                echo ($context["text_payment"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_shipping\" name=\"module_retailcrm_default_shipping\" class=\"form-control\">
                                                            ";
                // line 378
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 378));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 379
                    echo "                                                                <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 379);
                    echo "\">
                                                                    ";
                    // line 380
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 381
                        echo "                                                                        ";
                        if (($context["k"] != "title")) {
                            // line 382
                            echo "                                                                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 382);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", true, true, false, 382) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 382) == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", false, false, false, 382)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                                ";
                            // line 383
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 383);
                            echo "
                                                                            </option>
                                                                        ";
                        }
                        // line 386
                        echo "                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 387
                    echo "                                                                </optgroup>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 389
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_shipping\">";
                // line 392
                echo ($context["text_shipping"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 400
                echo ($context["retailcrm_missing_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                <select id=\"retailcrm_missing_status\" name=\"module_retailcrm_missing_status\" class=\"form-control\">
                                                    <option></option>
                                                    ";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 406));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 407
                    echo "                                                        <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", true, true, false, 407) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", false, false, false, 407)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                            ";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 408);
                    echo "
                                                        </option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 411
                echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            ";
            }
            // line 418
            echo "                            ";
        }
        // line 419
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"tab-collector\">
                            <fieldset>
                                <legend>";
        // line 422
        echo ($context["daemon_collector"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector_active\" class=\"col-md-4\">";
        // line 424
        echo ($context["text_collector_activity"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"1\" ";
        // line 427
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", true, true, false, 427) && (twig_get_attribute($this->env, $this->source,         // line 428
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 428) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 429
        echo ">
                                            ";
        // line 430
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"0\" ";
        // line 433
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 433) || (twig_get_attribute($this->env, $this->source,         // line 434
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 434) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 435
        echo ">
                                            ";
        // line 436
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 441
        echo ($context["collector_site_key"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"retailcrm_collector_site_key\" type=\"text\" name=\"module_retailcrm_collector[site_key]\" value=\"";
        // line 443
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 443), "site_key", [], "any", true, true, false, 443)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 443), "site_key", [], "any", false, false, false, 443);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 447
        echo ($context["text_collector_form_capture"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"1\" ";
        // line 450
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 450), "form_capture", [], "any", true, true, false, 450) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 451
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 451), "form_capture", [], "any", false, false, false, 451) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 452
        echo ">
                                            ";
        // line 453
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"0\" ";
        // line 456
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 456), "form_capture", [], "any", true, true, false, 456) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 457
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 457), "form_capture", [], "any", false, false, false, 457) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 458
        echo ">
                                            ";
        // line 459
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 464
        echo ($context["text_collector_period"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_period\" type=\"text\" name=\"module_retailcrm_collector[period]\" value=\"";
        // line 466
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 466), "period", [], "any", true, true, false, 466)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 466), "period", [], "any", false, false, false, 466);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 470
        echo ($context["text_label_promo"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector[]\" type=\"text\" name=\"module_retailcrm_collector[label_promo]\" value=\"";
        // line 472
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 472), "label_promo", [], "any", true, true, false, 472)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 472), "label_promo", [], "any", false, false, false, 472);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 476
        echo ($context["text_label_send"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_label_send\" type=\"text\" name=\"module_retailcrm_collector[label_send]\" value=\"";
        // line 478
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 478), "label_send", [], "any", true, true, false, 478)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 478), "label_send", [], "any", false, false, false, 478);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 482
        echo ($context["collector_custom_text"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"1\" ";
        // line 485
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 485), "custom_form", [], "any", true, true, false, 485) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 486
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 486), "custom_form", [], "any", false, false, false, 486) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 487
        echo ">
                                            ";
        // line 488
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"0\" ";
        // line 491
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 491), "custom_form", [], "any", true, true, false, 491) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 492
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 492), "custom_form", [], "any", false, false, false, 492) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 493
        echo ">
                                            ";
        // line 494
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectorFields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 499
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\">";
            // line 500
            echo $context["label"];
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4 col-sm-6\">
                                                    <input class=\"form-control\" id=\"module_retailcrm_collector\" type=\"text\" name=\"module_retailcrm_collector[custom][";
            // line 504
            echo $context["field"];
            echo "]\" value=\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 504), "custom", [], "any", false, true, false, 504), $context["field"], [], "array", true, true, false, 504)) {
                echo " ";
                echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 504), "custom", [], "any", false, false, false, 504)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["field"]] ?? null) : null);
                echo " ";
            }
            echo "\">
                                                </div>
                                                <div class=\"col-md-8 col-sm-6\" style=\"margin-top: 8px;\">
                                                    <input input style=\"margin-top: 0; vertical-align: middle;\" type=\"checkbox\"  name=\"module_retailcrm_collector[require][";
            // line 507
            echo $context["field"];
            echo "_require]\" value=\"1\" ";
            if ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 507), "require", [], "any", false, false, false, 507)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["field"] . "_require")] ?? null) : null)) {
                echo " checked ";
            }
            echo ">
                                                    <label style=\"margin-bottom: 0; vertical-align: middle; margin-left: 5px;\" for=\"retailcrm_collector\">";
            // line 508
            echo ($context["text_require"] ?? null);
            echo "</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-consultant\">
                            <legend>";
        // line 517
        echo ($context["consultant_tab_text"] ?? null);
        echo "</legend>
                            <fieldset>
                                ";
        // line 520
        echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-code\">";
        // line 521
        echo ($context["entry_code"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"module_retailcrm_online_consultant_code\" rows=\"5\" placeholder=\"";
        // line 523
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"retailcrm_entry_code\" class=\"form-control\">
                                        ";
        // line 524
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", true, true, false, 524)) {
            // line 525
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", false, false, false, 525);
        }
        // line 526
        echo "                                        </textarea>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_online_consultant_active\" class=\"col-md-4\">";
        // line 530
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"1\" ";
        // line 533
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", true, true, false, 533) && (twig_get_attribute($this->env, $this->source,         // line 534
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 534) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 535
        echo ">
                                            ";
        // line 536
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"0\" ";
        // line 539
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 539) || (twig_get_attribute($this->env, $this->source,         // line 540
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 540) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 541
        echo ">
                                            ";
        // line 542
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-custom_fields\">
                            <fieldset>
                                <legend>";
        // line 550
        echo ($context["retailcrm_dict_custom_fields"] ?? null);
        echo "</legend>
                                ";
        // line 551
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 551)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 551)))) {
            // line 552
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_custom_field_active\">";
            // line 553
            echo ($context["text_custom_field_activity"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"1\" ";
            // line 556
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 556) && (twig_get_attribute($this->env, $this->source,             // line 557
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 557) == 1))) {
                // line 558
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 559
            echo ($context["text_yes"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"0\" ";
            // line 562
            if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 562) || (twig_get_attribute($this->env, $this->source,             // line 563
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 563) == 0))) {
                // line 564
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 565
            echo ($context["text_no"] ?? null);
            echo "
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 570
            echo ($context["text_customers_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 573
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 573));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 574
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 576
                $context["fid"] = ("c_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 576));
                // line 577
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 578
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 579
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 579), "customers", [], "any", false, false, false, 579));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 580
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 580);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 580), ($context["fid"] ?? null), [], "array", true, true, false, 580) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 580) == (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 580)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 581
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 581);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 584
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 586
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 586);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 590
            echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 594
            echo ($context["text_orders_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 597
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 597));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 598
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 600
                $context["fid"] = ("o_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 600));
                // line 601
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 602
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 603
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 603), "orders", [], "any", false, false, false, 603));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 604
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 604);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 604), ($context["fid"] ?? null), [], "array", true, true, false, 604) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 604) == (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 604)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 605
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 605);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 608
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 610
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 610);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 614
            echo "                                            </div>
                                        </div>
                                    </div>
                                ";
        } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 617
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 617)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 617)))) {
            // line 618
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 620
            echo ($context["text_error_custom_field"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 622
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 622))) {
            // line 623
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 625
            echo ($context["text_error_cf_retailcrm"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 627
($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 627))) {
            // line 628
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 630
            echo ($context["text_error_cf_opencart"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 633
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-logs\">
                            <fieldset style=\"margin-bottom: 30px;\">
                                <legend>Retailcrm API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 639
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_retailcrm"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 641
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", true, true, false, 641)) {
            // line 642
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 644
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", false, false, false, 644);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 647
($context["logs"] ?? null), "retailcrm_error", [], "any", true, true, false, 647)) {
            // line 648
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_error", [], "any", false, false, false, 648);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 652
        echo "                            </fieldset>
                            <fieldset>
                                <legend>Opencart API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 656
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_opencart"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 658
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", true, true, false, 658)) {
            // line 659
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 661
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", false, false, false, 661);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 664
($context["logs"] ?? null), "oc_error", [], "any", true, true, false, 664)) {
            // line 665
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_error", [], "any", false, false, false, 665);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 669
        echo "                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 677
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
    var token = '";
        // line 680
        echo ($context["user_token"] ?? null);
        echo "';
    \$('#icml').on('click', function() {
        \$.ajax({
            url: '";
        // line 683
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/icml&user_token=' + token,
            beforeSend: function() {
                \$('#icml').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 689
        echo ($context["text_success_catalog"] ?? null);
        echo "</div>');
                \$('#icml').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export').on('click', function() {
        \$.ajax({
            url: '";
        // line 700
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/export&user_token=' + token,
            beforeSend: function() {
                \$('#export').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 706
        echo ($context["text_success_export"] ?? null);
        echo "</div>');
                \$('#export').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export_order').on('click', function() {
        var order_id = \$('input[name=\\'order_id\\']').val();
        if (order_id && order_id > 0) {
            \$.ajax({
                url: '";
        // line 719
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/exportOrder&user_token=' + token + '&order_id=' + order_id,
                beforeSend: function() {
                    \$('#export_order').button('loading');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                },
                success: function(data, textStatus, jqXHR) {
                    response = JSON.parse(jqXHR['responseText']);

                    if (response['status_code'] == '400') {
                        \$('.alert-danger').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 731
        echo ($context["text_error_order"] ?? null);
        echo "' + response['error_msg'] + '</div>');
                        \$('#export_order').button('reset');
                    } else {
                        \$('.alert-success').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 735
        echo ($context["text_success_export_order"] ?? null);
        echo "</div>');
                        \$('#export_order').button('reset');
                        \$('input[name=\\'order_id\\']').val('');
                    }
                }
            });
        } else {
            \$('.alert-danger').remove();
            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 743
        echo ($context["text_error_order_id"] ?? null);
        echo "</div>');
            \$('#export_order').button('reset');
        }
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "extension/module/retailcrm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1800 => 743,  1789 => 735,  1782 => 731,  1767 => 719,  1751 => 706,  1742 => 700,  1728 => 689,  1719 => 683,  1713 => 680,  1707 => 677,  1697 => 669,  1689 => 665,  1687 => 664,  1681 => 661,  1677 => 659,  1675 => 658,  1666 => 656,  1660 => 652,  1652 => 648,  1650 => 647,  1644 => 644,  1640 => 642,  1638 => 641,  1629 => 639,  1621 => 633,  1615 => 630,  1611 => 628,  1609 => 627,  1604 => 625,  1600 => 623,  1598 => 622,  1593 => 620,  1589 => 618,  1587 => 617,  1582 => 614,  1570 => 610,  1566 => 608,  1557 => 605,  1548 => 604,  1544 => 603,  1538 => 602,  1535 => 601,  1533 => 600,  1529 => 598,  1525 => 597,  1519 => 594,  1513 => 590,  1501 => 586,  1497 => 584,  1488 => 581,  1479 => 580,  1475 => 579,  1469 => 578,  1466 => 577,  1464 => 576,  1460 => 574,  1456 => 573,  1450 => 570,  1442 => 565,  1437 => 564,  1435 => 563,  1434 => 562,  1428 => 559,  1423 => 558,  1421 => 557,  1420 => 556,  1414 => 553,  1411 => 552,  1409 => 551,  1405 => 550,  1394 => 542,  1391 => 541,  1384 => 540,  1383 => 539,  1377 => 536,  1374 => 535,  1367 => 534,  1366 => 533,  1360 => 530,  1354 => 526,  1350 => 525,  1348 => 524,  1344 => 523,  1339 => 521,  1336 => 520,  1331 => 517,  1326 => 514,  1314 => 508,  1306 => 507,  1294 => 504,  1287 => 500,  1284 => 499,  1280 => 498,  1273 => 494,  1270 => 493,  1263 => 492,  1262 => 491,  1256 => 488,  1253 => 487,  1246 => 486,  1245 => 485,  1239 => 482,  1230 => 478,  1225 => 476,  1216 => 472,  1211 => 470,  1202 => 466,  1197 => 464,  1189 => 459,  1186 => 458,  1179 => 457,  1178 => 456,  1172 => 453,  1169 => 452,  1162 => 451,  1161 => 450,  1155 => 447,  1146 => 443,  1141 => 441,  1133 => 436,  1130 => 435,  1123 => 434,  1122 => 433,  1116 => 430,  1113 => 429,  1106 => 428,  1105 => 427,  1099 => 424,  1094 => 422,  1089 => 419,  1086 => 418,  1077 => 411,  1068 => 408,  1059 => 407,  1055 => 406,  1046 => 400,  1035 => 392,  1030 => 389,  1023 => 387,  1017 => 386,  1011 => 383,  1002 => 382,  999 => 381,  995 => 380,  990 => 379,  986 => 378,  975 => 370,  970 => 367,  961 => 364,  952 => 363,  948 => 362,  938 => 355,  933 => 352,  921 => 348,  916 => 345,  907 => 342,  898 => 341,  894 => 340,  888 => 339,  884 => 337,  880 => 336,  875 => 334,  870 => 331,  858 => 327,  853 => 324,  844 => 321,  835 => 320,  831 => 319,  825 => 318,  821 => 316,  818 => 315,  814 => 314,  809 => 312,  803 => 308,  797 => 305,  793 => 303,  790 => 302,  783 => 300,  777 => 299,  768 => 295,  763 => 292,  754 => 289,  745 => 288,  741 => 287,  735 => 286,  731 => 284,  728 => 283,  724 => 282,  720 => 281,  717 => 280,  712 => 279,  710 => 278,  704 => 275,  699 => 273,  688 => 265,  685 => 264,  681 => 263,  679 => 262,  672 => 258,  669 => 257,  665 => 256,  663 => 255,  656 => 251,  651 => 249,  639 => 244,  634 => 242,  629 => 240,  620 => 234,  617 => 233,  613 => 232,  611 => 231,  604 => 227,  601 => 226,  597 => 225,  595 => 224,  588 => 220,  583 => 218,  578 => 215,  569 => 211,  563 => 210,  557 => 207,  548 => 206,  545 => 205,  541 => 204,  535 => 203,  529 => 202,  522 => 200,  519 => 199,  516 => 198,  512 => 197,  507 => 195,  497 => 188,  487 => 181,  482 => 179,  479 => 178,  476 => 177,  467 => 175,  462 => 174,  459 => 173,  457 => 172,  449 => 167,  446 => 166,  442 => 165,  440 => 164,  433 => 160,  430 => 159,  426 => 158,  424 => 157,  417 => 153,  412 => 151,  405 => 146,  396 => 143,  387 => 142,  383 => 141,  377 => 138,  371 => 134,  365 => 133,  359 => 130,  350 => 129,  347 => 128,  343 => 127,  337 => 124,  329 => 119,  326 => 118,  322 => 117,  320 => 116,  313 => 112,  310 => 111,  306 => 110,  304 => 109,  295 => 105,  290 => 103,  283 => 98,  273 => 94,  263 => 93,  259 => 91,  255 => 90,  247 => 85,  238 => 79,  235 => 78,  231 => 77,  229 => 76,  222 => 72,  219 => 71,  215 => 70,  213 => 69,  206 => 65,  197 => 61,  192 => 59,  183 => 55,  178 => 53,  173 => 51,  166 => 46,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  144 => 40,  142 => 39,  138 => 38,  133 => 36,  129 => 34,  121 => 31,  117 => 30,  113 => 28,  110 => 27,  104 => 24,  100 => 22,  98 => 21,  92 => 17,  81 => 15,  77 => 14,  70 => 12,  64 => 11,  60 => 10,  55 => 9,  49 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/retailcrm.twig", "");
    }
}
