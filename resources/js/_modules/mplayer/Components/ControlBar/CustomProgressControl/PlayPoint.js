import videojs from 'video.js';

const Component = videojs.getComponent('Component');

class PlayPoint extends Component {
    constructor(player, options = {}) {
        super(player, options);

        this.addClass('vjs-progress-play-point');
    }
}

videojs.registerComponent('PlayPoint', PlayPoint);

export default PlayPoint;
