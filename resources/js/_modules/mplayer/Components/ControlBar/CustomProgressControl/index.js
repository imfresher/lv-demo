import videojs from 'video.js';
import ProgressBar from './ProgressBar.js';
import PlayPoint from './PlayPoint.js';

const Component = videojs.getComponent('Component');

class CustomProgressControl extends Component {
    constructor(player, options = {}) {
        super(player, options);

        const this_ = this;
        const chapters = player.options_.chapters;

        this.addClass('vjs-custom-progress-control');

        for (let i = 0; i < chapters.length; i++) {
            let nextTime = chapters[i + 1] != undefined
                ? chapters[i + 1]['time']
                : null;

            this_.addChild('ProgressBar', {
                min: chapters[i]['time'],
                max: nextTime,
                text: chapters[i]['title']
            });
        }

        this_.addChild('PlayPoint');
    }
}

videojs.registerComponent('CustomProgressControl', CustomProgressControl);

export default CustomProgressControl;
