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

/* SiteKit42/README.md */
class __TwigTemplate_e790462ecfb59144416abbd872aa497f extends \Eccube\Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "# EC-CUBE4 対応の Site Kit プラグイン

EC-CUBE版 Site Kitプラグインです。管理画面にてPageSpeed InsightやGoogle Search Consoleの計測結果を確認することができるようになります。

本プラグインは[WordPressのSite Kitプラグイン](https://wordpress.org/plugins/google-site-kit/)をベースに再構築したものです。

サイトのパフォーマンスや検索トラフィックなどの情報を管理画面上のダッシュボードで一目で確認することができます。

他のプラグインと同様にEC-CUBEの管理画面からインストール可能です。

[オーナーズストアの商品ページはこちら](https://www.ec-cube.net/products/detail.php?product_id=2399)
";
    }

    public function getTemplateName()
    {
        return "SiteKit42/README.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/README.md", "/var/www/html/app/Plugin/SiteKit42/README.md");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
