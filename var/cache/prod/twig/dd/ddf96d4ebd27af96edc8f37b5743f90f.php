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

/* Api42/GraphQL/Types.php */
class __TwigTemplate_3d8c95f1badf4a68aee4792a1572f7e2 extends \Eccube\Twig\Template
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

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use GraphQL\\Type\\Definition\\ObjectType;
use GraphQL\\Type\\Definition\\Type;
use Plugin\\Api42\\GraphQL\\Type\\Definition\\DateTimeType;

/**
 * DoctrineのEntityからGraphQLのObjectTypeを変換するクラス.
 */
class Types
{
    /** @var EntityManager */
    private \$entityManager;

    private \$types = [];

    private \$allowLists = [];

    /**
     * Types constructor.
     */
    public function __construct(EntityManager \$entityManager)
    {
        \$this->entityManager = \$entityManager;
    }

    public function addAllowList(AllowList \$allowList)
    {
        \$this->allowLists[] = \$allowList;
    }

    /**
     * Entityに対応するObjectTypeを返す.
     *
     * @param \$className string Entityクラス名
     *
     * @return ObjectType
     */
    public function get(\$className)
    {
        if (!isset(\$this->types[\$className])) {
            \$this->types[\$className] = \$this->createObjectType(\$className);
        }

        return \$this->types[\$className];
    }

    private function createObjectType(\$className)
    {
        return new ObjectType([
            'name' => (new \\ReflectionClass(\$className))->getShortName(),
            'fields' => function () use (\$className) {
                \$classMetadata = \$this->entityManager->getClassMetadata(\$className);
                \$fields = array_reduce(\$classMetadata->fieldMappings, function (\$acc, \$mapping) use (\$classMetadata) {
                    \$type = \$this->convertFieldMappingToType(\$mapping);
                    \$fieldName = \$mapping['fieldName'];

                    \$allowed = array_filter(\$this->allowLists, function (AllowList \$al) use (\$classMetadata, \$fieldName) {
                        return \$al->isAllowed(\$classMetadata->name, \$fieldName);
                    });

                    if (\$allowed && \$type) {
                        \$acc[\$fieldName] = \$type;
                    }

                    return \$acc;
                }, []);

                \$fields = array_reduce(\$classMetadata->associationMappings, function (\$acc, \$mapping) use (\$classMetadata) {
                    \$fieldName = \$mapping['fieldName'];

                    \$allowed = array_filter(\$this->allowLists, function (AllowList \$al) use (\$classMetadata, \$fieldName) {
                        return \$al->isAllowed(\$classMetadata->name, \$fieldName);
                    });

                    if (\$allowed) {
                        \$acc[\$fieldName] = [
                            'type' => \$this->convertAssociationMappingToType(\$mapping),
                        ];
                    }

                    return \$acc;
                }, \$fields);

                return \$fields;
            },
        ]);
    }

    private function convertFieldMappingToType(\$fieldMapping)
    {
        \$type = isset(\$fieldMapping['id']) ? Type::id() : [
            'string' => Type::string(),
            'text' => Type::string(),
            'integer' => Type::int(),
            'decimal' => Type::float(),
            'datetimetz' => DateTimeType::dateTime(),
            'smallint' => Type::int(),
            'boolean' => Type::boolean(),
        ][\$fieldMapping['type']];

        if (\$type) {
            return \$fieldMapping['nullable'] ? \$type : Type::nonNull(\$type);
        }

        return null;
    }

    private function convertAssociationMappingToType(\$mapping)
    {
        return \$this->isToManyAssociation(\$mapping) ? Type::listOf(\$this->get(\$mapping['targetEntity'])) : \$this->get(\$mapping['targetEntity']);
    }

    private function isToManyAssociation(\$mapping)
    {
        return \$mapping['type'] & ClassMetadata::TO_MANY;
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/GraphQL/Types.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/GraphQL/Types.php", "/var/www/html/app/Plugin/Api42/GraphQL/Types.php");
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
