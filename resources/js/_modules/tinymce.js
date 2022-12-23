import $ from 'jquery';

class TinyMCEModule {
    constructor() {
        this.init();
    }

    init() {
        var editorEl = 'textarea.editor-content';

        var editor = tinymce.init({
            selector: editorEl,
            height: 500,
            menubar: false,
            branding: false,
            // language: 'ja',
            fontsize_formats: "8px 10px 11px 12px 13px 14px 15px 16px 20px 24px 30px 36px 48px 60px 72px 96px",
            external_plugins: {
                // codemirror: "/vendor/editor/tinymce-ext/plugins/codemirror/plugin.js",
                // ztube: "/vendor/editor/tinymce-ext/plugins/ztube/plugin.js"
                iconpicker: "/vendor/editor/tinymce-ext/plugins/iconpicker/plugin.js"
            },
            plugins: [
                'advlist',
                'autolink',
                'lists',
                'link',
                'image',
                'charmap',
                'print',
                'preview',
                'anchor',
                'searchreplace',
                'visualblocks',
                'code',
                'fullscreen',
                'insertdatetime',
                'table',
                'paste',
                'code',
                'wordcount',
                'template',
                'emoticons',
            ],
            toolbar: 'undo redo | fontsizeselect formatselect | ' +
                'bold italic underline forecolor backcolor | alignleft aligncenter ' +
                'alignright alignjustify | code | template | iconpicker emoticons | bullist numlist outdent indent | ' +
                'removeformat | image | fullscreen',
            content_style: 'body { font-family: sans-serif; font-size: 13px; } html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strong, sub, sup, var, b, u, i, dl, dt, dd, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video { margin: 0; padding: 0; border: 0; vertical-align: baseline; }',
            quickbars_selection_toolbar: 'bold italic underline | formatselect | bullist numlist | blockquote quicklink',
            image_advtab: true,
            paste_data_images: true,
            images_file_types: 'jpeg,jpg,png,gif,bmp,tif,svg,webp',
            // images_upload_handler: imagesUploadHandler,
            templates: [
                {
                    title: "snippet1",
                    description: " ",
                    url: "/vendor/editor/tinymce-ext/templates/snippet1.html"
                },
                {
                    title: "snippet2",
                    description: " ",
                    url: "/vendor/editor/tinymce-ext/templates/snippet2.html"
                },
                {
                    title: "snippet3",
                    description: " ",
                    url: "/vendor/editor/tinymce-ext/templates/snippet3.html"
                }
            ]
        });
    }
}

export default TinyMCEModule;
