<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe); /* Gradient background */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .form-container {
            background-color: #79ee5c;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            color: #000000;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #4facfe;
            border-color: #4facfe;
        }
        .btn-primary:hover {
            background-color: #0099cc;
            border-color: #0099cc;
        }
        label {
            color: #333333;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Add New Blog Post</h2>
        
        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Blog creation form -->
        <form action="{{ route('blog.store') }}" method="POST">
            @csrf <!-- CSRF Token for security -->
            
            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the blog title" required>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write your blog content here..." required></textarea>
            </div>
            
            <div class="mb-3">
                <label for="author" class="form-label">Author Name</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Enter the author's name" required>
            </div>
            
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags separated by commas">
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Submit Blog</button>
        </form>
    </div>

    <!-- Optional JavaScript for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
