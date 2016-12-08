<?php

/* settings.html */
class __TwigTemplate_02f85928d54a4254c01a74dc32fbbb9b8969552105537c8504c6af445b7de926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "settings.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"mailpoet_settings\">

    <h1 class=\"title\">";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings");
        echo "</h1>

    <!-- settings form  -->
    <form
      id=\"mailpoet_settings_form\"
      name=\"mailpoet_settings_form\"
      class=\"mailpoet_form\"
      autocomplete=\"off\"
      novalidate
    >
      <!-- tabs -->
      <h2 class=\"nav-tab-wrapper\" id=\"mailpoet_settings_tabs\">
        <a class=\"nav-tab\" href=\"#basics\">";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Basics");
        echo "</a>
        <a class=\"nav-tab\" href=\"#signup\">";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Signup Confirmation");
        echo "</a>
        <a class=\"nav-tab\" href=\"#mta\">";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send With...");
        echo "</a>
        <a class=\"nav-tab\" href=\"#advanced\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Advanced");
        echo "</a>
      </h2>

      <!-- basics -->
      <div data-tab=\"basics\" class=\"mailpoet_panel\">
        ";
        // line 26
        $this->loadTemplate("settings/basics.html", "settings.html", 26)->display($context);
        // line 27
        echo "      </div>

      <!-- signup confirmation -->
      <div data-tab=\"signup\" class=\"mailpoet_panel\">
        ";
        // line 31
        $this->loadTemplate("settings/signup.html", "settings.html", 31)->display($context);
        // line 32
        echo "      </div>

      <!-- sending method -->
      <div data-tab=\"mta\" class=\"mailpoet_panel\">
        ";
        // line 36
        $this->loadTemplate("settings/mta.html", "settings.html", 36)->display($context);
        // line 37
        echo "      </div>

      <!-- advanced -->
      <div data-tab=\"advanced\" class=\"mailpoet_panel\">
        ";
        // line 41
        $this->loadTemplate("settings/advanced.html", "settings.html", 41)->display($context);
        // line 42
        echo "      </div>

      <p class=\"submit mailpoet_settings_submit\" style=\"display:none;\">
        <input
          type=\"submit\"
          class=\"button button-primary\"
          name=\"submit\"
          value=\"";
        // line 49
        echo "Save settings";
        echo "\"
        />
      </p>
    </form>
  </div>

  <script type=\"text/javascript\">
    jQuery(function(\$) {
      // on dom loaded
      \$(function() {
        // on form submission
        \$('#mailpoet_settings_form').on('submit', function() {
          // if we're setting up a sending method, try to activate it
          if (\$('.mailpoet_mta_setup_save').is(':visible')) {
            \$('.mailpoet_mta_setup_save').trigger('click');
          }
          saveSettings();
          return false;
        });

        function saveSettings() {
          // serialize form data
          var settings_data = \$('#mailpoet_settings_form').serializeObject();

          // show loading screen
          MailPoet.Modal.loading(true);

          MailPoet.Ajax.post({
            endpoint: 'settings',
            action: 'set',
            data: settings_data
          }).always(function() {
            MailPoet.Modal.loading(false);
          }).done(function(response) {
            MailPoet.Notice.success(
              \"";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings saved");
        echo "\",
              { scroll: true }
            );
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }

        // setup toggle checkboxes
        function toggleContent() {
          \$('#'+\$(this).data('toggle'))[
            (\$(this).is(':checked'))
            ? 'show'
            : 'hide'
          ]();
        }

        \$(document).on('click', 'input[data-toggle]', toggleContent);
        \$('input[data-toggle]').each(toggleContent);

        // page preview
        \$('.mailpoet_page_preview').on('click', function() {
          var selection = \$(this).siblings('.mailpoet_page_selection');

          if (selection.length > 0) {
            \$(this).attr('href', \$(selection).find('option[value=\"'+\$(selection).val()+'\"]').data('preview-url'));
            \$(this).attr('target', '_blank');
          } else {
            \$(this).attr('href', 'javascript:;');
            \$(this).removeAttr('target');
          }
        });
      });
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 84,  105 => 49,  96 => 42,  94 => 41,  88 => 37,  86 => 36,  80 => 32,  78 => 31,  72 => 27,  70 => 26,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings.html", "/Users/Mac/Sites/Works/encyklopedie/wp-content/plugins/mailpoet/views/settings.html");
    }
}
