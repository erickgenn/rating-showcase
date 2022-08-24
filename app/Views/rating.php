<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Rating | <?php echo $major['name']; ?></title>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/index/assets/images/favicon.png" type="image/png">
  <link rel="stylesheet" href="/rating_page/dist/style.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
  </style>
</head>

<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <?php if (session()->getFlashdata('rating_successful')) : ?>
    <script>
      swal({
        position: 'top-end',
        icon: 'success',
        title: 'Thank You For Your Rating!',
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php endif; ?>
  <!-- partial:index.partial.html -->
  <div style="padding-bottom: 1px;">
    <a href="<?php echo base_url("/home") ?>"><img src="/rating_page/dist/return.png" style="position:relative; max-height: 39px; padding: 10px 0px 0px 17px"></a>
  </div>
  <svg class="svg-icon__sprite">
    <defs>
      <symbol id="triangle" viewbox="0 0 32 32">
        <title>Triangle icon.</title>
        <desc>For interactions.</desc>
        <g stroke-width="3" stroke-linecap="round">
          <line x1="6" y1="6" x2="26" y2="6"></line>
          <line x1="6" y1="6" x2="16" y2="26"></line>
          <line x1="26" y1="6" x2="16" y2="26"></line>
        </g>
      </symbol>
      <symbol id="reload" viewbox="0 0 32 32">
        <title>Reload icon.</title>
        <desc>For interactions.</desc>
        <path d="M14.5 1c1.9 0 3.7.4 5.5 1.1 1.8.7 3.4 1.8 4.8 3.2 0 0 1.4 1.4 4.3 4.2V3.9c0-.4.1-.7.4-1 .3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1v8.7c0 .4-.1.7-.4 1-.3.3-.6.4-1 .4h-8.7c-.4 0-.7-.1-1-.4-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4h4.9c-2.1-2-3.4-3.3-4-3.9-1.1-1.1-2.4-2-3.9-2.6-1.4-.6-2.8-.9-4.4-.9s-3 .3-4.4.9c-1.3.6-2.6 1.5-3.7 2.6s-2 2.4-2.6 3.9c-.6 1.4-.9 2.8-.9 4.4s.3 3 .9 4.4c.6 1.4 1.4 2.7 2.6 3.9 1.1 1.1 2.4 2 3.9 2.6 1.4.6 2.8.9 4.4.9s3-.3 4.4-.9c1.4-.6 2.7-1.4 3.9-2.6 1.3-1.3 2.2-2.7 2.8-4.4.1-.4.4-.7.7-.8.4-.2.7-.2 1.1-.1.4.1.7.4.8.8.2.4.2.7.1 1.1-.3 1-.8 2-1.4 2.9s-1.3 1.8-2 2.5c-1.4 1.4-3 2.5-4.8 3.2-1.8.7-3.6 1.1-5.5 1.1s-3.7-.4-5.5-1.1c-1.8-.7-3.4-1.8-4.8-3.2s-2.5-3-3.2-4.8C.4 19.3 0 17.4 0 15.5s.4-3.7 1.1-5.5c.7-1.8 1.8-3.4 3.2-4.8s3-2.5 4.8-3.2c1.7-.6 3.6-1 5.4-1z"></path>
      </symbol>
      <symbol id="dot-inverted" viewbox="0 0 32 32">
        <title>Dot icon.</title>
        <desc>For interactions.</desc>
        <circle cx="16" cy="16" r="10" fill="none" stroke-width="9"></circle>
      </symbol>
      <symbol id="dot" viewbox="0 0 32 32">
        <title>Dot icon.</title>
        <desc>For interactions.</desc>
        <circle cx="16" cy="16" r="14" fill="none" stroke-width="3"></circle>
        <circle cx="16" cy="16" r="4" fill="none" stroke-width="3"></circle>
      </symbol>
      <symbol id="arrow" viewbox="0 0 32 32">
        <title>Arrow icon.</title>
        <desc>For interactions.</desc>
        <path d="M12.8 3c.4 0 .8.2 1.1.5s.5.7.5 1.1c0 .5-.2.8-.5 1.1l-8.5 8.5h24.9c.4 0 .8.2 1.1.5.3.3.5.7.5 1.1s-.2.8-.5 1.1c-.3.3-.7.5-1.1.5H5.5l8.5 8.5c.3.3.5.7.5 1.1 0 .4-.2.8-.5 1.1s-.7.5-1.1.5c-.4 0-.8-.2-1.1-.5L.5 17c-.3-.3-.5-.7-.5-1.1s.2-.8.5-1.1L11.7 3.5c.3-.3.7-.5 1.1-.5z"></path>
      </symbol>
      <symbol id="eye" viewbox="0 0 32 32">
        <title>Eye icon.</title>
        <desc>For toggleable elements.</desc>
        <path d="M16 4c1.5 0 2.9.2 4.2.7 1.4.4 2.6 1 3.6 1.7s2 1.5 2.9 2.3 1.7 1.7 2.3 2.6 1.2 1.6 1.6 2.3c.5.7.8 1.3 1 1.7l.4.7c0 .1-.1.2-.2.4s-.3.5-.6 1.1-.6 1.1-1 1.6-.8 1.2-1.4 1.9c-.6.7-1.2 1.4-1.8 2s-1.3 1.2-2.2 1.9c-.8.6-1.7 1.2-2.6 1.6s-1.9.8-3 1.1c-.9.3-2.1.4-3.2.4-1.5 0-2.9-.2-4.2-.7s-2.6-1-3.6-1.7-2-1.5-2.9-2.3-1.7-1.7-2.3-2.5-1.2-1.6-1.6-2.3-.8-1.3-1-1.7l-.4-.7c0-.1.1-.2.2-.4s.3-.5.6-1.1.6-1.1 1-1.6.8-1.2 1.4-1.9 1.2-1.4 1.8-2 1.3-1.2 2.2-1.9S8.8 6 9.7 5.5c.9-.4 1.9-.8 3-1.1S14.9 4 16 4zm0 2.7c-1 0-1.9.1-2.9.4s-1.8.6-2.5 1c-.8.4-1.5.8-2.2 1.4-.7.6-1.3 1.1-1.9 1.7S5.5 12.4 5 13s-.9 1.2-1.2 1.7c-.3.5-.6.9-.8 1.4.3.5.5.9.8 1.4s.7 1 1.2 1.6l1.5 1.8s1.1 1.1 1.9 1.7c.7.6 1.5 1.1 2.2 1.5.8.4 1.6.7 2.5 1s1.9.4 2.9.4 1.9-.1 2.9-.4c.9-.3 1.8-.6 2.5-1s1.5-.9 2.2-1.5c.7-.6 1.3-1.1 1.9-1.7l1.5-1.8 1.2-1.6c.3-.5.6-.9.8-1.4-.3-.5-.5-.9-.8-1.4-.3-.5-.7-1-1.2-1.6l-1.5-1.8c-.5-.6-1.1-1.1-1.9-1.7-.7-.6-1.5-1.1-2.2-1.5-.8-.4-1.6-.7-2.5-1S17 6.7 16 6.7zm0 4c1.5 0 2.7.5 3.8 1.6 1 1 1.6 2.3 1.6 3.8s-.5 2.7-1.6 3.8c-1 1-2.3 1.6-3.8 1.6s-2.7-.5-3.8-1.6c-1-1-1.6-2.3-1.6-3.8s.5-2.7 1.6-3.8 2.3-1.6 3.8-1.6zm0 2.6c-.7 0-1.4.3-1.9.8s-.8 1.1-.8 1.9.3 1.4.8 1.9 1.1.8 1.9.8 1.4-.3 1.9-.8.8-1.1.8-1.9-.3-1.4-.8-1.9-1.2-.8-1.9-.8z"></path>
      </symbol>
      <symbol id="firefox" viewbox="0 0 32 32">
        <title>Firefox icon.</title>
        <desc>Support for this browser.</desc>
        <path d="M31.8 10.6l-.4 2.4s-.5-4.4-1.2-6c-1-2.5-1.4-2.5-1.4-2.5.7 1.7.5 2.6.5 2.6S28.1 3.9 25 2.9c-3.4-1.1-5.3-.8-5.5-.8h-.1.1s3.8.7 4.5 1.6c0 0-1.6 0-3.2.5-.1 0 5.9.7 7.1 6.7 0 0-.7-1.4-1.5-1.6.5 1.6.4 4.7-.1 6.2-.1.2-.1-.8-1.1-1.3.3 2.3 0 5.9-1.6 6.9-.1.1 1-3.6.2-2.2-4.4 6.8-9.6 3.1-12 1.5 1.2.3 3.5 0 4.5-.8 1.1-.8 1.7-1.3 2.3-1.2.6.1 1-.5.5-1s-1.6-1.2-3-.8c-1.1.3-2.4 1.4-4.3.3-1.5-.9-1.7-1.7-1.7-2.2 0-.2.1-.4.1-.5.2-.5.7-.6 1-.8.5.1.9.2 1.4.5v-.6c0-.1 0-.3-.1-.7 0-.3-.1-.6-.2-.9 0-.1.4-.4.8-.7.4-.3.8-.5 1.2-.8.5-.2.7-.3.7-.4l.1-.1c.2-.1.4-.4.5-.9v-.1-.2-.1c-.1-.1-.3-.2-1.1-.2h-1.4c-1 0-1.6-1-1.8-1.4.2-1.4 1-2.4 2.1-3 .2-.1-2.8 0-4.2 1.8-1.1-.4-2.2-.4-3.1-.2-.2 0-.4 0-.7-.1-.6-.5-1.5-1.6-1.6-2.8 0 0-1.9 1.4-1.6 5.4v.2c-.5.6-.7 1.2-.7 1.3-.5.9-.9 2.3-1.3 4.4 0 0 .3-.8.8-1.8-.4 1.2-.7 3-.5 5.8 0 0 0-.6.2-1.5.1 1.7.7 3.8 2.1 6.3 2.8 4.7 7 7.1 11.7 7.5.8.1 1.7.1 2.5 0h.2c1-.1 1.9-.2 2.9-.4 13.1-3.2 11.7-19.1 11.7-19.1z"></path>
      </symbol>
      <symbol id="chrome" viewbox="0 0 32 32">
        <title>Chrome icon.</title>
        <desc>Support for this browser.</desc>
        <path d="M8.2 14.1L3.7 6.3c2.9-3.6 7.4-6 12.4-6C21.9.3 27 3.4 29.7 8.1H16.1c-3.8 0-7 2.5-7.9 6zm13.6-3.7h9.1c.7 1.8 1.1 3.7 1.1 5.8 0 8.7-7 15.7-15.7 15.8l6.5-11.2c.9-1.3 1.4-2.9 1.4-4.6 0-2.3-.9-4.3-2.4-5.8zm-11.5 5.8c0-3.2 2.6-5.8 5.8-5.8s5.8 2.6 5.8 5.8-2.6 5.8-5.8 5.8-5.8-2.7-5.8-5.8zm8 7.8l-4.5 7.9C6.1 30.7.2 24.1.2 16.2c0-2.8.7-5.5 2-7.8l6.5 11.2c1.3 2.8 4.1 4.7 7.3 4.7.8 0 1.6-.1 2.3-.3z"></path>
      </symbol>
      <symbol id="safari" viewbox="0 0 32 32">
        <title>Safari icon.</title>
        <desc>Support for this browser.</desc>
        <path d="M16.1.3C7.3.3.2 7.4.2 16.2S7.3 32 16.1 32s15.8-7.1 15.8-15.8S24.8.3 16.1.3zM29.9 15v-.3.3zm-2.2-6.4l-.2-.3c.1.1.2.2.2.3zm-.8-1.1l-.1-.2s0 .1.1.2zm-2-2l-.2-.1c.1 0 .2.1.2.1zm-1-.8l-.3-.2c.1.1.2.2.3.2zm-6.3-2.3h-.3.3zm-2.7 0h-.3.3zM8.6 4.5l-.4.2c.1 0 .2-.1.4-.2zm-1.2.9l-.2.1c.1 0 .1-.1.2-.1zm-2 1.9l-.1.2c0-.1.1-.1.1-.2zm-.7 1l-.3.3.3-.3zm-2.4 6.3v0zm0 2.8v0zm2.1 6.3l.3.3-.3-.3zm.3.4l2.5-1.7-.3-.4-2.5 1.7C3.3 22 2.5 20 2.3 17.8l1.5-.1v-.5l-1.5.1v-.9h3v-.5h-3V15l1.5.1v-.5l-1.5-.1c.2-2.2 1-4.2 2.1-5.9l2.5 1.7.3-.4-2.5-1.6c.2-.3.3-.5.5-.7l1.1.9.3-.4-1.1-.9c.2-.2.4-.5.6-.7l2.1 2.1.4-.4-2.1-2 .6-.6.9 1.2.4-.3-.9-1.2c.2-.2.5-.4.7-.5l1.7 2.5.3-.3-1.6-2.5c1.7-1.1 3.7-1.9 5.9-2.1l.1 1.5h.5L15 2.3h.9v3h.5v-3h.9l-.1 1.5h.5l.1-1.5c2.2.2 4.2 1 5.9 2.1L21.9 7l.4.3L24 4.8c.2.2.5.3.7.5l-.9 1.1.4.3.9-1.1.6.6-.8.8-10.8 7.2L6.9 25l-.8.8-.6-.6 1.1-.9-.3-.4-1.1.9c-.2-.3-.3-.5-.5-.7zm.7.9c0-.1-.1-.1-.1-.2l.1.2zm1.8 1.8l.2.2-.2-.2zm1 .8l.3.2c-.1-.1-.2-.1-.3-.2zm6.3 2.3h.3c0 .1-.2.1-.3 0zm2.8.1h.3-.3zm6.3-2.2l.3-.2c-.1.1-.2.1-.3.2zm1.2-.8l.2-.1c-.1 0-.2 0-.2.1zm1.1-1zm.8-1l.1-.2c0 .1 0 .2-.1.2zm.3-.2l-1.1-.9-.3.4 1.1.9-.6.6-2.1-2.1-.4.4 2.1 2.1-.6.6-.9-1.2-.4.3.9 1.1c-.2.2-.5.4-.7.5L22.3 25l-.4.3 1.7 2.5c-1.7 1.1-3.7 1.9-5.9 2.1l-.1-1.5h-.5l.1 1.5h-.9v-3h-.5v3h-.9l.1-1.5h-.5l-.1 1.5c-2.2-.2-4.2-1-5.9-2.1l1.7-2.5-.4-.3-1.6 2.5c-.2-.2-.5-.3-.7-.5l.9-1.1-.4-.3-.9 1.1-.6-.6.8-.8 10.8-7.2 7.2-10.8.8-.8.6.6-1.1.9.3.4 1.1-.8c.2.2.4.5.5.7L25 9.9l.3.4 2.5-1.7c1.1 1.7 1.9 3.7 2.1 5.9l-1.5.1v.5l1.5-.1v.9h-3v.5h3v.9l-1.5-.1v.5l1.5.1c-.2 2.2-1 4.2-2.1 5.9L25.3 22l-.3.4 2.5 1.7c-.2.2-.4.4-.5.7zm2.9-7.4v.3-.3zm-2.2 6.3c-.1.1-.1.2-.2.3l.2-.3z"></path>
      </symbol>
      <symbol id="edge" viewbox="0 0 32 32">
        <title>Edge icon.</title>
        <desc>Support for this browser.</desc>
        <path d="M1.7 13.9C2.7 6.7 7.6.1 16.5 0c5.4.1 9.8 2.5 12.4 7.2 1.3 2.4 1.7 5 1.8 7.8v3.3H11c.1 8.1 12 7.8 17.1 4.3v6.6c-3 1.8-9.8 3.4-15 1.3-4.5-1.7-7.7-6.4-7.6-10.9-.3-5.9 2.8-9.8 7.5-12-1 1.2-1.8 2.6-2.2 5H22S22.7 6 15.7 6c-6.6.2-11.3 4-14 7.9z"></path>
      </symbol>
      <symbol id="explorer" viewbox="0 0 32 32">
        <title>iExplorer icon.</title>
        <desc>Support for this browser.</desc>
        <path d="M23.8 17.5H31c.1-.5.1-1 .1-1.5 0-2.5-.7-4.8-1.8-6.8 1.2-3.2 1.1-5.9-.4-7.5-1.5-1.5-5.6-1.3-10.2.8h-1C11.3 2.5 6 6.9 4.6 12.7c2-2.5 4.1-4.4 6.9-5.7-.3.2-1.7 1.7-2 2-7.3 7.3-9.7 16.9-7.2 19.4 1.9 1.9 5.3 1.6 9.3-.4 1.8.9 3.9 1.5 6.1 1.5 5.9 0 10.9-3.8 12.8-9.1h-7.3c-1 1.9-3 3.1-5.2 3.1s-4.2-1.3-5.2-3.1c-.4-.8-.7-1.8-.7-2.8l11.7-.1zM12 14c.2-3 2.6-5.4 5.7-5.4s5.5 2.4 5.7 5.4H12zM28.8 3.3c1 1 1 3 .1 5.3-1.5-2.3-3.7-4.1-6.3-5.1 2.8-1.2 5.1-1.4 6.2-.2zM4.2 27.9c-1.3-1.3-.9-4.1.8-7.4 1.1 3 3.1 5.4 5.7 7-2.9 1.4-5.3 1.6-6.5.4z"></path>
      </symbol>

      <symbol id="star" viewbox="0 0 32 32">
        <title>Star icon.</title>
        <desc>For ratings.</desc>
        <path d="M12.224 11.623L16 0l3.776 11.623H32l-9.888 6.865 3.776 11.417L16 22.668 6.112 29.85l3.776-11.362L0 11.623h12.224"></path>
      </symbol>
    </defs>
  </svg>
  <main class="flexy__item flexy--items-center flexy--justify-center flexy--column" style="padding-top: 0px;">
    <section class="section flexy__item flexy--column flexy--items-center">
      <form action="<?php echo base_url("/rating/process") ?>" method="POST">
        <header class="accessible-hide">
        </header>
        <article class="section__article flexy__item flexy--column flexy--items-center">
          <header class="header space--medium">
          </header>
          <!-- First Question -->
          <h1 style="font-family: Raleway; font-size:30px; color:black;"><b><?php echo strtoupper($major['name']); ?></b></h1>
          <br>
          <div>
            <p style="font-family: Raleway; font-size:20px;"><?php echo $question[0]['question1']; ?></p>
          </div>
          <br>
          <fieldset class="space--medium">
            <legend class="accessible-hide">Effect 3</legend>
            <div class="rating rating__fx--1 flexy__item flexy--reverse-row">
              <input type="radio" id="value-1-4" name="rating-1" value="5" />
              <label class="rating__label sparks" for="value-1-4" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-1-3" name="rating-1" value="4" style="font-size: 15px;" />
              <label class="rating__label" for="value-1-3" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-1-2" name="rating-1" value="3" style="font-size: 15px;" />
              <label class="rating__label" for="value-1-2" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-1-1" name="rating-1" value="2" style="font-size: 15px;" />
              <label class="rating__label" for="value-1-1" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-1-0" name="rating-1" checked="checked" value="1" style="font-size: 15px;" />
              <label class="rating__label" for="value-1-0" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <div class="rating__background"></div>
            </div>
          </fieldset>
          <!-- Second Question -->
          <div>
            <center>
              <p style="font-family: Raleway; font-size:20px;"><?php echo $question[0]['question2']; ?></p>
            </center>
          </div>
          <br>
          <fieldset class="space--medium" style="padding-bottom: 2px;">
            <legend class="accessible-hide">Effect 3</legend>
            <div class="rating rating__fx--1 flexy__item flexy--reverse-row" style="padding-bottom: 1px;">
              <input type="radio" id="value-2-4" name="rating-2" value="5" />
              <label class="rating__label sparks" for="value-2-4" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-2-3" name="rating-2" value="4" style="font-size: 15px;" />
              <label class="rating__label" for="value-2-3" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-2-2" name="rating-2" value="3" style="font-size: 15px;" />
              <label class="rating__label" for="value-2-2" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-2-1" name="rating-2" value="2" style="font-size: 15px;" />
              <label class="rating__label" for="value-2-1" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <input type="radio" id="value-2-0" name="rating-2" checked="checked" value="1" style="font-size: 15px;" />
              <label class="rating__label" for="value-2-0" style="font-size: 15px;">
                <svg class="rating__label__icon svg-icon fill--gray">
                  <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
              </label>
              <div class="rating__background"></div>
            </div>
            <input type="hidden" id="question_1">
            <input type="hidden" id="question_2">
          </fieldset>
          <center><button class="button-75" type="submit" role="button"><span class="text">Submit</span></button></center>
        </article>
        <br>
      </form>
    </section>
  </main>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg-min.js'></script>
  <script src="/rating_page/dist/script.js"></script>



</body>

</html>