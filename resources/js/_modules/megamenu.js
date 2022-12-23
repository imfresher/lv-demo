import $ from 'jquery';

const MEGAMENU_KEY = 'megamenu';

const DefaultOptions = {
    event: 'hover'
};

const ClassName = {
    menu: 'megamenu',
    active: 'active',
    li: 'nav__item',
    a: 'nav__link',
    sub: 'nav__sub',
};

class MegaMenu {
    constructor(element, options) {
        this._element = element || '.nav__main';
        this._options = {
            ...DefaultOptions,
            ...options
        };

        this.init();
    }

    init() {
        const self = this;
        const element = this._element;
        const options = this._options;

        console.log('MegaMenu: init()');

    }

    mega() {
        $(this._element).find('.nav__item').hover(function () {
            var menuItem = $(this);

            if (! menuItem.hasClass('has--sub')) {
                return;
            }

            menuItem.addClass('active');
        }, function() {
            var menuItem = $(this);

            if (! menuItem.hasClass('has--sub')) {
                return;
            }

            menuItem.removeClass('active');
        });
    }
}

$.fn.megaMenu = function (options) {
    return this.each(function () {
        const $_this = $(this);

        let data = $_this.data(MEGAMENU_KEY);

        if (! data) {
            data = new MegaMenu(this, options);

            $_this.data(MEGAMENU_KEY, data);
        }
    });
};

export default MegaMenu;
