@include('admin.layouts.header')

<div class="container" ng-controller="LoginController as vm">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="login-logo">
                <img src="/admin/images/main/upme-white-shaddow.png" alt="Upme logo">
            </div>

            <div class="login-panel panel panel-default login-form">

                <div class="panel-body">

                    <form>

                    <!-- errors -->
                    <div class="alert alert-danger" role="alert" ng-if="vm.error">
                        <i class="material-icons">error</i>
                        <p ng-bind="vm.error"></p>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" placeholder="Email" ng-model="vm.user.email" type="text" autofocus>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" placeholder="Password" ng-model="vm.user.password" type="password">
                        </div>
                    </div>

                    <p style="font-size: 14px;">Emal: demo@demo.com</p>
                    <p style="font-size: 14px; margin-top: -20px">password: demodemo</p>

                    <!-- Remember -->
                    <div class="remember">
                        <input type='checkbox' name='remember' value='1' ng-model="vm.user.remember">
                        Remember Me
                    </div>

                    <!-- Submit -->
                    <input type='submit' value="Login" class="btn btn-login" ng-click="vm.login()" value="Login"></input>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')