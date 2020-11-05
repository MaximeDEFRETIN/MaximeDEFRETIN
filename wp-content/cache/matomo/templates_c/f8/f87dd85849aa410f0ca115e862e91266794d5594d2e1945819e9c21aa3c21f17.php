<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrivacyManager/privacySettings.twig */
class __TwigTemplate_26fc765a4b673f757bbc6319da2b51c6e22fd4dc4a5e324e1e81ab9892aac924 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_AnonymizeData"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@PrivacyManager/privacySettings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        $context["piwik"] = $this->loadTemplate("macros.twig", "@PrivacyManager/privacySettings.twig", 6)->unwrap();
        // line 7
        echo "
<div piwik-content-intro>
    <h2 piwik-enriched-headline help-url=\"https://matomo.org/docs/privacy/\">";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

    <p>";
        // line 11
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_TeaserHeader", "<a href=\"#anonymizeIPAnchor\">", "</a>", "<a href=\"#deleteLogsAnchor\">", "</a>", "<a href=\"#anonymizeHistoricalData\">", "</a>"]);
        echo "
        ";
        // line 12
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_SeeAlsoOurOfficialGuidePrivacy", "<a href=\"https://matomo.org/privacy/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>
</div>

<div piwik-content-block
     id=\"anonymizeIPAnchor\"
     content-title=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseAnonymizeTrackingData"]), "html_attr");
        echo "\">
    <div piwik-form ng-controller=\"AnonymizeIpController as anonymizeIp\">

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeIpSettings\"
             ng-model=\"anonymizeIp.enabled\"
             data-title=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseAnonymizeIp"]), "html_attr");
        echo "\"
             value=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["anonymizeIP"] ?? $this->getContext($context, "anonymizeIP")), "enabled", []), "html", null, true);
        echo "\"
             inline-help=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_AnonymizeIpInlineHelp"]), "html_attr");
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_AnonymizeIpDescription"]), "html_attr");
        echo "\">
        </div>

        <div ng-show=\"anonymizeIp.enabled\">
            <div piwik-field uicontrol=\"radio\" name=\"maskLength\"
                 ng-model=\"anonymizeIp.maskLength\"
                 data-title=\"";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_AnonymizeIpMaskLengtDescription"]), "html_attr");
        echo "\"
                 value=\"";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["anonymizeIP"] ?? $this->getContext($context, "anonymizeIP")), "maskLength", []), "html", null, true);
        echo "\"
                 options=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["maskLengthOptions"] ?? $this->getContext($context, "maskLengthOptions"))), "html", null, true);
        echo "\"
                 inline-help=\"";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_GeolocationAnonymizeIpNote"]), "html_attr");
        echo "\">
            </div>

            <div piwik-field uicontrol=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\"
                 ng-model=\"anonymizeIp.useAnonymizedIpForVisitEnrichment\"
                 data-title=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseAnonymizedIpForVisitEnrichment"]), "html_attr");
        echo "\"
                 value=\"";
        // line 39
        if ($this->getAttribute(($context["anonymizeIP"] ?? $this->getContext($context, "anonymizeIP")), "useAnonymizedIpForVisitEnrichment", [])) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
                 options=\"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["useAnonymizedIpForVisitEnrichmentOptions"] ?? $this->getContext($context, "useAnonymizedIpForVisitEnrichmentOptions"))), "html", null, true);
        echo "\"
                 inline-help=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseAnonymizedIpForVisitEnrichmentNote"]), "html_attr");
        echo "\">
            </div>
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeUserId\"
             ng-model=\"anonymizeIp.anonymizeUserId\"
             data-title=\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_PseudonymizeUserId"]), "html_attr");
        echo "\"
             value=\"";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["anonymizeIP"] ?? $this->getContext($context, "anonymizeIP")), "anonymizeUserId", []), "html", null, true);
        echo "\"
             inline-help=\"";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_PseudonymizeUserIdNote"]), "html_attr");
        echo "<br/><br/><em>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_PseudonymizeUserIdNote2"]), "html_attr");
        echo "</em>\">
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeOrderId\"
             ng-model=\"anonymizeIp.anonymizeOrderId\"
             data-title=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseAnonymizeOrderId"]), "html_attr");
        echo "\"
             value=\"";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["anonymizeIP"] ?? $this->getContext($context, "anonymizeIP")), "anonymizeOrderId", []), "html", null, true);
        echo "\"
             inline-help=\"";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_AnonymizeOrderIdNote"]), "html_attr");
        echo "\">
        </div>

        <div piwik-save-button onconfirm=\"anonymizeIp.save()\" saving=\"anonymizeIp.isLoading\"></div>
    </div>
</div>

";
        // line 63
        if (($context["isDataPurgeSettingsEnabled"] ?? $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
            // line 64
            echo "    <div piwik-content-block id=\"deleteLogsAnchor\"
         content-title=\"";
            // line 65
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteOldRawData"]), "html_attr");
            echo "\">
        <div class=\"ui-confirm\" id=\"confirmDeleteSettings\">
            <h2 id=\"deleteLogsConfirm\">";
            // line 67
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteLogsConfirm"]), "html", null, true);
            echo "</h2>

            <h2 id=\"deleteReportsConfirm\">";
            // line 69
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteReportsConfirm"]), "html", null, true);
            echo "</h2>

            <h2 id=\"deleteBothConfirm\">";
            // line 71
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteBothConfirm"]), "html", null, true);
            echo "</h2>
            <input role=\"yes\" type=\"button\" value=\"";
            // line 72
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
            echo "\"/>
            <input role=\"no\" type=\"button\" value=\"";
            // line 73
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
            echo "\"/>
        </div>
        <div class=\"ui-confirm\" id=\"saveSettingsBeforePurge\">
            <h2>";
            // line 76
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_SaveSettingsBeforePurge"]), "html", null, true);
            echo "</h2>
            <input role=\"yes\" type=\"button\" value=\"";
            // line 77
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
            echo "\"/>
        </div>
        <div class=\"ui-confirm\" id=\"confirmPurgeNow\">
            <h2>";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_PurgeNowConfirm"]), "html", null, true);
            echo "</h2>
            <input role=\"yes\" type=\"button\" value=\"";
            // line 81
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
            echo "\"/>
            <input role=\"no\" type=\"button\" value=\"";
            // line 82
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
            echo "\"/>
        </div>

        <p>";
            // line 85
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteDataDescription"]), "html", null, true);
            echo "</p>

        <div piwik-form
             ng-controller=\"DeleteOldLogsController as deleteOldLogs\"
             id=\"formDeleteSettings\">
            <div id=\"deleteLogSettingEnabled\">

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteEnable\"
                     ng-model=\"deleteOldLogs.enabled\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     data-title=\"";
            // line 95
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseDeleteLog"]), "html_attr");
            echo "\"
                     value=\"";
            // line 96
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_logs_enable", []), "html", null, true);
            echo "\"
                     inline-help=\"";
            // line 97
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteRawDataInfo"]), "html_attr");
            echo "\">
                </div>

                <div class=\"alert alert-warning deleteOldLogsWarning\" style=\"width: 50%;\" ng-show=\"deleteOldLogs.enabled\">
                    <a href=\"https://matomo.org/faq/general/#faq_125\" rel=\"noreferrer noopener\" target=\"_blank\">
                        ";
            // line 102
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ClickHere"]), "html", null, true);
            echo "
                    </a>
                </div>
            </div>

            <div id=\"deleteLogSettings\" ng-show=\"deleteOldLogs.enabled\">
                <div piwik-field uicontrol=\"text\" name=\"deleteOlderThan\"
                     ng-model=\"deleteOldLogs.deleteOlderThan\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     data-title=\"";
            // line 111
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteLogsOlderThan"]), "html_attr");
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Intl_PeriodDays"]), "html", null, true);
            echo ")\"
                     value=\"";
            // line 112
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_logs_older_than", []), "html", null, true);
            echo "\"
                     inline-help=\"";
            // line 113
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_LeastDaysInput", "1"]), "html_attr");
            echo "\">
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteOldLogs.save()\" saving=\"deleteOldLogs.isLoading\"></div>
        </div>
    </div>

    <div piwik-content-block id=\"deleteReportsAnchor\"
            content-title=\"";
            // line 122
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteOldAggregatedReports"]), "html_attr");
            echo "\">

        <div piwik-form
             ng-controller=\"DeleteOldReportsController as deleteReports\" 
             id=\"formDeleteSettings\">

            <div id=\"deleteReportsSettingEnabled\">

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsEnable\"
                     ng-model=\"deleteReports.enabled\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     data-title=\"";
            // line 133
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseDeleteReports"]), "html_attr");
            echo "\"
                     value=\"";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_enable", []), "html", null, true);
            echo "\"
                     inline-help=\"";
            // line 135
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteAggregateReportsDetailedInfo"]), "html_attr");
            echo "\">
                </div>

                <div class=\"alert alert-warning\" style=\"width: 50%;\" ng-show=\"deleteReports.enabled\">
                    ";
            // line 139
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_UseDeleteLog"]), "html", null, true);
            $context["deleteOldLogs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo "                    <span>
                        ";
            // line 141
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteReportsInfo2", ($context["deleteOldLogs"] ?? $this->getContext($context, "deleteOldLogs"))]), "html", null, true);
            echo "<br/><br/>
                        ";
            // line 142
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteReportsInfo3", ($context["deleteOldLogs"] ?? $this->getContext($context, "deleteOldLogs"))]), "html", null, true);
            echo "
                    </span>
                </div>

            </div>

            <div id=\"deleteReportsSettings\" ng-show=\"deleteReports.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"deleteReportsOlderThan\"
                     ng-model=\"deleteReports.deleteOlderThan\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     data-title=\"";
            // line 153
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteReportsOlderThan"]), "html_attr");
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Intl_PeriodMonths"]), "html", null, true);
            echo ")\"
                     value=\"";
            // line 154
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_older_than", []), "html", null, true);
            echo "\"
                     inline-help=\"";
            // line 155
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_LeastMonthsInput", "1"]), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepBasic\"
                     ng-model=\"deleteReports.keepBasic\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     data-title=\"";
            // line 161
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_KeepBasicMetrics"]), "html_attr");
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Recommended"]), "html_attr");
            echo ")\"
                     value=\"";
            // line 162
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_basic_metrics", []), "html", null, true);
            echo "\"
                     inline-help=\"";
            // line 163
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_KeepBasicMetricsReportsDetailedInfo"]), "html_attr");
            echo "\">
                </div>

                <h3>
                    ";
            // line 167
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_KeepDataFor"]), "html", null, true);
            echo "
                </h3>
                <div>

                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepDay\"
                         ng-model=\"deleteReports.keepDataForDay\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"";
            // line 174
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_DailyReports"]), "html_attr");
            echo "\"
                         value=\"";
            // line 175
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_day_reports", []), "html", null, true);
            echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepWeek\"
                         ng-model=\"deleteReports.keepDataForWeek\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"";
            // line 180
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_WeeklyReports"]), "html_attr");
            echo "\"
                         value=\"";
            // line 181
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_week_reports", []), "html", null, true);
            echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepMonth\"
                         ng-model=\"deleteReports.keepDataForMonth\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"";
            // line 186
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_MonthlyReports"]), "html_attr");
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Recommended"]), "html_attr");
            echo ")\"
                         value=\"";
            // line 187
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_month_reports", []), "html", null, true);
            echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepYear\"
                         ng-model=\"deleteReports.keepDataForYear\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"";
            // line 192
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_YearlyReports"]), "html_attr");
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Recommended"]), "html_attr");
            echo ")\"
                         value=\"";
            // line 193
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_year_reports", []), "html", null, true);
            echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepRange\"
                         ng-model=\"deleteReports.keepDataForRange\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"";
            // line 198
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_RangeReports"]), "html_attr");
            echo "\"
                         value=\"";
            // line 199
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_range_reports", []), "html", null, true);
            echo "\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepSegments\"
                         ng-model=\"deleteReports.keepDataForSegments\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"";
            // line 204
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_KeepReportSegments"]), "html_attr");
            echo "\"
                         value=\"";
            // line 205
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_reports_keep_segment_reports", []), "html", null, true);
            echo "\">
                    </div>
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteReports.save()\" saving=\"deleteReports.isLoading\"></div>
        </div>
    </div>

    <div piwik-form
         ng-controller=\"ScheduleReportDeletionController as reportDeletionSchedule\"
         id=\"formDeleteSettings\">

        <div piwik-content-block id=\"scheduleSettingsHeadline\"
             ng-show=\"reportDeletionSchedule.model.isEitherDeleteSectionEnabled()\"
             content-title=\"";
            // line 220
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteSchedulingSettings"]), "html_attr");
            echo "\">

            <div id=\"deleteSchedulingSettings\">
                <div id=\"deleteSchedulingSettingsInlineHelp\" class=\"inline-help-node\">
                    ";
            // line 224
            if ($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "lastRun", [])) {
                echo "<strong>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_LastDelete"]), "html", null, true);
                echo ":</strong>
                        ";
                // line 225
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "lastRunPretty", []), "html", null, true);
                echo "
                        <br/>
                        <br/>
                    ";
            }
            // line 229
            echo "                    <strong>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_NextDelete"]), "html", null, true);
            echo ":</strong>
                    ";
            // line 230
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "nextRunPretty", [])]);
            echo "
                    <br/>
                    <br/>
                    <a id=\"purgeDataNowLink\" href=\"#\"
                           ng-show=\"reportDeletionSchedule.showPurgeNowLink\"
                           ng-click=\"reportDeletionSchedule.executeDataPurgeNow()\">";
            // line 235
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_PurgeNow"]), "html", null, true);
            echo "</a>

                        <div piwik-activity-indicator
                             loading-message=\"'";
            // line 238
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_PurgingData"]), "html_attr");
            echo "'\"
                             loading=\"reportDeletionSchedule.loadingDataPurge\"></div>
                    <span id=\"db-purged-message\"
                          ng-show=\"reportDeletionSchedule.dataWasPurged\"
                    >";
            // line 242
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DBPurged"]), "html", null, true);
            echo "</span>
                </div>

                <div piwik-field uicontrol=\"select\" name=\"deleteLowestInterval\"
                     ng-model=\"reportDeletionSchedule.deleteLowestInterval\"
                     options=\"";
            // line 247
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["scheduleDeletionOptions"] ?? $this->getContext($context, "scheduleDeletionOptions"))), "html", null, true);
            echo "\"
                     data-title=\"";
            // line 248
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteDataInterval"]), "html_attr");
            echo "\"
                     value=\"";
            // line 249
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "delete_logs_schedule_lowest_interval", []), "html", null, true);
            echo "\"
                     inline-help=\"#deleteSchedulingSettingsInlineHelp\">
                </div>
            </div>

            ";
            // line 254
            if (($this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "enable_database_size_estimate", []) == "1")) {
                // line 255
                echo "            <div id=\"deleteDataEstimateSect\" class=\"form-group row\">

                <h3 class=\"col s12\" id=\"databaseSizeHeadline\">
                    ";
                // line 258
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_ReportsDataSavedEstimate"]), "html", null, true);
                echo "
                </h3>
                <div class=\"col s12 m6\">
                    <div id=\"deleteDataEstimate\" ng-show=\"reportDeletionSchedule.model.showEstimate\"
                          ng-bind-html=\"reportDeletionSchedule.model.estimation\"></div>
                    &nbsp;
                    <div piwik-activity-indicator loading=\"reportDeletionSchedule.model.loadingEstimation\"></div>
                </div>
                <div class=\"col s12 m6\">
                    ";
                // line 267
                if (($this->getAttribute($this->getAttribute(($context["deleteData"] ?? $this->getContext($context, "deleteData")), "config", []), "enable_auto_database_size_estimate", []) == "0")) {
                    // line 268
                    echo "                    <div class=\"form-help\">
                        <a id=\"getPurgeEstimateLink\"
                           ng-click=\"reportDeletionSchedule.model.reloadDbStats(true)\"
                           href=\"#\">";
                    // line 271
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_GetPurgeEstimate"]), "html", null, true);
                    echo "</a>
                    </div>
                    ";
                }
                // line 274
                echo "                </div>
            </div>
            ";
            }
            // line 277
            echo "
            <div piwik-save-button onconfirm=\"reportDeletionSchedule.save()\" saving=\"reportDeletionSchedule.isLoading\"></div>

        </div>
    ";
        }
        // line 282
        echo "</div>

    <a name=\"anonymizeHistoricalData\" id=\"anonymizeHistoricalData\"></a>

    <div piwik-content-block content-title=\"Anonymize previously tracked raw data\" class=\"logDataAnonymizer\">
        <p>If you have tracked personal data such as the full visitor IP, you may
            want to anonymize this data now in case you do not have consent for this data or no longer a legitimate
            interest.
        </p>

        ";
        // line 292
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 293
            echo "            <div matomo-anonymize-log-data></div>
        ";
        } else {
            // line 295
            echo "            <p>Only a user with Super User access can anonymize previously tracked raw data.</p>
        ";
        }
        // line 297
        echo "
        <br />
        <h3>Previous raw data anonymizations</h3>
        <table piwik-content-table>
            <thead>
            <tr>
                <th>Requester</th>
                <th>Affected ID Sites</th>
                <th>Affected date</th>
                <th>Anonymize</th>
                <th>Visit Columns</th>
                <th>Link Visit Action Columns</th>
                <th>Status</th>
            </tr></thead>
            <tbody>
            ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anonymizations"] ?? $this->getContext($context, "anonymizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 313
            echo "                ";
            $context["isStarted"] = ($this->getAttribute($context["entry"], "job_start_date", []) ||  !twig_test_empty($this->getAttribute($context["entry"], "job_start_date", [])));
            // line 314
            echo "                ";
            $context["isFinished"] = ($this->getAttribute($context["entry"], "job_finish_date", []) ||  !twig_test_empty($this->getAttribute($context["entry"], "job_finish_date", [])));
            // line 315
            echo "                <tr>
                    <td>";
            // line 316
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "requester", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 317
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "sites", []), ", "), "html", null, true);
            echo "</td>
                    <td>";
            // line 318
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "date_start", []), "html", null, true);
            echo " - ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "date_end", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 319
            if ($this->getAttribute($context["entry"], "anonymize_ip", [])) {
                echo "<span>IP address<br /></span>";
            }
            // line 320
            echo "                        ";
            if ($this->getAttribute($context["entry"], "anonymize_location", [])) {
                echo "<span>Location<br /></span>";
            }
            // line 321
            echo "                        ";
            if ($this->getAttribute($context["entry"], "anonymize_userid", [])) {
                echo "<span>User ID</span>";
            }
            // line 322
            echo "                        ";
            if ((( !$this->getAttribute($context["entry"], "anonymize_ip", []) &&  !$this->getAttribute($context["entry"], "anonymize_location", [])) &&  !$this->getAttribute($context["entry"], "anonymize_userid", []))) {
                echo "-";
            }
            // line 323
            echo "                    </td>
                    <td>";
            // line 324
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "unset_visit_columns", []), ", "), "html", null, true);
            echo "</td>
                    <td>";
            // line 325
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "unset_link_visit_action_columns", []), ", "), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 327
            if ( !($context["isStarted"] ?? $this->getContext($context, "isStarted"))) {
                // line 328
                echo "                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: ";
                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["entry"], "scheduled_date", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "scheduled_date", []), "")) : ("")), "html", null, true);
                echo ".\"></span> Scheduled
                        ";
            } elseif ((            // line 329
($context["isStarted"] ?? $this->getContext($context, "isStarted")) &&  !($context["isFinished"] ?? $this->getContext($context, "isFinished")))) {
                // line 330
                echo "                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: ";
                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["entry"], "scheduled_date", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "scheduled_date", []), "")) : ("")), "html", null, true);
                echo ". Job Start Date: ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "job_start_date", []), "html", null, true);
                echo ". Current Output: ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "output", []), "html", null, true);
                echo "\"></span> In progress
                        ";
            } else {
                // line 332
                echo "                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: ";
                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["entry"], "scheduled_date", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "scheduled_date", []), "")) : ("")), "html", null, true);
                echo ". Job Start Date: ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "job_start_date", []), "html", null, true);
                echo ". Job Finish Date: ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "job_finish_date", []), "html", null, true);
                echo ". Output: ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "output", []), "html", null, true);
                echo "\"></span> Done
                        ";
            }
            // line 334
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@PrivacyManager/privacySettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  735 => 337,  727 => 334,  715 => 332,  705 => 330,  703 => 329,  698 => 328,  696 => 327,  691 => 325,  687 => 324,  684 => 323,  679 => 322,  674 => 321,  669 => 320,  665 => 319,  659 => 318,  655 => 317,  651 => 316,  648 => 315,  645 => 314,  642 => 313,  638 => 312,  621 => 297,  617 => 295,  613 => 293,  611 => 292,  599 => 282,  592 => 277,  587 => 274,  581 => 271,  576 => 268,  574 => 267,  562 => 258,  557 => 255,  555 => 254,  547 => 249,  543 => 248,  539 => 247,  531 => 242,  524 => 238,  518 => 235,  510 => 230,  505 => 229,  498 => 225,  492 => 224,  485 => 220,  467 => 205,  463 => 204,  455 => 199,  451 => 198,  443 => 193,  437 => 192,  429 => 187,  423 => 186,  415 => 181,  411 => 180,  403 => 175,  399 => 174,  389 => 167,  382 => 163,  378 => 162,  372 => 161,  363 => 155,  359 => 154,  353 => 153,  339 => 142,  335 => 141,  332 => 140,  328 => 139,  321 => 135,  317 => 134,  313 => 133,  299 => 122,  287 => 113,  283 => 112,  277 => 111,  265 => 102,  257 => 97,  253 => 96,  249 => 95,  236 => 85,  230 => 82,  226 => 81,  222 => 80,  216 => 77,  212 => 76,  206 => 73,  202 => 72,  198 => 71,  193 => 69,  188 => 67,  183 => 65,  180 => 64,  178 => 63,  168 => 56,  164 => 55,  160 => 54,  150 => 49,  146 => 48,  142 => 47,  133 => 41,  129 => 40,  121 => 39,  117 => 38,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  86 => 24,  82 => 23,  78 => 22,  70 => 17,  62 => 12,  58 => 11,  53 => 9,  49 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'PrivacyManager_AnonymizeData'|translate }}{% endset %}

{% block content %}
{% import 'macros.twig' as piwik %}

<div piwik-content-intro>
    <h2 piwik-enriched-headline help-url=\"https://matomo.org/docs/privacy/\">{{ title }}</h2>

    <p>{{ 'PrivacyManager_TeaserHeader'|translate('<a href=\"#anonymizeIPAnchor\">',\"</a>\",'<a href=\"#deleteLogsAnchor\">',\"</a>\",'<a href=\"#anonymizeHistoricalData\">',\"</a>\")|raw }}
        {{'PrivacyManager_SeeAlsoOurOfficialGuidePrivacy'|translate('<a href=\"https://matomo.org/privacy/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
</div>

<div piwik-content-block
     id=\"anonymizeIPAnchor\"
     content-title=\"{{ 'PrivacyManager_UseAnonymizeTrackingData'|translate|e('html_attr') }}\">
    <div piwik-form ng-controller=\"AnonymizeIpController as anonymizeIp\">

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeIpSettings\"
             ng-model=\"anonymizeIp.enabled\"
             data-title=\"{{ 'PrivacyManager_UseAnonymizeIp'|translate|e('html_attr') }}\"
             value=\"{{ anonymizeIP.enabled }}\"
             inline-help=\"{{ 'PrivacyManager_AnonymizeIpInlineHelp'|translate|e('html_attr') }} {{ 'PrivacyManager_AnonymizeIpDescription'|translate|e('html_attr') }}\">
        </div>

        <div ng-show=\"anonymizeIp.enabled\">
            <div piwik-field uicontrol=\"radio\" name=\"maskLength\"
                 ng-model=\"anonymizeIp.maskLength\"
                 data-title=\"{{ 'PrivacyManager_AnonymizeIpMaskLengtDescription'|translate|e('html_attr') }}\"
                 value=\"{{ anonymizeIP.maskLength }}\"
                 options=\"{{ maskLengthOptions|json_encode }}\"
                 inline-help=\"{{ 'PrivacyManager_GeolocationAnonymizeIpNote'|translate|e('html_attr') }}\">
            </div>

            <div piwik-field uicontrol=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\"
                 ng-model=\"anonymizeIp.useAnonymizedIpForVisitEnrichment\"
                 data-title=\"{{ 'PrivacyManager_UseAnonymizedIpForVisitEnrichment'|translate|e('html_attr') }}\"
                 value=\"{% if anonymizeIP.useAnonymizedIpForVisitEnrichment %}1{% else %}0{% endif %}\"
                 options=\"{{ useAnonymizedIpForVisitEnrichmentOptions|json_encode }}\"
                 inline-help=\"{{ 'PrivacyManager_UseAnonymizedIpForVisitEnrichmentNote'|translate|e('html_attr') }}\">
            </div>
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeUserId\"
             ng-model=\"anonymizeIp.anonymizeUserId\"
             data-title=\"{{ 'PrivacyManager_PseudonymizeUserId'|translate|e('html_attr') }}\"
             value=\"{{ anonymizeIP.anonymizeUserId }}\"
             inline-help=\"{{ 'PrivacyManager_PseudonymizeUserIdNote'|translate|e('html_attr') }}<br/><br/><em>{{ 'PrivacyManager_PseudonymizeUserIdNote2'|translate|e('html_attr') }}</em>\">
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"anonymizeOrderId\"
             ng-model=\"anonymizeIp.anonymizeOrderId\"
             data-title=\"{{ 'PrivacyManager_UseAnonymizeOrderId'|translate|e('html_attr') }}\"
             value=\"{{ anonymizeIP.anonymizeOrderId }}\"
             inline-help=\"{{ 'PrivacyManager_AnonymizeOrderIdNote'|translate|e('html_attr') }}\">
        </div>

        <div piwik-save-button onconfirm=\"anonymizeIp.save()\" saving=\"anonymizeIp.isLoading\"></div>
    </div>
</div>

{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block id=\"deleteLogsAnchor\"
         content-title=\"{{ 'PrivacyManager_DeleteOldRawData'|translate|e('html_attr') }}\">
        <div class=\"ui-confirm\" id=\"confirmDeleteSettings\">
            <h2 id=\"deleteLogsConfirm\">{{ 'PrivacyManager_DeleteLogsConfirm'|translate }}</h2>

            <h2 id=\"deleteReportsConfirm\">{{ 'PrivacyManager_DeleteReportsConfirm'|translate }}</h2>

            <h2 id=\"deleteBothConfirm\">{{ 'PrivacyManager_DeleteBothConfirm'|translate }}</h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
            <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
        </div>
        <div class=\"ui-confirm\" id=\"saveSettingsBeforePurge\">
            <h2>{{ 'PrivacyManager_SaveSettingsBeforePurge'|translate }}</h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
        </div>
        <div class=\"ui-confirm\" id=\"confirmPurgeNow\">
            <h2>{{ 'PrivacyManager_PurgeNowConfirm'|translate }}</h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
            <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
        </div>

        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }}</p>

        <div piwik-form
             ng-controller=\"DeleteOldLogsController as deleteOldLogs\"
             id=\"formDeleteSettings\">
            <div id=\"deleteLogSettingEnabled\">

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteEnable\"
                     ng-model=\"deleteOldLogs.enabled\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     data-title=\"{{ 'PrivacyManager_UseDeleteLog'|translate|e('html_attr') }}\"
                     value=\"{{ deleteData.config.delete_logs_enable }}\"
                     inline-help=\"{{ 'PrivacyManager_DeleteRawDataInfo'|translate|e('html_attr') }}\">
                </div>

                <div class=\"alert alert-warning deleteOldLogsWarning\" style=\"width: 50%;\" ng-show=\"deleteOldLogs.enabled\">
                    <a href=\"https://matomo.org/faq/general/#faq_125\" rel=\"noreferrer noopener\" target=\"_blank\">
                        {{ 'General_ClickHere'|translate }}
                    </a>
                </div>
            </div>

            <div id=\"deleteLogSettings\" ng-show=\"deleteOldLogs.enabled\">
                <div piwik-field uicontrol=\"text\" name=\"deleteOlderThan\"
                     ng-model=\"deleteOldLogs.deleteOlderThan\"
                     ng-change=\"deleteOldLogs.reloadDbStats()\"
                     data-title=\"{{ 'PrivacyManager_DeleteLogsOlderThan'|translate|e('html_attr') }} ({{ 'Intl_PeriodDays'|translate }})\"
                     value=\"{{ deleteData.config.delete_logs_older_than }}\"
                     inline-help=\"{{ 'PrivacyManager_LeastDaysInput'|translate(\"1\")|e('html_attr') }}\">
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteOldLogs.save()\" saving=\"deleteOldLogs.isLoading\"></div>
        </div>
    </div>

    <div piwik-content-block id=\"deleteReportsAnchor\"
            content-title=\"{{ 'PrivacyManager_DeleteOldAggregatedReports'|translate|e('html_attr') }}\">

        <div piwik-form
             ng-controller=\"DeleteOldReportsController as deleteReports\" 
             id=\"formDeleteSettings\">

            <div id=\"deleteReportsSettingEnabled\">

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsEnable\"
                     ng-model=\"deleteReports.enabled\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     data-title=\"{{ 'PrivacyManager_UseDeleteReports'|translate|e('html_attr') }}\"
                     value=\"{{ deleteData.config.delete_reports_enable }}\"
                     inline-help=\"{{ 'PrivacyManager_DeleteAggregateReportsDetailedInfo'|translate|e('html_attr') }}\">
                </div>

                <div class=\"alert alert-warning\" style=\"width: 50%;\" ng-show=\"deleteReports.enabled\">
                    {% set deleteOldLogs %}{{ 'PrivacyManager_UseDeleteLog'|translate }}{% endset %}
                    <span>
                        {{ 'PrivacyManager_DeleteReportsInfo2'|translate(deleteOldLogs) }}<br/><br/>
                        {{ 'PrivacyManager_DeleteReportsInfo3'|translate(deleteOldLogs) }}
                    </span>
                </div>

            </div>

            <div id=\"deleteReportsSettings\" ng-show=\"deleteReports.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"deleteReportsOlderThan\"
                     ng-model=\"deleteReports.deleteOlderThan\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     data-title=\"{{ 'PrivacyManager_DeleteReportsOlderThan'|translate|e('html_attr') }} ({{ 'Intl_PeriodMonths'|translate }})\"
                     value=\"{{ deleteData.config.delete_reports_older_than }}\"
                     inline-help=\"{{ 'PrivacyManager_LeastMonthsInput'|translate(\"1\")|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepBasic\"
                     ng-model=\"deleteReports.keepBasic\"
                     ng-change=\"deleteReports.reloadDbStats()\"
                     data-title=\"{{ 'PrivacyManager_KeepBasicMetrics'|translate|e('html_attr') }} ({{ 'General_Recommended'|translate|e('html_attr') }})\"
                     value=\"{{ deleteData.config.delete_reports_keep_basic_metrics }}\"
                     inline-help=\"{{ 'PrivacyManager_KeepBasicMetricsReportsDetailedInfo'|translate|e('html_attr') }}\">
                </div>

                <h3>
                    {{ 'PrivacyManager_KeepDataFor'|translate }}
                </h3>
                <div>

                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepDay\"
                         ng-model=\"deleteReports.keepDataForDay\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"{{ 'General_DailyReports'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_day_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepWeek\"
                         ng-model=\"deleteReports.keepDataForWeek\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"{{ 'General_WeeklyReports'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_week_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepMonth\"
                         ng-model=\"deleteReports.keepDataForMonth\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"{{ 'General_MonthlyReports'|translate|e('html_attr') }} ({{ 'General_Recommended'|translate|e('html_attr') }})\"
                         value=\"{{ deleteData.config.delete_reports_keep_month_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepYear\"
                         ng-model=\"deleteReports.keepDataForYear\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"{{ 'General_YearlyReports'|translate|e('html_attr') }} ({{ 'General_Recommended'|translate|e('html_attr') }})\"
                         value=\"{{ deleteData.config.delete_reports_keep_year_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepRange\"
                         ng-model=\"deleteReports.keepDataForRange\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         data-title=\"{{ 'General_RangeReports'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_range_reports }}\">
                    </div>
                    <div piwik-field uicontrol=\"checkbox\" name=\"deleteReportsKeepSegments\"
                         ng-model=\"deleteReports.keepDataForSegments\"
                         ng-change=\"deleteReports.reloadDbStats()\"
                         title=\"{{ 'PrivacyManager_KeepReportSegments'|translate|e('html_attr') }}\"
                         value=\"{{ deleteData.config.delete_reports_keep_segment_reports }}\">
                    </div>
                </div>
            </div>

            <div piwik-save-button onconfirm=\"deleteReports.save()\" saving=\"deleteReports.isLoading\"></div>
        </div>
    </div>

    <div piwik-form
         ng-controller=\"ScheduleReportDeletionController as reportDeletionSchedule\"
         id=\"formDeleteSettings\">

        <div piwik-content-block id=\"scheduleSettingsHeadline\"
             ng-show=\"reportDeletionSchedule.model.isEitherDeleteSectionEnabled()\"
             content-title=\"{{ 'PrivacyManager_DeleteSchedulingSettings'|translate|e('html_attr') }}\">

            <div id=\"deleteSchedulingSettings\">
                <div id=\"deleteSchedulingSettingsInlineHelp\" class=\"inline-help-node\">
                    {% if deleteData.lastRun %}<strong>{{ 'PrivacyManager_LastDelete'|translate }}:</strong>
                        {{ deleteData.lastRunPretty }}
                        <br/>
                        <br/>
                    {% endif %}
                    <strong>{{ 'PrivacyManager_NextDelete'|translate }}:</strong>
                    {{ deleteData.nextRunPretty|rawSafeDecoded }}
                    <br/>
                    <br/>
                    <a id=\"purgeDataNowLink\" href=\"#\"
                           ng-show=\"reportDeletionSchedule.showPurgeNowLink\"
                           ng-click=\"reportDeletionSchedule.executeDataPurgeNow()\">{{ 'PrivacyManager_PurgeNow'|translate }}</a>

                        <div piwik-activity-indicator
                             loading-message=\"'{{ 'PrivacyManager_PurgingData'|translate|e('html_attr') }}'\"
                             loading=\"reportDeletionSchedule.loadingDataPurge\"></div>
                    <span id=\"db-purged-message\"
                          ng-show=\"reportDeletionSchedule.dataWasPurged\"
                    >{{ 'PrivacyManager_DBPurged'|translate }}</span>
                </div>

                <div piwik-field uicontrol=\"select\" name=\"deleteLowestInterval\"
                     ng-model=\"reportDeletionSchedule.deleteLowestInterval\"
                     options=\"{{ scheduleDeletionOptions|json_encode }}\"
                     data-title=\"{{ 'PrivacyManager_DeleteDataInterval'|translate|e('html_attr') }}\"
                     value=\"{{ deleteData.config.delete_logs_schedule_lowest_interval }}\"
                     inline-help=\"#deleteSchedulingSettingsInlineHelp\">
                </div>
            </div>

            {% if deleteData.config.enable_database_size_estimate == '1' %}
            <div id=\"deleteDataEstimateSect\" class=\"form-group row\">

                <h3 class=\"col s12\" id=\"databaseSizeHeadline\">
                    {{ 'PrivacyManager_ReportsDataSavedEstimate'|translate }}
                </h3>
                <div class=\"col s12 m6\">
                    <div id=\"deleteDataEstimate\" ng-show=\"reportDeletionSchedule.model.showEstimate\"
                          ng-bind-html=\"reportDeletionSchedule.model.estimation\"></div>
                    &nbsp;
                    <div piwik-activity-indicator loading=\"reportDeletionSchedule.model.loadingEstimation\"></div>
                </div>
                <div class=\"col s12 m6\">
                    {% if deleteData.config.enable_auto_database_size_estimate == '0' %}
                    <div class=\"form-help\">
                        <a id=\"getPurgeEstimateLink\"
                           ng-click=\"reportDeletionSchedule.model.reloadDbStats(true)\"
                           href=\"#\">{{ 'PrivacyManager_GetPurgeEstimate'|translate }}</a>
                    </div>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            <div piwik-save-button onconfirm=\"reportDeletionSchedule.save()\" saving=\"reportDeletionSchedule.isLoading\"></div>

        </div>
    {% endif %}
</div>

    <a name=\"anonymizeHistoricalData\" id=\"anonymizeHistoricalData\"></a>

    <div piwik-content-block content-title=\"Anonymize previously tracked raw data\" class=\"logDataAnonymizer\">
        <p>If you have tracked personal data such as the full visitor IP, you may
            want to anonymize this data now in case you do not have consent for this data or no longer a legitimate
            interest.
        </p>

        {% if isSuperUser %}
            <div matomo-anonymize-log-data></div>
        {% else %}
            <p>Only a user with Super User access can anonymize previously tracked raw data.</p>
        {% endif %}

        <br />
        <h3>Previous raw data anonymizations</h3>
        <table piwik-content-table>
            <thead>
            <tr>
                <th>Requester</th>
                <th>Affected ID Sites</th>
                <th>Affected date</th>
                <th>Anonymize</th>
                <th>Visit Columns</th>
                <th>Link Visit Action Columns</th>
                <th>Status</th>
            </tr></thead>
            <tbody>
            {% for entry in anonymizations %}
                {% set isStarted = entry.job_start_date or not entry.job_start_date is empty %}
                {% set isFinished = entry.job_finish_date or not entry.job_finish_date is empty %}
                <tr>
                    <td>{{ entry.requester }}</td>
                    <td>{{ entry.sites|join(', ') }}</td>
                    <td>{{ entry.date_start }} - {{ entry.date_end }}</td>
                    <td>{% if entry.anonymize_ip %}<span>IP address<br /></span>{% endif %}
                        {% if entry.anonymize_location %}<span>Location<br /></span>{% endif %}
                        {% if entry.anonymize_userid %}<span>User ID</span>{% endif %}
                        {% if not entry.anonymize_ip and not entry.anonymize_location and not entry.anonymize_userid %}-{% endif %}
                    </td>
                    <td>{{ entry.unset_visit_columns|join(', ') }}</td>
                    <td>{{ entry.unset_link_visit_action_columns|join(', ') }}</td>
                    <td>
                        {% if not isStarted %}
                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: {{ entry.scheduled_date|default('') }}.\"></span> Scheduled
                        {% elseif isStarted and not isFinished %}
                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: {{ entry.scheduled_date|default('') }}. Job Start Date: {{ entry.job_start_date }}. Current Output: {{ entry.output }}\"></span> In progress
                        {% else %}
                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: {{ entry.scheduled_date|default('') }}. Job Start Date: {{ entry.job_start_date }}. Job Finish Date: {{ entry.job_finish_date }}. Output: {{ entry.output }}\"></span> Done
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "@PrivacyManager/privacySettings.twig", "/var/www/MaximeDefretin/wp-content/plugins/matomo/app/plugins/PrivacyManager/templates/privacySettings.twig");
    }
}
