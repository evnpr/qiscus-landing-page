@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">Pricing</h1>
                        <span class="divider"></span>
                        <p>
                            Our team is looking forward to crafting a plan that best fits your needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section-page section-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                     
                    <form action="" class="form-default">
                        <div class="section-form">
                            <h4>CONTACT INFORMATION</h4>
                            <div class="divider"></div>
                            <div class="field">
                                <input type="text" id="fisrtName" placeholder="First Name*" autocomplete="off" required="">
                                <span></span>
                            </div>
                            <div class="separator"></div>
                            <div class="field">
                                <input type="text" id="lastName" placeholder="Last Name*" autocomplete="off" required="">
                                <span></span>
                            </div>
                            <div class="field">
                                <input type="email" id="email" placeholder="Email Address*" autocomplete="off" required="">
                                <span></span>
                            </div>
                            <div class="separator"></div>
                            <div class="field">
                                <input type="number" id="phone" placeholder="Phone number*" autocomplete="off" required="">
                                <span></span>
                            </div>
                        </div>
                        <div class="section-form">
                            <h4>COMPANY</h4>
                            <div class="divider"></div>
                            <div class="field">
                                <input type="text" id="role" placeholder="Role*" autocomplete="off" required="">
                                <span></span>
                            </div>
                             <div class="separator"></div>
                            <div class="field">
                                <input type="text" id="company" placeholder="Company name*" autocomplete="off" required="">
                                <span></span>
                            </div>    
                            <div class="field">
                                <select name="" id="">
                                    <option value="" selected>Departement *</option>
                                    <option value="">Design</option>
                                    <option value="">Developer</option>
                                </select>
                                <span></span>
                            </div>
                             <div class="separator"></div>
                            <div class="field">
                                <select name="" id="">
                                    <option value="" selected>Company Size *</option>
                                    <option value="">Design</option>
                                    <option value="">Developer</option>
                                </select>
                                <span></span>
                            </div>
                        </div>
                        <div class="section-form">
                            <h4>LOCATION</h4>
                            <div class="divider"></div>
                            
                            <div class="field">
                                <select name="" id="">
                                    <option value="" selected>Location *</option>
                                    <option value="">Design</option>
                                    <option value="">Developer</option>
                                </select>
                                <span></span>
                            </div>
                            <div class="clearfix"></div>
                            <h4>DESCRIBE YOUR PROJECT BRIEFLY</h4>
                            <br>
                            <div class="field" style="width: 98%">
                                <textarea name="" id="" cols="30" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn-primary btn-large on-right">CONTACT SALES</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop