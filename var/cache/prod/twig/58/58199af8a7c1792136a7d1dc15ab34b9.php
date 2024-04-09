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

/* SalesReport42/Resource/locale/messages.ja.yml */
class __TwigTemplate_cd191ff57c6a215f5444f64f9b145b8e extends \Eccube\Twig\Template
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
        echo "sales_report.admin.type.monthly.error: 集計月を選択してください。
sales_report.admin.type.term_start.error: 集計期間を正しく選択してください。
sales_report.admin.label.monthly_year: 年
sales_report.admin.label.monthly_month: 月
sales_report.admin.label.term_start: 期間集計
sales_report.admin.label.term_end: 期間集計
sales_report.admin.label.unit: 集計単位
sales_report.admin.label.byDay: 日別
sales_report.admin.label.byMonth: 月別
sales_report.admin.label.byWeekDay: 曜日別
sales_report.admin.label.byHour: 時間別

sales_report.admin.title: 売上管理
sales_report.admin.report_title: 年代別集計
sales_report.admin.sub.title.age: 年代別集計
sales_report.admin.sub.title.product: 商品別集計
sales_report.admin.sub.title.term: 期間別集計

sales_report.admin.csv.download: CSVダウンロード
sales_report.admin.age.field.001: 年代
sales_report.admin.age.field.002: 購入件数(件)
sales_report.admin.age.field.003: 購入合計
sales_report.admin.age.field.004: 購入平均
sales_report.admin.age.list.001: 未回答
sales_report.admin.age.list.002: 代
sales_report.admin.list.nodata: 集計期間にデータがありませんでした。
sales_report.admin.money: \"購入合計: ¥\"
sales_report.admin.money.code: \"¥\"
sales_report.admin.index.001: 月度集計
sales_report.admin.index.002: 月度で集計
sales_report.admin.index.003: 期間集計
sales_report.admin.index.004: 期間で集計
sales_report.admin.placholder: 年-月-日
sales_report.admin.product.report_title: 商品別集計
sales_report.admin.product.001: 商品別集計 上位
sales_report.admin.product.002: 件
sales_report.admin.product.003: 商品コード
sales_report.admin.product.004: 商品名
sales_report.admin.product.005: 購入件数(件)
sales_report.admin.product.006: 数量(個)
sales_report.admin.product.007: 金額
sales_report.admin.term.report_title: 期間別集計
sales_report.admin.term.001: 集計単位
sales_report.admin.list.label.001: 期間
sales_report.admin.list.label.002: 購入件数
sales_report.admin.list.label.003: 男性
sales_report.admin.list.label.004: 女性
sales_report.admin.list.label.005: 不明
sales_report.admin.list.label.006: 男性 (会員)
sales_report.admin.list.label.007: 男性 (非会員)
sales_report.admin.list.label.008: 女性 (会員)
sales_report.admin.list.label.009: 女性 (非会員)
sales_report.admin.list.label.010: 購入合計
sales_report.admin.list.label.011: 購入平均
sales_report.admin.list.label.012: 購入合計

sales_report.admin.productCsvHeader.001: 商品コード
sales_report.admin.productCsvHeader.002: 商品名
sales_report.admin.productCsvHeader.003: 購入件数（件）
sales_report.admin.productCsvHeader.004: 数量（個）
sales_report.admin.productCsvHeader.005: 金額

sales_report.admin.termCsvHeader.001: 期間
sales_report.admin.termCsvHeader.002: 購入件数
sales_report.admin.termCsvHeader.003: 男性
sales_report.admin.termCsvHeader.004: 女性
sales_report.admin.termCsvHeader.005: 不明
sales_report.admin.termCsvHeader.006: 男性(会員)
sales_report.admin.termCsvHeader.007: 男性(非会員)
sales_report.admin.termCsvHeader.008: 女性(会員)
sales_report.admin.termCsvHeader.009: 女性(非会員)
sales_report.admin.termCsvHeader.010: 購入合計
sales_report.admin.termCsvHeader.011: 購入平均

sales_report.admin.ageCsvHeader.001: 年代
sales_report.admin.ageCsvHeader.002: 購入件数(件)
sales_report.admin.ageCsvHeader.003: 購入合計
sales_report.admin.ageCsvHeader.004: 購入平均

sales_report.admin.generation: 代
sales_report.admin.nav.001: 売上集計
sales_report.admin.nav.002: 期間別集計
sales_report.admin.nav.003: 商品別集計
sales_report.admin.nav.004: 年代別集計";
    }

    public function getTemplateName()
    {
        return "SalesReport42/Resource/locale/messages.ja.yml";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/Resource/locale/messages.ja.yml", "/var/www/html/app/Plugin/SalesReport42/Resource/locale/messages.ja.yml");
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
