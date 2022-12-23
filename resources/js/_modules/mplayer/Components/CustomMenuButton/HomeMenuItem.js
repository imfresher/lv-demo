import videojs from 'video.js';

const MenuItem = videojs.getComponent('MenuItem');

class HomeMenuItem extends MenuItem {
    constructor(player, options = {}) {
        super(player, options);

        // this.addClass('vjs-custom-menu-item-home');
    }

    createEl() {
        const el = videojs.dom.createEl('li', {
            className: 'vjs-menu-item vjs-menu-item-home',
            innerHTML: `
                <div class="vjs-icon-placeholder ${this.options_.icon || ''}"></div>
                <div>${this.localize('Home Page')}</div>
            `
        });

        return el;
    }
}

videojs.registerComponent('HomeMenuItem', HomeMenuItem);

export default HomeMenuItem;
