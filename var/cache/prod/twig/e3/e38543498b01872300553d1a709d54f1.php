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

/* Api42/Tests/Web/ApiControllerTest.php */
class __TwigTemplate_ca9e85d4a24381da3a26d587b25209fe extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\Tests\\Web;

use Eccube\\Tests\\Web\\AbstractWebTestCase;
use League\\OAuth2\\Server\\AuthorizationServer;
use League\\OAuth2\\Server\\CryptKey;
use League\\OAuth2\\Server\\Repositories\\AccessTokenRepositoryInterface;
use League\\OAuth2\\Server\\Repositories\\ClientRepositoryInterface;
use League\\Bundle\\OAuth2ServerBundle\\Entity\\AccessToken;
use League\\Bundle\\OAuth2ServerBundle\\Entity\\Scope;
use League\\Bundle\\OAuth2ServerBundle\\Manager\\Doctrine\\ClientManager;
use League\\Bundle\\OAuth2ServerBundle\\Model\\Client;

class ApiControllerTest extends AbstractWebTestCase
{
    /** @var ClientManager */
    private \$clientManager;

    /** @var ClientRepositoryInterface */
    private \$clientRepository;

    /** @var AccessTokenRepositoryInterface */
    private \$accessTokenRepository;

    /** @var AuthorizationServer */
    private \$authorizationServer;

    public function setUp(): void
    {
        parent::setUp();
        \$this->clientManager = self::\$container->get(ClientManager::class);
        \$this->clientRepository = self::\$container->get(ClientRepositoryInterface::class);
        \$this->accessTokenRepository = self::\$container->get(AccessTokenRepositoryInterface::class);
        \$this->authorizationServer = self::\$container->get(AuthorizationServer::class);
    }

    /**
     * @dataProvider permissionProvider
     */
    public function testPermission(\$scopes, \$query, \$expectedErrorMessage = null)
    {
        \$token = \$this->newAccessToken(\$scopes);
        \$this->client->request('POST', \$this->generateUrl('api'), [], [], [
            'HTTP_AUTHORIZATION' => 'Bearer '.\$token,
        ], json_encode(['query' => \$query]));

        self::assertEquals(200, \$this->client->getResponse()->getStatusCode());

        \$payload = json_decode(\$this->client->getResponse()->getContent(), true);

        if (\$expectedErrorMessage) {
            self::assertEquals(\$expectedErrorMessage, \$payload['errors'][0]['message']);
        } else {
            self::assertFalse(isset(\$payload['errors']));
        }
    }

    public function permissionProvider()
    {
        \$query = '{ product(id:1) { id, name } }';
        \$mutation = 'mutation { updateProductStock(code: \"sand-01\", stock: 10, stock_unlimited:false) { id } }';

        return [
            [['read'],  \$query],
            [['write'], \$query, 'Insufficient permission. (read)'],
            [['read', 'write'], \$query],
            [['read'], \$mutation, 'Insufficient permission. (read,write)'],
            [['write'], \$mutation, 'Insufficient permission. (read,write)'],
            [['read', 'write'], \$mutation],
        ];
    }

    private function newAccessToken(\$scopes)
    {
        \$identifier = hash('md5', random_bytes(16));
        \$secret = hash('sha512', random_bytes(32));

        \$client = new Client('', \$identifier, \$secret);
        \$client->setScopes(...array_map(function (\$s) {
            return new \\League\\Bundle\\OAuth2ServerBundle\\Model\\Scope(\$s);
        }, \$scopes));
        \$this->clientManager->save(\$client);
        \$clientEntity = \$this->clientRepository->getClientEntity(\$identifier, 'authorization_code', \$secret);

        \$accessTokenEntity = new AccessToken();
        \$accessTokenEntity->setIdentifier(\$identifier);
        \$accessTokenEntity->setClient(\$clientEntity);
        \$accessTokenEntity->setExpiryDateTime(new \\DateTimeImmutable('+1 days', new \\DateTimeZone('Asia/Tokyo')));
        \$accessTokenEntity->setUserIdentifier('admin');
        \$accessTokenEntity->setPrivateKey(new CryptKey(self::\$container->getParameter('kernel.project_dir').'/app/PluginData/Api42/oauth/private.key'));

        array_walk(\$scopes, function (\$s) use (\$accessTokenEntity) {
            \$scope = new Scope();
            \$scope->setIdentifier(\$s);
            \$accessTokenEntity->addScope(\$scope);
        });
        \$this->accessTokenRepository->persistNewAccessToken(\$accessTokenEntity);

        return \$accessTokenEntity->__toString();
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Tests/Web/ApiControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Tests/Web/ApiControllerTest.php", "/var/www/html/app/Plugin/Api42/Tests/Web/ApiControllerTest.php");
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
