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

/* Api42/Resource/locale/messages.ja.yaml */
class __TwigTemplate_c649c52632cc0a863660c55d7be84741 extends \Eccube\Twig\Template
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
        echo "api:

  #------------------------------------------------------------------------------------
  # 設定：API管理
  #------------------------------------------------------------------------------------

  admin:
    management: API管理
    oauth:
      endpoint: Endpoint
      authorization_endpoint: Authorization endpoint
      token_endpoint: Token endpoint
      api_endpoint: API endpoint
      management: OAuth管理
      identifier: クライアントID
      identifier_tooltip: 32文字以下の半角英数
      secret: クライアントシークレット
      secret_tooltip: 128文字以下の半角英数
      scope: スコープ
      scope_tooltip: GraphQLのQueryにはread, Mutationにはwrite/writeのScopeが必要
      scope.read.description: '%shop_name%のデータに対する読み取り'
      scope.write.description: '%shop_name%のデータに対する書き込み'
      redirect_uri: リダイレクトURI
      redirect_uri_tooltip: カンマ区切りで複数のURIを入力可能
      grant_type: グラントタイプ
      grant_type_tooltip: Authorization code grantのみサポート
      client_registration: OAuthクライアント登録
      delete__confirm_title: OAuthクライアントを削除します。
      delete__confirm_message: OAuthクライアントを削除してよろしいですか？
      clear_expired_tokens: 期限切れのアクセストークンとリフレッシュトークンを削除する
      copy: コピーする
      copied: コピーしました
      allow__confirm_message: 'アプリから%shop_name%へのアクセスを許可しますか？'
      allow__confirm_description: 'このアプリに以下を許可します:'
      allow: 許可する
      deny: 許可しない
    webhook:
      management:  WebHook管理
      registration: WebHook登録
      payload_url: Payload URL
      secret: シークレット
      secret.tooltip: 入力された値をキーにしてペイロードをHMAC-SHA256により署名した値をX-ECCUBE-Signatureヘッダーに設定します
      enabled: 有効/無効
      search_no_result_message: WebHookが登録されていません
      delete__confirm_title: WebHookを削除します
      delete__confirm_message: WebHookを削除してもよろしいですか？
    graphiql:
      name: GraphiQL
  #------------------------------------------------------------------------------------
  # API
  #------------------------------------------------------------------------------------

  search_form_query:
    args:
      description:
        page: ページ番号
        limit: ページあたりの取得数の上限
  update_product_stock:
    args:
      description:
        product_code: 商品コード
        stock: 在庫数（在庫無制限の場合、0以上の数値を指定）
        stock_unlimited: 在庫無制限（無制限は true 、制限は false を指定）
  update_shipped:
    args:
      description:
        id: 出荷ID
        shipping_date: 出荷日（ Y-m-d\\TH:i:sP 形式で指定可能、未指定の場合は実行日時）
        shipping_delivery_name: 出荷業者
        tracking_number: お問い合わせ番号
        note: 出荷用メモ欄
        is_send_mail: 出荷完了メール送信フラグ（送信する場合は true を指定）
";
    }

    public function getTemplateName()
    {
        return "Api42/Resource/locale/messages.ja.yaml";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/locale/messages.ja.yaml", "/var/www/html/app/Plugin/Api42/Resource/locale/messages.ja.yaml");
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
