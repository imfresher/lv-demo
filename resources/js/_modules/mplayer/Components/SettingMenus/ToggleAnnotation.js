// const SettingOnOffItem = videojs.getComponent('SettingOnOffItem');
import videojs from 'video.js';
import SettingOnOffItem from './Item/SettingOnOffItem.js';

class ToggleAnnotation extends SettingOnOffItem {
    constructor(player, options) {
        super(player, {
            ...options, // you must assgin the options
            name: 'ToggleAnnotation', // component name, optional
            label: 'Annotation',
            icon: 'vjs-icon-annotation' // videojs icon classname, optional, for small screen
        });

        this.addClass('vjs-setting-annotation');

        // enable by default
        this.update(true);
    }

    /**
     *  @param {Boolean} active
     */
    update(active) {
        super.update(active);

        console.log(this.active);
    }
}

// videojs
//     .getComponent('SettingMenus')
//     .prototype.options_.entries.splice(0, 0, 'ToggleAnnotation');
videojs.registerComponent('ToggleAnnotation', ToggleAnnotation);

export default ToggleAnnotation;
