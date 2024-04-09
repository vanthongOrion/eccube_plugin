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

/* SiteKit42/Entity/BaseInfoTrait.php */
class __TwigTemplate_d8f625a3354c1127e0fe1b66c1486be3 extends \Eccube\Twig\Template
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

namespace Plugin\\SiteKit42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Annotation\\EntityExtension;

/**
 * @EntityExtension(\"\\Eccube\\Entity\\BaseInfo\");
 */
trait BaseInfoTrait
{
    /**
     * @ORM\\Column(type=\"string\", nullable=true)
     */
    private \$siteKitSiteId;

    /**
     * @ORM\\Column(type=\"string\", nullable=true)
     */
    private \$siteKitSiteSecret;

    /**
     * @return mixed
     */
    public function getSiteKitSiteId()
    {
        return \$this->siteKitSiteId;
    }

    /**
     * @param mixed \$siteKitSiteId
     */
    public function setSiteKitSiteId(\$siteKitSiteId)
    {
        \$this->siteKitSiteId = \$siteKitSiteId;
    }

    /**
     * @return mixed
     */
    public function getSiteKitSiteSecret()
    {
        return \$this->siteKitSiteSecret;
    }

    /**
     * @param mixed \$siteKitSiteSecret
     */
    public function setSiteKitSiteSecret(\$siteKitSiteSecret)
    {
        \$this->siteKitSiteSecret = \$siteKitSiteSecret;
    }
}
";
    }

    public function getTemplateName()
    {
        return "SiteKit42/Entity/BaseInfoTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Entity/BaseInfoTrait.php", "/var/www/html/app/Plugin/SiteKit42/Entity/BaseInfoTrait.php");
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
