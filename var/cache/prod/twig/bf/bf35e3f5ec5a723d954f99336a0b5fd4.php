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

/* Api42/Tests/Web/Admin/OAuth2Bundle/AuthorizationControllerTest.php */
class __TwigTemplate_db13312592861314115431a945e5580a extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\Tests\\Web\\Admin\\OAuth2Bundle;

use Eccube\\Common\\Constant;
use Eccube\\Tests\\Web\\Admin\\AbstractAdminWebTestCase;
use Symfony\\Component\\HttpFoundation\\Response;
use League\\Bundle\\OAuth2ServerBundle\\Model\\Client;

class AuthorizationControllerTest extends AbstractAdminWebTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testRoutingAdminOauth2Authorize_ログインしている場合は権限移譲確認画面を表示()
    {
        /** @var Client \$Client */
        \$Client = \$this->entityManager->getRepository(Client::class)->findOneBy([]);

        \$this->client->request('GET',
                               \$this->generateUrl(
                                   'oauth2_authorize',
                                   [
                                       'client_id' => \$Client->getIdentifier(),
                                       'redirect_uri' => (string) current(\$Client->getRedirectUris()),
                                       'response_type' => 'code',
                                       'scope' => 'read',
                                       'state' => 'xxx',
                                   ]
                               )
        );

        // ログイン
        \$this->assertEquals(
            200,
            \$this->client->getResponse()->getStatusCode()
        );
    }

    public function testRoutingAdminOauth2Authorize_権限移譲を許可()
    {
        /** @var Client \$Client */
        \$Client = \$this->entityManager->getRepository(Client::class)->findOneBy([]);
        \$authorize_url = \$this->generateUrl(
            'oauth2_authorize',
            [
                'client_id' => \$Client->getIdentifier(),
                'redirect_uri' => (string) current(\$Client->getRedirectUris()),
                'response_type' => 'code',
                'scope' => 'read',
                'state' => 'xxx',
            ]
        );

        \$this->client->request('GET', \$authorize_url);

        \$parameters = [
            'oauth_authorization' => [
                'client_id' => \$Client->getIdentifier(),
                'client_secret' => \$Client->getSecret(),
                'redirect_uri' => current(\$Client->getRedirectUris()),
                'response_type' => 'code',
                'scope' => 'read',
                'state' => 'xxx',
                'approve' => '',
                Constant::TOKEN_NAME => 'dummy',
            ],
        ];

        \$this->client->request(
            'POST', \$authorize_url,
            \$parameters
        );

        /** @var Response \$response */
        \$response = \$this->client->getResponse();
        \$this->assertTrue(\$response->isRedirection());

        \$callbackParams = \$this->parseCallbackParams(\$response);

        self::assertFalse(isset(\$callbackParams['error']));
        self::assertTrue(isset(\$callbackParams['code']));
    }

    public function testRoutingAdminOauth2Authorize_権限移譲を許可しない()
    {
        /** @var Client \$Client */
        \$Client = \$this->entityManager->getRepository(Client::class)->findOneBy([]);
        \$authorize_url = \$this->generateUrl(
            'oauth2_authorize',
            [
                'client_id' => \$Client->getIdentifier(),
                'redirect_uri' => (string) current(\$Client->getRedirectUris()),
                'response_type' => 'code',
                'scope' => 'read',
                'state' => 'xxx',
            ]
        );

        \$this->client->request('GET', \$authorize_url);

        \$parameters = [
            'oauth_authorization' => [
                'client_id' => \$Client->getIdentifier(),
                'client_secret' => \$Client->getSecret(),
                'redirect_uri' => current(\$Client->getRedirectUris()),
                'response_type' => 'code',
                'scope' => 'read',
                'state' => 'xxx',
                'deny' => '',
                Constant::TOKEN_NAME => 'dummy',
            ],
        ];

        \$this->client->request(
            'POST', \$authorize_url,
            \$parameters
        );

        /** @var Response \$response */
        \$response = \$this->client->getResponse();
        \$this->assertTrue(\$response->isRedirection());

        \$redirectUrl = \$response->headers->get('Location');
        self::assertStringStartsWith((string) \$Client->getRedirectUris()[0], \$redirectUrl);

        \$callbackParams = \$this->parseCallbackParams(\$response);
        self::assertEquals('access_denied', \$callbackParams['error']);
    }

    public function testRoutingAdminOauth2Authorize_権限移譲を許可_パラメータが足りない場合()
    {
        \$parameters = [
            'oauth_authorization' => [
                'client_id' => '',
                'client_secret' => '',
                'redirect_uri' => '',
                'response_type' => '',
                'state' => '',
                'scope' => '',
                Constant::TOKEN_NAME => '',
            ],
        ];

        \$this->client->request(
            'POST', \$this->generateUrl('oauth2_authorize'),
            \$parameters
        );

        \$this->assertFalse(\$this->client->getResponse()->isRedirection());
    }

    private function parseCallbackParams(Response \$response)
    {
        \$url = parse_url(\$response->headers->get('Location'));
        \$redirectParams = [];
        parse_str(\$url['query'], \$redirectParams);

        return \$redirectParams;
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Tests/Web/Admin/OAuth2Bundle/AuthorizationControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Tests/Web/Admin/OAuth2Bundle/AuthorizationControllerTest.php", "/var/www/html/app/Plugin/Api42/Tests/Web/Admin/OAuth2Bundle/AuthorizationControllerTest.php");
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
