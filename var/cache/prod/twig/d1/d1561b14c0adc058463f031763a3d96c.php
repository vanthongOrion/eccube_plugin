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

/* Coupon42/Service/PurchaseFlow/Processor/CouponProcessor.php */
class __TwigTemplate_dc987a742c749181410ac5fd4bb74557 extends \Eccube\Twig\Template
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

namespace Plugin\\Coupon42\\Service\\PurchaseFlow\\Processor;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\Customer;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Master\\OrderItemType;
use Eccube\\Entity\\Master\\TaxDisplayType;
use Eccube\\Entity\\Master\\TaxType;
use Eccube\\Repository\\TaxRuleRepository;
use Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor;
use Eccube\\Service\\PurchaseFlow\\ItemHolderValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseProcessor;
use Eccube\\Service\\TaxRuleService;
use Plugin\\Coupon42\\Entity\\Coupon;
use Plugin\\Coupon42\\Entity\\CouponOrder;
use Plugin\\Coupon42\\Service\\CouponService;
use Plugin\\Coupon42\\Repository\\CouponRepository;
use Plugin\\Coupon42\\Repository\\CouponOrderRepository;

/**
 * クーポンを追加する.
 *
 * @ShoppingFlow
 */
class CouponProcessor extends ItemHolderValidator implements ItemHolderPreprocessor, PurchaseProcessor
{
    /**
     * @var EntityManager
     */
    protected \$entityManager;

    /**
     * @var CouponService
     */
    protected \$couponService;

    /**
     * @var CouponOrderRepository
     */
    protected \$couponOrderRepository;

    /**
     * @var CouponRepository
     */
    protected \$couponRepository;

    /**
     * @var TaxRuleService
     */
    protected \$taxRuleService;

    /**
     * @var TaxRuleRepository
     */
    protected \$taxRuleRepository;

    /**
     * CouponProcessor constructor.
     *
     * @param EntityManagerInterface \$entityManager
     */
    public function __construct(
        EntityManagerInterface \$entityManager,
        CouponService \$couponService,
        CouponRepository \$couponRepository,
        CouponOrderRepository \$couponOrderRepository,
        TaxRuleService \$taxRuleService,
        TaxRuleRepository \$taxRuleRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->couponService = \$couponService;
        \$this->couponRepository = \$couponRepository;
        \$this->couponOrderRepository = \$couponOrderRepository;
        \$this->taxRuleService = \$taxRuleService;
        \$this->taxRuleRepository = \$taxRuleRepository;
    }

    /*
     * ItemHolderPreprocessor
     */

    /**
     * クーポン利用の場合は明細を追加する.
     * {@inheritdoc}
     */
    public function process(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (!\$this->supports(\$itemHolder)) {
            return;
        }
        \$CouponOrder = \$this->couponOrderRepository->getCouponOrder(\$itemHolder->getPreOrderId());

        // 既存のクーポンを削除し明細追加
        if (\$CouponOrder) {
            \$this->removeCouponDiscountItem(\$itemHolder, \$CouponOrder);
            \$this->addCouponDiscountItem(\$itemHolder, \$CouponOrder);
        }
    }

    /*
     * ItemHolderValidator
     */

    /**
     * クーポン利用可否判定.
     * {@inheritdoc}
     */
    protected function validate(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (!\$this->supports(\$itemHolder)) {
            return;
        }
        /** @var CouponOrder \$CouponOrder */
        \$CouponOrder = \$this->couponOrderRepository->getCouponOrder(\$itemHolder->getPreOrderId());
        if (!\$CouponOrder) {
            return;
        }
        /** @var Coupon \$Coupon */
        \$Coupon = \$this->couponRepository->findActiveCoupon(\$CouponOrder->getCouponCd());
        if (!\$Coupon) {
            \$this->clearCoupon(\$itemHolder);
            \$this->throwInvalidItemException(trans('plugin_coupon.front.shopping.notfound'), null, true);
        }

        /** @var Customer \$Customer */
        \$Customer = \$itemHolder->getCustomer();
        if (!\$Customer && \$Coupon->getCouponMember()) {
            \$this->clearCoupon(\$itemHolder);
            \$this->throwInvalidItemException(trans('plugin_coupon.front.shopping.member'));
        }

        \$couponProducts = \$this->couponService->existsCouponProduct(\$Coupon, \$itemHolder);
        if (count(\$couponProducts) == 0) {
            \$this->clearCoupon(\$itemHolder);
            \$this->throwInvalidItemException(trans('plugin_coupon.front.shopping.couponusetime'), null, true);
        }
        \$discount = \$this->couponService->recalcOrder(\$Coupon, \$couponProducts);
        if (\$discount != \$CouponOrder->getDiscount()) {
            \$this->clearCoupon(\$itemHolder);
            \$this->throwInvalidItemException(trans('plugin_coupon.front.shopping.changeorder'), null, true);
        }

        \$lowerLimit = \$Coupon->getCouponLowerLimit();
        \$checkLowerLimit = \$this->couponService->isLowerLimitCoupon(\$couponProducts, \$lowerLimit);
        if (!\$checkLowerLimit) {
            \$this->clearCoupon(\$itemHolder);
            \$message = trans('plugin_coupon.front.shopping.lowerlimit', ['lowerLimit' => number_format(\$lowerLimit)]);
            \$this->throwInvalidItemException(\$message, null, true);
        }

        \$checkCouponUseTime = \$this->couponRepository->checkCouponUseTime(\$CouponOrder->getCouponCd());
        if (!\$checkCouponUseTime) {
            \$this->clearCoupon(\$itemHolder);
            \$this->throwInvalidItemException(trans('plugin_coupon.front.shopping.couponusetime'), null, true);
        }
    }

    /*
     * PurchaseProcessor
     */

    /**
     * クーポンを使用状態にする.
     * {@inheritdoc}
     */
    public function prepare(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (!\$this->supports(\$itemHolder)) {
            return;
        }

        \$CouponOrder = \$this->couponOrderRepository->getCouponOrder(\$itemHolder->getPreOrderId());
        if (!\$CouponOrder) {
            return;
        }
        \$CouponOrder->setOrderDate(new \\DateTime());
        \$this->entityManager->flush(\$CouponOrder);

        \$Coupon = \$this->couponRepository->findActiveCoupon(\$CouponOrder->getCouponCd());
        if (!\$Coupon) {
            return;
        }
        \$Coupon->setCouponUseTime(\$Coupon->getCouponUseTime() - 1);
        \$this->entityManager->flush(\$Coupon);
    }

    /**
     * {@inheritdoc}
     */
    public function commit(ItemHolderInterface \$target, PurchaseContext \$context)
    {
        // quiet.
    }

    /**
     * クーポンを取り消す.
     * {@inheritdoc}
     */
    public function rollback(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (!\$this->supports(\$itemHolder)) {
            return;
        }

        \$this->couponService->removeCouponOrder(\$itemHolder);
    }

    /**
     * Processorが実行出来るかどうかを返す.
     *
     * \$itemHolderがOrderエンティティのインスタンスかどうかをチェックする
     *
     * @param ItemHolderInterface \$itemHolder
     *
     * @return bool
     */
    private function supports(ItemHolderInterface \$itemHolder)
    {
        if (!\$itemHolder instanceof Order) {
            return false;
        }

        return true;
    }

    /**
     * 既存のクーポン明細を削除する.
     *
     * @param ItemHolderInterface \$itemHolder
     * @param CouponOrder \$CouponOrder
     */
    private function removeCouponDiscountItem(ItemHolderInterface \$itemHolder, CouponOrder \$CouponOrder)
    {
        foreach (\$itemHolder->getItems() as \$item) {
            if (CouponProcessor::class === \$item->getProcessorName()) {
                \$itemHolder->removeOrderItem(\$item);
                \$this->entityManager->remove(\$item);
            }
        }
    }

    /**
     * 明細追加処理.
     *
     * 値引額の場合の計算方法
     * クーポンで設定した価格で、クーポン値引の明細を生成する(税込価格、税率0%、課税)
     * 税込1080円の商品に、100円のクーポンを使用すると、980円の支払いになるイメージ
     *
     * 明細ごとに税込の値引額を集計し、クーポン値引の明細を生成する(税込価格、税率0%、課税)
     * 軽減税率適用により税率が混在する場合もあるため、税込価格、税率0%で明細を生成する
     * 税込1080円の商品に、10%OFFのクーポンを使用すると、100円の値引きになり、980円の支払いになるイメージ
     *
     * @see https://github.com/EC-CUBE/coupon-plugin/pull/77
     *
     * @param ItemHolderInterface \$itemHolder
     * @param CouponOrder \$CouponOrder
     * @param integer \$discount
     */
    private function addCouponDiscountItem(ItemHolderInterface \$itemHolder, CouponOrder \$CouponOrder)
    {
        \$Coupon = \$this->couponRepository->find(\$CouponOrder->getCouponId());

        \$taxDisplayType = TaxDisplayType::INCLUDED; // 税込
        \$taxType = TaxType::NON_TAXABLE; // 不課税
        \$tax = 0;
        \$taxRate = 0;
        \$taxRuleId = null;
        \$roundingType = null;
        \$DiscountType = \$this->entityManager->find(OrderItemType::class, OrderItemType::DISCOUNT);
        \$TaxInclude = \$this->entityManager->find(TaxDisplayType::class, \$taxDisplayType);
        \$Taxation = \$this->entityManager->find(TaxType::class, \$taxType);

        \$OrderItem = new OrderItem();
        \$OrderItem->setProductName(\$CouponOrder->getCouponName())
            ->setPrice(\$CouponOrder->getDiscount() * -1)
            ->setQuantity(1)
            ->setTax(\$tax)
            ->setTaxRate(\$taxRate)
            ->setTaxRuleId(\$taxRuleId)
            ->setRoundingType(\$roundingType)
            ->setOrderItemType(\$DiscountType)
            ->setTaxDisplayType(\$TaxInclude)
            ->setTaxType(\$Taxation)
            ->setOrder(\$itemHolder)
            ->setProcessorName(CouponProcessor::class);
        \$itemHolder->addItem(\$OrderItem);
    }

    protected function clearCoupon(ItemHolderInterface \$Order)
    {
        // TODO エラーが発生した場合、前回設定されているクーポンがあればその金額を再設定する
        \$this->couponService->removeCouponOrder(\$Order);
    }
}
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Service/PurchaseFlow/Processor/CouponProcessor.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Service/PurchaseFlow/Processor/CouponProcessor.php", "/var/www/html/app/Plugin/Coupon42/Service/PurchaseFlow/Processor/CouponProcessor.php");
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
