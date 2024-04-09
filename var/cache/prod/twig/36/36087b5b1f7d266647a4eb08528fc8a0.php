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

/* Coupon42/README.md */
class __TwigTemplate_01bbc63c906059f37c5bf765b0571810 extends \Eccube\Twig\Template
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
        echo "# クーポンプラグイン

[![CI for Coupon42](https://github.com/EC-CUBE/coupon-plugin/actions/workflows/ci.yml/badge.svg)](https://github.com/EC-CUBE/coupon-plugin/actions/workflows/ci.yml)

## 概要

クーポン機能を追加するプラグイン。  
発行したクーポンコードを入力することで、購入時に割引ができるようになります。  
  
クーポンの割引方法や対象商品は、クーポンごとに設定が可能です。  

### フロント

#### F1:購入時にクーポンを利用することができる
- 購入確認ページからクーポンコードを入力して、クーポンを適用できる。
- クーポンによる割引は「値引き」として表示、計算する。
- 合計金額を超える定額値引きクーポンは使用できない。

#### F2:クーポンの利用制限
- 会員は、一度利用したクーポンを再度利用することはできない。
- ゲストは、一度利用したクーポンを同じメールアドレスで使用することはできない。

#### F3:購入後に利用したクーポンを確認することができる
- マイページの購入履歴に、利用したクーポンコードを表示する。
- 受注メールに、利用したクーポンコードを表示する。
- クーポンによる割引は「値引き」として表示する。

### 管理画面

#### A1:クーポンを新規発行することができる
設定可能なパラメータ

| パラメータ     | 選択                 | 説明                                                             |
|----------------|----------------------|------------------------------------------------------------------|
| クーポンコード |                      | 購入時にお客様が入力するクーポンコード                           |
| クーポン名     |                      | 購入履歴、受注メールでの表示用                                   |
| 対象商品       | 商品,カテゴリ,全商品 | 商品,カテゴリはクーポンごとに指定可能                            |
| 利用制限       | なし,会員のみ        |                                                                  |
| 値引き種別     | 値引き額,値引率      |                                                                  |
| 値引き額(円)   |                      |                                                                  |
| 値引率(％)     |                      |                                                                  |
| 発行枚数       |                      |                                                                  |
| 下限金額(円)   |                      | 対象商品の合計(税込)がこの金額以上の場合にのみクーポンを利用可能 |
| 有効期間       |                      |                                                                  |

#### A2:発行済みのクーポンを編集することができる
- クーポンのパラメータ編集
- 無効/有効の切り替え
- 削除

#### A3:クーポンの利用枚数を確認することができる
- クーポンごとに何回使用されたかを確認することができる。

#### A4:受注詳細ページで利用したクーポンコードを確認することができる
- 利用されたクーポンコードを確認できる。
- クーポンによる割引は「値引き」として計算される。

※[制限]受注内容を編集(商品の追加など)をしても、クーポンの値引き額は再計算しない。手動で値引きを編集する必要あり。

### 計算ロジック

#### 定額
- 商品の小計(税込)から、設定金額を値引きする。
- 合計金額を超える定額値引きクーポンは使用できない

#### 定率
- 対象商品の合計(税込)に、割引率を掛けた金額を値引きする
- 値引き額の計算には税率設定のルールを利用する

## オプション

### ポイント機能との併用について

#### 加算ポイントの計算
- ポイント利用時の加算ポイントについては、基本的には商品単価(税抜)からクーポン割引額を引いた額に適用する
\t- `加算ポイント = (商品単価(税抜) - クーポン割引額) × ポイント付与率`

#### クーポン値引率の適用
- ポイント利用前の合計金額に対してクーポン値引を適用する
\t- `合計金額 = 小計 + 手数料 + 送料`
\t- `クーポン割引額 = 合計金額 × クーポン割引率`
\t- `支払い合計額 = 合計金額 - クーポン割引額 - 利用ポイント`
";
    }

    public function getTemplateName()
    {
        return "Coupon42/README.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/README.md", "/var/www/html/app/Plugin/Coupon42/README.md");
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
