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

/* Api42/Resource/locale/messages.en.yaml */
class __TwigTemplate_e2025b0da29c72f90712333bea97a9dd extends \Eccube\Twig\Template
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
  # Settings : API
  #------------------------------------------------------------------------------------

  admin:
    management: API
    oauth:
      endpoint: Endpoint
      authorization_endpoint: Authorization endpoint
      token_endpoint: Token endpoint
      api_endpoint: API endpoint
      management: OAuth
      identifier: Client ID
      identifier_tooltip: Up to 32 alphanumeric characters
      secret: Client Secret
      secret_tooltip: Up to 128 alphanumeric characters
      scope: Scope
      scope_tooltip: GraphQL Query requires read, Mutation requires write/write Scope
      scope.read.description: 'Read %shop_name% data'
      scope.write.description: 'Write %shop_name% data'
      redirect_uri: Redirect URI
      redirect_uri_tooltip: You can enter multiple URIs separated by commas
      grant_type: Grant Type
      grant_type_tooltip: Supports only authorization code grant
      client_registration: Client Registration
      delete__confirm_title: Delete a Client
      delete__confirm_message: Are you sure to delete this Client?
      clear_expired_tokens: Clears all expired access and/or refresh tokens
      copy: Copy
      copied: Copied
      allow__confirm_message: 'Do you want to allow access this app to %shop_name%?'
      allow__confirm_description: 'Allow this app to:'
      allow: Allow
      deny: Deny
    webhook:
      management:  WebHook
      registration: WebHook Registration
      payload_url: Payload URL
      secret: Secret
      secret.tooltip: The payload is signed by HMAC-SHA256 with the entered value as a key in the X-ECCUBE-Signature header.
      enabled: Enable / Disable
      search_no_result_message: No WebHooks.
      delete__confirm_title: Delete a WebHook
      delete__confirm_message: Are you sure to delete this WebHook?
    graphiql:
      name: GraphiQL

  #------------------------------------------------------------------------------------
  # API
  #------------------------------------------------------------------------------------

  search_form_query:
    args:
      description:
        page: Page number
        limit: Limit number per page
  update_product_stock:
    args:
      description:
        product_code: SKU
        stock: Stock (If the stock_unlimited is set to false, please set the value more than 0.)
        stock_unlimited: 'Stock unlimited (Specify false: Limited or true: Unlimited)'
  update_shipped:
    args:
      description:
        id: Shipping ID
        shipping_date: Shipping Date (Specify like Y-m-d\\TH:i:sP. Execution date if not specified.)
        shipping_delivery_name: Delivery Company Name
        tracking_number: Tracking No.
        note: Notes
        is_send_mail: Shipment completion email send flag (specify true when sending)
";
    }

    public function getTemplateName()
    {
        return "Api42/Resource/locale/messages.en.yaml";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/locale/messages.en.yaml", "/var/www/html/app/Plugin/Api42/Resource/locale/messages.en.yaml");
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
