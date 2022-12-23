import videojs from 'video.js';
import SettingOptionItem from '../Item/SettingOptionItem.js';

class SubtitlesSettingItem extends SettingOptionItem {
    constructor(player, options) {
        super(player, {
            ...options,
            label: 'Subtitles/CC',
            icon: 'vjs-icon-subtitles',
            entries: [
                {
                    label: 'Off',
                    value: '',
                    default: true
                },
                {
                    label: 'English',
                    value: 'en',
                },
                {
                    label: 'Vietnames',
                    value: 'vi',
                },
                {
                    label: 'Japanese',
                    value: 'ja',
                }
            ]
        });

        this.addClass('vjs-setting-subtitles');
    }
}

videojs.registerComponent('SubtitlesSettingItem', SubtitlesSettingItem);

export default SubtitlesSettingItem;
