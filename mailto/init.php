<?php

    class MailTo extends Plugin {
        private $host;

        function about() {
            return array(0.1, "Share article via email", "r4mp");
        }

        function api_version() {
            return 2;
        }

        function init($host) {
            $this->host = $host;
            $host->add_hook($host::HOOK_ARTICLE_BUTTON, $this);
        }

        function hook_article_button($line) {
            $article_link = $line['link'];

            return "<a href=\"mailto:\">Mail</a>"
        }

    }

?>
