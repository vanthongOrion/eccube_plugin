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

/* RelatedProduct42/Entity/RelatedProduct.php */
class __TwigTemplate_61c24ab1df8250a1bd3db58e3a3dbcb7 extends \Eccube\Twig\Template
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

namespace Plugin\\RelatedProduct42\\Entity;

use Eccube\\Entity\\AbstractEntity;
use Eccube\\Entity\\Product;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * Class RelatedProduct.
 *
 * @ORM\\Table(name=\"plg_related_product\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\RelatedProduct42\\Repository\\RelatedProductRepository\")
 */
class RelatedProduct extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"content\", type=\"string\", nullable=true, length=4000)
     */
    private \$content;

    /**
     * @var Product
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Product\", inversedBy=\"RelatedProducts\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Product;

    /**
     * @var Product
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Product\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"child_product_id\", referencedColumnName=\"id\")
     * })
     */
    private \$ChildProduct;

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * getContent.
     *
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * set related product content.
     *
     * @param string \$content
     *
     * @return \$this
     */
    public function setContent(\$content = null)
    {
        \$this->content = \$content;

        return \$this;
    }

    /**
     * get related product content.
     *
     * @return Product
     */
    public function getProduct()
    {
        return \$this->Product;
    }

    /**
     * set related product product.
     *
     * @param Product \$Product
     *
     * @return \$this
     */
    public function setProduct(Product \$Product)
    {
        \$this->Product = \$Product;

        return \$this;
    }

    /**
     * getChildProduct.
     *
     * @return Product
     */
    public function getChildProduct()
    {
        return \$this->ChildProduct;
    }

    /**
     * setChildProduct.
     *
     * @param Product \$Product
     *
     * @return \$this
     */
    public function setChildProduct(Product \$Product = null)
    {
        \$this->ChildProduct = \$Product;

        return \$this;
    }
}
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Entity/RelatedProduct.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Entity/RelatedProduct.php", "/var/www/html/app/Plugin/RelatedProduct42/Entity/RelatedProduct.php");
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
