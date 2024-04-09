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

/* Api42/Tests/GraphQL/TypesTest.php */
class __TwigTemplate_3787cf022020cfc5a861517bddaa48c8 extends \Eccube\Twig\Template
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
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\Tests\\GraphQL;

use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\Customer;
use Eccube\\Entity\\Member;
use Eccube\\Entity\\Product;
use Eccube\\Tests\\EccubeTestCase;
use Plugin\\Api42\\GraphQL\\Types;

class TypesTest extends EccubeTestCase
{
    /** @var Types */
    private \$types;

    public function setUp(): void
    {
        parent::setUp();
        \$this->types = self::\$container->get(Types::class);
    }

    /**
     * @dataProvider hideSensitiveFieldsProvider
     */
    public function testHideSensitiveFields(\$entityClass, \$field, \$expectExists)
    {
        \$type = \$this->types->get(\$entityClass);

        self::assertEquals(\$expectExists, \$type->hasField(\$field));
    }

    public function hideSensitiveFieldsProvider()
    {
        return [
            [Product::class, 'name', true],
            [Product::class, 'Creator', true],
            [Customer::class, 'name01', true],
            [Customer::class, 'password', false],
            [Customer::class, 'reset_key', false],
            [Customer::class, 'salt', false],
            [Customer::class, 'secret_key', false],
            [Member::class, 'name', true],
            [Member::class, 'password', false],
            [Member::class, 'salt', false],
            [BaseInfo::class, 'authentication_key', false],
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Tests/GraphQL/TypesTest.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Tests/GraphQL/TypesTest.php", "/var/www/html/app/Plugin/Api42/Tests/GraphQL/TypesTest.php");
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
