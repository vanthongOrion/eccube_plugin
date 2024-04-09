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

/* Coupon42/phpunit.xml.dist */
class __TwigTemplate_68e9c639f0e2dd7b19d27098034c6232 extends \Eccube\Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"http://schema.phpunit.de/6.5/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"Tests/bootstrap.php\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
        <env name=\"KERNEL_CLASS\" value=\"Eccube\\Kernel\" />
        <env name=\"APP_ENV\" value=\"test\" />
        <env name=\"APP_DEBUG\" value=\"1\" />
        <env name=\"SHELL_VERBOSITY\" value=\"-1\" />
        <env name=\"SYMFONY_DEPRECATIONS_HELPER\" value=\"weak\" />
        <env name=\"SYMFONY_PHPUNIT_VERSION\" value=\"9.5\" />
        <!-- define your env variables for the test env here -->
    </php>

    <!-- テストの場所 -->
    <testsuites>
        <testsuite name=\"Plugin Test Suite\">
            <directory>./Tests</directory>
        </testsuite>
    </testsuites>

    <!-- 出力するログファイル
    <logging>
        <log type=\"coverage-clover\" target=\"./reports/coverage.clover\"/>
    </logging>
    -->

    <!-- カバーレージのターゲット -->
    <filter>
        <whitelist processUncoveredFilesFromWhitelist=\"true\">
            <directory suffix=\".php\">./</directory>
            <exclude>
                <directory suffix=\".php\">./Tests</directory>
                <directory suffix=\".php\">./Resource</directory>
                <file>./PluginManager.php</file>
            </exclude>
        </whitelist>
    </filter>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
        <listener class=\"\\DAMA\\DoctrineTestBundle\\PHPUnit\\PHPUnitListener\" />
    </listeners>
</phpunit>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/phpunit.xml.dist", "/var/www/html/app/Plugin/Coupon42/phpunit.xml.dist");
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
