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

/* Mypage/history.twig */
class __TwigTemplate_c8aaab450e513a8828752ab5cab7cf11 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["mypageno"] = "index";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/history.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴詳細"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/history.twig", 23)->display($context);
        // line 24
        echo "        </div>

        ";
        // line 26
        $context["remessage"] = false;
        // line 27
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文日時"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
        echo "</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</dd>
                    </div>
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_mypage_order_status_display", [], "any", false, false, true, 39)) {
            // line 40
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文状況"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "CustomerOrderStatus", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</dd>
                        </div>
                    ";
        }
        // line 45
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 45)) {
            // line 46
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            echo " pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
            echo " pt</dd>
                        </div>
                    ";
        }
        // line 55
        echo "
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 61));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 62
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 63
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, true, 63)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo ")";
            }
            echo "</div>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, true, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 65
                echo "                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        ";
                // line 68
                if ((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 68))) {
                    // line 69
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                    echo "\"/>
                                        ";
                } else {
                    // line 71
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 71), "MainListImage", [], "any", false, false, true, 71), 71, $this->source)), "save_image"), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "\"/>
                                        ";
                }
                // line 74
                echo "                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            ";
                // line 77
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 77)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 77), "Status", [], "any", false, false, true, 77), "id", [], "any", false, false, true, 77) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")))) {
                    // line 78
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 78), "id", [], "any", false, false, true, 78)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 80
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "
                                            ";
                }
                // line 81
                echo " ×";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo " ";
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                // line 82
                echo "                                        </p>
                                        ";
                // line 83
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, true, 83))) {
                    // line 84
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, true, 84), "ClassCategory1", [], "any", false, false, true, 84))) {
                        // line 85
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 85), "classCategory1", [], "any", false, false, true, 85), "className", [], "any", false, false, true, 85), "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 85), "classCategory1", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 87
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, true, 87), "ClassCategory2", [], "any", false, false, true, 87)) {
                        // line 88
                        echo "                                                <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 88), "classCategory2", [], "any", false, false, true, 88), "className", [], "any", false, false, true, 88), "name", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 88), "classCategory2", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 90
                    echo "                                        ";
                }
                // line 91
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, true, 91), 91, $this->source)), "html", null, true);
                echo "
                                            × ";
                // line 92
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 92), 92, $this->source)), "html", null, true);
                echo "</p>
                                        ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 93) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, true, 93) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 93), "price02IncTax", [], "any", false, false, true, 93)))) {
                    // line 94
                    echo "                                            <p class=\"ec-color-accent\">
                                                ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("【現在価格】"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 95), "price02IncTax", [], "any", false, false, true, 95), 95, $this->source)), "html", null, true);
                    echo "</p>
                                            ";
                    // line 96
                    $context["remessage"] = true;
                    // line 97
                    echo "                                        ";
                }
                // line 98
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                        <p>";
            ((($context["isShowReducedTaxMess"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 105
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "&nbsp;
                                (";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo ")</p>
                            <p>";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "</p>
                            <p>";
            // line 108
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 116
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, true, 116), 116, $this->source)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし")), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 120
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, true, 120)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, true, 120), 120, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "</dd>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い情報"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い方法"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "PaymentMethod", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 134
        echo twig_nl2br(twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", true, true, true, 134)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, true, 134), 134, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("記載なし"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("記載なし"))), "html", null, true));
        echo "</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール配信履歴一覧"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MailHistories", [], "any", false, false, true, 140));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
            // line 141
            echo "                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, true, 142), 142, $this->source)), "html", null, true);
            echo "</div>
                            <div class=\"ec-orderMail__link\"><a>";
            // line 143
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "</a></div>
                            <div class=\"ec-orderMail__body\">";
            // line 144
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, true, 144), 144, $this->source), "html", null, true));
            echo "<p class=\"ec-orderMail__close\"><a>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("閉じる"), "html", null, true);
            echo "</a></p></div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "                        <p class=\"ec-reportDescription\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール履歴はありません。"), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>

            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, true, 156), 156, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, true, 160), 160, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, true, 164), 164, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 166) < 0)) {
            // line 167
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 169), 169, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 172
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, true, 173), 173, $this->source)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, true, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 176
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 177
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 178), 178, $this->source)), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 182), 182, $this->source)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "total_by_tax_rate", [], "any", false, false, true, 184));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 185
            echo "                        <dl class=\"ec-totalBox__taxRate\">
                            <dt>";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 187, $this->source)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内消費税"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_by_tax_rate", [], "any", false, false, true, 187)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["rate"]] ?? null) : null), 187, $this->source)), "html", null, true);
            echo ")</dd>
                        </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                    ";
        if (($context["stockOrder"] ?? null)) {
            // line 191
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_order", ["order_no" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, true, 191)]), "html", null, true);
            echo "\"
                       class=\"ec-blockBtn--action load-overlay\" ";
            // line 192
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"put\"
                       data-confirm=\"false\">";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("再注文する"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 195
        echo "                </div>
                ";
        // line 196
        if (($context["remessage"] ?? null)) {
            // line 197
            echo "                    <p class=\"ec-color-accent\">
                        <strong>";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※金額が変更されている商品があるため、再注文時はご注意ください。"), "html", null, true);
            echo "</strong>
                    </p>
                ";
        }
        // line 201
        echo "            </div>
        </div>
        <div class=\"ec-role ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <a href=\"";
        // line 205
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
        echo "\" class=\"ec-inlineBtn ec-font-bold\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 205,  603 => 201,  597 => 198,  594 => 197,  592 => 196,  589 => 195,  584 => 193,  580 => 192,  575 => 191,  572 => 190,  559 => 187,  555 => 186,  552 => 185,  548 => 184,  544 => 183,  540 => 182,  535 => 181,  526 => 178,  522 => 177,  519 => 176,  515 => 175,  511 => 174,  507 => 173,  502 => 172,  496 => 169,  492 => 168,  489 => 167,  487 => 166,  482 => 164,  478 => 163,  472 => 160,  468 => 159,  462 => 156,  458 => 155,  450 => 149,  441 => 147,  431 => 144,  427 => 143,  423 => 142,  420 => 141,  415 => 140,  410 => 138,  403 => 134,  398 => 132,  389 => 128,  384 => 126,  379 => 123,  362 => 120,  358 => 119,  352 => 116,  348 => 115,  342 => 112,  338 => 111,  332 => 108,  323 => 107,  317 => 106,  311 => 105,  305 => 103,  295 => 98,  292 => 97,  290 => 96,  285 => 95,  282 => 94,  280 => 93,  276 => 92,  271 => 91,  268 => 90,  260 => 88,  257 => 87,  249 => 85,  246 => 84,  244 => 83,  241 => 82,  233 => 81,  227 => 80,  219 => 78,  217 => 77,  212 => 74,  207 => 72,  202 => 71,  196 => 69,  194 => 68,  189 => 65,  185 => 64,  175 => 63,  172 => 62,  155 => 61,  150 => 59,  144 => 55,  138 => 52,  134 => 51,  128 => 48,  124 => 47,  121 => 46,  118 => 45,  112 => 42,  108 => 41,  105 => 40,  103 => 39,  98 => 37,  94 => 36,  88 => 33,  84 => 32,  77 => 27,  75 => 26,  71 => 24,  69 => 23,  62 => 21,  57 => 18,  53 => 17,  48 => 11,  46 => 15,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/history.twig", "/var/www/html/src/Eccube/Resource/template/default/Mypage/history.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 23, "if" => 39, "for" => 61);
        static $filters = array("escape" => 21, "trans" => 21, "date_sec" => 33, "number_format" => 48, "no_image_product" => 69, "price" => 91, "default" => 116, "date_day_with_weekday" => 116, "nl2br" => 134);
        static $functions = array("asset" => 69, "constant" => 77, "url" => 78, "is_reduced_tax_rate" => 81, "csrf_token_for_anchor" => 192);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'date_sec', 'number_format', 'no_image_product', 'price', 'default', 'date_day_with_weekday', 'nl2br'],
                ['asset', 'constant', 'url', 'is_reduced_tax_rate', 'csrf_token_for_anchor']
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
