<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <!-- Quill Rich Text Editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <h1>Create New Post</h1>

    <form action="post_submit.php" method="post" enctype="multipart/form-data">
        <label for="title">Post Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="date">Post Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="image">Upload Image or File:</label>
        <input type="file" id="image" name="image"><br><br>

        <label for="content">Content:</label>
        <!-- Quill Rich Text Editor -->
        <div id="editor-container" style="height: 200px; background-color: white;"></div>
        <input type="hidden" id="content" name="content"><br><br>

        <button type="submit">Submit Post</button>
    </form>

    <!-- Include Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor-container', {
            theme: 'snow',
            placeholder: 'Write the content...',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            }
        });

        // Get content from editor on form submit
        document.querySelector('form').onsubmit = function() {
            document.getElementById('content').value = quill.root.innerHTML;
        };
    </script>
</body>

</html>