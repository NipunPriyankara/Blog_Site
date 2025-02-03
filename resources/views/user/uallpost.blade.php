@include('admin.header')

<style>
    .img_deg
    {
height: 80px;
width: 90px;
padding:10px;

    }
    </style>
@include('user.usidebar')

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
                  <h4 class="card-title ">My Post</h4>
                  <p class="card-category">All Post</p>
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
                            Edit
                        </th>

                      </thead>

                      @foreach($post as $post)
                      @if(Auth::user()->name == $post->name)
                          <tbody>
                              <tr>
                                  <td>{{$post->id}} </td>
                                  <td>{{$post->name}} </td>
                                  <td> {{$post->title}}</td>
                                  <td> {!!$post->description!!}</td>
                                  <td> <img class="img_deg" src="/postimage/{{$post->image}}"></td>
                                  <td><a href="{{url('ueditpost', $post->id)}}" class="btn btn-primary">Edit</a></td>
                              </tr>
                          </tbody>
                      @endif
                      @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

      @include('admin.footer')
