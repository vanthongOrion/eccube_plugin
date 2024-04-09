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

/* Api42/GraphQL/ScopeValidationRule.php */
class __TwigTemplate_71ce614cc08930b14b2e45b46da0dd29 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\GraphQL;

use GraphQL\\Error\\Error;
use GraphQL\\Language\\AST\\NodeKind;
use GraphQL\\Language\\AST\\OperationDefinitionNode;
use GraphQL\\Validator\\Rules\\ValidationRule;
use GraphQL\\Validator\\ValidationContext;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;

class ScopeValidationRule extends ValidationRule
{
    /**
     * @var AuthorizationCheckerInterface
     */
    private \$authorizationChecker;

    /**
     * ScopeValidationRule constructor.
     */
    public function __construct(AuthorizationCheckerInterface \$authorizationChecker)
    {
        \$this->authorizationChecker = \$authorizationChecker;
    }

    public function getVisitor(ValidationContext \$context)
    {
        return [
            NodeKind::OPERATION_DEFINITION => function (OperationDefinitionNode \$def) use (\$context) {
                if (\$def->operation === 'query' && !\$this->authorizationChecker->isGranted('ROLE_OAUTH2_READ')) {
                    \$context->reportError(new Error('Insufficient permission. (read)'));
                } elseif (\$def->operation === 'mutation'
                          && !(\$this->authorizationChecker->isGranted('ROLE_OAUTH2_READ') && \$this->authorizationChecker->isGranted('ROLE_OAUTH2_WRITE'))) {
                    \$context->reportError(new Error('Insufficient permission. (read,write)'));
                }
            },
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/GraphQL/ScopeValidationRule.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/GraphQL/ScopeValidationRule.php", "/var/www/html/app/Plugin/Api42/GraphQL/ScopeValidationRule.php");
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
