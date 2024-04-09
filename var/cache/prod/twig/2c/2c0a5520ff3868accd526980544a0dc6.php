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

/* RelatedProduct42/Tests/Web/RelatedProductControllerTest.php */
class __TwigTemplate_c65e87bfefe40672db0231729c98c9e0 extends \Eccube\Twig\Template
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

namespace Plugin\\RelatedProduct\\Tests\\Web;

use Eccube\\Tests\\Web\\AbstractWebTestCase;
use Plugin\\RelatedProduct42\\Entity\\RelatedProduct;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Entity\\Product;

/**
 * Class RelatedProductControllerTest.
 */
class RelatedProductControllerTest extends AbstractWebTestCase
{
    /**
     * @var ProductRepository
     */
    protected \$productRepository;

    /**
     * @var Product
     */
    protected \$Product;

    /**
     * {@inheritdoc}
     */
    public function setUp(): void
    {
        parent::setUp();

        \$this->productRepository = \$this->entityManager->getRepository(Product::class);
        \$this->Product = \$this->createProduct('ディナーフォーク');
    }

    /**
     * Test display related product in product detail page.
     */
    public function testShowRelatedProduct()
    {
        \$this->initRelatedProduct(\$this->Product->getId());
        \$crawler = \$this->client->request('GET', \$this->generateUrl('product_detail', ['id' => \$this->Product->getId()]));

        \$this->assertStringContainsString('RelatedProduct-product_area', \$crawler->html());
    }

    /**
     * insert related product in DB.
     *
     * @param \$id
     *
     * @return RelatedProduct
     */
    private function initRelatedProduct(\$id)
    {
        \$fake = \$this->getFaker();
        \$Product = \$this->productRepository->find(\$id);
        \$RelatedProduct = new RelatedProduct();
        \$RelatedProduct->setContent(\$fake->word);
        \$RelatedProduct->setProduct(\$Product);
        \$RelatedProduct->setChildProduct(\$Product);
        \$this->entityManager->persist(\$RelatedProduct);
        \$this->entityManager->flush();

        return \$RelatedProduct;
    }
}
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Tests/Web/RelatedProductControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Tests/Web/RelatedProductControllerTest.php", "/var/www/html/app/Plugin/RelatedProduct42/Tests/Web/RelatedProductControllerTest.php");
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
