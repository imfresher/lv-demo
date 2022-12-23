import videojs from 'video.js';
import '~/video.js/dist/video-js.css';
import './themes/default/index.scss';

import './Components/ControlBar/CustomProgressControl';
import './Components/ControlBar';
import './Components/ControlBar/Progress';
import './Components/PlayToggleLayer';
import './Components/SettingMenus';
import './Components/CustomMenuButton';

import './Plugin/Chapter';

class MPlayerModule {
    constructor(options) {
        this.options = { chapters: window.video.chapters };
        this.player = {};
        this.element = '#player';
        this.type = window.video.type;
        this.src = window.video.src;
        this.poster = window.video.poster;

        this.skin();
    }

    init() {
        let this_ = this;
        // Create video element with attributes
        $("<video>")
            .attr({
                "class"             : "video-js vjs-fluid vjs-mplayer",
                "controls"          : "true",
                "preload"           : "auto",
                "webkit-playsinline": "true",
                "playsinline"       : "true"
            })
            .appendTo(this.element);

        const playerEl = $(this.element + " > video")[0];
        let player_ = this.player = videojs(playerEl, this.options);
        this.player.poster(this.poster);
        this.player.src([
            {
                type: this.type,
                src: this.src
            }
        ]);
        this.player.aspectRatio('16:9');

        // Add chapters
        // const chapters = {
        //     kind: 'chapters',
        //     src: '/static/chapters.vtt',
        //     srclang: 'en',
        //     label: 'English',
        //     default: 'default'
        // };

        // this.player.addRemoteTextTrack(chapters);

        let timePoints = [];
        $('.chapter__item').each(function () {
            let dataTime = $(this).data('time');

            timePoints.push(dataTime);
        });

        this.player.ready(function() {
            if ($('.chapter__item').length) {
                $('.chapter__item').on('click', function (event) {
                    event.preventDefault();
                    const itemTime = $(this).data('time');

                    player_.play();
                    player_.currentTime(itemTime);

                    $(this).parent().find('.chapter__item').removeClass('chapter__item__active');
                    $(this).addClass('chapter__item__active');
                });
            }
        });

        this.player.on("timeupdate", function () {
            var pointActive = this_.getPointActive(timePoints, player_.currentTime());
            if (timePoints.length > 1 && player_.currentTime() < timePoints[1]) {
                pointActive = 0;
            }

            // var cTime = parseFloat(player_.currentTime()).toFixed(2);
            // if (endTimePointTemp !== -1 && endTimePointTemp <= cTime) {
            //     player_.pause();
            // }

            if ($('.chapter__content').length) {
                $('.chapter__content').find('.chapter__item').removeClass("chapter__item__active");
                $(".chapter__item[" + "data-time='" + pointActive + "'" + "]").addClass("chapter__item__active");
            }
        });

        // this.player.on('dblclick', function() { this.player.requestFullscreen(); });
        // this.player.on('dblclick', function() {
        //     if (this.player.isFullscreen()) {
        //         this.player.exitFullscreen();
        //     } else {
        //         this.player.requestFullscreen();
        //     }
        // });

        // this.player = videojs('player', this.options, function onPlayerReady() {
        //     // videojs.log('Your player is ready!');

        //     // // In this context, `this` is the player that was created by Video.js.
        //     // this.play();

        //     // // How about an event listener?
        //     // this.on('ended', function() {
        //     //     videojs.log('Awww...over so soon?!');
        //     // });
        // });
    }

    getPointActive(timePoints, value) {
        let i = timePoints.length;
        while (timePoints[--i] > parseFloat(value));
        return timePoints[i] || null;
    }

    skin() {
        const { IS_IPHONE, IOS_VERSION } = videojs.browser;

        // videojs.hook('beforesetup', (player, options) => {
        //     player.addClass('video-js');
        //     player.addClass('vjs-fluid');
        // });

        // if (IS_IPHONE) {
        //     player.addClass('vjs-is-iphone');

        //     if (IOS_VERSION < 11) {
        //         player.addClass('vjs-iphone-below-11');
        //     }
        // }
    }

    chapter() {

    }

    playlist() {

    }

    subtitle() {

    }
}

export default MPlayerModule;
