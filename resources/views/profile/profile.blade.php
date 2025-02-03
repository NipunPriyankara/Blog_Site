@include('admin.header')

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
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    justify-content: flex-start; /* Align items to the left */
    gap: 20px; /* Add space between label and input fields */
}

label {
    display: inline-block;
    width: 200px; /* Reduced width for better alignment */
    font-size: 16px;
    text-align: left;
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
    background-color: #300f55;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
</style>

@include('admin.sidebar')

<div class="content">
    <div class="container-fluid">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update Usertype</h4>
                <p class="card-category">Created using Roboto Font Family</p>
            </div>
            <div class="card-body">
                <div id="typography">

                    <div class="row">
                        <div class="tim-typo">

                            <div>
                                @foreach($user as $user)
                    @if(Auth::user()->name == $user->name)
                                <form action="{{url('profileupdate',$user->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="div_center">
                                        <label for="post-title">Name</label>
                                        <input type="text" id="post-title" name="name" value="{{$user->name}}">
                                    </div>

                                    <div class="div_center">
                                        <label for="post-title">Email</label>
                                        <input type="text" id="post-title" name="email" value="{{$user->email}}">
                                    </div>
                                    <div class="div_center">
                                        <label for="post-title">Phone</label>
                                        <input type="text" id="post-title" name="phone" value="{{$user->phone}}">
                                    </div>
                                    <div class="div_center">
                                        <label for="post-title">Address</label>
                                        <input type="text" id="post-title" name="address" value="{{$user->address}}">
                                    </div>
                                    <div class="div_center">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
