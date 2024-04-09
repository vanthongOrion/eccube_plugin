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

/* Api42/docs/_pages/mutation/product_stock.md */
class __TwigTemplate_dadf5bb923cc2ad002c136dddbb2b38e extends \Eccube\Twig\Template
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
permalink: /mutation/product_stock
---

## 商品在庫の更新

updateProductStock で商品在庫の更新ができます。
`stock_unlimited: false` の場合は `stock` が必須、`stock_unlimited: true` の場合は `stock` を指定できません。

### スキーマ

```graphql
type Mutation {
  updateProductStock(
    \"\"\"商品コード\"\"\"
    code: String!

    \"\"\"在庫数（在庫無制限の場合、0以上の数値を指定）\"\"\"
    stock: Int

    \"\"\"在庫無制限（無制限は true 、制限は false を指定）\"\"\"
    stock_unlimited: Boolean!
  ): ProductClass
}
```

### 実行例

#### リクエスト（在庫有限）

```graphql
mutation {
  updateProductStock (
    code: \"sand-01\",
    stock: 10,
    stock_unlimited: false
  ) {
    code
    stock
    stock_unlimited
  }
}
```

#### レスポンス（在庫有限）

```json
{
  \"data\": {
    \"updateProductStock\": {
      \"code\": \"sand-01\",
      \"stock\": 10,
      \"stock_unlimited\": false,
    }
  }
}
```

#### リクエスト（在庫無限）

```graphql
mutation {
  updateProductStock (
    code: \"sand-01\",
    stock_unlimited: true
  ) {
    code
    stock
    stock_unlimited
  }
}
```

#### レスポンス（在庫無限）

```json
{
  \"data\": {
    \"updateProductStock\": {
      \"code\": \"sand-01\",
      \"stock\": null,
      \"stock_unlimited\": true,
    }
  }
}
```

#### Variables を利用したリクエスト例

```graphql
mutation UpdateProductStock(
    \$code: String!,
    \$stock: Int,
    \$unlimited: Boolean!
  ){
  updateProductStock (
    code: \$code,
    stock: \$stock,
    stock_unlimited: \$unlimited
  ) {
    code
    stock
    stock_unlimited
  }
}
```

```json
{
\t\"code\": \"sand-01\",
\t\"stock\": 10,
\t\"unlimited\": false
}
```
";
    }

    public function getTemplateName()
    {
        return "Api42/docs/_pages/mutation/product_stock.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/docs/_pages/mutation/product_stock.md", "/var/www/html/app/Plugin/Api42/docs/_pages/mutation/product_stock.md");
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
