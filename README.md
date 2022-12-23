# lv-demo

## Develop

## Features

***Editor:***
- Laraberg (Wordpress Gutenberg) [https://github.com/VanOns/laraberg]
- TinyMCE 5 [https://www.tiny.cloud/docs/demo/custom-toolbar-button/]

## Refs

https://github.com/alexusmai/laravel-file-manager
https://gitter.im/VanOns/laraberg?at=5d91c7daeb1eff63d64e22f8

# Features

- Menus
    - Menu Management + Builder
    - Site Dropdown + Mega Menu
    - Widgets + Blocks
- Data Table
- Form
- Upload File
- File Management
- Page Builder

# Develop with React

```sh
npm install react@latest react-dom@latest
npm i @vitejs/plugin-react --force
npm i @vitejs/plugin-react-refresh --force

# vite.config.js file
import reactRefresh from '@vitejs/plugin-react-refresh';


export default ({ command }) => ({
    base: command === 'serve' ? '' : '/build/',
    publicDir: 'fake_dir_so_nothing_gets_copied',
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
    plugins: [
        reactRefresh(),
    ],
});
```
