<?php $__env->startSection('page'); ?>
Home
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('style'); ?>
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/uikit.css')); ?>">
       <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
       <!-- font awesome -->
       <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>">
       <!--  javascript -->
       <script src="<?php echo e(asset('assets/js/simplebar.js')); ?>"></script>
       <script src="<?php echo e(asset('assets/js/uikit.js')); ?>"></script>
       <style>
       @import  url(https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:400,500);
      :root {
      --blue:#007bff;
      --indigo:#6610f2;
      --purple:#6f42c1;
      --pink:#e83e8c;
      --red:#dc3545;
      --orange:#fd7e14;
      --yellow:#ffc107;
      --green:#28a745;
      --teal:#20c997;
      --cyan:#17a2b8;
      --white:#fff;
      --gray:#868e96;
      --gray-dark:#343a40;
      --primary:#2c84dd;
      --secondary:#868e96;
      --success:#77c13a;
      --info:#17a2b8;
      --warning:#f98437;
      --danger:#d9534f;
      --light:#f8f9fa;
      --dark:#1d2126;
      --accent:#ed0b4c;
      --primary-light:#9cf;
      --breakpoint-xs:0;
      --breakpoint-i8:374px;
      --breakpoint-i8-plus:413px;
      --breakpoint-sm:576px;
      --breakpoint-md:768px;
      --breakpoint-lg:992px;
      --breakpoint-xl:1200px;
      --breakpoint-xxl:1366px;
      --font-family-sans-serif:-apple-system,
      BlinkMacSystemFont,
      "Segoe UI",
      Roboto,
      "Helvetica Neue",
      Arial,
      "Noto Sans",
      sans-serif,
      "Apple Color Emoji",
      "Segoe UI Emoji",
      "Segoe UI Symbol",
      "Noto Color Emoji";
      --font-family-monospace:SFMono-Regular,
      Menlo,
      Monaco,
      Consolas,
      "Liberation Mono",
      "Courier New",
      monospace
     }
      *,
      :after,
      :before {
      box-sizing:border-box
     }
     html {
      font-family:sans-serif;
      line-height:1.15;
      -webkit-text-size-adjust:100%;
      -webkit-tap-highlight-color:rgba(48,56,64,0)
     }
      article,
      aside,
      figcaption,
      figure,
      footer,
      header,
      hgroup,
      main,
      nav,
      section {
      display:block
     }
      body {
      margin:0;
      font-family:Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
      font-size:1rem;
      font-weight:400;
      line-height:1.5;
      color:#303840;
      text-align:left;
      background-color:#f5f7fa
     }
      [tabindex="-1"]:focus {
      outline:0!important
     }
      hr {
      box-sizing:content-box;
      height:0;
      overflow:visible
     }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p {
      margin-top:0;
      margin-bottom:1rem
     }
      abbr[data-original-title],
      abbr[title] {
      text-decoration:underline;
      -webkit-text-decoration:underline dotted;
      text-decoration:underline dotted;
      cursor:help;
      border-bottom:0;
      -webkit-text-decoration-skip-ink:none;
      text-decoration-skip-ink:none
     }
      address {
      font-style:normal;
      line-height:inherit
     }
      address,
      dl,
      ol,
      ul {
      margin-bottom:1rem
     }
      dl,
      ol,
      ul {
      margin-top:0
     }
      ol ol,
      ol ul,
      ul ol,
      ul ul {
      margin-bottom:0
     }
      dt {
      font-weight:500
     }
      dd {
      margin-bottom:.5rem;
      margin-left:0
     }
      blockquote {
      margin:0 0 1rem
     }
      b,
      strong {
      font-weight:bolder
     }
      small {
      font-size:80%
     }
      sub,
      sup {
      position:relative;
      font-size:75%;
      line-height:0;
      vertical-align:baseline
     }
      sub {
      bottom:-.25em
     }
      sup {
      top:-.5em
     }
      a {
      color:rgba(48,56,64,.7);
      text-decoration:none;
      background-color:transparent
     }
      a:hover {
      color:rgba(15,18,20,.7);
      text-decoration:underline
     }
      a:not([href]):not([tabindex]),
      a:not([href]):not([tabindex]):focus,
      a:not([href]):not([tabindex]):hover {
      color:inherit;
      text-decoration:none
     }
      a:not([href]):not([tabindex]):focus {
      outline:0
     }
      code,
      kbd,
      pre,
      samp {
      font-family:SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
      font-size:1em
     }
      pre {
      margin-top:0;
      margin-bottom:1rem;
      overflow:auto
     }
      figure {
      margin:0 0 1rem
     }
      img {
      border-style:none
     }
      img,
      svg {
      vertical-align:middle
     }
      svg {
      overflow:hidden
     }
      table {
      border-collapse:collapse
     }
      caption {
      padding-top:.75rem 1rem;
      padding-bottom:.75rem 1rem;
      color:rgba(48,56,64,.5);
      text-align:left;
      caption-side:bottom
     }
      th {
      text-align:inherit
     }
      label {
      display:inline-block;
      margin-bottom:.5rem
     }
      button {
      border-radius:0
     }
      button:focus {
      outline:1px dotted;
      outline:5px auto -webkit-focus-ring-color
     }
      button,
      input,
      optgroup,
      select,
      textarea {
      margin:0;
      font-family:inherit;
      font-size:inherit;
      line-height:inherit
     }
      button,
      input {
      overflow:visible
     }
      button,
      select {
      text-transform:none
     }
      [type=button],
      [type=reset],
      [type=submit],
      button {
      -webkit-appearance:button
     }
      [type=button]::-moz-focus-inner,
      [type=reset]::-moz-focus-inner,
      [type=submit]::-moz-focus-inner,
      button::-moz-focus-inner {
      padding:0;
      border-style:none
     }
      input[type=checkbox],
      input[type=radio] {
      box-sizing:border-box;
      padding:0
     }
      input[type=date],
      input[type=datetime-local],
      input[type=month],
      input[type=time] {
      -webkit-appearance:listbox
     }
      textarea {
      overflow:auto;
      resize:vertical
     }
      fieldset {
      min-width:0;
      padding:0;
      margin:0;
      border:0
     }
      legend {
      display:block;
      width:100%;
      max-width:100%;
      padding:0;
      margin-bottom:.5rem;
      font-size:1.5rem;
      line-height:inherit;
      color:inherit;
      white-space:normal
     }
      progress {
      vertical-align:baseline
     }
      [type=number]::-webkit-inner-spin-button,
      [type=number]::-webkit-outer-spin-button {
      height:auto
     }
      [type=search] {
      outline-offset:-2px;
      -webkit-appearance:none
     }
      [type=search]::-webkit-search-decoration {
      -webkit-appearance:none
     }
      ::-webkit-file-upload-button {
      font:inherit;
      -webkit-appearance:button
     }
      output {
      display:inline-block
     }
      summary {
      display:list-item;
      cursor:pointer
     }
      template {
      display:none
     }
      [hidden] {
      display:none!important
     }
      .h1,
      .h2,
      .h3,
      .h4,
      .h5,
      .h6,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
      margin-bottom:1rem;
      font-family:Oswald,Helvetica Neue,Arial,sans-serif;
      font-weight:500;
      line-height:1.5;
      color:#303840
     }
      .h1,
      h1 {
      font-size:2.827rem
     }
      .h2,
      h2 {
      font-size:1.999rem
     }
      .h3,
      .h4,
      h3,
      h4 {
      font-size:1.414rem
     }
      .h5,
      .h6,
      h5,
      h6 {
      font-size:1rem
     }
      .lead {
      font-size:1.125rem;
      font-weight:400
     }
      .display-1 {
      font-size:3.998rem;
      font-weight:700;
      line-height:1.5
     }
      .display-2 {
      font-size:5.5rem
     }
      .display-2,
      .display-3 {
      font-weight:300;
      line-height:1.5
     }
      .display-3 {
      font-size:4.5rem
     }
      .display-4 {
      font-size:3.5rem;
      font-weight:300;
      line-height:1.5
     }
      hr {
      margin-top:1rem;
      margin-bottom:1rem;
      border:0;
      border-top:1px solid rgba(48,56,64,.1)
     }
      .small,
      small {
      font-size:.707rem;
      font-weight:400
     }
      .mark,
      mark {
      padding:.2em;
      background-color:#fcf8e3
     }
      .list-inline,
      .list-unstyled {
      padding-left:0;
      list-style:none
     }
      .list-inline-item {
      display:inline-block
     }
      .list-inline-item:not(:last-child) {
      margin-right:.5rem
     }
      .initialism {
      font-size:90%;
      text-transform:uppercase
     }
      .blockquote {
      margin-bottom:1rem;
      font-size:1.25rem
     }
      .blockquote-footer {
      display:block;
      font-size:.707rem;
      color:#868e96
     }
      .blockquote-footer:before {
      content:"\2014\A0"
     }
      .img-fluid,
      .img-thumbnail {
      max-width:100%;
      height:auto
     }
      .img-thumbnail {
      padding:.25rem;
      background-color:#f5f7fa;
      border:1px solid #dee2e6;
      border-radius:.25rem
     }
      .figure {
      display:inline-block
     }
      .figure-img {
      margin-bottom:.5rem;
      line-height:1
     }
      .figure-caption {
      font-size:90%;
      color:#868e96
     }
      code {
      font-size:87.5%;
      color:#ed0b4c;
      word-break:break-word
     }
      a>code {
      color:inherit
     }
      kbd {
      padding:.2rem .4rem;
      font-size:87.5%;
      color:#fff;
      background-color:#212529;
      border-radius:.2rem
     }
      kbd kbd {
      padding:0;
      font-size:100%;
      font-weight:500
     }
      pre {
      display:block;
      font-size:87.5%;
      color:#212529
     }
      pre code {
      font-size:inherit;
      color:inherit;
      word-break:normal
     }
      .pre-scrollable {
      max-height:340px;
      overflow-y:scroll
     }
      .container {
      width:100%;
      padding-right:12px;
      padding-left:12px;
      margin-right:auto;
      margin-left:auto
     }
     @media (min-width:576px) {
       .container {
       max-width:520px
      }
     }
     @media (min-width:768px) {
       .container {
       max-width:720px
      }
     }
     @media (min-width:992px) {
       .container {
       max-width:960px
      }
     }
     @media (min-width:1200px) {
       .container {
       max-width:960px
      }
     }
     @media (min-width:1366px) {
       .container {
       max-width:1120px
      }
     }
      .container-fluid {
      width:100%;
      padding-right:12px;
      padding-left:12px;
      margin-right:auto;
      margin-left:auto
     }
      .row {
      display:flex;
      flex-wrap:wrap;
      margin-right:-12px;
      margin-left:-12px
     }
      .no-gutters {
      margin-right:0;
      margin-left:0
     }
      .no-gutters>.col,
      .no-gutters>[class*=col-] {
      padding-right:0;
      padding-left:0
     }
      .col,
      .col-1,
      .col-2,
      .col-3,
      .col-4,
      .col-5,
      .col-6,
      .col-7,
      .col-8,
      .col-9,
      .col-10,
      .col-11,
      .col-12,
      .col-auto,
      .col-i8,
      .col-i8-1,
      .col-i8-2,
      .col-i8-3,
      .col-i8-4,
      .col-i8-5,
      .col-i8-6,
      .col-i8-7,
      .col-i8-8,
      .col-i8-9,
      .col-i8-10,
      .col-i8-11,
      .col-i8-12,
      .col-i8-auto,
      .col-i8-plus,
      .col-i8-plus-1,
      .col-i8-plus-2,
      .col-i8-plus-3,
      .col-i8-plus-4,
      .col-i8-plus-5,
      .col-i8-plus-6,
      .col-i8-plus-7,
      .col-i8-plus-8,
      .col-i8-plus-9,
      .col-i8-plus-10,
      .col-i8-plus-11,
      .col-i8-plus-12,
      .col-i8-plus-auto,
      .col-lg,
      .col-lg-1,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12,
      .col-lg-auto,
      .col-md,
      .col-md-1,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9,
      .col-md-10,
      .col-md-11,
      .col-md-12,
      .col-md-auto,
      .col-sm,
      .col-sm-1,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12,
      .col-sm-auto,
      .col-xl,
      .col-xl-1,
      .col-xl-2,
      .col-xl-3,
      .col-xl-4,
      .col-xl-5,
      .col-xl-6,
      .col-xl-7,
      .col-xl-8,
      .col-xl-9,
      .col-xl-10,
      .col-xl-11,
      .col-xl-12,
      .col-xl-auto,
      .col-xxl,
      .col-xxl-1,
      .col-xxl-2,
      .col-xxl-3,
      .col-xxl-4,
      .col-xxl-5,
      .col-xxl-6,
      .col-xxl-7,
      .col-xxl-8,
      .col-xxl-9,
      .col-xxl-10,
      .col-xxl-11,
      .col-xxl-12,
      .col-xxl-auto {
      position:relative;
      width:100%;
      padding-right:12px;
      padding-left:12px
     }
      .col {
      flex-basis:0;
      flex-grow:1;
      max-width:100%
     }
      .col-auto {
      flex:0 0 auto;
      width:auto;
      max-width:100%
     }
      .col-1 {
      flex:0 0 8.3333333333%;
      max-width:8.3333333333%
     }
      .col-2 {
      flex:0 0 16.6666666667%;
      max-width:16.6666666667%
     }
      .col-3 {
      flex:0 0 25%;
      max-width:25%
     }
      .col-4 {
      flex:0 0 33.3333333333%;
      max-width:33.3333333333%
     }
      .col-5 {
      flex:0 0 41.6666666667%;
      max-width:41.6666666667%
     }
      .col-6 {
      flex:0 0 50%;
      max-width:50%
     }
      .col-7 {
      flex:0 0 58.3333333333%;
      max-width:58.3333333333%
     }
      .col-8 {
      flex:0 0 66.6666666667%;
      max-width:66.6666666667%
     }
      .col-9 {
      flex:0 0 75%;
      max-width:75%
     }
      .col-10 {
      flex:0 0 83.3333333333%;
      max-width:83.3333333333%
     }
      .col-11 {
      flex:0 0 91.6666666667%;
      max-width:91.6666666667%
     }
      .col-12 {
      flex:0 0 100%;
      max-width:100%
     }
      .order-first {
      order:-1
     }
      .order-last {
      order:13
     }
      .order-0 {
      order:0
     }
      .order-1 {
      order:1
     }
      .order-2 {
      order:2
     }
      .order-3 {
      order:3
     }
      .order-4 {
      order:4
     }
      .order-5 {
      order:5
     }
      .order-6 {
      order:6
     }
      .order-7 {
      order:7
     }
      .order-8 {
      order:8
     }
      .order-9 {
      order:9
     }
      .order-10 {
      order:10
     }
      .order-11 {
      order:11
     }
      .order-12 {
      order:12
     }
      .offset-1 {
      margin-left:8.3333333333%
     }
      .offset-2 {
      margin-left:16.6666666667%
     }
      .offset-3 {
      margin-left:25%
     }
      .offset-4 {
      margin-left:33.3333333333%
     }
      .offset-5 {
      margin-left:41.6666666667%
     }
      .offset-6 {
      margin-left:50%
     }
      .offset-7 {
      margin-left:58.3333333333%
     }
      .offset-8 {
      margin-left:66.6666666667%
     }
      .offset-9 {
      margin-left:75%
     }
      .offset-10 {
      margin-left:83.3333333333%
     }
      .offset-11 {
      margin-left:91.6666666667%
     }
     @media (min-width:374px) {
       .col-i8 {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-i8-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-i8-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-i8-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-i8-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-i8-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-i8-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-i8-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-i8-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-i8-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-i8-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-i8-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-i8-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-i8-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-i8-first {
       order:-1
      }
       .order-i8-last {
       order:13
      }
       .order-i8-0 {
       order:0
      }
       .order-i8-1 {
       order:1
      }
       .order-i8-2 {
       order:2
      }
       .order-i8-3 {
       order:3
      }
       .order-i8-4 {
       order:4
      }
       .order-i8-5 {
       order:5
      }
       .order-i8-6 {
       order:6
      }
       .order-i8-7 {
       order:7
      }
       .order-i8-8 {
       order:8
      }
       .order-i8-9 {
       order:9
      }
       .order-i8-10 {
       order:10
      }
       .order-i8-11 {
       order:11
      }
       .order-i8-12 {
       order:12
      }
       .offset-i8-0 {
       margin-left:0
      }
       .offset-i8-1 {
       margin-left:8.3333333333%
      }
       .offset-i8-2 {
       margin-left:16.6666666667%
      }
       .offset-i8-3 {
       margin-left:25%
      }
       .offset-i8-4 {
       margin-left:33.3333333333%
      }
       .offset-i8-5 {
       margin-left:41.6666666667%
      }
       .offset-i8-6 {
       margin-left:50%
      }
       .offset-i8-7 {
       margin-left:58.3333333333%
      }
       .offset-i8-8 {
       margin-left:66.6666666667%
      }
       .offset-i8-9 {
       margin-left:75%
      }
       .offset-i8-10 {
       margin-left:83.3333333333%
      }
       .offset-i8-11 {
       margin-left:91.6666666667%
      }
     }
     @media (min-width:413px) {
       .col-i8-plus {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-i8-plus-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-i8-plus-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-i8-plus-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-i8-plus-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-i8-plus-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-i8-plus-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-i8-plus-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-i8-plus-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-i8-plus-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-i8-plus-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-i8-plus-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-i8-plus-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-i8-plus-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-i8-plus-first {
       order:-1
      }
       .order-i8-plus-last {
       order:13
      }
       .order-i8-plus-0 {
       order:0
      }
       .order-i8-plus-1 {
       order:1
      }
       .order-i8-plus-2 {
       order:2
      }
       .order-i8-plus-3 {
       order:3
      }
       .order-i8-plus-4 {
       order:4
      }
       .order-i8-plus-5 {
       order:5
      }
       .order-i8-plus-6 {
       order:6
      }
       .order-i8-plus-7 {
       order:7
      }
       .order-i8-plus-8 {
       order:8
      }
       .order-i8-plus-9 {
       order:9
      }
       .order-i8-plus-10 {
       order:10
      }
       .order-i8-plus-11 {
       order:11
      }
       .order-i8-plus-12 {
       order:12
      }
       .offset-i8-plus-0 {
       margin-left:0
      }
       .offset-i8-plus-1 {
       margin-left:8.3333333333%
      }
       .offset-i8-plus-2 {
       margin-left:16.6666666667%
      }
       .offset-i8-plus-3 {
       margin-left:25%
      }
       .offset-i8-plus-4 {
       margin-left:33.3333333333%
      }
       .offset-i8-plus-5 {
       margin-left:41.6666666667%
      }
       .offset-i8-plus-6 {
       margin-left:50%
      }
       .offset-i8-plus-7 {
       margin-left:58.3333333333%
      }
       .offset-i8-plus-8 {
       margin-left:66.6666666667%
      }
       .offset-i8-plus-9 {
       margin-left:75%
      }
       .offset-i8-plus-10 {
       margin-left:83.3333333333%
      }
       .offset-i8-plus-11 {
       margin-left:91.6666666667%
      }
     }
     @media (min-width:576px) {
       .col-sm {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-sm-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-sm-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-sm-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-sm-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-sm-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-sm-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-sm-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-sm-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-sm-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-sm-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-sm-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-sm-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-sm-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-sm-first {
       order:-1
      }
       .order-sm-last {
       order:13
      }
       .order-sm-0 {
       order:0
      }
       .order-sm-1 {
       order:1
      }
       .order-sm-2 {
       order:2
      }
       .order-sm-3 {
       order:3
      }
       .order-sm-4 {
       order:4
      }
       .order-sm-5 {
       order:5
      }
       .order-sm-6 {
       order:6
      }
       .order-sm-7 {
       order:7
      }
       .order-sm-8 {
       order:8
      }
       .order-sm-9 {
       order:9
      }
       .order-sm-10 {
       order:10
      }
       .order-sm-11 {
       order:11
      }
       .order-sm-12 {
       order:12
      }
       .offset-sm-0 {
       margin-left:0
      }
       .offset-sm-1 {
       margin-left:8.3333333333%
      }
       .offset-sm-2 {
       margin-left:16.6666666667%
      }
       .offset-sm-3 {
       margin-left:25%
      }
       .offset-sm-4 {
       margin-left:33.3333333333%
      }
       .offset-sm-5 {
       margin-left:41.6666666667%
      }
       .offset-sm-6 {
       margin-left:50%
      }
       .offset-sm-7 {
       margin-left:58.3333333333%
      }
       .offset-sm-8 {
       margin-left:66.6666666667%
      }
       .offset-sm-9 {
       margin-left:75%
      }
       .offset-sm-10 {
       margin-left:83.3333333333%
      }
       .offset-sm-11 {
       margin-left:91.6666666667%
      }
     }
     @media (min-width:768px) {
       .col-md {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-md-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-md-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-md-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-md-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-md-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-md-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-md-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-md-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-md-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-md-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-md-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-md-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-md-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-md-first {
       order:-1
      }
       .order-md-last {
       order:13
      }
       .order-md-0 {
       order:0
      }
       .order-md-1 {
       order:1
      }
       .order-md-2 {
       order:2
      }
       .order-md-3 {
       order:3
      }
       .order-md-4 {
       order:4
      }
       .order-md-5 {
       order:5
      }
       .order-md-6 {
       order:6
      }
       .order-md-7 {
       order:7
      }
       .order-md-8 {
       order:8
      }
       .order-md-9 {
       order:9
      }
       .order-md-10 {
       order:10
      }
       .order-md-11 {
       order:11
      }
       .order-md-12 {
       order:12
      }
       .offset-md-0 {
       margin-left:0
      }
       .offset-md-1 {
       margin-left:8.3333333333%
      }
       .offset-md-2 {
       margin-left:16.6666666667%
      }
       .offset-md-3 {
       margin-left:25%
      }
       .offset-md-4 {
       margin-left:33.3333333333%
      }
       .offset-md-5 {
       margin-left:41.6666666667%
      }
       .offset-md-6 {
       margin-left:50%
      }
       .offset-md-7 {
       margin-left:58.3333333333%
      }
       .offset-md-8 {
       margin-left:66.6666666667%
      }
       .offset-md-9 {
       margin-left:75%
      }
       .offset-md-10 {
       margin-left:83.3333333333%
      }
       .offset-md-11 {
       margin-left:91.6666666667%
      }
     }
     @media (min-width:992px) {
       .col-lg {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-lg-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-lg-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-lg-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-lg-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-lg-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-lg-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-lg-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-lg-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-lg-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-lg-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-lg-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-lg-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-lg-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-lg-first {
       order:-1
      }
       .order-lg-last {
       order:13
      }
       .order-lg-0 {
       order:0
      }
       .order-lg-1 {
       order:1
      }
       .order-lg-2 {
       order:2
      }
       .order-lg-3 {
       order:3
      }
       .order-lg-4 {
       order:4
      }
       .order-lg-5 {
       order:5
      }
       .order-lg-6 {
       order:6
      }
       .order-lg-7 {
       order:7
      }
       .order-lg-8 {
       order:8
      }
       .order-lg-9 {
       order:9
      }
       .order-lg-10 {
       order:10
      }
       .order-lg-11 {
       order:11
      }
       .order-lg-12 {
       order:12
      }
       .offset-lg-0 {
       margin-left:0
      }
       .offset-lg-1 {
       margin-left:8.3333333333%
      }
       .offset-lg-2 {
       margin-left:16.6666666667%
      }
       .offset-lg-3 {
       margin-left:25%
      }
       .offset-lg-4 {
       margin-left:33.3333333333%
      }
       .offset-lg-5 {
       margin-left:41.6666666667%
      }
       .offset-lg-6 {
       margin-left:50%
      }
       .offset-lg-7 {
       margin-left:58.3333333333%
      }
       .offset-lg-8 {
       margin-left:66.6666666667%
      }
       .offset-lg-9 {
       margin-left:75%
      }
       .offset-lg-10 {
       margin-left:83.3333333333%
      }
       .offset-lg-11 {
       margin-left:91.6666666667%
      }
     }
     @media (min-width:1200px) {
       .col-xl {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-xl-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-xl-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-xl-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-xl-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-xl-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-xl-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-xl-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-xl-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-xl-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-xl-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-xl-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-xl-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-xl-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-xl-first {
       order:-1
      }
       .order-xl-last {
       order:13
      }
       .order-xl-0 {
       order:0
      }
       .order-xl-1 {
       order:1
      }
       .order-xl-2 {
       order:2
      }
       .order-xl-3 {
       order:3
      }
       .order-xl-4 {
       order:4
      }
       .order-xl-5 {
       order:5
      }
       .order-xl-6 {
       order:6
      }
       .order-xl-7 {
       order:7
      }
       .order-xl-8 {
       order:8
      }
       .order-xl-9 {
       order:9
      }
       .order-xl-10 {
       order:10
      }
       .order-xl-11 {
       order:11
      }
       .order-xl-12 {
       order:12
      }
       .offset-xl-0 {
       margin-left:0
      }
       .offset-xl-1 {
       margin-left:8.3333333333%
      }
       .offset-xl-2 {
       margin-left:16.6666666667%
      }
       .offset-xl-3 {
       margin-left:25%
      }
       .offset-xl-4 {
       margin-left:33.3333333333%
      }
       .offset-xl-5 {
       margin-left:41.6666666667%
      }
       .offset-xl-6 {
       margin-left:50%
      }
       .offset-xl-7 {
       margin-left:58.3333333333%
      }
       .offset-xl-8 {
       margin-left:66.6666666667%
      }
       .offset-xl-9 {
       margin-left:75%
      }
       .offset-xl-10 {
       margin-left:83.3333333333%
      }
       .offset-xl-11 {
       margin-left:91.6666666667%
      }
     }
     @media (min-width:1366px) {
       .col-xxl {
       flex-basis:0;
       flex-grow:1;
       max-width:100%
      }
       .col-xxl-auto {
       flex:0 0 auto;
       width:auto;
       max-width:100%
      }
       .col-xxl-1 {
       flex:0 0 8.3333333333%;
       max-width:8.3333333333%
      }
       .col-xxl-2 {
       flex:0 0 16.6666666667%;
       max-width:16.6666666667%
      }
       .col-xxl-3 {
       flex:0 0 25%;
       max-width:25%
      }
       .col-xxl-4 {
       flex:0 0 33.3333333333%;
       max-width:33.3333333333%
      }
       .col-xxl-5 {
       flex:0 0 41.6666666667%;
       max-width:41.6666666667%
      }
       .col-xxl-6 {
       flex:0 0 50%;
       max-width:50%
      }
       .col-xxl-7 {
       flex:0 0 58.3333333333%;
       max-width:58.3333333333%
      }
       .col-xxl-8 {
       flex:0 0 66.6666666667%;
       max-width:66.6666666667%
      }
       .col-xxl-9 {
       flex:0 0 75%;
       max-width:75%
      }
       .col-xxl-10 {
       flex:0 0 83.3333333333%;
       max-width:83.3333333333%
      }
       .col-xxl-11 {
       flex:0 0 91.6666666667%;
       max-width:91.6666666667%
      }
       .col-xxl-12 {
       flex:0 0 100%;
       max-width:100%
      }
       .order-xxl-first {
       order:-1
      }
       .order-xxl-last {
       order:13
      }
       .order-xxl-0 {
       order:0
      }
       .order-xxl-1 {
       order:1
      }
       .order-xxl-2 {
       order:2
      }
       .order-xxl-3 {
       order:3
      }
       .order-xxl-4 {
       order:4
      }
       .order-xxl-5 {
       order:5
      }
       .order-xxl-6 {
       order:6
      }
       .order-xxl-7 {
       order:7
      }
       .order-xxl-8 {
       order:8
      }
       .order-xxl-9 {
       order:9
      }
       .order-xxl-10 {
       order:10
      }
       .order-xxl-11 {
       order:11
      }
       .order-xxl-12 {
       order:12
      }
       .offset-xxl-0 {
       margin-left:0
      }
       .offset-xxl-1 {
       margin-left:8.3333333333%
      }
       .offset-xxl-2 {
       margin-left:16.6666666667%
      }
       .offset-xxl-3 {
       margin-left:25%
      }
       .offset-xxl-4 {
       margin-left:33.3333333333%
      }
       .offset-xxl-5 {
       margin-left:41.6666666667%
      }
       .offset-xxl-6 {
       margin-left:50%
      }
       .offset-xxl-7 {
       margin-left:58.3333333333%
      }
       .offset-xxl-8 {
       margin-left:66.6666666667%
      }
       .offset-xxl-9 {
       margin-left:75%
      }
       .offset-xxl-10 {
       margin-left:83.3333333333%
      }
       .offset-xxl-11 {
       margin-left:91.6666666667%
      }
     }
      .table {
      width:100%;
      margin-bottom:1rem;
      background-color:transparent
     }
      .table td,
      .table th {
      padding:.75rem 1rem;
      vertical-align:top;
      border-top:1px solid #ebeff2
     }
      .table thead th {
      vertical-align:bottom;
      border-bottom:2px solid #ebeff2
     }
      .table tbody+tbody {
      border-top:2px solid #ebeff2
     }
      .table .table {
      background-color:#f5f7fa
     }
      .table-sm td,
      .table-sm th {
      padding:.3rem
     }
      .table-bordered,
      .table-bordered td,
      .table-bordered th {
      border:1px solid #ebeff2
     }
      .table-bordered thead td,
      .table-bordered thead th {
      border-bottom-width:2px
     }
      .table-borderless tbody+tbody,
      .table-borderless td,
      .table-borderless th,
      .table-borderless thead th {
      border:0
     }
      .table-striped tbody tr:nth-of-type(odd) {
      background-color:rgba(48,56,64,.05)
     }
      .table-hover tbody tr:hover {
      background-color:rgba(48,56,64,.075)
     }
      .table-primary,
      .table-primary>td,
      .table-primary>th {
      background-color:#c4ddf5
     }
      .table-primary tbody+tbody,
      .table-primary td,
      .table-primary th,
      .table-primary thead th {
      border-color:#91bfed
     }
      .table-hover .table-primary:hover,
      .table-hover .table-primary:hover>td,
      .table-hover .table-primary:hover>th {
      background-color:#aed0f1
     }
      .table-secondary,
      .table-secondary>td,
      .table-secondary>th {
      background-color:#dddfe2
     }
      .table-secondary tbody+tbody,
      .table-secondary td,
      .table-secondary th,
      .table-secondary thead th {
      border-color:#c0c4c8
     }
      .table-hover .table-secondary:hover,
      .table-hover .table-secondary:hover>td,
      .table-hover .table-secondary:hover>th {
      background-color:#cfd2d6
     }
      .table-success,
      .table-success>td,
      .table-success>th {
      background-color:#d9eec8
     }
      .table-success tbody+tbody,
      .table-success td,
      .table-success th,
      .table-success thead th {
      border-color:#b8df99
     }
      .table-hover .table-success:hover,
      .table-hover .table-success:hover>td,
      .table-hover .table-success:hover>th {
      background-color:#cce8b5
     }
      .table-info,
      .table-info>td,
      .table-info>th {
      background-color:#bee5eb
     }
      .table-info tbody+tbody,
      .table-info td,
      .table-info th,
      .table-info thead th {
      border-color:#86cfda
     }
      .table-hover .table-info:hover,
      .table-hover .table-info:hover>td,
      .table-hover .table-info:hover>th {
      background-color:#abdde5
     }
      .table-warning,
      .table-warning>td,
      .table-warning>th {
      background-color:#fdddc7
     }
      .table-warning tbody+tbody,
      .table-warning td,
      .table-warning th,
      .table-warning thead th {
      border-color:#fcbf97
     }
      .table-hover .table-warning:hover,
      .table-hover .table-warning:hover>td,
      .table-hover .table-warning:hover>th {
      background-color:#fcceae
     }
      .table-danger,
      .table-danger>td,
      .table-danger>th {
      background-color:#f4cfce
     }
      .table-danger tbody+tbody,
      .table-danger td,
      .table-danger th,
      .table-danger thead th {
      border-color:#eba6a3
     }
      .table-hover .table-danger:hover,
      .table-hover .table-danger:hover>td,
      .table-hover .table-danger:hover>th {
      background-color:#efbbb9
     }
      .table-light,
      .table-light>td,
      .table-light>th {
      background-color:#fdfdfe
     }
      .table-light tbody+tbody,
      .table-light td,
      .table-light th,
      .table-light thead th {
      border-color:#fbfcfc
     }
      .table-hover .table-light:hover,
      .table-hover .table-light:hover>td,
      .table-hover .table-light:hover>th {
      background-color:#ececf6
     }
      .table-dark,
      .table-dark>td,
      .table-dark>th {
      background-color:#c0c1c2
     }
      .table-dark tbody+tbody,
      .table-dark td,
      .table-dark th,
      .table-dark thead th {
      border-color:#898c8e
     }
      .table-hover .table-dark:hover,
      .table-hover .table-dark:hover>td,
      .table-hover .table-dark:hover>th {
      background-color:#b3b4b5
     }
      .table-accent,
      .table-accent>td,
      .table-accent>th {
      background-color:#fabbcd
     }
      .table-accent tbody+tbody,
      .table-accent td,
      .table-accent th,
      .table-accent thead th {
      border-color:#f680a2
     }
      .table-hover .table-accent:hover,
      .table-hover .table-accent:hover>td,
      .table-hover .table-accent:hover>th {
      background-color:#f8a3bc
     }
      .table-primary-light,
      .table-primary-light>td,
      .table-primary-light>th {
      background-color:#e2f1ff
     }
      .table-primary-light tbody+tbody,
      .table-primary-light td,
      .table-primary-light th,
      .table-primary-light thead th {
      border-color:#cae4ff
     }
      .table-hover .table-primary-light:hover,
      .table-hover .table-primary-light:hover>td,
      .table-hover .table-primary-light:hover>th {
      background-color:#c9e5ff
     }
      .table-active,
      .table-active>td,
      .table-active>th {
      background-color:rgba(48,56,64,.075)
     }
      .table-hover .table-active:hover,
      .table-hover .table-active:hover>td,
      .table-hover .table-active:hover>th {
      background-color:rgba(37,43,49,.075)
     }
      .table .thead-dark th {
      color:#fff;
      background-color:#212529;
      border-color:#32383e
     }
      .table .thead-light th {
      color:#495057;
      background-color:#e9ecef;
      border-color:#ebeff2
     }
      .table-dark {
      color:#fff;
      background-color:#212529
     }
      .table-dark td,
      .table-dark th,
      .table-dark thead th {
      border-color:#32383e
     }
      .table-dark.table-bordered {
      border:0
     }
      .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color:hsla(0,0%,100%,.05)
     }
      .table-dark.table-hover tbody tr:hover {
      background-color:hsla(0,0%,100%,.075)
     }
     @media (max-width:373.98px) {
       .table-responsive-i8 {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-i8>.table-bordered {
       border:0
      }
     }
     @media (max-width:412.98px) {
       .table-responsive-i8-plus {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-i8-plus>.table-bordered {
       border:0
      }
     }
     @media (max-width:575.98px) {
       .table-responsive-sm {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-sm>.table-bordered {
       border:0
      }
     }
     @media (max-width:767.98px) {
       .table-responsive-md {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-md>.table-bordered {
       border:0
      }
     }
     @media (max-width:991.98px) {
       .table-responsive-lg {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-lg>.table-bordered {
       border:0
      }
     }
     @media (max-width:1199.98px) {
       .table-responsive-xl {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-xl>.table-bordered {
       border:0
      }
     }
     @media (max-width:1365.98px) {
       .table-responsive-xxl {
       display:block;
       width:100%;
       overflow-x:auto;
       -webkit-overflow-scrolling:touch;
       -ms-overflow-style:-ms-autohiding-scrollbar
      }
       .table-responsive-xxl>.table-bordered {
       border:0
      }
     }
      .table-responsive {
      display:block;
      width:100%;
      overflow-x:auto;
      -webkit-overflow-scrolling:touch;
      -ms-overflow-style:-ms-autohiding-scrollbar
     }
      .table-responsive>.table-bordered {
      border:0
     }
      .form-control {
      display:block;
      width:100%;
      height:calc(2.5rem + 2px);
      padding:.5rem .75rem;
      font-size:1rem;
      font-weight:400;
      line-height:1.5;
      color:#303840;
      background-color:#edf0f2;
      background-clip:padding-box;
      border:1px solid #edf0f2;
      border-radius:.25rem;
      transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .form-control {
       transition:none
      }
     }
      .form-control::-ms-expand {
      background-color:transparent;
      border:0
     }
      .form-control:focus {
      color:#303840;
      background-color:#e7ebee;
      border-color:#e7ebee;
      outline:0;
      box-shadow:0 0 0 .2rem rgba(44,132,221,.25)
     }
      .form-control::-webkit-input-placeholder {
      color:#949595;
      opacity:1
     }
      .form-control:-ms-input-placeholder {
      color:#949595;
      opacity:1
     }
      .form-control::-ms-input-placeholder {
      color:#949595;
      opacity:1
     }
      .form-control::placeholder {
      color:#949595;
      opacity:1
     }
      .form-control:disabled,
      .form-control[readonly] {
      background-color:#e9ecef;
      opacity:1
     }
      select.form-control:focus::-ms-value {
      color:#303840;
      background-color:#edf0f2
     }
      .form-control-file,
      .form-control-range {
      display:block;
      width:100%
     }
      .col-form-label {
      margin-bottom:0;
      font-size:inherit
     }
      .col-form-label,
      .col-form-label-lg {
      padding-top:calc(.5rem + 1px);
      padding-bottom:calc(.5rem + 1px);
      line-height:1.5
     }
      .col-form-label-lg {
      font-size:1.25rem
     }
      .col-form-label-sm {
      padding-top:calc(.25rem + 1px);
      padding-bottom:calc(.25rem + 1px);
      font-size:.875rem;
      line-height:1.5
     }
      .form-control-plaintext {
      display:block;
      width:100%;
      padding-top:.5rem;
      padding-bottom:.5rem;
      margin-bottom:0;
      line-height:1.5;
      color:#303840;
      background-color:transparent;
      border:solid transparent;
      border-width:1px 0
     }
      .form-control-plaintext.form-control-lg,
      .form-control-plaintext.form-control-sm {
      padding-right:0;
      padding-left:0
     }
      .form-control-sm {
      height:calc(1.8125rem + 2px);
      padding:.25rem .5rem;
      font-size:.875rem;
      line-height:1.5;
      border-radius:.2rem
     }
      .form-control-lg {
      height:calc(2.875rem + 2px);
      padding:.5rem 1rem;
      font-size:1.25rem;
      line-height:1.5;
      border-radius:.25rem
     }
      select.form-control[multiple],
      select.form-control[size],
      textarea.form-control {
      height:auto
     }
      .form-group {
      margin-bottom:1rem
     }
      .form-text {
      display:block;
      margin-top:.25rem
     }
      .form-row {
      display:flex;
      flex-wrap:wrap;
      margin-right:-5px;
      margin-left:-5px
     }
      .form-row>.col,
      .form-row>[class*=col-] {
      padding-right:5px;
      padding-left:5px
     }
      .form-check {
      position:relative;
      display:block;
      padding-left:1.25rem
     }
      .form-check-input {
      position:absolute;
      margin-top:.3rem;
      margin-left:-1.25rem
     }
      .form-check-input:disabled~.form-check-label {
      color:rgba(48,56,64,.5)
     }
      .form-check-label {
      margin-bottom:0
     }
      .form-check-inline {
      display:inline-flex;
      align-items:center;
      padding-left:0;
      margin-right:.75rem
     }
      .form-check-inline .form-check-input {
      position:static;
      margin-top:0;
      margin-right:.3125rem;
      margin-left:0
     }
      .valid-feedback {
      display:none;
      width:100%;
      margin-top:.25rem;
      font-size:.707rem;
      color:#77c13a
     }
      .valid-tooltip {
      position:absolute;
      top:100%;
      z-index:5;
      display:none;
      max-width:100%;
      padding:1rem .5rem;
      margin-top:.1rem;
      font-size:1rem;
      line-height:1.5;
      color:#212529;
      background-color:#77c13a;
      border-radius:.25rem
     }
      .form-control.is-valid,
      .was-validated .form-control:valid {
      border-color:#77c13a;
      padding-right:2.5rem;
      background-repeat:no-repeat;
      background-position:center right .625rem;
      background-size:1.25rem 1.25rem;
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2377c13a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E")
     }
      .form-control.is-valid:focus,
      .was-validated .form-control:valid:focus {
      border-color:#77c13a;
      box-shadow:0 0 0 .2rem rgba(119,193,58,.25)
     }
      .form-control.is-valid~.valid-feedback,
      .form-control.is-valid~.valid-tooltip,
      .was-validated .form-control:valid~.valid-feedback,
      .was-validated .form-control:valid~.valid-tooltip {
      display:block
     }
      .was-validated textarea.form-control:valid,
      textarea.form-control.is-valid {
      padding-right:2.5rem;
      background-position:top .625rem right .625rem
     }
      .custom-select.is-valid,
      .was-validated .custom-select:valid {
      border-color:#77c13a;
      padding-right:3.625rem;
      background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='rgba(48, 56, 64, 0.5)' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px !important,url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2377c13a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E") no-repeat center right 1.75rem/1.25rem 1.25rem
     }
      .custom-select.is-valid:focus,
      .was-validated .custom-select:valid:focus {
      border-color:#77c13a;
      box-shadow:0 0 0 .2rem rgba(119,193,58,.25)
     }
      .custom-select.is-valid~.valid-feedback,
      .custom-select.is-valid~.valid-tooltip,
      .form-control-file.is-valid~.valid-feedback,
      .form-control-file.is-valid~.valid-tooltip,
      .was-validated .custom-select:valid~.valid-feedback,
      .was-validated .custom-select:valid~.valid-tooltip,
      .was-validated .form-control-file:valid~.valid-feedback,
      .was-validated .form-control-file:valid~.valid-tooltip {
      display:block
     }
      .form-check-input.is-valid~.form-check-label,
      .was-validated .form-check-input:valid~.form-check-label {
      color:#77c13a
     }
      .form-check-input.is-valid~.valid-feedback,
      .form-check-input.is-valid~.valid-tooltip,
      .was-validated .form-check-input:valid~.valid-feedback,
      .was-validated .form-check-input:valid~.valid-tooltip {
      display:block
     }
      .custom-control-input.is-valid~.custom-control-label,
      .was-validated .custom-control-input:valid~.custom-control-label {
      color:#77c13a
     }
      .custom-control-input.is-valid~.custom-control-label:before,
      .was-validated .custom-control-input:valid~.custom-control-label:before {
      border-color:#77c13a
     }
      .custom-control-input.is-valid~.valid-feedback,
      .custom-control-input.is-valid~.valid-tooltip,
      .was-validated .custom-control-input:valid~.valid-feedback,
      .was-validated .custom-control-input:valid~.valid-tooltip {
      display:block
     }
      .custom-control-input.is-valid:checked~.custom-control-label:before,
      .was-validated .custom-control-input:valid:checked~.custom-control-label:before {
      border-color:#92cf5f;
      background-color:#92cf5f
     }
      .custom-control-input.is-valid:focus~.custom-control-label:before,
      .was-validated .custom-control-input:valid:focus~.custom-control-label:before {
      box-shadow:0 0 0 .2rem rgba(119,193,58,.25)
     }
      .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label:before,
      .custom-file-input.is-valid~.custom-file-label,
      .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label:before,
      .was-validated .custom-file-input:valid~.custom-file-label {
      border-color:#77c13a
     }
      .custom-file-input.is-valid~.valid-feedback,
      .custom-file-input.is-valid~.valid-tooltip,
      .was-validated .custom-file-input:valid~.valid-feedback,
      .was-validated .custom-file-input:valid~.valid-tooltip {
      display:block
     }
      .custom-file-input.is-valid:focus~.custom-file-label,
      .was-validated .custom-file-input:valid:focus~.custom-file-label {
      border-color:#77c13a;
      box-shadow:0 0 0 .2rem rgba(119,193,58,.25)
     }
      .invalid-feedback {
      display:none;
      width:100%;
      margin-top:.25rem;
      font-size:.707rem;
      color:#d9534f
     }
      .invalid-tooltip {
      position:absolute;
      top:100%;
      z-index:5;
      display:none;
      max-width:100%;
      padding:1rem .5rem;
      margin-top:.1rem;
      font-size:1rem;
      line-height:1.5;
      color:#fff;
      background-color:#d9534f;
      border-radius:.25rem
     }
      .form-control.is-invalid,
      .was-validated .form-control:invalid {
      border-color:#d9534f;
      padding-right:2.5rem;
      background-repeat:no-repeat;
      background-position:center right .625rem;
      background-size:1.25rem 1.25rem;
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23d9534f' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E")
     }
      .form-control.is-invalid:focus,
      .was-validated .form-control:invalid:focus {
      border-color:#d9534f;
      box-shadow:0 0 0 .2rem rgba(217,83,79,.25)
     }
      .form-control.is-invalid~.invalid-feedback,
      .form-control.is-invalid~.invalid-tooltip,
      .was-validated .form-control:invalid~.invalid-feedback,
      .was-validated .form-control:invalid~.invalid-tooltip {
      display:block
     }
      .was-validated textarea.form-control:invalid,
      textarea.form-control.is-invalid {
      padding-right:2.5rem;
      background-position:top .625rem right .625rem
     }
      .custom-select.is-invalid,
      .was-validated .custom-select:invalid {
      border-color:#d9534f;
      padding-right:3.625rem;
      background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='rgba(48, 56, 64, 0.5)' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px !important,url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23d9534f' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E") no-repeat center right 1.75rem/1.25rem 1.25rem
     }
      .custom-select.is-invalid:focus,
      .was-validated .custom-select:invalid:focus {
      border-color:#d9534f;
      box-shadow:0 0 0 .2rem rgba(217,83,79,.25)
     }
      .custom-select.is-invalid~.invalid-feedback,
      .custom-select.is-invalid~.invalid-tooltip,
      .form-control-file.is-invalid~.invalid-feedback,
      .form-control-file.is-invalid~.invalid-tooltip,
      .was-validated .custom-select:invalid~.invalid-feedback,
      .was-validated .custom-select:invalid~.invalid-tooltip,
      .was-validated .form-control-file:invalid~.invalid-feedback,
      .was-validated .form-control-file:invalid~.invalid-tooltip {
      display:block
     }
      .form-check-input.is-invalid~.form-check-label,
      .was-validated .form-check-input:invalid~.form-check-label {
      color:#d9534f
     }
      .form-check-input.is-invalid~.invalid-feedback,
      .form-check-input.is-invalid~.invalid-tooltip,
      .was-validated .form-check-input:invalid~.invalid-feedback,
      .was-validated .form-check-input:invalid~.invalid-tooltip {
      display:block
     }
      .custom-control-input.is-invalid~.custom-control-label,
      .was-validated .custom-control-input:invalid~.custom-control-label {
      color:#d9534f
     }
      .custom-control-input.is-invalid~.custom-control-label:before,
      .was-validated .custom-control-input:invalid~.custom-control-label:before {
      border-color:#d9534f
     }
      .custom-control-input.is-invalid~.invalid-feedback,
      .custom-control-input.is-invalid~.invalid-tooltip,
      .was-validated .custom-control-input:invalid~.invalid-feedback,
      .was-validated .custom-control-input:invalid~.invalid-tooltip {
      display:block
     }
      .custom-control-input.is-invalid:checked~.custom-control-label:before,
      .was-validated .custom-control-input:invalid:checked~.custom-control-label:before {
      border-color:#e27c79;
      background-color:#e27c79
     }
      .custom-control-input.is-invalid:focus~.custom-control-label:before,
      .was-validated .custom-control-input:invalid:focus~.custom-control-label:before {
      box-shadow:0 0 0 .2rem rgba(217,83,79,.25)
     }
      .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label:before,
      .custom-file-input.is-invalid~.custom-file-label,
      .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label:before,
      .was-validated .custom-file-input:invalid~.custom-file-label {
      border-color:#d9534f
     }
      .custom-file-input.is-invalid~.invalid-feedback,
      .custom-file-input.is-invalid~.invalid-tooltip,
      .was-validated .custom-file-input:invalid~.invalid-feedback,
      .was-validated .custom-file-input:invalid~.invalid-tooltip {
      display:block
     }
      .custom-file-input.is-invalid:focus~.custom-file-label,
      .was-validated .custom-file-input:invalid:focus~.custom-file-label {
      border-color:#d9534f;
      box-shadow:0 0 0 .2rem rgba(217,83,79,.25)
     }
      .form-inline {
      display:flex;
      flex-flow:row wrap;
      align-items:center
     }
      .form-inline .form-check {
      width:100%
     }
     @media (min-width:576px) {
       .form-inline label {
       justify-content:center
      }
       .form-inline .form-group,
       .form-inline label {
       display:flex;
       align-items:center;
       margin-bottom:0
      }
       .form-inline .form-group {
       flex:0 0 auto;
       flex-flow:row wrap
      }
       .form-inline .form-control {
       display:inline-block;
       width:auto;
       vertical-align:middle
      }
       .form-inline .form-control-plaintext {
       display:inline-block
      }
       .form-inline .custom-select,
       .form-inline .input-group {
       width:auto
      }
       .form-inline .form-check {
       display:flex;
       align-items:center;
       justify-content:center;
       width:auto;
       padding-left:0
      }
       .form-inline .form-check-input {
       position:relative;
       margin-top:0;
       margin-right:.25rem;
       margin-left:0
      }
       .form-inline .custom-control {
       align-items:center;
       justify-content:center
      }
       .form-inline .custom-control-label {
       margin-bottom:0
      }
     }
      .btn {
      display:inline-block;
      font-weight:400;
      color:#303840;
      text-align:center;
      vertical-align:middle;
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      user-select:none;
      background-color:transparent;
      border:1px solid transparent;
      padding:.5rem 1rem;
      font-size:1rem;
      line-height:1.5;
      border-radius:.25rem;
      transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .btn {
       transition:none
      }
     }
      .btn:hover {
      color:#303840;
      text-decoration:none
     }
      .btn.focus,
      .btn:focus {
      outline:0;
      box-shadow:0 0 0 .2rem rgba(44,132,221,.25)
     }
      .btn.disabled,
      .btn:disabled {
      opacity:.65
     }
      .btn:not(:disabled):not(.disabled) {
      cursor:pointer
     }
      a.btn.disabled,
      fieldset:disabled a.btn {
      pointer-events:none
     }
      .btn-primary {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .btn-primary:hover {
      color:#fff;
      background-color:#1f71c3;
      border-color:#1e6bb8
     }
      .btn-primary.focus,
      .btn-primary:focus {
      box-shadow:0 0 0 .2rem rgba(76,150,226,.5)
     }
      .btn-primary.disabled,
      .btn-primary:disabled {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .btn-primary:not(:disabled):not(.disabled).active,
      .btn-primary:not(:disabled):not(.disabled):active,
      .show>.btn-primary.dropdown-toggle {
      color:#fff;
      background-color:#1e6bb8;
      border-color:#1c64ad
     }
      .btn-primary:not(:disabled):not(.disabled).active:focus,
      .btn-primary:not(:disabled):not(.disabled):active:focus,
      .show>.btn-primary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(76,150,226,.5)
     }
      .btn-secondary {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
     #fields{
       background-color: #edf0f2;
     border: 1px solid #edf0f2;
     color: black;
     }
      .btn-secondary:hover {
      color:#fff;
      background-color:#727b84;
      border-color:#6c757d
     }
      .btn-secondary.focus,
      .btn-secondary:focus {
      box-shadow:0 0 0 .2rem rgba(152,159,166,.5)
     }
      .btn-secondary.disabled,
      .btn-secondary:disabled {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .btn-secondary:not(:disabled):not(.disabled).active,
      .btn-secondary:not(:disabled):not(.disabled):active,
      .show>.btn-secondary.dropdown-toggle {
      color:#fff;
      background-color:#6c757d;
      border-color:#666e76
     }
      .btn-secondary:not(:disabled):not(.disabled).active:focus,
      .btn-secondary:not(:disabled):not(.disabled):active:focus,
      .show>.btn-secondary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(152,159,166,.5)
     }
      .btn-success {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .btn-success:hover {
      color:#fff;
      background-color:#65a431;
      border-color:#5f9a2e
     }
      .btn-success.focus,
      .btn-success:focus {
      box-shadow:0 0 0 .2rem rgba(106,170,55,.5)
     }
      .btn-success.disabled,
      .btn-success:disabled {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .btn-success:not(:disabled):not(.disabled).active,
      .btn-success:not(:disabled):not(.disabled):active,
      .show>.btn-success.dropdown-toggle {
      color:#fff;
      background-color:#5f9a2e;
      border-color:#59902b
     }
      .btn-success:not(:disabled):not(.disabled).active:focus,
      .btn-success:not(:disabled):not(.disabled):active:focus,
      .show>.btn-success.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(106,170,55,.5)
     }
      .btn-info {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .btn-info:hover {
      color:#fff;
      background-color:#138496;
      border-color:#117a8b
     }
      .btn-info.focus,
      .btn-info:focus {
      box-shadow:0 0 0 .2rem rgba(58,176,195,.5)
     }
      .btn-info.disabled,
      .btn-info:disabled {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .btn-info:not(:disabled):not(.disabled).active,
      .btn-info:not(:disabled):not(.disabled):active,
      .show>.btn-info.dropdown-toggle {
      color:#fff;
      background-color:#117a8b;
      border-color:#10707f
     }
      .btn-info:not(:disabled):not(.disabled).active:focus,
      .btn-info:not(:disabled):not(.disabled):active:focus,
      .show>.btn-info.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(58,176,195,.5)
     }
      .btn-warning {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .btn-warning:hover {
      color:#fff;
      background-color:#f86d12;
      border-color:#f66607
     }
      .btn-warning.focus,
      .btn-warning:focus {
      box-shadow:0 0 0 .2rem rgba(217,118,53,.5)
     }
      .btn-warning.disabled,
      .btn-warning:disabled {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .btn-warning:not(:disabled):not(.disabled).active,
      .btn-warning:not(:disabled):not(.disabled):active,
      .show>.btn-warning.dropdown-toggle {
      color:#fff;
      background-color:#f66607;
      border-color:#e96107
     }
      .btn-warning:not(:disabled):not(.disabled).active:focus,
      .btn-warning:not(:disabled):not(.disabled):active:focus,
      .show>.btn-warning.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(217,118,53,.5)
     }
      .btn-danger {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .btn-danger:hover {
      color:#fff;
      background-color:#d23430;
      border-color:#c9302c
     }
      .btn-danger.focus,
      .btn-danger:focus {
      box-shadow:0 0 0 .2rem rgba(223,109,105,.5)
     }
      .btn-danger.disabled,
      .btn-danger:disabled {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .btn-danger:not(:disabled):not(.disabled).active,
      .btn-danger:not(:disabled):not(.disabled):active,
      .show>.btn-danger.dropdown-toggle {
      color:#fff;
      background-color:#c9302c;
      border-color:#bf2e29
     }
      .btn-danger:not(:disabled):not(.disabled).active:focus,
      .btn-danger:not(:disabled):not(.disabled):active:focus,
      .show>.btn-danger.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(223,109,105,.5)
     }
      .btn-light {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .btn-light:hover {
      color:#212529;
      background-color:#e2e6ea;
      border-color:#dae0e5
     }
      .btn-light.focus,
      .btn-light:focus {
      box-shadow:0 0 0 .2rem rgba(216,217,219,.5)
     }
      .btn-light.disabled,
      .btn-light:disabled {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .btn-light:not(:disabled):not(.disabled).active,
      .btn-light:not(:disabled):not(.disabled):active,
      .show>.btn-light.dropdown-toggle {
      color:#212529;
      background-color:#dae0e5;
      border-color:#d3d9df
     }
      .btn-light:not(:disabled):not(.disabled).active:focus,
      .btn-light:not(:disabled):not(.disabled):active:focus,
      .show>.btn-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(216,217,219,.5)
     }
      .btn-dark {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .btn-dark:hover {
      color:#fff;
      background-color:#0c0e10;
      border-color:#070809
     }
      .btn-dark.focus,
      .btn-dark:focus {
      box-shadow:0 0 0 .2rem rgba(63,66,71,.5)
     }
      .btn-dark.disabled,
      .btn-dark:disabled {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .btn-dark:not(:disabled):not(.disabled).active,
      .btn-dark:not(:disabled):not(.disabled):active,
      .show>.btn-dark.dropdown-toggle {
      color:#fff;
      background-color:#070809;
      border-color:#010202
     }
      .btn-dark:not(:disabled):not(.disabled).active:focus,
      .btn-dark:not(:disabled):not(.disabled):active:focus,
      .show>.btn-dark.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(63,66,71,.5)
     }
      .btn-accent {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .btn-accent:hover {
      color:#fff;
      background-color:#c80940;
      border-color:#bc093c
     }
      .btn-accent.focus,
      .btn-accent:focus {
      box-shadow:0 0 0 .2rem rgba(240,48,103,.5)
     }
      .btn-accent.disabled,
      .btn-accent:disabled {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .btn-accent:not(:disabled):not(.disabled).active,
      .btn-accent:not(:disabled):not(.disabled):active,
      .show>.btn-accent.dropdown-toggle {
      color:#fff;
      background-color:#bc093c;
      border-color:#b00838
     }
      .btn-accent:not(:disabled):not(.disabled).active:focus,
      .btn-accent:not(:disabled):not(.disabled):active:focus,
      .show>.btn-accent.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(240,48,103,.5)
     }
      .btn-primary-light {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .btn-primary-light:hover {
      color:#212529;
      background-color:#73b9ff;
      border-color:#66b3ff
     }
      .btn-primary-light.focus,
      .btn-primary-light:focus {
      box-shadow:0 0 0 .2rem rgba(135,179,223,.5)
     }
      .btn-primary-light.disabled,
      .btn-primary-light:disabled {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .btn-primary-light:not(:disabled):not(.disabled).active,
      .btn-primary-light:not(:disabled):not(.disabled):active,
      .show>.btn-primary-light.dropdown-toggle {
      color:#212529;
      background-color:#66b3ff;
      border-color:#59acff
     }
      .btn-primary-light:not(:disabled):not(.disabled).active:focus,
      .btn-primary-light:not(:disabled):not(.disabled):active:focus,
      .show>.btn-primary-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(135,179,223,.5)
     }
      .btn-outline-primary {
      color:#2c84dd;
      border-color:#2c84dd
     }
      .btn-outline-primary:hover {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .btn-outline-primary.focus,
      .btn-outline-primary:focus {
      box-shadow:0 0 0 .2rem rgba(44,132,221,.5)
     }
      .btn-outline-primary.disabled,
      .btn-outline-primary:disabled {
      color:#2c84dd;
      background-color:transparent
     }
      .btn-outline-primary:not(:disabled):not(.disabled).active,
      .btn-outline-primary:not(:disabled):not(.disabled):active,
      .show>.btn-outline-primary.dropdown-toggle {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
      .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-primary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(44,132,221,.5)
     }
      .btn-outline-secondary {
      color:#868e96;
      border-color:#868e96
     }
      .btn-outline-secondary:hover {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .btn-outline-secondary.focus,
      .btn-outline-secondary:focus {
      box-shadow:0 0 0 .2rem rgba(134,142,150,.5)
     }
      .btn-outline-secondary.disabled,
      .btn-outline-secondary:disabled {
      color:#868e96;
      background-color:transparent
     }
      .btn-outline-secondary:not(:disabled):not(.disabled).active,
      .btn-outline-secondary:not(:disabled):not(.disabled):active,
      .show>.btn-outline-secondary.dropdown-toggle {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
      .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-secondary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(134,142,150,.5)
     }
      .btn-outline-success {
      color:#77c13a;
      border-color:#77c13a
     }
      .btn-outline-success:hover {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .btn-outline-success.focus,
      .btn-outline-success:focus {
      box-shadow:0 0 0 .2rem rgba(119,193,58,.5)
     }
      .btn-outline-success.disabled,
      .btn-outline-success:disabled {
      color:#77c13a;
      background-color:transparent
     }
      .btn-outline-success:not(:disabled):not(.disabled).active,
      .btn-outline-success:not(:disabled):not(.disabled):active,
      .show>.btn-outline-success.dropdown-toggle {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .btn-outline-success:not(:disabled):not(.disabled).active:focus,
      .btn-outline-success:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-success.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(119,193,58,.5)
     }
      .btn-outline-info {
      color:#17a2b8;
      border-color:#17a2b8
     }
      .btn-outline-info:hover {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .btn-outline-info.focus,
      .btn-outline-info:focus {
      box-shadow:0 0 0 .2rem rgba(23,162,184,.5)
     }
      .btn-outline-info.disabled,
      .btn-outline-info:disabled {
      color:#17a2b8;
      background-color:transparent
     }
      .btn-outline-info:not(:disabled):not(.disabled).active,
      .btn-outline-info:not(:disabled):not(.disabled):active,
      .show>.btn-outline-info.dropdown-toggle {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .btn-outline-info:not(:disabled):not(.disabled).active:focus,
      .btn-outline-info:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-info.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(23,162,184,.5)
     }
      .btn-outline-warning {
      color:#f98437;
      border-color:#f98437
     }
      .btn-outline-warning:hover {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .btn-outline-warning.focus,
      .btn-outline-warning:focus {
      box-shadow:0 0 0 .2rem rgba(249,132,55,.5)
     }
      .btn-outline-warning.disabled,
      .btn-outline-warning:disabled {
      color:#f98437;
      background-color:transparent
     }
      .btn-outline-warning:not(:disabled):not(.disabled).active,
      .btn-outline-warning:not(:disabled):not(.disabled):active,
      .show>.btn-outline-warning.dropdown-toggle {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
      .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-warning.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(249,132,55,.5)
     }
      .btn-outline-danger {
      color:#d9534f;
      border-color:#d9534f
     }
      .btn-outline-danger:hover {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .btn-outline-danger.focus,
      .btn-outline-danger:focus {
      box-shadow:0 0 0 .2rem rgba(217,83,79,.5)
     }
      .btn-outline-danger.disabled,
      .btn-outline-danger:disabled {
      color:#d9534f;
      background-color:transparent
     }
      .btn-outline-danger:not(:disabled):not(.disabled).active,
      .btn-outline-danger:not(:disabled):not(.disabled):active,
      .show>.btn-outline-danger.dropdown-toggle {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
      .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-danger.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(217,83,79,.5)
     }
      .btn-outline-light {
      color:#f8f9fa;
      border-color:#f8f9fa
     }
      .btn-outline-light:hover {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .btn-outline-light.focus,
      .btn-outline-light:focus {
      box-shadow:0 0 0 .2rem rgba(248,249,250,.5)
     }
      .btn-outline-light.disabled,
      .btn-outline-light:disabled {
      color:#f8f9fa;
      background-color:transparent
     }
      .btn-outline-light:not(:disabled):not(.disabled).active,
      .btn-outline-light:not(:disabled):not(.disabled):active,
      .show>.btn-outline-light.dropdown-toggle {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .btn-outline-light:not(:disabled):not(.disabled).active:focus,
      .btn-outline-light:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(248,249,250,.5)
     }
      .btn-outline-dark {
      color:#1d2126;
      border-color:#1d2126
     }
      .btn-outline-dark:hover {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .btn-outline-dark.focus,
      .btn-outline-dark:focus {
      box-shadow:0 0 0 .2rem rgba(29,33,38,.5)
     }
      .btn-outline-dark.disabled,
      .btn-outline-dark:disabled {
      color:#1d2126;
      background-color:transparent
     }
      .btn-outline-dark:not(:disabled):not(.disabled).active,
      .btn-outline-dark:not(:disabled):not(.disabled):active,
      .show>.btn-outline-dark.dropdown-toggle {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
      .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-dark.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(29,33,38,.5)
     }
      .btn-outline-accent {
      color:#ed0b4c;
      border-color:#ed0b4c
     }
      .btn-outline-accent:hover {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .btn-outline-accent.focus,
      .btn-outline-accent:focus {
      box-shadow:0 0 0 .2rem rgba(237,11,76,.5)
     }
      .btn-outline-accent.disabled,
      .btn-outline-accent:disabled {
      color:#ed0b4c;
      background-color:transparent
     }
      .btn-outline-accent:not(:disabled):not(.disabled).active,
      .btn-outline-accent:not(:disabled):not(.disabled):active,
      .show>.btn-outline-accent.dropdown-toggle {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .btn-outline-accent:not(:disabled):not(.disabled).active:focus,
      .btn-outline-accent:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-accent.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(237,11,76,.5)
     }
      .btn-outline-primary-light {
      color:#9cf;
      border-color:#9cf
     }
      .btn-outline-primary-light:hover {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .btn-outline-primary-light.focus,
      .btn-outline-primary-light:focus {
      box-shadow:0 0 0 .2rem rgba(153,204,255,.5)
     }
      .btn-outline-primary-light.disabled,
      .btn-outline-primary-light:disabled {
      color:#9cf;
      background-color:transparent
     }
      .btn-outline-primary-light:not(:disabled):not(.disabled).active,
      .btn-outline-primary-light:not(:disabled):not(.disabled):active,
      .show>.btn-outline-primary-light.dropdown-toggle {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .btn-outline-primary-light:not(:disabled):not(.disabled).active:focus,
      .btn-outline-primary-light:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-primary-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(153,204,255,.5)
     }
      .btn-link {
      font-weight:400;
      color:rgba(48,56,64,.7)
     }
      .btn-link:hover {
      color:rgba(15,18,20,.7);
      text-decoration:underline
     }
      .btn-link.focus,
      .btn-link:focus {
      text-decoration:underline;
      box-shadow:none
     }
      .btn-link.disabled,
      .btn-link:disabled {
      color:#868e96;
      pointer-events:none
     }
      .btn-group-lg>.btn,
      .btn-lg {
      padding:.5rem 2rem;
      font-size:1.25rem;
      line-height:1.5;
      border-radius:.25rem
     }
      .btn-group-sm>.btn,
      .btn-sm {
      padding:.25rem .5rem;
      font-size:.875rem;
      line-height:1.5;
      border-radius:.2rem
     }
      .btn-block {
      display:block;
      width:100%
     }
      .btn-block+.btn-block {
      margin-top:.5rem
     }
      input[type=button].btn-block,
      input[type=reset].btn-block,
      input[type=submit].btn-block {
      width:100%
     }
      .fade {
      transition:opacity .15s linear
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .fade {
       transition:none
      }
     }
      .fade:not(.show) {
      opacity:0
     }
      .collapse:not(.show) {
      display:none
     }
      .collapsing {
      position:relative;
      height:0;
      overflow:hidden;
      transition:height .35s ease
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .collapsing {
       transition:none
      }
     }
      .dropdown,
      .dropleft,
      .dropright,
      .dropup {
      position:relative
     }
      .dropdown-toggle:after {
      display:inline-block;
      margin-left:.255em;
      vertical-align:.255em;
      content:"";
      border-top:.3em solid;
      border-right:.3em solid transparent;
      border-bottom:0;
      border-left:.3em solid transparent
     }
      .dropdown-toggle:empty:after {
      margin-left:0
     }
      .dropdown-menu {
      position:absolute;
      top:100%;
      left:0;
      z-index:1000;
      display:none;
      float:left;
      min-width:10rem;
      padding:.5rem 0;
      margin:.5rem 0 0;
      font-size:1rem;
      color:#303840;
      text-align:left;
      list-style:none;
      background-color:#fff;
      background-clip:padding-box;
      border:1px solid transparent;
      border-radius:.1875rem
     }
      .dropdown-menu-right {
      right:0;
      left:auto
     }
     @media (min-width:374px) {
       .dropdown-menu-i8-right {
       right:0;
       left:auto
      }
     }
     @media (min-width:413px) {
       .dropdown-menu-i8-plus-right {
       right:0;
       left:auto
      }
     }
     @media (min-width:576px) {
       .dropdown-menu-sm-right {
       right:0;
       left:auto
      }
     }
     @media (min-width:768px) {
       .dropdown-menu-md-right {
       right:0;
       left:auto
      }
     }
     @media (min-width:992px) {
       .dropdown-menu-lg-right {
       right:0;
       left:auto
      }
     }
     @media (min-width:1200px) {
       .dropdown-menu-xl-right {
       right:0;
       left:auto
      }
     }
     @media (min-width:1366px) {
       .dropdown-menu-xxl-right {
       right:0;
       left:auto
      }
     }
      .dropdown-menu-left {
      right:auto;
      left:0
     }
     @media (min-width:374px) {
       .dropdown-menu-i8-left {
       right:auto;
       left:0
      }
     }
     @media (min-width:413px) {
       .dropdown-menu-i8-plus-left {
       right:auto;
       left:0
      }
     }
     @media (min-width:576px) {
       .dropdown-menu-sm-left {
       right:auto;
       left:0
      }
     }
     @media (min-width:768px) {
       .dropdown-menu-md-left {
       right:auto;
       left:0
      }
     }
     @media (min-width:992px) {
       .dropdown-menu-lg-left {
       right:auto;
       left:0
      }
     }
     @media (min-width:1200px) {
       .dropdown-menu-xl-left {
       right:auto;
       left:0
      }
     }
     @media (min-width:1366px) {
       .dropdown-menu-xxl-left {
       right:auto;
       left:0
      }
     }
      .dropup .dropdown-menu {
      top:auto;
      bottom:100%;
      margin-top:0;
      margin-bottom:.5rem
     }
      .dropup .dropdown-toggle:after {
      display:inline-block;
      margin-left:.255em;
      vertical-align:.255em;
      content:"";
      border-top:0;
      border-right:.3em solid transparent;
      border-bottom:.3em solid;
      border-left:.3em solid transparent
     }
      .dropup .dropdown-toggle:empty:after {
      margin-left:0
     }
      .dropright .dropdown-menu {
      top:0;
      right:auto;
      left:100%;
      margin-top:0;
      margin-left:.5rem
     }
      .dropright .dropdown-toggle:after {
      display:inline-block;
      margin-left:.255em;
      vertical-align:.255em;
      content:"";
      border-top:.3em solid transparent;
      border-right:0;
      border-bottom:.3em solid transparent;
      border-left:.3em solid
     }
      .dropright .dropdown-toggle:empty:after {
      margin-left:0
     }
      .dropright .dropdown-toggle:after {
      vertical-align:0
     }
      .dropleft .dropdown-menu {
      top:0;
      right:100%;
      left:auto;
      margin-top:0;
      margin-right:.5rem
     }
      .dropleft .dropdown-toggle:after {
      display:inline-block;
      margin-left:.255em;
      vertical-align:.255em;
      content:"";
      display:none
     }
      .dropleft .dropdown-toggle:before {
      display:inline-block;
      margin-right:.255em;
      vertical-align:.255em;
      content:"";
      border-top:.3em solid transparent;
      border-right:.3em solid;
      border-bottom:.3em solid transparent
     }
      .dropleft .dropdown-toggle:empty:after {
      margin-left:0
     }
      .dropleft .dropdown-toggle:before {
      vertical-align:0
     }
      .dropdown-menu[x-placement^=bottom],
      .dropdown-menu[x-placement^=left],
      .dropdown-menu[x-placement^=right],
      .dropdown-menu[x-placement^=top] {
      right:auto;
      bottom:auto
     }
      .dropdown-divider {
      height:0;
      margin:.5rem 0;
      overflow:hidden;
      border-top:1px solid #e9ecef
     }
      .dropdown-item {
      display:block;
      width:100%;
      padding:.25rem 1rem;
      clear:both;
      font-weight:400;
      color:rgba(48,56,64,.7);
      text-align:inherit;
      white-space:nowrap;
      background-color:transparent;
      border:0
     }
      .dropdown-item:first-child {
      border-top-left-radius:calc(.1875rem - 1px);
      border-top-right-radius:calc(.1875rem - 1px)
     }
      .dropdown-item:last-child {
      border-bottom-right-radius:calc(.1875rem - 1px);
      border-bottom-left-radius:calc(.1875rem - 1px)
     }
      .dropdown-item:focus,
      .dropdown-item:hover {
      color:rgba(48,56,64,.9);
      text-decoration:none;
      background-color:transparent
     }
      .dropdown-item.active,
      .dropdown-item:active {
      text-decoration:none
     }
      .dropdown-item.disabled,
      .dropdown-item:disabled {
      color:rgba(48,56,64,.3);
      pointer-events:none;
      background-color:transparent
     }
      .dropdown-menu.show {
      display:block
     }
      .dropdown-header {
      display:block;
      padding:.5rem 1rem;
      margin-bottom:0;
      font-size:.875rem;
      color:#868e96;
      white-space:nowrap
     }
      .dropdown-item-text {
      display:block;
      padding:.25rem 1rem;
      color:rgba(48,56,64,.7)
     }
      .btn-group,
      .btn-group-vertical {
      position:relative;
      display:inline-flex;
      vertical-align:middle
     }
      .btn-group-vertical>.btn,
      .btn-group>.btn {
      position:relative;
      flex:1 1 auto
     }
      .btn-group-vertical>.btn.active,
      .btn-group-vertical>.btn:active,
      .btn-group-vertical>.btn:focus,
      .btn-group-vertical>.btn:hover,
      .btn-group>.btn.active,
      .btn-group>.btn:active,
      .btn-group>.btn:focus,
      .btn-group>.btn:hover {
      z-index:1
     }
      .btn-toolbar {
      display:flex;
      flex-wrap:wrap;
      justify-content:flex-start
     }
      .btn-toolbar .input-group {
      width:auto
     }
      .btn-group>.btn-group:not(:first-child),
      .btn-group>.btn:not(:first-child) {
      margin-left:-1px
     }
      .btn-group>.btn-group:not(:last-child)>.btn,
      .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
      border-top-right-radius:0;
      border-bottom-right-radius:0
     }
      .btn-group>.btn-group:not(:first-child)>.btn,
      .btn-group>.btn:not(:first-child) {
      border-top-left-radius:0;
      border-bottom-left-radius:0
     }
      .dropdown-toggle-split {
      padding-right:.75rem;
      padding-left:.75rem
     }
      .dropdown-toggle-split:after,
      .dropright .dropdown-toggle-split:after,
      .dropup .dropdown-toggle-split:after {
      margin-left:0
     }
      .dropleft .dropdown-toggle-split:before {
      margin-right:0
     }
      .btn-group-sm>.btn+.dropdown-toggle-split,
      .btn-sm+.dropdown-toggle-split {
      padding-right:.375rem;
      padding-left:.375rem
     }
      .btn-group-lg>.btn+.dropdown-toggle-split,
      .btn-lg+.dropdown-toggle-split {
      padding-right:1.5rem;
      padding-left:1.5rem
     }
      .btn-group-vertical {
      flex-direction:column;
      align-items:flex-start;
      justify-content:center
     }
      .btn-group-vertical>.btn,
      .btn-group-vertical>.btn-group {
      width:100%
     }
      .btn-group-vertical>.btn-group:not(:first-child),
      .btn-group-vertical>.btn:not(:first-child) {
      margin-top:-1px
     }
      .btn-group-vertical>.btn-group:not(:last-child)>.btn,
      .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
      border-bottom-right-radius:0;
      border-bottom-left-radius:0
     }
      .btn-group-vertical>.btn-group:not(:first-child)>.btn,
      .btn-group-vertical>.btn:not(:first-child) {
      border-top-left-radius:0;
      border-top-right-radius:0
     }
      .btn-group-toggle>.btn,
      .btn-group-toggle>.btn-group>.btn {
      margin-bottom:0
     }
      .btn-group-toggle>.btn-group>.btn input[type=checkbox],
      .btn-group-toggle>.btn-group>.btn input[type=radio],
      .btn-group-toggle>.btn input[type=checkbox],
      .btn-group-toggle>.btn input[type=radio] {
      position:absolute;
      clip:rect(0,0,0,0);
      pointer-events:none
     }
      .input-group {
      position:relative;
      display:flex;
      flex-wrap:wrap;
      align-items:stretch;
      width:100%
     }
      .input-group>.custom-file,
      .input-group>.custom-select,
      .input-group>.form-control,
      .input-group>.form-control-plaintext {
      position:relative;
      flex:1 1 auto;
      width:1%;
      margin-bottom:0
     }
      .input-group>.custom-file+.custom-file,
      .input-group>.custom-file+.custom-select,
      .input-group>.custom-file+.form-control,
      .input-group>.custom-select+.custom-file,
      .input-group>.custom-select+.custom-select,
      .input-group>.custom-select+.form-control,
      .input-group>.form-control+.custom-file,
      .input-group>.form-control+.custom-select,
      .input-group>.form-control+.form-control,
      .input-group>.form-control-plaintext+.custom-file,
      .input-group>.form-control-plaintext+.custom-select,
      .input-group>.form-control-plaintext+.form-control {
      margin-left:-1px
     }
      .input-group>.custom-file .custom-file-input:focus~.custom-file-label,
      .input-group>.custom-select:focus,
      .input-group>.form-control:focus {
      z-index:3
     }
      .input-group>.custom-file .custom-file-input:focus {
      z-index:4
     }
      .input-group>.custom-select:not(:last-child),
      .input-group>.form-control:not(:last-child) {
      border-top-right-radius:0;
      border-bottom-right-radius:0
     }
      .input-group>.custom-select:not(:first-child),
      .input-group>.form-control:not(:first-child) {
      border-top-left-radius:0;
      border-bottom-left-radius:0
     }
      .input-group>.custom-file {
      display:flex;
      align-items:center
     }
      .input-group>.custom-file:not(:last-child) .custom-file-label,
      .input-group>.custom-file:not(:last-child) .custom-file-label:after {
      border-top-right-radius:0;
      border-bottom-right-radius:0
     }
      .input-group>.custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius:0;
      border-bottom-left-radius:0
     }
      .input-group-append,
      .input-group-prepend {
      display:flex
     }
      .input-group-append .btn,
      .input-group-prepend .btn {
      position:relative;
      z-index:2
     }
      .input-group-append .btn:focus,
      .input-group-prepend .btn:focus {
      z-index:3
     }
      .input-group-append .btn+.btn,
      .input-group-append .btn+.input-group-text,
      .input-group-append .input-group-text+.btn,
      .input-group-append .input-group-text+.input-group-text,
      .input-group-prepend .btn+.btn,
      .input-group-prepend .btn+.input-group-text,
      .input-group-prepend .input-group-text+.btn,
      .input-group-prepend .input-group-text+.input-group-text {
      margin-left:-1px
     }
      .input-group-prepend {
      margin-right:-1px
     }
      .input-group-append {
      margin-left:-1px
     }
      .input-group-text {
      display:flex;
      align-items:center;
      padding:.5rem .75rem;
      margin-bottom:0;
      font-size:1rem;
      font-weight:400;
      line-height:1.5;
      color:#303840;
      text-align:center;
      white-space:nowrap;
      background-color:#edf0f2;
      border:1px solid #edf0f2;
      border-radius:.25rem
     }
      .input-group-text input[type=checkbox],
      .input-group-text input[type=radio] {
      margin-top:0
     }
      .input-group-lg>.custom-select,
      .input-group-lg>.form-control:not(textarea) {
      height:calc(2.875rem + 2px)
     }
      .input-group-lg>.custom-select,
      .input-group-lg>.form-control,
      .input-group-lg>.input-group-append>.btn,
      .input-group-lg>.input-group-append>.input-group-text,
      .input-group-lg>.input-group-prepend>.btn,
      .input-group-lg>.input-group-prepend>.input-group-text {
      padding:.5rem 1rem;
      font-size:1.25rem;
      line-height:1.5;
      border-radius:.25rem
     }
      .input-group-sm>.custom-select,
      .input-group-sm>.form-control:not(textarea) {
      height:calc(1.8125rem + 2px)
     }
      .input-group-sm>.custom-select,
      .input-group-sm>.form-control,
      .input-group-sm>.input-group-append>.btn,
      .input-group-sm>.input-group-append>.input-group-text,
      .input-group-sm>.input-group-prepend>.btn,
      .input-group-sm>.input-group-prepend>.input-group-text {
      padding:.25rem .5rem;
      font-size:.875rem;
      line-height:1.5;
      border-radius:.2rem
     }
      .input-group-lg>.custom-select,
      .input-group-sm>.custom-select {
      padding-right:1.75rem
     }
      .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
      .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
      .input-group>.input-group-append:not(:last-child)>.btn,
      .input-group>.input-group-append:not(:last-child)>.input-group-text,
      .input-group>.input-group-prepend>.btn,
      .input-group>.input-group-prepend>.input-group-text {
      border-top-right-radius:0;
      border-bottom-right-radius:0
     }
      .input-group>.input-group-append>.btn,
      .input-group>.input-group-append>.input-group-text,
      .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
      .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
      .input-group>.input-group-prepend:not(:first-child)>.btn,
      .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
      border-top-left-radius:0;
      border-bottom-left-radius:0
     }
      .custom-control {
      position:relative;
      display:block;
      min-height:1.5rem;
      padding-left:1.5rem
     }
      .custom-control-inline {
      display:inline-flex;
      margin-right:1rem
     }
      .custom-control-input {
      position:absolute;
      z-index:-1;
      opacity:0
     }
      .custom-control-input:checked~.custom-control-label:before {
      color:#fff;
      border-color:#2c84dd;
      background-color:#2c84dd
     }
      .custom-control-input:focus~.custom-control-label:before {
      box-shadow:0 0 0 .075rem #fff,0 0 0 .2rem #2c84dd
     }
      .custom-control-input:focus:not(:checked)~.custom-control-label:before {
      border-color:#e7ebee
     }
      .custom-control-input:not(:disabled):active~.custom-control-label:before {
      color:#fff;
      background-color:#c6def6;
      border-color:#c6def6
     }
      .custom-control-input:disabled~.custom-control-label {
      color:#868e96
     }
      .custom-control-input:disabled~.custom-control-label:before {
      background-color:#e9ecef
     }
      .custom-control-label {
      position:relative;
      margin-bottom:0;
      vertical-align:top
     }
      .custom-control-label:before {
      pointer-events:none;
      background-color:#edf0f2;
      border:1px solid #edf0f2
     }
      .custom-control-label:after,
      .custom-control-label:before {
      position:absolute;
      top:.25rem;
      left:-1.5rem;
      display:block;
      width:1rem;
      height:1rem;
      content:""
     }
      .custom-control-label:after {
      background-repeat:no-repeat;
      background-position:50%;
      background-size:50% 50%
     }
      .custom-checkbox .custom-control-label:before {
      border-radius:.25rem
     }
      .custom-checkbox .custom-control-input:checked~.custom-control-label:after {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E")
     }
      .custom-checkbox .custom-control-input:indeterminate~.custom-control-label:before {
      border-color:#2c84dd;
      background-color:#2c84dd
     }
      .custom-checkbox .custom-control-input:indeterminate~.custom-control-label:after {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")
     }
      .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label:before {
      background-color:rgba(44,132,221,.5)
     }
      .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label:before {
      background-color:rgba(44,132,221,.5)
     }
      .custom-radio .custom-control-label:before {
      border-radius:50%
     }
      .custom-radio .custom-control-input:checked~.custom-control-label:after {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
     }
      .custom-radio .custom-control-input:disabled:checked~.custom-control-label:before {
      background-color:rgba(44,132,221,.5)
     }
      .custom-switch {
      padding-left:2.25rem
     }
      .custom-switch .custom-control-label:before {
      left:-2.25rem;
      width:1.75rem;
      pointer-events:all;
      border-radius:.5rem
     }
      .custom-switch .custom-control-label:after {
      top:calc(.25rem + 2px);
      left:calc(-2.25rem + 2px);
      width:calc(1rem - 4px);
      height:calc(1rem - 4px);
      background-color:#edf0f2;
      border-radius:.5rem;
      transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out;
      transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .custom-switch .custom-control-label:after {
       transition:none
      }
     }
      .custom-switch .custom-control-input:checked~.custom-control-label:after {
      background-color:#edf0f2;
      -webkit-transform:translateX(.75rem);
      transform:translateX(.75rem)
     }
      .custom-switch .custom-control-input:disabled:checked~.custom-control-label:before {
      background-color:rgba(44,132,221,.5)
     }
      .custom-select {
      display:inline-block;
      width:100%;
      height:calc(2.5rem + 2px);
      padding:.5rem 1.75rem .5rem .75rem;
      font-weight:400;
      line-height:1.5;
      color:#303840;
      vertical-align:middle;
      background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='rgba(48, 56, 64, 0.5)' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px!important;
      background-color:#edf0f2!important;
      border:1px solid #edf0f2;
      border-radius:.25rem;
      -webkit-appearance:none;
      -moz-appearance:none;
      appearance:none
     }
      .custom-select:focus {
      border-color:#2c84dd;
      outline:0;
      box-shadow:0 0 0 .2rem rgba(44,132,221,.5)
     }
      .custom-select:focus::-ms-value {
      color:#303840;
      background-color:#edf0f2
     }
      .custom-select[multiple],
      .custom-select[size]:not([size="1"]) {
      height:auto;
      padding-right:.75rem;
      background-image:none
     }
      .custom-select:disabled {
      color:#868e96;
      background-color:#e9ecef
     }
      .custom-select::-ms-expand {
      opacity:0
     }
      .custom-select-sm {
      height:calc(1.8125rem + 2px);
      padding-top:.25rem;
      padding-bottom:.25rem;
      padding-left:.5rem;
      font-size:.875rem
     }
      .custom-select-lg {
      height:calc(2.875rem + 2px);
      padding-top:.5rem;
      padding-bottom:.5rem;
      padding-left:1rem;
      font-size:1.25rem
     }
      .custom-file {
      display:inline-block;
      margin-bottom:0
     }
      .custom-file,
      .custom-file-input {
      position:relative;
      width:100%;
      height:calc(2.5rem + 2px)
     }
      .custom-file-input {
      z-index:2;
      margin:0;
      opacity:0
     }
      .custom-file-input:focus~.custom-file-label {
      border-color:#e7ebee;
      box-shadow:0 0 0 .2rem rgba(44,132,221,.25)
     }
      .custom-file-input:disabled~.custom-file-label {
      background-color:#e9ecef
     }
      .custom-file-input:lang(en)~.custom-file-label:after {
      content:"Browse"
     }
      .custom-file-input~.custom-file-label[data-browse]:after {
      content:attr(data-browse)
     }
      .custom-file-label {
      left:0;
      z-index:1;
      height:calc(2.5rem + 2px);
      font-weight:400;
      color:#303840;
      background-color:#edf0f2;
      border:1px solid #edf0f2;
      border-radius:.25rem
     }
      .custom-file-label,
      .custom-file-label:after {
      position:absolute;
      top:0;
      right:0;
      padding:.5rem .75rem;
      line-height:1.5
     }
      .custom-file-label:after {
      bottom:0;
      z-index:3;
      display:block;
      height:2.5rem;
      color:#fff;
      content:"Browse";
      background-color:#868e96;
      border-left:inherit;
      border-radius:0 .25rem .25rem 0
     }
      .custom-range {
      width:100%;
      height:1.4rem;
      padding:0;
      background-color:transparent;
      -webkit-appearance:none;
      -moz-appearance:none;
      appearance:none
     }
      .custom-range:focus {
      outline:none
     }
      .custom-range:focus::-webkit-slider-thumb {
      box-shadow:0 0 0 1px #f5f7fa,0 0 0 .2rem rgba(44,132,221,.25)
     }
      .custom-range:focus::-moz-range-thumb {
      box-shadow:0 0 0 1px #f5f7fa,0 0 0 .2rem rgba(44,132,221,.25)
     }
      .custom-range:focus::-ms-thumb {
      box-shadow:0 0 0 1px #f5f7fa,0 0 0 .2rem rgba(44,132,221,.25)
     }
      .custom-range::-moz-focus-outer {
      border:0
     }
      .custom-range::-webkit-slider-thumb {
      width:1rem;
      height:1rem;
      margin-top:-.25rem;
      background-color:#2c84dd;
      border:0;
      border-radius:1rem;
      transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      -webkit-appearance:none;
      appearance:none
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .custom-range::-webkit-slider-thumb {
       transition:none
      }
     }
      .custom-range::-webkit-slider-thumb:active {
      background-color:#c6def6
     }
      .custom-range::-webkit-slider-runnable-track {
      width:100%;
      height:.5rem;
      color:transparent;
      cursor:pointer;
      background-color:#dee2e6;
      border-color:transparent;
      border-radius:1rem
     }
      .custom-range::-moz-range-thumb {
      width:1rem;
      height:1rem;
      background-color:#2c84dd;
      border:0;
      border-radius:1rem;
      transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      -moz-appearance:none;
      appearance:none
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .custom-range::-moz-range-thumb {
       transition:none
      }
     }
      .custom-range::-moz-range-thumb:active {
      background-color:#c6def6
     }
      .custom-range::-moz-range-track {
      width:100%;
      height:.5rem;
      color:transparent;
      cursor:pointer;
      background-color:#dee2e6;
      border-color:transparent;
      border-radius:1rem
     }
      .custom-range::-ms-thumb {
      width:1rem;
      height:1rem;
      margin-top:0;
      margin-right:.2rem;
      margin-left:.2rem;
      background-color:#2c84dd;
      border:0;
      border-radius:1rem;
      transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      appearance:none
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .custom-range::-ms-thumb {
       transition:none
      }
     }
      .custom-range::-ms-thumb:active {
      background-color:#c6def6
     }
      .custom-range::-ms-track {
      width:100%;
      height:.5rem;
      color:transparent;
      cursor:pointer;
      background-color:transparent;
      border-color:transparent;
      border-width:.5rem
     }
      .custom-range::-ms-fill-lower,
      .custom-range::-ms-fill-upper {
      background-color:#dee2e6;
      border-radius:1rem
     }
      .custom-range::-ms-fill-upper {
      margin-right:15px
     }
      .custom-range:disabled::-webkit-slider-thumb {
      background-color:#adb5bd
     }
      .custom-range:disabled::-webkit-slider-runnable-track {
      cursor:default
     }
      .custom-range:disabled::-moz-range-thumb {
      background-color:#adb5bd
     }
      .custom-range:disabled::-moz-range-track {
      cursor:default
     }
      .custom-range:disabled::-ms-thumb {
      background-color:#adb5bd
     }
      .custom-control-label:before,
      .custom-file-label,
      .custom-select {
      transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .custom-control-label:before,
       .custom-file-label,
       .custom-select {
       transition:none
      }
     }
      .nav {
      display:flex;
      flex-wrap:wrap;
      padding-left:0;
      margin-bottom:0;
      list-style:none
     }
      .nav-link {
      display:block;
      padding:.5rem 1rem
     }
      .nav-link:focus,
      .nav-link:hover {
      text-decoration:none
     }
      .nav-link.disabled {
      color:#868e96;
      pointer-events:none;
      cursor:default
     }
      .nav-tabs {
      border-bottom:1px solid #ebeff2
     }
      .nav-tabs .nav-item {
      margin-bottom:-1px
     }
      .nav-tabs .nav-link {
      border:1px solid transparent;
      border-top-left-radius:.25rem;
      border-top-right-radius:.25rem
     }
      .nav-tabs .nav-link:focus,
      .nav-tabs .nav-link:hover {
      border-color:transparent transparent #ebeff2
     }
      .nav-tabs .nav-link.disabled {
      color:#868e96;
      background-color:transparent;
      border-color:transparent
     }
      .nav-tabs .nav-item.show .nav-link,
      .nav-tabs .nav-link.active {
      color:#303840;
      background-color:#f5f7fa;
      border-color:transparent transparent #f5f7fa
     }
      .nav-tabs .dropdown-menu {
      margin-top:-1px;
      border-top-left-radius:0;
      border-top-right-radius:0
     }
      .nav-pills .nav-link {
      border-radius:.25rem
     }
      .nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
      color:#fff;
      background-color:#2c84dd
     }
      .nav-fill .nav-item {
      flex:1 1 auto;
      text-align:center
     }
      .nav-justified .nav-item {
      flex-basis:0;
      flex-grow:1;
      text-align:center
     }
      .tab-content>.tab-pane {
      display:none
     }
      .tab-content>.active {
      display:block
     }
      .navbar {
      position:relative;
      padding:.5rem 1rem
     }
      .navbar,
      .navbar>.container,
      .navbar>.container-fluid {
      display:flex;
      flex-wrap:wrap;
      align-items:center;
      justify-content:space-between
     }
      .navbar-brand {
      display:inline-block;
      padding-top:.3125rem;
      padding-bottom:.3125rem;
      margin-right:1rem;
      font-size:1.25rem;
      line-height:inherit;
      white-space:nowrap
     }
      .navbar-brand:focus,
      .navbar-brand:hover {
      text-decoration:none
     }
      .navbar-nav {
      display:flex;
      flex-direction:column;
      padding-left:0;
      margin-bottom:0;
      list-style:none
     }
      .navbar-nav .nav-link {
      padding-right:0;
      padding-left:0
     }
      .navbar-nav .dropdown-menu {
      position:static;
      float:none
     }
      .navbar-text {
      display:inline-block;
      padding-top:.5rem;
      padding-bottom:.5rem
     }
      .navbar-collapse {
      flex-basis:100%;
      flex-grow:1;
      align-items:center
     }
      .navbar-toggler {
      padding:.25rem .75rem;
      font-size:1.25rem;
      line-height:1;
      background-color:transparent;
      border:1px solid transparent;
      border-radius:.25rem
     }
      .navbar-toggler:focus,
      .navbar-toggler:hover {
      text-decoration:none
     }
      .navbar-toggler:not(:disabled):not(.disabled) {
      cursor:pointer
     }
      .navbar-toggler-icon {
      display:inline-block;
      width:1.5em;
      height:1.5em;
      vertical-align:middle;
      content:"";
      background:no-repeat 50%;
      background-size:100% 100%
     }
     @media (max-width:373.98px) {
       .navbar-expand-i8>.container,
       .navbar-expand-i8>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:374px) {
       .navbar-expand-i8 {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-i8 .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-i8 .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-i8 .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-i8>.container,
       .navbar-expand-i8>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-i8 .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-i8 .navbar-toggler {
       display:none
      }
     }
     @media (max-width:412.98px) {
       .navbar-expand-i8-plus>.container,
       .navbar-expand-i8-plus>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:413px) {
       .navbar-expand-i8-plus {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-i8-plus .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-i8-plus .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-i8-plus .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-i8-plus>.container,
       .navbar-expand-i8-plus>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-i8-plus .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-i8-plus .navbar-toggler {
       display:none
      }
     }
     @media (max-width:575.98px) {
       .navbar-expand-sm>.container,
       .navbar-expand-sm>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:576px) {
       .navbar-expand-sm {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-sm .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-sm .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-sm .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-sm>.container,
       .navbar-expand-sm>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-sm .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-sm .navbar-toggler {
       display:none
      }
     }
     @media (max-width:767.98px) {
       .navbar-expand-md>.container,
       .navbar-expand-md>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:768px) {
       .navbar-expand-md {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-md .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-md .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-md .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-md>.container,
       .navbar-expand-md>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-md .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-md .navbar-toggler {
       display:none
      }
     }
     @media (max-width:991.98px) {
       .navbar-expand-lg>.container,
       .navbar-expand-lg>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:992px) {
       .navbar-expand-lg {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-lg .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-lg .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-lg .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-lg>.container,
       .navbar-expand-lg>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-lg .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-lg .navbar-toggler {
       display:none
      }
     }
     @media (max-width:1199.98px) {
       .navbar-expand-xl>.container,
       .navbar-expand-xl>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:1200px) {
       .navbar-expand-xl {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-xl .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-xl .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-xl .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-xl>.container,
       .navbar-expand-xl>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-xl .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-xl .navbar-toggler {
       display:none
      }
     }
     @media (max-width:1365.98px) {
       .navbar-expand-xxl>.container,
       .navbar-expand-xxl>.container-fluid {
       padding-right:0;
       padding-left:0
      }
     }
     @media (min-width:1366px) {
       .navbar-expand-xxl {
       flex-flow:row nowrap;
       justify-content:flex-start
      }
       .navbar-expand-xxl .navbar-nav {
       flex-direction:row
      }
       .navbar-expand-xxl .navbar-nav .dropdown-menu {
       position:absolute
      }
       .navbar-expand-xxl .navbar-nav .nav-link {
       padding-right:.5rem;
       padding-left:.5rem
      }
       .navbar-expand-xxl>.container,
       .navbar-expand-xxl>.container-fluid {
       flex-wrap:nowrap
      }
       .navbar-expand-xxl .navbar-collapse {
       display:flex!important;
       flex-basis:auto
      }
       .navbar-expand-xxl .navbar-toggler {
       display:none
      }
     }
      .navbar-expand {
      flex-flow:row nowrap;
      justify-content:flex-start
     }
      .navbar-expand>.container,
      .navbar-expand>.container-fluid {
      padding-right:0;
      padding-left:0
     }
      .navbar-expand .navbar-nav {
      flex-direction:row
     }
      .navbar-expand .navbar-nav .dropdown-menu {
      position:absolute
     }
      .navbar-expand .navbar-nav .nav-link {
      padding-right:.5rem;
      padding-left:.5rem
     }
      .navbar-expand>.container,
      .navbar-expand>.container-fluid {
      flex-wrap:nowrap
     }
      .navbar-expand .navbar-collapse {
      display:flex!important;
      flex-basis:auto
     }
      .navbar-expand .navbar-toggler {
      display:none
     }
      .navbar-light .navbar-brand,
      .navbar-light .navbar-brand:focus,
      .navbar-light .navbar-brand:hover {
      color:rgba(48,56,64,.9)
     }
      .navbar-light .navbar-nav .nav-link {
      color:rgba(48,56,64,.5)
     }
      .navbar-light .navbar-nav .nav-link:focus,
      .navbar-light .navbar-nav .nav-link:hover {
      color:rgba(48,56,64,.7)
     }
      .navbar-light .navbar-nav .nav-link.disabled {
      color:rgba(48,56,64,.3)
     }
      .navbar-light .navbar-nav .active>.nav-link,
      .navbar-light .navbar-nav .nav-link.active,
      .navbar-light .navbar-nav .nav-link.show,
      .navbar-light .navbar-nav .show>.nav-link {
      color:rgba(48,56,64,.9)
     }
      .navbar-light .navbar-toggler {
      color:rgba(48,56,64,.5);
      border-color:rgba(48,56,64,.1)
     }
      .navbar-light .navbar-toggler-icon {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(48, 56, 64, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
     }
      .navbar-light .navbar-text {
      color:rgba(48,56,64,.5)
     }
      .navbar-light .navbar-text a,
      .navbar-light .navbar-text a:focus,
      .navbar-light .navbar-text a:hover {
      color:rgba(48,56,64,.9)
     }
      .navbar-dark .navbar-brand,
      .navbar-dark .navbar-brand:focus,
      .navbar-dark .navbar-brand:hover {
      color:#fff
     }
      .navbar-dark .navbar-nav .nav-link {
      color:#858d94
     }
      .navbar-dark .navbar-nav .nav-link:focus,
      .navbar-dark .navbar-nav .nav-link:hover {
      color:#fff
     }
      .navbar-dark .navbar-nav .nav-link.disabled {
      color:hsla(0,0%,100%,.25)
     }
      .navbar-dark .navbar-nav .active>.nav-link,
      .navbar-dark .navbar-nav .nav-link.active,
      .navbar-dark .navbar-nav .nav-link.show,
      .navbar-dark .navbar-nav .show>.nav-link {
      color:#fff
     }
      .navbar-dark .navbar-toggler {
      color:#858d94;
      border-color:hsla(0,0%,100%,.1)
     }
      .navbar-dark .navbar-toggler-icon {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23858D94' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
     }
      .navbar-dark .navbar-text {
      color:#858d94
     }
      .navbar-dark .navbar-text a,
      .navbar-dark .navbar-text a:focus,
      .navbar-dark .navbar-text a:hover {
      color:#fff
     }
      .card,
      .card-nav .tab-content {
      position:relative;
      display:flex;
      flex-direction:column;
      min-width:0;
      word-wrap:break-word;
      background-color:#fff;
      background-clip:border-box;
      border:0 solid #ebeff2;
      border-radius:.25rem
     }
      .card-nav .tab-content>hr,
      .card>hr {
      margin-right:0;
      margin-left:0
     }
      .card-nav .tab-content>.list-group:first-child .list-group-item:first-child,
      .card>.list-group:first-child .list-group-item:first-child {
      border-top-left-radius:.25rem;
      border-top-right-radius:.25rem
     }
      .card-nav .tab-content>.list-group:last-child .list-group-item:last-child,
      .card>.list-group:last-child .list-group-item:last-child {
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .card-body {
      flex:1 1 auto;
      padding:1rem
     }
      .card-title {
      margin-bottom:1rem
     }
      .card-subtitle {
      margin-top:-.5rem
     }
      .card-subtitle,
      .card-text:last-child {
      margin-bottom:0
     }
      .card-link:hover {
      text-decoration:none
     }
      .card-link+.card-link {
      margin-left:1rem
     }
      .card-header {
      padding:1rem;
      margin-bottom:0;
      color:inherit;
      background-color:#fff;
      border-bottom:0 solid #ebeff2
     }
      .card-header:first-child {
      border-radius:.25rem .25rem 0 0
     }
      .card-header+.list-group .list-group-item:first-child {
      border-top:0
     }
      .card-footer {
      padding:1rem;
      background-color:#fff;
      border-top:0 solid #ebeff2
     }
      .card-footer:last-child {
      border-radius:0 0 .25rem .25rem
     }
      .card-header-tabs {
      margin-bottom:-1rem;
      border-bottom:0
     }
      .card-header-pills,
      .card-header-tabs {
      margin-right:-.5rem;
      margin-left:-.5rem
     }
      .card-img-overlay {
      position:absolute;
      top:0;
      right:0;
      bottom:0;
      left:0;
      padding:1.25rem
     }
      .card-img {
      width:100%;
      border-radius:.25rem
     }
      .card-img-top {
      width:100%;
      border-top-left-radius:.25rem;
      border-top-right-radius:.25rem
     }
      .card-img-bottom {
      width:100%;
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .card-deck {
      display:flex;
      flex-direction:column
     }
      .card-deck .card,
      .card-deck .card-nav .tab-content,
      .card-nav .card-deck .tab-content {
      margin-bottom:12px
     }
     @media (min-width:576px) {
       .card-deck {
       flex-flow:row wrap;
       margin-right:-12px;
       margin-left:-12px
      }
       .card-deck .card,
       .card-deck .card-nav .tab-content,
       .card-nav .card-deck .tab-content {
       display:flex;
       flex:1 0 0%;
       flex-direction:column;
       margin-right:12px;
       margin-bottom:0;
       margin-left:12px
      }
     }
      .card-group {
      display:flex;
      flex-direction:column
     }
      .card-group>.card,
      .card-nav .card-group>.tab-content {
      margin-bottom:12px
     }
     @media (min-width:576px) {
       .card-group {
       flex-flow:row wrap
      }
       .card-group>.card,
       .card-nav .card-group>.tab-content {
       flex:1 0 0%;
       margin-bottom:0
      }
       .card-group>.card+.card,
       .card-nav .card-group>.card+.tab-content,
       .card-nav .card-group>.tab-content+.card,
       .card-nav .card-group>.tab-content+.tab-content {
       margin-left:0;
       border-left:0
      }
       .card-group>.card:first-child,
       .card-nav .card-group>.tab-content:first-child {
       border-top-right-radius:0;
       border-bottom-right-radius:0
      }
       .card-group>.card:first-child .card-header,
       .card-group>.card:first-child .card-img-top,
       .card-nav .card-group>.tab-content:first-child .card-header,
       .card-nav .card-group>.tab-content:first-child .card-img-top {
       border-top-right-radius:0
      }
       .card-group>.card:first-child .card-footer,
       .card-group>.card:first-child .card-img-bottom,
       .card-nav .card-group>.tab-content:first-child .card-footer,
       .card-nav .card-group>.tab-content:first-child .card-img-bottom {
       border-bottom-right-radius:0
      }
       .card-group>.card:last-child,
       .card-nav .card-group>.tab-content:last-child {
       border-top-left-radius:0;
       border-bottom-left-radius:0
      }
       .card-group>.card:last-child .card-header,
       .card-group>.card:last-child .card-img-top,
       .card-nav .card-group>.tab-content:last-child .card-header,
       .card-nav .card-group>.tab-content:last-child .card-img-top {
       border-top-left-radius:0
      }
       .card-group>.card:last-child .card-footer,
       .card-group>.card:last-child .card-img-bottom,
       .card-nav .card-group>.tab-content:last-child .card-footer,
       .card-nav .card-group>.tab-content:last-child .card-img-bottom {
       border-bottom-left-radius:0
      }
       .card-group>.card:only-child,
       .card-nav .card-group>.tab-content:only-child {
       border-radius:.25rem
      }
       .card-group>.card:only-child .card-header,
       .card-group>.card:only-child .card-img-top,
       .card-nav .card-group>.tab-content:only-child .card-header,
       .card-nav .card-group>.tab-content:only-child .card-img-top {
       border-top-left-radius:.25rem;
       border-top-right-radius:.25rem
      }
       .card-group>.card:only-child .card-footer,
       .card-group>.card:only-child .card-img-bottom,
       .card-nav .card-group>.tab-content:only-child .card-footer,
       .card-nav .card-group>.tab-content:only-child .card-img-bottom {
       border-bottom-right-radius:.25rem;
       border-bottom-left-radius:.25rem
      }
       .card-group>.card:not(:first-child):not(:last-child):not(:only-child),
       .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,
       .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
       .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
       .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
       .card-nav .card-group>.tab-content:not(:first-child):not(:last-child):not(:only-child),
       .card-nav .card-group>.tab-content:not(:first-child):not(:last-child):not(:only-child) .card-footer,
       .card-nav .card-group>.tab-content:not(:first-child):not(:last-child):not(:only-child) .card-header,
       .card-nav .card-group>.tab-content:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
       .card-nav .card-group>.tab-content:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
       border-radius:0
      }
     }
      .card-columns .card,
      .card-columns .card-nav .tab-content,
      .card-nav .card-columns .tab-content {
      margin-bottom:1rem
     }
     @media (min-width:576px) {
       .card-columns {
       -webkit-column-count:3;
       column-count:3;
       -webkit-column-gap:24px;
       column-gap:24px;
       orphans:1;
       widows:1
      }
       .card-columns .card,
       .card-columns .card-nav .tab-content,
       .card-nav .card-columns .tab-content {
       display:inline-block;
       width:100%
      }
     }
      .accordion .card,
      .accordion .card-nav .tab-content,
      .card-nav .accordion .tab-content {
      overflow:hidden
     }
      .accordion .card-nav .tab-content:not(:first-of-type) .card-header:first-child,
      .accordion .card:not(:first-of-type) .card-header:first-child,
      .card-nav .accordion .tab-content:not(:first-of-type) .card-header:first-child {
      border-radius:0
     }
      .accordion .card-nav .tab-content:not(:first-of-type):not(:last-of-type),
      .accordion .card:not(:first-of-type):not(:last-of-type),
      .card-nav .accordion .tab-content:not(:first-of-type):not(:last-of-type) {
      border-bottom:0;
      border-radius:0
     }
      .accordion .card-nav .tab-content:first-of-type,
      .accordion .card:first-of-type,
      .card-nav .accordion .tab-content:first-of-type {
      border-bottom:0;
      border-bottom-right-radius:0;
      border-bottom-left-radius:0
     }
      .accordion .card-nav .tab-content:last-of-type,
      .accordion .card:last-of-type,
      .card-nav .accordion .tab-content:last-of-type {
      border-top-left-radius:0;
      border-top-right-radius:0
     }
      .accordion .card-nav .tab-content .card-header,
      .accordion .card .card-header,
      .card-nav .accordion .tab-content .card-header {
      margin-bottom:0
     }
      .breadcrumb {
      display:flex;
      flex-wrap:wrap;
      padding:.75rem 1.25rem;
      margin-bottom:1rem;
      list-style:none;
      background-color:transparent;
      border-radius:.25rem
     }
      .breadcrumb-item+.breadcrumb-item {
      padding-left:.5rem
     }
      .breadcrumb-item+.breadcrumb-item:before {
      display:inline-block;
      padding-right:.5rem;
      color:#ebeff2;
      content:"/"
     }
      .breadcrumb-item+.breadcrumb-item:hover:before {
      text-decoration:underline;
      text-decoration:none
     }
      .breadcrumb-item.active {
      color:#868e96
     }
      .pagination {
      display:flex;
      padding-left:0;
      list-style:none;
      border-radius:.25rem
     }
      .page-link {
      position:relative;
      display:block;
      padding:.5rem .75rem;
      margin-left:-1px;
      line-height:1.25;
      color:rgba(48,56,64,.7);
      background-color:transparent;
      border:1px solid #dee2e6
     }
      .page-link:hover {
      z-index:2;
      color:rgba(15,18,20,.7);
      text-decoration:none;
      background-color:#e9ecef;
      border-color:#dee2e6
     }
      .page-link:focus {
      z-index:2;
      outline:0;
      box-shadow:0 0 0 .2rem rgba(44,132,221,.25)
     }
      .page-link:not(:disabled):not(.disabled) {
      cursor:pointer
     }
      .page-item:first-child .page-link {
      margin-left:0;
      border-top-left-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .page-item:last-child .page-link {
      border-top-right-radius:.25rem;
      border-bottom-right-radius:.25rem
     }
      .page-item.active .page-link {
      z-index:1;
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .page-item.disabled .page-link {
      color:#cfcfcf;
      pointer-events:none;
      cursor:auto;
      background-color:transparent;
      border-color:#dee2e6
     }
      .pagination-lg .page-link {
      padding:.75rem 1.5rem;
      font-size:1.25rem;
      line-height:1.5
     }
      .pagination-lg .page-item:first-child .page-link {
      border-top-left-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .pagination-lg .page-item:last-child .page-link {
      border-top-right-radius:.25rem;
      border-bottom-right-radius:.25rem
     }
      .pagination-sm .page-link {
      padding:.25rem .5rem;
      font-size:.875rem;
      line-height:1.5
     }
      .pagination-sm .page-item:first-child .page-link {
      border-top-left-radius:.2rem;
      border-bottom-left-radius:.2rem
     }
      .pagination-sm .page-item:last-child .page-link {
      border-top-right-radius:.2rem;
      border-bottom-right-radius:.2rem
     }
      .badge {
      display:inline-block;
      padding:.25em .4em;
      font-size:75%;
      font-weight:500;
      line-height:1;
      text-align:center;
      white-space:nowrap;
      vertical-align:baseline;
      border-radius:.25rem
     }
      a.badge:focus,
      a.badge:hover {
      text-decoration:none
     }
      .badge:empty {
      display:none
     }
      .btn .badge {
      position:relative;
      top:-1px
     }
      .badge-pill {
      padding-right:.6em;
      padding-left:.6em;
      border-radius:10rem
     }
      .badge-primary {
      color:#fff;
      background-color:#2c84dd
     }
      a.badge-primary:focus,
      a.badge-primary:hover {
      color:#fff;
      background-color:#1e6bb8
     }
      .badge-secondary {
      color:#fff;
      background-color:#868e96
     }
      a.badge-secondary:focus,
      a.badge-secondary:hover {
      color:#fff;
      background-color:#6c757d
     }
      .badge-success {
      color:#212529;
      background-color:#77c13a
     }
      a.badge-success:focus,
      a.badge-success:hover {
      color:#212529;
      background-color:#5f9a2e
     }
      .badge-info {
      color:#fff;
      background-color:#17a2b8
     }
      a.badge-info:focus,
      a.badge-info:hover {
      color:#fff;
      background-color:#117a8b
     }
      .badge-warning {
      color:#212529;
      background-color:#f98437
     }
      a.badge-warning:focus,
      a.badge-warning:hover {
      color:#212529;
      background-color:#f66607
     }
      .badge-danger {
      color:#fff;
      background-color:#d9534f
     }
      a.badge-danger:focus,
      a.badge-danger:hover {
      color:#fff;
      background-color:#c9302c
     }
      .badge-light {
      color:#212529;
      background-color:#f8f9fa
     }
      a.badge-light:focus,
      a.badge-light:hover {
      color:#212529;
      background-color:#dae0e5
     }
      .badge-dark {
      color:#fff;
      background-color:#1d2126
     }
      a.badge-dark:focus,
      a.badge-dark:hover {
      color:#fff;
      background-color:#070809
     }
      .badge-accent {
      color:#fff;
      background-color:#ed0b4c
     }
      a.badge-accent:focus,
      a.badge-accent:hover {
      color:#fff;
      background-color:#bc093c
     }
      .badge-primary-light {
      color:#212529;
      background-color:#9cf
     }
      a.badge-primary-light:focus,
      a.badge-primary-light:hover {
      color:#212529;
      background-color:#66b3ff
     }
      .jumbotron {
      padding:2rem 1rem;
      margin-bottom:2rem;
      background-color:#e9ecef;
      border-radius:.25rem
     }
     @media (min-width:576px) {
       .jumbotron {
       padding:4rem 2rem
      }
     }
      .jumbotron-fluid {
      padding-right:0;
      padding-left:0;
      border-radius:0
     }
      .alert {
      position:relative;
      padding:.75rem 1.25rem;
      margin-bottom:1rem;
      border:1px solid transparent;
      border-radius:.25rem
     }
      .alert-heading {
      color:inherit
     }
      .alert-link {
      font-weight:500
     }
      .alert-dismissible {
      padding-right:4rem
     }
      .alert-dismissible .close {
      position:absolute;
      top:0;
      right:0;
      padding:.75rem 1.25rem;
      color:inherit
     }
      .alert-primary {
      color:#2e6092;
      background-color:#d5e6f8;
      border-color:#c4ddf5
     }
      .alert-primary hr {
      border-top-color:#aed0f1
     }
      .alert-primary .alert-link {
      color:#22476b
     }
      .alert-secondary {
      color:#5d656d;
      background-color:#e7e8ea;
      border-color:#dddfe2
     }
      .alert-secondary hr {
      border-top-color:#cfd2d6
     }
      .alert-secondary .alert-link {
      color:#464c51
     }
      .alert-success {
      color:#557f3d;
      background-color:#e4f3d8;
      border-color:#d9eec8
     }
      .alert-success hr {
      border-top-color:#cce8b5
     }
      .alert-success .alert-link {
      color:#3e5d2c
     }
      .alert-info {
      color:#236f7e;
      background-color:#d1ecf1;
      border-color:#bee5eb
     }
      .alert-info hr {
      border-top-color:#abdde5
     }
      .alert-info .alert-link {
      color:#184c56
     }
      .alert-warning {
      color:#99603b;
      background-color:#fee6d7;
      border-color:#fdddc7
     }
      .alert-warning hr {
      border-top-color:#fcceae
     }
      .alert-warning .alert-link {
      color:#74492d
     }
      .alert-danger {
      color:#884648;
      background-color:#f7dddc;
      border-color:#f4cfce
     }
      .alert-danger hr {
      border-top-color:#efbbb9
     }
      .alert-danger .alert-link {
      color:#663536
     }
      .alert-light {
      color:#989ca1;
      background-color:#fefefe;
      border-color:#fdfdfe
     }
      .alert-light hr {
      border-top-color:#ececf6
     }
      .alert-light .alert-link {
      color:#7d8289
     }
      .alert-dark {
      color:#262c32;
      background-color:#d2d3d4;
      border-color:#c0c1c2
     }
      .alert-dark hr {
      border-top-color:#b3b4b5
     }
      .alert-dark .alert-link {
      color:#101315
     }
      .alert-accent {
      color:#922146;
      background-color:#fbcedb;
      border-color:#fabbcd
     }
      .alert-accent hr {
      border-top-color:#f8a3bc
     }
      .alert-accent .alert-link {
      color:#681832
     }
      .alert-primary-light {
      color:#6785a3;
      background-color:#ebf5ff;
      border-color:#e2f1ff
     }
      .alert-primary-light hr {
      border-top-color:#c9e5ff
     }
      .alert-primary-light .alert-link {
      color:#516c86
     }
     @-webkit-keyframes progress-bar-stripes {
      0% {
       background-position:1rem 0
      }
      to {
       background-position:0 0
      }
     }
     @keyframes  progress-bar-stripes {
      0% {
       background-position:1rem 0
      }
      to {
       background-position:0 0
      }
     }
      .progress {
      display:flex;
      height:1rem;
      overflow:hidden;
      font-size:.75rem;
      background-color:#e9ecef;
      border-radius:.25rem
     }
      .progress-bar {
      display:flex;
      flex-direction:column;
      justify-content:center;
      color:#fff;
      text-align:center;
      white-space:nowrap;
      background-color:#2c84dd;
      transition:width .6s ease
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .progress-bar {
       transition:none
      }
     }
      .progress-bar-striped {
      background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);
      background-size:1rem 1rem
     }
      .progress-bar-animated {
      -webkit-animation:progress-bar-stripes 1s linear infinite;
      animation:progress-bar-stripes 1s linear infinite
     }
      .media {
      align-items:flex-start
     }
      .media-body {
      flex:1
     }
      .list-group {
      display:flex;
      flex-direction:column;
      padding-left:0;
      margin-bottom:0
     }
      .list-group-item-action {
      width:100%;
      color:#495057;
      text-align:inherit
     }
      .list-group-item-action:focus,
      .list-group-item-action:hover {
      color:#495057;
      text-decoration:none;
      background-color:#f8f9fa
     }
      .list-group-item-action:active {
      color:#303840;
      background-color:#e9ecef
     }
      .list-group-item {
      position:relative;
      display:block;
      padding:.75rem 1.5rem;
      margin-bottom:-1px;
      background-color:#fff;
      border:1px solid #ebeff2
     }
      .list-group-item:first-child {
      border-top-left-radius:.25rem;
      border-top-right-radius:.25rem
     }
      .list-group-item:last-child {
      margin-bottom:0;
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .list-group-item:focus,
      .list-group-item:hover {
      z-index:1;
      text-decoration:none
     }
      .list-group-item.disabled,
      .list-group-item:disabled {
      color:#868e96;
      pointer-events:none;
      background-color:#fff
     }
      .list-group-item.active {
      z-index:2;
      color:#303840;
      background-color:transparent;
      border-color:transparent
     }
      .list-group-flush .list-group-item {
      border-right:0;
      border-left:0;
      border-radius:0
     }
      .list-group-flush .list-group-item:last-child {
      margin-bottom:-1px
     }
      .list-group-flush:first-child .list-group-item:first-child {
      border-top:0
     }
      .list-group-flush:last-child .list-group-item:last-child {
      margin-bottom:0;
      border-bottom:0
     }
      .list-group-item-primary {
      color:#2e6092;
      background-color:#c4ddf5
     }
      .list-group-item-primary.list-group-item-action:focus,
      .list-group-item-primary.list-group-item-action:hover {
      color:#2e6092;
      background-color:#aed0f1
     }
      .list-group-item-primary.list-group-item-action.active {
      color:#fff;
      background-color:#2e6092;
      border-color:#2e6092
     }
      .list-group-item-secondary {
      color:#5d656d;
      background-color:#dddfe2
     }
      .list-group-item-secondary.list-group-item-action:focus,
      .list-group-item-secondary.list-group-item-action:hover {
      color:#5d656d;
      background-color:#cfd2d6
     }
      .list-group-item-secondary.list-group-item-action.active {
      color:#fff;
      background-color:#5d656d;
      border-color:#5d656d
     }
      .list-group-item-success {
      color:#557f3d;
      background-color:#d9eec8
     }
      .list-group-item-success.list-group-item-action:focus,
      .list-group-item-success.list-group-item-action:hover {
      color:#557f3d;
      background-color:#cce8b5
     }
      .list-group-item-success.list-group-item-action.active {
      color:#fff;
      background-color:#557f3d;
      border-color:#557f3d
     }
      .list-group-item-info {
      color:#236f7e;
      background-color:#bee5eb
     }
      .list-group-item-info.list-group-item-action:focus,
      .list-group-item-info.list-group-item-action:hover {
      color:#236f7e;
      background-color:#abdde5
     }
      .list-group-item-info.list-group-item-action.active {
      color:#fff;
      background-color:#236f7e;
      border-color:#236f7e
     }
      .list-group-item-warning {
      color:#99603b;
      background-color:#fdddc7
     }
      .list-group-item-warning.list-group-item-action:focus,
      .list-group-item-warning.list-group-item-action:hover {
      color:#99603b;
      background-color:#fcceae
     }
      .list-group-item-warning.list-group-item-action.active {
      color:#fff;
      background-color:#99603b;
      border-color:#99603b
     }
      .list-group-item-danger {
      color:#884648;
      background-color:#f4cfce
     }
      .list-group-item-danger.list-group-item-action:focus,
      .list-group-item-danger.list-group-item-action:hover {
      color:#884648;
      background-color:#efbbb9
     }
      .list-group-item-danger.list-group-item-action.active {
      color:#fff;
      background-color:#884648;
      border-color:#884648
     }
      .list-group-item-light {
      color:#989ca1;
      background-color:#fdfdfe
     }
      .list-group-item-light.list-group-item-action:focus,
      .list-group-item-light.list-group-item-action:hover {
      color:#989ca1;
      background-color:#ececf6
     }
      .list-group-item-light.list-group-item-action.active {
      color:#fff;
      background-color:#989ca1;
      border-color:#989ca1
     }
      .list-group-item-dark {
      color:#262c32;
      background-color:#c0c1c2
     }
      .list-group-item-dark.list-group-item-action:focus,
      .list-group-item-dark.list-group-item-action:hover {
      color:#262c32;
      background-color:#b3b4b5
     }
      .list-group-item-dark.list-group-item-action.active {
      color:#fff;
      background-color:#262c32;
      border-color:#262c32
     }
      .list-group-item-accent {
      color:#922146;
      background-color:#fabbcd
     }
      .list-group-item-accent.list-group-item-action:focus,
      .list-group-item-accent.list-group-item-action:hover {
      color:#922146;
      background-color:#f8a3bc
     }
      .list-group-item-accent.list-group-item-action.active {
      color:#fff;
      background-color:#922146;
      border-color:#922146
     }
      .list-group-item-primary-light {
      color:#6785a3;
      background-color:#e2f1ff
     }
      .list-group-item-primary-light.list-group-item-action:focus,
      .list-group-item-primary-light.list-group-item-action:hover {
      color:#6785a3;
      background-color:#c9e5ff
     }
      .list-group-item-primary-light.list-group-item-action.active {
      color:#fff;
      background-color:#6785a3;
      border-color:#6785a3
     }
      .close {
      float:right;
      font-size:1.5rem;
      font-weight:500;
      line-height:1;
      color:#303840;
      text-shadow:0 1px 0 #fff;
      opacity:.5
     }
      .close:hover {
      color:#303840;
      text-decoration:none
     }
      .close:not(:disabled):not(.disabled) {
      cursor:pointer
     }
      .close:not(:disabled):not(.disabled):focus,
      .close:not(:disabled):not(.disabled):hover {
      opacity:.75
     }
      button.close {
      padding:0;
      background-color:transparent;
      border:0;
      -webkit-appearance:none;
      -moz-appearance:none;
      appearance:none
     }
      a.close.disabled {
      pointer-events:none
     }
      .toast {
      max-width:350px;
      overflow:hidden;
      font-size:.875rem;
      background-color:hsla(0,0%,100%,.85);
      background-clip:padding-box;
      border:1px solid rgba(0,0,0,.1);
      border-radius:.25rem;
      box-shadow:0 .25rem .75rem rgba(48,56,64,.1);
      -webkit-backdrop-filter:blur(10px);
      backdrop-filter:blur(10px);
      opacity:0
     }
      .toast:not(:last-child) {
      margin-bottom:.75rem
     }
      .toast.showing {
      opacity:1
     }
      .toast.show {
      display:block;
      opacity:1
     }
      .toast.hide {
      display:none
     }
      .toast-header {
      display:flex;
      align-items:center;
      padding:.25rem .75rem;
      color:#868e96;
      background-color:hsla(0,0%,100%,.85);
      background-clip:padding-box;
      border-bottom:1px solid rgba(0,0,0,.05)
     }
      .toast-body {
      padding:.75rem
     }
      .modal-open {
      overflow:hidden
     }
      .modal-open .modal {
      overflow-x:hidden;
      overflow-y:auto
     }
      .modal {
      position:fixed;
      top:0;
      left:0;
      z-index:1050;
      display:none;
      width:100%;
      height:100%;
      overflow:hidden;
      outline:0
     }
      .modal-dialog {
      position:relative;
      width:auto;
      margin:.5rem;
      pointer-events:none
     }
      .modal.fade .modal-dialog {
      transition:-webkit-transform .3s ease-out;
      transition:transform .3s ease-out;
      transition:transform .3s ease-out,-webkit-transform .3s ease-out;
      -webkit-transform:translateY(-50px);
      transform:translateY(-50px)
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .modal.fade .modal-dialog {
       transition:none
      }
     }
      .modal.show .modal-dialog {
      -webkit-transform:none;
      transform:none
     }
      .modal-dialog-centered {
      display:flex;
      align-items:center;
      min-height:calc(100% - 1rem)
     }
      .modal-dialog-centered:before {
      display:block;
      height:calc(100vh - 1rem);
      content:""
     }
      .modal-content {
      position:relative;
      display:flex;
      flex-direction:column;
      width:100%;
      pointer-events:auto;
      background-color:#fff;
      background-clip:padding-box;
      border:1px solid rgba(48,56,64,.2);
      border-radius:.25rem;
      outline:0
     }
      .modal-backdrop {
      position:fixed;
      top:0;
      left:0;
      z-index:1040;
      width:100vw;
      height:100vh;
      background-color:rgba(48,56,64,.8)
     }
      .modal-backdrop.fade {
      opacity:0
     }
      .modal-backdrop.show {
      opacity:1
     }
      .modal-header {
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
      padding:1rem;
      border-bottom:1px solid #e9ecef;
      border-top-left-radius:.25rem;
      border-top-right-radius:.25rem
     }
      .modal-header .close {
      padding:1rem;
      margin:-1rem -1rem -1rem auto
     }
      .modal-title {
      margin-bottom:0;
      line-height:1.5
     }
      .modal-body {
      position:relative;
      flex:1 1 auto;
      padding:1rem
     }
      .modal-footer {
      display:flex;
      align-items:center;
      justify-content:flex-end;
      padding:1rem;
      border-top:1px solid #e9ecef;
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .modal-footer>:not(:first-child) {
      margin-left:.25rem
     }
      .modal-footer>:not(:last-child) {
      margin-right:.25rem
     }
      .modal-scrollbar-measure {
      position:absolute;
      top:-9999px;
      width:50px;
      height:50px;
      overflow:scroll
     }
     @media (min-width:576px) {
       .modal-dialog {
       max-width:500px;
       margin:1.75rem auto
      }
       .modal-dialog-centered {
       min-height:calc(100% - 3.5rem)
      }
       .modal-dialog-centered:before {
       height:calc(100vh - 3.5rem)
      }
       .modal-sm {
       max-width:300px
      }
     }
     @media (min-width:992px) {
       .modal-lg,
       .modal-xl {
       max-width:800px
      }
     }
     @media (min-width:1200px) {
       .modal-xl {
       max-width:1140px
      }
     }
      .tooltip {
      position:absolute;
      z-index:1070;
      display:block;
      margin:.5rem;
      font-family:Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
      font-style:normal;
      font-weight:400;
      line-height:1.5;
      text-align:left;
      text-align:start;
      text-decoration:none;
      text-shadow:none;
      text-transform:none;
      letter-spacing:normal;
      word-break:normal;
      word-spacing:normal;
      white-space:normal;
      line-break:auto;
      font-size:1rem;
      word-wrap:break-word;
      opacity:0
     }
      .tooltip.show {
      opacity:1
     }
      .tooltip .arrow {
      position:absolute;
      display:block;
      width:.8rem;
      height:.4rem
     }
      .tooltip .arrow:before {
      position:absolute;
      content:"";
      border-color:transparent;
      border-style:solid
     }
      .bs-tooltip-auto[x-placement^=top],
      .bs-tooltip-top {
      padding:.4rem 0
     }
      .bs-tooltip-auto[x-placement^=top] .arrow,
      .bs-tooltip-top .arrow {
      bottom:0
     }
      .bs-tooltip-auto[x-placement^=top] .arrow:before,
      .bs-tooltip-top .arrow:before {
      top:0;
      border-width:.4rem .4rem 0;
      border-top-color:#fff
     }
      .bs-tooltip-auto[x-placement^=right],
      .bs-tooltip-right {
      padding:0 .4rem
     }
      .bs-tooltip-auto[x-placement^=right] .arrow,
      .bs-tooltip-right .arrow {
      left:0;
      width:.4rem;
      height:.8rem
     }
      .bs-tooltip-auto[x-placement^=right] .arrow:before,
      .bs-tooltip-right .arrow:before {
      right:0;
      border-width:.4rem .4rem .4rem 0;
      border-right-color:#fff
     }
      .bs-tooltip-auto[x-placement^=bottom],
      .bs-tooltip-bottom {
      padding:.4rem 0
     }
      .bs-tooltip-auto[x-placement^=bottom] .arrow,
      .bs-tooltip-bottom .arrow {
      top:0
     }
      .bs-tooltip-auto[x-placement^=bottom] .arrow:before,
      .bs-tooltip-bottom .arrow:before {
      bottom:0;
      border-width:0 .4rem .4rem;
      border-bottom-color:#fff
     }
      .bs-tooltip-auto[x-placement^=left],
      .bs-tooltip-left {
      padding:0 .4rem
     }
      .bs-tooltip-auto[x-placement^=left] .arrow,
      .bs-tooltip-left .arrow {
      right:0;
      width:.4rem;
      height:.8rem
     }
      .bs-tooltip-auto[x-placement^=left] .arrow:before,
      .bs-tooltip-left .arrow:before {
      left:0;
      border-width:.4rem 0 .4rem .4rem;
      border-left-color:#fff
     }
      .tooltip-inner {
      max-width:200px;
      padding:1rem .5rem;
      color:#303840;
      text-align:center;
      background-color:#fff;
      border-radius:.25rem
     }
      .popover {
      top:0;
      left:0;
      z-index:1060;
      max-width:304px;
      font-family:Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
      font-style:normal;
      font-weight:400;
      line-height:1.5;
      text-align:left;
      text-align:start;
      text-decoration:none;
      text-shadow:none;
      text-transform:none;
      letter-spacing:normal;
      word-break:normal;
      word-spacing:normal;
      white-space:normal;
      line-break:auto;
      font-size:1rem;
      word-wrap:break-word;
      background-color:#fff;
      background-clip:padding-box;
      border:1px solid #ebeff2;
      border-radius:.25rem
     }
      .popover,
      .popover .arrow {
      position:absolute;
      display:block
     }
      .popover .arrow {
      width:1rem;
      height:.5rem;
      margin:0 .25rem
     }
      .popover .arrow:after,
      .popover .arrow:before {
      position:absolute;
      display:block;
      content:"";
      border-color:transparent;
      border-style:solid
     }
      .bs-popover-auto[x-placement^=top],
      .bs-popover-top {
      margin-bottom:.5rem
     }
      .bs-popover-auto[x-placement^=top] .arrow,
      .bs-popover-top .arrow {
      bottom:calc(-.5rem + -1px)
     }
      .bs-popover-auto[x-placement^=top] .arrow:after,
      .bs-popover-auto[x-placement^=top] .arrow:before,
      .bs-popover-top .arrow:after,
      .bs-popover-top .arrow:before {
      border-width:.5rem .5rem 0
     }
      .bs-popover-auto[x-placement^=top] .arrow:before,
      .bs-popover-top .arrow:before {
      bottom:0;
      border-top-color:#ebeff2
     }
      .bs-popover-auto[x-placement^=top] .arrow:after,
      .bs-popover-top .arrow:after {
      bottom:1px;
      border-top-color:#fff
     }
      .bs-popover-auto[x-placement^=right],
      .bs-popover-right {
      margin-left:.5rem
     }
      .bs-popover-auto[x-placement^=right] .arrow,
      .bs-popover-right .arrow {
      left:calc(-.5rem + -1px);
      width:.5rem;
      height:1rem;
      margin:.25rem 0
     }
      .bs-popover-auto[x-placement^=right] .arrow:after,
      .bs-popover-auto[x-placement^=right] .arrow:before,
      .bs-popover-right .arrow:after,
      .bs-popover-right .arrow:before {
      border-width:.5rem .5rem .5rem 0
     }
      .bs-popover-auto[x-placement^=right] .arrow:before,
      .bs-popover-right .arrow:before {
      left:0;
      border-right-color:#ebeff2
     }
      .bs-popover-auto[x-placement^=right] .arrow:after,
      .bs-popover-right .arrow:after {
      left:1px;
      border-right-color:#fff
     }
      .bs-popover-auto[x-placement^=bottom],
      .bs-popover-bottom {
      margin-top:.5rem
     }
      .bs-popover-auto[x-placement^=bottom] .arrow,
      .bs-popover-bottom .arrow {
      top:calc(-.5rem + -1px)
     }
      .bs-popover-auto[x-placement^=bottom] .arrow:after,
      .bs-popover-auto[x-placement^=bottom] .arrow:before,
      .bs-popover-bottom .arrow:after,
      .bs-popover-bottom .arrow:before {
      border-width:0 .5rem .5rem
     }
      .bs-popover-auto[x-placement^=bottom] .arrow:before,
      .bs-popover-bottom .arrow:before {
      top:0;
      border-bottom-color:#ebeff2
     }
      .bs-popover-auto[x-placement^=bottom] .arrow:after,
      .bs-popover-bottom .arrow:after {
      top:1px;
      border-bottom-color:#fff
     }
      .bs-popover-auto[x-placement^=bottom] .popover-header:before,
      .bs-popover-bottom .popover-header:before {
      position:absolute;
      top:0;
      left:50%;
      display:block;
      width:1rem;
      margin-left:-.5rem;
      content:"";
      border-bottom:1px solid #f5f7fa
     }
      .bs-popover-auto[x-placement^=left],
      .bs-popover-left {
      margin-right:.5rem
     }
      .bs-popover-auto[x-placement^=left] .arrow,
      .bs-popover-left .arrow {
      right:calc(-.5rem + -1px);
      width:.5rem;
      height:1rem;
      margin:.25rem 0
     }
      .bs-popover-auto[x-placement^=left] .arrow:after,
      .bs-popover-auto[x-placement^=left] .arrow:before,
      .bs-popover-left .arrow:after,
      .bs-popover-left .arrow:before {
      border-width:.5rem 0 .5rem .5rem
     }
      .bs-popover-auto[x-placement^=left] .arrow:before,
      .bs-popover-left .arrow:before {
      right:0;
      border-left-color:#ebeff2
     }
      .bs-popover-auto[x-placement^=left] .arrow:after,
      .bs-popover-left .arrow:after {
      right:1px;
      border-left-color:#fff
     }
      .popover-header {
      padding:.5rem .75rem;
      margin-bottom:0;
      font-size:1rem;
      color:#303840;
      background-color:#f5f7fa;
      border-bottom:1px solid #e4e9f2;
      border-top-left-radius:calc(.25rem - 1px);
      border-top-right-radius:calc(.25rem - 1px)
     }
      .popover-header:empty {
      display:none
     }
      .popover-body {
      padding:.5rem .75rem;
      color:#303840
     }
      .carousel {
      position:relative
     }
      .carousel.pointer-event {
      touch-action:pan-y
     }
      .carousel-inner {
      position:relative;
      width:100%;
      overflow:hidden
     }
      .carousel-inner:after {
      display:block;
      clear:both;
      content:""
     }
      .carousel-item {
      position:relative;
      display:none;
      float:left;
      width:100%;
      margin-right:-100%;
      -webkit-backface-visibility:hidden;
      backface-visibility:hidden;
      transition:-webkit-transform .6s ease-in-out;
      transition:transform .6s ease-in-out;
      transition:transform .6s ease-in-out,-webkit-transform .6s ease-in-out
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .carousel-item {
       transition:none
      }
     }
      .carousel-item-next,
      .carousel-item-prev,
      .carousel-item.active {
      display:block
     }
      .active.carousel-item-right,
      .carousel-item-next:not(.carousel-item-left) {
      -webkit-transform:translateX(100%);
      transform:translateX(100%)
     }
      .active.carousel-item-left,
      .carousel-item-prev:not(.carousel-item-right) {
      -webkit-transform:translateX(-100%);
      transform:translateX(-100%)
     }
      .carousel-fade .carousel-item {
      opacity:0;
      transition-property:opacity;
      -webkit-transform:none;
      transform:none
     }
      .carousel-fade .carousel-item-next.carousel-item-left,
      .carousel-fade .carousel-item-prev.carousel-item-right,
      .carousel-fade .carousel-item.active {
      z-index:1;
      opacity:1
     }
      .carousel-fade .active.carousel-item-left,
      .carousel-fade .active.carousel-item-right {
      z-index:0;
      opacity:0;
      transition:opacity 0s .6s
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .carousel-fade .active.carousel-item-left,
       .carousel-fade .active.carousel-item-right {
       transition:none
      }
     }
      .carousel-control-next,
      .carousel-control-prev {
      position:absolute;
      top:0;
      bottom:0;
      z-index:1;
      display:flex;
      align-items:center;
      justify-content:center;
      width:15%;
      color:#fff;
      text-align:center;
      opacity:.5;
      transition:opacity .15s ease
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .carousel-control-next,
       .carousel-control-prev {
       transition:none
      }
     }
      .carousel-control-next:focus,
      .carousel-control-next:hover,
      .carousel-control-prev:focus,
      .carousel-control-prev:hover {
      color:#fff;
      text-decoration:none;
      outline:0;
      opacity:.9
     }
      .carousel-control-prev {
      left:0
     }
      .carousel-control-next {
      right:0
     }
      .carousel-control-next-icon,
      .carousel-control-prev-icon {
      display:inline-block;
      width:20px;
      height:20px;
      background:transparent no-repeat 50%;
      background-size:100% 100%
     }
      .carousel-control-prev-icon {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3E%3C/svg%3E")
     }
      .carousel-control-next-icon {
      background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3E%3C/svg%3E")
     }
      .carousel-indicators {
      position:absolute;
      right:0;
      bottom:0;
      left:0;
      z-index:15;
      display:flex;
      justify-content:center;
      padding-left:0;
      margin-right:15%;
      margin-left:15%;
      list-style:none
     }
      .carousel-indicators li {
      box-sizing:content-box;
      flex:0 1 auto;
      width:30px;
      height:3px;
      margin-right:3px;
      margin-left:3px;
      text-indent:-999px;
      cursor:pointer;
      background-color:#fff;
      background-clip:padding-box;
      border-top:10px solid transparent;
      border-bottom:10px solid transparent;
      opacity:.5;
      transition:opacity .6s ease
     }
     @media  screen and (prefers-reduced-motion:reduce) {
       .carousel-indicators li {
       transition:none
      }
     }
      .carousel-indicators .active {
      opacity:1
     }
      .carousel-caption {
      position:absolute;
      right:15%;
      bottom:20px;
      left:15%;
      z-index:10;
      padding-top:20px;
      padding-bottom:20px;
      color:#fff;
      text-align:center
     }
     @-webkit-keyframes spinner-border {
      to {
       -webkit-transform:rotate(1turn);
       transform:rotate(1turn)
      }
     }
     @keyframes  spinner-border {
      to {
       -webkit-transform:rotate(1turn);
       transform:rotate(1turn)
      }
     }
      .spinner-border {
      display:inline-block;
      width:2rem;
      height:2rem;
      vertical-align:text-bottom;
      border:.25em solid;
      border-right:.25em solid transparent;
      border-radius:50%;
      -webkit-animation:spinner-border .75s linear infinite;
      animation:spinner-border .75s linear infinite
     }
      .spinner-border-sm {
      width:1rem;
      height:1rem;
      border-width:.2em
     }
     @-webkit-keyframes spinner-grow {
      0% {
       -webkit-transform:scale(0);
       transform:scale(0)
      }
      50% {
       opacity:1
      }
     }
     @keyframes  spinner-grow {
      0% {
       -webkit-transform:scale(0);
       transform:scale(0)
      }
      50% {
       opacity:1
      }
     }
      .spinner-grow {
      display:inline-block;
      width:2rem;
      height:2rem;
      vertical-align:text-bottom;
      background-color:currentColor;
      border-radius:50%;
      opacity:0;
      -webkit-animation:spinner-grow .75s linear infinite;
      animation:spinner-grow .75s linear infinite
     }
      .spinner-grow-sm {
      width:1rem;
      height:1rem
     }
      .align-baseline {
      vertical-align:baseline!important
     }
      .align-top {
      vertical-align:top!important
     }
      .align-middle {
      vertical-align:middle!important
     }
      .align-bottom {
      vertical-align:bottom!important
     }
      .align-text-bottom {
      vertical-align:text-bottom!important
     }
      .align-text-top {
      vertical-align:text-top!important
     }
      .bg-primary {
      background-color:#2c84dd!important
     }
      a.bg-primary:focus,
      a.bg-primary:hover,
      button.bg-primary:focus,
      button.bg-primary:hover {
      background-color:#1e6bb8!important
     }
      .bg-secondary {
      background-color:#868e96!important
     }
      a.bg-secondary:focus,
      a.bg-secondary:hover,
      button.bg-secondary:focus,
      button.bg-secondary:hover {
      background-color:#6c757d!important
     }
      .bg-success {
      background-color:#77c13a!important
     }
      a.bg-success:focus,
      a.bg-success:hover,
      button.bg-success:focus,
      button.bg-success:hover {
      background-color:#5f9a2e!important
     }
      .bg-info {
      background-color:#17a2b8!important
     }
      a.bg-info:focus,
      a.bg-info:hover,
      button.bg-info:focus,
      button.bg-info:hover {
      background-color:#117a8b!important
     }
      .bg-warning {
      background-color:#f98437!important
     }
      a.bg-warning:focus,
      a.bg-warning:hover,
      button.bg-warning:focus,
      button.bg-warning:hover {
      background-color:#f66607!important
     }
      .bg-danger {
      background-color:#d9534f!important
     }
      a.bg-danger:focus,
      a.bg-danger:hover,
      button.bg-danger:focus,
      button.bg-danger:hover {
      background-color:#c9302c!important
     }

      a.bg-light:focus,
      a.bg-light:hover,
      button.bg-light:focus,
      button.bg-light:hover {
      background-color:#dae0e5!important
     }
      .bg-dark {
      background-color:#1d2126!important
     }
      a.bg-dark:focus,
      a.bg-dark:hover,
      button.bg-dark:focus,
      button.bg-dark:hover {
      background-color:#070809!important
     }
      .bg-accent {
      background-color:#ed0b4c!important
     }
      a.bg-accent:focus,
      a.bg-accent:hover,
      button.bg-accent:focus,
      button.bg-accent:hover {
      background-color:#bc093c!important
     }
      .bg-primary-light {
      background-color:#9cf!important
     }
      a.bg-primary-light:focus,
      a.bg-primary-light:hover,
      button.bg-primary-light:focus,
      button.bg-primary-light:hover {
      background-color:#66b3ff!important
     }
      .bg-transparent {
      background-color:transparent!important
     }
      .border-white {
      border-color:#fff!important
     }
      .rounded {
      border-radius:.25rem!important
     }
      .rounded-top {
      border-top-left-radius:.25rem!important
     }
      .rounded-right,
      .rounded-top {
      border-top-right-radius:.25rem!important
     }
      .rounded-bottom,
      .rounded-right {
      border-bottom-right-radius:.25rem!important
     }
      .rounded-bottom,
      .rounded-left {
      border-bottom-left-radius:.25rem!important
     }
      .rounded-left {
      border-top-left-radius:.25rem!important
     }
      .rounded-circle {
      border-radius:50%!important
     }
      .rounded-pill {
      border-radius:50rem!important
     }
      .rounded-0 {
      border-radius:0!important
     }
      .clearfix:after {
      display:block;
      clear:both;
      content:""
     }
      .d-none {
      display:none!important
     }
      .d-inline {
      display:inline!important
     }
      .d-inline-block {
      display:inline-block!important
     }
      .d-block {
      display:block!important
     }
      .d-table {
      display:table!important
     }
      .d-table-row {
      display:table-row!important
     }
      .d-table-cell {
      display:table-cell!important
     }
      .d-flex {
      display:flex!important
     }
      .d-inline-flex {
      display:inline-flex!important
     }
     @media (min-width:374px) {
       .d-i8-none {
       display:none!important
      }
       .d-i8-inline {
       display:inline!important
      }
       .d-i8-inline-block {
       display:inline-block!important
      }
       .d-i8-block {
       display:block!important
      }
       .d-i8-table {
       display:table!important
      }
       .d-i8-table-row {
       display:table-row!important
      }
       .d-i8-table-cell {
       display:table-cell!important
      }
       .d-i8-flex {
       display:flex!important
      }
       .d-i8-inline-flex {
       display:inline-flex!important
      }
     }
     @media (min-width:413px) {
       .d-i8-plus-none {
       display:none!important
      }
       .d-i8-plus-inline {
       display:inline!important
      }
       .d-i8-plus-inline-block {
       display:inline-block!important
      }
       .d-i8-plus-block {
       display:block!important
      }
       .d-i8-plus-table {
       display:table!important
      }
       .d-i8-plus-table-row {
       display:table-row!important
      }
       .d-i8-plus-table-cell {
       display:table-cell!important
      }
       .d-i8-plus-flex {
       display:flex!important
      }
       .d-i8-plus-inline-flex {
       display:inline-flex!important
      }
     }
     @media (min-width:576px) {
       .d-sm-none {
       display:none!important
      }
       .d-sm-inline {
       display:inline!important
      }
       .d-sm-inline-block {
       display:inline-block!important
      }
       .d-sm-block {
       display:block!important
      }
       .d-sm-table {
       display:table!important
      }
       .d-sm-table-row {
       display:table-row!important
      }
       .d-sm-table-cell {
       display:table-cell!important
      }
       .d-sm-flex {
       display:flex!important
      }
       .d-sm-inline-flex {
       display:inline-flex!important
      }
     }
     @media (min-width:768px) {
       .d-md-none {
       display:none!important
      }
       .d-md-inline {
       display:inline!important
      }
       .d-md-inline-block {
       display:inline-block!important
      }
       .d-md-block {
       display:block!important
      }
       .d-md-table {
       display:table!important
      }
       .d-md-table-row {
       display:table-row!important
      }
       .d-md-table-cell {
       display:table-cell!important
      }
       .d-md-flex {
       display:flex!important
      }
       .d-md-inline-flex {
       display:inline-flex!important
      }
     }
     @media (min-width:992px) {
       .d-lg-none {
       display:none!important
      }
       .d-lg-inline {
       display:inline!important
      }
       .d-lg-inline-block {
       display:inline-block!important
      }
       .d-lg-block {
       display:block!important
      }
       .d-lg-table {
       display:table!important
      }
       .d-lg-table-row {
       display:table-row!important
      }
       .d-lg-table-cell {
       display:table-cell!important
      }
       .d-lg-flex {
       display:flex!important
      }
       .d-lg-inline-flex {
       display:inline-flex!important
      }
     }
     @media (min-width:1200px) {
       .d-xl-none {
       display:none!important
      }
       .d-xl-inline {
       display:inline!important
      }
       .d-xl-inline-block {
       display:inline-block!important
      }
       .d-xl-block {
       display:block!important
      }
       .d-xl-table {
       display:table!important
      }
       .d-xl-table-row {
       display:table-row!important
      }
       .d-xl-table-cell {
       display:table-cell!important
      }
       .d-xl-flex {
       display:flex!important
      }
       .d-xl-inline-flex {
       display:inline-flex!important
      }
     }
     @media (min-width:1366px) {
       .d-xxl-none {
       display:none!important
      }
       .d-xxl-inline {
       display:inline!important
      }
       .d-xxl-inline-block {
       display:inline-block!important
      }
       .d-xxl-block {
       display:block!important
      }
       .d-xxl-table {
       display:table!important
      }
       .d-xxl-table-row {
       display:table-row!important
      }
       .d-xxl-table-cell {
       display:table-cell!important
      }
       .d-xxl-flex {
       display:flex!important
      }
       .d-xxl-inline-flex {
       display:inline-flex!important
      }
     }
     @media  print {
       .d-print-none {
       display:none!important
      }
       .d-print-inline {
       display:inline!important
      }
       .d-print-inline-block {
       display:inline-block!important
      }
       .d-print-block {
       display:block!important
      }
       .d-print-table {
       display:table!important
      }
       .d-print-table-row {
       display:table-row!important
      }
       .d-print-table-cell {
       display:table-cell!important
      }
       .d-print-flex {
       display:flex!important
      }
       .d-print-inline-flex {
       display:inline-flex!important
      }
     }
      .embed-responsive {
      position:relative;
      display:block;
      width:100%;
      padding:0;
      overflow:hidden
     }
      .embed-responsive:before {
      display:block;
      content:""
     }
      .embed-responsive .embed-responsive-item,
      .embed-responsive embed,
      .embed-responsive iframe,
      .embed-responsive object,
      .embed-responsive video {
      position:absolute;
      top:0;
      bottom:0;
      left:0;
      width:100%;
      height:100%;
      border:0
     }
      .embed-responsive-21by9:before {
      padding-top:42.8571428571%
     }
      .embed-responsive-16by9:before {
      padding-top:56.25%
     }
      .embed-responsive-3by4:before {
      padding-top:133.3333333333%
     }
      .embed-responsive-1by1:before {
      padding-top:100%
     }
      .flex-row {
      flex-direction:row!important
     }
      .flex-column {
      flex-direction:column!important
     }
      .flex-row-reverse {
      flex-direction:row-reverse!important
     }
      .flex-column-reverse {
      flex-direction:column-reverse!important
     }
      .flex-wrap {
      flex-wrap:wrap!important
     }
      .flex-nowrap {
      flex-wrap:nowrap!important
     }
      .flex-wrap-reverse {
      flex-wrap:wrap-reverse!important
     }
      .flex-fill {
      flex:1 1 auto!important
     }
      .flex-grow-0 {
      flex-grow:0!important
     }
      .flex-grow-1 {
      flex-grow:1!important
     }
      .flex-shrink-1 {
      flex-shrink:1!important
     }
      .justify-content-start {
      justify-content:flex-start!important
     }
      .justify-content-end {
      justify-content:flex-end!important
     }
      .justify-content-center {
      justify-content:center!important
     }
      .justify-content-between {
      justify-content:space-between!important
     }
      .justify-content-around {
      justify-content:space-around!important
     }
      .align-items-start {
      align-items:flex-start!important
     }
      .align-items-end {
      align-items:flex-end!important
     }
      .align-items-center {
      align-items:center!important
     }
      .align-items-baseline {
      align-items:baseline!important
     }
      .align-items-stretch {
      align-items:stretch!important
     }
      .align-content-start {
      align-content:flex-start!important
     }
      .align-content-end {
      align-content:flex-end!important
     }
      .align-content-center {
      align-content:center!important
     }
      .align-content-between {
      align-content:space-between!important
     }
      .align-content-around {
      align-content:space-around!important
     }
      .align-content-stretch {
      align-content:stretch!important
     }
      .align-self-auto {
      align-self:auto!important
     }
      .align-self-start {
      align-self:flex-start!important
     }
      .align-self-end {
      align-self:flex-end!important
     }
      .align-self-center {
      align-self:center!important
     }
      .align-self-baseline {
      align-self:baseline!important
     }
      .align-self-stretch {
      align-self:stretch!important
     }
     @media (min-width:374px) {
       .flex-i8-row {
       flex-direction:row!important
      }
       .flex-i8-column {
       flex-direction:column!important
      }
       .flex-i8-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-i8-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-i8-wrap {
       flex-wrap:wrap!important
      }
       .flex-i8-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-i8-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-i8-fill {
       flex:1 1 auto!important
      }
       .flex-i8-grow-0 {
       flex-grow:0!important
      }
       .flex-i8-grow-1 {
       flex-grow:1!important
      }
       .flex-i8-shrink-0 {
       flex-shrink:0!important
      }
       .flex-i8-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-i8-start {
       justify-content:flex-start!important
      }
       .justify-content-i8-end {
       justify-content:flex-end!important
      }
       .justify-content-i8-center {
       justify-content:center!important
      }
       .justify-content-i8-between {
       justify-content:space-between!important
      }
       .justify-content-i8-around {
       justify-content:space-around!important
      }
       .align-items-i8-start {
       align-items:flex-start!important
      }
       .align-items-i8-end {
       align-items:flex-end!important
      }
       .align-items-i8-center {
       align-items:center!important
      }
       .align-items-i8-baseline {
       align-items:baseline!important
      }
       .align-items-i8-stretch {
       align-items:stretch!important
      }
       .align-content-i8-start {
       align-content:flex-start!important
      }
       .align-content-i8-end {
       align-content:flex-end!important
      }
       .align-content-i8-center {
       align-content:center!important
      }
       .align-content-i8-between {
       align-content:space-between!important
      }
       .align-content-i8-around {
       align-content:space-around!important
      }
       .align-content-i8-stretch {
       align-content:stretch!important
      }
       .align-self-i8-auto {
       align-self:auto!important
      }
       .align-self-i8-start {
       align-self:flex-start!important
      }
       .align-self-i8-end {
       align-self:flex-end!important
      }
       .align-self-i8-center {
       align-self:center!important
      }
       .align-self-i8-baseline {
       align-self:baseline!important
      }
       .align-self-i8-stretch {
       align-self:stretch!important
      }
     }
     @media (min-width:413px) {
       .flex-i8-plus-row {
       flex-direction:row!important
      }
       .flex-i8-plus-column {
       flex-direction:column!important
      }
       .flex-i8-plus-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-i8-plus-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-i8-plus-wrap {
       flex-wrap:wrap!important
      }
       .flex-i8-plus-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-i8-plus-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-i8-plus-fill {
       flex:1 1 auto!important
      }
       .flex-i8-plus-grow-0 {
       flex-grow:0!important
      }
       .flex-i8-plus-grow-1 {
       flex-grow:1!important
      }
       .flex-i8-plus-shrink-0 {
       flex-shrink:0!important
      }
       .flex-i8-plus-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-i8-plus-start {
       justify-content:flex-start!important
      }
       .justify-content-i8-plus-end {
       justify-content:flex-end!important
      }
       .justify-content-i8-plus-center {
       justify-content:center!important
      }
       .justify-content-i8-plus-between {
       justify-content:space-between!important
      }
       .justify-content-i8-plus-around {
       justify-content:space-around!important
      }
       .align-items-i8-plus-start {
       align-items:flex-start!important
      }
       .align-items-i8-plus-end {
       align-items:flex-end!important
      }
       .align-items-i8-plus-center {
       align-items:center!important
      }
       .align-items-i8-plus-baseline {
       align-items:baseline!important
      }
       .align-items-i8-plus-stretch {
       align-items:stretch!important
      }
       .align-content-i8-plus-start {
       align-content:flex-start!important
      }
       .align-content-i8-plus-end {
       align-content:flex-end!important
      }
       .align-content-i8-plus-center {
       align-content:center!important
      }
       .align-content-i8-plus-between {
       align-content:space-between!important
      }
       .align-content-i8-plus-around {
       align-content:space-around!important
      }
       .align-content-i8-plus-stretch {
       align-content:stretch!important
      }
       .align-self-i8-plus-auto {
       align-self:auto!important
      }
       .align-self-i8-plus-start {
       align-self:flex-start!important
      }
       .align-self-i8-plus-end {
       align-self:flex-end!important
      }
       .align-self-i8-plus-center {
       align-self:center!important
      }
       .align-self-i8-plus-baseline {
       align-self:baseline!important
      }
       .align-self-i8-plus-stretch {
       align-self:stretch!important
      }
     }
     @media (min-width:576px) {
       .flex-sm-row {
       flex-direction:row!important
      }
       .flex-sm-column {
       flex-direction:column!important
      }
       .flex-sm-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-sm-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-sm-wrap {
       flex-wrap:wrap!important
      }
       .flex-sm-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-sm-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-sm-fill {
       flex:1 1 auto!important
      }
       .flex-sm-grow-0 {
       flex-grow:0!important
      }
       .flex-sm-grow-1 {
       flex-grow:1!important
      }
       .flex-sm-shrink-0 {
       flex-shrink:0!important
      }
       .flex-sm-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-sm-start {
       justify-content:flex-start!important
      }
       .justify-content-sm-end {
       justify-content:flex-end!important
      }
       .justify-content-sm-center {
       justify-content:center!important
      }
       .justify-content-sm-between {
       justify-content:space-between!important
      }
       .justify-content-sm-around {
       justify-content:space-around!important
      }
       .align-items-sm-start {
       align-items:flex-start!important
      }
       .align-items-sm-end {
       align-items:flex-end!important
      }
       .align-items-sm-center {
       align-items:center!important
      }
       .align-items-sm-baseline {
       align-items:baseline!important
      }
       .align-items-sm-stretch {
       align-items:stretch!important
      }
       .align-content-sm-start {
       align-content:flex-start!important
      }
       .align-content-sm-end {
       align-content:flex-end!important
      }
       .align-content-sm-center {
       align-content:center!important
      }
       .align-content-sm-between {
       align-content:space-between!important
      }
       .align-content-sm-around {
       align-content:space-around!important
      }
       .align-content-sm-stretch {
       align-content:stretch!important
      }
       .align-self-sm-auto {
       align-self:auto!important
      }
       .align-self-sm-start {
       align-self:flex-start!important
      }
       .align-self-sm-end {
       align-self:flex-end!important
      }
       .align-self-sm-center {
       align-self:center!important
      }
       .align-self-sm-baseline {
       align-self:baseline!important
      }
       .align-self-sm-stretch {
       align-self:stretch!important
      }
     }
     @media (min-width:768px) {
       .flex-md-row {
       flex-direction:row!important
      }
       .flex-md-column {
       flex-direction:column!important
      }
       .flex-md-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-md-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-md-wrap {
       flex-wrap:wrap!important
      }
       .flex-md-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-md-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-md-fill {
       flex:1 1 auto!important
      }
       .flex-md-grow-0 {
       flex-grow:0!important
      }
       .flex-md-grow-1 {
       flex-grow:1!important
      }
       .flex-md-shrink-0 {
       flex-shrink:0!important
      }
       .flex-md-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-md-start {
       justify-content:flex-start!important
      }
       .justify-content-md-end {
       justify-content:flex-end!important
      }
       .justify-content-md-center {
       justify-content:center!important
      }
       .justify-content-md-between {
       justify-content:space-between!important
      }
       .justify-content-md-around {
       justify-content:space-around!important
      }
       .align-items-md-start {
       align-items:flex-start!important
      }
       .align-items-md-end {
       align-items:flex-end!important
      }
       .align-items-md-center {
       align-items:center!important
      }
       .align-items-md-baseline {
       align-items:baseline!important
      }
       .align-items-md-stretch {
       align-items:stretch!important
      }
       .align-content-md-start {
       align-content:flex-start!important
      }
       .align-content-md-end {
       align-content:flex-end!important
      }
       .align-content-md-center {
       align-content:center!important
      }
       .align-content-md-between {
       align-content:space-between!important
      }
       .align-content-md-around {
       align-content:space-around!important
      }
       .align-content-md-stretch {
       align-content:stretch!important
      }
       .align-self-md-auto {
       align-self:auto!important
      }
       .align-self-md-start {
       align-self:flex-start!important
      }
       .align-self-md-end {
       align-self:flex-end!important
      }
       .align-self-md-center {
       align-self:center!important
      }
       .align-self-md-baseline {
       align-self:baseline!important
      }
       .align-self-md-stretch {
       align-self:stretch!important
      }
     }
     @media (min-width:992px) {
       .flex-lg-row {
       flex-direction:row!important
      }
       .flex-lg-column {
       flex-direction:column!important
      }
       .flex-lg-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-lg-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-lg-wrap {
       flex-wrap:wrap!important
      }
       .flex-lg-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-lg-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-lg-fill {
       flex:1 1 auto!important
      }
       .flex-lg-grow-0 {
       flex-grow:0!important
      }
       .flex-lg-grow-1 {
       flex-grow:1!important
      }
       .flex-lg-shrink-0 {
       flex-shrink:0!important
      }
       .flex-lg-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-lg-start {
       justify-content:flex-start!important
      }
       .justify-content-lg-end {
       justify-content:flex-end!important
      }
       .justify-content-lg-center {
       justify-content:center!important
      }
       .justify-content-lg-between {
       justify-content:space-between!important
      }
       .justify-content-lg-around {
       justify-content:space-around!important
      }
       .align-items-lg-start {
       align-items:flex-start!important
      }
       .align-items-lg-end {
       align-items:flex-end!important
      }
       .align-items-lg-center {
       align-items:center!important
      }
       .align-items-lg-baseline {
       align-items:baseline!important
      }
       .align-items-lg-stretch {
       align-items:stretch!important
      }
       .align-content-lg-start {
       align-content:flex-start!important
      }
       .align-content-lg-end {
       align-content:flex-end!important
      }
       .align-content-lg-center {
       align-content:center!important
      }
       .align-content-lg-between {
       align-content:space-between!important
      }
       .align-content-lg-around {
       align-content:space-around!important
      }
       .align-content-lg-stretch {
       align-content:stretch!important
      }
       .align-self-lg-auto {
       align-self:auto!important
      }
       .align-self-lg-start {
       align-self:flex-start!important
      }
       .align-self-lg-end {
       align-self:flex-end!important
      }
       .align-self-lg-center {
       align-self:center!important
      }
       .align-self-lg-baseline {
       align-self:baseline!important
      }
       .align-self-lg-stretch {
       align-self:stretch!important
      }
     }
     @media (min-width:1200px) {
       .flex-xl-row {
       flex-direction:row!important
      }
       .flex-xl-column {
       flex-direction:column!important
      }
       .flex-xl-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-xl-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-xl-wrap {
       flex-wrap:wrap!important
      }
       .flex-xl-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-xl-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-xl-fill {
       flex:1 1 auto!important
      }
       .flex-xl-grow-0 {
       flex-grow:0!important
      }
       .flex-xl-grow-1 {
       flex-grow:1!important
      }
       .flex-xl-shrink-0 {
       flex-shrink:0!important
      }
       .flex-xl-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-xl-start {
       justify-content:flex-start!important
      }
       .justify-content-xl-end {
       justify-content:flex-end!important
      }
       .justify-content-xl-center {
       justify-content:center!important
      }
       .justify-content-xl-between {
       justify-content:space-between!important
      }
       .justify-content-xl-around {
       justify-content:space-around!important
      }
       .align-items-xl-start {
       align-items:flex-start!important
      }
       .align-items-xl-end {
       align-items:flex-end!important
      }
       .align-items-xl-center {
       align-items:center!important
      }
       .align-items-xl-baseline {
       align-items:baseline!important
      }
       .align-items-xl-stretch {
       align-items:stretch!important
      }
       .align-content-xl-start {
       align-content:flex-start!important
      }
       .align-content-xl-end {
       align-content:flex-end!important
      }
       .align-content-xl-center {
       align-content:center!important
      }
       .align-content-xl-between {
       align-content:space-between!important
      }
       .align-content-xl-around {
       align-content:space-around!important
      }
       .align-content-xl-stretch {
       align-content:stretch!important
      }
       .align-self-xl-auto {
       align-self:auto!important
      }
       .align-self-xl-start {
       align-self:flex-start!important
      }
       .align-self-xl-end {
       align-self:flex-end!important
      }
       .align-self-xl-center {
       align-self:center!important
      }
       .align-self-xl-baseline {
       align-self:baseline!important
      }
       .align-self-xl-stretch {
       align-self:stretch!important
      }
     }
     @media (min-width:1366px) {
       .flex-xxl-row {
       flex-direction:row!important
      }
       .flex-xxl-column {
       flex-direction:column!important
      }
       .flex-xxl-row-reverse {
       flex-direction:row-reverse!important
      }
       .flex-xxl-column-reverse {
       flex-direction:column-reverse!important
      }
       .flex-xxl-wrap {
       flex-wrap:wrap!important
      }
       .flex-xxl-nowrap {
       flex-wrap:nowrap!important
      }
       .flex-xxl-wrap-reverse {
       flex-wrap:wrap-reverse!important
      }
       .flex-xxl-fill {
       flex:1 1 auto!important
      }
       .flex-xxl-grow-0 {
       flex-grow:0!important
      }
       .flex-xxl-grow-1 {
       flex-grow:1!important
      }
       .flex-xxl-shrink-0 {
       flex-shrink:0!important
      }
       .flex-xxl-shrink-1 {
       flex-shrink:1!important
      }
       .justify-content-xxl-start {
       justify-content:flex-start!important
      }
       .justify-content-xxl-end {
       justify-content:flex-end!important
      }
       .justify-content-xxl-center {
       justify-content:center!important
      }
       .justify-content-xxl-between {
       justify-content:space-between!important
      }
       .justify-content-xxl-around {
       justify-content:space-around!important
      }
       .align-items-xxl-start {
       align-items:flex-start!important
      }
       .align-items-xxl-end {
       align-items:flex-end!important
      }
       .align-items-xxl-center {
       align-items:center!important
      }
       .align-items-xxl-baseline {
       align-items:baseline!important
      }
       .align-items-xxl-stretch {
       align-items:stretch!important
      }
       .align-content-xxl-start {
       align-content:flex-start!important
      }
       .align-content-xxl-end {
       align-content:flex-end!important
      }
       .align-content-xxl-center {
       align-content:center!important
      }
       .align-content-xxl-between {
       align-content:space-between!important
      }
       .align-content-xxl-around {
       align-content:space-around!important
      }
       .align-content-xxl-stretch {
       align-content:stretch!important
      }
       .align-self-xxl-auto {
       align-self:auto!important
      }
       .align-self-xxl-start {
       align-self:flex-start!important
      }
       .align-self-xxl-end {
       align-self:flex-end!important
      }
       .align-self-xxl-center {
       align-self:center!important
      }
       .align-self-xxl-baseline {
       align-self:baseline!important
      }
       .align-self-xxl-stretch {
       align-self:stretch!important
      }
     }
      .float-left {
      float:left!important
     }
      .float-right {
      float:right!important
     }
      .float-none {
      float:none!important
     }
     @media (min-width:374px) {
       .float-i8-left {
       float:left!important
      }
       .float-i8-right {
       float:right!important
      }
       .float-i8-none {
       float:none!important
      }
     }
     @media (min-width:413px) {
       .float-i8-plus-left {
       float:left!important
      }
       .float-i8-plus-right {
       float:right!important
      }
       .float-i8-plus-none {
       float:none!important
      }
     }
     @media (min-width:576px) {
       .float-sm-left {
       float:left!important
      }
       .float-sm-right {
       float:right!important
      }
       .float-sm-none {
       float:none!important
      }
     }
     @media (min-width:768px) {
       .float-md-left {
       float:left!important
      }
       .float-md-right {
       float:right!important
      }
       .float-md-none {
       float:none!important
      }
     }
     @media (min-width:992px) {
       .float-lg-left {
       float:left!important
      }
       .float-lg-right {
       float:right!important
      }
       .float-lg-none {
       float:none!important
      }
     }
     @media (min-width:1200px) {
       .float-xl-left {
       float:left!important
      }
       .float-xl-right {
       float:right!important
      }
       .float-xl-none {
       float:none!important
      }
     }
     @media (min-width:1366px) {
       .float-xxl-left {
       float:left!important
      }
       .float-xxl-right {
       float:right!important
      }
       .float-xxl-none {
       float:none!important
      }
     }
      .overflow-auto {
      overflow:auto!important
     }
      .overflow-hidden {
      overflow:hidden!important
     }
      .position-static {
      position:static!important
     }
      .position-relative {
      position:relative!important
     }
      .position-absolute {
      position:absolute!important
     }
      .position-fixed {
      position:fixed!important
     }
      .position-sticky {
      position:-webkit-sticky!important;
      position:sticky!important
     }
      .fixed-top {
      top:0
     }
      .fixed-bottom,
      .fixed-top {
      position:fixed;
      right:0;
      left:0;
      z-index:1030
     }
      .fixed-bottom {
      bottom:0
     }
     @supports ((position:-webkit-sticky) or (position:sticky)) {
       .sticky-top {
       position:-webkit-sticky;
       position:sticky;
       top:0;
       z-index:1020
      }
     }
      .sr-only {
      position:absolute;
      width:1px;
      height:1px;
      padding:0;
      overflow:hidden;
      clip:rect(0,0,0,0);
      white-space:nowrap;
      border:0
     }
      .sr-only-focusable:active,
      .sr-only-focusable:focus {
      position:static;
      width:auto;
      height:auto;
      overflow:visible;
      clip:auto;
      white-space:normal
     }
      .shadow-sm {
      box-shadow:0 .125rem .25rem rgba(48,56,64,.075)!important
     }
      .shadow {
      box-shadow:0 .5rem 1rem rgba(48,56,64,.15)!important
     }
      .shadow-lg {
      box-shadow:0 1rem 3rem rgba(48,56,64,.175)!important
     }
      .shadow-none {
      box-shadow:none!important
     }
      .mw-100 {
      max-width:100%!important
     }
      .mh-100 {
      max-height:100%!important
     }
      .min-vw-100 {
      min-width:100vw!important
     }
      .min-vh-100 {
      min-height:100vh!important
     }
      .vw-100 {
      width:100vw!important
     }
      .vh-100 {
      height:100vh!important
     }
      .m-0 {
      margin:0!important
     }
      .mt-0,
      .my-0 {
      margin-top:0!important
     }
      .mr-0,
      .mx-0 {
      margin-right:0!important
     }
      .mb-0,
      .my-0 {
      margin-bottom:0!important
     }
      .ml-0,
      .mx-0 {
      margin-left:0!important
     }
      .m-1 {
      margin:.25rem!important
     }
      .mt-1,
      .my-1 {
      margin-top:.25rem!important
     }
      .mr-1,
      .mx-1 {
      margin-right:.25rem!important
     }
      .mb-1,
      .my-1 {
      margin-bottom:.25rem!important
     }
      .ml-1,
      .mx-1 {
      margin-left:.25rem!important
     }
      .m-2 {
      margin:.5rem!important
     }
      .mt-2,
      .my-2 {
      margin-top:.5rem!important
     }
      .mr-2,
      .mx-2 {
      margin-right:.5rem!important
     }
      .mb-2,
      .my-2 {
      margin-bottom:.5rem!important
     }
      .ml-2,
      .mx-2 {
      margin-left:.5rem!important
     }
      .m-3 {
      margin:1rem!important
     }
      .mt-3,
      .my-3 {
      margin-top:1rem!important
     }
      .mr-3,
      .mx-3 {
      margin-right:1rem!important
     }
      .mb-3,
      .my-3 {
      margin-bottom:1rem!important
     }
      .ml-3,
      .mx-3 {
      margin-left:1rem!important
     }
      .m-4 {
      margin:1.5rem!important
     }
      .mt-4,
      .my-4 {
      margin-top:1.5rem!important
     }
      .mr-4,
      .mx-4 {
      margin-right:1.5rem!important
     }
      .mb-4,
      .my-4 {
      margin-bottom:1.5rem!important
     }
      .ml-4,
      .mx-4 {
      margin-left:1.5rem!important
     }
      .m-5 {
      margin:3rem!important
     }
      .mt-5,
      .my-5 {
      margin-top:3rem!important
     }
      .mr-5,
      .mx-5 {
      margin-right:3rem!important
     }
      .mb-5,
      .my-5 {
      margin-bottom:3rem!important
     }
      .ml-5,
      .mx-5 {
      margin-left:3rem!important
     }
      .m-4pt {
      margin:.25rem!important
     }
      .mt-4pt,
      .my-4pt {
      margin-top:.25rem!important
     }
      .mr-4pt,
      .mx-4pt {
      margin-right:.25rem!important
     }
      .mb-4pt,
      .my-4pt {
      margin-bottom:.25rem!important
     }
      .ml-4pt,
      .mx-4pt {
      margin-left:.25rem!important
     }
      .m-8pt {
      margin:.5rem!important
     }
      .mt-8pt,
      .my-8pt {
      margin-top:.5rem!important
     }
      .mr-8pt,
      .mx-8pt {
      margin-right:.5rem!important
     }
      .mb-8pt,
      .my-8pt {
      margin-bottom:.5rem!important
     }
      .ml-8pt,
      .mx-8pt {
      margin-left:.5rem!important
     }
      .m-12pt {
      margin:.75rem!important
     }
      .mt-12pt,
      .my-12pt {
      margin-top:.75rem!important
     }
      .mr-12pt,
      .mx-12pt {
      margin-right:.75rem!important
     }
      .mb-12pt,
      .my-12pt {
      margin-bottom:.75rem!important
     }
      .ml-12pt,
      .mx-12pt {
      margin-left:.75rem!important
     }
      .m-16pt {
      margin:1rem!important
     }
      .mt-16pt,
      .my-16pt {
      margin-top:1rem!important
     }
      .mr-16pt,
      .mx-16pt {
      margin-right:1rem!important
     }
      .mb-16pt,
      .my-16pt {
      margin-bottom:1rem!important
     }
      .ml-16pt,
      .mx-16pt {
      margin-left:1rem!important
     }
      .m-20pt {
      margin:1.25rem!important
     }
      .mt-20pt,
      .my-20pt {
      margin-top:1.25rem!important
     }
      .mr-20pt,
      .mx-20pt {
      margin-right:1.25rem!important
     }
      .mb-20pt,
      .my-20pt {
      margin-bottom:1.25rem!important
     }
      .ml-20pt,
      .mx-20pt {
      margin-left:1.25rem!important
     }
      .m-24pt {
      margin:1.5rem!important
     }
      .mt-24pt,
      .my-24pt {
      margin-top:1.5rem!important
     }
      .mr-24pt,
      .mx-24pt {
      margin-right:1.5rem!important
     }
      .mb-24pt,
      .my-24pt {
      margin-bottom:1.5rem!important
     }
      .ml-24pt,
      .mx-24pt {
      margin-left:1.5rem!important
     }
      .m-32pt {
      margin:2rem!important
     }
      .mt-32pt,
      .my-32pt {
      margin-top:2rem!important
     }
      .mr-32pt,
      .mx-32pt {
      margin-right:2rem!important
     }
      .mb-32pt,
      .my-32pt {
      margin-bottom:2rem!important
     }
      .ml-32pt,
      .mx-32pt {
      margin-left:2rem!important
     }
      .m-40pt {
      margin:2.5rem!important
     }
      .mt-40pt,
      .my-40pt {
      margin-top:2.5rem!important
     }
      .mr-40pt,
      .mx-40pt {
      margin-right:2.5rem!important
     }
      .mb-40pt,
      .my-40pt {
      margin-bottom:2.5rem!important
     }
      .ml-40pt,
      .mx-40pt {
      margin-left:2.5rem!important
     }
      .m-44pt {
      margin:2.75rem!important
     }
      .mt-44pt,
      .my-44pt {
      margin-top:2.75rem!important
     }
      .mr-44pt,
      .mx-44pt {
      margin-right:2.75rem!important
     }
      .mb-44pt,
      .my-44pt {
      margin-bottom:2.75rem!important
     }
      .ml-44pt,
      .mx-44pt {
      margin-left:2.75rem!important
     }
      .m-48pt {
      margin:3rem!important
     }
      .mt-48pt,
      .my-48pt {
      margin-top:3rem!important
     }
      .mr-48pt,
      .mx-48pt {
      margin-right:3rem!important
     }
      .mb-48pt,
      .my-48pt {
      margin-bottom:3rem!important
     }
      .ml-48pt,
      .mx-48pt {
      margin-left:3rem!important
     }
      .m-64pt {
      margin:4rem!important
     }
      .mt-64pt,
      .my-64pt {
      margin-top:4rem!important
     }
      .mr-64pt,
      .mx-64pt {
      margin-right:4rem!important
     }
      .mb-64pt,
      .my-64pt {
      margin-bottom:4rem!important
     }
      .ml-64pt,
      .mx-64pt {
      margin-left:4rem!important
     }
      .m-112pt {
      margin:7rem!important
     }
      .mt-112pt,
      .my-112pt {
      margin-top:7rem!important
     }
      .mr-112pt,
      .mx-112pt {
      margin-right:7rem!important
     }
      .mb-112pt,
      .my-112pt {
      margin-bottom:7rem!important
     }
      .ml-112pt,
      .mx-112pt {
      margin-left:7rem!important
     }
      .m-128pt {
      margin:8rem!important
     }
      .mt-128pt,
      .my-128pt {
      margin-top:8rem!important
     }
      .mr-128pt,
      .mx-128pt {
      margin-right:8rem!important
     }
      .mb-128pt,
      .my-128pt {
      margin-bottom:8rem!important
     }
      .ml-128pt,
      .mx-128pt {
      margin-left:8rem!important
     }
      .p-0 {
      padding:0!important
     }
      .pt-0,
      .py-0 {
      padding-top:0!important
     }
      .pr-0,
      .px-0 {
      padding-right:0!important
     }
      .pb-0,
      .py-0 {
      padding-bottom:0!important
     }
      .pl-0,
      .px-0 {
      padding-left:0!important
     }
      .p-1 {
      padding:.25rem!important
     }
      .pt-1,
      .py-1 {
      padding-top:.25rem!important
     }
      .pr-1,
      .px-1 {
      padding-right:.25rem!important
     }
      .pb-1,
      .py-1 {
      padding-bottom:.25rem!important
     }
      .pl-1,
      .px-1 {
      padding-left:.25rem!important
     }
      .p-2 {
      padding:.5rem!important
     }
      .pt-2,
      .py-2 {
      padding-top:.5rem!important
     }
      .pr-2,
      .px-2 {
      padding-right:.5rem!important
     }
      .pb-2,
      .py-2 {
      padding-bottom:.5rem!important
     }
      .pl-2,
      .px-2 {
      padding-left:.5rem!important
     }
      .p-3 {
      padding:1rem!important
     }
      .pt-3,
      .py-3 {
      padding-top:1rem!important
     }
      .pr-3,
      .px-3 {
      padding-right:1rem!important
     }
      .pb-3,
      .py-3 {
      padding-bottom:1rem!important
     }
      .pl-3,
      .px-3 {
      padding-left:1rem!important
     }
      .p-4 {
      padding:1.5rem!important
     }
      .pt-4,
      .py-4 {
      padding-top:1.5rem!important
     }
      .pr-4,
      .px-4 {
      padding-right:1.5rem!important
     }
      .pb-4,
      .py-4 {
      padding-bottom:1.5rem!important
     }
      .pl-4,
      .px-4 {
      padding-left:1.5rem!important
     }
      .p-5 {
      padding:3rem!important
     }
      .pt-5,
      .py-5 {
      padding-top:3rem!important
     }
      .pr-5,
      .px-5 {
      padding-right:3rem!important
     }
      .pb-5,
      .py-5 {
      padding-bottom:3rem!important
     }
      .pl-5,
      .px-5 {
      padding-left:3rem!important
     }
      .p-4pt {
      padding:.25rem!important
     }
      .pt-4pt,
      .py-4pt {
      padding-top:.25rem!important
     }
      .pr-4pt,
      .px-4pt {
      padding-right:.25rem!important
     }
      .pb-4pt,
      .py-4pt {
      padding-bottom:.25rem!important
     }
      .pl-4pt,
      .px-4pt {
      padding-left:.25rem!important
     }
      .p-8pt {
      padding:.5rem!important
     }
      .pt-8pt,
      .py-8pt {
      padding-top:.5rem!important
     }
      .pr-8pt,
      .px-8pt {
      padding-right:.5rem!important
     }
      .pb-8pt,
      .py-8pt {
      padding-bottom:.5rem!important
     }
      .pl-8pt,
      .px-8pt {
      padding-left:.5rem!important
     }
      .p-12pt {
      padding:.75rem!important
     }
      .pt-12pt,
      .py-12pt {
      padding-top:.75rem!important
     }
      .pr-12pt,
      .px-12pt {
      padding-right:.75rem!important
     }
      .pb-12pt,
      .py-12pt {
      padding-bottom:.75rem!important
     }
      .pl-12pt,
      .px-12pt {
      padding-left:.75rem!important
     }
      .p-16pt {
      padding:1rem!important
     }
      .pt-16pt,
      .py-16pt {
      padding-top:1rem!important
     }
      .pr-16pt,
      .px-16pt {
      padding-right:1rem!important
     }
      .pb-16pt,
      .py-16pt {
      padding-bottom:1rem!important
     }
      .pl-16pt,
      .px-16pt {
      padding-left:1rem!important
     }
      .p-20pt {
      padding:1.25rem!important
     }
      .pt-20pt,
      .py-20pt {
      padding-top:1.25rem!important
     }
      .pr-20pt,
      .px-20pt {
      padding-right:1.25rem!important
     }
      .pb-20pt,
      .py-20pt {
      padding-bottom:1.25rem!important
     }
      .pl-20pt,
      .px-20pt {
      padding-left:1.25rem!important
     }
      .p-24pt {
      padding:1.5rem!important
     }
      .pt-24pt,
      .py-24pt {
      padding-top:1.5rem!important
     }
      .pr-24pt,
      .px-24pt {
      padding-right:1.5rem!important
     }
      .pb-24pt,
      .py-24pt {
      padding-bottom:1.5rem!important
     }
      .pl-24pt,
      .px-24pt {
      padding-left:1.5rem!important
     }
      .p-32pt {
      padding:2rem!important
     }
      .pt-32pt,
      .py-32pt {
      padding-top:2rem!important
     }
      .pr-32pt,
      .px-32pt {
      padding-right:2rem!important
     }
      .pb-32pt,
      .py-32pt {
      padding-bottom:2rem!important
     }
      .pl-32pt,
      .px-32pt {
      padding-left:2rem!important
     }
      .p-40pt {
      padding:2.5rem!important
     }
      .pt-40pt,
      .py-40pt {
      padding-top:2.5rem!important
     }
      .pr-40pt,
      .px-40pt {
      padding-right:2.5rem!important
     }
      .pb-40pt,
      .py-40pt {
      padding-bottom:2.5rem!important
     }
      .pl-40pt,
      .px-40pt {
      padding-left:2.5rem!important
     }
      .p-44pt {
      padding:2.75rem!important
     }
      .pt-44pt,
      .py-44pt {
      padding-top:2.75rem!important
     }
      .pr-44pt,
      .px-44pt {
      padding-right:2.75rem!important
     }
      .pb-44pt,
      .py-44pt {
      padding-bottom:2.75rem!important
     }
      .pl-44pt,
      .px-44pt {
      padding-left:2.75rem!important
     }
      .p-48pt {
      padding:3rem!important
     }
      .pt-48pt,
      .py-48pt {
      padding-top:3rem!important
     }
      .pr-48pt,
      .px-48pt {
      padding-right:3rem!important
     }
      .pb-48pt,
      .py-48pt {
      padding-bottom:3rem!important
     }
      .pl-48pt,
      .px-48pt {
      padding-left:3rem!important
     }
      .p-64pt {
      padding:4rem!important
     }
      .pt-64pt,
      .py-64pt {
      padding-top:4rem!important
     }
      .pr-64pt,
      .px-64pt {
      padding-right:4rem!important
     }
      .pb-64pt,
      .py-64pt {
      padding-bottom:4rem!important
     }
      .pl-64pt,
      .px-64pt {
      padding-left:4rem!important
     }
      .p-112pt {
      padding:7rem!important
     }
      .pt-112pt,
      .py-112pt {
      padding-top:7rem!important
     }
      .pr-112pt,
      .px-112pt {
      padding-right:7rem!important
     }
      .pb-112pt,
      .py-112pt {
      padding-bottom:7rem!important
     }
      .pl-112pt,
      .px-112pt {
      padding-left:7rem!important
     }
      .p-128pt {
      padding:8rem!important
     }
      .pt-128pt,
      .py-128pt {
      padding-top:8rem!important
     }
      .pr-128pt,
      .px-128pt {
      padding-right:8rem!important
     }
      .pb-128pt,
      .py-128pt {
      padding-bottom:8rem!important
     }
      .pl-128pt,
      .px-128pt {
      padding-left:8rem!important
     }
      .m-n1 {
      margin:-.25rem!important
     }
      .mt-n1,
      .my-n1 {
      margin-top:-.25rem!important
     }
      .mr-n1,
      .mx-n1 {
      margin-right:-.25rem!important
     }
      .mb-n1,
      .my-n1 {
      margin-bottom:-.25rem!important
     }
      .ml-n1,
      .mx-n1 {
      margin-left:-.25rem!important
     }
      .m-n2 {
      margin:-.5rem!important
     }
      .mt-n2,
      .my-n2 {
      margin-top:-.5rem!important
     }
      .mr-n2,
      .mx-n2 {
      margin-right:-.5rem!important
     }
      .mb-n2,
      .my-n2 {
      margin-bottom:-.5rem!important
     }
      .ml-n2,
      .mx-n2 {
      margin-left:-.5rem!important
     }
      .m-n3 {
      margin:-1rem!important
     }
      .mt-n3,
      .my-n3 {
      margin-top:-1rem!important
     }
      .mr-n3,
      .mx-n3 {
      margin-right:-1rem!important
     }
      .mb-n3,
      .my-n3 {
      margin-bottom:-1rem!important
     }
      .ml-n3,
      .mx-n3 {
      margin-left:-1rem!important
     }
      .m-n4 {
      margin:-1.5rem!important
     }
      .mt-n4,
      .my-n4 {
      margin-top:-1.5rem!important
     }
      .mr-n4,
      .mx-n4 {
      margin-right:-1.5rem!important
     }
      .mb-n4,
      .my-n4 {
      margin-bottom:-1.5rem!important
     }
      .ml-n4,
      .mx-n4 {
      margin-left:-1.5rem!important
     }
      .m-n5 {
      margin:-3rem!important
     }
      .mt-n5,
      .my-n5 {
      margin-top:-3rem!important
     }
      .mr-n5,
      .mx-n5 {
      margin-right:-3rem!important
     }
      .mb-n5,
      .my-n5 {
      margin-bottom:-3rem!important
     }
      .ml-n5,
      .mx-n5 {
      margin-left:-3rem!important
     }
      .m-n4pt {
      margin:-.25rem!important
     }
      .mt-n4pt,
      .my-n4pt {
      margin-top:-.25rem!important
     }
      .mr-n4pt,
      .mx-n4pt {
      margin-right:-.25rem!important
     }
      .mb-n4pt,
      .my-n4pt {
      margin-bottom:-.25rem!important
     }
      .ml-n4pt,
      .mx-n4pt {
      margin-left:-.25rem!important
     }
      .m-n8pt {
      margin:-.5rem!important
     }
      .mt-n8pt,
      .my-n8pt {
      margin-top:-.5rem!important
     }
      .mr-n8pt,
      .mx-n8pt {
      margin-right:-.5rem!important
     }
      .mb-n8pt,
      .my-n8pt {
      margin-bottom:-.5rem!important
     }
      .ml-n8pt,
      .mx-n8pt {
      margin-left:-.5rem!important
     }
      .m-n12pt {
      margin:-.75rem!important
     }
      .mt-n12pt,
      .my-n12pt {
      margin-top:-.75rem!important
     }
      .mr-n12pt,
      .mx-n12pt {
      margin-right:-.75rem!important
     }
      .mb-n12pt,
      .my-n12pt {
      margin-bottom:-.75rem!important
     }
      .ml-n12pt,
      .mx-n12pt {
      margin-left:-.75rem!important
     }
      .m-n16pt {
      margin:-1rem!important
     }
      .mt-n16pt,
      .my-n16pt {
      margin-top:-1rem!important
     }
      .mr-n16pt,
      .mx-n16pt {
      margin-right:-1rem!important
     }
      .mb-n16pt,
      .my-n16pt {
      margin-bottom:-1rem!important
     }
      .ml-n16pt,
      .mx-n16pt {
      margin-left:-1rem!important
     }
      .m-n20pt {
      margin:-1.25rem!important
     }
      .mt-n20pt,
      .my-n20pt {
      margin-top:-1.25rem!important
     }
      .mr-n20pt,
      .mx-n20pt {
      margin-right:-1.25rem!important
     }
      .mb-n20pt,
      .my-n20pt {
      margin-bottom:-1.25rem!important
     }
      .ml-n20pt,
      .mx-n20pt {
      margin-left:-1.25rem!important
     }
      .m-n24pt {
      margin:-1.5rem!important
     }
      .mt-n24pt,
      .my-n24pt {
      margin-top:-1.5rem!important
     }
      .mr-n24pt,
      .mx-n24pt {
      margin-right:-1.5rem!important
     }
      .mb-n24pt,
      .my-n24pt {
      margin-bottom:-1.5rem!important
     }
      .ml-n24pt,
      .mx-n24pt {
      margin-left:-1.5rem!important
     }
      .m-n32pt {
      margin:-2rem!important
     }
      .mt-n32pt,
      .my-n32pt {
      margin-top:-2rem!important
     }
      .mr-n32pt,
      .mx-n32pt {
      margin-right:-2rem!important
     }
      .mb-n32pt,
      .my-n32pt {
      margin-bottom:-2rem!important
     }
      .ml-n32pt,
      .mx-n32pt {
      margin-left:-2rem!important
     }
      .m-n40pt {
      margin:-2.5rem!important
     }
      .mt-n40pt,
      .my-n40pt {
      margin-top:-2.5rem!important
     }
      .mr-n40pt,
      .mx-n40pt {
      margin-right:-2.5rem!important
     }
      .mb-n40pt,
      .my-n40pt {
      margin-bottom:-2.5rem!important
     }
      .ml-n40pt,
      .mx-n40pt {
      margin-left:-2.5rem!important
     }
      .m-n44pt {
      margin:-2.75rem!important
     }
      .mt-n44pt,
      .my-n44pt {
      margin-top:-2.75rem!important
     }
      .mr-n44pt,
      .mx-n44pt {
      margin-right:-2.75rem!important
     }
      .mb-n44pt,
      .my-n44pt {
      margin-bottom:-2.75rem!important
     }
      .ml-n44pt,
      .mx-n44pt {
      margin-left:-2.75rem!important
     }
      .m-n48pt {
      margin:-3rem!important
     }
      .mt-n48pt,
      .my-n48pt {
      margin-top:-3rem!important
     }
      .mr-n48pt,
      .mx-n48pt {
      margin-right:-3rem!important
     }
      .mb-n48pt,
      .my-n48pt {
      margin-bottom:-3rem!important
     }
      .ml-n48pt,
      .mx-n48pt {
      margin-left:-3rem!important
     }
      .m-n64pt {
      margin:-4rem!important
     }
      .mt-n64pt,
      .my-n64pt {
      margin-top:-4rem!important
     }
      .mr-n64pt,
      .mx-n64pt {
      margin-right:-4rem!important
     }
      .mb-n64pt,
      .my-n64pt {
      margin-bottom:-4rem!important
     }
      .ml-n64pt,
      .mx-n64pt {
      margin-left:-4rem!important
     }
      .m-n112pt {
      margin:-7rem!important
     }
      .mt-n112pt,
      .my-n112pt {
      margin-top:-7rem!important
     }
      .mr-n112pt,
      .mx-n112pt {
      margin-right:-7rem!important
     }
      .mb-n112pt,
      .my-n112pt {
      margin-bottom:-7rem!important
     }
      .ml-n112pt,
      .mx-n112pt {
      margin-left:-7rem!important
     }
      .m-n128pt {
      margin:-8rem!important
     }
      .mt-n128pt,
      .my-n128pt {
      margin-top:-8rem!important
     }
      .mr-n128pt,
      .mx-n128pt {
      margin-right:-8rem!important
     }
      .mb-n128pt,
      .my-n128pt {
      margin-bottom:-8rem!important
     }
      .ml-n128pt,
      .mx-n128pt {
      margin-left:-8rem!important
     }
      .m-auto {
      margin:auto!important
     }
      .mt-auto,
      .my-auto {
      margin-top:auto!important
     }
      .mr-auto,
      .mx-auto {
      margin-right:auto!important
     }
      .mb-auto,
      .my-auto {
      margin-bottom:auto!important
     }
      .ml-auto,
      .mx-auto {
      margin-left:auto!important
     }
     @media (min-width:374px) {
       .m-i8-0 {
       margin:0!important
      }
       .mt-i8-0,
       .my-i8-0 {
       margin-top:0!important
      }
       .mr-i8-0,
       .mx-i8-0 {
       margin-right:0!important
      }
       .mb-i8-0,
       .my-i8-0 {
       margin-bottom:0!important
      }
       .ml-i8-0,
       .mx-i8-0 {
       margin-left:0!important
      }
       .m-i8-1 {
       margin:.25rem!important
      }
       .mt-i8-1,
       .my-i8-1 {
       margin-top:.25rem!important
      }
       .mr-i8-1,
       .mx-i8-1 {
       margin-right:.25rem!important
      }
       .mb-i8-1,
       .my-i8-1 {
       margin-bottom:.25rem!important
      }
       .ml-i8-1,
       .mx-i8-1 {
       margin-left:.25rem!important
      }
       .m-i8-2 {
       margin:.5rem!important
      }
       .mt-i8-2,
       .my-i8-2 {
       margin-top:.5rem!important
      }
       .mr-i8-2,
       .mx-i8-2 {
       margin-right:.5rem!important
      }
       .mb-i8-2,
       .my-i8-2 {
       margin-bottom:.5rem!important
      }
       .ml-i8-2,
       .mx-i8-2 {
       margin-left:.5rem!important
      }
       .m-i8-3 {
       margin:1rem!important
      }
       .mt-i8-3,
       .my-i8-3 {
       margin-top:1rem!important
      }
       .mr-i8-3,
       .mx-i8-3 {
       margin-right:1rem!important
      }
       .mb-i8-3,
       .my-i8-3 {
       margin-bottom:1rem!important
      }
       .ml-i8-3,
       .mx-i8-3 {
       margin-left:1rem!important
      }
       .m-i8-4 {
       margin:1.5rem!important
      }
       .mt-i8-4,
       .my-i8-4 {
       margin-top:1.5rem!important
      }
       .mr-i8-4,
       .mx-i8-4 {
       margin-right:1.5rem!important
      }
       .mb-i8-4,
       .my-i8-4 {
       margin-bottom:1.5rem!important
      }
       .ml-i8-4,
       .mx-i8-4 {
       margin-left:1.5rem!important
      }
       .m-i8-5 {
       margin:3rem!important
      }
       .mt-i8-5,
       .my-i8-5 {
       margin-top:3rem!important
      }
       .mr-i8-5,
       .mx-i8-5 {
       margin-right:3rem!important
      }
       .mb-i8-5,
       .my-i8-5 {
       margin-bottom:3rem!important
      }
       .ml-i8-5,
       .mx-i8-5 {
       margin-left:3rem!important
      }
       .m-i8-4pt {
       margin:.25rem!important
      }
       .mt-i8-4pt,
       .my-i8-4pt {
       margin-top:.25rem!important
      }
       .mr-i8-4pt,
       .mx-i8-4pt {
       margin-right:.25rem!important
      }
       .mb-i8-4pt,
       .my-i8-4pt {
       margin-bottom:.25rem!important
      }
       .ml-i8-4pt,
       .mx-i8-4pt {
       margin-left:.25rem!important
      }
       .m-i8-8pt {
       margin:.5rem!important
      }
       .mt-i8-8pt,
       .my-i8-8pt {
       margin-top:.5rem!important
      }
       .mr-i8-8pt,
       .mx-i8-8pt {
       margin-right:.5rem!important
      }
       .mb-i8-8pt,
       .my-i8-8pt {
       margin-bottom:.5rem!important
      }
       .ml-i8-8pt,
       .mx-i8-8pt {
       margin-left:.5rem!important
      }
       .m-i8-12pt {
       margin:.75rem!important
      }
       .mt-i8-12pt,
       .my-i8-12pt {
       margin-top:.75rem!important
      }
       .mr-i8-12pt,
       .mx-i8-12pt {
       margin-right:.75rem!important
      }
       .mb-i8-12pt,
       .my-i8-12pt {
       margin-bottom:.75rem!important
      }
       .ml-i8-12pt,
       .mx-i8-12pt {
       margin-left:.75rem!important
      }
       .m-i8-16pt {
       margin:1rem!important
      }
       .mt-i8-16pt,
       .my-i8-16pt {
       margin-top:1rem!important
      }
       .mr-i8-16pt,
       .mx-i8-16pt {
       margin-right:1rem!important
      }
       .mb-i8-16pt,
       .my-i8-16pt {
       margin-bottom:1rem!important
      }
       .ml-i8-16pt,
       .mx-i8-16pt {
       margin-left:1rem!important
      }
       .m-i8-20pt {
       margin:1.25rem!important
      }
       .mt-i8-20pt,
       .my-i8-20pt {
       margin-top:1.25rem!important
      }
       .mr-i8-20pt,
       .mx-i8-20pt {
       margin-right:1.25rem!important
      }
       .mb-i8-20pt,
       .my-i8-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-i8-20pt,
       .mx-i8-20pt {
       margin-left:1.25rem!important
      }
       .m-i8-24pt {
       margin:1.5rem!important
      }
       .mt-i8-24pt,
       .my-i8-24pt {
       margin-top:1.5rem!important
      }
       .mr-i8-24pt,
       .mx-i8-24pt {
       margin-right:1.5rem!important
      }
       .mb-i8-24pt,
       .my-i8-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-i8-24pt,
       .mx-i8-24pt {
       margin-left:1.5rem!important
      }
       .m-i8-32pt {
       margin:2rem!important
      }
       .mt-i8-32pt,
       .my-i8-32pt {
       margin-top:2rem!important
      }
       .mr-i8-32pt,
       .mx-i8-32pt {
       margin-right:2rem!important
      }
       .mb-i8-32pt,
       .my-i8-32pt {
       margin-bottom:2rem!important
      }
       .ml-i8-32pt,
       .mx-i8-32pt {
       margin-left:2rem!important
      }
       .m-i8-40pt {
       margin:2.5rem!important
      }
       .mt-i8-40pt,
       .my-i8-40pt {
       margin-top:2.5rem!important
      }
       .mr-i8-40pt,
       .mx-i8-40pt {
       margin-right:2.5rem!important
      }
       .mb-i8-40pt,
       .my-i8-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-i8-40pt,
       .mx-i8-40pt {
       margin-left:2.5rem!important
      }
       .m-i8-44pt {
       margin:2.75rem!important
      }
       .mt-i8-44pt,
       .my-i8-44pt {
       margin-top:2.75rem!important
      }
       .mr-i8-44pt,
       .mx-i8-44pt {
       margin-right:2.75rem!important
      }
       .mb-i8-44pt,
       .my-i8-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-i8-44pt,
       .mx-i8-44pt {
       margin-left:2.75rem!important
      }
       .m-i8-48pt {
       margin:3rem!important
      }
       .mt-i8-48pt,
       .my-i8-48pt {
       margin-top:3rem!important
      }
       .mr-i8-48pt,
       .mx-i8-48pt {
       margin-right:3rem!important
      }
       .mb-i8-48pt,
       .my-i8-48pt {
       margin-bottom:3rem!important
      }
       .ml-i8-48pt,
       .mx-i8-48pt {
       margin-left:3rem!important
      }
       .m-i8-64pt {
       margin:4rem!important
      }
       .mt-i8-64pt,
       .my-i8-64pt {
       margin-top:4rem!important
      }
       .mr-i8-64pt,
       .mx-i8-64pt {
       margin-right:4rem!important
      }
       .mb-i8-64pt,
       .my-i8-64pt {
       margin-bottom:4rem!important
      }
       .ml-i8-64pt,
       .mx-i8-64pt {
       margin-left:4rem!important
      }
       .m-i8-112pt {
       margin:7rem!important
      }
       .mt-i8-112pt,
       .my-i8-112pt {
       margin-top:7rem!important
      }
       .mr-i8-112pt,
       .mx-i8-112pt {
       margin-right:7rem!important
      }
       .mb-i8-112pt,
       .my-i8-112pt {
       margin-bottom:7rem!important
      }
       .ml-i8-112pt,
       .mx-i8-112pt {
       margin-left:7rem!important
      }
       .m-i8-128pt {
       margin:8rem!important
      }
       .mt-i8-128pt,
       .my-i8-128pt {
       margin-top:8rem!important
      }
       .mr-i8-128pt,
       .mx-i8-128pt {
       margin-right:8rem!important
      }
       .mb-i8-128pt,
       .my-i8-128pt {
       margin-bottom:8rem!important
      }
       .ml-i8-128pt,
       .mx-i8-128pt {
       margin-left:8rem!important
      }
       .p-i8-0 {
       padding:0!important
      }
       .pt-i8-0,
       .py-i8-0 {
       padding-top:0!important
      }
       .pr-i8-0,
       .px-i8-0 {
       padding-right:0!important
      }
       .pb-i8-0,
       .py-i8-0 {
       padding-bottom:0!important
      }
       .pl-i8-0,
       .px-i8-0 {
       padding-left:0!important
      }
       .p-i8-1 {
       padding:.25rem!important
      }
       .pt-i8-1,
       .py-i8-1 {
       padding-top:.25rem!important
      }
       .pr-i8-1,
       .px-i8-1 {
       padding-right:.25rem!important
      }
       .pb-i8-1,
       .py-i8-1 {
       padding-bottom:.25rem!important
      }
       .pl-i8-1,
       .px-i8-1 {
       padding-left:.25rem!important
      }
       .p-i8-2 {
       padding:.5rem!important
      }
       .pt-i8-2,
       .py-i8-2 {
       padding-top:.5rem!important
      }
       .pr-i8-2,
       .px-i8-2 {
       padding-right:.5rem!important
      }
       .pb-i8-2,
       .py-i8-2 {
       padding-bottom:.5rem!important
      }
       .pl-i8-2,
       .px-i8-2 {
       padding-left:.5rem!important
      }
       .p-i8-3 {
       padding:1rem!important
      }
       .pt-i8-3,
       .py-i8-3 {
       padding-top:1rem!important
      }
       .pr-i8-3,
       .px-i8-3 {
       padding-right:1rem!important
      }
       .pb-i8-3,
       .py-i8-3 {
       padding-bottom:1rem!important
      }
       .pl-i8-3,
       .px-i8-3 {
       padding-left:1rem!important
      }
       .p-i8-4 {
       padding:1.5rem!important
      }
       .pt-i8-4,
       .py-i8-4 {
       padding-top:1.5rem!important
      }
       .pr-i8-4,
       .px-i8-4 {
       padding-right:1.5rem!important
      }
       .pb-i8-4,
       .py-i8-4 {
       padding-bottom:1.5rem!important
      }
       .pl-i8-4,
       .px-i8-4 {
       padding-left:1.5rem!important
      }
       .p-i8-5 {
       padding:3rem!important
      }
       .pt-i8-5,
       .py-i8-5 {
       padding-top:3rem!important
      }
       .pr-i8-5,
       .px-i8-5 {
       padding-right:3rem!important
      }
       .pb-i8-5,
       .py-i8-5 {
       padding-bottom:3rem!important
      }
       .pl-i8-5,
       .px-i8-5 {
       padding-left:3rem!important
      }
       .p-i8-4pt {
       padding:.25rem!important
      }
       .pt-i8-4pt,
       .py-i8-4pt {
       padding-top:.25rem!important
      }
       .pr-i8-4pt,
       .px-i8-4pt {
       padding-right:.25rem!important
      }
       .pb-i8-4pt,
       .py-i8-4pt {
       padding-bottom:.25rem!important
      }
       .pl-i8-4pt,
       .px-i8-4pt {
       padding-left:.25rem!important
      }
       .p-i8-8pt {
       padding:.5rem!important
      }
       .pt-i8-8pt,
       .py-i8-8pt {
       padding-top:.5rem!important
      }
       .pr-i8-8pt,
       .px-i8-8pt {
       padding-right:.5rem!important
      }
       .pb-i8-8pt,
       .py-i8-8pt {
       padding-bottom:.5rem!important
      }
       .pl-i8-8pt,
       .px-i8-8pt {
       padding-left:.5rem!important
      }
       .p-i8-12pt {
       padding:.75rem!important
      }
       .pt-i8-12pt,
       .py-i8-12pt {
       padding-top:.75rem!important
      }
       .pr-i8-12pt,
       .px-i8-12pt {
       padding-right:.75rem!important
      }
       .pb-i8-12pt,
       .py-i8-12pt {
       padding-bottom:.75rem!important
      }
       .pl-i8-12pt,
       .px-i8-12pt {
       padding-left:.75rem!important
      }
       .p-i8-16pt {
       padding:1rem!important
      }
       .pt-i8-16pt,
       .py-i8-16pt {
       padding-top:1rem!important
      }
       .pr-i8-16pt,
       .px-i8-16pt {
       padding-right:1rem!important
      }
       .pb-i8-16pt,
       .py-i8-16pt {
       padding-bottom:1rem!important
      }
       .pl-i8-16pt,
       .px-i8-16pt {
       padding-left:1rem!important
      }
       .p-i8-20pt {
       padding:1.25rem!important
      }
       .pt-i8-20pt,
       .py-i8-20pt {
       padding-top:1.25rem!important
      }
       .pr-i8-20pt,
       .px-i8-20pt {
       padding-right:1.25rem!important
      }
       .pb-i8-20pt,
       .py-i8-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-i8-20pt,
       .px-i8-20pt {
       padding-left:1.25rem!important
      }
       .p-i8-24pt {
       padding:1.5rem!important
      }
       .pt-i8-24pt,
       .py-i8-24pt {
       padding-top:1.5rem!important
      }
       .pr-i8-24pt,
       .px-i8-24pt {
       padding-right:1.5rem!important
      }
       .pb-i8-24pt,
       .py-i8-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-i8-24pt,
       .px-i8-24pt {
       padding-left:1.5rem!important
      }
       .p-i8-32pt {
       padding:2rem!important
      }
       .pt-i8-32pt,
       .py-i8-32pt {
       padding-top:2rem!important
      }
       .pr-i8-32pt,
       .px-i8-32pt {
       padding-right:2rem!important
      }
       .pb-i8-32pt,
       .py-i8-32pt {
       padding-bottom:2rem!important
      }
       .pl-i8-32pt,
       .px-i8-32pt {
       padding-left:2rem!important
      }
       .p-i8-40pt {
       padding:2.5rem!important
      }
       .pt-i8-40pt,
       .py-i8-40pt {
       padding-top:2.5rem!important
      }
       .pr-i8-40pt,
       .px-i8-40pt {
       padding-right:2.5rem!important
      }
       .pb-i8-40pt,
       .py-i8-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-i8-40pt,
       .px-i8-40pt {
       padding-left:2.5rem!important
      }
       .p-i8-44pt {
       padding:2.75rem!important
      }
       .pt-i8-44pt,
       .py-i8-44pt {
       padding-top:2.75rem!important
      }
       .pr-i8-44pt,
       .px-i8-44pt {
       padding-right:2.75rem!important
      }
       .pb-i8-44pt,
       .py-i8-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-i8-44pt,
       .px-i8-44pt {
       padding-left:2.75rem!important
      }
       .p-i8-48pt {
       padding:3rem!important
      }
       .pt-i8-48pt,
       .py-i8-48pt {
       padding-top:3rem!important
      }
       .pr-i8-48pt,
       .px-i8-48pt {
       padding-right:3rem!important
      }
       .pb-i8-48pt,
       .py-i8-48pt {
       padding-bottom:3rem!important
      }
       .pl-i8-48pt,
       .px-i8-48pt {
       padding-left:3rem!important
      }
       .p-i8-64pt {
       padding:4rem!important
      }
       .pt-i8-64pt,
       .py-i8-64pt {
       padding-top:4rem!important
      }
       .pr-i8-64pt,
       .px-i8-64pt {
       padding-right:4rem!important
      }
       .pb-i8-64pt,
       .py-i8-64pt {
       padding-bottom:4rem!important
      }
       .pl-i8-64pt,
       .px-i8-64pt {
       padding-left:4rem!important
      }
       .p-i8-112pt {
       padding:7rem!important
      }
       .pt-i8-112pt,
       .py-i8-112pt {
       padding-top:7rem!important
      }
       .pr-i8-112pt,
       .px-i8-112pt {
       padding-right:7rem!important
      }
       .pb-i8-112pt,
       .py-i8-112pt {
       padding-bottom:7rem!important
      }
       .pl-i8-112pt,
       .px-i8-112pt {
       padding-left:7rem!important
      }
       .p-i8-128pt {
       padding:8rem!important
      }
       .pt-i8-128pt,
       .py-i8-128pt {
       padding-top:8rem!important
      }
       .pr-i8-128pt,
       .px-i8-128pt {
       padding-right:8rem!important
      }
       .pb-i8-128pt,
       .py-i8-128pt {
       padding-bottom:8rem!important
      }
       .pl-i8-128pt,
       .px-i8-128pt {
       padding-left:8rem!important
      }
       .m-i8-n1 {
       margin:-.25rem!important
      }
       .mt-i8-n1,
       .my-i8-n1 {
       margin-top:-.25rem!important
      }
       .mr-i8-n1,
       .mx-i8-n1 {
       margin-right:-.25rem!important
      }
       .mb-i8-n1,
       .my-i8-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-i8-n1,
       .mx-i8-n1 {
       margin-left:-.25rem!important
      }
       .m-i8-n2 {
       margin:-.5rem!important
      }
       .mt-i8-n2,
       .my-i8-n2 {
       margin-top:-.5rem!important
      }
       .mr-i8-n2,
       .mx-i8-n2 {
       margin-right:-.5rem!important
      }
       .mb-i8-n2,
       .my-i8-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-i8-n2,
       .mx-i8-n2 {
       margin-left:-.5rem!important
      }
       .m-i8-n3 {
       margin:-1rem!important
      }
       .mt-i8-n3,
       .my-i8-n3 {
       margin-top:-1rem!important
      }
       .mr-i8-n3,
       .mx-i8-n3 {
       margin-right:-1rem!important
      }
       .mb-i8-n3,
       .my-i8-n3 {
       margin-bottom:-1rem!important
      }
       .ml-i8-n3,
       .mx-i8-n3 {
       margin-left:-1rem!important
      }
       .m-i8-n4 {
       margin:-1.5rem!important
      }
       .mt-i8-n4,
       .my-i8-n4 {
       margin-top:-1.5rem!important
      }
       .mr-i8-n4,
       .mx-i8-n4 {
       margin-right:-1.5rem!important
      }
       .mb-i8-n4,
       .my-i8-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-i8-n4,
       .mx-i8-n4 {
       margin-left:-1.5rem!important
      }
       .m-i8-n5 {
       margin:-3rem!important
      }
       .mt-i8-n5,
       .my-i8-n5 {
       margin-top:-3rem!important
      }
       .mr-i8-n5,
       .mx-i8-n5 {
       margin-right:-3rem!important
      }
       .mb-i8-n5,
       .my-i8-n5 {
       margin-bottom:-3rem!important
      }
       .ml-i8-n5,
       .mx-i8-n5 {
       margin-left:-3rem!important
      }
       .m-i8-n4pt {
       margin:-.25rem!important
      }
       .mt-i8-n4pt,
       .my-i8-n4pt {
       margin-top:-.25rem!important
      }
       .mr-i8-n4pt,
       .mx-i8-n4pt {
       margin-right:-.25rem!important
      }
       .mb-i8-n4pt,
       .my-i8-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-i8-n4pt,
       .mx-i8-n4pt {
       margin-left:-.25rem!important
      }
       .m-i8-n8pt {
       margin:-.5rem!important
      }
       .mt-i8-n8pt,
       .my-i8-n8pt {
       margin-top:-.5rem!important
      }
       .mr-i8-n8pt,
       .mx-i8-n8pt {
       margin-right:-.5rem!important
      }
       .mb-i8-n8pt,
       .my-i8-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-i8-n8pt,
       .mx-i8-n8pt {
       margin-left:-.5rem!important
      }
       .m-i8-n12pt {
       margin:-.75rem!important
      }
       .mt-i8-n12pt,
       .my-i8-n12pt {
       margin-top:-.75rem!important
      }
       .mr-i8-n12pt,
       .mx-i8-n12pt {
       margin-right:-.75rem!important
      }
       .mb-i8-n12pt,
       .my-i8-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-i8-n12pt,
       .mx-i8-n12pt {
       margin-left:-.75rem!important
      }
       .m-i8-n16pt {
       margin:-1rem!important
      }
       .mt-i8-n16pt,
       .my-i8-n16pt {
       margin-top:-1rem!important
      }
       .mr-i8-n16pt,
       .mx-i8-n16pt {
       margin-right:-1rem!important
      }
       .mb-i8-n16pt,
       .my-i8-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-i8-n16pt,
       .mx-i8-n16pt {
       margin-left:-1rem!important
      }
       .m-i8-n20pt {
       margin:-1.25rem!important
      }
       .mt-i8-n20pt,
       .my-i8-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-i8-n20pt,
       .mx-i8-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-i8-n20pt,
       .my-i8-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-i8-n20pt,
       .mx-i8-n20pt {
       margin-left:-1.25rem!important
      }
       .m-i8-n24pt {
       margin:-1.5rem!important
      }
       .mt-i8-n24pt,
       .my-i8-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-i8-n24pt,
       .mx-i8-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-i8-n24pt,
       .my-i8-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-i8-n24pt,
       .mx-i8-n24pt {
       margin-left:-1.5rem!important
      }
       .m-i8-n32pt {
       margin:-2rem!important
      }
       .mt-i8-n32pt,
       .my-i8-n32pt {
       margin-top:-2rem!important
      }
       .mr-i8-n32pt,
       .mx-i8-n32pt {
       margin-right:-2rem!important
      }
       .mb-i8-n32pt,
       .my-i8-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-i8-n32pt,
       .mx-i8-n32pt {
       margin-left:-2rem!important
      }
       .m-i8-n40pt {
       margin:-2.5rem!important
      }
       .mt-i8-n40pt,
       .my-i8-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-i8-n40pt,
       .mx-i8-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-i8-n40pt,
       .my-i8-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-i8-n40pt,
       .mx-i8-n40pt {
       margin-left:-2.5rem!important
      }
       .m-i8-n44pt {
       margin:-2.75rem!important
      }
       .mt-i8-n44pt,
       .my-i8-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-i8-n44pt,
       .mx-i8-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-i8-n44pt,
       .my-i8-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-i8-n44pt,
       .mx-i8-n44pt {
       margin-left:-2.75rem!important
      }
       .m-i8-n48pt {
       margin:-3rem!important
      }
       .mt-i8-n48pt,
       .my-i8-n48pt {
       margin-top:-3rem!important
      }
       .mr-i8-n48pt,
       .mx-i8-n48pt {
       margin-right:-3rem!important
      }
       .mb-i8-n48pt,
       .my-i8-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-i8-n48pt,
       .mx-i8-n48pt {
       margin-left:-3rem!important
      }
       .m-i8-n64pt {
       margin:-4rem!important
      }
       .mt-i8-n64pt,
       .my-i8-n64pt {
       margin-top:-4rem!important
      }
       .mr-i8-n64pt,
       .mx-i8-n64pt {
       margin-right:-4rem!important
      }
       .mb-i8-n64pt,
       .my-i8-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-i8-n64pt,
       .mx-i8-n64pt {
       margin-left:-4rem!important
      }
       .m-i8-n112pt {
       margin:-7rem!important
      }
       .mt-i8-n112pt,
       .my-i8-n112pt {
       margin-top:-7rem!important
      }
       .mr-i8-n112pt,
       .mx-i8-n112pt {
       margin-right:-7rem!important
      }
       .mb-i8-n112pt,
       .my-i8-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-i8-n112pt,
       .mx-i8-n112pt {
       margin-left:-7rem!important
      }
       .m-i8-n128pt {
       margin:-8rem!important
      }
       .mt-i8-n128pt,
       .my-i8-n128pt {
       margin-top:-8rem!important
      }
       .mr-i8-n128pt,
       .mx-i8-n128pt {
       margin-right:-8rem!important
      }
       .mb-i8-n128pt,
       .my-i8-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-i8-n128pt,
       .mx-i8-n128pt {
       margin-left:-8rem!important
      }
       .m-i8-auto {
       margin:auto!important
      }
       .mt-i8-auto,
       .my-i8-auto {
       margin-top:auto!important
      }
       .mr-i8-auto,
       .mx-i8-auto {
       margin-right:auto!important
      }
       .mb-i8-auto,
       .my-i8-auto {
       margin-bottom:auto!important
      }
       .ml-i8-auto,
       .mx-i8-auto {
       margin-left:auto!important
      }
     }
     @media (min-width:413px) {
       .m-i8-plus-0 {
       margin:0!important
      }
       .mt-i8-plus-0,
       .my-i8-plus-0 {
       margin-top:0!important
      }
       .mr-i8-plus-0,
       .mx-i8-plus-0 {
       margin-right:0!important
      }
       .mb-i8-plus-0,
       .my-i8-plus-0 {
       margin-bottom:0!important
      }
       .ml-i8-plus-0,
       .mx-i8-plus-0 {
       margin-left:0!important
      }
       .m-i8-plus-1 {
       margin:.25rem!important
      }
       .mt-i8-plus-1,
       .my-i8-plus-1 {
       margin-top:.25rem!important
      }
       .mr-i8-plus-1,
       .mx-i8-plus-1 {
       margin-right:.25rem!important
      }
       .mb-i8-plus-1,
       .my-i8-plus-1 {
       margin-bottom:.25rem!important
      }
       .ml-i8-plus-1,
       .mx-i8-plus-1 {
       margin-left:.25rem!important
      }
       .m-i8-plus-2 {
       margin:.5rem!important
      }
       .mt-i8-plus-2,
       .my-i8-plus-2 {
       margin-top:.5rem!important
      }
       .mr-i8-plus-2,
       .mx-i8-plus-2 {
       margin-right:.5rem!important
      }
       .mb-i8-plus-2,
       .my-i8-plus-2 {
       margin-bottom:.5rem!important
      }
       .ml-i8-plus-2,
       .mx-i8-plus-2 {
       margin-left:.5rem!important
      }
       .m-i8-plus-3 {
       margin:1rem!important
      }
       .mt-i8-plus-3,
       .my-i8-plus-3 {
       margin-top:1rem!important
      }
       .mr-i8-plus-3,
       .mx-i8-plus-3 {
       margin-right:1rem!important
      }
       .mb-i8-plus-3,
       .my-i8-plus-3 {
       margin-bottom:1rem!important
      }
       .ml-i8-plus-3,
       .mx-i8-plus-3 {
       margin-left:1rem!important
      }
       .m-i8-plus-4 {
       margin:1.5rem!important
      }
       .mt-i8-plus-4,
       .my-i8-plus-4 {
       margin-top:1.5rem!important
      }
       .mr-i8-plus-4,
       .mx-i8-plus-4 {
       margin-right:1.5rem!important
      }
       .mb-i8-plus-4,
       .my-i8-plus-4 {
       margin-bottom:1.5rem!important
      }
       .ml-i8-plus-4,
       .mx-i8-plus-4 {
       margin-left:1.5rem!important
      }
       .m-i8-plus-5 {
       margin:3rem!important
      }
       .mt-i8-plus-5,
       .my-i8-plus-5 {
       margin-top:3rem!important
      }
       .mr-i8-plus-5,
       .mx-i8-plus-5 {
       margin-right:3rem!important
      }
       .mb-i8-plus-5,
       .my-i8-plus-5 {
       margin-bottom:3rem!important
      }
       .ml-i8-plus-5,
       .mx-i8-plus-5 {
       margin-left:3rem!important
      }
       .m-i8-plus-4pt {
       margin:.25rem!important
      }
       .mt-i8-plus-4pt,
       .my-i8-plus-4pt {
       margin-top:.25rem!important
      }
       .mr-i8-plus-4pt,
       .mx-i8-plus-4pt {
       margin-right:.25rem!important
      }
       .mb-i8-plus-4pt,
       .my-i8-plus-4pt {
       margin-bottom:.25rem!important
      }
       .ml-i8-plus-4pt,
       .mx-i8-plus-4pt {
       margin-left:.25rem!important
      }
       .m-i8-plus-8pt {
       margin:.5rem!important
      }
       .mt-i8-plus-8pt,
       .my-i8-plus-8pt {
       margin-top:.5rem!important
      }
       .mr-i8-plus-8pt,
       .mx-i8-plus-8pt {
       margin-right:.5rem!important
      }
       .mb-i8-plus-8pt,
       .my-i8-plus-8pt {
       margin-bottom:.5rem!important
      }
       .ml-i8-plus-8pt,
       .mx-i8-plus-8pt {
       margin-left:.5rem!important
      }
       .m-i8-plus-12pt {
       margin:.75rem!important
      }
       .mt-i8-plus-12pt,
       .my-i8-plus-12pt {
       margin-top:.75rem!important
      }
       .mr-i8-plus-12pt,
       .mx-i8-plus-12pt {
       margin-right:.75rem!important
      }
       .mb-i8-plus-12pt,
       .my-i8-plus-12pt {
       margin-bottom:.75rem!important
      }
       .ml-i8-plus-12pt,
       .mx-i8-plus-12pt {
       margin-left:.75rem!important
      }
       .m-i8-plus-16pt {
       margin:1rem!important
      }
       .mt-i8-plus-16pt,
       .my-i8-plus-16pt {
       margin-top:1rem!important
      }
       .mr-i8-plus-16pt,
       .mx-i8-plus-16pt {
       margin-right:1rem!important
      }
       .mb-i8-plus-16pt,
       .my-i8-plus-16pt {
       margin-bottom:1rem!important
      }
       .ml-i8-plus-16pt,
       .mx-i8-plus-16pt {
       margin-left:1rem!important
      }
       .m-i8-plus-20pt {
       margin:1.25rem!important
      }
       .mt-i8-plus-20pt,
       .my-i8-plus-20pt {
       margin-top:1.25rem!important
      }
       .mr-i8-plus-20pt,
       .mx-i8-plus-20pt {
       margin-right:1.25rem!important
      }
       .mb-i8-plus-20pt,
       .my-i8-plus-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-i8-plus-20pt,
       .mx-i8-plus-20pt {
       margin-left:1.25rem!important
      }
       .m-i8-plus-24pt {
       margin:1.5rem!important
      }
       .mt-i8-plus-24pt,
       .my-i8-plus-24pt {
       margin-top:1.5rem!important
      }
       .mr-i8-plus-24pt,
       .mx-i8-plus-24pt {
       margin-right:1.5rem!important
      }
       .mb-i8-plus-24pt,
       .my-i8-plus-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-i8-plus-24pt,
       .mx-i8-plus-24pt {
       margin-left:1.5rem!important
      }
       .m-i8-plus-32pt {
       margin:2rem!important
      }
       .mt-i8-plus-32pt,
       .my-i8-plus-32pt {
       margin-top:2rem!important
      }
       .mr-i8-plus-32pt,
       .mx-i8-plus-32pt {
       margin-right:2rem!important
      }
       .mb-i8-plus-32pt,
       .my-i8-plus-32pt {
       margin-bottom:2rem!important
      }
       .ml-i8-plus-32pt,
       .mx-i8-plus-32pt {
       margin-left:2rem!important
      }
       .m-i8-plus-40pt {
       margin:2.5rem!important
      }
       .mt-i8-plus-40pt,
       .my-i8-plus-40pt {
       margin-top:2.5rem!important
      }
       .mr-i8-plus-40pt,
       .mx-i8-plus-40pt {
       margin-right:2.5rem!important
      }
       .mb-i8-plus-40pt,
       .my-i8-plus-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-i8-plus-40pt,
       .mx-i8-plus-40pt {
       margin-left:2.5rem!important
      }
       .m-i8-plus-44pt {
       margin:2.75rem!important
      }
       .mt-i8-plus-44pt,
       .my-i8-plus-44pt {
       margin-top:2.75rem!important
      }
       .mr-i8-plus-44pt,
       .mx-i8-plus-44pt {
       margin-right:2.75rem!important
      }
       .mb-i8-plus-44pt,
       .my-i8-plus-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-i8-plus-44pt,
       .mx-i8-plus-44pt {
       margin-left:2.75rem!important
      }
       .m-i8-plus-48pt {
       margin:3rem!important
      }
       .mt-i8-plus-48pt,
       .my-i8-plus-48pt {
       margin-top:3rem!important
      }
       .mr-i8-plus-48pt,
       .mx-i8-plus-48pt {
       margin-right:3rem!important
      }
       .mb-i8-plus-48pt,
       .my-i8-plus-48pt {
       margin-bottom:3rem!important
      }
       .ml-i8-plus-48pt,
       .mx-i8-plus-48pt {
       margin-left:3rem!important
      }
       .m-i8-plus-64pt {
       margin:4rem!important
      }
       .mt-i8-plus-64pt,
       .my-i8-plus-64pt {
       margin-top:4rem!important
      }
       .mr-i8-plus-64pt,
       .mx-i8-plus-64pt {
       margin-right:4rem!important
      }
       .mb-i8-plus-64pt,
       .my-i8-plus-64pt {
       margin-bottom:4rem!important
      }
       .ml-i8-plus-64pt,
       .mx-i8-plus-64pt {
       margin-left:4rem!important
      }
       .m-i8-plus-112pt {
       margin:7rem!important
      }
       .mt-i8-plus-112pt,
       .my-i8-plus-112pt {
       margin-top:7rem!important
      }
       .mr-i8-plus-112pt,
       .mx-i8-plus-112pt {
       margin-right:7rem!important
      }
       .mb-i8-plus-112pt,
       .my-i8-plus-112pt {
       margin-bottom:7rem!important
      }
       .ml-i8-plus-112pt,
       .mx-i8-plus-112pt {
       margin-left:7rem!important
      }
       .m-i8-plus-128pt {
       margin:8rem!important
      }
       .mt-i8-plus-128pt,
       .my-i8-plus-128pt {
       margin-top:8rem!important
      }
       .mr-i8-plus-128pt,
       .mx-i8-plus-128pt {
       margin-right:8rem!important
      }
       .mb-i8-plus-128pt,
       .my-i8-plus-128pt {
       margin-bottom:8rem!important
      }
       .ml-i8-plus-128pt,
       .mx-i8-plus-128pt {
       margin-left:8rem!important
      }
       .p-i8-plus-0 {
       padding:0!important
      }
       .pt-i8-plus-0,
       .py-i8-plus-0 {
       padding-top:0!important
      }
       .pr-i8-plus-0,
       .px-i8-plus-0 {
       padding-right:0!important
      }
       .pb-i8-plus-0,
       .py-i8-plus-0 {
       padding-bottom:0!important
      }
       .pl-i8-plus-0,
       .px-i8-plus-0 {
       padding-left:0!important
      }
       .p-i8-plus-1 {
       padding:.25rem!important
      }
       .pt-i8-plus-1,
       .py-i8-plus-1 {
       padding-top:.25rem!important
      }
       .pr-i8-plus-1,
       .px-i8-plus-1 {
       padding-right:.25rem!important
      }
       .pb-i8-plus-1,
       .py-i8-plus-1 {
       padding-bottom:.25rem!important
      }
       .pl-i8-plus-1,
       .px-i8-plus-1 {
       padding-left:.25rem!important
      }
       .p-i8-plus-2 {
       padding:.5rem!important
      }
       .pt-i8-plus-2,
       .py-i8-plus-2 {
       padding-top:.5rem!important
      }
       .pr-i8-plus-2,
       .px-i8-plus-2 {
       padding-right:.5rem!important
      }
       .pb-i8-plus-2,
       .py-i8-plus-2 {
       padding-bottom:.5rem!important
      }
       .pl-i8-plus-2,
       .px-i8-plus-2 {
       padding-left:.5rem!important
      }
       .p-i8-plus-3 {
       padding:1rem!important
      }
       .pt-i8-plus-3,
       .py-i8-plus-3 {
       padding-top:1rem!important
      }
       .pr-i8-plus-3,
       .px-i8-plus-3 {
       padding-right:1rem!important
      }
       .pb-i8-plus-3,
       .py-i8-plus-3 {
       padding-bottom:1rem!important
      }
       .pl-i8-plus-3,
       .px-i8-plus-3 {
       padding-left:1rem!important
      }
       .p-i8-plus-4 {
       padding:1.5rem!important
      }
       .pt-i8-plus-4,
       .py-i8-plus-4 {
       padding-top:1.5rem!important
      }
       .pr-i8-plus-4,
       .px-i8-plus-4 {
       padding-right:1.5rem!important
      }
       .pb-i8-plus-4,
       .py-i8-plus-4 {
       padding-bottom:1.5rem!important
      }
       .pl-i8-plus-4,
       .px-i8-plus-4 {
       padding-left:1.5rem!important
      }
       .p-i8-plus-5 {
       padding:3rem!important
      }
       .pt-i8-plus-5,
       .py-i8-plus-5 {
       padding-top:3rem!important
      }
       .pr-i8-plus-5,
       .px-i8-plus-5 {
       padding-right:3rem!important
      }
       .pb-i8-plus-5,
       .py-i8-plus-5 {
       padding-bottom:3rem!important
      }
       .pl-i8-plus-5,
       .px-i8-plus-5 {
       padding-left:3rem!important
      }
       .p-i8-plus-4pt {
       padding:.25rem!important
      }
       .pt-i8-plus-4pt,
       .py-i8-plus-4pt {
       padding-top:.25rem!important
      }
       .pr-i8-plus-4pt,
       .px-i8-plus-4pt {
       padding-right:.25rem!important
      }
       .pb-i8-plus-4pt,
       .py-i8-plus-4pt {
       padding-bottom:.25rem!important
      }
       .pl-i8-plus-4pt,
       .px-i8-plus-4pt {
       padding-left:.25rem!important
      }
       .p-i8-plus-8pt {
       padding:.5rem!important
      }
       .pt-i8-plus-8pt,
       .py-i8-plus-8pt {
       padding-top:.5rem!important
      }
       .pr-i8-plus-8pt,
       .px-i8-plus-8pt {
       padding-right:.5rem!important
      }
       .pb-i8-plus-8pt,
       .py-i8-plus-8pt {
       padding-bottom:.5rem!important
      }
       .pl-i8-plus-8pt,
       .px-i8-plus-8pt {
       padding-left:.5rem!important
      }
       .p-i8-plus-12pt {
       padding:.75rem!important
      }
       .pt-i8-plus-12pt,
       .py-i8-plus-12pt {
       padding-top:.75rem!important
      }
       .pr-i8-plus-12pt,
       .px-i8-plus-12pt {
       padding-right:.75rem!important
      }
       .pb-i8-plus-12pt,
       .py-i8-plus-12pt {
       padding-bottom:.75rem!important
      }
       .pl-i8-plus-12pt,
       .px-i8-plus-12pt {
       padding-left:.75rem!important
      }
       .p-i8-plus-16pt {
       padding:1rem!important
      }
       .pt-i8-plus-16pt,
       .py-i8-plus-16pt {
       padding-top:1rem!important
      }
       .pr-i8-plus-16pt,
       .px-i8-plus-16pt {
       padding-right:1rem!important
      }
       .pb-i8-plus-16pt,
       .py-i8-plus-16pt {
       padding-bottom:1rem!important
      }
       .pl-i8-plus-16pt,
       .px-i8-plus-16pt {
       padding-left:1rem!important
      }
       .p-i8-plus-20pt {
       padding:1.25rem!important
      }
       .pt-i8-plus-20pt,
       .py-i8-plus-20pt {
       padding-top:1.25rem!important
      }
       .pr-i8-plus-20pt,
       .px-i8-plus-20pt {
       padding-right:1.25rem!important
      }
       .pb-i8-plus-20pt,
       .py-i8-plus-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-i8-plus-20pt,
       .px-i8-plus-20pt {
       padding-left:1.25rem!important
      }
       .p-i8-plus-24pt {
       padding:1.5rem!important
      }
       .pt-i8-plus-24pt,
       .py-i8-plus-24pt {
       padding-top:1.5rem!important
      }
       .pr-i8-plus-24pt,
       .px-i8-plus-24pt {
       padding-right:1.5rem!important
      }
       .pb-i8-plus-24pt,
       .py-i8-plus-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-i8-plus-24pt,
       .px-i8-plus-24pt {
       padding-left:1.5rem!important
      }
       .p-i8-plus-32pt {
       padding:2rem!important
      }
       .pt-i8-plus-32pt,
       .py-i8-plus-32pt {
       padding-top:2rem!important
      }
       .pr-i8-plus-32pt,
       .px-i8-plus-32pt {
       padding-right:2rem!important
      }
       .pb-i8-plus-32pt,
       .py-i8-plus-32pt {
       padding-bottom:2rem!important
      }
       .pl-i8-plus-32pt,
       .px-i8-plus-32pt {
       padding-left:2rem!important
      }
       .p-i8-plus-40pt {
       padding:2.5rem!important
      }
       .pt-i8-plus-40pt,
       .py-i8-plus-40pt {
       padding-top:2.5rem!important
      }
       .pr-i8-plus-40pt,
       .px-i8-plus-40pt {
       padding-right:2.5rem!important
      }
       .pb-i8-plus-40pt,
       .py-i8-plus-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-i8-plus-40pt,
       .px-i8-plus-40pt {
       padding-left:2.5rem!important
      }
       .p-i8-plus-44pt {
       padding:2.75rem!important
      }
       .pt-i8-plus-44pt,
       .py-i8-plus-44pt {
       padding-top:2.75rem!important
      }
       .pr-i8-plus-44pt,
       .px-i8-plus-44pt {
       padding-right:2.75rem!important
      }
       .pb-i8-plus-44pt,
       .py-i8-plus-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-i8-plus-44pt,
       .px-i8-plus-44pt {
       padding-left:2.75rem!important
      }
       .p-i8-plus-48pt {
       padding:3rem!important
      }
       .pt-i8-plus-48pt,
       .py-i8-plus-48pt {
       padding-top:3rem!important
      }
       .pr-i8-plus-48pt,
       .px-i8-plus-48pt {
       padding-right:3rem!important
      }
       .pb-i8-plus-48pt,
       .py-i8-plus-48pt {
       padding-bottom:3rem!important
      }
       .pl-i8-plus-48pt,
       .px-i8-plus-48pt {
       padding-left:3rem!important
      }
       .p-i8-plus-64pt {
       padding:4rem!important
      }
       .pt-i8-plus-64pt,
       .py-i8-plus-64pt {
       padding-top:4rem!important
      }
       .pr-i8-plus-64pt,
       .px-i8-plus-64pt {
       padding-right:4rem!important
      }
       .pb-i8-plus-64pt,
       .py-i8-plus-64pt {
       padding-bottom:4rem!important
      }
       .pl-i8-plus-64pt,
       .px-i8-plus-64pt {
       padding-left:4rem!important
      }
       .p-i8-plus-112pt {
       padding:7rem!important
      }
       .pt-i8-plus-112pt,
       .py-i8-plus-112pt {
       padding-top:7rem!important
      }
       .pr-i8-plus-112pt,
       .px-i8-plus-112pt {
       padding-right:7rem!important
      }
       .pb-i8-plus-112pt,
       .py-i8-plus-112pt {
       padding-bottom:7rem!important
      }
       .pl-i8-plus-112pt,
       .px-i8-plus-112pt {
       padding-left:7rem!important
      }
       .p-i8-plus-128pt {
       padding:8rem!important
      }
       .pt-i8-plus-128pt,
       .py-i8-plus-128pt {
       padding-top:8rem!important
      }
       .pr-i8-plus-128pt,
       .px-i8-plus-128pt {
       padding-right:8rem!important
      }
       .pb-i8-plus-128pt,
       .py-i8-plus-128pt {
       padding-bottom:8rem!important
      }
       .pl-i8-plus-128pt,
       .px-i8-plus-128pt {
       padding-left:8rem!important
      }
       .m-i8-plus-n1 {
       margin:-.25rem!important
      }
       .mt-i8-plus-n1,
       .my-i8-plus-n1 {
       margin-top:-.25rem!important
      }
       .mr-i8-plus-n1,
       .mx-i8-plus-n1 {
       margin-right:-.25rem!important
      }
       .mb-i8-plus-n1,
       .my-i8-plus-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-i8-plus-n1,
       .mx-i8-plus-n1 {
       margin-left:-.25rem!important
      }
       .m-i8-plus-n2 {
       margin:-.5rem!important
      }
       .mt-i8-plus-n2,
       .my-i8-plus-n2 {
       margin-top:-.5rem!important
      }
       .mr-i8-plus-n2,
       .mx-i8-plus-n2 {
       margin-right:-.5rem!important
      }
       .mb-i8-plus-n2,
       .my-i8-plus-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-i8-plus-n2,
       .mx-i8-plus-n2 {
       margin-left:-.5rem!important
      }
       .m-i8-plus-n3 {
       margin:-1rem!important
      }
       .mt-i8-plus-n3,
       .my-i8-plus-n3 {
       margin-top:-1rem!important
      }
       .mr-i8-plus-n3,
       .mx-i8-plus-n3 {
       margin-right:-1rem!important
      }
       .mb-i8-plus-n3,
       .my-i8-plus-n3 {
       margin-bottom:-1rem!important
      }
       .ml-i8-plus-n3,
       .mx-i8-plus-n3 {
       margin-left:-1rem!important
      }
       .m-i8-plus-n4 {
       margin:-1.5rem!important
      }
       .mt-i8-plus-n4,
       .my-i8-plus-n4 {
       margin-top:-1.5rem!important
      }
       .mr-i8-plus-n4,
       .mx-i8-plus-n4 {
       margin-right:-1.5rem!important
      }
       .mb-i8-plus-n4,
       .my-i8-plus-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-i8-plus-n4,
       .mx-i8-plus-n4 {
       margin-left:-1.5rem!important
      }
       .m-i8-plus-n5 {
       margin:-3rem!important
      }
       .mt-i8-plus-n5,
       .my-i8-plus-n5 {
       margin-top:-3rem!important
      }
       .mr-i8-plus-n5,
       .mx-i8-plus-n5 {
       margin-right:-3rem!important
      }
       .mb-i8-plus-n5,
       .my-i8-plus-n5 {
       margin-bottom:-3rem!important
      }
       .ml-i8-plus-n5,
       .mx-i8-plus-n5 {
       margin-left:-3rem!important
      }
       .m-i8-plus-n4pt {
       margin:-.25rem!important
      }
       .mt-i8-plus-n4pt,
       .my-i8-plus-n4pt {
       margin-top:-.25rem!important
      }
       .mr-i8-plus-n4pt,
       .mx-i8-plus-n4pt {
       margin-right:-.25rem!important
      }
       .mb-i8-plus-n4pt,
       .my-i8-plus-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-i8-plus-n4pt,
       .mx-i8-plus-n4pt {
       margin-left:-.25rem!important
      }
       .m-i8-plus-n8pt {
       margin:-.5rem!important
      }
       .mt-i8-plus-n8pt,
       .my-i8-plus-n8pt {
       margin-top:-.5rem!important
      }
       .mr-i8-plus-n8pt,
       .mx-i8-plus-n8pt {
       margin-right:-.5rem!important
      }
       .mb-i8-plus-n8pt,
       .my-i8-plus-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-i8-plus-n8pt,
       .mx-i8-plus-n8pt {
       margin-left:-.5rem!important
      }
       .m-i8-plus-n12pt {
       margin:-.75rem!important
      }
       .mt-i8-plus-n12pt,
       .my-i8-plus-n12pt {
       margin-top:-.75rem!important
      }
       .mr-i8-plus-n12pt,
       .mx-i8-plus-n12pt {
       margin-right:-.75rem!important
      }
       .mb-i8-plus-n12pt,
       .my-i8-plus-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-i8-plus-n12pt,
       .mx-i8-plus-n12pt {
       margin-left:-.75rem!important
      }
       .m-i8-plus-n16pt {
       margin:-1rem!important
      }
       .mt-i8-plus-n16pt,
       .my-i8-plus-n16pt {
       margin-top:-1rem!important
      }
       .mr-i8-plus-n16pt,
       .mx-i8-plus-n16pt {
       margin-right:-1rem!important
      }
       .mb-i8-plus-n16pt,
       .my-i8-plus-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-i8-plus-n16pt,
       .mx-i8-plus-n16pt {
       margin-left:-1rem!important
      }
       .m-i8-plus-n20pt {
       margin:-1.25rem!important
      }
       .mt-i8-plus-n20pt,
       .my-i8-plus-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-i8-plus-n20pt,
       .mx-i8-plus-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-i8-plus-n20pt,
       .my-i8-plus-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-i8-plus-n20pt,
       .mx-i8-plus-n20pt {
       margin-left:-1.25rem!important
      }
       .m-i8-plus-n24pt {
       margin:-1.5rem!important
      }
       .mt-i8-plus-n24pt,
       .my-i8-plus-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-i8-plus-n24pt,
       .mx-i8-plus-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-i8-plus-n24pt,
       .my-i8-plus-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-i8-plus-n24pt,
       .mx-i8-plus-n24pt {
       margin-left:-1.5rem!important
      }
       .m-i8-plus-n32pt {
       margin:-2rem!important
      }
       .mt-i8-plus-n32pt,
       .my-i8-plus-n32pt {
       margin-top:-2rem!important
      }
       .mr-i8-plus-n32pt,
       .mx-i8-plus-n32pt {
       margin-right:-2rem!important
      }
       .mb-i8-plus-n32pt,
       .my-i8-plus-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-i8-plus-n32pt,
       .mx-i8-plus-n32pt {
       margin-left:-2rem!important
      }
       .m-i8-plus-n40pt {
       margin:-2.5rem!important
      }
       .mt-i8-plus-n40pt,
       .my-i8-plus-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-i8-plus-n40pt,
       .mx-i8-plus-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-i8-plus-n40pt,
       .my-i8-plus-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-i8-plus-n40pt,
       .mx-i8-plus-n40pt {
       margin-left:-2.5rem!important
      }
       .m-i8-plus-n44pt {
       margin:-2.75rem!important
      }
       .mt-i8-plus-n44pt,
       .my-i8-plus-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-i8-plus-n44pt,
       .mx-i8-plus-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-i8-plus-n44pt,
       .my-i8-plus-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-i8-plus-n44pt,
       .mx-i8-plus-n44pt {
       margin-left:-2.75rem!important
      }
       .m-i8-plus-n48pt {
       margin:-3rem!important
      }
       .mt-i8-plus-n48pt,
       .my-i8-plus-n48pt {
       margin-top:-3rem!important
      }
       .mr-i8-plus-n48pt,
       .mx-i8-plus-n48pt {
       margin-right:-3rem!important
      }
       .mb-i8-plus-n48pt,
       .my-i8-plus-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-i8-plus-n48pt,
       .mx-i8-plus-n48pt {
       margin-left:-3rem!important
      }
       .m-i8-plus-n64pt {
       margin:-4rem!important
      }
       .mt-i8-plus-n64pt,
       .my-i8-plus-n64pt {
       margin-top:-4rem!important
      }
       .mr-i8-plus-n64pt,
       .mx-i8-plus-n64pt {
       margin-right:-4rem!important
      }
       .mb-i8-plus-n64pt,
       .my-i8-plus-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-i8-plus-n64pt,
       .mx-i8-plus-n64pt {
       margin-left:-4rem!important
      }
       .m-i8-plus-n112pt {
       margin:-7rem!important
      }
       .mt-i8-plus-n112pt,
       .my-i8-plus-n112pt {
       margin-top:-7rem!important
      }
       .mr-i8-plus-n112pt,
       .mx-i8-plus-n112pt {
       margin-right:-7rem!important
      }
       .mb-i8-plus-n112pt,
       .my-i8-plus-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-i8-plus-n112pt,
       .mx-i8-plus-n112pt {
       margin-left:-7rem!important
      }
       .m-i8-plus-n128pt {
       margin:-8rem!important
      }
       .mt-i8-plus-n128pt,
       .my-i8-plus-n128pt {
       margin-top:-8rem!important
      }
       .mr-i8-plus-n128pt,
       .mx-i8-plus-n128pt {
       margin-right:-8rem!important
      }
       .mb-i8-plus-n128pt,
       .my-i8-plus-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-i8-plus-n128pt,
       .mx-i8-plus-n128pt {
       margin-left:-8rem!important
      }
       .m-i8-plus-auto {
       margin:auto!important
      }
       .mt-i8-plus-auto,
       .my-i8-plus-auto {
       margin-top:auto!important
      }
       .mr-i8-plus-auto,
       .mx-i8-plus-auto {
       margin-right:auto!important
      }
       .mb-i8-plus-auto,
       .my-i8-plus-auto {
       margin-bottom:auto!important
      }
       .ml-i8-plus-auto,
       .mx-i8-plus-auto {
       margin-left:auto!important
      }
     }
     @media (min-width:576px) {
       .m-sm-0 {
       margin:0!important
      }
       .mt-sm-0,
       .my-sm-0 {
       margin-top:0!important
      }
       .mr-sm-0,
       .mx-sm-0 {
       margin-right:0!important
      }
       .mb-sm-0,
       .my-sm-0 {
       margin-bottom:0!important
      }
       .ml-sm-0,
       .mx-sm-0 {
       margin-left:0!important
      }
       .m-sm-1 {
       margin:.25rem!important
      }
       .mt-sm-1,
       .my-sm-1 {
       margin-top:.25rem!important
      }
       .mr-sm-1,
       .mx-sm-1 {
       margin-right:.25rem!important
      }
       .mb-sm-1,
       .my-sm-1 {
       margin-bottom:.25rem!important
      }
       .ml-sm-1,
       .mx-sm-1 {
       margin-left:.25rem!important
      }
       .m-sm-2 {
       margin:.5rem!important
      }
       .mt-sm-2,
       .my-sm-2 {
       margin-top:.5rem!important
      }
       .mr-sm-2,
       .mx-sm-2 {
       margin-right:.5rem!important
      }
       .mb-sm-2,
       .my-sm-2 {
       margin-bottom:.5rem!important
      }
       .ml-sm-2,
       .mx-sm-2 {
       margin-left:.5rem!important
      }
       .m-sm-3 {
       margin:1rem!important
      }
       .mt-sm-3,
       .my-sm-3 {
       margin-top:1rem!important
      }
       .mr-sm-3,
       .mx-sm-3 {
       margin-right:1rem!important
      }
       .mb-sm-3,
       .my-sm-3 {
       margin-bottom:1rem!important
      }
       .ml-sm-3,
       .mx-sm-3 {
       margin-left:1rem!important
      }
       .m-sm-4 {
       margin:1.5rem!important
      }
       .mt-sm-4,
       .my-sm-4 {
       margin-top:1.5rem!important
      }
       .mr-sm-4,
       .mx-sm-4 {
       margin-right:1.5rem!important
      }
       .mb-sm-4,
       .my-sm-4 {
       margin-bottom:1.5rem!important
      }
       .ml-sm-4,
       .mx-sm-4 {
       margin-left:1.5rem!important
      }
       .m-sm-5 {
       margin:3rem!important
      }
       .mt-sm-5,
       .my-sm-5 {
       margin-top:3rem!important
      }
       .mr-sm-5,
       .mx-sm-5 {
       margin-right:3rem!important
      }
       .mb-sm-5,
       .my-sm-5 {
       margin-bottom:3rem!important
      }
       .ml-sm-5,
       .mx-sm-5 {
       margin-left:3rem!important
      }
       .m-sm-4pt {
       margin:.25rem!important
      }
       .mt-sm-4pt,
       .my-sm-4pt {
       margin-top:.25rem!important
      }
       .mr-sm-4pt,
       .mx-sm-4pt {
       margin-right:.25rem!important
      }
       .mb-sm-4pt,
       .my-sm-4pt {
       margin-bottom:.25rem!important
      }
       .ml-sm-4pt,
       .mx-sm-4pt {
       margin-left:.25rem!important
      }
       .m-sm-8pt {
       margin:.5rem!important
      }
       .mt-sm-8pt,
       .my-sm-8pt {
       margin-top:.5rem!important
      }
       .mr-sm-8pt,
       .mx-sm-8pt {
       margin-right:.5rem!important
      }
       .mb-sm-8pt,
       .my-sm-8pt {
       margin-bottom:.5rem!important
      }
       .ml-sm-8pt,
       .mx-sm-8pt {
       margin-left:.5rem!important
      }
       .m-sm-12pt {
       margin:.75rem!important
      }
       .mt-sm-12pt,
       .my-sm-12pt {
       margin-top:.75rem!important
      }
       .mr-sm-12pt,
       .mx-sm-12pt {
       margin-right:.75rem!important
      }
       .mb-sm-12pt,
       .my-sm-12pt {
       margin-bottom:.75rem!important
      }
       .ml-sm-12pt,
       .mx-sm-12pt {
       margin-left:.75rem!important
      }
       .m-sm-16pt {
       margin:1rem!important
      }
       .mt-sm-16pt,
       .my-sm-16pt {
       margin-top:1rem!important
      }
       .mr-sm-16pt,
       .mx-sm-16pt {
       margin-right:1rem!important
      }
       .mb-sm-16pt,
       .my-sm-16pt {
       margin-bottom:1rem!important
      }
       .ml-sm-16pt,
       .mx-sm-16pt {
       margin-left:1rem!important
      }
       .m-sm-20pt {
       margin:1.25rem!important
      }
       .mt-sm-20pt,
       .my-sm-20pt {
       margin-top:1.25rem!important
      }
       .mr-sm-20pt,
       .mx-sm-20pt {
       margin-right:1.25rem!important
      }
       .mb-sm-20pt,
       .my-sm-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-sm-20pt,
       .mx-sm-20pt {
       margin-left:1.25rem!important
      }
       .m-sm-24pt {
       margin:1.5rem!important
      }
       .mt-sm-24pt,
       .my-sm-24pt {
       margin-top:1.5rem!important
      }
       .mr-sm-24pt,
       .mx-sm-24pt {
       margin-right:1.5rem!important
      }
       .mb-sm-24pt,
       .my-sm-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-sm-24pt,
       .mx-sm-24pt {
       margin-left:1.5rem!important
      }
       .m-sm-32pt {
       margin:2rem!important
      }
       .mt-sm-32pt,
       .my-sm-32pt {
       margin-top:2rem!important
      }
       .mr-sm-32pt,
       .mx-sm-32pt {
       margin-right:2rem!important
      }
       .mb-sm-32pt,
       .my-sm-32pt {
       margin-bottom:2rem!important
      }
       .ml-sm-32pt,
       .mx-sm-32pt {
       margin-left:2rem!important
      }
       .m-sm-40pt {
       margin:2.5rem!important
      }
       .mt-sm-40pt,
       .my-sm-40pt {
       margin-top:2.5rem!important
      }
       .mr-sm-40pt,
       .mx-sm-40pt {
       margin-right:2.5rem!important
      }
       .mb-sm-40pt,
       .my-sm-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-sm-40pt,
       .mx-sm-40pt {
       margin-left:2.5rem!important
      }
       .m-sm-44pt {
       margin:2.75rem!important
      }
       .mt-sm-44pt,
       .my-sm-44pt {
       margin-top:2.75rem!important
      }
       .mr-sm-44pt,
       .mx-sm-44pt {
       margin-right:2.75rem!important
      }
       .mb-sm-44pt,
       .my-sm-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-sm-44pt,
       .mx-sm-44pt {
       margin-left:2.75rem!important
      }
       .m-sm-48pt {
       margin:3rem!important
      }
       .mt-sm-48pt,
       .my-sm-48pt {
       margin-top:3rem!important
      }
       .mr-sm-48pt,
       .mx-sm-48pt {
       margin-right:3rem!important
      }
       .mb-sm-48pt,
       .my-sm-48pt {
       margin-bottom:3rem!important
      }
       .ml-sm-48pt,
       .mx-sm-48pt {
       margin-left:3rem!important
      }
       .m-sm-64pt {
       margin:4rem!important
      }
       .mt-sm-64pt,
       .my-sm-64pt {
       margin-top:4rem!important
      }
       .mr-sm-64pt,
       .mx-sm-64pt {
       margin-right:4rem!important
      }
       .mb-sm-64pt,
       .my-sm-64pt {
       margin-bottom:4rem!important
      }
       .ml-sm-64pt,
       .mx-sm-64pt {
       margin-left:4rem!important
      }
       .m-sm-112pt {
       margin:7rem!important
      }
       .mt-sm-112pt,
       .my-sm-112pt {
       margin-top:7rem!important
      }
       .mr-sm-112pt,
       .mx-sm-112pt {
       margin-right:7rem!important
      }
       .mb-sm-112pt,
       .my-sm-112pt {
       margin-bottom:7rem!important
      }
       .ml-sm-112pt,
       .mx-sm-112pt {
       margin-left:7rem!important
      }
       .m-sm-128pt {
       margin:8rem!important
      }
       .mt-sm-128pt,
       .my-sm-128pt {
       margin-top:8rem!important
      }
       .mr-sm-128pt,
       .mx-sm-128pt {
       margin-right:8rem!important
      }
       .mb-sm-128pt,
       .my-sm-128pt {
       margin-bottom:8rem!important
      }
       .ml-sm-128pt,
       .mx-sm-128pt {
       margin-left:8rem!important
      }
       .p-sm-0 {
       padding:0!important
      }
       .pt-sm-0,
       .py-sm-0 {
       padding-top:0!important
      }
       .pr-sm-0,
       .px-sm-0 {
       padding-right:0!important
      }
       .pb-sm-0,
       .py-sm-0 {
       padding-bottom:0!important
      }
       .pl-sm-0,
       .px-sm-0 {
       padding-left:0!important
      }
       .p-sm-1 {
       padding:.25rem!important
      }
       .pt-sm-1,
       .py-sm-1 {
       padding-top:.25rem!important
      }
       .pr-sm-1,
       .px-sm-1 {
       padding-right:.25rem!important
      }
       .pb-sm-1,
       .py-sm-1 {
       padding-bottom:.25rem!important
      }
       .pl-sm-1,
       .px-sm-1 {
       padding-left:.25rem!important
      }
       .p-sm-2 {
       padding:.5rem!important
      }
       .pt-sm-2,
       .py-sm-2 {
       padding-top:.5rem!important
      }
       .pr-sm-2,
       .px-sm-2 {
       padding-right:.5rem!important
      }
       .pb-sm-2,
       .py-sm-2 {
       padding-bottom:.5rem!important
      }
       .pl-sm-2,
       .px-sm-2 {
       padding-left:.5rem!important
      }
       .p-sm-3 {
       padding:1rem!important
      }
       .pt-sm-3,
       .py-sm-3 {
       padding-top:1rem!important
      }
       .pr-sm-3,
       .px-sm-3 {
       padding-right:1rem!important
      }
       .pb-sm-3,
       .py-sm-3 {
       padding-bottom:1rem!important
      }
       .pl-sm-3,
       .px-sm-3 {
       padding-left:1rem!important
      }
       .p-sm-4 {
       padding:1.5rem!important
      }
       .pt-sm-4,
       .py-sm-4 {
       padding-top:1.5rem!important
      }
       .pr-sm-4,
       .px-sm-4 {
       padding-right:1.5rem!important
      }
       .pb-sm-4,
       .py-sm-4 {
       padding-bottom:1.5rem!important
      }
       .pl-sm-4,
       .px-sm-4 {
       padding-left:1.5rem!important
      }
       .p-sm-5 {
       padding:3rem!important
      }
       .pt-sm-5,
       .py-sm-5 {
       padding-top:3rem!important
      }
       .pr-sm-5,
       .px-sm-5 {
       padding-right:3rem!important
      }
       .pb-sm-5,
       .py-sm-5 {
       padding-bottom:3rem!important
      }
       .pl-sm-5,
       .px-sm-5 {
       padding-left:3rem!important
      }
       .p-sm-4pt {
       padding:.25rem!important
      }
       .pt-sm-4pt,
       .py-sm-4pt {
       padding-top:.25rem!important
      }
       .pr-sm-4pt,
       .px-sm-4pt {
       padding-right:.25rem!important
      }
       .pb-sm-4pt,
       .py-sm-4pt {
       padding-bottom:.25rem!important
      }
       .pl-sm-4pt,
       .px-sm-4pt {
       padding-left:.25rem!important
      }
       .p-sm-8pt {
       padding:.5rem!important
      }
       .pt-sm-8pt,
       .py-sm-8pt {
       padding-top:.5rem!important
      }
       .pr-sm-8pt,
       .px-sm-8pt {
       padding-right:.5rem!important
      }
       .pb-sm-8pt,
       .py-sm-8pt {
       padding-bottom:.5rem!important
      }
       .pl-sm-8pt,
       .px-sm-8pt {
       padding-left:.5rem!important
      }
       .p-sm-12pt {
       padding:.75rem!important
      }
       .pt-sm-12pt,
       .py-sm-12pt {
       padding-top:.75rem!important
      }
       .pr-sm-12pt,
       .px-sm-12pt {
       padding-right:.75rem!important
      }
       .pb-sm-12pt,
       .py-sm-12pt {
       padding-bottom:.75rem!important
      }
       .pl-sm-12pt,
       .px-sm-12pt {
       padding-left:.75rem!important
      }
       .p-sm-16pt {
       padding:1rem!important
      }
       .pt-sm-16pt,
       .py-sm-16pt {
       padding-top:1rem!important
      }
       .pr-sm-16pt,
       .px-sm-16pt {
       padding-right:1rem!important
      }
       .pb-sm-16pt,
       .py-sm-16pt {
       padding-bottom:1rem!important
      }
       .pl-sm-16pt,
       .px-sm-16pt {
       padding-left:1rem!important
      }
       .p-sm-20pt {
       padding:1.25rem!important
      }
       .pt-sm-20pt,
       .py-sm-20pt {
       padding-top:1.25rem!important
      }
       .pr-sm-20pt,
       .px-sm-20pt {
       padding-right:1.25rem!important
      }
       .pb-sm-20pt,
       .py-sm-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-sm-20pt,
       .px-sm-20pt {
       padding-left:1.25rem!important
      }
       .p-sm-24pt {
       padding:1.5rem!important
      }
       .pt-sm-24pt,
       .py-sm-24pt {
       padding-top:1.5rem!important
      }
       .pr-sm-24pt,
       .px-sm-24pt {
       padding-right:1.5rem!important
      }
       .pb-sm-24pt,
       .py-sm-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-sm-24pt,
       .px-sm-24pt {
       padding-left:1.5rem!important
      }
       .p-sm-32pt {
       padding:2rem!important
      }
       .pt-sm-32pt,
       .py-sm-32pt {
       padding-top:2rem!important
      }
       .pr-sm-32pt,
       .px-sm-32pt {
       padding-right:2rem!important
      }
       .pb-sm-32pt,
       .py-sm-32pt {
       padding-bottom:2rem!important
      }
       .pl-sm-32pt,
       .px-sm-32pt {
       padding-left:2rem!important
      }
       .p-sm-40pt {
       padding:2.5rem!important
      }
       .pt-sm-40pt,
       .py-sm-40pt {
       padding-top:2.5rem!important
      }
       .pr-sm-40pt,
       .px-sm-40pt {
       padding-right:2.5rem!important
      }
       .pb-sm-40pt,
       .py-sm-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-sm-40pt,
       .px-sm-40pt {
       padding-left:2.5rem!important
      }
       .p-sm-44pt {
       padding:2.75rem!important
      }
       .pt-sm-44pt,
       .py-sm-44pt {
       padding-top:2.75rem!important
      }
       .pr-sm-44pt,
       .px-sm-44pt {
       padding-right:2.75rem!important
      }
       .pb-sm-44pt,
       .py-sm-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-sm-44pt,
       .px-sm-44pt {
       padding-left:2.75rem!important
      }
       .p-sm-48pt {
       padding:3rem!important
      }
       .pt-sm-48pt,
       .py-sm-48pt {
       padding-top:3rem!important
      }
       .pr-sm-48pt,
       .px-sm-48pt {
       padding-right:3rem!important
      }
       .pb-sm-48pt,
       .py-sm-48pt {
       padding-bottom:3rem!important
      }
       .pl-sm-48pt,
       .px-sm-48pt {
       padding-left:3rem!important
      }
       .p-sm-64pt {
       padding:4rem!important
      }
       .pt-sm-64pt,
       .py-sm-64pt {
       padding-top:4rem!important
      }
       .pr-sm-64pt,
       .px-sm-64pt {
       padding-right:4rem!important
      }
       .pb-sm-64pt,
       .py-sm-64pt {
       padding-bottom:4rem!important
      }
       .pl-sm-64pt,
       .px-sm-64pt {
       padding-left:4rem!important
      }
       .p-sm-112pt {
       padding:7rem!important
      }
       .pt-sm-112pt,
       .py-sm-112pt {
       padding-top:7rem!important
      }
       .pr-sm-112pt,
       .px-sm-112pt {
       padding-right:7rem!important
      }
       .pb-sm-112pt,
       .py-sm-112pt {
       padding-bottom:7rem!important
      }
       .pl-sm-112pt,
       .px-sm-112pt {
       padding-left:7rem!important
      }
       .p-sm-128pt {
       padding:8rem!important
      }
       .pt-sm-128pt,
       .py-sm-128pt {
       padding-top:8rem!important
      }
       .pr-sm-128pt,
       .px-sm-128pt {
       padding-right:8rem!important
      }
       .pb-sm-128pt,
       .py-sm-128pt {
       padding-bottom:8rem!important
      }
       .pl-sm-128pt,
       .px-sm-128pt {
       padding-left:8rem!important
      }
       .m-sm-n1 {
       margin:-.25rem!important
      }
       .mt-sm-n1,
       .my-sm-n1 {
       margin-top:-.25rem!important
      }
       .mr-sm-n1,
       .mx-sm-n1 {
       margin-right:-.25rem!important
      }
       .mb-sm-n1,
       .my-sm-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-sm-n1,
       .mx-sm-n1 {
       margin-left:-.25rem!important
      }
       .m-sm-n2 {
       margin:-.5rem!important
      }
       .mt-sm-n2,
       .my-sm-n2 {
       margin-top:-.5rem!important
      }
       .mr-sm-n2,
       .mx-sm-n2 {
       margin-right:-.5rem!important
      }
       .mb-sm-n2,
       .my-sm-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-sm-n2,
       .mx-sm-n2 {
       margin-left:-.5rem!important
      }
       .m-sm-n3 {
       margin:-1rem!important
      }
       .mt-sm-n3,
       .my-sm-n3 {
       margin-top:-1rem!important
      }
       .mr-sm-n3,
       .mx-sm-n3 {
       margin-right:-1rem!important
      }
       .mb-sm-n3,
       .my-sm-n3 {
       margin-bottom:-1rem!important
      }
       .ml-sm-n3,
       .mx-sm-n3 {
       margin-left:-1rem!important
      }
       .m-sm-n4 {
       margin:-1.5rem!important
      }
       .mt-sm-n4,
       .my-sm-n4 {
       margin-top:-1.5rem!important
      }
       .mr-sm-n4,
       .mx-sm-n4 {
       margin-right:-1.5rem!important
      }
       .mb-sm-n4,
       .my-sm-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-sm-n4,
       .mx-sm-n4 {
       margin-left:-1.5rem!important
      }
       .m-sm-n5 {
       margin:-3rem!important
      }
       .mt-sm-n5,
       .my-sm-n5 {
       margin-top:-3rem!important
      }
       .mr-sm-n5,
       .mx-sm-n5 {
       margin-right:-3rem!important
      }
       .mb-sm-n5,
       .my-sm-n5 {
       margin-bottom:-3rem!important
      }
       .ml-sm-n5,
       .mx-sm-n5 {
       margin-left:-3rem!important
      }
       .m-sm-n4pt {
       margin:-.25rem!important
      }
       .mt-sm-n4pt,
       .my-sm-n4pt {
       margin-top:-.25rem!important
      }
       .mr-sm-n4pt,
       .mx-sm-n4pt {
       margin-right:-.25rem!important
      }
       .mb-sm-n4pt,
       .my-sm-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-sm-n4pt,
       .mx-sm-n4pt {
       margin-left:-.25rem!important
      }
       .m-sm-n8pt {
       margin:-.5rem!important
      }
       .mt-sm-n8pt,
       .my-sm-n8pt {
       margin-top:-.5rem!important
      }
       .mr-sm-n8pt,
       .mx-sm-n8pt {
       margin-right:-.5rem!important
      }
       .mb-sm-n8pt,
       .my-sm-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-sm-n8pt,
       .mx-sm-n8pt {
       margin-left:-.5rem!important
      }
       .m-sm-n12pt {
       margin:-.75rem!important
      }
       .mt-sm-n12pt,
       .my-sm-n12pt {
       margin-top:-.75rem!important
      }
       .mr-sm-n12pt,
       .mx-sm-n12pt {
       margin-right:-.75rem!important
      }
       .mb-sm-n12pt,
       .my-sm-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-sm-n12pt,
       .mx-sm-n12pt {
       margin-left:-.75rem!important
      }
       .m-sm-n16pt {
       margin:-1rem!important
      }
       .mt-sm-n16pt,
       .my-sm-n16pt {
       margin-top:-1rem!important
      }
       .mr-sm-n16pt,
       .mx-sm-n16pt {
       margin-right:-1rem!important
      }
       .mb-sm-n16pt,
       .my-sm-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-sm-n16pt,
       .mx-sm-n16pt {
       margin-left:-1rem!important
      }
       .m-sm-n20pt {
       margin:-1.25rem!important
      }
       .mt-sm-n20pt,
       .my-sm-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-sm-n20pt,
       .mx-sm-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-sm-n20pt,
       .my-sm-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-sm-n20pt,
       .mx-sm-n20pt {
       margin-left:-1.25rem!important
      }
       .m-sm-n24pt {
       margin:-1.5rem!important
      }
       .mt-sm-n24pt,
       .my-sm-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-sm-n24pt,
       .mx-sm-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-sm-n24pt,
       .my-sm-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-sm-n24pt,
       .mx-sm-n24pt {
       margin-left:-1.5rem!important
      }
       .m-sm-n32pt {
       margin:-2rem!important
      }
       .mt-sm-n32pt,
       .my-sm-n32pt {
       margin-top:-2rem!important
      }
       .mr-sm-n32pt,
       .mx-sm-n32pt {
       margin-right:-2rem!important
      }
       .mb-sm-n32pt,
       .my-sm-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-sm-n32pt,
       .mx-sm-n32pt {
       margin-left:-2rem!important
      }
       .m-sm-n40pt {
       margin:-2.5rem!important
      }
       .mt-sm-n40pt,
       .my-sm-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-sm-n40pt,
       .mx-sm-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-sm-n40pt,
       .my-sm-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-sm-n40pt,
       .mx-sm-n40pt {
       margin-left:-2.5rem!important
      }
       .m-sm-n44pt {
       margin:-2.75rem!important
      }
       .mt-sm-n44pt,
       .my-sm-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-sm-n44pt,
       .mx-sm-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-sm-n44pt,
       .my-sm-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-sm-n44pt,
       .mx-sm-n44pt {
       margin-left:-2.75rem!important
      }
       .m-sm-n48pt {
       margin:-3rem!important
      }
       .mt-sm-n48pt,
       .my-sm-n48pt {
       margin-top:-3rem!important
      }
       .mr-sm-n48pt,
       .mx-sm-n48pt {
       margin-right:-3rem!important
      }
       .mb-sm-n48pt,
       .my-sm-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-sm-n48pt,
       .mx-sm-n48pt {
       margin-left:-3rem!important
      }
       .m-sm-n64pt {
       margin:-4rem!important
      }
       .mt-sm-n64pt,
       .my-sm-n64pt {
       margin-top:-4rem!important
      }
       .mr-sm-n64pt,
       .mx-sm-n64pt {
       margin-right:-4rem!important
      }
       .mb-sm-n64pt,
       .my-sm-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-sm-n64pt,
       .mx-sm-n64pt {
       margin-left:-4rem!important
      }
       .m-sm-n112pt {
       margin:-7rem!important
      }
       .mt-sm-n112pt,
       .my-sm-n112pt {
       margin-top:-7rem!important
      }
       .mr-sm-n112pt,
       .mx-sm-n112pt {
       margin-right:-7rem!important
      }
       .mb-sm-n112pt,
       .my-sm-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-sm-n112pt,
       .mx-sm-n112pt {
       margin-left:-7rem!important
      }
       .m-sm-n128pt {
       margin:-8rem!important
      }
       .mt-sm-n128pt,
       .my-sm-n128pt {
       margin-top:-8rem!important
      }
       .mr-sm-n128pt,
       .mx-sm-n128pt {
       margin-right:-8rem!important
      }
       .mb-sm-n128pt,
       .my-sm-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-sm-n128pt,
       .mx-sm-n128pt {
       margin-left:-8rem!important
      }
       .m-sm-auto {
       margin:auto!important
      }
       .mt-sm-auto,
       .my-sm-auto {
       margin-top:auto!important
      }
       .mr-sm-auto,
       .mx-sm-auto {
       margin-right:auto!important
      }
       .mb-sm-auto,
       .my-sm-auto {
       margin-bottom:auto!important
      }
       .ml-sm-auto,
       .mx-sm-auto {
       margin-left:auto!important
      }
     }
     @media (min-width:768px) {
       .m-md-0 {
       margin:0!important
      }
       .mt-md-0,
       .my-md-0 {
       margin-top:0!important
      }
       .mr-md-0,
       .mx-md-0 {
       margin-right:0!important
      }
       .mb-md-0,
       .my-md-0 {
       margin-bottom:0!important
      }
       .ml-md-0,
       .mx-md-0 {
       margin-left:0!important
      }
       .m-md-1 {
       margin:.25rem!important
      }
       .mt-md-1,
       .my-md-1 {
       margin-top:.25rem!important
      }
       .mr-md-1,
       .mx-md-1 {
       margin-right:.25rem!important
      }
       .mb-md-1,
       .my-md-1 {
       margin-bottom:.25rem!important
      }
       .ml-md-1,
       .mx-md-1 {
       margin-left:.25rem!important
      }
       .m-md-2 {
       margin:.5rem!important
      }
       .mt-md-2,
       .my-md-2 {
       margin-top:.5rem!important
      }
       .mr-md-2,
       .mx-md-2 {
       margin-right:.5rem!important
      }
       .mb-md-2,
       .my-md-2 {
       margin-bottom:.5rem!important
      }
       .ml-md-2,
       .mx-md-2 {
       margin-left:.5rem!important
      }
       .m-md-3 {
       margin:1rem!important
      }
       .mt-md-3,
       .my-md-3 {
       margin-top:1rem!important
      }
       .mr-md-3,
       .mx-md-3 {
       margin-right:1rem!important
      }
       .mb-md-3,
       .my-md-3 {
       margin-bottom:1rem!important
      }
       .ml-md-3,
       .mx-md-3 {
       margin-left:1rem!important
      }
       .m-md-4 {
       margin:1.5rem!important
      }
       .mt-md-4,
       .my-md-4 {
       margin-top:1.5rem!important
      }
       .mr-md-4,
       .mx-md-4 {
       margin-right:1.5rem!important
      }
       .mb-md-4,
       .my-md-4 {
       margin-bottom:1.5rem!important
      }
       .ml-md-4,
       .mx-md-4 {
       margin-left:1.5rem!important
      }
       .m-md-5 {
       margin:3rem!important
      }
       .mt-md-5,
       .my-md-5 {
       margin-top:3rem!important
      }
       .mr-md-5,
       .mx-md-5 {
       margin-right:3rem!important
      }
       .mb-md-5,
       .my-md-5 {
       margin-bottom:3rem!important
      }
       .ml-md-5,
       .mx-md-5 {
       margin-left:3rem!important
      }
       .m-md-4pt {
       margin:.25rem!important
      }
       .mt-md-4pt,
       .my-md-4pt {
       margin-top:.25rem!important
      }
       .mr-md-4pt,
       .mx-md-4pt {
       margin-right:.25rem!important
      }
       .mb-md-4pt,
       .my-md-4pt {
       margin-bottom:.25rem!important
      }
       .ml-md-4pt,
       .mx-md-4pt {
       margin-left:.25rem!important
      }
       .m-md-8pt {
       margin:.5rem!important
      }
       .mt-md-8pt,
       .my-md-8pt {
       margin-top:.5rem!important
      }
       .mr-md-8pt,
       .mx-md-8pt {
       margin-right:.5rem!important
      }
       .mb-md-8pt,
       .my-md-8pt {
       margin-bottom:.5rem!important
      }
       .ml-md-8pt,
       .mx-md-8pt {
       margin-left:.5rem!important
      }
       .m-md-12pt {
       margin:.75rem!important
      }
       .mt-md-12pt,
       .my-md-12pt {
       margin-top:.75rem!important
      }
       .mr-md-12pt,
       .mx-md-12pt {
       margin-right:.75rem!important
      }
       .mb-md-12pt,
       .my-md-12pt {
       margin-bottom:.75rem!important
      }
       .ml-md-12pt,
       .mx-md-12pt {
       margin-left:.75rem!important
      }
       .m-md-16pt {
       margin:1rem!important
      }
       .mt-md-16pt,
       .my-md-16pt {
       margin-top:1rem!important
      }
       .mr-md-16pt,
       .mx-md-16pt {
       margin-right:1rem!important
      }
       .mb-md-16pt,
       .my-md-16pt {
       margin-bottom:1rem!important
      }
       .ml-md-16pt,
       .mx-md-16pt {
       margin-left:1rem!important
      }
       .m-md-20pt {
       margin:1.25rem!important
      }
       .mt-md-20pt,
       .my-md-20pt {
       margin-top:1.25rem!important
      }
       .mr-md-20pt,
       .mx-md-20pt {
       margin-right:1.25rem!important
      }
       .mb-md-20pt,
       .my-md-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-md-20pt,
       .mx-md-20pt {
       margin-left:1.25rem!important
      }
       .m-md-24pt {
       margin:1.5rem!important
      }
       .mt-md-24pt,
       .my-md-24pt {
       margin-top:1.5rem!important
      }
       .mr-md-24pt,
       .mx-md-24pt {
       margin-right:1.5rem!important
      }
       .mb-md-24pt,
       .my-md-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-md-24pt,
       .mx-md-24pt {
       margin-left:1.5rem!important
      }
       .m-md-32pt {
       margin:2rem!important
      }
       .mt-md-32pt,
       .my-md-32pt {
       margin-top:2rem!important
      }
       .mr-md-32pt,
       .mx-md-32pt {
       margin-right:2rem!important
      }
       .mb-md-32pt,
       .my-md-32pt {
       margin-bottom:2rem!important
      }
       .ml-md-32pt,
       .mx-md-32pt {
       margin-left:2rem!important
      }
       .m-md-40pt {
       margin:2.5rem!important
      }
       .mt-md-40pt,
       .my-md-40pt {
       margin-top:2.5rem!important
      }
       .mr-md-40pt,
       .mx-md-40pt {
       margin-right:2.5rem!important
      }
       .mb-md-40pt,
       .my-md-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-md-40pt,
       .mx-md-40pt {
       margin-left:2.5rem!important
      }
       .m-md-44pt {
       margin:2.75rem!important
      }
       .mt-md-44pt,
       .my-md-44pt {
       margin-top:2.75rem!important
      }
       .mr-md-44pt,
       .mx-md-44pt {
       margin-right:2.75rem!important
      }
       .mb-md-44pt,
       .my-md-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-md-44pt,
       .mx-md-44pt {
       margin-left:2.75rem!important
      }
       .m-md-48pt {
       margin:3rem!important
      }
       .mt-md-48pt,
       .my-md-48pt {
       margin-top:3rem!important
      }
       .mr-md-48pt,
       .mx-md-48pt {
       margin-right:3rem!important
      }
       .mb-md-48pt,
       .my-md-48pt {
       margin-bottom:3rem!important
      }
       .ml-md-48pt,
       .mx-md-48pt {
       margin-left:3rem!important
      }
       .m-md-64pt {
       margin:4rem!important
      }
       .mt-md-64pt,
       .my-md-64pt {
       margin-top:4rem!important
      }
       .mr-md-64pt,
       .mx-md-64pt {
       margin-right:4rem!important
      }
       .mb-md-64pt,
       .my-md-64pt {
       margin-bottom:4rem!important
      }
       .ml-md-64pt,
       .mx-md-64pt {
       margin-left:4rem!important
      }
       .m-md-112pt {
       margin:7rem!important
      }
       .mt-md-112pt,
       .my-md-112pt {
       margin-top:7rem!important
      }
       .mr-md-112pt,
       .mx-md-112pt {
       margin-right:7rem!important
      }
       .mb-md-112pt,
       .my-md-112pt {
       margin-bottom:7rem!important
      }
       .ml-md-112pt,
       .mx-md-112pt {
       margin-left:7rem!important
      }
       .m-md-128pt {
       margin:8rem!important
      }
       .mt-md-128pt,
       .my-md-128pt {
       margin-top:8rem!important
      }
       .mr-md-128pt,
       .mx-md-128pt {
       margin-right:8rem!important
      }
       .mb-md-128pt,
       .my-md-128pt {
       margin-bottom:8rem!important
      }
       .ml-md-128pt,
       .mx-md-128pt {
       margin-left:8rem!important
      }
       .p-md-0 {
       padding:0!important
      }
       .pt-md-0,
       .py-md-0 {
       padding-top:0!important
      }
       .pr-md-0,
       .px-md-0 {
       padding-right:0!important
      }
       .pb-md-0,
       .py-md-0 {
       padding-bottom:0!important
      }
       .pl-md-0,
       .px-md-0 {
       padding-left:0!important
      }
       .p-md-1 {
       padding:.25rem!important
      }
       .pt-md-1,
       .py-md-1 {
       padding-top:.25rem!important
      }
       .pr-md-1,
       .px-md-1 {
       padding-right:.25rem!important
      }
       .pb-md-1,
       .py-md-1 {
       padding-bottom:.25rem!important
      }
       .pl-md-1,
       .px-md-1 {
       padding-left:.25rem!important
      }
       .p-md-2 {
       padding:.5rem!important
      }
       .pt-md-2,
       .py-md-2 {
       padding-top:.5rem!important
      }
       .pr-md-2,
       .px-md-2 {
       padding-right:.5rem!important
      }
       .pb-md-2,
       .py-md-2 {
       padding-bottom:.5rem!important
      }
       .pl-md-2,
       .px-md-2 {
       padding-left:.5rem!important
      }
       .p-md-3 {
       padding:1rem!important
      }
       .pt-md-3,
       .py-md-3 {
       padding-top:1rem!important
      }
       .pr-md-3,
       .px-md-3 {
       padding-right:1rem!important
      }
       .pb-md-3,
       .py-md-3 {
       padding-bottom:1rem!important
      }
       .pl-md-3,
       .px-md-3 {
       padding-left:1rem!important
      }
       .p-md-4 {
       padding:1.5rem!important
      }
       .pt-md-4,
       .py-md-4 {
       padding-top:1.5rem!important
      }
       .pr-md-4,
       .px-md-4 {
       padding-right:1.5rem!important
      }
       .pb-md-4,
       .py-md-4 {
       padding-bottom:1.5rem!important
      }
       .pl-md-4,
       .px-md-4 {
       padding-left:1.5rem!important
      }
       .p-md-5 {
       padding:3rem!important
      }
       .pt-md-5,
       .py-md-5 {
       padding-top:3rem!important
      }
       .pr-md-5,
       .px-md-5 {
       padding-right:3rem!important
      }
       .pb-md-5,
       .py-md-5 {
       padding-bottom:3rem!important
      }
       .pl-md-5,
       .px-md-5 {
       padding-left:3rem!important
      }
       .p-md-4pt {
       padding:.25rem!important
      }
       .pt-md-4pt,
       .py-md-4pt {
       padding-top:.25rem!important
      }
       .pr-md-4pt,
       .px-md-4pt {
       padding-right:.25rem!important
      }
       .pb-md-4pt,
       .py-md-4pt {
       padding-bottom:.25rem!important
      }
       .pl-md-4pt,
       .px-md-4pt {
       padding-left:.25rem!important
      }
       .p-md-8pt {
       padding:.5rem!important
      }
       .pt-md-8pt,
       .py-md-8pt {
       padding-top:.5rem!important
      }
       .pr-md-8pt,
       .px-md-8pt {
       padding-right:.5rem!important
      }
       .pb-md-8pt,
       .py-md-8pt {
       padding-bottom:.5rem!important
      }
       .pl-md-8pt,
       .px-md-8pt {
       padding-left:.5rem!important
      }
       .p-md-12pt {
       padding:.75rem!important
      }
       .pt-md-12pt,
       .py-md-12pt {
       padding-top:.75rem!important
      }
       .pr-md-12pt,
       .px-md-12pt {
       padding-right:.75rem!important
      }
       .pb-md-12pt,
       .py-md-12pt {
       padding-bottom:.75rem!important
      }
       .pl-md-12pt,
       .px-md-12pt {
       padding-left:.75rem!important
      }
       .p-md-16pt {
       padding:1rem!important
      }
       .pt-md-16pt,
       .py-md-16pt {
       padding-top:1rem!important
      }
       .pr-md-16pt,
       .px-md-16pt {
       padding-right:1rem!important
      }
       .pb-md-16pt,
       .py-md-16pt {
       padding-bottom:1rem!important
      }
       .pl-md-16pt,
       .px-md-16pt {
       padding-left:1rem!important
      }
       .p-md-20pt {
       padding:1.25rem!important
      }
       .pt-md-20pt,
       .py-md-20pt {
       padding-top:1.25rem!important
      }
       .pr-md-20pt,
       .px-md-20pt {
       padding-right:1.25rem!important
      }
       .pb-md-20pt,
       .py-md-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-md-20pt,
       .px-md-20pt {
       padding-left:1.25rem!important
      }
       .p-md-24pt {
       padding:1.5rem!important
      }
       .pt-md-24pt,
       .py-md-24pt {
       padding-top:1.5rem!important
      }
       .pr-md-24pt,
       .px-md-24pt {
       padding-right:1.5rem!important
      }
       .pb-md-24pt,
       .py-md-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-md-24pt,
       .px-md-24pt {
       padding-left:1.5rem!important
      }
       .p-md-32pt {
       padding:2rem!important
      }
       .pt-md-32pt,
       .py-md-32pt {
       padding-top:2rem!important
      }
       .pr-md-32pt,
       .px-md-32pt {
       padding-right:2rem!important
      }
       .pb-md-32pt,
       .py-md-32pt {
       padding-bottom:2rem!important
      }
       .pl-md-32pt,
       .px-md-32pt {
       padding-left:2rem!important
      }
       .p-md-40pt {
       padding:2.5rem!important
      }
       .pt-md-40pt,
       .py-md-40pt {
       padding-top:2.5rem!important
      }
       .pr-md-40pt,
       .px-md-40pt {
       padding-right:2.5rem!important
      }
       .pb-md-40pt,
       .py-md-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-md-40pt,
       .px-md-40pt {
       padding-left:2.5rem!important
      }
       .p-md-44pt {
       padding:2.75rem!important
      }
       .pt-md-44pt,
       .py-md-44pt {
       padding-top:2.75rem!important
      }
       .pr-md-44pt,
       .px-md-44pt {
       padding-right:2.75rem!important
      }
       .pb-md-44pt,
       .py-md-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-md-44pt,
       .px-md-44pt {
       padding-left:2.75rem!important
      }
       .p-md-48pt {
       padding:3rem!important
      }
       .pt-md-48pt,
       .py-md-48pt {
       padding-top:3rem!important
      }
       .pr-md-48pt,
       .px-md-48pt {
       padding-right:3rem!important
      }
       .pb-md-48pt,
       .py-md-48pt {
       padding-bottom:3rem!important
      }
       .pl-md-48pt,
       .px-md-48pt {
       padding-left:3rem!important
      }
       .p-md-64pt {
       padding:4rem!important
      }
       .pt-md-64pt,
       .py-md-64pt {
       padding-top:4rem!important
      }
       .pr-md-64pt,
       .px-md-64pt {
       padding-right:4rem!important
      }
       .pb-md-64pt,
       .py-md-64pt {
       padding-bottom:4rem!important
      }
       .pl-md-64pt,
       .px-md-64pt {
       padding-left:4rem!important
      }
       .p-md-112pt {
       padding:7rem!important
      }
       .pt-md-112pt,
       .py-md-112pt {
       padding-top:7rem!important
      }
       .pr-md-112pt,
       .px-md-112pt {
       padding-right:7rem!important
      }
       .pb-md-112pt,
       .py-md-112pt {
       padding-bottom:7rem!important
      }
       .pl-md-112pt,
       .px-md-112pt {
       padding-left:7rem!important
      }
       .p-md-128pt {
       padding:8rem!important
      }
       .pt-md-128pt,
       .py-md-128pt {
       padding-top:8rem!important
      }
       .pr-md-128pt,
       .px-md-128pt {
       padding-right:8rem!important
      }
       .pb-md-128pt,
       .py-md-128pt {
       padding-bottom:8rem!important
      }
       .pl-md-128pt,
       .px-md-128pt {
       padding-left:8rem!important
      }
       .m-md-n1 {
       margin:-.25rem!important
      }
       .mt-md-n1,
       .my-md-n1 {
       margin-top:-.25rem!important
      }
       .mr-md-n1,
       .mx-md-n1 {
       margin-right:-.25rem!important
      }
       .mb-md-n1,
       .my-md-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-md-n1,
       .mx-md-n1 {
       margin-left:-.25rem!important
      }
       .m-md-n2 {
       margin:-.5rem!important
      }
       .mt-md-n2,
       .my-md-n2 {
       margin-top:-.5rem!important
      }
       .mr-md-n2,
       .mx-md-n2 {
       margin-right:-.5rem!important
      }
       .mb-md-n2,
       .my-md-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-md-n2,
       .mx-md-n2 {
       margin-left:-.5rem!important
      }
       .m-md-n3 {
       margin:-1rem!important
      }
       .mt-md-n3,
       .my-md-n3 {
       margin-top:-1rem!important
      }
       .mr-md-n3,
       .mx-md-n3 {
       margin-right:-1rem!important
      }
       .mb-md-n3,
       .my-md-n3 {
       margin-bottom:-1rem!important
      }
       .ml-md-n3,
       .mx-md-n3 {
       margin-left:-1rem!important
      }
       .m-md-n4 {
       margin:-1.5rem!important
      }
       .mt-md-n4,
       .my-md-n4 {
       margin-top:-1.5rem!important
      }
       .mr-md-n4,
       .mx-md-n4 {
       margin-right:-1.5rem!important
      }
       .mb-md-n4,
       .my-md-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-md-n4,
       .mx-md-n4 {
       margin-left:-1.5rem!important
      }
       .m-md-n5 {
       margin:-3rem!important
      }
       .mt-md-n5,
       .my-md-n5 {
       margin-top:-3rem!important
      }
       .mr-md-n5,
       .mx-md-n5 {
       margin-right:-3rem!important
      }
       .mb-md-n5,
       .my-md-n5 {
       margin-bottom:-3rem!important
      }
       .ml-md-n5,
       .mx-md-n5 {
       margin-left:-3rem!important
      }
       .m-md-n4pt {
       margin:-.25rem!important
      }
       .mt-md-n4pt,
       .my-md-n4pt {
       margin-top:-.25rem!important
      }
       .mr-md-n4pt,
       .mx-md-n4pt {
       margin-right:-.25rem!important
      }
       .mb-md-n4pt,
       .my-md-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-md-n4pt,
       .mx-md-n4pt {
       margin-left:-.25rem!important
      }
       .m-md-n8pt {
       margin:-.5rem!important
      }
       .mt-md-n8pt,
       .my-md-n8pt {
       margin-top:-.5rem!important
      }
       .mr-md-n8pt,
       .mx-md-n8pt {
       margin-right:-.5rem!important
      }
       .mb-md-n8pt,
       .my-md-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-md-n8pt,
       .mx-md-n8pt {
       margin-left:-.5rem!important
      }
       .m-md-n12pt {
       margin:-.75rem!important
      }
       .mt-md-n12pt,
       .my-md-n12pt {
       margin-top:-.75rem!important
      }
       .mr-md-n12pt,
       .mx-md-n12pt {
       margin-right:-.75rem!important
      }
       .mb-md-n12pt,
       .my-md-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-md-n12pt,
       .mx-md-n12pt {
       margin-left:-.75rem!important
      }
       .m-md-n16pt {
       margin:-1rem!important
      }
       .mt-md-n16pt,
       .my-md-n16pt {
       margin-top:-1rem!important
      }
       .mr-md-n16pt,
       .mx-md-n16pt {
       margin-right:-1rem!important
      }
       .mb-md-n16pt,
       .my-md-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-md-n16pt,
       .mx-md-n16pt {
       margin-left:-1rem!important
      }
       .m-md-n20pt {
       margin:-1.25rem!important
      }
       .mt-md-n20pt,
       .my-md-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-md-n20pt,
       .mx-md-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-md-n20pt,
       .my-md-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-md-n20pt,
       .mx-md-n20pt {
       margin-left:-1.25rem!important
      }
       .m-md-n24pt {
       margin:-1.5rem!important
      }
       .mt-md-n24pt,
       .my-md-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-md-n24pt,
       .mx-md-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-md-n24pt,
       .my-md-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-md-n24pt,
       .mx-md-n24pt {
       margin-left:-1.5rem!important
      }
       .m-md-n32pt {
       margin:-2rem!important
      }
       .mt-md-n32pt,
       .my-md-n32pt {
       margin-top:-2rem!important
      }
       .mr-md-n32pt,
       .mx-md-n32pt {
       margin-right:-2rem!important
      }
       .mb-md-n32pt,
       .my-md-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-md-n32pt,
       .mx-md-n32pt {
       margin-left:-2rem!important
      }
       .m-md-n40pt {
       margin:-2.5rem!important
      }
       .mt-md-n40pt,
       .my-md-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-md-n40pt,
       .mx-md-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-md-n40pt,
       .my-md-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-md-n40pt,
       .mx-md-n40pt {
       margin-left:-2.5rem!important
      }
       .m-md-n44pt {
       margin:-2.75rem!important
      }
       .mt-md-n44pt,
       .my-md-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-md-n44pt,
       .mx-md-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-md-n44pt,
       .my-md-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-md-n44pt,
       .mx-md-n44pt {
       margin-left:-2.75rem!important
      }
       .m-md-n48pt {
       margin:-3rem!important
      }
       .mt-md-n48pt,
       .my-md-n48pt {
       margin-top:-3rem!important
      }
       .mr-md-n48pt,
       .mx-md-n48pt {
       margin-right:-3rem!important
      }
       .mb-md-n48pt,
       .my-md-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-md-n48pt,
       .mx-md-n48pt {
       margin-left:-3rem!important
      }
       .m-md-n64pt {
       margin:-4rem!important
      }
       .mt-md-n64pt,
       .my-md-n64pt {
       margin-top:-4rem!important
      }
       .mr-md-n64pt,
       .mx-md-n64pt {
       margin-right:-4rem!important
      }
       .mb-md-n64pt,
       .my-md-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-md-n64pt,
       .mx-md-n64pt {
       margin-left:-4rem!important
      }
       .m-md-n112pt {
       margin:-7rem!important
      }
       .mt-md-n112pt,
       .my-md-n112pt {
       margin-top:-7rem!important
      }
       .mr-md-n112pt,
       .mx-md-n112pt {
       margin-right:-7rem!important
      }
       .mb-md-n112pt,
       .my-md-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-md-n112pt,
       .mx-md-n112pt {
       margin-left:-7rem!important
      }
       .m-md-n128pt {
       margin:-8rem!important
      }
       .mt-md-n128pt,
       .my-md-n128pt {
       margin-top:-8rem!important
      }
       .mr-md-n128pt,
       .mx-md-n128pt {
       margin-right:-8rem!important
      }
       .mb-md-n128pt,
       .my-md-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-md-n128pt,
       .mx-md-n128pt {
       margin-left:-8rem!important
      }
       .m-md-auto {
       margin:auto!important
      }
       .mt-md-auto,
       .my-md-auto {
       margin-top:auto!important
      }
       .mr-md-auto,
       .mx-md-auto {
       margin-right:auto!important
      }
       .mb-md-auto,
       .my-md-auto {
       margin-bottom:auto!important
      }
       .ml-md-auto,
       .mx-md-auto {
       margin-left:auto!important
      }
     }
     @media (min-width:992px) {
       .m-lg-0 {
       margin:0!important
      }
       .mt-lg-0,
       .my-lg-0 {
       margin-top:0!important
      }
       .mr-lg-0,
       .mx-lg-0 {
       margin-right:0!important
      }
       .mb-lg-0,
       .my-lg-0 {
       margin-bottom:0!important
      }
       .ml-lg-0,
       .mx-lg-0 {
       margin-left:0!important
      }
       .m-lg-1 {
       margin:.25rem!important
      }
       .mt-lg-1,
       .my-lg-1 {
       margin-top:.25rem!important
      }
       .mr-lg-1,
       .mx-lg-1 {
       margin-right:.25rem!important
      }
       .mb-lg-1,
       .my-lg-1 {
       margin-bottom:.25rem!important
      }
       .ml-lg-1,
       .mx-lg-1 {
       margin-left:.25rem!important
      }
       .m-lg-2 {
       margin:.5rem!important
      }
       .mt-lg-2,
       .my-lg-2 {
       margin-top:.5rem!important
      }
       .mr-lg-2,
       .mx-lg-2 {
       margin-right:.5rem!important
      }
       .mb-lg-2,
       .my-lg-2 {
       margin-bottom:.5rem!important
      }
       .ml-lg-2,
       .mx-lg-2 {
       margin-left:.5rem!important
      }
       .m-lg-3 {
       margin:1rem!important
      }
       .mt-lg-3,
       .my-lg-3 {
       margin-top:1rem!important
      }
       .mr-lg-3,
       .mx-lg-3 {
       margin-right:1rem!important
      }
       .mb-lg-3,
       .my-lg-3 {
       margin-bottom:1rem!important
      }
       .ml-lg-3,
       .mx-lg-3 {
       margin-left:1rem!important
      }
       .m-lg-4 {
       margin:1.5rem!important
      }
       .mt-lg-4,
       .my-lg-4 {
       margin-top:1.5rem!important
      }
       .mr-lg-4,
       .mx-lg-4 {
       margin-right:1.5rem!important
      }
       .mb-lg-4,
       .my-lg-4 {
       margin-bottom:1.5rem!important
      }
       .ml-lg-4,
       .mx-lg-4 {
       margin-left:1.5rem!important
      }
       .m-lg-5 {
       margin:3rem!important
      }
       .mt-lg-5,
       .my-lg-5 {
       margin-top:3rem!important
      }
       .mr-lg-5,
       .mx-lg-5 {
       margin-right:3rem!important
      }
       .mb-lg-5,
       .my-lg-5 {
       margin-bottom:3rem!important
      }
       .ml-lg-5,
       .mx-lg-5 {
       margin-left:3rem!important
      }
       .m-lg-4pt {
       margin:.25rem!important
      }
       .mt-lg-4pt,
       .my-lg-4pt {
       margin-top:.25rem!important
      }
       .mr-lg-4pt,
       .mx-lg-4pt {
       margin-right:.25rem!important
      }
       .mb-lg-4pt,
       .my-lg-4pt {
       margin-bottom:.25rem!important
      }
       .ml-lg-4pt,
       .mx-lg-4pt {
       margin-left:.25rem!important
      }
       .m-lg-8pt {
       margin:.5rem!important
      }
       .mt-lg-8pt,
       .my-lg-8pt {
       margin-top:.5rem!important
      }
       .mr-lg-8pt,
       .mx-lg-8pt {
       margin-right:.5rem!important
      }
       .mb-lg-8pt,
       .my-lg-8pt {
       margin-bottom:.5rem!important
      }
       .ml-lg-8pt,
       .mx-lg-8pt {
       margin-left:.5rem!important
      }
       .m-lg-12pt {
       margin:.75rem!important
      }
       .mt-lg-12pt,
       .my-lg-12pt {
       margin-top:.75rem!important
      }
       .mr-lg-12pt,
       .mx-lg-12pt {
       margin-right:.75rem!important
      }
       .mb-lg-12pt,
       .my-lg-12pt {
       margin-bottom:.75rem!important
      }
       .ml-lg-12pt,
       .mx-lg-12pt {
       margin-left:.75rem!important
      }
       .m-lg-16pt {
       margin:1rem!important
      }
       .mt-lg-16pt,
       .my-lg-16pt {
       margin-top:1rem!important
      }
       .mr-lg-16pt,
       .mx-lg-16pt {
       margin-right:1rem!important
      }
       .mb-lg-16pt,
       .my-lg-16pt {
       margin-bottom:1rem!important
      }
       .ml-lg-16pt,
       .mx-lg-16pt {
       margin-left:1rem!important
      }
       .m-lg-20pt {
       margin:1.25rem!important
      }
       .mt-lg-20pt,
       .my-lg-20pt {
       margin-top:1.25rem!important
      }
       .mr-lg-20pt,
       .mx-lg-20pt {
       margin-right:1.25rem!important
      }
       .mb-lg-20pt,
       .my-lg-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-lg-20pt,
       .mx-lg-20pt {
       margin-left:1.25rem!important
      }
       .m-lg-24pt {
       margin:1.5rem!important
      }
       .mt-lg-24pt,
       .my-lg-24pt {
       margin-top:1.5rem!important
      }
       .mr-lg-24pt,
       .mx-lg-24pt {
       margin-right:1.5rem!important
      }
       .mb-lg-24pt,
       .my-lg-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-lg-24pt,
       .mx-lg-24pt {
       margin-left:1.5rem!important
      }
       .m-lg-32pt {
       margin:2rem!important
      }
       .mt-lg-32pt,
       .my-lg-32pt {
       margin-top:2rem!important
      }
       .mr-lg-32pt,
       .mx-lg-32pt {
       margin-right:2rem!important
      }
       .mb-lg-32pt,
       .my-lg-32pt {
       margin-bottom:2rem!important
      }
       .ml-lg-32pt,
       .mx-lg-32pt {
       margin-left:2rem!important
      }
       .m-lg-40pt {
       margin:2.5rem!important
      }
       .mt-lg-40pt,
       .my-lg-40pt {
       margin-top:2.5rem!important
      }
       .mr-lg-40pt,
       .mx-lg-40pt {
       margin-right:2.5rem!important
      }
       .mb-lg-40pt,
       .my-lg-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-lg-40pt,
       .mx-lg-40pt {
       margin-left:2.5rem!important
      }
       .m-lg-44pt {
       margin:2.75rem!important
      }
       .mt-lg-44pt,
       .my-lg-44pt {
       margin-top:2.75rem!important
      }
       .mr-lg-44pt,
       .mx-lg-44pt {
       margin-right:2.75rem!important
      }
       .mb-lg-44pt,
       .my-lg-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-lg-44pt,
       .mx-lg-44pt {
       margin-left:2.75rem!important
      }
       .m-lg-48pt {
       margin:3rem!important
      }
       .mt-lg-48pt,
       .my-lg-48pt {
       margin-top:3rem!important
      }
       .mr-lg-48pt,
       .mx-lg-48pt {
       margin-right:3rem!important
      }
       .mb-lg-48pt,
       .my-lg-48pt {
       margin-bottom:3rem!important
      }
       .ml-lg-48pt,
       .mx-lg-48pt {
       margin-left:3rem!important
      }
       .m-lg-64pt {
       margin:4rem!important
      }
       .mt-lg-64pt,
       .my-lg-64pt {
       margin-top:4rem!important
      }
       .mr-lg-64pt,
       .mx-lg-64pt {
       margin-right:4rem!important
      }
       .mb-lg-64pt,
       .my-lg-64pt {
       margin-bottom:4rem!important
      }
       .ml-lg-64pt,
       .mx-lg-64pt {
       margin-left:4rem!important
      }
       .m-lg-112pt {
       margin:7rem!important
      }
       .mt-lg-112pt,
       .my-lg-112pt {
       margin-top:7rem!important
      }
       .mr-lg-112pt,
       .mx-lg-112pt {
       margin-right:7rem!important
      }
       .mb-lg-112pt,
       .my-lg-112pt {
       margin-bottom:7rem!important
      }
       .ml-lg-112pt,
       .mx-lg-112pt {
       margin-left:7rem!important
      }
       .m-lg-128pt {
       margin:8rem!important
      }
       .mt-lg-128pt,
       .my-lg-128pt {
       margin-top:8rem!important
      }
       .mr-lg-128pt,
       .mx-lg-128pt {
       margin-right:8rem!important
      }
       .mb-lg-128pt,
       .my-lg-128pt {
       margin-bottom:8rem!important
      }
       .ml-lg-128pt,
       .mx-lg-128pt {
       margin-left:8rem!important
      }
       .p-lg-0 {
       padding:0!important
      }
       .pt-lg-0,
       .py-lg-0 {
       padding-top:0!important
      }
       .pr-lg-0,
       .px-lg-0 {
       padding-right:0!important
      }
       .pb-lg-0,
       .py-lg-0 {
       padding-bottom:0!important
      }
       .pl-lg-0,
       .px-lg-0 {
       padding-left:0!important
      }
       .p-lg-1 {
       padding:.25rem!important
      }
       .pt-lg-1,
       .py-lg-1 {
       padding-top:.25rem!important
      }
       .pr-lg-1,
       .px-lg-1 {
       padding-right:.25rem!important
      }
       .pb-lg-1,
       .py-lg-1 {
       padding-bottom:.25rem!important
      }
       .pl-lg-1,
       .px-lg-1 {
       padding-left:.25rem!important
      }
       .p-lg-2 {
       padding:.5rem!important
      }
       .pt-lg-2,
       .py-lg-2 {
       padding-top:.5rem!important
      }
       .pr-lg-2,
       .px-lg-2 {
       padding-right:.5rem!important
      }
       .pb-lg-2,
       .py-lg-2 {
       padding-bottom:.5rem!important
      }
       .pl-lg-2,
       .px-lg-2 {
       padding-left:.5rem!important
      }
       .p-lg-3 {
       padding:1rem!important
      }
       .pt-lg-3,
       .py-lg-3 {
       padding-top:1rem!important
      }
       .pr-lg-3,
       .px-lg-3 {
       padding-right:1rem!important
      }
       .pb-lg-3,
       .py-lg-3 {
       padding-bottom:1rem!important
      }
       .pl-lg-3,
       .px-lg-3 {
       padding-left:1rem!important
      }
       .p-lg-4 {
       padding:1.5rem!important
      }
       .pt-lg-4,
       .py-lg-4 {
       padding-top:1.5rem!important
      }
       .pr-lg-4,
       .px-lg-4 {
       padding-right:1.5rem!important
      }
       .pb-lg-4,
       .py-lg-4 {
       padding-bottom:1.5rem!important
      }
       .pl-lg-4,
       .px-lg-4 {
       padding-left:1.5rem!important
      }
       .p-lg-5 {
       padding:3rem!important
      }
       .pt-lg-5,
       .py-lg-5 {
       padding-top:3rem!important
      }
       .pr-lg-5,
       .px-lg-5 {
       padding-right:3rem!important
      }
       .pb-lg-5,
       .py-lg-5 {
       padding-bottom:3rem!important
      }
       .pl-lg-5,
       .px-lg-5 {
       padding-left:3rem!important
      }
       .p-lg-4pt {
       padding:.25rem!important
      }
       .pt-lg-4pt,
       .py-lg-4pt {
       padding-top:.25rem!important
      }
       .pr-lg-4pt,
       .px-lg-4pt {
       padding-right:.25rem!important
      }
       .pb-lg-4pt,
       .py-lg-4pt {
       padding-bottom:.25rem!important
      }
       .pl-lg-4pt,
       .px-lg-4pt {
       padding-left:.25rem!important
      }
       .p-lg-8pt {
       padding:.5rem!important
      }
       .pt-lg-8pt,
       .py-lg-8pt {
       padding-top:.5rem!important
      }
       .pr-lg-8pt,
       .px-lg-8pt {
       padding-right:.5rem!important
      }
       .pb-lg-8pt,
       .py-lg-8pt {
       padding-bottom:.5rem!important
      }
       .pl-lg-8pt,
       .px-lg-8pt {
       padding-left:.5rem!important
      }
       .p-lg-12pt {
       padding:.75rem!important
      }
       .pt-lg-12pt,
       .py-lg-12pt {
       padding-top:.75rem!important
      }
       .pr-lg-12pt,
       .px-lg-12pt {
       padding-right:.75rem!important
      }
       .pb-lg-12pt,
       .py-lg-12pt {
       padding-bottom:.75rem!important
      }
       .pl-lg-12pt,
       .px-lg-12pt {
       padding-left:.75rem!important
      }
       .p-lg-16pt {
       padding:1rem!important
      }
       .pt-lg-16pt,
       .py-lg-16pt {
       padding-top:1rem!important
      }
       .pr-lg-16pt,
       .px-lg-16pt {
       padding-right:1rem!important
      }
       .pb-lg-16pt,
       .py-lg-16pt {
       padding-bottom:1rem!important
      }
       .pl-lg-16pt,
       .px-lg-16pt {
       padding-left:1rem!important
      }
       .p-lg-20pt {
       padding:1.25rem!important
      }
       .pt-lg-20pt,
       .py-lg-20pt {
       padding-top:1.25rem!important
      }
       .pr-lg-20pt,
       .px-lg-20pt {
       padding-right:1.25rem!important
      }
       .pb-lg-20pt,
       .py-lg-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-lg-20pt,
       .px-lg-20pt {
       padding-left:1.25rem!important
      }
       .p-lg-24pt {
       padding:1.5rem!important
      }
       .pt-lg-24pt,
       .py-lg-24pt {
       padding-top:1.5rem!important
      }
       .pr-lg-24pt,
       .px-lg-24pt {
       padding-right:1.5rem!important
      }
       .pb-lg-24pt,
       .py-lg-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-lg-24pt,
       .px-lg-24pt {
       padding-left:1.5rem!important
      }
       .p-lg-32pt {
       padding:2rem!important
      }
       .pt-lg-32pt,
       .py-lg-32pt {
       padding-top:2rem!important
      }
       .pr-lg-32pt,
       .px-lg-32pt {
       padding-right:2rem!important
      }
       .pb-lg-32pt,
       .py-lg-32pt {
       padding-bottom:2rem!important
      }
       .pl-lg-32pt,
       .px-lg-32pt {
       padding-left:2rem!important
      }
       .p-lg-40pt {
       padding:2.5rem!important
      }
       .pt-lg-40pt,
       .py-lg-40pt {
       padding-top:2.5rem!important
      }
       .pr-lg-40pt,
       .px-lg-40pt {
       padding-right:2.5rem!important
      }
       .pb-lg-40pt,
       .py-lg-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-lg-40pt,
       .px-lg-40pt {
       padding-left:2.5rem!important
      }
       .p-lg-44pt {
       padding:2.75rem!important
      }
       .pt-lg-44pt,
       .py-lg-44pt {
       padding-top:2.75rem!important
      }
       .pr-lg-44pt,
       .px-lg-44pt {
       padding-right:2.75rem!important
      }
       .pb-lg-44pt,
       .py-lg-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-lg-44pt,
       .px-lg-44pt {
       padding-left:2.75rem!important
      }
       .p-lg-48pt {
       padding:3rem!important
      }
       .pt-lg-48pt,
       .py-lg-48pt {
       padding-top:3rem!important
      }
       .pr-lg-48pt,
       .px-lg-48pt {
       padding-right:3rem!important
      }
       .pb-lg-48pt,
       .py-lg-48pt {
       padding-bottom:3rem!important
      }
       .pl-lg-48pt,
       .px-lg-48pt {
       padding-left:3rem!important
      }
       .p-lg-64pt {
       padding:4rem!important
      }
       .pt-lg-64pt,
       .py-lg-64pt {
       padding-top:4rem!important
      }
       .pr-lg-64pt,
       .px-lg-64pt {
       padding-right:4rem!important
      }
       .pb-lg-64pt,
       .py-lg-64pt {
       padding-bottom:4rem!important
      }
       .pl-lg-64pt,
       .px-lg-64pt {
       padding-left:4rem!important
      }
       .p-lg-112pt {
       padding:7rem!important
      }
       .pt-lg-112pt,
       .py-lg-112pt {
       padding-top:7rem!important
      }
       .pr-lg-112pt,
       .px-lg-112pt {
       padding-right:7rem!important
      }
       .pb-lg-112pt,
       .py-lg-112pt {
       padding-bottom:7rem!important
      }
       .pl-lg-112pt,
       .px-lg-112pt {
       padding-left:7rem!important
      }
       .p-lg-128pt {
       padding:8rem!important
      }
       .pt-lg-128pt,
       .py-lg-128pt {
       padding-top:8rem!important
      }
       .pr-lg-128pt,
       .px-lg-128pt {
       padding-right:8rem!important
      }
       .pb-lg-128pt,
       .py-lg-128pt {
       padding-bottom:8rem!important
      }
       .pl-lg-128pt,
       .px-lg-128pt {
       padding-left:8rem!important
      }
       .m-lg-n1 {
       margin:-.25rem!important
      }
       .mt-lg-n1,
       .my-lg-n1 {
       margin-top:-.25rem!important
      }
       .mr-lg-n1,
       .mx-lg-n1 {
       margin-right:-.25rem!important
      }
       .mb-lg-n1,
       .my-lg-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-lg-n1,
       .mx-lg-n1 {
       margin-left:-.25rem!important
      }
       .m-lg-n2 {
       margin:-.5rem!important
      }
       .mt-lg-n2,
       .my-lg-n2 {
       margin-top:-.5rem!important
      }
       .mr-lg-n2,
       .mx-lg-n2 {
       margin-right:-.5rem!important
      }
       .mb-lg-n2,
       .my-lg-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-lg-n2,
       .mx-lg-n2 {
       margin-left:-.5rem!important
      }
       .m-lg-n3 {
       margin:-1rem!important
      }
       .mt-lg-n3,
       .my-lg-n3 {
       margin-top:-1rem!important
      }
       .mr-lg-n3,
       .mx-lg-n3 {
       margin-right:-1rem!important
      }
       .mb-lg-n3,
       .my-lg-n3 {
       margin-bottom:-1rem!important
      }
       .ml-lg-n3,
       .mx-lg-n3 {
       margin-left:-1rem!important
      }
       .m-lg-n4 {
       margin:-1.5rem!important
      }
       .mt-lg-n4,
       .my-lg-n4 {
       margin-top:-1.5rem!important
      }
       .mr-lg-n4,
       .mx-lg-n4 {
       margin-right:-1.5rem!important
      }
       .mb-lg-n4,
       .my-lg-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-lg-n4,
       .mx-lg-n4 {
       margin-left:-1.5rem!important
      }
       .m-lg-n5 {
       margin:-3rem!important
      }
       .mt-lg-n5,
       .my-lg-n5 {
       margin-top:-3rem!important
      }
       .mr-lg-n5,
       .mx-lg-n5 {
       margin-right:-3rem!important
      }
       .mb-lg-n5,
       .my-lg-n5 {
       margin-bottom:-3rem!important
      }
       .ml-lg-n5,
       .mx-lg-n5 {
       margin-left:-3rem!important
      }
       .m-lg-n4pt {
       margin:-.25rem!important
      }
       .mt-lg-n4pt,
       .my-lg-n4pt {
       margin-top:-.25rem!important
      }
       .mr-lg-n4pt,
       .mx-lg-n4pt {
       margin-right:-.25rem!important
      }
       .mb-lg-n4pt,
       .my-lg-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-lg-n4pt,
       .mx-lg-n4pt {
       margin-left:-.25rem!important
      }
       .m-lg-n8pt {
       margin:-.5rem!important
      }
       .mt-lg-n8pt,
       .my-lg-n8pt {
       margin-top:-.5rem!important
      }
       .mr-lg-n8pt,
       .mx-lg-n8pt {
       margin-right:-.5rem!important
      }
       .mb-lg-n8pt,
       .my-lg-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-lg-n8pt,
       .mx-lg-n8pt {
       margin-left:-.5rem!important
      }
       .m-lg-n12pt {
       margin:-.75rem!important
      }
       .mt-lg-n12pt,
       .my-lg-n12pt {
       margin-top:-.75rem!important
      }
       .mr-lg-n12pt,
       .mx-lg-n12pt {
       margin-right:-.75rem!important
      }
       .mb-lg-n12pt,
       .my-lg-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-lg-n12pt,
       .mx-lg-n12pt {
       margin-left:-.75rem!important
      }
       .m-lg-n16pt {
       margin:-1rem!important
      }
       .mt-lg-n16pt,
       .my-lg-n16pt {
       margin-top:-1rem!important
      }
       .mr-lg-n16pt,
       .mx-lg-n16pt {
       margin-right:-1rem!important
      }
       .mb-lg-n16pt,
       .my-lg-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-lg-n16pt,
       .mx-lg-n16pt {
       margin-left:-1rem!important
      }
       .m-lg-n20pt {
       margin:-1.25rem!important
      }
       .mt-lg-n20pt,
       .my-lg-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-lg-n20pt,
       .mx-lg-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-lg-n20pt,
       .my-lg-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-lg-n20pt,
       .mx-lg-n20pt {
       margin-left:-1.25rem!important
      }
       .m-lg-n24pt {
       margin:-1.5rem!important
      }
       .mt-lg-n24pt,
       .my-lg-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-lg-n24pt,
       .mx-lg-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-lg-n24pt,
       .my-lg-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-lg-n24pt,
       .mx-lg-n24pt {
       margin-left:-1.5rem!important
      }
       .m-lg-n32pt {
       margin:-2rem!important
      }
       .mt-lg-n32pt,
       .my-lg-n32pt {
       margin-top:-2rem!important
      }
       .mr-lg-n32pt,
       .mx-lg-n32pt {
       margin-right:-2rem!important
      }
       .mb-lg-n32pt,
       .my-lg-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-lg-n32pt,
       .mx-lg-n32pt {
       margin-left:-2rem!important
      }
       .m-lg-n40pt {
       margin:-2.5rem!important
      }
       .mt-lg-n40pt,
       .my-lg-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-lg-n40pt,
       .mx-lg-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-lg-n40pt,
       .my-lg-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-lg-n40pt,
       .mx-lg-n40pt {
       margin-left:-2.5rem!important
      }
       .m-lg-n44pt {
       margin:-2.75rem!important
      }
       .mt-lg-n44pt,
       .my-lg-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-lg-n44pt,
       .mx-lg-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-lg-n44pt,
       .my-lg-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-lg-n44pt,
       .mx-lg-n44pt {
       margin-left:-2.75rem!important
      }
       .m-lg-n48pt {
       margin:-3rem!important
      }
       .mt-lg-n48pt,
       .my-lg-n48pt {
       margin-top:-3rem!important
      }
       .mr-lg-n48pt,
       .mx-lg-n48pt {
       margin-right:-3rem!important
      }
       .mb-lg-n48pt,
       .my-lg-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-lg-n48pt,
       .mx-lg-n48pt {
       margin-left:-3rem!important
      }
       .m-lg-n64pt {
       margin:-4rem!important
      }
       .mt-lg-n64pt,
       .my-lg-n64pt {
       margin-top:-4rem!important
      }
       .mr-lg-n64pt,
       .mx-lg-n64pt {
       margin-right:-4rem!important
      }
       .mb-lg-n64pt,
       .my-lg-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-lg-n64pt,
       .mx-lg-n64pt {
       margin-left:-4rem!important
      }
       .m-lg-n112pt {
       margin:-7rem!important
      }
       .mt-lg-n112pt,
       .my-lg-n112pt {
       margin-top:-7rem!important
      }
       .mr-lg-n112pt,
       .mx-lg-n112pt {
       margin-right:-7rem!important
      }
       .mb-lg-n112pt,
       .my-lg-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-lg-n112pt,
       .mx-lg-n112pt {
       margin-left:-7rem!important
      }
       .m-lg-n128pt {
       margin:-8rem!important
      }
       .mt-lg-n128pt,
       .my-lg-n128pt {
       margin-top:-8rem!important
      }
       .mr-lg-n128pt,
       .mx-lg-n128pt {
       margin-right:-8rem!important
      }
       .mb-lg-n128pt,
       .my-lg-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-lg-n128pt,
       .mx-lg-n128pt {
       margin-left:-8rem!important
      }
       .m-lg-auto {
       margin:auto!important
      }
       .mt-lg-auto,
       .my-lg-auto {
       margin-top:auto!important
      }
       .mr-lg-auto,
       .mx-lg-auto {
       margin-right:auto!important
      }
       .mb-lg-auto,
       .my-lg-auto {
       margin-bottom:auto!important
      }
       .ml-lg-auto,
       .mx-lg-auto {
       margin-left:auto!important
      }
     }
     @media (min-width:1200px) {
       .m-xl-0 {
       margin:0!important
      }
       .mt-xl-0,
       .my-xl-0 {
       margin-top:0!important
      }
       .mr-xl-0,
       .mx-xl-0 {
       margin-right:0!important
      }
       .mb-xl-0,
       .my-xl-0 {
       margin-bottom:0!important
      }
       .ml-xl-0,
       .mx-xl-0 {
       margin-left:0!important
      }
       .m-xl-1 {
       margin:.25rem!important
      }
       .mt-xl-1,
       .my-xl-1 {
       margin-top:.25rem!important
      }
       .mr-xl-1,
       .mx-xl-1 {
       margin-right:.25rem!important
      }
       .mb-xl-1,
       .my-xl-1 {
       margin-bottom:.25rem!important
      }
       .ml-xl-1,
       .mx-xl-1 {
       margin-left:.25rem!important
      }
       .m-xl-2 {
       margin:.5rem!important
      }
       .mt-xl-2,
       .my-xl-2 {
       margin-top:.5rem!important
      }
       .mr-xl-2,
       .mx-xl-2 {
       margin-right:.5rem!important
      }
       .mb-xl-2,
       .my-xl-2 {
       margin-bottom:.5rem!important
      }
       .ml-xl-2,
       .mx-xl-2 {
       margin-left:.5rem!important
      }
       .m-xl-3 {
       margin:1rem!important
      }
       .mt-xl-3,
       .my-xl-3 {
       margin-top:1rem!important
      }
       .mr-xl-3,
       .mx-xl-3 {
       margin-right:1rem!important
      }
       .mb-xl-3,
       .my-xl-3 {
       margin-bottom:1rem!important
      }
       .ml-xl-3,
       .mx-xl-3 {
       margin-left:1rem!important
      }
       .m-xl-4 {
       margin:1.5rem!important
      }
       .mt-xl-4,
       .my-xl-4 {
       margin-top:1.5rem!important
      }
       .mr-xl-4,
       .mx-xl-4 {
       margin-right:1.5rem!important
      }
       .mb-xl-4,
       .my-xl-4 {
       margin-bottom:1.5rem!important
      }
       .ml-xl-4,
       .mx-xl-4 {
       margin-left:1.5rem!important
      }
       .m-xl-5 {
       margin:3rem!important
      }
       .mt-xl-5,
       .my-xl-5 {
       margin-top:3rem!important
      }
       .mr-xl-5,
       .mx-xl-5 {
       margin-right:3rem!important
      }
       .mb-xl-5,
       .my-xl-5 {
       margin-bottom:3rem!important
      }
       .ml-xl-5,
       .mx-xl-5 {
       margin-left:3rem!important
      }
       .m-xl-4pt {
       margin:.25rem!important
      }
       .mt-xl-4pt,
       .my-xl-4pt {
       margin-top:.25rem!important
      }
       .mr-xl-4pt,
       .mx-xl-4pt {
       margin-right:.25rem!important
      }
       .mb-xl-4pt,
       .my-xl-4pt {
       margin-bottom:.25rem!important
      }
       .ml-xl-4pt,
       .mx-xl-4pt {
       margin-left:.25rem!important
      }
       .m-xl-8pt {
       margin:.5rem!important
      }
       .mt-xl-8pt,
       .my-xl-8pt {
       margin-top:.5rem!important
      }
       .mr-xl-8pt,
       .mx-xl-8pt {
       margin-right:.5rem!important
      }
       .mb-xl-8pt,
       .my-xl-8pt {
       margin-bottom:.5rem!important
      }
       .ml-xl-8pt,
       .mx-xl-8pt {
       margin-left:.5rem!important
      }
       .m-xl-12pt {
       margin:.75rem!important
      }
       .mt-xl-12pt,
       .my-xl-12pt {
       margin-top:.75rem!important
      }
       .mr-xl-12pt,
       .mx-xl-12pt {
       margin-right:.75rem!important
      }
       .mb-xl-12pt,
       .my-xl-12pt {
       margin-bottom:.75rem!important
      }
       .ml-xl-12pt,
       .mx-xl-12pt {
       margin-left:.75rem!important
      }
       .m-xl-16pt {
       margin:1rem!important
      }
       .mt-xl-16pt,
       .my-xl-16pt {
       margin-top:1rem!important
      }
       .mr-xl-16pt,
       .mx-xl-16pt {
       margin-right:1rem!important
      }
       .mb-xl-16pt,
       .my-xl-16pt {
       margin-bottom:1rem!important
      }
       .ml-xl-16pt,
       .mx-xl-16pt {
       margin-left:1rem!important
      }
       .m-xl-20pt {
       margin:1.25rem!important
      }
       .mt-xl-20pt,
       .my-xl-20pt {
       margin-top:1.25rem!important
      }
       .mr-xl-20pt,
       .mx-xl-20pt {
       margin-right:1.25rem!important
      }
       .mb-xl-20pt,
       .my-xl-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-xl-20pt,
       .mx-xl-20pt {
       margin-left:1.25rem!important
      }
       .m-xl-24pt {
       margin:1.5rem!important
      }
       .mt-xl-24pt,
       .my-xl-24pt {
       margin-top:1.5rem!important
      }
       .mr-xl-24pt,
       .mx-xl-24pt {
       margin-right:1.5rem!important
      }
       .mb-xl-24pt,
       .my-xl-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-xl-24pt,
       .mx-xl-24pt {
       margin-left:1.5rem!important
      }
       .m-xl-32pt {
       margin:2rem!important
      }
       .mt-xl-32pt,
       .my-xl-32pt {
       margin-top:2rem!important
      }
       .mr-xl-32pt,
       .mx-xl-32pt {
       margin-right:2rem!important
      }
       .mb-xl-32pt,
       .my-xl-32pt {
       margin-bottom:2rem!important
      }
       .ml-xl-32pt,
       .mx-xl-32pt {
       margin-left:2rem!important
      }
       .m-xl-40pt {
       margin:2.5rem!important
      }
       .mt-xl-40pt,
       .my-xl-40pt {
       margin-top:2.5rem!important
      }
       .mr-xl-40pt,
       .mx-xl-40pt {
       margin-right:2.5rem!important
      }
       .mb-xl-40pt,
       .my-xl-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-xl-40pt,
       .mx-xl-40pt {
       margin-left:2.5rem!important
      }
       .m-xl-44pt {
       margin:2.75rem!important
      }
       .mt-xl-44pt,
       .my-xl-44pt {
       margin-top:2.75rem!important
      }
       .mr-xl-44pt,
       .mx-xl-44pt {
       margin-right:2.75rem!important
      }
       .mb-xl-44pt,
       .my-xl-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-xl-44pt,
       .mx-xl-44pt {
       margin-left:2.75rem!important
      }
       .m-xl-48pt {
       margin:3rem!important
      }
       .mt-xl-48pt,
       .my-xl-48pt {
       margin-top:3rem!important
      }
       .mr-xl-48pt,
       .mx-xl-48pt {
       margin-right:3rem!important
      }
       .mb-xl-48pt,
       .my-xl-48pt {
       margin-bottom:3rem!important
      }
       .ml-xl-48pt,
       .mx-xl-48pt {
       margin-left:3rem!important
      }
       .m-xl-64pt {
       margin:4rem!important
      }
       .mt-xl-64pt,
       .my-xl-64pt {
       margin-top:4rem!important
      }
       .mr-xl-64pt,
       .mx-xl-64pt {
       margin-right:4rem!important
      }
       .mb-xl-64pt,
       .my-xl-64pt {
       margin-bottom:4rem!important
      }
       .ml-xl-64pt,
       .mx-xl-64pt {
       margin-left:4rem!important
      }
       .m-xl-112pt {
       margin:7rem!important
      }
       .mt-xl-112pt,
       .my-xl-112pt {
       margin-top:7rem!important
      }
       .mr-xl-112pt,
       .mx-xl-112pt {
       margin-right:7rem!important
      }
       .mb-xl-112pt,
       .my-xl-112pt {
       margin-bottom:7rem!important
      }
       .ml-xl-112pt,
       .mx-xl-112pt {
       margin-left:7rem!important
      }
       .m-xl-128pt {
       margin:8rem!important
      }
       .mt-xl-128pt,
       .my-xl-128pt {
       margin-top:8rem!important
      }
       .mr-xl-128pt,
       .mx-xl-128pt {
       margin-right:8rem!important
      }
       .mb-xl-128pt,
       .my-xl-128pt {
       margin-bottom:8rem!important
      }
       .ml-xl-128pt,
       .mx-xl-128pt {
       margin-left:8rem!important
      }
       .p-xl-0 {
       padding:0!important
      }
       .pt-xl-0,
       .py-xl-0 {
       padding-top:0!important
      }
       .pr-xl-0,
       .px-xl-0 {
       padding-right:0!important
      }
       .pb-xl-0,
       .py-xl-0 {
       padding-bottom:0!important
      }
       .pl-xl-0,
       .px-xl-0 {
       padding-left:0!important
      }
       .p-xl-1 {
       padding:.25rem!important
      }
       .pt-xl-1,
       .py-xl-1 {
       padding-top:.25rem!important
      }
       .pr-xl-1,
       .px-xl-1 {
       padding-right:.25rem!important
      }
       .pb-xl-1,
       .py-xl-1 {
       padding-bottom:.25rem!important
      }
       .pl-xl-1,
       .px-xl-1 {
       padding-left:.25rem!important
      }
       .p-xl-2 {
       padding:.5rem!important
      }
       .pt-xl-2,
       .py-xl-2 {
       padding-top:.5rem!important
      }
       .pr-xl-2,
       .px-xl-2 {
       padding-right:.5rem!important
      }
       .pb-xl-2,
       .py-xl-2 {
       padding-bottom:.5rem!important
      }
       .pl-xl-2,
       .px-xl-2 {
       padding-left:.5rem!important
      }
       .p-xl-3 {
       padding:1rem!important
      }
       .pt-xl-3,
       .py-xl-3 {
       padding-top:1rem!important
      }
       .pr-xl-3,
       .px-xl-3 {
       padding-right:1rem!important
      }
       .pb-xl-3,
       .py-xl-3 {
       padding-bottom:1rem!important
      }
       .pl-xl-3,
       .px-xl-3 {
       padding-left:1rem!important
      }
       .p-xl-4 {
       padding:1.5rem!important
      }
       .pt-xl-4,
       .py-xl-4 {
       padding-top:1.5rem!important
      }
       .pr-xl-4,
       .px-xl-4 {
       padding-right:1.5rem!important
      }
       .pb-xl-4,
       .py-xl-4 {
       padding-bottom:1.5rem!important
      }
       .pl-xl-4,
       .px-xl-4 {
       padding-left:1.5rem!important
      }
       .p-xl-5 {
       padding:3rem!important
      }
       .pt-xl-5,
       .py-xl-5 {
       padding-top:3rem!important
      }
       .pr-xl-5,
       .px-xl-5 {
       padding-right:3rem!important
      }
       .pb-xl-5,
       .py-xl-5 {
       padding-bottom:3rem!important
      }
       .pl-xl-5,
       .px-xl-5 {
       padding-left:3rem!important
      }
       .p-xl-4pt {
       padding:.25rem!important
      }
       .pt-xl-4pt,
       .py-xl-4pt {
       padding-top:.25rem!important
      }
       .pr-xl-4pt,
       .px-xl-4pt {
       padding-right:.25rem!important
      }
       .pb-xl-4pt,
       .py-xl-4pt {
       padding-bottom:.25rem!important
      }
       .pl-xl-4pt,
       .px-xl-4pt {
       padding-left:.25rem!important
      }
       .p-xl-8pt {
       padding:.5rem!important
      }
       .pt-xl-8pt,
       .py-xl-8pt {
       padding-top:.5rem!important
      }
       .pr-xl-8pt,
       .px-xl-8pt {
       padding-right:.5rem!important
      }
       .pb-xl-8pt,
       .py-xl-8pt {
       padding-bottom:.5rem!important
      }
       .pl-xl-8pt,
       .px-xl-8pt {
       padding-left:.5rem!important
      }
       .p-xl-12pt {
       padding:.75rem!important
      }
       .pt-xl-12pt,
       .py-xl-12pt {
       padding-top:.75rem!important
      }
       .pr-xl-12pt,
       .px-xl-12pt {
       padding-right:.75rem!important
      }
       .pb-xl-12pt,
       .py-xl-12pt {
       padding-bottom:.75rem!important
      }
       .pl-xl-12pt,
       .px-xl-12pt {
       padding-left:.75rem!important
      }
       .p-xl-16pt {
       padding:1rem!important
      }
       .pt-xl-16pt,
       .py-xl-16pt {
       padding-top:1rem!important
      }
       .pr-xl-16pt,
       .px-xl-16pt {
       padding-right:1rem!important
      }
       .pb-xl-16pt,
       .py-xl-16pt {
       padding-bottom:1rem!important
      }
       .pl-xl-16pt,
       .px-xl-16pt {
       padding-left:1rem!important
      }
       .p-xl-20pt {
       padding:1.25rem!important
      }
       .pt-xl-20pt,
       .py-xl-20pt {
       padding-top:1.25rem!important
      }
       .pr-xl-20pt,
       .px-xl-20pt {
       padding-right:1.25rem!important
      }
       .pb-xl-20pt,
       .py-xl-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-xl-20pt,
       .px-xl-20pt {
       padding-left:1.25rem!important
      }
       .p-xl-24pt {
       padding:1.5rem!important
      }
       .pt-xl-24pt,
       .py-xl-24pt {
       padding-top:1.5rem!important
      }
       .pr-xl-24pt,
       .px-xl-24pt {
       padding-right:1.5rem!important
      }
       .pb-xl-24pt,
       .py-xl-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-xl-24pt,
       .px-xl-24pt {
       padding-left:1.5rem!important
      }
       .p-xl-32pt {
       padding:2rem!important
      }
       .pt-xl-32pt,
       .py-xl-32pt {
       padding-top:2rem!important
      }
       .pr-xl-32pt,
       .px-xl-32pt {
       padding-right:2rem!important
      }
       .pb-xl-32pt,
       .py-xl-32pt {
       padding-bottom:2rem!important
      }
       .pl-xl-32pt,
       .px-xl-32pt {
       padding-left:2rem!important
      }
       .p-xl-40pt {
       padding:2.5rem!important
      }
       .pt-xl-40pt,
       .py-xl-40pt {
       padding-top:2.5rem!important
      }
       .pr-xl-40pt,
       .px-xl-40pt {
       padding-right:2.5rem!important
      }
       .pb-xl-40pt,
       .py-xl-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-xl-40pt,
       .px-xl-40pt {
       padding-left:2.5rem!important
      }
       .p-xl-44pt {
       padding:2.75rem!important
      }
       .pt-xl-44pt,
       .py-xl-44pt {
       padding-top:2.75rem!important
      }
       .pr-xl-44pt,
       .px-xl-44pt {
       padding-right:2.75rem!important
      }
       .pb-xl-44pt,
       .py-xl-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-xl-44pt,
       .px-xl-44pt {
       padding-left:2.75rem!important
      }
       .p-xl-48pt {
       padding:3rem!important
      }
       .pt-xl-48pt,
       .py-xl-48pt {
       padding-top:3rem!important
      }
       .pr-xl-48pt,
       .px-xl-48pt {
       padding-right:3rem!important
      }
       .pb-xl-48pt,
       .py-xl-48pt {
       padding-bottom:3rem!important
      }
       .pl-xl-48pt,
       .px-xl-48pt {
       padding-left:3rem!important
      }
       .p-xl-64pt {
       padding:4rem!important
      }
       .pt-xl-64pt,
       .py-xl-64pt {
       padding-top:4rem!important
      }
       .pr-xl-64pt,
       .px-xl-64pt {
       padding-right:4rem!important
      }
       .pb-xl-64pt,
       .py-xl-64pt {
       padding-bottom:4rem!important
      }
       .pl-xl-64pt,
       .px-xl-64pt {
       padding-left:4rem!important
      }
       .p-xl-112pt {
       padding:7rem!important
      }
       .pt-xl-112pt,
       .py-xl-112pt {
       padding-top:7rem!important
      }
       .pr-xl-112pt,
       .px-xl-112pt {
       padding-right:7rem!important
      }
       .pb-xl-112pt,
       .py-xl-112pt {
       padding-bottom:7rem!important
      }
       .pl-xl-112pt,
       .px-xl-112pt {
       padding-left:7rem!important
      }
       .p-xl-128pt {
       padding:8rem!important
      }
       .pt-xl-128pt,
       .py-xl-128pt {
       padding-top:8rem!important
      }
       .pr-xl-128pt,
       .px-xl-128pt {
       padding-right:8rem!important
      }
       .pb-xl-128pt,
       .py-xl-128pt {
       padding-bottom:8rem!important
      }
       .pl-xl-128pt,
       .px-xl-128pt {
       padding-left:8rem!important
      }
       .m-xl-n1 {
       margin:-.25rem!important
      }
       .mt-xl-n1,
       .my-xl-n1 {
       margin-top:-.25rem!important
      }
       .mr-xl-n1,
       .mx-xl-n1 {
       margin-right:-.25rem!important
      }
       .mb-xl-n1,
       .my-xl-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-xl-n1,
       .mx-xl-n1 {
       margin-left:-.25rem!important
      }
       .m-xl-n2 {
       margin:-.5rem!important
      }
       .mt-xl-n2,
       .my-xl-n2 {
       margin-top:-.5rem!important
      }
       .mr-xl-n2,
       .mx-xl-n2 {
       margin-right:-.5rem!important
      }
       .mb-xl-n2,
       .my-xl-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-xl-n2,
       .mx-xl-n2 {
       margin-left:-.5rem!important
      }
       .m-xl-n3 {
       margin:-1rem!important
      }
       .mt-xl-n3,
       .my-xl-n3 {
       margin-top:-1rem!important
      }
       .mr-xl-n3,
       .mx-xl-n3 {
       margin-right:-1rem!important
      }
       .mb-xl-n3,
       .my-xl-n3 {
       margin-bottom:-1rem!important
      }
       .ml-xl-n3,
       .mx-xl-n3 {
       margin-left:-1rem!important
      }
       .m-xl-n4 {
       margin:-1.5rem!important
      }
       .mt-xl-n4,
       .my-xl-n4 {
       margin-top:-1.5rem!important
      }
       .mr-xl-n4,
       .mx-xl-n4 {
       margin-right:-1.5rem!important
      }
       .mb-xl-n4,
       .my-xl-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-xl-n4,
       .mx-xl-n4 {
       margin-left:-1.5rem!important
      }
       .m-xl-n5 {
       margin:-3rem!important
      }
       .mt-xl-n5,
       .my-xl-n5 {
       margin-top:-3rem!important
      }
       .mr-xl-n5,
       .mx-xl-n5 {
       margin-right:-3rem!important
      }
       .mb-xl-n5,
       .my-xl-n5 {
       margin-bottom:-3rem!important
      }
       .ml-xl-n5,
       .mx-xl-n5 {
       margin-left:-3rem!important
      }
       .m-xl-n4pt {
       margin:-.25rem!important
      }
       .mt-xl-n4pt,
       .my-xl-n4pt {
       margin-top:-.25rem!important
      }
       .mr-xl-n4pt,
       .mx-xl-n4pt {
       margin-right:-.25rem!important
      }
       .mb-xl-n4pt,
       .my-xl-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-xl-n4pt,
       .mx-xl-n4pt {
       margin-left:-.25rem!important
      }
       .m-xl-n8pt {
       margin:-.5rem!important
      }
       .mt-xl-n8pt,
       .my-xl-n8pt {
       margin-top:-.5rem!important
      }
       .mr-xl-n8pt,
       .mx-xl-n8pt {
       margin-right:-.5rem!important
      }
       .mb-xl-n8pt,
       .my-xl-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-xl-n8pt,
       .mx-xl-n8pt {
       margin-left:-.5rem!important
      }
       .m-xl-n12pt {
       margin:-.75rem!important
      }
       .mt-xl-n12pt,
       .my-xl-n12pt {
       margin-top:-.75rem!important
      }
       .mr-xl-n12pt,
       .mx-xl-n12pt {
       margin-right:-.75rem!important
      }
       .mb-xl-n12pt,
       .my-xl-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-xl-n12pt,
       .mx-xl-n12pt {
       margin-left:-.75rem!important
      }
       .m-xl-n16pt {
       margin:-1rem!important
      }
       .mt-xl-n16pt,
       .my-xl-n16pt {
       margin-top:-1rem!important
      }
       .mr-xl-n16pt,
       .mx-xl-n16pt {
       margin-right:-1rem!important
      }
       .mb-xl-n16pt,
       .my-xl-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-xl-n16pt,
       .mx-xl-n16pt {
       margin-left:-1rem!important
      }
       .m-xl-n20pt {
       margin:-1.25rem!important
      }
       .mt-xl-n20pt,
       .my-xl-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-xl-n20pt,
       .mx-xl-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-xl-n20pt,
       .my-xl-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-xl-n20pt,
       .mx-xl-n20pt {
       margin-left:-1.25rem!important
      }
       .m-xl-n24pt {
       margin:-1.5rem!important
      }
       .mt-xl-n24pt,
       .my-xl-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-xl-n24pt,
       .mx-xl-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-xl-n24pt,
       .my-xl-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-xl-n24pt,
       .mx-xl-n24pt {
       margin-left:-1.5rem!important
      }
       .m-xl-n32pt {
       margin:-2rem!important
      }
       .mt-xl-n32pt,
       .my-xl-n32pt {
       margin-top:-2rem!important
      }
       .mr-xl-n32pt,
       .mx-xl-n32pt {
       margin-right:-2rem!important
      }
       .mb-xl-n32pt,
       .my-xl-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-xl-n32pt,
       .mx-xl-n32pt {
       margin-left:-2rem!important
      }
       .m-xl-n40pt {
       margin:-2.5rem!important
      }
       .mt-xl-n40pt,
       .my-xl-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-xl-n40pt,
       .mx-xl-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-xl-n40pt,
       .my-xl-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-xl-n40pt,
       .mx-xl-n40pt {
       margin-left:-2.5rem!important
      }
       .m-xl-n44pt {
       margin:-2.75rem!important
      }
       .mt-xl-n44pt,
       .my-xl-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-xl-n44pt,
       .mx-xl-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-xl-n44pt,
       .my-xl-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-xl-n44pt,
       .mx-xl-n44pt {
       margin-left:-2.75rem!important
      }
       .m-xl-n48pt {
       margin:-3rem!important
      }
       .mt-xl-n48pt,
       .my-xl-n48pt {
       margin-top:-3rem!important
      }
       .mr-xl-n48pt,
       .mx-xl-n48pt {
       margin-right:-3rem!important
      }
       .mb-xl-n48pt,
       .my-xl-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-xl-n48pt,
       .mx-xl-n48pt {
       margin-left:-3rem!important
      }
       .m-xl-n64pt {
       margin:-4rem!important
      }
       .mt-xl-n64pt,
       .my-xl-n64pt {
       margin-top:-4rem!important
      }
       .mr-xl-n64pt,
       .mx-xl-n64pt {
       margin-right:-4rem!important
      }
       .mb-xl-n64pt,
       .my-xl-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-xl-n64pt,
       .mx-xl-n64pt {
       margin-left:-4rem!important
      }
       .m-xl-n112pt {
       margin:-7rem!important
      }
       .mt-xl-n112pt,
       .my-xl-n112pt {
       margin-top:-7rem!important
      }
       .mr-xl-n112pt,
       .mx-xl-n112pt {
       margin-right:-7rem!important
      }
       .mb-xl-n112pt,
       .my-xl-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-xl-n112pt,
       .mx-xl-n112pt {
       margin-left:-7rem!important
      }
       .m-xl-n128pt {
       margin:-8rem!important
      }
       .mt-xl-n128pt,
       .my-xl-n128pt {
       margin-top:-8rem!important
      }
       .mr-xl-n128pt,
       .mx-xl-n128pt {
       margin-right:-8rem!important
      }
       .mb-xl-n128pt,
       .my-xl-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-xl-n128pt,
       .mx-xl-n128pt {
       margin-left:-8rem!important
      }
       .m-xl-auto {
       margin:auto!important
      }
       .mt-xl-auto,
       .my-xl-auto {
       margin-top:auto!important
      }
       .mr-xl-auto,
       .mx-xl-auto {
       margin-right:auto!important
      }
       .mb-xl-auto,
       .my-xl-auto {
       margin-bottom:auto!important
      }
       .ml-xl-auto,
       .mx-xl-auto {
       margin-left:auto!important
      }
     }
     @media (min-width:1366px) {
       .m-xxl-0 {
       margin:0!important
      }
       .mt-xxl-0,
       .my-xxl-0 {
       margin-top:0!important
      }
       .mr-xxl-0,
       .mx-xxl-0 {
       margin-right:0!important
      }
       .mb-xxl-0,
       .my-xxl-0 {
       margin-bottom:0!important
      }
       .ml-xxl-0,
       .mx-xxl-0 {
       margin-left:0!important
      }
       .m-xxl-1 {
       margin:.25rem!important
      }
       .mt-xxl-1,
       .my-xxl-1 {
       margin-top:.25rem!important
      }
       .mr-xxl-1,
       .mx-xxl-1 {
       margin-right:.25rem!important
      }
       .mb-xxl-1,
       .my-xxl-1 {
       margin-bottom:.25rem!important
      }
       .ml-xxl-1,
       .mx-xxl-1 {
       margin-left:.25rem!important
      }
       .m-xxl-2 {
       margin:.5rem!important
      }
       .mt-xxl-2,
       .my-xxl-2 {
       margin-top:.5rem!important
      }
       .mr-xxl-2,
       .mx-xxl-2 {
       margin-right:.5rem!important
      }
       .mb-xxl-2,
       .my-xxl-2 {
       margin-bottom:.5rem!important
      }
       .ml-xxl-2,
       .mx-xxl-2 {
       margin-left:.5rem!important
      }
       .m-xxl-3 {
       margin:1rem!important
      }
       .mt-xxl-3,
       .my-xxl-3 {
       margin-top:1rem!important
      }
       .mr-xxl-3,
       .mx-xxl-3 {
       margin-right:1rem!important
      }
       .mb-xxl-3,
       .my-xxl-3 {
       margin-bottom:1rem!important
      }
       .ml-xxl-3,
       .mx-xxl-3 {
       margin-left:1rem!important
      }
       .m-xxl-4 {
       margin:1.5rem!important
      }
       .mt-xxl-4,
       .my-xxl-4 {
       margin-top:1.5rem!important
      }
       .mr-xxl-4,
       .mx-xxl-4 {
       margin-right:1.5rem!important
      }
       .mb-xxl-4,
       .my-xxl-4 {
       margin-bottom:1.5rem!important
      }
       .ml-xxl-4,
       .mx-xxl-4 {
       margin-left:1.5rem!important
      }
       .m-xxl-5 {
       margin:3rem!important
      }
       .mt-xxl-5,
       .my-xxl-5 {
       margin-top:3rem!important
      }
       .mr-xxl-5,
       .mx-xxl-5 {
       margin-right:3rem!important
      }
       .mb-xxl-5,
       .my-xxl-5 {
       margin-bottom:3rem!important
      }
       .ml-xxl-5,
       .mx-xxl-5 {
       margin-left:3rem!important
      }
       .m-xxl-4pt {
       margin:.25rem!important
      }
       .mt-xxl-4pt,
       .my-xxl-4pt {
       margin-top:.25rem!important
      }
       .mr-xxl-4pt,
       .mx-xxl-4pt {
       margin-right:.25rem!important
      }
       .mb-xxl-4pt,
       .my-xxl-4pt {
       margin-bottom:.25rem!important
      }
       .ml-xxl-4pt,
       .mx-xxl-4pt {
       margin-left:.25rem!important
      }
       .m-xxl-8pt {
       margin:.5rem!important
      }
       .mt-xxl-8pt,
       .my-xxl-8pt {
       margin-top:.5rem!important
      }
       .mr-xxl-8pt,
       .mx-xxl-8pt {
       margin-right:.5rem!important
      }
       .mb-xxl-8pt,
       .my-xxl-8pt {
       margin-bottom:.5rem!important
      }
       .ml-xxl-8pt,
       .mx-xxl-8pt {
       margin-left:.5rem!important
      }
       .m-xxl-12pt {
       margin:.75rem!important
      }
       .mt-xxl-12pt,
       .my-xxl-12pt {
       margin-top:.75rem!important
      }
       .mr-xxl-12pt,
       .mx-xxl-12pt {
       margin-right:.75rem!important
      }
       .mb-xxl-12pt,
       .my-xxl-12pt {
       margin-bottom:.75rem!important
      }
       .ml-xxl-12pt,
       .mx-xxl-12pt {
       margin-left:.75rem!important
      }
       .m-xxl-16pt {
       margin:1rem!important
      }
       .mt-xxl-16pt,
       .my-xxl-16pt {
       margin-top:1rem!important
      }
       .mr-xxl-16pt,
       .mx-xxl-16pt {
       margin-right:1rem!important
      }
       .mb-xxl-16pt,
       .my-xxl-16pt {
       margin-bottom:1rem!important
      }
       .ml-xxl-16pt,
       .mx-xxl-16pt {
       margin-left:1rem!important
      }
       .m-xxl-20pt {
       margin:1.25rem!important
      }
       .mt-xxl-20pt,
       .my-xxl-20pt {
       margin-top:1.25rem!important
      }
       .mr-xxl-20pt,
       .mx-xxl-20pt {
       margin-right:1.25rem!important
      }
       .mb-xxl-20pt,
       .my-xxl-20pt {
       margin-bottom:1.25rem!important
      }
       .ml-xxl-20pt,
       .mx-xxl-20pt {
       margin-left:1.25rem!important
      }
       .m-xxl-24pt {
       margin:1.5rem!important
      }
       .mt-xxl-24pt,
       .my-xxl-24pt {
       margin-top:1.5rem!important
      }
       .mr-xxl-24pt,
       .mx-xxl-24pt {
       margin-right:1.5rem!important
      }
       .mb-xxl-24pt,
       .my-xxl-24pt {
       margin-bottom:1.5rem!important
      }
       .ml-xxl-24pt,
       .mx-xxl-24pt {
       margin-left:1.5rem!important
      }
       .m-xxl-32pt {
       margin:2rem!important
      }
       .mt-xxl-32pt,
       .my-xxl-32pt {
       margin-top:2rem!important
      }
       .mr-xxl-32pt,
       .mx-xxl-32pt {
       margin-right:2rem!important
      }
       .mb-xxl-32pt,
       .my-xxl-32pt {
       margin-bottom:2rem!important
      }
       .ml-xxl-32pt,
       .mx-xxl-32pt {
       margin-left:2rem!important
      }
       .m-xxl-40pt {
       margin:2.5rem!important
      }
       .mt-xxl-40pt,
       .my-xxl-40pt {
       margin-top:2.5rem!important
      }
       .mr-xxl-40pt,
       .mx-xxl-40pt {
       margin-right:2.5rem!important
      }
       .mb-xxl-40pt,
       .my-xxl-40pt {
       margin-bottom:2.5rem!important
      }
       .ml-xxl-40pt,
       .mx-xxl-40pt {
       margin-left:2.5rem!important
      }
       .m-xxl-44pt {
       margin:2.75rem!important
      }
       .mt-xxl-44pt,
       .my-xxl-44pt {
       margin-top:2.75rem!important
      }
       .mr-xxl-44pt,
       .mx-xxl-44pt {
       margin-right:2.75rem!important
      }
       .mb-xxl-44pt,
       .my-xxl-44pt {
       margin-bottom:2.75rem!important
      }
       .ml-xxl-44pt,
       .mx-xxl-44pt {
       margin-left:2.75rem!important
      }
       .m-xxl-48pt {
       margin:3rem!important
      }
       .mt-xxl-48pt,
       .my-xxl-48pt {
       margin-top:3rem!important
      }
       .mr-xxl-48pt,
       .mx-xxl-48pt {
       margin-right:3rem!important
      }
       .mb-xxl-48pt,
       .my-xxl-48pt {
       margin-bottom:3rem!important
      }
       .ml-xxl-48pt,
       .mx-xxl-48pt {
       margin-left:3rem!important
      }
       .m-xxl-64pt {
       margin:4rem!important
      }
       .mt-xxl-64pt,
       .my-xxl-64pt {
       margin-top:4rem!important
      }
       .mr-xxl-64pt,
       .mx-xxl-64pt {
       margin-right:4rem!important
      }
       .mb-xxl-64pt,
       .my-xxl-64pt {
       margin-bottom:4rem!important
      }
       .ml-xxl-64pt,
       .mx-xxl-64pt {
       margin-left:4rem!important
      }
       .m-xxl-112pt {
       margin:7rem!important
      }
       .mt-xxl-112pt,
       .my-xxl-112pt {
       margin-top:7rem!important
      }
       .mr-xxl-112pt,
       .mx-xxl-112pt {
       margin-right:7rem!important
      }
       .mb-xxl-112pt,
       .my-xxl-112pt {
       margin-bottom:7rem!important
      }
       .ml-xxl-112pt,
       .mx-xxl-112pt {
       margin-left:7rem!important
      }
       .m-xxl-128pt {
       margin:8rem!important
      }
       .mt-xxl-128pt,
       .my-xxl-128pt {
       margin-top:8rem!important
      }
       .mr-xxl-128pt,
       .mx-xxl-128pt {
       margin-right:8rem!important
      }
       .mb-xxl-128pt,
       .my-xxl-128pt {
       margin-bottom:8rem!important
      }
       .ml-xxl-128pt,
       .mx-xxl-128pt {
       margin-left:8rem!important
      }
       .p-xxl-0 {
       padding:0!important
      }
       .pt-xxl-0,
       .py-xxl-0 {
       padding-top:0!important
      }
       .pr-xxl-0,
       .px-xxl-0 {
       padding-right:0!important
      }
       .pb-xxl-0,
       .py-xxl-0 {
       padding-bottom:0!important
      }
       .pl-xxl-0,
       .px-xxl-0 {
       padding-left:0!important
      }
       .p-xxl-1 {
       padding:.25rem!important
      }
       .pt-xxl-1,
       .py-xxl-1 {
       padding-top:.25rem!important
      }
       .pr-xxl-1,
       .px-xxl-1 {
       padding-right:.25rem!important
      }
       .pb-xxl-1,
       .py-xxl-1 {
       padding-bottom:.25rem!important
      }
       .pl-xxl-1,
       .px-xxl-1 {
       padding-left:.25rem!important
      }
       .p-xxl-2 {
       padding:.5rem!important
      }
       .pt-xxl-2,
       .py-xxl-2 {
       padding-top:.5rem!important
      }
       .pr-xxl-2,
       .px-xxl-2 {
       padding-right:.5rem!important
      }
       .pb-xxl-2,
       .py-xxl-2 {
       padding-bottom:.5rem!important
      }
       .pl-xxl-2,
       .px-xxl-2 {
       padding-left:.5rem!important
      }
       .p-xxl-3 {
       padding:1rem!important
      }
       .pt-xxl-3,
       .py-xxl-3 {
       padding-top:1rem!important
      }
       .pr-xxl-3,
       .px-xxl-3 {
       padding-right:1rem!important
      }
       .pb-xxl-3,
       .py-xxl-3 {
       padding-bottom:1rem!important
      }
       .pl-xxl-3,
       .px-xxl-3 {
       padding-left:1rem!important
      }
       .p-xxl-4 {
       padding:1.5rem!important
      }
       .pt-xxl-4,
       .py-xxl-4 {
       padding-top:1.5rem!important
      }
       .pr-xxl-4,
       .px-xxl-4 {
       padding-right:1.5rem!important
      }
       .pb-xxl-4,
       .py-xxl-4 {
       padding-bottom:1.5rem!important
      }
       .pl-xxl-4,
       .px-xxl-4 {
       padding-left:1.5rem!important
      }
       .p-xxl-5 {
       padding:3rem!important
      }
       .pt-xxl-5,
       .py-xxl-5 {
       padding-top:3rem!important
      }
       .pr-xxl-5,
       .px-xxl-5 {
       padding-right:3rem!important
      }
       .pb-xxl-5,
       .py-xxl-5 {
       padding-bottom:3rem!important
      }
       .pl-xxl-5,
       .px-xxl-5 {
       padding-left:3rem!important
      }
       .p-xxl-4pt {
       padding:.25rem!important
      }
       .pt-xxl-4pt,
       .py-xxl-4pt {
       padding-top:.25rem!important
      }
       .pr-xxl-4pt,
       .px-xxl-4pt {
       padding-right:.25rem!important
      }
       .pb-xxl-4pt,
       .py-xxl-4pt {
       padding-bottom:.25rem!important
      }
       .pl-xxl-4pt,
       .px-xxl-4pt {
       padding-left:.25rem!important
      }
       .p-xxl-8pt {
       padding:.5rem!important
      }
       .pt-xxl-8pt,
       .py-xxl-8pt {
       padding-top:.5rem!important
      }
       .pr-xxl-8pt,
       .px-xxl-8pt {
       padding-right:.5rem!important
      }
       .pb-xxl-8pt,
       .py-xxl-8pt {
       padding-bottom:.5rem!important
      }
       .pl-xxl-8pt,
       .px-xxl-8pt {
       padding-left:.5rem!important
      }
       .p-xxl-12pt {
       padding:.75rem!important
      }
       .pt-xxl-12pt,
       .py-xxl-12pt {
       padding-top:.75rem!important
      }
       .pr-xxl-12pt,
       .px-xxl-12pt {
       padding-right:.75rem!important
      }
       .pb-xxl-12pt,
       .py-xxl-12pt {
       padding-bottom:.75rem!important
      }
       .pl-xxl-12pt,
       .px-xxl-12pt {
       padding-left:.75rem!important
      }
       .p-xxl-16pt {
       padding:1rem!important
      }
       .pt-xxl-16pt,
       .py-xxl-16pt {
       padding-top:1rem!important
      }
       .pr-xxl-16pt,
       .px-xxl-16pt {
       padding-right:1rem!important
      }
       .pb-xxl-16pt,
       .py-xxl-16pt {
       padding-bottom:1rem!important
      }
       .pl-xxl-16pt,
       .px-xxl-16pt {
       padding-left:1rem!important
      }
       .p-xxl-20pt {
       padding:1.25rem!important
      }
       .pt-xxl-20pt,
       .py-xxl-20pt {
       padding-top:1.25rem!important
      }
       .pr-xxl-20pt,
       .px-xxl-20pt {
       padding-right:1.25rem!important
      }
       .pb-xxl-20pt,
       .py-xxl-20pt {
       padding-bottom:1.25rem!important
      }
       .pl-xxl-20pt,
       .px-xxl-20pt {
       padding-left:1.25rem!important
      }
       .p-xxl-24pt {
       padding:1.5rem!important
      }
       .pt-xxl-24pt,
       .py-xxl-24pt {
       padding-top:1.5rem!important
      }
       .pr-xxl-24pt,
       .px-xxl-24pt {
       padding-right:1.5rem!important
      }
       .pb-xxl-24pt,
       .py-xxl-24pt {
       padding-bottom:1.5rem!important
      }
       .pl-xxl-24pt,
       .px-xxl-24pt {
       padding-left:1.5rem!important
      }
       .p-xxl-32pt {
       padding:2rem!important
      }
       .pt-xxl-32pt,
       .py-xxl-32pt {
       padding-top:2rem!important
      }
       .pr-xxl-32pt,
       .px-xxl-32pt {
       padding-right:2rem!important
      }
       .pb-xxl-32pt,
       .py-xxl-32pt {
       padding-bottom:2rem!important
      }
       .pl-xxl-32pt,
       .px-xxl-32pt {
       padding-left:2rem!important
      }
       .p-xxl-40pt {
       padding:2.5rem!important
      }
       .pt-xxl-40pt,
       .py-xxl-40pt {
       padding-top:2.5rem!important
      }
       .pr-xxl-40pt,
       .px-xxl-40pt {
       padding-right:2.5rem!important
      }
       .pb-xxl-40pt,
       .py-xxl-40pt {
       padding-bottom:2.5rem!important
      }
       .pl-xxl-40pt,
       .px-xxl-40pt {
       padding-left:2.5rem!important
      }
       .p-xxl-44pt {
       padding:2.75rem!important
      }
       .pt-xxl-44pt,
       .py-xxl-44pt {
       padding-top:2.75rem!important
      }
       .pr-xxl-44pt,
       .px-xxl-44pt {
       padding-right:2.75rem!important
      }
       .pb-xxl-44pt,
       .py-xxl-44pt {
       padding-bottom:2.75rem!important
      }
       .pl-xxl-44pt,
       .px-xxl-44pt {
       padding-left:2.75rem!important
      }
       .p-xxl-48pt {
       padding:3rem!important
      }
       .pt-xxl-48pt,
       .py-xxl-48pt {
       padding-top:3rem!important
      }
       .pr-xxl-48pt,
       .px-xxl-48pt {
       padding-right:3rem!important
      }
       .pb-xxl-48pt,
       .py-xxl-48pt {
       padding-bottom:3rem!important
      }
       .pl-xxl-48pt,
       .px-xxl-48pt {
       padding-left:3rem!important
      }
       .p-xxl-64pt {
       padding:4rem!important
      }
       .pt-xxl-64pt,
       .py-xxl-64pt {
       padding-top:4rem!important
      }
       .pr-xxl-64pt,
       .px-xxl-64pt {
       padding-right:4rem!important
      }
       .pb-xxl-64pt,
       .py-xxl-64pt {
       padding-bottom:4rem!important
      }
       .pl-xxl-64pt,
       .px-xxl-64pt {
       padding-left:4rem!important
      }
       .p-xxl-112pt {
       padding:7rem!important
      }
       .pt-xxl-112pt,
       .py-xxl-112pt {
       padding-top:7rem!important
      }
       .pr-xxl-112pt,
       .px-xxl-112pt {
       padding-right:7rem!important
      }
       .pb-xxl-112pt,
       .py-xxl-112pt {
       padding-bottom:7rem!important
      }
       .pl-xxl-112pt,
       .px-xxl-112pt {
       padding-left:7rem!important
      }
       .p-xxl-128pt {
       padding:8rem!important
      }
       .pt-xxl-128pt,
       .py-xxl-128pt {
       padding-top:8rem!important
      }
       .pr-xxl-128pt,
       .px-xxl-128pt {
       padding-right:8rem!important
      }
       .pb-xxl-128pt,
       .py-xxl-128pt {
       padding-bottom:8rem!important
      }
       .pl-xxl-128pt,
       .px-xxl-128pt {
       padding-left:8rem!important
      }
       .m-xxl-n1 {
       margin:-.25rem!important
      }
       .mt-xxl-n1,
       .my-xxl-n1 {
       margin-top:-.25rem!important
      }
       .mr-xxl-n1,
       .mx-xxl-n1 {
       margin-right:-.25rem!important
      }
       .mb-xxl-n1,
       .my-xxl-n1 {
       margin-bottom:-.25rem!important
      }
       .ml-xxl-n1,
       .mx-xxl-n1 {
       margin-left:-.25rem!important
      }
       .m-xxl-n2 {
       margin:-.5rem!important
      }
       .mt-xxl-n2,
       .my-xxl-n2 {
       margin-top:-.5rem!important
      }
       .mr-xxl-n2,
       .mx-xxl-n2 {
       margin-right:-.5rem!important
      }
       .mb-xxl-n2,
       .my-xxl-n2 {
       margin-bottom:-.5rem!important
      }
       .ml-xxl-n2,
       .mx-xxl-n2 {
       margin-left:-.5rem!important
      }
       .m-xxl-n3 {
       margin:-1rem!important
      }
       .mt-xxl-n3,
       .my-xxl-n3 {
       margin-top:-1rem!important
      }
       .mr-xxl-n3,
       .mx-xxl-n3 {
       margin-right:-1rem!important
      }
       .mb-xxl-n3,
       .my-xxl-n3 {
       margin-bottom:-1rem!important
      }
       .ml-xxl-n3,
       .mx-xxl-n3 {
       margin-left:-1rem!important
      }
       .m-xxl-n4 {
       margin:-1.5rem!important
      }
       .mt-xxl-n4,
       .my-xxl-n4 {
       margin-top:-1.5rem!important
      }
       .mr-xxl-n4,
       .mx-xxl-n4 {
       margin-right:-1.5rem!important
      }
       .mb-xxl-n4,
       .my-xxl-n4 {
       margin-bottom:-1.5rem!important
      }
       .ml-xxl-n4,
       .mx-xxl-n4 {
       margin-left:-1.5rem!important
      }
       .m-xxl-n5 {
       margin:-3rem!important
      }
       .mt-xxl-n5,
       .my-xxl-n5 {
       margin-top:-3rem!important
      }
       .mr-xxl-n5,
       .mx-xxl-n5 {
       margin-right:-3rem!important
      }
       .mb-xxl-n5,
       .my-xxl-n5 {
       margin-bottom:-3rem!important
      }
       .ml-xxl-n5,
       .mx-xxl-n5 {
       margin-left:-3rem!important
      }
       .m-xxl-n4pt {
       margin:-.25rem!important
      }
       .mt-xxl-n4pt,
       .my-xxl-n4pt {
       margin-top:-.25rem!important
      }
       .mr-xxl-n4pt,
       .mx-xxl-n4pt {
       margin-right:-.25rem!important
      }
       .mb-xxl-n4pt,
       .my-xxl-n4pt {
       margin-bottom:-.25rem!important
      }
       .ml-xxl-n4pt,
       .mx-xxl-n4pt {
       margin-left:-.25rem!important
      }
       .m-xxl-n8pt {
       margin:-.5rem!important
      }
       .mt-xxl-n8pt,
       .my-xxl-n8pt {
       margin-top:-.5rem!important
      }
       .mr-xxl-n8pt,
       .mx-xxl-n8pt {
       margin-right:-.5rem!important
      }
       .mb-xxl-n8pt,
       .my-xxl-n8pt {
       margin-bottom:-.5rem!important
      }
       .ml-xxl-n8pt,
       .mx-xxl-n8pt {
       margin-left:-.5rem!important
      }
       .m-xxl-n12pt {
       margin:-.75rem!important
      }
       .mt-xxl-n12pt,
       .my-xxl-n12pt {
       margin-top:-.75rem!important
      }
       .mr-xxl-n12pt,
       .mx-xxl-n12pt {
       margin-right:-.75rem!important
      }
       .mb-xxl-n12pt,
       .my-xxl-n12pt {
       margin-bottom:-.75rem!important
      }
       .ml-xxl-n12pt,
       .mx-xxl-n12pt {
       margin-left:-.75rem!important
      }
       .m-xxl-n16pt {
       margin:-1rem!important
      }
       .mt-xxl-n16pt,
       .my-xxl-n16pt {
       margin-top:-1rem!important
      }
       .mr-xxl-n16pt,
       .mx-xxl-n16pt {
       margin-right:-1rem!important
      }
       .mb-xxl-n16pt,
       .my-xxl-n16pt {
       margin-bottom:-1rem!important
      }
       .ml-xxl-n16pt,
       .mx-xxl-n16pt {
       margin-left:-1rem!important
      }
       .m-xxl-n20pt {
       margin:-1.25rem!important
      }
       .mt-xxl-n20pt,
       .my-xxl-n20pt {
       margin-top:-1.25rem!important
      }
       .mr-xxl-n20pt,
       .mx-xxl-n20pt {
       margin-right:-1.25rem!important
      }
       .mb-xxl-n20pt,
       .my-xxl-n20pt {
       margin-bottom:-1.25rem!important
      }
       .ml-xxl-n20pt,
       .mx-xxl-n20pt {
       margin-left:-1.25rem!important
      }
       .m-xxl-n24pt {
       margin:-1.5rem!important
      }
       .mt-xxl-n24pt,
       .my-xxl-n24pt {
       margin-top:-1.5rem!important
      }
       .mr-xxl-n24pt,
       .mx-xxl-n24pt {
       margin-right:-1.5rem!important
      }
       .mb-xxl-n24pt,
       .my-xxl-n24pt {
       margin-bottom:-1.5rem!important
      }
       .ml-xxl-n24pt,
       .mx-xxl-n24pt {
       margin-left:-1.5rem!important
      }
       .m-xxl-n32pt {
       margin:-2rem!important
      }
       .mt-xxl-n32pt,
       .my-xxl-n32pt {
       margin-top:-2rem!important
      }
       .mr-xxl-n32pt,
       .mx-xxl-n32pt {
       margin-right:-2rem!important
      }
       .mb-xxl-n32pt,
       .my-xxl-n32pt {
       margin-bottom:-2rem!important
      }
       .ml-xxl-n32pt,
       .mx-xxl-n32pt {
       margin-left:-2rem!important
      }
       .m-xxl-n40pt {
       margin:-2.5rem!important
      }
       .mt-xxl-n40pt,
       .my-xxl-n40pt {
       margin-top:-2.5rem!important
      }
       .mr-xxl-n40pt,
       .mx-xxl-n40pt {
       margin-right:-2.5rem!important
      }
       .mb-xxl-n40pt,
       .my-xxl-n40pt {
       margin-bottom:-2.5rem!important
      }
       .ml-xxl-n40pt,
       .mx-xxl-n40pt {
       margin-left:-2.5rem!important
      }
       .m-xxl-n44pt {
       margin:-2.75rem!important
      }
       .mt-xxl-n44pt,
       .my-xxl-n44pt {
       margin-top:-2.75rem!important
      }
       .mr-xxl-n44pt,
       .mx-xxl-n44pt {
       margin-right:-2.75rem!important
      }
       .mb-xxl-n44pt,
       .my-xxl-n44pt {
       margin-bottom:-2.75rem!important
      }
       .ml-xxl-n44pt,
       .mx-xxl-n44pt {
       margin-left:-2.75rem!important
      }
       .m-xxl-n48pt {
       margin:-3rem!important
      }
       .mt-xxl-n48pt,
       .my-xxl-n48pt {
       margin-top:-3rem!important
      }
       .mr-xxl-n48pt,
       .mx-xxl-n48pt {
       margin-right:-3rem!important
      }
       .mb-xxl-n48pt,
       .my-xxl-n48pt {
       margin-bottom:-3rem!important
      }
       .ml-xxl-n48pt,
       .mx-xxl-n48pt {
       margin-left:-3rem!important
      }
       .m-xxl-n64pt {
       margin:-4rem!important
      }
       .mt-xxl-n64pt,
       .my-xxl-n64pt {
       margin-top:-4rem!important
      }
       .mr-xxl-n64pt,
       .mx-xxl-n64pt {
       margin-right:-4rem!important
      }
       .mb-xxl-n64pt,
       .my-xxl-n64pt {
       margin-bottom:-4rem!important
      }
       .ml-xxl-n64pt,
       .mx-xxl-n64pt {
       margin-left:-4rem!important
      }
       .m-xxl-n112pt {
       margin:-7rem!important
      }
       .mt-xxl-n112pt,
       .my-xxl-n112pt {
       margin-top:-7rem!important
      }
       .mr-xxl-n112pt,
       .mx-xxl-n112pt {
       margin-right:-7rem!important
      }
       .mb-xxl-n112pt,
       .my-xxl-n112pt {
       margin-bottom:-7rem!important
      }
       .ml-xxl-n112pt,
       .mx-xxl-n112pt {
       margin-left:-7rem!important
      }
       .m-xxl-n128pt {
       margin:-8rem!important
      }
       .mt-xxl-n128pt,
       .my-xxl-n128pt {
       margin-top:-8rem!important
      }
       .mr-xxl-n128pt,
       .mx-xxl-n128pt {
       margin-right:-8rem!important
      }
       .mb-xxl-n128pt,
       .my-xxl-n128pt {
       margin-bottom:-8rem!important
      }
       .ml-xxl-n128pt,
       .mx-xxl-n128pt {
       margin-left:-8rem!important
      }
       .m-xxl-auto {
       margin:auto!important
      }
       .mt-xxl-auto,
       .my-xxl-auto {
       margin-top:auto!important
      }
       .mr-xxl-auto,
       .mx-xxl-auto {
       margin-right:auto!important
      }
       .mb-xxl-auto,
       .my-xxl-auto {
       margin-bottom:auto!important
      }
       .ml-xxl-auto,
       .mx-xxl-auto {
       margin-left:auto!important
      }
     }
      .text-monospace {
      font-family:SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace
     }
      .text-justify {
      text-align:justify!important
     }
      .text-wrap {
      white-space:normal!important
     }
      .text-nowrap {
      white-space:nowrap!important
     }
      .text-truncate {
      overflow:hidden;
      text-overflow:ellipsis;
      white-space:nowrap
     }
      .text-left {
      text-align:left!important
     }
      .text-right {
      text-align:right!important
     }
      .text-center {
      text-align:center!important
     }
     @media (min-width:374px) {
       .text-i8-left {
       text-align:left!important
      }
       .text-i8-right {
       text-align:right!important
      }
       .text-i8-center {
       text-align:center!important
      }
     }
     @media (min-width:413px) {
       .text-i8-plus-left {
       text-align:left!important
      }
       .text-i8-plus-right {
       text-align:right!important
      }
       .text-i8-plus-center {
       text-align:center!important
      }
     }
     @media (min-width:576px) {
       .text-sm-left {
       text-align:left!important
      }
       .text-sm-right {
       text-align:right!important
      }
       .text-sm-center {
       text-align:center!important
      }
     }
     @media (min-width:768px) {
       .text-md-left {
       text-align:left!important
      }
       .text-md-right {
       text-align:right!important
      }
       .text-md-center {
       text-align:center!important
      }
     }
     @media (min-width:992px) {
       .text-lg-left {
       text-align:left!important
      }
       .text-lg-right {
       text-align:right!important
      }
       .text-lg-center {
       text-align:center!important
      }
     }
     @media (min-width:1200px) {
       .text-xl-left {
       text-align:left!important
      }
       .text-xl-right {
       text-align:right!important
      }
       .text-xl-center {
       text-align:center!important
      }
     }
     @media (min-width:1366px) {
       .text-xxl-left {
       text-align:left!important
      }
       .text-xxl-right {
       text-align:right!important
      }
       .text-xxl-center {
       text-align:center!important
      }
     }
      .text-lowercase {
      text-transform:lowercase!important
     }
      .text-uppercase {
      text-transform:uppercase!important
     }
      .text-capitalize {
      text-transform:capitalize!important
     }
      .font-weight-light {
      font-weight:300!important
     }
      .font-weight-lighter {
      font-weight:lighter!important
     }
      .font-weight-normal {
      font-weight:400!important
     }
      .font-weight-bold {
      font-weight:500!important
     }
      .font-weight-bolder {
      font-weight:bolder!important
     }
      .font-italic {
      font-style:italic!important
     }
      .text-white {
      color:#fff!important
     }
      .text-primary {
      color:#2c84dd!important
     }
      a.text-primary:focus,
      a.text-primary:hover {
      color:#1a5ea2!important
     }
      .text-secondary {
      color:#868e96!important
     }
      a.text-secondary:focus,
      a.text-secondary:hover {
      color:#60686f!important
     }
      .text-success {
      color:#77c13a!important
     }
      a.text-success:focus,
      a.text-success:hover {
      color:#538628!important
     }
      .text-info {
      color:#17a2b8!important
     }
      a.text-info:focus,
      a.text-info:hover {
      color:#0f6674!important
     }
      .text-warning {
      color:#f98437!important
     }
      a.text-warning:focus,
      a.text-warning:hover {
      color:#dd5c07!important
     }
      .text-danger {
      color:#d9534f!important
     }
      a.text-danger:focus,
      a.text-danger:hover {
      color:#b52b27!important
     }
      .text-light {
      color:#f8f9fa!important
     }
      a.text-light:focus,
      a.text-light:hover {
      color:#cbd3da!important
     }
      .text-dark {
      color:#1d2126!important
     }
      a.text-dark:focus,
      a.text-dark:hover {
      color:#000!important
     }
      .text-accent {
      color:#ed0b4c!important
     }
      a.text-accent:focus,
      a.text-accent:hover {
      color:#a40835!important
     }
      .text-primary-light {
      color:#9cf!important
     }
      a.text-primary-light:focus,
      a.text-primary-light:hover {
      color:#4da6ff!important
     }
      .text-body {
      color:#303840!important
     }
      .text-muted {
      color:rgba(48,56,64,.5)!important
     }
      .text-white-50 {
      color:hsla(0,0%,100%,.5)!important
     }
      .text-hide {
      font:0/0 a;
      color:transparent;
      text-shadow:none;
      background-color:transparent;
      border:0
     }
      .text-decoration-none {
      text-decoration:none!important
     }
      .text-reset {
      color:inherit!important
     }
      .visible {
      visibility:visible!important
     }
      .invisible {
      visibility:hidden!important
     }
     @media  print {
       *,
       :after,
       :before {
       text-shadow:none!important;
       box-shadow:none!important
      }
       a:not(.btn) {
       text-decoration:underline
      }
       abbr[title]:after {
       content:" (" attr(title) ")"
      }
       pre {
       white-space:pre-wrap!important
      }
       blockquote,
       pre {
       border:1px solid #adb5bd;
       page-break-inside:avoid
      }
       thead {
       display:table-header-group
      }
       img,
       tr {
       page-break-inside:avoid
      }
       h2,
       h3,
       p {
       orphans:3;
       widows:3
      }
       h2,
       h3 {
       page-break-after:avoid
      }
      @page  {
       size:a3
      }
       .container,
       body {
       min-width:992px!important
      }

       .badge {
       border:1px solid #303840
      }
       .table {
       border-collapse:collapse!important
      }
       .table td,
       .table th {
       background-color:#fff!important
      }
       .table-bordered td,
       .table-bordered th {
       border:1px solid #dee2e6!important
      }
       .table-dark {
       color:inherit
      }
       .table-dark tbody+tbody,
       .table-dark td,
       .table-dark th,
       .table-dark thead th {
       border-color:#ebeff2
      }
       .table .thead-dark th {
       color:inherit;
       border-color:#ebeff2
      }
     }
      .mdk-header {
      position:relative;
      z-index:1;
      margin-bottom:1.25rem;
      height:200px
     }
      .mdk-header :last-child {
      margin-bottom:0
     }
      .mdk-header[data-condenses],
      .mdk-header[data-reveals] {
      will-change:transform
     }
      .mdk-header [data-fx-condenses] {
      -webkit-transform-origin:left top;
      transform-origin:left top;
      opacity:0
     }
      .mdk-header [data-fx-condenses][data-fx-id] {
      opacity:1
     }
      .mdk-header [data-primary] {
      z-index:1
     }
      .mdk-header__bg {
      position:absolute;
      top:0;
      right:0;
      bottom:0;
      left:0;
      overflow:hidden
     }
      [data-effects*=parallax-background] .mdk-header__bg {
      visibility:hidden
     }
      .mdk-header__bg-front,
      .mdk-header__bg-rear {
      position:absolute;
      top:0;
      right:0;
      bottom:0;
      left:0;
      pointer-events:none;
      background-size:cover
     }
      .mdk-header__bg-rear {
      opacity:0
     }
      .mdk-header__content {
      position:relative;
      width:100%;
      height:100%
     }
      .mdk-header[data-condenses] .mdk-header__content {
      z-index:0
     }
      .mdk-header[data-condenses] [data-primary] {
      z-index:1
     }
      .mdk-header--shadow:after {
      position:absolute;
      right:0;
      bottom:-5px;
      left:0;
      width:100%;
      height:5px;
      content:"";
      pointer-events:none;
      opacity:0;
      box-shadow:inset 0 5px 6px -3px rgba(0,0,0,.4);
      will-change:opacity;
      z-index:-1
     }
      .mdk-header--shadow-show:after {
      opacity:1
     }
      .mdk-header--fixed {
      position:fixed;
      top:0;
      left:0;
      width:100%;
      margin-bottom:0
     }
      .mdk-header[disabled],
      .mdk-header[disabled] .mdk-header__bg-front,
      .mdk-header[disabled] .mdk-header__bg-rear,
      .mdk-header[disabled] .mdk-header__content>[data-primary],
      .mdk-header[disabled]:after {
      transition:none!important
     }
      .mdk-header-layout {
      height:100%;
      position:relative;
      overflow:hidden;
      z-index:0
     }
      .mdk-header-layout--fullbleed {
      position:absolute;
      top:0;
      left:0;
      right:0;
      bottom:0
     }
      .mdk-header-layout>.mdk-header {
      position:fixed;
      top:0;
      left:0;
      right:0;
      z-index:1
     }
      .mdk-header-layout[data-fullbleed]>.mdk-header,
      .mdk-header-layout[data-has-scrolling-region]>.mdk-header {
      position:absolute;
      top:0;
      left:0;
      right:0
     }
      .mdk-header-layout__content {
      position:relative;
      z-index:0
     }
      .mdk-header-layout__content--fullbleed {
      position:absolute;
      top:0;
      left:0;
      right:0;
      bottom:0
     }
      .mdk-header-layout__content--scrollable {
      overflow-y:auto;
      -webkit-overflow-scrolling:touch
     }
      .mdk-box {
      position:relative;
      margin-bottom:1.25rem
     }
      .mdk-box__bg {
      position:absolute;
      top:0;
      right:0;
      bottom:0;
      left:0;
      overflow:hidden;
      height:100%
     }
      [data-effects*=parallax-background] .mdk-box__bg {
      visibility:hidden
     }
      .mdk-box__bg-front,
      .mdk-box__bg-rear {
      position:absolute;
      top:0;
      right:0;
      bottom:0;
      left:0;
      pointer-events:none;
      background-size:cover
     }
      .mdk-box__bg-rear {
      opacity:0
     }
      .mdk-box__content {
      position:relative;
      width:100%;
      height:100%
     }
      .mdk-box[disabled],
      .mdk-box[disabled] .mdk-box__bg-front,
      .mdk-box[disabled] .mdk-box__bg-rear,
      .mdk-box[disabled] .mdk-box__content>[data-primary],
      .mdk-box[disabled]:after {
      transition:none!important
     }
      .mdk-drawer {
      position:relative;
      visibility:hidden
     }
      .mdk-drawer[data-closing],
      .mdk-drawer[data-opened] {
      visibility:visible
     }
      .mdk-drawer[data-persistent] {
      width:256px
     }
      .mdk-drawer[data-persistent][data-position=left] {
       /*!rtl:ignore*/
      right:auto
     }
      .mdk-drawer[data-persistent][data-position=right] {
       /*!rtl:ignore*/
      left:auto
     }
      .mdk-drawer__content {
      position:fixed;
      top:0;
      bottom:0;
      width:256px;
      transition:-webkit-transform .2s ease;
      transition:transform .2s ease;
      transition:transform .2s ease,-webkit-transform .2s ease;
      background-color:#fff;
       /*!rtl:begin:ignore*/
      left:0;
      -webkit-transform:translate3d(-100%,0,0);
      transform:translate3d(-100%,0,0)
       /*!rtl:end:ignore*/
     }
      [data-position=right]>.mdk-drawer__content {
       /*!rtl:begin:ignore*/
      right:0;
      left:auto;
      -webkit-transform:translate3d(100%,0,0);
      transform:translate3d(100%,0,0)
       /*!rtl:end:ignore*/
     }
      .mdk-drawer__scrim,
      [data-opened]>.mdk-drawer__content {
      -webkit-transform:translateZ(0);
      transform:translateZ(0)
     }
      .mdk-drawer__scrim {
      position:fixed;
      top:0;
      left:0;
      bottom:0;
      right:0;
      transition:opacity .2s ease;
      opacity:0;
      background-color:rgba(0,0,0,.5)
     }
      [data-opened]>.mdk-drawer__scrim {
      opacity:1
     }
      [data-persistent]>.mdk-drawer__scrim {
      visibility:hidden;
      opacity:0
     }
      .mdk-drawer-layout {
      height:100%;
      position:relative;
      overflow:hidden;
      display:flex
     }
      .mdk-drawer-layout--fullbleed {
      position:absolute;
      top:0;
      left:0;
      right:0;
      bottom:0
     }
      .mdk-drawer-layout .mdk-drawer {
      position:relative
     }
      .mdk-drawer-layout .mdk-drawer[data-persistent] {
      width:256px
     }
      .mdk-drawer-layout .mdk-drawer[data-persistent][data-position=left] {
       /*!rtl:remove*/
      order:0
     }
      .mdk-drawer-layout .mdk-drawer[data-persistent][data-position=right] {
       /*!rtl:remove*/
      order:2
     }
      .mdk-drawer-layout__content {
      position:relative;
      height:100%;
      transition:-webkit-transform .2s;
      transition:transform .2s;
      transition:transform .2s,-webkit-transform .2s;
      min-width:320px;
      z-index:0;
      order:1;
      flex:1 1 0%
     }
      .mdk-drawer-layout__content--scrollable {
      overflow-y:auto;
      -webkit-overflow-scrolling:touch
     }
      .mdk-reveal {
      z-index:0;
      position:relative;
      overflow:hidden;
      display:block
     }
      .mdk-reveal--hover:hover .mdk-reveal__partial,
      .mdk-reveal[data-opened] .mdk-reveal__partial {
      opacity:0
     }
      .mdk-reveal__content {
      transition:-webkit-transform .2s;
      transition:transform .2s;
      transition:transform .2s,-webkit-transform .2s;
      background-color:#fff;
      position:relative;
      z-index:0
     }
      .mdk-reveal__partial {
      position:absolute;
      top:0;
      left:0;
      width:100%;
      content:"";
      background:linear-gradient(180deg,hsla(0,0%,100%,0) 60%,hsla(0,0%,100%,.95) 80%,#fff);
      opacity:1;
      z-index:1;
      transition:opacity .2s;
      pointer-events:none
     }
      .mdk-carousel__content {
      transition:-webkit-transform .4s;
      transition:transform .4s;
      transition:transform .4s,-webkit-transform .4s;
      -webkit-transform:translateZ(0);
      transform:translateZ(0);
      touch-action:pan-x
     }
      .mdk-carousel__item {
      float:left;
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      user-select:none;
      cursor:move;
      cursor:-webkit-grab;
      cursor:grab;
      -webkit-touch-callout:none;
      width:100%
     }
      .mdk-tooltip {
      -webkit-transform:scale(0);
      transform:scale(0);
      transition:-webkit-transform .2s;
      transition:transform .2s;
      transition:transform .2s,-webkit-transform .2s;
      -webkit-transform-origin:top center;
      transform-origin:top center;
      will-change:transform;
      display:inline-block;
      background:rgba(0,0,0,.7);
      color:#fff;
      font-size:13px;
      z-index:999;
      font-weight:500;
      text-align:center;
      position:fixed;
      line-height:1;
      max-width:200px;
      padding:.4rem;
      border-radius:.25rem;
      pointer-events:none
     }
      .mdk-tooltip[data-opened] {
      -webkit-transform:scale(1);
      transform:scale(1)
     }
      .flex {
      flex:1 1 0%!important
     }
      .flex-0,
      .flex-none {
      flex:none!important
     }
      .flex-grow {
      flex:1 1 auto!important
     }
      .flex-shrink-0 {
      flex-shrink:0!important
     }
     @media (min-width:374px) {
       .flex-i8 {
       flex:1 1 0%!important
      }
       .flex-i8-0,
       .flex-i8-none {
       flex:none!important
      }
       .flex-i8-grow {
       flex:1 1 auto!important
      }
       .flex-i8-shrink-0 {
       flex-shrink:0!important
      }
     }
     @media (min-width:413px) {
       .flex-i8-plus {
       flex:1 1 0%!important
      }
       .flex-i8-plus-0,
       .flex-i8-plus-none {
       flex:none!important
      }
       .flex-i8-plus-grow {
       flex:1 1 auto!important
      }
       .flex-i8-plus-shrink-0 {
       flex-shrink:0!important
      }
     }
     @media (min-width:576px) {
       .flex-sm {
       flex:1 1 0%!important
      }
       .flex-sm-0,
       .flex-sm-none {
       flex:none!important
      }
       .flex-sm-grow {
       flex:1 1 auto!important
      }
       .flex-sm-shrink-0 {
       flex-shrink:0!important
      }
     }
     @media (min-width:768px) {
       .flex-md {
       flex:1 1 0%!important
      }
       .flex-md-0,
       .flex-md-none {
       flex:none!important
      }
       .flex-md-grow {
       flex:1 1 auto!important
      }
       .flex-md-shrink-0 {
       flex-shrink:0!important
      }
     }
     @media (min-width:992px) {
       .flex-lg {
       flex:1 1 0%!important
      }
       .flex-lg-0,
       .flex-lg-none {
       flex:none!important
      }
       .flex-lg-grow {
       flex:1 1 auto!important
      }
       .flex-lg-shrink-0 {
       flex-shrink:0!important
      }
     }
     @media (min-width:1200px) {
       .flex-xl {
       flex:1 1 0%!important
      }
       .flex-xl-0,
       .flex-xl-none {
       flex:none!important
      }
       .flex-xl-grow {
       flex:1 1 auto!important
      }
       .flex-xl-shrink-0 {
       flex-shrink:0!important
      }
     }
     @media (min-width:1366px) {
       .flex-xxl {
       flex:1 1 0%!important
      }
       .flex-xxl-0,
       .flex-xxl-none {
       flex:none!important
      }
       .flex-xxl-grow {
       flex:1 1 auto!important
      }
       .flex-xxl-shrink-0 {
       flex-shrink:0!important
      }
     }
      .w-25 {
      width:25%!important
     }
      .w-50 {
      width:50%!important
     }
      .w-75 {
      width:75%!important
     }
      .w-100 {
      width:100%!important
     }
      .w-auto {
      width:auto!important
     }
      .w-64 {
      width:64px!important
     }
      .h-25 {
      height:25%!important
     }
      .h-50 {
      height:50%!important
     }
      .h-75 {
      height:75%!important
     }
      .h-100 {
      height:100%!important
     }
      .h-auto {
      height:auto!important
     }
      .h-64 {
      height:64px!important
     }
     @media (min-width:374px) {
       .w-i8-25 {
       width:25%!important
      }
       .w-i8-50 {
       width:50%!important
      }
       .w-i8-75 {
       width:75%!important
      }
       .w-i8-100 {
       width:100%!important
      }
       .w-i8-auto {
       width:auto!important
      }
       .w-i8-64 {
       width:64px!important
      }
       .h-i8-25 {
       height:25%!important
      }
       .h-i8-50 {
       height:50%!important
      }
       .h-i8-75 {
       height:75%!important
      }
       .h-i8-100 {
       height:100%!important
      }
       .h-i8-auto {
       height:auto!important
      }
       .h-i8-64 {
       height:64px!important
      }
     }
     @media (min-width:413px) {
       .w-i8-plus-25 {
       width:25%!important
      }
       .w-i8-plus-50 {
       width:50%!important
      }
       .w-i8-plus-75 {
       width:75%!important
      }
       .w-i8-plus-100 {
       width:100%!important
      }
       .w-i8-plus-auto {
       width:auto!important
      }
       .w-i8-plus-64 {
       width:64px!important
      }
       .h-i8-plus-25 {
       height:25%!important
      }
       .h-i8-plus-50 {
       height:50%!important
      }
       .h-i8-plus-75 {
       height:75%!important
      }
       .h-i8-plus-100 {
       height:100%!important
      }
       .h-i8-plus-auto {
       height:auto!important
      }
       .h-i8-plus-64 {
       height:64px!important
      }
     }
     @media (min-width:576px) {
       .w-sm-25 {
       width:25%!important
      }
       .w-sm-50 {
       width:50%!important
      }
       .w-sm-75 {
       width:75%!important
      }
       .w-sm-100 {
       width:100%!important
      }
       .w-sm-auto {
       width:auto!important
      }
       .w-sm-64 {
       width:64px!important
      }
       .h-sm-25 {
       height:25%!important
      }
       .h-sm-50 {
       height:50%!important
      }
       .h-sm-75 {
       height:75%!important
      }
       .h-sm-100 {
       height:100%!important
      }
       .h-sm-auto {
       height:auto!important
      }
       .h-sm-64 {
       height:64px!important
      }
     }
     @media (min-width:768px) {
       .w-md-25 {
       width:25%!important
      }
       .w-md-50 {
       width:50%!important
      }
       .w-md-75 {
       width:75%!important
      }
       .w-md-100 {
       width:100%!important
      }
       .w-md-auto {
       width:auto!important
      }
       .w-md-64 {
       width:64px!important
      }
       .h-md-25 {
       height:25%!important
      }
       .h-md-50 {
       height:50%!important
      }
       .h-md-75 {
       height:75%!important
      }
       .h-md-100 {
       height:100%!important
      }
       .h-md-auto {
       height:auto!important
      }
       .h-md-64 {
       height:64px!important
      }
     }
     @media (min-width:992px) {
       .w-lg-25 {
       width:25%!important
      }
       .w-lg-50 {
       width:50%!important
      }
       .w-lg-75 {
       width:75%!important
      }
       .w-lg-100 {
       width:100%!important
      }
       .w-lg-auto {
       width:auto!important
      }
       .w-lg-64 {
       width:64px!important
      }
       .h-lg-25 {
       height:25%!important
      }
       .h-lg-50 {
       height:50%!important
      }
       .h-lg-75 {
       height:75%!important
      }
       .h-lg-100 {
       height:100%!important
      }
       .h-lg-auto {
       height:auto!important
      }
       .h-lg-64 {
       height:64px!important
      }
     }
     @media (min-width:1200px) {
       .w-xl-25 {
       width:25%!important
      }
       .w-xl-50 {
       width:50%!important
      }
       .w-xl-75 {
       width:75%!important
      }
       .w-xl-100 {
       width:100%!important
      }
       .w-xl-auto {
       width:auto!important
      }
       .w-xl-64 {
       width:64px!important
      }
       .h-xl-25 {
       height:25%!important
      }
       .h-xl-50 {
       height:50%!important
      }
       .h-xl-75 {
       height:75%!important
      }
       .h-xl-100 {
       height:100%!important
      }
       .h-xl-auto {
       height:auto!important
      }
       .h-xl-64 {
       height:64px!important
      }
     }
     @media (min-width:1366px) {
       .w-xxl-25 {
       width:25%!important
      }
       .w-xxl-50 {
       width:50%!important
      }
       .w-xxl-75 {
       width:75%!important
      }
       .w-xxl-100 {
       width:100%!important
      }
       .w-xxl-auto {
       width:auto!important
      }
       .w-xxl-64 {
       width:64px!important
      }
       .h-xxl-25 {
       height:25%!important
      }
       .h-xxl-50 {
       height:50%!important
      }
       .h-xxl-75 {
       height:75%!important
      }
       .h-xxl-100 {
       height:100%!important
      }
       .h-xxl-auto {
       height:auto!important
      }
       .h-xxl-64 {
       height:64px!important
      }
     }
      .text-underline {
      text-decoration:underline
     }
      .text-facebook {
      color:#3b5998
     }
      .text-twitter {
      color:#0084b4
     }
      .text-dribbble {
      color:#ea4c89
     }
      .hover-text-decoration-0:focus,
      .hover-text-decoration-0:hover {
      text-decoration:none
     }
      .lh-1 {
      line-height:1rem
     }
      .text-20 {
      color:rgba(48,56,64,.2)!important
     }
      .text-50 {
      color:rgba(48,56,64,.5)!important
     }
      .text-70 {
      color:rgba(48,56,64,.7)!important
     }
      .text-black-20 {
      color:rgba(48,56,64,.2)!important
     }
      .text-black-50 {
      color:rgba(48,56,64,.5)!important
     }
      .text-black-70 {
      color:rgba(48,56,64,.7)!important
     }
      .text-black-100 {
      color:#303840!important
     }
      .text-white-70 {
      color:hsla(0,0%,100%,.7)!important
     }
      .text-white-60 {
      color:hsla(0,0%,100%,.6)!important
     }
      .mb-heading {
      margin-bottom:1rem!important
     }
      .mb-grid-gutter {
      margin-bottom:24px!important
     }
      .mb-card-y {
      margin-bottom:1rem
     }
     @media (max-width:373.98px) {
       .p-0-xs {
       padding:0!important
      }
     }
      .col {
      padding-left:12px;
      padding-right:12px
     }
      .icon--left {
      margin-right:.5rem
     }
      .icon--right {
      margin-left:.5rem
     }
      .fullbleed {
      right:0;
      bottom:0
     }
      .absolute-top,
      .fullbleed {
      position:absolute;
      left:0;
      top:0
     }
      .o-hidden {
      overflow:hidden!important
     }
     @media (min-width:576px) and (max-width:767.98px) {
       .hidden-sm {
       display:none
      }
     }
      .z-0 {
      z-index:0
     }
      .z-1 {
      z-index:1
     }
      .bg-white {
      background-color:#fff!important
     }
      .bg-body {
      background-color:#f5f7fa!important
     }
      .bg-transparent {
      background:transparent!important
     }
      .bg-darker {
      background-color:#16191d!important
     }
      .bg-gradient-purple {
      background-image:linear-gradient(-128deg,#8a4182,#3289dc)
     }
      .bg-gradient-primary {
      background-image:linear-gradient(128deg,#1e6dbd,#3287db)
     }
      .border-1 {
      border:1px solid #ebeff2!important
     }
      .border-left-1 {
      border-left:1px solid #ebeff2!important
     }
      .border-right-1 {
      border-right:1px solid #ebeff2!important
     }
      .border-top-1 {
      border-top:1px solid #ebeff2!important
     }
      .border-bottom-1 {
      border-bottom:1px solid #ebeff2!important
     }
      .border-2 {
      border:2px solid #ebeff2!important
     }
      .border-left-2 {
      border-left:2px solid #ebeff2!important
     }
      .border-right-2 {
      border-right:2px solid #ebeff2!important
     }
      .border-top-2 {
      border-top:2px solid #ebeff2!important
     }
      .border-bottom-2 {
      border-bottom:2px solid #ebeff2!important
     }
      .border-3 {
      border:3px solid #ebeff2!important
     }
      .border-left-3 {
      border-left:3px solid #ebeff2!important
     }
      .border-right-3 {
      border-right:3px solid #ebeff2!important
     }
      .border-top-3 {
      border-top:3px solid #ebeff2!important
     }
      .border-bottom-3 {
      border-bottom:3px solid #ebeff2!important
     }
      .border-4 {
      border:4px solid #ebeff2!important
     }
      .border-left-4 {
      border-left:4px solid #ebeff2!important
     }
      .border-right-4 {
      border-right:4px solid #ebeff2!important
     }
      .border-top-4 {
      border-top:4px solid #ebeff2!important
     }
      .border-bottom-4 {
      border-bottom:4px solid #ebeff2!important
     }
      .border {
      border:1px solid #ebeff2!important
     }
      .border-top {
      border-top:1px solid #ebeff2!important
     }
      .border-right {
      border-right:1px solid #ebeff2!important
     }
      .border-bottom {
      border-bottom:1px solid #ebeff2!important
     }
      .border-left {
      border-left:1px solid #ebeff2!important
     }
      .border-0 {
      border:0!important
     }
      .border-top-0 {
      border-top:0!important
     }
      .border-right-0 {
      border-right:0!important
     }
      .border-bottom-0 {
      border-bottom:0!important
     }
      .border-left-0 {
      border-left:0!important
     }
     @media (min-width:374px) {
       .border-i8 {
       border:1px solid #ebeff2!important
      }
       .border-top-i8 {
       border-top:1px solid #ebeff2!important
      }
       .border-right-i8 {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-i8 {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-i8 {
       border-left:1px solid #ebeff2!important
      }
       .border-i8-0 {
       border:0!important
      }
       .border-top-i8-0 {
       border-top:0!important
      }
       .border-right-i8-0 {
       border-right:0!important
      }
       .border-bottom-i8-0 {
       border-bottom:0!important
      }
       .border-left-i8-0 {
       border-left:0!important
      }
     }
     @media (min-width:413px) {
       .border-i8-plus {
       border:1px solid #ebeff2!important
      }
       .border-top-i8-plus {
       border-top:1px solid #ebeff2!important
      }
       .border-right-i8-plus {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-i8-plus {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-i8-plus {
       border-left:1px solid #ebeff2!important
      }
       .border-i8-plus-0 {
       border:0!important
      }
       .border-top-i8-plus-0 {
       border-top:0!important
      }
       .border-right-i8-plus-0 {
       border-right:0!important
      }
       .border-bottom-i8-plus-0 {
       border-bottom:0!important
      }
       .border-left-i8-plus-0 {
       border-left:0!important
      }
     }
     @media (min-width:576px) {
       .border-sm {
       border:1px solid #ebeff2!important
      }
       .border-top-sm {
       border-top:1px solid #ebeff2!important
      }
       .border-right-sm {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-sm {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-sm {
       border-left:1px solid #ebeff2!important
      }
       .border-sm-0 {
       border:0!important
      }
       .border-top-sm-0 {
       border-top:0!important
      }
       .border-right-sm-0 {
       border-right:0!important
      }
       .border-bottom-sm-0 {
       border-bottom:0!important
      }
       .border-left-sm-0 {
       border-left:0!important
      }
     }
     @media (min-width:768px) {
       .border-md {
       border:1px solid #ebeff2!important
      }
       .border-top-md {
       border-top:1px solid #ebeff2!important
      }
       .border-right-md {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-md {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-md {
       border-left:1px solid #ebeff2!important
      }
       .border-md-0 {
       border:0!important
      }
       .border-top-md-0 {
       border-top:0!important
      }
       .border-right-md-0 {
       border-right:0!important
      }
       .border-bottom-md-0 {
       border-bottom:0!important
      }
       .border-left-md-0 {
       border-left:0!important
      }
     }
     @media (min-width:992px) {
       .border-lg {
       border:1px solid #ebeff2!important
      }
       .border-top-lg {
       border-top:1px solid #ebeff2!important
      }
       .border-right-lg {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-lg {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-lg {
       border-left:1px solid #ebeff2!important
      }
       .border-lg-0 {
       border:0!important
      }
       .border-top-lg-0 {
       border-top:0!important
      }
       .border-right-lg-0 {
       border-right:0!important
      }
       .border-bottom-lg-0 {
       border-bottom:0!important
      }
       .border-left-lg-0 {
       border-left:0!important
      }
     }
     @media (min-width:1200px) {
       .border-xl {
       border:1px solid #ebeff2!important
      }
       .border-top-xl {
       border-top:1px solid #ebeff2!important
      }
       .border-right-xl {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-xl {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-xl {
       border-left:1px solid #ebeff2!important
      }
       .border-xl-0 {
       border:0!important
      }
       .border-top-xl-0 {
       border-top:0!important
      }
       .border-right-xl-0 {
       border-right:0!important
      }
       .border-bottom-xl-0 {
       border-bottom:0!important
      }
       .border-left-xl-0 {
       border-left:0!important
      }
     }
     @media (min-width:1366px) {
       .border-xxl {
       border:1px solid #ebeff2!important
      }
       .border-top-xxl {
       border-top:1px solid #ebeff2!important
      }
       .border-right-xxl {
       border-right:1px solid #ebeff2!important
      }
       .border-bottom-xxl {
       border-bottom:1px solid #ebeff2!important
      }
       .border-left-xxl {
       border-left:1px solid #ebeff2!important
      }
       .border-xxl-0 {
       border:0!important
      }
       .border-top-xxl-0 {
       border-top:0!important
      }
       .border-right-xxl-0 {
       border-right:0!important
      }
       .border-bottom-xxl-0 {
       border-bottom:0!important
      }
       .border-left-xxl-0 {
       border-left:0!important
      }
     }
      .border-primary {
      border-color:#2c84dd!important
     }
      .border-left-primary {
      border-left-color:#2c84dd!important
     }
      .border-right-primary {
      border-right-color:#2c84dd!important
     }
      .border-top-primary {
      border-top-color:#2c84dd!important
     }
      .border-bottom-primary {
      border-bottom-color:#2c84dd!important
     }
      .border-secondary {
      border-color:#868e96!important
     }
      .border-left-secondary {
      border-left-color:#868e96!important
     }
      .border-right-secondary {
      border-right-color:#868e96!important
     }
      .border-top-secondary {
      border-top-color:#868e96!important
     }
      .border-bottom-secondary {
      border-bottom-color:#868e96!important
     }
      .border-success {
      border-color:#77c13a!important
     }
      .border-left-success {
      border-left-color:#77c13a!important
     }
      .border-right-success {
      border-right-color:#77c13a!important
     }
      .border-top-success {
      border-top-color:#77c13a!important
     }
      .border-bottom-success {
      border-bottom-color:#77c13a!important
     }
      .border-info {
      border-color:#17a2b8!important
     }
      .border-left-info {
      border-left-color:#17a2b8!important
     }
      .border-right-info {
      border-right-color:#17a2b8!important
     }
      .border-top-info {
      border-top-color:#17a2b8!important
     }
      .border-bottom-info {
      border-bottom-color:#17a2b8!important
     }
      .border-warning {
      border-color:#f98437!important
     }
      .border-left-warning {
      border-left-color:#f98437!important
     }
      .border-right-warning {
      border-right-color:#f98437!important
     }
      .border-top-warning {
      border-top-color:#f98437!important
     }
      .border-bottom-warning {
      border-bottom-color:#f98437!important
     }
      .border-danger {
      border-color:#d9534f!important
     }
      .border-left-danger {
      border-left-color:#d9534f!important
     }
      .border-right-danger {
      border-right-color:#d9534f!important
     }
      .border-top-danger {
      border-top-color:#d9534f!important
     }
      .border-bottom-danger {
      border-bottom-color:#d9534f!important
     }
      .border-light {
      border-color:#f8f9fa!important
     }
      .border-left-light {
      border-left-color:#f8f9fa!important
     }
      .border-right-light {
      border-right-color:#f8f9fa!important
     }
      .border-top-light {
      border-top-color:#f8f9fa!important
     }
      .border-bottom-light {
      border-bottom-color:#f8f9fa!important
     }
      .border-dark {
      border-color:#1d2126!important
     }
      .border-left-dark {
      border-left-color:#1d2126!important
     }
      .border-right-dark {
      border-right-color:#1d2126!important
     }
      .border-top-dark {
      border-top-color:#1d2126!important
     }
      .border-bottom-dark {
      border-bottom-color:#1d2126!important
     }
      .border-accent {
      border-color:#ed0b4c!important
     }
      .border-left-accent {
      border-left-color:#ed0b4c!important
     }
      .border-right-accent {
      border-right-color:#ed0b4c!important
     }
      .border-top-accent {
      border-top-color:#ed0b4c!important
     }
      .border-bottom-accent {
      border-bottom-color:#ed0b4c!important
     }
      .border-primary-light {
      border-color:#9cf!important
     }
      .border-left-primary-light {
      border-left-color:#9cf!important
     }
      .border-right-primary-light {
      border-right-color:#9cf!important
     }
      .border-top-primary-light {
      border-top-color:#9cf!important
     }
      .border-bottom-primary-light {
      border-bottom-color:#9cf!important
     }
      .border-bottom-white {
      border-bottom:1px solid hsla(0,0%,100%,.15)
     }
      .order-0 {
      order:0!important
     }
     @media (min-width:374px) {
       .order-i8-0 {
       order:0!important
      }
     }
     @media (min-width:413px) {
       .order-i8-plus-0 {
       order:0!important
      }
     }
     @media (min-width:576px) {
       .order-sm-0 {
       order:0!important
      }
     }
     @media (min-width:768px) {
       .order-md-0 {
       order:0!important
      }
     }
     @media (min-width:992px) {
       .order-lg-0 {
       order:0!important
      }
     }
     @media (min-width:1200px) {
       .order-xl-0 {
       order:0!important
      }
     }
     @media (min-width:1366px) {
       .order-xxl-0 {
       order:0!important
      }
     }
      .order-1 {
      order:1!important
     }
     @media (min-width:374px) {
       .order-i8-1 {
       order:1!important
      }
     }
     @media (min-width:413px) {
       .order-i8-plus-1 {
       order:1!important
      }
     }
     @media (min-width:576px) {
       .order-sm-1 {
       order:1!important
      }
     }
     @media (min-width:768px) {
       .order-md-1 {
       order:1!important
      }
     }
     @media (min-width:992px) {
       .order-lg-1 {
       order:1!important
      }
     }
     @media (min-width:1200px) {
       .order-xl-1 {
       order:1!important
      }
     }
     @media (min-width:1366px) {
       .order-xxl-1 {
       order:1!important
      }
     }
      .order-2 {
      order:2!important
     }
     @media (min-width:374px) {
       .order-i8-2 {
       order:2!important
      }
     }
     @media (min-width:413px) {
       .order-i8-plus-2 {
       order:2!important
      }
     }
     @media (min-width:576px) {
       .order-sm-2 {
       order:2!important
      }
     }
     @media (min-width:768px) {
       .order-md-2 {
       order:2!important
      }
     }
     @media (min-width:992px) {
       .order-lg-2 {
       order:2!important
      }
     }
     @media (min-width:1200px) {
       .order-xl-2 {
       order:2!important
      }
     }
     @media (min-width:1366px) {
       .order-xxl-2 {
       order:2!important
      }
     }
      .material-icons {
      vertical-align:middle
     }
      .icon-16pt {
      font-size:1rem!important
     }
      .icon-24pt {
      font-size:1.5rem!important
     }
      .icon-32pt {
      font-size:2rem!important
     }
      .icon-48pt {
      font-size:3rem!important
     }
      .icon-64pt {
      font-size:4rem!important
     }
      .icon-holder {
      display:flex;
      align-items:center;
      justify-content:center;
      width:56px;
      height:56px;
      padding:0
     }
      .icon-holder[href]:hover {
      text-decoration:none
     }
      .icon-holder--small {
      width:30px;
      height:30px
     }
      .icon-holder--default {
      background-color:#e9ecef
     }
      .icon-holder--primary {
      color:#fff;
      background-image:none;
      background-color:#2c84dd;
      border:1px solid #2c84dd
     }
      .icon-holder--primary:hover {
      color:#2c84dd;
      background-image:none;
      background-color:transparent;
      border:1px solid #2c84dd
     }
      .icon-holder--primary:hover:hover {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .icon-holder--outline-primary {
      color:#2c84dd;
      background-image:none;
      background-color:transparent;
      border:1px solid #2c84dd
     }
      .icon-holder--outline-primary:hover {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .icon-holder--secondary {
      color:#fff;
      background-image:none;
      background-color:#868e96;
      border:1px solid #868e96
     }
      .icon-holder--secondary:hover {
      color:#868e96;
      background-image:none;
      background-color:transparent;
      border:1px solid #868e96
     }
      .icon-holder--secondary:hover:hover {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .icon-holder--outline-secondary {
      color:#868e96;
      background-image:none;
      background-color:transparent;
      border:1px solid #868e96
     }
      .icon-holder--outline-secondary:hover {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .icon-holder--success {
      color:#fff;
      background-image:none;
      background-color:#77c13a;
      border:1px solid #77c13a
     }
      .icon-holder--success:hover {
      color:#77c13a;
      background-image:none;
      background-color:transparent;
      border:1px solid #77c13a
     }
      .icon-holder--success:hover:hover {
      color:#fff;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .icon-holder--outline-success {
      color:#77c13a;
      background-image:none;
      background-color:transparent;
      border:1px solid #77c13a
     }
      .icon-holder--outline-success:hover {
      color:#fff;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .icon-holder--info {
      color:#fff;
      background-color:#17a2b8
     }
      .icon-holder--info,
      .icon-holder--info:hover {
      background-image:none;
      border:1px solid #17a2b8
     }
      .icon-holder--info:hover {
      color:#17a2b8;
      background-color:transparent
     }
      .icon-holder--info:hover:hover {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .icon-holder--outline-info {
      color:#17a2b8;
      background-image:none;
      background-color:transparent;
      border:1px solid #17a2b8
     }
      .icon-holder--outline-info:hover {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .icon-holder--warning {
      color:#fff;
      background-image:none;
      background-color:#f98437;
      border:1px solid #f98437
     }
      .icon-holder--warning:hover {
      color:#f98437;
      background-image:none;
      background-color:transparent;
      border:1px solid #f98437
     }
      .icon-holder--warning:hover:hover {
      color:#fff;
      background-color:#f98437;
      border-color:#f98437
     }
      .icon-holder--outline-warning {
      color:#f98437;
      background-image:none;
      background-color:transparent;
      border:1px solid #f98437
     }
      .icon-holder--outline-warning:hover {
      color:#fff;
      background-color:#f98437;
      border-color:#f98437
     }
      .icon-holder--danger {
      color:#fff;
      background-image:none;
      background-color:#d9534f;
      border:1px solid #d9534f
     }
      .icon-holder--danger:hover {
      color:#d9534f;
      background-image:none;
      background-color:transparent;
      border:1px solid #d9534f
     }
      .icon-holder--danger:hover:hover {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .icon-holder--outline-danger {
      color:#d9534f;
      background-image:none;
      background-color:transparent;
      border:1px solid #d9534f
     }
      .icon-holder--outline-danger:hover {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .icon-holder--light {
      color:#fff;
      background-color:#f8f9fa
     }
      .icon-holder--light,
      .icon-holder--light:hover {
      background-image:none;
      border:1px solid #f8f9fa
     }
      .icon-holder--light:hover {
      color:#f8f9fa;
      background-color:transparent
     }
      .icon-holder--light:hover:hover {
      color:#fff;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .icon-holder--outline-light {
      color:#f8f9fa;
      background-image:none;
      background-color:transparent;
      border:1px solid #f8f9fa
     }
      .icon-holder--outline-light:hover {
      color:#fff;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .icon-holder--dark {
      color:#fff;
      background-color:#1d2126
     }
      .icon-holder--dark,
      .icon-holder--dark:hover {
      background-image:none;
      border:1px solid #1d2126
     }
      .icon-holder--dark:hover {
      color:#1d2126;
      background-color:transparent
     }
      .icon-holder--dark:hover:hover {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .icon-holder--outline-dark {
      color:#1d2126;
      background-image:none;
      background-color:transparent;
      border:1px solid #1d2126
     }
      .icon-holder--outline-dark:hover {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .icon-holder--accent {
      color:#fff;
      background-image:none;
      background-color:#ed0b4c;
      border:1px solid #ed0b4c
     }
      .icon-holder--accent:hover {
      color:#ed0b4c;
      background-image:none;
      background-color:transparent;
      border:1px solid #ed0b4c
     }
      .icon-holder--accent:hover:hover {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .icon-holder--outline-accent {
      color:#ed0b4c;
      background-image:none;
      background-color:transparent;
      border:1px solid #ed0b4c
     }
      .icon-holder--outline-accent:hover {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .icon-holder--primary-light {
      color:#fff;
      background-image:none;
      background-color:#9cf;
      border:1px solid #9cf
     }
      .icon-holder--primary-light:hover {
      color:#9cf;
      background-image:none;
      background-color:transparent;
      border:1px solid #9cf
     }
      .icon-holder--primary-light:hover:hover {
      color:#fff;
      background-color:#9cf;
      border-color:#9cf
     }
      .icon-holder--outline-primary-light {
      color:#9cf;
      background-image:none;
      background-color:transparent;
      border:1px solid #9cf
     }
      .icon-holder--outline-primary-light:hover {
      color:#fff;
      background-color:#9cf;
      border-color:#9cf
     }
      .icon-holder--outline-muted {
      color:rgba(48,56,64,.5);
      background-image:none;
      background-color:transparent;
      border:1px solid rgba(48,56,64,.5)
     }
      .icon-holder--outline-muted:hover {
      color:#fff;
      background-color:rgba(48,56,64,.5);
      border-color:rgba(48,56,64,.5)
     }
     html {
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale
     }
      b,
      strong {
      font-weight:500
     }
      .display-1 {
      line-height:1.25;
      font-family:Oswald,Helvetica Neue,Arial,sans-serif
     }
      .h1,
      .h2,
      h1,
      h2 {
      line-height:1.5
     }
      .h3,
      .h4,
      h3,
      h4 {
      line-height:1.414
     }
      .h5,
      h5 {
      line-height:1.5;
      text-transform:uppercase;
      color:#303840
     }
      .lead {
      line-height:1.556
     }
      .lead:last-child {
      margin-bottom:0
     }
      .small,
      small {
      line-height:1rem
     }
      a:hover {
      text-decoration:none
     }
      .font-size-16pt {
      font-size:1rem!important
     }
      .font-size-20pt {
      font-size:1.25rem!important
     }
      .font-size-24pt {
      font-size:1.5rem!important
     }
      .font-size-32pt {
      font-size:2rem!important
     }
      .font-size-48pt {
      font-size:3rem!important
     }
      .font-size-56pt {
      font-size:3.5rem!important
     }
      .font-size-64pt {
      font-size:4rem!important
     }
      .measure-paragraph {
      max-width:456px
     }
      .measure-lead,
      .measure-paragraph-max {
      max-width:536px
     }
      .measure-lead-max {
      max-width:616px
     }
      .measure-hero-lead {
      max-width:696px
     }
      .container,
      .container-fluid {
      padding-right:1.5rem;
      padding-left:1.5rem
     }
     @media (max-width:767.98px) {
       .has-drawer-opened .mdk-header-layout__content {
       z-index:2
      }
     }
      .mdk-header-layout {
      overflow:visible
     }
     @media (min-width:768px) {
       .mdk-drawer-layout .container {
       max-width:702px
      }
     }
     @media (min-width:1200px) {
       .mdk-drawer-layout .container {
       max-width:936px
      }
     }
      .badge {
      display:inline-flex;
      align-items:center;
      font-weight:400
     }
      .badge .material-icons {
      font-size:inherit
     }
      .badge>.material-icons {
      margin-right:5px
     }
      .badge-notifications {
      border-radius:100px;
      padding:0 .5rem;
      line-height:1rem;
      font-weight:700
     }
      .badge-filter a {
      color:inherit;
      padding:0 2px 0 0;
      opacity:.7
     }
      .badge-filter a:hover {
      opacity:1
     }
      .badge-filter_name {
      opacity:.7;
      padding-right:5px
     }
      .badge-lg {
      padding:6px 12px
     }
      .badge-success,
      .badge-warning {
      color:#fff
     }
      .breadcrumb {
      font-size:.707rem;
      padding-left:0;
      padding-right:0;
      margin-bottom:1.5rem;
      color:rgba(48,56,64,.5);
      text-transform:uppercase;
      font-weight:500
     }
      .btn {
      display:inline-flex;
      align-items:center;
      justify-content:center
     }
      .btn:not(.btn-lg):not(.btn-sm) {
      font-size:1.063rem
     }
      .btn--raised {
      box-shadow:0 6px 6px -3px rgba(48,56,64,.2),0 10px 14px 1px rgba(48,56,64,.14),0 4px 18px 3px rgba(48,56,64,.12)
     }
      .button-list>.btn,
      .button-list>.btn-group {
      margin-bottom:.75rem;
      margin-left:.5rem
     }
      .btn-flush {
      background:none;
      box-shadow:none;
      border:none;
      padding:0;
      line-height:1;
      color:inherit
     }
      .dropdown-toggle:after {
      align-self:center
     }
      .btn .material-icons {
      font-size:inherit;
      line-height:inherit
     }
      .btn-rounded {
      border-radius:100px
     }
      .dropdown-toggle[data-caret=false]:after {
      display:none
     }
      .btn__secondary-text {
      display:block;
      margin-top:-2px;
      font-size:.925rem
     }
      .btn-success:not(:hover),
      .btn-warning:not(:hover) {
      color:#fff
     }
      .btn-outline-light {
      color:#212529;
      border-color:#212529
     }
      .btn-outline-success:hover,
      .btn-outline-warning:hover {
      color:#fff
     }
      .btn-primary--dark {
      background-color:#1e6bb8;
      border-color:#1e6bb8;
      color:#fff
     }
      .btn-primary--dark:hover {
      color:#fff;
      background-color:#185897;
      border-color:#17518c
     }
      .btn-primary--dark.focus,
      .btn-primary--dark:focus {
      box-shadow:0 0 0 .2rem rgba(64,129,195,.5)
     }
      .btn-primary--dark.disabled,
      .btn-primary--dark:disabled {
      color:#fff;
      background-color:#1e6bb8;
      border-color:#1e6bb8
     }
      .btn-primary--dark:not(:disabled):not(.disabled).active,
      .btn-primary--dark:not(:disabled):not(.disabled):active,
      .show>.btn-primary--dark.dropdown-toggle {
      color:#fff;
      background-color:#17518c;
      border-color:#154b81
     }
      .btn-primary--dark:not(:disabled):not(.disabled).active:focus,
      .btn-primary--dark:not(:disabled):not(.disabled):active:focus,
      .show>.btn-primary--dark.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(64,129,195,.5)
     }
      .btn-primary--dark .btn__secondary-text,
      .btn-primary .btn__secondary-text {
      color:hsla(0,0%,100%,.5)
     }
      .btn-black {
      color:#fff;
      background-color:#303840;
      border-color:#303840
     }
      .btn-black:hover {
      color:#fff;
      background-color:#20252a;
      border-color:#1a1f23
     }
      .btn-black.focus,
      .btn-black:focus {
      box-shadow:0 0 0 .2rem rgba(79,86,93,.5)
     }
      .btn-black.disabled,
      .btn-black:disabled {
      color:#fff;
      background-color:#303840;
      border-color:#303840
     }
      .btn-black:not(:disabled):not(.disabled).active,
      .btn-black:not(:disabled):not(.disabled):active,
      .show>.btn-black.dropdown-toggle {
      color:#fff;
      background-color:#1a1f23;
      border-color:#15181c
     }
      .btn-black:not(:disabled):not(.disabled).active:focus,
      .btn-black:not(:disabled):not(.disabled):active:focus,
      .show>.btn-black.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(79,86,93,.5)
     }
      .btn-white {
      color:#212529;
      background-color:#fff;
      border-color:#fff
     }
      .btn-white:hover {
      color:#212529;
      background-color:#ececec;
      border-color:#e6e6e6
     }
      .btn-white.focus,
      .btn-white:focus {
      box-shadow:0 0 0 .2rem rgba(222,222,223,.5)
     }
      .btn-white.disabled,
      .btn-white:disabled {
      color:#212529;
      background-color:#fff;
      border-color:#fff
     }
      .btn-white:not(:disabled):not(.disabled).active,
      .btn-white:not(:disabled):not(.disabled):active,
      .show>.btn-white.dropdown-toggle {
      color:#212529;
      background-color:#e6e6e6;
      border-color:#dfdfdf
     }
      .btn-white:not(:disabled):not(.disabled).active:focus,
      .btn-white:not(:disabled):not(.disabled):active:focus,
      .show>.btn-white.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(222,222,223,.5)
     }
      .btn-white .btn__secondary-text {
      color:rgba(0,0,0,.3)
     }
      .btn-outline-white {
      color:#fff;
      border-color:#fff
     }
      .btn-outline-white:hover {
      color:#2c84dd;
      background-color:#fff;
      border-color:#fff
     }
      .btn-outline-white.focus,
      .btn-outline-white:focus {
      box-shadow:0 0 0 .2rem hsla(0,0%,100%,.5)
     }
      .btn-outline-white.disabled,
      .btn-outline-white:disabled {
      color:#fff;
      background-color:transparent
     }
      .btn-outline-white:not(:disabled):not(.disabled).active,
      .btn-outline-white:not(:disabled):not(.disabled):active,
      .show>.btn-outline-white.dropdown-toggle {
      color:#212529;
      background-color:#fff;
      border-color:#fff
     }
      .btn-outline-white:not(:disabled):not(.disabled).active:focus,
      .btn-outline-white:not(:disabled):not(.disabled):active:focus,
      .show>.btn-outline-white.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem hsla(0,0%,100%,.5)
     }
      .btn-outline-white .btn__secondary-text {
      color:hsla(0,0%,100%,.54)
     }
      .btn-outline-white:focus .btn__secondary-text,
      .btn-outline-white:hover .btn__secondary-text {
      color:rgba(48,56,64,.5)
     }
     @media (max-width:373.98px) {
       .btn-block-xs {
       display:block;
       width:100%
      }
       .btn-block-xs:not(:last-child) {
       margin-bottom:5px
      }
     }
     @media (max-width:373.98px) {
       .btn-group-xs>.btn {
       padding:.25rem .5rem;
       font-size:.875rem;
       line-height:1.5;
       border-radius:.2rem
      }
     }
      .card,
      .card-group,
      .card-nav .tab-content {
      margin-bottom:1.5rem
     }
      .card,
      .card-nav .tab-content {
      box-shadow:0 2px 1px -1px rgba(48,56,64,.2),0 1px 1px 0 rgba(48,56,64,.14),0 1px 3px 0 rgba(48,56,64,.12);
      transition:box-shadow .28s cubic-bezier(.4,0,.2,1);
      will-change:box-shadow
     }
      .card--elevated:hover {
      box-shadow:0 3px 5px -1px rgba(48,56,64,.2),0 5px 8px 0 rgba(48,56,64,.14),0 1px 14px 0 rgba(48,56,64,.12)
     }
      .card--raised {
      box-shadow:0 6px 6px -3px rgba(48,56,64,.2),0 10px 14px 1px rgba(48,56,64,.14),0 4px 18px 3px rgba(48,56,64,.12)
     }
      .card--connect {
      position:relative
     }
      .card--connect:after {
      content:"";
      position:absolute;
      top:0;
      bottom:0;
      width:4px;
      background-color:#ebeff2;
      left:50%;
      margin-left:-2px;
      z-index:-1
     }
      .card-nav .card-flush.tab-content,
      .card.card-flush {
      box-shadow:none;
      border:none
     }
      .card-nav .card-flush.tab-content,
      .card-nav .card-flush.tab-content .card-img,
      .card-nav .card-flush.tab-content .card-img-top,
      .card.card-flush,
      .card.card-flush .card-img,
      .card.card-flush .card-img-top {
      border-radius:0
     }
      .card-nav .card-flush-y.tab-content,
      .card.card-flush-y {
      box-shadow:none;
      border-left:none;
      border-right:none;
      border-radius:0
     }
      .card-2by1 .card-body {
      padding:.5rem 1rem
     }
      .card-sm .card-body {
      padding:.5rem
     }
     @media (min-width:576px) {
       .card-group>.card,
       .card-nav .card-group>.tab-content {
       margin-bottom:0
      }
     }
     @media (max-width:991.98px) {
       .card-group--lg-up .card,
       .card-group--lg-up .card-nav .tab-content,
       .card-nav .card-group--lg-up .tab-content {
       flex:0 0 100%!important;
       margin-bottom:1rem
      }
     }
      .card-group-row {
      display:flex;
      flex-flow:row wrap
     }
      .card-group-row__col {
      display:flex
     }
      .card-group-row__card {
      flex:1 0 0
     }
      .card-group-flush>.card,
      .card-nav .card-group-flush>.tab-content {
      box-shadow:none;
      border-bottom:0;
      margin-bottom:0;
      background:transparent
     }
      .card-group-flush>.card,
      .card-group-flush>.card .card-img,
      .card-group-flush>.card .card-img-top,
      .card-nav .card-group-flush>.tab-content,
      .card-nav .card-group-flush>.tab-content .card-img,
      .card-nav .card-group-flush>.tab-content .card-img-top {
      border-radius:0
     }
      .card-group-flush>.card:first-child,
      .card-nav .card-group-flush>.tab-content:first-child {
      border-left:none
     }
      .card-group-flush>.card:last-child,
      .card-nav .card-group-flush>.tab-content:last-child {
      border-right:none
     }
     @media (max-width:373.98px) {
       .card-group-flush>.card,
       .card-nav .card-group-flush>.tab-content {
       border-left:none;
       border-right:none
      }
     }
     @media (min-width:576px) {
       .card-columns--2 {
       -webkit-column-count:2;
       column-count:2
      }
     }
      .card-column {
      display:inline-block;
      width:100%
     }
      .card-body+.card-body {
      border-top:1px solid #ebeff2
     }
      .card-deck-row {
      display:flex;
      flex-flow:row wrap
     }
      .card-deck-row>[class*=col-] {
      display:flex
     }
      .card-deck-row .card,
      .card-deck-row .card-nav .tab-content,
      .card-nav .card-deck-row .tab-content {
      flex:1 1 0%
     }
      .card-title {
      font-weight:500
     }
      .card-title[href],
      .card-title a {
      color:inherit;
      display:flex;
      text-decoration:none
     }
      .card-title:last-child {
      margin-bottom:0
     }
      .card-subtitle {
      color:rgba(48,56,64,.5);
      text-transform:uppercase;
      font-size:.707rem;
      font-weight:500
     }
      .card-title+.card-subtitle {
      margin-top:-.5rem
     }
      .card-title--raised {
      position:absolute;
      top:0;
      left:0;
      -webkit-transform:translate3d(0,-100%,0);
      transform:translate3d(0,-100%,0);
      margin:0;
      padding:1rem
     }
      .card-header {
      position:relative;
      border-bottom:1px solid #ebeff2
     }
      .card-footer {
      border-top:1px solid #ebeff2
     }
      .card-footer:last-child {
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .card-actions {
      white-space:nowrap;
      font-size:0;
      display:flex;
      flex-flow:row wrap;
      align-items:center
     }
      .card-header .card-actions {
      margin-top:-1rem;
      margin-bottom:-1rem;
      margin-right:-1rem;
      display:flex
     }
      .card-actions__text {
      font-size:.707rem;
      padding:0 .5rem;
      color:rgba(48,56,64,.5)
     }
      .card-actions__action {
      display:flex;
      align-items:center;
      padding:0 .5rem
     }
      .card-actions__action+.card-actions__action {
      border-left:1px solid #ebeff2
     }
      .card-actions__action,
      .card-actions__action>button {
      font-size:1rem;
      background:none;
      border:none;
      color:rgba(48,56,64,.5)
     }
      .card-actions__action:focus,
      .card-actions__action:hover,
      .card-actions__action>button:focus,
      .card-actions__action>button:hover {
      text-decoration:none;
      color:#303840
     }
      .card-actions__action>button {
      padding:0
     }
      .card-actions__action .material-icons {
      line-height:inherit;
      font-size:inherit
     }
      .card-aside {
      flex-direction:row;
      overflow:hidden;
      z-index:0
     }
      .card-aside__image {
      width:150px;
      height:100%;
      position:absolute;
      background-size:cover;
      background-repeat:no-repeat
     }
      .card-aside__body {
      position:relative;
      margin-left:150px;
      align-self:center
     }
     @media (max-width:767.98px) {
       .card-aside {
       flex-direction:column;
       align-items:center
      }
       .card-aside__image {
       width:100%;
       height:200px;
       position:relative
      }
       .card-aside__body {
       margin-left:0;
       margin-right:auto
      }
     }
      .overlay {
      position:relative
     }
      .overlay__content {
      position:absolute;
      left:0;
      top:0;
      bottom:0;
      right:0;
      transition:background-color .4s;
      display:flex;
      align-items:center;
      justify-content:center
     }
      .overlay__action {
      transition:opacity .4s,-webkit-transform .4s;
      transition:opacity .4s,transform .4s;
      transition:opacity .4s,transform .4s,-webkit-transform .4s;
      opacity:0;
      -webkit-transform:translate3d(0,10px,0);
      transform:translate3d(0,10px,0)
     }
      .overlay--show .overlay__action {
      opacity:1;
      -webkit-transform:translateZ(0);
      transform:translateZ(0)
     }
      .overlay--duserselect {
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      user-select:none
     }
      .popover-lg {
      box-shadow:0 6px 6px -3px rgba(48,56,64,.2),0 10px 14px 1px rgba(48,56,64,.14),0 4px 18px 3px rgba(48,56,64,.12);
      border:none
     }
      .popover-lg .popover-body {
      padding:1.5rem
     }
      .popover-lg .bs-popover-auto[x-placement^=top] .arrow:before,
      .popover-lg .bs-popover-top .arrow:before {
      border-top-color:transparent
     }
      .popover-lg .bs-popover-auto[x-placement^=right] .arrow:before,
      .popover-lg .bs-popover-right .arrow:before {
      border-right-color:transparent
     }
      .popover-lg .bs-popover-auto[x-placement^=bottom] .arrow:before,
      .popover-lg .bs-popover-bottom .arrow:before {
      border-bottom-color:transparent
     }
      .popover-lg .bs-popover-auto[x-placement^=left] .arrow:before,
      .popover-lg .bs-popover-left .arrow:before {
      border-left-color:transparent
     }
      .bs-popover-auto[x-placement^=top],
      .bs-popover-top {
      margin-bottom:1rem
     }
      .bs-popover-auto[x-placement^=right],
      .bs-popover-right {
      margin-left:1rem
     }
      .bs-popover-auto[x-placement^=bottom],
      .bs-popover-bottom {
      margin-top:1rem
     }
      .bs-popover-auto[x-placement^=left],
      .bs-popover-left {
      margin-right:1rem
     }
      .img-fluid {
      width:100%;
      max-width:none
     }
      .page-link {
      text-transform:uppercase;
      font-weight:500;
      font-size:1rem;
      border-left:none;
      border-top:none;
      border-bottom:none;
      display:flex;
      align-items:center;
      line-height:1.25!important
     }
      .page-link:focus,
      .page-link:hover {
      text-decoration:none
     }
      .page-item:last-of-type .page-link {
      border-right:none
     }
      .page-link .material-icons {
      line-height:1rem
     }
      .pagination {
      position:relative;
      z-index:0
     }
      .pagination:last-child {
      margin-bottom:0
     }
      .rating,
      .rating__item {
      display:flex;
      align-items:center
     }
      .rating__item {
      color:#f9c32c
     }
      .rating .material-icons {
      font-size:1rem
     }
      .rating-24 .material-icons {
      font-size:1.5rem
     }
      .rating-32 .material-icons {
      font-size:2rem
     }
      .table tbody td,
      .table thead th {
      vertical-align:middle;
      line-height:1.2
     }
      .table-nowrap td,
      .table-nowrap th {
      white-space:nowrap
     }
      .table .sort {
      color:inherit;
      display:inline-flex;
      align-items:center;
      text-decoration:none
     }
      .table .sort:after {
      margin-left:.5rem;
      content:url("data:image/svg+xml;utf8,<svg width='6' height='10' viewBox='0 0 6 10' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M3 0L6 4H0L3 0ZM3 10L0 6H6L3 10Z' fill='rgba(48, 56, 64, 0.54)'/></svg>")
     }
      .table .sort.asc,
      .table .sort.desc {
      color:#303840;
      text-decoration:underline
     }
      .table .sort+.sort {
      margin-left:1rem
     }
      .table--elevated {
      box-shadow:0 3px 3px -2px rgba(48,56,64,.2),0 3px 4px 0 rgba(48,56,64,.14),0 1px 8px 0 rgba(48,56,64,.12)
     }
      .table-flush {
      margin-bottom:0
     }
      .table-flush thead th {
      border-top:0
     }
      .list-group {
      margin-bottom:1rem;
      box-shadow:0 2px 1px -1px rgba(48,56,64,.2),0 1px 1px 0 rgba(48,56,64,.14),0 1px 3px 0 rgba(48,56,64,.12);
      border-radius:.25rem
     }
      .list-group-flush {
      box-shadow:none;
      border-radius:0;
      margin-bottom:0
     }
      .list-group-flush>.list-group-item:not(.active) {
      background:none
     }
      .list-group-flush>.list-group-item:first-child {
      border-top:0
     }
      .list-group-flush>.list-group-item:last-child {
      border-bottom:0
     }
      .list-group-item.active a {
      color:inherit
     }
      .media-left,
      .media-right {
      display:flex;
      flex-direction:column
     }
      .media-left {
      margin-right:.5rem
     }
      .media-right {
      margin-left:.5rem
     }
      .media-body {
      flex:1 1 0%
     }
      .media {
      display:flex;
      flex-flow:row wrap
     }
     @media (max-width:373.98px) {
       .media-stack-xs {
       flex-direction:column
      }
       .media-stack-xs .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
     @media (max-width:412.98px) {
       .media-stack-i8 {
       flex-direction:column
      }
       .media-stack-i8 .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
     @media (max-width:575.98px) {
       .media-stack-i8-plus {
       flex-direction:column
      }
       .media-stack-i8-plus .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
     @media (max-width:767.98px) {
       .media-stack-sm {
       flex-direction:column
      }
       .media-stack-sm .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
     @media (max-width:991.98px) {
       .media-stack-md {
       flex-direction:column
      }
       .media-stack-md .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
     @media (max-width:1199.98px) {
       .media-stack-lg {
       flex-direction:column
      }
       .media-stack-lg .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
     @media (max-width:1365.98px) {
       .media-stack-xl {
       flex-direction:column
      }
       .media-stack-xl .media-left {
       width:100%!important;
       margin:0 0 1rem
      }
     }
      .media-stack-xxl {
      flex-direction:column
     }
      .media-stack-xxl .media-left {
      width:100%!important;
      margin:0 0 1rem
     }
     @media (min-width:576px) {
       .media__thumbnail {
       width:150px
      }
     }
      .nav-link__secondary-text {
      display:block;
      margin-top:-2px;
      font-size:.825rem
     }
      .nav-link {
      color:rgba(48,56,64,.5);
      display:flex
     }
      .nav--flush .nav-link {
      padding:0
     }
      .active .nav-link,
      .nav-link.active {
      font-weight:500;
      color:#303840
     }
      .nav-tabs--flush .nav-link {
      border:none
     }
      .nav-tabs--flush .nav-link:focus,
      .nav-tabs--flush .nav-link:hover {
      border-color:transparent
     }
      .nav-tabs--flush .nav-item.show .nav-link,
      .nav-tabs--flush .nav-link.active {
      background-color:transparent
     }
      .nav-tabs--active-bg .nav-item.show .nav-link,
      .nav-tabs--active-bg .nav-link.active {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .nav-tabs--active-underline .nav-item.show .nav-link,
      .nav-tabs--active-underline .nav-link.active {
      border:none;
      border-bottom:4px solid #2c84dd
     }
      .card-nav {
      z-index:0
     }
      .card-nav .nav-tabs {
      border-bottom:none;
      z-index:2;
      position:relative
     }
      .card-nav .nav-tabs .nav-item {
      margin-bottom:0
     }
      .card-nav .nav-tabs .nav-link:not(.active):hover {
      border-color:transparent
     }
     @media (min-width:576px) {
       .card-nav:not(.card-nav--vertical) .nav-tabs {
       padding:0 1rem
      }
       .card-nav:not(.card-nav--vertical) .tab-content {
       margin-top:-1px
      }
     }
      .card-nav--vertical .nav-tabs {
      flex-direction:column
     }
     @media (max-width:991.98px) {
       .card-nav--vertical .nav-tabs .active {
       border-color:#ebeff2
      }
       .card-nav--vertical .nav-tabs {
       margin-bottom:1rem
      }
       .card-nav--vertical .nav-tabs .nav-link {
       border-radius:.25rem
      }
     }
     @media (min-width:992px) {
       .card-nav--vertical {
       display:flex;
       flex-direction:row;
       margin-bottom:1rem
      }
       .card-nav--vertical .tab-content {
       overflow:hidden;
       margin-bottom:0;
       flex:1
      }
       .card-nav--vertical .tab-content:last-child {
       margin-left:-1px
      }
       .card-nav--vertical .tab-content:first-child {
       margin-right:-1px
      }
       .card-nav--vertical .nav-tabs {
       padding:1rem 0
      }
       .card-nav--vertical .nav-tabs:last-child .nav-item.show .nav-link,
       .card-nav--vertical .nav-tabs:last-child .nav-link.active {
       border-color:transparent transparent #f5f7fa
      }
       .card-nav--vertical .nav-tabs:last-child .nav-link {
       border-top-right-radius:.25rem;
       border-bottom-right-radius:.25rem;
       border-top-left-radius:0;
       border-bottom-left-radius:0
      }
       .card-nav--vertical .nav-tabs:first-child .nav-item.show .nav-link,
       .card-nav--vertical .nav-tabs:first-child .nav-link.active {
       border-color:transparent transparent #f5f7fa #f5f7fa
      }
       .card-nav--vertical .nav-tabs:first-child .nav-link {
       border-top-left-radius:.25rem;
       border-bottom-left-radius:.25rem;
       border-top-right-radius:0;
       border-bottom-right-radius:0
      }
     }
      .nav-tabs--pill {
      border-bottom:none
     }
      .nav-tabs--pill .nav-link {
      border-radius:.25rem
     }
      .nav-tabs--pill .nav-item {
      margin-bottom:0
     }
      .nav-tabs--pill .nav-item:not(:last-child) {
      margin-bottom:5px
     }
     @media (min-width:576px) {
       .nav-tabs--pill .nav-item {
       margin-bottom:0!important
      }
       .nav-tabs--pill .nav-item:not(:last-child) {
       margin-right:5px
      }
     }
      .nav-tabs--inactive-dark .nav-link {
      color:#fff
     }
      .nav-tabs--inactive-dark .nav-link__secondary-text {
      color:hsla(0,0%,100%,.5)
     }
      .nav-tabs--inactive-dark .nav-link.disabled {
      color:hsla(0,0%,100%,.7)
     }
      .nav-tabs--inactive-primary .nav-link {
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .nav-tabs--inactive-primary-dark .nav-link {
      background-color:#1e6bb8;
      border-color:#1e6bb8
     }
      .nav-tabs--active-white .nav-item.show .nav-link,
      .nav-tabs--active-white .nav-link.active {
      color:#303840;
      background-color:#fff;
      border-color:#2c84dd
     }
      .nav-tabs--active-white .nav-item.show .nav-link .nav-link__secondary-text,
      .nav-tabs--active-white .nav-link.active .nav-link__secondary-text {
      color:rgba(0,0,0,.7)
     }
     @media (min-width:768px) {
       .nav-tabs--rounded-top-md-0 .nav-link {
       border-top-left-radius:0;
       border-top-right-radius:0
      }
     }
     @media (min-width:768px) {
       .nav-tabs--rounded-bottom-md-0 .nav-link {
       border-bottom-right-radius:0;
       border-bottom-left-radius:0
      }
     }
      .nav-tabs--rounded-0 .nav-link,
      .nav-tabs-card .nav-link {
      border-radius:0
     }
      .nav-tabs-card .nav-link:hover {
      color:#303840
     }
      .nav-tabs-card+.card-footer {
      border-top:none
     }
      .card-nav .tab-content>.nav-tabs-card:not(:first-child),
      .card>.nav-tabs-card:not(:first-child) {
      border-top:1px solid #ebeff2
     }
      .dropdown-toggle:focus {
      outline:0
     }
      [data-caret=false]:after,
      [data-caret=false]:before {
      display:none!important
     }
      .dropdown-menu {
      box-shadow:0 5px 5px -3px rgba(48,56,64,.2),0 8px 10px 1px rgba(48,56,64,.14),0 3px 14px 2px rgba(48,56,64,.12);
      display:block;
      visibility:hidden;
      opacity:0;
      margin-top:0!important;
      transition:opacity .2s cubic-bezier(.3,.5,.5,1),margin .2s cubic-bezier(.1,.3,.8,1),visibility .3s ease;
      background-clip:initial
     }
      .dropdown-menu:after,
      .dropdown-menu:before {
      border:8px solid transparent;
      border-bottom-color:#fff;
      content:"";
      height:0;
      left:10px;
      opacity:0;
      transition:opacity .1s cubic-bezier(.3,.5,.5,1);
      position:absolute;
      top:calc(-8px + -.5rem);
      width:1px
     }
      .dropdown-menu:before {
      top:calc(-9px + -.5rem);
      border-bottom-color:transparent
     }
      .dropdown-menu-right:after,
      .dropdown-menu-right:before {
      left:auto;
      right:10px
     }
      .dropup .dropdown-menu {
      margin-bottom:0!important
     }
      .dropup .dropdown-menu:after,
      .dropup .dropdown-menu:before {
      top:auto;
      bottom:calc(-8px + -.5rem);
      border-bottom-color:transparent;
      border-top-color:#fff
     }
      .dropup .dropdown-menu:before {
      bottom:calc(-9px + -.5rem);
      border-top-color:transparent
     }
      .dropdown-menu.show,
      .show>.dropdown-menu {
      visibility:visible;
      opacity:1;
      margin-top:.5rem!important
     }
      .dropup .dropdown-menu.show,
      .dropup .show>.dropdown-menu {
      margin-bottom:.5rem!important
     }
      .dropdown-menu.show:after,
      .dropdown-menu.show:before,
      .show>.dropdown-menu:after,
      .show>.dropdown-menu:before {
      opacity:1
     }
      .dropdown-item {
      display:flex;
      align-items:center
     }
      .dropdown-item>.material-icons {
      font-size:18px;
      margin-right:5px
     }
      .dropdown-item.active,
      .dropdown-item:active {
      color:#303840;
      font-weight:700;
      background-color:transparent;
      position:relative
     }
      .dropdown-item.active:after,
      .dropdown-item:active:after {
      position:absolute;
      left:-1px;
      top:0;
      bottom:0;
      width:4px;
      border-radius:1px;
      background-color:#2c84dd;
      content:""
     }
      .dropdown-menu .close {
      padding:.5rem;
      line-height:0
     }
      .dropdown-menu-full {
      left:0!important;
      right:0!important
     }
      .dropdown-menu-caret-center {
      -webkit-transform-origin:50% top;
      transform-origin:50% top
     }
      .dropup .dropdown-menu-caret-center {
      -webkit-transform-origin:50% bottom;
      transform-origin:50% bottom
     }
      .dropdown-menu-caret-center:after,
      .dropdown-menu-caret-center:before {
      left:50%;
      margin-left:-4px
     }
     @media (max-width:767.98px) {
       .dropdown-full-xs {
       position:static!important
      }
       .dropdown-full-xs .dropdown-menu {
       width:100%;
       border-radius:0
      }
       .dropdown-full-xs .dropdown-menu:after,
       .dropdown-full-xs .dropdown-menu:before {
       display:none
      }
     }
      .page-heading {
      display:flex;
      flex-direction:column;
      align-items:center;
      margin-bottom:1rem
     }
      .page-heading .h4,
      .page-heading h4 {
      margin-bottom:.25rem
     }
     @media (min-width:576px) {
       .page-heading .h4,
       .page-heading h4 {
       margin-bottom:0
      }
     }
     @media (min-width:576px) {
       .page-heading {
       flex-direction:row;
       align-items:flex-end
      }
     }
      .page-headline {
      position:relative;
      padding-bottom:1.5rem
     }
     @media (min-width:992px) {
       .page-headline {
       padding-bottom:3rem
      }
     }
      .page-headline :last-child {
      margin-bottom:0
     }
      .page-headline>:first-child {
      position:relative;
      display:inline-flex;
      margin-bottom:calc(1rem + 12px)
     }
      .page-headline>:first-child:after {
      position:absolute;
      left:0;
      width:100%;
      height:4px;
      border-radius:2px;
      background-color:#2c84dd;
      content:" ";
      bottom:-12px
     }
      .page-headline--title>:first-child {
      margin-bottom:12px
     }
      .page-headline--white>:first-child:after {
      background-color:#fff
     }
      .page-separator {
      position:relative;
      color:#868e96;
      display:flex;
      align-items:center;
      justify-content:center;
      z-index:0
     }
      .page-separator:before {
      content:"";
      height:1px;
      background-color:rgba(0,0,0,.1);
      width:100%;
      top:50%;
      left:0;
      position:absolute;
      z-index:-1
     }
      .page-separator__text {
      border:1px solid rgba(0,0,0,.1);
      display:inline-flex;
      padding:.5rem 1rem;
      border-radius:.25rem;
      background-color:#f5f7fa;
      max-width:90%
     }
      .page-separator__text:hover {
      text-decoration:none
     }
      .page-separator__bg-bottom {
      top:50%
     }
      .page-separator__bg-bottom,
      .page-separator__bg-top {
      content:"";
      height:50%;
      background-color:#f5f7fa;
      width:100%;
      left:0;
      position:absolute;
      z-index:-2
     }
      .page-separator__bg-top {
      bottom:50%
     }
      .page-separator-mask {
      position:relative;
      overflow:hidden;
      z-index:0;
      height:356px
     }
      .page-separator-mask .page-separator-mask__content {
      position:absolute;
      left:0;
      right:0;
      bottom:0;
      height:84px
     }
      .page-separator-mask .page-separator {
      position:absolute;
      left:0;
      right:0;
      bottom:0;
      z-index:1;
      margin:0
     }
      .page-separator-mask .page-separator-mask__top {
      background-image:linear-gradient(-180deg,hsla(0,0%,100%,.7),hsla(0,0%,100%,.8) 17%,hsla(0,0%,100%,.9) 32%,#fff 70%);
      position:absolute;
      left:0;
      right:0;
      top:0;
      height:64px
     }
      .page-separator-mask .page-separator-mask__bottom {
      background:#fff;
      position:absolute;
      left:0;
      right:0;
      bottom:0;
      height:20px
     }
      .page-section {
      padding-top:1.5rem;
      padding-bottom:1.5rem
     }
     @media (min-width:768px) {
       .page-section {
       padding-top:2rem;
       padding-bottom:2rem
      }
     }
     @media (min-width:992px) {
       .page-section {
       padding-top:4rem;
       padding-bottom:4rem
      }
     }
      .page-nav {
      z-index:0;
      position:relative;
      position:-webkit-sticky;
      position:sticky;
      top:4rem;
      max-height:calc(100vh - 4rem);
      overflow-y:auto;
      display:block
     }
      .page-nav .page-nav__content {
      margin-left:21px;
      padding-left:17px
     }
      .page-nav:before {
      position:absolute;
      width:2px;
      left:33px;
      top:0;
      bottom:0;
      background-color:#ebeff2;
      content:"";
      z-index:-1
     }
      .page-nav .page-nav__menu {
      margin-bottom:1rem;
      display:flex;
      flex-direction:column;
      margin-left:21px
     }
      .page-nav .page-nav__menu a {
      color:rgba(48,56,64,.7);
      position:relative;
      padding:0 0 0 17px;
      margin-bottom:.5rem
     }
      .page-nav .page-nav__menu a:before {
      background-color:#d2d5d9;
      width:12px;
      height:12px;
      border-radius:50%;
      border:2px solid #f5f7fa;
      content:"";
      left:-5px;
      top:6px;
      position:absolute
     }
      .page-nav .page-nav__menu a.active {
      font-weight:700
     }
      .page-nav .page-nav__menu a.active:before {
      background-color:#2c84dd;
      border-color:#fff
     }
      .page-num {
      border-radius:100%;
      width:2.5rem;
      height:2.5rem;
      border:1px solid #d4d4d4;
      background-color:#f5f7fa;
      font-family:Oswald,Helvetica Neue,Arial,sans-serif;
      font-weight:500;
      line-height:1.5;
      font-size:1.414rem;
      line-height:1.414;
      display:flex;
      align-items:center;
      justify-content:center
     }
      [href] .page-num {
      color:#303840
     }
      .page-num-container {
      margin-left:-3.25rem;
      margin-bottom:1rem
     }
      .page-num-container .page-num {
      margin-right:.75rem;
      flex-shrink:0
     }
      .page-num-container :last-child {
      margin-bottom:0
     }
      .page-num-timeline {
      position:relative;
      z-index:0
     }
      .page-num-timeline:after {
      content:"";
      width:.3125rem;
      position:absolute;
      left:50%;
      top:0;
      bottom:0;
      background-color:#ebeff2;
      z-index:-1;
      margin-left:-.15625rem
     }
      .page-num-timeline__item {
      margin:1rem 0;
      display:flex;
      align-items:center;
      justify-content:center;
      flex-direction:column;
      position:relative
     }
      .page-num-timeline__item-tip {
      width:.75rem;
      height:.75rem;
      display:block;
      border-radius:100%;
      background-color:#d2d5d9;
      border:2px solid #f5f7fa;
      margin-bottom:5px!important
     }
      .page-num-timeline__item-current {
      margin-top:.75rem!important
     }
      .page-num-timeline__item-current .page-num {
      background-color:#2c84dd;
      color:#9cf;
      width:4rem;
      height:4rem;
      border:none
     }
      .page-num-timeline__item-current .page-num-timeline__item-tip {
      position:absolute;
      top:-.375rem;
      left:50%;
      margin-left:-.375rem;
      border-color:#fff;
      background-color:#2c84dd
     }
      .page-num-timeline__item.active .page-num-timeline__item-tip {
      border-color:#9cf;
      background-color:#2c84dd
     }
     @media (min-width:576px) {
       .page-num-timeline {
       margin-top:-.375rem
      }
       .page-num-timeline__item {
       margin:0 1rem
      }
       .page-num-timeline:after {
       width:100%;
       height:.3125rem;
       top:50%;
       left:0;
       right:0;
       margin-top:.375rem;
       margin-left:0
      }
     }
      .progression-bar {
      display:flex;
      color:rgba(48,56,64,.5);
      flex-direction:column;
      align-items:center
     }
      .progression-bar__item {
      text-align:center;
      position:relative;
      z-index:0;
      color:inherit
     }
      .progression-bar__item,
      .progression-bar__item-content {
      display:flex;
      align-items:center;
      flex-direction:column;
      flex:1 1 0%
     }
      .progression-bar__item:not(:last-child) {
      padding-bottom:15px
     }
      .progression-bar__item[href]:hover {
      text-decoration:none;
      color:inherit
     }
      .progression-bar__item:after,
      .progression-bar__item:before {
      content:"";
      position:absolute;
      z-index:-1;
      background-color:#f2f2f2;
      width:2px;
      top:0;
      left:50%;
      height:100%;
      margin-left:-1px
     }
      .progression-bar__item:before {
      display:none
     }
      .progression-bar__item-icon {
      width:25px;
      height:25px;
      border-radius:50%;
      border:2px solid #f2f2f2;
      text-align:center;
      line-height:22px;
      font-size:16px;
      margin-bottom:5px
     }
      .progression-bar__item-icon,
      .progression-bar__item-text {
      color:inherit;
      background-color:#fff
     }
      .progression-bar__item-icon:not(.progression-bar__item--disabled),
      .progression-bar__item-text:not(.progression-bar__item--disabled) {
      cursor:pointer
     }
      .progression-bar__item--complete:after {
      background-color:rgba(48,56,64,.7)
     }
      .progression-bar__item--complete {
      color:rgba(48,56,64,.7)
     }
      .progression-bar__item--complete .progression-bar__item-icon {
      border-color:rgba(48,56,64,.7)
     }
      .progression-bar__item--active {
      color:#303840
     }
      .progression-bar__item--active:not(:last-child):after {
      height:50%
     }
      .progression-bar__item--active:not(:last-child):before {
      display:block
     }
      .progression-bar--active-primary .progression-bar__item--active .progression-bar__item-icon {
      background-color:#2c84dd;
      border-color:#2c84dd;
      color:#fff
     }
      .progression-bar--active-secondary .progression-bar__item--active .progression-bar__item-icon {
      background-color:#868e96;
      border-color:#868e96;
      color:#fff
     }
      .progression-bar--active-success .progression-bar__item--active .progression-bar__item-icon {
      background-color:#77c13a;
      border-color:#77c13a;
      color:#fff
     }
      .progression-bar--active-info .progression-bar__item--active .progression-bar__item-icon {
      background-color:#17a2b8;
      border-color:#17a2b8;
      color:#fff
     }
      .progression-bar--active-warning .progression-bar__item--active .progression-bar__item-icon {
      background-color:#f98437;
      border-color:#f98437;
      color:#fff
     }
      .progression-bar--active-danger .progression-bar__item--active .progression-bar__item-icon {
      background-color:#d9534f;
      border-color:#d9534f;
      color:#fff
     }
      .progression-bar--active-light .progression-bar__item--active .progression-bar__item-icon {
      background-color:#f8f9fa;
      border-color:#f8f9fa;
      color:#fff
     }
      .progression-bar--active-dark .progression-bar__item--active .progression-bar__item-icon {
      background-color:#1d2126;
      border-color:#1d2126;
      color:#fff
     }
      .progression-bar--active-accent .progression-bar__item--active .progression-bar__item-icon {
      background-color:#ed0b4c;
      border-color:#ed0b4c;
      color:#fff
     }
      .progression-bar--active-primary-light .progression-bar__item--active .progression-bar__item-icon {
      background-color:#9cf;
      border-color:#9cf;
      color:#fff
     }
     @media (min-width:576px) {
       .progression-bar {
       flex-direction:row;
       align-items:start
      }
       .progression-bar__item {
       padding-bottom:0!important
      }
       .progression-bar__item:first-child {
       align-items:flex-start
      }
       .progression-bar__item:last-child {
       align-items:flex-end
      }
       .progression-bar__item:after,
       .progression-bar__item:before {
       left:0;
       top:12px;
       height:2px!important;
       width:100%;
       margin-left:0
      }
       .progression-bar__item--active:not(:last-child):after {
       width:50%
      }
       .progression-bar__item--active:not(:last-child):before {
       display:block
      }
     }
      code.django .hljs-template-tag {
      color:#ed0b4c
     }
      .tooltip-inner {
      box-shadow:0 2px 1px -1px rgba(48,56,64,.2),0 1px 1px 0 rgba(48,56,64,.14),0 1px 3px 0 rgba(48,56,64,.12)
     }
      .chip {
      display:inline-block;
      font-weight:400;
      text-align:center;
      white-space:nowrap;
      vertical-align:middle;
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      user-select:none;
      border:1px solid transparent;
      padding:.25rem 1rem;
      font-size:1rem;
      line-height:1.5;
      border-radius:100px
     }
      .chip+.chip {
      margin-left:.5rem
     }
      .chip-primary {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .chip-primary:hover {
      color:#fff;
      background-color:#1f71c3;
      border-color:#1e6bb8
     }
      .chip-primary.focus,
      .chip-primary:focus {
      box-shadow:0 0 0 .2rem rgba(76,150,226,.5)
     }
      .chip-primary.disabled,
      .chip-primary:disabled {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .chip-primary:not(:disabled):not(.disabled).active,
      .chip-primary:not(:disabled):not(.disabled):active,
      .show>.chip-primary.dropdown-toggle {
      color:#fff;
      background-color:#1e6bb8;
      border-color:#1c64ad
     }
      .chip-primary:not(:disabled):not(.disabled).active:focus,
      .chip-primary:not(:disabled):not(.disabled):active:focus,
      .show>.chip-primary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(76,150,226,.5)
     }
      .chip-outline-primary {
      color:#2c84dd;
      border-color:#2c84dd
     }
      .chip-outline-primary:hover {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .chip-outline-primary.focus,
      .chip-outline-primary:focus {
      box-shadow:0 0 0 .2rem rgba(44,132,221,.5)
     }
      .chip-outline-primary.disabled,
      .chip-outline-primary:disabled {
      color:#2c84dd;
      background-color:transparent
     }
      .chip-outline-primary:not(:disabled):not(.disabled).active,
      .chip-outline-primary:not(:disabled):not(.disabled):active,
      .show>.chip-outline-primary.dropdown-toggle {
      color:#fff;
      background-color:#2c84dd;
      border-color:#2c84dd
     }
      .chip-outline-primary:not(:disabled):not(.disabled).active:focus,
      .chip-outline-primary:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-primary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(44,132,221,.5)
     }
      .chip-secondary {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .chip-secondary:hover {
      color:#fff;
      background-color:#727b84;
      border-color:#6c757d
     }
      .chip-secondary.focus,
      .chip-secondary:focus {
      box-shadow:0 0 0 .2rem rgba(152,159,166,.5)
     }
      .chip-secondary.disabled,
      .chip-secondary:disabled {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .chip-secondary:not(:disabled):not(.disabled).active,
      .chip-secondary:not(:disabled):not(.disabled):active,
      .show>.chip-secondary.dropdown-toggle {
      color:#fff;
      background-color:#6c757d;
      border-color:#666e76
     }
      .chip-secondary:not(:disabled):not(.disabled).active:focus,
      .chip-secondary:not(:disabled):not(.disabled):active:focus,
      .show>.chip-secondary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(152,159,166,.5)
     }
      .chip-outline-secondary {
      color:#868e96;
      border-color:#868e96
     }
      .chip-outline-secondary:hover {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .chip-outline-secondary.focus,
      .chip-outline-secondary:focus {
      box-shadow:0 0 0 .2rem rgba(134,142,150,.5)
     }
      .chip-outline-secondary.disabled,
      .chip-outline-secondary:disabled {
      color:#868e96;
      background-color:transparent
     }
      .chip-outline-secondary:not(:disabled):not(.disabled).active,
      .chip-outline-secondary:not(:disabled):not(.disabled):active,
      .show>.chip-outline-secondary.dropdown-toggle {
      color:#fff;
      background-color:#868e96;
      border-color:#868e96
     }
      .chip-outline-secondary:not(:disabled):not(.disabled).active:focus,
      .chip-outline-secondary:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-secondary.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(134,142,150,.5)
     }
      .chip-success {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .chip-success:hover {
      color:#fff;
      background-color:#65a431;
      border-color:#5f9a2e
     }
      .chip-success.focus,
      .chip-success:focus {
      box-shadow:0 0 0 .2rem rgba(106,170,55,.5)
     }
      .chip-success.disabled,
      .chip-success:disabled {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .chip-success:not(:disabled):not(.disabled).active,
      .chip-success:not(:disabled):not(.disabled):active,
      .show>.chip-success.dropdown-toggle {
      color:#fff;
      background-color:#5f9a2e;
      border-color:#59902b
     }
      .chip-success:not(:disabled):not(.disabled).active:focus,
      .chip-success:not(:disabled):not(.disabled):active:focus,
      .show>.chip-success.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(106,170,55,.5)
     }
      .chip-outline-success {
      color:#77c13a;
      border-color:#77c13a
     }
      .chip-outline-success:hover {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .chip-outline-success.focus,
      .chip-outline-success:focus {
      box-shadow:0 0 0 .2rem rgba(119,193,58,.5)
     }
      .chip-outline-success.disabled,
      .chip-outline-success:disabled {
      color:#77c13a;
      background-color:transparent
     }
      .chip-outline-success:not(:disabled):not(.disabled).active,
      .chip-outline-success:not(:disabled):not(.disabled):active,
      .show>.chip-outline-success.dropdown-toggle {
      color:#212529;
      background-color:#77c13a;
      border-color:#77c13a
     }
      .chip-outline-success:not(:disabled):not(.disabled).active:focus,
      .chip-outline-success:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-success.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(119,193,58,.5)
     }
      .chip-info {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .chip-info:hover {
      color:#fff;
      background-color:#138496;
      border-color:#117a8b
     }
      .chip-info.focus,
      .chip-info:focus {
      box-shadow:0 0 0 .2rem rgba(58,176,195,.5)
     }
      .chip-info.disabled,
      .chip-info:disabled {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .chip-info:not(:disabled):not(.disabled).active,
      .chip-info:not(:disabled):not(.disabled):active,
      .show>.chip-info.dropdown-toggle {
      color:#fff;
      background-color:#117a8b;
      border-color:#10707f
     }
      .chip-info:not(:disabled):not(.disabled).active:focus,
      .chip-info:not(:disabled):not(.disabled):active:focus,
      .show>.chip-info.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(58,176,195,.5)
     }
      .chip-outline-info {
      color:#17a2b8;
      border-color:#17a2b8
     }
      .chip-outline-info:hover {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .chip-outline-info.focus,
      .chip-outline-info:focus {
      box-shadow:0 0 0 .2rem rgba(23,162,184,.5)
     }
      .chip-outline-info.disabled,
      .chip-outline-info:disabled {
      color:#17a2b8;
      background-color:transparent
     }
      .chip-outline-info:not(:disabled):not(.disabled).active,
      .chip-outline-info:not(:disabled):not(.disabled):active,
      .show>.chip-outline-info.dropdown-toggle {
      color:#fff;
      background-color:#17a2b8;
      border-color:#17a2b8
     }
      .chip-outline-info:not(:disabled):not(.disabled).active:focus,
      .chip-outline-info:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-info.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(23,162,184,.5)
     }
      .chip-warning {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .chip-warning:hover {
      color:#fff;
      background-color:#f86d12;
      border-color:#f66607
     }
      .chip-warning.focus,
      .chip-warning:focus {
      box-shadow:0 0 0 .2rem rgba(217,118,53,.5)
     }
      .chip-warning.disabled,
      .chip-warning:disabled {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .chip-warning:not(:disabled):not(.disabled).active,
      .chip-warning:not(:disabled):not(.disabled):active,
      .show>.chip-warning.dropdown-toggle {
      color:#fff;
      background-color:#f66607;
      border-color:#e96107
     }
      .chip-warning:not(:disabled):not(.disabled).active:focus,
      .chip-warning:not(:disabled):not(.disabled):active:focus,
      .show>.chip-warning.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(217,118,53,.5)
     }
      .chip-outline-warning {
      color:#f98437;
      border-color:#f98437
     }
      .chip-outline-warning:hover {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .chip-outline-warning.focus,
      .chip-outline-warning:focus {
      box-shadow:0 0 0 .2rem rgba(249,132,55,.5)
     }
      .chip-outline-warning.disabled,
      .chip-outline-warning:disabled {
      color:#f98437;
      background-color:transparent
     }
      .chip-outline-warning:not(:disabled):not(.disabled).active,
      .chip-outline-warning:not(:disabled):not(.disabled):active,
      .show>.chip-outline-warning.dropdown-toggle {
      color:#212529;
      background-color:#f98437;
      border-color:#f98437
     }
      .chip-outline-warning:not(:disabled):not(.disabled).active:focus,
      .chip-outline-warning:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-warning.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(249,132,55,.5)
     }
      .chip-danger {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .chip-danger:hover {
      color:#fff;
      background-color:#d23430;
      border-color:#c9302c
     }
      .chip-danger.focus,
      .chip-danger:focus {
      box-shadow:0 0 0 .2rem rgba(223,109,105,.5)
     }
      .chip-danger.disabled,
      .chip-danger:disabled {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .chip-danger:not(:disabled):not(.disabled).active,
      .chip-danger:not(:disabled):not(.disabled):active,
      .show>.chip-danger.dropdown-toggle {
      color:#fff;
      background-color:#c9302c;
      border-color:#bf2e29
     }
      .chip-danger:not(:disabled):not(.disabled).active:focus,
      .chip-danger:not(:disabled):not(.disabled):active:focus,
      .show>.chip-danger.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(223,109,105,.5)
     }
      .chip-outline-danger {
      color:#d9534f;
      border-color:#d9534f
     }
      .chip-outline-danger:hover {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .chip-outline-danger.focus,
      .chip-outline-danger:focus {
      box-shadow:0 0 0 .2rem rgba(217,83,79,.5)
     }
      .chip-outline-danger.disabled,
      .chip-outline-danger:disabled {
      color:#d9534f;
      background-color:transparent
     }
      .chip-outline-danger:not(:disabled):not(.disabled).active,
      .chip-outline-danger:not(:disabled):not(.disabled):active,
      .show>.chip-outline-danger.dropdown-toggle {
      color:#fff;
      background-color:#d9534f;
      border-color:#d9534f
     }
      .chip-outline-danger:not(:disabled):not(.disabled).active:focus,
      .chip-outline-danger:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-danger.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(217,83,79,.5)
     }
      .chip-light {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .chip-light:hover {
      color:#212529;
      background-color:#e2e6ea;
      border-color:#dae0e5
     }
      .chip-light.focus,
      .chip-light:focus {
      box-shadow:0 0 0 .2rem rgba(216,217,219,.5)
     }
      .chip-light.disabled,
      .chip-light:disabled {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .chip-light:not(:disabled):not(.disabled).active,
      .chip-light:not(:disabled):not(.disabled):active,
      .show>.chip-light.dropdown-toggle {
      color:#212529;
      background-color:#dae0e5;
      border-color:#d3d9df
     }
      .chip-light:not(:disabled):not(.disabled).active:focus,
      .chip-light:not(:disabled):not(.disabled):active:focus,
      .show>.chip-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(216,217,219,.5)
     }
      .chip-outline-light {
      color:#f8f9fa;
      border-color:#f8f9fa
     }
      .chip-outline-light:hover {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .chip-outline-light.focus,
      .chip-outline-light:focus {
      box-shadow:0 0 0 .2rem rgba(248,249,250,.5)
     }
      .chip-outline-light.disabled,
      .chip-outline-light:disabled {
      color:#f8f9fa;
      background-color:transparent
     }
      .chip-outline-light:not(:disabled):not(.disabled).active,
      .chip-outline-light:not(:disabled):not(.disabled):active,
      .show>.chip-outline-light.dropdown-toggle {
      color:#212529;
      background-color:#f8f9fa;
      border-color:#f8f9fa
     }
      .chip-outline-light:not(:disabled):not(.disabled).active:focus,
      .chip-outline-light:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(248,249,250,.5)
     }
      .chip-dark {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .chip-dark:hover {
      color:#fff;
      background-color:#0c0e10;
      border-color:#070809
     }
      .chip-dark.focus,
      .chip-dark:focus {
      box-shadow:0 0 0 .2rem rgba(63,66,71,.5)
     }
      .chip-dark.disabled,
      .chip-dark:disabled {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .chip-dark:not(:disabled):not(.disabled).active,
      .chip-dark:not(:disabled):not(.disabled):active,
      .show>.chip-dark.dropdown-toggle {
      color:#fff;
      background-color:#070809;
      border-color:#010202
     }
      .chip-dark:not(:disabled):not(.disabled).active:focus,
      .chip-dark:not(:disabled):not(.disabled):active:focus,
      .show>.chip-dark.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(63,66,71,.5)
     }
      .chip-outline-dark {
      color:#1d2126;
      border-color:#1d2126
     }
      .chip-outline-dark:hover {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .chip-outline-dark.focus,
      .chip-outline-dark:focus {
      box-shadow:0 0 0 .2rem rgba(29,33,38,.5)
     }
      .chip-outline-dark.disabled,
      .chip-outline-dark:disabled {
      color:#1d2126;
      background-color:transparent
     }
      .chip-outline-dark:not(:disabled):not(.disabled).active,
      .chip-outline-dark:not(:disabled):not(.disabled):active,
      .show>.chip-outline-dark.dropdown-toggle {
      color:#fff;
      background-color:#1d2126;
      border-color:#1d2126
     }
      .chip-outline-dark:not(:disabled):not(.disabled).active:focus,
      .chip-outline-dark:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-dark.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(29,33,38,.5)
     }
      .chip-accent {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .chip-accent:hover {
      color:#fff;
      background-color:#c80940;
      border-color:#bc093c
     }
      .chip-accent.focus,
      .chip-accent:focus {
      box-shadow:0 0 0 .2rem rgba(240,48,103,.5)
     }
      .chip-accent.disabled,
      .chip-accent:disabled {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .chip-accent:not(:disabled):not(.disabled).active,
      .chip-accent:not(:disabled):not(.disabled):active,
      .show>.chip-accent.dropdown-toggle {
      color:#fff;
      background-color:#bc093c;
      border-color:#b00838
     }
      .chip-accent:not(:disabled):not(.disabled).active:focus,
      .chip-accent:not(:disabled):not(.disabled):active:focus,
      .show>.chip-accent.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(240,48,103,.5)
     }
      .chip-outline-accent {
      color:#ed0b4c;
      border-color:#ed0b4c
     }
      .chip-outline-accent:hover {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .chip-outline-accent.focus,
      .chip-outline-accent:focus {
      box-shadow:0 0 0 .2rem rgba(237,11,76,.5)
     }
      .chip-outline-accent.disabled,
      .chip-outline-accent:disabled {
      color:#ed0b4c;
      background-color:transparent
     }
      .chip-outline-accent:not(:disabled):not(.disabled).active,
      .chip-outline-accent:not(:disabled):not(.disabled):active,
      .show>.chip-outline-accent.dropdown-toggle {
      color:#fff;
      background-color:#ed0b4c;
      border-color:#ed0b4c
     }
      .chip-outline-accent:not(:disabled):not(.disabled).active:focus,
      .chip-outline-accent:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-accent.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(237,11,76,.5)
     }
      .chip-primary-light {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .chip-primary-light:hover {
      color:#212529;
      background-color:#73b9ff;
      border-color:#66b3ff
     }
      .chip-primary-light.focus,
      .chip-primary-light:focus {
      box-shadow:0 0 0 .2rem rgba(135,179,223,.5)
     }
      .chip-primary-light.disabled,
      .chip-primary-light:disabled {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .chip-primary-light:not(:disabled):not(.disabled).active,
      .chip-primary-light:not(:disabled):not(.disabled):active,
      .show>.chip-primary-light.dropdown-toggle {
      color:#212529;
      background-color:#66b3ff;
      border-color:#59acff
     }
      .chip-primary-light:not(:disabled):not(.disabled).active:focus,
      .chip-primary-light:not(:disabled):not(.disabled):active:focus,
      .show>.chip-primary-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(135,179,223,.5)
     }
      .chip-outline-primary-light {
      color:#9cf;
      border-color:#9cf
     }
      .chip-outline-primary-light:hover {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .chip-outline-primary-light.focus,
      .chip-outline-primary-light:focus {
      box-shadow:0 0 0 .2rem rgba(153,204,255,.5)
     }
      .chip-outline-primary-light.disabled,
      .chip-outline-primary-light:disabled {
      color:#9cf;
      background-color:transparent
     }
      .chip-outline-primary-light:not(:disabled):not(.disabled).active,
      .chip-outline-primary-light:not(:disabled):not(.disabled):active,
      .show>.chip-outline-primary-light.dropdown-toggle {
      color:#212529;
      background-color:#9cf;
      border-color:#9cf
     }
      .chip-outline-primary-light:not(:disabled):not(.disabled).active:focus,
      .chip-outline-primary-light:not(:disabled):not(.disabled):active:focus,
      .show>.chip-outline-primary-light.dropdown-toggle:focus {
      box-shadow:0 0 0 .2rem rgba(153,204,255,.5)
     }
      .brand {
      font-size:1.625rem;
      font-weight:500;
      display:flex;
      align-items:center;
      line-height:1.231
     }
      .brand-icon {
      margin-right:.5rem;
      display:inline-block;
      vertical-align:sub
     }
      .carousel-card .carousel-control-icon {
      width:2.5rem;
      height:2.5rem;
      border-radius:100%;
      background-color:#fff;
      box-shadow:0 3px 1px -2px rgba(48,56,64,.2),0 2px 2px 0 rgba(48,56,64,.14),0 1px 5px 0 rgba(48,56,64,.12);
      color:#303840;
      font-size:1.5rem;
      display:flex;
      align-items:center;
      justify-content:center
     }
      .carousel-card .carousel-control-next,
      .carousel-card .carousel-control-prev {
      width:2.5rem;
      opacity:1
     }
      .carousel-card .carousel-control-prev {
      left:-1.25rem
     }
      .carousel-card .carousel-control-next {
      right:-1.25rem
     }


     @media (min-width:576px) {

      .mdk-header {
      margin-bottom:1rem;
      height:auto
     }
      .mdk-header--shadow:after {
      box-shadow:inset 0 5px 6px -3px rgba(48,56,64,.4)
     }
      .mdk-header__bg-front {
      background-position:50%
     }
      .mdk-header__bg-front:after {
      display:block;
      content:" ";
      position:absolute;
      left:0;
      top:0;
      bottom:0;
      width:100%
     }
      .mdk-header__content {
      display:flex;
      flex-direction:column
     }
      .mdk-header--bg-dark .mdk-header__bg-front:after {
      background-color:rgba(29,33,38,.9)
     }
      .mdk-header--bg-light .mdk-header__bg-front:after {
      background-color:hsla(0,0%,100%,.65)
     }
      .mdk-header--bg-primary .mdk-header__bg-front:after {
      background-color:rgba(44,132,221,.9)
     }
      .mdk-header--bg-gradient-primary .mdk-header__bg-front:after {
      background-image:linear-gradient(128deg,#1e6dbd,#3287db);
      opacity:.9
     }
      .mdk-header--bg-gradient-purple .mdk-header__bg-front:after {
      background-image:linear-gradient(-128deg,#8a4182,#3289dc);
      opacity:.9
     }
     @media (min-width:992px) {
       .hero .h1,
       .hero h1 {
       font-size:3.998rem;
       font-weight:700;
       line-height:1.25
      }
       .hero .lead,
       .hero__lead {
       font-size:1.414rem;
       line-height:1.414
      }
       .hero .lead:not(:last-child),
       .hero__lead:not(:last-child) {
       margin-bottom:2rem
      }
     }
      .mdk-box__bg-front {
      background-position:50%
     }
      .mdk-box__bg-front:after {
      display:block;
      content:" ";
      position:absolute;
      left:0;
      top:0;
      bottom:0;
      width:100%
     }
      .mdk-box--bg-dark .mdk-box__bg-front:after {
      background-color:rgba(29,33,38,.9)
     }
      .mdk-box--bg-gradient-primary .mdk-box__bg-front:after {
      background-image:linear-gradient(128deg,#1e6dbd,#3287db);
      opacity:.9
     }
      .will-shrink-to-hidden {
      will-change:transform;
      transition:-webkit-transform .2s;
      transition:transform .2s;
      transition:transform .2s,-webkit-transform .2s
     }
      .shrink-to-hidden {
      -webkit-transform:scale3d(0,0,0);
      transform:scale3d(0,0,0)
     }
      .will-fade-background {
      transition:background-color .2s
     }
      .sidebar-p-a {
      padding:18.75px
     }
      .sidebar-p-x {
      padding-left:18.75px;
      padding-right:18.75px
     }
      .sidebar-p-y {
      padding-bottom:18.75px
     }
      .sidebar-p-t,
      .sidebar-p-y {
      padding-top:18.75px
     }
      .sidebar-p-b {
      padding-bottom:18.75px
     }
      .sidebar-p-l {
      padding-left:18.75px
     }
      .sidebar-p-l,
      .sidebar-p-r {
      padding-right:18.75px
     }
      .sidebar-m-a {
      margin:18.75px
     }
      .sidebar-m-x {
      margin-left:18.75px;
      margin-right:18.75px
     }
      .sidebar-m-y {
      margin-bottom:18.75px
     }
      .sidebar-m-t,
      .sidebar-m-y {
      margin-top:18.75px
     }
      .sidebar-m-b {
      margin-bottom:18.75px
     }
      .sidebar-m-l {
      margin-left:18.75px
     }
      .sidebar-m-r {
      margin-right:18.75px
     }
      .sidebar-b-a {
      border:1px solid transparent
     }
      .sidebar-b-x {
      border-left:1px solid transparent;
      border-right:1px solid transparent
     }
      .sidebar-b-y {
      border-bottom:1px solid transparent
     }
      .sidebar-b-t,
      .sidebar-b-y {
      border-top:1px solid transparent
     }
      .sidebar-b-b {
      border-bottom:1px solid transparent
     }
      .sidebar-block,
      .sidebar>.sidebar-text,
      .sidebar>p {
      padding-left:18.75px;
      padding-right:18.75px;
      margin-bottom:18.75px
     }
      .sidebar-brand {
      font-weight:500;
      font-size:1.8rem;
      margin-bottom:9.375px;
      display:flex;
      align-items:center
     }
      .sidebar-brand:hover {
      text-decoration:none
     }
      .sidebar-brand-icon {
      margin-right:9.375px
     }
      .sidebar-brand-header {
      height:56px;
      line-height:56px;
      padding-left:18.75px;
      padding-right:18.75px;
      margin-bottom:18.75px;
      width:100%
     }
      .sidebar-brand-border {
      border-bottom:1px solid transparent
     }
      .sidebar-heading {
      font-weight:500;
      font-size:.9rem;
      font-family:inherit;
      text-transform:uppercase;
      letter-spacing:normal;
      line-height:normal;
      padding-left:18.75px;
      padding-right:18.75px;
      margin-bottom:18.75px
     }
      .sidebar-badge {
      display:inline-block;
      padding:.25em .4em;
      font-size:75%;
      font-weight:500;
      line-height:1;
      text-align:center;
      white-space:nowrap;
      vertical-align:baseline;
      border-radius:.25rem
     }
      .sidebar-light {
      color:rgba(0,0,0,.54);
      background:#fff
     }
      .sidebar-light.sidebar-left {
      border-right:1px solid #e5e5e5
     }
      .sidebar-light.sidebar-right {
      border-left:1px solid #e5e5e5
     }
      .sidebar-light .sidebar-link {
      color:inherit
     }
      .sidebar-light [class*=sidebar-b-] {
      border-color:#e5e5e5
     }
      .sidebar-light .sidebar-text,
      .sidebar-light p {
      color:rgba(0,0,0,.54)
     }
      .sidebar-light .sidebar-heading,
      .sidebar-light .sidebar-heading>a {
      color:rgba(0,0,0,.15)
     }
      .sidebar-light hr {
      border-color:#e5e5e5
     }
      .sidebar-light .sidebar-brand {
      color:#303840
     }
      .sidebar-light .sidebar-brand-bg {
      background:rgba(0,0,0,.07)
     }
      .sidebar-light .sidebar-brand-border {
      border-color:#e5e5e5
     }
      .sidebar-light .sidebar-menu-button {
      color:rgba(48,56,64,.5)
     }
      .sidebar-light .sidebar-menu-toggle-icon {
      color:rgba(0,0,0,.24)
     }
      .sidebar-light .sidebar-menu-icon {
      color:rgba(48,56,64,.24)
     }
      .sidebar-light .sidebar-menu-label {
      background:rgba(0,0,0,.3);
      color:#fff
     }
      .sidebar-light .sidebar-menu-button:hover {
      color:#212121;
      background:transparent
     }
      .sidebar-light .sidebar-menu-button:hover .sidebar-menu-icon,
      .sidebar-light .sidebar-menu-button:hover .sidebar-menu-toggle-icon {
      color:rgba(48,56,64,.9)
     }
      .sidebar-light .open {
      background:transparent
     }
      .sidebar-light .open>.sidebar-menu-button .sidebar-menu-toggle-icon {
      color:rgba(0,0,0,.54)
     }
      .sidebar-light .open>.sidebar-menu-button {
      background:transparent;
      color:rgba(0,0,0,.54)
     }
      .sidebar-light .open>.sidebar-menu-button .sidebar-menu-icon {
      color:rgba(0,0,0,.54)
     }
      .sidebar-light .active>.sidebar-menu-button,
      .sidebar-light .active>.sidebar-menu-button .sidebar-menu-icon {
      color:#303840
     }
      .sidebar-light .sidebar-submenu .sidebar-menu-button {
      color:rgba(0,0,0,.54)
     }
      .sidebar-light .sidebar-submenu .sidebar-menu-icon {
      color:rgba(48,56,64,.24)
     }
      .sidebar-light .sidebar-submenu .sidebar-menu-button:hover,
      .sidebar-light .sidebar-submenu .sidebar-menu-button:hover .sidebar-menu-icon {
      color:rgba(48,56,64,.9)
     }
      .sidebar-light .sidebar-submenu .active>.sidebar-menu-button,
      .sidebar-light .sidebar-submenu .active>.sidebar-menu-button .sidebar-menu-icon {
      color:#303840
     }
      .sidebar-light .sm-bordered,
      .sidebar-light .sm-bordered.sidebar-submenu,
      .sidebar-light .sm-item-bordered.sidebar-submenu>.sidebar-menu-item,
      .sidebar-light .sm-item-bordered>.sidebar-menu-item {
      border-color:#e5e5e5
     }
      .sidebar-light .sm-icons-block>.sidebar-menu-item>.sidebar-menu-button .sidebar-menu-icon {
      background:rgba(0,0,0,.12);
      color:rgba(48,56,64,.24)
     }
      .sidebar-light .sm-icons-block>.sidebar-menu-item.open>.sidebar-menu-button .sidebar-menu-icon {
      color:rgba(0,0,0,.54);
      background:rgba(0,0,0,.12)
     }
      .sidebar-light .sm-active-button-bg>.active>.sidebar-menu-button,
      .sidebar-light .sm-icons-block>.sidebar-menu-item.active>.sidebar-menu-button .sidebar-menu-icon {
      background:#2c84dd;
      color:#fff
     }
      .sidebar-light .sm-active-button-bg>.active>.sidebar-menu-button .sidebar-menu-icon,
      .sidebar-light .sm-active-button-bg>.active>.sidebar-menu-button .sidebar-menu-toggle-icon {
      color:#fff
     }
      .sidebar-light .sm-icons-block.sm-active-button-bg>.active>.sidebar-menu-button .sidebar-menu-icon {
      background:#2c84dd
     }
      .sidebar-dark {
      color:hsla(0,0%,100%,.54);
      background:#1d2126
     }
      .sidebar-dark.sidebar-left {
      border-right:1px solid rgba(0,0,0,.15)
     }
      .sidebar-dark.sidebar-right {
      border-left:1px solid rgba(0,0,0,.15)
     }
      .sidebar-dark .sidebar-link {
      color:#fff
     }
      .sidebar-dark [class*=sidebar-b-] {
      border-color:rgba(0,0,0,.15)
     }
      .sidebar-dark .sidebar-text,
      .sidebar-dark p {
      color:hsla(0,0%,100%,.54)
     }
      .sidebar-dark .sidebar-heading,
      .sidebar-dark .sidebar-heading>a {
      color:hsla(0,0%,100%,.15)
     }
      .sidebar-dark hr {
      border-color:rgba(0,0,0,.15)
     }
      .sidebar-dark .sidebar-brand {
      color:#fff
     }
      .sidebar-dark .sidebar-brand-bg {
      background:rgba(0,0,0,.12)
     }
      .sidebar-dark .sidebar-brand-border {
      border-color:rgba(0,0,0,.15)
     }
      .sidebar-dark .sidebar-menu-button,
      .sidebar-dark .sidebar-menu-toggle-icon {
      color:#858d94
     }
      .sidebar-dark .sidebar-menu-icon {
      color:rgba(133,141,148,.5)
     }
      .sidebar-dark .sidebar-menu-button:hover {
      color:#fff;
      background:transparent
     }
      .sidebar-dark .sidebar-menu-button:hover .sidebar-menu-icon,
      .sidebar-dark .sidebar-menu-button:hover .sidebar-menu-toggle-icon {
      color:#fff
     }
      .sidebar-dark .open {
      background:rgba(0,0,0,.04)
     }
      .sidebar-dark .open>.sidebar-menu-button .sidebar-menu-toggle-icon {
      color:#fff
     }
      .sidebar-dark .open>.sidebar-menu-button {
      background:transparent;
      color:#fff
     }
      .sidebar-dark .active>.sidebar-menu-button,
      .sidebar-dark .active>.sidebar-menu-button .sidebar-menu-icon,
      .sidebar-dark .open>.sidebar-menu-button .sidebar-menu-icon {
      color:#fff
     }
      .sidebar-dark .sidebar-submenu .sidebar-menu-button {
      color:#858d94
     }
      .sidebar-dark .sidebar-submenu .sidebar-menu-icon {
      color:rgba(133,141,148,.5)
     }
      .sidebar-dark .sidebar-submenu .active>.sidebar-menu-button,
      .sidebar-dark .sidebar-submenu .active>.sidebar-menu-button .sidebar-menu-icon,
      .sidebar-dark .sidebar-submenu .sidebar-menu-button:hover,
      .sidebar-dark .sidebar-submenu .sidebar-menu-button:hover .sidebar-menu-icon {
      color:#fff
     }
      .sidebar-dark .sm-bordered,
      .sidebar-dark .sm-bordered.sidebar-submenu,
      .sidebar-dark .sm-item-bordered.sidebar-submenu>.sidebar-menu-item,
      .sidebar-dark .sm-item-bordered>.sidebar-menu-item {
      border-color:rgba(0,0,0,.15)
     }
      .sidebar-dark .sm-icons-block>.sidebar-menu-item>.sidebar-menu-button .sidebar-menu-icon {
      background:rgba(0,0,0,.12);
      color:rgba(133,141,148,.5)
     }
      .sidebar-dark .sm-icons-block>.sidebar-menu-item.open>.sidebar-menu-button .sidebar-menu-icon {
      color:#fff;
      background:rgba(0,0,0,.12)
     }
      .sidebar-dark .sm-active-button-bg>.active>.sidebar-menu-button,
      .sidebar-dark .sm-icons-block>.sidebar-menu-item.active>.sidebar-menu-button .sidebar-menu-icon {
      background:hsla(0,0%,100%,.12);
      color:#fff
     }
      .sidebar-dark .sm-active-button-bg>.active>.sidebar-menu-button .sidebar-menu-icon,
      .sidebar-dark .sm-active-button-bg>.active>.sidebar-menu-button .sidebar-menu-toggle-icon {
      color:#fff
     }
      .sidebar-dark .sm-icons-block.sm-active-button-bg>.active>.sidebar-menu-button .sidebar-menu-icon {
      background:hsla(0,0%,100%,.12)
     }
      .sidebar-menu {
      margin-bottom:18.75px;
      padding:0;
      list-style:none
     }
      .sidebar-menu-item {
      position:relative;
      overflow:hidden
     }
      .sidebar-menu-button {
      display:flex;
      align-items:center;
      font-weight:500;
      line-height:34px;
      padding:0 18.75px;
      font-size:15px
     }
      .sidebar-menu-button,
      .sidebar-menu-button:focus,
      .sidebar-menu-button:hover {
      text-decoration:none
     }
      .active>.sidebar-menu-button {
      font-weight:500
     }
      .sidebar-menu-toggle-icon {
      position:relative;
      font-size:1.25rem
     }
      .sidebar-menu-toggle-icon:before {
      font-family:Material Icons;
      content:"\E315";
      display:flex;
      align-items:center;
      font-size:inherit;
      color:inherit
     }
      .open>.sidebar-menu-button .sidebar-menu-toggle-icon:before {
      content:"\E315"
     }
      .sidebar-menu-icon {
      vertical-align:middle;
      font-size:24px;
      display:inline-block;
      line-height:normal;
      position:relative
     }
      .sidebar-menu-icon--left {
      margin-right:5px
     }
      .sidebar-menu-icon--right {
      margin-left:5px
     }
      .sidebar-menu-badge {
      padding:.2rem .3rem;
      font-size:.75rem
     }
      .sidebar-menu-badge,
      .sidebar-menu-toggle-icon {
      margin-left:5px
     }
      .sidebar-submenu {
      display:none;
      list-style:none;
      margin:0;
      padding:0
     }
      .open>.sidebar-submenu {
      display:block
     }
      .sidebar-submenu .sidebar-menu-button {
      line-height:34px;
      font-size:15px
     }
      .sidebar-submenu .sidebar-menu-icon {
      font-size:24px
     }
      .sm-icons-1 .sidebar-menu-icon {
      font-size:1rem
     }
      .sm-icons-small .sidebar-menu-icon {
      font-size:.875rem
     }
      .sm-condensed.sidebar-submenu>.sidebar-menu-item>.sidebar-menu-button,
      .sm-condensed>.sidebar-menu-item>.sidebar-menu-button {
      line-height:25.5px
     }
      .sm-bordered,
      .sm-item-bordered>.sidebar-menu-item {
      border-bottom-style:solid;
      border-bottom-width:1px
     }
      .sm-item-bordered .sidebar-submenu,
      .sm-item-bordered>.sidebar-menu-item:last-of-type {
      border-bottom:none
     }
      .sm-icons-block>.sidebar-menu-item>.sidebar-menu-button .sidebar-menu-icon {
      text-align:center;
      display:inline-block;
      height:30px;
      line-height:30px;
      width:30px
     }
      .sm-icons-block.sidebar-submenu>.sidebar-menu-item>.sidebar-menu-button .sidebar-menu-icon {
      height:30px;
      line-height:30px;
      width:30px
     }
      .sm-indent>.sidebar-menu-item .sidebar-menu-button {
      padding-left:37.5px
     }
      .mdk-drawer__content {
      background:transparent
     }


      .sidebar {
      position:relative;
      height:100%;
      text-align:initial;
      -ms-scroll-chaining:none;
      overscroll-behavior:none
     }
      .sidebar-brand {
      margin-bottom:0;
      height:64px
     }
      .sidebar-brand-icon {
      display:flex
     }
      .sidebar-menu-toggle-icon {
      transition:-webkit-transform .15s;
      transition:transform .15s;
      transition:transform .15s,-webkit-transform .15s;
      -webkit-transform:translate(0);
      transform:translate(0)
     }
      .open>.sidebar-menu-button .sidebar-menu-toggle-icon {
      -webkit-transform:rotate(90deg);
      transform:rotate(90deg)
     }
      .sidebar-submenu .sidebar-menu-item:first-child {
      padding-top:9.375px
     }
      .sidebar-submenu .sidebar-menu-item:last-child {
      padding-bottom:9.375px
     }
      .sidebar-menu-item.active .sidebar-menu-button:after {
      background-color:#2c84dd
     }
      .sidebar-menu-item.active .sidebar-menu-button:after,
      .sidebar-menu-item.open .sidebar-menu-button:after {
      position:absolute;
      left:0;
      top:0;
      bottom:0;
      width:4px;
      border-radius:1px;
      content:""
     }
      .sidebar-menu-item.open>.sidebar-menu-button:after {
      background-color:rgba(133,141,148,.5)
     }
      .sidebar-menu-item.active>.sidebar-menu-button:after {
      background-color:#2c84dd
     }
      .sidebar-menu:last-child {
      margin-bottom:0
     }
      .search-form {
      display:flex;
      align-items:center;
      background-color:#edf0f2;
      border:1px solid #edf0f2;
      border-radius:.25rem
     }
      .search-form .form-control {
      background-color:transparent
     }
      .search-form .form-control,
      .search-form .form-control:focus {
      border-color:transparent;
      box-shadow:none
     }
      .search-form .btn {
      padding:0 .75rem;
      box-shadow:none;
      background-color:transparent
     }
      .search-form .btn+.form-control {
      padding-left:0
     }
      .search-form--black {
      background-color:#303840;
      border-color:#303840
     }
      .search-form--black .form-control {
      color:#fff
     }
      .search-form--black .form-control:focus {
      background-color:#303840!important
     }
      .search-form--black .btn {
      background:transparent;
      color:#868e96
     }
      .search-form--light {
      background-color:#edf0f2;
      border-color:#edf0f2
     }
      .search-form--light .form-control {
      color:#303840
     }
      .search-form--light .form-control::-webkit-input-placeholder {
      color:#949595
     }
      .search-form--light .form-control:-ms-input-placeholder {
      color:#949595
     }
      .search-form--light .form-control::-ms-input-placeholder {
      color:#949595
     }
      .search-form--light .form-control::placeholder {
      color:#949595
     }
      .search-form--light .btn {
      color:rgba(48,56,64,.4)
     }
      .stack {
      margin-bottom:calc(1rem + 10px);
      position:relative;
      overflow:initial;
      z-index:0
     }
      .stack:after,
      .stack:before {
      position:absolute;
      top:100%;
      left:10px;
      right:10px;
      transition:-webkit-transform .2s ease-in-out;
      transition:transform .2s ease-in-out;
      transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out;
      border-radius:0 0 .25rem .25rem;
      box-shadow:0 2px 0 rgba(0,0,0,.07),inset 0 2px 1px -1px rgba(48,56,64,.2),inset 0 1px 1px 0 rgba(48,56,64,.14),inset 0 1px 3px 0 rgba(48,56,64,.12);
      display:block;
      content:"";
      background:#fff;
      height:5px;
      z-index:-1;
      pointer-events:none
     }
      .stack:before {
      height:10px;
      left:20px;
      right:20px
     }
      .stack--hidden-hover:hover:after,
      .stack--hidden-hover:hover:before,
      .stack--hidden:after,
      .stack--hidden:before {
      -webkit-transform:translate3d(0,-12px,0);
      transform:translate3d(0,-12px,0)
     }
      .stack--primary-dark:after,
      .stack--primary-dark:before {
      background:#1e6bb8;
      box-shadow:inset 0 2px 0 #1c65b0,0 2px 0 #1c65b0
     }
      .stack--1:before {
      display:none
     }
      .bg-footer {
      background-color:#465a6e!important
     }
      label {
      font-weight:500
     }
      .form-control:focus {
      box-shadow:none!important
     }
      .form-control-rounded {
      border-radius:20rem
     }
      .form-control-flush {
      padding:0;
      border-width:0
     }
      .form-control-flush,
      .form-control-flush:focus {
      box-shadow:none;
      background-color:transparent
     }
      .list-group-form .list-group-item {
      padding:1rem 1.5rem
     }
      .custom-controls-stacked .custom-control:last-child {
      margin-bottom:0
     }
      .form-inline label {
      margin-right:.25rem
     }
      .input-group-text .material-icons {
      font-size:inherit
     }
      .input-group.input-group-merge .form-control {
      box-shadow:none
     }
      .input-group.input-group-merge .form-control:focus~[class*=input-group] .input-group-text {
      border-color:#e7ebee;
      color:#303840;
      background-color:#e7ebee
     }
      .input-group.input-group-merge .form-control.is-valid~[class*=input-group] .input-group-text,
      .was-validated .input-group.input-group-merge .form-control:valid~[class*=input-group] .input-group-text {
      border-color:#77c13a;
      color:#77c13a
     }
      .input-group.input-group-merge .form-control.is-invalid~[class*=input-group] .input-group-text,
      .was-validated .input-group.input-group-merge .form-control:invalid~[class*=input-group] .input-group-text {
      border-color:#d9534f;
      color:#d9534f
     }
      .input-group.input-group-merge .form-control-prepended {
      padding-left:0;
      border-left-width:0;
      border-top-left-radius:0;
      border-bottom-left-radius:0;
      border-top-right-radius:.25rem;
      border-bottom-right-radius:.25rem
     }
      .input-group.input-group-merge .form-control-appended {
      padding-right:0;
      border-right-width:0;
      border-top-right-radius:0;
      border-bottom-right-radius:0
     }
      .input-group.input-group-merge .input-group-prepend {
      order:-1
     }
      .input-group.input-group-merge .input-group-prepend>.input-group-text {
      border-right-width:0!important;
      border-top-left-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .input-group.input-group-merge .input-group-append>.input-group-text {
      border-left-width:0!important;
      border-top-right-radius:.25rem;
      border-bottom-right-radius:.25rem
     }
      .custom-file-naked {
      cursor:pointer;
      width:auto;
      height:auto
     }
      .custom-file-naked .custom-file-input {
      width:auto;
      height:auto;
      cursor:pointer;
      line-height:1
     }
      .custom-file-naked .custom-file-label {
      border:none;
      background:none;
      padding:0;
      margin:0;
      height:auto;
      cursor:pointer;
      line-height:1;
      box-shadow:none
     }
      .custom-file-naked .custom-file-label:after {
      display:none
     }
      .custom-radio-icon {
      padding-left:1rem
     }
      .custom-radio-icon .custom-control-indicator {
      font-size:1rem;
      color:#edf0f2;
      background-color:transparent;
      background-image:none
     }
      .custom-radio-icon .custom-control-input:checked~.custom-control-indicator {
      background-color:transparent;
      background-image:none;
      color:#2c84dd
     }
      .custom-radio-icon .custom-control-input:active~.custom-control-indicator {
      background-color:transparent;
      background-image:none;
      color:#b0d1f2
     }
      .custom-select-icon {
      position:relative;
      z-index:0
     }
      .custom-select-icon__select {
      padding-left:1.75rem
     }
      .custom-select-icon__select.form-control-lg {
      padding-left:2rem
     }
      .custom-select-icon__icon {
      position:absolute;
      left:0;
      top:0;
      padding-left:.75rem;
      padding-top:.5rem;
      line-height:inherit!important;
      font-size:1rem;
      z-index:2;
      pointer-events:none
     }
      .custom-select-sm+.custom-select-icon__icon,
      .form-control-sm+.custom-select-icon__icon {
      font-size:.875rem
     }
      .form-control-lg+.custom-select-icon__icon {
      padding-top:.5rem;
      font-size:1.25rem
     }
      .md-form-group {
      background-color:#edf0f2;
      border:1px solid #edf0f2;
      padding:.5rem .75rem;
      border-radius:.25rem
     }
      .md-form-control__content {
      border-bottom:1px solid #edf0f2;
      position:relative;
      height:48px
     }
      .md-form-control label {
      position:absolute;
      left:0;
      right:0;
      top:0;
      transition:all .2s ease;
      font-size:1.23rem;
      font-weight:400;
      height:48px;
      line-height:48px;
      margin:0;
      display:block;
      pointer-events:none
     }
      .md-form-control__control {
      border:none;
      background-color:transparent!important;
      padding-top:24px;
      padding-bottom:0;
      padding-left:0;
      margin:0;
      line-height:1;
      box-shadow:none!important;
      border-radius:0;
      -webkit-appearance:none;
      -moz-appearance:none;
      appearance:none;
      height:100%;
      width:100%
     }
      .md-form-control__control.custom-select {
      background-position:100%
     }
      .md-form-control__control::-webkit-input-placeholder {
      line-height:normal
     }
      .md-form-control:not(.md-form-control--static) .md-form-control__control:not(:focus)::-webkit-input-placeholder {
      color:transparent
     }
      .md-form-control:not(.md-form-control--static) .md-form-control__control:not(:focus):-ms-input-placeholder {
      color:transparent
     }
      .md-form-control:not(.md-form-control--static) .md-form-control__control:not(:focus)::-ms-input-placeholder {
      color:transparent
     }
      .md-form-control:not(.md-form-control--static) .md-form-control__control:not(:focus)::placeholder {
      color:transparent
     }
      .md-form-control__highlight {
      position:absolute;
      height:60%;
      width:100px;
      top:25%;
      left:0;
      pointer-events:none;
      opacity:.2
     }
      .md-form-control__bar {
      position:absolute;
      display:block;
      width:100%;
      height:100%;
      pointer-events:none;
      top:0;
      left:0
     }
      .md-form-control__bar:after,
      .md-form-control__bar:before {
      content:"";
      height:2px;
      width:0;
      bottom:-1px;
      position:absolute;
      background:#2c84dd;
      transition:all .2s ease
     }
      .md-form-control__bar:before {
      left:50%
     }
      .md-form-control__bar:after {
      right:50%
     }
      .md-form-control--static .md-form-control__control~label {
      font-size:1rem;
      line-height:24px;
      cursor:pointer
     }
      .md-form-control--used .md-form-control__control~label,
      .md-form-control__control:focus~label {
      color:#2c84dd;
      font-size:1rem;
      line-height:24px
     }
      .md-form-control__control:focus~.md-form-control__highlight {
      -webkit-animation:inputHighlighter .3s ease;
      animation:inputHighlighter .3s ease
     }
      .md-form-control__control:focus~.md-form-control__bar:after,
      .md-form-control__control:focus~.md-form-control__bar:before {
      width:50%
     }
      .md-form-control .input-group {
      position:static;
      width:100%
     }
      .md-form-control .input-group label {
      left:36px
     }
      .md-form-control .input-group .input-group-addon {
      background-color:transparent;
      border:none;
      vertical-align:top;
      padding:0;
      width:36px;
      text-align:left;
      font-size:1.23rem
     }
      .md-form-control--required:after {
      color:#d9534f;
      content:"*";
      font-size:20px;
      position:absolute;
      right:0;
      top:0
     }
     @-webkit-keyframes inputHighlighter {
      0% {
       background:#2c84dd
      }
      to {
       width:0;
       background:transparent
      }
     }
     @keyframes  inputHighlighter {
      0% {
       background:#2c84dd
      }
      to {
       width:0;
       background:transparent
      }
     }
      .custom-checkbox-toggle {
      width:3rem;
      height:1.5rem;
      padding-left:0
     }
      .custom-checkbox-toggle .custom-control-label {
      position:relative;
      width:100%;
      height:100%
     }
      .custom-checkbox-toggle .custom-control-label:after,
      .custom-checkbox-toggle .custom-control-label:before {
      position:absolute;
      top:0;
      left:0;
      content:"";
      transition:all .2s ease;
      border-radius:1.5rem
     }
      .custom-checkbox-toggle .custom-control-label:before {
      width:100%;
      height:100%;
      background-color:#e3ebf6
     }
      .custom-checkbox-toggle .custom-control-label:after {
      width:1.5rem;
      height:100%;
      -webkit-transform:scale(.8);
      transform:scale(.8);
      background-color:#fff
     }
      .custom-checkbox-toggle .custom-control-input:checked~.custom-control-label:after {
      right:0;
      left:1.5rem;
      background-color:#fff
     }
      .flatpickr-input[readonly] {
      background-color:#edf0f2
     }
      .flatpickr-wrapper {
      display:block
     }
      .flatpickr-hidden-input {
      visibility:hidden;
      height:0
     }
      .chart {
      position:relative;
      height:300px
     }
      .chart-legend {
      display:flex;
      margin-top:2.5rem;
      white-space:nowrap;
      justify-content:center
     }
      .chart-legend-item {
      display:flex;
      align-items:center;
      justify-content:start
     }
      .chart-legend:not(.chart-legend--vertical) .chart-legend-item+.chart-legend-item {
      margin-left:1rem
     }
      .chart-legend--vertical {
      flex-direction:column
     }
      .chart-legend-indicator {
      display:block;
      width:.5rem;
      height:.5rem;
      margin-right:1rem;
      border-radius:50%
     }
      #chart-tooltip {
      z-index:0;
      pointer-events:none
     }
      #chart-tooltip .arrow {
      top:100%;
      left:50%;
      -webkit-transform:translateX(-50%) translateX(-.5rem);
      transform:translateX(-50%) translateX(-.5rem)
     }
      .popover-header {
      border-bottom:0
     }
      .popover-body-label,
      .popover-body-value {
      margin-left:.25rem
     }
      .popover-body-indicator {
      display:inline-block;
      width:.5rem;
      height:.5rem;
      border-radius:50%
     }
      .avatar {
      font-size:1rem;
      display:inline-block;
      width:3rem;
      height:3rem;
      position:relative;
      z-index:0
     }
      .avatar-img {
      width:100%;
      height:100%;
      -o-object-fit:cover;
      object-fit:cover
     }
      .avatar-offline:after,
      .avatar-offline:before,
      .avatar-online:after,
      .avatar-online:before {
      position:absolute;
      right:5%;
      bottom:5%;
      width:20%;
      height:20%;
      content:"";
      border-radius:50%
     }
      .avatar-offline:before,
      .avatar-online:before {
      width:22%;
      height:22%;
      right:4%;
      bottom:4%;
      background-color:#fff
     }
      .avatar-online:after {
      background-color:#77c13a
     }
      .avatar-offline:after,
      .avatar-title {
      background-color:#818a91
     }
      .avatar-title {
      display:flex;
      width:100%;
      height:100%;
      color:#fff;
      align-items:center;
      justify-content:center
     }
      .avatar-xl,
      .avatar-xxl {
      font-size:1.70833rem;
      width:5.125rem;
      height:5.125rem
     }
      .avatar-lg {
      font-size:1.33333rem;
      width:4rem;
      height:4rem
     }
      .avatar-sm {
      width:2.5rem;
      height:2.5rem
     }
      .avatar-xs {
      font-size:.54167rem;
      width:1.625rem;
      height:1.625rem
     }
     @media (min-width:768px) {
       .avatar-xxl {
       font-size:2.66667rem;
       width:8rem;
       height:8rem
      }
     }
      .avatar.avatar-4by3 {
      width:4rem
     }
      .avatar-xxl.avatar-4by3 {
      width:10.66667rem
     }
      .avatar-xl.avatar-4by3 {
      width:6.83333rem
     }
      .avatar-lg.avatar-4by3 {
      width:5.33333rem
     }
      .avatar-group {
      display:inline-flex
     }
      .avatar-group .avatar:hover {
      z-index:1
     }
      .avatar-group .avatar-img,
      .avatar-group .avatar-title {
      border:2px solid #fff
     }
      .avatar-group .avatar+.avatar {
      margin-left:-.75rem
     }
      .avatar-group .avatar-lg+.avatar-lg {
      margin-left:-1rem
     }
      .avatar-group .avatar-xl+.avatar-xl {
      margin-left:-1.28125rem
     }
      .avatar-group .avatar-xxl+.avatar-xxl {
      margin-left:-2rem
     }
      .avatar-group .avatar-sm+.avatar-sm {
      margin-left:-.625rem
     }
      .avatar-group .avatar-xs+.avatar-xs {
      margin-left:-.40625rem
     }
      .avatar-list>.avatar,
      .avatar-list>.avatar-group {
      margin-bottom:.75rem;
      margin-left:.5rem
     }
      .is-loading {
      position:relative;
      color:transparent!important
     }
      .is-loading:after,
      .loader {
      display:block;
      width:1.5rem;
      height:1.5rem;
      -webkit-animation:is-loading 1s linear infinite;
      animation:is-loading 1s linear infinite;
      border:3px solid #303840;
      border-bottom-color:transparent;
      border-radius:50%;
      background:transparent
     }
      .is-loading-sm:after,
      .loader-sm {
      width:1rem;
      height:1rem;
      border-width:2px
     }
      .is-loading-lg:after,
      .loader-lg {
      width:2rem;
      height:2rem;
      border-width:5px
     }
      .is-loading>* {
      opacity:0!important
     }
      .is-loading:after {
      position:absolute;
      top:calc(50% - .75rem);
      left:calc(50% - .75rem);
      content:""
     }
      .is-loading-sm:after {
      top:calc(50% - .5rem);
      left:calc(50% - .5rem)
     }
      .is-loading-lg:after {
      top:calc(50% - 1rem);
      left:calc(50% - 1rem)
     }
      .btn-outline-primary.is-loading:after,
      .is-loading-primary:after,
      .loader-primary {
      border-color:#2c84dd #2c84dd transparent
     }
      .btn-primary.is-loading:after {
      border-color:#fff #fff transparent
     }
      .btn-outline-secondary.is-loading:after,
      .is-loading-secondary:after,
      .loader-secondary {
      border-color:#868e96 #868e96 transparent
     }
      .btn-secondary.is-loading:after {
      border-color:#fff #fff transparent
     }
      .btn-outline-success.is-loading:after,
      .is-loading-success:after,
      .loader-success {
      border-color:#77c13a #77c13a transparent
     }
      .btn-success.is-loading:after {
      border-color:#212529 #212529 transparent
     }
      .btn-outline-info.is-loading:after,
      .is-loading-info:after,
      .loader-info {
      border-color:#17a2b8 #17a2b8 transparent
     }
      .btn-info.is-loading:after {
      border-color:#fff #fff transparent
     }
      .btn-outline-warning.is-loading:after,
      .is-loading-warning:after,
      .loader-warning {
      border-color:#f98437 #f98437 transparent
     }
      .btn-warning.is-loading:after {
      border-color:#212529 #212529 transparent
     }
      .btn-outline-danger.is-loading:after,
      .is-loading-danger:after,
      .loader-danger {
      border-color:#d9534f #d9534f transparent
     }
      .btn-danger.is-loading:after {
      border-color:#fff #fff transparent
     }
      .btn-outline-light.is-loading:after,
      .is-loading-light:after,
      .loader-light {
      border-color:#f8f9fa #f8f9fa transparent
     }
      .btn-light.is-loading:after {
      border-color:#212529 #212529 transparent
     }
      .btn-outline-dark.is-loading:after,
      .is-loading-dark:after,
      .loader-dark {
      border-color:#1d2126 #1d2126 transparent
     }
      .btn-dark.is-loading:after {
      border-color:#fff #fff transparent
     }
      .btn-outline-accent.is-loading:after,
      .is-loading-accent:after,
      .loader-accent {
      border-color:#ed0b4c #ed0b4c transparent
     }
      .btn-accent.is-loading:after {
      border-color:#fff #fff transparent
     }
      .btn-outline-primary-light.is-loading:after,
      .is-loading-primary-light:after,
      .loader-primary-light {
      border-color:#9cf #9cf transparent
     }
      .btn-primary-light.is-loading:after {
      border-color:#212529 #212529 transparent
     }
     @-webkit-keyframes is-loading {
      0% {
       -webkit-transform:rotate(0deg);
       transform:rotate(0deg)
      }
      to {
       -webkit-transform:rotate(1turn);
       transform:rotate(1turn)
      }
     }
     @keyframes  is-loading {
      0% {
       -webkit-transform:rotate(0deg);
       transform:rotate(0deg)
      }
      to {
       -webkit-transform:rotate(1turn);
       transform:rotate(1turn)
      }
     }
      .loader-list {
      display:flex;
      align-items:center
     }
      .loader-list>.loader {
      margin-bottom:.75rem;
      margin-left:.5rem
     }
      .corner-ribbon {
      margin:0;
      text-align:center;
      white-space:nowrap;
      position:absolute;
      overflow:hidden;
      font-weight:500;
      box-sizing:border-box
     }
      .corner-ribbon--default-left-top {
      -webkit-transform-origin:100% 100%;
      transform-origin:100% 100%;
      height:30px;
      width:100px;
      -webkit-transform:rotate(-45deg);
      transform:rotate(-45deg);
      padding-right:-30px;
      padding-left:-29px;
      line-height:30px;
      left:-30px;
      top:-30px
     }
      .corner-ribbon--default-left-bottom {
      -webkit-transform-origin:100% 0;
      transform-origin:100% 0;
      -webkit-transform:rotate(45deg);
      transform:rotate(45deg);
      left:-30px;
      bottom:-30px
     }
      .corner-ribbon--default-left-bottom,
      .corner-ribbon--default-right-top {
      height:30px;
      width:100px;
      padding-right:31px;
      padding-left:30px;
      line-height:30px
     }
      .corner-ribbon--default-right-top {
      -webkit-transform-origin:0 100%;
      transform-origin:0 100%;
      -webkit-transform:rotate(45deg);
      transform:rotate(45deg);
      right:-30px;
      top:-30px
     }
      .corner-ribbon--default-right-bottom {
      -webkit-transform-origin:0 0;
      transform-origin:0 0;
      height:30px;
      width:100px;
      -webkit-transform:rotate(-45deg);
      transform:rotate(-45deg);
      padding-right:-30px;
      padding-left:-29px;
      line-height:30px;
      right:-30px;
      bottom:-30px
     }
      .corner-ribbon--fixed {
      position:fixed
     }
      .corner-ribbon--shadow {
      box-shadow:0 0 3px rgba(0,0,0,.3)
     }
      .corner-ribbon--primary {
      color:#fff;
      background-color:#2c84dd
     }
      .corner-ribbon--success {
      color:#fff;
      background-color:#77c13a
     }
      .accordion {
      display:flex;
      flex-direction:column;
      padding-left:0;
      margin-bottom:1.5rem
     }
      .accordion__item {
      position:relative;
      display:block
     }
      .accordion__item:not(:last-child) {
      margin-bottom:-1px;
      border-bottom:1px solid #ebeff2
     }
      .accordion__item:first-child {
      border-top-left-radius:.25rem;
      border-top-right-radius:.25rem
     }
      .accordion__item:last-child {
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .accordion__item:focus,
      .accordion__item:hover {
      z-index:1;
      text-decoration:none
     }
      .accordion__toggle {
      padding:.75rem 0;
      display:flex;
      align-items:center;
      width:100%;
      color:#303840;
      font-weight:500
     }
      .accordion__toggle-icon {
      -webkit-transform:rotate(0);
      transform:rotate(0)
     }
      .accordion__item.open .accordion__toggle-icon {
      -webkit-transform:rotate(-180deg);
      transform:rotate(-180deg)
     }
      .accordion__menu-link {
      display:flex;
      align-items:center;
      width:100%;
      color:rgba(48,56,64,.7);
      padding:.5rem 0;
      font-size:13px;
      line-height:1.5rem
     }
      .accordion__menu-link:not(:last-child) {
      margin-bottom:-1px;
      border-bottom:1px solid #ebeff2
     }
      .accordion__menu-link:focus,
      .accordion__menu-link:hover {
      z-index:1
     }
      .accordion__menu-link.active {
      color:#303840;
      font-weight:500
     }
      .accordion__menu-link a {
      color:inherit
     }
      .accordion__submenu {
      padding:.5rem 0;
      border-bottom-right-radius:.25rem;
      border-bottom-left-radius:.25rem
     }
      .accordion__submenu a {
      display:flex;
      align-items:center;
      width:100%;
      font-size:13px;
      padding:0 1rem;
      line-height:1.5rem
     }
      .accordion__submenu a.active {
      font-weight:500;
      color:#303840
     }
      .accordion--boxed .accordion__toggle {
      padding:.75rem 1rem .75rem 1.5rem
     }
      .accordion--boxed .accordion__menu-link {
      padding:.5rem 1rem .5rem 1.5rem
     }
      .list-group-item.active {
      position:relative;
      font-weight:500
     }
      .list-group-item.active:after {
      content:" ";
      width:4px;
      top:0;
      left:0;
      bottom:0;
      background-color:#2c84dd;
      display:block;
      position:absolute
     }
      .card-featured-path,
      .card-featured-path__content {
      display:block;
      position:relative
     }
      .card-featured-path__content {
      overflow:hidden;
      border-radius:.25rem;
      -webkit-transform:translateZ(0);
      transform:translateZ(0)
     }
      .card-featured-path .overlay__action .material-icons {
      font-size:4rem
     }
      .card-featured-path .overlay__content {
      background-color:rgba(44,132,221,.5);
      color:#fff;
      pointer-events:none;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center
     }
      .card-featured-path.overlay--show .overlay__content {
      background-color:rgba(44,132,221,.95)
     }
      .card-featured-path .card-title {
      line-height:1.25;
      margin-bottom:0
     }
      .card-course,
      .card-path,
      .course-list-item {
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      user-select:none
     }
      .card-course .overlay__action .material-icons,
      .card-path .overlay__action .material-icons,
      .course-list-item .overlay__action .material-icons {
      font-size:4rem
     }
      .card-course .overlay__content:not(.overlay__content-transparent),
      .card-path .overlay__content:not(.overlay__content-transparent),
      .course-list-item .overlay__content:not(.overlay__content-transparent) {
      background-color:rgba(44,132,221,.5);
      color:#fff;
      pointer-events:none
     }
      .card-course.overlay--show .overlay__content,
      .card-path.overlay--show .overlay__content,
      .course-list-item.overlay--show .overlay__content {
      background-color:rgba(44,132,221,.95)
     }
      .card-course.overlay--show .overlay__action {
      -webkit-transform:translate3d(0,-30px,0);
      transform:translate3d(0,-30px,0)
     }
      .card-course .card-title {
      line-height:1.25;
      margin-bottom:0
     }
      .card-course .card-body {
      padding:.625rem .75rem
     }
      .card-course__icon-favorite {
      margin-top:-2px
     }
      .card-course[data-opened] {
      box-shadow:0 3px 5px -1px rgba(48,56,64,.2),0 5px 8px 0 rgba(48,56,64,.14),0 1px 14px 0 rgba(48,56,64,.12)
     }
      .card-path .card-title {
      line-height:1.25;
      margin-bottom:0
     }
      .card-path .card-body {
      padding:.5rem
     }
      .card-path[data-opened] {
      box-shadow:0 3px 5px -1px rgba(48,56,64,.2),0 5px 8px 0 rgba(48,56,64,.14),0 1px 14px 0 rgba(48,56,64,.12)
     }
      .course-list-item .media__thumbnail {
      margin-bottom:0
     }
     @media (min-width:576px) {
       .course-list-item .media__thumbnail {
       width:200px
      }
     }
      .course-list-item .card-body {
      padding:1rem
     }
      .course-list-item__excerpt {
      max-height:3rem;
      overflow:hidden;
      position:relative
     }
      .popover-course .card-title {
      line-height:1.25
     }
      .list-quiz {
      list-style:none;
      margin-bottom:24px
     }
     @media (max-width:767.98px) {
       .list-quiz {
       padding:0
      }
     }
      .list-quiz .list-quiz-item {
      margin-bottom:10px
     }
      .list-quiz .list-quiz-badge {
      border-radius:50%!important;
      padding:0;
      display:inline-block;
      text-align:center;
      width:34px;
      height:34px;
      line-height:34px;
      font-size:16px;
      border:1px solid #ebeff2;
      background:#f6f6f6;
      color:#303840
     }
      .list-quiz .list-quiz-badge .material-icons {
      font-size:1.25rem
     }
      .list-quiz .list-quiz-text {
      margin-left:.625rem;
      font-size:18px;
      padding:3px 6px;
      display:inline-block
     }
      .list-quiz .list-quiz-text.active {
      background:#868e96
     }
      .list-quiz .list-quiz-badge-success {
      background:#77c13a;
      border-color:#77c13a;
      color:#fff
     }
      .list-quiz .list-quiz-badge-error {
      background:#d9534f;
      border-color:#d9534f;
      color:#fff
     }
      .dropdown-notifications .dropdown-menu {
      min-width:300px;
      padding:0
     }
      .dropdown-notifications .dropdown-menu .list-group {
      position:relative;
      overflow:hidden
     }
      .dropdown-notifications .dropdown-menu .list-group-item {
      display:flex;
      flex-direction:column;
      border-color:rgba(48,56,64,.05)
     }
      .dropdown-notifications .dropdown-menu .unread-indicator {
      display:inline-block;
      content:"";
      width:.5rem;
      height:.5rem;
      border-radius:100%
     }
      .dropdown-notifications .dropdown-toggle {
      display:flex
     }
      .dropdown-notifications .dropdown-toggle .material-icons {
      font-size:2rem
     }
      .dropdown-notifications .badge-notifications {
      position:relative;
      display:block;
      margin-left:-.75rem
     }
      .navbar-dark .dropdown-notifications .badge-notifications {
      border:1px solid #1d2126
     }
      .navbar-light .dropdown-notifications .badge-notifications {
      border:1px solid #fff
     }
      [data-target="#filters-drawer"].active .material-icons {
      content:"tune"
     }
      .mdk-drawer-layout #filters-drawer[data-persistent] .mdk-drawer__content {
      position:absolute
     }
     @media (max-width:767.98px) {
       .mdk-drawer-layout #filters-drawer .mdk-drawer__content {
       background:#f5f7fa
      }
       .mdk-drawer-layout #filters-drawer .mdk-drawer__inner {
       height:100%
      }
     }
      .mdk-drawer-layout .filter-section {
      box-shadow:0 2px 1px -1px rgba(48,56,64,.2),0 1px 1px 0 rgba(48,56,64,.14),0 1px 3px 0 rgba(48,56,64,.12);
      background-color:#fff
     }
      .text-scramble__dud {
      opacity:.5;
      font-weight:300
     }
      .course-nav {
      display:flex;
      justify-content:space-between;
      width:100%;
      margin-bottom:2rem;
      position:relative;
      z-index:0
     }
      .course-nav:before {
      content:"";
      position:absolute;
      left:0;
      right:0;
      top:calc(50% - 1px);
      height:2px;
      background-color:#fff;
      opacity:.2;
      z-index:-1
     }
      .course-nav a {
      display:flex;
      align-items:center;
      justify-content:center;
      width:2rem;
      height:2rem;
      border-radius:100px;
      background-color:#f5f7fa
     }
      .course-nav a .material-icons {
      font-size:1rem;
      color:rgba(48,56,64,.7)
     }
      .course-nav .active {
      position:relative;
      z-index:0
     }
      .course-nav .active:before {
      width:calc(100% + 4px);
      height:calc(100% + 4px);
      left:-2px;
      top:-2px;
      background-color:hsla(0,0%,100%,.2);
      z-index:-1;
      position:absolute;
      content:"";
      border-radius:100px
     }
      .course-nav .active .material-icons {
      color:#ed0b4c
     }
      .player {
      background-color:rgba(48,56,64,.8);
      height:100%;
      display:flex;
      align-items:center;
      justify-content:center;
      position:relative;
      cursor:pointer;
      z-index:0
     }
      .player__image {
      position:absolute;
      z-index:-1;
      left:0;
      top:0;
      right:0;
      bottom:0;
      background-image:var(--player-image);
      background-size:100%;
      background-repeat:no-repeat;
      background-position:bottom
     }
     @media (min-width:768px) {
       .player__image {
       left:2rem;
       top:2rem;
       bottom:2rem;
       right:2rem
      }
     }
      .player__play {
      background-color:#ed0b4c;
      width:3rem;
      height:3rem;
      padding:0;
      display:flex;
      align-items:center;
      justify-content:center;
      border-radius:.25rem
     }
      .player__play .material-icons {
      font-size:2rem;
      color:#fff
     }
     @media (min-width:768px) {
       .home-macbook {
       margin-left:-37px
      }
     }
     @media (max-width:767.98px) {
       .home-macbook {
       max-width:100%;
       height:auto
      }
     }
      .courses-modal .modal-content {
      position:relative;
      overflow:hidden;
      box-shadow:0 6px 6px -3px rgba(0,0,0,.2),0 10px 14px 1px rgba(0,0,0,.14),0 4px 18px 3px rgba(0,0,0,.12)
     }
      .courses-modal .modal-body {
      padding:0;
      position:relative;
      overflow:hidden
     }
      .courses-modal .close {
      position:absolute;
      top:1rem;
      right:1rem
     }
      .courses-modal .tab-content .nav-link {
      color:rgba(48,56,64,.7)
     }
      .courses-modal .nav-link.active,
      .courses-modal .tab-content .nav-link:hover {
      color:#303840
     }
      .courses-modal .menu .nav-link {
      font-weight:500;
      padding:.5rem 1.25rem;
      color:rgba(48,56,64,.7)
     }
      .courses-modal .menu .active {
      color:rgba(48,56,64,.7);
      background-color:#fff;
      position:relative
     }
      .courses-modal .menu .active:after {
      content:" ";
      width:4px;
      top:0;
      left:0;
      bottom:0;
      background-color:#2c84dd;
      display:block;
      position:absolute
     }
     @media (min-width:576px) {
       .courses-modal .modal-dialog {
       max-width:calc(800px - 2rem);
       margin-top:64px
      }
     }
      .search-form-courses {
      width:344px
     }
   }


.col-form-label, .col-form-label-lg{
  padding-top: calc(1.8rem + 1px);
padding-bottom: calc(.5rem + 1px);
line-height: 1.5;
color: black;
}
       </style>

       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>


 <section id="gallery-view" >
   <div class="">
               <!--  Top bar nav -->

               <!--  Page contatn starts her-->
               <div class="uk-section uk-section-primary tm-hero" style="background: #1a91a1; padding-top: 100px;">
                   <div class="uk-container-small uk-text-center uk-margin-auto uk-padding-small uk-light">



                            <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left" style="margin-left: 230px;">
                        <img src="<?php echo e(asset('graduation.png')); ?>" class="mr-md-32pt mb-32pt mb-md-0" alt="student" style="width: 110px;">
                        <div class="flex mb-32pt mb-md-0" style="margin-left: 16px;">
                            <h2 class="text-white mb-0" style="text-transform: uppercase;"><?php echo e(auth()->user()->name); ?> <?php echo e(auth()->user()->surname); ?></h2>
                          <a class="btn btn-outline-white" href="/view/course/" style="margin-top: 20px; padding-top: .5rem;
padding-bottom: .5rem;"> Edit Account </a>
                        </div>

                    </div>


                   </div>
               </div>
               <button class="uk-button uk-hidden@m" type="button" uk-toggle="target: #tabs-moible; cls: tabs-moible" style="position: absolute;margin-top: -52px; margin-left: 32px;"> Open subcatagory </button>
               <ul class="uk-subnav uk-flex-center uk-background-primary tabs-moible-hidden uk-sticky" style="background: #1a91a1;" id="tabs-moible" uk-sticky="animation: uk-animation-slide-top">
                   <li>
                       <a href=""> My Courses </a>
                   </li>
                   <li class="">
                       <a href="/w/courses"> Browse Courses </a>
                   </li>
                   <li class="uk-active">
                       <a href="/u/profile"> Profile </a>
                   </li>
                   <li class="">
                       <a href="/u/settings"> Settings</a>
                   </li>
                   <li class="">
                       <a href="/u/messages"> Messages </a>
                   </li>

               </ul><div class="uk-sticky-placeholder" style="height: 54px; margin: -53px 10px 30px;" hidden=""></div>
                  <div class="uk-container">
                    <div class="container page__container">
                  <form action="">
                      <div class="row">
                          <div class="col-lg-9" >

                            <div class="page-section">
                              <h4>Profile &amp; Privacy</h4>
                              <div class="list-group list-group-form">
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Your photo</label>
                                          <div class="col-sm-9 media align-items-center">
                                              <a href="#" class="media-left mr-16pt">
                                                  <img src="<?php echo e(asset('user/')); ?>/<?php echo e(auth()->user()->avatar); ?>" alt="people" class="rounded-circle" width="56" style="width: 40px;">
                                              </a>
                                              <div class="media-body">
                                                  <div class="custom-file">
                                                      <input type="file"  class="custom-file-input" id="inputGroupFile01">
                                                      <label class="custom-file-label" id="fields" style="z-index: 1;
height: calc(2.5rem + 2px); position: absolute;
top: 0;
right: 0;
padding: .5rem .75rem;" for="inputGroupFile01">Choose file</label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Profile Name</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Profile Surname</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Cell Number</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">ID Number</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Your Gender</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Your Bio</label>
                                          <div class="col-sm-9">
                                              <textarea rows="3" id="fields" class="form-control" placeholder="About you ..."></textarea>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Your Age</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row mb-0">
                                          <label class="col-form-label col-sm-3">Your Email</label>
                                          <div class="col-sm-9">
                                              <input type="text" id="fields" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                                              <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="list-group-item">
                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" id="fields" class="custom-control-input" checked="" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Display your real name on your profile</label>
                                          <small class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" id="fields" class="custom-control-input" checked="" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">Allow everyone to see your profile</label>
                                          <small class="form-text text-muted">If unchecked, your profile will be private and no one except you will be able to view it.</small>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          </div>

                          <div class="col-lg-3 page-nav">
                              <div class="page-section pt-lg-112pt">
                                  <nav class="nav page-nav__menu">
                                      <a class="nav-link" href="student-edit-account.html">Basic Information</a>
                                      <a class="nav-link active" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                                      <a class="nav-link" href="student-edit-account-notifications.html">Email Notifications</a>
                                      <a class="nav-link" href="student-edit-account-password.html">Change Password</a>
                                  </nav>
                                  <div class="page-nav__content">
                                      <button type="submit" class="btn btn-accent">Save changes</button>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </form>
              </div>

               </div>
             </div>


           </div>

 </section>








 <section id="idsec" style="padding-top: 70px;">
  <div class="beng" style="">
    <div class="info-color-dark text-center py-4">
      <!--Newsletter-->
      <a id="footer-link-newsletter" href="/docs/jquery/newsletter/" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Login
        <i class="fas fa fa-sign-in white-text ml-2"> </i>
      </a>
      <!--Newsletter-->
      <a id="footer-link-affiliate" href="/mdb-affiliate-program/" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Signup
        <i class="fas  far fa-address-card white-text ml-2"> </i>
      </a>
      <!--Contact-->

      <a id="footer-link-affiliate" href="/mdb-affiliate-program/" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Available Courses
        <i class="fas fab fa-discourse white-text ml-2"> </i>
      </a>
      <!--GitHub-->

    </div>
 </div>
 </section>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>