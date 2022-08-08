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

/* manage_ads.html */
class __TwigTemplate_50a4a9df08f0ad1704778c257b978865b0f3ef1eaa6934949faa7715787c28d2 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "manage_ads.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((($context["S_ADD_AD"] ?? null) || ($context["S_EDIT_AD"] ?? null))) {
            // line 6
            echo "\t";
            $asset_file = "@phpbb_ads/phpbbads.css";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_stylesheet($asset);            // line 7
            echo "
\t<a href=\"";
            // line 8
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<h1>";
            // line 10
            if (($context["S_ADD_AD"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_ADS_ADD");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_ADS_EDIT");
            }
            echo "</h1>

\t";
            // line 12
            if (($context["PREVIEW"] ?? null)) {
                // line 13
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 14
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
                echo "</legend>
\t\t\t";
                // line 15
                list($context["PHPBB_ADS_CODE"], $context["S_PHPBB_ADS_CENTER"]) =                 [($context["PREVIEW"] ?? null), ($context["AD_CENTERING"] ?? null)];
                // line 16
                echo "\t\t\t";
                $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "manage_ads.html", 16)->display($context);
                // line 17
                echo "\t\t</fieldset>
\t";
            }
            // line 19
            echo "
\t";
            // line 20
            if (($context["S_ERROR"] ?? null)) {
                // line 21
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 23
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 26
            echo "
\t<form id=\"acp_admanagement_add\" method=\"post\" action=\"";
            // line 27
            echo ($context["U_ACTION"] ?? null);
            echo "\" enctype=\"multipart/form-data\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_SETTINGS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_name\">";
            // line 31
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_NAME") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_NAME_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" id=\"ad_name\" name=\"ad_name\" value=\"";
            // line 32
            echo ($context["AD_NAME"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_enabled\">";
            // line 35
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_ENABLED") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_ENABLED_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"ad_enabled\" name=\"ad_enabled\" value=\"1\"";
            // line 36
            if (($context["AD_ENABLED"] ?? null)) {
                echo " checked";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLED");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ad_enabled\" value=\"0\"";
            // line 37
            if ( !($context["AD_ENABLED"] ?? null)) {
                echo " checked";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLED");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_note\">";
            // line 40
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_NOTE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_NOTE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><textarea id=\"ad_note\" name=\"ad_note\" rows=\"5\" cols=\"60\" style=\"width: 95%;\">";
            // line 41
            echo ($context["AD_NOTE"] ?? null);
            echo "</textarea></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_code\">";
            // line 44
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_CODE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_CODE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<textarea id=\"ad_code\" name=\"ad_code\" rows=\"20\" cols=\"60\" style=\"width: 95%;\">";
            // line 46
            echo ($context["AD_CODE"] ?? null);
            echo "</textarea>
\t\t\t\t\t<button class=\"button2 phpbb-ads-button\" id=\"analyse_ad_code\" name=\"analyse_ad_code\"><i class=\"icon fa-fw fa-stethoscope\"></i> <span>";
            // line 47
            echo $this->extensions['phpbb\template\twig\extension']->lang("ANALYSE_AD_CODE");
            echo "</span></button>
\t\t\t\t\t<div class=\"analyser-results\">
\t\t\t\t\t\t";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "analyser_results_notice", [], "any", false, false, false, 49) || twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "analyser_results_warning", [], "any", false, false, false, 49))) {
                // line 50
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "analyser_results_notice", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "analyser_results_notice", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"warningbox\">";
                        echo twig_get_attribute($this->env, $this->source, $context["notice"], "MESSAGE", [], "any", false, false, false, 52);
                        echo "</p>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t\t\t\t";
                }
                // line 55
                echo "
\t\t\t\t\t\t\t";
                // line 56
                if (twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "analyser_results_warning", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "analyser_results_warning", [], "any", false, false, false, 57));
                    foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"errorbox\">";
                        echo twig_get_attribute($this->env, $this->source, $context["warning"], "MESSAGE", [], "any", false, false, false, 58);
                        echo "</p>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t";
            } elseif (($context["CODE_ANALYSED"] ?? null)) {
                // line 62
                echo "\t\t\t\t\t\t\t<p class=\"successbox\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EVERYTHING_OK");
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 69
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_BANNER");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"banner\">";
            // line 71
            echo ($this->extensions['phpbb\template\twig\extension']->lang("BANNER") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BANNER_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"file\" accept=\"image/*\" class=\"inputbox autowidth\" id=\"banner\" name=\"banner\" />
\t\t\t\t\t<button class=\"button2 phpbb-ads-button\" id=\"upload_banner\" name=\"upload_banner\"><i class=\"icon fa-fw fa-upload\"></i> <span>";
            // line 74
            echo $this->extensions['phpbb\template\twig\extension']->lang("BANNER_UPLOAD");
            echo "</span></button>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 79
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_PLACEMENT");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_locations\">";
            // line 81
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_LOCATIONS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 82
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_LOCATIONS_EXPLAIN");
            echo "<br><br>
\t\t\t\t\t\t<a class=\"phpbb-ads-button\" href=\"";
            // line 83
            echo ($context["U_ENABLE_VISUAL_DEMO"] ?? null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"icon fa-fw fa-eye\"></i> <span>";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_LOCATIONS_VISUAL_DEMO");
            echo "</span>
\t\t\t\t\t\t</a><br><br>";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_DEMO_EXPLAIN");
            echo "
\t\t\t\t\t</span>
\t\t\t\t</dt>
\t\t\t\t<dd><select id=\"ad_locations\" name=\"ad_locations[]\" multiple size=\"10\">
\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ad_locations", [], "any", false, false, false, 89));
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
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 90
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "CATEGORY_NAME", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "\t\t\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 91)) {
                        echo "</optgroup>";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "CATEGORY_NAME", [], "any", false, false, false, 92);
                    echo "\">
\t\t\t\t\t\t";
                } else {
                    // line 94
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "LOCATION_ID", [], "any", false, false, false, 94);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["location"], "S_SELECTED", [], "any", false, false, false, 94)) {
                        echo " selected";
                    }
                    echo " title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "LOCATION_DESC", [], "any", false, false, false, 94);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "LOCATION_NAME", [], "any", false, false, false, 94);
                    echo "</option>
\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_priority\">";
            // line 102
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_PRIORITY") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_PRIORITY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"number\" id=\"ad_priority\" name=\"ad_priority\" value=\"";
            // line 103
            echo ((($context["AD_PRIORITY"] ?? null)) ? (($context["AD_PRIORITY"] ?? null)) : (twig_constant("\\phpbb\\ads\\ext::DEFAULT_PRIORITY")));
            echo "\" min=\"1\" max=\"10\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_content_only\">";
            // line 106
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_CONTENT_ONLY") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_CONTENT_ONLY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"ad_content_only\" value=\"1\"";
            // line 107
            if (($context["AD_CONTENT_ONLY"] ?? null)) {
                echo " checked";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"ad_content_only\" name=\"ad_content_only\" value=\"0\"";
            // line 108
            if ( !($context["AD_CONTENT_ONLY"] ?? null)) {
                echo " checked";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_centering\">";
            // line 111
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_CENTERING") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_CENTERING_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"ad_centering\" name=\"ad_centering\" value=\"1\"";
            // line 112
            if (($context["AD_CENTERING"] ?? null)) {
                echo " checked";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ad_centering\" value=\"0\"";
            // line 113
            if ( !($context["AD_CENTERING"] ?? null)) {
                echo " checked";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 117
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_owner\">";
            // line 119
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_OWNER") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_OWNER_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" id=\"ad_owner\" name=\"ad_owner\" value=\"";
            // line 120
            echo ($context["AD_OWNER"] ?? null);
            echo "\" /></dd>
\t\t\t\t<dd>[ <a href=\"";
            // line 121
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" id=\"find-username\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
            echo "</a> ]</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_views_limit\">";
            // line 124
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_VIEWS_LIMIT") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_VIEWS_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text\" type=\"number\" id=\"ad_views_limit\" name=\"ad_views_limit\" value=\"";
            // line 125
            echo ($context["AD_VIEWS_LIMIT"] ?? null);
            echo "\" size=\"20\" min=\"0\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_clicks_limit\">";
            // line 128
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_CLICKS_LIMIT") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_CLICKS_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text\" type=\"number\" id=\"ad_clicks_limit\" name=\"ad_clicks_limit\" value=\"";
            // line 129
            echo ($context["AD_CLICKS_LIMIT"] ?? null);
            echo "\" size=\"20\" min=\"0\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_start_date\">";
            // line 132
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_START_DATE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_START_DATE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text\" id=\"ad_start_date\" name=\"ad_start_date\" value=\"";
            // line 133
            echo ((($context["AD_START_DATE"] ?? null)) ? (twig_date_format_filter($this->env, ($context["AD_START_DATE"] ?? null), twig_constant("\\phpbb\\ads\\ext::DATE_FORMAT"))) : (""));
            echo "\" size=\"20\" maxlength=\"20\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_end_date\">";
            // line 136
            echo ($this->extensions['phpbb\template\twig\extension']->lang("AD_END_DATE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_END_DATE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text\" id=\"ad_end_date\" name=\"ad_end_date\" value=\"";
            // line 137
            echo ((($context["AD_END_DATE"] ?? null)) ? (twig_date_format_filter($this->env, ($context["AD_END_DATE"] ?? null), twig_constant("\\phpbb\\ads\\ext::DATE_FORMAT"))) : (""));
            echo "\" size=\"20\" maxlength=\"20\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"ad_groups\">";
            // line 140
            echo ($this->extensions['phpbb\template\twig\extension']->lang("HIDE_GROUPS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_GROUPS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select id=\"ad_groups\" name=\"ad_groups[]\" multiple size=\"8\">
\t\t\t\t\t\t";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "groups", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 143
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "ID", [], "any", false, false, false, 143);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["group"], "S_SELECTED", [], "any", false, false, false, 143)) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "NAME", [], "any", false, false, false, 143);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"preview\" name=\"preview\" value=\"";
            // line 150
            echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
            echo "\" />&nbsp;
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit_";
            // line 151
            if (($context["S_EDIT_AD"] ?? null)) {
                echo "edit";
            } else {
                echo "add";
            }
            echo "\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 152
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t\t\t";
            // line 153
            if (($context["S_EDIT_AD"] ?? null)) {
                // line 154
                echo "\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                echo ($context["EDIT_ID"] ?? null);
                echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"edit\" />
\t\t\t";
            } else {
                // line 157
                echo "\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
            }
            // line 159
            echo "\t\t\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
\t<script>
\t\tdocument.getElementById(\"find-username\").addEventListener(\"click\", (e) => {
\t\t\te.preventDefault();
\t\t\tfind_username(e.target.href);
\t\t})
\t</script>

";
        } else {
            // line 170
            echo "
\t<h1>";
            // line 171
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_MANAGE_ADS_TITLE");
            echo "</h1>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width: 30%;\">";
            // line 176
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_NAME");
            echo "</th>
\t\t\t\t<th>";
            // line 177
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_PRIORITY");
            echo "</th>
\t\t\t\t<th>";
            // line 178
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_START_DATE");
            echo "</th>
\t\t\t\t<th>";
            // line 179
            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_END_DATE");
            echo "</th>
\t\t\t\t";
            // line 180
            if (($context["S_VIEWS_ENABLED"] ?? null)) {
                echo "<th>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AD_VIEWS");
                echo "</th>";
            }
            // line 181
            echo "\t\t\t\t";
            if (($context["S_CLICKS_ENABLED"] ?? null)) {
                echo "<th>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AD_CLICKS");
                echo "</th>";
            }
            // line 182
            echo "\t\t\t\t<th>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATUS");
            echo "</th>
\t\t\t\t<th>";
            // line 183
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 187
            $context["NOW"] = twig_date_format_filter($this->env, "now", "U");
            // line 188
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable([0 => ["heading" => $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_ADS"), "loop" => twig_get_attribute($this->env, $this->source,             // line 191
($context["loops"] ?? null), "ads", [], "any", false, false, false, 191), "allow_enable" => true], 1 => ["heading" => $this->extensions['phpbb\template\twig\extension']->lang("EXPIRED_ADS"), "loop" => twig_get_attribute($this->env, $this->source,             // line 196
($context["loops"] ?? null), "expired", [], "any", false, false, false, 196), "allow_enable" => false]]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 200
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["list"], "loop", [], "any", false, false, false, 200)) {
                    // line 201
                    echo "\t\t\t\t\t<td class=\"row3\" colspan=\"";
                    echo ((6 + ($context["S_VIEWS_ENABLED"] ?? null)) + ($context["S_CLICKS_ENABLED"] ?? null));
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["list"], "heading", [], "any", false, false, false, 201);
                    echo "</strong></td>
\t\t\t\t\t";
                    // line 202
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["list"], "loop", [], "any", false, false, false, 202));
                    foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                        // line 203
                        echo "\t\t\t\t\t\t<tr";
                        if (twig_get_attribute($this->env, $this->source, $context["ad"], "S_EXPIRED", [], "any", false, false, false, 203)) {
                            echo " title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_EXPIRED_EXPLAIN");
                            echo "\"";
                        }
                        echo ">
\t\t\t\t\t\t\t<td><strong>";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["ad"], "NAME", [], "any", false, false, false, 204);
                        echo "</strong></td>
\t\t\t\t\t\t\t<td>";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["ad"], "PRIORITY", [], "any", false, false, false, 205);
                        echo "</td>
\t\t\t\t\t\t\t<td>";
                        // line 206
                        echo ((twig_get_attribute($this->env, $this->source, $context["ad"], "START_DATE", [], "any", false, false, false, 206)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "START_DATE", [], "any", false, false, false, 206), twig_constant("\\phpbb\\ads\\ext::DATE_FORMAT"))) : (""));
                        echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 208
                        if ((twig_get_attribute($this->env, $this->source, $context["ad"], "END_DATE", [], "any", false, false, false, 208) < ($context["NOW"] ?? null))) {
                            echo "<strong class=\"error\">";
                        }
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo ((twig_get_attribute($this->env, $this->source, $context["ad"], "END_DATE", [], "any", false, false, false, 209)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "END_DATE", [], "any", false, false, false, 209), twig_constant("\\phpbb\\ads\\ext::DATE_FORMAT"))) : (""));
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 210
                        if ((twig_get_attribute($this->env, $this->source, $context["ad"], "END_DATE", [], "any", false, false, false, 210) < ($context["NOW"] ?? null))) {
                            echo "</strong>";
                        }
                        // line 211
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        // line 212
                        if (($context["S_VIEWS_ENABLED"] ?? null)) {
                            // line 213
                            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                            // line 214
                            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS_LIMIT", [], "any", false, false, false, 214) && (twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS", [], "any", false, false, false, 214) >= twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS_LIMIT", [], "any", false, false, false, 214)))) {
                                echo "<strong class=\"error\">";
                            }
                            // line 215
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS", [], "any", false, false, false, 215);
                            if (twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS_LIMIT", [], "any", false, false, false, 215)) {
                                echo " / ";
                                echo twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS_LIMIT", [], "any", false, false, false, 215);
                            }
                            // line 216
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS_LIMIT", [], "any", false, false, false, 216) && (twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS", [], "any", false, false, false, 216) >= twig_get_attribute($this->env, $this->source, $context["ad"], "VIEWS_LIMIT", [], "any", false, false, false, 216)))) {
                                echo "</strong>";
                            }
                            // line 217
                            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        }
                        // line 219
                        echo "\t\t\t\t\t\t\t";
                        if (($context["S_CLICKS_ENABLED"] ?? null)) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                            // line 221
                            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS_LIMIT", [], "any", false, false, false, 221) && (twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS", [], "any", false, false, false, 221) >= twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS_LIMIT", [], "any", false, false, false, 221)))) {
                                echo "<strong class=\"error\">";
                            }
                            // line 222
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS", [], "any", false, false, false, 222);
                            if (twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS_LIMIT", [], "any", false, false, false, 222)) {
                                echo " / ";
                                echo twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS_LIMIT", [], "any", false, false, false, 222);
                            }
                            // line 223
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS_LIMIT", [], "any", false, false, false, 223) && (twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS", [], "any", false, false, false, 223) >= twig_get_attribute($this->env, $this->source, $context["ad"], "CLICKS_LIMIT", [], "any", false, false, false, 223)))) {
                                echo "</strong>";
                            }
                            // line 224
                            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        }
                        // line 226
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 227
                        if (twig_get_attribute($this->env, $this->source, $context["list"], "allow_enable", [], "any", false, false, false, 227)) {
                            // line 228
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["ad"], "U_ENABLE", [], "any", false, false, false, 228);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("AD_ENABLE_TITLE", twig_get_attribute($this->env, $this->source, $context["ad"], "S_ENABLED", [], "any", false, false, false, 228));
                            echo "\" data-ajax=\"toggle_enable\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 229
                            if (twig_get_attribute($this->env, $this->source, $context["ad"], "S_ENABLED", [], "any", false, false, false, 229)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLED");
                            } else {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLED");
                            }
                            // line 230
                            echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 232
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLED");
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 234
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\"><a href=\"";
                        // line 235
                        echo twig_get_attribute($this->env, $this->source, $context["ad"], "U_EDIT", [], "any", false, false, false, 235);
                        echo "\">";
                        echo ($context["ICON_EDIT"] ?? null);
                        echo "</a> <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ad"], "U_DELETE", [], "any", false, false, false, 235);
                        echo "\" data-ajax=\"row_delete\">";
                        echo ($context["ICON_DELETE"] ?? null);
                        echo "</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo "\t\t\t\t";
                } elseif ((( !twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ads", [], "any", false, false, false, 238) &&  !twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "expired", [], "any", false, false, false, 238)) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 238))) {
                    // line 239
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"";
                    // line 240
                    echo ((6 + ($context["S_VIEWS_ENABLED"] ?? null)) + ($context["S_CLICKS_ENABLED"] ?? null));
                    echo "\" style=\"text-align: center;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_ADS_EMPTY");
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 243
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "\t\t</tbody>
\t</table>

\t<form id=\"acp_phpbb_ads_quick_add\" method=\"post\" action=\"";
            // line 247
            echo ($context["U_ACTION_ADD"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 249
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_ADS_ADD");
            echo "\" />
\t\t\t";
            // line 250
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

";
        }
        // line 255
        echo "
";
        // line 256
        $this->loadTemplate("overall_footer.html", "manage_ads.html", 256)->display($context);
    }

    public function getTemplateName()
    {
        return "manage_ads.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 256,  854 => 255,  846 => 250,  842 => 249,  837 => 247,  832 => 244,  818 => 243,  810 => 240,  807 => 239,  804 => 238,  789 => 235,  786 => 234,  780 => 232,  776 => 230,  770 => 229,  763 => 228,  761 => 227,  758 => 226,  754 => 224,  749 => 223,  742 => 222,  738 => 221,  735 => 220,  732 => 219,  728 => 217,  723 => 216,  716 => 215,  712 => 214,  709 => 213,  707 => 212,  704 => 211,  700 => 210,  695 => 209,  691 => 208,  686 => 206,  682 => 205,  678 => 204,  669 => 203,  665 => 202,  658 => 201,  655 => 200,  639 => 196,  638 => 191,  635 => 188,  633 => 187,  626 => 183,  621 => 182,  614 => 181,  608 => 180,  604 => 179,  600 => 178,  596 => 177,  592 => 176,  584 => 171,  581 => 170,  566 => 159,  562 => 157,  555 => 154,  553 => 153,  549 => 152,  539 => 151,  535 => 150,  528 => 145,  513 => 143,  509 => 142,  502 => 140,  496 => 137,  490 => 136,  484 => 133,  478 => 132,  472 => 129,  466 => 128,  460 => 125,  454 => 124,  446 => 121,  442 => 120,  436 => 119,  431 => 117,  420 => 113,  412 => 112,  406 => 111,  396 => 108,  388 => 107,  382 => 106,  376 => 103,  370 => 102,  364 => 98,  349 => 96,  335 => 94,  329 => 92,  324 => 91,  321 => 90,  304 => 89,  297 => 85,  293 => 84,  289 => 83,  285 => 82,  281 => 81,  276 => 79,  268 => 74,  260 => 71,  255 => 69,  248 => 64,  242 => 62,  239 => 61,  236 => 60,  227 => 58,  222 => 57,  220 => 56,  217 => 55,  214 => 54,  205 => 52,  200 => 51,  197 => 50,  195 => 49,  190 => 47,  186 => 46,  179 => 44,  173 => 41,  167 => 40,  157 => 37,  149 => 36,  143 => 35,  137 => 32,  131 => 31,  126 => 29,  121 => 27,  118 => 26,  112 => 23,  108 => 22,  105 => 21,  103 => 20,  100 => 19,  96 => 17,  93 => 16,  91 => 15,  87 => 14,  84 => 13,  82 => 12,  73 => 10,  64 => 8,  61 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "manage_ads.html", "");
    }
}
