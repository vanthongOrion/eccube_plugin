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

/* Securitychecker42/Entity/Config.php */
class __TwigTemplate_b08700f5f716e383aef1d7f270b0318b extends \Eccube\Twig\Template
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

namespace Plugin\\Securitychecker42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * Config
 *
 * @ORM\\Table(name=\"plg_Securitychecker4_config\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\Securitychecker42\\Repository\\ConfigRepository\")
 */
class Config extends \\Eccube\\Entity\\AbstractEntity
{
    /** @var int */
    const DEFAULT_ID = 1;

    /**
     * @var integer
     * @ORM\\Column(name=\"id\", type=\"smallint\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"NONE\")
     */
    private \$id = self::DEFAULT_ID;

    /**
     * @var string
     * @ORM\\Column(name=\"check_result\", type=\"text\", nullable=true)
     */
    private \$check_result;

    /**
     * @var \\DateTime
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @var \\DateTime
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set check_result
     *
     * @param string \$check_result
     *
     * @return Config
     */
    public function setCheckResult(\$check_result)
    {
        \$this->check_result = \$check_result;

        return \$this;
    }

    /**
     * Get check_result
     *
     * @return string
     */
    public function getCheckResult()
    {
        return \$this->check_result;
    }

    /**
     * Set create_date.
     *
     * @param \\DateTime \$createDate
     *
     * @return Config
     */
    public function setCreateDate(\$createDate)
    {
        \$this->create_date = \$createDate;

        return \$this;
    }

    /**
     * Get create_date.
     *
     * @return \\DateTime
     */
    public function getCreateDate()
    {
        return \$this->create_date;
    }

    /**
     * Set update_date.
     *
     * @param \\DateTime \$updateDate
     *
     * @return Config
     */
    public function setUpdateDate(\$updateDate)
    {
        \$this->update_date = \$updateDate;

        return \$this;
    }

    /**
     * Get update_date.
     *
     * @return \\DateTime
     */
    public function getUpdateDate()
    {
        return \$this->update_date;
    }
}
";
    }

    public function getTemplateName()
    {
        return "Securitychecker42/Entity/Config.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Securitychecker42/Entity/Config.php", "/var/www/html/app/Plugin/Securitychecker42/Entity/Config.php");
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
