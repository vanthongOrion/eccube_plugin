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

/* MailMagazine42/Repository/MailMagazineSendHistoryRepository.php */
class __TwigTemplate_a703585819fc4bf2efbf35cc6a253a33 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Repository;

use Doctrine\\Persistence\\ManagerRegistry;
use Eccube\\Repository\\AbstractRepository;
use Plugin\\MailMagazine42\\Entity\\MailMagazineSendHistory;
use Eccube\\Doctrine\\Query\\Queries;

/**
 * SendHistoryRepository.
 */
class MailMagazineSendHistoryRepository extends AbstractRepository
{
    /**
     * @var Queries
     */
    protected \$queries;

    /**
     * MailMagazineSendHistoryRepository constructor.
     *
     * @param Queries \$queries
     * @param ManagerRegistry \$registry
     * @param string \$entityClass
     */
    public function __construct(
        Queries \$queries,
        ManagerRegistry \$registry,
        \$entityClass = MailMagazineSendHistory::class
    ) {
        parent::__construct(\$registry, \$entityClass);
        \$this->queries = \$queries;
    }

    /**
     * @param array \$searchData
     *
     * @return \\Doctrine\\ORM\\QueryBuilder
     */
    public function getQueryBuilderBySearchData(\$searchData = [])
    {
        \$qb = \$this->createQueryBuilder('sh')
            ->select('sh');

        // Order By
        \$qb->addOrderBy('sh.start_date', 'DESC');

        return \$this->queries->customize(\$this->getQueryKey(), \$qb, \$searchData);
    }

    /**
     * Get query key
     *
     * @return string
     */
    public function getQueryKey()
    {
        return 'MailMagazineSendHistory.getQueryBuilderBySearchData';
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Repository/MailMagazineSendHistoryRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Repository/MailMagazineSendHistoryRepository.php", "/var/www/html/app/Plugin/MailMagazine42/Repository/MailMagazineSendHistoryRepository.php");
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
