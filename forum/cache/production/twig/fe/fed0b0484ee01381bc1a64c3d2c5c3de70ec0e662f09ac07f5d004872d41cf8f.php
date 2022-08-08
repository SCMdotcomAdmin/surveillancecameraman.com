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

/* @phpbb_ads/event/acp_overall_footer_after.html */
class __TwigTemplate_ce5fd01f834d1fd9d7d162705b37b5b7bfe32831138c32610ec7de24b9b6ab43 extends \Twig\Template
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
        if (($context["S_PHPBB_ADS"] ?? null)) {
            // line 2
            echo "\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "INCLUDED_DATETIMEPICKERJS", [], "any", false, false, false, 2)) {
                // line 3
                echo "\t\t";
                $asset_file = "@phpbb_ads/datetimepicker/jquery.datetimepicker.min.css";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_stylesheet($asset);                // line 4
                echo "\t\t";
                $asset_file = "@phpbb_ads/datetimepicker/jquery.datetimepicker.full.min.js";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_script($asset);                // line 5
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_DATETIMEPICKERJS', $value);
                // line 6
                echo "\t";
            }
            // line 7
            echo "
\t<script>
\t/**
\t * This callback replaces enable links with disable links and vice versa.
\t * It does this by replacing the text, and replacing all instances of \"enable\"
\t * in the href with \"disable\", and vice versa.
\t */
\tphpbb.addAjaxCallback('toggle_enable', function(res) {
\t\t'use strict';

\t\tvar \$this = \$(this),
\t\t\tnewHref = \$this.attr('href');

\t\t\$this.text(res.text);
\t\t\$this.attr('title', res.title);

\t\tif (newHref.indexOf('disable') !== -1) {
\t\t\tnewHref = newHref.replace('disable', 'enable');
\t\t} else {
\t\t\tnewHref = newHref.replace('enable', 'disable');
\t\t}

\t\t\$this.attr('href', newHref);
\t});

\tjQuery(function(\$) {
\t\t\$('#ad_start_date, #ad_end_date').datetimepicker({
\t\t\tformat:'";
            // line 34
            echo twig_escape_filter($this->env, ($context["PICKER_DATE_FORMAT"] ?? null), "js");
            echo "',
\t\t\tvalidateOnBlur: false,
\t\t\tminDate: 0,
\t\t\ttimepicker: false
\t\t});
\t\t\$.datetimepicker.setLocale('";
            // line 39
            echo ($context["S_USER_LANG"] ?? null);
            echo "');

\t\t\$('#upload_banner').on('click', function(e) {
\t\t\te.preventDefault();

\t\t\tvar file = \$('#banner')[0].files[0];
\t\t\tif (file) {
\t\t\t\tvar formData = new FormData();
\t\t\t\tformData.append('banner', file);
\t\t\t\tformData.append('upload_banner', true);
\t\t\t\t\$.ajax({
\t\t\t\t\tmethod: 'POST',
\t\t\t\t\turl: window.location.href,
\t\t\t\t\tdata: formData,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tasync: true,
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\tif (data.success) {
\t\t\t\t\t\t\t\$('#ad_code').val(function(i, text) {
\t\t\t\t\t\t\t\treturn (text.length ? text + \"\\n\\n\" : '') + data.text;
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\tphpbb.alert(data.title, data.text);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(err) {
\t\t\t\t\t\tphpbb.alert(err.title, err.text);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\telse {
\t\t\t\tphpbb.alert('";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION"), "js");
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("NO_FILE_SELECTED"), "js");
            echo "');
\t\t\t}
\t\t});
\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 73,  116 => 39,  108 => 34,  79 => 7,  76 => 6,  72 => 5,  57 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/acp_overall_footer_after.html", "");
    }
}
