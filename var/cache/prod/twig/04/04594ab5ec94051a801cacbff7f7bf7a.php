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

/* Coupon42/PluginManager.php */
class __TwigTemplate_caebd005cabe091a21df72403b1c2e4b extends \Eccube\Twig\Template
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

namespace Plugin\\Coupon42;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Layout;
use Eccube\\Entity\\Page;
use Eccube\\Entity\\PageLayout;
use Eccube\\Plugin\\AbstractPluginManager;
use Eccube\\Repository\\LayoutRepository;
use Eccube\\Repository\\PageLayoutRepository;
use Eccube\\Repository\\PageRepository;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\Filesystem\\Filesystem;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    private \$originalDir = __DIR__.'/Resource/template/default/';

    private \$template1 = 'coupon_shopping_item.twig';

    private \$template2 = 'coupon_shopping_item_confirm.twig';

    private \$template3 = 'mypage_history_coupon.twig';

    /**
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function enable(array \$meta, ContainerInterface \$container)
    {
        \$this->copyBlock(\$container);
        /** @var EntityManagerInterface \$entityManager */
        \$entityManager = \$container->get('doctrine')->getManager();
        \$PageLayout = \$entityManager->getRepository(Page::class)->findOneBy(['url' => 'plugin_coupon_shopping']);
        if (is_null(\$PageLayout)) {
            // pagelayoutの作成
            \$this->createPageLayout(\$container);
        }
    }

    /**
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function disable(array \$meta, ContainerInterface \$container)
    {
        \$this->removeBlock(\$container);
        // pagelayoutの削除
        \$this->removePageLayout(\$container);
    }

    /**
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function update(array \$meta, ContainerInterface \$container)
    {
        /** @var EntityManagerInterface \$entityManager */
        \$entityManager = \$container->get('doctrine')->getManager();
        \$PageLayout = \$entityManager->getRepository(Page::class)->findOneBy(['url' => 'plugin_coupon_shopping']);
        if (is_null(\$PageLayout)) {
            // pagelayoutの作成
            \$this->createPageLayout(\$container);
        }
    }

    /**
     * @param ContainerInterface \$container
     */
    private function createPageLayout(ContainerInterface \$container)
    {
        // ページレイアウトにプラグイン使用時の値を代入
        /** @var EntityManagerInterface \$entityManager */
        \$entityManager = \$container->get('doctrine')->getManager();
        /** @var \\Eccube\\Entity\\Page \$Page */
        \$Page = \$entityManager->getRepository(Page::class)->newPage();
        \$Page->setEditType(Page::EDIT_TYPE_DEFAULT);
        \$Page->setName('商品購入/クーポン利用');
        \$Page->setUrl('plugin_coupon_shopping');
        \$Page->setFileName('Coupon42/Resource/template/default/shopping_coupon');
        \$Page->setMetaRobots('noindex');

        // DB登録
        \$entityManager->persist(\$Page);
        \$entityManager->flush(\$Page);

        \$Layout = \$entityManager->getRepository(Layout::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
        \$PageLayout = new PageLayout();
        \$PageLayout->setPage(\$Page)
            ->setPageId(\$Page->getId())
            ->setLayout(\$Layout)
            ->setLayoutId(\$Layout->getId())
            ->setSortNo(0);

        \$entityManager->persist(\$PageLayout);
        \$entityManager->flush(\$PageLayout);
    }

    /**
     * クーポン用ページレイアウトを削除.
     *
     * @param ContainerInterface \$container
     */
    private function removePageLayout(ContainerInterface \$container)
    {
        // ページ情報の削除
        /** @var EntityManagerInterface \$entityManager */
        \$entityManager = \$container->get('doctrine')->getManager();
        \$Page =  \$entityManager->getRepository(Page::class)->findOneBy(['url' => 'plugin_coupon_shopping']);
        if (\$Page) {
            \$Layout = \$entityManager->getRepository(Layout::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
            \$PageLayout = \$entityManager->getRepository(PageLayout::class)->findOneBy(['Page' => \$Page, 'Layout' => \$Layout]);
            // Blockの削除
            \$entityManager->remove(\$PageLayout);
            \$entityManager->remove(\$Page);
            \$entityManager->flush();
        }
    }

    /**
     * Copy block template.
     *
     * @param ContainerInterface \$container
     */
    private function copyBlock(ContainerInterface \$container)
    {
        \$templateDir = \$container->getParameter('eccube_theme_front_dir');
        // ファイルコピー
        \$file = new Filesystem();
        // ブロックファイルをコピー
        \$file->copy(\$this->originalDir.\$this->template1, \$templateDir.'/Coupon42/'.\$this->template1);
        \$file->copy(\$this->originalDir.\$this->template2, \$templateDir.'/Coupon42/'.\$this->template2);
        \$file->copy(\$this->originalDir.\$this->template3, \$templateDir.'/Coupon42/'.\$this->template3);
    }

    /**
     * Remove block template.
     *
     * @param ContainerInterface \$container
     */
    private function removeBlock(ContainerInterface \$container)
    {
        \$templateDir = \$container->getParameter('eccube_theme_front_dir');
        \$file = new Filesystem();
        \$file->remove(\$templateDir.'/Coupon42/'.\$this->template1);
        \$file->remove(\$templateDir.'/Coupon42/'.\$this->template2);
        \$file->remove(\$templateDir.'/Coupon42/'.\$this->template3);
    }
}
";
    }

    public function getTemplateName()
    {
        return "Coupon42/PluginManager.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/PluginManager.php", "/var/www/html/app/Plugin/Coupon42/PluginManager.php");
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
