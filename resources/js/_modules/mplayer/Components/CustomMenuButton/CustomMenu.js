import videojs from 'video.js';

const Menu = videojs.getComponent('Menu');

class CustomMenu extends Menu {
    constructor(player, options = {}) {
        super(player, {
            ...options,
            name: 'CustomMenu'
        });

        this.addClass('vjs-custom-menu');
    }

    init() {
        if (!this.contentEl_) {
            return;
        }

        this.mainMenuItems = this.children().slice(0);

        this.transform(this.mainMenuItems);

        /**
         *  Since the width of setting menu depends on screen width.
         *  If player is initialized on small screen size then resize to a bigger screen,
         *  the width of setting menu will be too wide as the origin width is affected by css,
         *  A class `vjs-setting-menu-ready` as a condition for css on small screen,
         *  therefore the origin width will not be affected.
         */
        this.addClass('vjs-custom-menu-ready');
    }

    createEl() {
        const el = super.createEl();

        return el;
    }
}

videojs.registerComponent('CustomMenu', CustomMenu);

export default CustomMenu;
