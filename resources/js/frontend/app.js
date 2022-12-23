import '@/sass/frontend/app.scss';
import '@/js/bootstrap';
import { MegaMenuPlugin, MPlayer } from '../_modules';

(function ($) {
    'use strict';

    $(document).ready(function () {
        /**
         * Mega Menu
         * @type {MegaMenuPlugin}
         */
        const mm = new MegaMenuPlugin();

        /**
         * Player
         * @type {MPlayer}
         */
        const videoOptions = {
            // controlBar: {
            //     volumePanel: { inline: false }
            // },
        };

        // Dash Video
        const videoSrc = {
            src: 'https://s3.amazonaws.com/_bc_dml/example-content/sintel_dash/sintel_vod.mpd',
            type: 'application/dash+xml'
        };

        // HLS Video
        // const videoSrc = {
        //     src: 'https://d2zihajmogu5jn.cloudfront.net/bipbop-advanced/bipbop_16x9_variant.m3u8',
        //     type: 'application/x-mpegURL'
        // };

        const player = new MPlayer(videoOptions);

        // player.src(videoSrc);
        player.init();
    });
})(window.$);
