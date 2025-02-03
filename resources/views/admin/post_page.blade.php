@include('admin.css')

<style type="text/css">
/* General Styles */
.post_title {
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    padding: 30px;
    color: #ffffff;
}

.div_center {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: inline-block;
    width: 150px; /* Consistent alignment for all labels */
    font-size: 16px;
    text-align: left;
    margin-right: 10px;
}

input[type="text"],
textarea,
input[type="file"] {
    width: 300px; /* Adjust input width */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

textarea {
    height: 100px; /* Adjust height for text areas */
    resize: none;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Page Content Styling */
.page-content {
    padding: 20px;
    background-color: #2c2c2c;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

</style>

@include('admin.header')

<div class="d-flex align-items-stretch">
    @include('admin.sidebar') 

    <div class="page-content">

        @if(session()->has('message'))
    <div class ="alert alert-success">
        <button type="button" class = "close" data-dismiss="alert" ara-hideen="true">x</button>
        {{session()->get('message')}}

    </div>

        @endif
        <h1 class="post_title">Add Post</h1>

        <div>
            <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="div_center">
                    <label for="post-title">Post Title</label>
                    <input type="text" id="post-title" name="title" required>
                </div>

                <div class="div_center">
                    <label for="post-description">Post Description</label>
                    <textarea id="post-description" name="description" required></textarea>
                </div>

                <div class="div_center">
                    <label for="post-image">Add Image</label>
                    <input type="file" id="post-image" name="image" >
                </div>

                <div class="div_center">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

@include('admin.footer')
