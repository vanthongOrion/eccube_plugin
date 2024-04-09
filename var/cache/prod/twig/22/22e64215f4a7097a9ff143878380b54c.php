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

/* Api42/docs/_pages/webhook.md */
class __TwigTemplate_ca59a87bd668c85e422954aceeabb21f extends \Eccube\Twig\Template
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
        echo "---
permalink: /webhook
---

## WebHook による通知

商品/受注/会員情報の変更時(登録/更新/削除)に登録されたWebHookに対して変更を通知します。

### 通知リクエスト

以下のようなコマンドと同等の内容を送信します。

```
curl \\
    -X POST \\
    --header \"Content-Type: application/json\" \\
    --header 'X-ECCUBE-URL': 'https://eccube.exampel.com/' \\
    --header 'X-ECCUBE-Signature': '1e577a7deaa9df89edeaf060c1032326814f362a74525e2c534751e82a6f802e' \\
    'https://webhook.example.com' \\
    --data '{
                \"entity\": \"product\",
                \"id\": 13,
                \"action\": \"created\"
            },
            {
                \"entity\": \"product\",
                \"id\": 14,
                \"action\": \"created\"
            }'
```

### 対象のEntity

以下のEntityの変更(登録/更新/削除)が対象です。

- product
  - 商品 (Product)
  - 商品規格 (ProductClass)
  - 商品カテゴリ (ProductCategory)
  - 商品タグ (ProductTag)
  - 在庫数 (ProductStock)
  - 商品税率設定 (TaxRule)
  - 商品画像 (ProductImage)
- order
  - 受注 (Order)
  - 受注明細 (OrderItem)
  - 出荷 (Shipping)
  - メール履歴 (MailHistory)
- customer
  - 会員 (Customer)
  - お届け先 (CustomerAddress)
  - お気に入り (CustomerFavoriteProduct)

#### 上記以外のEntityで発火させるカスタマイズ

プラグインやカスタマイズで上記以外の Entity で発火させたい場合は、 `Plugin\\Api42\\Service\\WebHookTrigger` インターフェイスを実装したクラスを定義します。

### 対象のアクション

- 登録: `created`
- 更新: `updated`
- 削除: `deleted`

### シークレット

入力された値をキーにしてペイロードをHMAC-SHA256により署名した値を `X-ECCUBE-Signature` ヘッダーに設定します。

## WebHook側の処理

通知を受け取る側の実装は以下のようにすることを推奨します。

- 素早くレスポンス(200 OK)を返す。受け取った通知をキューに登録して先にレスポンスを返すようにする。処理はレスポンスを返したあとに実行する。
- 空のレスポンスを返す。EC-CUBE側ではレスポンスボディの内容は無視します。
";
    }

    public function getTemplateName()
    {
        return "Api42/docs/_pages/webhook.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/docs/_pages/webhook.md", "/var/www/html/app/Plugin/Api42/docs/_pages/webhook.md");
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
