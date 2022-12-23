import videojs from 'video.js';

// https://videojs.com/guides/components/
videojs.getComponent('ControlBar').prototype.options_.children = [
    'PlayToggle',
    'VolumePanel',
    'CurrentTimeDisplay',
    'TimeDivider',
    'DurationDisplay',
    'CustomControlSpacer',
    'CustomControlSpacer',
    'ProgressControl',
    // 'CustomProgressControl',
    'CustomControlSpacer',
    'CustomControlSpacer',
    'LiveDisplay',
    'SeekToLive',
    // 'RemainingTimeDisplay',
    'PlaybackRateMenuButton',
    'ChaptersButton',
    'DescriptionsButton',
    'SubsCapsButton',
    'AudioTrackButton',
    // 'CustomMenuButton',
    'SettingMenus',
    'PictureInPictureToggle',
    'FullscreenToggle'
];
