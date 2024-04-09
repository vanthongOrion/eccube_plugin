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

/* MailMagazine42/Tests/Web/Admin/MailMagazineHistoryControllerTest.php */
class __TwigTemplate_a6221870f31cd5500a4f83ae73f84fe4 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Tests\\Web\\Admin;

use Plugin\\MailMagazine42\\Tests\\Web\\MailMagazineCommon;

class MailMagazineHistoryControllerTest extends MailMagazineCommon
{
    public function testIndex()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history')
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testPreview()
    {
        \$MailCustomer = \$this->createMailMagazineCustomer();
        \$SendHistory = \$this->createSendHistoy(\$MailCustomer);

        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_preview', ['id' => \$SendHistory->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testPreview_IdIncorrect()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_preview', ['id' => 9999999])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testPreview_IdIsNull()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_preview', ['id' => null])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testCondition()
    {
        \$MailCustomer = \$this->createMailMagazineCustomer();
        \$SendHistory = \$this->createSendHistoy(\$MailCustomer);

        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_condition', ['id' => \$SendHistory->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testCondition_IdIncorrect()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_condition', ['id' => 9999999])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testCondition_IdIsNull()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_condition', ['id' => null])
        );
        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testDelete()
    {
        \$MailCustomer = \$this->createMailMagazineCustomer();
        \$SendHistory = \$this->createSendHistoy(\$MailCustomer);

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_history_delete', ['id' => \$SendHistory->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_history')));
    }

    public function testDelete_IdIncorrect()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_history_delete', ['id' => 9999999])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testDelete_IdIsNull()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_history_delete', ['id' => null])
        );
        \$this->assertEquals(404, \$this->client->getResponse()->getStatusCode());
    }

    public function testDelete_NotPost()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_history_delete', ['id' => null])
        );
        \$this->assertEquals(404, \$this->client->getResponse()->getStatusCode());
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Tests/Web/Admin/MailMagazineHistoryControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Tests/Web/Admin/MailMagazineHistoryControllerTest.php", "/var/www/html/app/Plugin/MailMagazine42/Tests/Web/Admin/MailMagazineHistoryControllerTest.php");
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
