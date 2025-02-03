@include('admin.header')

<style>
    .img_deg
    {
height: 80px;
width: 90px;
padding:10px;

    }
    </style>
@include('admin.sidebar')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Pending Approve</h4>
                  <p class="card-category">Waiting for admin approve</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                            Name
                          </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                            User Type
                          </th>
                        <th>
                            Status
                          </th>
                        <th>
                            Edit
                        </th>
                          <th>
                           Delete
                          </th>
                      </thead>

        @foreach($post as $post)
                      <tbody>
                        <tr>
                          <td>{{$post->id}} </td>
                          <td>{{$post->name}} </td>
                          <td> {{$post->title}}</td>
                            <td>
                                @php
                                    $shortDescription = Str::limit($post->description, 100);
                                @endphp
                                <span class="short-desc">{{ $shortDescription }}</span>
                                <span class="full-desc" style="display: none;">{!! $post->description !!}</span>
                                @if(strlen($post->description) > 100)
                                    <a href="javascript:void(0);" class="read-more" onclick="toggleDescription(this)">Read More</a>
                                @endif
                            </td>
                          <td> <img class ="img_deg" src="/postimage/{{$post->image}}"></td>
                          <td> {{$post->usertype}}</td>
                          <td> {{$post->status}}</td>
                          <td><a href="{{url('editpost', $post->id)}}" class="btn btn-primary">Edit</a></td>

                          <td><a href="{{url('deletepost', $post->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>

        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Approved Post</h4>
                  <p class="card-category">Published post</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            User Type
                          </th>
                        <th>
                            Status
                          </th>
                        <th>
                            Edit
                        </th>
                          <th>
                           Delete
                          </th>
                      </thead>
                      </thead>

                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        function toggleDescription(element) {
            var parent = element.parentElement;
            var shortDesc = parent.querySelector('.short-desc');
            var fullDesc = parent.querySelector('.full-desc');

            if (shortDesc.style.display === "none") {
                shortDesc.style.display = "inline";
                fullDesc.style.display = "none";
                element.innerText = "Read More";
            } else {
                shortDesc.style.display = "none";
                fullDesc.style.display = "inline";
                element.innerText = "Read Less";
            }
        }
    </script>

      @include('admin.footer')
