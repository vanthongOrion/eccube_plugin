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

/* ProductReview42/Form/Type/Admin/ProductReviewConfigType.php */
class __TwigTemplate_cbdae6acbab6bc047fbd765c9bb08917 extends \Eccube\Twig\Template
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

namespace Plugin\\ProductReview42\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Plugin\\ProductReview42\\Entity\\ProductReviewConfig;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * Class ProductReviewConfigType.
 */
class ProductReviewConfigType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * ProductReviewConfigType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(EccubeConfig \$eccubeConfig)
    {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * Build form.
     *
     * @param FormBuilderInterface \$builder
     * @param array                \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$min = \$this->eccubeConfig['product_review_display_count_min'];
        \$max = \$this->eccubeConfig['product_review_display_count_max'];

        \$builder
            ->add('review_max', IntegerType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Range(['min' => \$min, 'max' => \$max]),
                ],
            ]);
    }

    /**
     * Config.
     *
     * @param OptionsResolver \$resolver
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => ProductReviewConfig::class,
        ]);
    }
}
";
    }

    public function getTemplateName()
    {
        return "ProductReview42/Form/Type/Admin/ProductReviewConfigType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Form/Type/Admin/ProductReviewConfigType.php", "/var/www/html/app/Plugin/ProductReview42/Form/Type/Admin/ProductReviewConfigType.php");
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
