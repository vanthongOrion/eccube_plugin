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

/* Api42/docs/_pages/query/customers.md */
class __TwigTemplate_84a70a5b0a655e445be7a9c186b9ef3e extends \Eccube\Twig\Template
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
permalink: /query/customers
---
## 顧客一覧の取得

```graphql
query {
  customers (page: 1, limit: 3, multi: \"440\", customer_status: [\"3\"]) {
    nodes {
      id
      name01
      name02
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
    \"customers\": {
      \"nodes\": [
        {
          \"id\": \"440\",
          \"name01\": \"山口\",
          \"name02\": \"さゆり\"
        }
      ],
      \"totalCount\": 1,
      \"pageInfo\": {
        \"hasNextPage\": false,
        \"hasPreviousPage\": false
      }
    }
  }
}
```

## 顧客IDを指定して顧客を取得する

### Query

``` graphql
query {
  customer(id:2) {
    id,
    name01
  }
}
```

### 取得結果

```json
{
  \"data\": {
    \"customer\": {
      \"id\": \"2\",
      \"name01\": \"山口\"
    }
  }
}

```
";
    }

    public function getTemplateName()
    {
        return "Api42/docs/_pages/query/customers.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/docs/_pages/query/customers.md", "/var/www/html/app/Plugin/Api42/docs/_pages/query/customers.md");
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
