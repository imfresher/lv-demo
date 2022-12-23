import videojs from 'video.js';
import FillProgress from './Progress/FillProgress.js';
import PlayProgress from './Progress/PlayProgress.js';

export const UPDATE_REFRESH_INTERVAL = 30;

export const throttle = function(fn, wait) {
    let last = window.performance.now();

    const throttled = function(...args) {
        const now = window.performance.now();

        if (now - last >= wait) {
            fn(...args);
            last = now;
        }
    };

    return throttled;
};

// const Component = videojs.getComponent('Component');
const Slider = videojs.getComponent('Slider');

class ProgressBar extends Slider {
    constructor(player, options = {}) {
        super(player, options);
        this.setEventHandlers_();
        // this.duration_ = 0;
        // this.loadDuration();

        // console.log(this.player_.duration());

        // this.addClass('vjs-progress-bar');
        // this.width(100);
    }

    // loadDuration() {
    //     if (this.player_.readyState() < 1) {
    //         // wait for loadedmetdata event
    //         this.player_.one("loadedmetadata", function () {
    //             this.duration_ = this.player_.duration();
    //         });
    //     } else {
    //         // metadata already loaded
    //         this.duration_ = this.player_.duration();
    //     }
    // }

    setEventHandlers_() {
        this.update_ = videojs.bind(this, this.update);
        this.update = throttle(this.update_, UPDATE_REFRESH_INTERVAL);

        this.on(this.player_, ['ended', 'durationchange', 'timeupdate'], this.update);
    }

    createEl() {
        return super.createEl('div', {
            className: 'vjs-progress-bar vjs-progress-holder'
        }, {
            'aria-label': this.localize('text' in this.options_ ? this.options_.text : ''),
            'aria-valuenow': 0,
            'aria-valuemin': 'min' in this.options_ ? this.options_.min : 0,
            'aria-valuemax': 'max' in this.options_ ? this.options_.max : 0,
        });
    }

    update(event) {
        // ignore updates while the tab is hidden
        if (document.visibilityState === 'hidden') {
            return;
        }

        const percent = super.update();

        this.requestNamedAnimationFrame('ProgressBar#update', () => {
            const currentTime = this.player_.ended()
                ? this.player_.duration()
                : this.getCurrentTime_();
            const liveTracker = this.player_.liveTracker;
            let duration = this.player_.duration();

            // if (liveTracker && liveTracker.isLive()) {
            //     duration = this.player_.liveTracker.liveCurrentTime();
            // }

            if (this.percent_ !== percent) {
                // machine readable value of progress bar (percentage complete)
                this.el_.setAttribute('aria-valuenow', (percent * 100).toFixed(2));
                this.percent_ = percent;
            }

            if (this.currentTime_ !== currentTime || this.duration_ !== duration) {
                // human readable value of progress bar (time complete)
                this.el_.setAttribute(
                    'aria-valuetext',
                    this.localize(
                        'progress bar timing: currentTime={1} duration={2}',
                        [videojs.formatTime(currentTime, duration),
                        videojs.formatTime(duration, duration)],
                        '{1} of {2}'
                    )
                );

                let width = (this.options_.max - this.options_.min) * 900 / duration;
                this.width(width);

                this.currentTime_ = currentTime;
                this.duration_ = duration;
            }

            // update the progress bar time tooltip with the current time
            // if (this.bar) {
            //     this.bar.update(Dom.getBoundingClientRect(this.el()), this.getProgress());
            // }
        });

        return percent;
    }

    getCurrentTime_() {
        return (this.player_.scrubbing())
            ? this.player_.getCache().currentTime
            : this.player_.currentTime();
    }
}

ProgressBar.prototype.options_ = {
    children: [
        'FillProgress',
        // 'LoadProgress',
        'PlayProgress'
    ],
    barName: 'PlayProgress'
};

videojs.registerComponent('ProgressBar', ProgressBar);

export default ProgressBar;
