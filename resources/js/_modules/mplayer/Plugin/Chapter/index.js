import videojs from 'video.js';

class Chapter extends videojs.getPlugin('plugin') {
    constructor(player, options = {}) {
        super(player, options);

        this.cache_ = {};
        this.pipPlayer = null;
        this.options_ = options;
        this.parentPlayer = player;

        // setup the plugin after we loaded video's meta data
        player.on("loadedmetadata", function() {
            init();
        });
    }

    init() {
        // Create a maker
    }
}

videojs.registerPlugin('chapter', Chapter);
