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

/* Api42/Service/CoreEntityTrigger.php */
class __TwigTemplate_59a4050a78a41a1ca7216c7d1b6a8473 extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\Service;

use Eccube\\Entity\\Customer;
use Eccube\\Entity\\CustomerAddress;
use Eccube\\Entity\\CustomerFavoriteProduct;
use Eccube\\Entity\\MailHistory;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Product;
use Eccube\\Entity\\ProductCategory;
use Eccube\\Entity\\ProductClass;
use Eccube\\Entity\\ProductImage;
use Eccube\\Entity\\ProductStock;
use Eccube\\Entity\\ProductTag;
use Eccube\\Entity\\Shipping;
use Eccube\\Entity\\TaxRule;

class CoreEntityTrigger implements WebHookTrigger
{
    /**
     * @param \$entity
     * @return Customer|Order|Product|null
     */
    public function emitFor(\$entity)
    {
        // Product
        if (\$entity instanceof ProductClass) {
            return \$entity->getProduct();
        } elseif (\$entity instanceof ProductCategory) {
            return \$entity->getProduct();
        } elseif (\$entity instanceof ProductTag) {
            return \$entity->getProduct();
        } elseif (\$entity instanceof ProductStock) {
            return is_null(\$entity->getProductClass()) ? null : \$entity->getProductClass()->getProduct();
        } elseif (\$entity instanceof TaxRule) {
            return \$entity->getProduct();
        } elseif (\$entity instanceof ProductImage) {
            return \$entity->getProduct();
        }

        // Order
        if (\$entity instanceof OrderItem) {
            return \$entity->getOrder();
        } elseif (\$entity instanceof Shipping) {
            return \$entity->getOrder();
        } elseif (\$entity instanceof MailHistory) {
            return \$entity->getOrder();
        }

        // Customer
        if (\$entity instanceof CustomerAddress) {
            return \$entity->getCustomer();
        } elseif (\$entity instanceof CustomerFavoriteProduct) {
            return \$entity->getCustomer();
        }

        return null;
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Service/CoreEntityTrigger.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Service/CoreEntityTrigger.php", "/var/www/html/app/Plugin/Api42/Service/CoreEntityTrigger.php");
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
