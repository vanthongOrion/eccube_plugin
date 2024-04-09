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

/* ProductReview42/Controller/ProductReviewController.php */
class __TwigTemplate_bb1ed823e994d47b18a82f724e934fa6 extends \Eccube\Twig\Template
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

namespace Plugin\\ProductReview42\\Controller;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\ProductStatus;
use Eccube\\Entity\\Product;
use Plugin\\ProductReview42\\Entity\\ProductReview;
use Plugin\\ProductReview42\\Entity\\ProductReviewStatus;
use Plugin\\ProductReview42\\Form\\Type\\ProductReviewType;
use Plugin\\ProductReview42\\Repository\\ProductReviewRepository;
use Plugin\\ProductReview42\\Repository\\ProductReviewStatusRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * Class ProductReviewController front.
 */
class ProductReviewController extends AbstractController
{
    /**
     * @var ProductReviewStatusRepository
     */
    private \$productReviewStatusRepository;

    /**
     * @var ProductReviewRepository
     */
    private \$productReviewRepository;

    /**
     * ProductReviewController constructor.
     *
     * @param ProductReviewStatusRepository \$productStatusRepository
     * @param ProductReviewRepository \$productReviewRepository
     */
    public function __construct(
        ProductReviewStatusRepository \$productStatusRepository,
        ProductReviewRepository \$productReviewRepository
    ) {
        \$this->productReviewStatusRepository = \$productStatusRepository;
        \$this->productReviewRepository = \$productReviewRepository;
    }

    /**
     * @Route(\"/product_review/{id}/review\", name=\"product_review_index\", requirements={\"id\" = \"\\d+\"})
     * @Route(\"/product_review/{id}/review\", name=\"product_review_confirm\", requirements={\"id\" = \"\\d+\"})
     *
     * @param Request \$request
     * @param Product \$Product
     *
     * @return RedirectResponse|Response
     */
    public function index(Request \$request, Product \$Product)
    {
        if (!\$this->session->has('_security_admin') && \$Product->getStatus()->getId() !== ProductStatus::DISPLAY_SHOW) {
            log_info('Product review', ['status' => 'Not permission']);

            throw new NotFoundHttpException();
        }

        \$ProductReview = new ProductReview();
        \$form = \$this->createForm(ProductReviewType::class, \$ProductReview);

        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            /** @var \$ProductReview ProductReview */
            \$ProductReview = \$form->getData();

            switch (\$request->get('mode')) {
                case 'confirm':
                    log_info('Product review config confirm');

                    return \$this->render('ProductReview42/Resource/template/default/confirm.twig', [
                        'form' => \$form->createView(),
                        'Product' => \$Product,
                        'ProductReview' => \$ProductReview,
                    ]);
                    break;

                case 'complete':
                    log_info('Product review complete');
                    if (\$this->isGranted('ROLE_USER')) {
                        \$Customer = \$this->getUser();
                        \$ProductReview->setCustomer(\$Customer);
                    }
                    \$ProductReview->setProduct(\$Product);
                    \$ProductReview->setStatus(\$this->productReviewStatusRepository->find(ProductReviewStatus::HIDE));
                    \$this->entityManager->persist(\$ProductReview);
                    \$this->entityManager->flush(\$ProductReview);

                    log_info('Product review complete', ['id' => \$Product->getId()]);

                    return \$this->redirectToRoute('product_review_complete', ['id' => \$Product->getId()]);
                    break;

                case 'back':
                    // 確認画面から投稿画面へ戻る
                    break;

                default:
                    // do nothing
                    break;
            }
        }

        return \$this->render('ProductReview42/Resource/template/default/index.twig', [
            'Product' => \$Product,
            'ProductReview' => \$ProductReview,
            'form' => \$form->createView(),
        ]);
    }

    /**
     * Complete.
     *
     * @Route(\"/product_review/{id}/complete\", name=\"product_review_complete\", requirements={\"id\" = \"\\d+\"})
     * @Template(\"ProductReview42/Resource/template/default/complete.twig\")
     *
     * @param \$id
     *
     * @return array
     */
    public function complete(\$id)
    {
        return ['id' => \$id];
    }

    /**
     * ページ管理表示用のダミールーティング.
     *
     * @Route(\"/product_review/display\", name=\"product_review_display\")
     */
    public function display()
    {
        return new Response();
    }
}
";
    }

    public function getTemplateName()
    {
        return "ProductReview42/Controller/ProductReviewController.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Controller/ProductReviewController.php", "/var/www/html/app/Plugin/ProductReview42/Controller/ProductReviewController.php");
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
