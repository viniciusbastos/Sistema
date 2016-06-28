<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel UX Basic Template (AMD)</title>
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet">
    <!-- Require.js - AMD loader -->
    <script src="//cdn.jsdelivr.net/requirejs/2.1.11/require.js"></script>
    <script>
      requirejs.config({
        paths: {
          'bootstrap': '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min',
          'fuelux': '//www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min',
          'jquery': '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery',
          // Moment.js is optional
          'moment': '//cdn.jsdelivr.net/momentjs/2.6.0/lang-all.min'
        },
        // Bootstrap is a "browser globals" script :-(
        shim: { 'bootstrap': { deps: ['jquery'] } }
      });
      // Require all.js or include individual files as needed
      require(['jquery', 'bootstrap', 'fuelux'], function($){});
    </script>
  </head>
  <body class="fuelux">
  <div>
    <ul class="tree" role="tree" id="myTree">
    <li class="tree-branch hide" data-template="treebranch" role="treeitem" aria-expanded="false">
      <div class="tree-branch-header">
        <button type="button" class="tree-branch-name">
          <span class="glyphicon icon-caret glyphicon-play"></span>
          <span class="glyphicon icon-folder glyphicon-folder-close"></span>
          <span class="tree-label"></span>
        </button>
      </div>
      <ul class="tree-branch-children" role="group"></ul>
      <div class="tree-loader" role="alert">Loading...</div>
    </li>
    <li class="tree-item hide" data-template="treeitem" role="treeitem">
      <button type="button" class="tree-item-name">
        <span class="glyphicon icon-item fueluxicon-bullet"></span>
        <span class="tree-label"></span>
      </button>
    </li>
  </ul>
  
    </div>
  
  </body>
</html>