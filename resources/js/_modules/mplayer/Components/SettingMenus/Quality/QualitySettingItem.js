import videojs from 'video.js';
import SettingOptionItem from '../Item/SettingOptionItem.js';

class QualitySettingItem extends SettingOptionItem {
    constructor(player, options) {
        super(player, {
            ...options,
            label: 'Quality',
            icon: 'vjs-icon-quality',
            entries: [
                {
                    label: '1080p HD',
                    value: 1080
                },
                {
                    label: '720p',
                    value: 720
                },
                {
                    label: '480p',
                    value: 480
                },
                {
                    label: '360p',
                    value: 360
                },
                {
                    label: '240p',
                    value: 240
                },
                {
                    label: '144p',
                    value: 144
                },
                {
                    label: 'Auto',
                    value: 0,
                    default: true
                }
            ]
        });

        this.addClass('vjs-setting-quality');
    }
}

videojs.registerComponent('QualitySettingItem', QualitySettingItem);

export default QualitySettingItem;
