import videojs from 'video.js';
import CustomMenu from './CustomMenu.js';
import HomeMenuItem from './HomeMenuItem.js';

const MenuButton = videojs.getComponent('MenuButton');

class CustomMenuButton extends MenuButton {
    constructor(player, options = {}) {
        super(player, options);

        // move menu to player
        player.addChild(this.menu);
        player.CustomMenu = this.menu;

        // remove videojs parent child relationship between button and menu
        this.removeChild(this.menu);
    }

    buildCSSClass() {
        return `vjs-custom-menu-button vjs-icon-circle ${super.buildCSSClass()}`;
    }

    createMenu() {
        const menu = new CustomMenu(this.player_, {});

        const menuList = [
            'HomeMenuItem'
        ];

        menuList.forEach(componentName => {
            menu.addChild(componentName, {});
            // menu[componentName] = menu.addChild(componentName, {});
        });

        return menu;
    }

    hideMenu() {
        this.unpressButton();
        this.el_.blur();
    }

    pressButton() {
        super.pressButton();

        // this.menu.init();
    }

    unpressButton() {
        super.unpressButton();

        this.player_.removeClass('vjs-keep-control-showing');

        // this.menu.restore();
    }

    handleClick() {
        this.player_.addClass('vjs-keep-control-showing');

        if (this.buttonPressed_) {
            this.unpressButton();
        } else {
            this.pressButton();
        }

        this.off(document.body, 'click', this.hideMenu);
        // this.off(document.body, 'touchend', this.hideMenu);

        setTimeout(() => {
            this.one(document.body, 'click', this.hideMenu);
            // _this.buttonPressed_ && _this.one(document.body, 'touchend', _this.hideMenu);
        }, 0);
    }
}

CustomMenuButton.prototype.controlText_ = 'Custom Menu';

videojs.registerComponent('CustomMenuButton', CustomMenuButton);

export default CustomMenuButton;
