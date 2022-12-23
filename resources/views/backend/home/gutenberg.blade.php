@push('prescripts')
    <script src="{{ asset('vendor/gutenberg/build/dom-ready/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/a11y/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/url/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/api-fetch/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/vendors/react.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/vendors/react-dom.min.js?v=' . env('APP_VERSION')) }}"></script>

    <script src="{{ asset('vendor/gutenberg/build/blob/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/autop/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/block-serialization-default-parser/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/deprecated/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/dom/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/escape-html/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/element/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/is-shallow-equal/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/keycodes/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/priority-queue/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/compose/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/redux-routine/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/data/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/html-entities/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/shortcode/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/blocks/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/moment.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/date/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/primitives/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/rich-text/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/warning/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/components/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/keyboard-shortcuts/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/notices/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/style-engine/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/token-list/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/wordcount/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/block-editor/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/core-data/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/reusable-blocks/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/server-side-render/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/viewport/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/editor/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/block-library/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/media-utils/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/preferences-persistence/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/preferences/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/editor/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/plugins/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/block-directory/index.min.js?v=' . env('APP_VERSION')) }}"></script>
    <script src="{{ asset('vendor/gutenberg/build/format-library/index.min.js?v=' . env('APP_VERSION')) }}"></script>
@endpush

<x-backend-layout>
    <div class="content">
        <h1>Gutenberg</h1>
        <textarea id="editor" name="editor" hidden></textarea>
    </div>
</x-backend-layout>
