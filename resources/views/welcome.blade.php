@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="title m-b-md">개발 환경</div>
            <div class="col-md-10">
                <div class="card-columns">
                    <div class="card bg-light">
                        <div class="card-header orangered text-center">Server</div>
                        <div class="card-body text-left">
                            <ul>
                                <li>4.18.0-kali1-amd64</li>
                                <li>Nginx 1.14.0</li>
                                <li>Postfix 3.3.0</li>
                                <li>MariaDB 10.1.34</li>
                                <li>phpMyAdmin</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-header orangered text-center">Laravel 5.7</div>
                        <div class="card-body text-left">
                            <ul>
                                <li>zip</li>
                                <li>unzip</li>
                                <li>PHP 7.2.10</li>
                                <li>php7.2-xml</li>
                                <li>php7.2-fpm</li>
                                <li>php7.2-curl</li>
                                <li>php7.2-mysql</li>
                                <li>php7.2-mbstring</li>
								<li>Composer 1.7.2</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-header orangered text-center">Front-End</div>
                        <div class="card-body text-left">
                            <ul>
                                <li>vue 2.5.7</li>
                                <LI>vform 1.0.0</LI>
                                <LI>moment 2.22.2</LI>
                                <LI>vue-router 3.0.1</LI>
                                <LI>fontawesome 5.3.1</LI>
                                <LI>sweetalert2 7.26.29</LI>
                                <LI>axios 0.18</LI>
                                <LI>bootstrap 4.0.0</LI>
                                <LI>cross-env 5.1</LI>
                                <LI>jquery 3.2</LI>
                                <LI>laravel-mix 2.0</LI>
                                <LI>lodash 4.17.5</LI>
                                <LI>popper.js 1.12</LI>
								<li>admin-lte v3.0.0-alpha.2</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection