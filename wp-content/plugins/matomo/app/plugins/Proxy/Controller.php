<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\Proxy;

use Piwik\AssetManager;
use Piwik\AssetManager\UIAsset;
use Piwik\Common;
use Piwik\Exception\StylesheetLessCompileException;
use Piwik\Piwik;
use Piwik\ProxyHttp;
use Piwik\Url;
use Piwik\UrlHelper;

/**
 * Controller for proxy services
 *
 */
class Controller extends \Piwik\Plugin\Controller
{
    const TRANSPARENT_PNG_PIXEL = 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=';
    const JS_MIME_TYPE = "application/javascript; charset=UTF-8";

    /**
     * Output the merged CSS file.
     * This method is called when the asset manager is enabled.
     *
     * @see core/AssetManager.php
     */
    public function getCss()
    {
        try {
            $cssMergedFile = AssetManager::getInstance()->getMergedStylesheet();
        } catch (StylesheetLessCompileException $exception) {
            $cssMergedFile = AssetManager::getInstance()->getMergedStylesheet();
        }
        ProxyHttp::serverStaticFile($cssMergedFile->getAbsoluteLocation(), "text/css");
    }

    /**
     * Output the merged core JavaScript file.
     * This method is called when the asset manager is enabled.
     *
     * @see core/AssetManager.php
     */
    public function getCoreJs()
    {
        $jsMergedFile = AssetManager::getInstance()->getMergedCoreJavaScript();
        $this->serveJsFile($jsMergedFile);
    }

    /**
     * Output the merged non core JavaScript file.
     * This method is called when the asset manager is enabled.
     *
     * @see core/AssetManager.php
     */
    public function getNonCoreJs()
    {
        $jsMergedFile = AssetManager::getInstance()->getMergedNonCoreJavaScript();
        $this->serveJsFile($jsMergedFile);
    }

    /**
     * @param UIAsset $uiAsset
     */
    private function serveJsFile($uiAsset)
    {
        ProxyHttp::serverStaticFile($uiAsset->getAbsoluteLocation(), self::JS_MIME_TYPE);
    }

    /**
     * Validate URL against *.piwik.org domains
     *
     * @param string $url
     * @return bool True if valid; false otherwise
     */
    public static function isPiwikUrl($url)
    {
        // guard for IE6 meta refresh parsing weakness (OSVDB 19029)
        if (strpos($url, ';') !== false
            || strpos($url, '&#59') !== false
        ) {
            return false;
        }
        if (preg_match('~^http://(qa\.|demo\.|dev\.|forum\.)?piwik.org([#?/]|$)~', $url)) {
            return true;
        }

        if (preg_match('~^http://(qa\.|demo\.|dev\.|forum\.)?matomo.org([#?/]|$)~', $url)) {
            return true;
        }

        // Allow clockworksms domain
        if (strpos($url, 'http://www.clockworksms.com/') === 0) {
            return true;
        }

        return false;
    }
}
