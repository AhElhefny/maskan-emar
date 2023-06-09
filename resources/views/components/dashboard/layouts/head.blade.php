<?php
    use App\Models\GeneralSetting;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Nebras Films & Enriching The Human Thought">
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template">
    <meta name="author" content="PIXINVENT">
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" href="{{asset('dashboardAssets/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontAssets/images/logo/'.GeneralSetting::getValueForKey('favicon2'))}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    @if(app()->getLocale()=='ar')
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/vendors-rtl.min.css')}}"> <!-- 1 -->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/charts/apexcharts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/tether.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/vendors-rtl.min.css')}}/">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/swiper.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/forms/select/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/katex.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/quill.bubble.css')}}">

        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/bootstrap.css')}}">    <!-- 2 -->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/dashboardAssets/app-assets/css-rtl/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/themes/dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/themes/semi-dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/plugins/forms/wizard.css')}}">


        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/pages/dashboard-analytics.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/pages/card-analytics.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/plugins/tour/tour.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/pages/app-user.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/pages/app-ecommerce-details.css')}}">



        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css-rtl/custom-rtl.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/assets/css/style-rtl.css')}}">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/charts/apexcharts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/tether.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/vendors.min.css')}}/">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/extensions/swiper.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/forms/select/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/katex.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAssets/app-assets/vendors/css/editors/quill/quill.bubble.css')}}">

        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/dashboardAssets/app-assets/css/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/themes/dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/themes/semi-dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/plugins/forms/wizard.css')}}">


        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/pages/dashboard-analytics.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/pages/card-analytics.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/plugins/tour/tour.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/pages/app-user.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/pages/app-ecommerce-details.css')}}">


        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/app-assets/css/custom.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/assets/css/style.css')}}">
        <!-- END: Custom CSS-->
    @endif
    <style>
        /* General Styles */


        :root {
            --clr-white: rgb(255, 255, 255);
            --clr-black: rgb(0, 0, 0);
            --clr-light: rgb(245, 248, 255);
            --clr-light-gray: rgb(196, 195, 196);
            --clr-blue: rgb(63, 134, 255);
            --clr-light-blue: rgb(171, 202, 255);
        }

        /* End General Styles */

        /* Upload Area */
        .upload-area {
            width: 100%;
            max-width: 25rem;
            background-color: var(--clr-white);
            /*box-shadow: 0 10px 60px rgb(218, 229, 255);*/
            border: 2px solid var(--clr-light-blue);
            border-radius: 24px;
            padding: 2rem 1.875rem 5rem 1.875rem;
            margin: 0.625rem;
            text-align: center;
        }

        .upload-area--open { /* Slid Down Animation */
            animation: slidDown 500ms ease-in-out;
        }

        @keyframes slidDown {
            from {
                height: 28.125rem; /* 450px */
            }

            to {
                height: 35rem; /* 560px */
            }
        }

        /* Header */
        .upload-area__header {

        }

        .upload-area__title {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .upload-area__paragraph {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin-top: 0;
        }

        .upload-area__tooltip {
            position: relative;
            color: var(--clr-light-blue);
            cursor: pointer;
            transition: color 300ms ease-in-out;
        }

        .upload-area__tooltip:hover {
            color: var(--clr-blue);
        }

        .upload-area__tooltip-data {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -125%);
            min-width: max-content;
            background-color: var(--clr-white);
            color: var(--clr-blue);
            border: 1px solid var(--clr-light-blue);
            padding: 0.625rem 1.25rem;
            font-weight: 500;
            opacity: 0;
            visibility: hidden;
            transition: none 300ms ease-in-out;
            transition-property: opacity, visibility;
        }

        .upload-area__tooltip:hover .upload-area__tooltip-data {
            opacity: 1;
            visibility: visible;
        }

        /* Drop Zoon */
        .upload-area__drop-zoon {
            position: relative;
            height: 11.25rem; /* 180px */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px dashed var(--clr-light-blue);
            border-radius: 15px;
            margin-top: 2.1875rem;
            cursor: pointer;
            transition: border-color 300ms ease-in-out;
        }

        .upload-area__drop-zoon:hover {
            border-color: var(--clr-blue);
        }

        .drop-zoon__icon {
            display: flex;
            font-size: 3.75rem;
            color: var(--clr-blue);
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon__paragraph {
            font-size: 0.9375rem;
            color: var(--clr-light-gray);
            margin: 0;
            margin-top: 0.625rem;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon:hover .drop-zoon__icon,
        .drop-zoon:hover .drop-zoon__paragraph {
            opacity: 0.7;
        }

        .drop-zoon__loading-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            color: var(--clr-light-blue);
            z-index: 10;
        }

        .drop-zoon__preview-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 0.3125rem;
            border-radius: 10px;
            display: none;
            /*z-index: 1000;  old*/
            z-index: 9;
            transition: opacity 300ms ease-in-out;
        }

        .drop-zoon:hover .drop-zoon__preview-image {
            opacity: 0.8;
        }

        .drop-zoon__file-input {
            display: none;
        }

        /* (drop-zoon--over) Modifier Class */
        .drop-zoon--over {
            border-color: var(--clr-blue);
        }

        .drop-zoon--over .drop-zoon__icon,
        .drop-zoon--over .drop-zoon__paragraph {
            opacity: 0.7;
        }

        /* (drop-zoon--over) Modifier Class */
        .drop-zoon--Uploaded {

        }

        .drop-zoon--Uploaded .drop-zoon__icon,
        .drop-zoon--Uploaded .drop-zoon__paragraph {
            display: none;
        }

        /* File Details Area */
        .upload-area__file-details {
            height: 0;
            visibility: hidden;
            opacity: 0;
            text-align: left;
            transition: none 500ms ease-in-out;
            transition-property: opacity, visibility;
            transition-delay: 500ms;
        }

        /* (duploaded-file--open) Modifier Class */
        .file-details--open {
            height: auto;
            visibility: visible;
            opacity: 1;
        }

        .file-details__title {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--clr-light-gray);
        }

        /* Uploaded File */
        .uploaded-file {
            display: flex;
            align-items: center;
            padding: 0.625rem 0;
            visibility: hidden;
            opacity: 0;
            transition: none 500ms ease-in-out;
            transition-property: visibility, opacity;
        }

        /* (duploaded-file--open) Modifier Class */
        .uploaded-file--open {
            visibility: visible;
            opacity: 1;
        }

        .uploaded-file__icon-container {
            position: relative;
            margin-right: 0.3125rem;
        }

        .uploaded-file__icon {
            font-size: 3.4375rem;
            color: var(--clr-blue);
        }

        .uploaded-file__icon-text {
            position: absolute;
            top: 1.5625rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--clr-white);
        }

        .uploaded-file__info {
            position: relative;
            top: -0.3125rem;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .uploaded-file__info::before,
        .uploaded-file__info::after {
            content: '';
            position: absolute;
            bottom: -0.9375rem;
            width: 0;
            height: 0.5rem;
            background-color: #ebf2ff;
            border-radius: 0.625rem;
        }

        .uploaded-file__info::before {
            width: 100%;
        }

        .uploaded-file__info::after {
            width: 100%;
            background-color: var(--clr-blue);
        }

        /* Progress Animation */
        .uploaded-file__info--active::after {
            animation: progressMove 800ms ease-in-out;
            animation-delay: 300ms;
        }

        @keyframes progressMove {
            from {
                width: 0%;
                background-color: transparent;
            }

            to {
                width: 100%;
                background-color: var(--clr-blue);
            }
        }

        .uploaded-file__name {
            width: 100%;
            max-width: 6.25rem; /* 100px */
            display: inline-block;
            font-size: 1rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .uploaded-file__counter {
            font-size: 1rem;
            color: var(--clr-light-gray);
        }
    </style>
</head>
