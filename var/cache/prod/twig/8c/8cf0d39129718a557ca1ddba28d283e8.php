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

/* Api42/DependencyInjection/Compiler/ApiCompilerPass.php */
class __TwigTemplate_9502652c81ed35d1217fbc700ca460b2 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\DependencyInjection\\Compiler;

use League\\OAuth2\\Server\\CryptKey;
use Plugin\\Api42\\GraphQL\\AllowList;
use Plugin\\Api42\\GraphQL\\Mutation;
use Plugin\\Api42\\GraphQL\\Query;
use Plugin\\Api42\\GraphQL\\Types;
use Plugin\\Api42\\Service\\WebHookEvents;
use Plugin\\Api42\\Service\\WebHookTrigger;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ApiCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$this->configureTrigger(\$container);
        \$this->configureAllowList(\$container);
        \$this->configureKeyPair(\$container);
        \$this->configureSchema(\$container);

        \$plugins = \$container->getParameter('eccube.plugins.enabled');
        if (!in_array('Api42', \$plugins)) {
            if (\$container->hasDefinition('League\\Bundle\\OAuth2ServerBundle\\EventListener\\AddClientDefaultScopesListener')) {
                \$def = \$container->getDefinition('League\\Bundle\\OAuth2ServerBundle\\EventListener\\AddClientDefaultScopesListener');
                \$def->clearTags();
            }
        }
    }

    private function configureSchema(ContainerBuilder \$container)
    {
        \$queriesServiceDef = \$container->getDefinition('api.queries');
        \$mutationsServiceDef = \$container->getDefinition('api.mutations');
        foreach (\$container->getDefinitions() as \$definition) {
            if (is_subclass_of(\$definition->getClass(), Query::class)) {
                \$queriesServiceDef->addMethodCall('append', [\$definition]);
            }
            if (is_subclass_of(\$definition->getClass(), Mutation::class)) {
                \$mutationsServiceDef->addMethodCall('append', [\$definition]);
            }
        }
    }

    private function configureTrigger(ContainerBuilder \$container)
    {
        \$serviceDef = \$container->getDefinition(WebHookEvents::class);
        foreach (\$container->getDefinitions() as \$definition) {
            if (is_subclass_of(\$definition->getClass(), WebHookTrigger::class)) {
                \$serviceDef->addMethodCall('addTrigger', [\$definition]);
            }
        }
    }

    private function configureAllowList(ContainerBuilder \$container)
    {
        \$ids = \$container->findTaggedServiceIds('eccube.api.allow_list');
        \$typesDef = \$container->getDefinition(Types::class);
        foreach (\$ids as \$id => \$tags) {
            \$definition = \$container->getDefinition(\$id);
            \$definition->setClass(AllowList::class);
            \$typesDef->addMethodCall('addAllowList', [new Reference(\$id)]);
        }
    }

    private function configureKeyPair(ContainerBuilder \$container)
    {
        \$projectDir = \$container->getParameter('kernel.project_dir');
        \$oauthConfig = \$container->getExtensionConfig('league_oauth2_server');
        \$oauthConfig = \$container->resolveEnvPlaceholders(\$oauthConfig, true);
        \$privateKey = str_replace('%%kernel.project_dir%%', \$projectDir, \$oauthConfig[0]['authorization_server']['private_key']);
        \$publicKey = str_replace('%%kernel.project_dir%%', \$projectDir, \$oauthConfig[0]['resource_server']['public_key']);

        if (!\$this->isRSAKeyContent(\$privateKey) && !file_exists(\$privateKey)
            && !\$this->isRSAKeyContent(\$publicKey) && !file_exists(\$publicKey)) {
            \$this->generateKeys(\$privateKey, \$publicKey);
        }
    }

    private function isRSAKeyContent(\$string)
    {
        return preg_match(CryptKey::RSA_KEY_PATTERN, \$string);
    }

    private function generateKeys(\$privateKeyPath, \$publicKeyPath)
    {
        if (false === function_exists('openssl_pkey_new')) {
            throw new \\RuntimeException('OpenSSL extension not available');
        }

        \$res = openssl_pkey_new([
            'digest_alg' => 'sha512',
            'private_key_bits' => 4096,
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
        ]);

        openssl_pkey_export(\$res, \$privateKey);

        \$publicKey = openssl_pkey_get_details(\$res)['key'];

        foreach ([\$privateKeyPath, \$publicKeyPath] as \$file) {
            \$dir = dirname(\$file);
            if (!file_exists(\$dir) && !mkdir(\$dir, 0755, true) && !is_dir(\$dir)) {
                throw new \\RuntimeException(sprintf('Directory \"%s\" was not created', \$dir));
            }
        }

        if (false === file_put_contents(\$privateKeyPath, \$privateKey)) {
            throw new \\RuntimeException('File \"%s\" was not created', \$privateKeyPath);
        }

        if (false === file_put_contents(\$publicKeyPath, \$publicKey)) {
            throw new \\RuntimeException('File \"%s\" was not created', \$publicKeyPath);
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/DependencyInjection/Compiler/ApiCompilerPass.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/DependencyInjection/Compiler/ApiCompilerPass.php", "/var/www/html/app/Plugin/Api42/DependencyInjection/Compiler/ApiCompilerPass.php");
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
