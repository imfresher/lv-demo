import videojs from 'video.js';

const Component = videojs.getComponent('Component');

class PlayProgress extends Component {
    constructor(player, options = {}) {
        super(player, options);

        this.addClass('vjs-play-progress');
    }

    // createEl() {
    //     const el = videojs.dom.createEl('div', );
    //     return el;
    // }
}

videojs.registerComponent('PlayProgress', PlayProgress);

export default PlayProgress;
