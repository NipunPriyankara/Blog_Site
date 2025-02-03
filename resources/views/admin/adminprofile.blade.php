@include('admin.header')
@include('admin.sidebar')

      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    @foreach($user as $user)
                    @if(Auth::user()->name == $user->name)
                    <form action="{{url('updateprofile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="{{ auth()->user()->name }}" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" value="{{ auth()->user()->email }}" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control" value="{{ auth()->user()->name }}" required>
                        </div>
                      </div>
                      <div class="col-md-6">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" value="{{ auth()->user()->address }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="text" class="form-control" value="{{ auth()->user()->phone }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class=""></button>
                    <a href="{{url('updateprofile', $user->id)}}" class="btn btn-primary pull-right">Update Profile</a>
                    <div class="clearfix"></div>
                    @endif
                    @endforeach
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="/admincss/assets/img/faces/marc.jpg" />
                  </a>
                </div>
                  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Profile Picture Input -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="profile_picture">Profile Picture</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update Profile Picture</button>
                    </div>
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.footer')
