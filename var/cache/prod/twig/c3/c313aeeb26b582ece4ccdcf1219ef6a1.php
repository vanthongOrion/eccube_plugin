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

/* RelatedProduct42/Controller/Admin/RelatedProductController.php */
class __TwigTemplate_76f8fa3cb2fcc912f95da149c7b07931 extends \Eccube\Twig\Template
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

namespace Plugin\\RelatedProduct42\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Eccube\\Repository\\CategoryRepository;
use Eccube\\Repository\\ProductRepository;
use Knp\\Component\\Pager\\PaginatorInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * Class RelatedProductController.
 */
class RelatedProductController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    protected \$categoryRepository;

    /**
     * @var ProductRepository
     */
    protected \$productRepository;

    /**
     * @var PaginatorInterface
     */
    protected \$paginator;

    /**
     * RelatedProductController constructor.
     *
     * @param CategoryRepository \$categoryRepository
     * @param ProductRepository \$productRepository
     * @param PaginatorInterface \$paginator
     */
    public function __construct(
        CategoryRepository \$categoryRepository,
        ProductRepository \$productRepository,
        PaginatorInterface \$paginator
    ) {
        \$this->categoryRepository = \$categoryRepository;
        \$this->productRepository = \$productRepository;
        \$this->paginator = \$paginator;
    }

    /**
     * search product modal.
     *
     * @param Request \$request
     * @param int \$page_no
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response|array
     *
     * @Route(\"/%eccube_admin_route%/related_product/search/product\", name=\"admin_related_product_search\")
     * @Route(\"/%eccube_admin_route%/related_product/search/product/page/{page_no}\", name=\"admin_related_product_search_product_page\", requirements={\"page_no\":\"\\d+\"})
     *
     * @Template(\"@RelatedProduct42/admin/modal_result.twig\")
     */
    public function searchProduct(Request \$request, \$page_no = null)
    {
        if (!\$request->isXmlHttpRequest()) {
            return null;
        }

        \$pageCount = \$this->eccubeConfig['eccube_default_page_count'];
        \$session = \$this->session;
        if ('POST' === \$request->getMethod()) {
            log_info('get search data with parameters ', [
                'id' => \$request->get('id'),
                'category_id' => \$request->get('category_id'),
            ]);
            \$page_no = 1;
            \$searchData = ['id' => \$request->get('id')];
            if (\$categoryId = \$request->get('category_id')) {
                \$searchData['category_id'] = \$categoryId;
            }
            \$session->set('eccube.plugin.related_product.product.search', \$searchData);
            \$session->set('eccube.plugin.related_product.product.search.page_no', \$page_no);
        } else {
            \$searchData = (array) \$session->get('eccube.plugin.related_product.product.search');
            if (is_null(\$page_no)) {
                \$page_no = intval(\$session->get('eccube.plugin.related_product.product.search.page_no'));
            } else {
                \$session->set('eccube.plugin.related_product.product.search.page_no', \$page_no);
            }
        }

        if (!empty(\$searchData['category_id'])) {
            \$searchData['category_id'] = \$this->categoryRepository->find(\$searchData['category_id']);
        }

        \$qb = \$this->productRepository->getQueryBuilderBySearchDataForAdmin(\$searchData);

        /** @var \\Knp\\Component\\Pager\\Pagination\\SlidingPagination \$pagination */
        \$pagination = \$this->paginator->paginate(
            \$qb,
            \$page_no,
            \$pageCount,
            ['wrap-queries' => true]
        );

        return [
            'pagination' => \$pagination,
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Controller/Admin/RelatedProductController.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Controller/Admin/RelatedProductController.php", "/var/www/html/app/Plugin/RelatedProduct42/Controller/Admin/RelatedProductController.php");
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
