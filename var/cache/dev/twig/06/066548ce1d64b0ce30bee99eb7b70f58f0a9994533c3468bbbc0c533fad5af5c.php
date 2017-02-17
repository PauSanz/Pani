<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_22d5a44fcb2daef5e3be10cc69e4fd9d3060b6833dc43bd50e6c647157d37e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27c29270f8140fff864e41d5a3a2582b089a305f260dd36ceb22c031e33d7213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c29270f8140fff864e41d5a3a2582b089a305f260dd36ceb22c031e33d7213->enter($__internal_27c29270f8140fff864e41d5a3a2582b089a305f260dd36ceb22c031e33d7213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_375d0c50dea6e170aa5e6e4d35a9bf9496dc54b3618b7b0639d141087f3344c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375d0c50dea6e170aa5e6e4d35a9bf9496dc54b3618b7b0639d141087f3344c9->enter($__internal_375d0c50dea6e170aa5e6e4d35a9bf9496dc54b3618b7b0639d141087f3344c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_27c29270f8140fff864e41d5a3a2582b089a305f260dd36ceb22c031e33d7213->leave($__internal_27c29270f8140fff864e41d5a3a2582b089a305f260dd36ceb22c031e33d7213_prof);

        
        $__internal_375d0c50dea6e170aa5e6e4d35a9bf9496dc54b3618b7b0639d141087f3344c9->leave($__internal_375d0c50dea6e170aa5e6e4d35a9bf9496dc54b3618b7b0639d141087f3344c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
