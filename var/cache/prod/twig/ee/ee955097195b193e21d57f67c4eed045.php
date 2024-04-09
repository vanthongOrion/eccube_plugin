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

/* ProductReview42/Controller/Admin/ConfigController.php */
class __TwigTemplate_cbb6d226598a40e016592effa7f9cab7 extends \Eccube\Twig\Template
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

namespace Plugin\\ProductReview42\\Controller\\Admin;

use Plugin\\ProductReview42\\Form\\Type\\Admin\\ProductReviewConfigType;
use Plugin\\ProductReview42\\Repository\\ProductReviewConfigRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * Class ConfigController.
 */
class ConfigController extends \\Eccube\\Controller\\AbstractController
{
    /**
     * @Route(\"/%eccube_admin_route%/product_review/config\", name=\"product_review42_admin_config\")
     * @Template(\"@ProductReview42/admin/config.twig\")
     *
     * @param Request \$request
     * @param ProductReviewConfigRepository \$configRepository
     *
     * @return array
     */
    public function index(Request \$request, ProductReviewConfigRepository \$configRepository)
    {
        \$Config = \$configRepository->get();
        \$form = \$this->createForm(ProductReviewConfigType::class, \$Config);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$Config = \$form->getData();
            \$this->entityManager->persist(\$Config);
            \$this->entityManager->flush(\$Config);

            log_info('Product review config', ['status' => 'Success']);
            \$this->addSuccess('product_review.admin.save.complete', 'admin');

            return \$this->redirectToRoute('product_review42_admin_config');
        }

        return [
            'form' => \$form->createView(),
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "ProductReview42/Controller/Admin/ConfigController.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Controller/Admin/ConfigController.php", "/var/www/html/app/Plugin/ProductReview42/Controller/Admin/ConfigController.php");
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
