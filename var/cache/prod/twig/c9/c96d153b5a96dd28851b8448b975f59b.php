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

/* SiteKit42/Controller/Admin/DashboardController.php */
class __TwigTemplate_dad9a1535d6625084cb20ed69b3d5d8c extends \Eccube\Twig\Template
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

namespace Plugin\\SiteKit42\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Plugin\\SiteKit42\\Service\\Google_Site_Kit_Proxy_Client;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class DashboardController extends AbstractController
{
    /**
     * @var Google_Site_Kit_Proxy_Client
     */
    private \$siteKitClient;

    /**
     * DashboardController constructor.
     */
    public function __construct(Google_Site_Kit_Proxy_Client \$siteKitClient)
    {
        \$this->siteKitClient = \$siteKitClient;
    }

    /**
     * @Route(\"/%eccube_admin_route%/site_kit/dashboard\", name=\"site_kit_dashboard\")
     * @Template(\"@SiteKit42/admin/dashboard.twig\")
     */
    public function showGoogleSearchData()
    {
        \$Member = \$this->getUser();
        if (is_null(\$Member->getIdToken())) {
            return \$this->redirectToRoute('site_kit42_admin_config');
        }

        \$jsonQuery = \$this->getJsonFromGoogleSearchData('query');
        \$jsonPage = \$this->getJsonFromGoogleSearchData('page');
        \$jsonDate = \$this->getJsonFromGoogleSearchData('date', null);

        \$arrayResponse = json_decode(\$jsonDate, true);
        if (!array_key_exists('rows', \$arrayResponse)) {
            \$arrayResponse['rows'] = [];
        }

        \$arrayDate = array_map(function (\$row) {
            \$array[] = \$row['keys'][0];
            \$array[] = \$row['clicks'];
            \$array[] = \$row['impressions'];

            return \$array;
        }, \$arrayResponse['rows']);
        \$header = [['Date', 'Clicks', 'Impression']];
        \$arrayDate = array_merge(\$header, \$arrayDate);

        return [
            'json_query' => \$this->formatJson(\$jsonQuery),
            'json_page' => \$this->formatJson(\$jsonPage),
            'json_date' => \$arrayDate,
            'ownedSiteUrl' => \$this->getSiteUrl(),
        ];
    }

    private function getJsonFromGoogleSearchData(\$dimension, \$rowLimit = '10')
    {
        \$startDate = date('Y-m-d', strtotime('-29 days'));
        \$endDate = date('Y-m-d', strtotime('-1 days'));

        \$json = [
            'dimensions' => [\$dimension],
            'startDate' => \$startDate,
            'endDate' => \$endDate,
            'rowLimit' => \$rowLimit,
        ];
        \$httpClient = \$this->siteKitClient->authorize();
        \$endpoint = 'https://www.googleapis.com/webmasters/v3/sites/'.urlencode(\$this->getSiteUrl()).'/searchAnalytics/query';
        \$response = \$httpClient->request('POST', \$endpoint, ['json' => \$json]);

        return \$response->getBody()->getContents();
    }

    public function formatJson(\$responseBody)
    {
        \$arrayResponse = json_decode(\$responseBody, true);
        if (!array_key_exists('rows', \$arrayResponse)) {
            \$arrayResponse['rows'] = [];
        }

        \$arrayResponse['rows'] = array_map(function (\$row) {
            \$row['ctr'] = sprintf('%.2f', round(\$row['ctr'], 2));
            \$row['position'] = sprintf('%.1f', round(\$row['position'], 1));

            return \$row;
        }, \$arrayResponse['rows']);

        return \$arrayResponse;
    }

    private function getSiteUrl()
    {
        return env('SITE_KIT_OWNED_SITE_URL', \$this->generateUrl('homepage', [], UrlGeneratorInterface::ABSOLUTE_URL));
    }
}
";
    }

    public function getTemplateName()
    {
        return "SiteKit42/Controller/Admin/DashboardController.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Controller/Admin/DashboardController.php", "/var/www/html/app/Plugin/SiteKit42/Controller/Admin/DashboardController.php");
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
