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

/* SiteKit42/Service/Google_Site_Kit_Proxy_Client.php */
class __TwigTemplate_b5508e51c1b393217182ed227e3dba55 extends \Eccube\Twig\Template
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

namespace Plugin\\SiteKit42\\Service;

use Exception;
use Google\\Auth\\HttpHandler\\HttpHandlerFactory;
use Google\\Auth\\OAuth2;
use GuzzleHttp\\Psr7;
use GuzzleHttp\\Psr7\\Request;

/**
 * Modified Google Site Kit API client relying on the authentication proxy.
 *
 * @since 1.0.0
 * @since 1.2.0 Renamed to Google_Site_Kit_Proxy_Client.
 * @ignore
 */
class Google_Site_Kit_Proxy_Client extends Google_Site_Kit_Client
{
    const BASE_URL = 'https://sitekit.withgoogle.com/';
    const OAUTH2_SITE_URI = '/o/oauth2/site/';
    const OAUTH2_REVOKE_URI = '/o/oauth2/revoke/';
    const OAUTH2_TOKEN_URI = '/o/oauth2/token/';
    const OAUTH2_AUTH_URI = '/o/oauth2/auth/';
    const SETUP_URI = '/site-management/setup/';
    const PERMISSIONS_URI = '/site-management/permissions/';
    const ACTION_SETUP = 'googlesitekit_proxy_setup';

    /**
     * Base URL to the proxy.
     *
     * @since 1.1.2
     *
     * @var string
     */
    protected \$proxy_base_path = self::BASE_URL;

    /**
     * Construct the Google client.
     *
     * @since 1.1.2
     *
     * @param array \$config Proxy client configuration.
     */
    public function __construct(array \$config = [])
    {
        if (!empty(\$config['proxy_base_path'])) {
            \$this->setProxyBasePath(\$config['proxy_base_path']);
        }

        unset(\$config['proxy_base_path']);

        parent::__construct(\$config);
    }

    /**
     * Sets the base URL to the proxy.
     *
     * @since 1.2.0
     *
     * @param string \$base_path Proxy base URL.
     */
    public function setProxyBasePath(\$base_path)
    {
        \$this->proxy_base_path = preg_replace('/(.*)\\/*/', '\$1', \$base_path);
    }

    /**
     * Revokes an OAuth2 access token using the authentication proxy.
     *
     * @param string|array|null \$token Optional. Access token. Default is the current one.
     *
     * @return bool True on success, false on failure.
     *
     * @throws Exception
     *
     * @since 1.0.0
     */
    public function revokeToken(\$token = null)
    {
        if (!\$token) {
            \$token = \$this->getAccessToken();
        }
        if (is_array(\$token)) {
            \$token = \$token['access_token'];
        }

        \$body = Psr7\\stream_for(
            http_build_query(
                [
                    'client_id' => \$this->getClientId(),
                    'token' => \$token,
                ]
            )
        );
        \$request = new Request(
            'POST',
            \$this->proxy_base_path.self::OAUTH2_REVOKE_URI,
            [
                'Cache-Control' => 'no-store',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            \$body
        );

        \$http_handler = HttpHandlerFactory::build(\$this->getHttpClient());

        \$response = \$http_handler(\$request);

        return 200 === (int) \$response->getStatusCode();
    }

    /**
     * Creates a Google auth object for the authentication proxy.
     *
     * @since 1.0.0
     */
    protected function createOAuth2Service()
    {
        return new OAuth2(
            [
                'clientId' => \$this->getClientId(),
                'clientSecret' => \$this->getClientSecret(),
                'authorizationUri' => \$this->proxy_base_path.self::OAUTH2_AUTH_URI,
                'tokenCredentialUri' => \$this->proxy_base_path.self::OAUTH2_TOKEN_URI,
                'redirectUri' => \$this->getRedirectUri(),
                'issuer' => \$this->getClientId(),
                'signingKey' => null,
                'signingAlgorithm' => null,
            ]
        );
    }
}
";
    }

    public function getTemplateName()
    {
        return "SiteKit42/Service/Google_Site_Kit_Proxy_Client.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Service/Google_Site_Kit_Proxy_Client.php", "/var/www/html/app/Plugin/SiteKit42/Service/Google_Site_Kit_Proxy_Client.php");
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
