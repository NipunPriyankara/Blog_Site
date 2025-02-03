<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Comments and Replies</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/asset/css/comment.css') }}">
    <style>
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Blog Comments and Replies</h2>
        
        <!-- Add a New Comment -->
        <div class="comment-section">
            <h4>Add a Comment</h4>
            <form action="{{ route('comment') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="comment" class="form-label">Your Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Write your comment here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
        </div>
        
        <!-- Display Existing Comments and Replies -->
        <div class="comment-section">
            <h4>Comments</h4>
            
            <!-- Comment -->
            <div class="comment">
                <strong>John Doe</strong>
                <p>This is a great blog post! Very informative and well-written.</p>
                <button class="btn btn-sm btn-link reply-btn" data-bs-toggle="collapse" data-bs-target="#replyForm1">Reply</button>
                
                <!-- Reply Form -->
                <div class="collapse" id="replyForm1">
                    <form action="{{ route('comment') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" name="reply" rows="2" placeholder="Write your reply here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Post Reply</button>
                    </form>
                </div>
                
                <!-- Replies -->
                <div class="reply">
                    <strong>Jane Smith</strong>
                    <p>Thank you, John! I’m glad you found it helpful.</p>
                </div>
            </div>
            
            <!-- Another Comment -->
            <div class="comment">
                <strong>Emily Brown</strong>
                <p>I have a question about this topic. Could you provide more examples?</p>
                <button class="btn btn-sm btn-link reply-btn" data-bs-toggle="collapse" data-bs-target="#replyForm2">Reply</button>
                
                <!-- Reply Form -->
                <div class="collapse" id="replyForm2">
                    <form action="{{ route('comment') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" name="reply" rows="2" placeholder="Write your reply here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Post Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
