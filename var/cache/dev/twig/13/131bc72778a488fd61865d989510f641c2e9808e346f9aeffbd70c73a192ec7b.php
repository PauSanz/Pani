<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_58117fd9f6d2d7dc38774a342f0865639da2fab6efeb424eac1b69b8e8b293d4 extends Twig_Template
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
        $__internal_e79201861d724c7de643411de1451d3884cdd76e41bbb7c76d4993b67143ae9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79201861d724c7de643411de1451d3884cdd76e41bbb7c76d4993b67143ae9e->enter($__internal_e79201861d724c7de643411de1451d3884cdd76e41bbb7c76d4993b67143ae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ce810fab10b306bb9e6d2dcbc5b8e83e05e1a1c0c4d68eaf161766663e6390e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce810fab10b306bb9e6d2dcbc5b8e83e05e1a1c0c4d68eaf161766663e6390e6->enter($__internal_ce810fab10b306bb9e6d2dcbc5b8e83e05e1a1c0c4d68eaf161766663e6390e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e79201861d724c7de643411de1451d3884cdd76e41bbb7c76d4993b67143ae9e->leave($__internal_e79201861d724c7de643411de1451d3884cdd76e41bbb7c76d4993b67143ae9e_prof);

        
        $__internal_ce810fab10b306bb9e6d2dcbc5b8e83e05e1a1c0c4d68eaf161766663e6390e6->leave($__internal_ce810fab10b306bb9e6d2dcbc5b8e83e05e1a1c0c4d68eaf161766663e6390e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
