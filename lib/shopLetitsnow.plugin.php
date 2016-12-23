<?php

class shopLetitsnowPlugin extends shopPlugin{

    public static function head()
    {
        /**
         * @var shopLetitsnowPlugin $plugin
         */
        $plugin = wa('shop')->getPlugin('letitsnow');
        if($plugin->getSettings('enabled')) {

            $static_url = wa()->getRootUrl().'wa-apps/shop/';
            $intensive  = (int) $plugin->getSettings('intensive');
            $selector   = htmlspecialchars($plugin->getSettings('selector'), ENT_QUOTES, 'UTF-8');
            $time       = (int) $plugin->getSettings('time');

            $res = "<script type=\"text/javascript\" src=\"{$static_url}plugins/letitsnow/js/letitsnow.js\"></script>
    <script type=\"text/javascript\">
    $(function(){
        $('{$selector}').shop_letitsnow({
            intensive: parseInt('{$intensive}'),
            time : parseInt('{$time}'),
            src: '{$static_url}plugins/letitsnow/img/snow/'
        });
    });
    </script>
    ";

        return $res;
        }
        return '';
    }

    public function frontendHead()
    {
        return self::head();
    }
}