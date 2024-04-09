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

/* SalesReport42/Controller/SalesReportController.php */
class __TwigTemplate_359f803a9509d3b895d995c7281d8d09 extends \Eccube\Twig\Template
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

namespace Plugin\\SalesReport42\\Controller;

use Eccube\\Controller\\AbstractController;
use Plugin\\SalesReport42\\Form\\Type\\SalesReportType;
use Plugin\\SalesReport42\\Service\\SalesReportService;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * Class SalesReportController.
 */
class SalesReportController extends AbstractController
{
    /** @var SalesReportService */
    protected \$salesReportService;

    /**
     * SalesReportController constructor.
     *
     * @param SalesReportService \$salesReportService
     */
    public function __construct(SalesReportService \$salesReportService)
    {
        \$this->salesReportService = \$salesReportService;
    }

    /**
     * 期間別集計.
     *
     * @param Request \$request
     * @Route(\"%eccube_admin_route%/plugin/sales_report/term\", name=\"sales_report_admin_term\")
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function term(Request \$request)
    {
        return \$this->response(\$request, 'term');
    }

    /**
     * 商品別集計.
     *
     * @param Request \$request
     * @Route(\"%eccube_admin_route%/plugin/sales_report/product\", name=\"sales_report_admin_product\")
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function product(Request \$request)
    {
        return \$this->response(\$request, 'product');
    }

    /**
     * 年代別集計.
     *
     * @param Request \$request
     * @Route(\"%eccube_admin_route%/plugin/sales_report/age\", name=\"sales_report_admin_age\")
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function age(Request \$request)
    {
        return \$this->response(\$request, 'age');
    }

    /**
     * 商品CSVの出力.
     *
     * @param Request \$request
     * @param string \$type
     * @Route(\"%eccube_admin_route%/plugin/sales_report/export/{type}\", name=\"sales_report_admin_export\", methods={\"POST\"})
     *
     * @return StreamedResponse
     */
    public function export(Request \$request, \$type)
    {
        set_time_limit(0);
        \$response = new StreamedResponse();
        \$session = \$request->getSession();
        if (\$session->has('eccube.admin.sales_report.export')) {
            \$searchData = \$session->get('eccube.admin.sales_report.export');
        } else {
            \$searchData = [];
        }

        \$data = [
            'graph' => null,
            'raw' => null,
        ];

        // Query data from database
        if (\$searchData) {
            if (\$searchData['term_end']) {
                \$searchData['term_end'] = \$searchData['term_end']->modify('- 1 day');
            }
            \$data = \$this->salesReportService
                ->setReportType(\$type)
                ->setTerm(\$searchData['term_type'], \$searchData)
                ->getData();
        }

        \$response->setCallback(function () use (\$data, \$request, \$type) {
            \$exportSeparator = \$this->eccubeConfig['eccube_csv_export_separator'];
            \$exportEncoding = \$this->eccubeConfig['eccube_csv_export_encoding'];
            // Export data by type
            switch (\$type) {
                case 'term':
                    \$this->salesReportService->exportTermCsv(\$data['raw'], \$exportSeparator, \$exportEncoding);
                    break;
                case 'product':
                    \$this->salesReportService->exportProductCsv(\$data['raw'], \$exportSeparator, \$exportEncoding);
                    break;
                case 'age':
                    \$this->salesReportService->exportAgeCsv(\$data['raw'], \$exportSeparator, \$exportEncoding);
                    break;
                default:
                    \$this->salesReportService->exportTermCsv(\$data['raw'], \$exportSeparator, \$exportEncoding);
            }
        });

        // Set filename by type
        \$now = new \\DateTime();
        switch (\$type) {
            case 'term':
                \$filename = 'salesreport_term_'.\$now->format('YmdHis').'.csv';
                break;
            case 'product':
                \$filename = 'salesreport_product_'.\$now->format('YmdHis').'.csv';
                break;
            case 'age':
                \$filename = 'salesreport_age_'.\$now->format('YmdHis').'.csv';
                break;
            default:
                \$filename = 'salesreport_term_'.\$now->format('YmdHis').'.csv';
        }

        \$response->headers->set('Content-Type', 'application/octet-stream;');
        \$response->headers->set('Content-Disposition', 'attachment; filename='.\$filename);

        log_info('売上集計CSV出力ファイル名', [\$filename]);

        return \$response;
    }

    /**
     * direct by report type(default term).
     *
     * @param Request \$request
     * @param null \$reportType
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    private function response(Request \$request, \$reportType = null)
    {
        \$builder = \$this->formFactory
            ->createBuilder(SalesReportType::class);
        if (!is_null(\$reportType) && \$reportType !== 'term') {
            \$builder->remove('unit');
        }
        /* @var \$form \\Symfony\\Component\\Form\\Form */
        \$form = \$builder->getForm();
        \$form->handleRequest(\$request);

        \$data = [
            'graph' => null,
            'raw' => null,
        ];

        \$options = [];

        if (!is_null(\$reportType) && \$form->isSubmitted() && \$form->isValid()) {
            \$session = \$request->getSession();
            \$searchData = \$form->getData();
            \$searchData['term_type'] = \$form->get('term_type')->getData();
            \$session->set('eccube.admin.sales_report.export', \$searchData);
            \$termType = \$form->get('term_type')->getData();

            \$data = \$this->salesReportService
                ->setReportType(\$reportType)
                ->setTerm(\$termType, \$searchData)
                ->getData();
            \$options = \$this->getRenderOptions(\$reportType, \$searchData);
        }

        \$template = is_null(\$reportType) ? 'term' : \$reportType;
        log_info('SalesReport Plugin : render ', ['template' => \$template]);

        return \$this->render(
            '@SalesReport42/admin/'.\$template.'.twig',
            [
                'form' => \$form->createView(),
                'graphData' => json_encode(\$data['graph']),
                'rawData' => \$data['raw'],
                'type' => \$reportType,
                'options' => \$options,
            ]
        );
    }

    /**
     * get option params for render.
     *
     * @param \$termType
     * @param \$searchData
     *
     * @return array options
     */
    private function getRenderOptions(\$termType, \$searchData)
    {
        \$options = [];

        switch (\$termType) {
            case 'term':
                // 期間の集計単位
                if (isset(\$searchData['unit'])) {
                    \$options['unit'] = \$searchData['unit'];
                }
                break;
            default:
                // no option
                break;
        }

        return \$options;
    }
}
";
    }

    public function getTemplateName()
    {
        return "SalesReport42/Controller/SalesReportController.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/Controller/SalesReportController.php", "/var/www/html/app/Plugin/SalesReport42/Controller/SalesReportController.php");
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
