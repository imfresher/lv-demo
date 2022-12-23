import '@/sass/backend/app.scss';
import '@/js/bootstrap';

// import { TinyMCEPlugin } from '../_modules';
// import exampleBlock from './blocks/example-block';

// exampleBlock();

(function ($) {
    'use strict';

    var init = function () {
        // Laraberg.init('home-editor');
        // new TinyMCEPlugin();
        Laraberg.init('content');
    };

    $(document).ready(function () {
        init();
    });
})(window.$);



// import exampleBlock from './blocks/example-block'
// import mediaUploadBlock from './blocks/media-upload-block'
// import serverSideRenderBlock from './blocks/server-side-render-block'

// exampleBlock()
// mediaUploadBlock()
// serverSideRenderBlock()

// document.addEventListener('block-editor/init', () => {
//     console.log('block-editor/init')
// })

// const mediaUpload = ({filesList, onFileChange}) => {
//     setTimeout(() => {
//         const uploadedFiles = Array.from(filesList).map(file => {
//             return {
//                 id: file.name,
//                 name: file.name,
//                 url: `https://dummyimage.com/600x400/000/fff&text=${file.name}`
//             }
//         })
//         onFileChange(uploadedFiles)
//     }, 1000)
// }

// Laraberg.init('content', { mediaUpload })
