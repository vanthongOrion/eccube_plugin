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

/* SalesReport42/README.md */
class __TwigTemplate_ff4445d247fe97352b83fbb2028d086c extends \Eccube\Twig\Template
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
        echo "# 売上集計プラグイン

[![CI for SalesReport42](https://github.com/EC-CUBE/sales-report-plugin/actions/workflows/main.yml/badge.svg)](https://github.com/EC-CUBE/sales-report-plugin/actions/workflows/main.yml)

## 概要
売上を集計し、結果をグラフと一覧で確認できます。
結果をCSVで保存することもできます。

## フロント
機能なし

## 管理画面
### 期間別集計
指定した期間で、日/月/曜日/時間ごとの売上の集計結果を見ることができる。

- 期間指定
\t- 単月
\t- 期間(from/to)
- 集計方法
\t- 日別
\t- 月別
\t- 曜日別
\t- 時間別
- 集計結果

| 期間    | 購入件数 | 男性 | 女性 | 不明 | 男性 (会員) | 男性 (非会員) | 女性 (会員) | 女性 (非会員) | 購入合計 | 購入平均 |
|---------|----------|------|------|------|-------------|---------------|-------------|---------------|----------|----------|
| 2018/10 |32        | 15    | 15    | 2    | 10           | 5             | 10           | 5             | ¥119,834   | ¥3,744    |

### 商品別集計
指定した期間で、商品ごとの売上の集計結果を見ることができる。

- 期間指定
\t- 単月
\t- 期間(from/to)
- 集計方法
\t- 商品別
- 集計結果


| 商品コード | 商品名        | 購入件数(件) | 数量(個) | 金額 |
|------------|---------------|--------------|----------|----------|
| sand-01    | チェリーアイスサンド | 12            | 6        | ¥18,144   |

### 年代別集計
指定した期間で、会員の年代ごとの売上の集計結果を見ることができる。

- 期間指定
\t- 単月
\t- 期間(from/to)
- 集計方法
\t- 会員年代別
- 集計結果

| 年代 | 購入件数(件) | 購入合計 | 購入平均 |
|------|--------------|--------------|--------------|
| 30代 | 12            | 59,834       | ¥4,986        |

### 集計結果のCSV保存
集計結果ページに表示される「CSVダウンロード」ボタンを押すことで、集計結果をCSVに保存することができる。
";
    }

    public function getTemplateName()
    {
        return "SalesReport42/README.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/README.md", "/var/www/html/app/Plugin/SalesReport42/README.md");
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
