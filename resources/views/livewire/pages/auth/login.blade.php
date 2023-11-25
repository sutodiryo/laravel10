<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirect(session('url.intended', RouteServiceProvider::HOME), navigate: true);
};

?>

<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2"
    id="m_login" style="background-image: url({{ asset('/') }}app/media/img//bg/bg-3.jpg);">
    <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
        <div class="m-login__container">
            <div class="m-login__logo">
                <a href="#">
                    <img src="{{ asset('/') }}app/media/img/logos/logo-1.png">
                </a>
            </div>
            <div class="m-login__signin">
                <div class="m-login__head">
                    <h3 class="m-login__title">Sign In To Admin</h3>
                </div>
                <form class="m-login__form m-form" wire:submit="login">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="form-group m-form__group">

                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                        <x-text-input wire:model="form.email" id="email" class="form-control m-input" type="email"
                            placeholder="Email" name="email" required autofocus autocomplete="username" />
                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                        {{-- <input class="form-control m-input" type="text" placeholder="Email" name="email"
                            autocomplete="off"> --}}
                    </div>
                    <div class="form-group m-form__group">
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        <x-text-input wire:model="form.password" id="password"
                            class="form-control m-input m-login__form-input--last" type="password"
                            placeholder="Password" name="password" required autocomplete="current-password" />
                        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                        {{-- <input class="form-control m-input m-login__form-input--last" type="password"
                            placeholder="Password" name="password"> --}}
                    </div>
                    <div class="row m-login__form-sub">
                        <div class="col m--align-left m-login__form-left">
                            <label class="m-checkbox  m-checkbox--focus">
                                <input wire:model="form.remember" id="remember" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="remember">

                                {{-- <input type="checkbox" name="remember"> --}}
                                Remember me
                                <span></span>
                            </label>
                        </div>
                        <div class="col m--align-right m-login__form-right">
                            <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password
                                ?</a>
                        </div>
                    </div>
                    <div class="m-login__form-action">
                        <button id="m_login_signin_submit"
                            class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign
                            In</button>
                    </div>
                </form>
            </div>
            <div class="m-login__signup">
                <div class="m-login__head">
                    <h3 class="m-login__title">Sign Up</h3>
                    <div class="m-login__desc">Enter your details to create your account:</div>
                </div>
                <form class="m-login__form m-form" action="">
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="text" placeholder="Email" name="email"
                            autocomplete="off">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input m-login__form-input--last" type="password"
                            placeholder="Confirm Password" name="rpassword">
                    </div>
                    <div class="row form-group m-form__group m-login__form-sub">
                        <div class="col m--align-left">
                            <label class="m-checkbox m-checkbox--focus">
                                <input type="checkbox" name="agree">I Agree the <a href="#"
                                    class="m-link m-link--focus">terms and conditions</a>.
                                <span></span>
                            </label>
                            <span class="m-form__help"></span>
                        </div>
                    </div>
                    <div class="m-login__form-action">
                        <button id="m_login_signup_submit"
                            class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign
                            Up</button>&nbsp;&nbsp;
                        <button id="m_login_signup_cancel"
                            class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="m-login__forget-password">
                <div class="m-login__head">
                    <h3 class="m-login__title">Forgotten Password ?</h3>
                    <div class="m-login__desc">Enter your email to reset your password:</div>
                </div>
                <form class="m-login__form m-form" action="">
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="text" placeholder="Email" name="email"
                            id="m_email" autocomplete="off">
                    </div>
                    <div class="m-login__form-action">
                        <button id="m_login_forget_password_submit"
                            class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">Request</button>&nbsp;&nbsp;
                        <button id="m_login_forget_password_cancel"
                            class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="m-login__account">
                <span class="m-login__account-msg">
                    Don't have an account yet ?
                </span>&nbsp;&nbsp;
                <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign
                    Up</a>
            </div>
        </div>
    </div>
</div>



<!--begin::Base Scripts -->
<script src="{{ asset('/') }}vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{ asset('/') }}demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src="{{ asset('/') }}snippets/custom/pages/user/login.js" type="text/javascript"></script>
<!--end::Page Snippets -->
