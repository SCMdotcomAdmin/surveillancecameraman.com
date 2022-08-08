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

/* @vse_abbc3/event/acp_overall_footer_after.html */
class __TwigTemplate_c8c2461ddf2135bcb166a628c104f1cc21ae33f72ed6c83c957cdf2122de2fcc extends \Twig\Template
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
        // line 2
        if (($context["bbcodes"] ?? null)) {
            // line 3
            echo "
\t";
            // line 4
            $asset_file = "@vse_abbc3/acp_abbc3.css";
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
            $this->env->get_assets_bag()->add_stylesheet($asset);            // line 5
            echo "\t";
            $asset_file = "@vse_abbc3/js/jquery.tablednd.min.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 6
            echo "
\t<div style=\"display: none;\" id=\"abbc3-successbox\" class=\"successbox\">
\t\t<h3>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo "</h3>
\t\t<p>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_BBCODE_ORDERED");
            echo "</p>
\t</div>

\t<script>
\t\t(function(\$) {  // Avoid conflicts with other libraries
\t\t\t'use strict';
\t\t\t\$(function() {
\t\t\t\tvar msgTimer,
\t\t\t\t\tbbcodeTable = \$('#down'),
\t\t\t\t\tmsgSuccessBox = \$('#abbc3-successbox');
\t\t\t\t// Get BBCode ids from the delete button,
\t\t\t\t// and create tr row IDs on the fly for use by tableDnD
\t\t\t\tbbcodeTable.find('tbody').find('tr').each(function() {
\t\t\t\t\tvar url = \$(this).find('a').last().attr('href');
\t\t\t\t\tif (url) \$(this).attr('id', 'bbcode-' + url.split('bbcode=')[1]);
\t\t\t\t});
\t\t\t\t// Enable table row drag-drop
\t\t\t\tbbcodeTable.tableDnD({
\t\t\t\t\tonDragClass: 'row3',
\t\t\t\t\tonDrop: function(table, row) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: '";
            // line 30
            echo ($context["UA_DRAG_DROP"] ?? null);
            echo "&tablename=' + \$(table).attr('id'),
\t\t\t\t\t\t\tdata: \$.tableDnD.serialize(),
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t// Show the message
\t\t\t\t\t\t\t\tif (res.success) {
\t\t\t\t\t\t\t\t\tclearTimeout(msgTimer);
\t\t\t\t\t\t\t\t\tmsgSuccessBox.stop(true, true).hide().fadeIn(500);
\t\t\t\t\t\t\t\t\tmsgTimer = setTimeout(function() {
\t\t\t\t\t\t\t\t\t\tmsgSuccessBox.fadeOut(500);
\t\t\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t})(jQuery);
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  79 => 9,  75 => 8,  71 => 6,  56 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/event/acp_overall_footer_after.html", "");
    }
}
