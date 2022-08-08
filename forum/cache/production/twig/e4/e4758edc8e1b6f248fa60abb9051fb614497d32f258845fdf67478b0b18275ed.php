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

/* @phpbb_ads/event/overall_header_content_before.html */
class __TwigTemplate_15eab3396d96b2b7278954cbb4518f9615e7f5c2ea3431c016d2c85a1d551289 extends \Twig\Template
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
        $asset_file = "@phpbb_ads/phpbbads.css";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 2
        $this->loadTemplate("@phpbb_ads/includes/ad_clicks.html", "@phpbb_ads/event/overall_header_content_before.html", 2)->display($context);
        // line 3
        $this->loadTemplate("@phpbb_ads/includes/ad_blocker.html", "@phpbb_ads/event/overall_header_content_before.html", 3)->display($context);
        // line 4
        $this->loadTemplate("@phpbb_ads/includes/ad_visual_demo_notice.html", "@phpbb_ads/event/overall_header_content_before.html", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  53 => 3,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/overall_header_content_before.html", "");
    }
}
