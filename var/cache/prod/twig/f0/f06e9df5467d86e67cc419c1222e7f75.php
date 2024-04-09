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

/* Api42/PluginManager.php */
class __TwigTemplate_f3d927a5c4a57276cede1a38801c6dd5 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42;

use Doctrine\\ORM\\EntityManager;
use Eccube\\Entity\\AuthorityRole;
use Eccube\\Entity\\Master\\Authority;
use Eccube\\Plugin\\AbstractPluginManager;
use Eccube\\Repository\\AuthorityRoleRepository;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class PluginManager extends AbstractPluginManager
{
    private \$denyUrl = '/api';

    /**
     * {@inheritdoc}
     */
    public function enable(array \$meta, ContainerInterface \$container)
    {
        \$this->createAuthorityRole(\$container);
    }

    /**
     * {@inheritdoc}
     */
    public function disable(array \$meta, ContainerInterface \$container)
    {
        \$this->removeAuthorityRole(\$container);
    }

    private function createAuthorityRole(ContainerInterface \$container)
    {
        /** @var EntityManager \$entityManager */
        \$entityManager = \$container->get('doctrine')->getManager();

        /** @var Authority \$Authority */
        \$Authority = \$entityManager->find(Authority::class, Authority::OWNER);

        \$AuthorityRole = new AuthorityRole();
        \$AuthorityRole->setAuthority(\$Authority);
        \$AuthorityRole->setDenyUrl(\$this->denyUrl);

        \$entityManager->persist(\$AuthorityRole);
        \$entityManager->flush(\$AuthorityRole);
    }

    private function removeAuthorityRole(ContainerInterface \$container)
    {
        /** @var EntityManager \$entityManager */
        \$entityManager = \$container->get('doctrine')->getManager();

        /** @var AuthorityRoleRepository \$AuthorityRoleRepository */
        \$AuthorityRoleRepository = \$entityManager->getRepository(AuthorityRole::class);

        \$AuthorityRole = \$AuthorityRoleRepository->findOneBy(['deny_url' => \$this->denyUrl]);

        if (!is_null(\$AuthorityRole)) {
            \$entityManager->remove(\$AuthorityRole);
            \$entityManager->flush(\$AuthorityRole);
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/PluginManager.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/PluginManager.php", "/var/www/html/app/Plugin/Api42/PluginManager.php");
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
