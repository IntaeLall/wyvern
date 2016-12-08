<?php

/* settings/advanced.html */
class __TwigTemplate_f19087750db02dd635b6d94c35e5041a32ed0876da5ddbc86bc617824157206a extends Twig_Template
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
        // line 1
        echo "<table class=\"form-table\">
  <tbody>
    <!-- bounce email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[bounce_email]\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce email address");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your bounced emails will be sent to this address");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[bounce_email]\"
            name=\"bounce[address]\"
            value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bounce", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"bounce@mydomain.com\"
          />
        </p>
      </td>
    </tr>
    <!-- task scheduler -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter task scheduler (cron)");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select what will activate your newsletter queue.");
        echo "
          <a href=\"http://docs.mailpoet.com/article/129-what-is-the-newsletter-task-scheduler\"
             target=\"_blank\"
          >";
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more.");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "wordpress", array()), "html", null, true);
        echo "\"
              ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cron_trigger", array()), "method", array()) == $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "wordpress", array()))) {
            // line 45
            echo "              checked=\"checked\"
              ";
        }
        // line 47
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors to your website (recommended)");
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "mailpoet", array()), "html", null, true);
        echo "\"
              ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cron_trigger", array()), "method", array()) == $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "mailpoet", array()))) {
            // line 57
            echo "                checked=\"checked\"
                ";
        }
        // line 59
        echo "              />";
        echo twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet's own script. Doesn't work with [link]these hosts[/link]."), array("[link]" => "<a target=\"_blank\" href=\"http://docs.mailpoet.com/article/131-hosts-which-mailpoet-task-scheduler-wont-work\">", "[/link]" => "</a>"));
        // line 65
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- link tracking -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 74
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open and click tracking");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 77
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable or disable open and click tracking.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              value=\"1\"
              ";
        // line 87
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tracking", array()), "enabled", array())) {
            // line 88
            echo "              checked=\"checked\"
              ";
        }
        // line 90
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              value=\"\"
              ";
        // line 98
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tracking", array()), "enabled", array())) {
            // line 99
            echo "              checked=\"checked\"
              ";
        }
        // line 101
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- share anonymous data? -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 110
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 113
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data and help us improve the plugin. We appreciate your help!");
        echo "
          <a
            href=\"http://docs.mailpoet.com/article/130-sharing-your-data-with-us\"
            target=\"_blank\"
          >";
        // line 117
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more.");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"1\"
              ";
        // line 127
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 128
            echo "                checked=\"checked\"
              ";
        }
        // line 130
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"\"
              ";
        // line 138
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 139
            echo "                checked=\"checked\"
              ";
        }
        // line 141
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- reinstall -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 149
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall from scratch");
        echo "</label>
        <p class=\"description\">
          ";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to start from the beginning? This will completely delete MailPoet and reinstall it from scratch. Remember: you will lose all of your data!");
        echo "
        </p>
      </th>
      <td>
        <p>
          <a
            id=\"mailpoet_reinstall\"
            class=\"button\"
            href=\"javascript:;\">";
        // line 159
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall now...");
        echo "</a>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$(function() {
      \$('#mailpoet_reinstall').on('click', function() {
        if(confirm(
          \"";
        // line 171
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Are you sure? All of your MailPoet data will be permanently erased (newsletters, statistics, subscribers, etc.)");
        echo "\"
        )) {
          MailPoet.Modal.loading(true);
          MailPoet.Ajax.post({
            'endpoint': 'setup',
            'action': 'reset'
          }).always(function() {
            MailPoet.Modal.loading(false);
          }).done(function(response) {
            window.location = \"";
        // line 180
        echo admin_url("admin.php?page=mailpoet-newsletters");
        echo "\";
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }
        return false;
      });
    });
  });
</script>";
    }

    public function getTemplateName()
    {
        return "settings/advanced.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 180,  276 => 171,  261 => 159,  250 => 151,  245 => 149,  233 => 141,  229 => 139,  227 => 138,  215 => 130,  211 => 128,  209 => 127,  196 => 117,  189 => 113,  183 => 110,  170 => 101,  166 => 99,  164 => 98,  152 => 90,  148 => 88,  146 => 87,  133 => 77,  127 => 74,  116 => 65,  113 => 59,  109 => 57,  107 => 56,  103 => 55,  91 => 47,  87 => 45,  85 => 44,  81 => 43,  69 => 34,  63 => 31,  57 => 28,  44 => 18,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/advanced.html", "/Users/Mac/Sites/Works/encyklopedie/wp-content/plugins/mailpoet/views/settings/advanced.html");
    }
}
