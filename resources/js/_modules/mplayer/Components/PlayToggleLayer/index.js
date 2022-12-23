import videojs from 'video.js';

const PlayToggleButton = videojs.getComponent('PlayToggle');
const FullscreenToggleButton = videojs.getComponent('FullscreenToggle');
const ClickableComponent = videojs.getComponent('ClickableComponent');

class PlayToggleLayer extends ClickableComponent {
    createEl() {
        return videojs.dom.createEl('div', {
            className: 'vjs-play-toggle-layer'
        });
    }

    handleClick(event) {
        if (event.detail === 1 && (this.player_.userActive() || this.player_.paused())) {
            // single click
            PlayToggleButton.prototype.handleClick.call(this, event);
        } else if (event.detail === 2) {
            // dblclick
            FullscreenToggleButton.prototype.handleClick.call(this, event);
            PlayToggleButton.prototype.handleClick.call(this, event);
        }
    }
}

videojs.registerComponent('PlayToggleLayer', PlayToggleLayer);

const playerChildren = videojs.getComponent('Player').prototype.options_
    .children;
const loadSpinnerIndex = playerChildren.indexOf('loadingSpinner');

playerChildren.splice(loadSpinnerIndex, 0, 'PlayToggleLayer');
