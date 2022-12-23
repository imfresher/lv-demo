import path from 'path';
import fs from 'fs';
import fse from 'fs-extra';
import chokidar from 'chokidar';

const cp = (patterns) => {
    patterns.map(function (item) {
        item.from
        if (! fs.existsSync(item.from)) {
            return;
        }

        // To copy a folder or file
        fse.copySync(item.from, item.to, { overwrite: true }, function (err) {
            if (err) {
                console.error(err);
            } else {
                console.log('Copy -from: ' + item.from + ' -to: ' + item.to + ' successfully.');
            }
        });
    });
}

const startWatch = (input, output, watchDirs) => {
    var watchDirStr = null;
    if (watchDirs && watchDirs.length) {
        watchDirs = watchDirs.map(function (item) {
            var resolDir = path.resolve(input, item);
            return fs.existsSync(resolDir) ? resolDir : null;
        });

        watchDirs = watchDirs.filter(function (item) {
            return item;
        });
    }

    console.log(watchDirs);

    if (! watchDirs || watchDirs.length === 0) return;

    var watcher = chokidar.watch(watchDirs[0], {ignored: /^\./, persistent: true});

    watchDirs.shift();

    if (watchDirs.length) {
        watcher.add(watchDirs);
    }

    watcher
        .on('add', filePath => {
            console.log(`File ${filePath} has been added`);

            let outEndPath = filePath.replace(input, "");

            cp([{
                from: filePath,
                to: path.join(output, outEndPath)
            }]);
        })
        .on('change', filePath => {
            console.log(`File ${filePath} has been changed`);

            let outEndPath = filePath.replace(input, "");

            cp([{
                from: filePath,
                to: path.join(output, outEndPath)
            }]);
        })
        .on('unlink', filePath => {
            console.log(`File ${filePath} has been removed`);

            let outEndPath = filePath.replace(input, "");
            let outEndFilePath = path.join(output, outEndPath);

            if (fs.existsSync(outEndFilePath)) {
                fs.unlink(outEndFilePath, err => {
                    if (err) console.log(err);
                    else {
                        console.log(`Out file: ${outEndFilePath} has been removed`);
                    }
                });
            }
        })
        .on('addDir', dirPath => {
            console.log(`Directory ${dirPath} has been added`);

            let outEndPath = dirPath.replace(input, "");

            cp([{
                from: dirPath,
                to: path.join(output, outEndPath)
            }]);
        })
        .on('unlinkDir', dirPath => {
            console.log(`Directory ${dirPath} has been removed`);

            let outEndPath = dirPath.replace(input, "");
            let outEndDirPath = path.join(output, outEndPath);

            fs.rmSync(outEndDirPath, { recursive: true, force: true });
        });
};

export default viteCPPlugin = (options) => {
    options = options || {
        in: path.resolve(__dirname, 'resources'),
        out: path.resolve(__dirname, 'public'),
        directories: [],
        watch: []
    };

    let config;

    startWatch(options.in, options.out, options.watch);

    return {
        name: 'vite-plugin',
        enforce: 'pre',
        configResolved(resolvedConfig) {
            // store the resolved confg
            config = resolvedConfig;
        },
        buildStart() {
            cp(options.directories);
        },
        handleHotUpdate({ file, server }) {
            // if (file.includes(options.in) && file.endsWith('.md')) {
            // if (file.includes(options.in)) {
            //     let outEndPath = file.replace(options.in, "");

            //     cp([{
            //         from: file,
            //         to: path.join(options.out, outEndPath)
            //     }]);
            // }
        }
    };
}
