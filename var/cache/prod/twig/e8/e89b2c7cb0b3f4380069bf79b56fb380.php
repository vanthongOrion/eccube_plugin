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

/* Securitychecker42/README.md */
class __TwigTemplate_09cc293c1b67eb62122364ee0b630375 extends \Eccube\Twig\Template
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
        echo "# EC-CUBE セキュリティチェックプラグイン(4系)

[![CI for Securitychecker4](https://github.com/EC-CUBE/securitychecker-plugin/actions/workflows/main.yml/badge.svg)](https://github.com/EC-CUBE/securitychecker-plugin/actions/workflows/main.yml)

このモジュールは、 [EC-CUBEセキュリティチェックリスト](https://www.ec-cube.net/news/detail.php?news_id=349) に基づき、EC-CUBEの運用状況を確認するものです。

## 対象バージョン

- EC-CUBE4系

## チェック内容

- 意図しないディレクトリ・ファイルの露出(対応優先度: 必須)
- デバッグモードの無効化(対応優先度: 必須)
- SSLの導入(対応優先度: 必須)
";
    }

    public function getTemplateName()
    {
        return "Securitychecker42/README.md";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Securitychecker42/README.md", "/var/www/html/app/Plugin/Securitychecker42/README.md");
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
