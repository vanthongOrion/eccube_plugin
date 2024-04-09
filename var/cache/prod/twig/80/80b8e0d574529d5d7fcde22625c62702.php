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

/* Api42/README.md */
class __TwigTemplate_50dda8d10e4974768e4f74895df03212 extends \Eccube\Twig\Template
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
        echo "# EC-CUBE4 対応の Web API プラグイン

[![Packaging for EC-CUBE Plugin](https://github.com/EC-CUBE/eccube-api4/actions/workflows/main.yml/badge.svg)](https://github.com/EC-CUBE/eccube-api4/actions/workflows/main.yml)

外部サービスと連携するため、[GraphQL](https://graphql.org) による Web API 機能を実現します。

本プラグインの利用には EC-CUBE 4.0.5 以上へのアップデートが必要になる予定です。
ほんプラグインおよびEC-CUBEのリリーススケジュールは[EC-CUBE 4.1 Roadmap](https://github.com/EC-CUBE/ec-cube/issues/4603)をご確認ください。

より良い Web API とするため Issue や PullRequest にてフィードバック/開発協力を募集しています。


## インストール

### EC-CUBE 4.0のインストール方法

[EC-CUBE4 Web API プラグイン 開発ドキュメント](https://doc.ec-cube.net/eccube-api4/) の手順に従ってインストールしてください。

### 動作確認環境

* PHP 7.2 or higher
* PostgreSQL or MySQL
* SSLサーバー証明書(TLS) は必須

詳しくは [EC-CUBE4 Web API プラグイン 開発ドキュメント](https://doc.ec-cube.net/eccube-api4/) をご確認ください。
";
    }

    public function getTemplateName()
    {
        return "Api42/README.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/README.md", "/var/www/html/app/Plugin/Api42/README.md");
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
