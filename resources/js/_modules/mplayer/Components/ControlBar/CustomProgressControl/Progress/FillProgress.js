import videojs from 'video.js';

const Component = videojs.getComponent('Component');

class FillProgress extends Component {
    constructor(player, options = {}) {
        super(player, options);

        this.addClass('vjs-fill-progress');
    }
}

videojs.registerComponent('FillProgress', FillProgress);

export default FillProgress;
