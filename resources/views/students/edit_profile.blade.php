<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
          background: #f5f5f5;
          margin-top: 20px;
      }

      .ui-w-80 {
          width : 80px !important;
          height: auto;
      }

      .btn-default {
          border-color: rgba(24, 28, 33, 0.1);
          background  : rgba(0, 0, 0, 0);
          color       : #4E5155;
      }

      label.btn {
          margin-bottom: 0;
      }

      .btn-outline-primary {
          border-color: #26B4FF;
          background  : transparent;
          color       : #26B4FF;
      }

      .btn {
          cursor: pointer;
      }

      .text-light {
          color: #babbbc !important;
      }

      .btn-facebook {
          border-color: rgba(0, 0, 0, 0);
          background  : #3B5998;
          color       : #fff;
      }

      .btn-instagram {
          border-color: rgba(0, 0, 0, 0);
          background  : #000;
          color       : #fff;
      }

      .card {
          background-clip: padding-box;
          box-shadow     : 0 1px 4px rgba(24, 28, 33, 0.012);
      }

      .row-bordered {
          overflow: hidden;
      }

      .account-settings-fileinput {
          position  : absolute;
          visibility: hidden;
          width     : 1px;
          height    : 1px;
          opacity   : 0;
      }

      .account-settings-links .list-group-item.active {
          font-weight: bold !important;
      }

      html:not(.dark-style) .account-settings-links .list-group-item.active {
          background: transparent !important;
      }

      .account-settings-multiselect~.select2-container {
          width: 100% !important;
      }

      .light-style .account-settings-links .list-group-item {
          padding     : 0.85rem 1.5rem;
          border-color: rgba(24, 28, 33, 0.03) !important;
      }

      .light-style .account-settings-links .list-group-item.active {
          color: #4e5155 !important;
      }

      .material-style .account-settings-links .list-group-item {
          padding     : 0.85rem 1.5rem;
          border-color: rgba(24, 28, 33, 0.03) !important;
      }

      .material-style .account-settings-links .list-group-item.active {
          color: #4e5155 !important;
      }

      .dark-style .account-settings-links .list-group-item {
          padding     : 0.85rem 1.5rem;
          border-color: rgba(255, 255, 255, 0.03) !important;
      }

      .dark-style .account-settings-links .list-group-item.active {
          color: #fff !important;
      }

      .light-style .account-settings-links .list-group-item.active {
          color: #4E5155 !important;
      }

      .light-style .account-settings-links .list-group-item {
          padding     : 0.85rem 1.5rem;
          border-color: rgba(24, 28, 33, 0.03) !important;
      }
</style>
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">Edit Profile</h4>

        <form action="{{ route('update_profile', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <div class="form-group">
                                        <label for="image">Image:</label><br>
                                        @if(Auth::user()->image)
                                            <img src="{{ asset('' . Auth::user()->image) }}" alt="Previous Image" style="max-width: 200px;">
                                        @else
                                            <span>No previous image available</span>
                                        @endif
                                    </div>
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" name="image" id="image" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <div id="image-name" class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" id="email" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Contact No</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ Auth::user()->city }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ Auth::user()->state }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">About</label>
                                        <textarea class="form-control" id="about" name="about" rows="4">{{ Auth::user()->about }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control" name="current_password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                <a href="{{ url('/dashboard') }}" class="btn btn-primary">Cancel</a>
            </div>
        </form>

        <script>
            document.getElementById('image').addEventListener('change', function() {
                var imageName = this.files[0].name;
                document.getElementById('image-name').textContent = imageName;
            });
        </script>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
