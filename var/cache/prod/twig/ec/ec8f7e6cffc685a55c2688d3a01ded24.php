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

/* RelatedProduct42/RelatedProductEvent.php */
class __TwigTemplate_ef2c7c45945aa37b4c4704c2bfcb4bfb extends \Eccube\Twig\Template
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

namespace Plugin\\RelatedProduct42;

use Eccube\\Event\\TemplateEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class RelatedProductEvent implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            '@admin/Product/product.twig' => 'onRenderAdminProduct',
            'Product/detail.twig' => 'onRenderProductDetail',
        ];
    }

    /**
     * フロント：商品詳細画面に関連商品を表示する.
     *
     * @param TemplateEvent \$event
     */
    public function onRenderProductDetail(TemplateEvent \$event)
    {
        \$event->addSnippet('@RelatedProduct42/front/related_product.twig');
    }

    /**
     * 管理画面：商品登録画面に関連商品登録フォームを表示する.
     *
     * @param TemplateEvent \$event
     */
    public function onRenderAdminProduct(TemplateEvent \$event)
    {
        \$event->addSnippet('@RelatedProduct42/admin/related_product.twig');
    }
}
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/RelatedProductEvent.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/RelatedProductEvent.php", "/var/www/html/app/Plugin/RelatedProduct42/RelatedProductEvent.php");
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
