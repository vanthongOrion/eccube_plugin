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

/* RelatedProduct42/Entity/ProductTrait.php */
class __TwigTemplate_7c2d48114b24e1a45dd0031843c2ec01 extends \Eccube\Twig\Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Eccube\\Annotation\\EntityExtension;

/**
 * @EntityExtension(\"Eccube\\Entity\\Product\")
 */
trait ProductTrait
{
    /**
     * @var RelatedProduct[]|Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\RelatedProduct42\\Entity\\RelatedProduct\", mappedBy=\"Product\", cascade={\"persist\", \"remove\"})
     * @ORM\\OrderBy({
     *     \"id\"=\"ASC\"
     * })
     */
    private \$RelatedProducts;

    /**
     * @return RelatedProduct[]|Collection
     */
    public function getRelatedProducts()
    {
        if (null === \$this->RelatedProducts) {
            \$this->RelatedProducts = new ArrayCollection();
        }

        return \$this->RelatedProducts;
    }

    /**
     * @param RelatedProduct \$RelatedProduct
     */
    public function addRelatedProduct(RelatedProduct \$RelatedProduct)
    {
        if (null === \$this->RelatedProducts) {
            \$this->RelatedProducts = new ArrayCollection();
        }

        \$this->RelatedProducts[] = \$RelatedProduct;
    }

    /**
     * @param RelatedProduct \$RelatedProduct
     *
     * @return bool
     */
    public function removeRelatedProduct(RelatedProduct \$RelatedProduct)
    {
        if (null === \$this->RelatedProducts) {
            \$this->RelatedProducts = new ArrayCollection();
        }

        return \$this->RelatedProducts->removeElement(\$RelatedProduct);
    }
}
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Entity/ProductTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Entity/ProductTrait.php", "/var/www/html/app/Plugin/RelatedProduct42/Entity/ProductTrait.php");
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
