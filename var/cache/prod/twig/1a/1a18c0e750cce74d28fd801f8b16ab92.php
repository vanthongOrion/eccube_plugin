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

/* Mypage/index.twig */
class __TwigTemplate_62858acb30183f50f4ef5f3a2d1233b7 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/index.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/index.twig", 23)->display($context);
        // line 24
        echo "        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 26) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件の履歴があります", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 27)]), "html", null, true);
            echo "</p>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 29
                echo "                    <div class=\"ec-historyRole\">
                        <div class=\"ec-historyRole__contents\">

                            <div class=\"ec-historyRole__header\">
                                <div class=\"ec-historyListHeader\">
                                    <p class=\"ec-historyListHeader__date\">";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                echo "</p>
                                    <dl class=\"ec-definitions\">
                                        <dt>";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
                echo "</dt>
                                        <dd>";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</dd>
                                    </dl>
                                    ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_mypage_order_status_display", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "                                        <dl class=\"ec-definitions\">
                                            <dt>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文状況"), "html", null, true);
                    echo "</dt>
                                            <dd>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "CustomerOrderStatus", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</dd>
                                        </dl>
                                    ";
                }
                // line 45
                echo "                                    <p class=\"ec-historyListHeader__action\"><a class=\"ec-inlineBtn\"
                                                                               href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_history", ["order_no" => twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 46)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("詳細を見る"), "html", null, true);
                echo "</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"ec-historyRole__detail\">
                                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "MergedProductOrderItems", [], "any", false, false, true, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                    // line 52
                    echo "                                    <div class=\"ec-imageGrid\">
                                        <div class=\"ec-imageGrid__img\">
                                            ";
                    // line 54
                    if ((null === twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                        echo "\"/>
                                            ";
                    } else {
                        // line 57
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", [], "any", false, false, true, 57), "MainListImage", [], "any", false, false, true, 57), 57, $this->source)), "save_image"), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 59
                    echo "                                        </div>
                                        <div class=\"ec-imageGrid__content\">
                                            <p class=\"ec-historyRole__detailTitle\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "</p>
                                            ";
                    // line 62
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", [], "any", false, false, true, 62))) {
                        // line 63
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 65
                    echo "                                            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", [], "any", false, false, true, 65))) {
                        // line 66
                        echo "                                                / ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 68
                    echo "                                            <p class=\"ec-historyRole__detailPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inc_tax", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                    echo "
                                                × ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "</p>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                <div class=\"ec-pagerRole\">
                    ";
            // line 78
            $this->loadTemplate("pager.twig", "Mypage/index.twig", 78)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 78)]));
            // line 79
            echo "                </div>
            ";
        } else {
            // line 81
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴はありません。"), "html", null, true);
            echo "</p>
            ";
        }
        // line 83
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 83,  215 => 81,  211 => 79,  209 => 78,  206 => 77,  197 => 73,  187 => 69,  182 => 68,  176 => 66,  173 => 65,  167 => 63,  165 => 62,  161 => 61,  157 => 59,  151 => 57,  145 => 55,  143 => 54,  139 => 52,  135 => 51,  125 => 46,  122 => 45,  116 => 42,  112 => 41,  109 => 40,  107 => 39,  102 => 37,  98 => 36,  93 => 34,  86 => 29,  82 => 28,  77 => 27,  75 => 26,  71 => 24,  69 => 23,  62 => 21,  57 => 18,  53 => 17,  48 => 11,  46 => 15,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/index.twig", "/var/www/html/src/Eccube/Resource/template/default/Mypage/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 23, "if" => 26, "for" => 28);
        static $filters = array("escape" => 21, "trans" => 21, "date_sec" => 34, "no_image_product" => 55, "price" => 68);
        static $functions = array("url" => 46, "asset" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'date_sec', 'no_image_product', 'price'],
                ['url', 'asset']
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
