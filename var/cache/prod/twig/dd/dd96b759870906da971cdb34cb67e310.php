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

/* Api42/Command/DumpSchemaCommand.php */
class __TwigTemplate_e3a41d56400baf629aedc3db01e1941b extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\Command;

use GraphQL\\Utils\\SchemaPrinter;
use Plugin\\Api42\\GraphQL\\Schema;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class DumpSchemaCommand extends Command
{
    protected static \$defaultName = 'eccube:api:dump-schema';

    /**
     * @var Schema
     */
    private \$schema;

    /**
     * DumpSchemaCommand constructor.
     */
    public function __construct(Schema \$schema)
    {
        parent::__construct();
        \$this->schema = \$schema;
    }

    protected function configure()
    {
        \$this->addArgument('type', InputArgument::OPTIONAL, 'Type name to dump schema')
            ->setDescription('Dump GraphQL schema.');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$type = \$input->getArgument('type');
        if (\$type) {
            \$output->writeln(SchemaPrinter::printType(\$this->schema->getType(\$type)));
        } else {
            \$output->writeln(SchemaPrinter::doPrint(\$this->schema));
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Command/DumpSchemaCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Command/DumpSchemaCommand.php", "/var/www/html/app/Plugin/Api42/Command/DumpSchemaCommand.php");
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
