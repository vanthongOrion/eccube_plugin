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

/* RelatedProduct42/README.md */
class __TwigTemplate_eb815307bca7db290d8ef7e93f1d7c2e extends \Eccube\Twig\Template
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
        echo "# 関連商品プラグイン

[![CI for RelatedProduct42](https://github.com/EC-CUBE/related-product-plugin/actions/workflows/main.yml/badge.svg)](https://github.com/EC-CUBE/related-product-plugin/actions/workflows/main.yml)

## 概要
商品詳細ページに、関連する商品を表示できるようになるプラグイン。

## フロント
### 商品詳細ページに、関連する商品を表示することができる。
- 商品詳細ページに、関連する商品の写真と情報を表示する。
- 説明文が登録されている場合は、説明文も表示する。
- クリックするとその商品のページに異動することができる。

## 管理
### 商品ごとに、任意の商品を関連付けをすることができる。
- 商品詳細ページに、関連する商品を登録するためのフォームを表示する。
- 関連付けする商品を選択するために、商品検索ダイアログを利用できる。

### 関連付けした商品ごとに、商品をアピールする説明文を記入することができる。
- 関連付けした商品ごとに、テキストの入力フォームを表示する。
- HTMLタグが使用可能。

### 商品の関連付けを削除することができる。
- 関連付けした商品がある場合、削除ボタンを利用できるようにする。

";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/README.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/README.md", "/var/www/html/app/Plugin/RelatedProduct42/README.md");
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
