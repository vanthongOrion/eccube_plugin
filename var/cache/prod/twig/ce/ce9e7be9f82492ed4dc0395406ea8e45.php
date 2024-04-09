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

/* Api42/docs/_pages/query/products.md */
class __TwigTemplate_c92bd19aa36097a84254db43299774a6 extends \Eccube\Twig\Template
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
permalink: /query/products
---
## 商品一覧の取得

### Query

```graphql
query {
  products (page: 1, limit: 2) {
    edges {
      node {
        id
        name
        create_date
      }
    }
    nodes {
      id
      name
      create_date
    }
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
    }
  }
}
```

### 取得結果

```json
{
  \"data\": {
    \"products\": {
      \"edges\": [
        {
          \"node\": {
            \"id\": \"532\",
            \"name\": \"はばのしるのです。そして。\",
            \"create_date\": \"2020-07-16T09:49:07+09:00\"
          }
        },
        {
          \"node\": {
            \"id\": \"530\",
            \"name\": \"てってまっ赤にして。\",
            \"create_date\": \"2020-07-16T09:49:06+09:00\"
          }
        }
      ],
      \"nodes\": [
        {
          \"id\": \"532\",
          \"name\": \"はばのしるのです。そして。\",
          \"create_date\": \"2020-07-16T09:49:07+09:00\"
        },
        {
          \"id\": \"530\",
          \"name\": \"てってまっ赤にして。\",
          \"create_date\": \"2020-07-16T09:49:06+09:00\"
        }
      ],
      \"totalCount\": 532,
      \"pageInfo\": {
        \"hasNextPage\": true,
        \"hasPreviousPage\": false
      }
    }
  }
}
```


## 商品IDを指定して商品を取得する

### Query

``` graphql
query {
  product(id:2) {
    id,
    name
  }
}
```

### 取得結果

```json
{
  \"data\": {
    \"product\": {
      \"id\": \"2\",
      \"name\": \"彩のジェラート\"
    }
  }
}
```

";
    }

    public function getTemplateName()
    {
        return "Api42/docs/_pages/query/products.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/docs/_pages/query/products.md", "/var/www/html/app/Plugin/Api42/docs/_pages/query/products.md");
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
