<!doctype html>
<html lang="en">

<head>
    @include('components.app.header')
</head>

<body>
    <section>
        <div id="layout-wrapper">

            <div id="topbar">
                @include('components.app.topbar')
            </div>

            <div id="leftbar">
                @include('components.app.leftbar')
            </div>

            <div id="content">
                @yield('content')
            </div>

            <div id="footer">
                @include('components.app.footer')
            </div>

            <div id="rightbar">
                @include('components.app.rightbar')
            </div>
        </div>
    </section>

    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 500,
            menubar: true,
            plugins: [
                'a11ychecker', 'advcode', 'advlist', 'anchor', 'autolink', 'codesample', 'fullscreen', 'help',
                'image', 'editimage', 'tinydrive', 'lists', 'link', 'media', 'powerpaste', 'preview',
                'searchreplace', 'table', 'template', 'tinymcespellchecker', 'visualblocks', 'wordcount'
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            spellchecker_dialog: true,
            tinycomments_author: 'Zwork Technology - Developers',
        });
    </script>

</body>

<div id="script">
    @include('components.app.script')
</div>

</html>