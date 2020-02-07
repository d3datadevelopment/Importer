[{* this file contains parts of bootstrap.css version 4.3 - in preparation to switch to bootstrap *}]
<style type="text/css">
    *,
    *::before,
    *::after {
        box-sizing : border-box;
    }

    button {
        border-radius : 0;
    }

    button:focus {
        outline : 1px dotted;
        outline : 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin      : 0;
        font-family : inherit;
        font-size   : inherit;
        line-height : inherit;
    }

    button,
    input {
        overflow : visible;
    }

    button,
    select {
        text-transform : none;
    }

    select {
        word-wrap : normal;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance : button;
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor : pointer;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding      : 0;
        border-style : none;
    }

    fieldset { /*303*/
        min-width : 0;
        padding   : 0;
        margin    : 0;
        border    : 0;
    }

    legend { /*310*/
        display       : block;
        width         : 100%;
        max-width     : 100%;
        padding       : 0;
        margin-bottom : .5rem;
        font-size     : 1.5rem;
        line-height   : inherit;
        color         : inherit;
        white-space   : normal;
    }

    .lead { /*393*/
        font-size   : 1rem;
        font-weight : 300;
        margin      : 2px;
    }

    .container { /*548*/
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .row { /*588*/
        display       : -ms-flexbox;
        display       : flex;
        -ms-flex-wrap : wrap;
        flex-wrap     : wrap;
        margin-right  : -15px;
        margin-left   : -15px;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto { /*608*/
        position      : relative;
        width         : 100%;
        padding-right : 15px;
        padding-left  : 15px;
    }

    .col-md-1 { /*1012*/
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
    }
    .col-md-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }
    .col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
    .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-md-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
    }
    .col-md-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    .col-md-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-md-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
    .col-md-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
    }
    .col-md-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .col-form-label { /*1933*/
        padding-top    : calc(0.375rem + 1px);
        padding-bottom : calc(0.375rem + 1px);
        margin-bottom  : 0;
        font-size      : inherit;
        line-height    : 1.5;
    }

    .form-group { /*1997*/
        margin-bottom : 1rem;
        line-height   : 24px;
    }

    .form-check { /*2021*/
        position     : relative;
        display      : block;
        padding       : 10px 10px 10px 1.25rem;
    }

    .form-check-input { /*2027*/
        position    : absolute;
        margin-top  : 0.3rem;
        margin-left : -1.25rem;
    }

    .form-check-input:disabled ~ .form-check-label { /*2033*/
        color : #6c757d;
    }

    .form-check-label { /*2037*/
        margin-bottom : 0;
    }

    .btn { /*2378*/
        display             : inline-block;
        font-weight         : 400;
        color               : #212529;
        text-align          : center;
        vertical-align      : middle;
        -webkit-user-select : none;
        -moz-user-select    : none;
        -ms-user-select     : none;
        user-select         : none;
        background-color    : transparent;
        border              : 1px solid transparent;
        padding             : 0.375rem 0.75rem;
        font-size           : 14px;
        line-height         : 1.25;
        border-radius       : 0.25rem;
        transition          : color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary { /*2422*/
        color            : #fff;
        background-color : #007bff;
        border-color     : #007bff;
    }

    .btn-primary:hover { /*2428*/
        color            : #fff;
        background-color : #0069d9;
        border-color     : #0062cc;
    }

    .btn-primary:focus, .btn-primary.focus { /*2434*/
        box-shadow : 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-primary.disabled, .btn-primary:disabled { /*2438*/
        color            : #fff;
        background-color : #007bff;
        border-color     : #007bff;
    }

    .btn-green {
        background-color : #19bd21;
        border-color     : #19bd21;
    }

    .btn-green:hover { /*2428*/
        color            : #fff;
        background-color : #158d1a;
        border-color     : #158d1a;
    }

    .btn-green:focus, .btn-green.focus { /*2434*/
        box-shadow : 0 0 0 0.2rem rgba(21, 141, 26, 0.5);
    }

    .btn-green.disabled, .btn-green:disabled { /*2438*/
        color            : #fff;
        background-color : #9ce29c;
        border-color     : #9ce29c;
    }

    .alert { /*5105*/
        font-size: 14px;
        font-weight: 400;
        line-height: 1.125;
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }
    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-danger hr {
        border-top-color: #f1b0b7;
    }

    .alert-danger .alert-link {
        color: #491217;
    }

    .border {/*6598*/
        border: 1px solid #dee2e6 !important;
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important;
    }

    .border-right {
        border-right: 1px solid #dee2e6 !important;
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    .border-left {
        border-left: 1px solid #dee2e6 !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .border-top-0 {
        border-top: 0 !important;
    }

    .border-right-0 {
        border-right: 0 !important;
    }

    .border-bottom-0 {
        border-bottom: 0 !important;
    }

    .border-left-0 {
        border-left: 0 !important;
    }

    .align-self-center { /*7120*/
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .pt-0,
    .py-0 { /*8065*/
        padding-top : 0 !important;
    }

    .p-2 {/*8109*/
        padding: 0.5rem !important;
    }

    .pt-2,
    .py-2 {
        padding-top: 0.5rem !important;
    }

    .pr-2,
    .px-2 {
        padding-right: 0.5rem !important;
    }

    .pb-2,
    .py-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-2,
    .px-2 {
        padding-left: 0.5rem !important;
    }

    .text-left {/*9750*/
        text-align: left !important;
    }

    .text-right {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

</style>
